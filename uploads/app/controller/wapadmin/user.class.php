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
class user_controller extends adminCommon{
	function index_action(){  
		
		
		$list['user_num_dsh']=$this->obj->DB_select_num("member","usertype='1' and `status`='0'");
		$list['resume_num_dsh']=$this->obj->DB_select_num("resume_expect","`r_status`='0'");
		$list['wtresume_num_dsh']=$this->obj->DB_select_num("user_entrust","`status`='0'");
		$list['usercert_num_dsh']=$this->obj->DB_select_num("resume","`idcard_pic`<>'' and `idcard_status`='0'");
		$list['tiny_num_dsh']=$this->obj->DB_select_num("resume_tiny","`status`='0'");
		$this->yunset("list",$list);

		$this->yunset('backurl','index.php');
		$this->yunset("headertitle","个人用户管理");
		$this->yuntpl(array('wapadmin/user'));
	}
	function logout_action(){
		$this->adminlogout();
		$this->layer_msg("您已成功退出！",9,0,"index.php");
	}
}
?>