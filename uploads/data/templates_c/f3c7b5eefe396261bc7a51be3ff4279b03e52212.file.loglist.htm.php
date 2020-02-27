<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-17 12:05:17
         compiled from "/www/fpwjob/uploads/app/template/member/com/loglist.htm" */ ?>
<?php /*%%SmartyHeaderCode:4237544835e4a10fd36a776-42822985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3c7b5eefe396261bc7a51be3ff4279b03e52212' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/loglist.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4237544835e4a10fd36a776-42822985',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statis' => 0,
    'config' => 0,
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4a10fd398292_29081588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4a10fd398292_29081588')) {function content_5e4a10fd398292_29081588($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
	<div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class=right_box>
			<div class=admincont_box>
				<div class="com_tit"><span class="com_tit_span">赏金管理</span></div>
				
				<div class="com_body">
					<div class="clear"></div>
					
					<div class="packloglost_box"> 
						我的钱包：<span class="packloglost_box_money">￥<?php echo $_smarty_tpl->tpl_vars['statis']->value['packpay'];?>
</span>&nbsp;&nbsp;&nbsp;		   
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
</font> 元</span> 
									</li>
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
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
