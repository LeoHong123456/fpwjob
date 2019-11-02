<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:56:04
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_trust.htm" */ ?>
<?php /*%%SmartyHeaderCode:695387275dbd44a4036043-45363701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '826b8d8c3247e9e13e609eac7ac54b5ab81fe8ca' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_trust.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '695387275dbd44a4036043-45363701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'total' => 0,
    'get_info' => 0,
    'rows' => 0,
    'key' => 0,
    'v' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd44a40af693_46030290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd44a40af693_46030290')) {function content_5dbd44a40af693_46030290($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>

<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<title>后台管理</title>
</head>

<body class="body_ifm">
	<div id="status_div"  style="display:none;">
		<div class="" >
			<form class="layui-form" action="index.php?m=admin_trust&c=status" target="supportiframe" method="post" id="formstatus">
				<table cellspacing='1' cellpadding='1' class="admin_examine_table" style="margin-top:20px;">
					<tr>
						<th width="80">审核操作：</th>
						<td align="left">
							<div class="layui-form-item">
								<div class="layui-input-block">
									<input name="status" id="status0" value="0" title="未审核" type="radio"/>
									<input name="status" id="status1" value="1" title="接受" type="radio"/>
									<input name="status" id="status2" value="2" title="未接受" type="radio"/>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<th>审核说明：</th>
						<td align="left"><div class="admin_examine_trust"> 设定“未接受”时，将会退还金额。</div></td>
					</tr>
					<tr>
						<td colspan='2' align="center">
							<input type="submit"  value='确认' class="admin_examine_bth">
							<input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
						</td>
					</tr>
				</table>
				<input name="pid" value="0" type="hidden" >
				<input type="hidden" name="pytoken" id="pytoken"  value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
			</form>
		</div>
	</div>

	<div class="infoboxp">

		<div class="admin_new_tip">
			<a href="javascript:;" class="admin_new_tip_close"></a>
			<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
			<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
			<div class="admin_new_tip_list_cont">
				<div class="admin_new_tip_list">该页面展示了网站所有的委托简历管理信息，可对委托简历进行审核删除操作。</div>
				<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
			</div>
		</div>

		<div class="clear"></div>

		<div class="admin_new_search_box"> 
			<form action="index.php" name="myform" method="get">
				<input name="m" value="admin_trust" type="hidden"/>
				<div class="admin_new_search_name">检索类型：</div>
				<div class="admin_Filter_text formselect" did='dtype'>
					<input type="button" value="<?php if ($_GET['type']=='2') {?>简历名<?php } else { ?>用户名<?php }?>" class="admin_Filter_but" id="btype">
					<input type="hidden" name="type" id="type" value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>"/>
					<div class="admin_Filter_text_box" style="display:none" id='dtype'>
						<ul>
							<li><a href="javascript:void(0)" onClick="formselect('1','type','用户名')">用户名</a></li>
							<li><a href="javascript:void(0)" onClick="formselect('2','type','简历名')">简历名</a></li>
						</ul>
					</div>
				</div>
				<input type="text" placeholder="输入你要搜索的关键字" value="<?php echo $_GET['keyword'];?>
" name='keyword' class="admin_new_text">
				<input type="submit" name='search'  value="搜索" class="admin_new_bth">
				<a  href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a>
				<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</form>
		</div>

		<div class="clear"></div> 

		<div class="admin_statistics">
			总数：<span class="ajaxresumeall">0</span>；
			未审核：<span class="ajaxresumestatus1">0</span>；
			未接受：<span class="ajaxresumestatus2">0</span>；
 			搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
  		</div>

		<div class="table-list">
			<div class="admin_table_border">
				<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
				<form action="index.php" name="myform" id='myform' method="get" target="supportiframe">
					
					<input name="m" value="admin_trust" type="hidden"/>
					<input name="c" value="del" type="hidden"/>
					<input type="hidden" name="pytoken"  value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
					
					<table width="100%">
						<thead>
							<tr class="admin_table_top">
								<th style="width:40px;">
									<label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label>
								</th>
								<th>
									<?php if ($_smarty_tpl->tpl_vars['get_info']->value['order']=='uid'&&$_smarty_tpl->tpl_vars['get_info']->value['desc']=='asc') {?>
										<a href="index.php?m=admin_trust&order=uid&desc=desc" >UID<img src="images/sanj.jpg"></a>
									<?php } else { ?>
										<a href="index.php?m=admin_trust&order=uid&desc=asc" >UID<img src="images/sanj2.jpg"></a>
									<?php }?>
								</th>
								<th align="left">用户名</th>
								<th align="left">简历名</th>
								<th>价格(元)</th>
								<th>
									<?php if ($_smarty_tpl->tpl_vars['get_info']->value['order']=='add_time'&&$_smarty_tpl->tpl_vars['get_info']->value['desc']=='asc') {?>
										<a href="index.php?m=admin_trust&order=add_time&desc=desc" >申请时间<img src="images/sanj.jpg"></a>
									<?php } else { ?>
										<a href="index.php?m=admin_trust&order=add_time&desc=asc" >申请时间<img src="images/sanj2.jpg"></a>
									<?php }?>
								</th>
								<th>状态</th>
								<th class="admin_table_th_bg">操作</th>
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
							<tr align="center" <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
								<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
								<td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</span></td>
								<td class="ud" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
								<td class="ud" align="left">
									<?php if ($_smarty_tpl->tpl_vars['v']->value['name']) {
echo $_smarty_tpl->tpl_vars['v']->value['name'];
} else { ?><font color="#FF0000">简历已删除</font><?php }?>
								</td>
								<td class="gd" width="60"><span class="amount-pay-out"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span></td>
								<td class="td" width="200"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y-%m-%d");?>
</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?><span class="admin_com_Audited">已接受</span>
									<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==0) {?><span class="admin_com_noAudited">未审核</span>
									<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?><span class="admin_com_tg">未接受</span>
									<?php }?>
								</td>
								<td> 
									<?php if ($_smarty_tpl->tpl_vars['v']->value['name']) {?> 
										<a class="admin_new_c_bth admin_new_c_bth_yl" target="_blank" href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.eid`','look'=>'admin'),$_smarty_tpl);?>
">预览</a>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
											<a class="admin_new_c_bth "  href="index.php?m=admin_trust&c=recom&eid=<?php echo $_smarty_tpl->tpl_vars['v']->value['eid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">推荐</a> 
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==0) {?> 
											<a href="javascript:void(0);" class="admin_new_c_bth admin_new_c_bthsh status"  status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >审核</a>
										<?php }?>
									<?php }?>
									
									<?php if ($_smarty_tpl->tpl_vars['v']->value['status']!=0) {?> 
										<a href="javascript:void(0)"  onclick="layer_del('确定要删除？', 'index.php?m=admin_trust&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"class="admin_new_c_bth admin_new_c_bth_sc">删除</a>
									<?php }?> 
								</td>
							</tr>
							<?php } ?>
							<tr >
								<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
								<td colspan="7" >
									<label for="chkAll2">全选</label>&nbsp;
									<input class="admin_button" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
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
									<td colspan="5" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
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
 type="text/javascript">
		layui.use(['layer', 'form'], function(){
			var layer = layui.layer
			,form = layui.form
			,$ = layui.$;
		});

		$(function(){
			$(".status").click(function(){ 
				$("input[name=pid]").val($(this).attr("pid"));
				var pid=$(this).attr("pid");
				var status=$(this).attr("status");
				$("#status"+status).attr("checked",true);
				layui.use(['form'],function(){
					var form = layui.form;
					form.render();
				});
				$("input[name=pid]").val(pid);  	
				status_div('委托简历管理','390','230');
			});
		});  
		$(document).ready(function(){
			$.get("index.php?m=admin_trust&c=trustNum", function(data) {
					var datas = eval('(' + data + ')');
					if(datas.resumeAllNum) {
						$('.ajaxresumeall').html(datas.resumeAllNum);
					}
					if(datas.resumeStatusNum1) {
						$('.ajaxresumestatus1').html(datas.resumeStatusNum1);
					}
					if(datas.resumeStatusNum2) {
						$('.ajaxresumestatus2').html(datas.resumeStatusNum2);
					}
					 
				});
			});
	<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
