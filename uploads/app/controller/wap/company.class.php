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
class company_controller extends common{
	function index_action(){
		$this->rightinfo();
		$this->get_moblie();
        $CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('city','hy','com'));
		$this->yunset($CacheList);
		if((int)$_GET['three_cityid']){
			$this->yunset("cityname",$CacheList['city_name'][(int)$_GET['three_cityid']]);
		}
        foreach($_GET as $k=>$v){
			if($k!=""){
				$searchurl[]=$k."=".$v;
			}
		}
		$this->seo("firm");
		$searchurl=@implode("&",$searchurl);
		$this->yunset("searchurl",$searchurl);
		$this->yunset('backurl',Url('wap'));
		$this->yunset("topplaceholder","请输入企业关键字,如：有限公司...");
		$this->yunset("headertitle","公司搜索");
		$this->yuntpl(array('wap/company'));
	}

	function show_action(){
		$this->rightinfo();
		$this->get_moblie();
        $UserinfoM=$this->MODEL('userinfo');
        $CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('job','com','city','hy'));
		$this->yunset($CacheList);
		$ComMember=$UserinfoM->GetMemberOne(array("uid"=>(int)$_GET['id']),array("field"=>"`status`"));
		$row=$UserinfoM->GetUserinfoOne(array('uid'=>(int)$_GET['id']),array('usertype'=>2));		
 		$school_xjh=$this->obj->DB_select_once("school_xjh","`uid`='".(int)$_GET['id']."' and `status`='1' and `etime` > '".time()."' ");
 		$this->yunset("school_xjh",$school_xjh);		
	    $companymsg=$this->obj->DB_select_once("company_msg","`cuid`='".(int)$_GET['id']."' and `status`='1'");		
		$this->yunset("companymsg",$companymsg);
		$show =$this->obj->DB_select_all('company_show',"`uid`='".(int)$_GET['id']."'");	
		if($show&&is_array($show)){
			foreach($show as $k=>$v){
				$show[$k]['picurl']=str_replace('./','/',$v['picurl']);
			}
		}
        $this->yunset('show', $show);	
		
		if(!is_array($row)){
			$this->ACT_msg($_SERVER['HTTP_REFERER'],"没有找到该企业！");
		}elseif($ComMember[status]==0){
			$this->ACT_msg($_SERVER['HTTP_REFERER'],"该企业正在审核中，请稍后查看！");
		}elseif($ComMember[status]==3){
			$this->ACT_msg($_SERVER['HTTP_REFERER'],"该企业未通过审核！");
		}elseif($row[r_status]==2){
			$this->ACT_msg($_SERVER['HTTP_REFERER'],"该企业暂被锁定，请稍后查看！");
		}
		$linkphone = explode('-', $row['linkphone']);
		if(strlen($linkphone[0])==4){
		    $row['callphone']=$linkphone[0].$linkphone[1];
		}else if(strlen($linkphone[0]>8)){
		    $row['callphone']=substr($row['linkphone'], 0, 12);
		}else{
		    $row['callphone']=$row['linkphone'];
		}
		
		if($row['infostatus']==2){
			$look_msg="企业没有公开联系信息！";
			$looktype="3";
		}elseif($this->config['com_login_link']=='2'){
			$look_msg="网站没有开放企业联系信息！";
			$looktype="2";
		}elseif($this->config['com_login_link']=='1' || $this->uid==$_GET['id']){
			$looktype="1";
		}elseif($this->uid=='' && $this->username==''){
			if($row['linktel']){
				$row['linktel']= substr_replace($row['linktel'],'****',4,4);
			}
			if($row['linkphone']){
				$row['linkphone']= substr_replace($row['linkphone'],'****',4,4);
			}
			$looktype="4";
		}elseif($this->usertype!=1&&(int)$_GET['id']!=$this->uid){
			$look_msg="您不是个人用户，不能查看联系方式";
			$looktype="5";
		}elseif($this->config['com_login_link']=="3" && $this->uid){
 			$looktype="1";
		}elseif($this->config['com_login_link']=="4" && $this->usertype==1){
			$Resume=$this->MODEL('resume');
			$resumenum=$Resume->GetResumeExpectNum(array("uid"=>$this->uid));
			if($resumenum<1){
				$look_msg="您还没有创建简历，不能查看联系方式！";
				$looktype="6";
			}else{
				$looktype="1";
			}
		}elseif($this->config['com_login_link']=="5" && $this->usertype==1){
	         $sendresume=$this->obj->DB_select_num("userid_job","`uid`='".$this->uid."' and `com_id`='".(int)$_GET['id']."'");
	        if($sendresume<1){
	           	$look_msg="投递简历，联系电话任意看"; 
				$looktype="7";
	        }else{
	        	$looktype="1";
	        }
	   	}else{
			$looktype="1";
		}
		
		$this->yunset("look_msg",$look_msg);
		$this->yunset("looktype",$looktype);
		
		$rows=$UserinfoM->GetUserstatisOne(array('uid'=>(int)$row['uid']),array("field"=>"`rating`","usertype"=>2));		
		$comrat=$UserinfoM->GetRatinginfoOne(array("id"=>$rows['rating']));
		if($comrat['com_pic']&&file_exists(APP_PATH.$comrat['com_pic'])){
			$comrat['com_pic']=$this->config['sy_weburl']."/".$comrat['com_pic'];
		}else{
			$comrat['com_pic']='';
		}
		
			
		
		$row['lastupdate']=date("Y-m-d",$row['lastupdate']);
		if($row['infostatus']=='2'){
			$row['linkphone']=$row['linktel']=$row['linkmail']=$row['linkqq']='';
		}
		if(!$row['logo'] || $row['logo_status']!='0' ||!file_exists(str_replace($this->config['sy_weburl'],APP_PATH,'.'.$row['logo']))){
		    $row['logo']=$this->config['sy_weburl']."/".$this->config['sy_unit_icon'];
		}else{
		    $row['logo']=str_replace("./",$this->config['sy_weburl']."/",$row['logo']);
		}
		$welfare = @explode(",",$row['welfare']);
		foreach($welfare as $k=>$v){
			if(!$v){
				unset($welfare[$k]);
			}
		}
		$row['welfare_n']=$welfare;
		
		$row['content']=str_replace(array("ti<x>tle","“","”"),array("title"," "," "),$row['content']);
		$row['content']=htmlspecialchars_decode($row['content']);
		preg_match_all('/<img(.*?)src=("|\'|\s)?(.*?)(?="|\'|\s)/',$row['content'],$res);
		if(!empty($res[3])){
		    foreach($res[3] as $v){
		        if(strpos($v,'http:')===false && strpos($v,'https:')===false){
		            
		            $row['content'] = str_replace($v,$this->config['sy_weburl'].$v,$row['content']);
		        }
		    }
		}
		$this->yunset("row",$row);
		$this->yunset("comrat",$comrat);
		if($this->uid&&$this->usertype=='1'){
		    $AskM=$this->MODEL('ask');
		    $isatn=$AskM->GetAtnOne(array("uid"=>$this->uid,"sc_uid"=>(int)$_GET['id']));
		    $this->yunset("isatn",$isatn);
		}
		if ($this->usertype==1){
		    $jobM = $this->MODEL('job');
		    $userid_job = $jobM->GetUseridJobOne(array('uid'=>$this->uid,'com_id'=>(int)$_GET['id']));
		    $this->yunset('userid_job', $userid_job);
		}
		$data['company_name']=$row['name'];
		$data['company_name_desc']=$row['content'];
		$this->data=$data;
		$this->seo("company_index");
		$this->yunset("headertitle","公司详情");
		$this->yunset("shareurl",Url('wap',array('c'=>'company','a'=>'share','id'=>$row['uid'])));
		$user_agent = ( !isset($_SERVER['HTTP_USER_AGENT'])) ? FALSE : $_SERVER['HTTP_USER_AGENT'];
		if (($_COOKIE['mapx'] && $_COOKIE['mapx']>0) && ($_COOKIE['mapy'] && $_COOKIE['mapy']>0) && strpos($user_agent, 'Android') && is_weixin()){
		    $this->yunset(array('mapx'=>$_COOKIE['mapx'],'mapy'=>$_COOKIE['mapy']));
		}else{
		    $this->yunset(array('mapx'=>0,'mapy'=>0));
		}
		$this->yuntpl(array('wap/company_show'));
	}

	function share_action(){
		$this->get_moblie();
		$M=$this->model("company");
		$row=$M->GetCompanyInfo(array('uid'=>(int)$_GET['id']));
		$welfare = @explode(",",$row['welfare']);
		foreach($welfare as $k=>$v){
			if(!$v){
				unset($welfare[$k]);
			}
		}
		$row['welfare']=$welfare;
		$row['content']=strip_tags($row['content']);
		if($row['logo']){
			$row['logo']=str_replace("./",$this->config['sy_weburl']."/",$row['logo']);
		}  
		if($this->uid=="" && $this->username==""){
		    $look_msg=1;
		}elseif($this->uid!=$row['uid']){
			if($this->config['com_login_link']=="2"){
			    $look_msg=4;
			}elseif($this->config['com_login_link']=="3"){
				if($this->usertype!="1"){
					$look_msg=2;
				}
				if($this->config['com_resume_link']=="1"&&$this->usertype=='1'){
					$ResumeM=$this->MODEL('resume');
					$num=$ResumeM->GetResumeExpectNum(array("uid"=>$this->uid)); 
					if($num<1){
						$look_msg=3;
					}
				}
			}
		}
		$this->yunset("look_msg",$look_msg);
		$this->yunset("row",$row);
		$show=$M->GetShowAll(array('uid'=>(int)$_GET['id']),array("field"=>"`picurl`"));
		if(is_array($show)){
			foreach($show as $k=>$v){
				$show[$k]['picurl']=str_replace("./",$this->config['sy_weburl']."/",$v['picurl']);
			}
		}
		$this->yunset("show",$show);
		$product=$M->GetProductAll(array('uid'=>(int)$_GET['id'],"status"=>"1"));
		$this->yunset("product",$product);
		$CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('job','com','city','hy'));

		$this->yunset($CacheList);
		$data['company_name']=$row['name'];
		$data['company_name_desc']=$row['content'];
		$this->data=$data;
		$this->seo("company_index");
		$this->yunset("company_style",$this->config['sy_weburl']."/app/template/wap/company");
		$this->yuntpl(array('wap/company/index'));
	}

	function msg_action(){
		$this->rightinfo();
		$this->get_moblie();
		$UserinfoM=$this->MODEL('userinfo');
		$row=$UserinfoM->GetUserinfoOne(array('uid'=>(int)$_GET['id']),array('usertype'=>2));
		$this->yunset("row",$row);
		$data['company_name']=$row['name'];
		$data['company_name_desc']=$row['content'];
		$this->data=$data;
		$this->seo("company_index");
		$this->yunset("headertitle","公司详情");
		$this->yuntpl(array('wap/company_msg'));
	}	

	function whb_action(){
	    
	    if ($_GET['fr']=='wxxcx' || $_GET['fr']=='app'){
	        $this->yunset('fr',$_GET['fr']);
	        $this->cookie->setcookie('fr',$_GET['fr'],time()+86400);
	    }else{
	        $this->cookie->setcookie('fr','',time()-86400);
	    }
        $this->seo("whb");
		$this->yunset("headertitle","企业微海报生成");
		$this->yuntpl(array('wap/whb'));
	}

	function ws_action(){
		if(!$this->config["sy_haibaouser"]|| !$this->config["sy_haibaouserid"] || !$this->config["sy_haibaopw"] || !$this->config["sy_haibaokey"]||$this->config['sy_haibao_isopen']!='1'){
			$data['msg']="还没有配置海报，请联系管理员！";
			$data['url']=Url('wap',array('c'=>'company','a'=>'whb','id'=>$_GET['id']));
			$this->yunset("layer",$data);
		}
		
 		if ($_COOKIE['fr']){
 		    $this->yunset('fr',$_COOKIE['fr']);
 		}
		$this->seo("whb");

		$this->yunset("headertitle","微海报下载");
		$this->yuntpl(array('wap/ws'));
	}

	function getHb_action(){

		$CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('job','com','city'));

		$this->yunset($CacheList);

		$id = $_GET['id'];
		$jobs = $this->obj->DB_select_all("company_job","`uid`='".$id."' and `status`='0' and `state`='1' order by `lastupdate` desc");
		$this->yunset('jobs',$jobs);
		
		$com = $this->obj->DB_select_once("company","`uid`='".$id."'","`name`");
		$this->yunset("comname",$com['name']);

		$hb = $_GET['hb'];
 		$this->yunset("hb",$hb);
		$this->yuntpl(array('wap/hb/'.$hb.'/tpl'));
	}

	function getImg_action(){
	    if(!$this->config["sy_haibaouser"] || !$this->config["sy_haibaopw"] || !$this->config["sy_haibaokey"]||$this->config['sy_haibao_isopen']!='1'){
	        echo json_encode(array('errmsg'=>'还没有配置海报，请联系管理员','error'=>15));die;
	    }
	    
	    $mid=$this->config["sy_haibaouserid"];
	    
	    $id= (int)$_GET['id'];
	    $hb= (int)$_GET['hb'];
	    
	    $url="http://haibao.phpyun.com/make.php";
	    
		

	    $url.="?mid=".$mid.".".$id.".".$hb.".".$this->config['sy_haibaokey'];
	    
	    
	    
	    
	    
	    if (extension_loaded('curl')){
	        $file_contents = CurlGet($url);
	    }else if(function_exists('file_get_contents')){
	        $file_contents = file_get_contents($url);
	    }
	    if($file_contents){
	        echo $file_contents;
	    }else{
	        echo json_encode(array('errmsg'=>'网站不支持生成海报','error'=>-1));die;
	    }
	}
}
?>