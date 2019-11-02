<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:31:20
         compiled from "/www/fpwjob/uploads/app/template/admin/crm_statis.htm" */ ?>
<?php /*%%SmartyHeaderCode:16870418045dbd3ed8bfc988-37643391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd41d9cea38bf207449f8cc39284d0bcaeadb4124' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/crm_statis.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16870418045dbd3ed8bfc988-37643391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'get_type' => 0,
    'radio_time' => 0,
    'userrows' => 0,
    'key' => 0,
    'v' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
    'defaultTime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd3ed8c9b034_80185376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd3ed8c9b034_80185376')) {function content_5dbd3ed8c9b034_80185376($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
	<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />

	<title>后台管理</title>
</head>

<body class="body_ifm">
	
	<form action="index.php?m=admin_message&c=show" method="post" id='checkform' >
		<input type="hidden" name="userid" id="userid" value="">
		<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
	</form>
	 
	<div class="infoboxp">
		
		<div class="admin_new_tip">
			<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
			<div class="admin_new_tip_list_cont">
				<div class="admin_new_tip_list">该页面展示了CRM业务员业务数据 。</div>
			</div>
		</div>
		
	

		<div class="admin_new_search_box">
			
			<form action="index.php" name="myform" method="get" class="layui-form"> 
				
				<input name="m" value="crm_statis" type="hidden"/>
				
				<div class="layui-form-item">

  					<label class="layui-form-label">搜索类型</label>

					<div class="admin_Filter_text formselect" did='dkeytype'>
			
						<input type="button" <?php if ($_smarty_tpl->tpl_vars['get_type']->value['keytype']==''||$_smarty_tpl->tpl_vars['get_type']->value['keytype']=='1') {?> value="用户名"  <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['keytype']=='2') {?> value="业务员姓名"  <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['keytype']=='3') {?> value="业务员ID" <?php }?> class="admin_Filter_but" id="bkeytype">
			
						<input type="hidden" name="type" id="keytype" <?php if ($_smarty_tpl->tpl_vars['get_type']->value['keytype']==''||$_smarty_tpl->tpl_vars['get_type']->value['keytype']=='1') {?> value="1"  <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['keytype']=='2') {?> value="2" <?php } elseif ($_smarty_tpl->tpl_vars['get_type']->value['keytype']=='3') {?> value="3" <?php }?>/>
			
						<div class="admin_Filter_text_box" style="display:none" id="dkeytype">
							<ul> 
								<li><a href="javascript:void(0)" onClick="formselect('1','keytype','用户名')">用户名</a></li>
								<li><a href="javascript:void(0)" onClick="formselect('2','keytype','业务员姓名')">业务员姓名</a></li>
								<li><a href="javascript:void(0)" onClick="formselect('3','keytype','业务员ID')">业务员ID</a></li>
							</ul>
						</div>
					</div>

					<input type="text" value="" placeholder="请输入你要搜索的关键字" name='keyword'class="layui-input" style="width:200px;">
				
				</div>

 				<div class="layui-form-item">
					
					<label class="layui-form-label">查询范围</label>
					
					<div class="layui-input-inline">
						<input type="text" class="layui-input" id="time" name="time" style="width:300px;">
					</div>
 
					<div class="layui-input-inline">
						<input name="radio_time" value="0" title="今天" type="radio" lay-filter="radio_time"
		        <?php if ($_smarty_tpl->tpl_vars['radio_time']->value=='0') {?>
		        checked
		        <?php }?>
		        />
		        <input name="radio_time" value="1" title="昨天" type="radio" lay-filter="radio_time"
		        <?php if ($_smarty_tpl->tpl_vars['radio_time']->value=='1') {?>
		        checked
		        <?php }?>
		        />
		        <input name="radio_time" value="7" title="7天内" type="radio" lay-filter="radio_time"
		        <?php if ($_smarty_tpl->tpl_vars['radio_time']->value=='7') {?>
		        checked
		        <?php }?>
		        />
		        <input name="radio_time" value="30" title="30天内" type="radio" lay-filter="radio_time"
		        <?php if ($_smarty_tpl->tpl_vars['radio_time']->value=='30'||$_smarty_tpl->tpl_vars['radio_time']->value=='-2') {?>
		        checked
		        <?php }?>
		        />
		        <input name="radio_time" value="90" title="90天内" type="radio" lay-filter="radio_time"
		        <?php if ($_smarty_tpl->tpl_vars['radio_time']->value=='90') {?>
		        checked
		        <?php }?>
		        />
		        <input name="radio_time" value="-1" title="全部" type="radio" lay-filter="radio_time"
		        <?php if ($_smarty_tpl->tpl_vars['radio_time']->value=='-1') {?>
		        checked
		        <?php }?>
		        />
						<input type="hidden" name="isAllTime" id="isAllTime" value="0"/>
					</div>

					<div class="layui-input-inline">
						<button class="layui-btn" lay-filter="query" >点击查询</button>
					</div>

				</div>
  			</form>
			<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 		</div>  

		<div class="clear"></div> 
		
		<div class="table-list">
			<div class="admin_table_border">
				<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
				<form action="index.php"  target="supportiframe" name="myform" method="get" id='myform' class="">
					<input name="m" value="user_member" type="hidden"/>
					<input name="c" value="del" type="hidden"/>
					
					<table width="100%">
						<thead>
							<tr class="admin_table_top">
								<th style="width:20px;">
									<label for="chkall"> <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/> </label>
								</th>

								<th align="left"> 
									<?php if ($_GET['t']=="uid"&&$_GET['order']=="desc") {?> 
										<a href="index.php?m=crm_statis&order=asc&t=uid">用户ID<img src="images/sanj2.jpg"/></a> 
									<?php } else { ?> 
										<a href="index.php?m=crm_statis&order=desc&t=uid">用户ID<img src="images/sanj.jpg"/></a> 
									<?php }?>
								</th>

								<th align="left">姓名/用户名</th>
								<th align="left">客户总数</th>
								<th align="left">待关怀客户</th>
								<th align="left">已关怀客户</th>
								<th align="left">待回访客户</th>
								<th align="left">签单数</th>
								<th align="left">
									签单金额（元）
								</th>
								<th class="admin_table_th_bg">业务详情</th>
							</tr>
						</thead>

						<tbody>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userrows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<tr <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
									<td width="20">
										<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" style="margin-left:5px;"/>
									</td>
									<td align="left" class="td1" style=" width:60px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
									<td align="left">
										<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

										<div class="mt5"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</div>
									</td>
									<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['concernNum']+$_smarty_tpl->tpl_vars['v']->value['concernedNum'];?>
</td>
									<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['concernNum'];?>
</td>
									<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['concernedNum'];?>
</td>
									<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['returnVisitNum'];?>
</td>
									<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['orderNum'];?>
</td>
									<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['orderPrice'];?>
</td>
									<td width="120">
										<div class="admin_new_bth_c">
											<a href="index.php?m=crm_statis&c=performance&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="admin_new_c_bth admin_new_c_bthsh" style="width: 60px;margin-bottom: 5px;">查看详情</a>
										</div>
									</td>
								</tr>
							<?php } ?>

							<tr>
								<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
								<td colspan="12" ><label for="chkAll2">全选</label></td>
								 
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
									<td colspan="10" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
								</tr>
							<?php }?>
						</tbody>
					</table>

					<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				</form>
			</div>
		</div>
	</div>

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

<?php echo '<script'; ?>
>
function getDateTimeStr(timestamp){
	var d = new Date(timestamp);   
	var h = d.getHours(),
		m = d.getMinutes(),
		s = d.getSeconds(),
		month = d.getMonth() + 1,
		day = d.getDate();

	h = h < 10 ? '0' + h : h;
	m = m < 10 ? '0' + m : m;
	s = s < 10 ? '0' + s : s;
	
	month = month < 10 ? '0' + month : month;
	day = day < 10 ? '0' + day : day;
	
	return (d.getFullYear()) + "-" + month + "-" + day + " " + h + ":" + m + ":" + s;
}

function getToday(){
  var today = new Date();
  
  today.setHours(0);
  today.setMinutes(0);
  today.setSeconds(0);
  today.setMilliseconds(0);
  
  return today;
}

layui.use(['form', 'laydate'], function(){
	var laydate = layui.laydate,
		form = layui.form,
		$ = layui.$;

		laydate.render({
			elem : '#time',
			type : 'datetime',
			range : '~',
			value : '<?php echo $_smarty_tpl->tpl_vars['defaultTime']->value;?>
'
		});

	form.on('radio(radio_time)', function(data){
		if(data.value == -1){
			$('#isAllTime').val(1);
			$("#time").val('');
		}else{
			$('#isAllTime').val(0);

			var today = getToday();
			var diff = 1000 * 60 * 60 * 24 * data.value;
			var day = new Date(today - diff);
			var str = getDateTimeStr(Date.parse(day)) + ' ~ ' + getDateTimeStr(Date.parse(new Date()));
      
			$("#time").val(str);
		}        
	});
});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
