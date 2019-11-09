<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 20:02:49
         compiled from "/www/fpwjob/uploads/app/template/wap/company.htm" */ ?>
<?php /*%%SmartyHeaderCode:4893596065dc55969e798f7-62270091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b942b3d31656e631aac5cf34323791048db9cf5' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/company.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4893596065dc55969e798f7-62270091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'city_name' => 0,
    'industry_name' => 0,
    'comclass_name' => 0,
    'searchurl' => 0,
    'list' => 0,
    'style' => 0,
    'key' => 0,
    'one' => 0,
    'waflist' => 0,
    'total' => 0,
    'pagenav' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc55969f24b36_54235584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc55969f24b36_54235584')) {function content_5dc55969f24b36_54235584($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<section>
  <div class="searchOptions clearfix">
    <ul class="searchOptions_list">
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
	  <li class="Sorthy popup" data-pop="Sorthy"><a href="javascript:void(0);" class="searchOptions_list_a"><span class="job_ov"><?php if ($_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']]) {
echo mb_substr($_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']],0,6,'utf-8');
} else { ?>行业<?php }?></span><i class="searchOptions_icon"></i></a></li>
      <li class="Sortpr popup" data-pop="Sortpr"><a href="javascript:void(0);" class="searchOptions_list_a"><span class="job_ov"><?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['pr']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['pr']];
} else { ?>性质<?php }?></span><i class="searchOptions_icon"></i></a></li>
      <li class="Sortmun popup" data-pop="Sortmun" style="border-right:none;"><a href="javascript:void(0);" class="searchOptions_list_a"><span class="job_ov"><?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['mun']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['mun']];
} else { ?>规模<?php }?></span><i class="searchOptions_icon"></i></a></li>
      <input type="hidden" id="searchurl" value="<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;?>
" />
      <input type="hidden" id="waptype" value="1" />
    </ul>    
  </div>
</section>
 <div class="clear"></div>
<div class="warp_content clear">
  <section>
    <div class="job_list_content">
    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("ispage"=>"1","isjob"=>"1","firm"=>"1","hy"=>"\'auto.hy\'","pr"=>"\'auto.pr\'","mun"=>"\'auto.mun\'","provinceid"=>"\'auto.provinceid\'","cityid"=>"\'auto.cityid\'","three_cityid"=>"\'auto.three_cityid\'","keyword"=>"\'auto.keyword\'","rec"=>"\'auto.rec\'","order"=>"\'lastupdate\'","limit"=>"20","item"=>"\'list\'","key"=>"\'key\'","nocache"=>"")
;');$list=array();
		
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
		$list=array();
		while($rs = $db->fetch_array($Query)){
			$list[] = $db->array_action($rs,$cache_array);
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
							$list[$key]['color'] = $val['com_color'];
							if($val['com_pic']&&file_exists(APP_PATH.$val['com_pic'])){
								$list[$key]['ratlogo'] = $val['com_pic'];
    						}
							$list[$key]['ratname'] = $val['name'];
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
				foreach($list as $key=>$value){
					foreach($msglist as $k=>$v){
						if($value['uid']==$v['cuid']){
							$list[$key]['msg'][$k]['content'] = $v['content'];
							$list[$key]['msg'][$k]['name'] = $v['name'];
							$list[$key]['msg'][$k]['photo'] = $v['photo'];
							$list[$key]['msg'][$k]['eid'] = $v['def_job'];
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
				foreach($list as $key=>$value){
					$list[$key]['jobnum'] = 0;
					foreach($JobList as $k=>$v){
						if($value['uid']==$v['uid']){
							$id = $v['id'];
							$list[$key]['newsjob'] = $v['name'];
							$list[$key]['newsjob_status'] = $v['status'];
							$list[$key]['r_status'] = $v['r_status'];

							$v = $db->array_action($value,$cache_array);
							$v['job_url'] = Url("job",array("c"=>"comapply","id"=>$JobList[$k]['id']),"1");
							$v['id']= $id;
							$v['name'] = $list[$key]['newsjob'];
							$list[$key]['joblist'][] = $v;
							$list[$key]['jobnum'] = $list[$key]['jobnum']+1;
						}
					}
					/*
					foreach($comrat as $k=>$v){
						if($value['rating']==$v['id']){
							$list[$key]['color'] = $v['com_color'];
							$list[$key]['ratlogo'] = $v['com_pic'];
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
				foreach($list as $key=>$value){
					$list[$key]['newsnum'] = 0;
					foreach($NewsList as $k=>$v){
						if($value['uid']==$v['uid']){
							$list[$key]['newslist'][] = $v;
							$list[$key]['newsnum'] = $list[$key]['newsnum']+1;
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
				foreach($list as $key=>$value){
					$list[$key]['shownum'] = 0;
					foreach($ShowList as $k=>$v){
						if($value['uid']==$v['uid']){
							$list[$key]['showlist'][] = $v;
							$list[$key]['shownum'] = $list[$key]['shownum']+1;
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
				foreach($list as $key=>$value){
					$jobname=array();
                    $list[$key]['ltjobnum'] = 0;
					foreach($JobList as $k=>$v){
						if($list[$key]['ltjobnum']>=$paramer['ltjob']){continue;}
						if($value['uid']==$v['uid']){
							$url = Url("lietou",array("c"=>"jobcomshow","id"=>$v['id']));
							$v['job_url'] = $url;
							$jobname[] = "<a href='".$url."'>".$v['job_name']."</a>";
                            $list[$key]['ltjoblist'][] = $v;
                            $list[$key]['ltjobnum'] = $list[$key]['ltjobnum']+1;
						}
					}
					$list[$key]['ltjob'] = @implode(",",$jobname);
				}
			}
		}
		//企业黄页 是否关注  201305_gl
		if($paramer['firm']){
			if($_COOKIE[uid]){$atnlist = $db->select_all("atn","`uid`='$_COOKIE[uid]'");}
			if(is_array($list)){
				foreach($list as $key=>$value){
					if(!empty($atnlist)){
						foreach($atnlist as $v){
							if($value['uid'] == $v['sc_uid']){
								$list[$key]['atn'] = "取消关注";
                                $list[$key]['atnstatus'] = "1";
								break;
							}else{
								$list[$key]['atn'] = "关注";
							}
						}
					}else{
						$list[$key]['atn'] = "关注";
					}
				}
			}
		}
		if(is_array($list)){
			foreach($list as $key=>$value){
				if($value['shortname']){
    				$list[$key]['name']=$value['shortname'];
    			}
				$list[$key]['com_url'] = Url("company",array("c"=>"show","id"=>$value['uid']));
				$list[$key]['joball_url'] = Url("company",array("c"=>"show","id"=>$value['uid'],"tp"=>"post")); 
				if(!$value['logo'] || $value['logo_status']!=0 || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$value['logo']))){
				    $list[$key]['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
				}else{
					$list[$key]['logo'] = str_replace("./",$config['sy_weburl']."/",$value['logo']);
				} 
				//获得福利待遇名称
				if(is_array($list[$key]['welfare'])&&$list[$key]['welfare']){
					foreach($list[$key]['welfare'] as $val){
						$list[$key]['welfarename'][]=$val;
					}
				}
			}
			if($paramer['keyword']!=""&&!empty($list)){
				addkeywords('4',$paramer['keyword']);
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?> 
      <div class="com_list_box"> 
      <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['list']->value['uid']),$_smarty_tpl);?>
" class="job_list">
      <div class="com_list_t_box">
      <div class="com_list_logo_box"><img src="<?php if ($_smarty_tpl->tpl_vars['list']->value['logo']) {
echo $_smarty_tpl->tpl_vars['list']->value['logo'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];
}?>"  onerror="if($(this).attr('load')!='1'){$(this).attr('load',1);this.src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
';}"></div>
      <div class="com_list_box_c">
        <h3><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['name'],0,17,'utf-8');?>
               
          <?php if ($_smarty_tpl->tpl_vars['list']->value['ratlogo']!='') {?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['list']->value['ratlogo'];?>
" width="12" height="12"/> <?php }?> 
			<?php if ($_smarty_tpl->tpl_vars['list']->value['rec']=='1'&&$_smarty_tpl->tpl_vars['list']->value['hottime']>time()) {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/firm_icon.png"><?php }?>		  
          <?php if ($_smarty_tpl->tpl_vars['list']->value['yyzz_status']=='1') {?><i class="job_qy_rz_icon"></i><?php }?> </h3>
        </div>
        <div class="com_list_box_js">
        <span class="com_list_box_js_s">
			<i class="com_list_box_js_icon com_list_box_js_icon_map"></i><?php echo $_smarty_tpl->tpl_vars['list']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['list']->value['job_city_two'];?>

		</span>

		<span class="com_list_box_js_s com_list_box_js_s_hy">
			<i class="com_list_box_js_icon com_list_box_js_icon_hy"></i><?php echo $_smarty_tpl->tpl_vars['list']->value['job_pr'];?>

		</span> 
      </div>
        </div>
            </a> 
        <div class="com_list_box_joblist">
        <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['joblist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['one']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value<3) {?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value>0) {?>
        <?php }?>
		<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['one']->value['id']),$_smarty_tpl);?>
" class="com_list_box_joblist_a"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</a>
        <?php }?>
        <?php } ?>
        <span class="com_list_box_jobzs">共<em class="com_list_box_jobncor"><?php echo count($_smarty_tpl->tpl_vars['list']->value['joblist']);?>
</em>个职位</span>
        </div>
   <!-- <?php if ($_smarty_tpl->tpl_vars['list']->value['welfarename']) {?>
      <div class="index_wap_joblist_flbox" style="padding-bottom:10px; padding-left:10px;">
      <?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
      <span class="index_wap_joblist_fl"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span><?php } ?></div><?php }?>-->
        </div>
      <?php } ?> 
      </div>
  </section>
  <?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?>
  <?php if ($_GET['keyword']!='') {?>
  <div class="wap_member_no">没有搜索到企业<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company'),$_smarty_tpl);?>
">重新搜索</a></div></div>
  <?php } else { ?>
  <div class="wap_member_no">暂无企业<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company'),$_smarty_tpl);?>
">重新搜索</a></div></div>
  <?php }?>
  <?php } else { ?>
  <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
  <?php }?>
  <div> </div>
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/search.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
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
