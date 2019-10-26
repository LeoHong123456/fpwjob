<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class addshow_controller extends train{
	function index_action(){
		$this->public_action();
		$this->train_tpl('addshow');
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
	            'ctime'=>time()
	        );
	        $trainM = $this->MODEL('train');
	        $id = $trainM->AddShow($data);
	        $this->obj->member_log("添加环境展示",16,1);
	        $arr=array(
	            'jsonrpc'=>'2.0',
	            'id'=>$id
	        );
	        echo json_encode($arr);die;
	    }
	}
}
?>