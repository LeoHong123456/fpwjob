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
class map_controller extends common{ 
	function map_tpl($tpl){
		$this->yuntpl(array('default/map/'.$tpl));
	}
}
?>