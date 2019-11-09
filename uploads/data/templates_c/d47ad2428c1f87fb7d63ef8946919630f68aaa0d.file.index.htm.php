<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:37:50
         compiled from "/www/fpwjob/uploads/app/template/default/register/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:6165613705dc51b4eb975d2-39007062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd47ad2428c1f87fb7d63ef8946919630f68aaa0d' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/register/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6165613705dc51b4eb975d2-39007062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'reg_url' => 0,
    'reg_com_url' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51b4ebfd399_63704997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51b4ebfd399_63704997')) {function content_5dc51b4ebfd399_63704997($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/login.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
        <div class="register_header">
            <div class="reg_w980">
                <div class="reg_logo">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_logo'];?>
" class="png"></a>
                </div>
                <div class="reg_msg">欢迎注册</div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" class="reg_fh yun_text_color fr">返回首页</a>
            </div>
        </div>
        <!--content  start-->
        <div class="reg_chosecontent">

            <div class="reg_content_tit">请选择注册账号的类型</div>
            <div class="reg_box">
                <div class="reg_box_list">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['reg_url']->value;?>
">
                        <div class="reg_box_list_userimg"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/zc-lawyer.jpg" width="80"></div>
                        <div class="reg_box_list_username">个人用户</div>
                        <div class="reg_box_list_userp">
                            <div class="reg_box_list_userp_c">
                                <span class="reg_box_list_userp_s">免费创简历</span>
                                <span class="reg_box_list_userp_s">职位海量淘</span>
                                <span class="reg_box_list_userp_s">简历轻松投</span>
                            </div>
                            <div class=""><span class="reg_box_list_bth">立即注册</span></div>
                        </div>
                    </a>
                </div>
                <div class="reg_box_list">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['reg_com_url']->value;?>
">
                        <div class="reg_box_list_userimg"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/zc-lawfirm.jpg" width="80"></div>
                        <div class="reg_box_list_username">企业用户</div>
                        <div class="reg_box_list_userp">
                            <div class="reg_box_list_userp_c">
                                <span class="reg_box_list_userp_s">发布招聘信息</span>
                                <span class="reg_box_list_userp_s">收取简历投递</span>
                                <span class="reg_box_list_userp_s">多种职位分享</span>
                            </div>
                            <div class=""><span class="reg_box_list_bth">立即注册</span></div>
                        </div>

                    </a>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_lietou_web']==1) {?>
                <div class="reg_box_list">
                    <a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'register'),$_smarty_tpl);?>
">
                        <div class="reg_box_list_userimg"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/reg_lt.png" width="80" height="80"></div>
                        <div class="reg_box_list_username">猎头用户</div>
                        <div class="reg_box_list_userp">
                            <div class="reg_box_list_userp_c">
                                <span class="reg_box_list_userp_s">发布高端职位</span>
                                <span class="reg_box_list_userp_s">收取简历投递</span>
                                <span class="reg_box_list_userp_s">获得人才推荐</span>
                            </div>
                            <div class=""><span class="reg_box_list_bth">立即注册</span></div>
                        </div>
                    </a>
                </div>
                <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_train_web']==1) {?>
                <div class="reg_box_list">
                    <a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'register'),$_smarty_tpl);?>
">
                        <div class="reg_box_list_userimg"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/reg_px.png" width="80"></div>
                        <div class="reg_box_list_username">培训用户</div>
                        <div class="reg_box_list_userp">
                            <div class="reg_box_list_userp_c">
                                <span class="reg_box_list_userp_s">发布培训课程</span>
                                <span class="reg_box_list_userp_s">获得有利生源</span>
                                <span class="reg_box_list_userp_s">展示机构文化</span>
                            </div>
                            <div class=""><span class="reg_box_list_bth">立即注册</span></div>
                        </div>
                    </a>
                </div>
                <?php }?>
            </div>

        </div>
        <style>
            .icon2 {
                background-image: none;
                background-repeat: no-repeat;
            }
        </style>
        <!--content  end-->
        <div class="clear"></div>
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
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
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
        <!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  DD_belatedPNG.fix('.png,.#bg');
<?php echo '</script'; ?>
>
<![endif]-->
        <?php echo '<script'; ?>
>
            <?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>
                    $(document).ready(function() {
                        $(document).keydown(function(e) {
                            var ev = document.all ? window.event : e;
                            if(ev.keyCode == 13) {
                                check_user(1, 'vcode_imgs');
                            }
                        });
                        $("#xieyi1").keyup(function(event) {
                            var myEvent = event || window.event;
                            if(myEvent.keyCode == 13) {
                                check_user(1, 'vcode_imgs');
                            } else {
                                return;
                            };
                        });
                    }) 
					<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>
                            $(document).ready(function() {
                                $(document).keydown(function(e) {
                                    var ev = document.all ? window.event : e;
                                    if(ev.keyCode == 13) {
                                        check_user(2, 'vcode_img');
                                    }
                                });
                                $("#xieyi2").keyup(function(event) {
                                    var myEvent = event || window.event;
                                    if(myEvent.keyCode == 13) {
                                        check_user(2, 'vcode_img');
                                    } else {
                                        return;
                                    };
                                });
                            }) <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==3) {?>
                                $(document).ready(function() {
                                    $(document).keydown(function(e) {
                                        var ev = document.all ? window.event : e;
                                        if(ev.keyCode == 13) {
                                            check_user(3, 'vcodeimg');
                                        }
                                    });
                                    $("#xieyi3").keyup(function(event) {
                                        var myEvent = event || window.event;
                                        if(myEvent.keyCode == 13) {
                                            check_user(3, 'vcodeimg');
                                        } else {
                                            return;
                                        };
                                    });
                                }) <?php }?>
        <?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
