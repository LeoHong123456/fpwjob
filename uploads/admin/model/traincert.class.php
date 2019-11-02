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
class traincert_controller extends adminCommon{
	
	function set_search(){
		$search_list[]=array("param"=>"status","name"=>'审核状态',"value"=>array("3"=>"未审核","1"=>"已审核","2"=>"未通过"));
		$ad_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"apply","name"=>'申请时间',"value"=>$ad_time);
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$this->set_search();
		$where="`type`='5'";
		if($_GET['status']){
			if($_GET['status']=='3'){
				$where .= " and `status`='0'";
				$urlarr['status']=$_GET['status'];
			}else{
				$where .= " and `status`='".$_GET['status']."'";
				$urlarr['status']=$_GET['status'];
			}
		}
		if(trim($_GET['keyword'])){
			$cwhere.="`name` like '%".trim($_GET['keyword'])."%'";
			$urlarr['keyword']=$_GET['keyword'];
			$px=$this->obj->DB_select_all("px_train",$cwhere,"`uid`,`name`");
			if(is_array($px)){
				foreach($px as $val){
					$pxids[]=$val['uid'];
				}
			}
			$where.=" and `uid` in(".@implode(',',$pxids).")";
		}
		if($_GET['apply']){
			if($_GET['apply']=='1'){
				$where.=" and `ctime` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `ctime` >= '".strtotime('-'.(int)$_GET['apply'].'day')."'";
			}
			$urlarr['apply']=$_GET['apply'];
		}
		if($_GET['order']){
			$where.=" order by `".$_GET['t']."` ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by status asc,id desc";
		}
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		$urlarr['page']="{{page}}";
		$urlarr=Url($_GET['m'],$urlarr,'admin');
		$rows = $this->get_page("company_cert",$where,$urlarr,$this->config['sy_listnum']);
		if($rows && is_array($rows)){
			if($com==''||is_array($com)==false){
				$uids=array();
				foreach($rows as $k => $v){
					if(in_array($v['uid'],$uids)==false){
						$uids[]=$v['uid'];
					}
				}
				$train=$this->obj->DB_select_all("px_train","`uid` in(".pylode(',',$uids).")","`uid`,`name`");
			}
			foreach($rows as $k => $v){
				foreach($train as $val){
					if($v['uid'] == $val['uid']){
						$rows[$k]['name'] = $val['name'];
					}
				}
			}
		}
		$this->yunset("rows",$rows);
		$this->yunset("get_type",$_GET);
		$this->yuntpl(array('admin/admin_train_cert'));
	}
	function sbody_action(){
		$userinfo = $this->obj->DB_select_once("company_cert","`id`=".$_POST['pid'],"`statusbody`");
		echo $userinfo['statusbody'];die;
	}
	function status_action(){
		extract($_POST);
		if($pid){
			$company=$this->obj->DB_select_once("px_train","`uid`='".$uid."'","`cert`,`linkmail`,`name`");
			if($status!="1"){
				$yyzz_status="0";
			}else{
				$yyzz_status="1";
			}
			$this->obj->DB_update_all("px_train","`yyzz_status`='".$yyzz_status."'","`uid`='".$uid."'");
			$id=$this->obj->DB_update_all("company_cert","`status`='".$status."',`statusbody`='".$statusbody."'","`id`='".$pid."'");
			if($this->config['sy_email_comcert']=='1'){
        		$notice = $this->MODEL('notice');
				$notice->sendEmailType(array("email"=>$company['linkmail'],"certinfo"=>$statusbody,"comname"=>$company['name'],'uid'=>$uid,'name'=>$company['name'],"type"=>"comcert"));
			}
			if($id){
				if($status=="1"){
					$this->automsg("培训机构认证审核通过",$uid);
				}elseif($status=="2"){
					$this->automsg("培训机构认证审核未通过",$uid);
				}
				$this->ACT_layer_msg("培训机构认证审核(UID:".$uid.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
			}else{
				$this->ACT_layer_msg("设置失败！",8,$_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->ACT_layer_msg("非法操作！",8,$_SERVER['HTTP_REFERER']);
		}
	}

	function del_action(){
		if(is_array($_POST['del'])){
			$linkid=@implode(',',$_POST['del']);
			$type=1;
		}else{
			$this->check_token();
			$linkid=$_GET['uid'];
			$type=0;
		}
		if($linkid==""){
			$this->layer_msg('请选择您要删除的数据！',8,1,$_SERVER['HTTP_REFERER']);
		}
		$this->obj->DB_update_all("px_train","`yyzz_status`='0'","`uid` in (".$linkid.")");
	    $cert=$this->obj->DB_select_all("company_cert","`uid` in (".$linkid.") and `type`='5'","`check`");
	    if(is_array($cert)){
	     	foreach($cert as $v){
	     		unlink_pic("../".$v['check']);
	     	}
	    }
		$delid=$this->obj->DB_delete_all("company_cert","`uid` in (".$linkid.")  and `type`='5'","");
		$delid?$this->layer_msg('培训机构认证(UID:'.$linkid.')删除成功！',9,$type,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,$type,$_SERVER['HTTP_REFERER']);
	}

	function pxcertNum_action(){
		$MsgNum = $this->MODEL('msgNum');
		echo $MsgNum->pxcertNum();
	}
}

?>