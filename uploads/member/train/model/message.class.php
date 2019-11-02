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
class message_controller extends train
{
	function index_action(){		
		if($_GET['status'])
		{
			$_GET['status']=intval($_GET['status']);
			$where="`status`='".$_GET['status']."' and ";
			$urlarr['status']=$_GET['status'];
		}
		$urlarr['c']="news";
		$urlarr['page']="{{page}}";
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("px_zixun",$where."`s_uid`='".$this->uid."' order by id desc",$pageurl,"10");
		if(is_array($rows))
		{
			foreach($rows as $v)
			{
				$uid[]=$v['uid'];
			}
			$minfo=$this->obj->DB_select_all('member','uid in('.pylode(',',$uid).')','uid,username');
			foreach($rows as $k=>$v){
				foreach($minfo as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['nickname']=$val['username'];
					}
				}
			}
		}
		$this->yunset("rows",$rows);
		$this->public_action();
		$this->train_satic();
		$this->train_tpl('message');
	}
	function reply_action(){
		if($_GET['reply']){
			if(trim($_POST['content'])==""){
				$this->ACT_layer_msg("回复内容不能为空！",8);
			}
			$nid=$this->obj->DB_update_all("px_zixun","reply='".trim($_POST['content'])."',reply_time='".time()."',status='2'","`id`='".(int)$_POST['id']."' and `s_uid`='".$this->uid."'");
			if($nid)
			{
				$this->obj->member_log("回复咨询留言",18,1);
				$this->ACT_layer_msg("回复成功！",9,$_SERVER['HTTP_REFERER']);
			}else{
				$this->ACT_layer_msg("回复失败！",8,$_SERVER['HTTP_REFERER']);
			}
		}
	}
	function del_action(){
		if($_GET['del']){
			$oid=$this->obj->DB_delete_all("px_zixun","`id`='".(int)$_GET['del']."' and `s_uid`='".$this->uid."'");
			if($oid){
				$this->obj->member_log("删除咨询留言",18,3);
				$this->layer_msg('删除成功！',9,0);
			}else{
				$this->layer_msg('删除失败！',8,0);
			}
		}
	}
}
?>