<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-28 20:00:46
         compiled from "/www/fpwjob/uploads/app/template/wap/school.htm" */ ?>
<?php /*%%SmartyHeaderCode:16489612695e30226e57d273-17045572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d95ec66ecbd6c50a65bdd6de56dc3d12eb8721d' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/school.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16489612695e30226e57d273-17045572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hd' => 0,
    'lunbo' => 0,
    'coms' => 0,
    'xjhlist' => 0,
    'rlist' => 0,
    'academy_name' => 0,
    'config' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e30226e606c47_13342076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e30226e606c47_13342076')) {function content_5e30226e606c47_13342076($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_school.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="wap_school_hd" style="height:130px;">
<!-- --------------------幻灯片-------------------- -->
<?php if ($_smarty_tpl->tpl_vars['hd']->value) {?>
<section>
   <div id="ad" class="flexslider">
		<ul class="slides">
		<?php  $_smarty_tpl->tpl_vars["lunbo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lunbo"]->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["lunbo"]->key => $_smarty_tpl->tpl_vars["lunbo"]->value) {
$_smarty_tpl->tpl_vars["lunbo"]->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars["lunbo"]->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['lunbo']->value['pic']) {?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['url'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['pic'];?>
" width='100%' /></a></li>
		<?php }?>
		<?php } ?>
		</ul>
	</div> 
</section>
<?php } else { ?>
<section>
   <div id="ad" class="flexslider">
		<ul class="slides">
		<?php  $_smarty_tpl->tpl_vars["lunbo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lunbo"]->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[50];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 0;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0')&&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars["lunbo"]->key => $_smarty_tpl->tpl_vars["lunbo"]->value) {
$_smarty_tpl->tpl_vars["lunbo"]->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars["lunbo"]->key;
?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['src'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['pic'];?>
" width='100%'/></a></li>
		<?php } ?>
		</ul>
	</div> 
</section>
<?php }?>
</div>
<div class="wap_school_tit"><i class="wap_school_tit_icon wap_school_tit_icon_mq"></i><span class="wap_school_tit_s">名企专区</span></div>
<div class="wap_school_companyList">
 <ul>
 	<?php  $_smarty_tpl->tpl_vars['coms'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coms']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("rec"=>"1","limit"=>"6","item"=>"\'coms\'","nocache"=>"")
;');$coms=array();
		
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
		$coms=array();
		while($rs = $db->fetch_array($Query)){
			$coms[] = $db->array_action($rs,$cache_array);
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
							$coms[$key]['color'] = $val['com_color'];
							if($val['com_pic']&&file_exists(APP_PATH.$val['com_pic'])){
								$coms[$key]['ratlogo'] = $val['com_pic'];
    						}
							$coms[$key]['ratname'] = $val['name'];
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
				foreach($coms as $key=>$value){
					foreach($msglist as $k=>$v){
						if($value['uid']==$v['cuid']){
							$coms[$key]['msg'][$k]['content'] = $v['content'];
							$coms[$key]['msg'][$k]['name'] = $v['name'];
							$coms[$key]['msg'][$k]['photo'] = $v['photo'];
							$coms[$key]['msg'][$k]['eid'] = $v['def_job'];
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
				foreach($coms as $key=>$value){
					$coms[$key]['jobnum'] = 0;
					foreach($JobList as $k=>$v){
						if($value['uid']==$v['uid']){
							$id = $v['id'];
							$coms[$key]['newsjob'] = $v['name'];
							$coms[$key]['newsjob_status'] = $v['status'];
							$coms[$key]['r_status'] = $v['r_status'];

							$v = $db->array_action($value,$cache_array);
							$v['job_url'] = Url("job",array("c"=>"comapply","id"=>$JobList[$k]['id']),"1");
							$v['id']= $id;
							$v['name'] = $coms[$key]['newsjob'];
							$coms[$key]['joblist'][] = $v;
							$coms[$key]['jobnum'] = $coms[$key]['jobnum']+1;
						}
					}
					/*
					foreach($comrat as $k=>$v){
						if($value['rating']==$v['id']){
							$coms[$key]['color'] = $v['com_color'];
							$coms[$key]['ratlogo'] = $v['com_pic'];
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
				foreach($coms as $key=>$value){
					$coms[$key]['newsnum'] = 0;
					foreach($NewsList as $k=>$v){
						if($value['uid']==$v['uid']){
							$coms[$key]['newslist'][] = $v;
							$coms[$key]['newsnum'] = $coms[$key]['newsnum']+1;
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
				foreach($coms as $key=>$value){
					$coms[$key]['shownum'] = 0;
					foreach($ShowList as $k=>$v){
						if($value['uid']==$v['uid']){
							$coms[$key]['showlist'][] = $v;
							$coms[$key]['shownum'] = $coms[$key]['shownum']+1;
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
				foreach($coms as $key=>$value){
					$jobname=array();
                    $coms[$key]['ltjobnum'] = 0;
					foreach($JobList as $k=>$v){
						if($coms[$key]['ltjobnum']>=$paramer['ltjob']){continue;}
						if($value['uid']==$v['uid']){
							$url = Url("lietou",array("c"=>"jobcomshow","id"=>$v['id']));
							$v['job_url'] = $url;
							$jobname[] = "<a href='".$url."'>".$v['job_name']."</a>";
                            $coms[$key]['ltjoblist'][] = $v;
                            $coms[$key]['ltjobnum'] = $coms[$key]['ltjobnum']+1;
						}
					}
					$coms[$key]['ltjob'] = @implode(",",$jobname);
				}
			}
		}
		//企业黄页 是否关注  201305_gl
		if($paramer['firm']){
			if($_COOKIE[uid]){$atnlist = $db->select_all("atn","`uid`='$_COOKIE[uid]'");}
			if(is_array($coms)){
				foreach($coms as $key=>$value){
					if(!empty($atnlist)){
						foreach($atnlist as $v){
							if($value['uid'] == $v['sc_uid']){
								$coms[$key]['atn'] = "取消关注";
                                $coms[$key]['atnstatus'] = "1";
								break;
							}else{
								$coms[$key]['atn'] = "关注";
							}
						}
					}else{
						$coms[$key]['atn'] = "关注";
					}
				}
			}
		}
		if(is_array($coms)){
			foreach($coms as $key=>$value){
				if($value['shortname']){
    				$coms[$key]['name']=$value['shortname'];
    			}
				$coms[$key]['com_url'] = Url("company",array("c"=>"show","id"=>$value['uid']));
				$coms[$key]['joball_url'] = Url("company",array("c"=>"show","id"=>$value['uid'],"tp"=>"post")); 
				if(!$value['logo'] || $value['logo_status']!=0 || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$value['logo']))){
				    $coms[$key]['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
				}else{
					$coms[$key]['logo'] = str_replace("./",$config['sy_weburl']."/",$value['logo']);
				} 
				//获得福利待遇名称
				if(is_array($coms[$key]['welfare'])&&$coms[$key]['welfare']){
					foreach($coms[$key]['welfare'] as $val){
						$coms[$key]['welfarename'][]=$val;
					}
				}
			}
			if($paramer['keyword']!=""&&!empty($coms)){
				addkeywords('4',$paramer['keyword']);
			}
		}$coms = $coms; if (!is_array($coms) && !is_object($coms)) { settype($coms, 'array');}
foreach ($coms as $_smarty_tpl->tpl_vars['coms']->key => $_smarty_tpl->tpl_vars['coms']->value) {
$_smarty_tpl->tpl_vars['coms']->_loop = true;
?>
 	<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['coms']->value['uid']),$_smarty_tpl);?>
">
    <li id="<?php echo $_smarty_tpl->tpl_vars['coms']->value['uid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['coms']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['coms']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['coms']->value['uid'];?>
"></li></a>
     <?php }
if (!$_smarty_tpl->tpl_vars['coms']->_loop) {
?>
     <div class="wap_notip">暂无名企信息</div>
    <?php } ?>
 </ul>
</div>
<div class="clear"></div>


<div class="wap_school_box wap_school_tit_xjh">
<div class="wap_school_tit"><i class="wap_school_tit_icon wap_school_tit_icon_xj"></i><span class="wap_school_tit_s">宣讲会</span><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'school','a'=>'xjh'),$_smarty_tpl);?>
"class="wap_school_more">更多>></a></div>
<?php  $_smarty_tpl->tpl_vars['xjhlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xjhlist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("item"=>"\'xjhlist\'","limit"=>"5","islt"=>"4","nocache"=>"")
;');$xjhlist=array();
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "`status`=1";
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
			$com=$db->select_all("company","`name` like '%".$paramer["keyword"]."%'","uid");
			foreach($com as $v){
				$cuids[]=$v[uid];
			}
			$where.=" AND `uid` in (".@implode(",",$cuids).")";
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
		//所属行业：
		if($paramer["level"]){
			$sch=$db->select_all("school_academy","`school_level`='".$paramer["level"]."'","id");
			foreach($sch as $v){
				$sids[]=$v[id];
			}
			$where.=" AND `schoolid` in (".@implode(",",$sids).")";
		}
		//用户uid
		if($paramer["uid"]){
			$where.=" AND `uid`='".$paramer["uid"]."'";
		}
		//院校uid
		if($paramer["sid"]){
			$where.=" AND `schoolid`='".$paramer["sid"]."'";
		}
		//近期，往期
		if($paramer["tp"]){
			$where.=" AND `etime`<'".time()."'";
		}else{
			$where.=" AND `etime`>'".time()."'";
		}
		if($paramer[adtime]){
			if($paramer[adtime]==1){
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			if($paramer["tp"]){
					$where.=" AND stime>$beginToday";
				}else{
					$where.=" AND stime<$beginToday";
				}
    		}else{
    			$time=time();
				if($paramer["tp"]){
					$adtime = $time-($paramer[adtime]*86400);
					$where.=" AND stime>$adtime";
				}else{
					$adtime = $time+($paramer[adtime]*86400);
					$where.=" AND stime<$adtime";
				}
    		}
		}
		if($paramer["limit"]){
			$limit= " limit $paramer[limit]";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"school_xjh",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"0",$_smarty_tpl);
         
		}
		//排序字段（默认按照uid排序）
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order]";
		}else{
			$where .= " ORDER BY  `ctime`  ";
		}
		//排序规则（默认按照开始时间排序倒序）
		if($paramer["sort"]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " DESC ";
		}
		$xjhlist=$db->select_all("school_xjh",$where.$limit);
		if(is_array($xjhlist)){
			$cache_array = $db->cacheget();
			foreach($xjhlist as $v){
                $xjhid[]=$v['id'];
				$comuid[]=$v['uid'];
				$suid[]=$v['schoolid'];
    		}
            $atnlist=$db->select_all("atn","`xjhid` IN (".@implode(',',$xjhid).") and `uid`='".$_COOKIE['uid']."'");
			$comlist=$db->select_all("company","`uid` IN (".@implode(',',$comuid).")","`uid`,`name`,`logo`");
			$academy=$db->select_all("school_academy","`id` IN (".@implode(',',$suid).")","`id`,`schoolname`");
			$week=array("周日","周一","周二","周三","周四","周五","周六");
			foreach($xjhlist as $k=>$v){
				$xjhlist[$k]["city_two"] = $cache_array['city_name'][$v["cityid"]];
				$xjhlist[$k]["xjh_url"] = Url("school",array("c"=>"xjhshow","id"=>$v['id']));
				$xjhlist[$k]["com_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
				$xjhlist[$k]["sch_url"] = Url("school",array("c"=>"academyshow","id"=>$v['schoolid']));
				$xjhlist[$k]["ctime"] = date("Y-m-d",$v["ctime"]);
				$xjhlist[$k]["xjh_date"] = date("Y-m-d",$v["stime"]);
				$xjhlist[$k]["xjh_shour"] = date("H:i",$v["stime"]);
				$xjhlist[$k]["xjh_ehour"] = date("H:i",$v["etime"]);
				$xjhlist[$k]["xjh_week"] = $week[date("w",$v["stime"])];
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
						if($paramer[comlen]){
							$xjhlist[$k]["com_name"]=mb_substr($val['name'],0,$paramer[comlen],"utf-8");
						}else{
							$xjhlist[$k]["com_name"]=$val['name'];
						}
						if(!$val['logo'] || !file_exists(str_replace("./",APP_PATH,$val['logo']))){
							$xjhlist[$k]['pic'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$xjhlist[$k]['pic'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
						}
    				}
				}
				foreach($academy as $val){
					if($v['schoolid']==$val['id']&&$val['schoolname']){
    					$xjhlist[$k]["sch_name"]=$val['schoolname'];
    				}
				}
                foreach($atnlist as $val){
					if($v['id']==$val['xjhid']){
    					$xjhlist[$k]["xjhid_n"]=$val['xjhid'];
    				}
				}
			}
		}$xjhlist = $xjhlist; if (!is_array($xjhlist) && !is_object($xjhlist)) { settype($xjhlist, 'array');}
foreach ($xjhlist as $_smarty_tpl->tpl_vars['xjhlist']->key => $_smarty_tpl->tpl_vars['xjhlist']->value) {
$_smarty_tpl->tpl_vars['xjhlist']->_loop = true;
?>
<div class="wap_school_joblist">
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['xjhlist']->value['uid']),$_smarty_tpl);?>
">
<div class="wap_school_jobname"><?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['com_name'];?>
</div>
<div class="wap_school_xjhtime"><i class="wap_school_xjhtime_icon"></i><?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['xjh_date'];?>
 <?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['xjh_shour'];?>
 </div>
<div class="wap_school_xjh_add"><i class="wap_school_xjhadd_icon"></i><?php echo $_smarty_tpl->tpl_vars['xjhlist']->value['address'];?>
</div>
</a>
</div>
<?php }
if (!$_smarty_tpl->tpl_vars['xjhlist']->_loop) {
?>
     <div class="wap_notip">暂无宣讲会信息</div>
<?php } ?>

</div>
<div class="wap_school_box wap_school_tit_ws">
<div class="wap_school_tit"><i class="wap_school_tit_icon wap_school_tit_icon_ws"></i><span class="wap_school_tit_s">网申职位</span><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'school','a'=>'job'),$_smarty_tpl);?>
" class="wap_school_more">更多>></a></div>
<?php  $_smarty_tpl->tpl_vars['rlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rlist']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("namelen"=>"30","comlen"=>"30","is_graduate"=>"\'1\'","limit"=>"5","item"=>"\'rlist\'","nocache"=>"")
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
		if($paramer[sdate]){
			$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and  `state`=1";
		}else{
			$where = "`state`=1 ";
		}
        
		//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
		if($paramer[uid]){
			$where .= " AND `uid` = '$paramer[uid]'";
		}
		//是否推荐职位
		if($paramer[rec]){
			$recRating = array();
		
			if($comrat){
				foreach($comrat as $value){
					if($value[display]=='1' && $value[category]=='1' && $value[jobrec]=='2'){
						$recRating[] = $value['id'];
					}
				}
			}
			if(!empty($recRating)){
				$recRaringId = implode(',',$recRating);
				
				$where.=" AND (`rating` IN (".$recRaringId.") OR `rec_time`>=".time().")";

			}else{
				$where.=" AND `rec_time`>=".time();
			}
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
			$where.= " and `r_status`='1'";
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
		//公司规模
		if($paramer[mun]){
			$where .= " AND `mun` = $paramer[mun]";
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
		//竞价招聘
		if($paramer[bid]){
			$where.="  and `xsdate`>'".time()."'";
		} 
		//筛除重复
		if($paramer[noids]==1 && !empty($noids)){
			$where.=" AND `id` NOT IN (".@implode(',',$noids).")";
		}
		//自定义查询条件，默认取代上面任何参数直接使用该语句
		if($paramer[where]){
			$where = $paramer[where];
		}

		//查询条数
		if($paramer[limit]){
			$limit = " limit ".$paramer[limit];
		}

		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
          
		} 
		//排序字段默认为更新时间
		if($paramer[order] && $paramer[order]!="lastdate"){
			$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
		}else{
			$order = " ORDER BY `lastupdate` ";
		}
		//排序规则 默认为倒序
		if($paramer[sort]){
			$sort = $paramer[sort];
		}else{
			$sort = " DESC";
		} 
		$where.=$order.$sort;  
		 
		$rlist = $db->select_all("company_job",$where.$limit);
		if(is_array($rlist)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($rlist as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`pr`,`hy`,`mun`,`shortname`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || !file_exists(APP_PATH.$value['logo'])){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
			 			foreach($rlist as $keyn=>$valuen){
							if($valuen["uid"]==$value["uid"]){
								$rlist[$keyn]['logo'] = $value['logo'];
							}
			 			}
					}
				}
			}
			    
			//$comrat = $db->select_all("company_rating","`display`='1'");
			$noids=array();
			foreach($rlist as $key=>$value){
				if($paramer[bid]){
					$noids[] = $value[id];
				}
				$rlist[$key] = $db->array_action($value,$cache_array);
				$rlist[$key][stime] = date("m月d日",$value[sdate]);
			
				if($arr_data['sex'][$value['sex']]){
    				$rlist[$key][sex_n]=$arr_data['sex'][$value['sex']];
    			}
				$rlist[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
				$rlist[$key][wstime] = date("Y年m月d日 H:i",$value[lastupdate]);
				if($value[minsalary]&&$value[maxsalary]){
					$rlist[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
				}elseif($value[minsalary]){
					$rlist[$key][job_salary] =$value[minsalary]."以上";
				}else{
                    $rlist[$key][job_salary] ="面议";
                }
				if($r_uid[$value['uid']][shortname]){
    				$rlist[$key][com_name] =$r_uid[$value['uid']][shortname];
    			}
				$rlist[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
				$rlist[$key][logo] =$r_uid[$value['uid']][logo];
				$rlist[$key][pr_n] =$r_uid[$value['uid']][pr_n];
				$rlist[$key][hy_n] =$r_uid[$value['uid']][hy_n];
				$rlist[$key][mun_n] =$r_uid[$value['uid']][mun_n];
				$time=$value['lastupdate'];
				//今天开始时间戳
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$rlist[$key]['time'] ="一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$rlist[$key]['time'] ="昨天";
				}elseif($time>$beginToday){	
					$rlist[$key]['time'] = date("H:i",$value['lastupdate']);
					$rlist[$key]['redtime'] =1;
				}else{
					$rlist[$key]['time'] = date("Y-m-d",$value['lastupdate']);
				}
				//获得福利待遇名称
				if(is_array($rlist[$key]['welfare'])&&$rlist[$key]['welfare']){
					foreach($rlist[$key]['welfare'] as $val){
						//$rlist[$key]['welfarename'][]=$cache_array['comclass_name'][$val];
						$rlist[$key]['welfarename'][]=$val;
					}

				}
				//截取公司名称
				if($paramer[comlen]){
					if($r_uid[$value['uid']][shortname]){
    					$rlist[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
    				}else{
    					$rlist[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
    				}
				}
				//截取职位名称
				if($paramer[namelen]){
					if($value['rec_time']>time()){
						$rlist[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
					}else{
						$rlist[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
					}
				}else{
					if($value['rec_time']>time()){
						$rlist[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
					}
				}
				//构建职位伪静态URL
				$rlist[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
				//构建企业伪静态URL
				$rlist[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
				foreach($comrat as $k=>$v){
					if($value[rating]==$v[id]){
						$rlist[$key][color] = str_replace("#","",$v[com_color]);
						$rlist[$key][ratlogo] = $v[com_pic];
						$rlist[$key][ratname] = $v[name];
					}
				}
				if($paramer[keyword]){
					$rlist[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
					$rlist[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
					$rlist[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$rlist[$key][name_n]);
					$rlist[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$rlist[$key][com_n]);
					$rlist[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
					$rlist[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
    			}
			}

			if(is_array($rlist)){
				if($paramer[keyword]!=""&&!empty($rlist)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$rlist = $rlist; if (!is_array($rlist) && !is_object($rlist)) { settype($rlist, 'array');}
foreach ($rlist as $_smarty_tpl->tpl_vars['rlist']->key => $_smarty_tpl->tpl_vars['rlist']->value) {
$_smarty_tpl->tpl_vars['rlist']->_loop = true;
?>
<div class="wap_school_joblist">
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['rlist']->value['id']),$_smarty_tpl);?>
">
<div class="wap_school_jobname"><?php echo $_smarty_tpl->tpl_vars['rlist']->value['name'];?>
</div>
<div class="wap_school_jobtime">网申时间：<?php echo $_smarty_tpl->tpl_vars['rlist']->value['wstime'];?>
</div>
<div class="wap_school_jobsq">申请</div>
</a>
</div>
<?php }
if (!$_smarty_tpl->tpl_vars['rlist']->_loop) {
?>
     <div class="wap_notip">暂无网申职位信息</div>
<?php } ?>
</div>

<div class="wap_school_box wap_school_tit_yx">
<div class="wap_school_tit"><i class="wap_school_tit_icon wap_school_tit_icon_yx"></i><span class="wap_school_tit_s">院校信息</span><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'school','a'=>'schoolacademy'),$_smarty_tpl);?>
" class="wap_school_more">更多>></a></div>
<?php  $_smarty_tpl->tpl_vars['academy_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['academy_name']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("limit"=>"6","item"=>"\'academy_name\'","name"=>"\'academy_name1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
   
		$cache_array = $db->cacheget();
		$city_name= $cache_array["city_name"];
		$schoolclass_name= $cache_array["schoolclass_name"];
		$where='1';
		if($config['sy_web_site']=="1"){
			if($config[provinceid]>0 && $config[provinceid]!=""){
				$paramer[provinceid] = $config[provinceid];
			}
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}

		}
        //关键字
        if($paramer[keyword]){
			$where.=" AND `schoolname` LIKE '%".$paramer['keyword']."%'";
		}
		if($paramer[provinceid]){
			$where .= " AND provinceid = $paramer[provinceid]";
		}
		
		if($paramer[cityid]){
			$where .= " AND (`cityid` IN ($paramer[cityid]))";
		}
        if($paramer[three_cityid]){
			$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
		}
		
		if($paramer[school_department]){
            $where .= " AND `school_department` = $paramer[school_department]";

		}
		if($paramer[level]){
            $where .= " AND `school_level` = $paramer[level]";
		}
        if($paramer[categty]){
            $where .= " AND `school_categty` = $paramer[categty]";
		}
        if($paramer[schoolinternet]){
            $where .= " AND `schoolinternet` = $paramer[schoolinternet]";
		}

		if($paramer[order]){
			$order = " ORDER BY `".$paramer[order]."`";
		}else{
			$order = " ORDER BY lastupdate ";
		}
		$sort = $paramer[sort]?$paramer[sort]:'DESC';
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}
		if($paramer[where]){
			$where = $paramer[where];
		}

        if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"school_academy",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
          
		} 
		$where.=$order.$sort;
		$academy_name=$db->select_all("school_academy",$where.$limit);	
		if($academy_name && is_array($academy_name)){
			foreach($academy_name as $k=>$v){
                $academy_name[$k]['id']=$v['id'];
                $academy_name[$k]['schoolname']=$v['schoolname'];
				$academy_name[$k]['provinceid']=$city_name[$v['provinceid']];
				$academy_name[$k]['cityid']=$city_name[$v['cityid']];
				$academy_name[$k]['three_cityid']=$city_name[$v['three_cityid']];
				$academy_name[$k]['school_department']=$schoolclass_name[$v['school_department']];
                $academy_name[$k]['school_level']=$schoolclass_name[$v['school_level']];
				$academy_name[$k]['school_categty']=$schoolclass_name[$v['school_categty']];
				$academy_name[$k]['schooltag']=$schoolclass_name[$v['schooltag']];
				$academy_name[$k]['address']=$v['address'];
				$academy_name[$k]['schoolemail']=$v['schoolemail'];
				$academy_name[$k]['schoolinternet']=$v['schoolinternet'];
				$academy_name[$k]['photo']=$v['photo'];
				$academy_name[$k]['diploma_url']=Url("talent",array("c"=>"show","id"=>$v['id']),"1");
				$academy_name[$k]['lastupdate'] = date("Y-m-d",$v['lastupdate']);
				$academy_name[$k]['downtime'] = date("Y-m-d H:i",$v['downtime']);
				}
			}
			foreach($academy_name as $k=>$v){
               if($paramer['keyword']){					
                    $academy_name[$k]['provinceid']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['provinceid']);
					$academy_name[$k]['cityid']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['cityid']);
					$academy_name[$k]['three_cityid']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['three_cityid']);
					$academy_name[$k]['school_department']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['school_department']);
                    $academy_name[$k]['school_level']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['school_level']);
					$academy_name[$k]['school_categty']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['school_categty']);
					$academy_name[$k]['schooltag']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['schooltag']);

                    
                    
                    $academy_name[$k]['address']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['address']);
					$academy_name[$k]['schoolemail']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['schoolemail']);
					$academy_name[$k]['schoolinternet']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['schoolinternet']);
					$academy_name[$k]['schoolname']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$academy_name[$k]['schoolname']);

				}
            }$academy_name = $academy_name; if (!is_array($academy_name) && !is_object($academy_name)) { settype($academy_name, 'array');}
foreach ($academy_name as $_smarty_tpl->tpl_vars['academy_name']->key => $_smarty_tpl->tpl_vars['academy_name']->value) {
$_smarty_tpl->tpl_vars['academy_name']->_loop = true;
?> 
<div class="wap_school_yxlist">
<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['academy_name']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_url(array('m'=>'wap','c'=>'school','a'=>'schoolacademyshow','id'=>$_tmp1),$_smarty_tpl);?>
">
<div class="wap_school_yxpic"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['academy_name']->value['photo'];?>
" width="50" height="50"></div>
<div class="wap_school_jobname"><?php echo $_smarty_tpl->tpl_vars['academy_name']->value['schoolname'];?>
</div>
<div class="wap_school_yxadd">所在城市：<?php echo $_smarty_tpl->tpl_vars['academy_name']->value['provinceid'];?>
-<?php echo $_smarty_tpl->tpl_vars['academy_name']->value['cityid'];?>
</div>
<div class="wap_school_jobtime">学科类别：<?php echo $_smarty_tpl->tpl_vars['academy_name']->value['school_categty'];?>
</div>
</a>
</div>
<?php }
if (!$_smarty_tpl->tpl_vars['academy_name']->_loop) {
?>
<div class="wap_notip">暂无院校信息</div>
<?php } ?>
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
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
/js/jquery.flexslider-min.js?v=2082"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
		$(".flexslider").flexslider({
		slideshowSpeed: 3000, //展示时间间隔ms
		animationSpeed: 3000, //滚动时间ms
		touch: true //是否支持触屏滑动(比如可用在手机触屏焦点图)
	});
    }); 
	marquee("2000",".sxl .sxlist");
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
