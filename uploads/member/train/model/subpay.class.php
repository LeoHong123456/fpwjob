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
class subpay_controller extends train{
	function index_action(){
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
  		$this->public_action(); 

		$statis = $this->train_satic();
 		$statis['freeze'] = sprintf("%.2f", $statis['freeze']);
		$this->yunset("statis",$statis);
		
		$urlarr=array("c"=>"subpay","consume"=>"ok","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$where="`com_id`='".$this->uid."' and `type`='2' and `pay_remark` LIKE '%课程报名费%'";

		$where.=" order by pay_time desc";
		$rows = $this->get_page("company_pay",$where,$pageurl,"10");
		if(is_array($rows)){
			foreach($rows as $k=>$v){
				$rows[$k]['order_price']=floatval($v['order_price']);
				$rows[$k]['pay_time']=date("Y-m-d H:i:s",$v['pay_time']);
			}
		}
		$this->yunset("rows",$rows);

		$this->train_tpl('subpay');
	}

	function withdraw_action(){
		
		if($_POST){

			$M = $this->MODEL('pack');
			$return = $M->withDraw($this->uid,$this->usertype,$_POST['price'],$_POST['real_name']);
				
			if($return==''){
				$this->ACT_layer_msg("提现成功，请关注微信账户提醒！",9,$_SERVER['HTTP_REFERER']);
			}else{
				$this->ACT_layer_msg($return,8,$_SERVER['HTTP_REFERER']);
			}

		}else{
			$statis = $this->train_satic();
			$this->yunset("statis",$statis);
 			$this->train_tpl('withdraw');
		}
		
	}

	function withdrawlist_action(){
		
		$urlarr["c"]="subpay";
		$urlarr["act"]="withdrawlist";
		$urlarr["page"]="{{page}}";
		$pageurl=Url('member',$urlarr);
		$where = "`uid`='".$this->uid."'";
		$rows=$this->get_page("member_withdraw",$where." order by id desc",$pageurl,"10");

		if(is_array($rows)){
			include (APP_PATH."/config/db.data.php");
			foreach($rows as $k=>$v){
				$rows[$k]['order_state_n']=$arr_data['withdrawstate'][$v['order_state']];
			}
		}
		
		$this->yunset("rows",$rows);

		$statis = $this->train_satic();
		$this->yunset("statis",$statis);
 		$this->train_tpl('withdrawlist');
	}
	function change_action(){
		$userM=$this->MODEL('userinfo');
		$statis=$userM->GetUserstatisOne(array('uid'=>$this->uid),array('usertype'=>4));
		$this->yunset("statis",$statis);
	 
		$changeNum = $this->obj->DB_select_num("company_pay","`com_id`='".$this->uid."' and `pay_remark` LIKE '%转换积分%' and `pay_time` >= '".strtotime(date("Y-m-d 00:00:00"))."'");
		$this->yunset("changeNum",$changeNum);

		$this->train_tpl('change');
	}
	function savechange_action(){
		$integral=$this->MODEL('integral');
		$changeprice=$_POST['changeprice'];
		$changeintegral=$_POST['changeintegral'];

		$changeNum = $this->obj->DB_select_num("company_pay","`com_id`='".$this->uid."' and `pay_remark` LIKE '%转换积分%' and `pay_time` >= '".strtotime(date("Y-m-d 00:00:00"))."'");
		$nid=$this->obj->DB_update_all("px_train_statis","`packpay`=`packpay`-'".$changeprice."'","`uid`='".$this->uid."'");
		if($nid){
			$integral->company_invtal($this->uid,$changeintegral,true,"金额转换积分",true,2,'integral',2);
			echo 1;die;
		}else{
			echo 2;die;
		}
	}
	function changelist_action(){
		$urlarr=array("c"=>"subpay","act"=>"changelist","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$where="`com_id`='".$this->uid."'";
		$where.=" and `pay_remark` LIKE '%转换积分%' order by pay_time desc";
		$rows=$this->get_page("company_pay",$where,$pageurl,"10");
		$this->yunset("rows",$rows);
		$userM=$this->MODEL('userinfo');
		$statis=$userM->GetUserstatisOne(array('uid'=>$this->uid),array('usertype'=>4));
		$this->yunset("statis",$statis);
		$this->train_tpl('changelist');
	}
}
?>