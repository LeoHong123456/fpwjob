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
class trainnews_controller extends siteadmin_controller{ 
	function set_search(){
		$search_list[]=array("param"=>"status","name"=>'审核状态',"value"=>array("1"=>"已审核","3"=>"未审核","2"=>"未通过"));
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$this->set_search();
		$Train=$this->MODEL('train');
		$where='1';
		if(trim($_GET['keyword'])){
			if($_GET['type']=="1"){
				$trows=$Train->GetTrainAll(array("`name` like '%".trim($_GET['keyword'])."%' "),array("field"=>"uid,name"));
				foreach($trows as $val){
					$suid[]=$val['uid'];
				}
				$where.=" and `uid` in(".@implode(',',$suid).")";
			}else{
				$where.=" and `title` like '%".trim($_GET['keyword'])."%'";
			}
			$urlarr['type']=(int)$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];
		}
 
		if((int)$_GET['status']){
			if((int)$_GET['status']=="3"){
				$where.=" and `status`='0'";
			}else{
				$where.=" and `status`='".(int)$_GET['status']."'";
			}
			$urlarr['status']=(int)$_GET['status'];
		}
		if($_GET['order']){
			$order=$_GET['order'];
		}else{
			$order="desc";
		}
		$urlarr['order']=$_GET['order'];
		$urlarr['page']="{{page}}";
		$pageurl=Url("trainnews",$urlarr,'admin');
		$rows=$this->get_page("px_train_news",$where,$pageurl);
		if($rows&&is_array($rows)){
			$uid=array();
			foreach($rows as $val){
				if(in_array($val['uid'],$uid)==false){
					$uid[]=$val['uid'];
				}
			}
			if($trows==''||is_array($trows)==false){
				$trows=$Train->GetTrainAll(array("`uid` in(".@implode(',',$uid).")"),array("field"=>"uid,name"));	
			}
			
			foreach($rows as $key=>$val){
				foreach($trows as $v){
					if($val['uid']==$v['uid']){
						$rows[$key]['name']=$v['name'];
					}
				}
			}
		} 
		$_GET['c']='';
		$this->yunset("rows",$rows);
		$this->yunset("get_type", $_GET);
		$this->siteadmin_tpl(array('admin_trainnews'));
	}
	function lockinfo_action(){
		$row=$this->MODEL('train')->GetNewsOne(array('id'=>$_POST['id']),array('statusbody'=>''));
		echo $row['statusbody'];die;
	}
	function status_action(){
		extract($_POST);
		$id = @explode(",",$pid);
		if(is_array($id)){
			$Train=$this->MODEL('train');
			foreach($id as $value){
				$idlist[] = $value;
			}
			$aid = @implode(",",$idlist);
			$id=$Train->UpdateTrainNews(array("status"=>$status,"statusbody"=>$statusbody),array("`id` IN ($aid)")); 
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
			$Train=$this->MODEL('train');
			$id=$Train->DeleteTrainNews(array("`id` in (".$del.")"));
	    	$id?$this->layer_msg('培训新闻(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
	    }
	}
}
?>