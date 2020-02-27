<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-25 16:26:28
         compiled from "/www/fpwjob/uploads/app/template/wap/member/user/sxnews.htm" */ ?>
<?php /*%%SmartyHeaderCode:20655717115e54da34f1d7d6-55558135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da1021dea68820d1d134066f9960f9de76444ebf' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/member/user/sxnews.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20655717115e54da34f1d7d6-55558135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e54da35019837_52372810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e54da35019837_52372810')) {function content_5e54da35019837_52372810($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.picker.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.poppicker.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<div class="main_member_cot_box">
<div class="wap_member_comp_h1"><span>私信</span></div>
<?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>		
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>		
			<div class="com_member_hr">				
				<div class="com_member_hr_name"> 
					<a  class="wap_member_com_name  com_member_hr_cblue">管理员</a>
				</div>
						
				<div class="com_member_user_box">
					<div class="com_member_hr_tj">
						<div class="com_member_hr_p1">
						  <div class="com_member_hr_p1"><span class="member_c9">内容：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</div>
						</div>
					</div>
			
					<div class="com_member_hr_p1">
						<span class="member_c9">日期：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d %H:%M");?>
 </span>
					</div>
					<div class="com_member_hr_p5">状态：
					<?php if ($_smarty_tpl->tpl_vars['v']->value['remind_status']=='0') {?>
						<span class="wap_member_post_list_zt">未查看 </span>
					<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['remind_status']=='1') {?>
						<span class="wap_member_post_list_zt ap_member_post_list_zt_gq">已查看 </span>
					<?php }?>
				</div>
					
					
					
					<div class="com_member_hr_cz">
						<em class="user_size">
							<?php if ($_smarty_tpl->tpl_vars['v']->value['remind_status']=='0') {?>
						<a  class="sxnewsPicker" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">设置状态</a>
						<?php }?>
							<a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=delsxnews&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" class="yun_member_hr_bth">删除</a>
						</em> 
					</div> 
				</div> 
			</div>
		<?php } ?>
		
	<?php } else { ?> 
		
		<div class="wap_member_no">
			没有私信记录。
		</div> 
	
	<?php }?> 

</section>
<div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.picker.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.poppicker.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
var sxnewsData = [];
sxnewsData.push(
	{
		value: '0',
		text: '未查看'
	},
	{
		value: '1',
		text: '已查看'
	}
)
mui.init();
$(".sxnewsPicker").each(function(i,arr){
	var id=arr.dataset.id;
	var sxnewsPicker = new mui.PopPicker();
	sxnewsPicker.setData(sxnewsData);
	arr.addEventListener('tap', function(event) {
		sxnewsPicker.show(function(items) {
			$.post("index.php?c=sxnewsset",{id:id,remind_status:items[0].value},function(data){
				layermsg("设置成功！", 2,function(){location.reload(true);});
			})
		});
	}, false);
});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
