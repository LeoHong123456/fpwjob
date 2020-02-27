<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:58:56
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/integral.htm" */ ?>
<?php /*%%SmartyHeaderCode:6512862895e4c8850b7fac2-96695613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7f109cd3d837e6149beefa90b9b187b0774d7df' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/integral.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6512862895e4c8850b7fac2-96695613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lietou_style' => 0,
    'config' => 0,
    'statusList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c8850bda676_31578242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c8850bda676_31578242')) {function content_5e4c8850bda676_31578242($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/jianli.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/account.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

<style>
.my_table_msg th{ text-align:right}
</style>
<div class="m_content">
  <div class="wrap"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="m_inner_youb fr">
    <div class="report_uaer_list fl">
      <ul>
		<li class="report_uaer_list_cur"><a href="index.php?c=integral" ><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
任务</a></li>
		<li><a href="index.php?c=integral_reduce" >消费规则</a></li> 
		<li><a href="index.php?c=reward_list" ><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换</a></li> 
      </ul>
		</div>
      <div class="com_body">
        <div class="integral_cont">
        
          <ul class="integral_cont_list">
          	<li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_qd"></i>每日签到</span> <span class="integral_cont_list_span_c"> 每天完成签到，可获得<b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_signin'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </span> <span class="integral_cont_list_span_r"> <?php if ($_smarty_tpl->tpl_vars['statusList']->value['signin']) {?>
          		今日已签到
          		<?php } else { ?> <a href="index.php" 
							target="_blank"  class="integral_cont_list_a">去签到</a> <?php }?></span></li>
            <li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_zc"></i>完成注册信息</span> <span class="integral_cont_list_span_c"> 新用户完成注册，可获得<b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_reg'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </span> <span class="integral_cont_list_span_r">已注册</span> </li>
            <li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_w"></i>完善基本资料</span> <span class="integral_cont_list_span_c"> 完善基本资料，可获得<b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_userinfo'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </span> <span class="integral_cont_list_span_r"> <?php if ($_smarty_tpl->tpl_vars['statusList']->value['baseInfo']) {?>
              已完善
              <?php } else { ?> <a href="index.php?c=info" 
							target="_blank" class="integral_cont_list_a">立即完善</a> <?php }?> </span> </li>
            <li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_s"></i>上传头像</span> <span class="integral_cont_list_span_c"> 上传头像，可获得<b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_avatar'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </span> <span class="integral_cont_list_span_r"> <?php if ($_smarty_tpl->tpl_vars['statusList']->value['photo']) {?>
              已上传
              <?php } else { ?> <a href="index.php?c=uppic" 
							target="_blank"  class="integral_cont_list_a">上传头像</a> <?php }?> </span> </li>
            <li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_y"></i>邀请朋友注册</span> <span class="integral_cont_list_span_c"> 邀请朋友注册，可获得<b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_invite_reg'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </span> <span class="integral_cont_list_span_r"><a href="<?php echo smarty_function_url(array('m'=>'invitereg'),$_smarty_tpl);?>
"
					target="_blank" class="integral_cont_list_a">现在就邀请</a></span> </li>
            <li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_d"></i>每天第一次登录</span> <span class="integral_cont_list_span_c"> 每天第一次登录，可获得 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_login'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </span> <span class="integral_cont_list_span_r"> 今日已登录  </span></li>
            <li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_rzd"></i>认证电子邮箱</span> <span class="integral_cont_list_span_c"> 认证电子邮箱，可获得 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_emailcert'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </span> <span class="integral_cont_list_span_r"> <?php if ($_smarty_tpl->tpl_vars['statusList']->value['emailChecked']) {?>
              已验证
              <?php } else { ?> <a href="index.php?c=binding" 
							target="_blank"  class="integral_cont_list_a">邮箱认证</a> <?php }?> </span> </li>
            <li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_n"></i>认证手机号码</span> <span class="integral_cont_list_span_c"> 认证手机号码，可获得 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_mobliecert'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span> <span class="integral_cont_list_span_r"> <?php if ($_smarty_tpl->tpl_vars['statusList']->value['phoneChecked']) {?>
              已验证
              <?php } else { ?> <a href="index.php?c=binding" 
							target="_blank"  class="integral_cont_list_a">手机验证</a> <?php }?> </span> </li>
            <li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_pr"></i>认证猎头执照</span> <span class="integral_cont_list_span_c"> 认证猎头执照，可获得 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_ltcert'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span> <span class="integral_cont_list_span_r"> <?php if ($_smarty_tpl->tpl_vars['statusList']->value['yyzz']) {?>
              已验证
              <?php } else { ?> <a href="index.php?c=binding" 
							target="_blank" class="integral_cont_list_a">认证猎头执照</a> <?php }?> </span> </li>
             <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_question_type']==1) {?>
        	<?php if ($_smarty_tpl->tpl_vars['statusList']->value['question']) {?>
        <li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_fw"></i>发布问题</span> <span class="integral_cont_list_span_c"> 发布问题，可获得 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_question'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span> <span class="integral_cont_list_span_r"><a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'addquestion'),$_smarty_tpl);?>
" 
					target="_blank"  class="integral_cont_list_a">发布问题</a></span> </li>
              <?php } else { ?>
              <li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_fw"></i>发布问题</span> <span class="integral_cont_list_span_c"> 发布问题，可获得 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_question'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span> <span class="integral_cont_list_span_r">今日已发布</span> </li>
              <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_answer_type']==1) {?>
        	<?php if ($_smarty_tpl->tpl_vars['statusList']->value['answer']) {?>
        <li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_rp"></i>回答问题</span> <span class="integral_cont_list_span_c"> 回答问题，可获得 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answer'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span> <span class="integral_cont_list_span_r"><a href="<?php echo smarty_function_url(array('m'=>'ask'),$_smarty_tpl);?>
#last-question" 
              target="_blank"  class="integral_cont_list_a">回答问题</a></span> </li>
              <?php } else { ?>
              <li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_rp"></i>回答问题</span> <span class="integral_cont_list_span_c"> 回答问题，可获得 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answer'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span> <span class="integral_cont_list_span_r">今日已回答</span> </li>
              <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_answerpl_type']==1) {?>
        	<?php if ($_smarty_tpl->tpl_vars['statusList']->value['answerpl']) {?>
				<li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_ph"></i>评论回答</span> <span class="integral_cont_list_span_c"> 评论回答，可获得 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answerpl'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span> <span class="integral_cont_list_span_r"><a href="<?php echo smarty_function_url(array('m'=>'ask'),$_smarty_tpl);?>
#last-question" 
              target="_blank"  class="integral_cont_list_a">评论回答</a></span> </li>
			<?php } else { ?>
				<li> <span class="integral_cont_list_span"><i class="mb_con_icon mb_con_icon_ph"></i>评论回答</span> <span class="integral_cont_list_span_c"> 评论回答，可获得 <b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answerpl'];?>
</b><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span> <span class="integral_cont_list_span_r">今日已评论</span> </li>
            <?php }?>
        <?php }?>
       
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php }} ?>
