<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 10:38:30
         compiled from "/www/fpwjob/uploads//app/template/wap/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:1287573915e2e4d263a0140-36262170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c7ba75d05ecc508a06afa248420c7e19567939c' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/wap/header.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1287573915e2e4d263a0140-36262170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'wap_style' => 0,
    'config' => 0,
    'tplmoblie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e4d263ec212_01398166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e4d263ec212_01398166')) {function content_5e2e4d263ec212_01398166($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta http-equiv="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
,wap" />
<meta http-equiv="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.picker.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.poppicker.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/job.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
</head>
<body>
<header class="header_h">
  <div class="header_fixed">
    <div class="header_bg <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {?>bg<?php echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>" >
    <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['logo']==2) {?>
    <div class="header_p_z" style="width:60%;color: #fff; text-align:center; height: 50px;line-height: 50px;font-size: 18px;"> <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
</div>
    <?php } else { ?>
    <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wap_logo'];?>
"></div><?php }?>
    </div>
   <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['site']!=2) {?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_site']=='1') {?> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'site'),$_smarty_tpl);?>
"><span class="search_con_l fl" ><i class="city_icon iconfont"  ></i><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_indexcity'];?>
</span></a> <?php }
}?> </div>
	
</header>
<?php }} ?>
