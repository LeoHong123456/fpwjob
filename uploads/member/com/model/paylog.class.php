<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class paylog_controller extends company{
	function index_action(){
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		$this->public_action();
		$statis = $this->company_satic();
		$urlarr=array("c"=>"com","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		if($statis['vip_etime']>time()){
			$statis['vip_time'] = date("Y年m月d日",$statis['vip_etime']);
		}else{
			$statis['vip_time'] = "已过期";
		} 
		$statis[integral]=number_format($statis[integral]);
		$this->yunset("statis",$statis);
		$allprice=$this->obj->DB_select_once("company_pay","`com_id`='".$this->uid."' and `type`='1' and `order_price`<0","sum(order_price) as allprice"); 
		if($allprice['allprice']==''){$allprice['allprice']='0';}
		$this->yunset("integral",number_format(str_replace("-","", $allprice['allprice'])));
		if($_GET['consume']=="ok"){
			$urlarr=array("c"=>"paylog","consume"=>"ok","page"=>"{{page}}");
			$pageurl=Url('member',$urlarr);
			$where="`com_id`='".$this->uid."'";

			$where.="  order by pay_time desc";
			$rows = $this->get_page("company_pay",$where,$pageurl,"10");
			if(is_array($rows)){
				foreach($rows as $k=>$v){
					$rows[$k]['pay_time']=date("Y-m-d H:i:s",$v['pay_time']);
					$rows[$k]['order_price']=str_replace(".00","",$rows[$k]['order_price']);
				}
			} 
			$this->yunset("rows",$rows);
			$this->yunset("ordertype","ok");
		}else{
			$urlarr=array("c"=>"paylog","page"=>"{{page}}");
			$pageurl=Url('member',$urlarr);
			$where="`uid`='".$this->uid."'  order by order_time desc";
			$rows=$this->get_page("company_order",$where,$pageurl,"10");
			foreach($rows as $v){
				$ord[]=$v['order_id'];
			}	
			$ords=@implode(',',$ord);
			$order=$this->obj->DB_select_all("invoice_record","`order_id` in(".$ords.") and `uid`='".$this->uid."'","`status`,`order_id`");
			if($rows&&is_array($rows)&&$this->config['sy_com_invoice']=='1'){
				$last_days=strtotime("-7 day");
				foreach($rows as $key=>$val){
					if($val['order_time']>=$last_days && $val['order_remark']!="使用充值卡"){
						$rows[$key]['invoice']='1';
					
					}
					foreach($order as $k=>$v){
						if($val['order_id']==$v['order_id']){
							$rows[$key]['status']=$v['status'];
						}
					}
				}
				$this->yunset("rows",$rows);
			}
		} 
		if($_POST['submit']){
			if(trim($_POST['order_remark'])==""){
				$this->ACT_layer_msg("备注不能为空！",8,$_SERVER['HTTP_REFERER']);
			}
			$nid=$this->obj->DB_update_all("company_order","`order_remark`='".trim($_POST['order_remark'])."'","`id`='".(int)$_POST['id']."' and `uid`='".$this->uid."'");
			if($nid)
			{
				$this->obj->member_log("修改订单备注",88,2);
				$this->ACT_layer_msg("修改成功！",9,$_SERVER['HTTP_REFERER']);
			}else{
				$this->ACT_layer_msg("修改失败！",8,$_SERVER['HTTP_REFERER']);
			}
		}

		$this->yunset("js_def",4);
		$this->com_tpl('paylog');
	}
	
	function del_action(){
		if($this->usertype!='2' || $this->uid==''){
			echo '0';die;
		}else{
			$oid=$this->obj->DB_select_once("company_order","`uid`='".$this->uid."' and `id`='".(int)$_GET['id']."' and `order_state`='1'");
			if(empty($oid)){
				echo '0';die;
			}else{
				$this->obj->DB_delete_all("invoice_record","`oid`='".$oid['id']."' and `uid`='".$this->uid."'");
				$this->obj->DB_update_all("user_log","`status`=4","`orderid`='".$oid['id']."' and `uid`='".$this->uid."'");
				$this->obj->DB_delete_all("company_order","`id`='".$oid['id']."' and `uid`='".$this->uid."'");
				echo '1';die;
			}
		}
	}
	
	function card_action(){
		$IntegralM=$this->MODEL('integral');
		$info=$this->obj->DB_select_once("prepaid_card","`card`='".$_POST['card']."' and `password`='".$_POST['password']."'");
		if($_POST['card']==""){
			$this->ACT_layer_msg("请输入卡号！",8);
		}elseif($_POST['password']==""){
			$this->ACT_layer_msg("请输入密码！",8);
		}elseif(empty($info)){
			$this->ACT_layer_msg("卡号或密码错误！",8);
		}elseif($info['uid']>0){
			$this->ACT_layer_msg("该充值卡已使用！",8);
		}elseif($info['type']=="2"){
			$this->ACT_layer_msg("该充值卡不可用！",8);
		}elseif($info['stime']>time()){
			$this->ACT_layer_msg("该充值卡还未到使用时间！",8);
		}elseif($info['etime']<time()){
			$this->ACT_layer_msg("该充值卡已过期！",8);
		}else{
			$dingdan=mktime().rand(10000,99999);
			$integral=$info['quota']*$this->config['integral_proportion'];
			$data['order_id']=$dingdan;
			$data['order_price']=$info['quota'];
			$data['order_time']=mktime();
			$data['order_state']="2";
			$data['order_remark']="使用充值卡";
			$data['uid']=$this->uid;
			$data['did']=$this->userdid;
			$data['integral']=$integral;
			$data['type']='2';
			$nid=$this->obj->insert_into("company_order",$data);
			if($nid){
				$this->obj->DB_update_all("prepaid_card","`uid`='".$this->uid."',`username`='".$this->username."',`utime`='".time()."'","`id`='".$info['id']."'");
				$IntegralM->company_invtal($this->uid,$integral,true,"充值卡充值",true,$pay_state=2,"integral");
				$this->ACT_layer_msg("充值卡使用成功！",9,$_SERVER['HTTP_REFERER']);
			}else{
				$this->ACT_layer_msg("充值卡使用失败！",8,$_SERVER['HTTP_REFERER']);
			}
			
		}
	}
}
?>