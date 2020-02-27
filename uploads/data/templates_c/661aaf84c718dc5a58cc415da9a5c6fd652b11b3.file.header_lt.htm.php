<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 11:25:05
         compiled from "/www/fpwjob/uploads//app/template/wap/header_lt.htm" */ ?>
<?php /*%%SmartyHeaderCode:17965784795e2e5811131ab1-50693047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '661aaf84c718dc5a58cc415da9a5c6fd652b11b3' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/wap/header_lt.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17965784795e2e5811131ab1-50693047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'config' => 0,
    'tplmoblie' => 0,
    'backurl' => 0,
    'topplaceholder' => 0,
    'config_wapdomain' => 0,
    'headertitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e581115f688_64339510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e581115f688_64339510')) {function content_5e2e581115f688_64339510($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta http-equiv="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
,wap" />
        <meta http-equiv="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width" initial-scale="1" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="format-detection" content="telephone=no,email=no" />
        <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no, width=device-width" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/job.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/itwap.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <?php echo '<script'; ?>
>
            var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
",
                integral_pricename = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
',
                pricename = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
',
                code_web = '<?php echo $_smarty_tpl->tpl_vars['config']->value['code_web'];?>
',
                code_kind = '<?php echo $_smarty_tpl->tpl_vars['config']->value['code_kind'];?>
';
        <?php echo '</script'; ?>
>
    </head>

    <body>
        <div class="">
            <div class="body_wap">
                <header class="header_h">
                    <div class="header_fixed">
                        <div class="header">
                            <div class="header_bg  <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {?>bg<?php echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>">
                                <a id="hearderback" class="hd-lbtn" href="<?php if ($_smarty_tpl->tpl_vars['backurl']->value) {
echo $_smarty_tpl->tpl_vars['backurl']->value;
} else { ?>javascript:history.back();<?php }?>">
                                    <i class="header_top_l"></i>
                                </a>
                                <div class="header_h1">
                                    <?php if ($_smarty_tpl->tpl_vars['topplaceholder']->value) {?>
                                    <div class="header_fx_search">
                                        <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php">
                                            <input type="hidden" name="c" value="<?php echo $_GET['c'];?>
" /> 
                                            <?php if ($_GET['a']) {?>
                                            	<input type="hidden" name="a" value="<?php echo $_GET['a'];?>
" /> 
                                            <?php }?>
                                            <div class="formFiled">
                                                <input type="text" value="<?php echo $_GET['keyword'];?>
" name="keyword" class="input_search" placeholder="<?php echo $_smarty_tpl->tpl_vars['topplaceholder']->value;?>
">
                                                <span class="formFiled_bth"> <input type="submit"  value=" " class=""></span>
                                            </div>

                                        </form>
                                    </div>
                                    <?php } else { ?>
                                    <div class="header_p_z"> <?php echo $_smarty_tpl->tpl_vars['headertitle']->value;?>
</div>
                                    <?php }?>
                                    <div class="train_top_icon" onclick="footernav('train_top_icon_list')">
                                        <div class="train_top_icon_rt">
                                            <i class="train_nav_icon"></i>

                                        </div>
                                    </div>
                                    <div class="train_top_icon_list" style="display:none;">
                                        <ul>
                                            <li>
                                                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltindex'),$_smarty_tpl);?>
"> <i class="headhunting_nav_icon headhunting_nav_icon_home"></i>猎头首页</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob'),$_smarty_tpl);?>
"> <i class="headhunting_nav_icon headhunting_nav_icon_job"></i>高端职位</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'service'),$_smarty_tpl);?>
"> <i class="headhunting_nav_icon headhunting_nav_icon_wt"></i>委托求职</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'famous'),$_smarty_tpl);?>
"> <i class="headhunting_nav_icon headhunting_nav_icon_qy"></i>知名企业</a>
                                            </li>
                                        </ul>
                                        <div class="train_top_icon_tt"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div><?php }} ?>
