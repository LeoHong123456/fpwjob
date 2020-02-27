<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-16 16:24:22
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_user_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:19915171475e48fc36bafa10-31298264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af6e34fe55d38918d0b7ab9a2f5b303b8b24a89' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_user_add.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19915171475e48fc36bafa10-31298264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'adminuser' => 0,
    'user_group' => 0,
    'v' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e48fc36bfb6c1_36490843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e48fc36bfb6c1_36490843')) {function content_5e48fc36bfb6c1_36490843($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
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
<div class="admin_new_tip_list">添加管理员功能根据运营需求，超级管理员可以自由添加网站的多个超级管理员、分站管理员和CRM业务人员等常规化设置。</div>
</div>
</div>
<div class="clear"></div>


<div class="common-form">
<div class="tag_box mt10">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form name="myform" action="index.php?m=admin_user&c=save"   target="supportiframe" method="post" id="myform" onsubmit="return saveUseradd();" class="layui-form">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['adminuser']->value['uid'];?>
" name="uid" />
<table width="100%" class="table_form " >
           <tbody>
  <tr class="admin_table_trbg">
    <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
    <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>   
  </tr>
 </tbody>
    <tr>
        <th width="160">用户名：</th>
        <td>
          <div class="layui-form-item">
            <div class="layui-input-block">
              <input type="text" name="username" id="username"  lay-verify="required" placeholder="请输入用户名" value="<?php echo $_smarty_tpl->tpl_vars['adminuser']->value['username'];?>
" size="30"  autocomplete="off" class="layui-input input-text">
            </div>
          </div>
        </td>
    </tr>
      	<tr class="admin_table_trbg" >
        <th>密码：</th>
        <td>
         <div class="layui-form-item">
            <div class="layui-input-inline">
              <input type="password" name="password" id="password"  lay-verify="required" placeholder="请输入密码" size="30"  autocomplete="off" class="layui-input input-text">
            </div>
            <?php if (is_array($_smarty_tpl->tpl_vars['adminuser']->value)) {?><span class="admin_web_tip">如果密码留空则不修改密码！</span><?php }?>
          </div>
        </td>
    </tr>
<tr>
    <th>真实姓名：</th>
<td>
<div class="layui-form-item">
            <div class="layui-input-block">
              <input type="text" name="name" id="name"  lay-verify="required" placeholder="请输入真实姓名" value="<?php echo $_smarty_tpl->tpl_vars['adminuser']->value['name'];?>
" size="30"  autocomplete="off" class="layui-input input-text">
            </div>
          </div>
</td>
</tr>
<tr class="admin_table_trbg" >
    <th>用户组：</th>
<td>

	<div class="layui-input-inline">
      <select name="m_id" id="m_id_val">
        <option value="">请选择</option>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->tpl_vars['adminuser']->value['m_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['group_name'];?>
</option>
        <?php } ?>
      </select>
    </div>

</td>
</tr>
<tr >
    <th>是否可以登录分站：</th>
<td>

<div class="layui-form-item">
        <div class="layui-input-block">
            <input name="isdid" value="1" title="可以登录"
              <?php if ($_smarty_tpl->tpl_vars['adminuser']->value['isdid']=="1") {?>
               checked 
              <?php }?>
               type="radio"/>
            <input name="isdid" value="2" title="不可以登录"
              <?php if ($_smarty_tpl->tpl_vars['adminuser']->value['isdid']=="2") {?>
               checked 
              <?php }?>
             type="radio"/>
        </div>
      </div>
</td>
</tr>
<tr>
 <th style="border-bottom:none;">&nbsp;</th>
          <td align="left" style="border-bottom:none;"> 
	<input class="layui-btn layui-btn-normal" name="useradd" type="submit"  value="提交" id="dosubmit">
</td>
 </table>
 <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
 </form>
</div>
</div></div>
<?php echo '<script'; ?>
 language="javascript">
  layui.use(['layer', 'form','element'], function(){
    var layer = layui.layer
    ,form = layui.form
	,element = layui.element
    ,$ = layui.$;

  });//end layui.use()

	function saveUseradd(){
		var username = $.trim($("#username").val());
		var password = $.trim($("#password").val());
		var name = $.trim($("#name").val());
		var m_id_val = $.trim($("#m_id_val").val());
		var isdid = $('input[name="isdid"]:checked').val();
		if(username==""){parent.layer.msg('请填写用户名！', 2, 8);return false;}
    <?php if (!is_array($_smarty_tpl->tpl_vars['adminuser']->value)) {?>
		if(password==""){parent.layer.msg('请填写密码！', 2, 8);return false;}
    <?php }?>
		if(name==""){parent.layer.msg('请填写真实姓名！', 2, 8);return false;}
		if(m_id_val==""){parent.layer.msg('请选择用户组类型！', 2, 8);return false;}
		if(!isdid){parent.layer.msg('请选择是否登录分站！', 2, 8);return false;}
	}
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
