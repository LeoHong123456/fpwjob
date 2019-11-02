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
class integral_controller extends train
{
	function index_action(){
		$this->public_action();
		$signin			    = false;
		$baseInfo			= false;	
		$logo				= false;	
		$emailChecked		= false;
		$phoneChecked		= false;
		$pay_remark         =false;
		$question        	=false;	
		$answer       		=false;		
		$answerpl           =false;	
		$banner				= false;
		
		$row = $this->obj->DB_select_once("px_train",'`uid` = '.$this->uid,
			"`name`,`sid`,
			`logo`,`email_status`,`moblie_status`");
		
		if(is_array($row) && !empty($row)){
			if($row['name'] != '' && $row['sid'] != '' )
				$baseInfo = true;
			
			if($row['logo'] != '') $logo = true;
			if($row['email_status'] != 0) $emailChecked = true;
			if($row['moblie_status'] != 0) $phoneChecked = true;
		}
		$date=date("Ymd");
		$reg=$this->obj->DB_select_once("member_reg","`uid`='".$this->uid."' and `usertype`='".$this->usertype."' and `date`='".$date."'");
		if($reg['id']){
		    $signin = true;
		}
		if($this->config['integral_question_type']=="1"){
			$question=$this->max_time('发布问题');
		}
		if($this->config['integral_answer_type']=="1"){
			$answer=$this->max_time('回答问题');
		}
		if($this->config['integral_answerpl_type']=="1"){
			$answerpl=$this->max_time('评论问答');
		}
		
		$banner_num	= $this->obj->DB_select_num('px_banner','`uid` = '.$this->uid);
		if($banner_num > 0) $banner = true;
		
		$statusList = array(
		    'signin'		=>$signin,
			'baseInfo'		=>$baseInfo,
			'logo'			=>$logo,
			'emailChecked'	=>$emailChecked,
			'phoneChecked'	=>$phoneChecked,
			'pay_remark'	=>$pay_remark,
			'question'	    =>$question,
			'answer'	    =>$answer,
			'answerpl'	    =>$answerpl,
			'banner'		=> $banner	
		);
		$this->yunset("statusList",$statusList);
		$this->train_satic();
		$this->train_tpl('integral');
	}
	
}	
?>