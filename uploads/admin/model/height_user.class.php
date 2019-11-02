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
class height_user_controller extends adminCommon{
	
	function set_search(){
		include PLUS_PATH."/user.cache.php";
        foreach($userdata['user_salary'] as $k=>$v){
               $ltarr[$v]=$userclass_name[$v];
        }
        foreach($userdata['user_type'] as $k=>$v){
               $ltar[$v]=$userclass_name[$v];
        }
        foreach($userdata['user_report'] as $k=>$v){
               $ltarry[$v]=$userclass_name[$v];
        }
        $search_list[]=array("param"=>"rec","name"=>'推荐状态',"value"=>array("1"=>"已推荐","2"=>"未推荐"));
        $search_list[]=array("param"=>"searchtype","name"=>'工作性质',"value"=>$ltar);
        $search_list[]=array("param"=>"status","name"=>'审核状态',"value"=>array("1"=>"未审核","2"=>"已审核","3"=>"未通过"));
        $lo_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
        $search_list[]=array("param"=>"verify","name"=>'审核时间',"value"=>$lo_time);
        $search_list[]=array("param"=>"searchreport","name"=>'到岗时间',"value"=>$ltarry);
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$this->set_search();
		
		$where="`height_status`<>'0'";
		if ($_GET['searchtype']!=""){
			$where.=" and `type`='".$_GET['searchtype']."'";
			$urlarr['searchtype']=$_GET['searchtype'];
		}
		if ($_GET['searchreport']!=""){
			$where.=" and `report`='".$_GET['searchreport']."'";
			$urlarr['searchreport']=$_GET['searchreport'];
		}
		if($_GET['news_search']!=""){
			if (trim($_GET['keyword'])!=''){
				if ($_GET['searchrname']=='2'){
				    $where.=" and `name` like '%".trim($_GET['keyword'])."%'";
			     }elseif ($_GET['searchrname']=='1'){
				     $meminfo=$this->obj->DB_select_all("member","`username` like '%".trim($_GET['keyword'])."%'","`uid`");
					  if (is_array($meminfo)){
					         foreach ($meminfo as $k=>$v){
						     $memuids[]=$v['uid'];
					     }
					  $mems=@implode(",",$memuids);
				    }
				   $where.=" and `uid` in (".$mems.")";
			      }
			      $urlarr['keyword']=$_GET['keyword'];
			      $urlarr['searchrname']=$_GET['searchrname'];
			}
			$urlarr['news_search']=$_GET['news_search'];
		}
		if($_GET['status']){
			$where.=" and `height_status`='".$_GET['status']."'";
			$urlarr['status']=$_GET['status'];
		}
		if($_GET['rec']){
			if($_GET['rec']=='2'){
				$where.=" and `rec`='0'";
				$urlarr['rec']=2;				
			}else{
				$where.=" and `rec`='".$_GET['rec']."'";
				$urlarr['rec']=$_GET['rec'];
			}
		}
		if($_GET['verify']){
			if($_GET['verify']=='1'){
				$where.=" and `status_time` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `status_time` >= '".strtotime('-'.(int)$_GET['verify'].'day')."'";
			}
			$urlarr['verify']=$_GET['verify'];
		}
		 
		if($_GET['order']){
			if($_GET['t']=="time"){
				$where.=" order by `status_time` ".$_GET['order'];
			}else{
				$where.=" order by ".$_GET['t']." ".$_GET['order'];
			}
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by height_status asc,`id` desc";
		}
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		$rows=$this->get_page("resume_expect",$where,$pageurl,$this->config['sy_listnum']);
		include PLUS_PATH."/job.cache.php";
		include PLUS_PATH."/user.cache.php";
		include PLUS_PATH."/city.cache.php";
		if(is_array($rows)){
			foreach($rows as $k=>$v){
				$uids[]=$v['uid'];
				$rows[$k]['edu_n']=$userclass_name[$v['edu']];
				$rows[$k]['exp_n']=$userclass_name[$v['exp']];
 				$rows[$k]['minsalary']=$v['minsalary'];
				$rows[$k]['maxsalary']=$v['maxsalary'];
				$rows[$k]['report_n']=$userclass_name[$v['report']];
				$rows[$k]['type_n']=$userclass_name[$v['type']];
				
				$city_classid=@explode(",",$v['city_classid']);
				$city_class_name=array();
				if(is_array($city_classid)){
				    $i=0;
				    foreach($city_classid as $key=>$val){
				        if($city_name[$val]){
				            $cityname[$key]=$val;
				            if($val!=""){
				                $i=$i+1;
				            }
				            $city_class_name[]=$city_name[$val];
				        }
				    }
				    $rows[$k]['citynum']=$i;
				}
				$rows[$k]['city_class_name']=@implode('、',$city_class_name);
				$lt_job = @explode(",",$v['job_classid']);
				if(is_array($lt_job)){
					foreach($lt_job as $key=>$va){
						$jobname[$key]=$va;
					}
					$rows[$k]['jobname']=$job_name[$jobname[0]];
				}
			}
			$member=$this->obj->DB_select_all("member","`uid` in(".@implode(',',$uids).")","`uid`,`username`");
			foreach($rows as $key=>$val){
				foreach($member as $v){
					if($val['uid']==$v['uid']){
						$rows[$key]['username']=$v['username'];
					}
				}
			}
		}
		$this->yunset("get_type", $_GET);
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_height_user'));
	}
	function lockinfo_action(){
		$row=$this->obj->DB_select_once("resume_expect","`id`='".intval($_POST['pid'])."'","`statusbody`");
		echo $row['statusbody'];die;
	}
	function status_action()
	{
		if($_POST['pid'])
		{
			$this->obj->DB_update_all("resume_expect","`height_status`='".$_POST['status']."',`statusbody`='".$_POST['statusbody']."',`status_time`='".time()."'","`id` IN (".$_POST['pid'].")");
			$list=$this->obj->DB_select_all("resume_expect","`id` IN (".$_POST['pid'].")","`uid`,`name`");
			if($list){
				foreach($list as $v){
					if($_POST['status']==2){
						$content="高级简历《".$v['name']."》审核通过";
					}elseif($_POST['status']==3){
						$content="高级简历《".$v['name']."》审核未通过，未通过原因：".$_POST['statusbody'];
					}
					$this->automsg($content,$v['uid']);
				}
			}
			$this->MODEL('log')->admin_log("高级人才(ID:".$_POST['pid'].")审核设置成功");
			$this->ACT_layer_msg("审核设置成功！",9,$_SERVER['HTTP_REFERER']);
		}else{
			$this->ACT_layer_msg("审核设置失败！",8,$_SERVER['HTTP_REFERER']);
		}
	}
	function recommend_action(){
		$nid=$this->obj->DB_update_all("resume_expect","`rec`='".$_GET['rec']."'","`id`='".$_GET['id']."'");
		$resume=$this->obj->DB_select_once("resume_expect","`id`='".$_GET['id']."'","name,uid");
		if($nid && ($_GET['rec']==1)){
			$this->automsg("管理员操作：推荐高级简历《".$resume['name']."》",$resume['uid']);
		}elseif($nid && ($_GET['rec']==0)){
			$this->automsg("管理员操作：取消推荐高级简历《".$resume['name']."》",$resume['uid']);
		}

		$this->MODEL('log')->admin_log("高级人才(ID:".$_GET['id'].")推荐成功");
		echo $nid?1:0;die;
	}

	function del_action(){
		$this->check_token();
		
	    if($_GET['del']){
	    	$del=$_GET['del'];
	    	if($del){
	    		if(is_array($del)){
					$this->obj->DB_update_all("resume_expect","`height_status`='0'","`id` in(".@implode(',',$del).")");
					$del=@implode(',',$del);
					$layer_type='1';
					$list=$this->obj->DB_select_all("resume_expect","`id` in(".@implode(',',$del).")","`uid`,`name`");
					if($list){
						foreach($list as $v){
							$this->automsg("管理员操作：取消高级简历《".$v['name']."》",$v['uid']);
						}
					}
		    	}else{
		    		$this->obj->DB_update_all("resume_expect","`height_status`='0'","`id`='".$_GET['del']."'");
					$layer_type='0';
					$list=$this->obj->DB_select_once("resume_expect","`id`='".$_GET['del']."'","`uid`,`name`");
					$this->automsg("管理员操作：取消高级简历《".$list['name']."》",$list['uid']);
		    	}
				$this->layer_msg('高级人才(ID:'.$del.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg('请选择您要删除的高级人才！',8,1,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	}

	function gresumeNum_action(){

		$MsgNum = $this->MODEL('msgNum');
		echo $MsgNum->gresumeNum();
	}
}
?>