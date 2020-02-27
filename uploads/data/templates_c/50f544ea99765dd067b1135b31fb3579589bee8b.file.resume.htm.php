<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 14:22:10
         compiled from "/www/fpwjob/uploads/app/template/wap/member/user/resume.htm" */ ?>
<?php /*%%SmartyHeaderCode:12820046885e4cd4129facb4-62247312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50f544ea99765dd067b1135b31fb3579589bee8b' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/member/user/resume.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12820046885e4cd4129facb4-62247312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'expect' => 0,
    'user' => 0,
    'cityname' => 0,
    'industry_name' => 0,
    'userclass_name' => 0,
    'jobname' => 0,
    'doc' => 0,
    'arr_data' => 0,
    'resume' => 0,
    'work' => 0,
    'workval' => 0,
    'edu' => 0,
    'eduval' => 0,
    'project' => 0,
    'projectval' => 0,
    'training' => 0,
    'trainingval' => 0,
    'skill' => 0,
    'skillval' => 0,
    'other' => 0,
    'otherval' => 0,
    'arrayTag' => 0,
    'tv' => 0,
    'show' => 0,
    'v' => 0,
    'maxnum' => 0,
    'confignum' => 0,
    'heightone' => 0,
    'heighttwo' => 0,
    'rows' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4cd412c1e167_18953429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4cd412c1e167_18953429')) {function content_5e4cd412c1e167_18953429($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.picker.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.poppicker.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<style>
    .layermbox {
        z-index: 10000000000
    }
</style>
<?php if ($_smarty_tpl->tpl_vars['expect']->value) {?>

<div class="yun_usermember_have" style="display:;">
    <div class="yun_usermember_financebg"></div>

    <div class="yun_usermember_resume">
        <div class="yun_usermember_resume_b">
           
            <div class="yun_usermember_resume_b_c">
                <div class="yun_usermember_resumet">
                    <div class="yun_usermember_resumename"><?php echo $_smarty_tpl->tpl_vars['expect']->value['name'];?>

                        <span id="resumeUserPicker" class="yun_usermember_resumeqh" data-resume="<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
">切换简历</span> <?php if ($_smarty_tpl->tpl_vars['expect']->value['defaults']=="1") {?><span class="yun_usermember_resume_mr">默认</span> <?php }?>
                    </div>
                    <div class="yun_usermember_resumeintegrity">
                        <span class="yun_usermember_resumeintegrity_name">完整度</span> <?php echo $_smarty_tpl->tpl_vars['expect']->value['integrity'];?>
%
                        <span class="rsm_schedule_b"> <i style=	"width:<?php echo $_smarty_tpl->tpl_vars['expect']->value['integrity'];?>
%"></i></span>
                    </div>
                    <div class="yun_usermember_resume_zx">
                        状态： <?php if ($_smarty_tpl->tpl_vars['expect']->value['r_status']=='1') {?> 已审核<?php } elseif ($_smarty_tpl->tpl_vars['expect']->value['r_status']=='0') {?> 待审核<?php } elseif ($_smarty_tpl->tpl_vars['expect']->value['r_status']=='3') {?> 未通过审核 <?php }?><span class="yun_usermember_resume_zx_n"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['expect']->value['lastupdate'],'%Y-%m-%d');?>
 更新</span><span class="yun_usermember_resume_zx_n">被浏览：<?php echo $_smarty_tpl->tpl_vars['expect']->value['hits'];?>
</span>
                    </div>
                </div>
                <div class="yun_usermember_resumeoperation">
                    <ul>
                        <li>
                        	<?php if ($_smarty_tpl->tpl_vars['expect']->value['r_status']=='1') {?>
                            <a href="index.php?c=getserver&id=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&server=1" class="yun_usermember_resumeoperation_dz"><?php if ($_smarty_tpl->tpl_vars['expect']->value['top']==1&&$_smarty_tpl->tpl_vars['expect']->value['topdatetime']>0) {?>已置顶 <?php } else { ?>置顶 <?php }?></a>
                            <?php } else { ?>
                            <a href="javascript:void(0)" onclick="layermsg('您的简历尚未审核，无法置顶操作！');return false;" class="yun_usermember_resumeoperation_dz">置顶</a>
                            <?php }?>
                        </li>
                        <li>
                            <a id="refresh" data-id="<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
" class="yun_usermember_resumeoperation_sx">刷新 </a>
                        </li>

                        <?php if ($_smarty_tpl->tpl_vars['expect']->value['defaults']=="1") {?>
                        <li>
                            <a class="yun_usermember_resumeoperation_mr">默认</a>
                        </li>
                        <?php } else { ?>
                        <li>
                            <a id='resumedefaults' data-id="<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
" class="yun_usermember_resumeoperation_ymr">默认</a>
                        </li>
                        <?php }?>
                        <li>
                            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['expect']->value['id']),$_smarty_tpl);?>
" class="yun_usermember_resumeoperation_yl">预览</a>
                        </li>

                    </ul>

                </div>
                <div class="yun_usermember_resumeset">
                    <div class="yun_usermember_resumeset_box">
                        <span></span>
                        <div id="privacy" class="mui-switch mui-switch-mini <?php if ($_smarty_tpl->tpl_vars['user']->value['status']!=2) {?>mui-active<?php }?>">
                            <div class="mui-switch-handle"></div>
                        </div>
                        <span id="showprivacy" class="yun_usermember_resumeset_box_s">简历<?php if ($_smarty_tpl->tpl_vars['user']->value['status']==2) {?>保密<?php } else { ?>公开<?php }?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['expect']->value['r_status']=='1') {
} elseif ($_smarty_tpl->tpl_vars['expect']->value['r_status']=='0') {?><div class="sh_tipbox"><div class="sh_tipbox_tit">简历审核中</div>您的简历正在审核中,暂时无法申请职位,如需快速审核，可拨打服务热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div><?php } elseif ($_smarty_tpl->tpl_vars['expect']->value['r_status']=='3') {?> <div class="sh_tipbox"><div class="sh_tipbox_tit">审核未通过</div>很遗憾！您的简历未通过审核,如需疑问，可拨打服务热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];
if ($_smarty_tpl->tpl_vars['expect']->value['statusbody']) {?> 未通过原因：<?php echo $_smarty_tpl->tpl_vars['expect']->value['statusbody'];
}?></div><?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['expect']->value['doc']) {?>
    <ul class="yun_usermember_resumebox">
        <li>
            <a href="index.php?c=addexpect&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
">
                <div class="yun_usermember_resumetit">
                    <i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_yx"></i>意向职位
                    <i class="list_box_b">+35%</i></span>
                    <span class="yun_usermember_resume_zt">修改</span>
                </div>
                <div class="yun_usermember_resume_yx">
                    <?php if ($_smarty_tpl->tpl_vars['expect']->value['name']) {?>
                    <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">期望岗位：</span><?php echo $_smarty_tpl->tpl_vars['expect']->value['name'];?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['cityname']->value) {?>
                    <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">工作地点：</span><?php echo $_smarty_tpl->tpl_vars['cityname']->value;?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['expect']->value['hy']]) {?>
                    <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">从事行业：</span><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['expect']->value['hy']];?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['expect']->value['minsalary']) {?>
                    <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">期望薪资：</span><?php echo $_smarty_tpl->tpl_vars['expect']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['expect']->value['maxsalary'];?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['report']]) {?>
                    <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">到岗时间：</span><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['report']];?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['type']]) {?>
                    <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">工作性质：</span><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['type']];?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['jobstatus']]) {?>
                    <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">求职状态：</span><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['jobstatus']];?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['jobname']->value) {?>
                    <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">工作职能：</span><?php echo $_smarty_tpl->tpl_vars['jobname']->value;?>
</div><?php }?>
                </div>
            </a>
        </li>
        <li>
            <a href="index.php?c=addresumeson&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=doc">
                <div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon"></i>黏贴简历内容 <?php if ($_smarty_tpl->tpl_vars['expect']->value['doc']) {?><i class="list_box_b">+45%</i><?php } else { ?><span class="yun_usermember_resumebl">+45%</span><?php }?><span class="yun_usermember_resume_zt">修改</span></div>
                <div class="yun_usermember_resume_yx">
                    <?php echo $_smarty_tpl->tpl_vars['doc']->value['doc'];?>

                </div>
            </a>
        </li>
    </ul>

    <?php } else { ?>
    <ul class="yun_usermember_resumebox">
        <li>
            <a href="index.php?c=info&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
">
                <div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon"></i>基本信息 <i class="list_box_b">+20%</i><span class="yun_usermember_resume_zt">修改</span></div>
                <div class="yun_usermember_resumeinfo">
                    <div class="yun_usermember_resumeinfo_photo"><?php if ($_smarty_tpl->tpl_vars['user']->value['sex']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);"><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
',2);"><?php }?></div>
                    <div class="yun_usermember_resumeinfo_pt"><span class="yun_usermember_resumeinfo_name"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
  </span>（ <?php echo $_smarty_tpl->tpl_vars['arr_data']->value['sex'][$_smarty_tpl->tpl_vars['user']->value['sex']];
if ($_smarty_tpl->tpl_vars['user']->value['age']) {?><span class="yun_usermember_resumeline">|</span><?php echo $_smarty_tpl->tpl_vars['user']->value['age'];?>
岁<?php }?>）</div>
                    <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">工作经验：</span> <?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['exp']];?>
</div>
                    <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">最高学历：</span><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['edu']];?>
</div>

                    <?php if ($_smarty_tpl->tpl_vars['user']->value['height']||$_smarty_tpl->tpl_vars['user']->value['weight']||$_smarty_tpl->tpl_vars['user']->value['nationality']||$_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['user']->value['marriage']]) {?>
                    <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">基本资料：</span> <?php if ($_smarty_tpl->tpl_vars['user']->value['height']) {
echo $_smarty_tpl->tpl_vars['user']->value['height'];?>
cm<?php }?> <?php if ($_smarty_tpl->tpl_vars['user']->value['height']&&$_smarty_tpl->tpl_vars['user']->value['weight']) {?> / <?php }?> <?php if ($_smarty_tpl->tpl_vars['user']->value['weight']) {
echo $_smarty_tpl->tpl_vars['user']->value['weight'];?>
kg<?php }?> <?php if (($_smarty_tpl->tpl_vars['user']->value['height']||$_smarty_tpl->tpl_vars['user']->value['weight'])&&$_smarty_tpl->tpl_vars['user']->value['nationality']) {?><span class="yun_usermember_resumeline">|</span><?php }?> <?php echo $_smarty_tpl->tpl_vars['user']->value['nationality'];?>
 <?php if ((($_smarty_tpl->tpl_vars['user']->value['height']||$_smarty_tpl->tpl_vars['user']->value['weight'])||$_smarty_tpl->tpl_vars['user']->value['nationality'])&&$_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['user']->value['marriage']]) {?><span class="yun_usermember_resumeline">|</span><?php }?> <?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['user']->value['marriage']];?>

                    </div>
                    <?php }?>
                    <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">现居住地：</span> 
                    	<?php echo $_smarty_tpl->tpl_vars['user']->value['living'];?>

                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="index.php?c=addexpect&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
">
                <div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_yx"></i>意向职位 <?php if ($_smarty_tpl->tpl_vars['resume']->value['expect']) {?><i class="list_box_b">+35%</i><?php } else { ?>+35%<?php }?>
                    <span class="yun_usermember_resume_zt"> <?php if ($_smarty_tpl->tpl_vars['resume']->value['expect']) {?>修改<?php } else { ?>未填写<?php }?> </span>
                </div>
                <div class="yun_usermember_resume_yx">
                    <div class="yun_usermember_resume_yx">
                        <?php if ($_smarty_tpl->tpl_vars['expect']->value['name']) {?>
                        <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">期望岗位：</span><?php echo $_smarty_tpl->tpl_vars['expect']->value['name'];?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['cityname']->value) {?>
                        <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">工作地点：</span><?php echo $_smarty_tpl->tpl_vars['cityname']->value;?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['expect']->value['hy']]) {?>
                        <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">从事行业：</span><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['expect']->value['hy']];?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['expect']->value['minsalary']) {?>
                        <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">期望薪资：</span><?php echo $_smarty_tpl->tpl_vars['expect']->value['minsalary'];
if ($_smarty_tpl->tpl_vars['expect']->value['maxsalary']) {?>-<?php echo $_smarty_tpl->tpl_vars['expect']->value['maxsalary'];?>
元/月<?php } else { ?>元以上/月<?php }?></div><?php }?> <?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['report']]) {?>
                        <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">到岗时间：</span><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['report']];?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['type']]) {?>
                        <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">工作性质：</span><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['type']];?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['jobstatus']]) {?>
                        <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">求职状态：</span><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['expect']->value['jobstatus']];?>
</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['jobname']->value) {?>
                        <div class="yun_usermember_resumeinfo_p"><span class="yun_usermember_resumeinfo_p_n">工作职能：</span><?php echo $_smarty_tpl->tpl_vars['jobname']->value;?>
</div><?php }?>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=work">
                <div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_gz"></i>工作经历 <?php if ($_smarty_tpl->tpl_vars['resume']->value['work']) {?><i class="list_box_b">+10%</i><?php } else { ?>+10%<?php }?> <span class="yun_usermember_resume_zt"><?php if ($_smarty_tpl->tpl_vars['resume']->value['work']) {?>修改<?php } else { ?>未填写<?php }?> </span>
                </div>
                <?php  $_smarty_tpl->tpl_vars['workval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['workval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['work']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['workval']->key => $_smarty_tpl->tpl_vars['workval']->value) {
$_smarty_tpl->tpl_vars['workval']->_loop = true;
?>
                <div class="yun_usermember_resumelist">
                    <div class=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['workval']->value['sdate'],'%Y.%m');?>
-<?php if ($_smarty_tpl->tpl_vars['workval']->value['edate']!=0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['workval']->value['edate'],'%Y.%m');
} else { ?>至今<?php }?></div>
                    <div class="yun_usermember_resumejobname"><?php echo $_smarty_tpl->tpl_vars['workval']->value['title'];?>
</div>
                    <div class="yun_usermember_resumecomname"><?php echo $_smarty_tpl->tpl_vars['workval']->value['name'];?>
</div>
                    <div class=""><?php echo $_smarty_tpl->tpl_vars['workval']->value['content'];?>
</div>
                </div>
                <?php } ?>
            </a>
        </li>
        <li>
            <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=edu">
                <div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_jy"></i>教育经历 <?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']) {?><i class="list_box_b">+10%</i><?php } else { ?>+10%<?php }?> <span class="yun_usermember_resume_zt">
			<?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']) {?>修改<?php } else { ?>未填写<?php }?></span></div>
                <?php  $_smarty_tpl->tpl_vars['eduval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['eduval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['edu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['eduval']->key => $_smarty_tpl->tpl_vars['eduval']->value) {
$_smarty_tpl->tpl_vars['eduval']->_loop = true;
?>
                <div class="yun_usermember_resumelist">
                    <div class=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['eduval']->value['sdate'],'%Y.%m');?>
-<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['eduval']->value['edate'],'%Y.%m');?>
</div>
                    <div class="yun_usermember_resumejobname"><?php echo $_smarty_tpl->tpl_vars['eduval']->value['name'];?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['eduval']->value['education']]) {?>
                    <div class="yun_usermember_resumecomname"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['eduval']->value['education']];?>
学历</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['eduval']->value['specialty']||$_smarty_tpl->tpl_vars['eduval']->value['title']) {?>
                    <div class=""><?php echo $_smarty_tpl->tpl_vars['eduval']->value['specialty'];?>
 <?php if ($_smarty_tpl->tpl_vars['eduval']->value['title']) {?>担任 <?php echo $_smarty_tpl->tpl_vars['eduval']->value['title'];
}?></div><?php }?>
                </div>
                <?php } ?>
            </a>
        </li>
        <li>
            <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=project">
                <div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_xm"></i>项目经历<?php if ($_smarty_tpl->tpl_vars['resume']->value['project']) {?><i class="list_box_b">+8%</i><?php } else { ?>+8%<?php }?></span><span class="yun_usermember_resume_zt"><?php if ($_smarty_tpl->tpl_vars['resume']->value['project']) {?>修改<?php } else { ?>未填写<?php }?></span>
                </div>
                <?php  $_smarty_tpl->tpl_vars['projectval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['projectval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['project']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['projectval']->key => $_smarty_tpl->tpl_vars['projectval']->value) {
$_smarty_tpl->tpl_vars['projectval']->_loop = true;
?>
                <div class="yun_usermember_resumelist">
                    <div class=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['projectval']->value['sdate'],'%Y.%m');?>
-<?php if ($_smarty_tpl->tpl_vars['projectval']->value['edate']!=0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['projectval']->value['edate'],'%Y.%m');
} else { ?>至今<?php }?></div>
                    <div class="yun_usermember_resumejobname"><?php echo $_smarty_tpl->tpl_vars['projectval']->value['name'];?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['projectval']->value['title']) {?>
                    <div class="yun_usermember_resumecomname">担任 <?php echo $_smarty_tpl->tpl_vars['projectval']->value['title'];?>
</div><?php }?>
                    <div class=""><?php echo $_smarty_tpl->tpl_vars['projectval']->value['content'];?>
</div>
                </div>
                <?php } ?>
            </a>
        </li>
        <li>
            <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=training">
                <div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_px"></i>培训经历 <?php if ($_smarty_tpl->tpl_vars['resume']->value['training']) {?><i class="list_box_b">+7%</i><?php } else { ?>+7%<?php }?><span class="yun_usermember_resume_zt"><?php if ($_smarty_tpl->tpl_vars['resume']->value['training']) {?>修改<?php } else { ?>未填写<?php }?></span>
                </div>
                <?php  $_smarty_tpl->tpl_vars['trainingval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trainingval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['training']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trainingval']->key => $_smarty_tpl->tpl_vars['trainingval']->value) {
$_smarty_tpl->tpl_vars['trainingval']->_loop = true;
?>
                <div class="yun_usermember_resumelist">
                    <div class=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['trainingval']->value['sdate'],'%Y.%m');?>
-<?php if ($_smarty_tpl->tpl_vars['trainingval']->value['edate']!=0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['trainingval']->value['edate'],'%Y.%m');
} else { ?>至今<?php }?></div>
                    <div class="yun_usermember_resumejobname"><?php echo $_smarty_tpl->tpl_vars['trainingval']->value['name'];?>
</div>
                    <div class="yun_usermember_resumecomname"><?php echo $_smarty_tpl->tpl_vars['trainingval']->value['title'];?>
</div>
                    <div class=""><?php echo $_smarty_tpl->tpl_vars['trainingval']->value['content'];?>
</div>
                </div>
                <?php } ?>
            </a>
        </li>
        <li>
            <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=skill">
                <div class="yun_usermember_resumetit">
                    <i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_jn"></i>
                    职业技能 <?php if ($_smarty_tpl->tpl_vars['resume']->value['skill']) {?><i class="list_box_b">+10%</i><?php } else { ?>+10%<?php }?>
                    <span class="yun_usermember_resume_zt"> <?php if ($_smarty_tpl->tpl_vars['skill']->value) {?>修改<?php } else { ?>未填写<?php }?> </span>
                </div>
                <?php  $_smarty_tpl->tpl_vars['skillval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['skillval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skill']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['skillval']->key => $_smarty_tpl->tpl_vars['skillval']->value) {
$_smarty_tpl->tpl_vars['skillval']->_loop = true;
?>
                <div class="yun_usermember_resumelist">
                    <div class="yun_usermember_resumejobname"><?php echo $_smarty_tpl->tpl_vars['skillval']->value['name'];?>
</div>
                    <div class="yun_usermember_resumecomname">掌握时间：<?php echo $_smarty_tpl->tpl_vars['skillval']->value['longtime'];?>
年</div>
                    <?php if ($_smarty_tpl->tpl_vars['skillval']->value['pic']) {?>
                    <div class="">技能证书：<img src="<?php echo $_smarty_tpl->tpl_vars['skillval']->value['pic'];?>
" style="max-width:50px; vertical-align:middle"></div><?php }?>
                </div>
                <?php } ?>
            </a>
        </li>
        <li>
            <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=other">
                <div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_qt"></i>其他信息 <?php if ($_smarty_tpl->tpl_vars['resume']->value['other']) {?><i class="list_box_b"></i><?php }?>
                    <span class="yun_usermember_resume_zt"><?php if ($_smarty_tpl->tpl_vars['resume']->value['other']) {?>修改<?php } else { ?>未填写<?php }?> </span>
                </div>
                <?php  $_smarty_tpl->tpl_vars['otherval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['otherval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['other']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['otherval']->key => $_smarty_tpl->tpl_vars['otherval']->value) {
$_smarty_tpl->tpl_vars['otherval']->_loop = true;
?>
                <div class="yun_usermember_resumelist">
                    <div class="yun_usermember_resumejobname">标题：<?php echo $_smarty_tpl->tpl_vars['otherval']->value['name'];?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['otherval']->value['content']) {?><div class="">内容：<?php echo $_smarty_tpl->tpl_vars['otherval']->value['content'];?>
</div><?php }?>
                </div>
                <?php } ?>
            </a>
        </li>
        <li>
            <a href="index.php?c=addresumeson&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=desc">
                <div class="yun_usermember_resumetit">
                    <i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_pj"></i>自我评价 <?php if ($_smarty_tpl->tpl_vars['user']->value['description']) {?><i class="list_box_b"></i><?php }?>
                    <span class="yun_usermember_resume_zt"><?php if ($_smarty_tpl->tpl_vars['user']->value['description']) {?> 修改<?php } else { ?>未填写<?php }?></span>
                </div>
                <div class="yun_resume_pj_box">
                    <div class="yun_resume_pj_box_nr"><?php echo $_smarty_tpl->tpl_vars['user']->value['description'];?>
</div>

                    <?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tv']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrayTag']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tv']->key;
?>
                    <span class="yun_usermember_resumebq"><?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
</span> <?php } ?>
                </div>
            </a>
        </li>
        <li>
            <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=show">
                <div class="yun_usermember_resumetit"><i class="yun_usermember_resumetit_icon yun_usermember_resumetit_icon_al"></i>作品案例</div>
                <div class="yun_usermember_resumelist">
                    <div class="">PS：上传作品更受企业青睐，可提升5倍面试邀约率！上传作品案例</div>
					
					<div style="padding-left:5px; padding-top:10px;">
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['show']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<div  style="width: 32%; height: 70px; display: inline-block; text-align: center; margin-top: 5px;">
							<?php if ($_smarty_tpl->tpl_vars['v']->value['picurl']) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" style="width:110px; text-align:center; height:70px; padding-left:5px;"/> 
							<?php }?>
						</div>
						<?php } ?>
					</div>

                </div>
            </a>
        </li>
    </ul>
    <?php }?>
    <div class="yun_usermember_cj_new">
		<?php if ($_smarty_tpl->tpl_vars['maxnum']->value>0||$_smarty_tpl->tpl_vars['confignum']->value=='') {?>
			<?php if ($_smarty_tpl->tpl_vars['user']->value['idcard_status']!=1&&$_smarty_tpl->tpl_vars['config']->value['user_enforce_identitycert']==1) {?> 
			<a href="javascript:void(0)" onclick="fidcard()" class="yun_usermember_cj_new_bth">创建新简历</a>
			<?php } else { ?>
			<a href="index.php?c=addresume" class="yun_usermember_cj_new_bth">创建新简历</a>
			<?php }?>
		<?php } else { ?>
        <a href="javascript:void(0)" onclick="layermsg('你的简历数已经达到系统设置的简历数了');return false;" class="yun_usermember_cj_new_bth">创建新简历</a>
        <?php }?>
    </div>
</div>

<?php } else { ?>

<div class="wap_member_no">
    你还没有创建简历，无法申请职位
    <div>
		<?php if ($_smarty_tpl->tpl_vars['user']->value['idcard_status']!=1&&$_smarty_tpl->tpl_vars['config']->value['user_enforce_identitycert']==1) {?> 
		<a href="javascript:void(0)" onclick="fidcard()" class="wap_member_no_submit">创建简历</a>
		<?php } else { ?>
		<a href="index.php?c=addresume" class="wap_member_no_submit">创建简历</a>
		<?php }?>
    </div>

</div>
<?php }?>



<div id="bg" style="display:none; z-index:100000000000"></div>

<div id="bgset" class="yun_resume_setup" style="display:none">
    <?php if ($_smarty_tpl->tpl_vars['expect']->value['r_status']=='1') {?>
    <div class="yun_resume_setup_box">
        <div class="yun_resume_setup_tit">申请高级简历</div>
        高级简历服务主要针对的是中高层主管级职位等 <?php if ($_smarty_tpl->tpl_vars['expect']->value['height_status']==1) {?>
        <font color="#f00"> 审核中</font>
        <a class="yun_resume_setup_bth" href="javascript:void(0);" onclick="layer_del('正在审核中，需要取消申请吗？','index.php?c=resumeset&height=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
');">取消</a>
        <?php } elseif ($_smarty_tpl->tpl_vars['expect']->value['height_status']==2) {?>
        <a class="yun_resume_setup_bth" href="javascript:void(0);" onclick="layer_del('确定取消高级简历吗？','index.php?c=resumeset&height=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
');">取消</a>
        <?php } elseif ($_smarty_tpl->tpl_vars['expect']->value['height_status']==3) {?> 审核未通过，原因：<?php echo $_smarty_tpl->tpl_vars['expect']->value['statusbody'];?>


        <a class="yun_resume_setup_bth" href="javascript:void(0);" onclick="app_height_status('<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
');">申请</a>
        <?php } else { ?>
        <a class="yun_resume_setup_bth" href="javascript:void(0);" onclick="app_height_status('<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
');">申请</a>
        <?php }?>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['config']->value['user_trust_number']>0) {?>
    <div class="yun_resume_setup_box">
        <div class="yun_resume_setup_tit">委托简历</div>
        设置委托投递后，求职顾问将根据你简历的求职意向为您筛选投递适合的职位！ <?php if ($_smarty_tpl->tpl_vars['expect']->value['is_entrust']==1) {?>已申请
        <a class="yun_resume_setup_bth" href="javascript:void(0)" onclick="entrust('确定取消？','<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
')">取消 </a>
        <?php } elseif ($_smarty_tpl->tpl_vars['expect']->value['is_entrust']==2) {?> 已通过
        <a class="yun_resume_setup_bth" href="javascript:void(0)" onclick="entrust('委托已通过审核，取消将不退还金额，确定取消？','<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
')">取消 </a>
        <?php } elseif ($_smarty_tpl->tpl_vars['expect']->value['is_entrust']==3) {?> 未通过 <?php if ($_smarty_tpl->tpl_vars['config']->value['pay_trust_resume']!=0) {?>
        <a class="yun_resume_setup_bth" href='index.php?c=getserver&id=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&server=2'>委托</a>
        <?php } else { ?>
        <a class="yun_resume_setup_bth" href='javascript:void(0)' onclick="entr_resume_free('<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
')">委托</a>
        <?php }?> <?php } else { ?>
        <font color="#f00">未申请</font>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['pay_trust_resume']!=0) {?>
        <a class="yun_resume_setup_bth" href='index.php?c=getserver&id=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&server=2'>委托</a>
        <?php } else { ?>
        <a class="yun_resume_setup_bth" href='javascript:void(0)' onclick="entr_resume_free('<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
')">委托</a>
        <?php }?> <?php }?>

        
    </div>
    <?php }?>
    <div class="yun_resume_setup_box">
        <div class="yun_resume_setup_tit">自动匹配职位</div>
       求职顾问将根据您简历的求职意向为您筛选投递适合的职位！ 
        <a href="index.php?c=likejob&id=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
" class="yun_resume_setup_bth">匹配</a>
    </div>
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['maxnum']->value>0||$_smarty_tpl->tpl_vars['confignum']->value=='') {?>
		<?php if ($_smarty_tpl->tpl_vars['user']->value['idcard_status']!=1&&$_smarty_tpl->tpl_vars['config']->value['user_enforce_identitycert']==1) {?> 
		<a href="javascript:void(0)" onclick="fidcard()" class="yun_resume_setup_cj">创建新简历</a>
		<?php } else { ?>
		<a href="index.php?c=addresume" class="yun_resume_setup_cj">创建新简历</a>
		<?php }?>
	<?php } else { ?>
    <a href="javascript:void(0)" onclick="layermsg('你的简历数已经达到系统设置的简历数了');return false;" class="yun_resume_setup_cj">创建新简历</a>
	<?php }?>

    
        <a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=resumeset&del=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
');"><div class="yun_resume_setup_sc">删除简历</div></a>
    
</div>
<div id="wname" style="display:none; width: 300px; ">
<div class="sq_gjresume">
    <div class="job_box_div">
     
       
        <div class="">
           <div class="sq_gjresume_hi">尊敬的用户你好！   </div>
            <div class="">你的简历需具备以下条件： </div>
           <?php if ($_smarty_tpl->tpl_vars['heightone']->value==1) {?><div class="sq_gjresume_tj">本科以上学历 </div>
		   <?php } else { ?><div class="sq_gjresume_tjno">本科以上学历<span class="sq_gjresume_tjno_tip">(暂未满足条件)</span> </div>
		   <?php }?>
		    <?php if ($_smarty_tpl->tpl_vars['heighttwo']->value==2) {?> <div class="sq_gjresume_tj">两年以上工作经历或三项以上工作经历</div>
			 <?php } else { ?><div class="sq_gjresume_tjno">两年以上工作经历或三项以上工作经历<span class="sq_gjresume_tjno_tip">(暂未满足条件)</span></div>
			<?php }?>
          
        </div>
        <div class="sq_gjresume_bth">  <a class="sq_gjresume_bth_a" href="javascript:void(0);" >申请高级简历</a> </div>
         <div class="sq_gjresume_wxts" >
       温馨提示：
       <div class="">成为高级人才以后，会有猎头中介主动联系您，请保持电话畅通。</div>
        </div>
    </div>
</div>
</div>


<div id="entr_resume" style="display:none; width: 300px;">
    <div style="height: 100px; width: 300px;" class="job_box_div">
        <div class="job_box_title">
            <div class="resume_ask_qr"> <span class="resume_ask" style="margin-left:10px;"></span> <em>委托简历将扣除您<?php echo $_smarty_tpl->tpl_vars['config']->value['pay_trust_resume'];?>
元</em> </div>
        </div>
        <div class="job_box_inp"> <span class="job_box_botton" style="width:71px; margin-top:0px;"> <a class="job_box_yes job_box_botton2" href="javascript:void(0);" style="margin-top:0px;">确定</a> </span> </div>
    </div>
</div>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.picker.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.poppicker.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var resumeData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
    resumeData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
'
    })
    '<?php } ?>'
    mui.init({
        swipeBack: true 
    });
	function fidcard(){
		layermsg('请先完成身份认证！', 2, function() {
			location.href = 'index.php?c=idcard';
		});
	}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/resume.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/publicselect.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
