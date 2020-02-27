<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-29 13:19:37
         compiled from "/www/fpwjob/uploads/app/template/lietou/job_lt_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:8128851325e3115e946b1c1-63017163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6451cd58b96ca6e9b574b3e2be4007ae62c21f31' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/lietou/job_lt_show.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8128851325e3115e946b1c1-63017163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'job' => 0,
    'config' => 0,
    'uid' => 0,
    'myself' => 0,
    'lietou_style' => 0,
    'usertype' => 0,
    'userjob' => 0,
    'favjob' => 0,
    'Info' => 0,
    'user_job_num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e3115e9570b48_72198216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e3115e9570b48_72198216')) {function content_5e3115e9570b48_72198216($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
	.img_auto img{max-width:100%;}
</style>
<div class="content">
 
    <div class="job_show_leftsidebar">

        <div class="job_show_leftboxtop">
            <h1 class="job_show_jobname"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>
</h1>
            <div class="job_show_joblyp">被浏览：<?php echo $_smarty_tpl->tpl_vars['job']->value['hits']+1;?>
 次 <span class="job_show_jobfbtime">更新时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['lastupdate'],"%Y-%m-%d %H:%M:%S");?>
</span></div>

            <?php if ($_smarty_tpl->tpl_vars['job']->value['welfare']) {?>
            <div class="job_show_jobfl">
                 <span class="job_show_jobfl_s"><?php echo $_smarty_tpl->tpl_vars['job']->value['welfare'];?>
</span>  
            </div>
            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['lt_rec_rebates']=="1"&&$_smarty_tpl->tpl_vars['job']->value['rebates']>"0") {?>
            <div class="job_show_jobtj_box">
                <div class=" job_show_jobtj_box_xs">悬赏：<?php echo $_smarty_tpl->tpl_vars['job']->value['rebates'];
if ($_smarty_tpl->tpl_vars['config']->value['lt_rebates_name']) {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['lt_rebates_name'];?>
 <?php } else { ?>元<?php }?></div>
                <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> <?php if ($_smarty_tpl->tpl_vars['myself']->value) {?>
                <input class="job_show_jobtj" value="立即推荐" onclick="myself();" type="submit"> <?php } else { ?>
                <input class="job_show_jobtj" value="立即推荐" onclick="window.location.href='<?php echo smarty_function_url(array('m'=>'lietou','c'=>'recuser','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
'" type="submit"> <?php }?> <?php } else { ?>
                <input class="job_show_jobtj" value="立即推荐" onclick="showlogin('1');" type="submit"> <?php }?>
            </div>
            <?php }?>

            <div>
                <div class="stamp_exceed">

                    <?php if ($_smarty_tpl->tpl_vars['job']->value['zp_status']=='1') {?>
                    <img title="已下架" src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/stamp.png"> <?php }?>
                </div>
            </div>
        </div>
        <div class="job_show_jobinfo">

            <ul class="job_show_jobuseryq_list">
                <li>年龄要求：<?php echo $_smarty_tpl->tpl_vars['job']->value['age_info'];?>
 </li>
                <li>性别要求：<?php echo $_smarty_tpl->tpl_vars['job']->value['sex'];?>
</li>
                <li>工作经验： <?php echo $_smarty_tpl->tpl_vars['job']->value['exp_info'];?>
</li>
                <li>学历要求： <?php echo $_smarty_tpl->tpl_vars['job']->value['edu_info'];?>
</li>
                <?php if ($_smarty_tpl->tpl_vars['job']->value['language']) {?>
                <li>语言要求：<?php echo $_smarty_tpl->tpl_vars['job']->value['language'];?>
</li><?php }?>
            </ul>

        </div>
        <div class="job_show_leftbox">
            <div class="job_show_jobtit"><span class="job_show_jobtit_s"><i class="job_show_jobtit_line"></i>职位基本信息</span></div>
            <ul class="job_show_jobuserzw_list">
                <li>年薪：<?php if ($_smarty_tpl->tpl_vars['job']->value['minsalary']>0&&$_smarty_tpl->tpl_vars['job']->value['maxsalary']>0) {?>￥<?php echo $_smarty_tpl->tpl_vars['job']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['job']->value['maxsalary'];?>
万<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['minsalary']>0) {?>￥<?php echo $_smarty_tpl->tpl_vars['job']->value['minsalary'];?>
万以上<?php } else { ?>面议<?php }?></li>
                <li>地点：<?php echo $_smarty_tpl->tpl_vars['job']->value['provinceid_info'];?>
 <?php echo $_smarty_tpl->tpl_vars['job']->value['cityid_info'];?>
 <?php echo $_smarty_tpl->tpl_vars['job']->value['three_cityid_info'];?>
</li>
                <li>所属部门：<?php echo $_smarty_tpl->tpl_vars['job']->value['department'];?>
</li>
                <li>汇报对象：<?php echo $_smarty_tpl->tpl_vars['job']->value['report'];?>
</li>
                <li>薪资构成：<?php echo $_smarty_tpl->tpl_vars['job']->value['constitute'];?>
</li>
                <?php if ($_smarty_tpl->tpl_vars['job']->value['welfare']) {?>
                <li>福利待遇：<?php echo $_smarty_tpl->tpl_vars['job']->value['welfare'];?>
</li><?php }?>

            </ul>
            <div class="job_show_jobtit"><span class="job_show_jobtit_s"><i class="job_show_jobtit_line"></i>职位描述</span></div>
            <div class="job_show_jobjs">
                <?php echo $_smarty_tpl->tpl_vars['job']->value['job_desc'];?>


            </div>
            <div class="job_show_jobtit"><span class="job_show_jobtit_s"><i class="job_show_jobtit_line"></i>任职资格</span></div>
            <div class="job_show_jobjs">

                <?php echo $_smarty_tpl->tpl_vars['job']->value['eligible'];?>

            </div>
            <div class="job_resp_bth" style="padding-top:20px;">
                <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1&&$_smarty_tpl->tpl_vars['uid']->value) {?> <?php if ($_smarty_tpl->tpl_vars['userjob']->value&&$_smarty_tpl->tpl_vars['job']->value['notuserjob']=='') {?>
                <a href="javascript:void(0);" class="job_resp_apply job_resp_apply_have">已申请</a>
                <?php } elseif ($_smarty_tpl->tpl_vars['job']->value['notuserjob']=='') {?>
                <a href="javascript:void(0);" class="job_resp_apply" onclick="ypjob('3','<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');">立即申请</a>
                <?php }?> <?php if ($_smarty_tpl->tpl_vars['favjob']->value) {?>
                <a href="javascript:;" class="job_resp_last job_resp_collect job_resp_collect_have">已收藏</a>
                <?php } else { ?>
                <a href="javascript:;" class="job_resp_last job_resp_collect" id="ltjob<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" onclick="fav_hjob('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');">收藏</a>
                <?php }?> <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> <?php if ($_smarty_tpl->tpl_vars['job']->value['notuserjob']=='') {?>
                <a href="javascript:void(0);" class="job_resp_apply" onclick="layer.msg('只有个人用户才能申请', 2, 8)">立即申请<?php echo $_smarty_tpl->tpl_vars['job']->value['notuserjob'];?>
</a>
                <?php }?>
                <a href="javascript:void(0);" class="job_resp_last job_resp_collect" onclick="layer.msg('只有个人用户才能收藏', 2, 8)">收藏</a>
                <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['job']->value['notuserjob']=='') {?>
                <a href="javascript:void(0);" class="job_resp_apply" onclick="showlogin('1');">立即申请</a>
                <?php }?>
                <a href="javascript:void(0);" class="job_resp_last job_resp_collect" onclick="showlogin('1');">收藏</a>
                <?php }?> <?php }?>
                <span style="position:relative; float:left" class="share_block">   
						<a href="javascript:;" class="job_resp_last job_resp_share">分享 </a>
                          <div class="newJsbg" style="display: none;"> 
                            <div class="newJsbd"><em class="njsImg png"></em>
                                <a  title="新浪微博" onclick="return shareTO('sina','<?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>
');"><i class="shareIcon01"></i></a>
                                <a  title="腾讯微博" onclick="return shareTO('qqwb','<?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>
');"><i class="shareIcon02"></i></a>
                                <a  title="QQ空间" onclick="return shareTO('qq','<?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>
');"><i class="shareIcon03"></i></a>
                                <a  title="人人网" onclick="return shareTO('renren','<?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>
');"><i class="shareIcon04"></i></a>
                            </div>
                        </div>
					 </span>

            </div>

        </div>

        <div class="job_show_leftbox">
            <div class="job_show_jobtit"><span class="job_show_jobtit_s"><i class="job_show_jobtit_line"></i>相关企业信息</span></div>
            <ul class="job_show_jobuserzw_list">
                <li>公司名称：<?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
</li>
                <li>公司性质： <?php echo $_smarty_tpl->tpl_vars['job']->value['com_pr'];?>
</li>
                <li>所属行业：<?php echo $_smarty_tpl->tpl_vars['job']->value['hy_info'];?>
</li>
                <li>公司规模：<?php echo $_smarty_tpl->tpl_vars['job']->value['com_mun'];?>
</li>
                <?php if ($_smarty_tpl->tpl_vars['job']->value['other']) {?>
                <li style="width:100%"><span style="float:left">补充说明：</span><span style="float:left"><?php echo $_smarty_tpl->tpl_vars['job']->value['other'];?>
</span></li>
                <?php }?>
            </ul>
            <div class="job_show_jobtit"><span class="job_show_jobtit_s"><i class="job_show_jobtit_line"></i>企业介绍</span></div>
            <div class="job_show_jqyjs img_auto">
                <?php echo $_smarty_tpl->tpl_vars['job']->value['desc'];?>

            </div>
        </div>

    </div>

    <div class="job_show_rightsidebar">

        <div class="job_show_rightsidebar_box">
            <div class="job_show_jobtit"><span class="job_show_jobtit_s"><i class="job_show_jobtit_line"></i>发布人信息</span></div>
            <div class="job_show_rightdbr">
                <a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'headhunter','uid'=>'`$Info.uid`'),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['photo'];?>
" width="80" height="80" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_lt_icon'];?>
','2')" /></a>
            </div>
            <div class="job_show_rightdbrname">
                <a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'headhunter','uid'=>'`$Info.uid`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['Info']->value['realname'];?>
</a>
            </div>
            <div class="job_show_rightfbr_p"><?php echo $_smarty_tpl->tpl_vars['Info']->value['title_info'];?>
 </div>
            <div class="job_show_rightfb_job">发布职位：<?php echo $_smarty_tpl->tpl_vars['user_job_num']->value;?>
个，
                <a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'headhunter','uid'=>$_smarty_tpl->tpl_vars['job']->value['uid']),$_smarty_tpl);?>
">
                    [查看详情]
                </a>
            </div>
            <div class="clear"></div><?php if ($_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?>
            <div class="jobhr_chat">
                <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
                <a href="javascript:void(0);" onclick="jobChat('<?php echo $_smarty_tpl->tpl_vars['job']->value['uid'];?>
',<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_chat_type'];?>
,'<?php echo $_smarty_tpl->tpl_vars['userjob']->value['id'];?>
','lt','<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
')">和我直聊</a>
                <?php } else { ?>
                <a href="javascript:void(0);" onclick="layer.msg('求职者才能和主管直聊',2,8)">和我直聊</a>
                <?php }?> <?php } else { ?>
                <a href="javascript:void(0);" onclick="showlogin('1')">和我直聊</a>
                <?php }?>
            </div>
            <?php }?>
            <div class="job_show_rightfbr_gz">
                <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
                <input class="job_show_rightfbr_gz_bth" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['atn'];?>
" onclick="ltatn('<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
');" id="guanzhu<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['Info']->value['atn'];?>
"> <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
                <input class="job_show_rightfbr_gz_bth" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['atn'];?>
" onclick="layer.msg('只有个人用户才能关注', 2, 8)"> <?php } else { ?>
                <input class="job_show_rightfbr_gz_bth" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['atn'];?>
" onclick="showlogin('1');"> <?php }?> <?php }?>
            </div>

            <div class="job_sidebar_message job_sidebar_message_b fl">
                <form action="" method="post" target="supportiframe" id="myform" onsubmit="return checkjobform_msg()">
                    <input type="hidden" id="com_id" name="job_uid" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['uid'];?>
" />
                    <input type="hidden" id="job_id" name="jobid" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" />
                    <input type="hidden" id="job_name" name="job_name" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>
" />
                    <input type="hidden" id="com_name" name="com_name" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
" />
                    <input type="hidden" name="type" value="3" />
                    <div class="job_message_title fl">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/images/job_talk.png" /> 给我留言
                    </div>
                    <div class="fl"><textarea class="job_message_con" id="content" name="content" placeholder="请输入您对该职位的疑问。比如所在地、年薪、福利等，我会及时给您回复！期待与您合作"></textarea></div>
                    <div class="affirm affirm_yz">
                        <input class="zx_yx_input fl" id="msg_CheckCode" type="text" placeholder="请输入验证码" value="" maxlength="6" name="authcode">
                        <img class="fl" id="vcode_imgs" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" onclick="checkCode('vcode_imgs');">
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
					<input class="job_message_bth fl" name="submit" type="submit" value="发送">
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
                            <input class="job_message_bth fl" type="button" value="发送" onclick="layer.msg('只有个人用户才能留言', 2, 8)">
                        <?php } else { ?>
                            <input class="job_message_bth fl" type="button" value="发送" onclick="showlogin('1');">
                        <?php }?>
                    <?php }?>
                 </form>
            </div>

        </div>
    </div>
</div>
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
>
    $(function() {
        $('.job_sidebar_message').delegate('#content', 'focus', function() {
            if($.trim($(this).val()) == $(this).attr('placeholder')) {
                $(this).val('');
            }
        });
        $('.share_block').hover(
            function() {
                $('.newJsbg').show();
            },
            function() {
                $('.newJsbg').hide();
            }
        );
    });
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['usertype']->value==1&&$_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?> <?php if ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==2) {?> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_easemob.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php } elseif ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==3) {?> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_rongcloud.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }?> <?php }?> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
