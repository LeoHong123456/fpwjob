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
class makenews_controller extends adminCommon{
	function index_action(){
		$this->yunset("type","news");
		$this->yuntpl(array('admin/admin_makenews'));
	}
	
	function makecache_action(){
		extract($_POST);
	}

}
?>