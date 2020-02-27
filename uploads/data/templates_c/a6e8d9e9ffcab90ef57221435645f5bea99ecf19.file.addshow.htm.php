<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-23 23:10:12
         compiled from "/www/fpwjob/uploads/app/template/member/com/addshow.htm" */ ?>
<?php /*%%SmartyHeaderCode:18853132625e5295d4d39213-35955428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e8d9e9ffcab90ef57221435645f5bea99ecf19' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/addshow.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18853132625e5295d4d39213-35955428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e5295d4d5ebc5_55366459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5295d4d5ebc5_55366459')) {function content_5e5295d4d5ebc5_55366459($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
>
var tplPath='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/';
var serverPath='index.php?c=show&act=save';
var returnUrl='index.php?c=show';
var fileNumLimit=50;
<?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/webuploader/webuploader.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/webuploader/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" />
<?php echo '<script'; ?>
 charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/webuploader/webuploader.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/webuploader/upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<div class="w1000">
  <div class="admin_mainbody"> 
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class='right_box'>
      <div class='admincont_box'>
      <div class="com_tit"><span class="com_tit_span">上传企业环境</span></div>   
       <div class="com_body">
		<div class="com_banner_show_box">
          <div class="index_photo_new fltL mt10">
          <div class="com_add_show_box">
				<div id="uploader">
					<div class="queueList">
						<div id="dndArea" class="placeholder">
							<div id="filePicker"></div>
							<p>或将照片拖到这里</p>
						</div>
					</div>
					<div class="statusBar" style="display:none;">
						<div class="progress">
							<span class="text">0%</span>
							<span class="percentage"></span>
						</div>
						<div class="info"></div>
						<div class="btns">
							<div id="filePicker2"></div>
							<div class="uploadBtn">开始上传</div>
						</div>
					</div>
				</div>
            </div>
        </div> 
      </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
