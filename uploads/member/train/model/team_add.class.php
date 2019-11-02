<?php
/* *
* $Author ：LEO
*
* 官网: http://www.fpwjob.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class team_add_controller extends train{
	function index_action(){
		if($_GET['id']){
			$row=$this->obj->DB_select_once("px_teacher","`id`='".(int)$_GET['id']."' and `uid`='".$this->uid."'");
			$this->yunset("row",$row);
		}
		$this->yunset($this->MODEL('cache')->GetCache(array('city','hy','subject')));
		$this->public_action();
		$this->train_satic();
		$this->train_tpl('team_add');
	}
	function save_action(){
	    $_POST=$this->post_trim($_POST);
	    $data['name'] = $_POST['name'];
	    $data['sid'] = $_POST['sid'];
	    $data['hy'] = $_POST['hy'];
	    $data['provinceid'] = $_POST['provinceid'];
	    $data['cityid']= $_POST['cityid'];
	    $data['threecityid'] = $_POST['threecityid'];
	    $data['content'] = str_replace(array("&amp;","background-color:#ffffff","background-color:#fff","white-space:nowrap;"),array("&",'background-color:','background-color:','white-space:'),$_POST['content']);
	    $data['ctime'] = time();
	    $data['status'] = 0;
	    $row=$this->obj->DB_select_once("px_teacher","`uid`='".$this->uid."' and `id`='".(int)$_POST['id']."' and `pic`<>''");
 		if($_POST['pic']!=$row['pic']){
			$data['pic'] = $this->checksrc($_POST['pic'],$row['pic']);
	    }
		if($_POST['id']){
	        $subject=$this->obj->DB_select_all("px_subject","`teachid`='".$_POST['id']."'");
	        
	        $where['uid']=$this->uid;
	        $where['id']=$_POST['id'];
	        $nid=$this->obj->update_once("px_teacher",$data,$where);
	        if($nid){
	            if ($subject){
	                $this->obj->DB_update_all("px_subject","`status`='0'","`teachid`='".$_POST['id']."'");
	            }
	            $this->obj->member_log("更新培训师",20,2);
	            $this->ACT_layer_msg("更新成功！",9,"index.php?c=team&status=1");
	        }else{
	            $this->ACT_layer_msg("更新失败,请重新填写！",8,"index.php?c=team_add");
	        }
	    }else{
	        $data['uid'] = $this->uid;
	        $data['did'] = $this->userdid;
	        $nid=$this->obj->insert_into("px_teacher",$data);
	        if($nid){
	            $this->obj->member_log("添加培训师",20,1);
	            $this->ACT_layer_msg("添加成功！",9,"index.php?c=team&status=1");
	        }else{
	            $this->ACT_layer_msg("添加失败,请重新填写！",8,"index.php?c=team_add");
	        }
	    }
	}
}
?>