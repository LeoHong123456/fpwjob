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
class school_controller extends common{
	function public_action(){
		$this->yunset('schoolstyle',TPL_PATH.'school');
		$this->yunset('school_style',$this->config['sy_weburl'].'/app/template/school');
		$this->yunset('uid',$this->uid);
		$this->yunset('username',$this->username);
	}
	function school_tpl($tpl){
		
        $this->yuntpl(array('school/'.$tpl));
        
	}
}
?>