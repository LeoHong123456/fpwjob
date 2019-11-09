<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-09 11:29:24
         compiled from "/www/fpwjob/uploads/app/template/resume/jianli2/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:17639576625dc632945da6f1-97989967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc41c1201cb34f0a76b0bc7602be67183f3c7593' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/resume/jianli2/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17639576625dc632945da6f1-97989967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'resumestyle' => 0,
    'config' => 0,
    'Info' => 0,
    'pre' => 0,
    'usertype' => 0,
    'uid' => 0,
    'UserMember' => 0,
    'key' => 0,
    'v' => 0,
    'one' => 0,
    'tplurl' => 0,
    'paytpls' => 0,
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc63294754df3_23861521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc63294754df3_23861521')) {function content_5dc63294754df3_23861521($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_image')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.image.php';
?><!DOCtYPE html PUBLIC "-//W3C//DtD XHtML 1.0 transitional//EN" "http://www.w3.org/tR/xhtml1/DtD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name=keywords content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/> 
<meta name=description content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/> 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['resumestyle']->value;?>
/css/resume.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<?php echo '<script'; ?>
> var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
"; <?php echo '</script'; ?>
>
<style type="text/css" media=print>.noprint{display : none }</style>
<body class="resume_bg_c">

<div class="yun_resume_content">
<?php if ($_GET['see']!='member'&&$_GET['see']!='used') {?>

<div class="yun_resume_header noprint">
 <div class="yun_resume_logo">
  <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_logo'];?>
" class="png" style=" border:none;"></a>
  </div>
  
  <div class="yun_resume_logo_zt">
  编号：<span class="yun_resume_logo_zt_n"><?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
</span> 
 <em class="yun_resume_logo_zt_list"> 简历更新：<span class="yun_resume_logo_zt_n"><?php echo $_smarty_tpl->tpl_vars['Info']->value['lastupdate'];?>
  </span>  </em>
  浏览：<span class="yun_resume_logo_zt_n"><?php echo '<script'; ?>
 language="javascript" src="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','a'=>'GetHits','id'=>'`$Info.id`'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>次 </span>  <em class="yun_resume_logo_zt_list">两周内简历回复率：<span class="yun_resume_logo_zt_n"><?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
%</span></em></div>
  
   </div>           
 
<?php }?> 
 


<div class="two_vita_content_color two_vita_red">
<div class="two_vita_content">
<div class="two_vita_Basic">
<?php if ($_smarty_tpl->tpl_vars['Info']->value['info_status']=="1"||$_smarty_tpl->tpl_vars['usertype']->value=="2"||$_smarty_tpl->tpl_vars['Info']->value['uid']==$_smarty_tpl->tpl_vars['uid']->value) {?>
<div class="two_vita_Basi_top_bg"></div>
<div class="two_vita_Basi_top_bg_bot">
<div>
<div class="two_vita_Basic_photo_img"><img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['resume_photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" width="120" height="120"></div>
<div  class="two_vita_Basic_photo png"></div>
<div  class="two_vita_Basic_photo_line"></div>
</div>
<div class="two_vita_Basic_info">
<div class="two_vita_name"><?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']=="1") {
echo $_smarty_tpl->tpl_vars['Info']->value['name'];
} else {
echo $_smarty_tpl->tpl_vars['Info']->value['username_n'];
}
if ($_smarty_tpl->tpl_vars['Info']->value['idcard_status']==1&&$_smarty_tpl->tpl_vars['Info']->value['idcard']) {?><span class="two_vita_name_yrz"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/resume/images/three_sf.png" title="身份已认证">  已认证</span><?php }?>
<?php if ($_smarty_tpl->tpl_vars['UserMember']->value['source']==6&&$_smarty_tpl->tpl_vars['UserMember']->value['claim']==0&&$_smarty_tpl->tpl_vars['UserMember']->value['email']!='') {?>
<a class="resume_rz " href="javascript:void(0);" onClick="claim('<?php echo smarty_function_url(array('m'=>'ajax','c'=>'claim','uid'=>$_smarty_tpl->tpl_vars['Info']->value['uid']),$_smarty_tpl);?>
')">认领</a>
<?php }?>

</div>
<div class="two_vita_Basic_info_t">
<span class="two_vita_Basic_icon two_vita_Basic_Sex png"><?php echo $_smarty_tpl->tpl_vars['Info']->value['sex'];?>
</span>       
<span class="two_vita_Basic_icon two_vita_Basic_Age png"><?php echo $_smarty_tpl->tpl_vars['Info']->value['age'];?>
岁</span> 
<span class="two_vita_Basic_icon two_vita_Basic_Exp png"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_exp'];?>
</span>        
<span class="two_vita_Basic_icon two_vita_Basic_Edu png">学历：<?php echo $_smarty_tpl->tpl_vars['Info']->value['useredu'];?>
</span>         
<span class="two_vita_Basic_icon two_vita_Basic_add png"><?php echo $_smarty_tpl->tpl_vars['Info']->value['living'];?>
</span>
</div>
<?php if ($_smarty_tpl->tpl_vars['Info']->value['basic_info']=='1') {?>      
<div class="two_vita_Basic_info_c">
<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_marriage']) {?><span class="two_vita_Identity"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_marriage'];?>
</span>  
<span class="two_vita_Basic_line">|</span><?php }?>
<?php if ($_smarty_tpl->tpl_vars['Info']->value['domicile']) {?><span class="two_vita_Identity">户籍：<?php echo $_smarty_tpl->tpl_vars['Info']->value['domicile'];?>
 </span>  
<span class="two_vita_Basic_line">|</span><?php }?>
<?php if ($_smarty_tpl->tpl_vars['Info']->value['weight']||$_smarty_tpl->tpl_vars['Info']->value['height']) {?><span class="two_vita_Identity"><?php if ($_smarty_tpl->tpl_vars['Info']->value['height']) {
echo $_smarty_tpl->tpl_vars['Info']->value['height'];?>
cm<?php }
if ($_smarty_tpl->tpl_vars['Info']->value['weight']&&$_smarty_tpl->tpl_vars['Info']->value['height']) {?>/<?php }
if ($_smarty_tpl->tpl_vars['Info']->value['weight']) {?> <?php echo $_smarty_tpl->tpl_vars['Info']->value['weight'];?>
kg<?php }?> </span> 
<span class="two_vita_Basic_line">|</span><?php }?>    
<?php if ($_smarty_tpl->tpl_vars['Info']->value['nationality']) {?><span class="two_vita_Identity"><?php echo $_smarty_tpl->tpl_vars['Info']->value['nationality'];?>
</span><?php }?>   
</div> 
<?php }?>
</div>
</div></div>
<?php }?>
<div class="two_vita_list_cont"> 
<div class="two_vita_list">
<div class="two_vita_list_h1"><span class="two_vita_list_h1_span">求职意向
<i class="two_vita_list_h1_icon reaume_iconyx"></i>
<i class="two_vita_list_h1_icon2 two_vita_red"></i>
</span></div>
<div class="two_vita_Intention" style="width:100%">工作职能：
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['expectjob']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?>
<span class="resume_job_tag"><i class="resume_job_tag_icon"></i><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span>
<?php }?>
<?php } ?>
</div>   
<div class="two_vita_Intention">意向岗位：<?php echo $_smarty_tpl->tpl_vars['Info']->value['customjob'];?>
</div>         
<div class="two_vita_Intention two_vita_Intention_w420">工作地点：
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['expectcity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
	<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> 
		<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;
	<?php }?> 
<?php } ?>
</div>        
<div class="two_vita_Intention ">期望行业：<?php echo $_smarty_tpl->tpl_vars['Info']->value['hy'];?>
  </div>
<div class="two_vita_Intention two_vita_Intention_w420">待遇要求：<?php if ($_smarty_tpl->tpl_vars['Info']->value['maxsalary']&&$_smarty_tpl->tpl_vars['Info']->value['minsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['Info']->value['maxsalary'];
} elseif ($_smarty_tpl->tpl_vars['Info']->value['minsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
以上<?php } else { ?>面议<?php }?></div>                             
<?php if ($_smarty_tpl->tpl_vars['Info']->value['report']) {?><div class="two_vita_Intention ">到职时间：<?php echo $_smarty_tpl->tpl_vars['Info']->value['report'];?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['Info']->value['type']) {?><div class="two_vita_Intention two_vita_Intention_w420">职位性质：<?php echo $_smarty_tpl->tpl_vars['Info']->value['type'];?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['Info']->value['jobstatus']) {?><div class="two_vita_Intention  two_vita_Intention_w420">求职状态：<?php echo $_smarty_tpl->tpl_vars['Info']->value['jobstatus'];?>
</div><?php }?>
</div> 
<?php if (!empty($_smarty_tpl->tpl_vars['Info']->value['description'])) {?>
<div class="two_vita_list">
<div class="two_vita_list_h1"><span class="two_vita_list_h1_span">自我评价<i class="two_vita_list_h1_icon reaume_iconpj"></i><i class="two_vita_list_h1_icon2 two_vita_red"></i></span></div>

<div class="two_vita_skill">
<div class="two_vita_skill_Intention">自我评价：<?php echo $_smarty_tpl->tpl_vars['Info']->value['description'];?>
 </div>  
<?php if ($_smarty_tpl->tpl_vars['Info']->value['arrayTag']) {?>   
<div class="two_vita_skill_Intention">个人标签：
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['arrayTag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><span class="resume_user_bq"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php } ?>
</div> 
<?php }?>          
</div>
</div>

<?php }?> 
<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_work'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_work'])) {?>
<div class="two_vita_list" id="m3">
<div class="two_vita_list_h1"><span class="two_vita_list_h1_span">工作经历<i class="two_vita_list_h1_icon reaume_iconjl" ></i><i class="two_vita_list_h1_icon2 two_vita_red"></i></span><span class="yun_resume_jobtime2">平均工作时长：<?php echo $_smarty_tpl->tpl_vars['Info']->value['avghourInfo'];?>
</span></div>

<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
<div class="two_vita_skill">
<div class="two_vita_skill_introduction">
<div class="two_vita_skill_icon"></div>
<div class="two_vita_introduction_a two_vita_date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y年%m月");?>
 - <?php if ($_smarty_tpl->tpl_vars['one']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y年%m月");
} else { ?>至今<?php }?></div >    
<div  class="two_vita_introduction_a two_vita_dw_name blod"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</div >        
<?php if ($_smarty_tpl->tpl_vars['one']->value['title']) {?><div  class="two_vita_introduction_a two_vita_dw_zw  blod">担任：<?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</div ><?php }?>  
</div>
<?php if ($_smarty_tpl->tpl_vars['one']->value['content']) {?><div class="two_vita_skill_Intention">工作职责：<?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
 </div><?php }?>        
</div>
<?php } ?>
      
</div>
<?php }?> 
<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_edu'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_edu'])) {?>
<div class="two_vita_list" id="m0">
<div class="two_vita_list_h1"><span class="two_vita_list_h1_span">教育经历<i class="two_vita_list_h1_icon reaume_iconjy"></i><i class="two_vita_list_h1_icon2 two_vita_red"></i></span></div>

<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
<div class="two_vita_skill">
<div class="two_vita_skill_introduction">
<div class="two_vita_introduction_a two_vita_date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y年%m月");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y年%m月");?>
 </div >    
<div  class="two_vita_introduction_a two_vita_xy_name  blod"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
 </div >
<?php if ($_smarty_tpl->tpl_vars['one']->value['education_n']) {?><div  class="two_vita_introduction_a two_vita_dw_bm ">学历：<?php echo $_smarty_tpl->tpl_vars['one']->value['education_n'];?>
</div><?php }?>   
<?php if ($_smarty_tpl->tpl_vars['one']->value['title']) {?><div  class="two_vita_introduction_a two_vita_dw_zw">职务：<?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['one']->value['specialty']) {?><div  class="two_vita_introduction_a two_vita_dw_zw">专业：<?php echo $_smarty_tpl->tpl_vars['one']->value['specialty'];?>
</div ><?php }?>        
</div>    
</div>
<?php } ?>
             
</div>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']=="1") {?>
<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_skill'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_skill'])) {?>
<div class="two_vita_list" id="m2">
<div class="two_vita_list_h1"><span class="two_vita_list_h1_span">职业技能<i class="two_vita_list_h1_icon reaume_iconjn"></i><i class="two_vita_list_h1_icon2 two_vita_red"></i></span></div>
<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_skill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
<div class="two_vita_skill">
<div class="two_vita_skill_introduction"> 
<div  class="two_vita_jn_p">技能名称：<span class="blod"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</span></div >  
<div class=" two_vita_jn_p">掌握时间：<?php echo $_smarty_tpl->tpl_vars['one']->value['longtime'];?>
年 </div> 
<?php if ($_smarty_tpl->tpl_vars['one']->value['picurl']) {?>
<div class="zs_imgbox ">技能证书：<img src="<?php echo $_smarty_tpl->tpl_vars['one']->value['picurl'];?>
" ></div> 
<?php }?>
</div>     
</div>
<?php } ?>            
</div>
<?php }?> 
<?php }?> 
<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_xm'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_xm'])) {?>
<div class="two_vita_list" id="m4">
<div class="two_vita_list_h1"><span class="two_vita_list_h1_span">项目经历<i class="two_vita_list_h1_icon reaume_iconxm"></i><i class="two_vita_list_h1_icon2 two_vita_red"></i></span></div>
<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_xm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
<div class="two_vita_skill">
<div class="two_vita_skill_introduction">
<div class="two_vita_skill_icon"></div>
<div class="two_vita_introduction_a two_vita_date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y年%m月");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y年%m月");?>
 </div >          
<div  class="two_vita_introduction_a two_vita_dw_name blod"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</div >   
<?php if ($_smarty_tpl->tpl_vars['one']->value['title']) {?><div  class="two_vita_introduction_a two_vita_dw_zw blod">担任：<?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</div> <?php }?> 
</div>
<?php if ($_smarty_tpl->tpl_vars['one']->value['content']) {?><div class="two_vita_skill_Intention">项目描述：<?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
 </div><?php }?>        
</div>
<?php } ?>
</div>
<?php }?> 
<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_tra'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_tra'])) {?>
<div class="two_vita_list" id="m1">
<div class="two_vita_list_h1"><span class="two_vita_list_h1_span">培训经历<i class="two_vita_list_h1_icon reaume_iconpx"></i><i class="two_vita_list_h1_icon2 two_vita_red"></i></span></div>
<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_tra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
<div class="two_vita_skill">
<div class="two_vita_skill_introduction">
<div class="two_vita_skill_icon"></div>
<div class="two_vita_introduction_a two_vita_date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y年%m月");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y年%m月");?>
 </div >    
<div  class="two_vita_introduction_a two_vita_dw_name blod"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
 </div >        
<?php if ($_smarty_tpl->tpl_vars['one']->value['title']) {?><div  class="two_vita_introduction_a two_vita_dw_bm blod">培训方向：<?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</div ><?php }?>    
</div>
<?php if ($_smarty_tpl->tpl_vars['one']->value['content']) {?> <div class="two_vita_skill_Intention">培训描述：<?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
 </div><?php }?>         
</div>
<?php } ?>
</div>
<?php }?> 
 
<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_other'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_other'])) {?>
<div class="two_vita_list" id="m6">
<div class="two_vita_list_h1"><span class="two_vita_list_h1_span">其他信息<i class="two_vita_list_h1_icon reaume_iconqt"></i><i class="two_vita_list_h1_icon2 two_vita_red"></i></span></div>
<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
<div class="two_vita_skill">
<div class="two_vita_skill_Intention">其他标题：<span class="blod"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</span></div>        
</div>
<div class="two_vita_skill">
<?php if ($_smarty_tpl->tpl_vars['one']->value['content']) {?><div class="two_vita_skill_Intention">其他描述：<?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
 </div><?php }?>        
</div>   
<?php } ?>   
</div>
<?php }?>  

<?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_show'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_show'])) {?>
<div class="two_vita_list">
<div class="two_vita_list_h1"><span class="two_vita_list_h1_span">我的作品<i class="two_vita_list_h1_icon reaume_iconzp"></i><i class="two_vita_list_h1_icon2 two_vita_red"></i></span></div>
 <div class="fairs_introduction_p" >
        <ul class="fairs_introduction_img fairs_introduction_img_l" id="rolling_img1">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_show']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
             <li>
				<a href="javascript:void(0);">
					<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" lay-src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"  width="210" height="153" />
				</a>
			</li>
		<?php } ?>
        </ul>
    </div>   
</div>
<?php }?>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_jy']['content'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['Info']->value['label_n']||$_tmp1) {?>   
<div class="two_vita_list" id="m6">
		<div class="two_vita_list_h1">
			<span class="two_vita_list_h1_span">
				评价分类
				<i class="two_vita_list_h1_icon reaume_iconqt"></i>
				<i class="two_vita_list_h1_icon2 two_vita_red"></i>
			</span>
		</div>
 		<div class="two_vita_skill">
			<div class="two_vita_skill_Intention">分类标签：<span class="blod"><?php echo $_smarty_tpl->tpl_vars['Info']->value['label_n'];?>
</span></div>        
		</div>
		<div class="two_vita_skill">
			<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_jy']['content']) {?><div class="two_vita_skill_Intention">客服描述：<?php echo $_smarty_tpl->tpl_vars['Info']->value['user_jy']['content'];?>
 </div><?php }?>
		</div>   
 	</div>
<?php }?>  

 

<?php if ($_smarty_tpl->tpl_vars['Info']->value['doc']) {?>

<div class="two_vita_list">
	<div class="two_vita_list_h1"><span class="two_vita_list_h1_span">简历内容<i class="two_vita_list_h1_icon reaume_iconzt"></i><i class="two_vita_list_h1_icon2 two_vita_red"></i></span></div>
<div class="two_vita_skill">
<div class="two_vita_skill_Intention"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_doc']['doc'];?>
</div>  
   

          
</div>
</div>

       <?php }?>
	
<div class="two_vita_list">
<div class="two_vita_list_h1"><span class="two_vita_list_h1_span">联系方式<i class="two_vita_list_h1_icon reaume_iconlx"></i><i class="two_vita_list_h1_icon2 two_vita_red"></i></span></div>
<?php if ($_smarty_tpl->tpl_vars['Info']->value['m_status']=="1") {?>
<?php if ($_smarty_tpl->tpl_vars['Info']->value['telphone']) {?>
<div class="two_vita_Intention">联系手机：<?php echo smarty_function_image(array('uid'=>$_smarty_tpl->tpl_vars['Info']->value['uid'],'number'=>$_smarty_tpl->tpl_vars['Info']->value['telphone'],'action'=>'telphone','width'=>200),$_smarty_tpl);?>
</div> 
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['Info']->value['telhome']) {?>
<div class="two_vita_Intention">联系座机：<?php echo smarty_function_image(array('uid'=>$_smarty_tpl->tpl_vars['Info']->value['uid'],'number'=>$_smarty_tpl->tpl_vars['Info']->value['telhome'],'action'=>'telhome','width'=>200),$_smarty_tpl);?>
 </div>   
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['Info']->value['email']) {?>
<div class="two_vita_Intention">电子邮箱：<?php echo $_smarty_tpl->tpl_vars['Info']->value['email'];?>
 </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['Info']->value['address']) {?>
<div class="two_vita_Intention">详细地址：<?php echo mb_substr($_smarty_tpl->tpl_vars['Info']->value['address'],0,16,'utf-8');?>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['Info']->value['qq']) {?>
<div class="two_vita_Intention">联系Q Q：<?php echo $_smarty_tpl->tpl_vars['Info']->value['qq'];?>
</div>
   <?php }?>  
<?php if ($_smarty_tpl->tpl_vars['Info']->value['homepage']) {?>
<div class="two_vita_Intention">个人主页：<?php echo $_smarty_tpl->tpl_vars['Info']->value['homepage'];?>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['Info']->value['idcard']) {?><div class="two_vita_Intention"><span>身份证号</span>
<?php echo smarty_function_image(array('uid'=>$_smarty_tpl->tpl_vars['Info']->value['uid'],'action'=>'idcard','width'=>180),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['Info']->value['idcard_status']==1&&$_smarty_tpl->tpl_vars['Info']->value['idcard']) {?>已认证<?php }?>
</div> 
<?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['Info']->value['wxewm']) {?>
    <div class="one_vita_ewm_box"><img src=".<?php echo $_smarty_tpl->tpl_vars['Info']->value['wxewm'];?>
" width="120" height="120"><div class="one_vita_ewm_box_p">个人二维码</div></div>
    <?php }?>
   <?php } else { ?>
   <div class="re_touch"><?php echo $_smarty_tpl->tpl_vars['Info']->value['link_msg'];?>
</div>
  <?php }?>
</div>

</div>

</div>
</div>

		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/resume_right.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
 </div>

<?php if ($_GET['see']=='member') {?> 

<div class="expext_yl_box_bth"><?php if (in_array($_smarty_tpl->tpl_vars['tplurl']->value['id'],$_smarty_tpl->tpl_vars['paytpls']->value)) {?>
	<a href="javascript:;" onClick="settemplate('确定试用该模版？', '<?php echo smarty_function_url(array('m'=>'ajax','c'=>'settpl','id'=>$_smarty_tpl->tpl_vars['tplurl']->value['id'],'eid'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
');" class="expext_yl_box_sub">使用该模板</a>
	<?php } else { ?>
	<a href="javascript:void(0);" onClick="settemplate('购买模板将花费<?php echo $_smarty_tpl->tpl_vars['tplurl']->value['price'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
，是否继续？', '<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pay','id'=>$_smarty_tpl->tpl_vars['tplurl']->value['id'],'eid'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
');" class="expext_yl_box_sub">购买并使用该模板</a>
	<?php }?>
	<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','uid'=>$_smarty_tpl->tpl_vars['uid']->value,'tmp'=>$_smarty_tpl->tpl_vars['tplurl']->value['id']),$_smarty_tpl);?>
" target="_blank" class="expext_yl_box_sub">预览</a>
</div>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='2') {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/packpay.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php }?>

<div class="clear"></div>
<?php if ($_GET['see']!='member'&&$_GET['see']!='used') {?>
<div class="yun_resume_foot noprint"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
</a> &copy; 版权所有 <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
  本网招聘及简历信息等 ,未经书面授权不得转载 <br />
<div id="uclogin" class="none"></div>
</div>
<?php }?>
<div id="uclogin" class="none"></div>
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
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/ScrollPic.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	layui.use(['form','layer'], function(){
		var $ = layui.$,
			form = layui.form,
			layer = layui.layer;  
		layer.photos({
			photos: '#rolling_img1'
			,anim: 5 
		}); 
	  });
var integral_pricename='<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
'; 
var downurl="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'down_resume'),$_smarty_tpl);?>
";
var isHeight = "<?php echo $_smarty_tpl->tpl_vars['Info']->value['height_status'];?>
";
<!--//--><![CDATA[//><!--
var li_num=$("#rolling_img1 li").length;
if(li_num>3){
	var scrollPic_02 = new ScrollPic();
	scrollPic_02.scrollContId   = "rolling_img1"; 
	scrollPic_02.arrLeftId      = "LeftArr";
	scrollPic_02.arrRightId     = "RightArr"; 
	scrollPic_02.frameWidth     = 725;
	scrollPic_02.pageWidth      = 235; 
	scrollPic_02.speed          = 10; 
	scrollPic_02.space          = 10; 
	scrollPic_02.autoPlay       = true; 
	scrollPic_02.autoPlayTime   = 2; 
	scrollPic_02.initialize(); 
}
//--><!]]> 
<?php echo '</script'; ?>
>
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png');
<?php echo '</script'; ?>
>
<![endif]-->   
<?php if ($_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['usertype']->value==2&&$_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==2) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_easemob.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==3) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_rongcloud.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php }?>  
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/resume_include.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

 </body>
</html><?php }} ?>
