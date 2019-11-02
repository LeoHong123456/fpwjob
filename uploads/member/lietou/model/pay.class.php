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
class pay_controller extends lietou
{

	function index_action()
	{
		if($_GET['type']!="integral"){
			$rows=$this->obj->DB_select_all("company_rating","`display`='1' and `category`=2 order by sort desc","name,service_price,id");
			$this->yunset("rows",$rows);
		}
		$nopayorder=$this->obj->DB_select_num("company_order","`uid`=".$this->uid." and `order_state`=1");
		$this->yunset('nopayorder',$nopayorder);
        $this->public_action();
		$this->yunset($this->MODEL('cache')->GetCache(array('integralclass')));
		$this->yunset("class","21");
		$this->lietou_tpl('pay');
	}
	function dingdan_action(){
		if($_POST['price'] || $_POST['comvip']|| $_POST['comservice']){
			if($_POST['comvip']){
				$ratinginfo =  $this->obj->DB_select_once("company_rating","`id`='".(int)$_POST['comvip']."'");
				if($ratinginfo['time_start']<time() && $ratinginfo['time_end']>time()){
					$price = $ratinginfo['yh_price'];
				}else{
					$price = $ratinginfo['service_price'];
				}
				if($ratinginfo['category']==1 || $ratinginfo['category']==2){
					$type=1;
				}else{
					$type=5;
				}
			}elseif ($_POST['comservice']){
				$this->get_com();
 				$id=(int)$_POST['comservice'];
				$detailinfo = $this->obj->DB_select_once("lt_service_detail","`id`='".$id."'");
				$statis=$this->obj->DB_select_once("lt_statis","`uid`='".$this->uid."'");
				
				$rating=$statis['rating'];
				$discount=$this->obj->DB_select_once("company_rating"," `id`='".$rating."' ");
				
				$dis=$discount['service_discount'];
				if ($dis !=0 && $dis !=100){
					$price = $detailinfo['service_price'] * $dis *0.01;
				}else {
					$price = $detailinfo['service_price'];
				}
					
				
				$type=5;
			}elseif($_POST['price_int']){
				$price_int=(int)$_POST['price_int'];
				$integral_proportion = $this->config['integral_proportion'];
				if($this->config['integral_min_recharge']&&$price_int<$this->config['integral_min_recharge']){
					$price_int=$this->config['integral_min_recharge'];
				}
				$integralid=intval($_POST['integralid']);
				$CacheMclass=$this->MODEL('cache')->GetCache(array('integralclass'));
				$discount=$CacheMclass['integralclass_discount'][$integralid]/100;
				if($integralid&&$discount>0){
					//判断充值积分与对应的折扣是否合理
					if($price_int <= $CacheMclass['integralclass_name'][$integralid])
					{
						$price_int	=	$CacheMclass['integralclass_name'][$integralid];
					
					}

					$price =  $price_int/$integral_proportion*$discount;
				}else{
					$price = $price_int/$integral_proportion;
				}
				$price=floor($price*100)/100;
				$type=2;
			}else{
				$this->ACT_layer_msg("参数不正确，请正确填写！",8,$_SERVER['HTTP_REFERER']);
			}
			$dingdan=mktime().rand(10000,99999);
			$data['order_id']=$dingdan;
			$data['order_price']=$price;
			$data['order_time']=mktime();
			$data['order_state']="1";
			$data['order_remark']=$_POST['remark'];
			$data['uid']=$this->uid;
			$data['did']=$this->userdid;
			$data['rating']=(int)$_POST['comvip']?$_POST['comvip']:$_POST['comservice'];
			$data['integral']=$price_int;
			$data['type']=$type;

			if((int)$price==0 && $_POST['comvip']){
 
				$ratingM = $this->MODEL('rating');
 				$value=$ratingM->ltrating_info($_POST['comvip']);
				 
				$status=$this->obj->DB_update_all('lt_statis',$value,"`uid`= '".$this->uid."' ");
								
				if($status){
					$this->ACT_layer_msg("会员服务购买成功！",9,$this->config['sy_weburl']."/member/index.php?c=paylogtc");
				}else{
					$this->ACT_layer_msg("购买失败，请稍后重试！",8,$_SERVER['HTTP_REFERER']);
				}	
				
			}else{
				$id=$this->obj->insert_into("company_order",$data);
				if($id){
					if($_POST['comvip']){
						$this->obj->member_log("购买会员,订单ID".$dingdan,88);
					}elseif($_POST['comservice']){
						$this->obj->member_log("购买增值包,订单ID".$dingdan,88);
					}else if($_POST['price_int']){
						$this->obj->member_log("充值积分,订单ID".$dingdan,88);
					}
					$this->ACT_layer_msg("下单成功，请付款！",9,$this->config['sy_weburl']."/member/index.php?c=payment&id=".$id);
				}else{
					$this->ACT_layer_msg("提交失败，请重新提交订单！",8,$_SERVER['HTTP_REFERER']);
				}
			}
		}else{
			$this->ACT_layer_msg("参数不正确，请正确填写！",8,$_SERVER['HTTP_REFERER']);
		}
	}

	function dkzf_action(){

		if($_POST){
   			$M=$this->MODEL('jfdk');
			if($_POST['id']){
				$return = $M->buyVip($_POST);				
			}
			if($return['status']==1){
				echo json_encode(array('error'=>0,'msg'=>$return['msg']));
			}else{
				echo json_encode(array('error'=>1,'msg'=>$return['error'],'url'=>$return['url']));
			}
		}else{
			echo json_encode(array('error'=>1,'msg'=>'参数错误，请重试！'));
		}
	}
}
?>