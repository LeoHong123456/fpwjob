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
class payment_controller extends lietou{
	function index_action(){
		
		$this->yunset($this->MODEL('cache')->GetCache(array('city')));
		$rows=$this->obj->DB_select_all("bank");
		$this->yunset("rows",$rows);
		$order=$this->obj->DB_select_once("company_order","`uid`='".$this->uid."' and `id`='".(int)$_GET['id']."' and `order_state`='1'");
		if(is_array($order)){
			$orderbank=@explode("@%",$order['order_bank']);
			$order['bank_name']=$orderbank[0];
			$order['bank_number']=$orderbank[1];			
		}

		if(empty($order)){
			header('Location: index.php?c=paylog');
			exit();

		}else{
			$order['price_format']=number_format($order['order_price'],2);
			$coupons=$this->obj->DB_select_all("coupon_list","`uid`='".$this->uid."' and `validity`>'".time()."' and `coupon_scope`<='".$order['order_price']."' and `status`='1'");
			if($order['order_time']>strtotime("-7 day")){
				$order['invoice']='1';
			}
			$ltinfo=$this->obj->DB_select_once("lt_info","`uid`='".$this->uid."'","`moblie`,`realname`,`provinceid`,`cityid`");
			if($ltinfo['moblie']==''||$ltinfo['realname']==''||$ltinfo['provinceid']==''){
				$ltinfo['link_null']='1';
			}
			$this->yunset("ltinfo",$ltinfo);
			$this->yunset("coupons",$coupons);
			$this->yunset("order",$order);
			$this->public_action();
			$this->lietou_tpl('payment');
		}
	}
	function dkzf_action(){
				
		if($_POST){
  			$dkjf = (int)$_POST['dkjf'];
 			
			$order = $this->obj->DB_select_once("company_order","`id`='".(int)$_POST['id']."' and `uid`='".$this->uid."'");
			
     		$statis = $this->obj->DB_select_once("lt_statis","`uid`='".$this->uid."'");
   			
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
				
				$coupon=$this->obj->DB_select_once("coupon_list","`id`='".$_POST['coupon']."' and `uid`='".$this->uid."' and `validity`>'".time()."' and `coupon_scope`<='".$order['order_price']."' and `status`='1'");
				if($coupon['id']){
					$order_price=$order['order_price']-$coupon['coupon_amount'];
					$this->obj->DB_update_all("company_order","`order_price`='".$order_price."',`coupon`='".$_POST['coupon']."'","`id`='".(int)$_POST['orderId']."' and `uid`='".$this->uid."'");
					$this->obj->DB_update_all("coupon_list","`status`='2',`xf_time`='".time()."'","`id`='".$coupon['id']."'");
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
			if($_POST['coupon'] && $order['coupon']==""){
				$coupon=$this->obj->DB_select_once("coupon_list","`id`='".$_POST['coupon']."' and `uid`='".$this->uid."' and `validity`>'".time()."' and `coupon_scope`<='".$order['order_price']."' and `status`='1'");
				if($coupon['id']){
					$order_price=$order['order_price']-$coupon['coupon_amount'];
					$this->obj->DB_update_all("company_order","`order_price`='".$order_price."',`coupon`='".$_POST['coupon']."'","`id`='".(int)$_POST['oid']."' and `uid`='".$this->uid."'");
					$this->obj->DB_update_all("coupon_list","`status`='2',`xf_time`='".time()."'","`id`='".$coupon['id']."'");
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
				$picmsg=$UploadM->picmsg($pictures,$_SERVER['HTTP_REFERER']);
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
			$this->ACT_layer_msg("操作成功，请等待管理员审核！",9,"index.php?c=paylog");
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
						echo json_encode(array('error'=>0,'msg'=>'购买成功！'));
					}else{
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