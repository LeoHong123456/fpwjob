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
class banner_controller extends train{
	function index_action(){
		$UploadM=$this->MODEL('upload');
		$IntegralM=$this->MODEL('integral');
		if($_POST['submit']){
			$statis=$this->obj->DB_select_once("px_train_statis","`uid`='".$this->uid."'",'integral');
			 
			$upload=$UploadM->Upload_pic("../data/upload/train/",false);
			$pic=$upload->picture($_FILES['file']);
			$picmsg = $UploadM->picmsg($pic,$_SERVER['HTTP_REFERER']);
			if($picmsg['status'] == $pic){
				$this->ACT_layer_msg($picmsg['msg'],8);
			}
			$pic=str_replace("../data","./data",$pic);
			$data['uid']=$this->uid;
			$data['pic']=$pic;
			$this->obj->insert_into("px_banner",$data);
			$this->obj->member_log("上传机构横幅",16,1);
			$IntegralM->get_integral_action($this->uid,"integral_px_banner","上传培训横幅");
			$this->ACT_layer_msg("设置成功！",9,"index.php?c=banner");
			 
		}
		if($_POST['update']){
			$upload=$UploadM->Upload_pic("../data/upload/train/",false);
			$pic=$upload->picture($_FILES['file']);
			$picmsg=$UploadM->picmsg($pic,$_SERVER['HTTP_REFERER']);
			if($picmsg['status'] == $pic){
				$this->ACT_layer_msg($picmsg['msg'],8);
			}
			$pic=str_replace("../data","./data",$pic);
			$row=$this->obj->DB_select_once("px_banner","`uid`='".$this->uid."'");
			if(is_array($row)){
				unlink_pic($row['pic']);
			}
			$this->obj->update_once("px_banner",array("pic"=>$pic),array("uid"=>$this->uid));
			$this->obj->member_log("编辑机构横幅",16,2);
 			$this->ACT_layer_msg("设置成功！",9,"index.php?c=banner");
		}
		$banner=$this->obj->DB_select_once("px_banner","`uid`='".$this->uid."'");
		if($banner){
			if($banner['pic'] && file_exists(str_replace('./',APP_PATH,$banner['pic']))){
				$banner['pic']=str_replace('./',$this->config['sy_weburl'].'/',$banner['pic']);
			}else{
				$banner['pic']="";
			}
		}
		$this->yunset("banner",$banner);
		$this->public_action();
		$this->train_satic();
		$this->train_tpl('banner');
	}
}
?>