<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:22:01
         compiled from "/www/fpwjob/uploads/app/template/wap/pxagency.htm" */ ?>
<?php /*%%SmartyHeaderCode:7675091945e2e3b3917de24-03683180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bf2b942017a58b593a8ee22d904e3e7f9f710f0' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/pxagency.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7675091945e2e3b3917de24-03683180',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'city_name' => 0,
    'comclass_name' => 0,
    'subject_name' => 0,
    'searchurl' => 0,
    'rows' => 0,
    'v' => 0,
    'sub' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e3b3920ffe8_39565224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e3b3920ffe8_39565224')) {function content_5e2e3b3920ffe8_39565224($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_train.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
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

							<?php } else { ?>
								区域
							<?php }?>
						</span>
						<i class="searchOptions_icon"></i>
					</a>
				</li>
			<?php }?>

         	<li class="Sortprs popup" data-pop="Sortprs"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['pr']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['pr']];
} else { ?>性质<?php }?> <i class="itwap_top_icon"></i></a></li>
         	<li class="Sortfx popup" data-pop="Sortfx"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['subject_name']->value[$_GET['sid']]) {
echo $_smarty_tpl->tpl_vars['subject_name']->value[$_GET['sid']];
} else { ?>方向<?php }?> <i class="itwap_top_icon"></i></a></li>
         	<li class="Sortmuns popup" data-pop="Sortmuns"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['mun']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['mun']];
} else { ?>规模<?php }?> <i class="itwap_top_icon"></i></a></li>
    	</ul>
    	<input type="hidden" id="searchurl" value="<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;?>
" />
</div>


<!--此处是推荐的机构-->

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['rec']=='1') {?> 

	<div class="train_agency_tjlist">
		<div class="train_agency_sj_name">
			<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'agencyshow','id'=>'`$v.uid`'),$_smarty_tpl);?>
">
				<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

				<!--<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/images/diy_tit4_mq.png" width="15">-->
			</a>
		</div>
		
		<ul class="train_agency_tjlistkc 4">
			<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['slist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
			<li>
  				<div  class="train_agency_tjlistkc_c">
					<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'subshow','id'=>'`$sub.id`'),$_smarty_tpl);?>
" class=""><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['sub']->value['pic'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_pxsubject_icon'];?>
',2);"></a>
					<div class="train_index_kcname"><?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
</div>
				</div>
 			</li>
			<?php } ?>
		</ul>
		
		<div class="train_agency_sj">
			<span class="train_agency_sj_s"><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
个课程</span>
			<span class="train_agency_sj_s"><?php echo $_smarty_tpl->tpl_vars['v']->value['zixunnum'];?>
动态</span>
			<span class="train_agency_sj_s"><?php echo $_smarty_tpl->tpl_vars['v']->value['teanum'];?>
名师</span>
		</div>
		<i class="train_agency_sj_tj"></i>
	</div>


<!--机构列表-->
	<?php } else { ?>


	<div class="train_agency_list">
	 	<div class="train_agency_list_pic">
	 		<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'agencyshow','id'=>'`$v.uid`'),$_smarty_tpl);?>
">
	 			<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['logo'];?>
" style="width:60px;height:60px;" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_px_icon'];?>
',2);" />
	 		</a>
	 	</div>
	 
		<div class="train_agency_sj_name">
			<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'agencyshow','id'=>'`$v.uid`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
		</div>
		
		<div class="train_agency_sk">
			培训方向：<?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value['sid']];?>
 
		</div>
		
		<div class="train_agency_sj">
			<span class="train_agency_sj_s"><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
个课程</span>
			<span class="train_agency_sj_s"><?php echo $_smarty_tpl->tpl_vars['v']->value['zixunnum'];?>
动态</span>
			<span class="train_agency_sj_s"><?php echo $_smarty_tpl->tpl_vars['v']->value['teanum'];?>
名师</span>
		</div>
	</div>
	
	<?php }?>

<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
	<?php if ($_GET['keyword']!='') {?>
  		<div class="wap_member_no">没有搜索到相关机构<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'agency'),$_smarty_tpl);?>
">重新搜索</a></div></div>
  	<?php } else { ?>
  		<div class="wap_member_no">暂无相关机构<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'agency'),$_smarty_tpl);?>
">重新搜索</a></div></div>
  	<?php }?>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['pagenav']->value) {?>
	<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
<?php }?>

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
/js/search.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
