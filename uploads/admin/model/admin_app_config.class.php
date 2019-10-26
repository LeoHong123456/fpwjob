<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class admin_app_config_controller extends adminCommon{  
	function index_action(){
		$this->yuntpl(array('admin/admin_app_config'));
	}
	function save_action(){
	    $_POST=$this->post_trim($_POST);
	    if ($_POST['sy_push_open'] && PHP_VERSION >= '5.5'){
	        $data['sy_push_open'] = 1;
	    }else{
	        $data['sy_push_open'] = 2;
	    }
	    $data['sy_push_appid'] = $_POST['sy_push_appid'];
	    $data['sy_push_appsecret'] = $_POST['sy_push_appsecret'];
	    $data['sy_push_appkey'] = $_POST['sy_push_appkey'];
	    $data['sy_push_masterSecret'] = $_POST['sy_push_masterSecret'];
	    if ($_POST['sy_iospay']){
	        $data['sy_iospay'] = 1;
	    }else{
	        $data['sy_iospay'] = 2;
	    }
	    if ($_POST['sy_ioslocation']){
	        $data['sy_ioslocation'] = 1;
	    }else{
	        $data['sy_ioslocation'] = 2;
	    }
	    foreach($data as $key=>$v){
	        $config=$this->obj->DB_select_once("admin_config","`name`='$key'");
	        if($config==false){
	            $this->obj->DB_insert_once("admin_config","`name`='$key',`config`='".$v."'");
	        }else{
	            $this->obj->DB_update_all("admin_config","`config`='".$v."'","`name`='$key'");
	        }
	    }
	    $this->web_config();
	    if ($_POST['sy_push_open'] && PHP_VERSION < '5.5'){
	        $this->ACT_layer_msg("PHP版本低于5.5，无法使用推送！",8,$_SERVER['HTTP_REFERER'],2,1);
	    }else{
	        $this->ACT_layer_msg("App设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
	    }
	}
	function version_action(){
	    $this->yuntpl(array('admin/admin_app_version'));
	}
	function saveversion_action(){
	    $_POST=$this->post_trim($_POST);
	    $data['iosversion'] = $_POST['iosversion'];
	    $data['iosurl'] = $_POST['iosurl'];
	    $data['androidversion'] = $_POST['androidversion'];
	    $data['androidurl'] = $_POST['androidurl'];
	    $data['apptitle'] = $_POST['apptitle'];
	    $data['appcontent'] = $_POST['appcontent'];
	    foreach($data as $key=>$v){
	        $config=$this->obj->DB_select_once("admin_config","`name`='$key'");
	        if($config==false){
	            $this->obj->DB_insert_once("admin_config","`name`='$key',`config`='".$v."'");
	        }else{
	            $this->obj->DB_update_all("admin_config","`config`='".$v."'","`name`='$key'");
	        }
	    }
	    $this->web_config();
	    $this->ACT_layer_msg("App版本更新设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
	}
}

?>