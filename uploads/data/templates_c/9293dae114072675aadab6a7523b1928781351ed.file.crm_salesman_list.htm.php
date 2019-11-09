<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:46:31
         compiled from "/www/fpwjob/uploads/app/template/admin/crm_salesman_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:7038258425dc51d579b35a6-31016844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9293dae114072675aadab6a7523b1928781351ed' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/crm_salesman_list.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7038258425dc51d579b35a6-31016844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'get_type' => 0,
    'userrows' => 0,
    'key' => 0,
    'v' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51d57a35df1_86109099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51d57a35df1_86109099')) {function content_5dc51d57a35df1_86109099($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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

<div id="info_div"  style="display:none;  ">
	<div class="" style=" margin-top:10px; "  >
		<form class="layui-form" action="index.php?m=crm_salesman_list&c=status" target="supportiframe" method="post" id="formstatus">
			<table cellspacing='1' cellpadding='1' class="admin_examine_table">
				<tr>
					<th width="120">设置在职/离职：</th>
					<td align="left">
						<div class="layui-form-item">
							<div class="layui-input-block">
								<input name="status" id="state1" value="1" title="在职" type="radio"/>
								<input name="status" id="state2" value="2" title="离职" type="radio"/>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan='2' align="center">
						<input type="submit"  value='确认' class="admin_examine_bth">
						<input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
					</td>
				</tr>
				<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				<input name="uid" value="0" type="hidden">
			</table>
		</form>
	</div>
</div>

<div class="infoboxp">
	
	<div class="admin_new_tip">
		<a href="javascript:;" class="admin_new_tip_close"></a>
		<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
		<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
		<div class="admin_new_tip_list_cont">
			<div class="admin_new_tip_list">该页面展示了CRM业务员 。</div>
			<div class="admin_new_tip_list">业务员设为离职后，该账号无法再登录后台。已分配待关怀的客户，重置为未分配状态。</div>
		</div>
	</div>

	<div class="admin_new_search_box">
		<form action="index.php" name="myform" method="get"> 
			<input name="m" value="crm_salesman_list" type="hidden"/>
  			<div class="admin_new_search_name">搜索类型：</div>
			
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

			<input type="text" value="" placeholder="请输入你要搜索的关键字" name='keyword'class="admin_new_text">
			<input type="submit" value="搜索" name='search'  class="admin_new_bth">
			<a href="index.php?m=admin_user&c=add" class="admin_new_cz_tj">+ 添加业务员</a> 
		</form>
	</div>  


<div class="clear"></div>  
	<div class="table-list">
		<div class="admin_table_border">
			<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
			<form action="index.php"  target="supportiframe" name="myform" method="get" id='myform'>
				<input name="m" value="crm_salesman_list" type="hidden"/>
				<table width="100%">
					<thead>
						<tr class="admin_table_top">
							<th align="center" style="width:5%;">
								<label for="chkall">
									<input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
								</label>
							</th>
							<th align="center" style="width:5%;"> 
								<?php if ($_GET['t']=="uid"&&$_GET['order']=="asc") {?> 
									<a href="index.php?m=user_member&order=desc&t=uid">用户ID<img src="images/sanj.jpg"/></a> 
								<?php } else { ?> 
									<a href="index.php?m=user_member&order=asc&t=uid">用户ID<img src="images/sanj2.jpg"/></a> 
								<?php }?>
							</th>

							<th align="left">姓名/用户名</th>
							<th align="left">待关怀客户</th>
							<th align="left">已关怀客户</th>
							<th align="left">待回访客户</th>
							<th align="left">签单数</th>
							<th align="left">签单金额</th>
							<th align="left">在职/离职</th>
 							<th class="admin_table_th_bg" >操作</th>
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
							<td align="center" width="5%;">
								<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" style="margin-left:5px;"/>
							</td>
							<td align="center" style="width:5%;" class="td1"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
							<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 / <?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
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
							<td align="left"><?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>在职<?php } else { ?>离职<?php }?></td>
							<td width="210">
							<div class="crm_cz_box">
								<a href="index.php?m=crm_salesman_list&c=assign_company&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="crm_cz " pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
" );" >分配客户</a>
								<a href="javascript:;" class="crm_cz check" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
" >设为离职</a>
								<a href="index.php?m=admin_user&c=add&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class=" crm_cz" >修改信息</a>
							</div>
								<a href="javascript:void(0);" class=" crm_cz" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['concernNum']>0) {?> onclick="shift('<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
');" <?php } else { ?> onclick="layer.msg('没有客户转移');" <?php }?> >转移客户</a>
								
								<a href="javascript:void(0);" class=" crm_cz" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" style="" <?php if ($_smarty_tpl->tpl_vars['v']->value['concernedNum']>0) {?> onclick="showConcern('<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
');" <?php } else { ?> onclick="layer.msg('尚未关怀客户');" <?php }?>>关怀记录</a>

								<a href="javascript:void(0);" class="crm_cz " pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" style="" <?php if ($_smarty_tpl->tpl_vars['v']->value['concernNum']+$_smarty_tpl->tpl_vars['v']->value['conernedNum']>0) {?> onclick="showCustomer('<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
');" <?php } else { ?> onclick="layer.msg('暂无分配客户');" <?php }?>> 客户列表</a>
							</td>
						</tr>
						<?php } ?>
						<tr>
							<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
							<td colspan="9" ><label for="chkAll2">全选</label></td>
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
function shift(uid, name)
{
  window.location = 'index.php?m=crm_salesman_list&c=shift_company&uid=' + uid;
}


function showConcern(uid, name)
{
  window.location = 'index.php?m=crm_concern&c=list_one&uid=' + uid + '&name=' + name;

  
}


function showCustomer(uid, name)
{
  window.location = 'index.php?m=crm_salesman_list&c=customer_list&uid=' + uid + '&name=' + name;
  
  
}

$(function(){
  
  $(".check").click(function(){
    $("input[name=pid]").val($(this).attr("pid"));
    var uid=$(this).attr("pid");
    var status=$(this).attr("status");
    $("#state"+status).attr("checked",true);

    layui.use(['form'],function(){
      var form = layui.form;
      form.render();
    });
    $("input[name=uid]").val(uid);
    $.get("index.php?m=user_member&c=lockinfo&uid="+uid,function(msg){
      $("#alertcontent").val($.trim(msg));
      $.layer({
        type : 1,
        title :'设置业务员在职/离职状态', 
        closeBtn : [0 , true],
        border : [10 , 0.3 , '#000', true],
        area : ['288px','180px'],
        page : {dom :"#info_div"}
      });
    });
  });
});

layui.use(['layer', 'form'], function(){
  var layer = layui.layer
  ,form = layui.form
  ,$ = layui.$;
});

<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
