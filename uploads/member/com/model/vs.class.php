<?php
/* *
* $Author ：LEO
*
* 官网: https://www.fpwjob.com
*
* 版权所有 2018-2019 菲聘网，并保留所有权利。
*
*
*/
class vs_controller extends company
{
	function index_action(){
		$this->public_action();
		$this->company_satic();
		$this->yunset("js_def",7);
		$this->com_tpl('vs');
	}
	function save_action(){
		if($_POST['submit']){
			$info = $this->obj->DB_select_once("member","`uid`='".$this->uid."'","`salt`,`password`,`name_repeat`,`username`");
			if(is_array($info)){
				$oldpass = md5(md5($_POST['oldpassword']).$info['salt']);
				if($info['password']!=$oldpass){
 					$this->ACT_layer_msg("原始密码错误！",8,"index.php?c=vs");
				}
				if($this->config['sy_uc_type']=="uc_center" && $info['name_repeat']!="1"){
					$this->uc_open();
					$ucresult= uc_user_edit($info['username'], $_POST['oldpassword'], $_POST['password'], "","1");
					if($ucresult == -1) {
 						$this->ACT_layer_msg("原始密码错误！",8,"index.php?c=vs");
					}
				}else{
					$salt = substr(uniqid(rand()), -6);
					$pass2 = md5(md5($_POST['password']).$salt);
					$data['password']=$pass2;
					$data['salt']=$salt;
					$this->obj->update_once("member",$data,array("uid"=>$this->uid));
				}
				$this->cookie->unset_cookie();
				$this->obj->member_log("修改密码",8);
 				$this->ACT_layer_msg("密码修改成功，请重新登录！",9,$this->config['sy_weburl']."/index.php?m=login&usertype=".$_POST['usertype']);
			}
		}
	}
}
?>