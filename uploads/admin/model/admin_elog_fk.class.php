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
class admin_elog_fk_controller extends adminCommon{	

	function index_action(){
		
		$sdate = date('Y-m-d', strtotime('-1 day'));
		$edate = date('Y-m-d', time());

		$this->yunset('sdate', $sdate);
		$this->yunset('edate', $edate);

		$this->yuntpl(array('admin/admin_elog_fk'));
	}	
 

	function get_result($where){

		if($_GET['time']){
		
			$times=@explode('~',$_GET['time']);
	        $where.=" and `timein` >='".strtotime($times[0]."00:00:00")."' and `timein` <='".strtotime($times[1]."23:59:59")."'";
	        $urlarr['time']=$_GET['time'];
			$time_begin = $times[0];
			$time_end = $times[1];
	    }else{
			$sdate = strtotime('-1 days');
			$edate = time();
			$where .=" and `timein`>{$sdate} and `timein` < {$edate}";

			$time_begin = date('Y-m-d', strtotime('-1 day'));
			$time_end = date('Y-m-d', time());
		}

		$this->yunset('time_begin', $time_begin);
		$this->yunset('time_end', $time_end);
		if($_GET['seconds']){
			$seconds = (int)$_GET['seconds'];
			$urlarr['seconds']=$_GET['seconds'];
		}else{
			$seconds = 10;
		}
		$this->yunset('seconds', $seconds);
		$where .=" and `second`>{$seconds} and `second`<300";

		$where .=" order by `uid`,`timein` desc";
  		
		$urlarr["c"]=$_GET['c'];
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		$rows=$this->get_page("user_log",$where,$pageurl,$this->config['sy_listnum']);

		if(is_array($rows)&&$rows){
			foreach($rows as $v){
				$uids[]=$v['uid'];
				if($v['orderid']!=''){
					$orderids[]=$v['orderid'];
				}
			}
 			$member=$this->obj->DB_select_all("member","`uid` in (".@implode(",",$uids).")","`username`,`uid`,`usertype`");
 			$company=$this->obj->DB_select_all("company","`uid` in (".@implode(",",$uids).")","`uid`,`name`,`linkman`,`linktel`,`linkphone`");
 			$resume=$this->obj->DB_select_all("resume","`uid` in (".@implode(",",$uids).")","`uid`,`name`,`sex`,`telphone`");
			$orders=$this->obj->DB_select_all("company_order","`order_id` in (".@implode(",",$orderids).")","`order_id`,`order_type`,`order_state`");
			include (APP_PATH."/config/db.data.php");
			foreach($rows as $k=>$v){
				foreach($member as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['username']=$val['username'];
						$rows[$k]['usertype']=$val['usertype'];
 					}
				}

				foreach($company as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['comname']=$val['name'];
						$rows[$k]['name']=$val['linkman'];
						if($val['linktel']!=""){
							$rows[$k]['mobile']=$val['linktel'];
						}else{
							$rows[$k]['mobile']=$val['linkphone'];
						}
 					}
				}

				foreach($resume as $val){
					if($v['uid']==$val['uid']){
 						$rows[$k]['name']=$val['name'];
 						$rows[$k]['sex_n']=$arr_data['sex'][$val['sex']];
 						$rows[$k]['mobile']=$val['telphone'];
 					}
				}

				
				if($v['second']>60){
					
					$h = floor(($v['second'] % (3600*24)) / 3600);
					$m = floor((($v['second'] % (3600*24)) % 3600) / 60);
					$s = floor((($v['second'] % (3600*24)) % 3600 % 60));

 					if($h!='0'){
						$rows[$k]['seconds']=$h.'时'.$m.'分';
					}else if($m!='0'){
						if($m>5){
							$rows[$k]['seconds']='5分钟以上';
						}else{
							$rows[$k]['seconds']=$m.'分'.$s.'秒';
						}
					} 
				}else{
					$rows[$k]['seconds']=$v['second'].'秒';
				}
				
				foreach($orders as $val){
					if($v['orderid']==$val['order_id']){
						$rows[$k]['order_type_n']=$arr_data['pay'][$val['order_type']];
						$rows[$k]['order_state']=$val['order_state'];
					}
				}
			}
		}

		$this->yunset("rows",$rows);

	}
	 
	
	function basic_action(){
			
		$where = "(`opera`<=11)";

		$this->get_result($where);
		
		$this->yuntpl(array('admin/admin_elog_notice'));
	
	}
		
	
	function integral_action(){
		
		$where = "(`opera`=41 or `opera`=45)";

		$this->get_result($where);
		
		$this->yuntpl(array('admin/admin_elog_notice'));
	
	}

	
	function vip_action(){
		
		$where = "(`opera`>41 and `opera`<49 and `opera`<>45)";

		$this->get_result($where);
		
		$this->yuntpl(array('admin/admin_elog_notice'));
	
	}

	
	function resume_action(){
		
		$where = "(`opera`=21 or `opera` = 22)";

		$this->get_result($where);
		
		$this->yuntpl(array('admin/admin_elog_notice'));
	
	}

	
	function job_action(){
		
		$where = "(`opera`>=31 and `opera` <= 38)";

		$this->get_result($where);
		
		$this->yuntpl(array('admin/admin_elog_notice'));
	
	}

	
	function binding_action(){
		
		$where = "(`opera`=12 or `opera`= 13)";

		$this->get_result($where);
		
		$this->yuntpl(array('admin/admin_elog_notice'));
	
	}

	function note_action(){
		$note = trim($_POST['note']);
		$id=(int)$_POST['id'];
		if($id && $note){
			$nid=$this->obj->DB_update_all("user_log","`note`='".$note."'","`id`='".$id."'");
		}
 		$nid?$this->ACT_layer_msg("关怀(ID:".$id.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg( "设置失败！",8,$_SERVER['HTTP_REFERER']);
	}

	function getFkNum_action(){
		
		$MsgNum=$this->MODEL('msgNum');
		
		echo $MsgNum->getFkNum();

	}

}

?>