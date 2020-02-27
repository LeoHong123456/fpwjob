<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-17 15:42:35
         compiled from "/www/fpwjob/uploads/app/template/lietou/login.htm" */ ?>
<?php /*%%SmartyHeaderCode:10232452335e4a43eb88d9a1-27709837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '826098c7c786c91d02fa870396406507da591c32' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/lietou/login.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10232452335e4a43eb88d9a1-27709837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'cookie' => 0,
    'lietou_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4a43eb8d82d4_43385463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4a43eb8d82d4_43385463')) {function content_5e4a43eb8d82d4_43385463($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  

<div class="clear"></div>
<div class="lt_login_bg"></div>
<div class="clear"></div>
<div class="lt_login_bg_box">

<div class="lt_login_bg_box_c"><div class="login_title fl">欢迎登录</div>
   <ul class="login_left fl">
        
        <li>
         <span class="login_left_s">用户名：</span> <input class="login_input fl" type="text" value="用户名" onclick="if(this.value=='用户名'){this.value=''}" onblur="if(this.value==''){this.value='用户名'}" name="username" id="username">
        </li>
        <li><span class="login_left_s">密&nbsp;&nbsp; 码：</span>
          <input class="login_input fl" type="text" value="密码" id="pw" >
          <input class="login_input fl none" type="password" value="" name="password" id="password">
        </li>
		<?php if (stripos($_smarty_tpl->tpl_vars['config']->value['code_web'],"前台登录")!==false) {?>
		<li>
		 <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>	
				<!---geetest----->
                  <span class="login_left_s">验证码：</span>
                <div class="ltlogin_verification">
				<div id="popup-captcha" data-id='sublogin' data-type='click'></div>
				<input type='hidden' id="popup-submit">
                </div>
			<?php } else { ?>
			 <span class="login_left_s">验证码：</span>
			<input type="text" class="login_input logoin_text_yz fl" value="验证码" id="txt_CheckCode" maxlength="6" name="authcode" style="width:105px;" onclick="if(this.value=='验证码'){this.value=''}" onblur="if(this.value==''){this.value='验证码'}">
			<img id="vcode_img" onclick="checkCode('vcode_img');" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" style="margin-top:20px; float:left; margin-left:5px;">
			<a href="javascript:void(0);" onclick="checkCode('vcode_img');" class="registe_a" style="margin-top:25px; margin-left:5px; float:left; line-height:30px; display:inline-block">看不清？</a>
			
           	<?php }?>		
		</li>
		<?php }?>
       
        <li>
		<input type="hidden" name="cookie" value="<?php echo $_smarty_tpl->tpl_vars['cookie']->value;?>
" id="cookie" />
        <input class="login_bth" value="立即登录" type="button" id='sublogin' onclick="lchecklogin('<?php echo smarty_function_url(array('m'=>'lietou','c'=>'loginsave'),$_smarty_tpl);?>
','vcode_img');" name="">
        </li> 
        <li class="login_account">
          <div class="login_forget fr"><a href="<?php echo smarty_function_url(array('m'=>'forgetpw'),$_smarty_tpl);?>
">忘记密码？</a></div>
        </li>
		
      </ul>
 <div class="login_right fr">
        <div class="login_other fl">还没有帐号？</div>
        <div class="login_now fl"><a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'register'),$_smarty_tpl);?>
">立即注册</a></div>
        <div class="registor_now fl">
          <div class="registor_span fl">使用以下帐号直接登录:</div>
          <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1) {?>
          <a class="icon_wb png" title="使用新浪微博帐号登录" href="<?php echo smarty_function_url(array('m'=>'sinaconnect'),$_smarty_tpl);?>
"></a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1) {?>
          <a class="icon_qq png" title="使用腾讯QQ帐号登录" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/qqlogin.php" ></a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']==1) {?>
          <a class="icon_weixin png" title="使用微信帐号登录" href="<?php echo smarty_function_url(array('m'=>'wxconnect'),$_smarty_tpl);?>
"></a>
          <?php }?> </div>
      </div>
    </div>
  </div>
</div>

</div>
<div class="hunter_reg_bg">
<link href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/login.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" rel="stylesheet" />
<div class="login_mian">
  <div class="wapper">
    <div class="login_con"> 
   
     
</div>
</div>
<div class="clear"></div>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  DD_belatedPNG.fix('.png,.New_post,.box_bot,.new_post_box_h1 span,.icon,.ser_cz a,.Strat-list ,.logoin_su2,.logoin_after_su2,.logoin_after em,.logoin_after_tx dt,.service_filter_fot,.Strat-list .s,.nav_exit span,.company_focus');
<?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
>var webname = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
";<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/js/public_lt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/pc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  <?php }} ?>
