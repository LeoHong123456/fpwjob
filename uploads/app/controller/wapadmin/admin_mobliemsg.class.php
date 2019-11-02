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
class admin_mobliemsg_controller extends adminCommon{
	function index_action(){
		$where="1";
		$where.=" order by `id` desc";
		$urlarr['c']=$_GET['c'];
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		$rows=$this->get_page("moblie_msg",$where,$pageurl,$this->config['sy_listnum']);
		$this->yunset("get_type", $_GET);
		$this->yunset("headertitle","短信记录");
		$this->yuntpl(array('wapadmin/admin_mobliemsg'));
	}
	function del_action(){
		
		$delid=(int)$_GET['id'];
		if(!$delid){
			$this->layer_msg('请选择要删除的记录！',8,0,$_SERVER['HTTP_REFERER']);
		}
		$del=$this->obj->DB_delete_all("moblie_msg","`id`='".$delid."'");
		if($del){
		    $this->layer_msg('短信记录(ID:'.$delid.')删除成功！',9,0,$_SERVER['HTTP_REFERER']);
		}else{
		    $this->layer_msg('删除失败！',8);
		}
	}
}

?>