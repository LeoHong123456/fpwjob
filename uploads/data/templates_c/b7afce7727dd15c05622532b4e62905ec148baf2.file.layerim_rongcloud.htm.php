<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:43:00
         compiled from "/www/fpwjob/uploads//app/template//chat/layerim_rongcloud.htm" */ ?>
<?php /*%%SmartyHeaderCode:21085729685dc51c84b39214-82108401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7afce7727dd15c05622532b4e62905ec148baf2' => 
    array (
      0 => '/www/fpwjob/uploads//app/template//chat/layerim_rongcloud.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21085729685dc51c84b39214-82108401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51c84b57849_89496938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51c84b57849_89496938')) {function content_5dc51c84b57849_89496938($_smarty_tpl) {?><?php echo '<script'; ?>
> var style="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template"<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/chat/rongcloud/RongIMLib-2.3.5.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/chat/rongcloud/chat.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
<div class="chat_box none" onclick="goChat('reconnection')"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_chat_logo'];?>
"> <span> 直聊</span></div>
<input type="hidden" id="chat_connection" value="1"/>
<input type="hidden" id="chat_information" value="1"/>
<input type="hidden" id="chatready" value="0"/>
<style>
.chat_box{width:105px;height:50px; line-height:50px; position:fixed;right:0px;bottom:0px;border-radius: 2px;box-shadow: 1px 1px 50px rgba(0,0,0,.3); background:#fff ; cursor:pointer; z-index:100000000
}
.chat_box img{width:30px;height:30px; margin-left:15px; margin-right:10px;}
</style><?php }} ?>
