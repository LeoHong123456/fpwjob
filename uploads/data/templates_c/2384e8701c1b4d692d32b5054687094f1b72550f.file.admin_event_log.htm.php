<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:25:19
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_event_log.htm" */ ?>
<?php /*%%SmartyHeaderCode:14650071975dbd3d6f1ff412-70740404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2384e8701c1b4d692d32b5054687094f1b72550f' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_event_log.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14650071975dbd3d6f1ff412-70740404',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'rows' => 0,
    'v' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd3d6f2c9a30_88851885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd3d6f2c9a30_88851885')) {function content_5dbd3d6f2c9a30_88851885($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
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
	<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
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
	<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	
	<title>后台管理</title>

</head>

<body class="body_ifm">
	<div class="infoboxp">
		<div class="tabs_info">
			<ul>
				<li class="curr"><a href="index.php?m=admin_event_log">用户行为</a></li>
				<li><a href="index.php?m=statis_elog">访问统计</a></li>
			</ul>
		</div>
		<div class="admin_new_tip">
			<a href="javascript:;" class="admin_new_tip_close"></a>
			<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
			<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
			<div class="admin_new_tip_list_cont">
				<div class="admin_new_tip_list">该页面展示了网站用户的主要行为记录。</div>
				<div class="admin_new_tip_list">可输入关键字进行搜索，也可进行详细的高级搜索。</div>
			</div>
		</div>

		<div class="clear"></div>
		
		<div class="admin_new_search_box">

			<form action="index.php" name="myform" method="get" onSubmit="return cktimesave()">
				<input name="m" value="admin_event_log" type="hidden"/>
				<input name="utype" value="<?php echo $_GET['utype'];?>
" type="hidden"/>
				
				<div class="admin_new_search_name">搜索类型：</div>
				<div class="admin_Filter_text formselect" did="dtype">
					<input type="button" <?php if ($_GET['type']=='1'||$_GET['type']=='') {?> value="用户名" <?php }?> class="admin_Filter_but" id="btype">
					<input type="hidden" name="type" id="type" value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>"/>
					<div class="admin_Filter_text_box" style="display:none" id="dtype">
						<ul>
							<li><a href="javascript:void(0)" onClick="formselect('1','type','用户名')">用户名</a></li>
						</ul>  
					</div>
				</div>

				<input class="admin_Filter_search" type="text" name="keyword"  value="<?php echo $_GET['keyword'];?>
" size="25" style="float:left">
				<span class="admin_new_search_name">访问时间：</span>		
 				<input class="admin_Filter_search" type="text" id="time" name="time" value="<?php echo $_GET['time'];?>
"/>
				<?php echo '<script'; ?>
 type="text/javascript">
					layui.use(['laydate'], function(){var laydate = layui.laydate,$ = layui.$;laydate.render({elem: '#time',range:'~'});});
				<?php echo '</script'; ?>
>

				<input  class="admin_Filter_bth"  type="submit" name="qysearch" value="搜索"/>
				<a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();" class="admin_new_search_gj">高级搜索</a>
				
				<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</form>	  
		</div>
		<div class="clear"></div>
		
		<div class="table-list">
			<div class="admin_table_border">
				<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
				<form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
					<input name="m" value="admin_event_log" type="hidden"/>
					<input name="c" value="del" type="hidden"/>
					
					<table width="100%">
						<thead>
							<tr class="admin_table_top">
								<th style="width:20px;">
									<label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label>
								</th>
								<?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?>
									<th>
										<a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'admin_event_log','untype'=>'order,t'),$_smarty_tpl);?>
">
											编号<img src="images/sanj.jpg"/>
										</a>
									</th>
								<?php } else { ?>
									<th>
										<a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'admin_event_log','untype'=>'order,t'),$_smarty_tpl);?>
">
											编号<img src="images/sanj2.jpg"/>
										</a>
									</th>
								<?php }?>

								<th align="left">用户名</th>
								<th align="left">浏览页面</th>
								<th align="">滞留时间</th>
								<th align="left">来源页面</th>
								<th align="left">访问时间</th>
								<th align="left">离开时间</th>
								<th align="left">行为结果</th>
								<th class="admin_table_th_bg">操作</th>
							</tr>
						</thead>

						<tbody>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
									<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
									<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
									<td align="left">
										<?php if ($_smarty_tpl->tpl_vars['v']->value['opera']==10) {?>基本信息
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==11) {?>基本信息（WAP）

										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==12) {?>账号认证
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==13) {?>账号认证（WAP）

										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==21) {?>新建简历
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==22) {?>新建简历（WAP）
 
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==31) {?>发布职位
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==32) {?>修改职位
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==33) {?>兼职发布
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==34) {?>兼职修改

										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==35) {?>发布职位（WAP）
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==36) {?>修改职位（WAP）
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==37) {?>兼职发布（WAP）
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==38) {?>兼职修改（WAP）
										
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==41) {?>充值积分
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==42) {?>套餐会员
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==43) {?>时间会员
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==44) {?>增值服务
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==45) {?>充值积分（WAP）
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==46) {?>套餐会员（WAP）
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==47) {?>时间会员（WAP）
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==48) {?>增值服务（WAP）

 										<?php }?>
									</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['seconds'];?>
</td>
									<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['refer'];?>
</td>
									<td align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['timein'],"%Y-%m-%d %H:%M:%S");?>
</td>
									<td align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['timeout'],"%Y-%m-%d %H:%M:%S");?>
</td>

									<td align="left">
										<?php if ($_smarty_tpl->tpl_vars['v']->value['opera']<12) {?>
											
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
												更新信息成功
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>
												更新信息失败
											<?php } else { ?>
												未操作
											<?php }?>
										
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']<14) {?>
											
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==10) {?>
												<?php if ($_smarty_tpl->tpl_vars['v']->value['usertype']==1) {?>上传身份证
												<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['usertype']==2) {?>上传营业执照
												<?php }?>
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==11) {?>手机绑定成功
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==12) {?>邮箱认证发送成功
											<?php } else { ?>未操作
											<?php }?>
										
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']<23) {?>
											
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
												新建简历成功
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>
												新建简历失败
											<?php } else { ?>
												未添加
											<?php }?>
										
										 
																				
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==31||$_smarty_tpl->tpl_vars['v']->value['opera']==35) {?>
											
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
												发布职位成功
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>
												发布职位失败
											<?php } else { ?>
												未发布
											<?php }?>

										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==32||$_smarty_tpl->tpl_vars['v']->value['opera']==36) {?>
											
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
												修改职位成功
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>
												修改职位失败
											<?php } else { ?>
												未修改
											<?php }?>

										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==33||$_smarty_tpl->tpl_vars['v']->value['opera']==37) {?>
											
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
												发布兼职成功
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>
												发布兼职失败
											<?php } else { ?>
												未发布
											<?php }?>

										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==34||$_smarty_tpl->tpl_vars['v']->value['opera']==38) {?>
											
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
												修改兼职成功
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>
												修改兼职失败
											<?php } else { ?>
												未修改
											<?php }?>

										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']==41||$_smarty_tpl->tpl_vars['v']->value['opera']==45) {?>
											
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
												充值成功
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>
												充值失败
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==3) {?>
												<?php if ($_smarty_tpl->tpl_vars['v']->value['order_state']==3) {?>
													充值下单，等待管理员确认<?php if ($_smarty_tpl->tpl_vars['v']->value['order_type_n']) {?>（<?php echo $_smarty_tpl->tpl_vars['v']->value['order_type_n'];?>
）<?php }?>
												<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['order_state']==1) {?>
													充值下单，未付款<?php if ($_smarty_tpl->tpl_vars['v']->value['order_type_n']) {?>（<?php echo $_smarty_tpl->tpl_vars['v']->value['order_type_n'];?>
）<?php }?>
												<?php }?>
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==4) {?>
												充值下单，已取消订单
											<?php } else { ?>
												未充值
											<?php }?>


										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['opera']>41&&$_smarty_tpl->tpl_vars['v']->value['opera']<49&&$_smarty_tpl->tpl_vars['v']->value['opera']!=45) {?>
											
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
												购买成功
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>
												购买失败
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==3) {?>
												<?php if ($_smarty_tpl->tpl_vars['v']->value['order_state']==3) {?>
													购买下单，等待管理员确认<?php if ($_smarty_tpl->tpl_vars['v']->value['order_type_n']) {?>（<?php echo $_smarty_tpl->tpl_vars['v']->value['order_type_n'];?>
）<?php }?>
												<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['order_state']==1) {?>
													购买下单，未付款<?php if ($_smarty_tpl->tpl_vars['v']->value['order_type_n']) {?>（<?php echo $_smarty_tpl->tpl_vars['v']->value['order_type_n'];?>
）<?php }?>
												<?php }?>
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==4) {?>
												购买下单，已取消订单
											<?php } else { ?>
												未购买
											<?php }?>
											
										<?php }?>
										 
									</td>

  									<td><a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_event_log&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
								</tr>
							<?php } ?>
							<tr>
								<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
								<td colspan="9">
									<label for="chkAll2">全选</label>&nbsp;
									<input class="admin_button" type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/>
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
									<td colspan="7" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
								</tr>
							<?php }?>
						</tbody>
					</table>
					<input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">

				</form>
			</div>
		</div>
	</div>
</body>
</html><?php }} ?>
