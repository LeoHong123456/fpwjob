<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-25 18:44:33
         compiled from "/www/fpwjob/uploads/app/template/wap/member/user/invite.htm" */ ?>
<?php /*%%SmartyHeaderCode:12990979795e54fa91ee3a13-02464694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cdf46194289c761bb1a387b863521ecace1ec1b' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/member/user/invite.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12990979795e54fa91ee3a13-02464694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'v' => 0,
    'config' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e54fa91f39047_11619180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e54fa91f39047_11619180')) {function content_5e54fa91f39047_11619180($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<div class="main_member_cot_box">
<div class="yun_com_msg">安全提示：招聘企业无权收取任何费用,求职中请加强自我保护,避免上当受骗</div>
<section>

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>


<div class="wap_member_in_msg  wap_member_msg_after">
<?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=="1") {?> 
<i class="wap_member_in_msg_nolook"></i>
<?php }?>
<div class="wap_member_in_msg_comlogo">
	<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);"></div>
<a href="index.php?c=invitecont&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="wap_member_link">
<span class="wap_member_msg_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['fname'];?>
</span>
<div class="wap_member_msg_ms">邀请您面试 <?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
 的职位</div>
<div class="wap_member_msg_mstime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['datetime'],"%Y-%m-%d %H:%M");?>
</div>
<!--<div class="wap_member_msg_ms ">
我的操作： <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=="1") {?>
<font color="#f60">尚未回复</font>
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=="2") {?>
<font color="#666">已查看</font>
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=="3") {?> 
	<font color="#008000">已同意</font>
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=="4") {?>
	<font color="#FF00000">已拒绝</font>
<?php }?> 
</div>-->

</a>
</div>
<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
<div class="wap_member_no">
  <div class="wap_member_no_p1">
  目前您暂未收到面试通知<div><a class="wap_member_no_submit" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
">搜索职位</a></div>
  </div>
</div>
<?php } ?>
</section>
<div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
