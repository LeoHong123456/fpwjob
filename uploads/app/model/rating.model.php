<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class rating_model extends model{
    
    function rating_info($id='',$uid='', $leijia=2){
		if($id==''){
			$id =$this->config['com_rating'];
		}
		if($uid==''){
			$uid = $this->uid;
		}
		$acc = $this->config['package_data_acc'];
		if(!$acc){
			$acc = 2;
		}
		if ($leijia==1){
		    $acc = 1;
		}
		$statis = $this->DB_select_once("company_statis","`uid`='".$uid."'");
		
		$row = $this->DB_select_once("company_rating","`id`='".$id."' and `category`='1'");
		
		if($statis['rating_type'] == $row['type'] && $row['type'] == 1 && $acc== 1){
			if($row['service_time']>0){
				if($statis['vip_etime']>time()){
					$time= $statis['vip_etime'] + 86400 * $row['service_time'];
				}else{
					$time= time() + 86400 * $row['service_time'];
				}
			}else{
				$time= 0;
			}
			$value="`rating`='".$id."',";
			$value.="`rating_name`='".$row['name']."',";
			$value.="`rating_type`='".$row['type']."',";
			
			
			if($statis['vip_etime']==0 || $statis['vip_etime']>time() || $leijia==1){
			    $value.="`job_num`=`job_num`+'".$row['job_num']."',";
			    $value.="`breakjob_num`=`breakjob_num`+'".$row['breakjob_num']."',";
			    $value.="`down_resume`=`down_resume`+'".$row['resume']."',";
			    $value.="`invite_resume`=`invite_resume`+'".$row['interview']."',";
			    $value.="`part_num`=`part_num`+'".$row['part_num']."',";
			    $value.="`breakpart_num`=`breakpart_num`+'".$row['breakpart_num']."',";
			    $value.="`lt_job_num`=`lt_job_num`+'".$row['lt_job_num']."',";
			    $value.="`lt_breakjob_num`=`lt_breakjob_num`+'".$row['lt_breakjob_num']."',";
			    $value.="`lt_down_resume`=`lt_down_resume`+'".$row['lt_resume']."',";
			    $value.="`zph_num`=`zph_num`+'".$row['zph_num']."',";
			    $value.="`integral`=`integral`+'".$row['integral_buy']."',";
			}else{
			    $value.="`job_num`='".$row['job_num']."',";
			    $value.="`breakjob_num`='".$row['breakjob_num']."',";
			    $value.="`down_resume`='".$row['resume']."',";
			    $value.="`invite_resume`='".$row['interview']."',";
			    $value.="`part_num`='".$row['part_num']."',";
			    $value.="`breakpart_num`='".$row['breakpart_num']."',";
			    $value.="`lt_job_num`='".$row['lt_job_num']."',";
			    $value.="`lt_breakjob_num`='".$row['lt_breakjob_num']."',";
			    $value.="`lt_down_resume`='".$row['lt_resume']."',";
			    $value.="`zph_num`='".$row['zph_num']."',";
			    $value.="`integral`='".$row['integral_buy']."',";
			}
			
			
			$value.="`vip_etime`='".$time."',";
			$value.="`vip_stime`='".time()."'";
 		}else if($statis['rating_type'] == $row['type'] && $row['type'] == 2 && $acc== 1){
 			if($row['service_time']>0){
				if($statis['vip_etime']>time()){
					$time= $statis['vip_etime'] + 86400 * $row['service_time'];
				}else{
					$time= time() + 86400 * $row['service_time'];
				}
			}else{
				$time= 0;
			}
			$value="`rating`='".$id."',";
			$value.="`rating_name`='".$row['name']."',";
			$value.="`rating_type`='".$row['type']."',";
			
			$value.="`job_num`='".$row['job_num']."',";
			$value.="`breakjob_num`='".$row['breakjob_num']."',";
			$value.="`down_resume`='".$row['resume']."',";
			$value.="`invite_resume`='".$row['interview']."',";
			$value.="`part_num`='".$row['part_num']."',";
	 		$value.="`breakpart_num`='".$row['breakpart_num']."',";
			$value.="`lt_job_num`='".$row['lt_job_num']."',";
			$value.="`lt_breakjob_num`='".$row['lt_breakjob_num']."',";
			$value.="`lt_down_resume`='".$row['lt_resume']."',";
			$value.="`zph_num`='".$row['zph_num']."',";
			$value.="`integral`=`integral`+'".$row['integral_buy']."',";
			
			$value.="`vip_etime`='".$time."',";
			$value.="`vip_stime`='".time()."'";
 			
 		}else if($statis['rating_type'] != $row['type'] || $acc==2){
 			if($row['service_time']>0){
				$time= time() + 86400 * $row['service_time'];
			}else{
				$time= 0;
			}
			$value="`rating`='".$id."',";
			$value.="`rating_name`='".$row['name']."',";
			$value.="`rating_type`='".$row['type']."',";
			
			$value.="`job_num`='".$row['job_num']."',";
			$value.="`breakjob_num`='".$row['breakjob_num']."',";
			$value.="`down_resume`='".$row['resume']."',";
			$value.="`invite_resume`='".$row['interview']."',";
			$value.="`part_num`='".$row['part_num']."',";
	 		$value.="`breakpart_num`='".$row['breakpart_num']."',";
			$value.="`lt_job_num`='".$row['lt_job_num']."',";
			$value.="`lt_breakjob_num`='".$row['lt_breakjob_num']."',";
			$value.="`lt_down_resume`='".$row['lt_resume']."',";
			$value.="`zph_num`='".$row['zph_num']."',";
			$value.="`integral`=`integral`+'".$row['integral_buy']."',";
			
			$value.="`vip_etime`='".$time."',";
			$value.="`vip_stime`='".time()."',";
			$value.="`oldrating_name`='".$row['name']."'";
 		}

		

		if($row['integral_buy']>0){
			
			$dingdan=time().rand(10000,99999);
			$data['order_id']=$dingdan;
			$data['com_id']=$uid;
			$data['pay_remark']='购买企业套餐：'.$row['name'].'，赠送'.$row['integral_buy'];
			$data['pay_state']='2';
			$data['pay_time']=time();
			$data['order_price']=$row['integral_buy'];
			$data['pay_type']=27;
			$data['type']=1;
			
			$this->insert_into("company_pay",$data);
		}
		if($row['coupon']>0 && $row['time_start']<time() && $row['time_end']>time()){
			$coupon=$this->DB_select_once("coupon","`id`='".$row['coupon']."'");
			$data='';
			$data.="`uid`='".$uid."',";
			$data.="`number`='".time()."',";
			$data.="`ctime`='".time()."',";
			$data.="`coupon_id`='".$coupon['id']."',";
			$data.="`coupon_name`='".$coupon['name']."',";
			$validity=time()+$coupon['time']*86400;
			$data.="`validity`='".$validity."',";
			$data.="`coupon_amount`='".$coupon['amount']."',";
			$data.="`coupon_scope`='".$coupon['scope']."'";
			$this->DB_insert_once("coupon_list",$data);
		}
		return $value;
	}
	
	
	function ltrating_info($id='',$uid=''){
		if($id==''){
			$id =$this->config['lt_rating'];
		}
		
		if($uid==''){
			$uid = $this->uid;
		}
		
		$acc = $this->config['package_data_acc'];
		if(!$acc){
			$acc = 2;
		}
		$statis = $this->DB_select_once("lt_statis","`uid`='".$uid."'");
		
		$row = $this->DB_select_once("company_rating","`id`='".$id."' and `category`='2'");
		
		if($statis['rating_type'] == $row['type'] && $row['type'] == 1 && $acc== 1){

			if($row['service_time']>0){
				
				if($statis['vip_etime'] > time() ){
					$time= $statis['vip_etime'] + 86400 * $row['service_time'];
				}else{
					$time= time() + 86400 * $row['service_time'];
				}
				
			}else{
				$time= 0;
			}
			
			$value="`rating`='".$id."',";
			$value.="`rating_name`='".$row['name']."',";
			$value.="`rating_type`='".$row['type']."',";
			
			
			if($statis['vip_etime']>0 && $statis['vip_etime']<time()){
				$value.="`lt_job_num`='".$row['lt_job_num']."',";
				$value.="`lt_breakjob_num`='".$row['lt_breakjob_num']."',";
				$value.="`lt_down_resume`='".$row['lt_resume']."',";
			}else{

				$value.="`lt_job_num`=`lt_job_num`+'".$row['lt_job_num']."',";
				$value.="`lt_breakjob_num`=`lt_breakjob_num`+'".$row['lt_breakjob_num']."',";
				$value.="`lt_down_resume`=`lt_down_resume`+'".$row['lt_resume']."',";

			}
			
			
			$value.="`vip_etime`='".$time."'";
			
 		}else if($statis['rating_type'] == $row['type'] && $row['type'] == 2 && $acc== 1){
 			
 			if($row['service_time']>0){
				if($statis['vip_etime']>time()){
					$time= $statis['vip_etime'] + 86400 * $row['service_time'];
				}else{
					$time= time() + 86400 * $row['service_time'];
				}
			}else{
				$time= 0;
			}
			
			$value="`rating`='".$id."',";
			$value.="`rating_name`='".$row['name']."',";
			$value.="`rating_type`='".$row['type']."',";
			
      		$value.="`lt_job_num`='".$row['lt_job_num']."',";
			$value.="`lt_breakjob_num`='".$row['lt_breakjob_num']."',";
			$value.="`lt_down_resume`='".$row['lt_resume']."',";
 			
			$value.="`vip_etime`='".$time."'";
			
 		}else if($statis['rating_type'] != $row['type'] || $acc==2){
 			
 			if($row['service_time']>0){
				$time= time() + 86400 * $row['service_time'];
			}else{
				$time= 0;
			}
			
 			$value="`rating`='$id',";
 			$value.="`rating_name`='".$row['name']."',";
			$value.="`rating_type`='".$row['type']."',";
 		
 			$value.="`lt_job_num`='".$row['lt_job_num']."',";
			$value.="`lt_breakjob_num`='".$row['lt_breakjob_num']."',";
			$value.="`lt_down_resume`='".$row['lt_resume']."',";
 
			$value.="`vip_etime`='".$time."'";
 		}
		
		
		if($row['coupon']>0 && $row['time_start']<time() && $row['time_end']>time()){
			$coupon=$this->DB_select_once("coupon","`id`='".$row['coupon']."'");
			$data.="`uid`='".$uid."',";
			$data.="`number`='".time()."',";
			$data.="`ctime`='".time()."',";
			$data.="`coupon_id`='".$coupon['id']."',";
			$data.="`coupon_name`='".$coupon['name']."',";
			$validity=time()+$coupon['time']*86400;
			$data.="`validity`='".$validity."',";
			$data.="`coupon_amount`='".$coupon['amount']."',";
			$data.="`coupon_scope`='".$coupon['scope']."'";
			$this->DB_insert_once("coupon_list",$data);
		}
		return $value;
	}
}
?>