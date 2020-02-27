<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:57:35
         compiled from "/www/fpwjob/uploads//app/template/member/lietou//footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:18313894025e4c87ff3b6e12-35716110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee91958646568a78673e7eecedd5e79d8e01c481' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/member/lietou//footer.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18313894025e4c87ff3b6e12-35716110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c87ff3cdd49_80621959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c87ff3cdd49_80621959')) {function content_5e4c87ff3cdd49_80621959($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==2) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_easemob.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==3) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_rongcloud.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php }?>

<input type='hidden' id="layindex" value="">
<div class="clear"></div>

<div class="m_footer" style="line-height:30px;">
  <div class="wrap">
	<div class="m_footer_banquan"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webcopyright'];
echo $_smarty_tpl->tpl_vars['config']->value['sy_webrecord'];?>
 </div>
      <div class="m_footer_banquan">地址:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webadd'];?>
  电话(Tel):<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
  EMAIL:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webemail'];?>
</div>
   </div>
</div>
</body>
</html>
<?php }} ?>
