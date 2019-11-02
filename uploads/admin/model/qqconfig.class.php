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
class qqconfig_controller extends adminCommon{
	function index_action()
	{
		$this->yunset("config",$this->config);
		$this->yuntpl(array('admin/admin_qq_config'));
	}

	
	function save_action()
	{
 		if($_POST['config']){
			unset($_POST['config']);
			foreach($_POST as $key=>$v){
		    	$config=$this->obj->DB_select_num("admin_config","`name`='".$key."'");
			    if($config==false){
					$this->obj->DB_insert_once("admin_config","`name`='".$key."',`config`='".$v."'");
			    }else{
					$this->obj->DB_update_all("admin_config","`config`='".$v."'","`name`='".$key."'");
			    }
		 	}
			$this->web_config();
			$this->ACT_layer_msg("快捷登录参数配置修改成功！",9,1,2,1);
		}
	}
}

?>