<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-17 12:24:55
         compiled from "/www/fpwjob/uploads/app/template/wap/part.htm" */ ?>
<?php /*%%SmartyHeaderCode:750419245e4a15979453e1-15641241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5c79c3fd0f44800f1a669fc17381e14475ab0e3' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/part.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '750419245e4a15979453e1-15641241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'city_name' => 0,
    'partclass_name' => 0,
    'searchurl' => 0,
    'partlist' => 0,
    'total' => 0,
    'pagenav' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4a15979d4347_39151819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4a15979d4347_39151819')) {function content_5e4a15979d4347_39151819($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<section>
    <div class="searchOptions clearfix partwork_nav">
        <ul class="searchOptions_list ">
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

							<?php } else { ?>
								兼职区域
							<?php }?>
						</span>
                    <i class="searchOptions_icon"></i>
                </a>
            </li>
            <?php }?>

            <li class="Sorttype popup" data-pop="Sorttype">
                <a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['partclass_name']->value[$_GET['type']]) {
echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_GET['type']];
} else { ?>兼职类型<?php }?><i class="searchOptions_icon"></i></a>
            </li>
            <li class="Sortcycle popup" data-pop="Sortcycle" style="border-right:none;">
                <a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['partclass_name']->value[$_GET['cycle']]) {
echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_GET['cycle']];
} else { ?>结算周期<?php }?><i class="searchOptions_icon"></i></a>
            </li>
            <input type="hidden" id="searchurl" value="<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;?>
" />
            <input type="hidden" id="waptype" value="1" />
        </ul>
    </div>
</section>
<div class="clear"></div>


<section>
    <div class="warp_content clear">
        <div class="job_list_content">
            <ul class="part_box">
                <?php  $_smarty_tpl->tpl_vars['partlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partlist']->_loop = false;
global $db,$db_config,$config;
		$time = time();


		//可以做缓存
        eval('$paramer=array("item"=>"\'partlist\'","ispage"=>"1","limit"=>"10","cycle"=>"\'auto.cycle\'","provinceid"=>"\'auto.provinceid\'","cityid"=>"\'auto.cityid\'","three_cityid"=>"\'auto.three_cityid\'","type"=>"\'auto.type\'","keyword"=>"\'auto.keyword\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

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
		}

    if(isUseSphinx()){//测试阶段，加false避开执行sphinx查询
      $sphinx = new sphinx();
      $where = array();
      $queryStr = array();

      $queryStr [] = "(@deadline > $time | @deadline = 0)";
      $where[] = array("setFilter", "state", array(1));
      $where[] = array("setFilter", "r_status", array(2), true);

      if($paramer[noid]){
        $where[] = array("setFilter", "id", array($paramer[noid]), true);
      }
      //关键字
      if($paramer[keyword]){
        $where["keywords"] = $paramer["keyword"];
      }
      //城市大类
      if($paramer[provinceid]){
        $where[] = array("setFilter", "provinceid", array($paramer["provinceid"]));
      }
      //城市子类
      if($paramer['cityid']){
        $queryStr [] = "(@provinceid = $paramer[cityid] or 
          @cityid = $paramer[cityid] or
          @three_cityid = $paramer[cityid] )";
      }

      //城市三级子类
      if($paramer['three_cityid']){
        $pThree = explode(",", $paramer[three_cityid]);
        $where[] = array("setFilter", "three_cityid", array($pThree)); 
      }
      if($paramer['cityin']){
        $pThree = explode(",", $paramer[cityin]);
        $where[] = array("setFilter", "three_cityid", array($pThree)); 
      }
      //推荐兼职
      if($paramer[rec]){
        $where[] = array("setFilterRange", "rec_time", $time, 99999999);
      }
      //工作类型
      if($paramer[type]){
        $where[] = array("setFilter", "type", array($paramer[type]) ); 
      }
      //结算周期
      if($paramer[cycle]){
        $where[] = array("setFilter", "billing_cycle", array($paramer[cycle]) ); 
      }

      if(count($queryStr) > 0){
        $where["queryStr"] = $queryStr;
      }

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
        $limitArr = PageNav($paramer,$_GET,"partjob",$where,$Purl,"",$paramer[limit]?$paramer[limit]:"6",$_smarty_tpl);
        $ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "partjob");
      }
      else if($paramer[limit]){
        $ids = $sphinx->getIds($where, 0, $paramer[limit], "partjob");
      }
      else{
        $ids = $sphinx->getIds($where, 0, 20, "partjob");
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
      $where = "(`deadline`>'$time' or `deadline`=0) and `state`=1 and `r_status`<>2";
        
      if($paramer[noid]){
        $where.=" and `id`<>'".$paramer['noid']."'";
      }
      
      //关键字
      if($paramer[keyword]){
        $where .= " AND `name` LIKE '%".$paramer[keyword]."%'";
      }
      //城市大类
      if($paramer[provinceid]){
        $where .= " AND `provinceid` = $paramer[provinceid]";
      }
      //城市子类
      if($paramer['cityid']){
        $where .= " AND (`provinceid`=$paramer[cityid] or `cityid`=$paramer[cityid] or `three_cityid`=$paramer[cityid])";
      }
      //城市三级子类
      if($paramer['three_cityid']){
        $where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
      }
      if($paramer['cityin']){
        $where .= " AND `three_cityid` IN ($paramer[cityin])";
      }
      //推荐兼职
      if($paramer[rec]){
        $where.=" AND `rec_time`>".time();
      }
      //工作类型
      if($paramer[type]){
        $where .= " AND `type` = $paramer[type]";
      }
      //结算周期
      if($paramer[cycle]){
        $where .= " AND `billing_cycle` = $paramer[cycle]";
      }
      //按照职位名称匹配
      /*if($paramer[keyword]){
        $where1[]="`name` LIKE '%".$paramer[keyword]."%'";
        include PLUS_PATH."/city.cache.php";
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
      }*/

      

      //查询条数
      if($paramer[limit]){
        $limit = " limit ".$paramer[limit];
      }
      if($paramer[ispage]){
        $limit = PageNav($paramer,$_GET,"partjob",$where,$Purl,"",$paramer[limit]?$paramer[limit]:"6",$_smarty_tpl);
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
    }//end if($config["useSphinx"]) else
		
		$partlist = $db->select_all("partjob",$where.$limit);
		if(is_array($partlist)){
			foreach($partlist as $v){
    			$comuids[]=$v['uid'];
    		}
			$comlist=$db->select_all("company","`uid` in(".@implode(',',$comuids).")","`uid`,`shortname`");
			foreach($partlist as $key=>$value){
				$partlist[$key] = $db->part_array_action($value,$cache_array);
				$partlist[$key][stime] = date("Y-m-d",$value[sdate]);
				$partlist[$key][etime] = date("Y-m-d",$value[edate]);
				$partlist[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
				$time=$value['lastupdate'];
				//今天开始时间戳
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$partlist[$key]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$partlist[$key]['time'] = "昨天";
				}elseif($time>$beginToday){
					$partlist[$key]['time'] = "今天";
				}else{
					$partlist[$key]['time'] = date("Y-m-d",$value['lastupdate']);
				}
				foreach($comlist as $v){
    				if($value[uid]==$v[uid]&&$v[shortname]){
    					$partlist[$key]['com_name'] = $v[shortname];
    				}
    			}
				//截取职位名称
				if($paramer[namelen]){
					$partlist[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
				}
				//构建职位伪静态URL
				$partlist[$key][job_url] = Url("part",array("c"=>"show","id"=>$value[id]),"1");
				if($paramer[keyword]){
					$partlist[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
					$partlist[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$partlist[$key][name_n]);
					$partlist[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
					/*$partlist[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);*/
				}
			}
			if(is_array($partlist)){
				if($paramer[keyword]!=""&&!empty($partlist)){
					addkeywords('2',$paramer[keyword]);
				}
			}
		}$partlist = $partlist; if (!is_array($partlist) && !is_object($partlist)) { settype($partlist, 'array');}
foreach ($partlist as $_smarty_tpl->tpl_vars['partlist']->key => $_smarty_tpl->tpl_vars['partlist']->value) {
$_smarty_tpl->tpl_vars['partlist']->_loop = true;
?>
                <li class="part_box_list">
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'part','a'=>'show','id'=>$_smarty_tpl->tpl_vars['partlist']->value['id']),$_smarty_tpl);?>
">
                        <div class="part_box_list_pd">
                            <span class="part_box_jobdate">
                            	<?php if ($_smarty_tpl->tpl_vars['partlist']->value['time']=='今天'||$_smarty_tpl->tpl_vars['partlist']->value['time']=='昨天') {?>
          							<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['partlist']->value['time'];?>
</span> 
          						<?php } else { ?> 
          							<?php echo $_smarty_tpl->tpl_vars['partlist']->value['time'];?>
 
          						<?php }?>
                            </span>
                            
                            <div class="part_box_list_bm">报名</div>
                            
                            <div class="part_box_jobname">
                            	<?php echo $_smarty_tpl->tpl_vars['partlist']->value['name'];
if ($_smarty_tpl->tpl_vars['partlist']->value['rec_time']>0) {?><i class="part_bax_tj"></i><?php }?></div>
                            
								<?php if ($_smarty_tpl->tpl_vars['partlist']->value['job_city_three']) {?>
									<div class="part_box_jobp">
										<span class="part_box_jobcity">
											<i class="part_box_jobiconcity"></i>
											<?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_city_two'];?>
-<?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_city_three'];?>
-<?php echo $_smarty_tpl->tpl_vars['partlist']->value['com_name'];?>

										</span>
									</div>
				            	<?php } elseif ($_smarty_tpl->tpl_vars['partlist']->value['job_city_two']) {?>
									<div class="part_box_jobp">
										<span class="part_box_jobcity">
											<i class="part_box_jobiconcity"></i>
					            		<?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_city_two'];?>
-<?php echo $_smarty_tpl->tpl_vars['partlist']->value['com_name'];?>

										</span>
									</div>
								<?php }?>
					           

                            <div class="part_box_jobxz_box">
                            	<span class="part_box_jobxz">
                            		<i class="part_box_jobxz_fh">￥</i><?php echo $_smarty_tpl->tpl_vars['partlist']->value['salary'];?>

                            	</span> 
                            	<?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_salary_type'];?>
 
                            	<?php if ($_smarty_tpl->tpl_vars['partlist']->value['job_billing_cycle']) {?>
                                	<div class="Part_jsfs"><?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_billing_cycle'];?>
</div>
                                <?php }?>
                            </div>
                        </div>
                    </a>
                </li>
                <?php } ?>
            </ul>
            
            <?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?> 
            	<?php if ($_GET['keyword']!='') {?> 
	            	<div class="wap_member_no">没有搜索到兼职
		                <div>
		                    <a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'part'),$_smarty_tpl);?>
">重新搜索</a>
		                </div>
		        	</div>
		        <?php } else { ?>
			        <div class="wap_member_no">暂无兼职
			            <div>
			                <a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'part'),$_smarty_tpl);?>
">重新搜索</a>
			            </div>
			        </div>
		        <?php }?> 
		    <?php } else { ?>
	        	<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
	        <?php }?>
    	</div>
    </div>
</section>

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
" type="text/css"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/publictwo.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
