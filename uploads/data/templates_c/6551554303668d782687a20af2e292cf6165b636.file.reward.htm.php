<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 11:41:51
         compiled from "/www/fpwjob/uploads/app/template/wap/reward.htm" */ ?>
<?php /*%%SmartyHeaderCode:11976862045e2e5bff3c0c45-66755355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6551554303668d782687a20af2e292cf6165b636' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/reward.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11976862045e2e5bff3c0c45-66755355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'job_list' => 0,
    'total' => 0,
    'pagenav' => 0,
    'config' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e5bff431279_62529684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e5bff431279_62529684')) {function content_5e2e5bff431279_62529684($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ul>

    </iul>
    <div class="clear"></div>
    <section>
        <div class="warp_content">

            <div class="job_reward_list" style="padding:0px 10px;">

                <?php  $_smarty_tpl->tpl_vars['job_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_list']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("limit"=>"12","reward"=>"1","ispage"=>"1","keyword"=>"\'auto.keyword\'","item"=>"\'job_list\'","islt"=>"4","nocache"=>"")
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

		if($paramer[reward]=='1'){
			$where="`rewardpack`='1'";

		}elseif($paramer[share]=='1'){
		
			$where="`sharepack`='1'";
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
			 
		
		$where .= " AND `r_status`='1' AND `state`=1 and `status`='0' ";
		
		
		//按照职位名称匹配
		if($paramer[keyword]){
			$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
			$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";

			$where.=" AND (".@implode(" or ",$where1).")";
		}

		//筛除重复
		if($paramer[noids]==1 && !empty($noids)){
			$where.=" AND `id` NOT IN (".@implode(',',$noids).")";
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
		 
		$job_list = $db->select_all("company_job",$where.$limit);
		if(is_array($job_list)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_list as $key=>$value){
				$comuid[] = $value['uid'];
				$jobid[] = $value['id'];
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`shortname`,`yyzz_status`,`logo`,`pr`,`hy`,`mun`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value['shortname']){
    						$value['shortname'] =$value['shortname'];
    					}
						if(!$value['logo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,$value['logo']))){
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
			if($jobids){
				if($paramer[reward]=='1'){
					
					$rewardList=$db->select_all("company_job_reward","`jobid` IN (".$jobids.")");
					
				}elseif($paramer[share]=='1'){ 

					$rewardList=$db->select_all("company_job_share","`jobid` IN (".$jobids.")","`jobid`,`packmoney`,`packprice`,`packnum`");
				
				}
				if(is_array($rewardList)){
						foreach($rewardList as $key=>$value){
							
							$rewadArr[$value['jobid']] = $value;
						}
					}
			}
			    
			
			$noids=array();
			foreach($job_list as $key=>$value){
				if($paramer[bid]){
					$noids[] = $value[id];
				}
				$job_list[$key] = $db->array_action($value,$cache_array);
				$job_list[$key][stime] = date("Y-m-d",$value[sdate]);
				$job_list[$key][etime] = date("Y-m-d",$value[edate]);
				if($arr_data['sex'][$value['sex']]){
    				$job_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
    			}
				$job_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);

				if($value[minsalary] && $value[maxsalary]){
					$job_list[$key][job_salary] =$value[minsalary]."~".$value[maxsalary];
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
				if($paramer[reward]=='1'){
					$job_list[$key][sqmoney] =floatval( $rewadArr[$value['id']][sqmoney]);
					$job_list[$key][invitemoney] =floatval( $rewadArr[$value['id']][invitemoney]);
					$job_list[$key][offermoney] =floatval( $rewadArr[$value['id']][offermoney]);
					$job_list[$key][money] =floatval( $rewadArr[$value['id']][money]);
					$job_list[$key][r_exp] = $rewadArr[$value['id']][exp];
					$job_list[$key][r_edu] = $rewadArr[$value['id']][edu];
					$job_list[$key][r_project] = $rewadArr[$value['id']][project];
					$job_list[$key][r_skill] = $rewadArr[$value['id']][skill];
				}

				if($paramer[share]=='1'){
					$job_list[$key][packmoney] = $rewadArr[$value['id']][packmoney];
					$job_list[$key][packnum] = $rewadArr[$value['id']][packnum];
					$job_list[$key][packprice] = $rewadArr[$value['id']][packprice];
					
				}
				

				$time=$value['lastupdate'];
				//今天开始时间戳
				$beginToday=time(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=time(0,0,0,date('m'),date('d')-1,date('Y'));
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
				if(is_array($job_list[$key]['welfare'])&&$job_list[$key]['welfare']){
					foreach($job_list[$key]['welfare'] as $val){
						//$job_list[$key]['welfarename'][]=$cache_array['comclass_name'][$val];
						$job_list[$key]['welfarename'][]=$val;
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
					}else{
						$job_list[$key]['name_n'] = $value['name'];
					}
				}
				//构建职位伪静态URL
				$job_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
				$job_list[$key][job_wapurl] = Url("wap",array("c"=>"job","a"=>"view","id"=>$value[id]),"1");
				//构建企业伪静态URL
				$job_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
				foreach($comrat as $k=>$v){
					if($value[rating]==$v[id]){
						$job_list[$key][color] = str_replace("#","",$v[com_color]);
						$job_list[$key][ratlogo] = $v[com_pic];
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

			if(is_array($job_list)){
				if($paramer[keyword]!=""&&!empty($job_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job_list = $job_list; if (!is_array($job_list) && !is_object($job_list)) { settype($job_list, 'array');}
foreach ($job_list as $_smarty_tpl->tpl_vars['job_list']->key => $_smarty_tpl->tpl_vars['job_list']->value) {
$_smarty_tpl->tpl_vars['job_list']->_loop = true;
?>

                <div class="index_rewardjobs_list">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_wapurl'];?>
">
                        <div class="index_rewardjobs_money">
                            <span class="index_rewardjobs_money_n">￥<?php echo floatval($_smarty_tpl->tpl_vars['job_list']->value['money']);?>
</span>
                            <div class="index_rewardjobs_list_fs"> <span class="index_rewardjobs_list_fs_name">投递:￥<?php echo floatval($_smarty_tpl->tpl_vars['job_list']->value['sqmoney']);?>
</span><span class="index_rewardjobs_list_fs_name">面试:￥<?php echo floatval($_smarty_tpl->tpl_vars['job_list']->value['invitemoney']);?>
</span><span class="index_rewardjobs_list_fs_name">入职:￥<?php echo floatval($_smarty_tpl->tpl_vars['job_list']->value['offermoney']);?>
</span></div>
                        </div>

                        <span class="index_rewardjobs_list_ls">领赏</span>

                        <div class="index_rewardjobs_name"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['name_n'];?>
</div>
                        <div class="index_rewardjobs_info"><?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['job_list']->value['job_salary'];?>
 <span class="index_rewardjob_line">|</span><?php echo mb_substr($_smarty_tpl->tpl_vars['job_list']->value['job_city_two'],0,4,"utf-8");?>
 <?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_exp']) {?>
                            <span class="index_rewardjob_line">|</span><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_exp'];?>
经验</span>
                            <?php }
if ($_smarty_tpl->tpl_vars['job_list']->value['job_edu']) {?>
                            <span class="index_rewardjob_line">|</span><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_edu'];?>
学历</span>
                            <?php }?></div>
                    </a>

                </div>

                <?php } ?> <?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?> <?php if ($_GET['keyword']!='') {?> <div class="wap_member_no">没有搜索到赏金职位
                    <div>
                        <a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'reward'),$_smarty_tpl);?>
">重新搜索</a>
                    </div>
            </div>
            <?php } else { ?>
            <div class="wap_member_no">暂无赏金职位
                <div>
                    <a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'reward'),$_smarty_tpl);?>
">重新搜索</a>
                </div>
            </div>
            <?php }
} else { ?>
            <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
            <?php }?> </div>
        </div>
    </section>

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
    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            $("#search").val();
            $(".searchOptions_list li a").removeClass("search_h1_box_cur_list");
        });
    <?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
