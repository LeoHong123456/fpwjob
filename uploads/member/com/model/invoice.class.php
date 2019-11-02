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
class invoice_controller extends company
{
	function index_action(){
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		$this->public_action();
		$this->company_satic();
		$urlarr=array("c"=>"invoice","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$where="`uid`='".$this->uid."'  order by addtime desc";
		$rows=$this->get_page("invoice_record",$where,$pageurl,"10");
		if(is_array($rows)){
			foreach($rows as $k=>$v){
				$orderId[] = $v['order_id'];
			}
			$orderId = pylode(',',$orderId);
			$order = $this->obj->DB_select_all("company_order","`order_id` in (".$orderId.")","`order_id`,`order_price`");
			
			foreach($rows as $k=>$v){
				foreach($order as $val){
					if((int)$v['order_id']==(int)$val['order_id'] && $v['price']==""){
						$rows[$k]['price']=$val['order_price'];
					}
				}
			}
		}		
		$this->yunset("rows",$rows);

		$this->yunset("js_def",4);
		$this->com_tpl('invoice');
	}
	
	function apply_action(){
		
 		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		$this->public_action();
		$urlarr=array("c"=>"invoice","act"=>"apply","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$where="`uid`='".$this->uid."' and `order_state`='2' and `is_invoice`='0'";
		if($this->config['sy_com_invoice_money']){
			$where.=" and `order_price`>".$this->config['sy_com_invoice_money']." order by order_time desc";
		}else{
			$where.=" and `order_price`>0 order by order_time desc";
		}
		$rows=$this->get_page("company_order",$where,$pageurl,"10");
		if($rows && is_array($rows) && $this->config['sy_com_invoice']=='1'){
			$last_days=strtotime("-7 day");
			foreach($rows as $key=>$val){
				if($val['order_time'] >= $last_days && $val['order_remark']!="使用充值卡"){
					$rows[$key]['invoice']='1';
				}
			}
			$this->yunset("rows",$rows);
		}
		
		$invoice = $this->obj->DB_select_once("invoice_info","`uid`='".$this->uid."'");
		$this->yunset("invoice",$invoice);
		
		if($_POST['submit']){
			
			if(!$invoice){
				$this->ACT_layer_msg("请先完善发票信息！",8,$_SERVER['HTTP_REFERER']);
			}
			if($_POST['order_price']<$this->config['sy_com_invoice_money']){
				$this->ACT_layer_msg('超过'.$this->config['sy_com_invoice_money'].'元才能申请发票',8,$_SERVER['HTTP_REFERER']);
			}
			$orderIds=@explode(',',$_POST['order_id']);
			$orderIds = pylode(',',$orderIds);
			$value="`order_id`='".$orderIds."',";
			
			$value.="`price`='".$_POST['order_price']."',";
			$value.="`uid`='".$this->uid."',";
			$value.="`did`='".$this->userdid."',";
			
			$value.="`title`='".trim($invoice['invoicetitle'])."',";
			$value.="`type`='".trim($invoice['invoicetype'])."',";
			$value.="`invoice_id`='".trim($invoice['registerno'])."',";
			
			$value.="`bankno`='".trim($invoice['bankno'])."',";
			$value.="`bank`='".trim($invoice['bank'])."',";
			$value.="`opaddress`='".trim($invoice['opaddress'])."',";
			$value.="`opphone`='".trim($invoice['opphone'])."',";
			
			$value.="`style`='".trim($invoice['invoicestyle'])."',";
			
			$value.="`link_man`='".trim($invoice['linkman'])."',";
			$value.="`link_moblie`='".trim($invoice['phone'])."',";
			$value.="`address`='".trim($invoice['street'])."',";
			$value.="`email`='".trim($invoice['email'])."',";
			$value.="`status`='0',";
			$value.="`addtime`='".time()."'";
			
			$nid=$this->obj->DB_insert_once("invoice_record",$value);
			
			if($nid){
				$this->obj->DB_update_all("company_order","`is_invoice`='1'","`order_id` in (".$orderIds.") and `uid`='".$this->uid."'");
			}
			
			$nid?$this->ACT_layer_msg("申请成功！",9,$_SERVER['HTTP_REFERER']):$this->ACT_layer_msg("申请失败！",8,$_SERVER['HTTP_REFERER']);
		}
		
		
		$this->yunset("js_def",4);
		$this->com_tpl('invoice_sq');
	}
	
	function info_action(){
		$this->public_action();
		if($_POST['submit']){
			$id=intval($_POST['id']);
			
			$_POST=$this->post_trim($_POST);
 			
			if($_POST['invoicetitle']==""){
			    $this->ACT_layer_msg("发票抬头不能为空！",8);
			}
			if($_POST['invoicetype']==''){
			    $this->ACT_layer_msg("请选择发票类型！",8);
			}
			
			if($_POST['registerno']==""){
				$this->ACT_layer_msg("请填写企业税号！",8);
			} 
			
			if($_POST['invoicetype'] == 2){
				
				if($_POST['bank']==""){
				    $this->ACT_layer_msg("请填写开户银行名称！",8);
				}
				if($_POST['bankno']==""){
				    $this->ACT_layer_msg("请填写开户账号！",8);
				}
				if($_POST['opaddress']==""){
				    $this->ACT_layer_msg("注册场所在地不能为空！",8);
				}
				if($_POST['opphone']==""){
			 	   $this->ACT_layer_msg("注册固定电话不能为空！",8);
				}
			}
			
			if($_POST['invoicestyle']==''){
			    $this->ACT_layer_msg("请选择发票开票性质！",8);
			}
			
			if($_POST['linkman']==""){
			    $this->ACT_layer_msg("联系人不能为空！",8);
			}
			if($_POST['invoicestyle']=='1'){
				if($_POST['street']==""){
				    $this->ACT_layer_msg("邮寄地址不能为空！",8);
				}
				if($_POST['phone']==""){
				    $this->ACT_layer_msg("请填写联系人手机号码！",8);
				    
				}elseif(!CheckMoblie($_POST['phone'])){
			      	$this->ACT_layer_msg("手机号码格式错误！",8);
			      	
			   	}
			}else if($_POST['invoicestyle']=='2'){
				if($_POST['email']==""){
				    $this->ACT_layer_msg("请填写电子邮箱！",8);
				    
				}
			}
		 	
		   	
		   	if(!$id){
		   		
		   		$nid=$this->obj->insert_into("invoice_info",$_POST);
		   		$name="添加发票信息";
				$type='1';
		   	}else{
		   		$where['id']=$id;
				$where['uid']=$this->uid;
		   		$nid=$this->obj->update_once("invoice_info",$_POST,$where);
		   		$name="更新发票信息";
				$type='2';
		   	}
		   	
		   	if($nid){
				if($id==''){
					$this->ACT_layer_msg($name."成功！",9,$_SERVER['HTTP_REFERER']);
				}else{
					$this->ACT_layer_msg($name."成功！",9,$_SERVER['HTTP_REFERER']);
				}
			}else{
				$this->ACT_layer_msg($name."失败！",8,$_SERVER['HTTP_REFERER']);
			}
		}
		
		$row = $this->obj->DB_select_once("invoice_info","`uid`='".$this->uid."'");
		$this->yunset("row",$row);
		$this->yunset("js_def",4);
		$this->com_tpl('invoice_info');
	}
}
?>