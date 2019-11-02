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
class admin_chat_config_controller extends adminCommon{  
	function index_action(){
		$this->yuntpl(array('admin/admin_chat_config'));
	}

	function save_action(){
	    if($_POST['sy_chat_logo']){
	        $config = $this->obj->DB_select_once("admin_config","`name`='sy_chat_logo'");
	        if($_POST['sy_chat_logo']!=$config['config']){
				$logo = $this->checksrc($_POST['sy_chat_logo'],$config['config']);
			}else{
				$logo = $config['config'];
			}
	        if ($config){
	            $this->obj->DB_update_all("admin_config","`config`='".$logo."'","`name`='sy_chat_logo'");
	        }else{
	            $this->obj->DB_insert_once("admin_config","`config`='".$logo."',`name`='sy_chat_logo'");
	        }
	    }
	    if ($_POST['sy_chat_open'] && PHP_VERSION >= '5.5'){
	        $data['sy_chat_open'] = 1;
	    }else{
	        $data['sy_chat_open'] = 2;
	    }
	    $data['sy_chat_type'] = $_POST['sy_chat_type'];
	    $data['chat_platform'] = $_POST['chat_platform'];
	    $data['sy_easemob_orgname'] = $_POST['sy_easemob_orgname'];
	    $data['sy_easemob_appname'] = $_POST['sy_easemob_appname'];
	    $data['sy_easemob_clientid'] = $_POST['sy_easemob_clientid'];
	    $data['sy_easemob_clientSecret'] = $_POST['sy_easemob_clientSecret'];
	    $data['sy_rong_appkey'] = $_POST['sy_rong_appkey'];
	    $data['sy_rong_appsecret'] = $_POST['sy_rong_appsecret'];
	    foreach($data as $key=>$v){
	        $config=$this->obj->DB_select_once("admin_config","`name`='$key'");
	        if($config==false){
	            $this->obj->DB_insert_once("admin_config","`name`='$key',`config`='".$v."'");
	        }else{
	            $this->obj->DB_update_all("admin_config","`config`='".$v."'","`name`='$key'");
	        }
	    }
	    $this->web_config();
	    if ($_POST['sy_chat_open'] && PHP_VERSION < '5.5'){
	        $this->ACT_layer_msg("PHP版本低于5.5，无法使用聊天！",8,$_SERVER['HTTP_REFERER'],2,1);
	    }else{
	        $this->ACT_layer_msg("聊天设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
	    }
	}
}

?>