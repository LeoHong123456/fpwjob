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
class banner_controller extends company{
	function index_action(){
		$banner=$this->obj->DB_select_once("banner","`uid`='".$this->uid."'");
		if($banner){
			if($banner['pic'] && file_exists(str_replace('./',APP_PATH,$banner['pic']))){
				$banner['pic']=str_replace('./',$this->config['sy_weburl'].'/',$banner['pic']);
			}else{
				$banner['pic']="";
			}
		}
		$this->yunset("banner",$banner); 
		$this->public_action();
		$this->yunset("js_def",2);
		$this->com_tpl("banner");
	}
	
	function save_action(){
		$UploadM=$this->MODEL('upload');
		$IntegralM=$this->MODEL('integral');
	    if($_POST['save']){
	    	$row=$this->obj->DB_select_num("banner","`uid`='".$this->uid."'");
	    	if($row>0){
	    		$this->ACT_layer_msg("已有横幅，不能再添加横幅！",8,"index.php?c=banner");
	    	}
			    if(is_uploaded_file($_FILES['file']['tmp_name'])){
			        $upload=$UploadM->Upload_pic("../data/upload/company/",false);
			        $pictures=$upload->picture($_FILES['file']);
			        $picmsg = $UploadM->picmsg($pictures,$_SERVER['HTTP_REFERER']);
					if($picmsg['status'] == $pictures){
						$this->ACT_layer_msg($picmsg['msg'],8);
					}
			        $data['uid']=$this->uid;
    		        $data['pic']=str_replace("../data/upload/company/","./data/upload/company/",$pictures);
    		        $this->obj->insert_into("banner",$data);
    		        $this->obj->member_log("上传企业横幅",16,1);
    		        $IntegralM->get_integral_action($this->uid,"integral_banner","上传企业横幅");
    		        $this->ACT_layer_msg("设置成功！",9,"index.php?c=banner");
			    }
		}
        if($_POST['update']){
            if(is_uploaded_file($_FILES['file']['tmp_name'])){
                $upload=$UploadM->Upload_pic("../data/upload/company/",false);
                $pictures=$upload->picture($_FILES['file']);
                $picmsg = $UploadM->picmsg($pictures,$_SERVER['HTTP_REFERER']);
				if($picmsg['status'] == $pictures){
					$this->ACT_layer_msg($picmsg['msg'],8);
				}
                $row=$this->obj->DB_select_once("banner","`uid`='".$this->uid."'");
                if(is_array($row)){
                    unlink_pic('.'.$row['pic']);
                }
                $this->obj->update_once("banner",array("pic"=>str_replace("../data/upload/company/","./data/upload/company/",$pictures)),array("uid"=>$this->uid));
                $this->obj->member_log("修改企业横幅",16,2);
                $this->ACT_layer_msg("修改成功！",9,"index.php?c=banner");
            }	
        }
	}
}
?>