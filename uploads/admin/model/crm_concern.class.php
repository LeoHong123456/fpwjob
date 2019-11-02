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
class crm_concern_controller extends adminCommon{
	
	function set_search(){ 
		$rating=$this->obj->DB_select_all("company_rating","`category`='1' order by `sort` asc","`id`,`name`");
		if(!empty($rating)){
			foreach($rating as $k=>$v){
                 $ratingarr[$v['id']]=$v['name'];
			}
		}
 		$edtime=array('1'=>'7天内','2'=>'一个月内','3'=>'半年内','4'=>'一年内');
 		$crm_status=array('1'=>'等待反馈','2'=>'已付费','3'=>'拒绝付费','4'=>'可能付费(待回访)');
		$search_list[]=array("param"=>"rating","name"=>'会员等级',"value"=>$ratingarr);
		$search_list[]=array("param"=>"time","name"=>'到期时间',"value"=>$edtime);
		$search_list[]=array("param"=>"crm_status","name"=>'关怀状态',"value"=>$crm_status);
 		$this->yunset("ratingarr",$ratingarr);
		$this->yunset("search_list",$search_list);
	}
	 
	
	private function listCommon($isAll, $adminUid)
	{
		$this->set_search();

		$where = $whereCompany = $whereMember = $whereStatis = '1';
		$uids=array();
 
		if($_GET['rating']){
			$whereStatis .= " and `rating`='".$_GET['rating']."'";
			$urlarr['rating']=$_GET['rating'];
		}

		if($_GET['time']){
			if($_GET['time']=='1'){
				$num="+7 day"; 
			}elseif($_GET['time']=='2'){
				$num="+1 month"; 
			}elseif($_GET['time']=='3'){
				$num="+6 month"; 
			}elseif($_GET['time']=='4'){
				$num="+1 year"; 
			}
	
			$whereStatis .=" and `vip_etime`>'".time()."' and `vip_etime`<'".strtotime($num)."'";
			
			$urlarr['time']=$_GET['time'];
		}

		if($_GET['crm_status']){
			$where .= " and `status`='".$_GET['crm_status']."'";
			$urlarr['crm_status']=$_GET['crm_status'];
		}
 
		if(trim($_GET['keyword'])){
			if($_GET['type']=='1'){
				$whereCompany .= "  AND `name` like '%".trim($_GET['keyword'])."%' ";
			}elseif($_GET['type']=='2'){
				$whereMember .=" and `username` like '%".trim($_GET['keyword'])."%'";
			}elseif($_GET['type']=='3'){
				$whereCompany .= "  AND `linkman` like '%".trim($_GET['keyword'])."%' ";
			}elseif($_GET['type']=='4'){
				$whereCompany .= "  AND `linktel` like '%".trim($_GET['keyword'])."%' ";
			}elseif($_GET['type']=='5'){
				$whereCompany .= "  AND `linkmail` like '%".trim($_GET['keyword'])."%' ";
			}elseif($_GET['type']=='6'){
				$where.=" AND `id` like '%" .trim($_GET['keyword']). "%' ";
			}

			$urlarr['type']=$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];
		}
 
		if($whereMember !='1'){
			$username = $this->obj->DB_select_all("member",$whereMember ." and `usertype`='2'","`uid`,`username`");
			$uids=array();
			foreach($username as $val){
				$uids[]=$val['uid'];
			}
			$whereCompany .= " and `uid` in (".@implode(',',$uids).")";

		}
		
 		if($whereCompany != '1'){
 
 			$company = $this->obj->DB_select_all('company', $whereCompany, '`uid`, `name`, `linkman`, `linktel`, `linkmail`');
  			$uids = array();
			foreach($company as $val){
				$uids[]=$val['uid'];
			}
 
			if(count($uids) > 0){
				$where.=" and `comid` in (".@implode(',',$uids).")";
			}
			 
		}
	 
		if($whereStatis != '1'){
		 
			$list = $this->obj->DB_select_all("company_statis",$whereStatis,"`uid`,`pay`,`rating`,`rating_name`,`vip_etime`");
			$uids = array();
			foreach($list as $val){
				$uids[] = $val['uid'];
			}

			if(count($uids) > 0){
				$where.=" and `comid` in (".@implode(',',$uids).")";
			}
		}

		if($isAll){
			if($_GET['order']){
				$where.=" order by ".$_GET['t']." ".$_GET['order'];
				$urlarr['order']=$_GET['order'];
				$urlarr['t']=$_GET['t'];
			}else{
				$where.=" order by id desc";
			}
			$urlarr['c']=$_GET['c'];
		}else{
			if($_GET['order']){
				$where.=" AND `uid` = '". $adminUid ."' order by ".$_GET['t']." ".$_GET['order'];
				$urlarr['order']=$_GET['order'];
				$urlarr['t']=$_GET['t'];
			}else{
				$where.=" AND `uid` = '". $adminUid ."' order by id desc";
				$urlarr['uid']=$_GET['uid'];
				$urlarr['name']=$_GET['name'];
				$urlarr['c']=$_GET['c'];
			}
		}

 		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		
		$rows=$this->get_page("crmnew_concern", $where, $pageurl,$this->config['sy_listnum']);
 		
		if(is_array($rows)&&$rows){

			if($whereMember =='1' && empty($username)){
				$uids = array();
				foreach($rows as $v){
					$uids[]=$v['comid'];
					$ids[]=$v['id'];
				}

				$username=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uids).")","`username`,`uid`");
			}

			if($whereStatis =='1'&& empty($list)){
				$list=$this->obj->DB_select_all("company_statis","`uid` in (".@implode(",",$uids).")","`uid`,`pay`,`integral`,`rating`,`rating_name`,`vip_etime`,`msg_num`");
			}

			if($whereCompany == '1' && empty($company)){
				$company = $this->obj->DB_select_all('company', "`uid` in (".@implode(",",$uids).")", '`uid`, `name`, `linkman`, `linktel`, `linkmail`');
			}
			if(empty($nextvist)){
				$nextvist=$this->obj->DB_select_all("crmnew_return_visit","`cid` in (".@implode(",",$ids).")");
			}
			$usernameArr = array();
			foreach($username as $r){
				$usernameArr[$r['uid']] = $r;
			}

			$listArr = array();
			foreach($list as $r){
				$listArr[$r['uid']] = $r;
			}

			$companyArr = array();
			foreach($company as $r){
				$companyArr[$r['uid']] = $r;
			}
			$nextvistArr = array();
			foreach($nextvist as $r){
				$nextvistArr[$r['cid']] = $r;
			}
			if($isAll){
				$adminUser = $this->obj->DB_select_all('admin_user', 
					'`m_id` in (select id from phpyun_admin_user_group where group_power like \'%"219"%\')'
					,'uid,`username`,`name`'
				);

				$adminUserArr = array();
				foreach($adminUser as $r){
					$adminUserArr[$r['uid']] = $r;
				}
			}

			
			foreach($rows as &$r){

				if(isset($companyArr[$r['comid']])){
					$name = $companyArr[$r['comid']]['name'];
					if(mb_strlen($name) > 12){
						$name = mb_substr($name, "0","12","utf-8")."...";
					}
					$r['name'] = $name;
					$r['linkman'] = $companyArr[$r['comid']]['linkman'];
					$r['linktel'] = $companyArr[$r['comid']]['linktel'];
					$r['linkmail'] = $companyArr[$r['comid']]['linkmail'];
				}

				if(isset($usernameArr[$r['comid']])){
					$r['username'] = $usernameArr[$r['comid']]['username'];
				}

				if(isset($listArr[$r['comid']]) ){
					$r['rating']= $listArr[$r['comid']]['rating'];
					$r['pay']= $listArr[$r['comid']]['pay'];
					$r['rating_name']= $listArr[$r['comid']]['rating_name'];
					$r['vip_etime']= $listArr[$r['comid']]['vip_etime'];
					$r['integral']= $listArr[$r['comid']]['integral'];
					$r['vip_done']=$this->config['com_vip_done'];
				}

				if($isAll && isset($adminUserArr[$r['uid']]) ){
					$r['admin_username'] = $adminUserArr[$r['uid']]['username'];
					$r['admin_name'] = $adminUserArr[$r['uid']]['name'];
				}
				if(isset($nextvistArr[$r['id']])){
					
					
					
					
					$r['nextnote'] = $nextvistArr[$r['id']]['note'];
					$r['nexttime'] = $nextvistArr[$r['id']]['next_time'];
				}
			}
		}
		$this->yunset("rows",$rows);
	}

	function getContent_action(){
 		if($_POST['id']){
 			$concern=$this->obj->DB_select_once("crmnew_concern","`id`='".$_POST['id']."'","`content`,`note`");
			$nextconcern=$this->obj->DB_select_once("crmnew_return_visit","`cid`='".$_POST['id']."'","`note`");
 			if($concern['content']!="" && $_POST['type']=='1'){
       			$data['content']=str_replace("\n","<br>",$concern['content']);
       		}else if($concern['note']!="" && $_POST['type']=='2'){
				$data['content']=str_replace("\n","<br>",$concern['note']);
			}else if($nextconcern['note']!="" && $_POST['type']=='3'){
				$data['content']=str_replace("\n","<br>",$nextconcern['note']);
			}
 		}
 		echo json_encode($data);die;
 	}

	
	function index_action()
	{
		
		$this->listCommon(false, $_SESSION['auid']);
		$this->yunset("aname",$_SESSION['ausername']);

		$this->yuntpl(array('admin/crm_concern'));
	}

	
	function list_action()
	{
		$this->listCommon(true,'');
		
		$this->yuntpl(array('admin/crm_concern_list'));
	}

	
	function list_one_action()
	{
		$uid = isset($_GET['uid']) ? $_GET['uid'] : 0;
		$name = isset($_GET['name']) ? $_GET['name'] : '';

		$this->listCommon(false, $uid);
		$this->yunset('aname', $name);
		$this->yuntpl(array('admin/crm_concern'));
	}

	
	function add_action()
	{
		$comid = isset($_GET['comid']) ? $_GET['comid'] : 0;
		if($comid == 0){
			$this->ACT_layer_msg('请选择一个您的客户进行关怀');
		}

	  $uid = isset($_SESSION['auid']) ? $_SESSION['auid'] : 0;
	  if($uid == 0){
	  	$this->ACT_layer_msg('请先登录');
	  }

	  $company = $this->obj->DB_select_once('company', "uid={$comid} and crm_uid={$uid} ",
	  	 '`name`,`address`,`provinceid`,`cityid`,`three_cityid`,linkman,linkphone,linktel,linkmail, crm_status');
	  if(!isset($company['name'])){
	  	$this->ACT_layer_msg('请选择一个您的客户进行关怀');
	  }

	  $this->yunset($company);

	  $this->yunset('comid', $comid);
	  $this->yunset('uid', $uid);
	  $this->yunset('time', date('Y-m-d H:i:s'));
	  $this->yunset('returnVisitTime', date('Y-m-d H:i:s', strtotime('+7 day')));

		$this->yuntpl(array('admin/crm_concern_add'));

	}

	
	function save_action()
	{
		extract($_POST);

		$time = strtotime($time);
		$content = addslashes($content);
		$note = addslashes($note);
		$values = "`uid` = {$uid}, `comid` = {$comid}, `time` = {$time}, `type` = {$type}, `status` = {$status}, `content` = '{$content}', `note` = '{$note}'";
		if($status == 2){
			$values .= ",`order_id` = {$order_id}";
			
			$this->obj->DB_delete_all('crmnew_concern', "`uid`={$uid} and `comid`={$comid} and `order_id` = {$order_id} order by id desc limit 1");
		}

		$id = $this->obj->DB_insert_once('crmnew_concern', $values);
		
		
		$this->obj->DB_update_all('crmnew_return_visit', "`status`=1", "`uid`={$uid} and `comid`={$comid} and `status` = 0");

		
		if($status == 4){
			$add_time = time();
			$next_time = strtotime($returnVisitTime);
			$note = addslashes($returnVisitNote);
			$values = "`uid` = {$uid}, `comid` = {$comid}, `cid` = {$id}, `next_time` = {$next_time}, `add_time` = {$add_time}, `note` = '{$note}'";
			$this->obj->DB_insert_once('crmnew_return_visit', $values);
		}

		if($id > 0){
			$this->obj->DB_update_all('company', "`crm_status` = {$status}", "`uid` = {$comid} and `crm_uid` = {$uid}");

			$this->MODEL('log')->admin_log("新增关怀记录{$id}成功！", 7, 5, $id);
			$this->ACT_layer_msg("新增关怀记录{$id}成功！",9, "index.php?m=crm_customer",2);
			exit;
		}

		$this->ACT_layer_msg( "新增关怀记录失败！{$values} ###" . $id,8,$_SERVER['HTTP_REFERER'], 10);
		exit;
	}
}

?>