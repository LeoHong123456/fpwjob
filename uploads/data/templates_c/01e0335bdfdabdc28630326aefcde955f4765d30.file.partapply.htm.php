<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-09 09:06:10
         compiled from "/www/fpwjob/uploads/app/template/member/user/partapply.htm" */ ?>
<?php /*%%SmartyHeaderCode:4362641255dc611023a8e32-65242742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01e0335bdfdabdc28630326aefcde955f4765d30' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/user/partapply.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4362641255dc611023a8e32-65242742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'rows' => 0,
    'job' => 0,
    'StateList' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc611023e3ec2_57182911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc611023e3ec2_57182911')) {function content_5dc611023e3ec2_57182911($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
     <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">我的兼职</span> <i class="member_right_h1_icon user_bg"></i></div>
  
     <div class="job_list_tit">
         <ul class="">
         <li <?php if ($_GET['c']=='partapply') {?>class="job_list_tit_cur"<?php }?>> <a href="index.php?c=partapply">兼职报名</a></li>
        <li <?php if ($_GET['c']=='partcollect') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=partcollect">兼职收藏</a></li>
         </ul>
         </div>
         <div class="clear"></div>
		      <div  class="resume_Prompt_box">
      <div class="resume_Prompt"><i class="resume_Prompt_icon"></i>您已申请 <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span> 条职位,请耐心等待企业回复！</div></div>
      <div class="clear"></div><div class="resume_box_list ">
      <div id="gms_showclew"></div>
      <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>

        <div class="part_time_job_tit">
      <div class="part_time_job_span part_time_jobname">兼职名称</div> 
      <div class="part_time_job_span part_time_jobzt">当前状态</div> 
      <div class="part_time_job_span part_time_jobxz">薪资待遇</div>
       <div class="part_time_job_span part_time_jobtime">申请时间</div> 
       <div class="part_time_job_span part_time_jobcz">操作</div> 
	   </div>
      <?php }?>
      <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
      <div class="part_time_job_list">
       <div class="part_time_job_span part_time_jobname">
            <a href="<?php echo smarty_function_url(array('m'=>'part','c'=>'show','id'=>'`$job.jobid`'),$_smarty_tpl);?>
" target="_blank" class="part_time_job_a"><?php echo $_smarty_tpl->tpl_vars['job']->value['jobname'];?>
</a>
            <div class="mt10"><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$job.comid`'),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
</a></div>
        </div>
       <div class="part_time_job_span part_time_jobzt mt10">
        <span class=" is_browse<?php echo $_smarty_tpl->tpl_vars['job']->value['is_browse'];?>
 <?php if ($_smarty_tpl->tpl_vars['job']->value['status']>1) {?>statuscolor<?php }?> "><?php echo $_smarty_tpl->tpl_vars['StateList']->value[$_smarty_tpl->tpl_vars['job']->value['status']];?>
</span> 
        </div> 
        <div class="part_time_job_span part_time_jobxz mt10"><?php echo $_smarty_tpl->tpl_vars['job']->value['salary'];?>
</div> 
       <div class="part_time_job_span part_time_jobtime mt10"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['ctime'],'%Y-%m-%d');?>
</div> 
        <div class="part_time_job_span part_time_jobcz mt10">
        <a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=partapply&act=del&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="List_dete cblue" >删除</a></div>
		</div>
      <?php }
if (!$_smarty_tpl->tpl_vars['job']->_loop) {
?>
       <div class="msg_no">
              <p>亲爱的用户，您还没有报名兼职哦，想要获得更多工作机会</p>
              <p>立即搜索您感兴趣的兼职职位并报名吧！</p>
              <a href="<?php echo smarty_function_url(array('m'=>'part'),$_smarty_tpl);?>
" target="_blank"class="msg_no_sq uesr_submit">立即搜索我感兴趣的兼职职位>></a> </div>
      <?php } ?> </div>
    <div class="diggg" style="margin-top:10px; float:right"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
