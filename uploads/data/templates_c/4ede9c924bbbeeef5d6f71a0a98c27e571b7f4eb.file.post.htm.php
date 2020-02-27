<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 20:00:02
         compiled from "/www/fpwjob/uploads/app/template/lietou/post.htm" */ ?>
<?php /*%%SmartyHeaderCode:10144716275e2ed0c27216d8-12258838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ede9c924bbbeeef5d6f71a0a98c27e571b7f4eb' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/lietou/post.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10144716275e2ed0c27216d8-12258838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchtype' => 0,
    'config' => 0,
    'keylist' => 0,
    'industry_name' => 0,
    'industry_index' => 0,
    'v' => 0,
    'jobname' => 0,
    'cityname' => 0,
    'uptime' => 0,
    'j' => 0,
    'ljlist' => 0,
    'uid' => 0,
    'lietou_style' => 0,
    'usertype' => 0,
    'ypjob' => 0,
    'favjob' => 0,
    'pagenav' => 0,
    'totalshow' => 0,
    'joblist' => 0,
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2ed0c28a0650_21629308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2ed0c28a0650_21629308')) {function content_5e2ed0c28a0650_21629308($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div> 

<div class="lt_jobsearch">
	<div class="lt_w1200">
		<div class="lt_jobsearch_box fl">
			<div class="hunter_search content_search" id="searchtype1">
				<form id="formSimpleSearch" method="get" action="index.php" <?php if ($_smarty_tpl->tpl_vars['searchtype']->value=="1") {?>class="none"<?php }?> onsubmit="return checkfrom(this)">
					<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_lietoudir']) {?><input type="hidden" value="lietou" name="m" /><?php }?>
					<input type="hidden" name="c" value="post" />
					<input class="lt_jobsearch_box_text fl" name="keyword" type="text" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入你要查找的信息<?php }?>" onclick="if(this.value=='请输入你要查找的信息'){this.value=''}" onblur="if(this.value==''){this.value='请输入你要查找的信息'}" />
					<input class="lt_jobsearch_box_bth fl" type="submit" value="搜 索"/>
					
					<a class="search_more_bth fl" href="javascript:;">展开高级搜索</a>
					<div class="lt_jobsearch_tag">
						热门搜索： 
						<?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("tuijian"=>"1","type"=>"7","item"=>"\'keylist\'","limit"=>"5","nocache"=>"")
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
?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_title'];?>
</a>
						<?php } ?>
					</div>
				</form>

				<form id="formAdvanceSearch" method="get" action="index.php" <?php if ($_smarty_tpl->tpl_vars['searchtype']->value!="1") {?>class="none"<?php }?> onsubmit="return checkfrom(this)">
					<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_lietoudir']) {?><input type="hidden" value="lietou" name="m" /><?php }?>
					<input type="hidden" name="c" value="post" />
					
					<div class="search_more_box">
						<div class="search_more fl">
							<div class="search_add fl" type="hy">
								<input class="search_select fl" type="button" id="hyname" value="<?php if ($_GET['hy']) {
echo $_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']];
} else { ?>请选择公司所属行业<?php }?>" />
								<input type="hidden" name="hy" id="hy" value="<?php echo $_GET['hy'];?>
" />
								
								<ul class="search_select_list none" id="listhy">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										<li codename="<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" code="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
									<?php } ?>
								</ul>
							</div>

							<div class="search_add fl" onclick="index_ltjob_new(5, '#jobbutton', '#job','left:100px;top:100px; position:absolute;','<?php echo $_GET['jobid'];?>
');">
								<input class="search_select fl" type="button" id="jobbutton" value="<?php if ($_smarty_tpl->tpl_vars['jobname']->value) {
echo $_smarty_tpl->tpl_vars['jobname']->value;
} else { ?>请选择职位<?php }?>" />

								<input type="hidden" name="jobid" id="job" value="<?php echo $_GET['jobid'];?>
" />

							</div>

							<div class="search_add fl" onclick="index_city_new(1, '#city', '#cityid','left:100px;top:100px; position:absolute;','<?php echo $_GET['citys'];?>
');">
								<input class="search_select fl" type="button" id="city" value="<?php if ($_smarty_tpl->tpl_vars['cityname']->value) {
echo $_smarty_tpl->tpl_vars['cityname']->value;
} else { ?>请选择城市<?php }?>" />

								<input type="hidden" name="citys" id="cityid" value="<?php echo $_GET['citys'];?>
" />
							</div>

							<div class="search_add fl" type="uptime">
								<input class="search_select fl" type="button" id="uptimename" value="<?php if ($_smarty_tpl->tpl_vars['uptime']->value[$_GET['uptime']]) {
echo $_smarty_tpl->tpl_vars['uptime']->value[$_GET['uptime']];
} else { ?>请选择发布时间<?php }?>" />
				
								<input type="hidden" name="uptime" id="uptime" value="<?php echo $_GET['uptime'];?>
" />
					
								<ul class="search_select_list none" id="listuptime">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										<li codename="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" code="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"><a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
									<?php } ?>
								</ul>

							</div>

							<div class="search_add mt20 fl"  type="salary">
								<input class="search_select fl" type="button"  id="salaryname" value="<?php if ($_GET['minsalary']!=''&&$_GET['maxsalary']!='') {
echo $_GET['minsalary'];?>
-<?php echo $_GET['maxsalary'];?>
万<?php } elseif ($_GET['minsalary']!=''&&$_GET['maxsalary']=='') {
echo $_GET['minsalary'];?>
万以上<?php } elseif ($_GET['minsalary']==''&&$_GET['maxsalary']!='') {
echo $_GET['maxsalary'];?>
万以下<?php } else { ?>请选择年薪范围<?php }?>" />

								<ul class="search_select_list none" id="listsalary">
									<li code="10万以下"><a href="javascript:void(0)" onClick="setSalary('','10')" class="">10万以下</a></li>
									<li code="10-20万"><a href="javascript:void(0)" onClick="setSalary('10','20')" class="">10-20万</a></li>
									<li code="20-30万"><a href="javascript:void(0)" onClick="setSalary('20','30')" class="">20-30万</a></li>
									<li code="30-50万"><a href="javascript:void(0)" onClick="setSalary('30','50')" class="">30-50万</a></li>
									<li code="50-100万"><a href="javascript:void(0)" onClick="setSalary('50','100')" class="">50-100万</a></li>
									<li code="100万以上"><a href="javascript:void(0)" onClick="setSalary('100','')" class="">100万以上</a></li>

									<div class="lt_job_xz_text_box">
										<input type="text" name="minsalary" id="minsalary" value="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="lt_job_xz_text"/>
										<span class="">-</span>
										<input type="text" name="maxsalary" id="maxsalary" value="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="lt_job_xz_text"/>
										<input type="button" onClick="setSalaryIn()" value="确定" class="lt_job_xz_bth">
									</div>
								</ul>
							</div>  

							<input class="lt_jobsearch_box_text lt_jobsearch_box_bthbr mt20 fl" name="keyword" type="text" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入你要查找的信息<?php }?>" onclick="if(this.value=='请输入你要查找的信息'){this.value=''}" onblur="if(this.value==''){this.value='请输入你要查找的信息'}" />
          				</div>
            
						<input type="hidden" name="rebates" id="rebates" value="<?php echo (($tmp = @$_GET['rebates'])===null||$tmp==='' ? 0 : $tmp);?>
" />
						<div class="lt_jobsearch_zkbth">
							<input class="lt_jobsearch_zkbth_b" type="submit" value="搜索"/>
						</div> 
						<a class="search_more_bth" href="javascript:;">收起</a> 
					</div>
				</form>
			</div>

			<div class="content_search_tag c5 fl">
				<div class="search_tag_list fl"> 
					<?php if ($_GET['keyword']) {?> <a href="<?php echo smarty_function_searchurl(array('m'=>'lietou','c'=>'post','untype'=>'keyword'),$_smarty_tpl);?>
" class="Search_jobs"><?php echo $_GET['keyword'];?>
</a> <?php }?> 
							
					<?php if ($_GET['hy']) {?><a href="<?php echo smarty_function_searchurl(array('m'=>'lietou','c'=>'post','untype'=>'hy'),$_smarty_tpl);?>
" class="Search_jobs"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']];?>
</a><?php }?>        
							
					<?php if ($_smarty_tpl->tpl_vars['jobname']->value) {?><a href="<?php echo smarty_function_searchurl(array('m'=>'lietou','c'=>'post','untype'=>'jobid'),$_smarty_tpl);?>
" class="Search_jobs"><?php echo $_smarty_tpl->tpl_vars['jobname']->value;?>
</a><?php }?>
							
					<?php if ($_GET['citys']) {?><a href="<?php echo smarty_function_searchurl(array('m'=>'lietou','c'=>'post','untype'=>'citys'),$_smarty_tpl);?>
" class="Search_jobs"><?php echo $_smarty_tpl->tpl_vars['cityname']->value;?>
</a><?php }?>
							
					<?php if ($_GET['minsalary']&&$_GET['maxsalary']) {?>
						<a href="<?php echo smarty_function_searchurl(array('m'=>'lietou','c'=>'post','untype'=>'minsalary,maxsalary'),$_smarty_tpl);?>
" class="Search_jobs"><?php echo $_GET['minsalary'];?>
-<?php echo $_GET['maxsalary'];?>
万</a>
					<?php } elseif ($_GET['minsalary']&&!$_GET['maxsalary']) {?>
						<a href="<?php echo smarty_function_searchurl(array('m'=>'lietou','c'=>'post','untype'=>'minsalary,maxsalary'),$_smarty_tpl);?>
" class="Search_jobs"><?php echo $_GET['minsalary'];?>
万及以上</a>
					<?php } elseif (!$_GET['minsalary']&&$_GET['maxsalary']) {?>
						<a href="<?php echo smarty_function_searchurl(array('m'=>'lietou','c'=>'post','untype'=>'minsalary,maxsalary'),$_smarty_tpl);?>
" class="Search_jobs"><?php echo $_GET['maxsalary'];?>
万及以下</a>
					<?php }?>

					<?php if ($_GET['uptime']) {?>
						<a href="<?php echo smarty_function_searchurl(array('m'=>'lietou','c'=>'post','untype'=>'uptime'),$_smarty_tpl);?>
" class="Search_jobs"><?php echo $_smarty_tpl->tpl_vars['uptime']->value[$_GET['uptime']];?>
</a>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content">  
 	<div class="service_main fl">
		<div class="service_main_con fl">
			<div class="lt_joblist_tit_box">
				<ul class="lt_joblist_tit_list">
					<li <?php if ($_GET['rebates']==''&&$_GET['rec']=='') {?>class="lt_joblist_tit_list_cur"<?php }?>>
						<a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'post'),$_smarty_tpl);?>
">所有职位</a>
					</li>
					<li <?php if ($_GET['rebates']) {?>class="lt_joblist_tit_list_cur"<?php }?>>
						<a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'post','untype'=>'rebates','rebates'=>1),$_smarty_tpl);?>
">悬赏职位</a><i class="lt_joblist_tit_hot"></i>
					</li>
					<li <?php if ($_GET['rec']) {?>class="lt_joblist_tit_list_cur "<?php }?>>
						<a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'post','untype'=>'rec','rec'=>1),$_smarty_tpl);?>
">推荐职位</a><i class="lt_joblist_tit_tj"></i>
					</li>
				</ul>
				<span class="lt_joblist_n">共有<b id="totalshow">0</b>个职位</span>
			</div>

			<?php  $_smarty_tpl->tpl_vars['ljlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ljlist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("comlen"=>"15","rebates"=>"\'auto.rebates\'","hy"=>"\'auto.hy\'","jobid"=>"\'auto.jobid\'","rec"=>"\'auto.rec\'","salary"=>"\'auto.salary\'","minsalary"=>"\'auto.minsalary\'","maxsalary"=>"\'auto.maxsalary\'","uptime"=>"\'auto.uptime\'","provinceid"=>"\'auto.provinceid\'","cityid"=>"\'auto.cityid\'","citys"=>"\'auto.citys\'","keyword"=>"\'auto.keyword\'","uid"=>"\'auto.uid\'","order"=>"\'lastupdate\'","ispage"=>"1","limit"=>"20","item"=>"\'ljlist\'","nocache"=>"")
;');$ljlist=array();
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
		 
		$ljlist=$db->select_all("lt_job",$where.$limit);
		if(!$paramer[ispage]){
			$_smarty_tpl->tpl_vars["t_count"]->value=count($ljlist);
		}
		
		if(is_array($ljlist)){
			foreach($ljlist as $v){
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
		
		
		if(is_array($ljlist)){
			foreach($ljlist as $k=>$v){
				if(is_array($ljlist)){
					foreach($atn as $val){
						if($v[uid]==$val[sc_uid]){
							$ljlist[$k][atn]=1;
						}
					}
				}
				$uid[]=$v[uid];
			}
			$ratings=$db->DB_query_all("select a.uid,b.com_pic from $db_config[def]company_statis a left join $db_config[def]company_rating b on a.rating = b.id WHERE a.uid in (".@implode(",",$uid).")","all");
			
			$joblist=$db->select_all("lt_job","`status`='1' and `uid` in (".@implode(",",$uid).") and `r_status`<>'2' order by `lastupdate` desc");
			foreach($ljlist as $k=>$v){
				foreach($ratings as $val)
				{//猎头图标
					if($v[uid]==$val[uid]){
						if($val["com_pic"]&&file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['com_pic']))){
							$ljlist[$k]["com_pic"]=$val["com_pic"];
						}
                        
					}
				}
				
			}
		}
		if(is_array($ljlist)){
			foreach($ljlist as $k=>$v){
				$ljlist[$k] = $db->lt_array_action($v);
				//对job_name 截取
				if(intval($paramer['t_len'])>0){
					$len = intval($paramer['t_len']);
					$ljlist[$k]['job_name'] = mb_substr($v['job_name'],0,$len,"utf-8");
				}
				if($v['usertype']==3){
                    $ljlist[$k]["lt_url"] = Url("lietou",array("c"=>"headhunter","uid"=>$v[uid]));
					$ljlist[$k]["job_url"] = Url("lietou",array("c"=>"jobshow","id"=>$v['id']));
					 $ljlist[$k]["wap_lt_url"] = Url("wap",array("c"=>"ltjob","a"=>"hunter","uid"=>$v[uid]));
				}else{
                    $ljlist[$k]["lt_url"] = Url("company",array("c"=>"show","id"=>$v['uid']));
					$ljlist[$k]["job_url"] = Url("lietou",array("c"=>"jobcomshow","id"=>$v['id']));
					$ljlist[$k]["wap_lt_url"] = Url("wap",array("c"=>"company","a"=>"show","id"=>$v['uid']));
				}		
				if($v['minsalary']>0&&$v['maxsalary']>0){
					$ljlist[$k]["salary_info"] = "￥".floatval($v['minsalary'])."-".floatval($v['maxsalary'])."万";    
                }else if($v['minsalary']>0){
                    $ljlist[$k]["salary_info"] = "￥".floatval($v['minsalary'])."万以上";  
                }else{
    				$ljlist[$k]["salary_info"] = "面议";
    			}
                
				$ljlist[$k]["lastupdate"] = date("Y-m-d",$v["lastupdate"]);
				foreach($comlist as $val){
					if($v['uid']==$val['uid']&&$val['name']){
    					$ljlist[$k]["com_name"]=$val['name'];
                       
                        $ljlist[$k]["hy_n"]=$industry_name[$val['hy']];
                       if(!$val['logo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['logo']))){
                            $ljlist[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
                        }else{
                            $ljlist[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['logo']);
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
                            $ljlist[$k][hy_n] = mb_substr($hy,0,$paramer[comlen],"utf-8");
                        }
                        if(!$val['photo_big'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo_big']))){
                            $ljlist[$k]['logo_n'] = $config['sy_weburl']."/".$config['sy_lt_icon'];
                        }else{
                            $ljlist[$k]['logo_n'] = str_replace("./",$config['sy_weburl']."/",$val['photo_big']);
                        } 
                        
    				}
				}
			}
		} 
		if($paramer['keyword']!=""&&!empty($ljlist)){
			addkeywords('7',$paramer['keyword']);
		}$ljlist = $ljlist; if (!is_array($ljlist) && !is_object($ljlist)) { settype($ljlist, 'array');}
foreach ($ljlist as $_smarty_tpl->tpl_vars['ljlist']->key => $_smarty_tpl->tpl_vars['ljlist']->value) {
$_smarty_tpl->tpl_vars['ljlist']->_loop = true;
?>
      
      
				<div class="ltjob_list fl" id="joblist<?php echo $_smarty_tpl->tpl_vars['ljlist']->value['id'];?>
" aid="<?php echo $_smarty_tpl->tpl_vars['ljlist']->value['id'];?>
">
					<?php if ($_smarty_tpl->tpl_vars['ljlist']->value['rebates']>0) {?> <span class="ltjob_list_left_xs"></span> <?php }?>
					<div class="ltjob_list_left" style="width:400px;">
						<div class="post_items_job">
							<a href="<?php echo $_smarty_tpl->tpl_vars['ljlist']->value['job_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['ljlist']->value['job_name'];?>
</a>   
							<?php if ($_smarty_tpl->tpl_vars['ljlist']->value['rebates']>0) {?>
								<span class="post_items_sj"><em class="post_items_sj_n">赏金</em><?php echo $_smarty_tpl->tpl_vars['ljlist']->value['rebates'];?>

								<?php if ($_smarty_tpl->tpl_vars['config']->value['lt_rebates_name']) {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['lt_rebates_name'];?>
 <?php } else { ?>元<?php }?>
								</span>
							<?php }?>
						</div>

						<div class="ltjob_list_p">
							<?php if ($_smarty_tpl->tpl_vars['ljlist']->value['salary_info']) {?> 
								<span class="ltjob_list_p_xz"><?php echo $_smarty_tpl->tpl_vars['ljlist']->value['salary_info'];?>
</span><i class="ltjob_list_line">|</i>
							<?php }?>
								
							<?php if ($_smarty_tpl->tpl_vars['ljlist']->value['cityid_info']) {?>
								<?php echo $_smarty_tpl->tpl_vars['ljlist']->value['cityid_info'];?>
 <?php echo $_smarty_tpl->tpl_vars['ljlist']->value['three_cityid_info'];?>

								<i class="ltjob_list_line">|</i>
							<?php }?>
								
							<?php if ($_smarty_tpl->tpl_vars['ljlist']->value['edu_info']) {?>
								<?php echo $_smarty_tpl->tpl_vars['ljlist']->value['edu_info'];?>
学历<i class="ltjob_list_line">|</i>
							<?php }?>
								
							<?php echo $_smarty_tpl->tpl_vars['ljlist']->value['exp_info'];?>
经验
						</div>
					</div>
					
					<div class="ltjob_list_right">
						<div class="ltjob_list_com"><?php echo $_smarty_tpl->tpl_vars['ljlist']->value['com_name'];?>
</div>
						<div class="ltjob_list_comlb"><?php echo $_smarty_tpl->tpl_vars['ljlist']->value['hy_n'];?>
</div>
					</div>

					<div class="ltjob_list_sz">
						<div class="ltjob_list_right_time">更新日期：<?php echo $_smarty_tpl->tpl_vars['ljlist']->value['lastupdate'];?>
</div>
						<?php if ($_smarty_tpl->tpl_vars['config']->value['lt_rec_rebates']) {?>
							<?php if ($_smarty_tpl->tpl_vars['ljlist']->value['rebates']>0) {?>
								<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
         							<?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['ljlist']->value['uid']) {?>
         								<a href="javascript:void(0);" onclick="myself()" class="ltjob_list_sz_a"> <img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/tjj.png" />推荐 </a>
          							<?php } else { ?>
          								<a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'recuser','id'=>$_smarty_tpl->tpl_vars['ljlist']->value['id']),$_smarty_tpl);?>
"class="ltjob_list_sz_a"> <img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/tjj.png" />推荐 </a>
           							<?php }?>
								<?php } else { ?>
									<a href="javascript:void(0);" onclick="showlogin('1');" class="ltjob_list_sz_a"> <img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/tjj.png" />推荐 </a>
								<?php }?>
							<?php }?>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
							<?php if (in_array($_smarty_tpl->tpl_vars['ljlist']->value['id'],$_smarty_tpl->tpl_vars['ypjob']->value)) {?>
								<a href="javascript:void(0);" class="ltjob_list_sz_a" style="background:#ccc"> 
									<img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/post_01.png" />已应聘 </a> 
							<?php } else { ?>
								<a href="javascript:void(0);" onclick="ypjob('<?php echo $_smarty_tpl->tpl_vars['ljlist']->value['usertype'];?>
','<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['ljlist']->value['id'];?>
')" class="ltjob_list_sz_a"> 
									<img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/post_01.png" />应聘 </a>  
							<?php }?>

							<?php if (in_array($_smarty_tpl->tpl_vars['ljlist']->value['id'],$_smarty_tpl->tpl_vars['favjob']->value)) {?>
								<a href="javascript:void(0);" class="ltjob_list_sz_a"style="background:#ccc"> 
									<img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/post_02.png" />已收藏 </a>
							<?php } else { ?>
								<a href="javascript:void(0);" onclick="fav_hjob('<?php echo $_smarty_tpl->tpl_vars['ljlist']->value['id'];?>
');" class="ltjob_list_sz_a"> 
									<img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/post_02.png" />收藏 </a> 
							<?php }?>

						<?php } else { ?>

							<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
								<a href="javascript:void(0);" onclick="layer.msg('只有个人用户才能应聘', 2, 8) " class="ltjob_list_sz_a"> 
									<img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/post_01.png" />应聘 </a> 
								
								<a href="javascript:void(0);" onclick="layer.msg('只有个人用户才能收藏', 2, 8)" class="ltjob_list_sz_a"> 
									<img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/post_02.png" />收藏 </a> 
								

							<?php } else { ?> 
								<a href="javascript:void(0);" onclick="showlogin('1');" class="ltjob_list_sz_a" > 
									<img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/post_01.png" />应聘 </a> 
								<a href="javascript:void(0);" onclick="showlogin('1');" class="ltjob_list_sz_a"> 
									<img class="png" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/post_02.png" />收藏 </a>
							<?php }?>

						<?php }?>
					</div>
				 
					
					<?php if ($_smarty_tpl->tpl_vars['ljlist']->value['welfarename']) {?>
						<div class="post_items_tag_box">  
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ljlist']->value['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['v']->value) {?><span class="ltjob_list_comname"> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php }?>
							<?php } ?>
						</div>
					<?php }?>
				</div>

			<?php }
if (!$_smarty_tpl->tpl_vars['ljlist']->_loop) {
?>
				<div class="seachno">
					<div class="seachno_left"><img src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/search-no.gif" /></div>
					<div class="listno-content"> 
						<strong>很抱歉，没有找到满足条件的职位</strong> <br />
						<span> 建议您： <br />
							1、适当减少已选择的条件 <br />
							2、适当删减或更改搜索关键字 <br />
						</span> 
					</div>
				</div>
			<?php } ?>

			<div class="clear"></div>
			<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;
echo $_smarty_tpl->tpl_vars['totalshow']->value;?>
</div>
		</div>

 		<div class="service_new fr">
			<div class="service_newcont fr">
				<div class="service_title fl">
					<div class="famous_title_h1 c5 f14 fb fl">推荐职位</div>
				</div>

				<ul class="service_new_list fl">
					<?php  $_smarty_tpl->tpl_vars['joblist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['joblist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("item"=>"\'joblist\'","rec"=>"1","limit"=>"10","nocache"=>"")
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
">
								<div class="post_ghy"><span class="post_jj">急</span><?php echo $_smarty_tpl->tpl_vars['joblist']->value['job_name'];?>
</div>
								<div class="post_dha"><?php echo $_smarty_tpl->tpl_vars['joblist']->value['com_name'];?>
</div>
								<div class="post_wage">
									 <span class="post_wage_gh" style="color:#f60;"><?php echo $_smarty_tpl->tpl_vars['joblist']->value['salary_info'];?>
</span>
									 <span class="post_wage_bb "><?php echo $_smarty_tpl->tpl_vars['joblist']->value['cityid_info'];
if ($_smarty_tpl->tpl_vars['joblist']->value['three_cityid_info']) {?>—<?php echo $_smarty_tpl->tpl_vars['joblist']->value['three_cityid_info'];
}?></span>
								</div>
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>       
		</div>

	</div>
</div>

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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
>
	function setSalary(min,max){
 		$("#minsalary").val(min);
		$("#maxsalary").val(max);
   	}
	
	function setSalaryIn(){
		var min = $("#minsalary").val();
 		var max = $("#maxsalary").val();

		if(min!='' && max !=''){
			if(parseInt(min) >= parseInt(max)){
				layer.msg('最低薪资必选小于最高薪资！', 2, 8);
				$("#minsalary").val('');
				$("#maxsalary").val('');
			}else{
				$("#salaryname").val(min+"-"+max+"万");
			}
			
		}else if(min!='' && max==''){
			$("#salaryname").val(min+"万以上");
		}else if(min =='' && max !=''){
			$("#salaryname").val(max+"万以下");
		}else{
			$("#salaryname").val("请选择年薪范围");
		}

   	}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<style>
body{ background:#fff}
</style><?php }} ?>
