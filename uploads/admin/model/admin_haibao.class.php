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
class admin_haibao_controller extends adminCommon{
	function index_action(){
		$this->yuntpl(array('admin/admin_haibao_config'));
	}
	
	function save_action(){
 		if($_POST['config']){
			unset($_POST['config']);
		    foreach($_POST as $key=>$v){
		    	$config=$this->obj->DB_select_num("admin_config","`name`='$key'");
			    if($config==false){
					$this->obj->DB_insert_once("admin_config","`name`='$key',`config`='".$v."'");
			    }else{
					$this->obj->DB_update_all("admin_config","`config`='".$v."'","`name`='$key'");
			    }
		 	}
			$this->web_config();
			$this->ACT_layer_msg( "海报配置设置成功！",9,1,2,1);
		 }
	}

	function get_restnum_action(){
	    $haibaouser=iconv('utf-8','gbk',trim($_POST['haibaouser']));
	    $key=trim($_POST['key']);

		
		$url='http://haibao.phpyun.com/restnum.php';
		$url.="?haibaouser=".$haibaouser."&key=".$key;
	    
		if (extension_loaded('curl')){
	        $file_contents = CurlGet($url);

	    }else if(function_exists('file_get_contents')){
	        $file_contents = file_get_contents($url);

	    }

 	    echo $file_contents;die;
		 
	}
}
?>