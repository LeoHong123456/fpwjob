<?php
/*
* $Author ：LEO
*
* 官网: http://www.fpwjob.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class subject_type_controller extends adminCommon{
	function index_action(){
		
		$list=$this->obj->DB_select_all("px_subject_type","1 order by sort desc");
		$this->yunset("list",$list);
		$this->yuntpl(array('admin/subject_type'));
	}
	
	function add_action(){
	    $_POST=$this->post_trim($_POST);
	    $position=explode('-',$_POST['name']);
		foreach ($position as $val){
			if($val){
				$name[]=$val;
			}
		}
		$px_subject_type=$this->obj->DB_select_all("px_subject_type","`name` in ('".implode("','", $name)."')");
		if(empty($px_subject_type)){
		    $sort=explode('-', $_POST['sort']);
		    foreach ($name as $key=>$val){
		       $value="`name`='".$val."'";
		       $add=$this->obj->DB_insert_once("px_subject_type",$value);
		    }
			$this->cache_action();
		    $add?$msg=3:$msg=4;
		    $this->MODEL('log')->admin_log("开课类型(ID:".$add.")添加成功！");
		}else{
			$msg=2;
		}
	echo $msg;die;
	}
	
	function upp_action(){
		if($_POST['update']){
			if(!empty($_POST['name'])){
				$up=$this->obj->DB_update_all("px_subject_type","`name`='".$_POST['name']."',`sort`='".$_POST['sort']."'","`id`='".$_POST['id']."'");
				$this->cache_action();
 				 $up?$this->ACT_layer_msg("开课类型(ID:".$_POST['id'].")更新成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg("更新失败，请销后再试！",8,$_SERVER['HTTP_REFERER']);
			}else{
				$this->ACT_layer_msg("请正确填写你要更新的开课类型！",8,$_SERVER['HTTP_REFERER']);
			}
		}
		$this->yuntpl(array('admin/subject_type'));
	}
	
	function del_action()
	{
		if((int)$_GET['delid'])
		{
			$this->check_token();
			$id=$this->obj->DB_delete_all("px_subject_type","`id`='".$_GET['delid']."'");
			$this->cache_action();
			$id?$this->layer_msg('开课类型(ID:'.$_GET['delid'].')删除成功！',9,0,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,0,$_SERVER['HTTP_REFERER']);
		}
		if($_POST['del'])
		{
			$del=@implode(",",$_POST['del']);
			$id=$this->obj->DB_delete_all("px_subject_type","`id` in (".$del.")","");
			$this->cache_action();
			isset($id)?$this->layer_msg('开课类型(ID:'.$del.')删除成功！',9,1,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,1,$_SERVER['HTTP_REFERER']);
		}
		$this->yuntpl(array('admin/subject_type'));
	}
	function cache_action()
	{
		include(LIB_PATH."cache.class.php");
		$cacheclass= new cache(PLUS_PATH,$this->obj);
		$makecache=$cacheclass->subject_type_cache("subject_type.cache.php");
	}
	function ajax_action(){
		if($_POST['sort']){
			$this->obj->DB_update_all("px_subject_type","`sort`='".$_POST['sort']."'","`id`='".$_POST['id']."'");
			$this->MODEL('log')->admin_log("开课类型(ID:".$_POST['id'].")修改排序！");
		}
		if($_POST['name']){
			$this->obj->DB_update_all("px_subject_type","`name`='".$_POST['name']."'","`id`='".$_POST['id']."'");
			$this->MODEL('log')->admin_log("开课类型(ID:".$_POST['id'].")修改类别名称！");
		}
		$this->cache_action();
		echo '1';die;
	}
}
?>