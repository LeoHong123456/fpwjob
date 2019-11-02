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
class company_controller extends adminCommon{
	function index_action(){  
		$this->yunset("headertitle","企业管理");
		
		$list['job_num_dsh']=$this->obj->DB_select_num("company_job","state='0'");
		$list['com_num_dsh']=$this->obj->DB_select_num("member","usertype='2' and `status`='0'");
		$list['comcert_num_dsh']=$this->obj->DB_select_num("company_cert","`type`='3' and `status`='0'");
		$list['comnews_num_dsh']=$this->obj->DB_select_num("company_news","`status`='0'");
		$list['comproduct_num_dsh']=$this->obj->DB_select_num("company_product","`status`='0'");
		$list['oncejob_num_dsh']=$this->obj->DB_select_num("once_job","`status`='0'");
		$this->yunset("list",$list);
		
		
		$this->yunset('backurl','index.php');
		$this->yuntpl(array('wapadmin/company'));
	}
	function logout_action(){
		$this->adminlogout();
		$this->layer_msg("您已成功退出！",9,0,"index.php");
	}
}
?>