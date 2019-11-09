<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 20:59:37
         compiled from "/www/fpwjob/uploads/app/template/wap/resume_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:3271445635dc566b9d9e7a0-46323382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd020f270c2cc90dcfffeaed0a433c22ad0c878af' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/resume_show.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3271445635dc566b9d9e7a0-46323382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'Info' => 0,
    'v' => 0,
    'key' => 0,
    'usertype' => 0,
    'uid' => 0,
    'typename' => 0,
    'username' => 0,
    'worklist' => 0,
    'edulist' => 0,
    'traininglist' => 0,
    'projectlist' => 0,
    'skilllist' => 0,
    'otherlist' => 0,
    'wap_style' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc566ba0f3b06_86837423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc566ba0f3b06_86837423')) {function content_5dc566ba0f3b06_86837423($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_image')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.image.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
    var wapurl = "<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
";
    var integral_pricename = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
';
    var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
    var isHeight = "<?php echo $_smarty_tpl->tpl_vars['Info']->value['height_status'];?>
";
<?php echo '</script'; ?>
>
<div class="header_navlist">
    <a href="javascript:void(0);" id="jobclick"><i class="naviconfont"></i></a>
</div>
<form name="myform" method="post" action="">
    <section>
        <div class="resume_bg">
            <span class="resume_gx"><?php echo $_smarty_tpl->tpl_vars['Info']->value['lastupdate'];?>
 更新</span> </div>
        <div class="resume_info_pd">
            <div class="resume_info_pd_c">
                <div class="resume_info_pd_c_b">

                    <div class="resume_photo_box">
                        <?php if ($_smarty_tpl->tpl_vars['Info']->value['rec_resume']==1) {?>
                        <i class="yun_wap_resumetj">推荐</i> <?php }?>
                        <div class="resume_photo muipreview" id="resume_photo">
                            <div class="resume_photo_c muipreview"> <img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['resume_photo'];?>
"> <?php if ($_smarty_tpl->tpl_vars['Info']->value['sex']==2) {?><i class="user_tj_showxg"></i><?php } else { ?><i class="user_tj_showxg_h" ></i><?php }?></div>

                        </div>
                        <div class="resume_info_n_c">
                            <div class="resume_user_name">
                                <?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']=="1") {?> <?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['Info']->value['username_n'];?>
 <?php }?>
									<span class="resume_user_nj">
									(<?php if ($_smarty_tpl->tpl_vars['Info']->value['sex']==1||$_smarty_tpl->tpl_vars['Info']->value['sex']==152) {?>男<?php } elseif ($_smarty_tpl->tpl_vars['Info']->value['sex']==2) {?>女<?php }?>，<?php if ($_smarty_tpl->tpl_vars['Info']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['Info']->value['age'];?>
岁<?php }?>)
								</span> <?php if ($_smarty_tpl->tpl_vars['Info']->value['moblie_status']==1) {?><span class="yun_resume_info_sjrz"></span><?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['idcard_status']=='1') {?> <i class="yun_resume_info_sfrz"></i><?php }?>
                            </div>
                            <div class="resume_user_info_p"><span class="resume_user_info_p_s"><i class="resume_user_info_xl"></i><?php echo $_smarty_tpl->tpl_vars['Info']->value['useredu'];?>
学历</span><span class="resume_user_info_p_s"><i class="resume_user_info_nl"></i><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_exp'];?>
经验</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="resume_info_pd_c_b">
            <div class="resume_user_info_box">
                <?php if ($_smarty_tpl->tpl_vars['Info']->value['arrayTag']) {?>
                <div class="yun_resume_exp_p">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['arrayTag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <span class="resume_user_bq"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span> <?php } ?>
                </div>
                <?php }?>
                <div class="resume_user_info_p_box">
                    <?php if ($_smarty_tpl->tpl_vars['Info']->value['height']) {?>
                    <span><?php echo $_smarty_tpl->tpl_vars['Info']->value['height'];?>
cm<i class="resume_user_info_p_line">|</i></span> 
					<?php }?> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['weight']) {?>
                    <span><?php echo $_smarty_tpl->tpl_vars['Info']->value['weight'];?>
kg<i class="resume_user_info_p_line">|</i></span> 
					<?php }?> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_marriage']) {?>
                    <span><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_marriage'];?>
<i class="resume_user_info_p_line">|</i></span> 
					<?php }?> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['nationality']) {?>
                    <span><?php echo $_smarty_tpl->tpl_vars['Info']->value['nationality'];?>
<i class="resume_user_info_p_line">|</i></span> 
					<?php }?> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['living']) {?>
                    <span>现居<?php echo $_smarty_tpl->tpl_vars['Info']->value['living'];
if ($_smarty_tpl->tpl_vars['Info']->value['address']) {?><i class="resume_user_info_p_line">|</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['address'];
}?></span> 
					<?php }?>
					
                </div>
            </div>
		</div>
    </section>
    <div class="resume_show_pd">

        <section>
            <div class="resume_showbox">
                <div class="resume_showbox_tit"><i class="resume_showbox_icon"></i>求职意向</div>
                <div class="resume_showbox_cont">
                    <ul class="user_resume_yxlist">
                        
                        <li class="user_resume_yxli"><span class="user_resume_yx"><i class="user_resume_yx_icon"></i>期望岗位</span>
                            <font color="#efb62e"><?php echo $_smarty_tpl->tpl_vars['Info']->value['customjob'];?>
</font>
                        </li>
                        <li class="user_resume_yxli"><span class="user_resume_yx"><i class="user_resume_yx_icon"></i>工作职能</span> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['expectjob']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> <?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <span class="user_resume_yxzn"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php }?> <?php } ?>
                        </li>
                        <li class="user_resume_yxli"><span class="user_resume_yx"><i class="user_resume_yx_icon"></i>期望城市</span> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['expectcity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> <?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <span class="user_resume_yxzn"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php }?> <?php } ?>
                        </li>
                        <li class="user_resume_yxli"><span class="user_resume_yx"><i class="user_resume_yx_icon"></i>期望薪资</span><?php if ($_smarty_tpl->tpl_vars['Info']->value['minsalary']&&$_smarty_tpl->tpl_vars['Info']->value['maxsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['Info']->value['maxsalary'];
} elseif ($_smarty_tpl->tpl_vars['Info']->value['minsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
以上<?php } else { ?>面议<?php }?></li>
                        <?php if ($_smarty_tpl->tpl_vars['Info']->value['type']) {?>
                        <li class="user_resume_yxli"><span class="user_resume_yx"><i class="user_resume_yx_icon"></i>工作性质</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['type'];?>
</li>
                        <?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['report']) {?>
                        <li class="user_resume_yxli"><span class="user_resume_yx"><i class="user_resume_yx_icon"></i>到岗时间</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['report'];?>
</li>
                        <?php }?>
                        <li class="user_resume_yxli"><span class="user_resume_yx"><i class="user_resume_yx_icon"></i>所属行业</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['hy'];?>
</li>
                        <?php if ($_smarty_tpl->tpl_vars['Info']->value['jobstatus']) {?>
                        <li class="user_resume_yxli"><span class="user_resume_yx"><i class="user_resume_yx_icon"></i>目前状态</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['jobstatus'];?>
</li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?>
            <div class="yun_chat_new" onclick="resumeChat('<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_chat_type'];?>
','<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
')"><span class="yun_chat_new_bth">聊聊</span>
            </div>
            <?php }?>
            
            <div class="resume_showbox" id='tel'>
                <div class="resume_showbox_tit"><i class="resume_showbox_icon resume_showbox_icon_lxfs"></i>联系方式</div>
                <div style="clear:both"></div>
                <?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']=="1") {?>
                <div class="com_post_msg_bot">
                  
                    <aside class="wap_touch_img"><em>联系手机：</em><?php echo smarty_function_image(array('uid'=>$_smarty_tpl->tpl_vars['Info']->value['uid'],'action'=>'telphone','width'=>200),$_smarty_tpl);?>
</aside>
                    <?php if ($_smarty_tpl->tpl_vars['Info']->value['basic_info']=='1'&&$_smarty_tpl->tpl_vars['Info']->value['telhome']) {?>
                    <aside class="wap_touch_img"><em>联系座机：</em><?php echo smarty_function_image(array('uid'=>$_smarty_tpl->tpl_vars['Info']->value['uid'],'action'=>'telhome','width'=>200),$_smarty_tpl);?>
</aside>
                    <?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['email']) {?>
                    <aside class="wap_touch_img"><em>联系邮箱：</em><?php echo $_smarty_tpl->tpl_vars['Info']->value['email'];?>
</aside><?php }?> 
                    
                    <?php if ($_smarty_tpl->tpl_vars['Info']->value['idcard']&&$_smarty_tpl->tpl_vars['Info']->value['idcard_status']==1) {?>
                    <aside class="wap_touch_img"><em>身份认证： </em>
                     	<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/resume/images/sfrz.png" title="身份已认证">已认证
                  	</aside>
                    <?php }?> 
                    
                    <?php if ($_smarty_tpl->tpl_vars['Info']->value['qq']) {?>
                    <div class="resume_Intention"><i class="one_vita_Intention_i one_vita_red"></i>联系Q Q：<?php echo $_smarty_tpl->tpl_vars['Info']->value['qq'];?>
</div>
                    <?php }?> 
                      <?php if ($_smarty_tpl->tpl_vars['Info']->value['wxewm']) {?>
                    <div class="wap_touch_img"><em>个人二维码：</em><img src=".<?php echo $_smarty_tpl->tpl_vars['Info']->value['wxewm'];?>
" width="80" height="80"></div>
                    <?php }
if ($_smarty_tpl->tpl_vars['Info']->value['address']) {?>
                    <aside class="wap_touch_img"><em>详细地址：</em><?php echo $_smarty_tpl->tpl_vars['Info']->value['address'];?>
</span>
                    </aside>
                    <?php }?>

                </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['Info']->value['link_msg']) {?>
                <div class="com_post_login">
                    <div class="com_post_look_toew">
                        <div class="look_resume_tel_login"><?php echo $_smarty_tpl->tpl_vars['Info']->value['link_wapmsg'];?>
</div>
                    </div>
                </div>
                <?php } else { ?>
                <div class="com_post_login">
                    <div class=""> 请登录后查看联系方式</div>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="com_s_logoin">登录</a>
                    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usertype'=>2),$_smarty_tpl);?>
" class="com_s_reg">注册</a>
                </div>
                <?php }?>
            </div>

        </section>
        <section>
            <div class="job_show_tip">
                <div class="job_show_tip_jb">
                    <?php if ($_smarty_tpl->tpl_vars['usertype']->value=='2') {?>
                    <a href="javascript:void(0)" eid=<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
 uid="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" r_name="<?php echo $_smarty_tpl->tpl_vars['Info']->value['username_n'];?>
" class="repeatlist repeat_list"><span class="job_show_tip_tip_i"></span>举报</a>
                    <?php } elseif ($_smarty_tpl->tpl_vars['uid']->value) {?>
                    <a  href="javascript:void(0)" href="javascript:void(0)" onclick="notuser('<?php echo $_smarty_tpl->tpl_vars['typename']->value[$_smarty_tpl->tpl_vars['usertype']->value];?>
','<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
','企业账户','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'notuserout'),$_smarty_tpl);?>
','');"><span class="job_show_tip_tip_i"></span>举报</a>
                    <?php } else { ?>
                    <a href="javascript:void(0)" onclick="pleaselogin('您还未登录企业账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')" ><span class="job_show_tip_tip_i"></span>举报</a>
                    <?php }?>
                </div>
                <div class="job_show_tip_p">
                    <div class="job_show_tip_p_t">若该简历为广告简历 或 无意义简历 （乱写、乱填）,请您可以举报</div>
                </div>
            </div>
        </section>
        
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_work']) {?>
        <section>
            <div class="resume_showbox">
                <div class="resume_showbox_tit"><i class="resume_showbox_icon resume_showbox_icon_jl"></i>工作经历<span class="yun_resume_jobtime">平均工作时长：<?php echo $_smarty_tpl->tpl_vars['Info']->value['avghourInfo'];?>
</span></div>

                <div class="resume_showbox_pd">
                    <?php  $_smarty_tpl->tpl_vars['worklist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['worklist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['worklist']->key => $_smarty_tpl->tpl_vars['worklist']->value) {
$_smarty_tpl->tpl_vars['worklist']->_loop = true;
?>

                    <div class="resume_jy_list">
                        <i class="resume_jy_list_time"></i>
                        <aside><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['worklist']->value['sdate'],"%Y-%m");?>
 至 <?php if ($_smarty_tpl->tpl_vars['worklist']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['worklist']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?> </aside>
                        <aside>
                            <div class="resume_jy_comname"><?php echo $_smarty_tpl->tpl_vars['worklist']->value['name'];?>
</div>
                            <?php if ($_smarty_tpl->tpl_vars['worklist']->value['title']) {?>
                            <aside><em>任职：</em><?php echo $_smarty_tpl->tpl_vars['worklist']->value['title'];?>
</aside>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['worklist']->value['content']) {?>
                            <em>职责：</em><?php echo $_smarty_tpl->tpl_vars['worklist']->value['content'];?>
 <?php }?>
                        </aside>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_edu']) {?>
        <section>
            <div class="resume_showbox">
                <div class="resume_showbox_tit"><i class="resume_showbox_icon resume_showbox_icon_jyjl"></i>教育经历</div>
                <div class="resume_showbox_pd">
                    <?php  $_smarty_tpl->tpl_vars['edulist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['edulist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['edulist']->key => $_smarty_tpl->tpl_vars['edulist']->value) {
$_smarty_tpl->tpl_vars['edulist']->_loop = true;
?>
                    <div class="resume_jy_list">
                        <i class="resume_jy_list_time"></i>
                        <aside><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['edulist']->value['sdate'],"%Y-%m");?>
 至 <?php if ($_smarty_tpl->tpl_vars['edulist']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['edulist']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?></aside>
                        <div class="firm_name_h1_h"><?php echo $_smarty_tpl->tpl_vars['edulist']->value['name'];?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['edulist']->value['title']) {?>
                        <aside><em>班级职务：</em><?php echo $_smarty_tpl->tpl_vars['edulist']->value['title'];?>
 </aside>
                        <?php }?> <?php if ($_smarty_tpl->tpl_vars['edulist']->value['specialty']) {?>
                        <aside><em>所学专业：</em><?php echo $_smarty_tpl->tpl_vars['edulist']->value['specialty'];?>
</aside>
                        <?php }?> <?php if ($_smarty_tpl->tpl_vars['edulist']->value['education']) {?>
                        <aside><em>最高学历：</em><?php echo $_smarty_tpl->tpl_vars['edulist']->value['education_n'];?>
</aside>
                        <?php }?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_tra']) {?>
        <section>
            <div class="resume_showbox">
                <div class="resume_showbox_tit"><i class="resume_showbox_icon resume_showbox_icon_pxjl"></i>培训经历</div>
                <div class="resume_showbox_pd">
                    <?php  $_smarty_tpl->tpl_vars['traininglist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traininglist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_tra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traininglist']->key => $_smarty_tpl->tpl_vars['traininglist']->value) {
$_smarty_tpl->tpl_vars['traininglist']->_loop = true;
?>
                    <div class="resume_jy_list">
                        <i class="resume_jy_list_time"></i>
                        <aside><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['traininglist']->value['sdate'],"%Y-%m");?>
 至 <?php if ($_smarty_tpl->tpl_vars['traininglist']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['traininglist']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?> </aside>
                        <div class="firm_name_h1_h"><?php echo $_smarty_tpl->tpl_vars['traininglist']->value['name'];?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['traininglist']->value['title']) {?>
                        <aside><em>培训方向：</em><?php echo $_smarty_tpl->tpl_vars['traininglist']->value['title'];?>
 </aside>
                        <?php }?> <?php if ($_smarty_tpl->tpl_vars['traininglist']->value['content']) {?>
                        <aside><em>培训描述：</em><?php echo $_smarty_tpl->tpl_vars['traininglist']->value['content'];?>
</aside>
                        <?php }?>
                    </div>
                    <?php } ?></div>
            </div>
        </section>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_xm']) {?>
        <section>
            <div class="resume_showbox">
                <div class="resume_showbox_tit"><i class="resume_showbox_icon resume_showbox_icon_xmjl"></i>项目经历</div>
                <div class="resume_showbox_pd">
                    <?php  $_smarty_tpl->tpl_vars['projectlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['projectlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_xm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['projectlist']->key => $_smarty_tpl->tpl_vars['projectlist']->value) {
$_smarty_tpl->tpl_vars['projectlist']->_loop = true;
?>
                    <div class="resume_jy_list">
                        <i class="resume_jy_list_time"></i>
                        <aside><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['projectlist']->value['sdate'],"%Y-%m");?>
 至 <?php if ($_smarty_tpl->tpl_vars['projectlist']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['projectlist']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?></aside>
                        <div class="firm_name_h1_h"><?php echo $_smarty_tpl->tpl_vars['projectlist']->value['name'];?>
</div>
						<?php if ($_smarty_tpl->tpl_vars['projectlist']->value['content']) {?>
                        <aside><em>项目内容：</em><?php echo $_smarty_tpl->tpl_vars['projectlist']->value['content'];?>
</aside>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['projectlist']->value['title']) {?>
                        <aside><em>担任职位：</em><?php echo $_smarty_tpl->tpl_vars['projectlist']->value['title'];?>
 </aside>
						<?php }?>
                        <div> </div>
                         </div>
                    <?php } ?> </div>
            </div>
        </section>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_skill']) {?>
        <section>
            <div class="resume_showbox" id="resume_skill muipreview">
                <div class="resume_showbox_tit"><i class="resume_showbox_icon resume_showbox_icon_zyjn"></i>职业技能</div>
                <div class="resume_showbox_pd">
                    <?php  $_smarty_tpl->tpl_vars['skilllist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['skilllist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_skill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['skilllist']->key => $_smarty_tpl->tpl_vars['skilllist']->value) {
$_smarty_tpl->tpl_vars['skilllist']->_loop = true;
?>
                    <div class="resume_jy_list">
                        <i class="resume_jy_list_time"></i>
                        <div class="firm_name_h1_h"><?php echo $_smarty_tpl->tpl_vars['skilllist']->value['name'];?>
 </div>
                        <?php if ($_smarty_tpl->tpl_vars['skilllist']->value['longtime']) {?>
                        <aside><em>掌握时间：</em><?php echo $_smarty_tpl->tpl_vars['skilllist']->value['longtime'];?>
年</aside>
                        <?php }?> <?php if ($_smarty_tpl->tpl_vars['skilllist']->value['picurl']) {?>
                        <aside class="muipreview"><em>证书图片：</em><img src="<?php echo $_smarty_tpl->tpl_vars['skilllist']->value['picurl'];?>
" width="95" height="70" style="vertical-align:middle" /></aside>
                        <?php }?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_show']) {?>
        <section>
            <div class="resume_showbox muipreview" id="resume_usershow">
                <div class="resume_showbox_tit"><i class="resume_showbox_icon resume_showbox_icon_zwzp"></i>我的作品</div>
                <div class="resume_showbox_pd" style="padding-left:5px; padding-top:10px;">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_show']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <div class="resume_showbox_zpimg muipreview">

                        <?php if ($_smarty_tpl->tpl_vars['v']->value['picurl']) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" style="vertical-align:middle" /> <?php }?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_other']) {?>
        <section>
            <div class="resume_showbox">
                <div class="resume_showbox_tit"><i class="resume_showbox_icon resume_showbox_icon_other"></i>其他信息</div>

                <div class="resume_showbox_pd">
                    <?php  $_smarty_tpl->tpl_vars['otherlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['otherlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['otherlist']->key => $_smarty_tpl->tpl_vars['otherlist']->value) {
$_smarty_tpl->tpl_vars['otherlist']->_loop = true;
?>
                    <div class="resume_jy_list">
                        <i class="resume_jy_list_time"></i>
                        <div class="firm_name_h1_h"><?php echo $_smarty_tpl->tpl_vars['otherlist']->value['name'];?>
</div>
                        <aside><em>内容：</em><?php echo $_smarty_tpl->tpl_vars['otherlist']->value['content'];?>
</aside>
                    </div>
                    <?php } ?> </div>
            </div>
        </section>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['doc']) {?>
        <section class="com_post_title">
            <div>黏贴简历内容</div>
            <div class="user_jl_jy_list">
                <div class="job_jl_list">
                    <aside><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_doc']['doc'];?>
</aside>
                </div>
            </div>
        </section>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['description']) {?>
        <section>
            <div class="resume_showbox">
                <div class="resume_showbox_tit"><i class="resume_showbox_icon resume_showbox_icon_zwpj"></i>自我评价</div>
                <div class="resume_showbox_cont resume_showbox_cont_pj">
                    <?php echo $_smarty_tpl->tpl_vars['Info']->value['description'];?>

                </div>
                
            </div>
        </section>
        <?php }?>
		
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['label_n']||$_smarty_tpl->tpl_vars['Info']->value['user_jy']['content']) {?>
        <section>
            <div class="resume_showbox">
                <div class="resume_showbox_tit"><i class="resume_showbox_icon resume_showbox_icon_zwpj"></i>评价分类</div>
                <div class="resume_showbox_cont resume_showbox_cont_pj">
                    客服评价：<?php echo $_smarty_tpl->tpl_vars['Info']->value['user_jy']['content'];?>

                </div>
 				<div class="resume_showbox_cont resume_showbox_cont_pj">
                    分类标签：<?php echo $_smarty_tpl->tpl_vars['Info']->value['label_n'];?>

                </div>
            </div>
        </section>
        <?php }?>
    </div>

    <section>
        <div class="yun_job_footer">
            <div class="yun_job_footer_fixed">
                <div class="yun_job_footer_bg">
                    <div class="yun_job_footer_fx_left">
                        <div class="yun_job_footer_fx">
                            <a href="javascript:void(0);" data-url="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'share','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
" id="shareClick" class="yun_job_footer_bth"><i class="iconfont_jobshare"></i> <span class="yun_job_footer_s">分享</span></a>
                        </div>
                        
                        
                        <div class="yun_job_footer_fx">
                            <?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']=="1") {?>
                            	<a href="<?php if ($_smarty_tpl->tpl_vars['Info']->value['telphone']) {?> tel:<?php echo $_smarty_tpl->tpl_vars['Info']->value['telphone'];
} elseif ($_smarty_tpl->tpl_vars['Info']->value['telhome']) {?>tel:<?php echo $_smarty_tpl->tpl_vars['Info']->value['telhome'];?>
 <?php }?>" class="yun_job_footer_bth">
                            		<i class="iconfont_tel"></i>
                            		<span class="yun_job_footer_s">电话</span>
                            	</a>
                            <?php } elseif (!$_smarty_tpl->tpl_vars['username']->value) {?>
                           	 	<a href="javascript:phone('1')" class="yun_job_footer_bth"> 
                           	 		<i class=" iconfont_usershowtel"></i>
                           	 		<span class="yun_job_footer_s" style="color:#999">电话</span>
                           	 	</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value!=2) {?>
                            	<a href="javascript:phone('2')" class="yun_job_footer_bth"> 
                            		<i class=" iconfont_usershowtel"></i>
                            		<span class="yun_job_footer_s" style="color:#999">电话</span>
                            	</a>
                            <?php } else { ?>
                            	<a href="javascript:;" class="yun_job_footer_bth"> 
                            		<i class=" iconfont_usershowtel" ></i>
                            		<span class="yun_job_footer_s" >电话</span>
                            	</a>
                            <?php }?> 
                        </div>
                        
                        
                        <div class="yun_job_footer_fx">
                            <?php if ($_smarty_tpl->tpl_vars['Info']->value['talent_pool']) {?>
                            <span class="yun_job_footer_bth"><i class=" iconfont_ysc"></i><span class="yun_job_footer_s yun_job_footer_s_y">已收藏</span></span>
                            <?php } else { ?>
                            <a href="javascript:talent_pool('<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
');" class="yun_job_footer_bth"><i class=" iconfont_sc"></i>
                                <span class="yun_job_footer_s">收藏</span></a>
                            <?php }?>
                        </div>
                    </div>
                    <div class="yun_job_footer_fx_right"> <?php if ($_smarty_tpl->tpl_vars['Info']->value['userid_msg']) {?> <span class="yun_job_footer_fx_right_ytd_bth">已邀请面试</span> <?php } else { ?>
                        
                        <a href="javascript:void(0);" uid="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" class="yun_job_footer_fx_right_bth sq_resume">面试邀请</a>
                        <?php }?> </div>
                </div>
            </div>
        </div>
    </section>
</form>

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
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/chat/chat.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
' language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
    
    function isDownResume(eid, num, url) {
        if(isHeight == 2) {
            layer.open({
                content: '您还可以查看' + num + '份高级简历，是否查看？',
                btn: ['查看', '取消'],
                shadeClose: false,
                yes: function() {
                    for_link(eid);
                }
            });
        } else {
            layer.open({
				title: ['查看联系方式','background-color: #FF4351; color:#fff;'],
                content: '您还可以查看' + num + '份简历，是否查看？',
                btn: ['查看', '取消'],
                shadeClose: false,
                yes: function() {
                    for_link(eid);
                }
            });
        }
    }

    function for_link(eid) {
        $.post("<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'forlink'),$_smarty_tpl);?>
", {
            eid: eid
        }, function(data) {
        	
            var data = eval('(' + data + ')');
            var status = data.status;
            var type = data.type;
            if(status == 1 || status==-1) {
                layermsg(data.msg);
            } else if(status == 2) {
                layer.open({
                    content: data.msg,
                    btn: ['确认', '取消'],
                    shadeClose: false,
                    yes: function() {
                        if(type == 2) {
                            window.location.href = "member/index.php?c=getserver&id=" + eid + "&server=" + 12;
                        } else {
                            window.location.href = "member/index.php?c=getserver&id=" + eid + "&server=" + 7;
                        }
                    }
                });
            } else if(status == 3) {
                location.reload(true);
            } else if(status == 5) {
            	layer.open({
                    content: data.msg,
                    btn: ['确认', '取消'],
                    shadeClose: false,
                    yes: function() {
            			window.location.href = "member/index.php?c=rating";
                         
                    }
                });
            } else if(status == 6) {
                layermsg('您的账号未审核，审核通过的企业用户才可查看简历联系方式');
            }
        });
    }

    function down_integral(eid, uid) {
        $.post("<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'downresume'),$_smarty_tpl);?>
", {
            type: "integral",
            eid: eid,
            uid: uid
        }, function(data) {
            var data = eval('(' + data + ')');
            var status = data.status;
            var integral = data.integral;
            if(status == 1) {
                layermsg(data.msg);
                return false;
            } else if(status == 2) {
                layermsg('您还有' + integral + integral_pricename + '！不够查看联系方式!');
            } else if(status == 3) {
                location.reload(true);
            }
        })
    }

    function talent_pool(uid, eid) {
        $.post("<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'talentpool'),$_smarty_tpl);?>
", {
            eid: eid,
            uid: uid
        }, function(data) {
            if(data == '0') {
				notuser('<?php echo $_smarty_tpl->tpl_vars['typename']->value[$_smarty_tpl->tpl_vars['usertype']->value];?>
','<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
','企业账户','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'notuserout'),$_smarty_tpl);?>
','');
            } else if(data == '1') {
                layermsg('收藏成功！', 2, function() {
                    location.reload(true);
                });
            } else if(data == '2') {
                layermsg('该简历已收藏！');
            } else if(data == '3') {
                pleaselogin('您还未登录企业账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')
            } else {
                layermsg('对不起，操作出错！');
            }
        });
    }

    function phone(data) {
        if(data == 1) {
            pleaselogin('您还未登录企业账号，是否登录？','<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
')
        } else if(data == 2) {
			notuser('<?php echo $_smarty_tpl->tpl_vars['typename']->value[$_smarty_tpl->tpl_vars['usertype']->value];?>
','<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
','企业账户','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'notuserout'),$_smarty_tpl);?>
','');
        }
    }
    var config = {
        url: '<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'share','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
',
        title: '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
',
        desc: '',
        img: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
',
        img_title: '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
',
        from: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
'
    };
<?php echo '</script'; ?>
>

<div style='margin:0 auto;width:0px;height:0px;overflow:hidden;'><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
"></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/public_previewimage.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
