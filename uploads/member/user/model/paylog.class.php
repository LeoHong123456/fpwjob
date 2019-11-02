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
class paylog_controller extends user
{
	function index_action(){
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		$this->public_action(); 
		$urlarr=array("c"=>"paylog","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$where="`com_id`='".$this->uid."'";

		$where.="  order by pay_time desc";
		$rows = $this->get_page("company_pay",$where,$pageurl,"10");
		if(is_array($rows)){
			foreach($rows as $k=>$v){
				$rows[$k]['pay_time']=date("Y-m-d H:i:s",$v['pay_time']);
				if($v['type']=='1'){
					$rows[$k]['order_price']=intval($v['order_price']);
				}
			}
		}
 		$this->yunset("rows",$rows);
		$this->yunset("ordertype","ok");  
		$this->user_tpl('paylog');
	} 
	
}
?>