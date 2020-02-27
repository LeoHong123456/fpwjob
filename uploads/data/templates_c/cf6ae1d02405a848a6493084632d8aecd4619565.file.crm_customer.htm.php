<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-22 09:00:27
         compiled from "/www/fpwjob/uploads/app/template/admin/crm_customer.htm" */ ?>
<?php /*%%SmartyHeaderCode:1985042615e507d2bb775f2-35397929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf6ae1d02405a848a6493084632d8aecd4619565' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/crm_customer.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1985042615e507d2bb775f2-35397929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'aname' => 0,
    'returnVisitNum' => 0,
    'pytoken' => 0,
    'rows' => 0,
    'key' => 0,
    'v' => 0,
    'list' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e507d2bc29774_82546853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e507d2bc29774_82546853')) {function content_5e507d2bc29774_82546853($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="./js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  DD_belatedPNG.fix('.png,.admin_infoboxp_tj,');
<?php echo '</script'; ?>
>
<![endif]-->

<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/show_pub.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>

<title>后台管理</title>
<style>
.admin_new_c_bth{
	width:50px !important;
}
</style>
</head>

<body class="body_ifm">
	<div class="infoboxp"> 
		<div class="admin_new_tip">
			<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
			<div class="admin_new_tip_list_cont">
				<?php if ($_GET['return_visit']==1) {?>
				<div class="admin_new_tip_list">该页面展示了业务员【<?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
】所有的待回访客户信息。</div>
				<?php } else { ?>
				<div class="admin_new_tip_list">该页面展示了业务员【<?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
】所有的客户信息，可对会员客户进行关怀以及放弃关怀操作。</div>
				<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['returnVisitNum']->value>0) {?>
				<div class="admin_new_tip_list" style="color:red;">
					您有<?php echo $_smarty_tpl->tpl_vars['returnVisitNum']->value;?>
个客户待回访！
					<a href="index.php?m=crm_customer&return_visit=1" class="layui-btn layui-btn-mini">查看详情</a>
				</div>
				<?php }?>
			</div>
		</div>
		
		<div class="clear"></div>

		<div class="admin_new_search_box">
			<div class="admin_new_search_name">搜索类型：</div>
			<form action="index.php" name="myform" method="get" >
				<input type="hidden" name="m" value="crm_customer"/>
				<input type="hidden" name="status" value="<?php echo $_GET['status'];?>
"/>
				<input type="hidden" name="rec" value="<?php echo $_GET['rec'];?>
"/>
				<input type="hidden" name="time" value="<?php echo $_GET['time'];?>
"/>
				<input type="hidden" name="rating" value="<?php echo $_GET['rating'];?>
"/>
				
				<div class="admin_Filter_text formselect" did="dcom_type"> 
					
					<input type="button" <?php if ($_GET['type']=='1'||$_GET['type']=='') {?> value="企业名称" <?php } elseif ($_GET['type']=='2') {?> value="用户名称" <?php } elseif ($_GET['type']=='3') {?> value="联系人" <?php } elseif ($_GET['type']=='4') {?> value="联系电话" <?php } elseif ($_GET['type']=='5') {?> value="用户邮箱" <?php } elseif ($_GET['type']=='6') {?> value="用户ID" <?php }?> class="admin_new_select_text" id="bcom_type">
  					
					<input type="hidden" name="type" id="com_type" value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>"/><div class="admin_Filter_text_box" style="display:none" id="dcom_type">
					<ul>
						<li><a href="javascript:void(0)" onClick="formselect('1','com_type','企业名称')">企业名称</a></li>
						<li><a href="javascript:void(0)" onClick="formselect('2','com_type','用户名称')">用户名称</a></li>	
						<li><a href="javascript:void(0)" onClick="formselect('3','com_type','联系人')">联系人</a></li>	
						<li><a href="javascript:void(0)" onClick="formselect('4','com_type','联系电话')">联系电话</a></li>	
						<li><a href="javascript:void(0)" onClick="formselect('5','com_type','用户邮箱')">用户邮箱</a></li>
						<li><a href="javascript:void(0)" onClick="formselect('6','com_type','用户ID')">用户ID</a></li>
					</ul>  
				</div>
			</div>

			<input type="text" placeholder="输入你要搜索的关键字" name="keyword" class="admin_new_text">
			<input type="submit" name='news_search' value="搜索" class="admin_new_bth"/>
			
			<a  href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"  class="admin_new_search_gj">高级搜索</a>
			<a href="index.php?m=crm_customer&c=add" class="admin_new_cz_tj">+ 添加客户</a>
		</form>

		<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

	<div class="clear"></div>  
		
	<div class="table-list" style="color:#898989">
		<div class="admin_table_border">
			<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
			<form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
				<input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				<input name="m" value="crm_customer" type="hidden"/>
				<input name="c" value="del" type="hidden"/>
				
				<table width="100%">
					<thead>
						<tr class="admin_table_top">
							
							<th style="width:20px;">
								<label for="chkall">
									<input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
								</label>
 
							<th> 
								<?php if ($_GET['t']=="uid"&&$_GET['order']=="asc") {?> 
									<a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'uid','m'=>'crm_customer','untype'=>'order,t'),$_smarty_tpl);?>
">用户ID<img src="images/sanj.jpg"/></a>
								<?php } else { ?> 
									<a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'uid','m'=>'crm_customer','untype'=>'order,t'),$_smarty_tpl);?>
">用户ID<img src="images/sanj2.jpg"/></a> 
								<?php }?> 
							</th>

							<th align="left">用户/企业名称</th>

							<th>联系人</th>
							<th>联系电话</th>
							<th>联系邮箱</th>
							<th align="left">会员等级/到期时间</th>
							<th align="left">会员操作</th>

							<th>关怀状态</th>

							<?php if ($_GET['return_visit']==1) {?>
							<th>待回访时间</th>
							<?php }?>

 							<th >操作</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<tr align="center" <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
								
								<td>
									<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" email="<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
" moblie="<?php echo $_smarty_tpl->tpl_vars['v']->value['telphone'];?>
" style="margin-left:5px;"/>
 								</td>
								
								<td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</span></td>
								
								<td align="left">
									<div class="">
										<a href="index.php?m=crm_customer&c=Imitate&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a>
									</div>
									<div class="mt5">
										<a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['uid']),$_smarty_tpl);?>
" target="_blank" class="admin_com_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
									</div>
								</td>

								<td><?php echo $_smarty_tpl->tpl_vars['v']->value['linkman'];?>
</td>

								<td><?php echo $_smarty_tpl->tpl_vars['v']->value['linktel'];?>
</td>

								<td><?php echo $_smarty_tpl->tpl_vars['v']->value['linkmail'];?>
</td>

								<td align="left">
									<?php if ($_smarty_tpl->tpl_vars['v']->value['vip_etime']<time()&&$_smarty_tpl->tpl_vars['v']->value['vip_time']!=0) {?>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['vip_done']==0) {?>
											过期会员
										<?php }?>
									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['v']->value['rating_name'];?>

									<?php }?>
									
									<?php if ($_smarty_tpl->tpl_vars['v']->value['vip_etime']) {?>
										<div class="mt5"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['vip_etime'],"%Y-%m-%d");?>
</div>
									<?php }
echo $_smarty_tpl->tpl_vars['list']->value['uid'];?>

								</td>

								<td align="left">
									<a href="javascript:;" onClick="set_rating('<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
')">
										<span class="crm_customer_xg_icon">
											<?php if ($_smarty_tpl->tpl_vars['v']->value['rating']==$_smarty_tpl->tpl_vars['config']->value['com_rating']) {?>
												[开通]
											<?php } else { ?>
												[升级]
											<?php }?>
										</span>
									</a>
								</td>
								
								<td>
									<?php if ($_smarty_tpl->tpl_vars['v']->value['crm_status']==0) {?>
										尚未关怀
									<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['crm_status']==1) {?>
										等待客户反馈
									<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['crm_status']==2) {?>
										已付费
									<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['crm_status']==3) {?>
										拒绝付费
									<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['crm_status']==4) {?>
										需要再回访
									<?php }?>
								</td>
								
								<?php if ($_GET['return_visit']==1) {?>
								<td>
									<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['next_time'],"%Y-%m-%d  %H:%M:%S");?>

								</td>
								<?php }?>

								<td>
									
									<div class="admin_new_bth_c"> 
										<a href="index.php?m=crm_concern&c=add&comid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="admin_new_c_bth admin_new_c_bthsh" >关怀</a> 
									</div>
									

									<?php if ($_smarty_tpl->tpl_vars['v']->value['crm_status']==2) {?>
									<div class="admin_new_bth_c"> 
										<a href="javascript:void(0)" onclick="layer.msg('客户已付费');" class="admin_new_c_bth admin_new_c_bth_sc" >放弃</a> 
									</div>
									<?php } else { ?>
									<div class="admin_new_bth_c"> 
										<a href="javascript:void(0)"  onclick="layer_del('确定要放弃？', 'index.php?m=crm_customer&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc" >放弃</a> 
									</div>
									<?php }?>
									
									<?php if ($_GET['return_visit']==1) {?>
									<div class="admin_new_bth_c"> 
										<a href="javascript:void(0)"  onclick="layer_del('确定要取消回访提醒？', 'index.php?m=crm_customer&c=delreturn&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">
											取消回访
										</a> 
									</div>
									<?php }?>
								</td>
							</tr>

						<?php } ?>
          
						<tr>
							<td align="center">
								<label for="chkall2"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' class="checkbox_stars"/></label>
							</td>
							<td colspan="16" >
								<label for="chkAll2">全选</label>
							</td>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['config']->value['sy_listnum']) {?>
							<tr>
								<?php if ($_smarty_tpl->tpl_vars['pagenum']->value==1) {?>
									<td colspan="3"> 从 1 到 <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
								<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value>1&&$_smarty_tpl->tpl_vars['pagenum']->value<$_smarty_tpl->tpl_vars['pages']->value) {?>
									<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['pagenum']->value*$_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
								<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value==$_smarty_tpl->tpl_vars['pages']->value) {?>
									<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
								<?php }?>
								<td colspan="14" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
							</tr>
						<?php }?>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
 
<?php echo '<script'; ?>
>

	function set_rating(uid,name){
		layer.iframe(
			'index.php?m=crm_customer&c=getstatis&uid='+uid,
			'客户['+name+']套餐设置',
			['800px','550px'],
			'auto',
			{
				maxmin:true
			}
		);
	}
<?php echo '</script'; ?>
>
 </body>
</html><?php }} ?>
