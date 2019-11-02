<?php
/*
* $Author ：LEO
*
* 官网: https://www.fpwjob.com
*
* 版权所有 2018-2019 菲聘网，并保留所有权利。
*
* 
 */
class subject_class_controller extends adminCommon{
	function index_action(){
		
		$position=$this->obj->DB_select_all("px_subject_class","`keyid`='0' order by sort asc");
		$this->yunset("position",$position);
		$this->yuntpl(array('admin/subject_class'));
	}
	
	function save_action(){
	    $_POST=$this->post_trim($_POST);
	    $position=explode('-',$_POST['name']);
		foreach ($position as $val){
			if($val){
				$name[]=$val;
			}
		}
		$px_subject_class=$this->obj->DB_select_all("px_subject_class","`name` in ('".implode("','", $name)."')");
		if(empty($px_subject_class)){
            foreach ($name as $key=>$val){
                if($_POST['ctype']=='1'){
                    $value="`name`='".$val."'";
                }else{
                    $value="`name`='".$val."',`keyid`='".intval($_POST['nid'])."'";
                }
                $add=$this->obj->DB_insert_once("px_subject_class",$value);
            }
    		$this->cache_action();
    		$add?$msg=2:$msg=3;
    		$this->MODEL('log')->admin_log("课程类别(ID:".$add.")添加成功");
		}else{
			$msg=1;
		}
		echo $msg;die;
	}
	
	function up_action(){
		
		if((int)$_GET['id']){
			$id=(int)$_GET['id'];
			$onejob=$this->obj->DB_select_once("px_subject_class","`id`='".$_GET['id']."'");
			$twojob=$this->obj->DB_select_all("px_subject_class","`keyid`='".$_GET['id']."' order by sort asc");
			$this->yunset("onejob",$onejob);
			$this->yunset("twojob",$twojob);
			$this->yunset("id",$id);
		}
		$position=$this->obj->DB_select_all("px_subject_class","`keyid`='0'");
		$this->yunset("position",$position);
		$this->yuntpl(array('admin/subject_class'));
	}
	
	function upp_action(){

		if($_POST['update']){
			if(!empty($_POST['position'])){
				$value="`name`='".$_POST['position']."',`sort`='".$_POST['sort']."'";
				$where="`id`='".$_POST['id']."'";
				$up=$this->obj->DB_update_all("px_subject_class",$value,$where);
				$this->cache_action();
				$up?$this->ACT_layer_msg("课程分类(ID:".$_POST['id'].")更新成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg("更新失败，请销后再试！",8,$_SERVER['HTTP_REFERER']);
			}else{
				$this->ACT_layer_msg("请正确填写你要更新的分类！",8,$_SERVER['HTTP_REFERER']);
			}
		}
		$this->yuntpl(array('admin/subject_class'));
	}
	
	function del_action()
	{
		if($_GET['delid'])
		{
			$this->check_token();
			$id=$this->obj->DB_delete_all("px_subject_class","`id`='".$_GET['delid']."' or `keyid`='".$_GET['delid']."'","");
			$this->cache_action();
		    isset($id)?$this->layer_msg('课程分类删除成功！',9,0,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,0,$_SERVER['HTTP_REFERER']);
		}
		if($_POST['del'])
		{
			$del=@implode(",",$_POST['del']);
			$id=$this->obj->DB_delete_all("px_subject_class","`id` in (".$del.") or `keyid` in (".$del.")","");
			$this->cache_action();
			isset($id)?$this->layer_msg('课程分类删除成功！',9,1,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,1,$_SERVER['HTTP_REFERER']);
		}
	}
	function ajax_action()
	{
		if($_POST['sort'])
		{
			$this->obj->DB_update_all("px_subject_class","`sort`='".$_POST['sort']."'","`id`='".$_POST['id']."'");
			$this->MODEL('log')->admin_log("课程分类(ID:".$_POST['id'].")排序修改成功");
		}
		if($_POST['name'])
		{
			$this->obj->DB_update_all("px_subject_class","`name`='".$_POST['name']."'","`id`='".$_POST['id']."'");
			$this->MODEL('log')->admin_log("课程分类(ID:".$_POST['id'].")名称修改成功");
		}
		$this->cache_action();echo '1';die;
	}
	function cache_action()
	{
		include(LIB_PATH."cache.class.php");
		$cacheclass= new cache(PLUS_PATH,$this->obj);
		$makecache=$cacheclass->subject_cache("subject.cache.php");
	}
}

?>