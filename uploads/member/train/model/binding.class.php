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
class binding_controller extends train{
	function index_action(){
		$member=$this->obj->DB_select_once("member","`uid`='".$this->uid."'");
		$this->yunset("member",$member);
		if(($member['qqid']!=""||$member['wxid']!=""||$member['unionid']!=""||$member['sinaid']!="") && $member['restname']=="0"){
			$this->yunset("setname",1);
		}
		$train=$this->obj->DB_select_once("px_train","`uid`='".$this->uid."'");
		$this->yunset("train",$train);
		$cert=$this->obj->DB_select_once("company_cert","`uid`='".$this->uid."' and type='5'");
		if($cert['check']){
		    $cert['old_check']=str_replace('./data','/data',$cert['check']);
		}
		$this->yunset("cert",$cert);
		$this->public_action();
		$this->train_satic();
		$this->train_tpl('binding');
	}
	function save_action(){
		$IntegralM=$this->MODEL('integral');
		if($_POST['moblie']){
			$row=$this->obj->DB_select_once("company_cert","`uid`='".$this->uid."' and `check`='".$_POST['moblie']."' and `type`='2'");
			if(!empty($row)){
				if($row['check2']!=$_POST['code']){
					echo 3;die;
				}
				$this->obj->DB_update_all("member","`moblie`=''","`moblie`='".$row['check']."'");
				$this->obj->DB_update_all("resume","`moblie_status`='0',`telphone`=''","`telphone`='".$row['check']."'");
				$this->obj->DB_update_all("company","`moblie_status`='0',`linktel`=''","`linktel`='".$row['check']."'");
				$this->obj->DB_update_all("lt_info","`moblie_status`='0',`moblie`=''","`moblie`='".$row['check']."'");
				$this->obj->DB_update_all("px_train","`moblie_status`='0',`linktel`=''","`linktel`='".$row['check']."'");
				$this->obj->DB_update_all("member","`moblie`='".$row['check']."'","`uid`='".$this->uid."'");
				$this->obj->DB_update_all("px_train","`linktel`='".$row['check']."',`moblie_status`='1'","`uid`='".$this->uid."'");
				$this->obj->DB_update_all("company_cert","`status`='1'","`uid`='".$this->uid."' and `check2`='".$_POST['code']."'");
				$this->obj->member_log("手机绑定",13,1);
				$pay=$this->obj->DB_select_once("company_pay","`pay_remark`='手机绑定' and `com_id`='".$this->uid."'");
				if(empty($pay)){
					$IntegralM->get_integral_action($this->uid,"integral_mobliecert","手机绑定");
				}
				echo 1;die;
			}else{
				echo 2;die;
			}
		}
	}
	function savecert_action(){
	    $userinfoM = $this->MODEL('userinfo');
	    $cert = $userinfoM->GetCompanyCert(array('uid'=>$this->uid,'type'=>5));
	    if($this->config['px_cert_status']=="1"){
	        $sql['status']=0;
	    }else{
	        $sql['status']=1;
	    }
	    $this->obj->DB_update_all("px_train","`name`='".$_POST['name']."',`yyzz_status`='".$sql['status']."'","`uid`='".$this->uid."'");
	    $sql['step']=1;
		if($_POST['check']!=$cert['check']){
			$sql['check'] = $this->checksrc($_POST['check'],$cert['check']);
		}
 	    $sql['check2']="0";
	    $sql['ctime']=mktime();
	    $where['uid']=$this->uid;
	    $where['type']='5';
	    if(is_array($cert)&&$cert['ctime']){
	        $id=$this->obj->update_once("company_cert",$sql,$where);
	        $this->obj->member_log("更新培训执照",13,2);
	    }else{
	        $sql['uid'] = $this->uid;
	        $sql['type']=5;
	        $sql['did']=$this->userdid;
	        $id=$this->obj->insert_into("company_cert",$sql);
	        $this->obj->member_log("上传培训执照",13,1);
	    }
	    if($id){
	        $this->ACT_layer_msg("上传成功！",9,1);
	    }else{
	        $this->ACT_layer_msg("上传失败！",9,1);
	    }
	}
	function del_action(){
		if($_GET['type']=="moblie"){
			$this->obj->DB_update_all("px_train","`moblie_status`='0'","`uid`='".$this->uid."'");
		}
		if($_GET['type']=="email"){
			$this->obj->DB_update_all("px_train","`email_status`='0'","`uid`='".$this->uid."'");
		}
		if($_GET['type']=="qqid"){
			$this->obj->DB_update_all("member","`qqid`='',`qqunionid`=''","`uid`='".$this->uid."'");
		}
		if($_GET['type']=="sinaid"){
			$this->obj->DB_update_all("member","`sinaid`=''","`uid`='".$this->uid."'");
		}
		if($_GET['type']=="wxid"){
			$this->obj->DB_update_all("member","`wxid`='',`wxopenid`='',`unionid`=''","`uid`='".$this->uid."'");
		}
		$this->layer_msg("解除绑定成功！",9,0,$_SERVER['HTTP_REFERER']);
	}
}
?>