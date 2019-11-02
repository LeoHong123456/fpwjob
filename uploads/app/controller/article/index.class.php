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
class index_controller extends article_controller{ 
	function index_action(){
		$this->seo("news");
		$this->news_tpl('index');
	} 
}
?>