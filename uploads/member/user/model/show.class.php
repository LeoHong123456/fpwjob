<?php
/* *
* $Author ：LEO
*
* 官网: https://www.fpwjob.com
*
* 版权所有 2018-2019 菲聘网，并保留所有权利。
*
*
*/
class show_controller extends user{
	function index_action(){
		if($_GET['eid']){
			$urlarr['c']="show";
			$urlarr["page"]="{{page}}";
			$pageurl=Url('member',$urlarr);
			$this->get_page("resume_show","`uid`='".$this->uid."' and `eid`='".(int)$_GET['eid']."' order by sort desc",$pageurl,"12","`title`,`id`,`picurl`");
			$this->public_action();
			$this->user_tpl('show');
		}else{
			header("location:"."index.php?c=resume");
		}
	}
	function del_action(){
		if($_GET['id']){
			$row=$this->obj->DB_select_once("resume_show","`id`='".(int)$_GET['id']."' and `uid`='".$this->uid."'","`picurl`");
			if(is_array($row)){
				unlink_pic(".".$row['picurl']);
				$oid=$this->obj->DB_delete_all("resume_show","`id`='".(int)$_GET['id']."' and `uid`='".$this->uid."'");
			}
			if($oid){
				$this->obj->member_log("删除作品案例",16,3);
				$this->layer_msg('删除成功！',9,0,1);
			}else{
			    $this->layer_msg('删除失败！',8,0,1);
			}
		}
	}
	function showpic_action(){
		if($_GET['id']){
			$this->public_action();
			$picurl=$this->obj->DB_select_once("resume_show","`id`='".(int)$_GET['id']."' and `uid`='".$this->uid."'","`picurl`,`title`,`sort`");
			$this->yunset("picurl",$picurl);
			$this->yunset("uid",$this->uid);
			$this->yunset("id",$_GET['id']);
		    $this->yunset("js_def",2);
			$this->user_tpl('editshow');
		}
	}
	function delshow_action(){
		
		$ids = pylode(',',@explode(',',$_POST['ids']));

		$resume_show=$this->obj->DB_select_all("resume_show","`uid`='".$this->uid."' and `id` in (".$ids.")","`picurl`");
		if(is_array($resume_show)&&$resume_show){
			foreach($resume_show as $val){
				unlink_pic(".".$val['picurl']);
			}
			$this->obj->DB_delete_all("resume_show","`id` in (".$ids.") and `uid`='".$this->uid."'","");
			$this->obj->member_log("删除作品案例",16,3);
		}
		return true;
	}
	function addshow_action(){
		$this->public_action();
		$this->user_tpl('addshow');
	}
	function upshow_action(){
	    if ($_POST['picurl']!=''){
	        $show = $this->obj->DB_select_once('resume_show',"`uid`='".$this->uid."'and `id`='".$_POST['id']."'");
	        if($_POST['picurl']!=$show['picurl']){
				$data['picurl'] = $this->checksrc($_POST['picurl'],$show['picurl']);
			}
	    }
	    $data['title']=$_POST['title'];
	    $data['sort']=$_POST['showsort'];
	    $data['ctime']=time();
	    $nid = $this->obj->update_once('resume_show',$data,array('id'=>$_POST['id'],'uid'=>$this->uid));
		if($nid){
			$this->ACT_layer_msg("更新成功！",9,"index.php?c=show&eid=".$_POST['eid']);
		}else{
			$this->ACT_layer_msg("更新失败！",8,"index.php?c=show&eid=".$_POST['eid']);
		}
    }
	function save_action(){
	    $UploadM=$this->MODEL("upload");
	    if (!empty($_FILES)){
	        $upload=$UploadM->Upload_pic("../data/upload/show/");
	        $pictures=$upload->picture($_FILES['file']);
	        $picmsg=$UploadM->picmsg($pictures);
	        if($picmsg['status'] == $pictures){
	            
	        }
	        $pic = str_replace("../data/upload/show","./data/upload/show",$pictures);
	        $name=$_FILES['file']['name'];
	        $data=array(
	            'title'=>$this->stringfilter($name),
	            'uid'=>$this->uid,
	            'picurl'=>$pic,
	            'ctime'=>time(),
	            'eid'=>intval($_POST['usershowid'])
	        );
	        $resumeM = $this->MODEL('resume');
	        $id = $resumeM->AddResumeShow($data);
	        $this->obj->member_log("添加作品展示",16,3);
	        $arr=array(
	            'jsonrpc'=>'2.0',
	            'id'=>$id
	        );
	        echo json_encode($arr);die;
	    }
	}
}
?>