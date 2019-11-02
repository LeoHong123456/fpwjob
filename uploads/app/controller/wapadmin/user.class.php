<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
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