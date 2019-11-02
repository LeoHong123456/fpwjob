<?php
/*
* $Author ：LEO
*
* 官网: http://www.fpwjob.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class crm_customer_controller extends adminCommon{

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
	 

	function index_action(){

		$this->set_search();
		$where=$swhere=$mwhere="1";
		$uids=array();
 
		if($_GET['rating']){
			$swhere="`rating`='".$_GET['rating']."'";
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
			if($swhere){
				$swhere.=" and `vip_etime`>'".time()."' and `vip_etime`<'".strtotime($num)."'";
			}else{
				$swhere=" `vip_etime`>'".time()."' and `vip_etime`<'".strtotime($num)."'";
			}
			$urlarr['time']=$_GET['time'];
		}

		if($_GET['crm_status']){
			$where .=" AND `crm_status` = '".$_GET['crm_status']."' ";
			$urlarr['crm_status']=$_GET['crm_status'];
		}

		if($swhere!='1'){
			$list=$this->obj->DB_select_all("company_statis",$swhere,"`uid`,`pay`,`rating`,`rating_name`,`vip_etime`");
			foreach($list as $val){
				$uids[]=$val['uid'];
			}
			$where.=" and `uid` in (".@implode(',',$uids).")";
		}				
 
	    if(trim($_GET['keywords'])){
			$where .= " and `name` like '%".trim($_GET['keywords'])."%' ";
			$urlarr['keywords']=$_GET['keywords'];
		}
		if(trim($_GET['keyword'])){
            if($_GET['type']=='1'){
				$where.= "  AND `name` like '%".trim($_GET['keyword'])."%' ";
            }elseif($_GET['type']=='2'){
				$mwhere.=" and `username` like '%".trim($_GET['keyword'])."%'";
            }elseif($_GET['type']=='3'){
				$where.= "  AND `linkman` like '%".trim($_GET['keyword'])."%' ";
            }elseif($_GET['type']=='4'){
				$where.= "  AND `linktel` like '%".trim($_GET['keyword'])."%' ";
            }elseif($_GET['type']=='5'){
				$where.= "  AND `linkmail` like '%".trim($_GET['keyword'])."%' ";
            }elseif($_GET['type']=='6'){
				$where.=" AND `uid` like '%" .trim($_GET['keyword']). "%' ";
			}
			$urlarr['type']=$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];
		}
 
		if($mwhere!='1'){
			$username=$this->obj->DB_select_all("member",$mwhere." and `usertype`='2'","`username`,`uid`,`reg_date`,`login_date`,`status`,`source`");
			$uids=array();
			foreach($username as $val){
				$uids[]=$val['uid'];
			}
			$where.=" and `uid` in (".@implode(',',$uids).")";
		}

		$returnVisit = $this->obj->db_select_all('crmnew_return_visit', 
			'`status` = 0 and uid = ' . $_SESSION["auid"] . ' group by comid',
			'comid, next_time');

		if($_GET['return_visit']){
			$urlarr = array();
			$urlarr['return_visit'] = 1;

			$uids = array();
			$returnVisitArr = array();
			foreach($returnVisit as $r){
				$uids [] = $r['comid'];
				$returnVisitArr[$r['comid']] = $r['next_time'];
			}
			$where = 'uid in (' . implode(',', $uids) . ')';
		}
		else{
			
			$returnVisitNum = count($returnVisit) > 0 ? count($returnVisit) : 0;
			$this->yunset('returnVisitNum', $returnVisitNum);
		}

		if($_GET['order']){
			$where.=" AND `crm_uid` = '".$_SESSION['auid']."' order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" AND `crm_uid` = '".$_SESSION['auid']."' order by uid desc";
		}

		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
 		$rows=$this->get_page("company",$where,$pageurl,$this->config['sy_listnum']);
 		
		if(is_array($rows)&&$rows){
			if($mwhere=='1'&&empty($username)){
				foreach($rows as $v){
					$uids[]=$v['uid'];
				}

				$username=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uids).")","`username`,`uid`,`reg_date`,`login_date`,`reg_ip`,`status`,`source`,`login_ip`");
			}

			if($swhere=='1'&&empty($list)){
				$list=$this->obj->DB_select_all("company_statis","`uid` in (".@implode(",",$uids).")","`uid`,`pay`,`integral`,`rating`,`rating_name`,`vip_etime`,`msg_num`");
			}

			$usernameArr = array();
			foreach($username as $r){
				$usernameArr[$r['uid']] = $r['username'];
			}

			$listArr = array();
			foreach($list as $r){
				$listArr[$r['uid']] = $r;
			}

			
			$vipTimeoutUids = array();

			foreach($rows as $k=>$v){
 				if(strlen($v['name'])>24){
					$rows[$k]['name']=mb_substr($v['name'],"0","12","utf-8")."...";
 				}

				if($v['did']<1){
					$rows[$k]['did'] = 0;
				}

				if(isset($usernameArr[$v['uid']])){
					$rows[$k]['username'] = $usernameArr[$v['uid']];
				}
				if(isset($listArr[$v['uid']])){
					$val = $listArr[$v['uid']];
					$rows[$k]['rating']=$val['rating'];
					$rows[$k]['pay']=$val['pay'];
					$rows[$k]['rating_name']=$val['rating_name'];
					$rows[$k]['vip_etime']=$val['vip_etime'];
					$rows[$k]['integral']=$val['integral'];
					$rows[$k]['vip_done']=$this->config['com_vip_done'];

					if($v['crm_status'] == 2 && $val['vip_etime'] <= time()){
						$vipTimeoutUids [] = $v['uid'];
						$rows[$k]['crm_status'] = 0;
					}
				}

				if($_GET['return_visit']){
					$rows[$k]['next_time'] = isset($returnVisitArr[$val['uid']]) ? $returnVisitArr[$val['uid']] : '';
				}
			}

			
			$this->obj->DB_update_all('company', 'crm_status = 0', 'uid in (' . implode(',', $vipTimeoutUids) . ')');
		}
		
		$nav_user=$this->obj->DB_select_alls("admin_user","admin_user_group","a.`m_id`=b.`id` and a.`uid`='".$_SESSION["auid"]."'");
		
		$power=unserialize($nav_user[0]["group_power"]);
		if(in_array('141',$power)){
			$this->yunset("email_promiss", '1');
			$this->yunset("moblie_promiss", '1');
		} 

		$where=str_replace(array("(",")"),array("[","]"),$where);
		 
		$this->yunset("where", $where);
		$this->yunset("rows",$rows);
		$this->yunset("aname",$_SESSION['ausername']);

		$this->yuntpl(array('admin/crm_customer'));
	}

 	function add_action(){
  		if($_POST['submit']){
 			extract($_POST);
			if($username==""||mb_strlen($username)<2||mb_strlen($username)>15){
				$data['msg']= "会员名不能为空或不符合要求！";
				$data['type']='8';
			}elseif($password==""||mb_strlen($username)<2||mb_strlen($username)>15){
				$data['msg']= "密码不能为空或不符合要求！";
				$data['type']='8';
			}else{
				if($this->config['sy_uc_type']=="uc_center"){
					$this->uc_open();
					$user = uc_get_user($username);
				}else{
					if ($username!=""){
						$user = $this->obj->DB_select_once("member","`username`='$username'");
					}
					if ($email!=""){
						$comemail = $this->obj->DB_select_once("member","`email`='$email'");
					}
					if ($moblie!=""){
						$commoblie = $this->obj->DB_select_once("company","`linktel`='$moblie'");
					}
					if ($name!=""){
						$comname = $this->obj->DB_select_once("company","`name`='$name'");
					}
				}
				if(is_array($user)){
					$data['msg']= "用户名已存在！";
					$data['type']='8';
				}elseif(is_array($comemail)){
					$data['msg']= "邮箱已存在！";
					$data['type']='8';
				}elseif(is_array($commoblie)){
					$data['msg']= "联系手机已存在！";
					$data['type']='8';
				}elseif(is_array($comname)){
					$data['msg']= "公司全称已存在！";
					$data['type']='8';
				}else{
					$ip = fun_ip_get();
					$time = time();
					if($this->config['sy_uc_type']=="uc_center"){
						$uid=uc_user_register($_POST['username'],$_POST['password'],$_POST['email']);
						if($uid<0){
							$this->obj->get_admin_msg("index.php?m=com_member&c=add","该邮箱已存在！");
						}else{
							list($uid,$username,$email,$password,$salt)=uc_get_user($username);
							$value = "`username`='$username',`password`='$password',`email`='$email',`usertype`='2',`address`='$address',`status`='$status',`salt`='$salt',`moblie`='$moblie',`reg_date`='$time',`reg_ip`='$ip'";
						}
					}else{
						$salt = substr(uniqid(rand()), -6);
						$pass = md5(md5($password).$salt);
						$value = "`username`='$username',`password`='$pass',`email`='$email',`usertype`='2',`address`='$address',`status`='$status',`salt`='$salt',`moblie`='$moblie',`reg_date`='$time',`reg_ip`='$ip'";
					}
					$nid = $this->obj->DB_insert_once("member",$value);
					$uid = $nid;
					
					if($uid>0){
						$this->obj->DB_insert_once("company","`uid`='$uid',`name`='$name',`linkman`='$linkman',`linkphone`='$areacode-$telphone-$exten',`linktel`='$moblie',`linkmail`='$email',`address`='$address',`crm_uid`='".$_SESSION['auid']."',`crm_time`='".time()."'");
 						$value = "`uid`='$uid',";
						
						$ratingM = $this->MODEL('rating');
						$value.=$ratingM->rating_info();

						$this->obj->DB_insert_once("company_statis",$value);
						$data['msg']="会员(ID:".$uid.")添加成功";
						$data['type']='9';
					}
				}
			}
 			 
			if($data['type']=='9'){
				$this->ACT_layer_msg($data['msg'],$data['type'],"index.php?m=crm_customer",2,1);
			}else{
				$this->ACT_layer_msg($data['msg'],$data['type']);
			}
		}
  		$this->yuntpl(array('admin/crm_customer_add'));
	}

	function check_action(){
		$username=$_POST['username'];
		$member=$this->obj->DB_select_once("member","`username`='".$username."'","`uid`");
		echo $member['uid'];die;
	}

 	function Imitate_action(){
		extract($_GET);
		$user_info = $this->obj->DB_select_once("member","`uid`='".$uid."'");
		$this->cookie->add_cookie($user_info['uid'],$user_info['username'],$user_info['salt'],$user_info['email'],$user_info['password'],$user_info['usertype'],1,$user_info['did']);
		if($_GET['type']){
			$url = '/index.php?c=tongji';
		}
		header('Location: '.$this->config['sy_weburl'].'/member'.$url);
	}

	function getstatis_action(){
		$rating=$this->obj->DB_select_all("company_rating","`category`='1' order by `sort` asc","`id`,`name`");
		if(!empty($rating)){
			foreach($rating as $k=>$v){
                 $ratingarr[$v['id']]=$v['name'];
			}
		}
		$this->yunset("ratingarr",$ratingarr);

		if($_GET['uid']){
			$row= $this->obj->DB_select_once("company_statis","`uid`='".intval($_GET['uid'])."'");
			if($row['vip_etime']>0){
				$row['vipetime'] = date("Y-m-d",$row['vip_etime']);
			}else{
				$row['vipetime'] = '不限';
			}
			$this->yunset('row',$row);
 		}
		$this->yuntpl(array('admin/crm_customer_rating'));
	}

	function getrating_action(){

 		if($_POST['id']){
 			
			$rating	= $this->obj->DB_select_once("company_rating","`id`='".intval($_POST['id'])."' and `category`='1'");

			if($rating['service_time']>0){
				$rating['vip_etime'] = time()+$rating['service_time']*86400;
				$rating['vipetime'] = date("Y-m-d",$rating['vip_etime']);

 			}else{
				$rating['vip_etime'] = 0;
				$rating['vipetime'] = '不限';
 			}

			

			if($rating['time_start']<time() && $rating['time_end']>time()){
				$rating['price']=$rating['yh_price'];
			}else{
				$rating['price']=$rating['service_price'];
			}

			echo json_encode($rating);
		}
	}

	function uprating_action(){

		 if($_POST['ratuid']){
  			$uid = intval($_POST['ratuid']);
			$statis = $this->obj->DB_select_once("company_statis","`uid`='".$uid."'");

			unset($_POST['ratuid']);unset($_POST['pytoken']);

			if($_POST['rating']){

				foreach($_POST as $key=>$value){

					$statisValue[] = "`$key`='$value'";
				}

				$statisSqlValue = @implode(',',$statisValue);
				
				$ratinginfo = $this->obj->DB_select_once("company_rating","`id`='".$_POST['rating']."'");

				if($ratinginfo['time_start'] < time() && $ratinginfo['time_end'] > time()){
					$price = $ratinginfo['yh_price'];
				}else{
					$price = $ratinginfo['service_price'];
				}

				$statisSqlValue.=",`vip_stime`='".time()."'";
	 
				if($statis['rating'] != $_POST['rating']){
					$this->obj->DB_update_all("company_job","`rating`='".$_POST['rating']."'","`uid`='".$uid."'");
				}

				if(!empty($statis)){

					$id = $this->obj->DB_update_all("company_statis",$statisSqlValue,"`uid`='".$uid."'");

				}else{

					$id = $this->obj->DB_insert_once("company_statis",$statisSqlValue.",`uid`='".$uid."'");

				}
				if($id){
					
					 
					$dingdan=mktime().rand(10000,99999);
					$data['order_id']=$dingdan;
					$data['order_price']=$price;
					$data['order_time']=mktime();
					$data['order_state']="2";
					$data['type']="1";
					$data['crm_uid']=$_SESSION['auid'];
					$data['order_remark']="业务员（ID:".$_SESSION['auid']."）操作购买会员";
					$data['uid']=$uid;
					$data['rating']=$_POST['rating'];
					$this->obj->insert_into("company_order",$data);
	 
	 				echo '<input id="order_id" type="hidden" value="'. $dingdan .'">';

	 				if(empty($statis)){
	 					$this->MODEL('log')->admin_log("业务员ID:".$_SESSION['auid']."设置企业ID:".$uid."会员等级成功！", 8, 1, $id);
	 				}else{
	 					$this->MODEL('log')->admin_log("业务员ID:".$_SESSION['auid']."设置企业ID:".$uid."会员等级成功！", 8, 2, $id);
	 				}
 					 
					
					$this->obj->DB_update_all('company', "`crm_status` = 2", "`uid` = {$uid} ");
					
					$this->obj->DB_update_all('crmnew_return_visit', "`status`=1", "`uid`={$_SESSION['auid']} and `comid`={$uid} and `status` = 0");
					
					
					$datas['uid']=$_SESSION['auid']; 
					$datas['comid']=$uid; 
					$datas['status']=2; 
					$datas['time']=time();
					$datas['type']=1;
					$datas['order_id']=$dingdan;
 					$idd=$this->obj->insert_into('crmnew_concern',$datas);
					$this->MODEL('log')->admin_log("新增关怀记录{$idd}成功！", 7, 5, $idd);
					
					$this->ACT_layer_msg("业务员ID:".$_SESSION['auid']."设置企业ID:".$uid."会员等级成功！",9,"index.php?m=crm_customer",2);

				}else{
					$this->ACT_layer_msg("设置失败！",8,"index.php?m=crm_customer");
				}
			}else{
 				$this->ACT_layer_msg( "请选择会员等级！",8,"index.php?m=crm_customer");
			}

 		}else{
			$this->ACT_layer_msg( "非法操作！",8,"index.php?m=crm_customer");
		}

	}

	function del_action(){

		$this->check_token();

 	    if($_GET['del'] || $_GET['id']){
			if(is_array($_GET['del'])){
	            $layer_type=1;
	            $del=@implode(',',$_GET['del']);
	        }else{
	            $layer_type=0;
	            $del=intval($_GET['id']);
	        }
			$nid = $this->obj->DB_update_all("company","`crm_uid`='0'","`uid` in (".$del.")");
			
			if($nid){
				$this->obj->DB_delete_all('crmnew_return_visit', 
					"uid = {$_SESSION['auid']} and comid in ({$del})");

				$this->layer_msg("业务员(ID:".$_SESSION['auid'].")放弃关怀客户(UID:".$del.")成功！",9,0, 'index.php?m=crm_customer');
			}
			else{
				$this->layer_msg("放弃失败！",8,1);
			}
		}else{
			$this->layer_msg( "放弃失败！",8,1);
		}					 
	}

	
	function delreturn_action()
	{
		$this->check_token();

    if( $_GET['id']){			
      $del=intval($_GET['id']);
    
			$result = $this->obj->DB_delete_all('crmnew_return_visit', 
				"uid = {$_SESSION['auid']} and comid = {$del}");

			if($result){				
				$this->layer_msg("业务员(ID:".$_SESSION['auid'].")取消客户(UID:".$del.")回访提醒成功！",9,0, 'index.php?m=crm_customer');
			}
			else{
				$this->layer_msg("取消失败！",8,1);
			}
		}else{
			$this->layer_msg( "取消失败！",8,1);
		}			
	}
}
?>