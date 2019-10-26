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
class news_controller extends train
{
	function index_action()
	{
    	if($_POST['delid'] || $_GET['delid'])
    	{
    		if(is_array($_POST['delid']))
    		{
    			$delid=pylode(",",$_POST['delid']);
				$layer_type='1';
	    	}else{
	    		$delid=(int)$_GET['delid'];
				$layer_type='0';
	    	}
			$oid=$this->obj->DB_delete_all("px_train_news","`id` in (".$delid.") and `uid`='".$this->uid."'","");
			if($oid)
			{
				$this->obj->member_log("删除培训新闻",22,3);
				$this->layer_msg('删除成功！',9,$layer_type);
			}else{
				$this->layer_msg('删除失败！',8,$layer_type);
			}
    	}
		$urlarr['c']="news";
		$urlarr['page']="{{page}}";
		$pageurl=Url('member',$urlarr);
		$rows=$this->get_page("px_train_news","`uid`='".$this->uid."' order by id desc",$pageurl,"10");
		$this->yunset("rows",$rows);
		$this->public_action();
		$this->train_satic();
		$this->train_tpl('news');
	}
}
?>