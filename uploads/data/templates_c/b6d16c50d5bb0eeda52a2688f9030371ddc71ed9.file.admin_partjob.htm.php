<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-16 16:39:57
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_partjob.htm" */ ?>
<?php /*%%SmartyHeaderCode:10413838355e48ffdde60e08-42085290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6d16c50d5bb0eeda52a2688f9030371ddc71ed9' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_partjob.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10413838355e48ffdde60e08-42085290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'ccname' => 0,
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
  'unifunc' => 'content_5e48ffddede8e6_64529543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e48ffddede8e6_64529543')) {function content_5e48ffddede8e6_64529543($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
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
"><?php echo '</script'; ?>
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
<div id="infobox2" style="display:none;">
	<div class="admin_com_t_box"> 
		<form action="index.php?m=admin_partjob&c=ctime" target="supportiframe" method="post" id="formstatus">
			<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
			<div class="admin_com_smbox_list">
				<span class="admin_com_smbox_span">延长时间：</span>
				<input class="admin_com_smbox_text" value="" name="endtime" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"> 
				<span class="admin_com_smbox_list_s">天</span>   
			</div>
			<div class="admin_com_smbox_opt">
				<input type="submit" onclick="loadlayer();" value='确认'class="admin_examine_bth">
				<input type="button"  onClick="layer.closeAll();"  class="admin_examine_bth_qx" value='取消'>
			</div>
			<input name="jobid" value="0" type="hidden">
		</form> 
	</div>
</div>
<div id="infobox6"  style="display:none;">
	<div class="admin_com_t_box"> 
		<form action="index.php?m=admin_partjob&c=recommend" target="supportiframe" method="post" id="formstatus">
			<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
			<input type="hidden" name="codearr"> 
            <div class=" admin_com_smbox_list_pd">
				<span class="admin_com_smbox_span">推荐天数：</span>
				<input class="admin_com_smbox_text" value="" name="addday" \ onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')">
				<span class="admin_com_smbox_list_s">天</span>    
			</div>
			<div class="edatediv" style="display:none">
				<span class="admin_com_smbox_span">当前结束日期：</span>
				<span class="admin_com_smbox_list_s edate" style="color:#f60"></span>
			</div>
			<div class="admin_com_smbox_qx_box"> 如需取消推荐职位请单击 <input type="checkbox" name="s" value="1"> 点击确认即可</div>
			
			<div class="clear"></div>
			
			<div class="admin_com_smbox_opt admin_com_smbox_opt_mt">
				<input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth">
				<input type="button" onClick="layer.closeAll();"  class="admin_examine_bth_qx" value='取消'>
			</div>
			<input name="pid" value="0" type="hidden">
			<input name="eid" value="0" type="hidden">
		</form> 
	</div>
</div> 

<div id="status_div"  style="display:none; width: 380px; "> 
	<form class="layui-form" action="index.php?m=admin_partjob&c=status" target="supportiframe" method="post" id="formstatus">
		<input type="hidden" id="pytoken"name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
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
				<td>  
					<textarea id="alertcontent" name="statusbody"class="admin_explain_textarea"></textarea>
				</td>
			</tr> 
			<tr>
				<td colspan='2' align="center"> 
					<input name="pid" value="0" type="hidden">
					<input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth"> 
					<input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'> 
				</td>
			</tr>
		</table>
	</form> 
</div>

<div class="infoboxp">

	<div class="tabs_info">
		<ul>
			<li><a href="index.php?m=admin_company_job&uid=<?php echo $_GET['uid'];?>
">全职职位</a></li>
			<li class="curr"><a href="index.php?m=admin_partjob&uid=<?php echo $_GET['uid'];?>
">兼职职位</a></li>
			<li><a href="index.php?m=admin_jobpack&uid=<?php echo $_GET['uid'];?>
">赏金职位</a></li>
		</ul>
	</div>
	
	<div class="admin_new_tip">
		<a href="javascript:;" class="admin_new_tip_close"></a>
		<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
		<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
		<div class="admin_new_tip_list_cont">
			<?php if ($_GET['uid']!='') {?>
				<div class="admin_new_tip_list">该页面展示了网站企业：<font color="#f00">【<?php echo $_smarty_tpl->tpl_vars['ccname']->value;?>
】</font> 的兼职招聘信息，可对兼职招聘进行编辑修改操作。</div>
			<?php } else { ?>
				<div class="admin_new_tip_list">该页面展示了网站所有的兼职招聘信息，可对兼职招聘进行编辑修改操作。</div>
			<?php }?> 			
			<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
		</div>
	</div>
	<div class="clear"></div>

	<div class="admin_new_search_box">
		<form action="index.php" name="myform" method="get" >
			<input type="hidden" name="m" value="admin_partjob"/>
			<input type="hidden" name="state" value="<?php echo $_GET['state'];?>
"/>
			<input type="hidden" name="job_type" value="<?php echo $_GET['job_type'];?>
"/>
			<input type="hidden" name="jtype" value="<?php echo $_GET['jtype'];?>
"/>
			<input type="hidden" name="salary" value="<?php echo $_GET['salary'];?>
"/>
			<div class="admin_new_search_name">搜索类型：</div>

			<div class="admin_Filter_text formselect"  did='dtype'>
				<input type="button" value="<?php if ($_GET['type']=='1') {?>公司名称<?php } else { ?>职位名称<?php }?>" class="admin_new_select_text"  id="btype"> 
				<input type="hidden" id='type' value="<?php echo $_GET['type'];?>
" name='type'>
				<div class="admin_Filter_text_box" style="display:none" id='dtype'>
					<ul>
						<li><a href="javascript:void(0)" onClick="formselect('1','type','公司名称')">公司名称</a></li>
						<li><a href="javascript:void(0)" onClick="formselect('2','type','职位名称')">职位名称</a></li> 
					</ul>  
				</div>
			</div>
			<input type="text" placeholder="输入你要搜索的关键字" name="keyword" class="admin_new_text">
			<input type="submit" name='news_search' value="搜索" class="admin_new_bth"> 
			<a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"  class="admin_new_search_gj">高级搜索</a>
		</form>
		<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

	<div class="clear"></div>
	
	<div class="admin_statistics">
            数据统计：
		<?php if ($_GET['uid']!='') {?>
			<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
		<?php } else { ?>
			<em class="admin_statistics_s">总数：<span class="ajaxpartall">0</span></em>
			<em class="admin_statistics_s">未审核：<span class="partStatusNum1">0</span></em>
			<em class="admin_statistics_s">未通过：<span class="partStatusNum2">0</span></em>
			<em class="admin_statistics_s">已过期：<span class="partStatusNum3">0</span></em>
			搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
		<?php }?>
	</div>

	<div class="clear"></div>

	<div class="table-list">
		<div class="admin_table_border">
		<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
		<form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
			<input name="m" value="admin_partjob" type="hidden"/>
			<input name="c" value="del" type="hidden"/>
			<table width="100%">
				<thead>
					<tr class="admin_table_top">
						<th><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
						<?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?>
							<th><a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'admin_partjob','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a></th>
						<?php } else { ?>
							<th><a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'admin_partjob','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a></th>
						<?php }?>
						<th width="210" align="left">职位/公司</th> 
						<th>工作类型</th>
						<th>招聘人数</th>
						<th>结算类型</th>
						<th>薪水</th>
						<th>更新时间</th>
						<th>结束日期</th>
						<th>报名人数</th>
						<th>推荐</th>
						<th>审核</th>
						<th width="">操作</th>
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
				<tr align="center"  <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
					<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
					<td class="td1" style="text-align:center;width:50px;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
					<td class="ud" align="left" width="210">
						<a href="<?php echo smarty_function_url(array('m'=>'part','c'=>'show','id'=>'`$v.id`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a><br/>
						<a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$v.uid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['com_name'];?>
</a>
					</td> 
					<td class="td" align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
</td>
					<td class="td" align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['number'];?>
人</td>
					<td class="td" align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['billing_cycle'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['salary'];
echo $_smarty_tpl->tpl_vars['v']->value['salary_type'];?>
</td>
					<td class="td" align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['lastupdate'],"%Y-%m-%d");?>
</td>
					<td class="td" align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['edatetxt'];?>
</td>
					<td class="td" align="center">
						<?php if ($_smarty_tpl->tpl_vars['v']->value['applynum']) {?>
							<?php echo $_smarty_tpl->tpl_vars['v']->value['applynum'];?>
人<br>
							<a href="index.php?m=admin_comlog&c=partapply&jobid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_cz_sc">查看报名</a>
						<?php } else { ?>
							暂无报名
						<?php }?>
					</td>
					<td id="rec<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
						<?php if ($_smarty_tpl->tpl_vars['v']->value['rec_time']>time()) {?>
							<a href="javascript:void(0);" class="rec" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" tid="<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_day'];?>
" edate="<?php echo $_smarty_tpl->tpl_vars['v']->value['recdate'];?>
" eid="<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_time'];?>
">
								<img src="../config/ajax_img/doneico.gif" alt="职位推荐剩余<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_day'];?>
天" title="职位推荐剩余<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_day'];?>
天">
							</a>
						<?php } else { ?>
							<a href="javascript:void(0);" class="rec" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" edate="<?php echo $_smarty_tpl->tpl_vars['v']->value['recdate'];?>
" tid="<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_day'];?>
" eid="<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_time'];?>
">
								<img src="../config/ajax_img/errorico.gif" alt="职位推荐剩余<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_day'];?>
天" title="职位推荐剩余<?php echo $_smarty_tpl->tpl_vars['v']->value['rec_day'];?>
天">
							</a>
						<?php }?>          
					</td>
					<td>
						<?php if (($_smarty_tpl->tpl_vars['v']->value['edate']<time()&&$_smarty_tpl->tpl_vars['v']->value['edate']>'0')||$_smarty_tpl->tpl_vars['v']->value['state']==2) {?>
							<span class="admin_com_Lock">已过期</span>
						<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['state']==1) {?>
							<span class="admin_com_Audited">已审核</span>
						<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['state']==0) {?>
							<span class="admin_com_noAudited">未审核</span>
						<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['state']==3) {?>
							<span class="admin_com_tg">未通过</span>
						<?php }?>
					</td>
					<td >
						<a href="javascript:;" class="admin_new_c_bth admin_new_c_bthsh status" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" status='<?php echo $_smarty_tpl->tpl_vars['v']->value['state'];?>
'>审核</a>
						<a href="index.php?m=admin_partjob&c=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_new_c_bth ">修改</a> 
						<a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_partjob&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a>
					</td>
				</tr>
				<?php } ?>
				<tr>
					<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
					<td colspan="12" >
						<label for="chkAll2">全选</label>
						<input class="admin_button" type="button" name="delsub" value="审核" onClick="audall('1');" />
						<input class="admin_button" type="button" name="delsub" value="延期" onClick="audall2('0');" />
						<input class="admin_button" type="button" name="delsub" value="刷新" onClick="Refresh();" />
						<input class="admin_button" type="button" name="delsub" value="推荐" onClick="recommend();" />
						<input class="admin_button" type="button" name="delsub" value="删除" onClick="return really('del[]')" />
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
						<td colspan="10" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
					</tr>
				<?php }?>
				</tbody>
			</table>
			<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
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
		parent.layer.msg("您还未选择任何信息！",2,8);return false;
	}else{
		$("input[name=pid]").val(codewebarr);
		$("#alertcontent").val('');
		$("input[name=status]").attr("checked",false);
		add_class('批量审核','380','230','#status_div','');
	}
}
$(function(){
	$(".status").click(function(){
		var id=$(this).attr("pid");
		$("input[name=pid]").val($(this).attr("pid"));
 		var status=$(this).attr("status");
		$("#status"+status).attr("checked",true);
		layui.use(['form'],function(){
		var form = layui.form;
		form.render();
		});
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=admin_partjob&c=lockinfo",{id:id,pytoken:pytoken},function(msg){
			$("#alertcontent").val(msg);
			add_class('兼职审核','380','230','#status_div','');
		});
	});
	$(".rec").click(function(){
		$("input[name=pid]").val($(this).attr("pid"));
		$("input[name=eid]").val($(this).attr("eid"));
		var edate=$(this).attr("edate");
		if($(this).attr("tid")>0){
			$("#surplus_recommend").html($(this).attr("tid")+"天+");
			$("#surplus_recommend").show();
		}
		$(".edatediv").hide();
		if(edate){
			$(".edate").html(edate);
			$(".edatediv").show();
			add_class('职位推荐','290','250','#infobox6','');
		}else{
			add_class('职位推荐','290','220','#infobox6','');
		} 
		
	});
});
function Refresh(){ 
	var codewebarr="";
	$(".check_all:checked").each(function(){  
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg("请选择要刷新的职位！",2,8);return false;
	}else{
		$.post("index.php?m=admin_partjob&c=refresh",{ids:codewebarr,pytoken:$('#pytoken').val()},function(data){
			parent.layer.msg("刷新成功！",2,9,function(){location.reload();});
		})
	}
}
function recommend(){ 
	var codearr="";
	$(".check_all:checked").each(function(){  
		if(codearr==""){codearr=$(this).val();}else{codearr=codearr+","+$(this).val();}
	});
	if(codearr==""){
	    parent.layer.msg("请选择要推荐的职位！",2,8);return false;
	}else{
	    $("input[name=codearr]").val(codearr);
	    add_class('职位批量推荐','290','220','#infobox6','');
	}
}
function audall2(status){
	var codewebarr="";
	$(".check_all:checked").each(function(){  
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg("您还未选择任何信息！",2,8);	return false;
	}else{
		$("input[name=jobid]").val(codewebarr);
		add_class('批量延期','290','180','#infobox2','');
	}
}
$(document).ready(function(){
	$.get("index.php?m=admin_partjob&c=partNum", function(data) {
		var datas = eval('(' + data + ')');
		if(datas.partAllNum) {
			$('.ajaxpartall').html(datas.partAllNum);
		}
		if(datas.partStatusNum1) {
			$('.partStatusNum1').html(datas.partStatusNum1);
		}
		if(datas.partStatusNum2) {
			$('.partStatusNum2').html(datas.partStatusNum2);
		}
		if(datas.partStatusNum3) {
			$('.partStatusNum3').html(datas.partStatusNum3);
		}
	});
});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
