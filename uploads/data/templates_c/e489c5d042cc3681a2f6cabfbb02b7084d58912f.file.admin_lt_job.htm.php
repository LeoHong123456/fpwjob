<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:57:24
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_lt_job.htm" */ ?>
<?php /*%%SmartyHeaderCode:18365924225e4c87f4c319e3-06869097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e489c5d042cc3681a2f6cabfbb02b7084d58912f' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_lt_job.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18365924225e4c87f4c319e3-06869097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'total' => 0,
    'rows' => 0,
    'key' => 0,
    'v' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c87f4cd0930_93818798',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c87f4cd0930_93818798')) {function content_5e4c87f4cd0930_93818798($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
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
<div id="status_div"  style="display:none; width: 390px; ">
	<div>
		<form class="layui-form" action="index.php?m=admin_lt_job&c=status" target="supportiframe" method="post" id="formstatus" >
			<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
     		<table cellspacing='1' cellpadding='1' class="admin_examine_table">
				<tr>
					<th width="80">审核操作：</th>
					<td align="left">
						<div class="layui-form-item">
							<div class="layui-input-block">
								<input name="status" id="status0" value="0" title="未审核" type="radio"/>
								<input name="status" id="status1" value="1" title="正常" type="radio"/>
								<input name="status" id="status3" value="3" title="未通过" type="radio"/>
							</div>
						</div>	
					</td>
				</tr>
				<tr>
					<th>审核说明：</th>
					<td><textarea id="alertcontent" name="statusbody" class="admin_explain_textarea"></textarea></td>
				</tr>
				<tr>
					<td colspan='2' align="center">
						<input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth" >
						<input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
					</td>
				</tr>
			</table>
			<input name="pid" value="0" type="hidden">
		</form>
	</div>
</div>
 
<div class="infoboxp">

	<div class="admin_new_tip">
		<a href="javascript:;" class="admin_new_tip_close"></a>
		<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
		<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
		<div class="admin_new_tip_list_cont">
			<div class="admin_new_tip_list">该页面展示了网站所有的猎头职位管理信息，可对猎头职位进行审核，删除操作。</div>
			<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
		</div>
	</div>

	<div class="clear"></div>

	<div class="admin_new_search_box"> 
		<form action="index.php" name="myform" method="get">
			<input name="m" value="admin_lt_job" type="hidden"/>
			<input type="hidden" name="status" value="<?php echo $_GET['status'];?>
"/>
			<input type="hidden" name="salary" value="<?php echo $_GET['salary'];?>
"/>
			<input type="hidden" name="ex" value="<?php echo $_GET['ex'];?>
"/>
			<div class="admin_new_search_name">搜索类型：</div>
			<div class="admin_Filter_text formselect"  did='dltname'>
				<input type="button" value="<?php if ($_GET['ltname']=='1'||$_GET['ltname']=='') {?>用户名<?php } elseif ($_GET['ltname']=='2') {?>职位名称<?php } elseif ($_GET['ltname']=='3') {?>公司名称<?php }?>" class="admin_Filter_but"  id="bltname">
				<input type="hidden" id='ltname' value="<?php if ($_GET['ltname']) {
echo $_GET['ltname'];
} else { ?>1<?php }?>" name='ltname'>
				<div class="admin_Filter_text_box" style="display:none" id='dltname'>
					<ul>
						<li><a href="javascript:void(0)" onClick="formselect('1','ltname','用户名')">用户名</a></li>           
						<li><a href="javascript:void(0)" onClick="formselect('2','ltname','职位名称')">职位名称</a></li>
						<li><a href="javascript:void(0)" onClick="formselect('3','ltname','公司名称')">公司名称</a></li>
					</ul>
				</div>
			</div>
			<input class="admin_Filter_search" type="text" name="keyword"  size="25">
			<input class="admin_Filter_bth" type="submit" name="news_search" value="检索"/>
		</form>
		<a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a>
		<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

	<div class="clear"></div> 
	
<div class="admin_statistics">
            数据统计：
		<em class="admin_statistics_s">总数：<span class="ajaxltjoball">0</span></em>
		<em class="admin_statistics_s">未审核：<span class="ltjobStatusNum1">0</span></em>
		<em class="admin_statistics_s">未通过：<span class="ltjobStatusNum2">0</span></em>
		搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
	</div>
	
	<div class="table-list">
		<div class="admin_table_border">
			<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
			<form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
				<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				<input name="m" value="admin_lt_job" type="hidden"/>
				<input name="c" value="del" type="hidden"/>
				<table width="100%">
					<thead>
						<tr class="admin_table_top">
							<th style="width:20px;">
								<label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label>
							</th>
							<th width="60"> <?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?> <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'admin_lt_job','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'admin_lt_job','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a> <?php }?></th>
							<th align="left">用户名</th>
							<th align="left" width="15%">职位名称</th>
							<th align="left" width="15%">公司名称</th>
							<th align="left">职位年薪</th>
							<th align="left">工作地点</th>
							<th>工作经验</th>
							<th>状态</th>
							<th>推荐</th>
							<th>操作</th>
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
								<td style="width:20px;"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
								<td class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
								<td  align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
								<td class="gd" align="left"> 
									<?php if ($_smarty_tpl->tpl_vars['v']->value['usertype']==3) {?> 
										<a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'jobshow','id'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"> 
									<?php } else { ?> 
										<a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'jobcomshow','id'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"> 
									<?php }?> 
										<?php echo $_smarty_tpl->tpl_vars['v']->value['job_name'];?>

										</a>
								</td>
								<td class="ud" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['com_name'];?>
</td>
								<td class="td" align="left">
									<?php if ($_smarty_tpl->tpl_vars['v']->value['minsalary']&&$_smarty_tpl->tpl_vars['v']->value['maxsalary']) {?>
										￥<?php echo $_smarty_tpl->tpl_vars['v']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['v']->value['maxsalary'];?>
万
									<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['minsalary']) {?>
										￥<?php echo $_smarty_tpl->tpl_vars['v']->value['minsalary'];?>
万以上
									<?php } else { ?>
										面议
									<?php }?>
								</td>
								<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['cityid'];?>
</td>
								<td ><?php echo $_smarty_tpl->tpl_vars['v']->value['exp'];?>
</td>
								<td> 
									<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?><span class="admin_com_Audited">已审核</span> 
									<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==0) {?><span class="admin_com_noAudited">未审核</span> 
									<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==3) {?><span class="admin_com_tg">未通过</span> 
									<?php }?> </td>
								<td id="rec<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['rec']=="1") {?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_lt_job&c=recommend','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','0','rec');"><img src="../config/ajax_img/doneico.gif"></a><?php } else { ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_lt_job&c=recommend','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','1','rec');"><img src="../config/ajax_img/errorico.gif"></a><?php }?></td>
								<td>
									<a href="javascript:void(0);" class="status admin_new_c_bth admin_new_c_bthsh" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">审核</a> 
									<?php if ($_smarty_tpl->tpl_vars['v']->value['usertype']==3) {?> 
										<a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'jobshow','id'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
" target="_blank" class="admin_new_c_bth admin_new_c_bth_yl"> 
									<?php } else { ?> 
										<a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'jobcomshow','id'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
" target="_blank" class="admin_new_c_bth admin_new_c_bth_yl"> 
									<?php }?> 预览</a> 
									<a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_lt_job&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a>
								</td>
							</tr>
						<?php } ?>
						<tr>
							<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
							<td colspan="11"><label for="chkAll2">全选</label>
							&nbsp;
							<input class="admin_button"  type="button"  name="delsub" value="删除所选" onClick="return really('del[]')" />
							&nbsp;&nbsp;
							<input class="admin_button"  type="button" name="delsub" value="批量审核" onClick="audall('1');" />
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
								<td colspan="9" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
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


	function audall(status){
		var codewebarr="";
		$(".check_all:checked").each(function(){  
			if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
		});
		if(codewebarr==""){
			parent.layer.msg('您还未选择任何信息！', 2, 8);return false;
		}else{
			$("input[name=pid]").val(codewebarr);
			status_div('猎头职位审核','390','240');
		}
	}
 
	$(function(){
		$(".status").click(function(){
			$("#status"+$(this).attr("status")).attr("checked","checked");
			 layui.use(['form'],function(){
				var form = layui.form;
				form.render();
			});
			$("input[name=pid]").val($(this).attr("pid"));
			var id=$(this).attr("pid");
			$.get("index.php?m=admin_lt_job&c=lockinfo&id="+id,function(msg){
				$("#alertcontent").val(msg);
				status_div('猎头职位审核','390','240');
			});
		});

	});

	$(document).ready(function(){
		$.get("index.php?m=admin_lt_job&c=ltjobNum", function(data) {
			var datas = eval('(' + data + ')');
			if(datas.ltjobAllNum) {
				$('.ajaxltjoball').html(datas.ltjobAllNum);
			}
			if(datas.ltjobStatusNum1) {
				$('.ltjobStatusNum1').html(datas.ltjobStatusNum1);
			}
			if(datas.ltjobStatusNum2) {
				$('.ltjobStatusNum2').html(datas.ltjobStatusNum2);
			}
		});
	});

<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
