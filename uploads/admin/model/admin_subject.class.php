<?php
/*
* $Author ：LEO
*
* 官网: http://www.fpwjob.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class admin_subject_controller extends adminCommon{
	
	function set_search(){
		$search_list[]=array("param"=>"rec","name"=>'是否推荐',"value"=>array("1"=>"已推荐","2"=>"未推荐"));
		$search_list[]=array("param"=>"status","name"=>'审核状态',"value"=>array("1"=>"已审核","3"=>"未审核","2"=>"未通过"));
		$search_list[]=array("param"=>"publish","name"=>'发布时间',"value"=>array("1"=>"今天","3"=>"最近三天","7"=>"最近七天","15"=>"最近半月","30"=>"最近一个月"));
		$search_list[]=array("param"=>"isprice","name"=>'收费方式',"value"=>array('1'=>'在线收费','2'=>'到场收费'));
		$this->yunset("search_list",$search_list);
	}
	function index_action()
	{
		$this->set_search();
		$where = "1";
		if(trim($_GET['keyword'])){
			if($_GET['type']=='1'){
				$where .= " AND `name` like '%".trim($_GET['keyword'])."%' ";
			}
			if($_GET['type']=='2'){
				$where .= " AND `address` like '%".trim($_GET['keyword'])."%' ";
			}
			$urlarr['type']=$_GET['type'];
			$urlarr['keyword']=$_GET['keyword'];
		}
		if($_GET['status'])
		{
			if($_GET['status']=="1")
			{
				$where .= " and `status`='1'";
			}elseif($_GET['status']=="2"){
				$where .= " and `status`='2'";
			}else{
				$where .= " and `status`='0'";
			}
			$urlarr['status']=$_GET['status'];
		}
		if($_GET['publish']){
			if($_GET['publish']=='1'){
				$where.=" and `ctime` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `ctime` >= '".strtotime('-'.(int)$_GET['publish'].'day')."'";
			}
			$urlarr['publish']=$_GET['publish'];
		}
		if($_GET['rec'])
		{
			if($_GET['rec']=="2"){
				$where .= " and `rec`='0'";
			}else{
				$where .= " and `rec`='".$_GET['rec']."'";
			}
			$urlarr['rec']=$_GET['rec'];
		}
		if($_GET['isprice']){
			$where .= " and `isprice`='".$_GET['isprice']."'";
			$urlarr['isprice']=$_GET['isprice'];
		}
		if($_GET['order'])
		{
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by status asc,id desc";
		}
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		$rows=$this->get_page("px_subject",$where,$pageurl,$this->config['sy_listnum']);
		include PLUS_PATH."/city.cache.php";
		if(is_array($rows)){
			foreach ($rows as $v){
				$uids[]=$v['uid'];
			}
			$user=$this->obj->DB_select_all("member","`uid` in(".pylode(',', $uids).") and `usertype`='4'","`username`,`uid`");
			foreach($rows as $k=>$v){
				$rows[$k]['threecityid']=$city_name[$v['threecityid']];
				$rows[$k]['cityid']=$city_name[$v['cityid']];
				foreach ($user as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['username']=$val['username'];
					}
				}
			}
		}
		$lotime=array('1'=>'一天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$this->yunset("lotime",$lotime);
		$this->yunset("rows",$rows);
		$this->yunset("get_type",$_GET);
		$this->yuntpl(array('admin/admin_subject'));
	}
	function lockinfo_action(){
		$row=$this->obj->DB_select_once("px_subject","`id`='".$_POST['id']."'","`statusbody`");
		echo $row['statusbody'];die;
	}
	function status_action()
	{
		extract($_POST);
		$id = @explode(",",$id);
		if(is_array($id))
		{
			foreach($id as $value)
			{
				$idlist[] = $value;
				$data[] = $this->shjobmsg($value,$status,$statusbody);
			}
			if($data!=""){
				$notice = $this->MODEL('notice');
				foreach($data as $key=>$value){
					$notice->sendEmailType($value);
					$notice->sendSMSType($value);
				}
			}
			$aid = @implode(",",$idlist);
			$id=$this->obj->DB_update_all("px_subject","`status`='$status',`statusbody`='".$statusbody."'","`id` IN ($aid)");
 			$id?$this->ACT_layer_msg("培训课程审核(ID:".$aid.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg("设置失败！",8,$_SERVER['HTTP_REFERER']);
		}else{
			$this->ACT_layer_msg("非法操作！",9,$_SERVER['HTTP_REFERER']);
		}
	}
	function rec_action()
	{
		$this->check_token();
		$nid=$this->obj->DB_update_all("px_subject","`".$_GET['type']."`='".$_GET['rec']."'","`id`='".$_GET['id']."'");
		$info=$this->obj->DB_select_once("px_subject","`id`='".$_GET['id']."'","`uid`,`name`");
		if($nid && ($_GET['rec']==1)){
			$this->automsg("管理员操作：推荐课程《".$info['name']."》",$info['uid']);
		}elseif($nid && ($_GET['rec']==0)){
			$this->automsg("管理员操作：取消课程《".$info['name']."》推荐设置",$info['uid']);
		}
		$this->MODEL('log')->admin_log("培训课程推荐(ID:".$_GET['id'].")设置成功");
		echo $nid?1:0;die;
	}

	function add_action(){
		if($_GET['id']){
			$row=$this->obj->DB_select_once("px_subject","`id`='".$_GET['id']."'");
			$row['type']=@explode(",",$row['type']);
			$teachinfo=$this->obj->DB_select_all("px_teacher","`uid`='".$row['uid']."' and status='1'","id,name");
			$this->yunset("teachinfo",$teachinfo);
			$row['teachid']=@explode(',',$row['teachid']);
			$this->yunset("row",$row);
		}
		$this->yunset($this->MODEL('cache')->GetCache(array('city','subject','subjecttype')));
		$this->yuntpl(array('admin/admin_subject_add'));
	}
	function save_action(){
	    $_POST=$this->post_trim($_POST);
	    $subject = $this->obj->DB_select_once("px_subject","`id`='".$_POST['id']."' and `pic`<>''");
	    if($_POST['pic']!=$subject['pic']){
			$_POST['pic'] = $this->checksrc($_POST['pic'],$subject['pic']);
		}
	    if($_POST['type']){
	        $_POST['type']=@implode(",",$_POST['type']);
	    }
	    if($_POST['teachid']){
	        $_POST['teachid'] =@implode(",",$_POST['teachid']);
	    }
	    $_POST['status'] =1;
	    $_POST['content']=str_replace(array("&amp;","background-color:#ffffff","background-color:#fff","white-space:nowrap;"),array("&",'background-color:','background-color:','white-space:'),$_POST['content']);
	    $where['id']=$_POST['id'];
	    $nid=$this->obj->update_once("px_subject",$_POST,$where);
	    if($nid)
	    {
	        $this->ACT_layer_msg("更新成功！",9,"index.php?m=admin_subject");
	    }else{
	        $this->ACT_layer_msg("更新失败！",8,"index.php?m=admin_subject");
	    }
	}
	function del_action()
	{
		if($_GET['del'])
		{
			$this->check_token();
			$del=$_GET['del'];
			if(is_array($del)){
				$del=@implode(',',$del);
				$layer_type=1;
			}else{
				$layer_type=0;
			}
			$list=$this->obj->DB_select_all("px_subject","`id` in (".$del.")","`uid`,`name`");
			$baomingid=$this->obj->DB_select_all("px_baoming","`sid` in (".$del.")","id");
			if($baomingid){
				foreach($baomingid as $v){
					$sid[]=$v['id'];
				}
			}
			$this->obj->DB_delete_all("company_order","`sid` in (".@implode(',',$sid).")"," ");
			$this->obj->DB_delete_all("px_baoming","`sid` in (".$del.")"," ");
			$this->obj->DB_delete_all("px_subject_collect","`sid` in (".$del.")"," ");
			$id=$this->obj->DB_delete_all("px_subject","`id` in (".$del.")"," ");
			if($list){
				foreach($list as $v){
					$this->automsg("管理员操作：删除课程《".$v['name']."》",$v['uid']);
				}
			}
			$del?$this->layer_msg('培训课程(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
		}else{
			$this->layer_msg('请选择要删除的内容！',8,0,$_SERVER['HTTP_REFERER']);
		}
	}
	function shjobmsg($jobid,$yesid,$statusbody)
	{
		$data=array();
		$comarr=$this->obj->DB_select_once("px_subject","`id`='".$jobid."'","uid,name");
		if($yesid==1){
			$data['type']="subjectshtg";
			$content="课程《".$comarr['name']."》审核通过";
		}elseif($yesid==2){
			$data['type']="subjectshwtg";
			$content="课程《".$comarr['name']."》审核未通过";
		}
		if($content){
			$this->automsg($content,$comarr['uid']);
		}
		if($data['type']!=""){
			$uid=$this->obj->DB_select_alls("member","px_train","a.`uid`='".$comarr['uid']."' and a.`uid`=b.`uid`","a.email,a.moblie,a.uid,b.name");
			$data['uid']=$uid[0]['uid'];
			$data['name']=$uid[0]['name'];
			$data['email']=$uid[0]['email'];
			$data['moblie']=$uid[0]['moblie'];
			$data['subjectname']=$comarr['name'];
			$data['date']=date("Y-m-d H:i:s");
			$data['status_info']=$statusbody;
			return $data;
		}
	}

	function subjectNum_action(){
		
		$MsgNum = $this->MODEL('msgNum');
		echo $MsgNum->subjectNum();	
	}


}