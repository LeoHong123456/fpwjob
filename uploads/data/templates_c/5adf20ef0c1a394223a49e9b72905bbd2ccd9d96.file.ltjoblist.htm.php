<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 11:25:05
         compiled from "/www/fpwjob/uploads/app/template/wap/ltjoblist.htm" */ ?>
<?php /*%%SmartyHeaderCode:8716400565e2e58110aaca9-73992433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5adf20ef0c1a394223a49e9b72905bbd2ccd9d96' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/ltjoblist.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8716400565e2e58110aaca9-73992433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'city_name' => 0,
    'ltjob_name' => 0,
    'ltclass_name' => 0,
    'searchurl' => 0,
    'list' => 0,
    'total' => 0,
    'pagenav' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e581112bd58_13616130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e581112bd58_13616130')) {function content_5e2e581112bd58_13616130($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_lt.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="itwap_top">
	<ul>
      
		<?php if ($_smarty_tpl->tpl_vars['config']->value['three_cityid']&&$_smarty_tpl->tpl_vars['config']->value['sy_web_site']=='1') {?>
			<li class="Substation popup" data-pop="Substation">
				<a href="javascript:void(0);" class="searchOptions_list_a">
					<span class="job_ov"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['config']->value['three_cityid']];?>
</span>
					<i class="searchOptions_icon"></i>
				</a>
			</li>
		<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['cityid']&&$_smarty_tpl->tpl_vars['config']->value['sy_web_site']=='1') {?>
			<li class="Substation popup" data-pop="Substation">
				<a href="javascript:void(0);" class="searchOptions_list_a">
					<span class="job_ov"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['config']->value['cityid']];?>
</span>
					<i class="searchOptions_icon"></i>
				</a>
			</li>
		<?php } else { ?>  
			<li class="grade popup" data-pop="grade">
				<a href="javascript:void(0);" class="searchOptions_list_a">
					<span class="job_ov">
						<?php if ($_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']]||$_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']]) {?>
							<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];?>

						<?php } elseif ($_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']]) {?>
							<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']];?>

						<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['cityid']&&$_smarty_tpl->tpl_vars['config']->value['sy_web_site']=='1') {?>
							<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['config']->value['cityid']];?>

						<?php } else { ?>
							区域
						<?php }?>
					</span>
					<i class="searchOptions_icon"></i>
				</a>
			</li>
		<?php }?>
      
	  <li class="lietou popup" data-pop="lietou"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['ltjob_name']->value[$_GET['jobone']]) {
echo $_smarty_tpl->tpl_vars['ltjob_name']->value[$_GET['jobone']];
} elseif ($_smarty_tpl->tpl_vars['ltjob_name']->value[$_GET['jobtwo']]) {
echo $_smarty_tpl->tpl_vars['ltjob_name']->value[$_GET['jobtwo']];
} else { ?>职位<?php }?><i class="itwap_top_icon"></i></a></li>
      <li class="Sortsalary popup" data-pop="Sortsalary"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['ltclass_name']->value[$_GET['exp']]) {
echo $_smarty_tpl->tpl_vars['ltclass_name']->value[$_GET['exp']];
} else { ?>经验<?php }?><i class="itwap_top_icon"></i></a></li>
      <li class="Gengduot popup" data-pop="Gengduot" style="border:none"><a href="javascript:void(0);" class="searchOptions_list_a">更多<i class="itwap_top_icon"></i></a></li>
      <input type="hidden" id="searchurl" value="<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;?>
" />
      <input type="hidden" id="waptype" value="1" /> 
     </ul>
</div>   
<div class="headhunting_job_box">
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("hy"=>"\'auto.hy\'","pr"=>"\'auto.pr\'","mun"=>"\'auto.mun\'","edu"=>"\'auto.edu\'","exp"=>"\'auto.exp\'","jobone"=>"\'auto.jobone\'","jobtwo"=>"\'auto.jobtwo\'","salary"=>"\'auto.salary\'","minsalary"=>"\'auto.minsalary\'","maxsalary"=>"\'auto.maxsalary\'","uptime"=>"\'auto.uptime\'","provinceid"=>"\'auto.provinceid\'","cityid"=>"\'auto.cityid\'","three_cityid"=>"\'auto.three_cityid\'","keyword"=>"\'auto.keyword\'","uid"=>"\'auto.uid\'","order"=>"\'lastupdate\'","ispage"=>"1","limit"=>"20","item"=>"\'list\'","islt"=>"4","nocache"=>"")
;');$list=array();
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
		 
		$list=$db->select_all("lt_job",$where.$limit);
		if(!$paramer[ispage]){
			$_smarty_tpl->tpl_vars["t_count"]->value=count($list);
		}
		
		if(is_array($list)){
			foreach($list as $v){
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
		
		
		if(is_array($list)){
			foreach($list as $k=>$v){
				if(is_array($list)){
					foreach($atn as $val){
						if($v[uid]==$val[sc_uid]){
							$list[$k][atn]=1;
						}
					}
				}
				$uid[]=$v[uid];
			}
			$ratings=$db->DB_query_all("select a.uid,b.com_pic from $db_config[def]company_statis a left join $db_config[def]company_rating b on a.rating = b.id WHERE a.uid in (".@implode(",",$uid).")","all");
			
			$joblist=$db->select_all("lt_job","`status`='1' and `uid` in (".@implode(",",$uid).") and `r_status`<>'2' order by `lastupdate` desc");
			foreach($list as $k=>$v){
				foreach($ratings as $val)
				{//猎头图标
					if($v[uid]==$val[uid]){
						if($val["com_pic"]&&file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['com_pic']))){
							$list[$k]["com_pic"]=$val["com_pic"];
						}
                        
					}
				}
				
			}
		}
		if(is_array($list)){
			foreach($list as $k=>$v){
				$list[$k] = $db->lt_array_action($v);
				//对job_name 截取
				if(intval($paramer['t_len'])>0){
					$len = intval($paramer['t_len']);
					$list[$k]['job_name'] = mb_substr($v['job_name'],0,$len,"utf-8");
				}
				if($v['usertype']==3){
                    $list[$k]["lt_url"] = Url("lietou",array("c"=>"headhunter","uid"=>$v[uid]));
					$list[$k]["job_url"] = Url("lietou",array("c"=>"jobshow","id"=>$v['id']));
					 $list[$k]["wap_lt_url"] = Url("wap",array("c"=>"ltjob","a"=>"hunter","uid"=>$v[uid]));
				}else{
                    $list[$k]["lt_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
					$list[$k]["job_url"] = Url("lietou",array("c"=>"jobcomshow","id"=>$v['id']));
					$list[$k]["wap_lt_url"] = Url("wap",array("c"=>"company","a"=>"show","id"=>$v['uid']));
				}		
				if($v['minsalary']>0&&$v['maxsalary']>0){
					$list[$k]["salary_info"] = "￥".floatval($v['minsalary'])."-".floatval($v['maxsalary'])."万";    
                }else if($v['minsalary']>0){
                    $list[$k]["salary_info"] = "￥".floatval($v['minsalary'])."万以上";  
                }else{
    				$list[$k]["salary_info"] = "面议";
    			}
                
				$list[$k]["lastupdate"] = date("Y-m-d",$v["lastupdate"]);
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
    					$list[$k]["com_name"]=$val['name'];
                       
                        $list[$k]["hy_n"]=$industry_name[$val['hy']];
                       if(!$val['logo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['logo']))){
                            $list[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
                        }else{
                            $list[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
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
                            $list[$k][hy_n] = mb_substr($hy,0,$paramer[comlen],"utf-8");
                        }
                        if(!$val['photo_big'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo_big']))){
                            $list[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_lt_icon'];
                        }else{
                            $list[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['photo_big']);
                        } 
                        
    				}
				}
			}
		} 
		if($paramer['keyword']!=""&&!empty($list)){
			addkeywords('7',$paramer['keyword']);
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>

<div class="headhunting_job_list">
<div class="headhunting_newjob_name"><a href="<?php if ($_smarty_tpl->tpl_vars['list']->value['usertype']==3) {
echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'recshow','id'=>$_smarty_tpl->tpl_vars['list']->value['id']),$_smarty_tpl);
} else {
echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'show','id'=>$_smarty_tpl->tpl_vars['list']->value['id']),$_smarty_tpl);
}?>"><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['job_name'],0,9,'utf-8');
if (strlen($_smarty_tpl->tpl_vars['list']->value['job_name'])>18) {?>..<?php }?></a><span class="itwap_job_ct_company_box_n"></span > <?php if ($_smarty_tpl->tpl_vars['list']->value['rebates']>0) {?><i class="itwap_job_ct_company_sj">赏金：<?php echo $_smarty_tpl->tpl_vars['list']->value['rebates'];
if ($_smarty_tpl->tpl_vars['config']->value['lt_rebates_name']) {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['lt_rebates_name'];?>
 <?php } else { ?>元<?php }?> </i><?php }
if ($_smarty_tpl->tpl_vars['list']->value['rec']>0) {?><i class="itwap_job_tjicon" title="推荐职位"></i><?php }?><span class="headhunting_newjob_time"><?php echo $_smarty_tpl->tpl_vars['list']->value['lastupdate'];?>
</span></div>
<div class="headhunting_newjob_info"><span class="headhunting_newjob_info_xz"><?php echo $_smarty_tpl->tpl_vars['list']->value['salary_info'];?>
</span><span class="headhunting_newjob_line">|</span><?php echo $_smarty_tpl->tpl_vars['list']->value['exp_info'];?>
经验<span class="headhunting_newjob_line">|</span><?php echo $_smarty_tpl->tpl_vars['list']->value['edu_info'];?>
学历</div>
<div class="headhunting_newjob_com">
<div class="headhunting_newjob_com_img"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['logo_n'];?>
"></div>
<div class="headhunting_newjob_com_name"><?php echo $_smarty_tpl->tpl_vars['list']->value['com_name'];?>
</div>
<div class="headhunting_newjob_com_hy"><?php echo $_smarty_tpl->tpl_vars['list']->value['cityid_info'];?>
 <?php echo $_smarty_tpl->tpl_vars['list']->value['three_cityid_info'];?>
<span class="headhunting_newjob_line">|</span><?php echo $_smarty_tpl->tpl_vars['list']->value['hy_n'];?>
</div>
</div>
</div>
  <?php } ?>
 
  <?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?>
      <?php if ($_GET['keyword']!='') {?>
      <div class="wap_member_no">没有搜索到猎头职位<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob'),$_smarty_tpl);?>
">重新搜索</a></div></div>     
      <?php } else { ?>
      <div class="wap_member_no">暂无猎头职位<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob'),$_smarty_tpl);?>
">重新搜索</a></div></div>
      
      <?php }?>
      <?php } else { ?>
      <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
      <?php }?>
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/search.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/demo.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/demo.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/publictwo.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php }} ?>
