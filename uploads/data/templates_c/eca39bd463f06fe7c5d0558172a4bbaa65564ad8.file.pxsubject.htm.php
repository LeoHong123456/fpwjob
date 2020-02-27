<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 11:51:10
         compiled from "/www/fpwjob/uploads/app/template/wap/pxsubject.htm" */ ?>
<?php /*%%SmartyHeaderCode:13759602865e2e5e2e28f9f1-27546963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eca39bd463f06fe7c5d0558172a4bbaa65564ad8' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/pxsubject.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13759602865e2e5e2e28f9f1-27546963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subject_name' => 0,
    'subject_type_name' => 0,
    'newsubject' => 0,
    'config' => 0,
    'v' => 0,
    'pagenav' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e5e2e2ec918_17365183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e5e2e2ec918_17365183')) {function content_5e2e5e2e2ec918_17365183($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_train.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="itwap_top_lt">
     <ul>
         <li class="Sortfl popup" data-pop="Sortfl"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['subject_name']->value[$_GET['nid']]) {
echo $_smarty_tpl->tpl_vars['subject_name']->value[$_GET['nid']];
} else { ?>课程分类<?php }?> <i class="itwap_top_icon"></i></a></li>
         <li class="Sortsj popup" data-pop="Sortsj"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['subject_type_name']->value[$_GET['type']]) {
echo $_smarty_tpl->tpl_vars['subject_type_name']->value[$_GET['type']];
} else { ?>上课时间<?php }?> <i class="itwap_top_icon"></i></a></li>
     </ul>
</div>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsubject']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<div class="train_class">
     <div class="train_class_img"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" style="width:68px;height:68px;" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_pxsubject_icon'];?>
',2);" /></a></div>
     <div class="train_class_ct">
          <div class="train_class_ct_tit"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></div>
          <div class="train_money"><i class="train_money_r">￥<?php echo floatval($_smarty_tpl->tpl_vars['v']->value['price']);?>
</i> 元</div>
          <div class="train_class_st"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'agencyshow','id'=>'`$v.uid`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['comname'];?>
</a></div>
     </div>
</div>
<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
 <?php if ($_GET['keyword']!='') {?>
  <div class="wap_member_no">没有搜索到相关课程<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'subject'),$_smarty_tpl);?>
">重新搜索</a></div></div>
  <?php } else { ?>
  <div class="wap_member_no">暂无相关课程<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'subject'),$_smarty_tpl);?>
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
