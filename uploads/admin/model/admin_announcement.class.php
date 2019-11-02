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
class admin_announcement_controller extends adminCommon{
	function set_search(){
		$ad_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"end","name"=>'发布时间',"value"=>$ad_time);
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$this->set_search();
		
		if(trim($_GET['keyword'])){
			$where="`title` like '%".trim($_GET['keyword'])."%'";
			$urlarr['keyword']=$_GET['keyword'];
		}else{
			$where=1;
		}
		if($_GET['end']){
			if($_GET['end']=='1'){
				$where.=" and `datetime` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `datetime` >= '".strtotime('-'.(int)$_GET['end'].'day')."'";
			}
			$urlarr['end']=$_GET['end'];
		}
		if($_GET['order'])
		{
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by id desc";
		}
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		$announcement=$this->get_page("admin_announcement",$where,$pageurl,$this->config['sy_listnum'],'*','announcement');
		$this->yunset('announcement',$announcement);
		
		include PLUS_PATH."/domain_cache.php";
		$Dname[0] = '总站';
		if(is_array($site_domain)){
			foreach($site_domain as $key=>$value){
				$Dname[$value['id']]  =  $value['webname'];
			}
		}
		$this->yunset("Dname", $Dname);
		$this->yuntpl(array('admin/admin_announcement_list'));
	}
	function add_action(){
		
		include PLUS_PATH."/domain_cache.php";
		$Dname[0] = '总站';
		if(is_array($site_domain)){
			foreach($site_domain as $key=>$value){
				$Dname[$value['id']]  =  $value['webname'];
			}
		}
		$this->yunset("Dname", $Dname);
		
		if($_GET['id']){
			$info = $this->obj->DB_select_once("admin_announcement","`id`='".$_GET['id']."'");
			$info['content']=str_replace(array("&amp;","&nbsp;"),array("&",''),$info['content']);
			$this->yunset("info",$info);
			$this->yunset("lasturl",$_SERVER['HTTP_REFERER']);
		}
        $this->yuntpl(array('admin/admin_announcement_add'));
	}

	function save_action(){
		if($_POST['update']){
			$time = time();
			if($_POST['did']==""){
				$_POST['did']=0;
			}
			$value.="`did`='".$_POST['did']."',";
			$value.="`title`='".$_POST['title']."',";
			$value.="`datetime`='$time',";
			$value.="`keyword`='".$_POST['keyword']."',";
			$value.="`description`='".$_POST['description']."',";
			$content = str_replace("&amp;","&",$_POST['content']);
			$value.="`content`='".$content."'";
			$nbid=$this->obj->DB_update_all("admin_announcement",$value,"`id`='".$_POST['id']."'");
			$lasturl=str_replace("&amp;","&",$_POST['lasturl']);
			$member= $this->obj->DB_select_all("member","","uid");
			foreach($member as $v){
				$this->automsg("网站更新公告(ID:".$_POST['id'].")",$v['uid']);
			}
			isset($nbid)?$this->ACT_layer_msg("公告(ID:".$_POST['id'].")更新成功！",9,$lasturl,2,1):$this->ACT_layer_msg("更新失败！",8,$lasturl,2,1);
		}
	    if($_POST['add']){
			$time = time();
			if($_POST['did']==""){
				$_POST['did']=0;
			}
			$value.="`did`='".$_POST['did']."',";
			$value.="`title`='".$_POST['title']."',";
			$value.="`datetime`='$time',";
			$value.="`keyword`='".$_POST['keyword']."',";
			$value.="`description`='".$_POST['description']."',";
			$content = str_replace("&amp;","&",$_POST['content']);
			$value.="`content`='".$content."'";
			$nbid=$this->obj->DB_insert_once("admin_announcement",$value);
			$member= $this->obj->DB_select_all("member","","uid");
			foreach($member as $v){
				$this->automsg("网站发布新的公告",$v['uid']);
			}
			isset($nbid)?$this->ACT_layer_msg("公告(ID:".$nbid.")添加成功！",9,"index.php?m=admin_announcement",2,1):$this->ACT_layer_msg("添加失败！",8,"index.php?m=admin_announcement",2,1);
		}
	}
	function del_action(){
		$this->check_token();
	    if($_GET['del']){

	    	$del=$_GET['del'];
	    	if($del){
	    		if(is_array($del)){
					$this->obj->DB_delete_all("admin_announcement","`id` in(".@implode(',',$del).")","");
			    }else{
	    		 	$this->obj->DB_delete_all("admin_announcement","`id`='$del'");
	    		}
				$this->layer_msg('公告(ID:'.@implode(',',$del).')删除成功！',9,1,$_SERVER['HTTP_REFERER']);
			}else{
				$this->layer_msg('请选择您要删除的公告！',8,1,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	    if(isset($_GET['id'])){
			$where="`id`='".$_GET['id']."'";
			$result=$this->obj->DB_delete_all("admin_announcement", $where);
			isset($result)?$this->layer_msg('公告(ID:'.$_GET['id'].')删除成功！',9,0,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,0,$_SERVER['HTTP_REFERER']);
		}else{
			$this->layer_msg('非法操作！',8,0,$_SERVER['HTTP_REFERER']);
		}
	}
	function checksitedid_action(){
		if($_POST['uid']){
			$uids=@explode(',',$_POST['uid']);
			$uid = pylode(',',$uids);
			if($uid){
				$siteDomain = $this->MODEL('site');
				$siteDomain->UpDid(array('admin_announcement'),$_POST['did'],"`id` IN (".$uid.")");
				$this->ACT_layer_msg( "公告(ID:".$_POST['uid'].")分配站点成功！",9,$_SERVER['HTTP_REFERER']);
			}else{
				$this->ACT_layer_msg("请正确选择需分配公告！",8,$_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->ACT_layer_msg( "参数不全请重试！",8,$_SERVER['HTTP_REFERER']);
		}
	}
}
?>