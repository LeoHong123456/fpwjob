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
class pay_controller extends user{
	function index_action(){
		$nopayorder=$this->obj->DB_select_num("company_order","`uid`=".$this->uid." and `order_state`=1");
		$this->yunset('nopayorder',$nopayorder);
		$this->public_action();
		$this->yunset($this->MODEL('cache')->GetCache(array('integralclass')));
		$this->user_tpl('pay');
	}
	function dingdan_action(){
		$integral=intval($_POST['integral']);
		$pay=intval($_POST['pay']);
		$integralid=intval($_POST['integralid']);
		$CacheMclass=$this->MODEL('cache')->GetCache(array('integralclass'));
		if($_POST['submit']&& ($integral || $pay)){
			$this->cookie->SetCookie("delay", "", time() - 60);
			if($integral){
				if($this->config['integral_min_recharge']&&$integral<$this->config['integral_min_recharge']){
					$integral=$this->config['integral_min_recharge'];
				}
				$discount=$CacheMclass['integralclass_discount'][$integralid]/100;
				if($integralid&&$discount>0){
					//判断充值积分与对应的折扣是否合理
					if($integral <= $CacheMclass['integralclass_name'][$integralid])
					{
						$integral	=	$CacheMclass['integralclass_name'][$integralid];
					
					}

					$price = $integral/$this->config['integral_proportion']*$discount;
				}else{
					$price = $integral/$this->config['integral_proportion'];
				}
				$price=floor($price*100)/100;
				$data['type']=2;
			}elseif ($pay){
				if($this->config['money_min_recharge']&&$pay<$this->config['money_min_recharge']){
					$pay=$this->config['money_min_recharge'];
				}
				$price = $pay;
				$data['type']=4;
			}
			$dingdan=mktime().rand(10000,99999);
			$data['order_id']=$dingdan;
			$data['order_price']=$price;
			$data['order_time']=mktime();
			$data['order_state']="1";
			$data['integral']=$integral;
			$data['order_remark']=$_POST['remark'];
			$data['uid']=$this->uid;
			$data['did']=$this->userdid;
			$id=$this->obj->insert_into("company_order",$data);
			if($id){
				$this->obj->member_log("充值积分，订单ID".$dingdan,88);
				$this->obj->DB_update_all("user_log","`status`='3',`orderid`='".$dingdan."'","`id`='".$_POST['logid']."'");
				$this->ACT_layer_msg("下单成功，请付款！",9,"index.php?c=payment&id=".$id);
			}else{
				$this->obj->DB_update_all("user_log","`status`='2'","`id`='".$_POST['logid']."'");
				$this->ACT_layer_msg("提交失败，请重新提交订单！",8,$_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->ACT_layer_msg("参数不正确，请正确填写！",8,$_SERVER['HTTP_REFERER']);
		}
	}
}
?>