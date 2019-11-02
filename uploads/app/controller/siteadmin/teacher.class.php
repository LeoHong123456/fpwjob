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
class teacher_controller extends siteadmin_controller{ 
	function set_search(){
		$search_list[]=array("param"=>"status","name"=>'审核状态',"value"=>array("1"=>"已审核","3"=>"未审核","2"=>"未通过"));
		$this->yunset("search_list",$search_list);
	}
	function index_action()
	{
		$this->set_search();
		$where = "1";
		if(trim($_GET['keyword'])){
			$where .= " AND `name` like '%".trim($_GET['keyword'])."%' ";
			$urlarr['keyword']=trim($_GET['keyword']);
		}
		if((int)$_GET['status'])
		{
			if((int)$_GET['status']=="1")
			{
				$where .= " and `status`='1'";
			}elseif((int)$_GET['status']=="2"){
				$where .= " and `status`='2'";
			}else{
				$where .= " and `status`='0'";
			}
			$urlarr['status']=(int)$_GET['status'];
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
		$rows=$this->get_page("px_teacher",$where,$pageurl,$this->config['sy_listnum']);
		if (is_array($rows)){
		    foreach ($rows as $v){
		        $uids[]=$v['uid'];
		    }
		    $train=$this->obj->DB_select_all('px_train',"`uid` in (".pylode(',', $uids).")","`uid`,`name`");
		    foreach ($rows as $k=>$v){
		        foreach ($train as $val){
		            if ($v['uid']==$val['uid']){
		                $rows[$k]['train_name']=$val['name'];
		            }
		        }
		    }
		}
		$_GET['c']='';
		$this->yunset("rows",$rows);
		$this->yunset($this->MODEL('cache')->GetCache(array('city','hy','subject')));
		$this->yunset("get_type",$_GET);
		$this->siteadmin_tpl(array('admin_teacher'));
	}

	function status_action(){				
		extract($_POST);
		$id = @explode(",",$id);		
		if(is_array($id)){
			$Train=$this->MODEL('train');
			foreach($id as $value){
				$idlist[] = $value;
			}
			$aid = @implode(",",$idlist);
			$Train->UpdateTeacher(array("status"=>$status,"statusbody"=>$statusbody),array("`id` IN ($aid)")); 
 			$id?$this->ACT_layer_msg("培训师审核(ID:".$aid.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg("设置失败！",8,$_SERVER['HTTP_REFERER']);
		}else{
			$this->ACT_layer_msg("非法操作！",9,$_SERVER['HTTP_REFERER']);
		}	 
	}
	function lockinfo_action(){
		$row=$this->MODEL('train')->GetTeacherOne(array('id'=>$_POST['id']),array('field'=>'statusbody')); 
		echo $row['statusbody'];die;
	}
	function rec_action(){
		$this->check_token();
		$nid=$this->obj->DB_update_all("px_teacher","`".$_GET['type']."`='".$_GET['rec']."'","`id`='".$_GET['id']."'");
		$this->MODEL('log')->admin_log("培训师推荐(ID:".$_GET['id'].")设置成功");
		echo $nid?1:0;die;
	}
	function add_action(){
		if($_POST['update']){
			$id=$_POST['id'];
			unset($_POST['id']);
			unset($_POST['update']);
			$Train=$this->MODEL('train');
			$_POST=$this->post_trim($_POST);
			if($_FILES['pic']['tmp_name']){
				$UploadM=$this->MODEL('upload');
				$upload=$UploadM->Upload_pic("../data/upload/team/",false);
				$pic=$upload->picture($_FILES['pic']);
				$picmsg=$UploadM->picmsg($pic,$_SERVER['HTTP_REFERER']);
				if($picmsg['status'] == $pic){
					$this->ACT_layer_msg($picmsg['msg'],8);
				}
				$_POST['pic'] = str_replace("../data/upload/team","upload/team",$pic);
				$rows=$Train->GetTeacherOne(array("`id`='".$id."' and `pic`<>''"),array("field"=>"pic")); 
				if(is_array($rows))
				{
					unlink_pic("../".$rows['pic']);
				}
			}
			$_POST['content']=str_replace(array("&amp;","background-color:#ffffff","background-color:#fff","white-space:nowrap;"),array("&",'background-color:','background-color:','white-space:'),$_POST['content']); 
			$nid=$Train->UpdateTeacher($_POST,array("id"=>$id)); 
			if($nid)
			{
				$this->ACT_layer_msg("更新成功！",9,"index.php?m=teacher");
			}else{
				$this->ACT_layer_msg("更新失败！",8,"index.php?m=teacher");
			}
		}
		if((int)$_GET['id']){
			$Train=$this->MODEL('train');
			$row=$Train->GetTeacherOne(array("id"=>(int)$_GET['id']));  
			$this->yunset("row",$row);
		}
		$this->yunset($this->MODEL('cache')->GetCache(array('city','hy','subject')));
		$this->siteadmin_tpl(array('admin_teacher_add'));
	}
	function del_action()
	{
		if($_GET['del'])
		{
			$this->check_token();
			$del=$_GET['del'];
			if(is_array($del)){
				$del=@implode(',',$del);
				$layer_type=1;
			}else{
				$layer_type=0;
			}
			$Train=$this->MODEL('train'); 
			$id=$Train->DeleteTeacher(array("`id` in (".$del.")")); 
			$del?$this->layer_msg('培训师(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
		}else{
			$this->layer_msg('请选择要删除的内容！',8,0,$_SERVER['HTTP_REFERER']);
		}
	}


}