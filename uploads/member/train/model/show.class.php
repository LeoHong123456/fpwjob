<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class show_controller extends train
{
	function index_action()
	{
		if($_GET['del'])
		{
			$ids=$_POST['ids'];
			$show=$this->obj->DB_select_all("px_train_show","`id` in (".$ids.") and `uid`='".$this->uid."'","`picurl`");
			if(is_array($show)&&$show)
			{
				foreach($show as $val)
				{
					unlink_pic(".".$val['picurl']);
				}
				$this->obj->DB_delete_all("px_train_show","`id` in (".$ids.") and `uid`='".$this->uid."'","");
				$this->obj->member_log("删除机构环境展示",16,3);
			}
			return true;
		}
		if($_GET['did'])
		{
			$row=$this->obj->DB_select_once("px_train_show","`id`='".(int)$_GET['did']."' and `uid`='".$this->uid."'","`picurl`");
			if(is_array($row))
			{
				unlink_pic(".".$row['picurl']);
				$oid=$this->obj->DB_delete_all("px_train_show","`id`='".(int)$_GET['did']."' and `uid`='".$this->uid."'");
			}
			if($oid)
			{
				$this->obj->member_log("删除机构环境展示",16,3);
				$this->layer_msg('删除成功！',9);
			}else{
				$this->layer_msg('删除失败！',8);
			}
		}
		$urlarr['c']="show";
		$urlarr["page"]="{{page}}";
		$pageurl=Url('member',$urlarr);
		$this->get_page("px_train_show","`uid`='".$this->uid."' order by id desc",$pageurl,"9","`title`,`id`,`picurl`");
		$this->public_action();
		$this->train_satic();
		$this->train_tpl('show');
	}
}
?>