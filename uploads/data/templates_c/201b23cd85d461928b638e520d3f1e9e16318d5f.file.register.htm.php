<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:53:34
         compiled from "/www/fpwjob/uploads/app/template/wap/register.htm" */ ?>
<?php /*%%SmartyHeaderCode:2782164835dbd440e816dc2-72668761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '201b23cd85d461928b638e520d3f1e9e16318d5f' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/register.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2782164835dbd440e816dc2-72668761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd440e8322c8_59542537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd440e8322c8_59542537')) {function content_5dbd440e8322c8_59542537($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>

<div class="yunwapreg_box">
	<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="login_reg"><span class="login_reg_s">登录</span></a>
	<div class="register_box">
		<ul>
			<li>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usertype'=>1),$_smarty_tpl);?>
">
					<i class="register_box_user_img register_box_user_img_gr"></i>
					<div class="register_box_user_name">个人用户</div>
					<div class="register_box_user_ys">免费创建简历</div>
					<div class="register_box_user_ys">职位海量淘</div>
					<div class="register_box_user_ys">简历轻松投</div>

				</a>
			</li>

			<li>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usertype'=>2),$_smarty_tpl);?>
">
					<i class="register_box_user_img register_box_user_img_qy"></i>
					<div class="register_box_user_name">企业用户</div>
					<div class="register_box_user_ys">发布招聘信息</div>
					<div class="register_box_user_ys">收取简历投递</div>
					<div class="register_box_user_ys">多种职位分享</div>

				</a>
			</li>
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_lietou_web']==1) {?>
			<li>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usertype'=>3),$_smarty_tpl);?>
">
					<i class="register_box_user_img register_box_user_img_lt"></i>
					<div class="register_box_user_name">猎头用户</div>
					<div class="register_box_user_ys">发布高端职位</div>
					<div class="register_box_user_ys">收取高级简历</div>
					<div class="register_box_user_ys">获得人才推荐</div>

				</a>
			</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_train_web']==1) {?>
			<li>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usertype'=>4),$_smarty_tpl);?>
">
					<i class="register_box_user_img register_box_user_img_px"></i>
					<div class="register_box_user_name">培训用户</div>
					<div class="register_box_user_ys">发布培训课程</div>
					<div class="register_box_user_ys">获得有利生源</div>
					<div class="register_box_user_ys">展示机构文化</div>

				</a>
			</li>
			<?php }?>

		</ul>
		<div class="clear"></div>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
