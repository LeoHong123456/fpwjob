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
class train_member_controller extends siteadmin_controller
{
	function set_search(){
		$search_list[]=array("param"=>"rec","name"=>'推荐状态',"value"=>array("1"=>"已推荐","2"=>"未推荐"));
		$search_list[]=array("param"=>"status","name"=>'审核状态',"value"=>array("1"=>"已审核","4"=>"未审核","3"=>"未通过","2"=>"锁定"));
		$re_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"r_time","name"=>'注册时间',"value"=>$re_time);
		$last_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"l_time","name"=>'登录时间',"value"=>$last_time);
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$Train=$this->MODEL('train');
		$this->set_search();
		$where="`usertype`='4' ";
		if(trim($_GET['keyword']))
		{
			if((int)$_GET['type']=="1")
			{
				$where .=" and `username` LIKE'%".trim($_GET['keyword'])."%'";
			}elseif((int)$_GET['type']=='3'){
				$where .=" and `email` LIKE'%".trim($_GET['keyword'])."%'";
			}elseif((int)$_GET['type']=='4'){
				$where .=" and `moblie` LIKE'%".trim($_GET['keyword'])."%'";
			}elseif((int)$_GET['type']=="2"){

				$train=$Train->GetTrainAll(array("`name` LIKE'%".trim($_GET['keyword'])."%'"),array("field"=>"`uid`,`name`,`rec`,email_status,moblie_status,yyzz_status"));
				if(is_array($train))
				{
					foreach($train as $v)
					{
						$uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$uid).")";
			}
			$urlarr['type']=(int)$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];
		}
		if((int)$_GET['l_time']){
			if((int)$_GET['l_time']=='1'){
				$where.=" and `login_date` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `login_date` >= '".strtotime('-'.(int)$_GET['l_time'].'day')."'";
			}
			$urlarr['l_time']=(int)$_GET['l_time'];
		}
		if((int)$_GET['r_time']){
			if((int)$_GET['r_time']=='1'){
				$where.=" and `reg_date` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `reg_date` >= '".strtotime('-'.(int)$_GET['r_time'].'day')."'";
			}
			$urlarr['r_time']=(int)$_GET['r_time'];
		}
		if((int)$_GET['status']){
			if((int)$_GET['status']=="1"){
				$where .= " and `status`='1'";
			}elseif((int)$_GET['status']=="3"){
				$where .= " and `status`='3'";
			}elseif((int)$_GET['status']=="2"){
				$where .= " and `status`='2'";
			}else{
				$where .= " and `status`='0'";
			}
			$urlarr['status']=$_GET['status'];
		}
		if((int)$_GET['rec'])
		{
			if((int)$_GET['rec']=='2'){
				$re='0';
			}else{
				$re=(int)$_GET['rec'];
			}
			$rec=$Train->GetTrainAll(array("rec"=>$re),array("field"=>"uid"));
            if(is_array($rec) && !empty($rec)){
            	foreach($rec as $v){
            		$r_uid[]=$v['uid'];
            	}
            	$r_uids=@implode(",",$r_uid);
            }
			$where .= " and `uid` in ($r_uids)";
		}
		if($_GET['order']){
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by `uid` desc";
		}
		$urlarr['page']="{{page}}";
		$pageurl=Url("train_member",$urlarr,'admin');
		$userrows=$this->get_page("member",$where,$pageurl,$this->config['sy_listnum']);
		if(is_array($userrows))
		{
			if($_GET['type']!="2" || !trim($_GET['keyword']))
			{
				foreach($userrows as $v)
				{
					$uid[]=$v['uid'];
				}
				$train=$Train->GetTrainAll(array("`uid` in (".@implode(",",$uid).")"),array("field"=>"uid,name,rec,email_status,moblie_status,yyzz_status"));
			}
			foreach($userrows as $k=>$v)
			{
				foreach($train as $val)
				{
					if($v['uid']==$val['uid'])
					{
						$userrows[$k]['train_name']=$val['name'];
						$userrows[$k]['email_status']=$val['email_status'];
						$userrows[$k]['moblie_status']=$val['moblie_status'];
						$userrows[$k]['yyzz_status']=$val['yyzz_status'];
						$userrows[$k]['rec']=$val['rec'];
					}
				}
			}
		}
		$_GET['c']='';
		$this->yunset("userrows",$userrows);
		$lotime=array('1'=>'一天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$this->yunset("lotime",$lotime);
		$this->yunset("get_type",$_GET);
		$this->siteadmin_tpl(array('admin_member_trainlist'));
	}
	function lockinfo_action(){
		$member=$this->MODEL('userinfo')->GetMemberOne(array('uid'=>$POST['uid']),array('field'=>'lock_info'));
		echo $member['lock_info'];die;
	}
	function status_action(){
		 extract($_POST);
		 $id = @explode(",",$uid);
		 $Train=$this->MODEL('train');
		 $UserinfoM=$this->MODEL('userinfo');
		 $member=$UserinfoM->GetMemberList(array("`uid` in (".$uid.")"),array("field"=>"`email`,`uid`"));
		 
		 if(is_array($member)&&$member)
		 {
			$notice = $this->MODEL('notice');
			foreach($member as $v)
			{
				$idlist[] =$v['uid'];
        $notice->sendEmailType(array("uid"=>$v['uid'],"name"=>$info[$v['uid']],"email"=>$v['email'],"status_info"=>$statusbody,"date"=>date("Y-m-d H:i:s"),"type"=>"userstatus"));
			}
			$aid = @implode(",",$idlist);
			$id=$UserinfoM->UpdateMember(array("status"=>$status,"lock_info"=>$statusbody),array("`uid` IN (".$aid.")"));
			if($id){
				if($status==1){
					$rstatus="1";
				}else{
					$rstatus="2";
				}
				$Train->UpdateSubject(array("r_status"=>$rstatus),array("uid"=>$_POST['uid']));
				$Train->UpdateTeacher(array("r_status"=>$rstatus),array("uid"=>$_POST['uid']));
				$Train->UpdateTrain(array("r_status"=>$rstatus),array("uid"=>$_POST['uid']));
				$this->ACT_layer_msg("培训会员审核(ID:".$aid.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
			}else{
				$this->ACT_layer_msg("审核设置失败！",8,$_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->ACT_layer_msg( "非法操作！",8,$_SERVER['HTTP_REFERER']);
		}
	}
	function lock_action(){
		$Train=$this->MODEL('train');
		$UserinfoM=$this->MODEL('userinfo');
		$Train->UpdateSubject(array("r_status"=>$_POST['status']),array("uid"=>$_POST['uid']));
		$Train->UpdateTeacher(array("r_status"=>$_POST['status']),array("uid"=>$_POST['uid']));
		$Train->UpdateTrain(array("r_status"=>$_POST['status']),array("uid"=>$_POST['uid']));
		$info=$Train->GetTrainInfo(array("uid"=>$_POST['uid']),array("field"=>"name,linkmail"));
		$id=$UserinfoM->UpdateMember(array("status"=>$_POST['status'],"lock_info"=>$_POST['lock_info']),array("uid"=>$_POST['uid']));
		$notice = $this->MODEL('notice');
		$notice->sendEmailType(array("email"=>$info['linkmail'],"uid"=>$_POST['uid'],"name"=>$info['name'],"lock_info"=>$_POST['lock_info'],"type"=>"lock"));
		$id?$this->ACT_layer_msg("培训会员(ID:".$_POST['uid'].")锁定设置成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg( "设置失败！",8,$_SERVER['HTTP_REFERER']);
	}
	function rec_action(){
		$this->check_token();
		$Train=$this->MODEL('train');
		$nid=$Train->UpdateTrain(array("rec"=>(int)$_GET['rec']),array("uid"=>(int)$_GET['id']));
		$this->MODEL('log')->admin_log("培训机构推荐(ID:".(int)$_GET['id'].")设置成功");
		echo $nid?1:0;die;
	}
	function edit_action(){
		if((int)$_GET['id']){
			$UserinfoM=$this->MODEL('userinfo');
			$Train=$this->MODEL('train');
			$com_info = $UserinfoM->GetMemberOne(array("uid"=>(int)$_GET['id']));
			$row = $Train->GetTrainInfo(array("uid"=>(int)$_GET['id']));
			$this->yunset("com_info",$com_info);
			$this->yunset("row",$row);
            $this->yunset($this->MODEL('cache')->GetCache(array('com','subject','city')));
		}
		if($_POST['submit']){
			$Train=$this->MODEL('train');
			$UserinfoM=$this->MODEL('userinfo');
			$tval=$mval=array();
			$mem = $UserinfoM->GetMemberOne(array('uid'=>(int)$_POST['uid']));
			if($mem['username']!=$_POST['username'] && $_POST['username']!=""){
				$num = $this->obj->DB_select_num("member","`username`='".$_POST['username']."'");
				if($num>0){
					$this->ACT_layer_msg("用户名已存在！",8);
				}else{
					$mval['username']=$_POST['username'];					
				}
			}
			$moblienum=$this->obj->DB_select_num("member","moblie='".$_POST['moblie']."' and `uid`<>'".$_POST['uid']."'");
			$emailnum=$this->obj->DB_select_num("member","email='".$_POST['email']."' and `uid`<>'".$_POST['uid']."'");
			$linkphonenum=$this->obj->DB_select_num("px_train","linkphone='".$_POST['linkphone']."' and `uid`<>'".$_POST['uid']."'");
			if($_POST['moblie']&&!CheckMoblie($_POST['moblie'])){
				$this->ACT_layer_msg("手机号码格式错误！",8);
			}elseif($_POST['moblie']&&$moblienum){
				$this->ACT_layer_msg("手机号码已存在！",8);
			}
			if($_POST['email']&& CheckRegEmail($_POST['email'])==false){
				$this->ACT_layer_msg("联系邮箱格式错误！",8);
			}elseif($_POST['email']&&$emailnum){
				$this->ACT_layer_msg("联系邮箱已存在！",8);
			}
			if($_POST['linkphone']&& CheckTell($_POST['linkphone'])==false){
				$this->ACT_layer_msg("联系电话格式错误！",8);
			}elseif($_POST['linkphone']&&$linkphonenum){
				$this->ACT_layer_msg("联系电话已存在！",8);
			}
			if($_POST['password']){
				$salt = substr(uniqid(rand()), -6);
				$pass = md5(md5($_POST['password']).$salt);
				$mval['password']=$pass;
				$mval['salt']=$salt;
			}
			$mval['status']=$_POST['status'];
			if($_POST['status']=="2"){

				$Train->UpdateSubject(array("r_status"=>$_POST['status']),array("uid"=>$_POST['uid']));
				$Train->UpdateTeacher(array("r_status"=>$_POST['status']),array("uid"=>$_POST['uid']));
				$Train->UpdateTrain(array("r_status"=>$_POST['status']),array("uid"=>$_POST['uid']));
				$tval['r_status']=$_POST['status'];
				$mval['lock_info']=$_POST['lock_info'];
			}
			$mval['email']=$_POST['email'];
			$mval['moblie']=$_POST['moblie'];
			$UserinfoM->UpdateMember($mval,array("uid"=>$_POST['uid']));
            
			
			$value.="`name`='".$_POST['name']."',";
			$value.="`linkmail`='".$_POST['email']."',";
			$value.="`linktel`='".$_POST['moblie']."',";
			$value.="`linkphone`='".$_POST['linkphone']."',";
			$value.="`linkqq`='".$_POST['linkqq']."',";
			$value.="`address`='".$_POST['address']."',";
			$value.="`sid`='".$_POST['sid']."',";
			$value.="`pr`='".$_POST['pr']."',";
			$value.="`mun`='".$_POST['mun']."',";
			$value.="`provinceid`='".$_POST['provinceid']."',";
			$value.="`cityid`='".$_POST['cityid']."',";
			$value.="`threecityid`='".$_POST['threecityid']."',";
			$value.="`linkman`='".$_POST['linkman']."',";
			$value.="`website`='".$_POST['website']."',";
			$content=str_replace(array("&amp;","background-color:#ffffff","background-color:#fff","white-space:nowrap;"),array("&",'','',''),$_POST['content']);
			$value.="`content`='".$content."'";			
			delfiledir("../data/upload/tel/".$_POST['uid']);
			$this->obj->DB_update_all("px_train",$value,"`uid`='".$_POST['uid']."'");
			$this->ACT_layer_msg("培训会员(ID:".$_POST['uid'].")修改成功！",9,"index.php?m=train_member",2,1);
		}
		$this->siteadmin_tpl(array('admin_member_trainedit'));
	}
	function del_action(){
		$this->check_token();
	    if($_GET['del']){
	    	$del=$_GET['del'];
	    	if($del){
				$Train=$this->MODEL('train');
				$del_array=array("member","px_train","px_banner","px_subject","px_teacher","px_train_news","px_train_show","px_train_statis","answer","answer_review","company_order","evaluate_log","attention","invoice_record","member_log");
	    		if(is_array($_GET['del'])){
					$layer_type='1';
	    			$uids = pylode(",",$_GET['del']);
					$del=$uids ;

					$Friend=$this->MODEL('friend');
					$photo = $Train->GetTrainAll(array("`uid` in (".$uids.") and `logo`<>''"),array("field"=>"logo"));
					if(is_array($photo))
					{
				    	foreach($photo as $val)
				    	{
				    		unlink_pic("../".$val['logo']);
				    	}
					}
					$banner = $Train->GetBannerAll(array("`uid` in (".$uids.") and `pic`<>''"),array("field"=>"pic"));
					if(is_array($banner))
					{
				    	foreach($banner as $val)
				    	{
				    		unlink_pic($val['pic']);
				    	}
					}
					

					foreach($del_array as $value)
					{
						$this->obj->DB_delete_all($value,"`uid` in (".$uids.")","");
					}
					$Train->DeleteTrain($uids);
		    	}else{
					$layer_type='0';
					$photo = $this->obj->DB_select_all("px_train","`uid`='".$del."' and `logo`<>''");
					if(is_array($photo))
					{
				    	unlink_pic("../".$photo['logo']);
					}
					$banner = $this->obj->DB_select_all("px_banner","`uid`='".$del."' and `pic`<>''");
					if(is_array($banner))
					{
				    	unlink_pic($banner['pic']);
					}
					$show = $this->obj->DB_select_all("px_train","`uid`='".$del."' and `picurl`<>''");
					if(is_array($show))
					{
				    	unlink_pic(".".$show['picurl']);
					}
					
					foreach($del_array as $value){
						$this->obj->DB_delete_all($value,"`uid`='".$del."'","");
					}
					$Train->DeleteTrain($del);
		    	}
				$this->layer_msg('培训会员(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg('请选择您要删除的会员！',8,1,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	}
}

?>