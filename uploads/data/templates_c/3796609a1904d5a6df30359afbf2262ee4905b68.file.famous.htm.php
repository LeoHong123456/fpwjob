<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-24 20:30:45
         compiled from "/www/fpwjob/uploads/app/template/lietou/famous.htm" */ ?>
<?php /*%%SmartyHeaderCode:3975997975e53c1f527a3e0-12540392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3796609a1904d5a6df30359afbf2262ee4905b68' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/lietou/famous.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3975997975e53c1f527a3e0-12540392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SelectorList' => 0,
    'config' => 0,
    'industry_index' => 0,
    'v' => 0,
    'industry_name' => 0,
    'comdata' => 0,
    'comclass_name' => 0,
    'UptimeNameList' => 0,
    'k' => 0,
    'FilterList' => 0,
    'key' => 0,
    'one' => 0,
    'total' => 0,
    'list' => 0,
    'usertype' => 0,
    'lietou_style' => 0,
    'uid' => 0,
    'pagenav' => 0,
    'totalshow' => 0,
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e53c1f539a073_70380148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e53c1f539a073_70380148')) {function content_5e53c1f539a073_70380148($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<div class="clear"></div> 
<div class="lt_jobsearch">
<div class="lt_w1200">
<div class="lt_jobsearch_box fl">
 <div class="hunter_search content_search">
      <form id="formSimpleSearch" action="index.php" method="get" style="<?php if (($_smarty_tpl->tpl_vars['SelectorList']->value['count']==1&&$_GET['keyword'])||($_smarty_tpl->tpl_vars['SelectorList']->value['count']<1)) {?>display:block;<?php } else { ?>display:none;<?php }?>" onsubmit="return checkfrom(this)">
        <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_lietoudir']) {?>
        <input type="hidden" value="lietou" name="m" />
        <?php }?>
        <input type="hidden" value="famous" name="c" />
        
              <input class="lt_jobsearch_box_text fl" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['SelectorList']->value['keyword']['placeholder'];?>
" name="keyword" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入你要查找的信息<?php }?>"/>
           
          <input class="lt_jobsearch_box_bth  fl" type="submit" value="搜 索"/>
      
        <a class="search_more_bth fl" href="javascript:;"> 展开高级搜索 </a>
        
      </form>
      <form id="formAdvanceSearch" action="index.php" method="get" style="<?php if ((($_smarty_tpl->tpl_vars['SelectorList']->value['count']==1&&!$_GET['keyword'])||($_smarty_tpl->tpl_vars['SelectorList']->value['count']>1))) {?>display:block;<?php } else { ?>display:none;<?php }?>" onsubmit="return checkfrom(this)">
        <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_lietoudir']) {?>
        <input type="hidden" value="lietou" name="m" />
        <?php }?>
        <input type="hidden" value="famous" name="c" />
     
       <div class="search_more_box"> <a class="search_more_bth" href="javascript:check_show_search('2');">收起</a> <div class="search_more fl">
           <div class="search_add fl cur140">
            <input class="search_select fl" type="button" value="<?php echo $_smarty_tpl->tpl_vars['SelectorList']->value['hy']['placeholder'];?>
" id="hy_name" />
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SelectorList']->value['hy']['id'];?>
" id="hy" name="hy" />
            <ul class="search_select_list none">
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
              <li codename="<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" code="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"> <a href="javascript:;"> <?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> </li>
              <?php } ?>
            </ul>
          </div>
          <div class="search_add cur150 fl">
            <input class="search_select fl" type="button" value="<?php echo $_smarty_tpl->tpl_vars['SelectorList']->value['cityin']['placeholder'];?>
" id="cityin_name" onClick="index_city_new(5,'#cityin_name','#cityin');" />
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SelectorList']->value['cityin']['id'];?>
" id="cityin" name="cityin" />
          </div>
          <div class="search_add fl">
            <input class="search_select fl" type="button" value="<?php echo $_smarty_tpl->tpl_vars['SelectorList']->value['mun']['placeholder'];?>
" id="mun_name" />
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SelectorList']->value['mun']['id'];?>
" id="mun" name="mun" />
            <ul class="search_select_list none">
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
              <li codename="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" code="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"> <a href="javascript:;"> <?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </a> </li>
              <?php } ?>
            </ul>
          </div>
          <div class="search_add fl cur140">
            <input class="search_select fl" type="button" value="<?php echo $_smarty_tpl->tpl_vars['SelectorList']->value['pr']['placeholder'];?>
" id="pr_name" />
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SelectorList']->value['pr']['id'];?>
" id="pr" name="pr" />
            <ul class="search_select_list none">
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
              <li codename="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" code="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"> <a href="javascript:;"> <?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </a> </li>
              <?php } ?>
            </ul>
          </div>
          <div class="search_add cur130 mt20 fl">
            <input class="search_select fl" type="button" value="<?php echo $_smarty_tpl->tpl_vars['SelectorList']->value['uptime']['placeholder'];?>
" id="uptime_name" />
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SelectorList']->value['uptime']['id'];?>
" id="uptime" name="uptime" />
            <ul class="search_select_list none">
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['UptimeNameList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
              <li codename="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" code="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <a href="javascript:;"> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 </a> </li>
              <?php } ?>
            </ul>
          </div>
        
            <input class="lt_jobsearch_box_text lt_jobsearch_box_bthbr mt20 fl" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['SelectorList']->value['keyword']['placeholder'];?>
" name="keyword" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入你要查找的信息<?php }?>"/>    
             <div class="lt_jobsearch_zkbth"><input class="lt_jobsearch_zkbth_b fl" type="submit" value="搜索" /></div>
        
        </div>
      </form>
      </div>
      <div class="clear"></div>
      <div class="content_search_tag c5 fl">
     <div class="search_tag_list fl"> <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FilterList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['one']->key;
?> <a href="<?php echo smarty_function_searchurl(array('m'=>'lietou','c'=>$_GET['c'],'untype'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>
" class="Search_jobs"> <?php echo $_smarty_tpl->tpl_vars['one']->value['desc'];?>
： <?php echo $_smarty_tpl->tpl_vars['one']->value['value'];?>
 </a> <?php } ?>
      </div>
      </div>
    </div> 
</div> 
</div> 
</div> 
<div class="content"> 
  
  <div class="famous_main fl">
    <div class="famous_title fl">
      <div class="famous_title_h1 c5 f14 fb fl"> 知名企业
       </div><div class="search_tag_other fl"> 共有 <b id="totalshow">0</b> 个企业 </div>
      <div class="famous_title_more fr none"> 搜索"<?php echo $_GET['keyword'];?>
"，共 <b> <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 </b> 条结果 </div>
    </div>
  <div class="lt_index_job_box">
<div class="lt_index_job_c">
	  <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("firm"=>"1","hy"=>"\'auto.hy\'","mun"=>"\'auto.mun\'","pr"=>"\'auto.pr\'","cityin"=>"\'auto.cityin\'","keyword"=>"\'auto.keyword\'","uptime"=>"\'auto.uptime\'","order"=>"\'auto.order\'","rec"=>"1","ltjob"=>"3","ispage"=>"1","limit"=>"16","item"=>"\'list\'","nocache"=>"")
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
?>
        <div class="company_items fl">
          <div class="company_logo fl">
            <div class="famous_logo"> <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
" width="80" height="80" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);"></div>
             <div class="company_name fl"> <a  target="_blank" href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['list']->value['uid']),$_smarty_tpl);?>
"> <?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
 </a> </div>
               <div class="company_lb fl"><?php echo $_smarty_tpl->tpl_vars['list']->value['job_hy'];?>
</div>
           <div class="lt_f_list">  <div class="lt_index_h_n">
<div class="lt_index_p"><a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'post','uid'=>'`$list.uid`'),$_smarty_tpl);?>
"><span class="lt_n"><?php echo $_smarty_tpl->tpl_vars['list']->value['ltjobnum'];?>
 </span> 在招职位<i class="lt_index_pline"></i></a></div>
<div class="lt_index_p"><span class="lt_n"><?php echo $_smarty_tpl->tpl_vars['list']->value['ant_num'];?>
</span> 关注人数<i class="lt_index_pline"></i></div>
<div class="lt_index_p"><span class="lt_n">80%</span> 简历处理率</div>
</div></div>

        
            
              <div class="lt_index_p_wt_bot fl"> 
              <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?> 
              <a href="javascript:void(0)" onclick="ltatn('<?php echo $_smarty_tpl->tpl_vars['list']->value['uid'];?>
','lt1');" id="guanzhu<?php echo $_smarty_tpl->tpl_vars['list']->value['uid'];?>
"class="lt_index_p_wt">
              <img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/<?php if ($_smarty_tpl->tpl_vars['list']->value['atnstatus']=='1') {?>focus_no_add.png<?php } else { ?>focus_add.png<?php }?>" />
              <?php if ($_smarty_tpl->tpl_vars['list']->value['atnstatus']==1) {?>取消关注<?php } else { ?>关注<?php }?></a> 
              <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> 
                <a href="javascript:void(0)" onclick="layer.msg('只有个人用户才能关注', 2, 8)"class="lt_index_p_wt">
                <img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/<?php if ($_smarty_tpl->tpl_vars['list']->value['atn']=='1') {?>focus_no_add.png<?php } else { ?>focus_add.png<?php }?>" />
              关注</a> 
                <?php } else { ?> <a href="javascript:void(0)" onclick="showlogin('1');" class="lt_index_p_wt">
                <img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/<?php if ($_smarty_tpl->tpl_vars['list']->value['atn']=='1') {?>focus_no_add.png<?php } else { ?>focus_add.png<?php }?>" />
              
                关注</a> 
                <?php }?>
                <?php }?>              
                  
             
            </div>
          </div>
        
        </div>
        <?php }
if (!$_smarty_tpl->tpl_vars['list']->_loop) {
?>
        <div class="seachno" style=" width:800px; padding:60px 200px;">
          <div class="seachno_left"><img src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/search-no.gif"></div>
          <div class="listno-content"> <strong>很抱歉，没有找到满足条件的企业</strong> <br>
            <span> 建议您： <br>
            1、适当减少已选择的条件 <br>
            2、适当删减或更改搜索关键字 <br>
            </span> </div>
        </div>
        <?php } ?> </div>
      <div class="clear"></div>
      <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;
echo $_smarty_tpl->tpl_vars['totalshow']->value;?>
</div>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
>var webname = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
";<?php echo '</script'; ?>
>
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
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/industry.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/class.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/js/search_lt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/jcarousellite.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
body{ background:#fff}
</style><?php }} ?>
