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
class trainmessage_controller extends siteadmin_controller{
	function set_search(){
		$ad_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$search_list[]=array("param"=>"end","name"=>'咨询时间',"value"=>$ad_time);
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$where='1';
		$this->set_search();		
		$_GET['end']=(int)$_GET['end'];
		if($_GET['end']){
			if($_GET['end']=='1'){
				$where.=" and `ctime` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `ctime` >= '".strtotime('-'.(int)$_GET['end'].'day')."'";
			}
			$urlarr['end']=$_GET['end'];
		}
		if($_GET['r_time']){
			if($_GET['r_time']=='1'){
				$where.=" and `reply_time` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `reply_time` >= '".strtotime('-'.(int)$_GET['r_time'].'day')."'";
			}
			$urlarr['r_time']=$_GET['r_time'];
		}
		if(trim($_GET['keyword'])!=""){
			if($_GET['type']=="1"){
				$member=$this->obj->DB_select_all("resume","`name` LIKE '%".trim($_GET['keyword'])."%'","`uid`,`name`"); 
				foreach($member as $v){
					$userid[]=$v['uid'];
				} 
				$where.=" and `uid` in (".@implode(",",$userid).")";
			}elseif($_GET['type']=="2"){
				$company=$this->obj->DB_select_all("company","`name` LIKE '%".trim($_GET['keyword'])."%'","uid,`name`");
				foreach($company as $v){
					$comid[]=$v['uid'];
				}
				$where.=" and `cuid` in (".@implode(",",$comid).")"; 
			}elseif ($_GET['type']=="3"){
				$where.=" and `content` LIKE '%".trim($_GET['keyword'])."%'";
			}elseif ($_GET['type']=="4"){
			    $where.=" and `reply` LIKE '%".trim($_GET['keyword'])."%'";
			}
			$urlarr['type']=$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];
		}
		if($_GET['order']){
			$order=$_GET['order'];
			$urlarr['order']=$_GET['order'];
		}else{
			$order="desc";
		}
		$urlarr['page']="{{page}}";
		$urlarr=Url($_GET['m'],$urlarr,'admin');
		$mes_list = $this->get_page("px_zixun",$where." ORDER BY `id` $order",$urlarr,$this->config['sy_listnum']);
		
		if(is_array($mes_list)){
			$uid=$suid=array();
			foreach($mes_list as $v){
				if(in_array($v['uid'],$uid)==false){$uid[]=$v['uid'];}
				if(in_array($v['s_uid'],$suid)==false){$suid[]=$v['s_uid'];}
			}
			if(count($member)==false){
				$member=$this->obj->DB_select_all("resume","`uid` in (".@implode(",",$uid).")","`uid`,`name`");
			} 
			if(count($company)==false){
				$company=$this->obj->DB_select_all("company","`uid` in (".@implode(",",$uid).")","`uid`,`name`");
			}
			if(count($ltinfo)==false){
				$ltinfo=$this->obj->DB_select_all("lt_info","`uid` in (".@implode(",",$uid).")","`uid`,`realname`");
			}
			$px=$this->obj->DB_select_all("px_train","`uid` in (".@implode(",",$suid).")","`uid`,`name`");
			foreach($mes_list as $k=>$v){
				$mes_list[$k]['content'] = str_replace('"',"",$v['content']);
				$mes_list[$k]['reply'] = str_replace('"',"",$v['reply']);
				foreach($member as $val){
					if($v['uid']==$val['uid']){
						$mes_list[$k]['zname']=$val['name'];
					}
				}
				foreach($company as $val){
					if($v['uid']==$val['uid']){
						$mes_list[$k]['zname']=$val['name'];
					}
				}
				foreach($ltinfo as $val){
					if($v['uid']==$val['uid']){
						$mes_list[$k]['zname']=$val['realname'];
					}
				}
				foreach($px as $val){
					if($v['s_uid']==$val['uid']){
						$mes_list[$k]['pxname']=$val['name'];
					}
				}
			}
		}
		$_GET['c']='';
		$this->yunset("get_type", $_GET);
		$this->yunset("mes_list",$mes_list);
		$this->yuntpl(array('siteadmin/admin_trainmessage'));
	}
	function del_action(){
	    if($_POST['del']){
	    	$del=$_POST['del'];
	    	if($del){
	    		if(@is_array($del)){
					$del=@implode(',',$del);
					$this->obj->DB_delete_all("px_zixun","`id` in (".$del.")","");
		    	}else{
		    		$del=intval($del);
		    		$this->obj->DB_delete_all("px_zixun","`id` in ('".$del."')");
		    	}
		    	
	    		$this->layer_msg( "咨询(ID:".$del.")删除成功！",9,1,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg( "请选择您要删除的信息！",8,1,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	    if(isset($_GET['id'])){
			$this->check_token();
			$result=$this->obj->DB_delete_all("px_zixun","`id`='".$_GET['id']."'" );
			isset($result)?$this->layer_msg('咨询(ID:'.$_GET['id'].')删除成功！',9):$this->layer_msg('删除失败！',8);
		}else{
			$this->layer_msg('非法操作！',8);
		}
	}
}
?>