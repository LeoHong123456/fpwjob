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
class uploadcert_controller extends train
{
	function index_action()
	{
		$UploadM=$this->MODEL('upload');
		$upload=$UploadM->Upload_pic("../data/upload/cert/",false);
		$pictures=$upload->picture($_FILES['fileToUpload']);

		$UploadM->picmsg($pictures,$_SERVER['HTTP_REFERER'],"ajax");
		if($this->config['train_cert_status']=="1")
		{
			$sql['status']=0;
		}else{
			$sql['status']=1;
			$this->obj->DB_update_all("px_train","`cert` = concat(`cert`,',3')","`uid`='".$this->uid."'");

		}
		$sql['step']=1;
		$sql['check']=str_replace("../","/",$pictures);
		$sql['check2']="0";
		$sql['ctime']=mktime();
		$row=$this->obj->DB_select_once("company_cert","`uid`='".$this->uid."' and type='3'");
		if(is_array($row))
		{
			$where['uid']=$this->uid;
			$where['type']='3';
			$this->obj->update_once("company_cert",$sql,$where);
			$this->obj->member_log("更新营业执照",13,1);
		}else{
			$sql['uid']=$this->uid;
			$sql['did']=$this->userdid;
			$sql['type']=3;
			$this->obj->insert_into("company_cert",$sql);
			$this->obj->member_log("上传营业执照",13,1);
		}
		if($this->config['train_cert_status']!="1")
		{
			$pictures=0;
		}
		echo "{";
		echo				"url: '".$pictures."',\n";
		echo "}";
	}
}
?>