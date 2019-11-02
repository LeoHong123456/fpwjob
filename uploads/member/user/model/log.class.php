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
class log_controller extends user{
	function index_action(){
		if($_POST){	
			
			$_POST['uid'] = $this->uid;
			$_POST['usertype'] = $this->usertype;
			$LogM = $this->MODEL('log');
			 
			if($_COOKIE["delay"]==""){
				$nid = $LogM->addUserLog($_POST);
				$this->cookie->SetCookie("delay",$nid,time() + 60);
				echo $nid;die;
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