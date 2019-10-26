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
class uppic_controller extends train
{
	function index_action(){

		$this->public_action();
		$px_train=$this->obj->DB_select_once("px_train","`uid`='".$this->uid."'","`logo`");
		if($px_train['logo']){
			$px_train['logo']=$this->config['sy_weburl']."/".$px_train['logo'];
		}else{
			$px_train['logo']=$this->config['sy_weburl']."/".$this->config['sy_px_icon'];
		}
		$this->yunset("px_train",$px_train);
		$this->yunset("js_def",2);
		$this->train_satic();
		$this->train_tpl('uppic');
	}
	function uppath(){
		$upload_path = "../data/upload/train/";
		return $upload_path;
	}


	function ajaxfileupload_action(){
			if($_FILES['image']['tmp_name']){
				$UploadM=$this->MODEL('upload');
				$upload=$UploadM->Upload_pic("../data/upload/train",false);
				$pictures=$upload->picture($_FILES['image']);
				$picMsg = $UploadM->picmsg($pictures,$_SERVER['HTTP_REFERER'],"ajax");
				if($picMsg){
					$imginfo=$this->getInfo($pictures);
					if($imginfo['width']<120 || $imginfo['height']<120){
						unlink_pic($pictures);
						$res['s_thumb'] = '上传头像尺寸太小';
					}else{
						$s_thumb=$upload->makeThumb($pictures,200,200,'_S_');

						unlink_pic($pictures);
						$res["url"] = $s_thumb;
					}

					echo json_encode($res);
				}
			}else{
				$res["s_thumb"] = '请选择上传图片';
				echo json_encode($res);
			}
	}

	function getInfo($file){
		$data=getimagesize($file);
		$imageInfo["width"]	= $data[0];
		$imageInfo["height"]= $data[1];
		$imageInfo["type"]	= $data[2];
		$imageInfo["name"]	= basename($file);
		$imageInfo["size"]  = filesize($file);
		return $imageInfo;
	}

	function savethumb_action(){
		$IntegralM=$this->MODEL('integral');
		$upload_path = $this->uppath();
		$upload_path=ltrim($upload_path,'.');
		if(stripos(trim($_POST['img1']),$upload_path)===false){
			$this->ACT_layer_msg("非法操作！",8,$_SERVER['HTTP_REFERER']);
		}
		include(LIB_PATH."sizer.class.php");
		$sizer=new Sizer("../data/upload/train/".date('Ymd').'/');
		$t_name = $sizer->sizeIt();
		$px_train=$this->obj->DB_select_once("px_train","`uid`='".$this->uid."'","`logo`");
		if($px_train['logo']){
			if($px_train['logo'] != './'.$this->config['sy_unit_icon']){
				unlink_pic('.'.$px_train['logo']);
			}
		}else{
			$IntegralM->get_integral_action($this->uid,"integral_avatar","上传LOGO");
		}

		$ref=$this->obj->update_once("px_train",array('logo'=>str_replace("../data/upload/train/","./data/upload/train/",$t_name[1])),array('uid'=>$this->uid));
		$this->obj->DB_update_all("answer","`pic`='".str_replace("../data/upload/train/","./data/upload/train/",$t_name[1])."'","`uid`='".$this->uid."'");
		$this->obj->DB_update_all("question","`pic`='".str_replace("../data/upload/train/","./data/upload/train/",$t_name[1])."'","`uid`='".$this->uid."'");
		if($ref){echo 1;}else{echo 2;}
	}
}
?>