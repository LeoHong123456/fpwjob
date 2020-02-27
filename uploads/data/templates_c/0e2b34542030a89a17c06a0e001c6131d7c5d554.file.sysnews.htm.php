<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-25 16:26:27
         compiled from "/www/fpwjob/uploads/app/template/wap/member/user/sysnews.htm" */ ?>
<?php /*%%SmartyHeaderCode:8813648835e54da33d6bf47-36403548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e2b34542030a89a17c06a0e001c6131d7c5d554' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/member/user/sysnews.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8813648835e54da33d6bf47-36403548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'yqrows' => 0,
    'wkyqnum' => 0,
    'sxrows' => 0,
    'sxrowsnum' => 0,
    'commsgnum' => 0,
    'commsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e54da33d86bd1_20702077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e54da33d86bd1_20702077')) {function content_5e54da33d86bd1_20702077($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--消息列表-->
<div class="synews_box mt10">
    <?php if ($_smarty_tpl->tpl_vars['yqrows']->value) {?>
    <a href="index.php?c=invite">
        <i class="synews_box_icon"></i>
        <div class="synews_box_h1">面试通知</div>
        <div class="synews_box_p"><?php echo $_smarty_tpl->tpl_vars['yqrows']->value['fname'];?>
邀请您面试 !</div>
        <span class="synews_box_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yqrows']->value['datetime'],"%Y-%m-%d %H:%M");?>
</span> <?php if ($_smarty_tpl->tpl_vars['wkyqnum']->value) {?><i class="synews_box_n"><?php echo $_smarty_tpl->tpl_vars['wkyqnum']->value;?>
</i><?php }?>
    </a>
    <?php } else { ?>
    <a href="index.php?c=invite">
        <i class="synews_box_icon"></i>
        <div class="synews_box_h1">面试通知</div>
        <div class="synews_box_p">暂无公司邀请您面试 !</div>
    </a>
    <?php }?>
</div>

<div class="synews_box mt10">
    <?php if ($_smarty_tpl->tpl_vars['sxrows']->value) {?>
    <a href="index.php?c=sxnews">
        <i class="synews_box_icon synews_box_icon_sx"></i>
        <div class="synews_box_h1">私信</div>
        <div class="synews_box_p"><?php echo $_smarty_tpl->tpl_vars['sxrows']->value['content'];?>
</div>
        <span class="synews_box_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['sxrows']->value['ctime'],"%Y-%m-%d %H:%M");?>
</span> <?php if ($_smarty_tpl->tpl_vars['sxrowsnum']->value) {?><i class="synews_box_n"><?php echo $_smarty_tpl->tpl_vars['sxrowsnum']->value;?>
</i><?php }?>
    </a>
    <?php } else { ?>
    <a href="index.php?c=sxnews">
        <i class="synews_box_icon synews_box_icon_sx"></i>
        <div class="synews_box_h1">私信</div>
        <div class="synews_box_p">暂无消息!</div>
    </a>
    <?php }?>
</div>

<div class="synews_box mt10">
    <?php if ($_smarty_tpl->tpl_vars['commsgnum']->value) {?>
    <a href="index.php?c=commsg">
        <i class="synews_box_icon synews_box_icon_pl"></i>
        <div class="synews_box_h1">职位咨询</div>
        <div class="synews_box_p">企业<?php echo $_smarty_tpl->tpl_vars['commsg']->value['com_name'];?>
回复了你的咨询 !</div>
        <span class="synews_box_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commsg']->value['reply_time'],"%Y-%m-%d %H:%M");?>
</span> 
        <?php if ($_smarty_tpl->tpl_vars['commsgnum']->value) {?><i class="synews_box_n"> <?php echo $_smarty_tpl->tpl_vars['commsgnum']->value;?>
</i><?php }?>
    </a>
    <?php } else { ?>
    <a href="index.php?c=commsg">
        <i class="synews_box_icon synews_box_icon_pl"></i>
        <div class="synews_box_h1">职位咨询</div>
        <div class="synews_box_p">您还没有咨询信息 !</div>
    </a>
    <?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
