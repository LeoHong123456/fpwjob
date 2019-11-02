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
class train_controller extends common{
	function index_action(){
		$M=$this->MODEL('train');
		$UserinfoM=$this->MODEL('userinfo');	
		
		if($this->config['did']){
			$recsubject=$M->GetSubjectList(array("`r_status`<>'2'",'status'=>1,'pause_status'=>1,'rec'=>1,'did'=>$this->config['did']),array('orderby'=>'id desc','limit'=>6,'field'=>"`id`,`uid`,`name`,`price`,`pic`"));
		}else{
			$recsubject=$M->GetSubjectList(array("`r_status`<>'2'",'status'=>1,'pause_status'=>1,'rec'=>1),array('orderby'=>'id desc','limit'=>6,'field'=>"`id`,`uid`,`name`,`price`,`pic`"));		
		}
		if(is_array($recsubject)){
			foreach($recsubject as $v){
				$uid[]=$v['uid'];
				$ids[]=$v['id'];
			}
			
			$NumList = $this->obj->DB_select_all('px_baoming',"`sid` IN (".pylode(',',$ids).") group by sid","`sid`,count(*) as num");
			
			if(is_array($NumList)){
				
				foreach($NumList as $key=>$value){
					$BmNum[$value['sid']] = $value['num'];
				}
			}
			$reccom=$M->GetTrainAll(array("`uid` in (".pylode(",",$uid).")"),array('field'=>"uid,name"));
			foreach($recsubject as $k=>$v){
				if($BmNum[$v['id']]){
					$recsubject[$k]['baomingnum']=$BmNum[$v['id']];
				}else{
					$recsubject[$k]['baomingnum']=0;
				}
				
				foreach($reccom as $val){
					if($v['uid']==$val['uid']){
						
						$recsubject[$k]['comname']=$val['name'];
					}
				}
				if(!$v['pic'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,".".$v['pic']))){
				    $recsubject[$k]['pic']=$this->config['sy_weburl']."/".$this->config['sy_pxsubject_icon'];
				}else{
				    $recsubject[$k]['pic']=str_replace("./",$this->config['sy_weburl']."/",$v['pic']);
				}
			}
		}
		$this->yunset("recsubject",$recsubject);
		
		if($this->config['did']){
			$rectrain=$UserinfoM->GetUserinfoList(array("`r_status`<>'2' and `name`<>''",'rec'=>1,'did'=>$this->config['did']),array('usertype'=>4,'orderby'=>'uid desc','limit'=>6,'field'=>'uid,name,logo,content'));
		}else{
			$rectrain=$UserinfoM->GetUserinfoList(array("`r_status`<>'2' and `name`<>''",'rec'=>1),array('usertype'=>4,'orderby'=>'uid desc','limit'=>6,'field'=>'uid,name,logo,content'));
		}
		
		
		foreach ($rectrain as $k=>$v){
		    if(!$v['logo'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,".".$v['logo']))){
		        $rectrain[$k]['logo']=$this->config['sy_weburl']."/".$this->config['sy_px_icon'];
		    }else{
		        $rectrain[$k]['logo']=str_replace("./",$this->config['sy_weburl']."/",$v['logo']);
		    }
		}
		$this->yunset("rectrain",$rectrain);
		
		if($this->config['did']){
		$NewSubjectList=$M->GetSubjectList(array('status'=>1,'pause_status'=>1,'r_status <>'=>2,'did'=>$this->config['did']),array('field'=>'id,uid,name,price,pic','orderby'=>'ctime desc','limit'=>6));
		}else{
		$NewSubjectList=$M->GetSubjectList(array('status'=>1,'pause_status'=>1,'r_status <>'=>2),array('field'=>'id,uid,name,price,pic','orderby'=>'ctime desc','limit'=>6));
		}
		if(is_array($NewSubjectList)){
			$uid = $ids = $BmNum=array();
			foreach($NewSubjectList as $v){
				$uid[]=$v['uid'];
				$ids[]=$v['id'];
			}
			$NumList = $this->obj->DB_select_all('px_baoming',"`sid` IN (".pylode(',',$ids).") group by sid","`sid`,count(*) as num");
			
			if(is_array($NumList)){
				
				foreach($NumList as $key=>$value){
					$BmNum[$value['sid']] = $value['num'];
				}
			}
			$reccom=$M->GetTrainAll(array("`uid` in (".pylode(",",$uid).")"),array('field'=>"uid,name"));
			foreach($NewSubjectList as $k=>$v){
				if($BmNum[$v['id']]){
					$NewSubjectList[$k]['baomingnum']=$BmNum[$v['id']];
				}else{
					$NewSubjectList[$k]['baomingnum']=0;
				}

				foreach($reccom as $val){
					if($v['uid']==$val['uid']){
						
						
						$NewSubjectList[$k]['comname']=$val['name'];
					}
				}
				if(!$v['pic'] || !file_exists(str_replace($this->config['sy_weburl'],APP_PATH,".".$v['pic']))){
				    $NewSubjectList[$k]['pic']=$this->config['sy_weburl']."/".$this->config['sy_pxsubject_icon'];
				}else{
				    $NewSubjectList[$k]['pic']=$this->config['sy_weburl']."/".$v['pic'];
				}
			}
		}
		$this->yunset("newsubject",$NewSubjectList);
		
		foreach($_GET as $k=>$v){
			if($k!=""){
				$searchurl[]=$k."=".$v;
			}
		}
		$this->yunset('backurl',Url('wap'));
		$searchurl=@implode("&",$searchurl);
		$this->yunset("searchurl",$searchurl);
		$this->yunset("headertitle","职业培训");
		$this->seo("train_index");
		$this->yuntpl(array('wap/train'));
	}
	function subject_action(){	
		$M=$this->MODEL('train');
		$CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('subject','subjecttype'));
		$this->yunset($CacheList);
		$where="`r_status`<>'2' and `status`='1' and `pause_status`='1'";
		if($_GET['type']){
			$where.=" and type='".$_GET['type']."'";
			$urlarr['type']=$_GET['type'];
		}
		if($_GET['keyword']){
			$urlarr['keyword']=$_GET['keyword'];
			$where.=" and `name` like '%".trim($_GET['keyword'])."%'";
		}
		if($_GET['nid']){
			$where.=" and nid='".$_GET['nid']."'";
			$urlarr['nid']=$_GET['nid'];
		}
		$where.=" order by ctime desc";
		$urlarr['c']="train";
		$urlarr['a']="subject";
		$urlarr['page']="{{page}}";
		$pageurl=Url('wap',$urlarr);
		$NewSubjectList=$this->get_page("px_subject",$where,$pageurl,"10");	
		if(is_array($NewSubjectList)){
			foreach($NewSubjectList as $v){
				$uid[]=$v['uid'];
			}
			$reccom=$M->GetTrainAll(array("`uid` in (".pylode(",",$uid).")"),array('field'=>"uid,name"));
			foreach($NewSubjectList as $k=>$v){
				foreach($reccom as $val){
					if($v['uid']==$val['uid']){
						$NewSubjectList[$k]['comname']=$val['name'];
					}
				}
			}
		}
		$this->yunset("newsubject",$NewSubjectList);
		$this->yunset("topplaceholder","搜索课程");
		foreach($_GET as $k=>$v){
			if($k!=""){
				$searchurl[]=$k."=".$v;
			}
		}
		$searchurl=@implode("&",$searchurl);
		$this->yunset("searchurl",$searchurl);
		$this->yunset('backurl',Url('wap',array('c'=>'train')));
		$this->seo("train_index");
		$this->yuntpl(array('wap/pxsubject'));
	}
	function subshow_action(){
		if((int)$_GET['id']){
            $M=$this->MODEL('train');
            $UserinfoM=$this->MODEL('userinfo');
            $CompanyM=$this->MODEL("company");
			$M->UpdateSubject(array("`hits`=`hits`+1"),array('id'=>(int)$_GET['id']));

			$row=$M->GetSubjectOne(array('id'=>(int)$_GET['id'],"and ((`r_status`<>'2' and `status`='1' and `pause_status`='1') or `uid`='".$this->uid."')"));
			if($row['id']==''){
				$data['msg']='没有找到该课程！';
				$data['url']='index.php';
				$this->yunset("layer",$data);
			}
			$CacheM=$this->MODEL('cache');
            $CacheList=$CacheM->GetCache('subjecttype');
            $subject_type_name=$CacheList['subject_type_name'];

			if($row['type']!=""){
				$type=@explode(",",$row['type']);
				$type_name=array();
				foreach($type as $v){
					$type_name[]=$subject_type_name[$v];
				}
				$row['type']=@implode(',',$type_name);
			}
			$this->yunset("row",$row);
			$collect_num=$M->GetSubjectCollectNum(array('sid'=>$row['id']));
			$this->yunset("collect_num",$collect_num);
			$train=$UserinfoM->GetUserinfoOne(array("`r_status`<>'2'",'uid'=>$row['uid']),array("usertype"=>"4"));
			$this->yunset("train",$train);
			$otherlist=$M->GetSubjectList(array("`r_status`<>'2'",'uid'=>$row['uid'],"`id`<>'".(int)$_GET['id']."'",'status'=>1,'pause_status'=>1),array('orderby'=>'ctime desc','field'=>"id,name,price,pic,ctime,nid,tnid,hours,provinceid,cityid"));
			if($this->uid&&$this->usertype!='4'){
				if($this->usertype==1){
					$member=$UserinfoM->GetUserinfoOne(array("uid"=>$this->uid),array("field"=>'name,telphone',"usertype"=>'1'));
					$user['name']=$member['name'];
					$user['phone']=$member['telphone'];
				}elseif($this->usertype==2){
					$member=$CompanyM->GetCompanyInfo(array("uid"=>$this->uid),array("field"=>'linkman,linktel'));
					$user['name']=$member['linkman'];
					$user['phone']=$member['linktel'];
				}elseif($this->usertype==3){
					$member=$this->MODEL('lietou')->GetLtinfo(array("uid"=>$this->uid),array("field"=>'realname,moblie,phone'));
					$user['name']=$member['realname'];
					if($member['moblie']){
						$user['phone']=$member['moblie'];
					}elseif($member['phone']){
						$user['phone']=$member['phone'];
					}
				}
				$this->yunset("user",$user);
				$collect=$M->GetSubjectCollectOne(array('uid'=>$this->uid,'sid'=>(int)$_GET['id']));
				$this->yunset("collect",$collect);
				$baoming=$M->GetBaomingOne(array('uid'=>$this->uid,'sid'=>(int)$_GET['id']));
				$this->yunset("baoming",$baoming);
			}
			$this->yunset("otherlist",$otherlist);
			$data['px_subject_name']=$row['name'];
			$this->data=$data;
		}
		$this->reclist($row['uid']);
		$CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('city','subject','com'));
		$this->yunset($CacheList);
		$this->yunset("headertitle","课程详情");
		$this->seo("subject_show");
		$this->yuntpl(array('wap/pxsubshow'));
	}
	function agency_action(){
		$M=$this->MODEL('train');

		$where="`r_status`<>'2' and `name`<>'' and `sid`<>'' ";
		
		if((int)$_GET['sid']){
			$where.=" and `sid`='".(int)$_GET['sid']."'";
		}
		if((int)$_GET['pr']){
			$where.=" and `pr`='".(int)$_GET['pr']."'";
		}
		if((int)$_GET['provinceid']){
			$where.=" and `provinceid`='".(int)$_GET['provinceid']."'";
		}
		if((int)$_GET['cityid']){
			$where.=" and `cityid`='".(int)$_GET['cityid']."'";
		}
		if((int)$_GET['three_cityid']){
			$where.=" and `threecityid`='".(int)$_GET['three_cityid']."'";
		}
		if((int)$_GET['mun']){
			$where.=" and `mun`='".(int)$_GET['mun']."'";
		}
		if($_GET['keyword']){
			$where.=" and `name` like '%".trim($_GET['keyword'])."%'";
		}
		$urlarr['c']="train";
		$urlarr['a']=$_GET['a'];
		$urlarr['page']="{{page}}";
		$pageurl=Url('wap',$urlarr);
		
		$rows=$this->get_page("px_train",$where." order by `rec` desc, `uid` desc ",$pageurl,"20");
		
		if(is_array($rows)){
			foreach($rows as $val){
				$uid[] = $val['uid'];
			}
			$SubjectList = $this->obj->DB_select_all('px_subject',"`uid` IN (".pylode(',',$uid).") AND `status`='1' AND `pause_status`='1'","`id`,`uid`,`name`,`pic`");
			$TeacherList = $this->obj->DB_select_all('px_teacher',"`uid` IN (".pylode(',',$uid).") AND `r_status` <> '2' AND `status`='1' group by uid","`uid`,count(*) as num");
			$ZixunList = $this->obj->DB_select_all('px_zixun',"`s_uid` IN (".pylode(',',$uid).")","`s_uid`");
			
			if(is_array($TeacherList)){
				foreach($TeacherList as $key=>$value){
					$TeaNum[$value['uid']] = $value['num'];
				}
			}
			foreach($rows as $k=>$v){
				 
 				if(strpos($v['cert'],"3")){
					$rows[$k]['iscert']=1;
				}
				if($TeaNum[$v['uid']]){
					$rows[$k]['teanum'] = $TeaNum[$v['uid']];
				}else{
					$rows[$k]['teanum'] = 0;
				}
				$rows[$k]['num'] = 0;
				foreach($SubjectList as $value){
					if($v['uid']==$value['uid']){
						$rows[$k]['slist'][]=$value;
						$rows[$k]['num'] = $rows[$k]['num']+1;
					}
				}
				$rows[$k]['zixunnum'] = 0;
				foreach($ZixunList as $value){
					if($v['uid']==$value['s_uid']){
						$rows[$k]['zixunnum'] = $rows[$k]['zixunnum']+1;
					}
				}
			}
			 
			if($_GET['keyword']){
				$this->addkeywords("10",$_GET['keyword']);
			}
		}
 		$this->yunset('rows',$rows);
		$CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('com','city','subject'));
		$this->yunset($CacheList);
		$this->yunset("topplaceholder","搜索培训机构");
		foreach($_GET as $k=>$v){
			if($k!=""){
				$searchurl[]=$k."=".$v;
			}
		}
		$searchurl=@implode("&",$searchurl);
		$this->yunset("searchurl",$searchurl);

		$this->yunset('backurl',Url('wap',array('c'=>'train')));
		$this->seo("agency");
		$this->yuntpl(array('wap/pxagency'));
	}
	function agencyshow_action(){
		$M=$this->MODEL('train');
		$AskM=$this->MODEL('ask');
		$id=(int)$_GET['id'];
		if($this->uid&&$this->usertype!='4'){		
			$isatn=$AskM->GetAtnOne(array("uid"=>$this->uid,"sc_uid"=>$id,"tid"=>''),array('field'=>'id'));
			$this->yunset("isatn",$isatn);
		}
		$UserinfoM=$this->MODEL('userinfo');
		$row=$M->GetTrainInfo(array("`r_status`<>'2'",'uid'=>$id));
		if($row['uid']==''){
			$this->ACT_msg($this->config['sy_weburl'],"没有找到该机构！");
		}
		$row['shortcontent']=$this->CloseTags(mb_substr($row['content'],0,300,'utf-8'));
		$row['content']=$this->CloseTags($row['content']);
		$this->yunset("row",$row);		
		$data['px_agency_name']=$row['name'];
		$this->data=$data;
		$show=$M->GetShowList(array('uid'=>$id));
		$this->yunset("show",$show);
		$sublist=$M->GetSubjectList(array("`r_status`<>'2'",'status'=>1,'pause_status'=>1,'uid'=>$id),array('orderby'=>'ctime desc','limit'=>6));
        if(is_array($sublist)){
			foreach($sublist as $k=>$v){
				$sid[]=$v['id'];
			}
			$baoming=$M->GetBaomingList(array('uid'=>$this->uid,"`sid` in (".pylode(",",$sid).")"));
			if(is_array($baoming)){
				foreach($sublist as $key=>$val){
					foreach($baoming as $k=>$v){
						if($v['sid']==$val['id']){
							$sublist[$key]['baoming']=$v['sid'];
						}
					}
				}
			}
        }
		$this->yunset('sublist',$sublist);
		$teach=$M->GetTeacherList(array("r_status<>'2'",'uid'=>$id,'status'=>1),array('orderby'=>'ctime desc'));
		$this->yunset('teach',$teach);
		$this->reclist($id);
		$banner=$M->GetBannerOne(array('uid'=>$id));
		if(!$banner['pic']||!file_exists(str_replace('./',APP_PATH,$banner['pic']))){
			$banner['pic']=$this->config['sy_weburl']."/".$this->config['sy_px_banner'];
		}else{
			$banner['pic']=str_replace("./",$this->config['sy_weburl']."/",$banner['pic']);
		}
		$usertype=$this->usertype;
		$uid=$this->uid;
		
		$this->yunset("banner",$banner);
		$CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('com','city','subject','hy'));
		$this->yunset($CacheList);
		$this->yunset("headertitle","机构详情");
		
		$this->seo("agency_show");
		$this->yuntpl(array('wap/pxagencyshow'));
	}
	function reclist($id){
		$FriendM=$this->MODEL('friend');
        $M=$this->MODEL('train');
		
		$zixun=$M->GetZixunList(array('s_uid'=>$id),array('orderby'=>'id desc','limit'=>2));
		if(is_array($zixun)){
			foreach($zixun as $v){
				$uid[]=$v['uid'];
			}
			$result=$this->obj->DB_select_all("member","`uid` in (".pylode(',',$uid).") ","uid,username,usertype");
			$resume=$this->obj->DB_select_all("resume","`uid` in (".pylode(',',$uid).") ","uid,photo");
			$company=$this->obj->DB_select_all("company","`uid` in (".pylode(',',$uid).") ","uid,logo");
			$lietou=$this->obj->DB_select_all("lt_info","`uid` in (".pylode(',',$uid).") ","uid,photo");
			$train=$this->obj->DB_select_all("px_train","`uid` in (".pylode(',',$uid).") ","uid,logo");
			foreach ($result as $key=>$val){
				foreach ($resume as $v){
					if($val['uid']==$v['uid']&&$val['usertype']==1){
						$result[$key]['pic']=$v['photo'];
					}
				}
				foreach ($company as $v){
					if($val['uid']==$v['uid']&&$val['usertype']==2){
						$result[$key]['pic']=$v['logo'];
					}
				}
				foreach ($lietou as $v){
					if($val['uid']==$v['uid']&&$val['usertype']==3){
						$result[$key]['pic']=$v['photo'];
					}
				}
				foreach ($train as $v){
					if($val['uid']==$v['uid']&&$val['usertype']==4){
						$result[$key]['pic']=$v['logo'];
					}
				}
			}
			foreach($zixun as $key=>$value){
				foreach($result as $v){
					if($v['uid']==$value['uid']){
						$zixun[$key]['nickname']=$v['username'];
						if($v['pic']){
							$zixun[$key]['pic']=str_replace("./",$this->config['sy_weburl']."/",$v['pic']);
						}else{
							$zixun[$key]['pic']=$this->config['sy_weburl']."/".$this->config['sy_friend_icon'];
						}
					}
				}
			}
		}
		$this->yunset("zixun",$zixun);		
	}
	function teacher_action(){
		$where="`r_status`<>'2' and `status`='1'";
		if((int)$_GET['sid']){
			$urlarr['sid']=(int)$_GET['sid'];
			$where.=" and `sid`='".(int)$_GET['sid']."'";
		}
		if((int)$_GET['provinceid']){
			$urlarr['provinceid']=(int)$_GET['provinceid'];
			$where.=" and `provinceid`='".(int)$_GET['provinceid']."'";
		}
		if((int)$_GET['cityid']){
			$urlarr['cityid']=(int)$_GET['cityid'];
			$where.=" and `cityid`='".(int)$_GET['cityid']."'";
		}
		if((int)$_GET['three_cityid']){
			$urlarr['three_cityid']=(int)$_GET['three_cityid'];
			$where.=" and `threecityid`='".(int)$_GET['three_cityid']."'";
		}
		if((int)$_GET['hy']){
			$urlarr['hy']=(int)$_GET['hy'];
			$where.=" and `hy`='".(int)$_GET['hy']."'";
		}
		if($_GET['keyword']){
			$urlarr['keyword']=trim($_GET['keyword']);
			$where.=" and `name` like '%".trim($_GET['keyword'])."%'";
		}
		$urlarr['c']=$_GET['c'];
		$urlarr['a']=$_GET['a'];
		$urlarr['page']="{{page}}";
		$pageurl=Url('wap',$urlarr);
		$rows=$this->get_page("px_teacher",$where." order by `ctime` desc",$pageurl,"20");
		if(is_array($rows)){
			foreach($rows as $v){
				$uid[]=$v['uid'];
			}
            $UserinfoM=$this->MODEL('userinfo');
			$train=$UserinfoM->GetUserinfoList(array("`uid` in (".pylode(",",$uid).")"),array('field'=>"`uid`,`name`",'usertype'=>4));
			$atn=$this->obj->DB_select_all('atn',"`uid`='".$this->uid."' and `tid`<>''");
			foreach($rows as $k=>$v){
				foreach($train as $val){
					if($v['uid']==$val['uid']){
						$rows[$k]['train_name']=$val['name'];
					}
				}
				if(!empty($atn)){
					foreach ($atn as $val){
						if($v['uid']==$val['sc_uid']&&$v['id']==$val['tid']){
							$rows[$k]['atn']=1;
						}
					}
				}
			}
		}
		$this->yunset("rows",$rows);
		$CacheM=$this->MODEL('cache');
        $CacheList=$CacheM->GetCache(array('hy','city','subject'));
		$this->yunset($CacheList);
		$this->yunset("topplaceholder","搜索讲师");
		foreach($_GET as $k=>$v){
			if($k!=""){
				$searchurl[]=$k."=".$v;
			}
		}
		$searchurl=@implode("&",$searchurl);
		$this->yunset("searchurl",$searchurl);
		$this->yunset('backurl',Url('wap',array('c'=>'train')));
		$this->seo('teacher');
		$this->yuntpl(array('wap/pxteacher'));
	}
	function teamshow_action(){
		$M=$this->MODEL('train');
		if((int)$_GET['nid']){
			$teacher=$M->GetTeacherOne(array("`r_status`<>'2'",'id'=>(int)$_GET['nid']));
			if($teacher['id']==''){
				$this->ACT_msg($this->config['sy_weburl'],"没有找到相关讲师！");
			}
			$atn=$this->obj->DB_select_all('atn',"`uid`='".$this->uid."' and `tid`<>''");
			if(!empty($atn)){
				foreach ($atn as $val){
					if($teacher['uid']==$val['sc_uid']&&$teacher['id']==$val['tid']){
						$teacher['atn']=1;
					}
				}
			}
			$this->yunset("teacher",$teacher);
			$data['px_teacher_name']=$teacher['name'];
			$this->data=$data;
			$teachsub=$M->GetSubjectList(array("`r_status`<>'2'",'status'=>'1','pause_status'=>'1'," FIND_IN_SET('".(int)$_GET['nid']."',`teachid`)"));
			$this->yunset("teachsub",$teachsub);
		}
		$CacheM=$this->MODEL('cache');
		$CacheList=$CacheM->GetCache(array('hy','city','subject'));
		$this->yunset($CacheList);
		$this->yunset("headertitle","讲师详情");
		$this->seo('teamshow');
		$this->yuntpl(array('wap/pxteachershow'));
	}
	function baoming_action(){
		if($_POST['submit']){
            $M=$this->MODEL('train');
			$info=$M->GetSubjectOne(array('id'=>(int)$_POST['sid']));
			if(!$this->uid){
				$data['url']=$_SERVER['HTTP_REFERER'];
				$data['msg']='您还没有登录，请先登录！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif($this->usertype==4){
				$data['url']=$_SERVER['HTTP_REFERER'];
				$data['msg']='只有个人用户和hr才可以收藏！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}elseif($info['status']!='1'){
				$data['url']=$_SERVER['HTTP_REFERER'];
				$data['msg']='该课程还未通过审核！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}else if($info['pause_status']=='2'){
				$data['msg']='该课程已下架！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}
			$row=$M->GetBaomingOne(array('uid'=>$this->uid,'sid'=>$_POST['sid']));
			if(empty($row)){
				$baomingid=$M->AddBaoming(array('uid'=>$this->uid,'sid'=>$_POST['sid'],'s_uid'=>$_POST['s_uid'],'name'=>$_POST['name'],'phone'=>$_POST['phone'],'content'=>$_POST['content'],'ctime'=>time(),'did'=>$this->userdid));
				if($_POST['isprice']==1){
					$dingdan=mktime().rand(10000,99999);
					$data['order_id']=$dingdan;
					$data['order_price']=$_POST['price'];
					$data['order_time']=mktime();
					$data['order_state']="1";
					$data['order_remark']=$_POST['content'];
					$data['uid']=$this->uid;
					$data['did']=$this->userdid;
					$data['type']=6;
					$data['sid']=$baomingid;
					$id=$this->obj->insert_into("company_order",$data);
					if($id){
						$this->obj->member_log("培训报名，订单ID".$dingdan,88);
						$data['msg']='下单成功，请付款！';
						$data['url']=Url('wap',array('c'=>'payment','id'=>$id),'member');
						$this->layer_msg($data['msg'],9,0,$data['url'],2);
					}else{
						$data['msg']='提交失败，请重新报名课程！';
						$this->layer_msg($data['msg'],9,0,'',2);
					}
				}else{
					$data['msg']="报名成功！";
					$data['url']=$_SERVER['HTTP_REFERER'];
					 $this->layer_msg($data['msg'],9,0,$data['url'],2);
					
				}
			}else{
				$data['msg']='请不要重复报名！';
				$this->layer_msg($data['msg'],9,0,'',2);
			}
		}
	}
	function collect_action(){
		if($_POST['id']){
			if(!$this->uid){
				echo -3;die;
			}
			if($this->usertype==4){
				echo -1;die;
			}
            $M=$this->MODEL('train');
			$subject=$M->GetSubjectOne(array('id'=>(int)$_POST['id']),array('field'=>"`uid`"));
			if(empty($subject)){
				echo -2;die;
			}
			$info=$M->GetSubjectCollectOne(array('uid'=>$this->uid,'sid'=>(int)$_POST['id']));
			if(empty($info)){
				$nid=$this->obj->insert_into('px_subject_collect',array('sid'=>(int)$_POST['id'],'s_uid'=>$subject['uid'],'uid'=>$this->uid,'ctime'=>time()));
				$num=$M->GetSubjectCollectNum(array('sid'=>(int)$_POST['id']));
				echo $num;die;
			}else{
				echo 0;die;
			}
		}
	}
	function zixun_action(){
		if($_POST['submit']){
			if(!$this->uid){
				$data['msg']="您还没有登录，请先登录！";
				$data['url']=$_SERVER['HTTP_REFERER'];
				$this->layer_msg($data['msg'],9,0,$data['url'],2);
			}
			if($this->usertype==4){
				$data['msg']="只有个人和hr可以收藏！";
				$data['url']=$_SERVER['HTTP_REFERER'];
				$this->layer_msg($data['msg'],9,0,$data['url'],2);
			}
            $M=$this->MODEL('train');
			$this->obj->insert_into("px_zixun",array('uid'=>$this->uid,'sid'=>$_POST['sid'],'s_uid'=>$_POST['s_uid'],'phone'=>$_POST['phone'],'content'=>$_POST['content'],'ctime'=>time(),'did'=>$this->userdid));
			$data['msg']="咨询成功！";
			$data['url']=$_SERVER['HTTP_REFERER'];
			$this->layer_msg($data['msg'],9,0,$data['url'],2);
		}
		$urlarr['c']=$_GET['c'];
		$urlarr['a']=$_GET['a'];
		$urlarr['id']=$_GET['id'];
		$urlarr['page']="{{page}}";
		$pageurl=Url("wap",$urlarr);
		$rows=$this->get_page("px_zixun","`s_uid`='".(int)$_GET['id']."' order by `ctime` desc",$pageurl,"10");
		if(is_array($rows)){
			foreach($rows as $v){
				$uid[]=$v['uid'];
			}
			$result=$this->obj->DB_select_all("member","`uid` in (".pylode(',',$uid).") ","uid,username,usertype");
			$resume=$this->obj->DB_select_all("resume","`uid` in (".pylode(',',$uid).") ","uid,resume_photo");
 			$company=$this->obj->DB_select_all("company","`uid` in (".pylode(',',$uid).") ","uid,logo");
			$lietou=$this->obj->DB_select_all("lt_info","`uid` in (".pylode(',',$uid).") ","uid,photo");
			$train=$this->obj->DB_select_all("px_train","`uid` in (".pylode(',',$uid).") ","uid,logo");
			foreach ($result as $key=>$val){
				foreach ($resume as $v){
					if($val['uid']==$v['uid']&&$val['usertype']==1){
						$result[$key]['pic']=$v['resume_photo'];
					}
				}
				foreach ($company as $v){
					if($val['uid']==$v['uid']&&$val['usertype']==2){
						$result[$key]['pic']=$v['logo'];
					}
				}
				foreach ($lietou as $v){
					if($val['uid']==$v['uid']&&$val['usertype']==3){
						$result[$key]['pic']=$v['photo'];
					}
				}
				foreach ($train as $v){
					if($val['uid']==$v['uid']&&$val['usertype']==4){
						$result[$key]['pic']=$v['logo'];
					}
				}
			}
			
			foreach($rows as $k=>$value){
				foreach($result as $v){
					if($v['uid']==$value['uid']){
						$rows[$k]['nickname']=$v['username'];
						if($v['pic']){
							$rows[$k]['pic']=str_replace("./",$this->config['sy_weburl']."/",$v['pic']);
						}else{
							$rows[$k]['pic']=$this->config['sy_weburl']."/".$this->config['sy_friend_icon'];
						}
					}
				}
			}
		}
		$this->yunset('rows',$rows);
		$this->yunset("headertitle","留言咨询");
		$row=$this->MODEL('train')->GetTrainInfo(array("`r_status`<>'2'",'uid'=>$_GET['id']));
		$data['px_agency_name']=$row['name'];
		$this->data=$data;
		$this->seo('zixun');
		$this->yuntpl(array('wap/pxzixun'));
	}
}
?>