<?php
/*
* $Author ：LEO
*
* 官网: https://www.fpwjob.com
*
* 版权所有 2018-2019 菲聘网，并保留所有权利。
*
*
 */
class admin_prepaid_controller extends adminCommon{
	function set_search(){
		$search_list[]=array("param"=>"time","name"=>'有效期',"value"=>array("1"=>"未过期","2"=>"已过期"));
		$search_list[]=array("param"=>"status","name"=>'使用状态',"value"=>array("1"=>"已使用","2"=>"未使用"));
		$search_list[]=array("param"=>"type","name"=>'状态',"value"=>array("1"=>"可用","2"=>"不可用"));
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$this->set_search();
		$where=1;
		if(trim($_GET['keyword'])){
			if($_GET['ctype']=='2'){
				$where.=" and `username` like '%".trim($_GET['keyword'])."%'";
			}else{
				$where.=" and `card` like '%".trim($_GET['keyword'])."%'";
			}
			$urlarr['keyword']=$_GET['keyword'];
		}
		if($_GET['type']){
			if($_GET['type']=='1'){
				$where.=" and `type`='".$_GET['type']."'";
			}else{
				$where.=" and `type`='".$_GET['type']."'";
			}
			$urlarr['type']=$_GET['type'];
		}
		if($_GET['status']){
			if($_GET['status']==1){
				$where.=" and `uid`>'0'";
			}else{
				$where.=" and `uid` is null";
			}
			$urlarr['status']=$_GET['status'];
		}
		if($_GET['time']){
			if($_GET['time']==1){
				$where.=" and `etime`>'".time()."'";
			}else{
				$where.=" and `etime`<'".time()."' and `uid` is null";
			}
			$urlarr['time']=$_GET['time'];
		}
		if($_GET['order']){
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by `id` desc";
		}
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
        $M=$this->MODEL();
		$PageInfo=$M->get_page("prepaid_card",$where,$pageurl,$this->config['sy_listnum']);
		$this->yunset("where", $where);
        $this->yunset($PageInfo);
		$this->yuntpl(array('admin/admin_prepaid'));
	}
	function upcard_action(){
		if($_POST['submit']){
			$stime=strtotime($_POST['stime']);
			$etime=strtotime($_POST['etime']);
			$nid=$this->obj->DB_update_all("prepaid_card","`stime`='".$stime."',`etime`='".$etime."',`password`='".(int)trim($_POST['password'])."',`quota`='".trim($_POST['quota'])."',`type`='".$_POST['type']."'","`id`='".intval($_POST['id'])."' and `utime` is null");
			$nid?$this->ACT_layer_msg("充值卡(ID:".intval($_POST['id']).")更新成功！",9,"index.php?m=admin_prepaid",2,1):$this->ACT_layer_msg("更新失败！",8,$_SERVER['HTTP_REFERER']);
		}
		if($_GET['id']){
			
            $info=$this->obj->DB_select_once("prepaid_card","`id`='".intval($_GET['id'])."'");
			if($info['id']){
				$this->yunset("info",$info);
				$this->yuntpl(array('admin/admin_prepaid_upcard'));
			}else{
				$this->ACT_msg("index.php?m=admin_prepaid","非法操作");
			}
		}
	}

	function xls_action(){

 		if($_POST['where']){
 			
			$gettype=$_POST['type'];

			$_POST['where']=str_replace(array("[","]","and","\&acute;","\\"),array("(",")","and","'",""),$_POST['where']);
			
			if(in_array("card",$_POST['type']) || in_array("password",$_POST['type']) || in_array("quota",$_POST['type']) || in_array("stime",$_POST['type']) || in_array("etime",$_POST['type'])){
				foreach($_POST['type'] as $v){
					$type[]=$v;
				}
				$_POST['type']=$type;
			}
			
			$select=@implode(",",$_POST['type']);
			if(strstr($select,"card") && strstr($select,"id")==false){
				$select=$select.",id";
			}

 			$list=$this->obj->DB_select_all("prepaid_card","id in (".$_POST['pid'].") and ".$_POST['where'],$select);
			
			if(!empty($list)){
				$this->yunset("list",$list);
 				$this->yunset("type",$gettype);
				$this->MODEL('log')->admin_log("导出充值卡信息");
				header("Content-Type: application/vnd.ms-excel");
				header("Content-Disposition: attachment; filename=prepaid.xls");
				$this->yuntpl(array('admin/admin_prepaid_xls'));
			}
		}
	}

	function add_action(){
		if($_POST['submit']){
			$quota=trim($_POST['quota']);
			$num=intval($_POST['num']);
			$cid=intval($_POST['cid']);
			$stime=strtotime($_POST['stime']);
			$etime=strtotime($_POST['etime']); 
			$type=trim($_POST['type']);
			$value=array();
			for($i=1;$i<=$num;$i++){
				$time = @explode(" ", microtime () );
				$time = $time[1].($time[0]*1000000);
				if(strlen($time)<16){
					$time=substr($time.'0000',0,16);
				}
				$card = substr($time.rand(100,999),0,16);
				$password=substr(base_convert($card,10,8),-5).rand(100,999);
				$value[]="('".$card."','".$password."','".$quota."','".$type."','".$stime."','".$etime."','".time()."')";
			}
			$this->obj->DB_query_all("INSERT INTO ".$this->def."prepaid_card(`card`,`password`,`quota`,`type`,`stime`,`etime`,`atime`) VALUES ".@implode(',',$value));


			$this->ACT_layer_msg("充值卡添加成功！",9,"index.php?m=admin_prepaid");
		}
		$this->yuntpl(array('admin/admin_prepaid_add'));
	}
	function rec_action(){
		intval($_GET['rec'])=='1'?$type='1':$type='2';
		$id=$this->obj->DB_update_all("prepaid_card","`type`='".$type."'","`id`='".$_GET['id']."'");
		$this->MODEL('log')->admin_log("充值卡(ID:".$_GET['id'].")状态设置成功！");
		echo $id?1:0;die;
	}

	function del_action(){
		if($_GET['del']){
			$this->check_token();
			$del=$_GET['del'];
			if(is_array($del)){
				$del=@implode(',',$del);
				$layer_type=1;
			}else{
				$layer_type=0;
			}
			$id=$this->obj->DB_delete_all("prepaid_card","`id` in (".$del.")"," ");
			$del?$this->layer_msg('充值卡(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
		}else{
			$this->layer_msg('请选择要删除的内容！',8);
		}
	}
}
?>