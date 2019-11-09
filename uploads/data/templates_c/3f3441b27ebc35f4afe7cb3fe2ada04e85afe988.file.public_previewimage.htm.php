<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:39:55
         compiled from "/www/fpwjob/uploads//app/template/wap/public_previewimage.htm" */ ?>
<?php /*%%SmartyHeaderCode:10937648125dc51bcb9e5886-23994438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f3441b27ebc35f4afe7cb3fe2ada04e85afe988' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/wap/public_previewimage.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10937648125dc51bcb9e5886-23994438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51bcba0c4f5_41875893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51bcba0c4f5_41875893')) {function content_5dc51bcba0c4f5_41875893($_smarty_tpl) {?><?php if ($_GET['c']=='ltresume'||$_GET['c']=='ltjob') {?>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" /> 
<?php }?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/mui/css/mui.previewimage.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.zoom.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.previewimage.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function() {
        //企业详情页
        $(".muipreview").find('img').each(function() {
            $(this).attr('data-preview-src', '');
            $(this).attr('data-preview-group', '1');
        });
		mui.previewImage();
		mui(".muipreview").on('tap','a',function(){
			var href = this.getAttribute('href');
			if(href && href.indexOf('javascript')<0){
				location.href = href;
			}
		})
        /*
        //职位详情页
        $("#description").find('img').each(function() {
            $(this).attr('data-preview-src', '');
            $(this).attr('data-preview-group', '1');
            mui.previewImage();
        });
        //兼职详情页
        $("#partcontent").find('img').each(function() {
            $(this).attr('data-preview-src', '');
            $(this).attr('data-preview-group', '1');
            mui.previewImage();
        });
        //简历详情页
        $("#resume_photo").find('img').each(function() {
            $(this).attr('data-preview-src', '');
            $(this).attr('data-preview-group', '1');
            mui.previewImage();
        });
        $("#resume_skill").find('img').each(function() {
            $(this).attr('data-preview-src', '');
            $(this).attr('data-preview-group', '2');
            mui.previewImage();
        });
        $("#resume_usershow").find('img').each(function() {
            $(this).attr('data-preview-src', '');
            $(this).attr('data-preview-group', '3');
            mui.previewImage();
        });
        //猎头职位详情页
        $("#job_desc").find('img').each(function() {
            $(this).attr('data-preview-src', '');
            $(this).attr('data-preview-group', '1');
            mui.previewImage();
        });
        $("#eligible").find('img').each(function() {
            $(this).attr('data-preview-src', '');
            $(this).attr('data-preview-group', '2');
            mui.previewImage();
        });
        $("#desc").find('img').each(function() {
            $(this).attr('data-preview-src', '');
            $(this).attr('data-preview-group', '3');
            mui.previewImage();
        });
        */
    })
<?php echo '</script'; ?>
><?php }} ?>
