<?php
/*
* $Author ：LEO
*
* 官网: https://www.fpwjob.com
*
* 版权所有 2018-2019 菲聘网，并保留所有权利。
*
*
 */
class show_controller extends zph_controller{ 
	function index_action(){   
		$this->Zphpublic_action();
		$id=(int)$_GET['id'];
		$M=$this->MODEL('zph');
		$row=$M->GetZphOnce(array("id"=>$id)); 
		if($row['id']==''){
			$this->ACT_msg(url("zph"),"没有找到该招聘会！");
		}
		$row["stime"]=strtotime($row['starttime'])-mktime();
		$row["etime"]=strtotime($row['endtime'])-mktime();
		if(!$row['is_themb'] || (!file_exists(str_replace($this->config['sy_weburl'],APP_PATH,'.'.$row['is_themb'])) && !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,$row['is_themb'])))){
		    $row['is_themb']=$this->config['sy_weburl']."/".$this->config['sy_zph_icon'];
		}else{
		    $row['is_themb']=str_replace("./",$this->config['sy_weburl']."/",$row['is_themb']);
		}
		if(!$row['banner'] || (!file_exists(str_replace($this->config['sy_weburl'],APP_PATH,'.'.$row['banner'])) && !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,$row['banner'])))){
		    $row['banner']=$this->config['sy_weburl']."/".$this->config['sy_zphbanner_icon'];
		}else{
		    $row['banner']=str_replace("./",$this->config['sy_weburl']."/",$row['banner']);
		}
		$rows=$M->GetZphPic(array("zid"=>$id));
		if($this->uid&&$this->usertype=='2'){
			$isyd=$M->GetZphComNum(array("zid"=>$id,"uid"=>$this->uid));
			$this->yunset("Info",$row);			
		} 
		$data['zph_title']=$row['title'];
		$data['zph_desc']=$this->GET_content_desc($row['body']);
		$this->data=$data;
		$this->yunset("Info",$row);
		$this->yunset("Image_info",$rows);
		$this->seo("zph_show");
		$this->zph_tpl('zphshow'); 
	} 
}
?>