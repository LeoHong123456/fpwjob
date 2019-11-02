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
class paymanage_controller extends company
{

	function index_action()
	{
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		$this->public_action();
		$urlarr=array("c"=>"paymanage","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$where="`uid`='".$this->uid."' and `order_state`='2' order by order_time desc";
		$this->get_page("company_order",$where,$pageurl,"10");
		$this->yunset("js_def",4);
		$this->com_tpl('paymanage');
	}
}
?>