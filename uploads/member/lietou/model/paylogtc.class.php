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
class paylogtc_controller extends lietou
{
	function index_action(){
		$this->public_action();
		
		$this->yunset("class",33);
		$this->lietou_tpl('paylogtc');
		
	}
}
?>