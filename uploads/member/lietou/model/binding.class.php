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
class binding_controller extends lietou{
	function index_action(){
		$lt=$this->obj->DB_select_once("lt_info","`uid`='".$this->uid."'");
		$this->yunset("lt",$lt);
		$cert=$this->obj->DB_select_once("company_cert","`uid`='".$this->uid."' and type='4'");
		if($cert&&is_array($cert)){
		    if($cert['check']){
		        $cert['old_check']=str_replace('./data','/data',$cert['check']);
		    }
		}
		$this->yunset("cert",$cert);
		$this->public_action();
		$this->yunset("class","5");
		$this->lietou_tpl('binding');
	}
	function save_action(){
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
				$this->obj->DB_update_all("lt_info","`moblie`='".$row['check']."',`moblie_status`='1'","`uid`='".$this->uid."'");
				$this->obj->DB_update_all("company_cert","`status`='1'","`uid`='".$this->uid."' and `check2`='".$_POST['code']."'");
				$this->obj->member_log("手机绑定",13,1);
				$pay=$this->obj->DB_select_once("company_pay","`pay_remark`='手机绑定' and `com_id`='".$this->uid."'");
				if(empty($pay)){
				    $IntegralM=$this->MODEL('integral');
					$IntegralM->get_integral_action($this->uid,"integral_mobliecert","手机绑定");
				}
				echo 1;die;
			}else{
				echo 2;die;
			}
		}
	}
	function savecert_action(){
	    $row=$this->obj->DB_select_once("company_cert","`uid`='".$this->uid."' and type='4'");
	    if($this->config['lt_cert_status']=="1"){
	        $sql['status']=0;
	    }else{
	        $sql['status']=1;
	    }
	    $sql['step']=1;
		if($_POST['check']!=$row['check']){
			$sql['check'] = $this->checksrc($_POST['check'],$row['check']);
		}	    
		$sql['check2']="0";
	    $sql['ctime']=mktime();
	    $where['uid']=$this->uid;
	    $where['type']='4';
	    if(is_array($row)&&$row['ctime']){
	        $id=$this->obj->update_once("company_cert",$sql,$where);
	        $this->obj->member_log("更新认证",13,2);
	    }else{
	        $sql['uid'] = $this->uid;
	        $sql['type']=4;
	        $sql['did']=$this->userdid;
	        $id=$this->obj->insert_into("company_cert",$sql);
	        $this->obj->member_log("添加认证",13,1);
	        if($this->config['lt_cert_status']=="0"){
	            $uid=$this->uid;
	            $ulen=9-strlen($uid);
	            for($a=1;$a<$ulen;$a++){
	                $uid="0".$uid;
	            }
	            $data['rzid']="YLT".$uid;
	            $this->obj->update_once("lt_info",$data,array("uid"=>$uid));
	            $IntegralM=$this->MODEL('integral');
	            $IntegralM->get_integral_action($this->uid,"integral_ltcert","猎头执照认证");
	        }
	    }
	    if($id){
	        if($this->config['lt_cert_status']=='0'){
	            $this->obj->DB_update_all("lt_info","`yyzz_status`='1'","`uid`='".$this->uid."'");
	        }else{
	            $this->obj->DB_update_all("lt_info","`yyzz_status`='0'","`uid`='".$this->uid."'");
	        }
	        $this->ACT_layer_msg("上传成功！",9,1);
	    }else{
	        $this->ACT_layer_msg("上传失败！",9,1);
	    }
	}
	function del_action(){
		if($_GET['type']=="moblie"){
			$this->obj->DB_update_all("lt_info","`moblie_status`='0'","`uid`='".$this->uid."'");
		}
		if($_GET['type']=="email"){
			$this->obj->DB_update_all("lt_info","`email_status`='0'","`uid`='".$this->uid."'");
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