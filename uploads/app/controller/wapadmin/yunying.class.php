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
class yunying_controller extends adminCommon{ 
	function index_action(){ 
	    $this->yunset('backurl','index.php');
	    $this->yunset("headertitle","运营");
		$this->yuntpl(array('wapadmin/admin_yunying'));
	} 
}

?>