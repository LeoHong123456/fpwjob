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
class admin_school_academy_controller extends adminCommon{
	function set_search(){
		$search_list[]=array("param"=>"change","name"=>'更新时间',"value"=>array("1"=>"今天","3"=>"最近三天","7"=>"最近七天","15"=>"最近半月","30"=>"最近一个月"));
        $this->yunset("search_list",$search_list);
    }
	function index_action(){
		$this->set_search();
		$where="1";
		if(trim($_GET['keyword'])){
			if($_GET['type']=='1'){
				$where.=" and `schoolname` like '%".trim($_GET['keyword'])."%'";
			}elseif($_GET['type']=='2'){
				$where.=" and `school_phone` like '%".trim($_GET['keyword'])."%'";
			}
			$urlarr['type']="".$_GET['type']."";
			$urlarr['keyword']="".trim($_GET['keyword'])."";
		}
        if($_GET['change']){
			if($_GET['change']=='1'){
				$where.=" and `lastupdate` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `lastupdate` >= '".strtotime('-'.$_GET['change'].'day')."'";
			}
			$urlarr['change']=$_GET['change'];
		}
		if($_GET['order']){
			if($_GET['order']=="desc"){
				$order=" order by `".$_GET['t']."` desc";
			}else{
				$order=" order by `".$_GET['t']."` asc";
			}
		}else{
			$order=" order by lastupdate desc,`id` desc";
		}
		if($_GET['order']=="asc"){
			$this->yunset("order","desc");
		}else{
			$this->yunset("order","asc");
		}
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
        $CacheM=$this->MODEL('cache');
		$rows=$this->get_page('school_academy',$where.$order,$pageurl,$this->config['sy_listnum']);
        $CacheList=$CacheM->GetCache(array('school','city'));
        $this->yunset($CacheList);
        extract($CacheList);
		if(is_array($rows)){
			foreach($rows as $k=>$v){
                $rows[$k]['schoolname_n']=$v['schoolname']; 
                $rows[$k]['provinceid_n']=$city_name[$v['provinceid']];
				$rows[$k]['cityid_n']=$city_name[$v['cityid']];
                $rows[$k]['three_cityid_n']=$city_name[$v['three_cityid']];  
                $rows[$k]['photo_n']=$v['photo'];
                $rows[$k]['address_n']=$v['address'];
                $rows[$k]['schoolemail_n']=$v['schoolemail'];
                $rows[$k]['schoolinternet_n']=$v['schoolinternet'];
                $rows[$k]['downtime_n']=$v['downtime'];
                $rows[$k]['lastupdate_n']=$v['lastupdate'];  
                $rows[$k]['school_department_n']=$schoolclass_name[$v['school_department']];
                $rows[$k]['school_level_n']=$schoolclass_name[$v['school_level']];
                $rows[$k]['school_categty_n']=$schoolclass_name[$v['school_categty']];
                $rows[$k]['schooltag_n']=$schoolclass_name[$v['schooltag']];
                $rows[$k]['school_phone_n']=$v['school_phone']; 
    
			}
		}
        $this->yunset("rows",$rows);
		$this->yunset("get_type",$_GET);
		$this->yuntpl(array('admin/school_academy_list'));
	}
    function add_action(){
        $CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('school','city'));
        $this->yunset($CacheList);
        if($_GET['id']){
			$show=$this->obj->DB_select_once("school_academy","id='".$_GET['id']."'");
			$this->yunset("show",$show);
		}
        $this->yunset("get_type",$_GET);
        $this->yuntpl(array('admin/school_add'));
    }
    function saveacademy_action(){ 
        $data['schoolname'] = $_POST['schoolname'];
        $data['provinceid'] = $_POST['provinceid'];
        $data['cityid'] = $_POST['cityid'];
        $data['three_cityid'] = $_POST['three_cityid'];
        $data['school_categty'] = $_POST['school_categty'];
        $data['school_department'] = $_POST['school_department'];
        $data['school_level'] = $_POST['school_level'];
        $data['schooltag'] = $_POST['schooltag'];
        $data['school_phone'] = $_POST['school_phone'];
        $data['address'] = $_POST['address'];
        $data['schoolemail'] = $_POST['schoolemail'];
        $data['schoolinternet'] = $_POST['schoolinternet'];
        
        $academy=$this->obj->DB_select_once("school_academy",'`id`="'.(int)$_POST['id'].'"');
        if($_POST['photo']!=$academy['photo']){
			$data['photo'] = $this->checksrc($_POST['photo'],$academy['photo']);
        }
        $data['lastupdate']=time();
        if ($_POST['id']){
            $nid = $this->obj->update_once("school_academy",$data,"`id`='".(int)$_POST['id']."'");
            $msg = '修改'; 
        }else{
            $data['downtime']=time();
            $nid=$this->obj->insert_into("school_academy",$data);
            $msg = '添加'; 
        }
        if ($nid){
            $nid = $_POST['id'] ? $_POST['id'] : $nid;
            $this->ACT_layer_msg("院校(ID:".$nid.")".$msg."成功！",9,"index.php?m=admin_school_academy",2,1);
        }else{
            $nid = $_POST['id'] ? $_POST['id'] : $nid;
            $this->ACT_layer_msg("院校(ID:".$nid.")".$msg."失败！",8,"index.php?m=admin_school_academy",2,1);
        }
    }
    function del_action(){
		$this->check_token();
	    if($_GET['del']||$_GET['id']){
    		if(is_array($_GET['del'])){
    			$layer_type=1;
				$del=@implode(',',$_GET['del']);
	    	}else{
	    		$layer_type=0;
	    		$del=$_GET['id'];
	    	}
			$this->obj->DB_delete_all("school_academy","`id` in (".$del.")","");
			$this->layer_msg("院校(ID:".$del.")删除成功！",9,$layer_type,$_SERVER['HTTP_REFERER']);
    	}else{
			$this->layer_msg("请选择您要删除的信息！",8,1);
    	}
	}
     function list_action(){
        $CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('school','city'));
        $this->yunset($CacheList);
        if($_GET['id']){
			$show=$this->obj->DB_select_once("school_academy","id='".$_GET['id']."'");
			$this->yunset("show",$show);
		}
        $this->yunset("get_type",$_GET);
        $this->yuntpl(array('admin/admin_school_list'));
    }
   
   
}
?>