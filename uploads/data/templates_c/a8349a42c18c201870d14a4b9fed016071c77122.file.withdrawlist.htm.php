<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:58:39
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/withdrawlist.htm" */ ?>
<?php /*%%SmartyHeaderCode:20781331175e4c883fc98a75-52071801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8349a42c18c201870d14a4b9fed016071c77122' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/withdrawlist.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20781331175e4c883fc98a75-52071801',
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
  'unifunc' => 'content_5e4c883fd08517_69145664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c883fd08517_69145664')) {function content_5e4c883fd08517_69145664($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
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
  <div class="report_uaer_list fl">
		<ul>
			<li> <a href="index.php?c=paylog">充值记录</a> </li>
			<li> <a href="index.php?c=consume">消费记录</a></li>
			<li  class="report_uaer_list_cur"><a href="index.php?c=jobpack&act=withdrawlist" >提现记录</a></li>
			<li><a href="index.php?c=jobpack&act=changelist" >转换记录</a></li>				
		</ul>
	</div>
        
   <div class="resume_box_list"style="padding-right:30px;">
     
            <div id="gms_showclew"></div>
         
                     <div class="clear"></div>
      <div  class="resume_Prompt_box"><div  class="resume_Prompt"><i class="resume_Prompt_icon"></i>提现说明：单笔提现金额必须达到<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_withdraw_minmoney'];?>
元<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_withdraw_num']>0) {?>，单次提现收取每笔<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_withdraw_pound'];?>
%手续费<?php }
if ($_smarty_tpl->tpl_vars['config']->value['sy_withdraw_money']>0) {?>，<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_withdraw_money'];?>
元以内及时到账，超过<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_withdraw_money'];?>
元需审核。<?php }?></div></div>
              <div class="clear"></div> 
            <div class="com_body">
  
           <div class="withdraw_tx_box">
          <span class="withdraw_tx_box_d"> 可提现金额：</span> <span class="withdraw_tx_box_n">￥<?php echo $_smarty_tpl->tpl_vars['statis']->value['packpay'];?>
</span>  元

		  <span class="withdraw_tx_box_d"> 已冻结金额：</span> <span class="withdraw_tx_box_n">￥<?php echo $_smarty_tpl->tpl_vars['statis']->value['freeze'];?>
</span>  元
           </div>
        
          
          <div class="clear"></div>
          <div class="withdraw_tx_list">
          <table width="100%" cellpadding="1" cellspacing="0">
        <tr><th>真实姓名</th><th>提现金额</th><th>手续费</th><th>提现时间</th><th>状态</th><th>原因</th> </tr>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value['real_name'];?>
</td><td>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td><td>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['pound_price'];?>
</td><td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['time'],"%Y-%m-%d %H:%M");?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_state_n'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_remark'];?>
</td> </tr>
		 <?php } ?>
		 <tr>
                    <td colspan="8"class="lt_m_table_end"><div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div> </td>  </tr>
          </table>
          
           </div>
        </div>

               
            </div>
        </div>
    </div>
</div>


           </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/rewardpay.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
