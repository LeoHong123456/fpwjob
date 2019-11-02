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
class trainnews_controller extends adminCommon{
	
	function set_search(){
		$search_list[]=array("param"=>"status","name"=>'审核状态',"value"=>array("1"=>"已审核","3"=>"未审核","2"=>"未通过"));
		$this->yunset("search_list",$search_list);
	}
	function index_action()
	{
		$this->set_search();
		$where='1';
		if(trim($_GET['keyword'])){
			if($_GET['type']=="1"){
				$trows=$this->obj->DB_select_all("px_train","`name` like '%".trim($_GET['keyword'])."%'","uid,name");
				foreach($trows as $val){
					$suid[]=$val['uid'];
				}
				$where.=" and `uid` in(".@implode(',',$suid).")";
			}else{
				$where.=" and `title` like '%".trim($_GET['keyword'])."%'";
			}
			$urlarr['type']=$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];
		}
		 
		if($_GET['status']){
			if($_GET['status']=="3"){
				$where.=" and `status`='0'";
			}else{
				$where.=" and `status`='".$_GET['status']."'";
			}
			$urlarr['status']=$_GET['status'];
		}
		if($_GET['order']){
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order']; 
		}else{
			$where.=" order by status asc, `uid` desc";
		}
		
		$urlarr['page']="{{page}}";
		$pageurl=Url("trainnews",$urlarr,'admin');
		$rows=$this->get_page("px_train_news",$where,$pageurl,$this->config['sy_listnum']);
		if($rows&&is_array($rows)){
			$uid=array();
			foreach($rows as $val){
				if(in_array($val['uid'],$uid)==false){
					$uid[]=$val['uid'];
				}
			}
			if($trows==''||is_array($trows)==false){
				$trows=$this->obj->DB_select_all("px_train","`uid` in(".@implode(',',$uid).")","uid,name");
			} 		
			foreach($rows as $key=>$val){
				foreach($trows as $v){
					if($val['uid']==$v['uid']){
						$rows[$key]['name']=$v['name'];
					}
				}
			}
		} 
		$this->yunset("rows",$rows);
		$this->yunset("get_type", $_GET);
		$this->yuntpl(array('admin/admin_trainnews'));
	}
	function lockinfo_action(){
		$row=$this->obj->DB_select_once("px_train_news","`id`='".$_POST['id']."'","`statusbody`");
		echo $row['statusbody'];die;
	}
	function status_action()
	{
		extract($_POST);
		$id = @explode(",",$pid); 
		if(is_array($id))
		{
			foreach($id as $value)
			{
				$idlist[] = $value;
			}
			$aid = @implode(",",$idlist);
			$id=$this->obj->DB_update_all("px_train_news","`status`='$status',`statusbody`='".$statusbody."'","`id` IN ($aid)");
			$list=$this->obj->DB_select_all("px_train_news","`id` IN ($aid)","`uid`,`title`");
			if($list){
				foreach($list as $v){
					if($status==1){
						$this->automsg("新闻《".$v['title']."》审核通过",$v['uid']);
					}elseif($status==2){
						$this->automsg("新闻《".$v['title']."》审核未通过",$v['uid']);
					}
				}
			}
 			$id?$this->ACT_layer_msg("培训新闻审核(ID:".$aid.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg("设置失败！",8,$_SERVER['HTTP_REFERER']);
		}else{
			$this->ACT_layer_msg("非法操作！",9,$_SERVER['HTTP_REFERER']);
		}
	}
	function del_action()
	{
		$this->check_token();
	    if($_GET['del'])
	    {
	    	if(is_array($_GET['del']))
	    	{
	    		$del=@implode(",",$_GET['del']);
	    		$layer_type=1;
	    	}else{
	    		$del=$_GET['del'];
	    		$layer_type=0;
	    	}
	    	$list=$this->obj->DB_select_all("px_train_news","`id` in (".$del.")","`uid`,`title`");
			$id=$this->obj->DB_delete_all("px_train_news","`id` in (".$del.")","");
			if($list){
				foreach($list as $v){
					$this->automsg("管理员操作：删除新闻《".$v['title']."》",$v['uid']);
				}
			}
			$id?$this->layer_msg('培训新闻(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
	    }
	}
}
?>