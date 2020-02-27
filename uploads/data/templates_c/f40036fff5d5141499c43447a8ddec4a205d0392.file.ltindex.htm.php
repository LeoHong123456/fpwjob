<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-25 17:47:06
         compiled from "/www/fpwjob/uploads/app/template/wap/ltindex.htm" */ ?>
<?php /*%%SmartyHeaderCode:11363394885e54ed1a0a8212-70751303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f40036fff5d5141499c43447a8ddec4a205d0392' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/ltindex.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11363394885e54ed1a0a8212-70751303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'config_wapdomain' => 0,
    'jlist' => 0,
    'tlist' => 0,
    'ltjoblist' => 0,
    'ltlist' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e54ed1a142d19_14429058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e54ed1a142d19_14429058')) {function content_5e54ed1a142d19_14429058($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_formatpicurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.formatpicurl.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_lt.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="headhunting_banner">
    <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/images/bg.jpg">
    <div class="headhunting_banner_bg"></div>

    <div class="headhunting_index">
        <div class="headhunting_index_p">高端资源，快速拓宽候选人群</div>
        <div class="headhunting_index_tc">领先的中高级人才招聘求职平台</div>
        <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php">
            <input type="hidden" name="c" value="ltjob" />
            <div class="headhunting_index_search_box">
                <div class="headhunting_index_search_box_c">
                    <input type="text" value=""  name="keyword" class="headhunting_index_search_text" placeholder="请输入职位名称">
					<input type="submit" value=" " class="input_btn">
					<i class="index_input_btn_icon "></i>
			  </div>
            </div>
            
        </form>
    </div>
</div>

<ul class="headhunting_nav">
    <li>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob'),$_smarty_tpl);?>
">
            <i class="headhunting_nav_icon headhunting_nav_icon_job"></i>高端职位</a>
    </li>
    <li>
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'service'),$_smarty_tpl);?>
">
            <i class="headhunting_nav_icon headhunting_nav_icon_wt"></i>委托求职</a>
    </li>
    <li class="headhunting_nav_end">
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'famous'),$_smarty_tpl);?>
">
            <i class="headhunting_nav_icon headhunting_nav_icon_qy"></i>知名企业</a>
    </li>
</ul>

<?php if ($_smarty_tpl->tpl_vars['config']->value['lt_rec_rebates']=='1') {?>
<div class="headhunting_tit">
    <span class="headhunting_tit_s">悬赏招聘</span>
</div>

<div class="headhunting_tit_p">新鲜职位火速推荐，获得相应赏金</div>

<div class="clear"></div>

<ul class="headhunting_jobsj">
    <?php  $_smarty_tpl->tpl_vars['jlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jlist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("rebates"=>"1","order"=>"\'lastupdate\'","ispage"=>"1","limit"=>"6","item"=>"\'jlist\'","nocache"=>"")
;');$jlist=array();
        include_once  PLUS_PATH."/ltjob.cache.php";
		include_once  PLUS_PATH."/lthy.cache.php";
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
        $cache_array = $db->cacheget();
        $industry_name	= $cache_array["industry_name"];
		$where = " `status`='1' and `zp_status`='0' and `r_status`<>'2'";
		//是否属于分站下
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid]=$config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
		}
		//关键字
		if($paramer["keyword"]){
			$where.=" AND (`com_name` like '%".$paramer["keyword"]."%' or `job_name` like '%".$paramer["keyword"]."%')";
		}
		/*//期望行业大类
		if($paramer["hyclass"]){
			$hyid=$lthy_type[$paramer["hyclass"]];
			foreach($hyid as $v)
			{
				$hyarr[]= "FIND_IN_SET('".$v."',qw_hy)";
			}
			$hyarr=@implode(" or ",$hyarr);
			$where.=" AND ($hyarr)";
		}
		//期望行业子类
		if($paramer["qw_hy"]){
			$where.= " AND FIND_IN_SET('".$paramer["qw_hy"]."',qw_hy)";
		}
		//期望行业
		if($paramer["hyid"]){
			$hyid=@explode(",",$paramer["hyid"]);
			foreach($hyid as $v){
				$hyall[].= "FIND_IN_SET('".$v."',qw_hy)";
			}
			$where .= " and (".@implode(" or ",$hyall).")";
		}*/

		//擅长职位
		if($paramer["jobid"]){
			$jobid=@explode(",",$paramer["jobid"]);
			foreach($jobid as $v){
				$joball[].= "`jobone`='".$v."'";
				$joball[].= "`jobtwo`='".$v."'";
			}
			$where .= " and (".@implode(" or ",$joball).")";
		}
		 
		if($paramer["citys"]){
			$citys=@explode(",",$paramer["citys"]);
			foreach($citys as $v){
				$cityall[].= "`provinceid`='".$v."'";
				$cityall[].= "`cityid`='".$v."'";
				$cityall[].= "`three_cityid`='".$v."'";
			}
			$where .= " and (".@implode(" or ",$cityall).")";
		}
		//职位大类
		if($paramer["jobone"]){
			$where.=" AND `jobone`='".$paramer["jobone"]."'";
		}
		//职位子类
		if($paramer["jobtwo"]){
			$where.=" AND `jobtwo`='".$paramer["jobtwo"]."'";
		}
		//年薪
		if($paramer["salary"]){
			$where.=" AND `salary`='".$paramer["salary"]."'";
		}
		if($paramer[minsalary]&&$paramer[maxsalary]){
			$where.= "AND `minsalary`>=".intval($paramer[minsalary])." and `maxsalary`<=".intval($paramer[maxsalary])."";
		}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
			$where.= " AND `minsalary`>=".intval($paramer[minsalary])."";
		}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
			$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])."";
		}
        //公司所属行业
		if($paramer["hy"]){
			$where.=" AND `hy`='".$paramer["hy"]."'";
		}
        //公司性质
		if($paramer["pr"]){
			$where.=" AND `pr`='".$paramer["pr"]."'";
		}
        //公司规模
		if($paramer["mun"]){
			$where.=" AND `mun`='".$paramer["mun"]."'";
		}
        //工作经验
		if($paramer["exp"]){
			$where.=" AND `exp`='".$paramer["exp"]."'";
		}
        //学历要求
		if($paramer["edu"]){
			$where.=" AND `edu`='".$paramer["edu"]."'";
		}
		//发布时间
		if($paramer["uptime"]){
			if($paramer["uptime"]>0){
				$time=time()-86400*30*$paramer["uptime"];
				$where.=" AND `lastupdate`>$time";
			}else{
				$time=time()-86400*30*12;
				$where.=" AND `lastupdate`<$time";
			}
		}
		//推荐
		if($paramer["rec"]){
			$where.=" AND `rec`='".$paramer["rec"]."'";
		}
		//城市
		if($paramer["provinceid"]){
			$where.=" AND `provinceid`='".$paramer["provinceid"]."'";
		}
		if($paramer["cityid"]){
			$where.=" AND `cityid`='".$paramer["cityid"]."'";
		}
		if($paramer["three_cityid"]){
			$where.=" AND `three_cityid`='".$paramer["three_cityid"]."'";
		}
		//用户uid
		if($paramer["uid"]){
			$where.=" AND `uid`='".$paramer["uid"]."'";
		}
		if($paramer["rebates"]=='1'){
			$where.=" AND `rebates`<>''";
		}
		if($paramer["limit"]){
			$limit= " limit $paramer[limit]";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"lt_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"1",$_smarty_tpl);
         
		}
		//排序字段（默认按照uid排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order]";
		}else{
			$where .= " ORDER BY  `lastupdate`  ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer["sort"]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " DESC ";
		}
		 
		$jlist=$db->select_all("lt_job",$where.$limit);
		if(!$paramer[ispage]){
			$_smarty_tpl->tpl_vars["t_count"]->value=count($jlist);
		}
		
		if(is_array($jlist)){
			foreach($jlist as $v){
				if($v['usertype']==2){
					$comuid[]=$v['uid'];
    			}
                if($v['usertype']==3){
					$comuid[]=$v['uid'];
    			}
    		}
    	}
		$comlist=$db->select_all("company","`uid` IN (".@implode(',',$comuid).")","`uid`,`name`,`hy`,`logo`");
        $ltlist=$db->select_all("lt_info","`uid` IN (".@implode(',',$comuid).")","`uid`,`hy`,`photo_big`");
		
		
		if(is_array($jlist)){
			foreach($jlist as $k=>$v){
				if(is_array($jlist)){
					foreach($atn as $val){
						if($v[uid]==$val[sc_uid]){
							$jlist[$k][atn]=1;
						}
					}
				}
				$uid[]=$v[uid];
			}
			$ratings=$db->DB_query_all("select a.uid,b.com_pic from $db_config[def]company_statis a left join $db_config[def]company_rating b on a.rating = b.id WHERE a.uid in (".@implode(",",$uid).")","all");
			
			$joblist=$db->select_all("lt_job","`status`='1' and `uid` in (".@implode(",",$uid).") and `r_status`<>'2' order by `lastupdate` desc");
			foreach($jlist as $k=>$v){
				foreach($ratings as $val)
				{//猎头图标
					if($v[uid]==$val[uid]){
						if($val["com_pic"]&&file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['com_pic']))){
							$jlist[$k]["com_pic"]=$val["com_pic"];
						}
                        
					}
				}
				
			}
		}
		if(is_array($jlist)){
			foreach($jlist as $k=>$v){
				$jlist[$k] = $db->lt_array_action($v);
				//对job_name 截取
				if(intval($paramer['t_len'])>0){
					$len = intval($paramer['t_len']);
					$jlist[$k]['job_name'] = mb_substr($v['job_name'],0,$len,"utf-8");
				}
				if($v['usertype']==3){
                    $jlist[$k]["lt_url"] = Url("lietou",array("c"=>"headhunter","uid"=>$v[uid]));
					$jlist[$k]["job_url"] = Url("lietou",array("c"=>"jobshow","id"=>$v['id']));
					 $jlist[$k]["wap_lt_url"] = Url("wap",array("c"=>"ltjob","a"=>"hunter","uid"=>$v[uid]));
				}else{
                    $jlist[$k]["lt_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
					$jlist[$k]["job_url"] = Url("lietou",array("c"=>"jobcomshow","id"=>$v['id']));
					$jlist[$k]["wap_lt_url"] = Url("wap",array("c"=>"company","a"=>"show","id"=>$v['uid']));
				}		
				if($v['minsalary']>0&&$v['maxsalary']>0){
					$jlist[$k]["salary_info"] = "￥".floatval($v['minsalary'])."-".floatval($v['maxsalary'])."万";    
                }else if($v['minsalary']>0){
                    $jlist[$k]["salary_info"] = "￥".floatval($v['minsalary'])."万以上";  
                }else{
    				$jlist[$k]["salary_info"] = "面议";
    			}
                
				$jlist[$k]["lastupdate"] = date("Y-m-d",$v["lastupdate"]);
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
    					$jlist[$k]["com_name"]=$val['name'];
                       
                        $jlist[$k]["hy_n"]=$industry_name[$val['hy']];
                       if(!$val['logo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['logo']))){
                            $jlist[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
                        }else{
                            $jlist[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
                        } 
    				}
				}
                foreach($ltlist as $val){
					if($v['uid']==$val['uid']){
                        if($val[hy]!=""){
                           $hy="";
                           $hyarr=@explode(",",$val[hy]);
                            foreach($hyarr as $vall){
                                $hy.=$lthy_name[$vall]." ";
                            }
                            $jlist[$k][hy_n] = mb_substr($hy,0,$paramer[comlen],"utf-8");
                        }
                        if(!$val['photo_big'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo_big']))){
                            $jlist[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_lt_icon'];
                        }else{
                            $jlist[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['photo_big']);
                        } 
                        
    				}
				}
			}
		} 
		if($paramer['keyword']!=""&&!empty($jlist)){
			addkeywords('7',$paramer['keyword']);
		}$jlist = $jlist; if (!is_array($jlist) && !is_object($jlist)) { settype($jlist, 'array');}
foreach ($jlist as $_smarty_tpl->tpl_vars['jlist']->key => $_smarty_tpl->tpl_vars['jlist']->value) {
$_smarty_tpl->tpl_vars['jlist']->_loop = true;
?>
    <li>
        <div class="headhunting_jobsj_box">
        <a href="<?php if ($_smarty_tpl->tpl_vars['jlist']->value['usertype']==3) {
echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'recshow','id'=>$_smarty_tpl->tpl_vars['jlist']->value['id']),$_smarty_tpl);
} else {
echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'show','id'=>$_smarty_tpl->tpl_vars['jlist']->value['id']),$_smarty_tpl);
}?>">
            <div class="headhunting_jobsj_c">
                <span class="headhunting_jobsj_n">
                    <?php if ($_smarty_tpl->tpl_vars['jlist']->value['rebates']>'9999') {?> <?php echo $_smarty_tpl->tpl_vars['jlist']->value['rebates'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['jlist']->value['rebates'];
}
if ($_smarty_tpl->tpl_vars['config']->value['lt_rebates_name']) {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['lt_rebates_name'];?>
 <?php } else { ?>元<?php }?>
                </span>赏金
            </div>
            <div class="headhunting_jobsj_jobname"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['job_name'];?>
</div>
            <div class="headhunting_jobsj_comname"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['com_name'];?>
</div>
            <div class="headhunting_jobsj_tj">
                <?php if ($_smarty_tpl->tpl_vars['config']->value['lt_rec_rebates']=="1") {?>
                <span class="headhunting_jobsj_tj_a">推荐</span>
                <?php }?>
            </div>
            </a>
        </div>
    </li>
    <?php } ?>
</ul>
<div class="clear"></div>
<div class="headhunting_index_more">
    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob'),$_smarty_tpl);?>
">+ 查看更多</a>
</div>

<?php }?>
<div class="clear"></div>

<div class="headhunting_index_bg">
    <div class="headhunting_tit">
        <span class="headhunting_tit_s">推荐职位</span>
    </div>
    <div class="headhunting_tit_p">精选职位任您挑选，快速解决就业难题</div>

    <div class="clear"></div>
    <ul class="headhunting_tj_job">
        <?php  $_smarty_tpl->tpl_vars['tlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tlist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("rec"=>"1","order"=>"\'lastupdate\'","ispage"=>"1","limit"=>"6","item"=>"\'tlist\'","nocache"=>"")
;');$tlist=array();
        include_once  PLUS_PATH."/ltjob.cache.php";
		include_once  PLUS_PATH."/lthy.cache.php";
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
        $cache_array = $db->cacheget();
        $industry_name	= $cache_array["industry_name"];
		$where = " `status`='1' and `zp_status`='0' and `r_status`<>'2'";
		//是否属于分站下
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid]=$config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
		}
		//关键字
		if($paramer["keyword"]){
			$where.=" AND (`com_name` like '%".$paramer["keyword"]."%' or `job_name` like '%".$paramer["keyword"]."%')";
		}
		/*//期望行业大类
		if($paramer["hyclass"]){
			$hyid=$lthy_type[$paramer["hyclass"]];
			foreach($hyid as $v)
			{
				$hyarr[]= "FIND_IN_SET('".$v."',qw_hy)";
			}
			$hyarr=@implode(" or ",$hyarr);
			$where.=" AND ($hyarr)";
		}
		//期望行业子类
		if($paramer["qw_hy"]){
			$where.= " AND FIND_IN_SET('".$paramer["qw_hy"]."',qw_hy)";
		}
		//期望行业
		if($paramer["hyid"]){
			$hyid=@explode(",",$paramer["hyid"]);
			foreach($hyid as $v){
				$hyall[].= "FIND_IN_SET('".$v."',qw_hy)";
			}
			$where .= " and (".@implode(" or ",$hyall).")";
		}*/

		//擅长职位
		if($paramer["jobid"]){
			$jobid=@explode(",",$paramer["jobid"]);
			foreach($jobid as $v){
				$joball[].= "`jobone`='".$v."'";
				$joball[].= "`jobtwo`='".$v."'";
			}
			$where .= " and (".@implode(" or ",$joball).")";
		}
		 
		if($paramer["citys"]){
			$citys=@explode(",",$paramer["citys"]);
			foreach($citys as $v){
				$cityall[].= "`provinceid`='".$v."'";
				$cityall[].= "`cityid`='".$v."'";
				$cityall[].= "`three_cityid`='".$v."'";
			}
			$where .= " and (".@implode(" or ",$cityall).")";
		}
		//职位大类
		if($paramer["jobone"]){
			$where.=" AND `jobone`='".$paramer["jobone"]."'";
		}
		//职位子类
		if($paramer["jobtwo"]){
			$where.=" AND `jobtwo`='".$paramer["jobtwo"]."'";
		}
		//年薪
		if($paramer["salary"]){
			$where.=" AND `salary`='".$paramer["salary"]."'";
		}
		if($paramer[minsalary]&&$paramer[maxsalary]){
			$where.= "AND `minsalary`>=".intval($paramer[minsalary])." and `maxsalary`<=".intval($paramer[maxsalary])."";
		}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
			$where.= " AND `minsalary`>=".intval($paramer[minsalary])."";
		}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
			$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])."";
		}
        //公司所属行业
		if($paramer["hy"]){
			$where.=" AND `hy`='".$paramer["hy"]."'";
		}
        //公司性质
		if($paramer["pr"]){
			$where.=" AND `pr`='".$paramer["pr"]."'";
		}
        //公司规模
		if($paramer["mun"]){
			$where.=" AND `mun`='".$paramer["mun"]."'";
		}
        //工作经验
		if($paramer["exp"]){
			$where.=" AND `exp`='".$paramer["exp"]."'";
		}
        //学历要求
		if($paramer["edu"]){
			$where.=" AND `edu`='".$paramer["edu"]."'";
		}
		//发布时间
		if($paramer["uptime"]){
			if($paramer["uptime"]>0){
				$time=time()-86400*30*$paramer["uptime"];
				$where.=" AND `lastupdate`>$time";
			}else{
				$time=time()-86400*30*12;
				$where.=" AND `lastupdate`<$time";
			}
		}
		//推荐
		if($paramer["rec"]){
			$where.=" AND `rec`='".$paramer["rec"]."'";
		}
		//城市
		if($paramer["provinceid"]){
			$where.=" AND `provinceid`='".$paramer["provinceid"]."'";
		}
		if($paramer["cityid"]){
			$where.=" AND `cityid`='".$paramer["cityid"]."'";
		}
		if($paramer["three_cityid"]){
			$where.=" AND `three_cityid`='".$paramer["three_cityid"]."'";
		}
		//用户uid
		if($paramer["uid"]){
			$where.=" AND `uid`='".$paramer["uid"]."'";
		}
		if($paramer["rebates"]=='1'){
			$where.=" AND `rebates`<>''";
		}
		if($paramer["limit"]){
			$limit= " limit $paramer[limit]";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"lt_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"1",$_smarty_tpl);
         
		}
		//排序字段（默认按照uid排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order]";
		}else{
			$where .= " ORDER BY  `lastupdate`  ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer["sort"]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " DESC ";
		}
		 
		$tlist=$db->select_all("lt_job",$where.$limit);
		if(!$paramer[ispage]){
			$_smarty_tpl->tpl_vars["t_count"]->value=count($tlist);
		}
		
		if(is_array($tlist)){
			foreach($tlist as $v){
				if($v['usertype']==2){
					$comuid[]=$v['uid'];
    			}
                if($v['usertype']==3){
					$comuid[]=$v['uid'];
    			}
    		}
    	}
		$comlist=$db->select_all("company","`uid` IN (".@implode(',',$comuid).")","`uid`,`name`,`hy`,`logo`");
        $ltlist=$db->select_all("lt_info","`uid` IN (".@implode(',',$comuid).")","`uid`,`hy`,`photo_big`");
		
		
		if(is_array($tlist)){
			foreach($tlist as $k=>$v){
				if(is_array($tlist)){
					foreach($atn as $val){
						if($v[uid]==$val[sc_uid]){
							$tlist[$k][atn]=1;
						}
					}
				}
				$uid[]=$v[uid];
			}
			$ratings=$db->DB_query_all("select a.uid,b.com_pic from $db_config[def]company_statis a left join $db_config[def]company_rating b on a.rating = b.id WHERE a.uid in (".@implode(",",$uid).")","all");
			
			$joblist=$db->select_all("lt_job","`status`='1' and `uid` in (".@implode(",",$uid).") and `r_status`<>'2' order by `lastupdate` desc");
			foreach($tlist as $k=>$v){
				foreach($ratings as $val)
				{//猎头图标
					if($v[uid]==$val[uid]){
						if($val["com_pic"]&&file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['com_pic']))){
							$tlist[$k]["com_pic"]=$val["com_pic"];
						}
                        
					}
				}
				
			}
		}
		if(is_array($tlist)){
			foreach($tlist as $k=>$v){
				$tlist[$k] = $db->lt_array_action($v);
				//对job_name 截取
				if(intval($paramer['t_len'])>0){
					$len = intval($paramer['t_len']);
					$tlist[$k]['job_name'] = mb_substr($v['job_name'],0,$len,"utf-8");
				}
				if($v['usertype']==3){
                    $tlist[$k]["lt_url"] = Url("lietou",array("c"=>"headhunter","uid"=>$v[uid]));
					$tlist[$k]["job_url"] = Url("lietou",array("c"=>"jobshow","id"=>$v['id']));
					 $tlist[$k]["wap_lt_url"] = Url("wap",array("c"=>"ltjob","a"=>"hunter","uid"=>$v[uid]));
				}else{
                    $tlist[$k]["lt_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
					$tlist[$k]["job_url"] = Url("lietou",array("c"=>"jobcomshow","id"=>$v['id']));
					$tlist[$k]["wap_lt_url"] = Url("wap",array("c"=>"company","a"=>"show","id"=>$v['uid']));
				}		
				if($v['minsalary']>0&&$v['maxsalary']>0){
					$tlist[$k]["salary_info"] = "￥".floatval($v['minsalary'])."-".floatval($v['maxsalary'])."万";    
                }else if($v['minsalary']>0){
                    $tlist[$k]["salary_info"] = "￥".floatval($v['minsalary'])."万以上";  
                }else{
    				$tlist[$k]["salary_info"] = "面议";
    			}
                
				$tlist[$k]["lastupdate"] = date("Y-m-d",$v["lastupdate"]);
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
    					$tlist[$k]["com_name"]=$val['name'];
                       
                        $tlist[$k]["hy_n"]=$industry_name[$val['hy']];
                       if(!$val['logo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['logo']))){
                            $tlist[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
                        }else{
                            $tlist[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
                        } 
    				}
				}
                foreach($ltlist as $val){
					if($v['uid']==$val['uid']){
                        if($val[hy]!=""){
                           $hy="";
                           $hyarr=@explode(",",$val[hy]);
                            foreach($hyarr as $vall){
                                $hy.=$lthy_name[$vall]." ";
                            }
                            $tlist[$k][hy_n] = mb_substr($hy,0,$paramer[comlen],"utf-8");
                        }
                        if(!$val['photo_big'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo_big']))){
                            $tlist[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_lt_icon'];
                        }else{
                            $tlist[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['photo_big']);
                        } 
                        
    				}
				}
			}
		} 
		if($paramer['keyword']!=""&&!empty($tlist)){
			addkeywords('7',$paramer['keyword']);
		}$tlist = $tlist; if (!is_array($tlist) && !is_object($tlist)) { settype($tlist, 'array');}
foreach ($tlist as $_smarty_tpl->tpl_vars['tlist']->key => $_smarty_tpl->tpl_vars['tlist']->value) {
$_smarty_tpl->tpl_vars['tlist']->_loop = true;
?>
        <li>
            <div class="headhunting_tj_jobbox">
                <a href="<?php if ($_smarty_tpl->tpl_vars['tlist']->value['usertype']==3) {
echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'recshow','id'=>$_smarty_tpl->tpl_vars['tlist']->value['id']),$_smarty_tpl);
} else {
echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'show','id'=>$_smarty_tpl->tpl_vars['tlist']->value['id']),$_smarty_tpl);
}?>"> 
                	<div class="headhunting_tj_jobname">
                 		<span class="job_n">  <?php echo $_smarty_tpl->tpl_vars['tlist']->value['job_name'];?>
</span>
                	</div>
                 	<div class="headhunting_tj_jobxz"><?php echo $_smarty_tpl->tpl_vars['tlist']->value['salary_info'];?>
</div>
                	<div class="headhunting_tj_jobinfo"><?php echo $_smarty_tpl->tpl_vars['tlist']->value['cityid_info'];?>
 / <?php echo $_smarty_tpl->tpl_vars['tlist']->value['exp_info'];?>
经验 / <?php echo $_smarty_tpl->tpl_vars['tlist']->value['edu_info'];?>
学历</div>
                </a>
            </div>
        </li>
        <?php } ?>
    </ul>
    <div class="clear"></div>
    <div class="headhunting_index_more">
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob'),$_smarty_tpl);?>
">+ 查看更多</a>
    </div>
</div>

<div class="headhunting_tit">
    <span class="headhunting_tit_s">最新职位</span>
</div>
<div class="headhunting_tit_p">每日精选优质职位，满足你的个性要求</div>

<div class="clear"></div>

<ul class="headhunting_newjob_list">
    <?php  $_smarty_tpl->tpl_vars['ltjoblist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ltjoblist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("comlen"=>"10","item"=>"\'ltjoblist\'","ispage"=>"1","limit"=>"3","nocache"=>"")
;');$ltjoblist=array();
        include_once  PLUS_PATH."/ltjob.cache.php";
		include_once  PLUS_PATH."/lthy.cache.php";
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
        $cache_array = $db->cacheget();
        $industry_name	= $cache_array["industry_name"];
		$where = " `status`='1' and `zp_status`='0' and `r_status`<>'2'";
		//是否属于分站下
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid]=$config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
		}
		//关键字
		if($paramer["keyword"]){
			$where.=" AND (`com_name` like '%".$paramer["keyword"]."%' or `job_name` like '%".$paramer["keyword"]."%')";
		}
		/*//期望行业大类
		if($paramer["hyclass"]){
			$hyid=$lthy_type[$paramer["hyclass"]];
			foreach($hyid as $v)
			{
				$hyarr[]= "FIND_IN_SET('".$v."',qw_hy)";
			}
			$hyarr=@implode(" or ",$hyarr);
			$where.=" AND ($hyarr)";
		}
		//期望行业子类
		if($paramer["qw_hy"]){
			$where.= " AND FIND_IN_SET('".$paramer["qw_hy"]."',qw_hy)";
		}
		//期望行业
		if($paramer["hyid"]){
			$hyid=@explode(",",$paramer["hyid"]);
			foreach($hyid as $v){
				$hyall[].= "FIND_IN_SET('".$v."',qw_hy)";
			}
			$where .= " and (".@implode(" or ",$hyall).")";
		}*/

		//擅长职位
		if($paramer["jobid"]){
			$jobid=@explode(",",$paramer["jobid"]);
			foreach($jobid as $v){
				$joball[].= "`jobone`='".$v."'";
				$joball[].= "`jobtwo`='".$v."'";
			}
			$where .= " and (".@implode(" or ",$joball).")";
		}
		 
		if($paramer["citys"]){
			$citys=@explode(",",$paramer["citys"]);
			foreach($citys as $v){
				$cityall[].= "`provinceid`='".$v."'";
				$cityall[].= "`cityid`='".$v."'";
				$cityall[].= "`three_cityid`='".$v."'";
			}
			$where .= " and (".@implode(" or ",$cityall).")";
		}
		//职位大类
		if($paramer["jobone"]){
			$where.=" AND `jobone`='".$paramer["jobone"]."'";
		}
		//职位子类
		if($paramer["jobtwo"]){
			$where.=" AND `jobtwo`='".$paramer["jobtwo"]."'";
		}
		//年薪
		if($paramer["salary"]){
			$where.=" AND `salary`='".$paramer["salary"]."'";
		}
		if($paramer[minsalary]&&$paramer[maxsalary]){
			$where.= "AND `minsalary`>=".intval($paramer[minsalary])." and `maxsalary`<=".intval($paramer[maxsalary])."";
		}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
			$where.= " AND `minsalary`>=".intval($paramer[minsalary])."";
		}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
			$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])."";
		}
        //公司所属行业
		if($paramer["hy"]){
			$where.=" AND `hy`='".$paramer["hy"]."'";
		}
        //公司性质
		if($paramer["pr"]){
			$where.=" AND `pr`='".$paramer["pr"]."'";
		}
        //公司规模
		if($paramer["mun"]){
			$where.=" AND `mun`='".$paramer["mun"]."'";
		}
        //工作经验
		if($paramer["exp"]){
			$where.=" AND `exp`='".$paramer["exp"]."'";
		}
        //学历要求
		if($paramer["edu"]){
			$where.=" AND `edu`='".$paramer["edu"]."'";
		}
		//发布时间
		if($paramer["uptime"]){
			if($paramer["uptime"]>0){
				$time=time()-86400*30*$paramer["uptime"];
				$where.=" AND `lastupdate`>$time";
			}else{
				$time=time()-86400*30*12;
				$where.=" AND `lastupdate`<$time";
			}
		}
		//推荐
		if($paramer["rec"]){
			$where.=" AND `rec`='".$paramer["rec"]."'";
		}
		//城市
		if($paramer["provinceid"]){
			$where.=" AND `provinceid`='".$paramer["provinceid"]."'";
		}
		if($paramer["cityid"]){
			$where.=" AND `cityid`='".$paramer["cityid"]."'";
		}
		if($paramer["three_cityid"]){
			$where.=" AND `three_cityid`='".$paramer["three_cityid"]."'";
		}
		//用户uid
		if($paramer["uid"]){
			$where.=" AND `uid`='".$paramer["uid"]."'";
		}
		if($paramer["rebates"]=='1'){
			$where.=" AND `rebates`<>''";
		}
		if($paramer["limit"]){
			$limit= " limit $paramer[limit]";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"lt_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"1",$_smarty_tpl);
         
		}
		//排序字段（默认按照uid排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order]";
		}else{
			$where .= " ORDER BY  `lastupdate`  ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer["sort"]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " DESC ";
		}
		 
		$ltjoblist=$db->select_all("lt_job",$where.$limit);
		if(!$paramer[ispage]){
			$_smarty_tpl->tpl_vars["t_count"]->value=count($ltjoblist);
		}
		
		if(is_array($ltjoblist)){
			foreach($ltjoblist as $v){
				if($v['usertype']==2){
					$comuid[]=$v['uid'];
    			}
                if($v['usertype']==3){
					$comuid[]=$v['uid'];
    			}
    		}
    	}
		$comlist=$db->select_all("company","`uid` IN (".@implode(',',$comuid).")","`uid`,`name`,`hy`,`logo`");
        $ltlist=$db->select_all("lt_info","`uid` IN (".@implode(',',$comuid).")","`uid`,`hy`,`photo_big`");
		
		
		if(is_array($ltjoblist)){
			foreach($ltjoblist as $k=>$v){
				if(is_array($ltjoblist)){
					foreach($atn as $val){
						if($v[uid]==$val[sc_uid]){
							$ltjoblist[$k][atn]=1;
						}
					}
				}
				$uid[]=$v[uid];
			}
			$ratings=$db->DB_query_all("select a.uid,b.com_pic from $db_config[def]company_statis a left join $db_config[def]company_rating b on a.rating = b.id WHERE a.uid in (".@implode(",",$uid).")","all");
			
			$joblist=$db->select_all("lt_job","`status`='1' and `uid` in (".@implode(",",$uid).") and `r_status`<>'2' order by `lastupdate` desc");
			foreach($ltjoblist as $k=>$v){
				foreach($ratings as $val)
				{//猎头图标
					if($v[uid]==$val[uid]){
						if($val["com_pic"]&&file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['com_pic']))){
							$ltjoblist[$k]["com_pic"]=$val["com_pic"];
						}
                        
					}
				}
				
			}
		}
		if(is_array($ltjoblist)){
			foreach($ltjoblist as $k=>$v){
				$ltjoblist[$k] = $db->lt_array_action($v);
				//对job_name 截取
				if(intval($paramer['t_len'])>0){
					$len = intval($paramer['t_len']);
					$ltjoblist[$k]['job_name'] = mb_substr($v['job_name'],0,$len,"utf-8");
				}
				if($v['usertype']==3){
                    $ltjoblist[$k]["lt_url"] = Url("lietou",array("c"=>"headhunter","uid"=>$v[uid]));
					$ltjoblist[$k]["job_url"] = Url("lietou",array("c"=>"jobshow","id"=>$v['id']));
					 $ltjoblist[$k]["wap_lt_url"] = Url("wap",array("c"=>"ltjob","a"=>"hunter","uid"=>$v[uid]));
				}else{
                    $ltjoblist[$k]["lt_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
					$ltjoblist[$k]["job_url"] = Url("lietou",array("c"=>"jobcomshow","id"=>$v['id']));
					$ltjoblist[$k]["wap_lt_url"] = Url("wap",array("c"=>"company","a"=>"show","id"=>$v['uid']));
				}		
				if($v['minsalary']>0&&$v['maxsalary']>0){
					$ltjoblist[$k]["salary_info"] = "￥".floatval($v['minsalary'])."-".floatval($v['maxsalary'])."万";    
                }else if($v['minsalary']>0){
                    $ltjoblist[$k]["salary_info"] = "￥".floatval($v['minsalary'])."万以上";  
                }else{
    				$ltjoblist[$k]["salary_info"] = "面议";
    			}
                
				$ltjoblist[$k]["lastupdate"] = date("Y-m-d",$v["lastupdate"]);
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
    					$ltjoblist[$k]["com_name"]=$val['name'];
                       
                        $ltjoblist[$k]["hy_n"]=$industry_name[$val['hy']];
                       if(!$val['logo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['logo']))){
                            $ltjoblist[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
                        }else{
                            $ltjoblist[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
                        } 
    				}
				}
                foreach($ltlist as $val){
					if($v['uid']==$val['uid']){
                        if($val[hy]!=""){
                           $hy="";
                           $hyarr=@explode(",",$val[hy]);
                            foreach($hyarr as $vall){
                                $hy.=$lthy_name[$vall]." ";
                            }
                            $ltjoblist[$k][hy_n] = mb_substr($hy,0,$paramer[comlen],"utf-8");
                        }
                        if(!$val['photo_big'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo_big']))){
                            $ltjoblist[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_lt_icon'];
                        }else{
                            $ltjoblist[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['photo_big']);
                        } 
                        
    				}
				}
			}
		} 
		if($paramer['keyword']!=""&&!empty($ltjoblist)){
			addkeywords('7',$paramer['keyword']);
		}$ltjoblist = $ltjoblist; if (!is_array($ltjoblist) && !is_object($ltjoblist)) { settype($ltjoblist, 'array');}
foreach ($ltjoblist as $_smarty_tpl->tpl_vars['ltjoblist']->key => $_smarty_tpl->tpl_vars['ltjoblist']->value) {
$_smarty_tpl->tpl_vars['ltjoblist']->_loop = true;
?>
    <li> 
     <a href="<?php if ($_smarty_tpl->tpl_vars['ltjoblist']->value['usertype']==3) {
echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'recshow','id'=>$_smarty_tpl->tpl_vars['ltjoblist']->value['id']),$_smarty_tpl);
} else {
echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'show','id'=>$_smarty_tpl->tpl_vars['ltjoblist']->value['id']),$_smarty_tpl);
}?>">
        <div class="headhunting_newjob_name">
          <?php echo $_smarty_tpl->tpl_vars['ltjoblist']->value['job_name'];?>

            <span class="headhunting_newjob_time"><?php echo $_smarty_tpl->tpl_vars['ltjoblist']->value['lastupdate'];?>
</span>
        </div>
        <div class="headhunting_newjob_info">
            <span class="headhunting_newjob_info_xz"><?php echo $_smarty_tpl->tpl_vars['ltjoblist']->value['salary_info'];?>
</span>
            <span class="headhunting_newjob_line">|</span><?php echo $_smarty_tpl->tpl_vars['ltjoblist']->value['exp_info'];?>
经验
            <span class="headhunting_newjob_line">|</span><?php echo $_smarty_tpl->tpl_vars['ltjoblist']->value['edu_info'];?>
学历
        </div>
        <div class="headhunting_newjob_com">
            <div class="headhunting_newjob_com_img">
                <img src="<?php echo $_smarty_tpl->tpl_vars['ltjoblist']->value['logo_n'];?>
">
            </div>
            <div class="headhunting_newjob_com_name">
             
                    <?php echo $_smarty_tpl->tpl_vars['ltjoblist']->value['com_name'];?>

                
				 <?php if ($_smarty_tpl->tpl_vars['ltjoblist']->value['com_pic']!='') {?><img src=".<?php echo $_smarty_tpl->tpl_vars['ltjoblist']->value['com_pic'];?>
" width="15"><?php }?>
          
            </div>
            <div class="headhunting_newjob_com_hy">
                <?php echo $_smarty_tpl->tpl_vars['ltjoblist']->value['cityid_info'];?>

                <span class="headhunting_newjob_line">|</span><?php echo $_smarty_tpl->tpl_vars['ltjoblist']->value['hy_n'];?>

            </div>
        </div>
        </a>
    </li>
    <?php } ?>
</ul>

<div class="clear"></div>
<div class="headhunting_index_more">
    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob'),$_smarty_tpl);?>
">+ 查看更多</a>
</div>

<div class="headhunting_index_bg">
    <div class="headhunting_tit">委托求职</div>
    <div class="headhunting_tit_p">找工作不随便，这里是野心与实力的汇聚</div>

    <div class="clear"></div>
    <ul class="headhunting_userlist">
        <?php  $_smarty_tpl->tpl_vars['ltlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ltlist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("ispage"=>"1","limit"=>"4","item"=>"\'ltlist\'","nocache"=>"")
;');$ltlist=array();
		include PLUS_PATH."/ltjob.cache.php";
		include PLUS_PATH."/city.cache.php";
		include PLUS_PATH."/lthy.cache.php";
        include PLUS_PATH."/lt.cache.php";
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where="`yyzz_status`='1' and `r_status`<>'2' and `com_name`<>''";
		//是否属于分站下
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid]=$config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
		}
		//关键字
		if($paramer["keyword"]){
			$where1[]="`realname` LIKE '%".$paramer[keyword]."%'";
			foreach($ltjob_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$jobid[]=$k;
				}
			}
			if(is_array($jobid)){
				foreach($jobid as $value){
					$class[]="FIND_IN_SET('".$value."',job)";
				}
				$where1[]=@implode(" or ",$class);
			}
			foreach($lthy_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$hyid[]=$k;
				}
			}
			if(is_array($hyid)){
				foreach($hyid as $value){
					$class[]="FIND_IN_SET('".$value."',hy)";
				}
				$where1[]=@implode(" or ",$class);
			}
			$where.=" AND (".@implode(" or ",$where1).")";
		}
		//认证ID
		if($paramer["rzid"]){
			$where.=" AND `rzid`='".$paramer["rzid"]."'";
		}
		//推荐
		if($paramer["rec"]){
			$where.=" AND `rec`='".$paramer["rec"]."'";
		}
		//擅长行业大类
		if($paramer["hyclass"]){
			$hyid=$lthy_type[$paramer["hyclass"]];
			foreach($hyid as $v){
				$hyarr[]= "FIND_IN_SET('".$v."',hy)";
			}
			$hyarr=@implode(" or ",$hyarr);
			$where.=" AND ($hyarr)";
		}
		//城市
		if($paramer["provinceid"]){
			$where.= " AND `provinceid`=$paramer[provinceid]";
		}
		if($paramer["cityid"]){
			$where.= " AND `cityid`=$paramer[cityid]";
		}
		if($paramer["three_cityid"]){
			$where.= " AND `three_cityid`=$paramer[three_cityid]";
		}
		//擅长行业子类
		if($paramer["hy"]){
			$where.= " AND FIND_IN_SET('".$paramer["hy"]."',hy)";
		}
		//擅长职位大类
		if($paramer["jobclass"]){
			$jobid=$ltjob_type[$paramer["jobclass"]];
			foreach($jobid as $v){
				$jobarr[]= "FIND_IN_SET('".$v."',job)";
			}
			$jobarr=@implode(" or ",$jobarr);
			$where.=" AND ($jobarr)";
		}
		//擅长职位子类
		if($paramer["job"]){
			$where.= " AND FIND_IN_SET('".$paramer["job"]."',job)";
		}
		//擅长行业
		if($paramer["hyid"]){
			$hyid=@explode(",",$paramer["hyid"]);
			foreach($hyid as $v){
				$hyall[].= "FIND_IN_SET('".$v."',hy)";
			}
			$where .= " and (".@implode(" or ",$hyall).")";
		}
		//擅长职位
		if($paramer["jobid"]){
			$jobid=@explode(",",$paramer["jobid"]);
			foreach($jobid as $v){
				$joball[].= "FIND_IN_SET('".$v."',job)";
			}
			$where .= " and (".@implode(" or ",$joball).")";
		}
		
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"lt_info",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"1",$_smarty_tpl);
		}
		//排序字段（默认按照uid排序）
		if($paramer[order]){
			if($paramer[order]=="rztime"){
				$where .= " ORDER BY rz_time ";
			}else{
				$where .= " ORDER BY $paramer[order] ";
			}
		}else{
			$where .= " ORDER BY `uid` ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer["sort"]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " DESC ";
		}
		$ltlist=$db->select_all("lt_info",$where.$limit);
		if($_COOKIE[usertype]==1){
			$atn=$db->select_all("atn","`uid`='".$_COOKIE[uid]."'");
		}
		if(is_array($ltlist)){
			foreach($ltlist as $k=>$v){
                $ltlist[$k][exp_info]=$ltclass_name[$v[exp]];
				$ltlist[$k][cityone_info]=$city_name[$v[provinceid]];
				$ltlist[$k][citytwo_info]=$city_name[$v[cityid]];
				if(is_array($ltlist)){
					foreach($atn as $val){
						if($v[uid]==$val[sc_uid]){
							$ltlist[$k][atn]=1;
						}
					}
				}
				$uid[]=$v[uid];
			}
			$ratings=$db->DB_query_all("select a.uid,b.com_pic from $db_config[def]lt_statis a left join $db_config[def]company_rating b on a.rating = b.id WHERE a.uid in (".@implode(",",$uid).")","all");
			$joblist=$db->select_all("lt_job","`status`='1' and `uid` in (".@implode(",",$uid).") and `r_status`<>'2' order by `lastupdate` desc");
			foreach($ltlist as $k=>$v){
				foreach($ratings as $val)
				{//猎头图标
					if($v[uid]==$val[uid]){
						if($val["com_pic"]&&file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['com_pic']))){
							$ltlist[$k]["com_pic"]=str_replace("./",$config[sy_weburl]."/",$val["com_pic"]);;
						}
                        
					}
				}
				$i=0;$job="";
				foreach($joblist as $val)
				{//猎头最新职位
					if($v[uid]==$val[uid]){
						$job_url = Url("lietou",array("c"=>"jobshow","id"=>$val[id]));
						$job.="<a href='".$job_url."'>".$val[job_name]."</a> ";
						$i++;$val[job_url]=$job_url;
                        $ltlist[$k]["ltjoblist"][]=$val;
					}
				}
				$ltlist[$k]["jobnum"]=$i;
				$ltlist[$k]["joblist"]=$job;
				$jobsc="";
				if($v[job]!=""){//擅长职位
					$job=@explode(",",$v[job]);
					foreach($job as $val){
						$jobsc.=$ltjob_name[$val]." ";
					}
				}
				$ltlist[$k]["job"]=$jobsc;
				$hy="";
				if($v[hy]!=""){//擅长行业
					$hyarr=@explode(",",$v[hy]);
					foreach($hyarr as $val){
						$hy.=$lthy_name[$val]." ";
					}
				}
				$ltlist[$k]["hy"]=$hy;
				$ltlist[$k]["name_url"] = Url("lietou",array("c"=>"headhunter","uid"=>$v[uid]));//猎头链接
				if(!$v['photo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$v['photo']))){
				    $ltlist[$k]['photo'] = $config['sy_weburl']."/".$config['sy_lt_icon'];
				}else{
					$ltlist[$k]['photo'] = str_replace("./",$config['sy_weburl']."/",$v['photo']);
				} 
				if(!$v['photo_big'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$v['photo_big']))){
				    $ltlist[$k]['photo_big'] = $config['sy_weburl']."/".$config['sy_lt_icon'];
				}else{
					$ltlist[$k]['photo_big'] = str_replace("./",$config['sy_weburl']."/",$v['photo_big']);
				} 
			}
		}
		if($paramer[keyword]!=""&&!empty($ltlist))
		{
			addkeywords('6',$paramer[keyword]);
		}$ltlist = $ltlist; if (!is_array($ltlist) && !is_object($ltlist)) { settype($ltlist, 'array');}
foreach ($ltlist as $_smarty_tpl->tpl_vars['ltlist']->key => $_smarty_tpl->tpl_vars['ltlist']->value) {
$_smarty_tpl->tpl_vars['ltlist']->_loop = true;
?>
        <li>  <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'hunter','uid'=>$_smarty_tpl->tpl_vars['ltlist']->value['uid']),$_smarty_tpl);?>
">
            <div class="headhunting_userlist_box">
                <div class="headhunting_userlist_pic">
                  
                        <img src="<?php echo smarty_function_formatpicurl(array('path'=>$_smarty_tpl->tpl_vars['ltlist']->value['photo_big'],'type'=>'ltlogo'),$_smarty_tpl);?>
">
                  
                </div>
                <div class="headhunting_userlist_name"><?php echo $_smarty_tpl->tpl_vars['ltlist']->value['realname'];
if ($_smarty_tpl->tpl_vars['ltlist']->value['com_pic']!='') {?> <img src="<?php echo $_smarty_tpl->tpl_vars['ltlist']->value['com_pic'];?>
" width="14"><?php }?></div>
                <div class="headhunting_userlist_boxhy"><?php echo mb_substr($_smarty_tpl->tpl_vars['ltlist']->value['hy'],0,12,'utf-8');?>
</div>
                <div class="headhunting_userlist_sj">
                    <span class="headhunting_userlist_box_n">
                        <i class=""><?php echo count($_smarty_tpl->tpl_vars['ltlist']->value['ltjoblist']);?>
</i>职位</span>
                    <span class="headhunting_userlist_box_n">
                        <i class=""><?php echo $_smarty_tpl->tpl_vars['ltlist']->value['ant_num'];?>
</i>粉丝</span>
                    <span class="headhunting_userlist_box_n">
                        <i class=""><?php echo $_smarty_tpl->tpl_vars['ltlist']->value['exp_info'];?>
</i>年限</span>
                </div>
                <div class="headhunting_userlist_wt">
                   <span class="wt_name">委托简历</span>
                </div>
            </div> </a>
        </li>
        <?php } ?>
    </ul>

    <div class="clear"></div>
    <div class="headhunting_index_more">
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'service'),$_smarty_tpl);?>
">+ 查看更多</a>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
