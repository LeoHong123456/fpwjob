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
class log_controller extends company{

	function index_action(){
		if($_POST){	
			
			$_POST['uid'] = $this->uid;
			$_POST['usertype'] = $this->usertype;
			$LogM = $this->MODEL('log');
			 
			if($_COOKIE["delay"]==""){
				$nid = $LogM->addUserLog($_POST);
				$this->cookie->SetCookie("delay",$nid,time() + 60);
				echo $nid; die;
			}else{

				$ul = $this->obj->DB_select_once("user_log","`id`='".$_COOKIE["delay"]."'","`second`,`opera`");
				
				if($ul['opera']==$_POST['opera']){
					
					$data['id'] = $_COOKIE["delay"];
					$data['orderid'] = $_POST["orderid"];
					$data['second'] = $_POST['second']+$ul['second'];
					$LogM->updateUserLog($data);
					echo $_COOKIE["delay"];die;

				}else{

					$nid = $LogM->addUserLog($_POST);
					$this->cookie->SetCookie("delay",$nid,time() + 60);
					echo $nid;die;

				}
			}
 		}
	} 

	function gxLog_action(){
		if($_POST){
			if($_COOKIE["delay"]!=""){
				$ul = $this->obj->DB_select_once("user_log","`id`='".$_COOKIE["delay"]."'","`second`");
				$_POST['second']=$_POST['second']+$ul['second'];
			}
			$LogM = $this->MODEL('log');
			$_POST['uid'] = $this->uid;
			$_POST['usertype'] = $this->usertype;
			$LogM->updateUserLog($_POST);
		}
	}
	 
}
?>