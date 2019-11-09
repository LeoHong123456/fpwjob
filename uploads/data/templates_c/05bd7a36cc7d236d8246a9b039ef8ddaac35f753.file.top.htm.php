<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:50:06
         compiled from "/www/fpwjob/uploads/app/template/default/index/top.htm" */ ?>
<?php /*%%SmartyHeaderCode:8745459825dc51e2ebb8898-05216169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05bd7a36cc7d236d8246a9b039ef8ddaac35f753' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/index/top.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8745459825dc51e2ebb8898-05216169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'key' => 0,
    'job_jia' => 0,
    'lt_list' => 0,
    'com_list' => 0,
    'job_list' => 0,
    'user_list' => 0,
    'keylist' => 0,
    'a_list' => 0,
    'job_jias' => 0,
    'member_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51e2ec81f21_39544202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51e2ec81f21_39544202')) {function content_5dc51e2ec81f21_39544202($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/top.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_content">
<div class="current_Location icon">
您当前的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > 排行榜
</div>
<div class="clear"></div>
<div class="post_Top_box fr">
<div class="post_Top_box_title Top_box_line2"><strong>推荐职位</strong></div>
<ul class="post_Top_box_list">
<?php  $_smarty_tpl->tpl_vars['job_jia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_jia']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("limit"=>"10","order"=>"\'lastupdate\'","rec"=>"1","namelen"=>"8","state"=>"1","item"=>"\'job_jia\'","key"=>"\'key\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		if(isUseSphinx()){
			include_once(LIB_PATH."sphinx.class.php");
			
			$where = array();

			$where[] = array("setFilterRange", "edate", $time, 9999999999);
			$where[] = array("setFilter", "state", array(1));
			if($paramer[sdate]){
				$where[] = array("setFilterRange", "sdate", strtotime("-".intval($paramer[sdate])." day",time()), 9999999999);
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where[] = array("setFilter", "uid", array($paramer[uid]));
			}

			//是否推荐职位
			if($paramer[rec]){
				$where[] = array("setFilterRange", "rec_time", $time, 9999999999);
			}

			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $job_uid);
			}

			//取不包含当前id的职位
			if($paramer[noid]){
				$where[] = array("setFilter", "id", array($paramer[noid]), true);
			}

			//是否被锁定
			if($paramer[r_status]){
				$where[] = array("setFilter", "r_status", array(2));
			}else{
				$where[] = array("setFilter", "r_status", array(1));
			}

			//是否下架职位
			if($paramer[status]){
				$where[] = array("setFilter", "status", array(1));
			}else{
				$where[] = array("setFilter", "status", array(0));
			}

			//公司体制
			if($paramer[pr]){
				$where[] = array("setFilter", "pr", array($paramer[pr]));
			}

			//公司行业分类
			if($paramer['hy']){
				$where[] = array("setFilter", "hy", array($paramer[hy]));
			}

			//职位大类
			if($paramer[job1]){
				$where[] = array("setFilter", "job1", array($paramer[job1]));
			}
			//职位子类
			if($paramer[job1_son]){
				$where[] = array("setFilter", "job1_son", array($paramer[job1_son]));
			}
			//职位三级分类
			if($paramer[job_post]){
				$job_post = explode(",", $paramer[job_post]);
				$where[] = array("setFilter", "job_post", $job_post);
			}

			//您可能感兴趣的职位--个人会员中心
			// if($paramer['jobwhere']){
			// 	$where[] = array("setFilter", "jobwhere", array($paramer[jobwhere]));
			// }

			//职位分类综合查询
			$queryStr = array();
			if($paramer['jobids']){
				$queryStr [] = "(@job1 = $paramer[jobids] | @job1_son = $paramer[jobids] | @job_post = $paramer[jobids] )";
			}

			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$queryStr [] = "(@job1 in ($paramer[jobin]) | @job1_son in ($paramer[jobin]) | @job_post in ($paramer[jobin]) )";
			}

			//城市大类
			if($paramer[provinceid]){
				$where[] = array("setFilter", "provinceid", array($paramer[provinceid]));
			}
			//城市子类
			if($paramer['cityid']){
				$cityid = explode(",", $paramer[cityid]);
				$where[] = array("setFilter", "cityid", $cityid);
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$three_cityid = explode(",", $paramer[three_cityid]);
				$where[] = array("setFilter", "three_cityid", $three_cityid);
			}
			
			//学历
			if($paramer[edu]){
				$where[] = array("setFilter", "edu", array($paramer[edu]));
			}
			//工作经验
			if($paramer[exp]){
				$where[] = array("setFilter", "exp", array($paramer[exp]));
			}
			//到岗时间
			if($paramer[report]){
				$where[] = array("setFilter", "report", array($paramer[report]));
			}
			//职位性质
			if($paramer[type]){
				$where[] = array("setFilter", "type", array($paramer[type]));
			}
			//性别
			if($paramer[sex]){
				$where[] = array("setFilter", "sex", array($paramer[sex]));
			}
			//应届生
			if($paramer[is_graduate]){
				$where[] = array("setFilter", "is_graduate", array($paramer[is_graduate]));
			}
			//公司规模
			if($paramer[mun]){
				$where[] = array("setFilter", "mun", array($paramer[mun]));
			}

			if($paramer[minsalary]){
				$where[] = array("setFilterRange", "maxsalary", intval($paramer[minsalary]), 99999999);
				
			}
			if($paramer[maxsalary]){
				$where[] = array("setFilterRange", "minsalary", 0, intval($paramer[maxsalary]));
			}

            //福利待遇
            $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $welfareid);
			}

			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$queryStr [] = "(@provinceid in ($paramer[cityin]) | @cityid in ($paramer[cityin]) | @three_cityid in ($paramer[cityin]) )";
			}

			//紧急招聘urgent
			if($paramer[urgent]){
				$where[] = array("setFilterRange", "urgent_time", $time, 9999999999);
			}

			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			    $where[] = array("setFilterRange", "lastupdate", $beginToday, 9999999999);
        		}else{
        			$time=time();
    				$uptime = $time-($paramer[uptime]*86400);
    				$where[] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
        		}
			}

			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$queryStr [] = "(@com_name ($paramer[comname]) )";
			}

			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where[] = array("setFilter", "com_provinceid", array($paramer[com_pro]));
			}

			//按照关键字匹配职位名称、企业名称等
			if($paramer[keyword]){
				include  PLUS_PATH."/city.cache.php";
				$cityid = array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(count($cityid) > 0){
					$cityid = implode(",", $cityid);
					$queryStr [] = "(@provinceid in ($cityid) | @cityid in ($cityid) | @three_cityid in ($cityid) )";
				}

				$where["keywords"] = $paramer[keyword];
			}

			//多选职位
			if($paramer["job"]){
				$paraJob = explode(",", $paramer[job]);
				$where[] = array("setFilter", "job_post", $paraJob);
			}

			//竞价招聘
			if($paramer[bid]){
				$where[] = array("setFilterRange", "xsdate", $time, 9999999999);
			}

			if(count($queryStr) > 0){
				$where["queryStr"] = $queryStr;
			}
			
			$sphinx = new sphinx();
			$sphinx->setFieldWeights(array("name"=>2,"com_name"=>1));

			//排序字段默认为更新时间
			$orderField = "lastupdate";
			if($paramer[order] && $paramer[order]!="lastdate"){
				$orderField = str_replace("'","",$paramer[order]);
			}

			//排序规则 默认为倒序
			$orderType = "DESC";
			if(strtoupper(trim($paramer[sort])) == "ASC"){
				$orderType = "ASC";
			}

			$sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

			if($paramer[ispage]){
				$limitArr = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
				$ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company_job");
			}
			else if($paramer[limit]){
				$ids = $sphinx->getIds($where, 0, $paramer[limit], "company_job");
			}
			else{
				$ids = $sphinx->getIds($where, 0, 20, "company_job");
			}
						
			if(count(ids) > 0){
				$ids = implode(",", $ids);
				$where = "id in ($ids) order by field(id, $ids) ";
			}
			else{
				$where = "0";
			}
			
			$limit = "";
		}//end if($config["useSphinx"])
		else{
			if($paramer[sdate]){
				$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
			}else{
				$where = "`state`=1";
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where .= " AND `uid` = '$paramer[uid]'";
			}
			//是否推荐职位
			if($paramer[rec]){
				
				$where.=" AND `rec_time`>=".time();
				
			}
			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$job_uid).")";
			}
			//取不包含当前id的职位
			if($paramer[noid]){
				$where.= " and `id`<>$paramer[noid]";
			}
			//是否被锁定
			if($paramer[r_status]){
				$where.= " and `r_status`=2";
			}else{
				$where.= " and `r_status`=1";
			}
			//是否下架职位
			if($paramer[status]){
				$where.= " and `status`='1'";
			}else{
				$where.= " and `status`='0'";
			}
			//公司体制
			if($paramer[pr]){
				$where .= " AND `pr` =$paramer[pr]";
			}
			//公司行业分类
			if($paramer['hy']){
				$where .= " AND `hy` = $paramer[hy]";
			} 
			//职位大类
			if($paramer[job1]){
				$where .= " AND `job1` = $paramer[job1]";
			}
			//职位子类
			if($paramer[job1_son]){
				$where .= " AND `job1_son` = $paramer[job1_son]";
			}
			//职位三级分类
			if($paramer[job_post]){
				$where .= " AND (`job_post` IN ($paramer[job_post]))";
			}
			//您可能感兴趣的职位--个人会员中心
			if($paramer['jobwhere']){
				$where .=" and ".$paramer['jobwhere'];
			}
			//职位分类综合查询
			if($paramer['jobids']){
				$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
			}
			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
			}
			//城市大类
			if($paramer[provinceid]){
				$where .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer['cityid']){
				$where .= " AND (`cityid` IN ($paramer[cityid]))";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
			}
			if($paramer['cityin']){
				$where .= " AND `three_cityid` IN ($paramer[cityin])";
			}
			//学历
			if($paramer[edu]){
				$where .= " AND `edu` = $paramer[edu]";
			}
			//工作经验
			if($paramer[exp]){
				$where .= " AND `exp` = $paramer[exp]";
			}
			//到岗时间
			if($paramer[report]){
				$where .= " AND `report` = $paramer[report]";
			}
			//职位性质
			if($paramer[type]){
				$where .= " AND `type` = $paramer[type]";
			}
			//性别
			if($paramer[sex]){
				$where .= " AND `sex` = $paramer[sex]";
			}
			//应届生
			if($paramer[is_graduate]){
				$where .= " AND `is_graduate` = $paramer[is_graduate]";
			}
			//公司规模
			if($paramer[mun]){
				$where .= " AND `mun` = $paramer[mun]";
			}
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary])."))";
				/*$where.= " and case when minsalary>0 then `minsalary`<= ".intval($paramer[minsalary]). " end and case when maxsalary>0 then `maxsalary`<= ".intval($paramer[maxsalary])." else minsalary<".intval($paramer[maxsalary])." and maxsalary =0 end ";*/
	    	}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`>=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`!=0 and  `maxsalary`=0))";
				/*$where.= " AND `minsalary`>=".intval($paramer[minsalary])." and minsalary>0";*/
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and maxsalary=0) 
							or (`minsalary`=0 and  `maxsalary`!=0)
							)";
				/*$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])." and maxsalary>0";*/
			}
	         //福利待遇
	         $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
			}
			//紧急招聘urgent
			if($paramer[urgent]){
				$where.=" AND `urgent_time`>".time();
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND lastupdate>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND lastupdate>$uptime";
	    		}
			}
			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
			}
			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
			}
			//按照职位名称匹配
			if($paramer[keyword]){
				$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
				$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
				include  PLUS_PATH."/city.cache.php";
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(is_array($cityid)){
					foreach($cityid as $value){
						$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
					}
					$where1[]=@implode(" or ",$class);
				}
				$where.=" AND (".@implode(" or ",$where1).")";
			}
			//多选职位
			if($paramer["job"]){
				$where.=" AND `job_post` in ($paramer[job])";
			}
			//置顶招聘
			if($paramer[bid]){
				if($config[joblist_top]!=1){
					$paramer[limit] = 5;
				}
				$where.="  and `xsdate`>'".time()."'";
			} 
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
			}

			//查询条数
			$limit = '';
			if($paramer[limit]){

				$limit = " limit ".$paramer[limit];
			}

			if($paramer[ispage]){
				$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
			}

			//排序字段默认为更新时间
            //置顶设置为随机5条时，随机查询
            if($paramer[bid] && $paramer[limit]){
                $order = " ORDER BY rand() ";
            }else{
                if($paramer[order] && $paramer[order]!="lastdate"){
    				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
    			}else{
    				$order = " ORDER BY `lastupdate` ";
    			}
            }
			//排序规则 默认为倒序
			if($paramer[sort]){
				$sort = $paramer[sort];
			}else{
				$sort = " DESC";
			} 
			$where.=$order.$sort;
		}
		
		
			
		$job_jia = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($job_jia) && !empty($job_jia)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_jia as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0 ||!file_exists(str_replace('./',APP_PATH,$value['logo']))){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			    
			//$comrat = $db->select_all("company_rating","`display`='1'");
			if($paramer[bid]){
				$noids=array();
			}	
			foreach($job_jia as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_jia[$key]);
					continue;
				}else{
					$job_jia[$key] = $db->array_action($value,$cache_array);
					$job_jia[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_jia[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_jia[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_jia[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_jia[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_jia[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_jia[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_jia[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_jia[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_jia[$key][logo] =$r_uid[$value['uid']][logo];
					$job_jia[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_jia[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_jia[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_jia[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_jia[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_jia[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_jia[$key]['redtime'] =1;
					}else{
						$job_jia[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$job_jia[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_jia[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_jia[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_jia[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_jia[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_jia[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job_jia[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job_jia[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_jia[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$job_jia[$key][ratlogo] = $v[com_pic];
							}else{
								$job_jia[$key][ratlogo] ='';
							}
							$job_jia[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_jia[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_jia[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_jia[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jia[$key][name_n]);
						$job_jia[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jia[$key][com_n]);
						$job_jia[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_jia[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($job_jia)){
				if($paramer[keyword]!=""&&!empty($job_jia)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job_jia = $job_jia; if (!is_array($job_jia) && !is_object($job_jia)) { settype($job_jia, 'array');}
foreach ($job_jia as $_smarty_tpl->tpl_vars['job_jia']->key => $_smarty_tpl->tpl_vars['job_jia']->value) {
$_smarty_tpl->tpl_vars['job_jia']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['job_jia']->key;
?>
<li><span <?php if ($_smarty_tpl->tpl_vars['key']->value+1<='3') {?>class="Top_box_span"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span>
<a href="<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_url'];?>
" target="_blank" style="width:110px;"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['name'];?>
</a>
<u class="fl"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_city_one'];?>
</u>
<em><?php if ($_smarty_tpl->tpl_vars['job_jia']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['job_jia']->value['job_salary'];?>
</em></li>
<?php } ?>
</ul>
</div>
<div class="post_Top_box fr">
<div class="post_Top_box_title Top_box_line3"><strong>猎头职位悬赏</strong></div>
<ul class="post_Top_box_list">
<?php  $_smarty_tpl->tpl_vars['lt_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lt_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("limit"=>"10","order"=>"\'rebates\'","rebates"=>"1","t_len"=>"20","item"=>"\'lt_list\'","key"=>"\'key\'","nocache"=>"")
;');$lt_list=array();
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
		 
		$lt_list=$db->select_all("lt_job",$where.$limit);
		if(!$paramer[ispage]){
			$_smarty_tpl->tpl_vars["t_count"]->value=count($lt_list);
		}
		
		if(is_array($lt_list)){
			foreach($lt_list as $v){
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
		
		
		if(is_array($lt_list)){
			foreach($lt_list as $k=>$v){
				if(is_array($lt_list)){
					foreach($atn as $val){
						if($v[uid]==$val[sc_uid]){
							$lt_list[$k][atn]=1;
						}
					}
				}
				$uid[]=$v[uid];
			}
			$ratings=$db->DB_query_all("select a.uid,b.com_pic from $db_config[def]company_statis a left join $db_config[def]company_rating b on a.rating = b.id WHERE a.uid in (".@implode(",",$uid).")","all");
			
			$joblist=$db->select_all("lt_job","`status`='1' and `uid` in (".@implode(",",$uid).") and `r_status`<>'2' order by `lastupdate` desc");
			foreach($lt_list as $k=>$v){
				foreach($ratings as $val)
				{//猎头图标
					if($v[uid]==$val[uid]){
						if($val["com_pic"]&&file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['com_pic']))){
							$lt_list[$k]["com_pic"]=$val["com_pic"];
						}
                        
					}
				}
				
			}
		}
		if(is_array($lt_list)){
			foreach($lt_list as $k=>$v){
				$lt_list[$k] = $db->lt_array_action($v);
				//对job_name 截取
				if(intval($paramer['t_len'])>0){
					$len = intval($paramer['t_len']);
					$lt_list[$k]['job_name'] = mb_substr($v['job_name'],0,$len,"utf-8");
				}
				if($v['usertype']==3){
                    $lt_list[$k]["lt_url"] = Url("lietou",array("c"=>"headhunter","uid"=>$v[uid]));
					$lt_list[$k]["job_url"] = Url("lietou",array("c"=>"jobshow","id"=>$v['id']));
					 $lt_list[$k]["wap_lt_url"] = Url("wap",array("c"=>"ltjob","a"=>"hunter","uid"=>$v[uid]));
				}else{
                    $lt_list[$k]["lt_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
					$lt_list[$k]["job_url"] = Url("lietou",array("c"=>"jobcomshow","id"=>$v['id']));
					$lt_list[$k]["wap_lt_url"] = Url("wap",array("c"=>"company","a"=>"show","id"=>$v['uid']));
				}		
				if($v['minsalary']>0&&$v['maxsalary']>0){
					$lt_list[$k]["salary_info"] = "￥".floatval($v['minsalary'])."-".floatval($v['maxsalary'])."万";    
                }else if($v['minsalary']>0){
                    $lt_list[$k]["salary_info"] = "￥".floatval($v['minsalary'])."万以上";  
                }else{
    				$lt_list[$k]["salary_info"] = "面议";
    			}
                
				$lt_list[$k]["lastupdate"] = date("Y-m-d",$v["lastupdate"]);
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
    					$lt_list[$k]["com_name"]=$val['name'];
                       
                        $lt_list[$k]["hy_n"]=$industry_name[$val['hy']];
                       if(!$val['logo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['logo']))){
                            $lt_list[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
                        }else{
                            $lt_list[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
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
                            $lt_list[$k][hy_n] = mb_substr($hy,0,$paramer[comlen],"utf-8");
                        }
                        if(!$val['photo_big'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo_big']))){
                            $lt_list[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_lt_icon'];
                        }else{
                            $lt_list[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['photo_big']);
                        } 
                        
    				}
				}
			}
		} 
		if($paramer['keyword']!=""&&!empty($lt_list)){
			addkeywords('7',$paramer['keyword']);
		}$lt_list = $lt_list; if (!is_array($lt_list) && !is_object($lt_list)) { settype($lt_list, 'array');}
foreach ($lt_list as $_smarty_tpl->tpl_vars['lt_list']->key => $_smarty_tpl->tpl_vars['lt_list']->value) {
$_smarty_tpl->tpl_vars['lt_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['lt_list']->key;
?>
<li><span <?php if ($_smarty_tpl->tpl_vars['key']->value+1<='3') {?>class="Top_box_span"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span>
<a href="<?php echo $_smarty_tpl->tpl_vars['lt_list']->value['job_url'];?>
" target="_blank" style="width:110px;"><?php echo mb_substr($_smarty_tpl->tpl_vars['lt_list']->value['job_name'],0,8,'utf-8');?>
</a>
<u class="fl"><?php echo mb_substr($_smarty_tpl->tpl_vars['lt_list']->value['com_name'],0,8,'utf-8');?>
</u>
<em><?php echo $_smarty_tpl->tpl_vars['lt_list']->value['rebates'];
if ($_smarty_tpl->tpl_vars['config']->value['lt_rebates_name']) {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['lt_rebates_name'];?>
 <?php } else { ?>元<?php }?></em></li>
<?php } ?>
</ul>
</div>

<div class="post_Top_box fr" style="margin-right:0px;">
<div class="post_Top_box_title Top_box_line"><strong>最新公司</strong></div>
<ul class="post_Top_box_list">
<?php  $_smarty_tpl->tpl_vars['com_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['com_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("limit"=>"10","order"=>"\'lastupdate\'","item"=>"\'com_list\'","key"=>"\'key\'","nocache"=>"")
;');$com_list=array();
		
		$time = time();
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr['arr'];
		$Purl =  $ParamerArr['purl'];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		//是否属于分站下
		if($config['sy_web_site']=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$paramer['hy']=$config['hyclass'];
			}
		} 
		
		$cache_array = $db->cacheget();

		//使用sphinx查询代替mysql查询（查询出id/uid,再到mysql查询内容）
		if(isUseSphinx()){
			$sphinx = new sphinx();
            $where = array();
            $queryStr = array();

            $where [] = array("setFilter", "name_not_empty", array(1));
            $where [] = array("setFilter", "hy_not_empty", array(1));
    
			//关键字
			if($paramer['keyword']){
				$where["keywords"] = $paramer["keyword"];
			}				
			//公司行业
			if($paramer['hy']){
				$where [] = array("setFilter", "hy", array($paramer["hy"]));
			}
			//公司体制
			if($paramer['pr']){
				$where [] = array("setFilter", "pr", array($paramer["pr"]));
			}
			//公司规模
			if($paramer['mun']){
				$where [] = array("setFilter", "mun", array($paramer["mun"]));
			}

			$comclass_name = $cache_array["comclass_name"];
            //福利待遇
			if($paramer[welfare]){
		    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company","`name`<>'' and `hy`<>'' and FIND_IN_SET('".$welfarename."',`welfare`)","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				if($welfareid){
					$where [] = array("setFilter", "uid", $welfareid);
				}
			}

			//公司地点
			if($paramer['provinceid']){
				$where [] = array("setFilter", "provinceid", array($paramer["provinceid"]) );
			}
			//城市二级子类
			if($paramer['cityid']){
				$queryStr[] = "(@provinceid = $paramer[cityid] or @cityid = $paramer[cityid])";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$queryStr[] = "(@provinceid = $paramer[three_cityid] or @cityid = $paramer[three_cityid] or @three_cityid = @paramer[three_cityid])";
			}

			//所在地 市区
			if($paramer['cityin']){
				$queryStr[] = "(@provinceid in ($paramer[cityin]) or @cityid in ($paramer[cityin]) or @three_cityid in ($paramer[cityin]) )";
			}
			//联系人不为空
			if($paramer['linkman']){
				$where [] = array("setFilter", "linkman_not_empty", array(1));
			}
			//联系人电话不为空
			if($paramer['linktel']){
				$where [] = array("setFilter", "linktel_not_empty", array(1));
			}
			//联系人邮箱不为空
			if($paramer['linkmail']){
				$where [] = array("setFilter", "linkmail_not_empty", array(1));
			}
			//是否有企业LOGO
			if($paramer['logo']){
				$where [] = array("setFilter", "logo_not_empty", array(1));
			}
			//是否被锁定
			if($paramer['r_status']){
				$where [] = array("setFilter", "r_status", array($paramer["r_status"]));
			}else{
				$where [] = array("setFilter", "r_status", array(2), true);
			}
			//是否已经验证
			if($paramer['cert']){
				$where [] = array("setFilter", "yyzz_status", array(1));
			}
			//更新时间区间
			if($paramer['uptime']){
				$uptime = $time-$paramer['uptime']*3600;
				$where [] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
			}
			if($paramer['jobtime']){
				$where [] = array("setFilter", "jobtime_not_empty", array(1));
			}

			//推荐，猎头页面展示
			if($paramer['rec']){
				$Purl["rec"]='1';
				$where [] = array("setFilter", "rec", array(1));
				$where [] = array("setFilterRange", "hottime", time(), 9999999999);
			}
			
			//排序字段默认为更新时间
              $orderField = "jobtime";
              if($paramer[order]){
                $orderField = str_replace("'","",$paramer[order]);
              }
              //排序规则 默认为倒序
              $orderType = "DESC";
              if(strtoupper(trim($paramer[sort])) == "ASC"){
                $orderType = "ASC";
              }
        
              $sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");
        
        			if($paramer[ispage]){
        				if($paramer['rec']==1&&$Purl["m"]=="lietou"){
        					$islt = "1";		
        				}else{
        					$islt = "0";		
        				}
        
                $limitArr = PageNav($paramer,$_GET,"company",$where,$Purl,"", $islt,$_smarty_tpl);
                $ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company");
              }
              else if($paramer[limit]){
                $ids = $sphinx->getIds($where, 0, $paramer[limit], "company");
              }
              else{
                $ids = $sphinx->getIds($where, 0, 20, "company");
              }
                    
              if(count(ids) > 0){
                $ids = implode(",", $ids);
                $where = "uid in ($ids) order by field(uid, $ids) ";
              }
              else{
                $where = "0";
              }
              
              $limit = "";
			
		}//end if(isUseSphinx())
		else{
			$where="`name`<>''"; 
		
			/*if(!is_array($this->company_rating)){
				$comrat = $db->select_all($db_config['def']."company_rating");
				$this->company_rating=$comrat;
			}else{
				$comrat = $this->company_rating;
			}*/
			//关键字
			if($paramer['keyword']){
				$where.=" AND `name` LIKE '%".$paramer['keyword']."%'";
			}				
			//公司行业
			if($paramer['hy']){
				$where .= " AND `hy` = '".$paramer['hy']."'";
			}
			//公司体制
			if($paramer['pr']){
				$where .= " AND `pr` = '".$paramer['pr']."'";
			}
			//公司规模
			if($paramer['mun']){
				$where .= " AND `mun` = '".$paramer['mun']."'";
			}
	        $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
	        //福利待遇
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company","`name`<>'' and `hy`<>'' and FIND_IN_SET('".$welfarename."',`welfare`)","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//公司地点
			if($paramer['provinceid']){
				$where .= " AND `provinceid` = '".$paramer['provinceid']."'";
			}
			//城市二级子类
			if($paramer['cityid']){
				$where .= " AND (`provinceid` = '".$paramer['cityid']."' OR `cityid` = '".$paramer['cityid']."')";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`provinceid` = '".$paramer['three_cityid']."' OR `three_cityid` = '".$paramer['three_cityid']."')";
			}
			//所在地 市区
			if($paramer['cityin']){
				$where .= " AND (`provinceid` in(".$paramer['cityin'].") OR `cityid` in(".$paramer['cityin'].") or `three_cityid` in(".$paramer['cityin']."))";
			}
			//联系人不为空
			if($paramer['linkman']){
				$where .= " AND `linkman`<>''";
			}
			//联系人电话不为空
			if($paramer['linktel']){
				$where .= " AND `linktel`<>''";
			}
			//联系人邮箱不为空
			if($paramer['linkmail']){
				$where .= " AND `linkmail`<>''";
			}
			//是否有企业LOGO
			if($paramer['logo']){
				$where .= " AND `logo`<>''";
			}
			//是否被锁定
			if($paramer['r_status']){
				$where .= " AND `r_status`='".$paramer['r_status']."'";
			}else{
				$where .= " AND `r_status`<>'2'";
			}
			//是否已经验证
			if($paramer['cert']){
				$where .= " AND `yyzz_status`='1'";
			}
			//更新时间区间
			if($paramer['uptime']){
				$uptime = $time-$paramer['uptime']*3600;
				$where.=" AND `lastupdate`>'".$uptime."'";
			}
			if($paramer['jobtime']){
				$where.=" AND `jobtime`<>''";
			}
			//推荐，猎头页面展示
			
			if($paramer['rec']){
				$Purl["rec"]='1';
				$where.=" AND `rec`='1' AND `hottime`>'".time()."'";
			}
			//查询条数
			if($paramer['limit']){
				$limit=" limit ".$paramer['limit'];
			}
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer['where']){
				$where = $paramer['where'];
			}
			//处理类别字段
			$cache_array = $db->cacheget();
			if($paramer['ispage']){ 
				if($paramer['rec']==1&&$Purl["m"]=="lietou"){
					$limit = PageNav($paramer,$_GET,"company",$where,$Purl,"","1",$_smarty_tpl);
				}else{
					$limit = PageNav($paramer,$_GET,"company",$where,$Purl,"","0",$_smarty_tpl);
				}
			}
			//排序字段默认为更新时间
			if($paramer['order']){
				if($paramer['order']=="lastＵpdate"){
					$paramer['order']="lastupdate";
				}
				$order = " ORDER BY `".$paramer['order']."`  ";
			}else{
				$order = " ORDER BY `jobtime` ";
			}
			//排序规则 默认为倒序
			if($paramer['sort']){
				$sort = $paramer['sort'];
			}else{
				$sort = " DESC";
			}
			$where.=$order.$sort;
			
		}

		$Query = $db->query("SELECT * FROM $db_config[def]company where ".$where.$limit);
		$ListId=array();
		$com_list=array();
		while($rs = $db->fetch_array($Query)){
			$com_list[] = $db->array_action($rs,$cache_array);
			$ListId[] = $rs['uid'];
		}  
		//调用会员等级
		include_once  PLUS_PATH."/comrating.cache.php";
		if(!empty($ListId)){
		$statis = $db->select_all("company_statis","`uid` in (".@implode(",",$ListId).")","`uid`,`rating`");
		foreach($ListId as $key=>$value){
		       foreach($statis as $v){
		               foreach($comrat as $val){
			                if($value==$v['uid'] && $val['id']==$v['rating']){						
							$com_list[$key]['color'] = $val['com_color'];
							if($val['com_pic']&&file_exists(APP_PATH.$val['com_pic'])){
								$com_list[$key]['ratlogo'] = $val['com_pic'];
    						}
							$com_list[$key]['ratname'] = $val['name'];
						    }
					  }
				}
			}
		}
		//对应留言
		if($paramer['ismsg']){
			$Msgid = @implode(",",$ListId);
			$msglist = $db->select_alls("company_msg","resume","a.`cuid` in ($Msgid) and a.`uid`=b.`uid` order by a.`id` desc","a.cuid,a.content,b.name,b.photo,b.def_job");
			if(is_array($ListId) && is_array($msglist)){
				foreach($com_list as $key=>$value){
					foreach($msglist as $k=>$v){
						if($value['uid']==$v['cuid']){
							$com_list[$key]['msg'][$k]['content'] = $v['content'];
							$com_list[$key]['msg'][$k]['name'] = $v['name'];
							$com_list[$key]['msg'][$k]['photo'] = $v['photo'];
							$com_list[$key]['msg'][$k]['eid'] = $v['def_job'];
						}
					}
				}
			}
		}
		//是否需要查询对应职位
		if($paramer['isjob']){
			//查询职位
			$JobId = @implode(",",$ListId);
			$JobList=$db->select_all("company_job","`uid` IN ($JobId) and r_status<>'2' and status<>'1' and state=1  order by `lastupdate` desc","`id`,`uid`,`status`,`name`");
			if(is_array($ListId) && is_array($JobList)){
				foreach($com_list as $key=>$value){
					$com_list[$key]['jobnum'] = 0;
					foreach($JobList as $k=>$v){
						if($value['uid']==$v['uid']){
							$id = $v['id'];
							$com_list[$key]['newsjob'] = $v['name'];
							$com_list[$key]['newsjob_status'] = $v['status'];
							$com_list[$key]['r_status'] = $v['r_status'];

							$v = $db->array_action($value,$cache_array);
							$v['job_url'] = Url("job",array("c"=>"comapply","id"=>$JobList[$k]['id']),"1");
							$v['id']= $id;
							$v['name'] = $com_list[$key]['newsjob'];
							$com_list[$key]['joblist'][] = $v;
							$com_list[$key]['jobnum'] = $com_list[$key]['jobnum']+1;
						}
					}
					/*
					foreach($comrat as $k=>$v){
						if($value['rating']==$v['id']){
							$com_list[$key]['color'] = $v['com_color'];
							$com_list[$key]['ratlogo'] = $v['com_pic'];
						}
					}*/
				}
			}
		}
		//是否需要查询对应资讯
		if($paramer['isnews']){
			//查询资讯
			$JobId = @implode(",",$ListId);
			$NewsList=$db->select_all("company_news","`uid` IN ($JobId) and status=1  order by `id` desc");
			if(is_array($ListId) && is_array($NewsList)){
				foreach($com_list as $key=>$value){
					$com_list[$key]['newsnum'] = 0;
					foreach($NewsList as $k=>$v){
						if($value['uid']==$v['uid']){
							$com_list[$key]['newslist'][] = $v;
							$com_list[$key]['newsnum'] = $com_list[$key]['newsnum']+1;
						}
					}
				}
			}
		}
		//是否需要查询对应环境展示
		if($paramer['isshow']){
			//查询环境展示
			$JobId = @implode(",",$ListId);
			$ShowList=$db->select_all("company_show","`uid` IN ($JobId) order by `id` desc");
			if(is_array($ListId) && is_array($ShowList)){
				foreach($com_list as $key=>$value){
					$com_list[$key]['shownum'] = 0;
					foreach($ShowList as $k=>$v){
						if($value['uid']==$v['uid']){
							$com_list[$key]['showlist'][] = $v;
							$com_list[$key]['shownum'] = $com_list[$key]['shownum']+1;
						}
					}
				}
			}
		}
		if($paramer['ltjob']){//高级职位
			//查询职位
			$JobId = @implode(",",$ListId);
			$JobList=$db->select_all("lt_job","`uid` IN ($JobId) and status=1  order by `id` desc");
			if(is_array($ListId) && is_array($JobList)){
				foreach($com_list as $key=>$value){
					$jobname=array();
                    $com_list[$key]['ltjobnum'] = 0;
					foreach($JobList as $k=>$v){
						if($com_list[$key]['ltjobnum']>=$paramer['ltjob']){continue;}
						if($value['uid']==$v['uid']){
							$url = Url("lietou",array("c"=>"jobcomshow","id"=>$v['id']));
							$v['job_url'] = $url;
							$jobname[] = "<a href='".$url."'>".$v['job_name']."</a>";
                            $com_list[$key]['ltjoblist'][] = $v;
                            $com_list[$key]['ltjobnum'] = $com_list[$key]['ltjobnum']+1;
						}
					}
					$com_list[$key]['ltjob'] = @implode(",",$jobname);
				}
			}
		}
		//企业黄页 是否关注  201305_gl
		if($paramer['firm']){
			if($_COOKIE[uid]){$atnlist = $db->select_all("atn","`uid`='$_COOKIE[uid]'");}
			if(is_array($com_list)){
				foreach($com_list as $key=>$value){
					if(!empty($atnlist)){
						foreach($atnlist as $v){
							if($value['uid'] == $v['sc_uid']){
								$com_list[$key]['atn'] = "取消关注";
                                $com_list[$key]['atnstatus'] = "1";
								break;
							}else{
								$com_list[$key]['atn'] = "关注";
							}
						}
					}else{
						$com_list[$key]['atn'] = "关注";
					}
				}
			}
		}
		if(is_array($com_list)){
			foreach($com_list as $key=>$value){
				if($value['shortname']){
    				$com_list[$key]['name']=$value['shortname'];
    			}
				$com_list[$key]['com_url'] = Url("company",array("c"=>"show","id"=>$value['uid']));
				$com_list[$key]['joball_url'] = Url("company",array("c"=>"show","id"=>$value['uid'],"tp"=>"post")); 
				if(!$value['logo'] || $value['logo_status']!=0 || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$value['logo']))){
				    $com_list[$key]['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
				}else{
					$com_list[$key]['logo'] = str_replace("./",$config['sy_weburl']."/",$value['logo']);
				} 
				//获得福利待遇名称
				if(is_array($com_list[$key]['welfare'])&&$com_list[$key]['welfare']){
					foreach($com_list[$key]['welfare'] as $val){
						$com_list[$key]['welfarename'][]=$val;
					}
				}
			}
			if($paramer['keyword']!=""&&!empty($com_list)){
				addkeywords('4',$paramer['keyword']);
			}
		}$com_list = $com_list; if (!is_array($com_list) && !is_object($com_list)) { settype($com_list, 'array');}
foreach ($com_list as $_smarty_tpl->tpl_vars['com_list']->key => $_smarty_tpl->tpl_vars['com_list']->value) {
$_smarty_tpl->tpl_vars['com_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['com_list']->key;
?>
<li><span <?php if ($_smarty_tpl->tpl_vars['key']->value+1<='3') {?>class="Top_box_span"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span>
<a href="<?php echo $_smarty_tpl->tpl_vars['com_list']->value['com_url'];?>
" target="_blank"><?php echo mb_substr($_smarty_tpl->tpl_vars['com_list']->value['name'],0,15,'utf-8');?>
</a>
<em><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['com_list']->value['lastupdate'],"%Y-%m-%d");?>
</em></li>
<?php } ?>
</ul>
</div>
<div class="post_Top_box">
<div class="post_Top_box_title Top_box_line"><strong>最新职位</strong></div>
<ul class="post_Top_box_list">
<?php  $_smarty_tpl->tpl_vars['job_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("order"=>"\'lastupdate\'","namelen"=>"8","state"=>"1","key"=>"\'key\'","limit"=>"10","item"=>"\'job_list\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		if(isUseSphinx()){
			include_once(LIB_PATH."sphinx.class.php");
			
			$where = array();

			$where[] = array("setFilterRange", "edate", $time, 9999999999);
			$where[] = array("setFilter", "state", array(1));
			if($paramer[sdate]){
				$where[] = array("setFilterRange", "sdate", strtotime("-".intval($paramer[sdate])." day",time()), 9999999999);
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where[] = array("setFilter", "uid", array($paramer[uid]));
			}

			//是否推荐职位
			if($paramer[rec]){
				$where[] = array("setFilterRange", "rec_time", $time, 9999999999);
			}

			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $job_uid);
			}

			//取不包含当前id的职位
			if($paramer[noid]){
				$where[] = array("setFilter", "id", array($paramer[noid]), true);
			}

			//是否被锁定
			if($paramer[r_status]){
				$where[] = array("setFilter", "r_status", array(2));
			}else{
				$where[] = array("setFilter", "r_status", array(1));
			}

			//是否下架职位
			if($paramer[status]){
				$where[] = array("setFilter", "status", array(1));
			}else{
				$where[] = array("setFilter", "status", array(0));
			}

			//公司体制
			if($paramer[pr]){
				$where[] = array("setFilter", "pr", array($paramer[pr]));
			}

			//公司行业分类
			if($paramer['hy']){
				$where[] = array("setFilter", "hy", array($paramer[hy]));
			}

			//职位大类
			if($paramer[job1]){
				$where[] = array("setFilter", "job1", array($paramer[job1]));
			}
			//职位子类
			if($paramer[job1_son]){
				$where[] = array("setFilter", "job1_son", array($paramer[job1_son]));
			}
			//职位三级分类
			if($paramer[job_post]){
				$job_post = explode(",", $paramer[job_post]);
				$where[] = array("setFilter", "job_post", $job_post);
			}

			//您可能感兴趣的职位--个人会员中心
			// if($paramer['jobwhere']){
			// 	$where[] = array("setFilter", "jobwhere", array($paramer[jobwhere]));
			// }

			//职位分类综合查询
			$queryStr = array();
			if($paramer['jobids']){
				$queryStr [] = "(@job1 = $paramer[jobids] | @job1_son = $paramer[jobids] | @job_post = $paramer[jobids] )";
			}

			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$queryStr [] = "(@job1 in ($paramer[jobin]) | @job1_son in ($paramer[jobin]) | @job_post in ($paramer[jobin]) )";
			}

			//城市大类
			if($paramer[provinceid]){
				$where[] = array("setFilter", "provinceid", array($paramer[provinceid]));
			}
			//城市子类
			if($paramer['cityid']){
				$cityid = explode(",", $paramer[cityid]);
				$where[] = array("setFilter", "cityid", $cityid);
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$three_cityid = explode(",", $paramer[three_cityid]);
				$where[] = array("setFilter", "three_cityid", $three_cityid);
			}
			
			//学历
			if($paramer[edu]){
				$where[] = array("setFilter", "edu", array($paramer[edu]));
			}
			//工作经验
			if($paramer[exp]){
				$where[] = array("setFilter", "exp", array($paramer[exp]));
			}
			//到岗时间
			if($paramer[report]){
				$where[] = array("setFilter", "report", array($paramer[report]));
			}
			//职位性质
			if($paramer[type]){
				$where[] = array("setFilter", "type", array($paramer[type]));
			}
			//性别
			if($paramer[sex]){
				$where[] = array("setFilter", "sex", array($paramer[sex]));
			}
			//应届生
			if($paramer[is_graduate]){
				$where[] = array("setFilter", "is_graduate", array($paramer[is_graduate]));
			}
			//公司规模
			if($paramer[mun]){
				$where[] = array("setFilter", "mun", array($paramer[mun]));
			}

			if($paramer[minsalary]){
				$where[] = array("setFilterRange", "maxsalary", intval($paramer[minsalary]), 99999999);
				
			}
			if($paramer[maxsalary]){
				$where[] = array("setFilterRange", "minsalary", 0, intval($paramer[maxsalary]));
			}

            //福利待遇
            $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $welfareid);
			}

			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$queryStr [] = "(@provinceid in ($paramer[cityin]) | @cityid in ($paramer[cityin]) | @three_cityid in ($paramer[cityin]) )";
			}

			//紧急招聘urgent
			if($paramer[urgent]){
				$where[] = array("setFilterRange", "urgent_time", $time, 9999999999);
			}

			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			    $where[] = array("setFilterRange", "lastupdate", $beginToday, 9999999999);
        		}else{
        			$time=time();
    				$uptime = $time-($paramer[uptime]*86400);
    				$where[] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
        		}
			}

			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$queryStr [] = "(@com_name ($paramer[comname]) )";
			}

			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where[] = array("setFilter", "com_provinceid", array($paramer[com_pro]));
			}

			//按照关键字匹配职位名称、企业名称等
			if($paramer[keyword]){
				include  PLUS_PATH."/city.cache.php";
				$cityid = array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(count($cityid) > 0){
					$cityid = implode(",", $cityid);
					$queryStr [] = "(@provinceid in ($cityid) | @cityid in ($cityid) | @three_cityid in ($cityid) )";
				}

				$where["keywords"] = $paramer[keyword];
			}

			//多选职位
			if($paramer["job"]){
				$paraJob = explode(",", $paramer[job]);
				$where[] = array("setFilter", "job_post", $paraJob);
			}

			//竞价招聘
			if($paramer[bid]){
				$where[] = array("setFilterRange", "xsdate", $time, 9999999999);
			}

			if(count($queryStr) > 0){
				$where["queryStr"] = $queryStr;
			}
			
			$sphinx = new sphinx();
			$sphinx->setFieldWeights(array("name"=>2,"com_name"=>1));

			//排序字段默认为更新时间
			$orderField = "lastupdate";
			if($paramer[order] && $paramer[order]!="lastdate"){
				$orderField = str_replace("'","",$paramer[order]);
			}

			//排序规则 默认为倒序
			$orderType = "DESC";
			if(strtoupper(trim($paramer[sort])) == "ASC"){
				$orderType = "ASC";
			}

			$sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

			if($paramer[ispage]){
				$limitArr = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
				$ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company_job");
			}
			else if($paramer[limit]){
				$ids = $sphinx->getIds($where, 0, $paramer[limit], "company_job");
			}
			else{
				$ids = $sphinx->getIds($where, 0, 20, "company_job");
			}
						
			if(count(ids) > 0){
				$ids = implode(",", $ids);
				$where = "id in ($ids) order by field(id, $ids) ";
			}
			else{
				$where = "0";
			}
			
			$limit = "";
		}//end if($config["useSphinx"])
		else{
			if($paramer[sdate]){
				$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
			}else{
				$where = "`state`=1";
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where .= " AND `uid` = '$paramer[uid]'";
			}
			//是否推荐职位
			if($paramer[rec]){
				
				$where.=" AND `rec_time`>=".time();
				
			}
			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$job_uid).")";
			}
			//取不包含当前id的职位
			if($paramer[noid]){
				$where.= " and `id`<>$paramer[noid]";
			}
			//是否被锁定
			if($paramer[r_status]){
				$where.= " and `r_status`=2";
			}else{
				$where.= " and `r_status`=1";
			}
			//是否下架职位
			if($paramer[status]){
				$where.= " and `status`='1'";
			}else{
				$where.= " and `status`='0'";
			}
			//公司体制
			if($paramer[pr]){
				$where .= " AND `pr` =$paramer[pr]";
			}
			//公司行业分类
			if($paramer['hy']){
				$where .= " AND `hy` = $paramer[hy]";
			} 
			//职位大类
			if($paramer[job1]){
				$where .= " AND `job1` = $paramer[job1]";
			}
			//职位子类
			if($paramer[job1_son]){
				$where .= " AND `job1_son` = $paramer[job1_son]";
			}
			//职位三级分类
			if($paramer[job_post]){
				$where .= " AND (`job_post` IN ($paramer[job_post]))";
			}
			//您可能感兴趣的职位--个人会员中心
			if($paramer['jobwhere']){
				$where .=" and ".$paramer['jobwhere'];
			}
			//职位分类综合查询
			if($paramer['jobids']){
				$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
			}
			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
			}
			//城市大类
			if($paramer[provinceid]){
				$where .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer['cityid']){
				$where .= " AND (`cityid` IN ($paramer[cityid]))";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
			}
			if($paramer['cityin']){
				$where .= " AND `three_cityid` IN ($paramer[cityin])";
			}
			//学历
			if($paramer[edu]){
				$where .= " AND `edu` = $paramer[edu]";
			}
			//工作经验
			if($paramer[exp]){
				$where .= " AND `exp` = $paramer[exp]";
			}
			//到岗时间
			if($paramer[report]){
				$where .= " AND `report` = $paramer[report]";
			}
			//职位性质
			if($paramer[type]){
				$where .= " AND `type` = $paramer[type]";
			}
			//性别
			if($paramer[sex]){
				$where .= " AND `sex` = $paramer[sex]";
			}
			//应届生
			if($paramer[is_graduate]){
				$where .= " AND `is_graduate` = $paramer[is_graduate]";
			}
			//公司规模
			if($paramer[mun]){
				$where .= " AND `mun` = $paramer[mun]";
			}
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary])."))";
				/*$where.= " and case when minsalary>0 then `minsalary`<= ".intval($paramer[minsalary]). " end and case when maxsalary>0 then `maxsalary`<= ".intval($paramer[maxsalary])." else minsalary<".intval($paramer[maxsalary])." and maxsalary =0 end ";*/
	    	}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`>=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`!=0 and  `maxsalary`=0))";
				/*$where.= " AND `minsalary`>=".intval($paramer[minsalary])." and minsalary>0";*/
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and maxsalary=0) 
							or (`minsalary`=0 and  `maxsalary`!=0)
							)";
				/*$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])." and maxsalary>0";*/
			}
	         //福利待遇
	         $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
			}
			//紧急招聘urgent
			if($paramer[urgent]){
				$where.=" AND `urgent_time`>".time();
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND lastupdate>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND lastupdate>$uptime";
	    		}
			}
			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
			}
			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
			}
			//按照职位名称匹配
			if($paramer[keyword]){
				$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
				$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
				include  PLUS_PATH."/city.cache.php";
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(is_array($cityid)){
					foreach($cityid as $value){
						$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
					}
					$where1[]=@implode(" or ",$class);
				}
				$where.=" AND (".@implode(" or ",$where1).")";
			}
			//多选职位
			if($paramer["job"]){
				$where.=" AND `job_post` in ($paramer[job])";
			}
			//置顶招聘
			if($paramer[bid]){
				if($config[joblist_top]!=1){
					$paramer[limit] = 5;
				}
				$where.="  and `xsdate`>'".time()."'";
			} 
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
			}

			//查询条数
			$limit = '';
			if($paramer[limit]){

				$limit = " limit ".$paramer[limit];
			}

			if($paramer[ispage]){
				$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
			}

			//排序字段默认为更新时间
            //置顶设置为随机5条时，随机查询
            if($paramer[bid] && $paramer[limit]){
                $order = " ORDER BY rand() ";
            }else{
                if($paramer[order] && $paramer[order]!="lastdate"){
    				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
    			}else{
    				$order = " ORDER BY `lastupdate` ";
    			}
            }
			//排序规则 默认为倒序
			if($paramer[sort]){
				$sort = $paramer[sort];
			}else{
				$sort = " DESC";
			} 
			$where.=$order.$sort;
		}
		
		
			
		$job_list = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($job_list) && !empty($job_list)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_list as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0 ||!file_exists(str_replace('./',APP_PATH,$value['logo']))){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			    
			//$comrat = $db->select_all("company_rating","`display`='1'");
			if($paramer[bid]){
				$noids=array();
			}	
			foreach($job_list as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_list[$key]);
					continue;
				}else{
					$job_list[$key] = $db->array_action($value,$cache_array);
					$job_list[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_list[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_list[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_list[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_list[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_list[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_list[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_list[$key][logo] =$r_uid[$value['uid']][logo];
					$job_list[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_list[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_list[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_list[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_list[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_list[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_list[$key]['redtime'] =1;
					}else{
						$job_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$job_list[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_list[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_list[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$job_list[$key][ratlogo] = $v[com_pic];
							}else{
								$job_list[$key][ratlogo] ='';
							}
							$job_list[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][name_n]);
						$job_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][com_n]);
						$job_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($job_list)){
				if($paramer[keyword]!=""&&!empty($job_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job_list = $job_list; if (!is_array($job_list) && !is_object($job_list)) { settype($job_list, 'array');}
foreach ($job_list as $_smarty_tpl->tpl_vars['job_list']->key => $_smarty_tpl->tpl_vars['job_list']->value) {
$_smarty_tpl->tpl_vars['job_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['job_list']->key;
?>
<li><span <?php if ($_smarty_tpl->tpl_vars['key']->value+1<='3') {?>class="Top_box_span"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span>
<a style="width:115px;" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['name_n'];?>
</a>
<u class="fl"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_two'];?>
</u>
<em><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job_list']->value['lastupdate'],"%Y-%m-%d");?>
</em></li>
<?php } ?>
</ul>
</div>
<div class="post_Top_box">
<div class="post_Top_box_title Top_box_line2"><strong>最新人才</strong></div>
<ul class="post_Top_box_list">
<?php  $_smarty_tpl->tpl_vars['user_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$user_list=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		eval('$paramer=array("limit"=>"10","t_len"=>"20","item"=>"\'user_list\'","key"=>"\'key\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

	    //处理类别字段
		$cache_array = $db->cacheget();
        $fscache_array = $db->fscacheget();
		$userclass_name = $cache_array["user_classname"];
		$city_name      = $cache_array["city_name"];
        $city_index     = $cache_array["city_index"];
		$job_name		= $cache_array["job_name"];
        $job_index		= $cache_array["job_index"];
		$job_type		= $cache_array["job_type"];
		$industry_name	= $cache_array["industry_name"];
        $city_parent       = $fscache_array["city_parent"];
        $job_parent     = $fscache_array["job_parent"];

		//是否属于分站下
		if($config['sy_web_site']=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$paramer['hy']=$config['hyclass'];
			}
		}

		
			$where = "a.`defaults`='1' and a.`status`='1' and a.`r_status`='1'";
            //关注我公司的人才--条件
			if($paramer[where_uid]){
				$where .=" AND a.`uid` in (".$paramer['where_uid'].")";
			}
			//黑名单不能查看已拉黑的个人用户简历
			if($_COOKIE['uid']&&$_COOKIE['usertype']=="2"){
				$blacklist=$db->select_all("blacklist","`p_uid`='".$_COOKIE['uid']."'","c_uid");
				if(is_array($blacklist)&&$blacklist){
					foreach($blacklist as $v){
						$buid[]=$v['c_uid'];
					}
				    $where .=" AND a.`uid` NOT IN (".@implode(",",$buid).")";
				}
			}
            //置顶
			if($paramer[topdate]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
			if($paramer[top]){
				$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
			}
            //身份认证
			if($paramer[idcard]){
				$where .=" AND a.`idcard_status`='1'";
			}
			//高级人才
			if($paramer[height_status]){
				$where .=" AND a.`height_status`=".$paramer[height_status];
			}else{
				$where .=" AND a.`height_status`='0'";
			}
			//高级人才推荐
			if($paramer[rec]){
				$where .=" AND a.`rec`=1";
			}
			//普通推荐
			if($paramer[rec_resume]){
				$where .=" AND a.`rec_resume`=1";
			}
			//作品
			if($paramer[work]){
				$show=$db->select_all("resume_show","1 group by eid","`eid`");
				if(is_array($show)){
					foreach($show as $v){
						$eid[]=$v['eid'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$eid).")";
			}
			//标签
			if($paramer[tag]){
			    $tagname=$userclass_name[$paramer[tag]];
				$tag=$db->select_all("resume","`def_job`>0 and `r_status`<>2 and `status`=1 and FIND_IN_SET('".$tagname."',`tag`)","`def_job`");
				if(is_array($tag)){
					foreach($tag as $v){
						$tagid[]=$v['def_job'];
					}
				}
				$where .=" AND a.`id` in (".@implode(",",$tagid).")";
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND a.`lastupdate`>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND a.`lastupdate`>$uptime";
	    		}
			}
			//添加时间区间，即审核时间
			if($paramer[adtime]){
				$time=time();
				$adtime = $time-($paramer[adtime]*86400);
				$where.=" AND a.`status_time`>$adtime";
			}
			//是否有照片
			if($paramer[pic]=="0" || $paramer[pic]){
				$where .=" AND a.`photo`<>'' AND a.`phototype`!=1";
			}
            //行业
			if($paramer['hy']!=""){
				$where .= " AND a.`hy` IN (".$paramer['hy'].")";
			}
            $citywhere = "1";
			//城市大类
			if($paramer[provinceid]){
                $citywhere .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer[cityid]){
                $citywhere .= " AND `cityid` = $paramer[cityid]";
			}
			//城市三级子类
			if($paramer[three_cityid]){
                $citywhere .= " AND `three_cityid` = $paramer[three_cityid]";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
                if($city_parent[$paramer[cityin]]=='0'){
					$citywhere .= " AND `provinceid` = $paramer[cityin]";
				}elseif(in_array($city_parent[$paramer[cityin]],$city_index)){
					$citywhere .= " AND `cityid` = $paramer[cityin]";
				}elseif($city_parent[$paramer[cityin]]>0){
					$citywhere .= " AND `three_cityid` = $paramer[cityin]";
				}
			}
            //职位类别
            $jobwhere = "1";
			if($paramer[job1]){
				$jobwhere.=" AND `job1`= $paramer[job1]";
			}
			if($paramer[job1_son]){
                $jobwhere.=" AND `job1_son`= $paramer[job1_son]";
			}
			if($paramer[job_post]){
                $jobwhere.=" AND `job_post`= $paramer[job_post]";
			}
            //职位区间,不建议执行该查询
			if($paramer[jobin]){
                if($job_parent[$paramer[jobin]]=='0'){
					$jobwhere.=" AND `job1`= $paramer[jobin]";
				}elseif(in_array($job_parent[$paramer[jobin]],$job_index)){
					$jobwhere.=" AND `job1_son`= $paramer[jobin]";
				}elseif($job_parent[$paramer[jobin]]>0){
					$jobwhere.=" AND `job_post`= $paramer[jobin]";
				}
			}
			//工作经验
			if($paramer[exp]){
				$where .=" AND a.`exp`=$paramer[exp]";
			}
			//学历
			if($paramer[edu]){
				$where .=" AND a.`edu`=$paramer[edu]";
			}
			//性别
			if($paramer[sex]){
				$where .=" AND a.`sex`=$paramer[sex]";
			}
			//到岗时间
			if($paramer[report]){
				$where .=" AND a.`report`=$paramer[report]";
			}
			//工作性质
			if($paramer[type]){
				$where .= " AND a.`type`=$paramer[type]";
			}
			//关键字
			if($paramer[keyword]){
				$jobid = array();
				$where1[]="a.`name` LIKE '%$paramer[keyword]%'";
				$where1[]="a.`uname` LIKE '%$paramer[keyword]%'";
                //关键字带期望职位搜索(已有城市选择搜索，这个有点累赘，影响效率)
//              $jobid=array();
// 				foreach($job_name as $k=>$v){
// 					if(strpos($v,$paramer[keyword])!==false){
// 						$jobid[]=$k;
// 					}
// 				}
// 				if(!empty($jobid)){
//                  $class=array();
// 					foreach($jobid as $value){
// 						$class[]="FIND_IN_SET('".$value."',`job_classid`)";
// 					}
// 					$where1[]=@implode(" or ",$class);
// 				}
                //关键字带期望城市搜索
			    $cityid=array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
                //只取匹配到的第一个城市，已选省则匹配省下面的城市、未选择城市则按关键字匹配城市
				if(!empty($cityid)){
                    $ckwhere = "1";
                    if(in_array($cityid[0],$city_index)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `provinceid` = $cityid[0]";
                    }elseif(in_array($cityid[0],$city_two)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `cityid` = $cityid[0]";
                    }elseif(in_array($cityid[0],$city_three)){
                        $ppcityid = $cityid[0];
                        $ckwhere .= " AND `three_cityid` = $cityid[0]";
                    }
                    $cityresume = $db->select_all("resume_city",$ckwhere);
                    if($cityresume){
                        foreach ($cityresume as $v){
                            $where1[]=" `a.id`=".$v['eid'];
                        }
                    }
				}
                $where.=" AND (".@implode(" or ",$where1).")";
			}
			//薪资待遇
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary])."))";
			}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
							or (a.`minsalary`>=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).")
							or (a.`minsalary`!=0 and  a.`maxsalary`=0))";
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary]).")
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`<=".intval($paramer[maxsalary]).")  
							or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`=0) 
							or (a.`minsalary`=0 and a.`maxsalary`!=0)
							)";
			}
	        //排序字段默认为更新时间
			if($paramer[order] && $paramer[order]!="lastdate"){
				if($paramer[order]=='topdate'){
					$nowtime=time();
					$order = " ORDER BY if(a.`topdate`>$nowtime,a.`topdate`,a.`lastupdate`)";
				}else{
					$order = " ORDER BY a.`".$paramer[order]."`";
				}
			}else{
				$order = " ORDER BY a.`lastupdate` ";
			}
			//排序规则 默认为倒序
			$sort = $paramer[sort]?$paramer[sort]:'DESC';
			//查询条数
			if($paramer[limit]){
				$limit=" LIMIT ".$paramer[limit];
			}
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
 			}
            $pagewhere = "";$joinwhere = "";
            if($citywhere!="1"){
                $pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_cityclass` where ".$citywhere." group by `eid`) b";
                $joinwhere .= " a.`id`=b.`eid` and ";
            }
            if($jobwhere!="1"){
                $pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_jobclass` where ".$jobwhere." group by `eid`) c";
                $joinwhere .= " a.`id`=c.`eid` and ";
            }
			if($paramer[ispage]){
				if($paramer["height_status"]){
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"3",$_smarty_tpl,$pagewhere,$joinwhere);
				}else{
					$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",'0',$_smarty_tpl,$pagewhere,$joinwhere);
				}
			}
	
			if($paramer[topdate] && $_GET[page]>1){
				$user_list = array();
			}else{
				
				$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
				if($pagewhere!=""){
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere.$where.$order.$sort.$limit;
					$user_list=$db->DB_query_all($sql,"all");
				}else{
					$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
					$user_list=$db->DB_query_all($sql,"all");
				}
			}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($user_list) && is_array($user_list)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($user_list as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($user_list as $key=>$value){
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			if($paramer[topdate]){
				$noids=array();
			}	
			foreach($user_list as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($user_list[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $user_list[$k]['where']=$citywhere;
			    		$user_list[$k]['edu_n']=$userclass_name[$val['edu']];
				        $user_list[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$user_list[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$user_list[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $user_list[$k]['phototype']=$val[phototype];
						if($config['user_pic']==1 || !$config['user_pic']){
		                if($val['photo'] && $val['photo_status']==0 && $val['phototype']!=1&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
            				$user_list[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
            			}else{
            				if($val['sex']==1){
            					$user_list[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
            				}else{
            					$user_list[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
            				}
            			}
						}elseif($config['user_pic']==2){
							if($val['photo']&& $val['photo_status']==0&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
								$user_list[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
							}else{
								if($val['sex']==1){
									$user_list[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
								}else{
									$user_list[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
								}
							}
						}elseif($config['user_pic']==3){
							if($val['sex']==1){
								$user_list[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
							}else{
								$user_list[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
							}
						}
						if($val['tag']){
                            $user_list[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $user_list[$k]['nametype']=$val[nametype];
                        $user_list[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $user_list[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $user_list[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $user_list[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$user_list[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$user_list[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$user_list[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$user_list[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$user_list[$k]['username_n'] = $val['name'];
						}
                    }
                }
				
				//更新时间显示方式
				$time=$v['lastupdate'];
				//今天开始时间戳
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$user_list[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$user_list[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$user_list[$k]['time'] = date("H:i",$v['lastupdate']);
					$user_list[$k]['redtime'] =1;
				}else{
					$user_list[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
				
				$user_list[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
// 				$user_list[$k]['job_city_one']=$city_name[$v['provinceid']];
// 				$user_list[$k]['job_city_two']=$city_name[$v['cityid']];
// 				$user_list[$k]['job_city_three']=$city_name[$v['three_cityid']];
				if($v['minsalary']&&$v['maxsalary']){
					$user_list[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $user_list[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$user_list[$k]["salary_n"] = "面议";
    			}
				$user_list[$k]['report_n']=$userclass_name[$v['report']];
				$user_list[$k]['type_n']=$userclass_name[$v['type']];
				$user_list[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$user_list[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$user_list[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$user_list[$k]['m_name']=$m_name[$v['uid']];
					$user_list[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$kjob_classid=@explode(",",$v['job_classid']);
				$kjob_classid=array_unique($kjob_classid);	
				$jobname=array();
				if(is_array($kjob_classid)){
					foreach($kjob_classid as $val){
					    if($val!=''){
					        if($paramer['keyword']){
                               $jobname[]=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$job_name[$val]);
                            }else{
                               $jobname[]=$job_name[$val];
                            }
                        }
					}
				}
				//$user_list[$k]['job_post']=@implode(",",$jobname);
				$user_list[$k]['expectjob']=$jobname;
				$kcity_classid=@explode(",",$v['city_classid']);
				$kcity_classid=array_unique($kcity_classid);	
				$cityname=array();
				if(is_array($kcity_classid)){
					foreach($kcity_classid as $val){
					    if($val!=''){
					       
                            $cityname[]=$city_name[$val];
                            
                        }
					}
				}
                //$user_list[$k]['citylist']=@implode("/",$cityname);
				$user_list[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$user_list[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$user_list[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($user_list as $k=>$v){
               if($paramer['keyword']){
					$user_list[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$user_list[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user_list[$k]['job_post']);
					$user_list[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user_list[$k]['job_post_n']);
					$user_list[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user_list[$k]['city_name_n']);
				}
            }
			if($paramer['keyword']!=""&&!empty($user_list)){
				addkeywords('5',$paramer['keyword']);
			}
		}$user_list = $user_list; if (!is_array($user_list) && !is_object($user_list)) { settype($user_list, 'array');}
foreach ($user_list as $_smarty_tpl->tpl_vars['user_list']->key => $_smarty_tpl->tpl_vars['user_list']->value) {
$_smarty_tpl->tpl_vars['user_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['user_list']->key;
?>
<li>
<span <?php if ($_smarty_tpl->tpl_vars['key']->value+1<='3') {?>class="Top_box_span"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span>
<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$user_list.id`'),$_smarty_tpl);?>
" target="_blank" style="width:100px;"><?php echo $_smarty_tpl->tpl_vars['user_list']->value['username_n'];?>
</a>
<u class="fl"><?php echo mb_substr($_smarty_tpl->tpl_vars['user_list']->value['job_post'],0,8,'utf-8');?>
</u>
<em><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_list']->value['lastupdate'],"%Y-%m-%d");?>
</em></li>
<?php } ?>
</ul>
</div>
<div class="post_Top_box"  style="margin-right:0px;">
<div class="post_Top_box_title Top_box_line3"><strong>热门关键字</strong></div>
<ul class="post_Top_box_list">
<?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $config;eval('$paramer=array("order"=>"\'num\'","item"=>"\'keylist\'","limit"=>"10","key"=>"\'key\'","len"=>"8","nocache"=>"")
;');$list=array();
        
        $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		
		if($paramer[recom]){
			$tuijian = 1;
		}
		
		if($paramer[type]){
			$type = $paramer[type];
		}
		
		if($paramer[limit]){
			$limit=$paramer[limit];
		}else{
			$limit=5;
		}
		include PLUS_PATH."/keyword.cache.php";
		if($paramer[iswap]){
			$wap = "/wap";
		}else{
			$index =1;
		}
		if(is_array($keyword)){
			if($paramer[iswap]){
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v[tuijian]!=1){
						continue;
					}
					if($type && $v[type]!=$type){
						continue;
					}

					$i++;
					if($v[type]=="1"){
						$v[url] = Url("wap",array("c"=>"once","keyword"=>$v['key_name']));
						$v[type_name]='店铺招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("wap",array("c"=>"tiny","keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v[type]=="3"){
						$v[url] = Url("wap",array("c"=>"job","keyword"=>$v['key_name']));
						$v[type_name]='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("wap",array("c"=>"company","keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("wap",array("c"=>"resume","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}else{
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v['tuijian']!=1){
						continue;
					}
					if($type && $v['type']!=$type){
						continue;
					}
					$i++;
					if($v['type']=="1"){
						$v['url'] = Url("once",array("keyword"=>$v['key_name']));
						$v['type_name']='店铺招聘';
					}elseif($v['type']=="2"){
						$v['url'] = Url("part",array("keyword"=>$v['key_name']));
						$v['type_name']='兼职';
					}elseif($v['type']=="13"){
						$v['url'] = Url("tiny",array("keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v['type']=="3"){
						$v['url'] = Url("job",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("company",array("keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("resume",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}elseif($v['type']=="6"){
						$v['url'] = Url("lietou",array("c"=>"service","keyword"=>$v['key_name']));
						$v['type_name']='猎头';
					}elseif($v['type']=="7"){
						$v['url'] = Url("lietou",array("c"=>"post","keyword"=>$v['key_name']));
						$v['type_name']='猎头职位';
					}else if($v['type']=="9"){
						$v['url'] = Url("train",array("c"=>"subject","keyword"=>$v['key_name']));
						$v['type_name']='培训课程';
					}else if($v['type']=="10"){
						$v['url'] = Url("train",array("c"=>"agency","keyword"=>$v['key_name']));
						$v['type_name']='培训机构';
					}else if($v['type']=="11"){
						$v['url'] = Url("train",array("c"=>"teacher","keyword"=>$v['key_name']));
						$v['type_name']='培训师';
					}else if($v['type']=="12"){
						$v['url'] = Url("ask",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='问答';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}

					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['keylist']->key => $_smarty_tpl->tpl_vars['keylist']->value) {
$_smarty_tpl->tpl_vars['keylist']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['keylist']->key;
?>
<li>
<span <?php if ($_smarty_tpl->tpl_vars['key']->value+1<='3') {?>class="Top_box_span"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span>
<a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
" target="_blank" style="width:110px;"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a>
<u class="fl"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['type_name'];?>
 </u>
<em><?php echo $_smarty_tpl->tpl_vars['keylist']->value['num'];?>
</em></li>
<?php } ?>
</ul>
</div>
<div class="post_Top_box" >
<div class="post_Top_box_title Top_box_line3"><strong>热门资讯</strong></div>
    <ul class="post_Top_box_list">
	<?php  $_smarty_tpl->tpl_vars['a_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$a_list=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("t_len"=>"20","order"=>"\'hits\'","item"=>"\'a_list\'","urlstatic"=>"1","limit"=>"10","key"=>"\'key\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($a_list[$rs['nid']]['pic'])<$piclimit){
              $a_list[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($a_list[$rs['nid']]['arclist'])<$paramer[limit]){
          $a_list[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $a_list[] = $rs;
        }//end while
      }$a_list = $a_list; if (!is_array($a_list) && !is_object($a_list)) { settype($a_list, 'array');}
foreach ($a_list as $_smarty_tpl->tpl_vars['a_list']->key => $_smarty_tpl->tpl_vars['a_list']->value) {
$_smarty_tpl->tpl_vars['a_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['a_list']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['a_list']->value['id']) {?>
		<li>
			<span <?php if ($_smarty_tpl->tpl_vars['key']->value+1<='3') {?>class="Top_box_span"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span>
			<a href="<?php echo $_smarty_tpl->tpl_vars['a_list']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['a_list']->value['title'];?>
</a>
			<em><?php echo $_smarty_tpl->tpl_vars['a_list']->value['hits'];?>
</em>
		</li>
		<?php }?>
	<?php } ?>
    </ul>
</div>
<div class="post_Top_box">
<div class="post_Top_box_title Top_box_line"><strong>紧急职位</strong></div>
<ul class="post_Top_box_list">
<?php  $_smarty_tpl->tpl_vars['job_jias'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_jias']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("limit"=>"10","order"=>"\'lastupdate\'","urgent"=>"1","namelen"=>"8","state"=>"1","item"=>"\'job_jias\'","key"=>"\'key\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		if(isUseSphinx()){
			include_once(LIB_PATH."sphinx.class.php");
			
			$where = array();

			$where[] = array("setFilterRange", "edate", $time, 9999999999);
			$where[] = array("setFilter", "state", array(1));
			if($paramer[sdate]){
				$where[] = array("setFilterRange", "sdate", strtotime("-".intval($paramer[sdate])." day",time()), 9999999999);
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where[] = array("setFilter", "uid", array($paramer[uid]));
			}

			//是否推荐职位
			if($paramer[rec]){
				$where[] = array("setFilterRange", "rec_time", $time, 9999999999);
			}

			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $job_uid);
			}

			//取不包含当前id的职位
			if($paramer[noid]){
				$where[] = array("setFilter", "id", array($paramer[noid]), true);
			}

			//是否被锁定
			if($paramer[r_status]){
				$where[] = array("setFilter", "r_status", array(2));
			}else{
				$where[] = array("setFilter", "r_status", array(1));
			}

			//是否下架职位
			if($paramer[status]){
				$where[] = array("setFilter", "status", array(1));
			}else{
				$where[] = array("setFilter", "status", array(0));
			}

			//公司体制
			if($paramer[pr]){
				$where[] = array("setFilter", "pr", array($paramer[pr]));
			}

			//公司行业分类
			if($paramer['hy']){
				$where[] = array("setFilter", "hy", array($paramer[hy]));
			}

			//职位大类
			if($paramer[job1]){
				$where[] = array("setFilter", "job1", array($paramer[job1]));
			}
			//职位子类
			if($paramer[job1_son]){
				$where[] = array("setFilter", "job1_son", array($paramer[job1_son]));
			}
			//职位三级分类
			if($paramer[job_post]){
				$job_post = explode(",", $paramer[job_post]);
				$where[] = array("setFilter", "job_post", $job_post);
			}

			//您可能感兴趣的职位--个人会员中心
			// if($paramer['jobwhere']){
			// 	$where[] = array("setFilter", "jobwhere", array($paramer[jobwhere]));
			// }

			//职位分类综合查询
			$queryStr = array();
			if($paramer['jobids']){
				$queryStr [] = "(@job1 = $paramer[jobids] | @job1_son = $paramer[jobids] | @job_post = $paramer[jobids] )";
			}

			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$queryStr [] = "(@job1 in ($paramer[jobin]) | @job1_son in ($paramer[jobin]) | @job_post in ($paramer[jobin]) )";
			}

			//城市大类
			if($paramer[provinceid]){
				$where[] = array("setFilter", "provinceid", array($paramer[provinceid]));
			}
			//城市子类
			if($paramer['cityid']){
				$cityid = explode(",", $paramer[cityid]);
				$where[] = array("setFilter", "cityid", $cityid);
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$three_cityid = explode(",", $paramer[three_cityid]);
				$where[] = array("setFilter", "three_cityid", $three_cityid);
			}
			
			//学历
			if($paramer[edu]){
				$where[] = array("setFilter", "edu", array($paramer[edu]));
			}
			//工作经验
			if($paramer[exp]){
				$where[] = array("setFilter", "exp", array($paramer[exp]));
			}
			//到岗时间
			if($paramer[report]){
				$where[] = array("setFilter", "report", array($paramer[report]));
			}
			//职位性质
			if($paramer[type]){
				$where[] = array("setFilter", "type", array($paramer[type]));
			}
			//性别
			if($paramer[sex]){
				$where[] = array("setFilter", "sex", array($paramer[sex]));
			}
			//应届生
			if($paramer[is_graduate]){
				$where[] = array("setFilter", "is_graduate", array($paramer[is_graduate]));
			}
			//公司规模
			if($paramer[mun]){
				$where[] = array("setFilter", "mun", array($paramer[mun]));
			}

			if($paramer[minsalary]){
				$where[] = array("setFilterRange", "maxsalary", intval($paramer[minsalary]), 99999999);
				
			}
			if($paramer[maxsalary]){
				$where[] = array("setFilterRange", "minsalary", 0, intval($paramer[maxsalary]));
			}

            //福利待遇
            $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $welfareid);
			}

			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$queryStr [] = "(@provinceid in ($paramer[cityin]) | @cityid in ($paramer[cityin]) | @three_cityid in ($paramer[cityin]) )";
			}

			//紧急招聘urgent
			if($paramer[urgent]){
				$where[] = array("setFilterRange", "urgent_time", $time, 9999999999);
			}

			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			    $where[] = array("setFilterRange", "lastupdate", $beginToday, 9999999999);
        		}else{
        			$time=time();
    				$uptime = $time-($paramer[uptime]*86400);
    				$where[] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
        		}
			}

			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$queryStr [] = "(@com_name ($paramer[comname]) )";
			}

			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where[] = array("setFilter", "com_provinceid", array($paramer[com_pro]));
			}

			//按照关键字匹配职位名称、企业名称等
			if($paramer[keyword]){
				include  PLUS_PATH."/city.cache.php";
				$cityid = array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(count($cityid) > 0){
					$cityid = implode(",", $cityid);
					$queryStr [] = "(@provinceid in ($cityid) | @cityid in ($cityid) | @three_cityid in ($cityid) )";
				}

				$where["keywords"] = $paramer[keyword];
			}

			//多选职位
			if($paramer["job"]){
				$paraJob = explode(",", $paramer[job]);
				$where[] = array("setFilter", "job_post", $paraJob);
			}

			//竞价招聘
			if($paramer[bid]){
				$where[] = array("setFilterRange", "xsdate", $time, 9999999999);
			}

			if(count($queryStr) > 0){
				$where["queryStr"] = $queryStr;
			}
			
			$sphinx = new sphinx();
			$sphinx->setFieldWeights(array("name"=>2,"com_name"=>1));

			//排序字段默认为更新时间
			$orderField = "lastupdate";
			if($paramer[order] && $paramer[order]!="lastdate"){
				$orderField = str_replace("'","",$paramer[order]);
			}

			//排序规则 默认为倒序
			$orderType = "DESC";
			if(strtoupper(trim($paramer[sort])) == "ASC"){
				$orderType = "ASC";
			}

			$sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

			if($paramer[ispage]){
				$limitArr = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
				$ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company_job");
			}
			else if($paramer[limit]){
				$ids = $sphinx->getIds($where, 0, $paramer[limit], "company_job");
			}
			else{
				$ids = $sphinx->getIds($where, 0, 20, "company_job");
			}
						
			if(count(ids) > 0){
				$ids = implode(",", $ids);
				$where = "id in ($ids) order by field(id, $ids) ";
			}
			else{
				$where = "0";
			}
			
			$limit = "";
		}//end if($config["useSphinx"])
		else{
			if($paramer[sdate]){
				$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
			}else{
				$where = "`state`=1";
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where .= " AND `uid` = '$paramer[uid]'";
			}
			//是否推荐职位
			if($paramer[rec]){
				
				$where.=" AND `rec_time`>=".time();
				
			}
			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$job_uid).")";
			}
			//取不包含当前id的职位
			if($paramer[noid]){
				$where.= " and `id`<>$paramer[noid]";
			}
			//是否被锁定
			if($paramer[r_status]){
				$where.= " and `r_status`=2";
			}else{
				$where.= " and `r_status`=1";
			}
			//是否下架职位
			if($paramer[status]){
				$where.= " and `status`='1'";
			}else{
				$where.= " and `status`='0'";
			}
			//公司体制
			if($paramer[pr]){
				$where .= " AND `pr` =$paramer[pr]";
			}
			//公司行业分类
			if($paramer['hy']){
				$where .= " AND `hy` = $paramer[hy]";
			} 
			//职位大类
			if($paramer[job1]){
				$where .= " AND `job1` = $paramer[job1]";
			}
			//职位子类
			if($paramer[job1_son]){
				$where .= " AND `job1_son` = $paramer[job1_son]";
			}
			//职位三级分类
			if($paramer[job_post]){
				$where .= " AND (`job_post` IN ($paramer[job_post]))";
			}
			//您可能感兴趣的职位--个人会员中心
			if($paramer['jobwhere']){
				$where .=" and ".$paramer['jobwhere'];
			}
			//职位分类综合查询
			if($paramer['jobids']){
				$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
			}
			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
			}
			//城市大类
			if($paramer[provinceid]){
				$where .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer['cityid']){
				$where .= " AND (`cityid` IN ($paramer[cityid]))";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
			}
			if($paramer['cityin']){
				$where .= " AND `three_cityid` IN ($paramer[cityin])";
			}
			//学历
			if($paramer[edu]){
				$where .= " AND `edu` = $paramer[edu]";
			}
			//工作经验
			if($paramer[exp]){
				$where .= " AND `exp` = $paramer[exp]";
			}
			//到岗时间
			if($paramer[report]){
				$where .= " AND `report` = $paramer[report]";
			}
			//职位性质
			if($paramer[type]){
				$where .= " AND `type` = $paramer[type]";
			}
			//性别
			if($paramer[sex]){
				$where .= " AND `sex` = $paramer[sex]";
			}
			//应届生
			if($paramer[is_graduate]){
				$where .= " AND `is_graduate` = $paramer[is_graduate]";
			}
			//公司规模
			if($paramer[mun]){
				$where .= " AND `mun` = $paramer[mun]";
			}
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary])."))";
				/*$where.= " and case when minsalary>0 then `minsalary`<= ".intval($paramer[minsalary]). " end and case when maxsalary>0 then `maxsalary`<= ".intval($paramer[maxsalary])." else minsalary<".intval($paramer[maxsalary])." and maxsalary =0 end ";*/
	    	}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`>=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`!=0 and  `maxsalary`=0))";
				/*$where.= " AND `minsalary`>=".intval($paramer[minsalary])." and minsalary>0";*/
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and maxsalary=0) 
							or (`minsalary`=0 and  `maxsalary`!=0)
							)";
				/*$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])." and maxsalary>0";*/
			}
	         //福利待遇
	         $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
			}
			//紧急招聘urgent
			if($paramer[urgent]){
				$where.=" AND `urgent_time`>".time();
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND lastupdate>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND lastupdate>$uptime";
	    		}
			}
			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
			}
			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
			}
			//按照职位名称匹配
			if($paramer[keyword]){
				$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
				$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
				include  PLUS_PATH."/city.cache.php";
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(is_array($cityid)){
					foreach($cityid as $value){
						$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
					}
					$where1[]=@implode(" or ",$class);
				}
				$where.=" AND (".@implode(" or ",$where1).")";
			}
			//多选职位
			if($paramer["job"]){
				$where.=" AND `job_post` in ($paramer[job])";
			}
			//置顶招聘
			if($paramer[bid]){
				if($config[joblist_top]!=1){
					$paramer[limit] = 5;
				}
				$where.="  and `xsdate`>'".time()."'";
			} 
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
			}

			//查询条数
			$limit = '';
			if($paramer[limit]){

				$limit = " limit ".$paramer[limit];
			}

			if($paramer[ispage]){
				$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
			}

			//排序字段默认为更新时间
            //置顶设置为随机5条时，随机查询
            if($paramer[bid] && $paramer[limit]){
                $order = " ORDER BY rand() ";
            }else{
                if($paramer[order] && $paramer[order]!="lastdate"){
    				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
    			}else{
    				$order = " ORDER BY `lastupdate` ";
    			}
            }
			//排序规则 默认为倒序
			if($paramer[sort]){
				$sort = $paramer[sort];
			}else{
				$sort = " DESC";
			} 
			$where.=$order.$sort;
		}
		
		
			
		$job_jias = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($job_jias) && !empty($job_jias)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_jias as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0 ||!file_exists(str_replace('./',APP_PATH,$value['logo']))){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			    
			//$comrat = $db->select_all("company_rating","`display`='1'");
			if($paramer[bid]){
				$noids=array();
			}	
			foreach($job_jias as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_jias[$key]);
					continue;
				}else{
					$job_jias[$key] = $db->array_action($value,$cache_array);
					$job_jias[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_jias[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_jias[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_jias[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_jias[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_jias[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_jias[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_jias[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_jias[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_jias[$key][logo] =$r_uid[$value['uid']][logo];
					$job_jias[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_jias[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_jias[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_jias[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_jias[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_jias[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_jias[$key]['redtime'] =1;
					}else{
						$job_jias[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$job_jias[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_jias[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_jias[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_jias[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_jias[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_jias[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job_jias[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job_jias[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_jias[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$job_jias[$key][ratlogo] = $v[com_pic];
							}else{
								$job_jias[$key][ratlogo] ='';
							}
							$job_jias[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_jias[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_jias[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_jias[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jias[$key][name_n]);
						$job_jias[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jias[$key][com_n]);
						$job_jias[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_jias[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($job_jias)){
				if($paramer[keyword]!=""&&!empty($job_jias)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job_jias = $job_jias; if (!is_array($job_jias) && !is_object($job_jias)) { settype($job_jias, 'array');}
foreach ($job_jias as $_smarty_tpl->tpl_vars['job_jias']->key => $_smarty_tpl->tpl_vars['job_jias']->value) {
$_smarty_tpl->tpl_vars['job_jias']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['job_jias']->key;
?>
<li><span <?php if ($_smarty_tpl->tpl_vars['key']->value+1<='3') {?>class="Top_box_span"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span>
<a href="<?php echo $_smarty_tpl->tpl_vars['job_jias']->value['job_url'];?>
" target="_blank" style="width:110px;"><?php echo $_smarty_tpl->tpl_vars['job_jias']->value['name'];?>
</a>
<u class="fl"><?php echo $_smarty_tpl->tpl_vars['job_jias']->value['job_city_one'];?>
</u>
<em><?php if ($_smarty_tpl->tpl_vars['job_jias']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['job_jias']->value['job_salary'];?>
</em></li>
<?php } ?>
</ul>
</div>
<!--div class="post_Top_box" style="margin-right:0px;">
<div class="post_Top_box_title Top_box_line2"><strong>最新会员</strong></div>
<ul class="post_Top_box_list">
<?php  $_smarty_tpl->tpl_vars['member_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $config;eval('$paramer=array("limit"=>"10","order"=>"\'reg_date\'","item"=>"\'member_list\'","key"=>"\'key\'","nocache"=>"")
;');$list=array();
		global $db,$db_config;
		$path = dirname(dirname(dirname(__FILE__)));
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where='1';
		//添加用户类别条件
		if($paramer[usertype])
		{
			$where .= " and `usertype`='".$paramer[usertype]."'";
		}
		//添加状态条件
		if($paramer[status])
		{
			$where .= " and `status`='".$paramer[status]."'";
		}
		if($paramer[ispage])
		{
			$limit = PageNav($paramer,$_GET,"q_class",$where,$Purl,'','2');
		}
		if($paramer[order])
		{
			$order = " ORDER BY `".$paramer[order]."`  desc";
		}else{
			$order = " ORDER BY `uid` desc";
		}
		if($paramer[limit])
		{
			$limit=" limit ".$paramer[limit];
		}
		$member_list = $db->select_all("member",$where.$order.$limit);
		if(is_array($member_list))
		{
			foreach($member_list as $m_k=>$m_v)
			{
				$member_list[$m_k]['url']=Url("ask",array("c"=>"friend","uid"=>$m_v['uid']));

			}
		}$member_list = $member_list; if (!is_array($member_list) && !is_object($member_list)) { settype($member_list, 'array');}
foreach ($member_list as $_smarty_tpl->tpl_vars['member_list']->key => $_smarty_tpl->tpl_vars['member_list']->value) {
$_smarty_tpl->tpl_vars['member_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['member_list']->key;
?>
<li><span <?php if ($_smarty_tpl->tpl_vars['key']->value+1<='3') {?>class="Top_box_span"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span>
<a href="<?php echo $_smarty_tpl->tpl_vars['member_list']->value['url'];?>
" target="_blank"  style="width:110px"><?php echo $_smarty_tpl->tpl_vars['member_list']->value['username'];?>
</a>
<em><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['member_list']->value['reg_date'],"%Y-%m-%d");?>
</em></li>
<?php } ?>
</ul>
</div>
<div class="clear"></div-->
</div>
<div class="clear"></div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png,.index_logoin,.index_logoin_current,.nav_list,.fairs_Status,.fairs_Status,.logoin_qybj,.logoin_grbj,.logoin_Shadow_right,.logoin_Shadow_left,.whitebg,.micro_resume_fast,.nav_list_hover a,#bg,.left_comapply_cont li,.icon2,.nav_list .nav_list_hover em,.Fast_right_icon_l,.Fast_right_icon_r,.index_logoin_after,.logoin_after em,.logoin_after_su2,.logoin_after_su1,.hbg,.pagination li a,.firm_post_list,.Auction_tit,.yun_title,.Recommended_tit,.Com_Search_Results_r ul .All_post_h1_act,.sButtonBlock a.closeButton,.Comment_list_top,.icon,.yun_wap_m_bg,.micro_box');
<?php echo '</script'; ?>
>
<![endif]-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
