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
class crm_statis_controller extends adminCommon{

	
	function index_action(){
		$radio_time = isset($_GET['radio_time']) ? $_GET['radio_time'] : '-2';
		$this->yunset('radio_time', $radio_time);

		$time = isset($_GET['time']) ? $_GET['time'] : 
			date('Y-m-d 00:00:00', strtotime('-30 day')) . ' ~ ' . date('Y-m-d H:i:s');
		$this->yunset('defaultTime', $time);

		$isAllTime = isset($_GET['isAllTime']) ? $_GET['isAllTime'] : 0; 

		if($isAllTime != 1){
			preg_match('/(\d{4}\-\d{2}\-\d{2} \d{2}\:\d{2}\:\d{2}) ~ (\d{4}\-\d{2}\-\d{2} \d{2}\:\d{2}\:\d{2})/',
				$time, $match);
			if(!isset($match) || count($match) < 3)
			{
				echo json_encode(array('status' => -1, 'msg' => '查询时间格式错误，请选择合理的查询时间'));
				exit;
			}
			else{
				$timeBegin = strtotime($match[1]);
				$m = array();
				preg_match('/(\d{4}\-\d{2}\-\d{2}) 00:00:00', $match[2], $m);
				$timeEnd = count($m) < 2 ? strtotime($match[2]) : strtotime($m[1] . ' 23:59:59');
			}

			$dateBegin = date('Y-m-d', $timeBegin);
			$dateEnd = date('Y-m-d', $timeEnd);
		}

		$where=1;

		
		if(trim($_GET['keywords'])){
 			$where .= " and `username` like '%".trim($_GET['keywords'])."%' ";
			$urlarr['keywords']=$_GET['keywords'];
		}

		if(trim($_GET['keyword'])){
			if($_GET['type']=='1'){
				$where.= "  AND `username` like '%".trim($_GET['keyword'])."%' ";
			}elseif($_GET['type']=='2'){
				$where.=" and `name` like '%".trim($_GET['keyword'])."%'";
			}elseif($_GET['type']=='3'){
				$where.=" AND `uid` like '%" .trim($_GET['keyword']). "%' ";
			}
			$urlarr['type']=$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];
		}

		$urlarr['page']='{{page}}';

		$pageurl=Url($_GET['m'],$urlarr,'admin');

		$where .= ' and `m_id` in (select id from phpyun_admin_user_group where group_power like \'%"219"%\') and did = 0 and `status` = 1';
		
		if($_GET['order']){
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by `uid` asc";
		}

 		$userrows = $this->get_page("admin_user",$where,$pageurl,$this->config['sy_listnum'],'uid,`name`,`status`,`username`,`did`');
		
		$uids = array();
		foreach($userrows as $r){
			$uids [] = $r['uid'];
		}
		$uidsStr = implode(',', $uids);

		$swhere = "`crm_uid` in ({$uidsStr})";
		if($isAllTime != 1){
			$swhere .= " and `crm_time` >= {$timeBegin} and `crm_time` <= {$timeEnd}";
		}
		$company = $this->obj->db_select_all("company", $swhere, "`uid`,`crm_uid`,`crm_status`");

		
		$companyArr = array();
		foreach($company as $r){
			if(!isset($companyArr[$r['crm_uid']])){
				$companyArr[$r['crm_uid']]['yes'] = 0;
				$companyArr[$r['crm_uid']]['no'] = 0;
				
				if($r['crm_status'] == 0){
					$companyArr[$r['crm_uid']]['no'] = 1;
				} else {
					$companyArr[$r['crm_uid']]['yes'] = 1;
				}
			} else {
				if($r['crm_status'] == 0){
					$companyArr[$r['crm_uid']]['no'] ++;
				} else {
					$companyArr[$r['crm_uid']]['yes'] ++;
				}
			}
		}

		
		$rwhere = "`status` = 0 and `uid` in ({$uidsStr})";
		if($isAllTime != 1){
			$rwhere .= " and `crm_time` >= {$timeBegin} and `crm_time` <= {$timeEnd}  ";
		}
		$rwhere .= 'group by `comid`';
		$returnVisit = $this->obj->db_select_all("crmnew_return_visit", $rwhere, "`comid`, `uid`");
		$returnVisitArr = array();
		foreach($returnVisit as $r){
			if(!isset($returnVisitArr[$r['uid']])){
				$returnVisitArr[$r['uid']] = 1;
			} else {
				$returnVisitArr[$r['uid']] ++;
			}
		}

		
		$owhere = "`type` = 1 and `order_state` = 2 and `crm_uid` in ({$uidsStr})";
		if($isAllTime != 1){
			$owhere .= " and `order_time` >= {$timeBegin} and `order_time` <= {$timeEnd} ";
		}
		$order = $this->obj->db_select_all("company_order", $owhere, "`crm_uid`, `order_price`");
		$orderArr = array();
		foreach($order as $r){
			if(!isset($orderArr[$r['crm_uid']])){
				$orderArr[$r['crm_uid']]['orderNum'] = 1;
				$orderArr[$r['crm_uid']]['orderPrice'] = $r['order_price'];
			} else {
				$orderArr[$r['crm_uid']]['orderNum'] ++;
				$orderArr[$r['crm_uid']]['orderPrice'] += $r['order_price'];
			}
		}
		
		foreach($userrows as &$r){
			$r['concernNum'] = isset($companyArr[$r['uid']]) ? $companyArr[$r['uid']]['no'] : 0;
			$r['concernedNum'] = isset($companyArr[$r['uid']]) ? $companyArr[$r['uid']]['yes'] : 0;
			$r['returnVisitNum'] = isset($returnVisitArr[$r['uid']]) ? $returnVisitArr[$r['uid']] : 0;

			$r['orderNum'] = isset($orderArr[$r['uid']]) ? $orderArr[$r['uid']]['orderNum'] : 0;
			$r['orderPrice'] = isset($orderArr[$r['uid']]) ? $orderArr[$r['uid']]['orderPrice'] : 0;
		}
		$this->yunset("userrows",$userrows);

		$this->yuntpl(array('admin/crm_statis'));

	}

	
	private $chartType = 'line';

	
	private function getTotal($timeBegin = '', $timeEnd = '', $uid)
	{
		
		$where = "`crm_uid` = '".$uid."'";
		if($timeBegin != ''){
			$where .= " and `crm_time` >= {$timeBegin} and `crm_time` <= {$timeEnd}";
		}
		$field = 'count(uid) as `num`';
		
		$row = $this->obj->DB_select_all('company', $where, $field);

		$all = isset($row[0]['num']) && $row[0]['num'] > 0 ? $row[0]['num'] : 0;

		
		
		$where = "`crm_uid` = '".$uid."' and `crm_status`='0' "; 
		if($timeBegin != ''){
			$where .= "  and `crm_time` >= {$timeBegin} and `crm_time` <= {$timeEnd}";
		}
		$field = 'count(uid) as `num`';
		
		$row = $this->obj->DB_select_all('company', $where, $field);
		$new = isset($row[0]['num']) && $row[0]['num'] > 0 ? $row[0]['num'] : 0;

		
		$attention = $all - $new;

		

		return array($all, $new, $attention);
	}

	function performance_action(){

		$radio_time = isset($_GET['radio_time']) ? $_GET['radio_time'] : '-2';
		$this->yunset('radio_time', $radio_time);

		if($_GET['uid']){

			$uid = $_GET['uid'];
			
			$crm = $this->obj->DB_select_once("admin_user", "`uid`='".$uid."'","`name`");
			if($crm){
				$this->yunset("aname",$crm['name']);
				$this->yunset("cuid",$uid);
			}
			
		}
	 	
		
		list($all, $new, $attention) = $this->getTotal( strtotime(date('Y-m-01 00:00:00', time())) , time(), $uid);

 		$data [] = array('time' => '本月', 'all' => $all, 'new' => $new, 'attention' => $attention);

		$timeEnd = strtotime(date('Y-m-d 00:00:00', time()));
		$week = date('w');
		if($week == 0) $week = 7;
		$week --;
		$monday = strtotime("-{$week} day", $timeEnd);
		list($all, $new, $attention) = $this->getTotal( $monday, $timeEnd, $uid);
		$data [] = array('time' => '本周', 'all' => $all, 'new' => $new, 'attention' => $attention);

		$all =  $this->getTotal( $monday, $timeEnd, $uid);
		list($all, $new, $attention) = $this->getTotal( strtotime('-1 day', $timeEnd), $timeEnd , $uid);
		$data [] = array('time' => '昨日', 'all' => $all, 'new' => $new, 'attention' => $attention);
		
		list($all, $new, $attention) = $this->getTotal('','',$uid);
		$data [] = array('time' => '累计', 'all' => $all, 'new' => $new, 'attention' => $attention);
 
		$this->yunset('data', $data);

		
		$time = isset($_GET['time']) ? $_GET['time'] : 
			date('Y-m-d 00:00:00', strtotime('-30 day')) . ' ~ ' . date('Y-m-d H:i:s');
		$this->yunset('defaultTime', $time);

		$isAllTime = isset($_GET['isAllTime']) ? $_GET['isAllTime'] : 0; 

		
		if($isAllTime != 1){
			preg_match('/(\d{4}\-\d{2}\-\d{2} \d{2}\:\d{2}\:\d{2}) ~ (\d{4}\-\d{2}\-\d{2} \d{2}\:\d{2}\:\d{2})/',
				$time, $match);
			if(!isset($match) || count($match) < 3)
			{
				
				
				$this->ACT_layer_msg('查询时间格式错误，请选择合理的查询时间', 8);
			}
			else{
				$timeBegin = strtotime($match[1]);
				$m = array();
				preg_match('/(\d{4}\-\d{2}\-\d{2}) 00:00:00', $match[2], $m);
				$timeEnd = count($m) < 2 ? strtotime($match[2]) : strtotime($m[1] . ' 23:59:59');
			}

			$dateBegin = date('Y-m-d', $timeBegin);
			$dateEnd = date('Y-m-d', $timeEnd);
			$title = "客户统计 - {$dateBegin}~{$dateEnd}";
		}
		else{
			$title = "客户统计 - 全部数据";	
		}

		
		$names = array();
		$values = array();
		$dataGroupNames = array();
    		
		
		$where = "`crm_uid` = '".$uid."'";
		if($isAllTime != 1){
			$where .= " and crm_time >= {$timeBegin} and crm_time <= {$timeEnd}";
		}
		$where .= ' group by `date` order by `date`';
		$field = "count(uid) as `num`, from_unixtime(crm_time,'%Y-%m-%d') as `date`";
		
		$row = $this->obj->DB_select_all('company', $where, $field);
		$totalAll = 0;
		if(count($row) < 1){
			$all = array('names' => array(), 'values' => array());
		}
		else{
			$allNames = array();
			$allValues = array();
			foreach($row as $r){
				$allNames [] = $r['date'];
				$allValues [] = $r['num'];

				$totalAll += $r['num'];
			}
			$all = array('names' => $allNames, 'values' => $allValues);
		}

		
		$where = "`crm_uid` = '".$uid."' and `crm_status`='0' ";
		if($isAllTime != 1){
			$where .= " and `crm_time` >= {$timeBegin} and `crm_time` <= {$timeEnd}";
		}
		$where .= ' group by `date` order by `date`';
		$field = "count(uid) as num, from_unixtime(`crm_time`,'%Y-%m-%d') as `date`";

		
		
		$row = $this->obj->DB_select_all('company', $where, $field);
		$totalNew = 0;
		if(count($row) < 1){
			$new = array('names' => array(), 'values' => array());
		}
		else{
			$newNames = array();
			$newValues = array();
			foreach($row as $r){
				$newNames [] = $r['date'];
				$newValues [] = $r['num'];

				$totalNew += $r['num'];
			}
			$new = array('names' => $newNames, 'values' => $newValues);
		}
		
		
		$names = array_merge($all['names'], $new['names']);
		$names = array_unique($names);
		usort($names, function($prev, $next){
		  $p = strtotime($prev);
		  $n = strtotime($next);
		  if ($p == $n) return 0;

		  return ($p > $n) ? 1 : -1;
		});

		$allValues = array();
		$newValues = array();
		$allK = 0;
		$newK = 0;
		foreach($names as $n){
			if(in_array($n, $all['names'])){
				$allValues [] = $all['values'][$allK];
				$allK ++;
			}
			else{
				$allValues [] = 0;
			}

			if(in_array($n, $new['names'])){
				$newValues [] = $new['values'][$newK];
				$newK ++;
			}
			else{
				$newValues [] = 0;
			}

			$attentionValues [] = end($allValues) - end($newValues);
		}

		$all['values'] = $allValues;
		$new['values'] = $newValues;

		
		
		$dataGroupNames [] = '客户总数';
		$dataGroupNames [] = '未关怀';
		$dataGroupNames [] = '已关怀';

		$values[] = array('name' => '客户总数',
				'type' => $this->chartType,
				'data' => $all['values']
			);
		
		$values[] = array('name' => '未关怀',
			'type' => $this->chartType,
			'data' => $new['values']
		);

		$values[] = array('name' => '已关怀',
			'type' => $this->chartType,
			'data' => $attentionValues
		);

		$data = array('title' => $title,'names' => $names, 'values' => $values, 'dataGroupNames' => $dataGroupNames);
		$this->yunset($data);

 		$this->yunset(array('totalAll'=> $totalAll, 'totalNew' => $totalNew, 'totalAttention' => ($totalAll - $totalNew)));
 
		$this->yuntpl(array('admin/crm_statis_performance'));

	}

	
	private $typeMapping = array(
		1 => '等待用户反馈',
		2 => '已付费（签单）',
		3 => '拒绝付费',
		4 => '可能付费，已增加回访提醒'
	);

	
	function concern_action(){

		$radio_time = isset($_GET['radio_time']) ? $_GET['radio_time'] : '-2';
		$this->yunset('radio_time', $radio_time);

		if($_GET['uid']){

			$uid = $_GET['uid'];
			
			$crm = $this->obj->DB_select_once("admin_user", "`uid`='".$uid."'","`name`");
			if($crm){
				$this->yunset("aname",$crm['name']);
				$this->yunset("cuid",$uid);
			}
			
		}
		
		
		$time = isset($_GET['time']) ? $_GET['time'] : 
			date('Y-m-d 00:00:00', strtotime('-30 day')) . ' ~ ' . date('Y-m-d H:i:s');
		$this->yunset('defaultTime', $time);

		$isAllTime = isset($_GET['isAllTime']) ? $_GET['isAllTime'] : 0; 

		
		if($isAllTime != 1){
			preg_match('/(\d{4}\-\d{2}\-\d{2} \d{2}\:\d{2}\:\d{2}) ~ (\d{4}\-\d{2}\-\d{2} \d{2}\:\d{2}\:\d{2})/',
				$time, $match);
			if(!isset($match) || count($match) < 3) {
				
				
				$this->ACT_layer_msg('查询时间格式错误，请选择合理的查询时间', 8);
			} else {
				$timeBegin = strtotime($match[1]);
				$m = array();
				preg_match('/(\d{4}\-\d{2}\-\d{2}) 00:00:00', $match[2], $m);
				$timeEnd = count($m) < 2 ? strtotime($match[2]) : strtotime($m[1] . ' 23:59:59');
			}

			$dateBegin = date('Y-m-d', $timeBegin);
			$dateEnd = date('Y-m-d', $timeEnd);
			$title = "关怀记录统计 : {$dateBegin}~{$dateEnd}";
		} else {
			$title = "关怀记录统计 : 全部数据";
		}

		$names = array();
		$values = array();
		
		$where = "`uid` = '".$_GET['uid']."'";
		if($isAllTime != 1){
			$where .= " and `time` >= {$timeBegin} and `time` <= {$timeEnd}";
		}
		$where .= ' group by `status` order by `status`';
		$field = 'count(id) as `num`, `status`';
			
		$row = $this->obj->DB_select_all('crmnew_concern', $where, $field);

		$total = 0;
		foreach($row as $r){
			if(isset($this->typeMapping[$r['status']])){
				$names [] = $this->typeMapping[$r['status']];
				
				$rr['value'] = $r['num'];
				$rr['name'] = $this->typeMapping[$r['status']];

				$values [] = $rr;

				$total += $r['num'];
			}
		}

		

		$data = array('title' => $title,'names' => $names, 'values' => $values );
		$this->yunset($data);
 		$this->yunset('total', $total);

		$this->yuntpl(array('admin/crm_statis_concern'));
	}

	
	private function getAmountTotal($timeBegin = '', $timeEnd = '', $uid){
 
		$where = "`crm_uid` = '".$uid."'";
		if($timeBegin != ''){
			$where .= " and `order_time` >= {$timeBegin} and `order_time` <= {$timeEnd}";
		}
		$field = 'sum(order_price) as `num`';
		
		$row = $this->obj->DB_select_all('company_order', $where, $field);

		$all = isset($row[0]['num']) && $row[0]['num'] > 0 ? $row[0]['num'] : 0;

		return array($all);
	}

	
	public function amount_action()
	{
		$radio_time = isset($_GET['radio_time']) ? $_GET['radio_time'] : '-2';
		$this->yunset('radio_time', $radio_time);
		
		if($_GET['uid']){

			$uid = $_GET['uid'];
			
			$crm = $this->obj->DB_select_once("admin_user", "`uid`='".$uid."'","`name`");
			if($crm){
				$this->yunset("aname",$crm['name']);
				$this->yunset("cuid",$uid);
			}
			
		}
 		
		list($all) = $this->getAmountTotal( strtotime(date('Y-m-01 00:00:00', time())) , time(), $uid);
		
		$data [] = array('time' => '本月', 'all' => $all);

		$timeEnd = strtotime(date('Y-m-d 00:00:00', time()));
		$week = date('w');
		if($week == 0) $week = 7;
		$week --;
		$monday = strtotime("-{$week} day", $timeEnd);
		list($all) = $this->getAmountTotal( $monday, $timeEnd, $uid);
		$data [] = array('time' => '本周', 'all' => $all);

		$all =  $this->getAmountTotal( $monday, $timeEnd, $uid);
		list($all) = $this->getAmountTotal( strtotime('-1 day', $timeEnd), $timeEnd, $uid );
		$data [] = array('time' => '昨日', 'all' => $all);
		
		list($all) = $this->getAmountTotal('', '', $uid);
		$data [] = array('time' => '累计', 'all' => $all);

		$this->yunset('data', $data);

		
		$time = isset($_GET['time']) ? $_GET['time'] : 
			date('Y-m-d 00:00:00', strtotime('-30 day')) . ' ~ ' . date('Y-m-d H:i:s');
		$this->yunset('defaultTime', $time);

		$isAllTime = isset($_GET['isAllTime']) ? $_GET['isAllTime'] : 0; 

		
		if($isAllTime != 1){
			preg_match('/(\d{4}\-\d{2}\-\d{2} \d{2}\:\d{2}\:\d{2}) ~ (\d{4}\-\d{2}\-\d{2} \d{2}\:\d{2}\:\d{2})/',
				$time, $match);
			if(!isset($match) || count($match) < 3)
			{
				
				
				$this->ACT_layer_msg('查询时间格式错误，请选择合理的查询时间', 8);
			}
			else{
				$timeBegin = strtotime($match[1]);
				$m = array();
				preg_match('/(\d{4}\-\d{2}\-\d{2}) 00:00:00', $match[2], $m);
				$timeEnd = count($m) < 2 ? strtotime($match[2]) : strtotime($m[1] . ' 23:59:59');
			}

			$dateBegin = date('Y-m-d', $timeBegin);
			$dateEnd = date('Y-m-d', $timeEnd);
			$title = "成交金额统计 - {$dateBegin}~{$dateEnd}";
		}
		else{
			$title = "成交金额统计 - 全部数据";	
		}

		
		$names = array();
		$values = array();
		$dataGroupNames = array();
    		
		
		$where = "`crm_uid` = '".$uid."'";
		if($isAllTime != 1){
			$where .= " and `order_time` >= {$timeBegin} and `order_time` <= {$timeEnd}";
		}
		$where .= ' group by `date` order by `date`';
		$field = "sum(order_price) as `num`, from_unixtime(order_time,'%Y-%m-%d') as `date`";
		
		$row = $this->obj->DB_select_all('company_order', $where, $field);
		$totalAll = 0;
		if(count($row) < 1){
			$in = array('names' => array(), 'values' => array());
		}
		else{
			$inNames = array();
			$inValues = array();
			foreach($row as $r){
				$inNames [] = $r['date'];
				$inValues [] = $r['num'];

				$totalAll += $r['num'];
			}
			$in = array('names' => $inNames, 'values' => $inValues);
		}

		
		$names = array_merge($in['names']);
		$names = array_unique($names);
		usort($names, function($prev, $next){
		  $p = strtotime($prev);
		  $n = strtotime($next);
		  if ($p == $n) return 0;

		  return ($p > $n) ? 1 : -1;
		});

		$inValues = array();
 		$inK = 0;
 		foreach($names as $n){
			if(in_array($n, $in['names'])){
				$inValues [] = $in['values'][$inK];
				$inK ++;
			}
			else{
				$inValues [] = 0;
			}
		}

		$in['values'] = $inValues;
 		
		$dataGroupNames [] = '成交金额';
 
		$values[] = array('name' => '成交金额',
				'type' => $this->chartType,
				'data' => $in['values']
			);

		$data = array('title' => $title,'names' => $names, 'values' => $values, 'dataGroupNames' => $dataGroupNames);
		$this->yunset($data);

		$this->yunset(array('totalAll'=> $totalAll));
 
		$this->yuntpl(array('admin/crm_statis_amount'));

	}

 
}

?>