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
class payment_controller extends company{
	function index_action(){
		$rows=$this->obj->DB_select_all("bank");
		$this->yunset("rows",$rows);
		$order=$this->obj->DB_select_once("company_order","`uid`='".$this->uid."' and `id`='".(int)$_GET['id']."'");
		if(is_array($order)){
			$orderbank=@explode("@%",$order['order_bank']);
			if(is_array($orderbank)){
				foreach($orderbank as $key){
					$orderbank[]=$key;
				}
				$order['bank_name']=$orderbank[0];
				$order['bank_fname']=$orderbank[1];
				$order['bank_number']=$orderbank[2];
			}
		}
		if(empty($order)){ 
			$this->ACT_msg($_SERVER['HTTP_REFERER'],"订单不存在！"); 
		}elseif($order['order_state']!='1'){ 
			header("Location:index.php?c=paylog"); 
		}else{
			$statis=$this->company_satic();
			$company=$this->obj->DB_select_once("company","`uid`='".$this->uid."'","`linkman`,`linktel`,`address`,`name`");
			$order_remark="我所汇款的银行：\n我汇入的帐号：\n汇款金额：\n汇款时间：\n其他：\n";
			if($company['linkman']==''||$company['linktel']==''||$company['address']==''){
				$company['link_null']='1';
			}

			$coupons=$this->obj->DB_select_all("coupon_list","`uid`='".$this->uid."' and `validity`>'".time()."' and `coupon_scope`<='".$order['order_price']."' and `status`='1'");
			
			if($order['order_time']>strtotime("-7 day")){
				$order['invoice']='1';
			}
			$this->yunset("coupons",$coupons);
			$this->yunset("company",$company);
			$this->yunset("order",$order);
			$this->yunset("order_remark",$order_remark);
			$this->yunset("statis",$statis);
			$this->yunset("js_def",4);
			$this->public_action();
			$this->com_tpl('payment');
		}
	}
	
	function dkzf_action(){
				
		if($_POST){
			
 			$dkjf = (int)$_POST['dkjf'];
 			
			$order = $this->obj->DB_select_once("company_order","`id`='".(int)$_POST['id']."' and `uid`='".$this->uid."'");
			
     		$statis = $this->obj->DB_select_once("company_statis","`uid`='".$this->uid."'");
   			
   			if($statis['integral'] < $dkjf){
   				
   				echo json_encode(array('error'=>2,'msg'=>'积分不足，请重新输入积分！'));
   				
   			}else if($dkjf > 0){
   				
				$IntegralM = $this->MODEL('integral');
				
				$nid = $IntegralM->company_invtal($this->uid,$dkjf,false,"购买会员",true,2,'integral',27);
				
				$order_price = (int)$order['order_price'] - $dkjf / $this->config['integral_proportion'];
				$order_integral = ($order['order_dkjf'] + $dkjf) ;
 				
				if($nid){
					$this->obj->DB_update_all("company_order","`order_price`='".$order_price."',`order_dkjf`='".$order_integral."'","`id`='".(int)$_POST['id']."' and `uid`='".$this->uid."'");
					echo json_encode(array('error'=>1,'msg'=>"积分使用成功，请付款"));					
				}
   			}else{
				echo json_encode(array('error'=>1,'msg'=>'请付款!'));   				
   			}
		}else{
			echo json_encode(array('error'=>2,'msg'=>'参数错误，请重试！'));
		}
	}
	
	function wxurl_action(){
		
		if((int)$_POST['orderId']){
		
			$order=$this->obj->DB_select_once("company_order","`uid`='".$this->uid."' and `id`='".(int)$_POST['orderId']."' AND `order_state`='1'");

			if($_POST['coupon'] && $order['coupon']==""){
					
				$where="`uid`='".$this->uid."' and `id`='".$_POST['coupon']."' and `validity`>'".time()."'  and `status`='1' and `coupon_scope`<='".$order['order_price']."'";
				$coupon=$this->obj->DB_select_once('coupon_list',$where);

				$order['order_price']=sprintf("%.2f", $order['order_price']-$coupon['coupon_amount']);

				if($order['order_price']<0){$order['order_price']='0.01';}

				if($coupon['id']&&$order['coupon']<'1'){
					
					$this->obj->DB_update_all("coupon_list","`status`='2',`xf_time`='".time()."'","`id`='".$coupon['id']."'");

					$this->obj->DB_update_all("company_order","`coupon`='".$_POST['coupon']."',`order_price`='".$order['order_price']."'","`id`='".$order['id']."'");
				}
			}
			if($order['order_price']>0){
				if($this->config['wxpay']=='1'){
					
					require_once(LIB_PATH.'wxOrder.function.php');

					$wxUrl = wxOrder(array('body'=>'充值','id'=>$order['order_id'],'url'=>$this->config['sy_weburl'],'total_fee'=>$order['order_price']));
				}
			}
		}
		if($wxUrl){	
			echo "<img src=\"".$this->config['sy_weburl']."/index.php?m=ajax&c=wxpaycode&data=".$wxUrl."\" width=\"210\" height=\"210\">";
		}else{
			echo "二维码生成失败<br>请联系客服 ".$this->config['sy_freewebtel'];
		}
	}
	function paybank_action(){
		$UploadM=$this->MODEL('upload');
		$order=$this->obj->DB_select_once("company_order","`id`='".(int)$_POST['oid']."' and `uid`='".$this->uid."'");
		if($order['id']){
			$_POST['coupon']=intval($_POST['coupon']);
			if($_POST['coupon'] && $order['coupon']==""){
				
				$coupon=$this->obj->DB_select_once("coupon_list","`id`='".$_POST['coupon']."' and `uid`='".$this->uid."' and `validity`>'".time()."' and `coupon_scope`<='".$order['order_price']."' and `status`='1'");
				if($coupon['id']){
					$order_price=$order['order_price']-$coupon['coupon_amount'];
					$this->obj->DB_update_all("company_order","`order_price`='".$order_price."',`coupon`='".$_POST['coupon']."'","`id`='".(int)$_POST['oid']."' and `uid`='".$this->uid."'");
					$this->obj->DB_update_all("coupon_list","`status`='2',`xf_time`='".time()."'","`id`='".$coupon['id']."' and `uid`='".$this->uid."'");
				}
			}
			if($_POST['bank_name']==""){
				$this->ACT_layer_msg("请填写汇款银行！");
			}
			if($_POST['bank_number']==""){
				$this->ACT_layer_msg("请填写汇入账号！");
			}
			if($_POST['bank_price']==""){
				$this->ACT_layer_msg("请填写汇款金额！");
			}
			if($_POST['bank_time']==""){
				$this->ACT_layer_msg("请填写汇款时间！");
			}
			 
			if(is_uploaded_file($_FILES['file']['tmp_name'])){
				$upload=$UploadM->Upload_pic("../data/upload/order/",false);
				$pictures=$upload->picture($_FILES['file']);
				$picmsg = $UploadM->picmsg($pictures,$_SERVER['HTTP_REFERER']);
				if($picmsg['status'] == $pictures){
					$this->ACT_layer_msg($picmsg['msg'],8);
				}
				$pictures = str_replace("../data/upload/order","./data/upload/order",$pictures);				
			}else{
				$pictures=$order['order_pic'];
			}
	 
			$orderbank=$_POST['bank_name'].'@%'.$_POST['bank_number'].'@%'.$_POST['bank_price'];
			if($_POST['bank_time']){
				$banktime=strtotime($_POST['bank_time']);
			}else{
				$banktime="";
			}
			$company_order="`order_type`='bank',`order_state`='3',`order_remark`='".$_POST['order_remark']."',`order_pic`='".$pictures."',`order_bank`='".$orderbank."',`bank_time`='".$banktime."'";
			$this->obj->DB_update_all("company_order",$company_order,"`order_id`='".$order['order_id']."'");
			$this->ACT_layer_msg("操作成功，请等待管理员审核！",9,"index.php?c=payment&id=".$_POST['oid']);
		}else{
			$this->ACT_layer_msg("非法操作！",8,$_SERVER['HTTP_REFERER']);
		}
	}



	function useCouponBuy_action(){

		if($_POST){
			$row=$this->obj->DB_select_once("company_order","`id`='".$_POST['id']."'");

			if($row['order_state']=='1'){
				
				$coupon = $this->obj->DB_select_once("coupon_list","`id`='".$_POST['cid']."' and `uid`='".$this->uid."' and `validity`>'".time()."'  and `status`='1'");
				
				if($coupon){

					$nid=$this->MODEL('coupon')->upuser_statis($row);
					
					if($nid){
						$this->obj->DB_update_all("company_order","`order_price`='0.00',`coupon`='".$_POST['cid']."',`order_remark`='使用优惠券购买！'","`id`='".$_POST['id']."'");
						$this->obj->DB_update_all("coupon_list","`status`='2',`xf_time`='".time()."'","`id`='".$_POST['cid']."'");
						$this->obj->DB_update_all("user_log","`status`='1'","`id`='".$_POST['logid']."'");
						echo json_encode(array('error'=>0,'msg'=>'购买成功！'));
					}else{
						$this->obj->DB_update_all("user_log","`status`='2'","`id`='".$_POST['logid']."'");
						echo json_encode(array('error'=>1,'msg'=>"购买失败！"));
					}

				}else{
					echo json_encode(array('error'=>1,'msg'=>'优惠券使用失败，请重试！'));
				}
			} 
		}else{
			echo json_encode(array('error'=>1,'msg'=>'参数错误，请重试！'));
		}
	}
}
?>