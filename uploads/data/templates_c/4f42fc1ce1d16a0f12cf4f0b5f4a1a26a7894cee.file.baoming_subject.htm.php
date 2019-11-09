<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-09 09:06:11
         compiled from "/www/fpwjob/uploads/app/template/member/user/baoming_subject.htm" */ ?>
<?php /*%%SmartyHeaderCode:21045790365dc611030fa3a7-81176638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f42fc1ce1d16a0f12cf4f0b5f4a1a26a7894cee' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/user/baoming_subject.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21045790365dc611030fa3a7-81176638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msgnum' => 0,
    'rows' => 0,
    'job' => 0,
    'config' => 0,
    'state' => 0,
    'arr_data' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc61103133e00_43521918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc61103133e00_43521918')) {function content_5dc61103133e00_43521918($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
    	<div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">我的培训</span> <i class="member_right_h1_icon user_bg"></i></div>
	        <div id="gms_showclew"></div>
	        <div class="resume_box_list"> 
	        <div class="job_list_tit"> 
		        <ul class="">
					<li <?php if ($_GET['c']=='baoming_subject') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=baoming_subject">报名课程</a></li>
				 	<li <?php if ($_GET['c']=='fav_subject') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=fav_subject">收藏课程</a><?php if ($_smarty_tpl->tpl_vars['msgnum']->value) {?><i class="left_sidebar_leftmune_icon"><?php echo $_smarty_tpl->tpl_vars['msgnum']->value;?>
</i><?php }?></li>
			      	<li <?php if ($_GET['c']=='atn_teacher') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=atn_teacher">关注讲师</a></li>
			 		<li <?php if ($_GET['c']=='fav_agency') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=fav_agency">关注机构</a></li>
		     		<li <?php if ($_GET['c']=='subject_zixun') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=subject_zixun">培训留言</a></li>
		     	</ul> 
	     	</div>
		<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
		<div class="train_class train_class_d">
           <ul>
		    <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
		     <?php $_smarty_tpl->tpl_vars["state"] = new Smarty_variable($_smarty_tpl->tpl_vars['job']->value['order_state'], null, 0);?>
               <li>
                   <div class="train_class_img"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>'`$job.sid`'),$_smarty_tpl);?>
"><img width="200" height="130" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['pic'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_pxsubject_icon'];?>
',2);"/></a></div>
                   
                   
                   <div class="train_class_tit"><a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'subshow','id'=>$_smarty_tpl->tpl_vars['job']->value['sid']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
</a></div>
                  
                   <div class="train_classa_t">机构名称：<a href="<?php echo smarty_function_url(array('m'=>'train','c'=>'agencyshow','id'=>$_smarty_tpl->tpl_vars['job']->value['s_uid']),$_smarty_tpl);?>
" target="_blank"><?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['job']->value['train_name']),0,7,'utf8');?>
</a>    </div>
                   <div>课程价格：<i class="train_class_jg"><?php echo $_smarty_tpl->tpl_vars['job']->value['price'];?>
</i>   </div>
                    <div>收费方式： <?php if ($_smarty_tpl->tpl_vars['job']->value['isprice']==1) {?>在线收费<?php } else { ?>到场收费 <?php }?>   </div>
                   <div>报名时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['ctime'],"%Y-%m-%d");?>
   </div>
                   <?php if ($_smarty_tpl->tpl_vars['job']->value['isprice']==1) {?>
                   <div style="color:#666;">支付状态：<?php echo $_smarty_tpl->tpl_vars['arr_data']->value['paystate'][$_smarty_tpl->tpl_vars['state']->value];?>
   </div>
                   <div class="bm_s_p">
						<?php if ($_smarty_tpl->tpl_vars['job']->value['order_state']=='1') {?> 
                        <a href="index.php?c=payment&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['oid'];?>
" class="train_submit">去付款</a> 
                        <a href="javascript:void(0)" onclick="layer_del('确定要取消？', 'index.php?c=baoming_subject&act=del&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="train_submit">取消报名</a>
                        <?php }?>
                  </div>
                  <?php } else { ?>
                  <div>支付状态：<font color="red">到场支付</font></div>
              <div class="bm_s_p">  <a href="javascript:void(0)" onclick="layer_del('确定要取消？', 'index.php?c=baoming_subject&act=del&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="train_submit">取消报名</a>
      </div>
                  <?php }?>
              
               
               
               
               </li>
			    <?php } ?> 
           </ul>
      </div>
      <?php } else { ?>
      <div class="msg_no">
          <p>亲爱的用户，您还没有报名的培训课程，想要获得更多学习机会</p>
          <p>立即搜索您感兴趣的课程并报名培训吧！</p>
          <a href="<?php echo smarty_function_url(array('m'=>'train'),$_smarty_tpl);?>
" target="_blank" class="msg_no_sq uesr_submit">立即搜索我感兴趣的培训课程>></a> </div>
            <?php }?>
        </div>
        <div class="diggg" style="float:right; margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
