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
class wapim_controller extends common{
	function index_action(){
	    $this->seo('wap');
	    if ($this->config['sy_chat_open']==1){
	        if ($this->config['chat_platform']==2){   
	            $this->yuntpl(array('wap/wapim_easemob'));
	        }elseif ($this->config['chat_platform']==3){  
	            $this->yuntpl(array('wap/wapim_rongcloud'));
	        }
	    }
	}
	
}
?>