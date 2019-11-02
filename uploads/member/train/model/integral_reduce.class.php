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
class integral_reduce_controller extends train{
	function index_action(){
		$this->public_action();
		$this->train_satic();
		$this->train_tpl('integral_reduce');
	}
}
?>