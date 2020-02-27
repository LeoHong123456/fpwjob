<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-17 12:05:43
         compiled from "/www/fpwjob/uploads/app/template/member/com/ad.htm" */ ?>
<?php /*%%SmartyHeaderCode:13992802685e4a111790dce1-19518125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98645761225f5da5d85a43967f655fc8bee78897' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/ad.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13992802685e4a111790dce1-19518125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'v' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4a111792c034_60839889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4a111792c034_60839889')) {function content_5e4a111792c034_60839889($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
	<div class="admin_mainbody">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		
		<div class=right_box>
			<div id="grow_freedom" class="grow_mod_wrap my_freedom">
				<div class=admincont_box>
					<div class="com_tit"><span class="com_tit_span"> 招聘广告服务</span></div>
					
					<div class="job_list_tit">
						<ul class="">
							<li <?php if ($_GET['c']=="ad") {?>  class="job_list_tit_cur"<?php }?> >
								<a href="index.php?c=ad">购买广告位</a>
							</li> 
							<li <?php if ($_GET['c']=="ad_order") {?>class="job_list_tit_cur"<?php }?>>
								<a href="index.php?c=ad_order">广告订单</a>
							</li>
						</ul>
					</div>

					<div class="com_body">
						
						<div class="clear"></div>

						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<div id="m2" class="ad_buy_list">
							<div class="ad_buy_list_cont">
								<div class="ad_buy_list_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['class_name'];?>
</div>
								<div class="ad_buy_list_p"><?php echo $_smarty_tpl->tpl_vars['v']->value['remark'];?>
</div>
								<div class="ad_buy_list_pic">
									<?php if ($_smarty_tpl->tpl_vars['v']->value['hrefn']) {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['hrefn'];?>
" target="_blank" class="ad_buy_list_pic_bth">查看广告位置</a>
									<?php }?>
								</div>
							</div>

							<div class="ad_buy_list_bot">
								<span class="ad_buy_list_cont_s">
									<span class="ad_but_btn_n"><?php echo $_smarty_tpl->tpl_vars['v']->value['integral_buy'];?>
</span> 
									<?php if ($_smarty_tpl->tpl_vars['v']->value['btype']==2) {?>元<?php } else {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
}?>/月
								</span>
								<a href="index.php?c=ad&act=adinfo&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="ad_buy_list_buy">购买</a>
							</div>
						</div>
						<?php } ?>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
