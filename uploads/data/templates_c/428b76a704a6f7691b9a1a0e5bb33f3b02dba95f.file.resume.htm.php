<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:05:00
         compiled from "/www/fpwjob/uploads/app/template/resume/resume.htm" */ ?>
<?php /*%%SmartyHeaderCode:19975207185dc521ace45641-56413409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '428b76a704a6f7691b9a1a0e5bb33f3b02dba95f' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/resume/resume.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19975207185dc521ace45641-56413409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'resumestyle' => 0,
    'config' => 0,
    'style' => 0,
    'title' => 0,
    'Info' => 0,
    'UserMember' => 0,
    'v' => 0,
    'key' => 0,
    'one' => 0,
    'uid' => 0,
    'tplurl' => 0,
    'usertype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc521ad068456_70569908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc521ad068456_70569908')) {function content_5dc521ad068456_70569908($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_image')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.image.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCtYPE html PUBLIC "-//W3C//DtD XHtML 1.0 transitional//EN" "http://www.w3.org/tR/xhtml1/DtD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name=keywords content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
        <meta name=description content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['resumestyle']->value;?>
/css/resume.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <style type="text/css" media=print>
            .noprint {
                display: none
            }
        </style>
    </head>

    <body class="resume_bg_c">
        <div class="noprint"><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
        <div class="clear"></div>
        <div class="yun_resume_content">
            <div class="mt20">
              
                <div class="yun_resume_left">
                    <div class="yun_resume_box">
                        <div class="yun_resume_photo">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['resume_photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" width="120" height="120">
                            <i class="resume_list_xb resume_list_xb <?php if ($_smarty_tpl->tpl_vars['Info']->value['sex']=='女') {?>resume_list_xb_nv<?php }?>"></i>
                        </div>
                        
                        <div class="yun_resume_info">
                            <span class="yun_resume_info_time">
								更新：<?php echo $_smarty_tpl->tpl_vars['Info']->value['lastupdate'];?>
&nbsp;&nbsp; &nbsp;
								被浏览：<?php echo '<script'; ?>
 language="javascript" src="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','a'=>'GetHits','id'=>'`$Info.id`'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>次
							</span>
                            <div class="yun_resume_name">
                                <?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']=="1") {?> <?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['Info']->value['username_n'];?>
 <?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['idcard_status']==1&&$_smarty_tpl->tpl_vars['Info']->value['idcard']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/resume/images/sf.png" title="身份已认证"> <?php }?>
                                <span class="yun_resume_in">
								( <?php if ($_smarty_tpl->tpl_vars['Info']->value['age']==0) {?>保密 ,<?php } else {
echo $_smarty_tpl->tpl_vars['Info']->value['age'];?>
岁 ,<?php }?>
								<?php echo $_smarty_tpl->tpl_vars['Info']->value['sex'];?>
 , <span class="yun_resume_info_bh"> 编号：<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
</span> )
                                </span>

                                <?php if ($_smarty_tpl->tpl_vars['UserMember']->value['source']==6&&$_smarty_tpl->tpl_vars['UserMember']->value['claim']==0&&$_smarty_tpl->tpl_vars['UserMember']->value['email']!='') {?>
                                <a class="myresume_rl " href="javascript:void(0);" onClick="claim('<?php echo smarty_function_url(array('m'=>'ajax','c'=>'claim','uid'=>$_smarty_tpl->tpl_vars['Info']->value['uid']),$_smarty_tpl);?>
')">认领</a>
                                <?php }?>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['Info']->value['arrayTag']) {?>
                            <div class="yun_resume_info_bd">
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['arrayTag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <span class="resume_user_bq"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span> <?php } ?>
                            </div>
                            <?php }?>

                            <div class="yun_resume_p">
                                <span class="yun_resume_infoname"> 工作经验：</span>
                                <span class="yun_resume_jy"><?php if ($_smarty_tpl->tpl_vars['Info']->value['exp']) {
echo $_smarty_tpl->tpl_vars['Info']->value['user_exp'];?>
经验<?php }?></span>
                            </div>

                            <div class="yun_resume_p">
                                <span class="yun_resume_infoname"> 基本资料：</span> <?php if ($_smarty_tpl->tpl_vars['Info']->value['useredu']) {
echo $_smarty_tpl->tpl_vars['Info']->value['useredu'];?>
学历<?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_marriage']) {?>
                                <span class="yun_resume_info_line">|</span>
                                <span class="one_vita_Identity"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_marriage'];?>
</span> <?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['domicile']) {?>
                                <span class="yun_resume_info_line">|</span>
                                <span class="one_vita_Identity"><?php echo $_smarty_tpl->tpl_vars['Info']->value['domicile'];?>
</span> <?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['weight']||$_smarty_tpl->tpl_vars['Info']->value['height']) {?>
                                <span class="yun_resume_info_line">|</span>
                                <span class="one_vita_Identity">
								<?php if ($_smarty_tpl->tpl_vars['Info']->value['height']) {?> <?php echo $_smarty_tpl->tpl_vars['Info']->value['height'];?>
cm <?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Info']->value['weight']&&$_smarty_tpl->tpl_vars['Info']->value['height']) {?> / <?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Info']->value['weight']) {?> <?php echo $_smarty_tpl->tpl_vars['Info']->value['weight'];?>
kg <?php }?> 
							</span>
                                 <?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['nationality']) {?><span class="yun_resume_info_line">|</span><span class="one_vita_Identity"><?php echo $_smarty_tpl->tpl_vars['Info']->value['nationality'];?>
</span><?php }?>
                            </div>

                            <div class="yun_resume_p">
                                <span class="yun_resume_infoname">现居住地：</span> <?php if ($_smarty_tpl->tpl_vars['Info']->value['living']) {
echo $_smarty_tpl->tpl_vars['Info']->value['living'];
}?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['address']) {?>
                                <span class="yun_resume_info_line">|</span>
                                <span class="yun_resume_contact_span yun_resume_contact_add"><?php echo mb_substr($_smarty_tpl->tpl_vars['Info']->value['address'],0,16,'utf-8');?>
</span> <?php }?>
                            </div>

                            <div class="yun_resume_tel">
                                <?php if ($_smarty_tpl->tpl_vars['Info']->value['basic_info']=='1') {?>
                                <div class="one_vita_Basic_info_c"></div>
                                <?php }?>
                            </div>

                        </div>

                        
                        <div class="yun_resume_contact">
                            <?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']=="1") {?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['telphone']) {?>
                            <span class="yun_resume_contact_tel yun_resume_contact_tel_cur yun_resume_contact_span">
								<span class="yun_resume_contact_tel_n" style="display:inline-block;width:113px; overflow:hidden; vertical-align:middle">
									<?php echo smarty_function_image(array('number'=>$_smarty_tpl->tpl_vars['Info']->value['telphone'],'uid'=>$_smarty_tpl->tpl_vars['Info']->value['uid'],'action'=>'telphone','width'=>120),$_smarty_tpl);?>

								</span> <?php if ($_smarty_tpl->tpl_vars['Info']->value['moblie_status']=="1"&&$_smarty_tpl->tpl_vars['Info']->value['telphone']) {?>（已认证）<?php }?>
                            </span>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['email']) {?>
                            <span class="yun_resume_contact_span yun_resume_contact_yx"><?php echo $_smarty_tpl->tpl_vars['Info']->value['email'];?>
 </span> <?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['qq']) {?>
                            <span class="yun_resume_contact_span yun_resume_contact_qq"><?php echo $_smarty_tpl->tpl_vars['Info']->value['qq'];?>
</span> <?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['homepage']) {?>
                            <span class="yun_resume_contact_span yun_resume_contact_bk"><?php echo $_smarty_tpl->tpl_vars['Info']->value['homepage'];?>
</span> <?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['wxewm']) {?>
                            <div class="yun_resume_contact_ewm"><img src=".<?php echo $_smarty_tpl->tpl_vars['Info']->value['wxewm'];?>
" width="100" height="100"></div>
                            <?php }?> <?php } else { ?>
                            <span class="yun_resume_contact_tel"><span class="yun_resume_contact_tel_n"><?php echo substr_replace($_smarty_tpl->tpl_vars['Info']->value['telphone'],'********',3,10);?>
</span>（已认证）</span>
                            <span class="yun_resume_contact_tel_look"><?php echo $_smarty_tpl->tpl_vars['Info']->value['link_msg'];?>
</span> <?php }?>

                        </div>

                    </div>

                    <div class="yun_resume_box" style="margin-top:20px; padding-top:0px;">

                        
                        <div class="yun_resume_job_intention">
                            <div class="yun_resume_h1"><span class="yun_resume_h1_s"><i class="yun_resume_h1_icon yun_resume_h1_iconyx"></i>求职意向</span></div>
                            <ul class="yun_resume_job_intention_list ">
                                <li class="yun_resume_job_intention_list_end">
                                    <span class="yun_resume_infoname"> 工作职能：</span> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['expectjob']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> <?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <span class="resume_job_tag"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span>
                                        <?php }?> <?php } ?>
                                </li>
                                <li><span class="yun_resume_infoname"> 意向岗位：</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['customjob'];?>
</li>
                                <li><span class="yun_resume_infoname"> 从事行业：</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['hy'];?>
</li>
                                <li><span class="yun_resume_infoname"> 工作地点：</span> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['expectcity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> <?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp; <?php }?> <?php } ?> </li>
                                        <li>
                                            <span class="yun_resume_infoname"> 期望薪资：</span> <?php if ($_smarty_tpl->tpl_vars['Info']->value['maxsalary']&&$_smarty_tpl->tpl_vars['Info']->value['minsalary']) {?> ￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['Info']->value['maxsalary'];?>
 <?php } elseif ($_smarty_tpl->tpl_vars['Info']->value['minsalary']) {?> ￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
以上 <?php } else { ?> 面议 <?php }?>
                                        </li>
                                        <?php if ($_smarty_tpl->tpl_vars['Info']->value['report']) {?>
                                        <li><span class="yun_resume_infoname"> 到岗时间：</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['report'];?>
</li><?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['jobstatus']) {?>
                                        <li><span class="yun_resume_infoname"> 求职状态：</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['jobstatus'];?>
</li><?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['type']) {?>
                                        <li><span class="yun_resume_infoname"> 工作性质：</span><?php echo $_smarty_tpl->tpl_vars['Info']->value['type'];?>
</li><?php }?>
                            </ul>
                        </div>

                        
                        <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_work'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_work'])) {?>
                        <div class="yun_resume_joblist">
                            <div class="yun_resume_h1">
                                <span class="yun_resume_h1_s"><i class="yun_resume_h1_icon yun_resume_h1_iconjl"></i>工作经历</span>
                                <span class="yun_resume_jobtime">平均工作时长：<?php echo $_smarty_tpl->tpl_vars['Info']->value['avghourInfo'];?>
</span>
                            </div>
                            <ul class="yun_resume_tabulation">
                                <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                                <li class="yun_resume_exp_list">
                                    <div class="yun_resume_exp_timt">
                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y.%m");?>
- <?php if ($_smarty_tpl->tpl_vars['one']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y.%m");
} else { ?>至今<?php }?>
                                    </div>
                                    <div class="yun_resume_exp_r">
                                        <div class="yun_resume_exp_name"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
<span class="yun_resume_exp_name_job"><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</span></div>
                                        <div class="yun_resume_exp_p"><?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
</div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php }?>

                        
                        <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_edu'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_edu'])) {?>
                        <div class="yun_resume_joblist">
                            <div class="yun_resume_h1"><span class="yun_resume_h1_s"><i class="yun_resume_h1_icon yun_resume_h1_iconjy"></i>教育经历</span></div>
                            <ul class="">
                                <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                                <li class="yun_resume_exp_list ">
                                    <div class="yun_resume_exp_timt"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y.%m");?>
-<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y.%m");?>
</div>
                                    <div class="yun_resume_exp_r">
                                        <div class="yun_resume_exp_name">
                                            <?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>

                                            <span class="yun_resume_exp_name_job"><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</span>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['one']->value['education_n']||$_smarty_tpl->tpl_vars['one']->value['specialty']) {?>
                                        <div class="yun_resume_exp_p">
                                            <?php echo $_smarty_tpl->tpl_vars['one']->value['education_n'];?>
学历
                                            <span class="yun_resume_exp_name_zy"><?php echo $_smarty_tpl->tpl_vars['one']->value['specialty'];?>
专业</span>
                                        </div>
                                        <?php }?>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php }?>

                        
                        <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_tra'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_tra'])) {?>
                        <div class="yun_resume_joblist">
                            <div class="yun_resume_h1"><span class="yun_resume_h1_s"><i class="yun_resume_h1_icon yun_resume_h1_iconpx"></i>培训经历</span></div>
                            <ul class="">
                                <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_tra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                                <li class="yun_resume_exp_list  ">
                                    <div class="yun_resume_exp_timt"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y.%m");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y.%m");?>
</div>
                                    <div class="yun_resume_exp_r ">
                                        <div class="yun_resume_exp_name"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
<span class="yun_resume_exp_name_job"><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</span></div>
                                        <div class="yun_resume_exp_p"><?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
</div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php }?>

                        
                        <?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']=="1") {?> <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_skill'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_skill'])) {?>
                        <div class="yun_resume_joblist">
                            <div class="yun_resume_h1"><span class="yun_resume_h1_s"><i class="yun_resume_h1_icon yun_resume_h1_iconjn"></i>职业技能</span></div>
                            <ul class="resume_skill">
                                <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_skill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                                <li class="">
                                    <i class="resume_skill_icon"></i>
                                    <div class=" ">
                                        技能名称：<span class="resume_table_blod"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</span>
                                        <span class="yun_resume_exp_name_job">掌握时间：<?php echo $_smarty_tpl->tpl_vars['one']->value['longtime'];?>
年</span>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['one']->value['picurl']) {?>
                                    <div class="zs_imgbox">技能证书：<img src="<?php echo $_smarty_tpl->tpl_vars['one']->value['picurl'];?>
" ></div>
                                    <?php }?>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php }?> <?php }?>

                        
                        <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_xm'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_xm'])) {?>
                        <div class="yun_resume_joblist">
                            <div class="yun_resume_h1"><span class="yun_resume_h1_s"><i class="yun_resume_h1_icon yun_resume_h1_iconxm"></i>项目经验</span></div>
                            <ul class="">
                                <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_xm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                                <li class="yun_resume_exp_list ">
                                    <div class="yun_resume_exp_timt"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y.%m");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y.%m");?>
</div>
                                    <div class="yun_resume_exp_r">
                                        <div class="yun_resume_exp_name"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
<span class="yun_resume_exp_name_job"><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</span></div>
                                        <div class="yun_resume_exp_p"> <?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
 </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php }?>

                        
                        <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_show'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_show'])) {?>
                        <div class="yun_resume_joblist">
                            <div class="yun_resume_h1"><span class="yun_resume_h1_s"><i class="yun_resume_h1_icon yun_resume_h1_iconry"></i>我的作品</span></div>
                            <div class="fairs_introduction_p">
                                <ul class="fairs_introduction_img" id="rolling_img1">
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_show']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                    <li>
                                        <a class="image_gall" href="javascript:;">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" lay-src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" width="210" height="153" />
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <?php }?>

                        
                        <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_other'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_other'])) {?>
                        <div class="yun_resume_joblist">
                            <div class="yun_resume_h1"><span class="yun_resume_h1_s"><i class="yun_resume_h1_icon yun_resume_h1_iconqt"></i>其他信息</span></div>
                            <ul class="resume_skill">
                                <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                                <li class="">
                                    <i class="resume_skill_icon"></i>标题：
                                    <span class="resume_table_blod"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</span>
                                    <div class="yun_resume_exp_p"><?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
</div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php }?>

                        
                        <?php if (!empty($_smarty_tpl->tpl_vars['Info']->value['description'])) {?>
                        <div class="yun_resume_joblist yun_resume_joblist_mt20">
                            <div class="yun_resume_h1"><span class="yun_resume_h1_s"><i class="yun_resume_h1_icon yun_resume_h1_iconpj"></i>自我评价</span></div>
                            <ul class="resume_skill">
                                <li class=""><i class="resume_skill_icon"></i>
                                    <div class="yun_resume_exp_p"><?php echo $_smarty_tpl->tpl_vars['Info']->value['description'];?>
</div>
                                </li>
                            </ul>
                        </div>
                        <?php }?> 
						
						
                        <?php if (!empty($_smarty_tpl->tpl_vars['Info']->value['label_n'])||!empty($_smarty_tpl->tpl_vars['Info']->value['user_jy']['content'])) {?>
                        <div class="yun_resume_joblist yun_resume_joblist_mt20">
                            <div class="yun_resume_h1"><span class="yun_resume_h1_s"><i class="yun_resume_h1_icon yun_resume_h1_iconpj"></i>评价分类</span></div>
                            <ul class="resume_skill">
                                <li class=""><i class="resume_skill_icon"></i>
                                    <div class="yun_resume_exp_p">分类标签：<?php echo $_smarty_tpl->tpl_vars['Info']->value['label_n'];?>
</div>
                                </li>
								<li class=""><i class="resume_skill_icon"></i>
                                    <div class="yun_resume_exp_p">客服评价：<?php echo $_smarty_tpl->tpl_vars['Info']->value['user_jy']['content'];?>
</div>
                                </li>
                            </ul>
                        </div>
                        <?php }?>

                        
                        <?php if ($_smarty_tpl->tpl_vars['Info']->value['doc']) {?>
                        <div class="yun_resume_joblist yun_resume_joblist_mt20">
                            <div class="yun_resume_h1"><span class="yun_resume_h1_s"><i class="yun_resume_h1_icon yun_resume_h1_iconpj"></i>简历内容</span></div>
                            <div class="yun_resume_zt_p"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_doc']['doc'];?>
</div>
                        </div>
                        <?php }?>

                    </div>
                </div>
                

                

                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/resume_right.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
            </div>
        </div>
        
        <div id="uclogin" class="none"></div>

        <?php if ($_GET['see']=='member') {?>
        
        <div class="expext_yl_box_bth">
            <a href="javascript:;" onClick="settemplate('确定使用该模版？', '<?php echo smarty_function_url(array('m'=>'ajax','c'=>'settpl','id'=>2,'eid'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
');" class="expext_yl_box_sub">使用该模板</a>
            <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','uid'=>$_smarty_tpl->tpl_vars['uid']->value,'tmp'=>$_smarty_tpl->tpl_vars['tplurl']->value['id']),$_smarty_tpl);?>
" target="_blank" class="expext_yl_box_sub">预览</a>
        </div>
        <?php }?>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/resume.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jscolor/jscolor.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/ScrollPic.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
>
            layui.use(['form', 'layer'], function() {
                var $ = layui.$,
                    form = layui.form,
                    layer = layui.layer;
                layer.photos({
                    photos: '#rolling_img1',
                    anim: 5 
                });
            });

            var integral_pricename = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
';
            var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
            var downurl = "<?php echo smarty_function_url(array('m'=>'ajax','c'=>'down_resume'),$_smarty_tpl);?>
";
            var isHeight = "<?php echo $_smarty_tpl->tpl_vars['Info']->value['height_status'];?>
";

            <!--//--><![CDATA[//><!--
            var li_num = $("#rolling_img1 li").length;
            if(li_num > 3) { 
                var scrollPic_02 = new ScrollPic();
                scrollPic_02.scrollContId = "rolling_img1"; 
                scrollPic_02.arrLeftId = "LeftArr"; 
                scrollPic_02.arrRightId = "RightArr"; 
                scrollPic_02.frameWidth = 725; 
                scrollPic_02.pageWidth = 225; 
                scrollPic_02.speed = 10; 
                scrollPic_02.space = 10; 
                scrollPic_02.autoPlay = true; 
                scrollPic_02.autoPlayTime = 2; 
                scrollPic_02.initialize(); 
            }
            //--><!]]>
        <?php echo '</script'; ?>
>
        <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
        <div class="noprint">
            <!--[if IE 6]>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
>
			DD_belatedPNG.fix('.png,.yun_resume_photo_bg,.yun_resume_h1_icon,.yun_resume_jobtime,.vita_Opera_cz_list_icon');
			<?php echo '</script'; ?>
>
			<![endif]-->
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/resume_include.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
            <?php if ($_smarty_tpl->tpl_vars['usertype']->value=='2') {?> 
            	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/packpay.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
            <?php }?> 
            
            <?php if ($_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['usertype']->value==2&&$_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?> 
            	<?php if ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==2) {?> 
            		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_easemob.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
            	<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==3) {?> 
            		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_rongcloud.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
            	<?php }?> 
            <?php }?> 
            
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div><?php }} ?>
