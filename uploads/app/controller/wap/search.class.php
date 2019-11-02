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
class search_controller extends common{
	function history_action(){
		if($_POST['type']&&($_COOKIE['job_key_history']||$_COOKIE['resume_key_history'])){
			if($_POST['type']=='resume'){
				$type=5;
				if($_COOKIE['resume_key_history']){
					$hisarr=@explode(",",$_COOKIE['resume_key_history']);
				}
			}else{
				$type=3;
				if($_COOKIE['job_key_history']){
					$hisarr=@explode(",",$_COOKIE['job_key_history']);
				}
			}
			if($hisarr){
			

				foreach($hisarr as $key=>$value){
					
						
					$list[$key]['key_name'] = $value;
					if($type==5){
						$list[$key]['url'] =Url('wap',array('c'=>'resume','keyword'=>$value));
					}
					if($type==3){
						$list[$key]['url'] =Url('wap',array('c'=>'job','keyword'=>$value));
					}

				}
				$data['hisid']=$type;
				$data['list']=$list;
				echo json_encode($data);die;
			}
		}
	}
	
	function del_action(){
		if($_POST['type']==3){
			SetCookie('job_key_history','',time()-864000,"/");
			echo Url('wap',array('c'=>'job'));die;
		}
		if($_POST['type']==5){
			SetCookie('resume_key_history','',time()-864000,"/");
			echo Url('wap',array('c'=>'resume'));die;
		}
	}
	
}
?>