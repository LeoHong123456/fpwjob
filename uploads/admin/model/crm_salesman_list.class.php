	<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class crm_salesman_list_controller extends adminCommon{
	
	function index_action(){

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

		
		$where .= ' and `m_id` in (select id from phpyun_admin_user_group where group_power like \'%"219"%\') and did = 0 ';

		$userrows = $this->get_page("admin_user",$where,$pageurl,$this->config['sy_listnum'],'uid,`name`,`status`,`username`,`did`');
		
		$uids = array();
		foreach($userrows as $r){
			$uids [] = $r['uid'];
		}
		$uidsStr = implode(',', $uids);

		$company = $this->obj->db_select_all('company', "crm_uid in ({$uidsStr})", '`uid`,`crm_uid`,`crm_status`');
		
		$companyArr = array();
		foreach($company as $r){
			if(!isset($companyArr[$r['crm_uid']])){
				$companyArr[$r['crm_uid']]['yes'] = 0;
				$companyArr[$r['crm_uid']]['no'] = 0;
				if($r['crm_status'] == 0){
					$companyArr[$r['crm_uid']]['no'] = 1;
				}
				else{
					$companyArr[$r['crm_uid']]['yes'] = 1;
				}
			}
			else{
				if($r['crm_status'] == 0){
					$companyArr[$r['crm_uid']]['no'] ++;
				}
				else{
					$companyArr[$r['crm_uid']]['yes'] ++;
				}
			}
		}
		
		
		$returnVisit = $this->obj->db_select_all('crmnew_return_visit', 
			"`status` = 0 and uid in ({$uidsStr}) group by comid", 'comid, uid');
		$returnVisitArr = array();
		foreach($returnVisit as $r){
			if(!isset($returnVisitArr[$r['uid']])){
				$returnVisitArr[$r['uid']] = 1;
			}
			else{
				$returnVisitArr[$r['uid']] ++;
			}
		}

		
		$order = $this->obj->db_select_all('company_order', 
			"`type` = 1 and order_state = 2 and crm_uid in ({$uidsStr})",
			'crm_uid,order_price');
		$orderArr = array();
		foreach($order as $r){
			if(!isset($orderArr[$r['crm_uid']])){
				$orderArr[$r['crm_uid']]['orderNum'] = 1;
				$orderArr[$r['crm_uid']]['orderPrice'] = $r['order_price'];
			}
			else{
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

		

		include PLUS_PATH."/domain_cache.php";
		$Dname[0] = '总站';
		if(is_array($site_domain)){
			foreach($site_domain as $key=>$value){
				$Dname[$value['id']]  =  $value['webname'];
			}
		}
		$this->yunset("Dname", $Dname);
		
		

		$this->yuntpl(array('admin/crm_salesman_list'));

	}


	
	public function assign_company_action()
	{
		$urlarr['c'] = 'assign_company';
		$urlarr['page']="{{page}}";
		$urlarr['uid'] = $_GET['uid'];
		$pageurl = Url($_GET['m'], $urlarr, 'admin');

		$where = "1";
		
		if($_GET['order']){
			$where.=" AND `crm_uid` = '0' order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" AND `crm_uid` = '0' order by uid desc";
		}

		$field = "`uid`,`name`";
		$rows = $this->get_page("company", $where, $pageurl, $this->config['sy_listnum'], $field);

		$this->yunset('company', $rows);
		$this->yunset('uid', $_GET['uid']);

		$this->yuntpl(array('admin/crm_assign_company'));
	}

	
	public function ajax_assign_action()
	{
		$salesmanId = isset($_POST['uid']) ? $_POST['uid'] : 0;
		$companyId = isset($_POST['comid']) ? $_POST['comid'] : '';

		if($salesmanId == 0 || $companyId == ''){
			echo '请选择企业进行分配';
			exit;
		}

		$affectRowNum = $this->obj->DB_update_all('company', 
			"crm_uid = {$salesmanId}, crm_time = " . time(), "uid in ({$companyId})");
		if($affectRowNum > 0){
			echo '1';
			exit;
		}
		else{
			echo '分配失败，数据库错误';
			exit;
		}
	}

	
	function status_action()
	{	
		$uid=(int)$_POST['uid'];
		$id=$this->obj->DB_update_all("admin_user",
			"`status`={$_POST['status']}",
			"`uid`={$uid}");
	
		if($id > 0){
			$this->MODEL('log')->admin_log("业务员(ID:".$uid.")在职/离职设置成功！");

			$this->obj->DB_update_all('company', 'crm_uid = 0', "crm_uid = {$uid} and crm_status <> 2");

			$this->ACT_layer_msg("业务员(ID:".$uid.")在职/离职设置成功！",9,$_SERVER['HTTP_REFERER'],2);
		}
		else{
			$this->ACT_layer_msg( "设置失败！",8,$_SERVER['HTTP_REFERER']);
		}
	}

	
	public function shift_company_action()
	{
		$urlarr['c'] = 'shift_company';
		$urlarr['page']="{{page}}";
		$urlarr['uid'] = $_GET['uid'];
		$pageurl = Url($_GET['m'], $urlarr, 'admin');

		$where = "1";
		
		if($_GET['order']){
			$where.=" AND `crm_uid` = {$_GET['uid']} and `crm_status` = '0' order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" AND `crm_uid` = {$_GET['uid']} and `crm_status` = '0' order by `uid` desc";
		}
 		$field = "`uid`, `name`";
		$rows = $this->get_page("company", $where, $pageurl, $this->config['sy_listnum'], $field);

		$this->yunset('company', $rows);
		$this->yunset('uid', $_GET['uid']);

		$where = '`m_id` in (select id from phpyun_admin_user_group where group_power like \'%"219"%\') and did = 0';
		$where .= " and uid <> {$_GET['uid']}";
		$new_uid = $this->obj->db_select_all('admin_user', $where, '`uid`,`name`');
		$this->yunset('new_uid', $new_uid);

		$this->yuntpl(array('admin/crm_shift_company'));
	}

	
	public function ajax_shift_action()
	{
		$salesmanId = isset($_POST['uid']) ? $_POST['uid'] : 0;
		$companyId = isset($_POST['comid']) ? $_POST['comid'] : '';
		$new_uid = isset($_POST['new_uid']) ? $_POST['new_uid'] : 0;

		if($salesmanId == 0 || $companyId == '' || $new_uid == 0){
			echo '请选择企业/业务员进行转移';
			exit;
		}

		$affectRowNum = $this->obj->DB_update_all('company', 
			"crm_uid = {$new_uid}, crm_time = " . time(), "uid in ({$companyId}) and crm_uid = {$salesmanId}");
		if($affectRowNum > 0){
			echo 1;
			exit;
		}
		else{
			echo '转移失败，数据库错误';
			exit;
		}
	}

	
	public function customer_list_action()
	{
		$name = isset($_GET['name']) ? $_GET['name'] : '';
		$this->yunset('aname', $name);

		$urlarr['c'] = 'customer_list';
		$urlarr['name'] = $name;
		$urlarr['page']="{{page}}";
		$urlarr['uid'] = $_GET['uid'];
		$pageurl = Url($_GET['m'], $urlarr, 'admin');

		$where = "`crm_uid` = {$_GET['uid']}";
		$field = "uid,`name`,linkman,linktel,crm_status,provinceid,cityid,three_cityid,`address`";
		$rows = $this->get_page("company", $where, $pageurl, $this->config['sy_listnum'], $field);

		$this->yunset('company', $rows);
		$this->yunset('uid', $_GET['uid']);
		
		$this->yuntpl(array('admin/crm_customer_list'));
	}
}

?>