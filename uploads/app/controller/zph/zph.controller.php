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
class zph_controller extends common{  
	function zph_tpl($tpl){
		$this->yuntpl(array($this->config['style'].'/zph/'.$tpl));
	}
	function Zphpublic_action(){
		if($this->config['sy_zph_web']=="2"){
			header("location:".Url('error'));
		}
	}
}
?>