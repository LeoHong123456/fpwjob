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
class yp_resume_controller extends lietou
{
 	function index_action()
	{
		$where="a.`com_id`='".$this->uid."' and a.`eid`=b.`id` and `height_status`='2'";
		$this->resume("userid_job",$where);
		$this->public_action();
		$this->lietou_tpl('yp_resume');
 	}
 	function del_action()
 	{
 		if($_POST['delid'] || $_GET['del'])
 		{
 			if($_POST['delid']){
 				$delid=pylode(',',$_POST['delid']);
 				$layer_status=1;
 			}else{
 				$delid=(int)$_GET['del'];
 				$layer_status=0;
 			}
			$nid=$this->obj->DB_delete_all("userid_job","`com_id`='".$this->uid."' and `eid` in (".$delid.")","");
 			if($nid)
 			{
 				$this->obj->member_log("删除应聘来的简历",6,3);
 				$this->layer_msg('删除成功！',9,$layer_status,$_SERVER['HTTP_REFERER']);
 			}else{
 				$this->layer_msg('删除失败！',8,$layer_status,$_SERVER['HTTP_REFERER']);
 			}
 		}
 	}
}
?>