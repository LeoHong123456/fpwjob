<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-21 09:53:21
         compiled from "/www/fpwjob/uploads/app/template/wap/announcements.htm" */ ?>
<?php /*%%SmartyHeaderCode:13065160615e4f3811226b71-94010176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30f1ad5be2f0d1e2ca79a97e9dbbe0dc1b91f62c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/announcements.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13065160615e4f3811226b71-94010176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'config' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4f38112359e7_71600714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f38112359e7_71600714')) {function content_5e4f38112359e7_71600714($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
.about_right_p img{max-width:100%;}
table[align="center"] { margin: 0 auto; }
table,table tr th, table tr td { border:1px solid #666; }
</style>
<div class="about_content" style="margin-top:10px;">
<div class="anno_tit">
     <h1><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</h1>
</div>

<div class="about_right_p">
<div style="width:100%; overflow:hidden">
<?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>

</div>
</div>
</div>
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
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
