<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:44:28
         compiled from "/www/fpwjob/uploads//app/template/school/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:17512138035e2e407c6f5c07-95475779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c35b2a0c00dc7c697b916f9b90d948ee5f99925' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/school/header.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17512138035e2e407c6f5c07-95475779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'school_style' => 0,
    'config' => 0,
    'def' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e407c70c0b9_87044571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e407c70c0b9_87044571')) {function content_5e2e407c70c0b9_87044571($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['school_style']->value;?>
/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<div class="school_header">
<div class="school_w1200">
<div class="school_logo"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_px_logo'];?>
" class="png" width="200"></a></div>
<ul class="school_nav">
<li <?php if ($_smarty_tpl->tpl_vars['def']->value=='') {?>class="acurrent"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'school'),$_smarty_tpl);?>
" >首页</a></li>
<li <?php if ($_smarty_tpl->tpl_vars['def']->value=="1") {?>class="acurrent"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'school','c'=>'job'),$_smarty_tpl);?>
">网申职位 </a></li>
<li <?php if ($_smarty_tpl->tpl_vars['def']->value=="2") {?>class="acurrent"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'school','c'=>'xjh'),$_smarty_tpl);?>
">宣讲会</a></li> 
<li <?php if ($_smarty_tpl->tpl_vars['def']->value=="3") {?>class="acurrent"<?php }?>><a href="<?php echo smarty_function_url(array('m'=>'school','c'=>'academy'),$_smarty_tpl);?>
">院校</a></li>
</ul>
<div class="school_header_r">
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'school'),$_smarty_tpl);?>
" class="school_header_wap">手机端</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" class="school_header_home">人才网首页</a>
</div>
</div>
</div><?php }} ?>
