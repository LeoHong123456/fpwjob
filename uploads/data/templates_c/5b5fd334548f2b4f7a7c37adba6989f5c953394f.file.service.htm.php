<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:16:06
         compiled from "/www/fpwjob/uploads/app/template/lietou/service.htm" */ ?>
<?php /*%%SmartyHeaderCode:8066201435dc524465980b0-16587032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b5fd334548f2b4f7a7c37adba6989f5c953394f' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/lietou/service.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8066201435dc524465980b0-16587032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchtype' => 0,
    'config' => 0,
    'hyname' => 0,
    'jobname' => 0,
    'list' => 0,
    'usertype' => 0,
    'lietou_style' => 0,
    'uid' => 0,
    'pagenav' => 0,
    'totalshow' => 0,
    'joblist' => 0,
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc5244665b365_94603748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc5244665b365_94603748')) {function content_5dc5244665b365_94603748($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="lt_jobsearch">
    <div class="lt_w1200">
        <div class="lt_jobsearch_box fl">

            <div class="hunter_search content_search" id="searchtype1">
                <form id="formSimpleSearch" method="get" action="index.php" <?php if ($_smarty_tpl->tpl_vars['searchtype']->value=="1") {?>style="display:none;" <?php }?> onsubmit="return checkfrom(this)">
                    <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_lietoudir']) {?>
                    <input type="hidden" value="lietou" name="m" /> <?php }?>
                    <input type="hidden" name="c" value="service" />

                    <input class="lt_jobsearch_box_text fl" name="keyword" type="text" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入你要查找的信息<?php }?>" onclick="if(this.value=='请输入你要查找的信息'){this.value=''}" onblur="if(this.value==''){this.value='请输入你要查找的信息'}" />

                    <input class="lt_jobsearch_box_bth fl" type="submit" value="搜 索" />
                    <a class="search_more_bth fl" href="javascript:;">展开高级搜索</a>

                </form>
                <form id="formAdvanceSearch" method="get" action="index.php" <?php if ($_smarty_tpl->tpl_vars['searchtype']->value!='1') {?>style="display:none;" <?php }?> onsubmit="return checkfrom(this)">
                    <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_lietoudir']) {?>
                    <input type="hidden" value="lietou" name="m" /> <?php }?>
                    <input type="hidden" name="c" value="service" />
                    <div class="">

                        <div class="search_add fl" onclick="index_industry_new(5, '#hybutton', '#hy','left:100px;top:100px; position:absolute;','<?php echo $_GET['hyid'];?>
');">
                            <input class="search_select fl" type="button" id="hybutton" value="<?php if ($_smarty_tpl->tpl_vars['hyname']->value) {
echo $_smarty_tpl->tpl_vars['hyname']->value;
} else { ?>请选择行业<?php }?>" />
                            <input type="hidden" name="hyid" id="hy" value="<?php echo $_GET['hyid'];?>
" />
                        </div>
                        <div class="search_add fl" onclick="index_ltjob_new(5, '#jobbutton', '#job','left:100px;top:100px; position:absolute;','<?php echo $_GET['jobid'];?>
');">
                            <input class="search_select fl" type="button" id="jobbutton" value="<?php if ($_smarty_tpl->tpl_vars['jobname']->value) {
echo $_smarty_tpl->tpl_vars['jobname']->value;
} else { ?>请选择职位<?php }?>" />
                            <input type="hidden" name="jobid" id="job" value="<?php echo $_GET['jobid'];?>
" />
                        </div> <input name="keyword" class="lt_jobsearch_box_text lt_jobsearch_box_bthbr fl" type="text" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入你要查找的信息<?php }?>" onclick="if(this.value=='请输入你要查找的信息'){this.value=''}" onblur="if(this.value==''){this.value='请输入你要查找的信息'}" style="width:390px;" />
                        <input class="lt_jobsearch_box_bth fl" type="submit" value="搜索" />
                        <a class="search_more_bth search_more_bthsq fl" href="javascript:;">收起高级搜索</a>
                    </div>
                    <div class="search_more fl">
                    </div>

                </form>
                <div class="clear"></div>
                <div class="content_search_tag c5 fl">
                    <div class="search_tag_list fl"> <?php if ($_GET['keyword']) {?>
                        <a href="<?php echo smarty_function_searchurl(array('m'=>'lietou','c'=>'service','untype'=>'keyword'),$_smarty_tpl);?>
" class="Search_jobs"><?php echo $_GET['keyword'];?>
</a> <?php }?> <?php if ($_smarty_tpl->tpl_vars['hyname']->value) {?>
                        <a href="<?php echo smarty_function_searchurl(array('m'=>'lietou','c'=>'service','untype'=>'hyid'),$_smarty_tpl);?>
" class="Search_jobs"><?php echo $_smarty_tpl->tpl_vars['hyname']->value;?>
</a><?php }?> <?php if ($_smarty_tpl->tpl_vars['jobname']->value) {?>
                        <a href="<?php echo smarty_function_searchurl(array('m'=>'lietou','c'=>'service','untype'=>'jobid'),$_smarty_tpl);?>
" class="Search_jobs"><?php echo $_smarty_tpl->tpl_vars['jobname']->value;?>
</a><?php }?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="content">
 
    <div class="service_main fl">
        <div class="service_main_con fl">
            <div class="lt_joblist_tit_box">
                <ul class="lt_joblist_tit">
                    <ul class="lt_joblist_tit_list">
                        <li class="lt_joblist_tit_list_cur">
                            <a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'service'),$_smarty_tpl);?>
">所有猎头</a>
                        </li>
                    </ul>
                    <span class="lt_joblist_n">共有<b id="totalshow">0</b>位猎头顾问</span>
                </ul>
            </div>

            <div class="service_lists fl">
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("limit"=>"20","keyword"=>"\'auto.keyword\'","hyid"=>"\'auto.hyid\'","jobid"=>"\'auto.jobid\'","order"=>"\'auto.order\'","ispage"=>"1","item"=>"\'list\'","nocache"=>"")
;');$list=array();
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
		$list=$db->select_all("lt_info",$where.$limit);
		if($_COOKIE[usertype]==1){
			$atn=$db->select_all("atn","`uid`='".$_COOKIE[uid]."'");
		}
		if(is_array($list)){
			foreach($list as $k=>$v){
                $list[$k][exp_info]=$ltclass_name[$v[exp]];
				$list[$k][cityone_info]=$city_name[$v[provinceid]];
				$list[$k][citytwo_info]=$city_name[$v[cityid]];
				if(is_array($list)){
					foreach($atn as $val){
						if($v[uid]==$val[sc_uid]){
							$list[$k][atn]=1;
						}
					}
				}
				$uid[]=$v[uid];
			}
			$ratings=$db->DB_query_all("select a.uid,b.com_pic from $db_config[def]lt_statis a left join $db_config[def]company_rating b on a.rating = b.id WHERE a.uid in (".@implode(",",$uid).")","all");
			$joblist=$db->select_all("lt_job","`status`='1' and `uid` in (".@implode(",",$uid).") and `r_status`<>'2' order by `lastupdate` desc");
			foreach($list as $k=>$v){
				foreach($ratings as $val)
				{//猎头图标
					if($v[uid]==$val[uid]){
						if($val["com_pic"]&&file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['com_pic']))){
							$list[$k]["com_pic"]=str_replace("./",$config[sy_weburl]."/",$val["com_pic"]);;
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
                        $list[$k]["ltjoblist"][]=$val;
					}
				}
				$list[$k]["jobnum"]=$i;
				$list[$k]["joblist"]=$job;
				$jobsc="";
				if($v[job]!=""){//擅长职位
					$job=@explode(",",$v[job]);
					foreach($job as $val){
						$jobsc.=$ltjob_name[$val]." ";
					}
				}
				$list[$k]["job"]=$jobsc;
				$hy="";
				if($v[hy]!=""){//擅长行业
					$hyarr=@explode(",",$v[hy]);
					foreach($hyarr as $val){
						$hy.=$lthy_name[$val]." ";
					}
				}
				$list[$k]["hy"]=$hy;
				$list[$k]["name_url"] = Url("lietou",array("c"=>"headhunter","uid"=>$v[uid]));//猎头链接
				if(!$v['photo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$v['photo']))){
				    $list[$k]['photo'] = $config['sy_weburl']."/".$config['sy_lt_icon'];
				}else{
					$list[$k]['photo'] = str_replace("./",$config['sy_weburl']."/",$v['photo']);
				} 
				if(!$v['photo_big'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$v['photo_big']))){
				    $list[$k]['photo_big'] = $config['sy_weburl']."/".$config['sy_lt_icon'];
				}else{
					$list[$k]['photo_big'] = str_replace("./",$config['sy_weburl']."/",$v['photo_big']);
				} 
			}
		}
		if($paramer[keyword]!=""&&!empty($list))
		{
			addkeywords('6',$paramer[keyword]);
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                <div class="service_items fl">
                    <dl class="service_items_left fl">
                        <dt> <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['photo_big'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_lt_icon'];?>
',2);" /> </dt>
                    </dl>
                    <ul class="service_items_con fl">
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['name_url'];?>
" class="service_items_con_it_name"><?php echo $_smarty_tpl->tpl_vars['list']->value['realname'];?>
</a><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];
echo $_smarty_tpl->tpl_vars['list']->value['com_pic'];?>
" onerror="hidepic(this)" width="10" height="10" /> </li>
                        <li>
                            <div class="c9 fl">擅长行业：</div>
                            <?php echo $_smarty_tpl->tpl_vars['list']->value['hy'];?>
</li>
                        <?php if ($_smarty_tpl->tpl_vars['list']->value['joblist']) {?>
                        <li>
                            <div class="c9 fl">最新职位：</div>
                            <?php echo $_smarty_tpl->tpl_vars['list']->value['joblist'];?>
 </li>
                        <li class="service_items_looks">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['name_url'];?>
" class="service_icon service_icons01">查看职位（<?php echo $_smarty_tpl->tpl_vars['list']->value['jobnum'];?>
）</a> <span class="service_items_looks_gz">已有 <font color="#f60" id="atn<?php echo $_smarty_tpl->tpl_vars['list']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['ant_num'];?>
</font> 位关注了TA</span></li>
                        <?php }?>
                    </ul>
                    <div class="service_items_focus fr">

                        <?php if ($_smarty_tpl->tpl_vars['usertype']->value) {?>
                        <a class="ser_wt" href="javascript:void(0);" onclick="entrust('<?php echo $_smarty_tpl->tpl_vars['list']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['list']->value['realname'];?>
');" class="service_icon  service_icons04">委托简历</a> <?php } else { ?>
                        <a href="javascript:void(0);" onclick="showlogin('1');" class="service_icon  service_icons04">委托简历</a> <?php }?> <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
                        <a href="javascript:void(0)" onclick="ltatn('<?php echo $_smarty_tpl->tpl_vars['list']->value['uid'];?>
','lt1');" id="guanzhu<?php echo $_smarty_tpl->tpl_vars['list']->value['uid'];?>
"><img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/<?php if ($_smarty_tpl->tpl_vars['list']->value['atn']=='1') {?>focus_no_add.png<?php } else { ?>focus_add.png<?php }?>" /><?php if ($_smarty_tpl->tpl_vars['list']->value['atn']==1) {?>取消关注<?php } else { ?>关注<?php }?></a> <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
                        <a href="javascript:void(0)" onclick="layer.msg('只有个人用户才能关注', 2, 8)">+关注</a> <?php } else { ?>
                        <a href="javascript:void(0)" onclick="showlogin('1');">+关注</a> <?php }?> <?php }?> </div>

                </div>
                <?php }
if (!$_smarty_tpl->tpl_vars['list']->_loop) {
?>
                <div class="seachno">
                    <div class="seachno_left"><img src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/search-no.gif" /></div>
                    <div class="listno-content"> <strong>很抱歉，没有找到满足条件的猎头</strong> <br />
                        <span> 建议您： <br />
            1、适当减少已选择的条件 <br />
            2、适当删减或更改搜索关键字 <br />
            </span> </div>
                </div>
                <?php } ?> </div>
            <div class="clear"></div>
            <div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;
echo $_smarty_tpl->tpl_vars['totalshow']->value;?>
</div>
        </div>
         <div class="service_new fr">
            <div class="service_title fl">
                <div class="famous_title_h1 c5 f14 fb fl">最新职位</div>
                <div class="service_title_more fr">
                    <a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'post'),$_smarty_tpl);?>
">MORE >></a>
                </div>
            </div>
            <ul class="service_new_list fl">
                <?php  $_smarty_tpl->tpl_vars['joblist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['joblist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("item"=>"\'joblist\'","limit"=>"10","nocache"=>"")
;');$joblist=array();
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
		 
		$joblist=$db->select_all("lt_job",$where.$limit);
		if(!$paramer[ispage]){
			$_smarty_tpl->tpl_vars["t_count"]->value=count($joblist);
		}
		
		if(is_array($joblist)){
			foreach($joblist as $v){
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
		
		
		if(is_array($joblist)){
			foreach($joblist as $k=>$v){
				if(is_array($joblist)){
					foreach($atn as $val){
						if($v[uid]==$val[sc_uid]){
							$joblist[$k][atn]=1;
						}
					}
				}
				$uid[]=$v[uid];
			}
			$ratings=$db->DB_query_all("select a.uid,b.com_pic from $db_config[def]company_statis a left join $db_config[def]company_rating b on a.rating = b.id WHERE a.uid in (".@implode(",",$uid).")","all");
			
			$joblist=$db->select_all("lt_job","`status`='1' and `uid` in (".@implode(",",$uid).") and `r_status`<>'2' order by `lastupdate` desc");
			foreach($joblist as $k=>$v){
				foreach($ratings as $val)
				{//猎头图标
					if($v[uid]==$val[uid]){
						if($val["com_pic"]&&file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['com_pic']))){
							$joblist[$k]["com_pic"]=$val["com_pic"];
						}
                        
					}
				}
				
			}
		}
		if(is_array($joblist)){
			foreach($joblist as $k=>$v){
				$joblist[$k] = $db->lt_array_action($v);
				//对job_name 截取
				if(intval($paramer['t_len'])>0){
					$len = intval($paramer['t_len']);
					$joblist[$k]['job_name'] = mb_substr($v['job_name'],0,$len,"utf-8");
				}
				if($v['usertype']==3){
                    $joblist[$k]["lt_url"] = Url("lietou",array("c"=>"headhunter","uid"=>$v[uid]));
					$joblist[$k]["job_url"] = Url("lietou",array("c"=>"jobshow","id"=>$v['id']));
					 $joblist[$k]["wap_lt_url"] = Url("wap",array("c"=>"ltjob","a"=>"hunter","uid"=>$v[uid]));
				}else{
                    $joblist[$k]["lt_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
					$joblist[$k]["job_url"] = Url("lietou",array("c"=>"jobcomshow","id"=>$v['id']));
					$joblist[$k]["wap_lt_url"] = Url("wap",array("c"=>"company","a"=>"show","id"=>$v['uid']));
				}		
				if($v['minsalary']>0&&$v['maxsalary']>0){
					$joblist[$k]["salary_info"] = "￥".floatval($v['minsalary'])."-".floatval($v['maxsalary'])."万";    
                }else if($v['minsalary']>0){
                    $joblist[$k]["salary_info"] = "￥".floatval($v['minsalary'])."万以上";  
                }else{
    				$joblist[$k]["salary_info"] = "面议";
    			}
                
				$joblist[$k]["lastupdate"] = date("Y-m-d",$v["lastupdate"]);
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
    					$joblist[$k]["com_name"]=$val['name'];
                       
                        $joblist[$k]["hy_n"]=$industry_name[$val['hy']];
                       if(!$val['logo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['logo']))){
                            $joblist[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
                        }else{
                            $joblist[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
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
                            $joblist[$k][hy_n] = mb_substr($hy,0,$paramer[comlen],"utf-8");
                        }
                        if(!$val['photo_big'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo_big']))){
                            $joblist[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_lt_icon'];
                        }else{
                            $joblist[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['photo_big']);
                        } 
                        
    				}
				}
			}
		} 
		if($paramer['keyword']!=""&&!empty($joblist)){
			addkeywords('7',$paramer['keyword']);
		}$joblist = $joblist; if (!is_array($joblist) && !is_object($joblist)) { settype($joblist, 'array');}
foreach ($joblist as $_smarty_tpl->tpl_vars['joblist']->key => $_smarty_tpl->tpl_vars['joblist']->value) {
$_smarty_tpl->tpl_vars['joblist']->_loop = true;
?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['joblist']->value['job_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['joblist']->value['job_name'];?>
</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<div id="reply" class="none" style=" width:330px; margin: 0 auto; padding: 0;">
    <table class="table_form " id="infobox">
        <tr>
            <td><textarea name="reply" id="content" rows="4" cols="35" class="text" style="resize:none; width:323px;height:90px;"></textarea></td>
        </tr>
        <tr>
            <td style="text-align:center"><input type="button" name="submit" value=" 提交 " class="Reply_cont_submit" onclick="send_msg();" /></td>
        </tr>
        <input type="hidden" id="fid" name="id" value="" />
    </table>
</div>
<?php echo '<script'; ?>
>
    function hidepic($this) {
        $($this).hide();
    }
<?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  DD_belatedPNG.fix('.png,.New_post,.box_bot,.new_post_box_h1 span,.icon,.ser_cz a,.Strat-list ,.logoin_su2,.logoin_after_su2,.logoin_after em,.logoin_after_tx dt,.service_filter_fot,.Strat-list .s,.nav_exit span,.company_focus');
<?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
>
    var webname = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
";
    var pricename = "<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
";
<?php echo '</script'; ?>
>
<style>
    body {
        background: #fff
    }
</style>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/js/public_lt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/class.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/ltjob.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/ltindustry.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/class.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/newclass.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/newclass.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/js/search_lt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
