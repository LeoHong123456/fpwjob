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
class message_controller extends siteadmin_controller{
	function index_action(){
		$this->siteadmin_tpl(array('admin_user_message'));
	}
	
	function save_action(){
		extract($_POST);
		$uidarr=array();
		if($all==1){
			$userrows=$this->obj->DB_select_all("member","`usertype`='1'");
			if(is_array($userrows)){
				foreach($userrows as $v){
					$uidarr[]=$v["uid"];
				}
			}
		}
		if($all==2){
			$userrows=$this->obj->DB_select_all("member","`usertype`='2'");
			if(is_array($userrows)){
				foreach($userrows as $v){
					$uidarr[]=$v["uid"];
				}
			}
		}
		if($all==3){
			$useremail=@explode(',',$userarr);
			if(is_array($useremail)){
				foreach($useremail as $v){
					$userarr=$this->obj->DB_select_once("member","`username`='".$v."'");
					if(is_array($userarr)){
						$uidarr[]=$userarr["uid"];
					}
				}
			}
		}
		if(!count($uidarr)){
			$this->ACT_layer_msg("没有符合条件的用户，请先检查！",8,$_SERVER['HTTP_REFERER']); 
		}
		$emailid=$this->send_message($uidarr,$message_title,$content,true);
	}
}
?>