<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:12:09
         compiled from "/www/fpwjob/uploads//app/template/default/index_header.htm" */ ?>
<?php /*%%SmartyHeaderCode:18057535285e2e38e9087c94-69147419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e937f10142881efc5626322d1198ba58e68aef3' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/default/index_header.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18057535285e2e38e9087c94-69147419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'maplist' => 0,
    'navlist_app' => 0,
    'adlist_73' => 0,
    'adlist_72' => 0,
    'usertype' => 0,
    'uid' => 0,
    'navlist' => 0,
    'style' => 0,
    'nlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e38e9118252_03918338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e38e9118252_03918338')) {function content_5e2e38e9118252_03918338($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_listurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.listurl.php';
?><?php echo '<script'; ?>
>
var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
",
	user_sqintegrity="<?php echo $_smarty_tpl->tpl_vars['config']->value['user_sqintegrity'];?>
",
	integral_pricename='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
',
	pricename='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
',
	code_web='<?php echo $_smarty_tpl->tpl_vars['config']->value['code_web'];?>
',
	code_kind='<?php echo $_smarty_tpl->tpl_vars['config']->value['code_kind'];?>
';
<?php echo '</script'; ?>
>

<div class="yun_new_top">
	<div class="yun_new_cont">
		<div class="yun_new_left"> 
			<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_site']=='1') {?>
				<span class="yun_new_left_city">
					<?php echo '<script'; ?>
 language='JavaScript' src='<?php echo smarty_function_url(array('m'=>'ajax','c'=>'Site'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
				</span>
			<?php }?>
			热线电话：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>

		</div>
		
		<div class="yun_new_right">
			<div class="yun_topNav fr"> 
				<a class="yun_navMore" href="javascript:;">网站导航</a>
				
				<div class="yun_webMoredown none">
					<div class="yun_top_nav_box"> 
						<ul class="yun_top_nav_box_l">
							<?php  $_smarty_tpl->tpl_vars['maplist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maplist']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("key"=>"\'key\'","item"=>"\'maplist\'","nocache"=>"")
;');
		include(PLUS_PATH."/navmap.cache.php");$Navlist=array();
		if(is_array($navmap)){
			$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
			$paramer = $ParamerArr[arr];
			$Purl =  $ParamerArr[purl];
		}
		
		$Navlist =$navmap[0];
		if(is_array($navmap)){
			foreach($navmap as $k=>$v){
				foreach($Navlist as $key=>$val){
					if($k==$val[id]){
						foreach($v as $kk=>$value){
							if($value[type]=='1'){
								if($config[sy_seo_rewrite]=="1" && $value[furl]!=''){
									$v[$kk][url] = $config[sy_weburl]."/".$value[furl];
								}else{
									$v[$kk][url] = $config[sy_weburl]."/".$value[url];
								}
							}
						}
						$Navlist[$key]['list'][]=$v;
					}
				}
			}
			foreach($Navlist as $key=>$value){
				if($value[type]=='1'){
					if($config[sy_seo_rewrite]=="1" && $value[furl]!=''){
						$Navlist[$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$Navlist[$key][url] = $config[sy_weburl]."/".$value[url];
					}
				}
			}
		}$Navlist = $Navlist; if (!is_array($Navlist) && !is_object($Navlist)) { settype($Navlist, 'array');}
foreach ($Navlist as $_smarty_tpl->tpl_vars['maplist']->key => $_smarty_tpl->tpl_vars['maplist']->value) {
$_smarty_tpl->tpl_vars['maplist']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['maplist']->key;
?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['maplist']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['maplist']->value['eject']) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['maplist']->value['name'];?>
</a></li>
							<?php } ?>
						</ul>
						
						<ul class="yun_top_nav_box_wx">
							<?php  $_smarty_tpl->tpl_vars['navlist_app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navlist_app']->_loop = false;
global $db,$db_config,$config;include(PLUS_PATH."/menu.cache.php");$Navlist=array();
		if(is_array($menu_name)){
            eval('$paramer=array("item"=>"\'navlist_app\'","hovclass"=>"\'nav_list_hover\'","nid"=>"11","nocache"=>"")
;');
			$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
			$paramer = $ParamerArr[arr];
			$Purl =  $ParamerArr[purl];

			foreach($menu_name[12] as $key=>$val){
				
				if($val['type']=='2'){
					if($config['sy_seo_rewrite']=="1" && $val[furl]!=''){
						$menu_name[12][$key][url] = $val[furl];
					}else{
						$menu_name[12][$key][url] = $val[url];
					}
					$menu_name[12][$key][navclass] = navcalss($val,$paramer[hovclass]);
				}
			}
			foreach($menu_name[1] as $key=>$value){
				if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[1][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[1][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[1][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
			foreach($menu_name[2] as $key=>$value){
                if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[2][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[2][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[2][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
            $isCurrentFind=false;
			foreach($menu_name[4] as $key=>$value){
                if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1' && $value[furl]!=''){
					if($config['sy_seo_rewrite']=="1"){
						$menu_name[4][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[4][$key][url] = $config[sy_weburl]."/".$value[url];
					}
				}
                if($isCurrentFind==false){
				    $menu_name[4][$key][navclass] = navcalss($value,$paramer[hovclass]);
                }
                if($menu_name[4][$key][navclass]){
                    $isCurrentFind=true;
                }
			}
			foreach($menu_name[5] as $key=>$value){
                if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[5][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[5][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[5][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
		}
		
		if($paramer[nid]){
			$Navlist =$menu_name[$paramer[nid]];
		}else{
			$Navlist =$menu_name[1];
		}$Navlist = $Navlist; if (!is_array($Navlist) && !is_object($Navlist)) { settype($Navlist, 'array');}
foreach ($Navlist as $_smarty_tpl->tpl_vars['navlist_app']->key => $_smarty_tpl->tpl_vars['navlist_app']->value) {
$_smarty_tpl->tpl_vars['navlist_app']->_loop = true;
?>          
								<li> <a class="move_0<?php echo $_smarty_tpl->tpl_vars['navlist_app']->value['sort'];?>
"<?php if ($_smarty_tpl->tpl_vars['navlist_app']->value['eject']) {?> target="_blank"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['navlist_app']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlist_app']->value['name'];?>
</a> </li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div> 
			
			<span class="yun_new_right_we">欢迎来到<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
！</span>
			<a href="<?php echo smarty_function_url(array('m'=>'index','c'=>'wap'),$_smarty_tpl);?>
" class="yun_new_right_wap">手机版</a>
			<a href="<?php echo smarty_function_url(array('m'=>'index','c'=>'weixin'),$_smarty_tpl);?>
" class="yun_new_right_wx">微信版</a>
			<span class="yun_new_right_dy">
				<a href="<?php echo smarty_function_url(array('m'=>'subscribe'),$_smarty_tpl);?>
" target="_blank" class="top_dy">订阅</a>
			</span>
			
			<?php echo '<script'; ?>
 language='JavaScript' src='<?php echo smarty_function_url(array('m'=>'ajax','c'=>'RedLoginHead'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
> 

		</div>
	</div>
</div>

<div class="index_zs_banner index_zs_banner2 none" id="js_ads_banner_top">
	<?php  $_smarty_tpl->tpl_vars['adlist_73'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_73']->_loop = false;
global $db,$db_config,$config;$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[73];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 1;$length = 0;
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
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_73']->key => $_smarty_tpl->tpl_vars['adlist_73']->value) {
$_smarty_tpl->tpl_vars['adlist_73']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['adlist_73']->value['html'];?>
 <?php } ?>
</div>
<div class="index_zs_banner index_zs_banner1" id="js_ads_banner_top_slide">
	<?php  $_smarty_tpl->tpl_vars['adlist_72'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_72']->_loop = false;
global $db,$db_config,$config;$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[72];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 1;$length = 0;
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
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_72']->key => $_smarty_tpl->tpl_vars['adlist_72']->value) {
$_smarty_tpl->tpl_vars['adlist_72']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['adlist_72']->value['html'];?>
 <?php } ?>
</div>

<div class="hp_head ">
	<div class="w1200">

		<div class="hp_head_ft fl">
			<div class="hp_head_ft_logo fl">
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
最新招聘求职信息">
					<img  src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
"/>
				</a>
			</div>
		</div>
			
		<div class="hp_head_search fl">
            <form action="<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_jobdir']) {?>index.php<?php } else {
echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);
}?>" method="get" onsubmit="return search_keyword(this);"  id="index_search_form">
				<input type="hidden" <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_jobdir']) {?>name="m"<?php }?> value="job" id="m" />
				<input type="hidden" name="c" value="search" id="search" />
				
				<div class="hp_head_search_job fl">
					<span class="hp_head_search_job_b" id="search_name">职位</span>
					<div class="index_header_seach_find_list yunHeaderSearch_list_box none">
						
						<a href="javascript:void(0)" onclick="top_search('job', '找工作', '<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
', '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_job_web'];?>
', '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_jobdir'];?>
'); $('#search').attr('name', 'c');">找工作</a> 
						
						<a href="javascript:void(0)" onclick="top_search('resume', '找人才', '<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
', '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_resume_web'];?>
', '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_resumedir'];?>
'); $('#search').attr('name', 'c');"> 找人才</a> 
						
						<a href="javascript:void(0)" onclick="top_search('tiny', '普工简历', '<?php echo smarty_function_url(array('m'=>'tiny'),$_smarty_tpl);?>
', '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_tiny_web'];?>
', '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_tinydir'];?>
'); $('#search').attr('name', '');">普工简历</a> 
						
						<a href="javascript:void(0)" onclick="top_search('article', '新闻', '<?php echo smarty_function_url(array('m'=>'article'),$_smarty_tpl);?>
', '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_article_web'];?>
', '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_articledir'];?>
');" class="none">新闻</a> 
						
						<a href="javascript:void(0)" onclick="top_search('once', '店铺招聘', '<?php echo smarty_function_url(array('m'=>'once'),$_smarty_tpl);?>
', '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_once_web'];?>
', '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_oncedir'];?>
'); $('#search').attr('name', '');">店铺招聘</a> 
					</div>
				</div>

				<div class="fl">
					<input class="hp_head_search_text fl" type="text" name="keyword" value="<?php echo $_GET['keyword'];?>
" placeholder="请输入关键字">
					<input class="hp_head_search_sr fl" type="submit" value="搜索"/>
				</div>
			</form>
		</div>

		<div class="yun_new_header_search_more moreOptions">
			<a href="javascript:;" class="yun_new_header_search_more_box">更多搜索功能</a>
			
			<div class="yun_new_header_search_more_show none moredetails">
			<div class="yun_new_header_search_more_show_c">	
            <i class="yun_new_header_search_more_show_icon"></i>
				<a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
">最新职位</a>
				<a href="<?php echo smarty_function_listurl(array('m'=>'job','tp'=>2),$_smarty_tpl);?>
">推荐职位</a>
				<a href="<?php echo smarty_function_listurl(array('m'=>'job','tp'=>1),$_smarty_tpl);?>
">急聘职位</a>
				<a href="<?php echo smarty_function_url(array('m'=>'map'),$_smarty_tpl);?>
">地图搜索</a>
				
				<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
					<a href="<?php echo smarty_function_url(array('m'=>'member','c'=>'finder','act'=>'edit'),$_smarty_tpl);?>
">全能搜索</a>
				<?php } else { ?>
					<a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
">全能搜索</a>
				<?php }?>
</div>
			</div>

		</div>
		<?php if (!$_smarty_tpl->tpl_vars['uid']->value) {?> 
			<a href="<?php echo smarty_function_url(array('m'=>'login'),$_smarty_tpl);?>
" class="yun_new_header_cj">创建简历</a>
		<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value==1) {?> 
			<a href="<?php echo smarty_function_url(array('m'=>'member','c'=>'expect'),$_smarty_tpl);?>
" class="yun_new_header_cj">创建简历</a>
		<?php }?>
	</div>


<div class="yun_new_headernav">
	<div class="w1200">
		<ul class="yun_new_headernav_list">
			<?php  $_smarty_tpl->tpl_vars['navlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navlist']->_loop = false;
global $db,$db_config,$config;include(PLUS_PATH."/menu.cache.php");$Navlist=array();
		if(is_array($menu_name)){
            eval('$paramer=array("item"=>"\'navlist\'","hovclass"=>"\'nav_list_hover\'","nid"=>"1","nocache"=>"")
;');
			$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
			$paramer = $ParamerArr[arr];
			$Purl =  $ParamerArr[purl];

			foreach($menu_name[12] as $key=>$val){
				
				if($val['type']=='2'){
					if($config['sy_seo_rewrite']=="1" && $val[furl]!=''){
						$menu_name[12][$key][url] = $val[furl];
					}else{
						$menu_name[12][$key][url] = $val[url];
					}
					$menu_name[12][$key][navclass] = navcalss($val,$paramer[hovclass]);
				}
			}
			foreach($menu_name[1] as $key=>$value){
				if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[1][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[1][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[1][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
			foreach($menu_name[2] as $key=>$value){
                if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[2][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[2][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[2][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
            $isCurrentFind=false;
			foreach($menu_name[4] as $key=>$value){
                if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1' && $value[furl]!=''){
					if($config['sy_seo_rewrite']=="1"){
						$menu_name[4][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[4][$key][url] = $config[sy_weburl]."/".$value[url];
					}
				}
                if($isCurrentFind==false){
				    $menu_name[4][$key][navclass] = navcalss($value,$paramer[hovclass]);
                }
                if($menu_name[4][$key][navclass]){
                    $isCurrentFind=true;
                }
			}
			foreach($menu_name[5] as $key=>$value){
                if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[5][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[5][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[5][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
		}
		
		if($paramer[nid]){
			$Navlist =$menu_name[$paramer[nid]];
		}else{
			$Navlist =$menu_name[1];
		}$Navlist = $Navlist; if (!is_array($Navlist) && !is_object($Navlist)) { settype($Navlist, 'array');}
foreach ($Navlist as $_smarty_tpl->tpl_vars['navlist']->key => $_smarty_tpl->tpl_vars['navlist']->value) {
$_smarty_tpl->tpl_vars['navlist']->_loop = true;
?>
				<li class="<?php echo $_smarty_tpl->tpl_vars['navlist']->value['navclass'];?>
"> 
					<a href="<?php echo $_smarty_tpl->tpl_vars['navlist']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['navlist']->value['eject']) {?> target="_blank"<?php }?> class="png"> <?php echo $_smarty_tpl->tpl_vars['navlist']->value['name'];?>
 </a>
					
					<?php if ($_smarty_tpl->tpl_vars['navlist']->value['model']=="new") {?>
						<div class="nav_icon nav_icon_new">  <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/new.gif"> </div>
					<?php } elseif ($_smarty_tpl->tpl_vars['navlist']->value['model']=="hot") {?> 
						<div class="nav_icon nav_icon_hot"> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/hotn.gif">  </div>
					<?php }?>
					<i class="yun_new_headernav_list_line"></i>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>
</div>
 <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_header_fix']=='1') {?> 
	<div class="header_fixed yun_bg_color none" id="header_fix">
		<div class="header_fixed_cont">
			<ul class="header_fixed_list">
				<?php  $_smarty_tpl->tpl_vars['nlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nlist']->_loop = false;
global $db,$db_config,$config;include(PLUS_PATH."/menu.cache.php");$Navlist=array();
		if(is_array($menu_name)){
            eval('$paramer=array("item"=>"\'nlist\'","hovclass"=>"\'header_fixed_list_cur\'","nid"=>"1","nocache"=>"")
;');
			$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
			$paramer = $ParamerArr[arr];
			$Purl =  $ParamerArr[purl];

			foreach($menu_name[12] as $key=>$val){
				
				if($val['type']=='2'){
					if($config['sy_seo_rewrite']=="1" && $val[furl]!=''){
						$menu_name[12][$key][url] = $val[furl];
					}else{
						$menu_name[12][$key][url] = $val[url];
					}
					$menu_name[12][$key][navclass] = navcalss($val,$paramer[hovclass]);
				}
			}
			foreach($menu_name[1] as $key=>$value){
				if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[1][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[1][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[1][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
			foreach($menu_name[2] as $key=>$value){
                if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[2][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[2][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[2][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
            $isCurrentFind=false;
			foreach($menu_name[4] as $key=>$value){
                if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1' && $value[furl]!=''){
					if($config['sy_seo_rewrite']=="1"){
						$menu_name[4][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[4][$key][url] = $config[sy_weburl]."/".$value[url];
					}
				}
                if($isCurrentFind==false){
				    $menu_name[4][$key][navclass] = navcalss($value,$paramer[hovclass]);
                }
                if($menu_name[4][$key][navclass]){
                    $isCurrentFind=true;
                }
			}
			foreach($menu_name[5] as $key=>$value){
                if($value[url]=="/"){
					$value[url]="";
				}
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[5][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[5][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[5][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
		}
		
		if($paramer[nid]){
			$Navlist =$menu_name[$paramer[nid]];
		}else{
			$Navlist =$menu_name[1];
		}$Navlist = $Navlist; if (!is_array($Navlist) && !is_object($Navlist)) { settype($Navlist, 'array');}
foreach ($Navlist as $_smarty_tpl->tpl_vars['nlist']->key => $_smarty_tpl->tpl_vars['nlist']->value) {
$_smarty_tpl->tpl_vars['nlist']->_loop = true;
?>
					<li class="<?php echo $_smarty_tpl->tpl_vars['nlist']->value['navclass'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['nlist']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['nlist']->value['eject']) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['nlist']->value['name'];?>
</a></li>
				<?php } ?>
			</ul>
			
			<?php echo '<script'; ?>
 language='JavaScript' src='<?php echo smarty_function_url(array('m'=>'ajax','c'=>'ReadIndexHeader'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
> 
			
			<div class="header_fixed_close"><a href="javascript:;" onclick="$('#header_fix').remove();" rel="nofollow">关闭</a></div>
		</div>
	</div>
<?php }?>
 <?php }} ?>
