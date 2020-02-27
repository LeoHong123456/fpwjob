<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:59:04
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/loglist.htm" */ ?>
<?php /*%%SmartyHeaderCode:20854831445e4c885857eda3-56773244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c9f234f9be0b734233b546ce972da8b706a35b5' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/loglist.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20854831445e4c885857eda3-56773244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lietou_style' => 0,
    'config' => 0,
    'statis' => 0,
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c88585a25f2_12486661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c88585a25f2_12486661')) {function content_5e4c88585a25f2_12486661($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/jianli.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/guanli.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/account.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<div class="m_content">
  <div class="wrap"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

         <div class="m_inner_youb fr">
           <div class="lt_m_tit"><span class="lt_m_tit_s">赏金收益</span></div>
    <div class="resume_box_list">
          <div  class="resume_Prompt_box"><div  class="resume_Prompt"><i class="resume_Prompt_icon"></i>安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！</div></div>
       <div class="com_body">
          <div class="clear"></div>
          <div class="packloglost_box"> 
		  我的钱包：<span class="packloglost_box_money">￥<?php echo $_smarty_tpl->tpl_vars['statis']->value['packpay'];?>
</span> 
		  冻结金额：<span class="packloglost_box_money">￥<?php echo $_smarty_tpl->tpl_vars['statis']->value['freeze'];?>
</span> 
		  <a href="index.php?c=jobpack&act=withdraw" class="packloglost_box_money_bth">提现</a>
		  <a href="index.php?c=jobpack&act=change" class="packloglost_box_money_bth">转换成账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</a>
		  </div>
			<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
		  <div class="packloglost_box_l_b">
            <div class="packloglost_box_tit">赏金收益列表</div>
            <ul class="packloglost_box_list">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
              <li>
                <div class="packloglost_box_yt">微信转发职位：<?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
 </div>
                <div class="packloglost_box_time">时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['time'],"%Y-%m-%d %H:%M:%S");?>
 </div>
                <span class="packloglost_box_list_n"><font color="#f00">+<?php echo $_smarty_tpl->tpl_vars['v']->value['packmoney'];?>
</font> 元</span> </li>
             <?php } ?>
            </ul>
          </div>
          <div class="clear"></div>
          <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
          <div class="clear"></div>
          <?php } else { ?>
          <div class="msg_no">您还没有赏金收益。</div>
          <?php }?>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
