<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-09 09:06:07
         compiled from "/www/fpwjob/uploads/app/template/member/user/msg.htm" */ ?>
<?php /*%%SmartyHeaderCode:6702859755dc610ff686bd0-60046940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69a3d26240637ba9fe09449dfe295a0472966932' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/user/msg.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6702859755dc610ff686bd0-60046940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msgnum' => 0,
    'rows' => 0,
    'log' => 0,
    'pagenav' => 0,
    'realmsgname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc610ff6e22c4_55883531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc610ff6e22c4_55883531')) {function content_5dc610ff6e22c4_55883531($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
     <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">我的职位</span> <i class="member_right_h1_icon user_bg"></i></div>
      <div id="gms_showclew"></div>
        <div class="job_list_tit"> 
		<ul class="">
   	  <li <?php if ($_GET['c']=='msg') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=msg">面试通知</a><?php if ($_smarty_tpl->tpl_vars['msgnum']->value) {?><i class="left_sidebar_leftmune_icon"><?php echo $_smarty_tpl->tpl_vars['msgnum']->value;?>
</i><?php }?></li>
      <li <?php if ($_GET['c']=='job') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=job">申请的职位</a></li>
      <li <?php if ($_GET['c']=='favorite') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=favorite">职位收藏</a></li>
      <li <?php if ($_GET['c']=='look_job') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=look_job">浏览的职位 </a></li>
     </ul> 
	</div>
        <div  class="resume_Prompt_box"><div  class="resume_Prompt"><i class="resume_Prompt_icon"></i>安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！</div></div>
      <div id="" class="resume_box_list" > 
        <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
          <div class="jobnotice_tit"> 
          
          <span class="jobnotice_span jobnotice_jobname">面试职位</span> 
          <span class="jobnotice_span jobnotice_time">邀请时间</span> 
            <span class="jobnotice_span jobnotice_zt">面试状态操作</span>
          <span class="jobnotice_span jobnotice_cz">操作</span> 
          </div>
          <?php }?>
          <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
          <div class="jobnotice_list"> 
		  <div class="jobnotice_span jobnotice_jobname"> 
		  <?php if ($_smarty_tpl->tpl_vars['log']->value['type']==0) {?> 
			<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$log.jobid`'),$_smarty_tpl);?>
" target="_blank" class="jobnotice_jobname_a"><?php echo $_smarty_tpl->tpl_vars['log']->value['jobname'];?>
</a> 
		  <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']==2) {?> 
			<a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'jobcomshow','id'=>'`$log.jobid`'),$_smarty_tpl);?>
" target="_blank" class="jobnotice_jobname_a"><?php echo $_smarty_tpl->tpl_vars['log']->value['jobname'];?>
</a> <font color="#FF0000">[高级]</font> 
		  <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']==3) {?> 
			<a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'jobshow','id'=>'`$log.jobid`'),$_smarty_tpl);?>
" target="_blank" class="jobnotice_jobname_a"><?php echo $_smarty_tpl->tpl_vars['log']->value['jobname'];?>
</a> <font color="#FF0000">[猎头]</font>
		  <?php }?>
          <div class="jobnotice_comname"><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$log.fid`'),$_smarty_tpl);?>
" target="_blank" class="cor3"><?php echo $_smarty_tpl->tpl_vars['log']->value['fname'];?>
</a> </div> </div> 
		  <div class="jobnotice_span jobnotice_time"><span class="msg_zt_s"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['datetime'],'%Y-%m-%d');?>
</span></div> 
          <div class="jobnotice_span jobnotice_zt">
         	
           <?php if ($_smarty_tpl->tpl_vars['log']->value['is_browse']=="1") {?> 
			<span class="sg_zt_czw_zt"><font color="#f60">尚未回复</font> </span>
		
			<?php } elseif ($_smarty_tpl->tpl_vars['log']->value['is_browse']=="2") {?> 
			
			<span class="sg_zt_czw_zt"><font color="#666">已查看</font> </span>
			
			<?php } elseif ($_smarty_tpl->tpl_vars['log']->value['is_browse']=="3") {?> 
			
			<font color="#008000">已同意面试</font> 
            <div class="jobnotice_mycz_box"><a href='index.php?c=comment&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
' class="jobnotice_mypl" >我要评论</a> </div>
			
			<?php } elseif ($_smarty_tpl->tpl_vars['log']->value['is_browse']=="4") {?> 
			<span class="msg_zt_s"><font color="#FF00000">已拒绝面试</font> </span>
			
			<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['log']->value['is_browse']!="3"&&$_smarty_tpl->tpl_vars['log']->value['is_browse']!="4") {?> 
            <div class="jobnotice_mycz_box">
			 <a href="javascript:void(0);" onclick="layer_del('您确定要屏蔽该公司并删除该邀请？','index.php?c=msg&act=shield&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
');" class="jobnotice_mypb"><i class="jobnotice_mypb_icon"></i>屏蔽</a>
			
			<a href="javascript:void(0);" onclick="layer_del('确定要拒绝面试邀请？', 'index.php?c=msg&act=inviteset&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
&browse=4')" class="jobnotice_myno"><i class="jobnotice_myno_icon"></i>拒绝</a>
		
			<a href="javascript:void(0);" onclick="layer_del('确定要同意面试邀请？', 'index.php?c=msg&act=inviteset&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
&browse=3')" class="jobnotice_myyes"><i class="jobnotice_myyes_icon"></i>同意</a> 
			</div>
		  <?php }?>
            </div>
            
		  <div class="jobnotice_span jobnotice_cz mt10"> 
    <span class="msg_zt_s"> <a href="javascript:getcont('<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
');"class="cblue">查看</a> <span class="jobnotice_cz_line">|</span>
		  <a href="javascript:void(0);" onclick="layer_del('您确定要删除？', 'index.php?c=msg&act=del&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
'); " class="cblue">删除</a> </span>
		  </div>

         
          </div>
          <?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
          <div class="msg_no">
            <p>亲爱的用户，目前您暂未收到面试通知，</p>
            <p>想要获得更多的面试机会，立即投递简历，敬候佳音！</p>
            <a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
" target="_blank" class="msg_no_sq uesr_submit">立即投递简历>></a> 
		</div>
          <?php } ?> 
		  
		
        <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>

       <div class="jobnotice_icon_sm">图标解读： </div>
	   <div class="jobnotice_icon_list"> <span class="jobnotice_iconsm"><i class="jobnotice_icon_ico"></i>屏蔽</span>

	   企业就无法再次邀请面试并无法查看联系方式</div>
        <div class="jobnotice_icon_list">
<span class="jobnotice_iconsm"><i class="jobnotice_icon_noico "></i>拒绝</span>
	   已经找到满意的工作或者觉得这份工作不合适自己，可以选择拒绝企业的面试邀请</div>
       <div class="jobnotice_icon_list">  
	   <span class="jobnotice_iconsm"><i class="jobnotice_icon_yesico"></i>同意</span>
	   同意表示接受企业邀请</div>
  </div>

      </div>
    </div>






<div id="getcont" style="width:100%; display:none;">
 <div class="aud_face">
   <div class="audition_list"><span class="audition_list_span"></span></div>
   <div  style="padding:10px;">
   <div class="invitation_user">尊敬的 <span class="invitation_user_name"><?php echo $_smarty_tpl->tpl_vars['realmsgname']->value;?>
</span> 您好!</div>

 <div class="invitation_cont">
 &nbsp;&nbsp;&nbsp;&nbsp;经过人力资源部的初步筛选,我们认为您基本具备 <i class="invitation_cont_job"  id="jobname"></i> 岗位的任职资格，因此正式邀请您来我公司参加面试。
 
</div>
<div class="invitation_cont_tip">具体详见如下：</div>
<div class="invitation_cont_p"><span class="invitation_cont_pn">【面试时间】</span><em class="audition_list_e" id="intertime"></em></div>
<div class="invitation_cont_p"><span class="invitation_cont_pn">【面试地址】</span><em class="audition_list_e" id="address"></em></div>
<div class="invitation_cont_p"><span class="invitation_cont_pn">【面试备注】</span><em class="" id="content"></em></div>
<div class="invitation_cont_p"><span class="invitation_cont_pn">【联系方式】</span><em class="audition_list_e" id="linkman"></em> ( TEL：<em class="invitation_cont_tel" id="linktel"></em> )</div>
</div>
<div class="invitation_cont_jy">
<div class="invitation_cont_d">特此邀请&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
<div class="invitation_cont_d"><em class="" id="comname"></em>&nbsp;&nbsp;&nbsp;&nbsp;</div>
<div class="invitation_cont_d"><em class="" id="datetime"></em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
</div>
</div>
</div>
<?php echo '<script'; ?>
>
    function getcont(id) {
        $.post("index.php?c=msg&act=ajax", { id: id }, function (data) {
            var data = eval('(' + data + ')');
            $("#comname").html(data.comname);
            $("#jobname").html(data.jobname);
            $("#linkman").html(data.linkman);
            $("#linktel").html(data.linktel);
            $("#intertime").html(data.intertime);
            $("#address").html(data.address);
			if(data.content){
				$("#content").html(data.content);
			}else{
				$("#content").html('&nbsp');
			}
            
            $("#datetime").html(data.datetime);
            $.layer({
                type: 1,
                title: '面试邀请函',
                shade: [0],
                closeBtn: [0, true],
                border: [10, 0.3, '#000', true],
                area: ['600px', 'auto'],
                page: { dom: "#getcont" }
            });
        })
    }
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
