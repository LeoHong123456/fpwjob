<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 21:06:10
         compiled from "/www/fpwjob/uploads/app/template/wap/resume/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:3662030155dc568425dfbf0-58517747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7669efc1bceb35bd4c425ea3c5355c522da53cb7' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/resume/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3662030155dc568425dfbf0-58517747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'resume_style' => 0,
    'config' => 0,
    'Info' => 0,
    'key' => 0,
    'v' => 0,
    'worklist' => 0,
    'edulist' => 0,
    'traininglist' => 0,
    'skilllist' => 0,
    'projectlist' => 0,
    'otherlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc568426cb1d8_43122377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc568426cb1d8_43122377')) {function content_5dc568426cb1d8_43122377($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta http-equiv="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
,wap" />
<meta http-equiv="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['resume_style']->value;?>
/css/jquery.fullPage.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['resume_style']->value;?>
/css/font-awesome.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['resume_style']->value;?>
/css/rusume.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet">
</head>
<body>
<div id="dowebok">
<section class="section">
    <div class="rusume_info_cont">
      <div class="rusume_info_Start">
        <div class="rusume_info_Start_k1"></div>
        <div class="rusume_info_h1"><span class="rusume_info_Start_span">个人简历</span></div>
      </div>
      <div class="rusume_info_Start_k"></div>
    </div>
    <div class="section_nav">
      <div class="section_nav_line"></div>
      <div class="section_nav_line_r"></div>
      <div class="section_nav_p"><?php echo $_smarty_tpl->tpl_vars['Info']->value['username_n'];?>
</div>
      <div class="section_nav_icon"><i class="fa fa-angle-double-up"></i></div>
    </div>
  </section>
  <section class="section">
    <div class="rusume_info_cont">
		
	  <div class="rusume_info_line"></div>
	  
      <div class="rusume_info_Frame_one">
        <div class="rusume_info_Frame_line"></div>
      </div>
	  
      <div class="rusume_info_Frame_img"> <img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['resume_photo'];?>
"  onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);"/ class="" width="275" height="275"></div>
      <div class="rusume_info_name_top_line"></div>
      <div class="rusume_info_name_bottom_line"></div>
      <div class="rusume_info_name"><?php echo $_smarty_tpl->tpl_vars['Info']->value['username_n'];?>
</div>
      <div class="rusume_info_p"><?php echo $_smarty_tpl->tpl_vars['Info']->value['sex'];?>
,
	  <?php if ($_smarty_tpl->tpl_vars['Info']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['Info']->value['age'];?>
岁<?php }?>,
	  <?php echo $_smarty_tpl->tpl_vars['Info']->value['useredu'];?>
,
    <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_exp']=='无经验') {?>无经验<?php } else { ?>
	  <?php echo $_smarty_tpl->tpl_vars['Info']->value['user_exp'];?>
经验<?php }?>
	  </div>
	  <div class="rusume_info_p2"><?php echo $_smarty_tpl->tpl_vars['Info']->value['living'];?>
</div>
      <div class="rusume_info_qz"><?php echo $_smarty_tpl->tpl_vars['Info']->value['jobstatus'];?>
 </div>
    </div>
    <div class="section_nav">
      <div class="section_nav_line"></div>
      <div class="section_nav_line_r"></div>
      <div class="section_nav_p">基本信息</div>
      <div class="section_nav_icon"><i class="fa fa-angle-double-up"></i></div>
    </div>
  </section>
  <section class="section">
    <div class="section_Work_title"> <span class="section_Work_span">求职意向</span> <em class="section_Work_em">Work experience</em> </div>
    <div class="job_Intention_line_l"></div>
    <div class="job_Intention_line_r"></div>
    <div class="job_Intention_cont">
    <?php if ($_smarty_tpl->tpl_vars['Info']->value['jobname']) {?>
      <div class="section_yx_by_p">期望职位：<?php echo $_smarty_tpl->tpl_vars['Info']->value['jobname'];?>
</div>
      <?php }?>
      <div class="section_yx_by_p">期望薪资：<span class="section_yx_by_span"><?php if ($_smarty_tpl->tpl_vars['Info']->value['minsalary']&&$_smarty_tpl->tpl_vars['Info']->value['maxsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['Info']->value['maxsalary'];
} elseif ($_smarty_tpl->tpl_vars['Info']->value['minsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
以上<?php } else { ?>面议<?php }?></span></div>

      <?php if ($_smarty_tpl->tpl_vars['Info']->value['type']) {?>
      <div class="section_yx_by_p">工作性质：<?php echo $_smarty_tpl->tpl_vars['Info']->value['type'];?>
</div><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['Info']->value['report']) {?>
      <div class="section_yx_by_p">到岗时间：<?php echo $_smarty_tpl->tpl_vars['Info']->value['report'];?>
</div><?php }?>
      <div class="section_yx_by_p">期望城市：
	  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['expectcity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
	  <?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 <?php }?>
	  <?php } ?>
	  </div>
      <?php if ($_smarty_tpl->tpl_vars['Info']->value['hy']) {?>
      <div class="section_yx_by_p">从事行业：<?php echo $_smarty_tpl->tpl_vars['Info']->value['hy'];?>
</div><?php }?>
    </div>
    <div class="section_nav">
      <div class="section_nav_line"></div>
      <div class="section_nav_line_r"></div>
      <div class="section_nav_p">求职意向</div>
      <div class="section_nav_icon"><i class="fa fa-angle-double-up"></i></div>
    </div>
  </section>
  <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_work']) {?>
  <section class="section"  id="jl">
    <div class="section_h2"> <span class="section_h2_span">工作经历</span> <em class="section_h2_em">Work experience</em> </div>
    <?php  $_smarty_tpl->tpl_vars['worklist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['worklist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['worklist']->key => $_smarty_tpl->tpl_vars['worklist']->value) {
$_smarty_tpl->tpl_vars['worklist']->_loop = true;
?>
    <div class="slide">
      <div class="section_Additional_con">
        <div class="section_Experience_list">
          <div class="section_Experience_date"><span class="section_Experience_t"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['worklist']->value['sdate'],"%Y-%m");?>
 至 <?php if ($_smarty_tpl->tpl_vars['worklist']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['worklist']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?> </span></div>
          <div class="section_Experience_box">
            <div class="section_Experience_name"><?php echo $_smarty_tpl->tpl_vars['worklist']->value['name'];?>
 </div>
            <div>职位：<?php echo $_smarty_tpl->tpl_vars['worklist']->value['title'];?>
</div>
            <div class="section_Experience_text">工作职责：<?php echo $_smarty_tpl->tpl_vars['worklist']->value['content'];?>
 </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="section_nav">
      <div class="section_nav_line"></div>
      <div class="section_nav_line_r"></div>
      <div class="section_nav_p">工作经历</div>
      <div class="section_nav_icon"><i class="fa fa-angle-double-up"></i></div>
    </div>
  </section>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_edu']) {?>
  <section class="section" id="jl">
    <div class="section_h2"> <span class="section_h2_span">教育经历</span> <em class="section_h2_em">Educational experience</em> </div>
    <?php  $_smarty_tpl->tpl_vars['edulist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['edulist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['edulist']->key => $_smarty_tpl->tpl_vars['edulist']->value) {
$_smarty_tpl->tpl_vars['edulist']->_loop = true;
?>
    <div class="slide">
      <div class="section_Additional_con">
        <div class="section_Education_list">
          <div class="section_Education_date"><span class="section_Education_t"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['edulist']->value['sdate'],"%Y-%m");?>
 至 <?php if ($_smarty_tpl->tpl_vars['edulist']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['edulist']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?></span></div>
          <div class="section_Education_box">
            <aside class="section_Education_name"><span class="section_Education_t">名称：</span><em class="section_Education_n"><?php echo $_smarty_tpl->tpl_vars['edulist']->value['name'];?>
</em> </aside>
            <aside><span class="section_Education_t">最高学历：</span><?php echo $_smarty_tpl->tpl_vars['edulist']->value['education_n'];?>
</aside>
            <?php if ($_smarty_tpl->tpl_vars['edulist']->value['title']) {?><aside><span class="section_Education_t">担任：</span><?php echo $_smarty_tpl->tpl_vars['edulist']->value['title'];?>
</aside><?php }?>          
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="section_nav">
      <div class="section_nav_line"></div>
      <div class="section_nav_line_r"></div>
      <div class="section_nav_p">教育经历</div>
      <div class="section_nav_icon"><i class="fa fa-angle-double-up"></i></div>
    </div>
  </section>
  <?php }?>
  
<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_tra']) {?>
  <section class="section" id="jl">
    <div class="section_h2"> <span class="section_h2_span">培训经历</span> <em class="section_h2_em">Training experience</em> </div>
    
   <?php  $_smarty_tpl->tpl_vars['traininglist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traininglist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_tra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['traininglist']->key => $_smarty_tpl->tpl_vars['traininglist']->value) {
$_smarty_tpl->tpl_vars['traininglist']->_loop = true;
?>
    <div class="slide">
      <div class="section_Additional_con">
        <div class="section_Education_list">
          <div class="section_Education_date"><span class="section_Education_t"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['traininglist']->value['sdate'],"%Y-%m");?>
 至 <?php if ($_smarty_tpl->tpl_vars['traininglist']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['traininglist']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?></span></div>
          <div class="section_Education_box">
            <aside class="section_Education_name"><span class="section_Education_t">名称：</span><em class="section_Education_n bold"><?php echo $_smarty_tpl->tpl_vars['traininglist']->value['name'];?>
</em> </aside>
            <aside><span class="section_Education_t">方向：</span><?php echo $_smarty_tpl->tpl_vars['traininglist']->value['title'];?>
</aside>
           <?php if ($_smarty_tpl->tpl_vars['traininglist']->value['content']) {?><aside><span class="section_Education_t">描述：</span><?php echo $_smarty_tpl->tpl_vars['traininglist']->value['content'];?>
</aside><?php }?>
          </div>
        </div>
      </div>
    </div>
   
      <?php } ?>
    <div class="section_nav">
      <div class="section_nav_line"></div>
      <div class="section_nav_line_r"></div>
      <div class="section_nav_p">培训经历</div>
      <div class="section_nav_icon"><i class="fa fa-angle-double-up"></i></div>
    </div>
  </section>
    <?php }?>

     <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_skill']) {?>
  <section class="section" id="jl">
    <div class="section_h2"> <span class="section_h2_span">职业技能</span> <em class="section_h2_em">Professional skills</em> </div>
    
   <?php  $_smarty_tpl->tpl_vars['skilllist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['skilllist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_skill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['skilllist']->key => $_smarty_tpl->tpl_vars['skilllist']->value) {
$_smarty_tpl->tpl_vars['skilllist']->_loop = true;
?>
    <div class="slide" style="width:100%">
      <div class="section_Skill_cont">
        <div class="section_Skill_list">
          <div class="section_Skill_time_icon"><i class="section_Skill_time_icon_fa fa fa-check-circle-o"></i></div>
          <div class="section_Skill_p"> <span class="section_Skill_con_t">专业名称</span><em class="section_Skill_con_em"><?php echo $_smarty_tpl->tpl_vars['skilllist']->value['name'];?>
</em> </div>
          <div class="section_Skill_p"> <span class="section_Skill_con_t">掌握时间</span><em class="section_Skill_con_em ">掌握<?php echo $_smarty_tpl->tpl_vars['skilllist']->value['longtime'];?>
年</em></div>
          <?php if ($_smarty_tpl->tpl_vars['skilllist']->value['picurl']) {?>
		  
          <div class="section_Skill_p"> <span  class="section_Skill_con_t">证书图片</span><img src="<?php echo $_smarty_tpl->tpl_vars['skilllist']->value['picurl'];?>
" width="95" height="70" style="vertical-align:middle"/></div>
          <?php }?>
        </div>
      </div>
    </div>
   
     <?php } ?> 
    <div class="section_nav">
      <div class="section_nav_line"></div>
      <div class="section_nav_line_r"></div>
      <div class="section_nav_p">专业技能</div>
      <div class="section_nav_icon"><i class="fa fa-angle-double-up"></i></div>
    </div>
  </section>
  
     <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_xm']) {?>
     <section class="section" id="jl">
    <div class="section_h2"> <span class="section_h2_span">项目经验</span> <em class="section_h2_em">Project experience</em> </div>
    
    <?php  $_smarty_tpl->tpl_vars['projectlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['projectlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_xm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['projectlist']->key => $_smarty_tpl->tpl_vars['projectlist']->value) {
$_smarty_tpl->tpl_vars['projectlist']->_loop = true;
?>
    <div class="slide">
      <div class="section_Additional_con">
        <div class="section_Project_list"> <i class="section_Project_yuan"></i> <i class="section_Project_yuan3"></i>
          <div class="section_Project_a1"><em class="section_Project_em section_Project_em_n"><?php echo $_smarty_tpl->tpl_vars['projectlist']->value['name'];?>
</em> </div>
          <div class="section_Project_box">
            <div class="section_Project_a2"><span class="section_Project_s">时间：</span><em class="section_Project_em"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['projectlist']->value['sdate'],"%Y-%m");?>
 至 <?php if ($_smarty_tpl->tpl_vars['projectlist']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['projectlist']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?></em> </div>
            <div class="section_Project_a2"><span class="section_Project_s">职位：</span><em class="section_Project_em"><?php echo $_smarty_tpl->tpl_vars['projectlist']->value['title'];?>
</em> </div>
            <?php if ($_smarty_tpl->tpl_vars['projectlist']->value['content']) {?><div class="section_Project_a2 section_Project_a2_text"><span class="section_Project_s">描述：</span><em class="section_Project_em"><?php echo $_smarty_tpl->tpl_vars['projectlist']->value['content'];?>
</em> </div><?php }?>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="section_nav">
      <div class="section_nav_line"></div>
      <div class="section_nav_line_r"></div>
      <div class="section_nav_p">项目经验</div>
      <div class="section_nav_icon"><i class="fa fa-angle-double-up"></i></div>
    </div>
  </section>
    <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_other']) {?>
  <section class="section " id="jl">
    <div class="section_h2"> <span class="section_h2_span">附加信息</span> <em class="section_h2_em">Additional information</em> </div>
    
    <?php  $_smarty_tpl->tpl_vars['otherlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['otherlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['otherlist']->key => $_smarty_tpl->tpl_vars['otherlist']->value) {
$_smarty_tpl->tpl_vars['otherlist']->_loop = true;
?>
    <div class="slide">
      <div class="section_Additional_con">
        <div class="rusume_Additional_p"><span class="rusume_Additional_span">标题：</span><?php echo $_smarty_tpl->tpl_vars['otherlist']->value['name'];?>
</div>
        <div class="rusume_Additional_p  rusume_Additional_text"><span class="rusume_Additional_span">描述：</span><?php echo $_smarty_tpl->tpl_vars['otherlist']->value['content'];?>
</div>
      </div>
    </div>
    <?php } ?>
   
    <div class="section_nav">
      <div class="section_nav_line"></div>
      <div class="section_nav_line_r"></div>
      <div class="section_nav_p">附加信息</div>
      <div class="section_nav_icon"><i class="fa fa-angle-double-up"></i></div>
    </div>
  </section>
    <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['Info']->value['description']) {?>        
  <section class="section ">
    <div class="section_h2"> <span class="section_h2_span">自我评价</span> <em class="section_h2_em">Self evaluation</em> </div>
    <div class="section_re_body"> <i class="section_re_pj_line1"></i> <i class="section_re_pj_line2"></i> <i class="section_re_pj_line3"></i>
      <p class="section_re_pj"> <i class="section_re_pj_fa fa fa-scissors"></i>  <?php echo $_smarty_tpl->tpl_vars['Info']->value['description'];?>
 </p>
    </div>
    <div class="section_nav">
      <div class="section_nav_line"></div>
      <div class="section_nav_line_r"></div>
      <div class="section_nav_p">自我评价</div>
      <div class="section_nav_icon"><i class="fa fa-angle-double-up"></i></div>
    </div>
  </section>
  <?php }?>
  <section class="section ">
    <div class="section_h2"> <span class="section_h2_span">联系方式</span> <em class="section_h2_em">Contact information</em> </div>
    <ul class="section_touch_ul">
		<li class="seek_contact"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
#tel">查看联系方式</a></li>
		
		<li class="enter_station"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
">查看<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
</a></li>
	</ul> 
    <div class="section_nav">
      <div class="section_nav_line"></div>
      <div class="section_nav_line_r"></div>
      <div class="section_nav_p">谢谢观看</div>
    </div>
  </section>
</div>

<div style='margin:0 auto;width:0px;height:0px;overflow:hidden;'><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
"></div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resume_style']->value;?>
/js/jquery-1.8.3.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resume_style']->value;?>
/js/jquery.fullPage.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){
	$('#dowebok').fullpage({
		normalScrollElements: '.myDiv'
	}); 
});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/nativeshare.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
