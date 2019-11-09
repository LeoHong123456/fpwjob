<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 17:13:37
         compiled from "/www/fpwjob/uploads/app/template/wap/pxteacher.htm" */ ?>
<?php /*%%SmartyHeaderCode:20042545285dc531c1027842-58582340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9060a10b84882a55afcfbd1a7030cd0eece1fc60' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/pxteacher.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20042545285dc531c1027842-58582340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'city_name' => 0,
    'subject_name' => 0,
    'industry_name' => 0,
    'searchurl' => 0,
    'rows' => 0,
    'v' => 0,
    'uid' => 0,
    'usertype' => 0,
    'pagenav' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc531c10c66d2_12925154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc531c10c66d2_12925154')) {function content_5dc531c10c66d2_12925154($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_train.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="itwap_top_c">
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

         <li class="Sortly popup" data-pop="Sortly"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['subject_name']->value[$_GET['sid']]) {
echo $_smarty_tpl->tpl_vars['subject_name']->value[$_GET['sid']];
} else { ?>领域<?php }?><i class="itwap_top_icon"></i></a></li>
         <li class="Sorthys popup" data-pop="Sorthys"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']]) {
echo $_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']];
} else { ?>行业<?php }?><i class="itwap_top_icon"></i></a></li>
     </ul><input type="hidden" id="searchurl" value="<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;?>
" />
</div>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>

<div class="train_teacher_list">
<div class="train_teacher_pic">
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'teamshow','id'=>'`$v.uid`','nid'=>'`$v.id`'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
"  onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_friend_icon'];?>
',2);" /></a></div>
<div class="train_teacher_name"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'teamshow','id'=>'`$v.uid`','nid'=>'`$v.id`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></div>
<div class="train_teacher_z"><?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value['sid']];?>
讲师</div>
<div class="">
	<?php if ($_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value['cityid']]) {?><span class="train_teacher_city"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value['cityid']];?>
</span><?php }
echo mb_substr($_smarty_tpl->tpl_vars['v']->value['train_name'],0,12,'utf-8');?>
</div>
<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['usertype']->value=='4') {?>
        <div class="train_teacher_gz"><a href="javascript:void(0)" onclick="layermsg('培训用户不能关注讲师！');" class="" >关注</a></div>
		<?php } else { ?> 
		  <?php if ($_smarty_tpl->tpl_vars['v']->value['atn']) {?> 
                <div class="train_teacher_gz" id="gz_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><a href="javascript:void(0)" onclick="atnteacher('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' class="" >取消关注</a> </div>		
				<?php } else { ?>
				<div class="train_teacher_gz" id="gz_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><a href="javascript:void(0)" onclick="atnteacher('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
')" id='atn_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' class="">关注</a> </div>		
				<?php }?>
        <?php }?> 
        <?php } else { ?> 
         <div class="train_teacher_gz"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="" >关注</a></div>
        <?php }?>  
</div>        
        
     </div>
</div>
<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
 <?php if ($_GET['keyword']!='') {?>
  <div class="wap_member_no">没有搜索到相关讲师<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'teacher'),$_smarty_tpl);?>
">重新搜索</a></div></div>
  <?php } else { ?>
  <div class="wap_member_no">暂无相关讲师<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'teacher'),$_smarty_tpl);?>
">重新搜索</a></div></div>
  <?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['pagenav']->value) {?>
<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
<?php }?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/demo.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
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
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/publictwo.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
