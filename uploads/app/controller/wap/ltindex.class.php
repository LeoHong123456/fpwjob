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
class ltindex_controller extends common{
	function index_action(){
		$this->seo("ltindex");
		$this->yunset("headertitle","猎头职位");
		$this->yuntpl(array('wap/ltindex'));
	}
	
	
}
?>