<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:51:40
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_style_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:10388880045dbd439c7056d1-52109425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50b1fd588d97d69a0c030b450d953bf80766635c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_style_list.htm',
      1 => 1572667770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10388880045dbd439c7056d1-52109425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'list' => 0,
    'v' => 0,
    'sy_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd439c729a79_13450842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd439c729a79_13450842')) {function content_5dbd439c729a79_13450842($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">更换模板后，如果是静态页面需重新生成！ 【<a href='http://www.phpyun.com/tpl.php' target="_blank">获取更多模板</a>】<br>
</div>
</div>
</div>
<div class="clear"></div>
<div style="height:10px;"></div>


<div class="table-list">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<div style="float:left;width:240px;text-align:center;padding:15px;line-height:180%;border:1px solid #ddd;background:#fff;margin-right:10px; margin-top:10px;">
	  <img width="225" height="136" border="1" style="border: #ddd;" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
">
	  <br>
	 <strong><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</strong><?php if ($_smarty_tpl->tpl_vars['sy_style']->value==$_smarty_tpl->tpl_vars['v']->value['dir']) {?><font color="#FF0000">【当前使用风格】</font><?php }?>
     <br>
     风格作者：<?php echo $_smarty_tpl->tpl_vars['v']->value['author'];?>

	 <br>
	风格目录名称：<?php echo $_smarty_tpl->tpl_vars['v']->value['dir'];?>

      <br>
      <input name="" value="风格信息修改" type="button" class="admin_button" onClick="location.href='index.php?m=admin_tpl&c=stylemodify&dir=<?php echo $_smarty_tpl->tpl_vars['v']->value['dir'];?>
'" >
    
        <input name="" value="使用该风格" type="button" onClick="layer_del('确定更换模板分格吗？更换后请重新生成页面。','index.php?m=admin_tpl&c=check_style&dir=<?php echo $_smarty_tpl->tpl_vars['v']->value['dir'];?>
');" class="admin_button"/>
    
	 </div>
     <?php } ?> 
</div>
</div>
</body>
</html><?php }} ?>
