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
class sysnews_controller extends train{
	function index_action(){
		$urlarr=array("c"=>"sysnews","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$this->get_page("sysmsg","`fa_uid`='".$this->uid."' order by `id` desc",$pageurl,"10");
		$this->public_action();
		$this->train_satic();
		$this->train_tpl('sysnews');
	}
	function del_action(){
		if($_GET['del']||$_GET['id']){
			if($_GET['del']){
				$layer_status=1;
				$del=pylode(",",$_GET['del']);
			}else{
				$layer_status=0;
				$del=intval($_GET['id']);
			}
			$id=$this->obj->DB_delete_all("sysmsg","`id` in (".$del.") and `fa_uid`='".$this->uid."'","");
			if($id){
				$this->obj->member_log("删除系统消息",18,3);
				$this->layer_msg('删除成功',9,$layer_status,"index.php?c=sysnews");
			}else{
				$this->layer_msg('删除失败',9,$layer_status,"index.php?c=sysnews");
			}
		}
	}
	function set_action(){
		if(intval($_POST['id'])){
			$this->obj->DB_update_all("sysmsg","`remind_status`='1'","`id`='".intval($_POST['id'])."' and `fa_uid`='".$this->uid."' and `remind_status`='0'");
		}
	}
}
?>