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
class integral_controller extends lietou{
	function index_action(){
		$signin			    = false;
		$baseInfo			= false;
		$photo				= false;
		$emailChecked		= false;
		$phoneChecked		= false;
		$pay_remark         =false;
		$question        	=false;
		$answer       		=false;
		$answerpl           =false;
		$yyzz				= false;
		
		$row = $this->obj->DB_select_once("lt_info",'`uid` = '.$this->uid,
			"`realname`,`com_name`,
			`photo`,`email_status`,`moblie_status`,
			`yyzz_status`");
		
		if(is_array($row) && !empty($row)){
			if($row['realname'] != '' && $row['com_name'] != '' )
				$baseInfo = true;
			
			if($row['photo'] != '') $photo = true;
			if($row['email_status'] != 0) $emailChecked = true;
			if($row['moblie_status'] != 0) $phoneChecked = true;
			if($row['yyzz_status'] != 0) $yyzz = true;
			
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
		
		$statusList = array(
		    'signin'		=>$signin,
			'baseInfo'		=>$baseInfo,
			'photo'			=>$photo,
			'emailChecked'	=>$emailChecked,
			'phoneChecked'	=>$phoneChecked,
			'pay_remark'	=>$pay_remark,
			'question'	    =>$question,
			'answer'	    =>$answer,
			'answerpl'	    =>$answerpl,
			'yyzz'			=> $yyzz
		);
		$this->yunset("statusList",$statusList);
		$this->public_action();
		$this->lietou_tpl('integral');
	}
	
}	
?>