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
class buysave_controller extends company{
	function index_action(){ 
		$statis=$this->company_satic(); 
		if($_POST['type']=='ad'){
			$row=$this->obj->DB_select_once("ad_class","`id`='".(int)$_POST['aid']."' and `type`='1'");  
			if($row['id']){
				$integral=$row['integral_buy']*intval($_POST['buy_time']);
			}else{
				$this->ACT_layer_msg("非法操作！",8,"index.php?c=ad"); 
			}
		}
		if($_POST['btype']==1){
			if($statis['integral']<$integral){
				$this->ACT_layer_msg("你的".$this->config['integral_pricename']."不足，请先充值！",8,"index.php?c=pay");
			}
		}
		if($_POST['type']=="ad"){
			$UploadM=$this->MODEL('upload');
			$IntegralM=$this->MODEL('integral');
			$pay_integral = $integral;
			$dingdan=mktime().rand(10000,99999);
			if($_POST['btype']==1){
				$nid=$IntegralM->company_invtal($this->uid,$pay_integral,false,"购买广告位",true,2,'integral',4);
			}elseif($_POST['btype']==2){
				$datas['uid']=$this->uid;
				$datas['did']=$this->userdid;
				$datas['order_id']=$dingdan;
				$datas['order_price']=$pay_integral;
				$datas['order_time']=time();
				$datas['order_state']=1;
				$datas['order_remark']="购买了广告位 ".$_POST['adname'];
				$datas['type']=26;
				$nid=$this->obj->insert_into("company_order",$datas);
			}
			
			if($nid){
				$data['comid']=$this->uid;
				$data['did']=$this->userdid;
				$data['order_id']=$dingdan;
				if(is_uploaded_file($_FILES['file']['tmp_name'])){
				    $upload=$UploadM->Upload_pic("../data/upload/adpic/");
				    $pictures=$upload->picture($_FILES['file']);
				    $picmsg = $UploadM->picmsg($pictures,$_SERVER['HTTP_REFERER']);
				    if($picmsg['status'] == $pictures){
				        $this->ACT_layer_msg($picmsg['msg'],8);
				    }
				    $data['pic_url']=str_replace("../","./",$pictures);;
				}
		 		$data['ad_name']=$_POST['ad_name'];
				$data['pic_src']=$_POST['pic_src'];
				$data['buy_time']=intval($_POST['buy_time']);
				if($_POST['btype']==1){
					$data['integral']=$pay_integral;
				}elseif($_POST['btype']==2){
					$data['price']=$pay_integral;
				}
				$data['buytype']=$_POST['btype'];
				$data['aid']=(int)$_POST['aid'];
				$data['adname']=$_POST['adname'];
				if($_POST['btype']==1){
					$data['order_state']=2;
				}elseif($_POST['btype']==2){
					$data['order_state']=1;
				}
				$data['datetime']=time();
				$oid=$this->obj->insert_into("ad_order",$data);
				if($oid){
					if($_POST['btype']==1){
						$content="购买了广告位 ".$_POST['adname'];
						$this->addstate($content,2);
						$this->obj->member_log($content,88,1);
						$this->ACT_layer_msg("您的订单已提交，请等待管理员审核！",9,"index.php?c=ad_order");
					}elseif($_POST['btype']==2){
						$this->obj->member_log("购买广告位,订单ID".$dingdan,88);
						$this->ACT_layer_msg("下单成功，请付款！",9,$this->config['sy_weburl']."/member/index.php?c=payment&id=".$nid);
					}
					
				}else{
 					$this->ACT_layer_msg("提交失败，请稍后再试！",8,$_SERVER['HTTP_REFERER']);
				}
			}else{
 				$this->ACT_layer_msg("系统出错，请联系管理员！",8,"index.php");
			}
		}
	}
}
?>