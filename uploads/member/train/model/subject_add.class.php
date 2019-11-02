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
class subject_add_controller extends train{
	function index_action(){
		$train=$this->obj->DB_select_once("px_train","`uid`='".$this->uid."'","`name`");
		if($train['name']==""){
			$this->ACT_msg("index.php?c=info","请先完善基本资料！");
		}
		$teach=$this->obj->DB_select_num("px_teacher","`uid`='".$this->uid."' and status='1'");
		$this->yunset("teach",$teach);
		$statusnum=$this->obj->DB_select_num("px_teacher","`uid`='".$this->uid."' and status='1'","id");
		$teachinfo=$this->obj->DB_select_all("px_teacher","`uid`='".$this->uid."' and status='1'","id,name");
		$this->yunset("teachinfo",$teachinfo);
		$row=$this->obj->DB_select_once("px_subject","`id`='".(int)$_GET['id']."' and `uid`='".$this->uid."'");
		$row['type']=@explode(",",$row['type']);
		$row['teachid']=@explode(',',$row['teachid']);
		$this->yunset("row",$row);
		$this->yunset($this->MODEL('cache')->GetCache(array('city','subject','subjecttype')));
		$this->public_action();
		$this->train_satic();
		$this->train_tpl('subject_add');
	}
	function save_action(){
	    $data['name'] = $_POST['name'];
	    $data['nid'] = $_POST['nid'];
	    $data['tnid'] = $_POST['tnid'];
	    $data['provinceid'] = $_POST['provinceid'];
	    $data['cityid']= $_POST['cityid'];
	    $data['threecityid'] = $_POST['threecityid'];
	    $data['address'] = $_POST['address'];
	    $data['hours']= $_POST['hours'];
	    $data['price'] = $_POST['price'];
	    $data['isprice']= $_POST['isprice'];
	    $data['moblie'] = $_POST['moblie'];
	    $data['crowd']= $_POST['crowd'];
	    $data['superiority'] = $_POST['superiority'];
	    $data['content'] = str_replace(array("&amp;","background-color:#ffffff","background-color:#fff","white-space:nowrap;"),array("&",'background-color:','background-color:','white-space:'),$_POST['content']);
	    $data['type']= @implode(',',$_POST['type']);
	    $data['teachid'] = @implode(',',$_POST['teachid']);
	    $data['ctime'] = time();
	    $data['status'] = 0;
	    $row=$this->obj->DB_select_once("px_subject","`uid`='".$this->uid."' and `id`='".(int)$_POST['id']."' and `pic`<>''");
		if($_POST['pic']!=$row['pic']){
			$data['pic'] = $this->checksrc($_POST['pic'],$row['pic']);
	    }	    
		if($_POST['id']){
	        $where['uid']=$this->uid;
	        $where['id']=$_POST['id'];
	        $nid=$this->obj->update_once("px_subject",$data,$where);
	        if($nid){
	            $this->obj->member_log("更新培训课程",21,2);
	            $this->ACT_layer_msg("更新成功！",9,"index.php?c=subject&status=1");
	        }else{
	            $this->ACT_layer_msg("更新失败,请重新填写！",8,"index.php?c=subject_add");
	        }
	    }else{
	        $data['uid'] = $this->uid;
	        $data['did'] = $this->userdid;
	        $nid=$this->obj->insert_into("px_subject",$data);
	        if($nid){
	            $this->obj->member_log("添加培训课程",21,1);
	            $this->ACT_layer_msg("添加成功！",9,"index.php?c=subject&status=1");
	        }else{
	            $this->ACT_layer_msg("添加失败,请重新填写！",8,"index.php?c=subject_add");
	        }
	    }
	}
}
?>