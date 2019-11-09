<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 18:24:48
         compiled from "/www/fpwjob/uploads/app/template/member/com/reward_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:2212989805dc5427039cf88-33672276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b44ccea6511ef894a12fa63ded9c6595fb509d5f' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/reward_list.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2212989805dc5427039cf88-33672276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'statis' => 0,
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc542704166f6_13022681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc542704166f6_13022681')) {function content_5dc542704166f6_13022681($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
	<div class="admin_mainbody"> 
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class=right_box>
			<div class=admincont_box>
            	<div class="yun_com_tit"><span class="yun_com_tit_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
管理</span></div>
				<div class="job_list_tit">
					<ul class="">
						<li <?php if ($_GET['c']=="integral") {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=integral"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
任务</a></li>
						<li <?php if ($_GET['c']=="integral_reduce") {?>  class="job_list_tit_cur"<?php }?> ><a href="index.php?c=integral_reduce">消费规则</a></li>
						<li <?php if ($_GET['c']=="reward_list") {?>  class="job_list_tit_cur"<?php }?> ><a href="index.php?c=reward_list"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换</a></li>
					</ul>
				</div>

				<div class="com_body">
					<div class="admin_new_tip mt20">
						<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
						
						<div class="admin_new_tip_list_cont">
							<div class="admin_new_tip_list">您还有<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
个<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</div>
						</div>      
					</div>

					<div id="job_checkbokid">
						<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
							<table class="com_table mt20"> 
								<tr>
									<th>商品名称</th>
									<th>消耗<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</th>
									<th>兑换数量</th>
									<th>兑换时间</th>
									<th>联系人</th>
									<th>状态</th>
									<th> 操作</th>
								</tr>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
									<tr>
										<td class="table_end"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
										<td class="table_end"><?php echo $_smarty_tpl->tpl_vars['v']->value['integral'];?>
</td>
										<td class="table_end"><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
(件)</td>
										<td class="table_end"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d %H:%M");?>
</td>
										<td class="table_end"><?php echo $_smarty_tpl->tpl_vars['v']->value['linkman'];?>
&nbsp;Tel:<?php echo $_smarty_tpl->tpl_vars['v']->value['linktel'];?>
</td>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['status']=="0") {?> 
											<td class="table_end"align="center"><span class="wate_verify">未审核</span> </td>
											<td class="table_end"align="center"><a href="javascript:void(0)" onclick="layer_del('确定要取消？', 'index.php?c=reward_list&act=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="com_bth cblue">取消</a></td>
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']=="1") {?> 
											<td class="table_end"align="center"> <span class="y_verify">已审核</span></td>
  										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']=="2") {?> 
											<td class="table_end"align="center"><span class="n_verify">未通过</span></td>
											<td class="table_end" align="center">
												<?php if ($_smarty_tpl->tpl_vars['v']->value['statusbody']) {?>
													<a href="javascript:;" onclick="show_msg('<?php echo $_smarty_tpl->tpl_vars['v']->value['statusbody'];?>
')"class="com_bth cblue">原因</a>
												<?php }?> 
											</td>
										<?php }?>
									</tr>
									<tr>
										<td colspan="7" style="padding-top:0px;">备注： <?php echo $_smarty_tpl->tpl_vars['v']->value['body'];?>
 <?php if ($_smarty_tpl->tpl_vars['v']->value['express']||$_smarty_tpl->tpl_vars['v']->value['expnum']) {?><span class="reward_wl">物流：<span class="reward_wl_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['express'];?>
</span><span class="reward_wl_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['expnum'];?>
</span></span><?php }?>
										</td>
										  </tr>
											<?php } ?> 
										  <tr>
										  <td colspan="7" class="table_end">
										  <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div> 
										  </td>
										  </tr>
										  </table>
											<div class="wxts_box">
									  <div class="wxts">温馨提示：</div>
										您已兑换（<span class="f60"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</span>）份礼品， 还有<span class="f60"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
。<a href="<?php echo smarty_function_url(array('m'=>'redeem'),$_smarty_tpl);?>
" class="fb_Com_xz"  target="_blank" style="text-align:center; line-height:25px;">我要兑换</a><br>
									</div>       		
            <?php } else { ?>
          <div class="msg_no"><p>您共有<span class="f60"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
，还没有在商城兑换礼品，快去商城兑换礼品吧！</p><a href="<?php echo smarty_function_url(array('m'=>'redeem'),$_smarty_tpl);?>
" target="_blank" class="com_msg_no_bth com_submit">我要兑换</a></div>
			</div> 
              <?php }?>
              
			</div>
		  </div>
		</div>
  </div>

</div>

<?php echo '<script'; ?>
>
function show_msg(msg){
	$("#msgs").html(msg);
	var layindex = $.layer({
		type : 1,
		title :'查看原因', 
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['400px','200px'],
		page : {dom :"#showmsg"}
	});
	$("#layindex").val(layindex);
}
<?php echo '</script'; ?>
>
<div id="showmsg"  style="display:none; width: 400px;"> 
	 <div class="admin_Operating_sh" style="padding:10px; ">
	<div class="admin_Operating_sh_h1" style="padding:5px;"><div style="height:80px;overflow:auto;" id="msgs"></div></div>
	<div class="admin_Operating_sub" style="margin-top:10px;"> 
	  &nbsp;&nbsp;<input type="button" onClick="layer.close($('#layindex').val());" class="cancel_btn" value='确认'></div>
	</div>  
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
