<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-18 10:02:09
         compiled from "/www/fpwjob/uploads/app/template/default/error/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:8284107035e4b45a13ed448-19909863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd58906cf2d5e07db9319e0ead7e82768481a8d42' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/error/index.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8284107035e4b45a13ed448-19909863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4b45a1400b89_46814733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4b45a1400b89_46814733')) {function content_5e4b45a1400b89_46814733($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/error.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
</head>
<body onLoad="TimeOut('10')">
<div class="index_w1000 error_box">
  <div class="error_img"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/error_01.png"></div>
  <div class="error_text">
    <h3>很抱歉，您访问的页面不存在……</h3>
    <div class="error_h"><span id="times">10</span>秒后自动跳转到首页，如没有跳转请点击以下链接</div>
    <div class="error_h">
      <input class="error_bth" value="返回首页 " type="button" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
'">
    </div>
  </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
function TimeOut(i){
	if(i>1){
		i=i-1;
		$("#times").html(i);
		setTimeout("TimeOut("+i+");",1000);
	}else{
		window.location.href='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
	}
} 
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
