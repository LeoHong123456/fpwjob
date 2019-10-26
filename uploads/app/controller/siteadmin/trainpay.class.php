<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class trainpay_controller extends siteadmin_controller
{
	
	function set_search(){
		$lo_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"time","name"=>'报名时间',"value"=>$lo_time);
		$search_list[]=array("param"=>"isprice","name"=>'收费方式',"value"=>array('1'=>'在线收费','2'=>'到场收费'));
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		
		$this->set_search();
		$where="1";
		if($_GET['news_search']){
			if (trim($_GET['keyword'])!=""){
				if ($_GET['typeca']=='2'){
				    $pxinfo=$this->obj->DB_select_all("px_subject","`name` like '%".trim($_GET['keyword'])."%'","`id`");
					if (is_array($pxinfo))
					{
						foreach ($pxinfo as $val)
						{
							$pxids[]=$val['id'];
						}
						$pxsid=@implode(",",$pxids);
					}
				    $where .=" and `sid` in (".$pxsid.")";
			     }elseif($_GET['typeca']=='1'){
				     $where .=" and `name` like '%".trim($_GET['keyword'])."%'";
			     }
			     $urlarr['typeca']=$_GET['typeca'];
			     $urlarr['keyword']=$_GET['keyword'];
			}
			 $urlarr['news_search']=$_GET['news_search'];
		}
		if($_GET['time']){
			if($_GET['time']=='1'){
				$where.=" and `ctime` >='".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where .=" and `ctime`>'".strtotime('-'.intval($_GET['time']).' day')."'";
			}
			$urlarr['time']=$_GET['time'];
		}
		if($_GET['isprice']){
			$px=$this->obj->DB_select_all("px_subject","`isprice` ='".$_GET['isprice']."'","`id`");
			if (is_array($px)){
				foreach ($px as $val){
					$pxids[]=$val['id'];
				}
				$pxsid=@implode(",",$pxids);
			}
			$where .=" and `sid` in (".$pxsid.")";
			$urlarr['isprice']=$_GET['isprice'];
		}
		if($_GET['order'])
		{
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by id desc";
		}
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		$rows=$this->get_page("px_baoming",$where,$pageurl,$this->config['sy_listnum']);
		include (APP_PATH."/config/db.data.php");
		if($rows&&is_array($rows)){
			foreach($rows as $val){
				$sid[]=$val['sid'];
				$s_uid[]=$val['s_uid'];
				$ids[]=$val['id'];
			}
			$subject=$this->obj->DB_select_all("px_subject","`id` in(".pylode(',',$sid).")","`id`,`name`,`price`,`isprice`");
			$train=$this->obj->DB_select_all("px_train","`uid` in(".pylode(',',$s_uid).")","`uid`,`name`");
			$order=$this->obj->DB_select_all("company_order","`sid` in(".pylode(',',$ids).") and `type`=6","`id`,`sid`,`order_state`,`order_id`,`order_price`");
			foreach($rows as $key=>$val){
				foreach($subject as $v){
					if($val['sid']==$v['id']){
						$rows[$key]['subname']=$v['name'];
						$rows[$key]['price']=number_format($v['price'],2);
						$rows[$key]['isprice']=$v['isprice'];
					}
				}
				foreach($train as $v){
					if($val['s_uid']==$v['uid']){
						$rows[$key]['trainname']=$v['name'];
					}
				}
				foreach($order as $v){
					if($val['id']==$v['sid']){
						
						$rows[$key]['order_state']=$v['order_state'];
						
					}
				}
			}
		}
		$_GET['c']='';
        $this->yunset("get_type", $_GET);
		$this->yunset("rows",$rows);
		$this->siteadmin_tpl(array('admin_trainpay'));
	}
	function edit_action(){
		$id=(int)$_GET['id'];
		include (APP_PATH."/config/db.data.php");
		$baoming=$this->obj->DB_select_once("px_baoming","`id`='".$id."'");
		$order=$this->obj->DB_select_once("company_order","`sid`='".$id."' and `type`=6","`id`,`sid`,`order_state`,`order_id`,`order_price`");
		$subject=$this->obj->DB_select_once("px_subject","`id`='".$baoming['sid']."'","`name`,`price`,`isprice`");
		$baoming['subname']=$subject['name'];
		$train=$this->obj->DB_select_once("px_train","`uid`='".$baoming['s_uid']."'","`name`");
		$baoming['trainname']=$train['name'];
		$order['order_state_n']=$arr_data['paystate'][$order['order_state']];
		$this->yunset("order",$order);
		$this->yunset("row",$baoming);
		$this->yunset("subject",$subject);
		$this->siteadmin_tpl(array('admin_trainpay_edit'));
	}
	function setpay_action(){
		$del=(int)$_GET['id'];
		$this->check_token();
		$row=$this->obj->DB_select_once("company_order","`sid`='".$del."'");
		if($row['order_state']=='1'||$row['order_state']=='3'){
			$nid=$this->MODEL('qrorder')->upuser_statis($row);
			isset($nid)?$this->layer_msg("订单记录(ID:".$del.")确认成功！",9):$this->layer_msg("确认失败,请销后再试！",8);
		}else{
			$this->layer_msg("订单已确认，请勿重复操作！",8);
		}
	}
	
	function del_action(){
		$this->check_token();
	    if($_GET['del']||$_GET['id']){
			if($_GET['del']){
				$del=pylode(',',$_GET['del']);
				$layer_type=1;
			}elseif($_GET['id']){
				$del=(int)$_GET['id'];
				$layer_type=0;
			}
			$this->obj->DB_delete_all("company_order","`sid` in(".pylode(',',$del).") and `type`=6","");
			$del=$this->obj->DB_delete_all("px_baoming","`id` in(".pylode(',',$del).")","");
			$del?$this->layer_msg('订单记录(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
	    }else{
			$this->layer_msg('请选择要删除的内容！',8,0,$_SERVER['HTTP_REFERER']);
		}
	}
}
?>