<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:58:34
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/paylog.htm" */ ?>
<?php /*%%SmartyHeaderCode:19081712145e4c883a316c87-37351350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d36ec69bd09df8f6f63b8cb93b802e1eea06c7a' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/paylog.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19081712145e4c883a316c87-37351350',
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
  'unifunc' => 'content_5e4c883a373998_40507496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c883a373998_40507496')) {function content_5e4c883a373998_40507496($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
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
 					<li class="report_uaer_list_cur"><a href="index.php?c=paylog" >充值记录</a></li>
					<li><a href="index.php?c=consume" >消费记录</a></li> 
					<li><a href="index.php?c=jobpack&act=withdrawlist" >提现记录</a></li>
					<li><a href="index.php?c=jobpack&act=changelist" >转换记录</a></li>					
				</ul>
			</div>

			<div class="search_con mt20 fl">
				<div class="Available_h1">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</div>
				<div class="Available_bal"> 
					<span class="Available_blod"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral_format'];?>
</span>
					<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					<a class="Available_bth" href="index.php?c=pay&type=integral"></a> 
				</div>
        <div class="lt_m_table">
          <table>
                <tbody>
                
				<?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
                 <tr>   
                                   
                 <th scope="col" ><span>充值单号</span></th>
                  <th scope="col"><span>充值金额</span></th>
                  <th scope="col" ><span>支付类型</span></th>
                  <th scope="col" ><span>支付形式</span></th>
                 <th scope="col" ><span>状态</span></th>
                 	<th scope="col" width="150" ><span>备注</span></th>
					<th scope="col" ><span>时间</span></th>
                  <th scope="col">操作</th>
                </tr>
                
				
				<?php }?>

				<div class="subsc_con recharge_list fl"> 
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                     <tr>   
                                   
                 <td ><?php echo $_smarty_tpl->tpl_vars['v']->value['order_id'];?>
</td>
                 <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['order_price'];?>
</td>
                  <td align="center"><?php if ($_smarty_tpl->tpl_vars['v']->value['type']==1) {?>购买会员
								<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']=='2') {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
充值
								<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']=='3') {?>银行转帐
								<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']=='4') {?>金额充值
								<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']=='5') {?>购买增值包
								<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']=='6') {?>课程订购
								<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']=='12') {?>职位推荐
								<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']=='18') {?>刷新高级职位
								<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']=='19') {?>下载简历
								<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']=='22') {?>发布职位
								<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']=='23') {?>面试邀请
								<?php }?> </td>
                 <td align="center"><?php if ($_smarty_tpl->tpl_vars['v']->value['zf_type']) {
echo $_smarty_tpl->tpl_vars['v']->value['zf_type'];
} else { ?>手动<?php }?></td>
                 <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['sname'];?>
</td> <td><?php if ($_smarty_tpl->tpl_vars['v']->value['order_remark']) {?>
								<em class="used_for"><?php echo $_smarty_tpl->tpl_vars['v']->value['order_remark'];?>
 </em>
							<?php }?> </td>
				<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['order_time'],'%Y-%m-%d %H:%M');?>
</td>
                <td align="center"><?php if ($_smarty_tpl->tpl_vars['v']->value['order_state']=='1'&&$_smarty_tpl->tpl_vars['v']->value['order_type']!='bank') {?>
									<a href="index.php?c=payment&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >付款</a> <span class="del_span">|</span>
									<a href="javascript:void(0)" onclick="layer_del('确定要取消？', 'index.php?c=paylog&act=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');">取消</a>
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['v']->value['sname'];?>

								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['v']->value['order_state']=='1') {
}?></td>
              </tr>
                
                
						
					<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>  <tr>
                    <td colspan="8"class="lt_m_table_end">
						<div class="member_no_content"> 您还没有充值记录！</div>  </td>  </tr>
					<?php } ?> 
				
				<tr>
                    <td colspan="8"class="lt_m_table_end"><div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div> </td>  </tr>
				
                </tbody></table>
                </div>
                
                
                
				<div class="recharge_tips fl">
					<div class="wxts">温馨提示：</div>
					1.购买会员：请仔细阅读会员功能列表，再选择适合您的类型！<br>
					2.<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换：可直接用账户余额兑换您所需<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
<br>
					3.购买短信：由本站支付各项短信费用，暂无需购买 
				</div>
			</div></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
   
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
