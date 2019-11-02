	<?php
/*
* $Author ：LEO
*
* 官网: https://www.fpwjob.com
*
* 版权所有 2018-2019 菲聘网，并保留所有权利。
*
*
 */
class crm_audit_controller extends adminCommon{
	
	
	private function get_page2($table,$where="",$pageurl="",$limit=20,$field="*",$rowsname="rows",$pagenavname="pagenav"){
		$rows=array();
		$page=$_GET['page']<1?1:$_GET['page'];
		$ststrsql=($page-1)*$limit;

		$rows=$this->obj->DB_select_all($table,$where,$field);
		$num = count($rows);
		$this->yunset("total",$num);
		if($num>$limit){
			$pages=ceil($num/$limit);
      $pagenav=Page($page,$num,$limit,$pageurl,$notpl=false,$this->tpl,$pagenavname);
			$this->yunset("pages",$pages);
		}
		$rows=$this->obj->DB_select_all($table,"$where limit $ststrsql,$limit",$field);
		$this->yunset($rowsname,$rows);
		return $rows;
	}

	function index_action(){
		
		$time = isset($_GET['time']) ? $_GET['time'] : 
			date('Y-m-d', strtotime('-30 day')) . ' - ' . date('Y-m-d');
		$this->yunset('defaultTime', $time);

		$radio_time = isset($_GET['radio_time']) ? $_GET['radio_time'] : '-2';
		$this->yunset('radio_time', $radio_time);
		
		$isAllTime = isset($_GET['isAllTime']) ? $_GET['isAllTime'] : 0; 
		$this->yunset('isAllTime', $isAllTime);

		if($isAllTime != 1){
			preg_match('/(\d{4}\-\d{2}\-\d{2}) - (\d{4}\-\d{2}\-\d{2})/',
				$time, $match);
			if(!isset($match) || count($match) < 3)
			{
				echo json_encode(array('status' => -1, 'msg' => '查询时间格式错误，请选择合理的查询时间'));
				exit;
			}
			else{
				$timeBegin = strtotime($match[1]);
				$timeEnd = strtotime($match[2] . ' 23:59:59');
			}

			$dateBegin = date('Y-m-d', $timeBegin);
			$dateEnd = date('Y-m-d', $timeEnd);
		}

		$where = 'order_state = 2';
		if($isAllTime != 1){
			$where .= " and order_time >= {$timeBegin} and order_time <= {$timeEnd}";
		}
		$order = isset($_GET['order']) ? $_GET['order'] : 'desc';
		$where .= ' group by `date` order by `date` ' . $order;

		$field = "sum(order_price) as `num`, from_unixtime(order_time,'%Y-%m-%d') as `date`";

		$urlarr = array();
		$urlarr['time'] = urlencode($time);
		$urlarr['isAllTime'] = $_GET['isAllTime'];
		$urlarr['page']='{{page}}';
		$urlarr['radio_time'] = $radio_time;

		$pageurl=Url($_GET['m'],$urlarr,'admin');

		$orderRows = $this->get_page2("company_order", $where,$pageurl, $this->config['sy_listnum'], $field);

		
		$where = 'order_state = 1';
		if($isAllTime != 1){
			$where .= " and `time` >= {$timeBegin} and `time` <= {$timeEnd}";
		}
		$order = isset($_GET['order']) ? $_GET['order'] : 'desc';
		$where .= ' group by `date` order by `date` ' . $order;

		$field = "sum(order_price) as `num`, from_unixtime(`time`,'%Y-%m-%d') as `date`";
		$out = $this->obj->db_select_all('member_withdraw', $where, $field);
		$outArr = array();
		foreach($out as $r){
			$outArr [$r['date']] = $r['num'];
		}
		
		$where = 'order_state = 2 and `type` = 1 and crm_uid > 0';
		if($isAllTime != 1){
			$where .= " and `order_time` >= {$timeBegin} and `order_time` <= {$timeEnd}";
		}
		$order = isset($_GET['order']) ? $_GET['order'] : 'desc';
		$where .= ' group by `date` order by `date` ' . $order;
		$field = "sum(order_price) as `num`, from_unixtime(`order_time`,'%Y-%m-%d') as `date`";
		$salesmanOrder = $this->obj->db_select_all('company_order', $where, $field);
		$salesmanOrderArr = array();
		foreach($salesmanOrder as $r){
			$salesmanOrderArr[$r['date']] = $r['num'];
		}

		foreach($orderRows as &$r){
			if(!isset($outArr[$r['date']])){
				$r['out'] = 0;
				$r['total'] = $r['num'];
			}
			else{
				$r['out'] = $outArr[$r['date']];
				$r['total'] = $r['num'] - $r['out'];
			}

			$r['salesmanNum'] = isset($salesmanOrderArr[$r['date']]) ? $salesmanOrderArr[$r['date']] : 0;
		}


		$this->yunset('order', $orderRows);

		$this->yuntpl(array('admin/crm_audit'));

	}


	
	public function detail_action()
	{
		$urlarr['c'] = 'detail';
		$urlarr['page']="{{page}}";
		$urlarr['date'] = $_GET['date'];
		$pageurl = Url($_GET['m'], $urlarr, 'admin');

		$timeBegin = strtotime($_GET['date']);
		$timeEnd = strtotime('+1 day', $timeBegin);

		$where = "`type` = 1 and order_state = 2 and `crm_uid` > 0 and order_time >= {$timeBegin} and order_time < {$timeEnd} order by order_time";
		$field = '`id`,`uid`,`order_id`, order_price, order_time, `rating`,`crm_uid`';
		$rows = $this->get_page("company_order", $where, $pageurl, $this->config['sy_listnum'], $field);

		$comUids = array();
		$crmUids = array();
		$vips = array();
		foreach($rows as $r){
			$comUids [] = $r['uid'];
			$crmUids [] = $r['crm_uid'];
			$vips [] = $r['rating'];
		}
		$comUids = array_unique($comUids);
		$crmUids = array_unique($crmUids);
		$vips = array_unique($vips);

		
		$company = $this->obj->db_select_all('company', 'uid in (' . implode(',', $comUids) . ')', '`name`,uid');

		
		$vip = $this->obj->db_select_all('company_rating', '`id` in (' . implode(',', $vips) . ')', '`id`,`name`');

		
		$salesman = $this->obj->db_select_all('admin_user', 'uid in (' . implode(',', $crmUids) . ')', 'uid, `name`');

		$comArr = $vipArr = $salesmanArr = array();

		foreach($company as $r){
			$comArr[$r['uid']] = $r['name'];
		}
		foreach($vip as $r){
			$vipArr[$r['id']] = $r['name'];
		}
		foreach($salesman as $r){
			$salesmanArr[$r['uid']] = $r['name'];
		}

		foreach($rows as &$r){
			$r['name'] = isset($comArr[$r['uid']]) ? $comArr[$r['uid']] : '';
			$r['crm_name'] = isset($salesmanArr[$r['crm_uid']]) ? $salesmanArr[$r['crm_uid']] : '';
			$r['vip'] = isset($vipArr[$r['rating']]) ? $vipArr[$r['rating']] : '';
		}

		$this->yunset('order', $rows);
		$this->yunset('date', $_GET['date']);

		$this->yuntpl(array('admin/crm_audit_detail'));
	}


}

