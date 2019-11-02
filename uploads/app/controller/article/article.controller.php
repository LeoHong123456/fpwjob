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
class article_controller extends common{ 
	function news_tpl($tpl){
		$this->yuntpl(array($this->config['style'].'/article/'.$tpl));
	}
}
?>