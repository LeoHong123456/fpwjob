<?php
/* *
* $Author ：LEO
*
* 官网: http://www.fpwjob.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class paymanage_controller extends lietou
{
	function index_action()
	{
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		$this->public_action();
		$urlarr=array("c"=>"paymanage","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$where="`uid`='".$this->uid."' and `order_state`='2'";
		$this->get_page("company_order",$where,$pageurl,"10");
		$this->yunset("class","28");
		$this->lietou_tpl('paymanage');
	}
}
?>