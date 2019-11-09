<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:06:10
         compiled from "/www/fpwjob/uploads//app/template/wap/header_train.htm" */ ?>
<?php /*%%SmartyHeaderCode:17653000375dc521f293ea16-74693349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aad6ae430bc953e718227daa75f657ded3a692e9' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/wap/header_train.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17653000375dc521f293ea16-74693349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'wap_style' => 0,
    'config' => 0,
    'tplmoblie' => 0,
    'backurl' => 0,
    'topplaceholder' => 0,
    'headertitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc521f2978076_80235287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc521f2978076_80235287')) {function content_5dc521f2978076_80235287($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/css/train.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
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
>var wapurl="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
";<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
</head>
<body>
<div class="itwap_head_box">
<div class="itwap_head_box_c">
<div class="itwap_head <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {?>bg<?php echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>">
     <a class="hd-lbtn" href="<?php if ($_smarty_tpl->tpl_vars['backurl']->value) {
echo $_smarty_tpl->tpl_vars['backurl']->value;
} else { ?>javascript:history.back();<?php }?>"><i class="header_top_l"></i></a>
     <?php if ($_smarty_tpl->tpl_vars['topplaceholder']->value) {?>
     <div class="itwap_head_search">
          <div class="itwap_head_search_box">
          <form method="get" action="index.php">
		  <input type="hidden" name="c" value="<?php echo $_GET['c'];?>
" />
          <?php if ($_GET['a']) {?><input type="hidden" name="a" value="<?php echo $_GET['a'];?>
" /><?php }?>
          <div class="itwap_head_search_box_c">
          <input class="itwap_head_search_text" type="text" name="keyword" value="<?php echo $_GET['keyword'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['topplaceholder']->value;?>
"/>
          <input type="submit" value="" class="itwap_head_search_box_bth"/><i class="itwap_head_search_icon"></i>
          </div>
          </form>
          </div>
     </div>
     <?php } else { ?>
     <div class="itwap_head_tit"><?php echo $_smarty_tpl->tpl_vars['headertitle']->value;?>
</div>
     <?php }?>
     <div class="train_top_icon" onclick="footernav('train_top_icon_list')">
          <div class="train_top_icon_rt">
              <i class="train_nav_icon"></i>
      
               </div>
          </div>      
             <div class="train_top_icon_list" style="display:none;">
                    <ul><li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train'),$_smarty_tpl);?>
"><i class="train_indexnav_icon train_nav_icon_home"></i>培训首页</a></li>
                        <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'subject'),$_smarty_tpl);?>
"><i class="train_indexnav_icon train_nav_icon_kc"></i>培训课程</a></li>
                        <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'agency'),$_smarty_tpl);?>
"><i class="train_indexnav_icon train_nav_icon_jg"></i>培训机构</a></li>
                        <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train','a'=>'teacher'),$_smarty_tpl);?>
"><i class="train_indexnav_icon train_nav_icon_js"></i>培训讲师</a></li>
                    </ul>
               <div class="train_top_icon_tt"></div>
     </div>
</div>
</div>
</div><?php }} ?>
