<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:10:26
         compiled from "/www/fpwjob/uploads/app/template/lietou/register.htm" */ ?>
<?php /*%%SmartyHeaderCode:5622421445dc522f29fbd14-11058587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b51b0e4ca902b8e7f06143e7eb8818264f7c42a3' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/lietou/register.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5622421445dc522f29fbd14-11058587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'lietou_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc522f2a1e361_50058512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc522f2a1e361_50058512')) {function content_5dc522f2a1e361_50058512($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="lt_login_bg"></div>
<div class="clear"></div>

<div class="lt_login_bg_box" style="height:660px;">

    <div class="lt_login_bg_box_c">
        <div class="login_title fl">猎头/中介注册</div>
        <ul class="login_left fl">
            <li>
                <span class="login_left_s">用&nbsp;户&nbsp; 名：</span> <input class="login_input" type="text" id="username" name="username" onBlur="reg_checkAjax('username');" placeholder="用户名" />
                <span class="reg_tips reg_tips_red false" id="ajax_username"><i class="reg_tips_icon"></i>请填写您的用户名！</span></li>
            <li><span class="login_left_s">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</span>
                <input class="login_input" type="password" id="regpassword" name="password" onBlur="reg_checkAjax('regpassword');" placeholder="请输入密码(6到16位字母数字)">
                <span class="reg_tips false" id="ajax_regpassword"><i class="reg_tips_icon"></i>建议使用复杂组合的强密码，6-20个字符</span></li>
            <li><span class="login_left_s">确认密码：</span>
                <input class="login_input" type="password" id="passconfirm" name="passconfirm" onBlur="reg_checkAjax('passconfirm');" placeholder="请输入密码(6到16位字母数字)">
                <span class="reg_tips reg_tips_blue false" id="ajax_passconfirm"><i class="reg_tips_icon"></i>请确认密码！</span></li>

            <li><span class="login_left_s">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</span>
                <div class="train_reg_pt">

                    <input class="login_input" type="text" id="email1" name="email" onkeyup="get_def_email(this.value,'1');" placeholder="请输入常用电子邮件地址">

                    <div class="reg_email_box none" id="defemail1"></div>
                    <input type="hidden" id="default" value="-1" />
                    <input type="hidden" id="def" value="" />
                    <input type="hidden" id="event" value="" />
                    <input type="hidden" id="allnum" value="0" />
                    <input type="hidden" id="defEmail" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_def_email'];?>
" />
                </div> <span class="reg_tips false" id="ajax_email1"><i class="reg_tips_icon"></i>请输入常用电子邮件地址！</span>
            </li>
            <li>
                <span class="login_left_s">手机号码：</span>
                <input class="login_input" type="text" id="moblie" name="moblie" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" onBlur="reg_checkAjax('moblie');" placeholder="请输入手机号码">
                <span class="reg_tips  false" id="ajax_moblie"><i class="reg_tips_icon"></i>请输入手机号码！</span></li>
            <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"注册会员")!==false) {?>
            <li>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>
                 <span class="login_left_s">验&nbsp;证&nbsp; 码：</span>
                <div class="ltreg_verification" style="margin-top:15px;">
                    <div id="popup-captcha" data-id='subreg' data-type='click'></div>
                    <input type='hidden' id="popup-submit">
                </div>
                <?php } else { ?>
                <span class="login_left_s">验&nbsp;证&nbsp; 码：</span>
                <div class="ltreg_verificationyz_box ltreg_verificationyz_box120">
                    <input type="text" class="ltreg_verificationyz_box_text logoin_text_yz" id="CheckCode" placeholder="验证码" maxlength="6" onBlur="reg_checkAjax('CheckCode');" name="authcode" style="width:105px;" onfocus="checkCode('vcode_img')" autocomplete="off">
                    <a href="javascript:void(0);" onclick="checkCode('vcode_img');" class="ltreg_verificationyz_box_tp"><img id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php">看不清？</a>

                </div>
                <span class="reg_tips  false" id="ajax_CheckCode"><i class="reg_tips_icon"></i>请输入验证码！</span> <?php }?>
            </li>
            <?php }?> 
            <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']=="1") {?>
            <input type="hidden" id="send" value="0" />

            <li>
                <span class="login_left_s">短信验证：</span>
                <input type="text" id="moblie_code" class="login_input" onBlur="reg_checkAjax('moblie_code');" placeholder="短信验证" / style="width:118px;">
                <a class="ltreg_verificationyz_b" href="javascript:void(0);" id="subreg" onclick="sendmsg('vcode_img');"><span id="time">获取短信验证</span></a>
                <span class="reg_tips false" id="ajax_moblie_code"><i class="reg_tips_icon"></i></span>
            </li>

            <li>
                <span class="login_left_s">真实姓名：</span>
                <input class="login_input" type="text" id="realname" name="realname" onBlur="reg_checkAjax('realname');" placeholder="真实姓名">
                <span class="reg_tips reg_tips_red false" id="ajax_realname"><i class="reg_tips_icon"></i>请填写您的真实姓名！</span>
            </li>
            <?php }?>

            <li>
                <input type="submit" value="立即注册" class="login_bth" id='subreg' onclick="checkform('vcode_img')">
            </li>
            <li>
                <div style="padding-top:10px;"> <input id="xieyi" type="checkbox" value="1" class="re_checkbox" checked="checked">
                    <span class="reg_xy">我同意接受</span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/about/service.html" target="_blank"> 《<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
用户服务协议》</a>
                </div>
            </li>
        </ul>

        <div class="login_right fr">
            <div class="login_other fl">已有帐号？</div>
            <div class="login_now fl">
                <a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'login'),$_smarty_tpl);?>
">立即登录</a>
            </div>
            <div class="registor_now fl">
                <div class="registor_span fl">使用以下帐号直接登录:</div>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1) {?>
                <a class="icon_wb  png" title="使用新浪微博帐号登录" href="<?php echo smarty_function_url(array('m'=>'sinaconnect'),$_smarty_tpl);?>
"></a>
                <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1) {?>
                <a class="icon_qq  png" title="使用腾讯QQ帐号登录" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/qqlogin.php"></a>
                <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']==1) {?>
                <a class="icon_weixin  png" title="使用微信帐号登录" href="<?php echo smarty_function_url(array('m'=>'wxconnect'),$_smarty_tpl);?>
"></a>
                <?php }?> </div>
        </div>
    </div>
</div>

 <div class="" style="width:550px; background:#fff; margin:20px auto; display: none;" id="written_off">
    <div class="reg_have_tip">
        <i class="reg_have_tip_icon"></i>
        <div class="reg_have_tip_tit"><span id="zy_type">该手机号已被注册为企业账号</span></div>
        <div class="reg_have_tip_zc" id="zy_name"></div>
    </div>

    <div class="reg_have_tip_p_c">
        <div class="reg_have_tip_p">1. 如果是你本人，但不记得密码，您可以找回密码
            <a href="<?php echo smarty_function_url(array('m'=>'forgetpw'),$_smarty_tpl);?>
" class="reg_have_tip_bth">找回密码</a>
        </div>
        <div class="reg_have_tip_p" >
			<span id="desc_toast">2. 解除手机号与该账号的绑定，解除绑定后，您无法 继续用该手机号登录</span>
            <a href="javascript:void(0);" onclick="CheckPW()" class="reg_have_tip_bth">解除绑定</a>
        </div>
    </div>
    <div class="reg_have_tip_kf">如有疑问可拨打客服服务热线：<span class="reg_have_tip_kf_tel"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</span></div>
    <input type="hidden" id="zy_uid" value="" />
    <input type="hidden" id="zy_mobile" value="" />
    <input type="hidden" id="zy_email" value="" />
</div>
 
 <div class="none" id="postpw">
    <ul class="reg_have_jc">
        <li>
            <span class="reg_have_jc_name"><font color="#FF3300">*</font> 登录密码：</span>
            <input id="pw2" type='password' class="reg_have_jc_name_text" placeholder="请输入登录密码" />
        </li>

        <li>
            <span class="reg_have_jc_name"><font color="#FF3300">*</font> 验&nbsp;证&nbsp;码：</span>
            <input type="text" id="code" class="reg_have_jc_name_textyz" maxlength="6" onfocus="checkCode('vcode_imgs')" autocomplete="off"/>
            <a><img id="vcode_imgs" onclick="checkCode('vcode_imgs');" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" /></a>
        </li>

        <li>
            <span class="reg_have_jc_name">&nbsp; </span>
            <input class="reg_have_jc_bth" type="button" value="确认解绑" onclick="post_pass('vcode_imgs');" />
        </li>

    </ul>
</div>
 
<link href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/login.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" rel="stylesheet" />
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
>
    var webname = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
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
 src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/js/reg_ajax.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $(document).keydown(function(e) {
            var ev = document.all ? window.event : e;
            if(ev.keyCode == 13) {
                checkform('vcode_img');
            }
        });
        $("#username,#email1,#regpassword,#passconfirm,#moblie,#txt_CheckCode").keydown(function(e) {
            var ev = document.all ? window.event : e;
            if(ev.keyCode == 13) {
                checkform('vcode_img');
            } else {
                return;
            }
        });
        $("#xieyi").keyup(function(event) {
            var myEvent = event || window.event;
            if(myEvent.keyCode == 13) {
                checkform('vcode_img');
            } else {
                return;
            };
        });
    })
<?php echo '</script'; ?>
>
<style>
    .reg_tips {
        display: none
    }
</style>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
