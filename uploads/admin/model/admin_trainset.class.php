<?php
/*
* $Author ：LEO
*
* 官网: http://www.fpwjob.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class admin_trainset_controller extends adminCommon{	 
	function index_action(){
		$this->yuntpl(array('admin/admin_train_config'));
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
		 $this->ACT_layer_msg($this->config['integral_pricename']."配置修改成功！",9,1,2,1);
		}
	}
	function set_action(){
		$this->yuntpl(array('admin/admin_integral_train'));
		
	}
	function logo_action(){
		if($_POST['submit']){ 
		    $this->logo_reset("sy_px_banner",$_POST['sy_px_banner']);
		    $this->logo_reset("sy_px_icon",$_POST['sy_px_icon']);
		    $this->logo_reset("sy_pxsubject_icon",$_POST['sy_pxsubject_icon']);
		    $this->logo_reset("sy_pxteacher_icon",$_POST['sy_pxteacher_icon']);
			$this->web_config();
			$this->ACT_layer_msg("会员头像配置设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
		}
		$this->yuntpl(array('admin/admin_pxlogo'));
	}
	function logo_reset($name,$value){
	    $logo = $this->obj->DB_select_once("admin_config","`name`='$name'");
	    if (!$logo){
	        $this->obj->DB_insert_once("admin_config","`config`='$value',`name`='$name'");
	    }elseif ($logo['config'] != $value){
	        unlink_pic("../".$logo['config']);
	        $this->obj->DB_update_all("admin_config","`config`='$value'","`name`='$name'");
	    }
	}
	function config_action(){
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
		 $this->ACT_layer_msg($this->config['integral_train']."配置修改成功！",9,1,2,1);
		}
	}
}
?>