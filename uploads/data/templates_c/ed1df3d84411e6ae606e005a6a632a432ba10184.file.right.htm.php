<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:12:41
         compiled from "/www/fpwjob/uploads//app/template/train/right.htm" */ ?>
<?php /*%%SmartyHeaderCode:4996423275e2e39091ddf02-39379128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed1df3d84411e6ae606e005a6a632a432ba10184' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/train/right.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4996423275e2e39091ddf02-39379128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rectrain' => 0,
    'v' => 0,
    'config' => 0,
    'subject_name' => 0,
    'reclist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e3909206fd8_68380585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e3909206fd8_68380585')) {function content_5e2e3909206fd8_68380585($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ad')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.ad.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><div class="training_subject_right ftr">
<div class="training_subject_right_ban ftl mt15"><?php echo smarty_function_ad(array('cid'=>40,'id'=>148),$_smarty_tpl);?>
</div>
<div class="training_Agencies_rec ftr mt10">
<div class="training_Agencies_rec_tit  ftl">培训机构推荐</div>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rectrain']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<dl class="training_Agencies_rec_list ftl">
<dt><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'agencyshow','id'=>'`$v.uid`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['logo'];?>
" width="50" height="50" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_px_icon'];?>
',2);" />
</a></dt>
<dd>
<a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'agencyshow','id'=>'`$v.uid`'),$_smarty_tpl);?>
" class="training_Agencies_rec_name" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['name'],0,10,'utf-8');?>
</a>
<span class="training_Agencies_rec_list_span">授课：<?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value['sid']];?>
 </span>
<span class="training_Agencies_rec_list_span">课程（<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
）</span>
</dd>
</dl>
<?php } ?>
</div>
<div class="training_rec_subject ftl mt10">
<div class="training_tit"><span class="training_span">推荐课程</span></div>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reclist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<dl class="training_rec_subject_list">
<dt><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">

<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="176" height="132" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_pxsubject_icon'];?>
',2);">
</a></dt>
<dd><a class="train_class_t" href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$v.id`'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['name'],0,15,'utf-8');?>
</a></dd>
<dd>价格: <span  class="training_rec_subject_p">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span></dd>
<dd class="train_class_r"><?php echo $_smarty_tpl->tpl_vars['v']->value['baomingnum'];?>
人报名</dd>
</dl>
<?php } ?>
</div>
</div><?php }} ?>
