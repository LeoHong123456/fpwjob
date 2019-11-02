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
class admin_school_xjh_controller extends adminCommon{
	
	function set_search(){
		$search_list[]=array("param"=>"status","name"=>'审核状态',"value"=>array("3"=>"未审核","1"=>"已审核","2"=>"未通过"));
		$search_list[]=array("param"=>"state","name"=>'举办状态',"value"=>array("1"=>"待举办","2"=>"开讲中","3"=>"已结束"));
		$search_list[]=array("param"=>"adtime","name"=>'发布时间',"value"=>array("1"=>"今天","3"=>"最近三天","7"=>"最近七天","15"=>"最近半月","30"=>"最近一个月"));
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$this->set_search();
		$time = time();
		$where=1;
		if($_GET['news_search']){
			extract($_GET);
			if(trim($keyword)!=""){
				if($type=='1'){
					$where .=" and  `address` like '%".trim($keyword)."%'";
				}
				$urlarr['type']=$type;
				$urlarr['keyword']=$_GET['keyword'];
			}
			$urlarr['news_search']=$_GET['news_search'];
		}
		if($_GET['status']){
			if($_GET['status']=='3'){
				$where .=" and `status`='0'";
			}else{
				$where .=" and `status`='".$_GET['status']."'";
			}
			$urlarr['status']=$_GET['status'];
		}
		if($_GET['state']){
			if($_GET['state']=='1'){
				$where .=" and `stime` > '".time()."'";
			}else if($_GET['state']=='2'){
				$where .=" and `stime` < '".time()."' and `etime` > '".time()."'";
			}else if($_GET['state']=='3'){
				$where .=" and `etime` < '".time()."'";
			}
			$urlarr['state']=$_GET['state'];
		}
		if($_GET['adtime']){
			if($_GET['adtime']=='1'){
				$where .=" and `ctime`>'".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where .=" and `ctime`>'".strtotime('-'.intval($_GET['adtime']).' day')."'";
			}
			$urlarr['adtime']=$_GET['adtime'];
		}
		if($_GET['order']){
			if($_GET['t']=='atnnum'){
				$alist=$this->obj->DB_select_all('atn',"`xjhid`<>'0' group by xjhid order by count(xjhid) ".$_GET['order'],'`xjhid`');
				foreach($alist as $val){
					$auid[]=$val['xjhid'];
				}
				$clist=$this->obj->DB_select_all("school_xjh","1","id");
				if($clist&&is_array($clist)){
					foreach($clist as $val){
						if(in_array($val['id'],$auid)==false){
							$lxjh[]=$val['id'];
						}
					}
				}
				if($_GET['order']=="desc"){
					$xid=pylode(',',$auid).','.pylode(',',$lxjh);;
				}elseif($_GET['order']=="asc"){
					$xid=pylode(',',$lxjh).','.pylode(',',$auid);
				}
				$where.=" and id in (".$xid.") order by FIND_IN_SET(id,'$xid')";
			}else{
				$where.=" order by ".$_GET['t']." ".$_GET['order'];
			}
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by ctime desc";
		}
		
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		$rows=$this->get_page("school_xjh",$where,$pageurl,$this->config['sy_listnum']);
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
		$this->yunset($this->MODEL('cache')->GetCache(array('city','hy')));
		$this->yunset("rows",$rows);
		$this->yunset("time",$time);
		$this->yuntpl(array('admin/admin_school_xjh'));
	}
    function listxjh_action(){
        if($_GET['id']){
			$where="`xjhid`='".$_GET['id']."' and `sc_usertype`='2'";
		}else{
            $where="1";
		}
		$where.=" order by id desc";
		$urlarr['c']=$_GET['c'];
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		$rows=$this->get_page("atn",$where,$pageurl,$this->config['sy_listnum']);
		if(is_array($rows)){
			foreach($rows as $v){
				$uids[]=$v['uid'];
			}
			$resume=$this->obj->DB_select_all("resume","`uid` in (".@implode(",",$uids).")");
			foreach($rows as $k=>$v){
				foreach($resume as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['name_n']=$val['name'];
                        $rows[$k]['telphone_n']=$val['telphone'];
					}
				}
			}
		}
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_school_listxjh'));
	}
	function add_action(){
		$this->yunset($this->MODEL('cache')->GetCache(array('city')));
		$school=$this->obj->DB_select_all('school_academy','1','id,schoolname');
		$this->yunset("school",$school);
		$row=$this->obj->DB_select_once('school_xjh',"`id`='".$_GET['id']."'");
		$this->yunset("row",$row);
		$this->yuntpl(array('admin/admin_school_xjhadd'));
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
				$this->ACT_layer_msg('请选择详细地点',8);
			}
			if($_POST['datetime']==''){
				$this->ACT_layer_msg('请选择宣讲时间',8);
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
			if($_POST['id']){
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
				$this->ACT_layer_msg($msg.'成功',9,'index.php?m=admin_school_xjh');
			}else{
				$this->ACT_layer_msg($msg.'失败',8);
			}
		}
	}
    
    function dellsit_action(){
		if($_POST['del'] || $_GET['id']){
			if(is_array($_POST['del'])){
				$delid=pylode(",",$_POST['del']);
				$layer_type='1';
			}else{
				$delid=(int)$_GET['id'];
				$layer_type='0';
			}
			$oid=$this->obj->DB_delete_all("atn","`id` in (".$delid.")","");
			if($oid){
				$this->layer_msg('删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']);
			}else{
				$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->layer_msg("请选择您要删除的用户关注！",8,$_SERVER['HTTP_REFERER']);
		}
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
			$oid=$this->obj->DB_delete_all("school_xjh","`id` in (".$delid.")","");
			if($oid){
				$this->layer_msg('删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']);
			}else{
				$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->layer_msg("请选择您要删除的宣讲会！",8,$_SERVER['HTTP_REFERER']);
		}
	}
	function lockinfo_action(){
		$info = $this->obj->DB_select_once("school_xjh","`id`=".$_GET['id'],"`statusbody`");
		echo $info['statusbody'];die;
	}
	function status_action(){
		$lock_info = trim($_POST['lock_info']);
		$id=(int)$_POST['pid'];
		$id=$this->obj->DB_update_all("school_xjh","`status`='".$_POST['status']."',`statusbody`='".$lock_info."'","`id`='".$id."'");
		$info = $this->obj->DB_select_once("school_xjh","`id`=".$_GET['id'],"`uid`");
		if($_POST['status']==1){
			$this->automsg("宣讲会审核(ID:".$id.")通过",$info['uid']);
		}elseif($_POST['status']==2){
			$this->automsg("宣讲会审核(ID:".$id.")未通过",$info['uid']);
		}
		
 		$id?$this->ACT_layer_msg("宣讲会审核(ID:".$id.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg( "设置失败！",8,$_SERVER['HTTP_REFERER']);
	}

	function xjhNum_action(){
		$MsgNum = $this->MODEL('msgNum');
		echo $MsgNum->xjhNum();
	}
}
?>