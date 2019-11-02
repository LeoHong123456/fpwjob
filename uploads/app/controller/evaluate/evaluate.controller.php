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
class evaluate_controller extends common{ 
	function evaluate_tpl($tpl){
		$this->yuntpl(array('default/evaluate/'.$tpl));
	}
	
	function imgWebUrl($imgPath){
		return $this->config['sy_weburl']."/".$imgPath;
	}	
	
	function create_uuid($prefix = "yun"){    
		$str = md5(uniqid(mt_rand(), true));   
		$uuid  = substr($str,0,12);   
		return $prefix.$uuid; 
	}	
}
?>