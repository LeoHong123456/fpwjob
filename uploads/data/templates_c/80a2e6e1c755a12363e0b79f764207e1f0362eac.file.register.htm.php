<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-29 09:01:41
         compiled from "/www/fpwjob/uploads/app/template/train/register.htm" */ ?>
<?php /*%%SmartyHeaderCode:3562341935e30d9755c8d84-93241511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80a2e6e1c755a12363e0b79f764207e1f0362eac' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/train/register.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3562341935e30d9755c8d84-93241511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'train_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e30d975617ff0_02559370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e30d975617ff0_02559370')) {function content_5e30d975617ff0_02559370($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['trainstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="training_content training_w980">
    <div class="training_reg  ftl mt10">
        <div class="training_reg_h1"> <span class="training_reg_h1_span">会员注册</span>
            <span class="training_reg_h1_bt"><i class="training_reg_h1_i">*</i> 为必填项</span> </div>
        <div class="training_reg_left  ftl">
            <ul>
                <li><em class="training_reg_em"><i class="training_reg_h1_i">*</i> 用 户 名：</em>
                    <input class="training_reg_text" type="text" id="username" name="username" onBlur="reg_checkAjax('username');">
                    <span id="ajax_username" class="reg_tips "><i class="reg_tips_icon"></i>请填写您的用户名！</span>
                </li>
                <li><em class="training_reg_em"><i class="training_reg_h1_i">*</i> 密&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;码：</em>
                    <input class="training_reg_text" type="password" id="password" name="password" onBlur="reg_checkAjax('password');">
                    <span class="reg_tips " id="ajax_password"><i class="reg_tips_icon"></i>建议使用复杂组合的强密码，6-20个字符</span>
                </li>
                <li><em class="training_reg_em"><i class="training_reg_h1_i">*</i> 确认密码：</em>
                    <input class="training_reg_text" type="password" id="passconfirm" name="passconfirm" onBlur="reg_checkAjax('passconfirm');">
                    <span id="ajax_passconfirm" class="reg_tips"><i class="reg_tips_icon"></i>请确认密码！</span>
                </li>
                <li><em class="training_reg_em"><i class="training_reg_h1_i">*</i> 电子邮箱：</em>
                    <div class="train_reg_pt">
                        <input class="training_reg_text" type="text" id="email1" name="email"  onkeyup="get_def_email(this.value,'1','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'def_email'),$_smarty_tpl);?>
');">
                        <span id="ajax_email1" class="reg_tips"><i class="reg_tips_icon"></i>请输入常用电子邮件地址！</span>
                        <div class="reg_email_box none" id="defemail1"></div>
                        <input type="hidden" id="default" value="-1" />
                        <input type="hidden" id="def" value="" />
                        <input type="hidden" id="event" value="" />
                        <input type="hidden" id="allnum" value="0" />
                        <input type="hidden" id="defEmail" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_def_email'];?>
" />
                    </div>
                </li>

                <li><em class="training_reg_em"><i class="training_reg_h1_i">*</i> 联系手机：</em>
                    <input class="training_reg_text" type="text" id="moblie" name="moblie" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" onBlur="reg_checkAjax('moblie');">
                    <span id="ajax_moblie" class="reg_tips"><i class="reg_tips_icon"></i>请输入手机号码！</span>
                </li>

                <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"注册会员")!==false) {?>
                <li>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']=='3') {?>
                    
                    <em class="training_reg_em"><i class="training_reg_h1_i">*</i> 安全验证：</em>
                    <div class="training_verification">
                        <div id="popup-captcha" data-id='subreg' data-type='click'></div>
                        <input type='hidden' id="popup-submit">
                    </div>
                    <?php } else { ?>
                    <em class="training_reg_em"><i class="training_reg_h1_i">*</i> 验 证 码：</em>
                    <input type="text" id="CheckCode" maxlength="6" onBlur="reg_checkAjax('CheckCode');" class="training_reg_text training_reg_textw120" onfocus="checkCode('vcode_img')" autocomplete="off">
                    <a href="javascript:void(0);" onclick="checkCode('vcode_img');" class="registe_a" style="display:inline-block; line-height:30px; padding-left:10px; float:left"><img id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" style="margin-left:10px; float:left">
                    </a>
                    <span id="ajax_CheckCode" class="reg_tips"><i class="reg_tips_icon"></i>请输入验证码！</span> <?php }?>
                </li>
                <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']=="1") {?>
                <input type="hidden" id="send" value="0" />

                <li><em class="training_reg_em"><i class="training_reg_h1_i">*</i> 短信验证：</em>
                    <input type="text" id="moblie_code" class="training_reg_text training_reg_textw120" onBlur="reg_checkAjax('moblie_code');" />
                    <a class="reg_btn_s02_disable" href="javascript:void(0);" id="subreg" onclick="sendmsg('vcode_img');"><span id="time">获取短信验证</span></a>
                    <span class="reg_tips false" id="ajax_moblie_code"><i class="reg_tips_icon"></i></span>
                </li>

                <li>
                    <em class="training_reg_em"><i class="training_reg_h1_i">*</i> 真实姓名：</em>
                    <input class="training_reg_text" type="text" id="realname" name="realname" onBlur="reg_checkAjax('realname');">
                    <span id="ajax_realname" class="reg_tips "><i class="reg_tips_icon"></i>请填写您的用户名！</span>
                </li>
                <?php }?>

                <li><em class="training_reg_em">&nbsp;</em>
                    <input id="xieyi" type="checkbox" value="1" class="re_checkbox" checked="checked"> 我已阅读
                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/about/service.html" target="_blank">《<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
用户服务协议》</a> ，并自愿遵守该协议。 </li>
                <li style="margin-top:0px;"><em class="training_reg_em">&nbsp;</em>
                    <input type="button" value="立即注册" id="subreg" class="btn_reg_submit" onclick="checkform('<?php echo smarty_function_url(array('m'=>'train','c'=>'register'),$_smarty_tpl);?>
','<?php echo smarty_function_url(array('m'=>'register','c'=>'ok','type'=>1),$_smarty_tpl);?>
','vcode_img');" />
                </li>
            </ul>
        </div>
        <div class="training_reg_right ftr">
            <div class="training_reg_right_log">已有账户？
                <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'login'),$_smarty_tpl);?>
" class="training_reg_right_log_a">立即登录</a>
            </div>
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
        <div class="reg_have_tip_p">
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
            <input id="pw" type='password' class="reg_have_jc_name_text" placeholder="请输入登录密码" />
        </li>

        <li>
            <span class="reg_have_jc_name"><font color="#FF3300">*</font> 验&nbsp;证&nbsp;码：</span>
            <input type="text" id="code" class="reg_have_jc_name_textyz" maxlength="6" onfocus="checkCode('vcode_imgs')" autocomplete="off" />
            <a><img id="vcode_imgs" onclick="checkCode('vcode_imgs');" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" /></a>
        </li>

        <li>
            <span class="reg_have_jc_name">&nbsp; </span>
            <input class="reg_have_jc_bth" type="button" value="确认解绑" onclick="post_pass('vcode_imgs');" />
        </li>

    </ul>
</div>


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
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['train_style']->value;?>
/js/train_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['train_style']->value;?>
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
<style>
    .reg_tips {
        display: none;
    }
</style>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $(document).keydown(function(e) {
            var ev = document.all ? window.event : e;
            if(ev.keyCode == 13) {
                checkform('<?php echo smarty_function_url(array('m'=>'train','c'=>'register'),$_smarty_tpl);?>
', '<?php echo smarty_function_url(array('m'=>'register','c'=>'ok','type'=>1),$_smarty_tpl);?>
', 'vcode_img');
            }
        });
        $("#username,#email1,#password,#passconfirm,#moblie,#txt_CheckCode").keydown(function(e) {
            var ev = document.all ? window.event : e;
            if(ev.keyCode == 13) {
                checkform('<?php echo smarty_function_url(array('m'=>'train','c'=>'register'),$_smarty_tpl);?>
', '<?php echo smarty_function_url(array('m'=>'register','c'=>'ok','type'=>1),$_smarty_tpl);?>
', 'vcode_img');
            } else {
                return;
            }
        });
        $("#xieyi").keyup(function(event) {
            var myEvent = event || window.event;
            if(myEvent.keyCode == 13) {
                checkform('<?php echo smarty_function_url(array('m'=>'train','c'=>'register'),$_smarty_tpl);?>
', '<?php echo smarty_function_url(array('m'=>'register','c'=>'ok','type'=>1),$_smarty_tpl);?>
', 'vcode_img');
            } else {
                return;
            };
        });
    });
<?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png,.pagination li a ');
<?php echo '</script'; ?>
>
<![endif]-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
