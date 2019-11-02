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
class commsg_controller extends user{
	function index_action(){
		$this->public_action();
		$urlarr=array("c"=>"commsg","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$this->get_page("msg","`uid`='".$this->uid."' order by id desc",$pageurl,"10");
		$this->obj->DB_update_all("msg","`user_remind_status`='1'","`uid`='".$this->uid."' and `user_remind_status`='0'");
		$this->user_tpl('commsg');
	}
	function del_action(){
		$del=(int)$_GET['id']; 
		$nid=$this->obj->DB_delete_all("msg","`id`='".$del."' and `uid`='".$this->uid."'");
		if($nid){  
			$this->obj->member_log("删除求职咨询",18,3);
			$this->layer_msg('删除成功！',9,0,"index.php?c=commsg");
		}else{
			$this->layer_msg('删除失败！',8,0,"index.php?c=commsg");
		}
	}
}
?>