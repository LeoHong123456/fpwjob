<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:46:23
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_myuser.htm" */ ?>
<?php /*%%SmartyHeaderCode:3952523585dc51d4fa4b8c5-25853045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69d9607d6cf496212d737da0a27b18f32d8fdf6b' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_myuser.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3952523585dc51d4fa4b8c5-25853045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'adminuser' => 0,
    'user_group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51d4fa5af48_97469709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51d4fa5af48_97469709')) {function content_5dc51d4fa5af48_97469709($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link href="./images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="./images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<link href="./images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<title></title>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">我的帐号主要显示网站当前的管理员帐号信息，如用户名、姓名和管理员姓名参数！当前管理员还可以修改自己的密码操作。</div>
</div>
</div>
<div class="clear"></div>

<div class="common-form">
<div class="tag_box mt10">
<table width="100%" class="table_form " >
           <tbody>
  <tr class="admin_table_trbg">
    <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
    <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>   
  </tr>
 </tbody>
     <tr>
        <th width="150">用户名：</th>
        <td>   <div class="admin_td_h"><?php echo $_smarty_tpl->tpl_vars['adminuser']->value['username'];?>
 
        <a href="javascript:void(0)" onclick="layer_logout('index.php?m=index&c=logout');" class="admin_logout_bth">退出登录</a>
        <a href="index.php?m=admin_user&c=pass" class="admin_logout_bth">修改密码</a>
        </div></td>
    </tr>
    <tr class="admin_table_trbg">
        <th >真实姓名：</th>
        <td> <div class="admin_td_h"><?php echo $_smarty_tpl->tpl_vars['adminuser']->value['name'];?>
</div></td>
    </tr>
   	<tr >
        <th>权限：</th>
        <td> <div class="admin_td_h"><?php echo $_smarty_tpl->tpl_vars['user_group']->value['group_name'];?>
</div></td>
    </tr>
    <tr class="admin_table_trbg">
        <th >上一次登录时间：</th>
        <td> <div class="admin_td_h"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['adminuser']->value['lasttime'],'%Y-%m-%d %H:%M:%S');?>
</div></td>
    </tr>
 </table>
</div>
</div></div>
</body>
</html><?php }} ?>
