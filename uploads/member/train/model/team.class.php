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
class team_controller extends train
{
	function index_action()
	{
		if($_GET['del'])
		{
			$nid=$this->obj->DB_delete_all("px_teacher","`id`='".(int)$_GET['del']."' and `uid`='".$this->uid."'");
			if($nid)
			{
				$this->obj->member_log("删除培训师",20,3);
				$this->layer_msg('删除成功！',9,0,$_SERVER['HTTP_REFERER']);
			}else{
				$this->layer_msg('删除失败！',8,0,$_SERVER['HTTP_REFERER']);
			}
		}
		$_GET['status']=intval($_GET['status']);
		if($_GET['status']=="1")
		{
			$where="`status`='0'";
			$urlarr['status']=$_GET['status'];
		}elseif($_GET['status']=="2"){
			$where="`status`='2'";
			$urlarr['status']=$_GET['status'];
		}else{
			$where="`status`='1'";
		}
		$urlarr['c']=$_GET['c'];
		$urlarr['page']="{{page}}";
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("px_teacher",$where." and `uid`='".$this->uid."' order by id desc",$pageurl,"10");
		if(is_array($rows)){
			foreach ($rows as $key=>$val){
				if($val['pic']){
					$rows[$key]['pic']=$val['pic'];
				}else{
					$rows[$key]['pic']=$this->config['sy_pxteacher_icon'];
				}
			}
		}
		$this->yunset("rows",$rows);
		$this->yunset($this->MODEL('cache')->GetCache(array('city','hy','subject')));
		$this->yunset("def","2");
		$this->public_action();
		$this->train_satic();
		$this->train_tpl('team');
	}
	function statusbody_action(){
		if(intval($_POST['id'])){
			$msg=$this->obj->DB_select_once('px_teacher','`id`=\''.intval($_POST['id']).'\'','statusbody');
			echo $msg['statusbody'];die;
		}
	}
}
?>