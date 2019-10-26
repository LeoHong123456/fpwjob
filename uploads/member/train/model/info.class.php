<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class info_controller extends train{
	function index_action(){
		$row=$this->obj->DB_select_once("px_train","`uid`='".$this->uid."'");
		$this->yunset("row",$row);
		$this->yunset($this->MODEL('cache')->GetCache(array('com','city','subject')));
		$this->public_action();
		$this->train_satic();
		$this->train_tpl('info');
	}
	function save_action(){
	    $Member=$this->MODEL("userinfo");
	    $_POST=$this->post_trim($_POST);
	    $row=$this->obj->DB_select_once("px_train","`uid`='".$this->uid."'");
	    if($row['moblie_status']==1){
	        unset($_POST['linktel']);
	    }else{
	        $moblieNum = $Member->GetMemberNum(array("moblie"=>$_POST['linktel'],"`uid`<>'".$this->uid."'"));
	        if($_POST['linktel']==''){
	            $this->ACT_layer_msg("手机号码不能为空！",8);
	        }elseif(!CheckMoblie($_POST['linktel'])){
	            $this->ACT_layer_msg("手机号码格式错误！",8);
	        }elseif($moblieNum>0){
	            $this->ACT_layer_msg("手机号码已存在！",8);
	        }else{
	            $mvalue['moblie']=$_POST['linktel'];
	        }
	    }
	    if($row['email_status']==1){
	        unset($_POST['linkmail']);
	    }else{
	        $emailNum = $Member->GetMemberNum(array("email"=>$_POST['linkmail'],"`uid`<>'".$this->uid."'"));
	        if($_POST['linkmail']&&CheckRegEmail($_POST['linkmail'])==false){
	            $this->ACT_layer_msg("联系邮箱格式错误！",8);
	        }elseif($_POST['linkmail']&&$emailNum>0){
	            $this->ACT_layer_msg("联系邮箱已存在！",8);
	        }else{
	            $mvalue['email']=$_POST['linkmail'];
	        }
	    }
	    $_POST['content'] = str_replace(array("&amp;","background-color:#ffffff","background-color:#fff","white-space:nowrap;"),array("&",'background-color:','background-color:','white-space:'),$_POST['content']);
	    $nid=$this->obj->update_once("px_train",$_POST,array("uid"=>$this->uid));
	    if($nid){
	        if(!empty($mvalue)){
	            $this->obj->update_once('member',$mvalue,array("uid"=>$this->uid));
	        }
	        $this->obj->member_log("完善基本资料",7);
	        if($row['name']==""){
	            $IntegralM=$this->MODEL('integral');
	            $IntegralM->company_invtal($this->uid,$this->config['integral_userinfo'],true,"首次填写基本资料",true,2,'integral',25);
	        }
	        $this->ACT_layer_msg("更新成功！",9,"index.php?c=info");
	    }else{
	        $this->ACT_layer_msg("更新失败！",8,"index.php?c=info");
	    }
	}
}
?>