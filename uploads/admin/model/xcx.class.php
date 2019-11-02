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
class xcx_controller extends adminCommon{  
	function index_action(){
		$this->yuntpl(array('admin/admin_xcx'));
	}

	function save_action(){
		if($_POST["msgconfig"]){
			unset($_POST["msgconfig"]);
			unset($_POST["pytoken"]);
			foreach($_POST as $key=>$v){
				$config=$this->obj->DB_select_num("admin_config","`name`='$key'");
				if($config==false){
					$this->obj->DB_insert_once("admin_config","`name`='$key',`config`='".$v."'");
				}else{
					$this->obj->DB_update_all("admin_config","`config`='".$v."'","`name`='$key'");
				}
			}
			$this->web_config();
			$this->ACT_layer_msg("小程序设置更新成功！",9,$_SERVER['HTTP_REFERER'],2,1);
		}
	}
}

?>