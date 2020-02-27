<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-28 20:00:46
         compiled from "/www/fpwjob/uploads//app/template/wap/header_school.htm" */ ?>
<?php /*%%SmartyHeaderCode:11290310535e30226e616b41-60858142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d64847f6f7e0a38f3af0e36e6f787873dc9dd54' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/wap/header_school.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11290310535e30226e616b41-60858142',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'config' => 0,
    'wap_style' => 0,
    'tplmoblie' => 0,
    'backurl' => 0,
    'topplaceholder' => 0,
    'headertitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e30226e636054_54004092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e30226e636054_54004092')) {function content_5e30226e636054_54004092($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/css/school.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
     </div>  <div class="train_top_icon_list" style="display:none;">
                    <ul> <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'school'),$_smarty_tpl);?>
"><i class="school_nav_icon school_nav_icon_home"></i>校招首页</a></li>
                    
                        <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'school','a'=>'job'),$_smarty_tpl);?>
"><i class="school_nav_icon school_nav_icon_ws"></i>网申职位</a></li>
                        <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'school','a'=>'xjh'),$_smarty_tpl);?>
"><i class="school_nav_icon school_nav_icon_xjh"></i>宣讲会</a></li>
                        <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'school','a'=>'schoolacademy'),$_smarty_tpl);?>
"><i class="school_nav_icon school_nav_icon_yx"></i>院校</a></li>
                    </ul>
               </div>
</div>
</div>
</div><?php }} ?>
