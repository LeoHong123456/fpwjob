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
class up_msg_controller extends user{
	function index_action(){
		$id=(int)$_POST['id'];
		$u_id=$this->obj->update_once('userid_msg',array('is_browse'=>'2'),array('id'=>$id,'uid'=>$this->uid));
		if($u_id){
			
			echo 1;die;
		}else{
			echo 0;die;
		}
	}
}
?>