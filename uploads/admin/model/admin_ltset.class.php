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
class admin_ltset_controller extends adminCommon{	 
	function index_action(){
		$lt_rows=$this->obj->DB_select_all("company_rating","`category`=2 order by sort desc");
		$this->yunset("lt_rows",$lt_rows);
		$this->yuntpl(array('admin/admin_lt_config'));
	}
	function set_action(){
		$this->yuntpl(array('admin/admin_integral_lt'));
		
	}
	function spend_action(){
		$this->yuntpl(array('admin/admin_integral_ltspend'));
		
	}
	function save_action(){
 		if($_POST["config"]){
			unset($_POST["config"]);
		   foreach($_POST as $key=>$v){
		    	$config=$this->obj->DB_select_num("admin_config","`name`='$key'");
			   if($config==false){
				$this->obj->DB_insert_once("admin_config","`name`='$key',`config`='".$v."'");
			   }else{
					$this->obj->DB_update_all("admin_config","`config`='".$v."'","`name`='$key'");

				   }
			 }
		 $this->web_config();
		 $this->ACT_layer_msg("配置修改成功！",9,1,2,1);
		}
	}
	function logo_action(){
	    if($_POST['submit']){
		    $this->logo_reset("sy_lt_icon",$_POST['sy_lt_icon']);
			$this->web_config();
			$this->ACT_layer_msg("会员头像配置设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
		}
		$this->yuntpl(array('admin/admin_ltlogo'));
	}
}
?>