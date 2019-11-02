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
class train_controller extends common{	
	function public_action(){
		$this->yunset("trainstyle",TPL_PATH."train");
		$this->yunset("train_style",$this->config['sy_weburl']."/app/template/train");
		$this->yunset("uid",$this->uid);
		$this->yunset("username",$this->username);
	}
	function train_tpl($tpl){
		$this->yuntpl(array('train/'.$tpl));
	}
}
?>