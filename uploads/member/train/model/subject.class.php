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
class subject_controller extends train
{
	function index_action()
	{
		if($_GET['pause_status'])
		{
			$nid=$this->obj->DB_update_all("px_subject","`pause_status`='".(int)$_GET['pause_status']."'","`id`='".(int)$_GET['id']."' and `uid`='".$this->uid."'");
			if($nid)
			{
				$this->obj->member_log("设置培训课程显示状态",21,2);
				$this->layer_msg('显示状态设置成功！',9,0,$_SERVER['HTTP_REFERER']);
			}else{
				$this->layer_msg('显示状态设置失败！',8,0,$_SERVER['HTTP_REFERER']);
			}
		}
		if($_GET['del']){
			$nid=$this->obj->DB_delete_all("px_subject","`id`='".(int)$_GET['del']."' and `uid`='".$this->uid."'");
			if($nid){
				$baoming=$this->obj->DB_select_all("px_baoming","`sid`='".(int)$_GET['del']."' and `uid`='".$this->uid."'","id");
				$this->obj->DB_delete_all("company_order","`sid`='".$baoming['id']."' and `uid`='".$this->uid."'"," ");
				$this->obj->DB_delete_all("px_baoming","`sid`='".(int)$_GET['del']."' and `uid`='".$this->uid."'"," ");
				$this->obj->DB_delete_all("px_subject_collect","`sid`='".(int)$_GET['del']."' and `uid`='".$this->uid."'"," ");
					
				$this->obj->member_log("删除培训课程",21,3);
				$this->layer_msg('删除成功！',9,0,$_SERVER['HTTP_REFERER']);
			}else{
				$this->layer_msg('删除失败！',8,0,$_SERVER['HTTP_REFERER']);
			}
		}
		$_GET['status']=intval($_GET['status']);
		if($_GET['status']=="1")
		{
			$where="`status`='0' and `pause_status`='1' ";
			$urlarr['status']=$_GET['status'];
		}elseif($_GET['status']=="2"){
			$where="`status`='2' and `pause_status`='1'";
			$urlarr['status']=$_GET['status'];
		}else{
			$where="`status`='1' and `pause_status`='1'";
		}
        if($_GET['pstatus']=="2"){
			$where="`pause_status`='2'";
			$urlarr['pstatus']=$_GET['pstatus'];
		}	
		$urlarr['c']="subject";
		$urlarr['page']="{{page}}";
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("px_subject",$where." and `uid`='".$this->uid."' order by id desc",$pageurl,"10");
		if(is_array($rows)){
			foreach ($rows as $key=>$val){
				if($val['pic']){
					$rows[$key]['pic']=$val['pic'];
				}else{
					$rows[$key]['pic']=$this->config['sy_pxsubject_icon'];
				}
			}
		}
		$this->yunset("rows",$rows);
		$this->yunset("def","1");
		$this->public_action();
		$this->train_satic();
		$this->train_tpl('subject');
	}
	function statusbody_action(){
		if(intval($_POST['id'])){
			$msg=$this->obj->DB_select_once('px_subject','`id`=\''.intval($_POST['id']).'\'','statusbody');
			echo $msg['statusbody'];die;
		}
	}
}
?>