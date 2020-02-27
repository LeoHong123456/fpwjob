<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 14:21:07
         compiled from "/www/fpwjob/uploads//app/template/wap/member/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:6410487845e4cd3d3a39700-35921125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '655d68c871721f4bb1854655ae25109eaef73d66' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/wap/member/header.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6410487845e4cd3d3a39700-35921125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'wap_style' => 0,
    'tplmoblie' => 0,
    'backurl' => 0,
    'headertitle' => 0,
    'expect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4cd3d3a56d60_98358123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4cd3d3a56d60_98358123')) {function content_5e4cd3d3a56d60_98358123($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
 - 手机人才网</title>
        <meta http-equiv="keywords" content="人才招聘,网络招聘,wap" />
        <meta http-equiv="description" content="人才招聘网wap网站" />
        <meta content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport" />
        <meta name="MobileOptimized" content="240" />
        <meta http-equiv="Expires" content="0" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta content="yes" name="apple-mobile-web-app-capable" />
        <meta content="black" name="apple-mobile-web-app-status-bar-style" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/yun_wap_member.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
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
/js/mui/mui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            //选择快捷输入
            mui('.mui-popover').on('tap', 'li', function(e) {
                document.getElementById("name").value = document.getElementById("name").value + this.children[0].innerHTML;
                mui('.mui-popover').popover('toggle')
            })
        <?php echo '</script'; ?>
>
    </head>

    <body>
        <!-- Content area -->
        <div class="body_wap">

            <header class="header_h">

                <div class="header_fixed">
                    <div class="header">

                        <div class="header_userbg <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {?>bg<?php echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>">

                            <a class="hd-lbtn <?php if (!$_smarty_tpl->tpl_vars['backurl']->value) {?>mui-action-back<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['backurl']->value) {
echo $_smarty_tpl->tpl_vars['backurl']->value;
} else { ?>javascript:history.back()<?php }?>"><i class="header_top_l iconfont"></i></a>
                            <div class="header_h1"><?php echo $_smarty_tpl->tpl_vars['headertitle']->value;?>
</div>
                            <?php if ($_GET['c']=='resume'&&$_smarty_tpl->tpl_vars['expect']->value) {?>
                           		<span class="yun_usermember_resume_setjl"><a id="moreset" class="yun_usermember_resume_setjl_a">简历设置</a></span>
                            <?php }?>
                        </div>

                    </div>
                </div>
            </header>
        <?php }} ?>
