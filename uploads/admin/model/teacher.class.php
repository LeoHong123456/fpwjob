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
class teacher_controller extends adminCommon{
	
	function set_search(){
		$search_list[]=array("param"=>"status","name"=>'审核状态',"value"=>array("1"=>"已审核","3"=>"未审核","2"=>"未通过"));
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$this->set_search();
		$where = "1";
		if(trim($_GET['keyword'])){
			$where.= " AND `name` like '%".trim($_GET['keyword'])."%' ";
			$urlarr['keyword']=trim($_GET['keyword']);
		}
		if($_GET['status']){
			if($_GET['status']=="1"){
				$where.= " and `status`='1'";
			}elseif($_GET['status']=="2"){
				$where.= " and `status`='2'";
			}else{
				$where.= " and `status`='0'";
			}
			$urlarr['status']=$_GET['status'];
		}
		if($_GET['order']){
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by status asc, id desc";
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
		$this->yunset("rows",$rows);
		$this->yunset($this->MODEL('cache')->GetCache(array('city','hy','subject')));
		$this->yunset("get_type",$_GET);
		$this->yuntpl(array('admin/admin_teacher'));
	}

	function status_action(){				
		extract($_POST);
		$id = @explode(",",$id);
		if(is_array($id)){
			foreach($id as $value){
				$idlist[] = $value;
			}
			$aid = @implode(",",$idlist);
			$id=$this->obj->DB_update_all("px_teacher","`status`='$status',`statusbody`='".$statusbody."'","`id` IN ($aid)");
			$px_subj = $this->obj->DB_select_all("px_subject","`teachid` IN ($aid)"); 
 			if ($id){
 				
 				if ($px_subj&&$status!='1'){
 					$this->obj->DB_update_all("px_subject","`status`='$status'","`teachid` IN ($aid)");
 				}
				foreach($px_subj as $v){
					if($status==1){
						$this->automsg("培训师《".$v['name']."》审核通过",$v['uid']);
					}elseif($status==2){
						$this->automsg("培训师《".$v['name']."》审核未通过",$v['uid']);
					}
				}
 				$this->ACT_layer_msg("培训师审核(ID:".$aid.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
 			}else{
 				$this->ACT_layer_msg("设置失败！",8,$_SERVER['HTTP_REFERER']);
 			}
		}else{
			$this->ACT_layer_msg("非法操作！",9,$_SERVER['HTTP_REFERER']);
		}	 
	}
	function lockinfo_action(){
		$rows=$this->obj->DB_select_once("px_teacher","`id`='".$_POST['id']."'","`statusbody`");
		echo $rows['statusbody'];die;
	}
	function rec_action(){
		$this->check_token();
		$nid=$this->obj->DB_update_all("px_teacher","`".$_GET['type']."`='".$_GET['rec']."'","`id`='".$_GET['id']."'");
		$info=$this->obj->DB_select_once("px_teacher","`id`='".$_GET['id']."'","`uid`,`name`");
		if($nid && ($_GET['rec']==1)){
			$this->automsg("管理员操作：推荐培训师《".$info['name']."》",$info['uid']);
		}elseif($nid && ($_GET['rec']==0)){
			$this->automsg("管理员操作：取消培训师《".$info['name']."》推荐",$info['uid']);
		}
		$this->MODEL('log')->admin_log("培训师推荐(ID:".$_GET['id'].")设置成功");
		echo $nid?1:0;die;
	}
	function add_action(){
		if($_POST['update']){
			$id=$_POST['id'];
			unset($_POST['id']);
			unset($_POST['update']);
			$_POST=$this->post_trim($_POST);
			$teacher=$this->obj->DB_select_once("px_teacher","`id`='".$id."' and `pic`<>''");
			if($_POST['pic']!=$teacher['pic']){
				$_POST['pic'] = $this->checksrc($_POST['pic'],$teacher['pic']);
			}
			$_POST['status']="1";
			$_POST['content']=str_replace(array("&amp;","background-color:#ffffff","background-color:#fff","white-space:nowrap;"),array("&",'background-color:','background-color:','white-space:'),$_POST['content']);
			$nid=$this->obj->update_once("px_teacher",$_POST,array("id"=>$id));
			if($nid){				
				$this->ACT_layer_msg("更新成功！",9,"index.php?m=teacher");
			}else{
				$this->ACT_layer_msg("更新失败！",8,"index.php?m=teacher");
			}
		}
		if($_GET['id']){
			$row=$this->obj->DB_select_once("px_teacher","`id`='".$_GET['id']."'");
			$this->yunset("row",$row);
		}
		$this->yunset($this->MODEL('cache')->GetCache(array('city','hy','subject')));
		$this->yuntpl(array('admin/admin_teacher_add'));
	}
	function del_action(){
		if($_GET['del']){
			$this->check_token();
			$del=$_GET['del'];
			if(is_array($del)){
				$del=@implode(',',$del);
				$layer_type=1;
			}else{
				$layer_type=0;
			}
			$list=$this->obj->DB_select_all("px_teacher","`id` in (".$del.")","`uid`,`name`");
			$id=$this->obj->DB_delete_all("px_teacher","`id` in (".$del.")"," ");
			if($list){
				foreach($list as $v){
					$this->automsg("管理员操作：删除培训讲师《".$v['name']."》",$v['uid']);
				}
			}
			$del?$this->layer_msg('培训师(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
		}else{
			$this->layer_msg('请选择要删除的内容！',8,0,$_SERVER['HTTP_REFERER']);
		}
	}

	function teacherNum_action(){
	
		$MsgNum = $this->MODEL('msgNum');

		echo $MsgNum->teacherNum();
	}


}