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
class news_add_controller extends train
{
	function index_action()
	{
		if($_POST['submit'])
		{
			$body = str_replace("&amp;","&",$_POST['body']);
			$value.="`title`='".$_POST['title']."',";
			$value.="`body`='".$body."',";
			$value.="`status`='0',";
			$value.="`uid`='".$this->uid."',";
			$value.="`did`='".$this->userdid."',";
			$value.="`ctime`='".time()."'";
			if(!$_POST['id'])
			{
				$oid=$this->obj->DB_insert_once("px_train_news",$value);
				$msg="添加";
			}else{
				$oid=$this->obj->DB_update_all("px_train_news",$value,"`uid`='".$this->uid."' and `id`='".(int)$_POST['id']."'");
				$msg="修改";
			}
			if($oid)
			{
				$this->obj->member_log($msg."培训新闻",22,1);
				$this->ACT_layer_msg($msg."培训新闻成功！",9,"index.php?c=news");
			}else{
				$this->ACT_layer_msg($msg."培训新闻失败，请稍后再试！",8,"index.php?c=news");
			}
		}
		if($_GET['id'])
		{
			$row=$this->obj->DB_select_once("px_train_news","`id`='".(int)$_GET['id']."'");
			$this->yunset("row",$row);
		}
		$this->public_action();
		$this->train_tpl('news_add');
	}
}
?>