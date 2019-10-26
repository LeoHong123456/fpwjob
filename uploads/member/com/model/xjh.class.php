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
class xjh_controller extends company{
	
	function index_action(){
		$this->company_satic();
		$this->public_action();
		$urlarr["c"]="xjh";
		$urlarr["page"]="{{page}}";
		$pageurl=Url('member',$urlarr);
		$where="`uid`='".$this->uid."'";
		$rows=$this->get_page("school_xjh",$where,$pageurl,"10");
		if($rows&&is_array($rows)){
			foreach($rows as $val){
				$uids[]=$val['uid'];
				$sids[]=$val['schoolid'];
				$xjhids[]=$val['id'];
			}
			$company=$this->obj->DB_select_all("company","`uid` in(".pylode(',',$uids).")","`uid`,`name`");
			$academy=$this->obj->DB_select_all('school_academy',"`id` in(".pylode(',',$sids).")",'id,schoolname');
			$atn=$this->obj->DB_select_all('atn',"`xjhid` in(".pylode(',',$xjhids).") group by xjhid",'`xjhid`,count(xjhid) as xjhnum');
			foreach($rows as $key=>$val){
				foreach($company as $v){
					if($val['uid']==$v['uid']){
						$rows[$key]['com_name']=$v['name'];
					}
				}
				foreach($academy as $v){
					if($val['schoolid']==$v['id']){
						$rows[$key]['sch_name']=$v['schoolname'];
					}
				}
				foreach($atn as $v){
					if($val['id']==$v['xjhid']){
						$rows[$key]['atnnum']=$v['xjhnum'];
					}
				}
			}
		}
		$this->yunset("rows",$rows);
		$school=$this->obj->DB_select_all('school_academy','1','id,schoolname');
		$this->yunset("school",$school);
		$cert=$this->obj->DB_select_once("company_cert","`uid`='".$this->uid."' and type='3'");
		$this->yunset("cert",$cert);
		$this->yunset($this->MODEL('cache')->GetCache(array('city')));
		$this->yunset("js_def",3);
		$this->com_tpl("xjh");
	}
	
	function save_action(){
		if($_POST['submit']){
			if($_POST['provinceid']==''){
				$this->ACT_layer_msg('请选择宣讲省份',8);
			}
			if($_POST['cityid']==''){
				$this->ACT_layer_msg('请选择宣讲城市',8);
			}
			if($_POST['schoolid']==''){
				$this->ACT_layer_msg('请选择宣讲学校',8);
			}
			if($_POST['address']==''){
				$this->ACT_layer_msg('请填写详细地点',8);
			}
			if($_POST['datetime']==''){
				$this->ACT_layer_msg('请选择宣讲日期',8);
			}
			if($_POST['stime']==''){
				$this->ACT_layer_msg('请选择宣讲开始时间',8);
			}
			if($_POST['etime']==''){
				$this->ACT_layer_msg('请选择宣讲结束时间',8);
			}
			$sdate=strtotime($_POST['datetime'].' '.$_POST['stime']);
			$edate=strtotime($_POST['datetime'].' '.$_POST['etime']);
			if($sdate>$edate){
				$this->ACT_layer_msg('开始时间要小于结束时间',8);
			}
			$data['provinceid']=$_POST['provinceid'];
			$data['cityid']=$_POST['cityid'];
			$data['schoolid']=$_POST['schoolid'];
			$data['address']=$_POST['address'];
			$data['stime']=$sdate;
			$data['etime']=$edate;
			$data['uid']=$this->uid;
			if($_POST['id']){
				$data['status']='0';
				$where['id']=$_POST['id'];
				unset($_POST['id']);
				$nid=$this->obj->update_once('school_xjh',$data,$where);
				$msg='修改';
			}else{
				$data['ctime']=time();
				$nid=$this->obj->insert_into('school_xjh',$data);
				$msg='添加';
			}
			if($nid){
				$this->ACT_layer_msg($msg.'成功',9,'index.php?c=xjh');
			}else{
				$this->ACT_layer_msg($msg.'失败',8);
			}
		}
	}
	
	function edit_action(){
		$this->yunset($this->MODEL('cache')->GetCache(array('city')));
		$school=$this->obj->DB_select_all('school_academy','1','id,schoolname');
		$this->yunset("school",$school);
		if($_GET['id']){
			include(PLUS_PATH."city.cache.php");
			$row=$this->obj->DB_select_once('school_xjh',"`id`='".$_GET['id']."'");
			if($row['provinceid']){
				$html='<option value="">请选择</option>';
				foreach($city_type[$row['provinceid']] as $v){
					$html.="<option value='".$v."'>".$city_name[$v]."</option>";
				}
			}
			$row['cityhtml']=$html;
			$row['datetime']=date('Y-m-d',$row['stime']);
			$row['sdate']=date('H:i',$row['stime']);
			$row['edate']=date('H:i',$row['etime']);
		}
		echo json_encode($row);die;
	}
	
	function del_action(){
		if($_POST['del'] || $_GET['id']){
			if(is_array($_POST['del'])){
				$delid=pylode(",",$_POST['del']);
				$layer_type='1';
			}else{
				$delid=(int)$_GET['id'];
				$layer_type='0';
			}
			$oid=$this->obj->DB_delete_all("school_xjh","`id` in (".$delid.") and `uid`='".$this->uid."'","");
			if($oid){
				$this->obj->member_log("删除宣讲会");
				$this->layer_msg('删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']);
			}else{
				$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->ACT_layer_msg("请选择您要删除的宣讲会！",8,$_SERVER['HTTP_REFERER']);
		}
	}
}
?>