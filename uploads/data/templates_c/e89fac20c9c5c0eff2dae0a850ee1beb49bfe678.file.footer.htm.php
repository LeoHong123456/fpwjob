<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 13:58:04
         compiled from "/www/fpwjob/uploads//app/template/wap/footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:19837303685dbd1aec26edb4-93449066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e89fac20c9c5c0eff2dae0a850ee1beb49bfe678' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/wap/footer.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19837303685dbd1aec26edb4-93449066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'config' => 0,
    'indexnav' => 0,
    'usertype' => 0,
    'membernav' => 0,
    'layer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd1aec314de8_51984112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd1aec314de8_51984112')) {function content_5dbd1aec314de8_51984112($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_baidu')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.baidu.php';
if (!is_callable('smarty_function_tongji')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.tongji.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/nativeshare.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php if (!$_smarty_tpl->tpl_vars['username']->value&&$_GET['c']==''&&$_smarty_tpl->tpl_vars['config']->value['sy_footer_fix']=='1') {?>
<div class="footer_fixlogin_h"></div>
<div class="footer_fixlogin">
    <span class="footer_fixlogin_P">快速注册，获取高薪职位</span>
    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="footer_fixlogin_bth">登录</a>
    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
" class=" footer_fixlogin_bth footer_fixlogin_bth_reg">注册</a>
</div>
<?php }?>


<div class="yun_footer">
    <div class="yun_footer_fix">
        <ul class="yun_footer_nav">

            <li <?php if ($_smarty_tpl->tpl_vars['indexnav']->value==1) {?>class="yun_footer_nav_cur" <?php }?>>
                <a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
" id="indexclick"><i class="yun_footer_nav_icon <?php if ($_smarty_tpl->tpl_vars['indexnav']->value==1) {?>yun_footer_nav_home_cur<?php } else { ?>yun_footer_nav_home<?php }?>"></i>首页</a>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1||!$_smarty_tpl->tpl_vars['usertype']->value) {?>
            <li <?php if ($_GET['c']=='job') {?>class="yun_footer_nav_cur" <?php }?>>
                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
"><i class="yun_footer_nav_icon <?php if ($_GET['c']=='job') {?>yun_footer_nav_msg_cur<?php } else { ?>yun_footer_nav_msg<?php }?>"></i>职位</a>
            </li>
            <?php } else { ?>
            <li <?php if ($_GET['c']=='resume') {?>class="yun_footer_nav_cur" <?php }?>>
                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
"><i class="yun_footer_nav_icon <?php if ($_GET['c']=='resume') {?>yun_footer_nav_jl_cur<?php } else { ?>yun_footer_nav_jl<?php }?>"></i>简历</a>
            </li>
            <?php }?>

            <li>
                <a href="javascript:void(0);" id="jobclick" data-more="1"><i class="yun_footer_nav_icon yun_footer_nav_fx"></i>更多</a>
            </li>

            <?php if (!$_smarty_tpl->tpl_vars['username']->value) {?>
            <li <?php if ($_GET['c']=='login') {?>class="yun_footer_nav_cur" <?php }?>>
                <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
"><i class="yun_footer_nav_icon <?php if ($_GET['c']=='login') {?>yun_footer_nav_user_cur<?php } else { ?>yun_footer_nav_user<?php }?>"></i>我的</a>
            </li>
            <?php } else { ?>
            <li <?php if ($_smarty_tpl->tpl_vars['membernav']->value==1) {?>class="yun_footer_nav_cur" <?php }?>>
                <a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
member" id="memberclick"><i class="yun_footer_nav_icon <?php if ($_smarty_tpl->tpl_vars['membernav']->value==1) {?>yun_footer_nav_user_cur<?php } else { ?>yun_footer_nav_user<?php }?>"></i>我的
                    <a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
member/index.php?c=sysnews" style="padding-top:40px;"><i class="yun_footer_msg_n"><span id="tzmsgNum"></span></i></a>
                </a>
            </li>
            <?php }?>

        </ul>
    </div>
</div>


<footer>

    <div style="width:100%; background:#fff; position:fixed;left:0px;right:0px;bottom:50px;top:0px ; z-index:100000000000;display:none" id="footerjob">
        <div class="foot_nav_close"></div>
        <div class="header_bg">
            <div class="foot_nav_chiose_t">选择栏目类别</div>
        </div>
        <div class="foot_nav_box">

            <ul class="foot_nav_box_list">
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
"><span class="foot_nav_box_list_icon cor_1"><i class="nav_icon iconfont_fothome "></i></span>
                        <div class="foot_nav_box_name">首页</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
"><span class="foot_nav_box_list_icon cor_2"><i class="nav_icon iconfont_resume "></i></span>
                        <div class="foot_nav_box_name">简历</div>
                    </a>
                </li>

                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
"><span class="foot_nav_box_list_icon cor_3"><i class="nav_icon iconfont_job "></i></span>
                        <div class="foot_nav_box_name">全职</div>
                    </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_part_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'part'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_4"><i class="nav_icon iconfont_part "></i></span>
                        <div class="foot_nav_box_name">兼职</div>
                    </a>
                </li><?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_tiny_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'tiny'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_7"><i class="nav_icon iconfont_tiny "></i></span>
                        <div class="foot_nav_box_name">普工</div>
                    </a>
                </li><?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_once_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_4"><i class="nav_icon iconfont_once "></i></span>
                        <div class="foot_nav_box_name">店铺</div>
                    </a>
                </li><?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_map_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'map'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_5"><i class="nav_icon iconfont_map "></i></span>
                        <div class="foot_nav_box_name">附近</div>
                    </a>
                </li><?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_company_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_2"><i class="nav_icon iconfont_comp "></i></span>
                        <div class="foot_nav_box_name">企业</div>
                    </a>
                </li><?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_zph_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_6"><i class="nav_icon iconfont_zph "></i></span>
                        <div class="foot_nav_box_name">招聘会</div>
                    </a>
                </li><?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_article_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_8"><i class="nav_icon iconfont_news "></i></span>
                        <div class="foot_nav_box_name">资讯</div>
                    </a>
                </li><?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_redeem_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'redeem'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_jf"><i class="nav_icon iconfont_jf "></i></span>
                        <div class="foot_nav_box_name">商城</div>
                    </a>
                </li><?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_ask_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_wd"><i class="nav_icon iconfont_ask "></i></span>
                        <div class="foot_nav_box_name">问答</div>
                    </a>
                </li><?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_lietou_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltindex'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_lt"><i class="nav_icon iconfont_lt "></i></span>
                        <div class="foot_nav_box_name">猎头</div>
                    </a>
                </li><?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_train_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'train'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_px"><i class="nav_icon iconfont_px "></i></span>
                        <div class="foot_nav_box_name">培训</div>
                    </a>
                </li><?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_evaluate_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'evaluate'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_1"><i class="nav_icon iconfont_cp "></i></span>
                        <div class="foot_nav_box_name">测评</div>
                    </a>
                </li>
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_school_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'school'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_3"><i class="nav_icon iconfont_xy "></i></span>
                        <div class="foot_nav_box_name">校园</div>
                    </a>
                </li><?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_special_web']==1) {?>
                <li>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'special'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_1"><i class="nav_icon iconfont_zt "></i></span>
                        <div class="foot_nav_box_name">专题</div>
                    </a>
                </li><?php }?>
            </ul>
        </div>
    </div>
</footer>
<div class="yunwap_reg" id="reg_mune" style="display:none">
    <div class="yunwap_close"></div>
    <ul>
        <li>
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usertype'=>2),$_smarty_tpl);?>
"><i class="yunwap_reg_icon yunwap_reg_icon_bg1"><em class="yunwap_reg_icon_bg1p"></em></i>企业注册</a>
        </li>
        <li>
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
"><i class="yunwap_reg_icon yunwap_reg_icon_bg2"><em class="yunwap_reg_icon_bg2p"></em></i>个人注册</a>
        </li>
        <li>
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usertype'=>3),$_smarty_tpl);?>
"><i class="yunwap_reg_icon yunwap_reg_icon_bg3"><em class="yunwap_reg_icon_bg3p"></em></i>猎头注册</a>
        </li>
        <li>
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usertype'=>4),$_smarty_tpl);?>
"><i class="yunwap_reg_icon yunwap_reg_icon_bg4"><em class="yunwap_reg_icon_bg4p"></em></i>培训注册</a>
        </li>

    </ul>
    <div class="yunwap_login">
        <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="">会员登录</a>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['layer']->value) {?>
<input id="layermsg" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['msg'];?>
" type="hidden">
<input id="layerurl" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['url'];?>
" type="hidden">
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        islayer();
    });
<?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
>
    var wapurl = "<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
",
        weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
",
        pricename = "<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
",
        integral_pricename = "<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
",
        code_web = '<?php echo $_smarty_tpl->tpl_vars['config']->value['code_web'];?>
',
        code_kind = '<?php echo $_smarty_tpl->tpl_vars['config']->value['code_kind'];?>
';
    $(document).ready(function() {
        $.get(wapurl + "/index.php?c=ajax&a=msgNum", function(data) {
            var datas = eval("(" + data + ")");
            if(datas.usertype == 1) {
                if(datas.msgNum) {
					$('#sysmsgnum').html(datas.msgNum);
                    $('#tzmsgNum').html(datas.msgNum);
                    $('#tzmsgNum').show();
                }
				if(datas.wkyqnum>0){
					$('#wkyqnum').html(datas.wkyqnum);
					$('#wkyqnum').show();
				}
				$('#yqnum').html(datas.yqnum);
				$('#sq_jobnum').html(datas.sq_jobnum);
				$('#fav_jobnum').html(datas.fav_jobnum);
            }
            if(datas.usertype == 2) {
                if(datas.msgNum) {
					$('#sysmsgnum').html(datas.msgNum);
                    $('#tzmsgNum').html(datas.msgNum);
                    $('#tzmsgNum').show();
                }
				$('#sqnum').html(datas.sqnum);
				$('#companyjobnum').html(datas.companyjobnum);
				$('#talent_pool_num').html(datas.talent_pool_num);
            }
            if(datas.usertype == 3) {
                if(datas.msgNum) {
					$('#sysmsgnum').html(datas.msgNum);
                    $('#tzmsgNum').html(datas.msgNum);
                    $('#tzmsgNum').show();
					
                }
				$('#ypnum').html(datas.ypnum);
				$('#jobnum').html(datas.jobnum);
				$('#downnum').html(datas.downnum);
            }
            if(datas.usertype == 4) {
                if(datas.msgNum) {
					$('#sysmsgnum').html(datas.msgNum);
                    $('#tzmsgNum').html(datas.msgNum);
                    $('#tzmsgNum').show();
                }
				$('#baoming_num').html(datas.baoming_num);
				$('#zixun_num').html(datas.zixun_num);
				$('#subject_num').html(datas.subject_num);
            }
        });
        $('#jobclick').click('click', function() {
            $('#footerjob').toggle();
            $('#footerresume').hide();
        });
        $('#footerjob').click('click', function() {
            $('#footerjob').hide();
        });
        $('#reg_mune_box').click('click', function() {
            $('#reg_mune').toggle();
            $('#footerresume').hide();
        });

        $('#reg_mune_box_news').click('click', function() {
            $('#reg_mune').toggle();
            $('#footerresume').hide();
        });

        $('#reg_mune').click('click', function() {
            $('#reg_mune').hide();
        });
        $('#reg_mune_boxs').click('click', function() {
            $('#reg_mune').toggle();
            $('#footerresume').hide();
        });
        $('#reg_mune').click('click', function() {
            $('#reg_mune').hide();
        });
    });

    var u = navigator.userAgent;
    var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1; 

    if(isAndroid) {
        var orginHeight = document.documentElement.clientHeight || document.body.clientHeight;

        window.onresize = function() {

            var resizeHeight = document.documentElement.clientHeight || document.body.clientHeight;

            if(orginHeight * 1 > resizeHeight * 1) {
                $('.yun_footer_fix').css('display', 'none');

                document.activeElement.scrollIntoView(false);

            } else {
                $('.yun_footer_fix').css('display', 'block');
            }
        }
    }
<?php echo '</script'; ?>
>
<?php echo smarty_function_baidu(array(),$_smarty_tpl);?>
 
<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo']) {?>

<div style='margin:0 auto;width:0px;height:0px;overflow:hidden;'><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
"></div>
<?php }?>
<div id='uclogin' class='none'></div>
<div class='none'><?php echo smarty_function_tongji(array(),$_smarty_tpl);?>
</div>
</body>

</html><?php }} ?>
