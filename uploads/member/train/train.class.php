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
class train extends common{
	function public_action(){
		$now_url=@explode("/",$_SERVER['REQUEST_URI']);
		$now_url=$now_url[count($now_url)-1];
		$this->yunset("now_url",$now_url);
		$info=$this->obj->DB_select_once("px_train","`uid`='".$this->uid."'");
		$this->yunset("info",$info);
	}
	function train_tpl($tpl){
		$this->yuntpl(array('member/train/'.$tpl));
	}
	function train_satic(){
		$statis=$this->obj->DB_select_once("px_train_statis","`uid`='".$this->uid."'");
		$this->yunset("statis",$statis);
		return $statis;
	}
	function user_shell(){
		$userinfo=$this->obj->DB_select_once("px_train","`uid`='".$this->uid."'");
		if($userinfo['name']==""){
			$this->ACT_layer_msg("请先完善基本资料！",8,$_SERVER['HTTP_REFERER']);
		}
	}	
	function logout_action(){
		$this->logout();
	}
}
?>