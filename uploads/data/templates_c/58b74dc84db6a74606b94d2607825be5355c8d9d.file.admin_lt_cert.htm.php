<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:57:00
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_lt_cert.htm" */ ?>
<?php /*%%SmartyHeaderCode:19354027055e4c87dc4b00e3-20522888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58b74dc84db6a74606b94d2607825be5355c8d9d' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_lt_cert.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19354027055e4c87dc4b00e3-20522888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'total' => 0,
    'pytoken' => 0,
    'rows' => 0,
    'key' => 0,
    'v' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c87dc52b681_42996616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c87dc52b681_42996616')) {function content_5e4c87dc52b681_42996616($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
if (!is_callable('smarty_function_formatpicurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.formatpicurl.php';
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
<div class="infoboxp">
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了网站所有的公司猎头认证管理信息，可对猎头认证进行审核删除操作。</div>
<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
</div>
</div>

<div class="clear"></div>

<div class="admin_new_search_box"> 
  <form action="index.php" name="myform" method="get"> 
      <input name="m" value="admin_lt_cert" type="hidden"/>
	  <input type="hidden" name="status" value="<?php echo $_GET['status'];?>
"/>
	<div class="admin_new_search_name">搜索类型：</div>
  <input class="admin_Filter_search" placeholder="输入你要搜索的关键字" type="text" name="keyword"  size="25"/>
      <input class="admin_Filter_bth"  type="submit" name="search" value="检索"/> 
	<a  href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a></form>


  
  <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
<div class="clear"></div> 

	<div class="admin_statistics">
            数据统计：
		<em class="admin_statistics_s">总数：<span class="ajaxltcertall">0</span></em>
		<em class="admin_statistics_s">未审核：<span class="ltcertStatusNum1">0</span></em>
		<em class="admin_statistics_s">未通过：<span class="ltcertStatusNum2">0</span></em>
		搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
	</div>


  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
     <form action="index.php?m=<?php echo $_GET['m'];?>
&c=del" name="myform" method="post" target="supportiframe" id='myform'>
    <input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      <table width="100%">
        <thead>
          <tr class="admin_table_top">
            <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
            <th> <?php if ($_GET['t']=="uid"&&$_GET['order']=="asc") {?> <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'uid','m'=>'admin_lt_cert','untype'=>'order,t'),$_smarty_tpl);?>
">UID<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'uid','m'=>'admin_lt_cert','untype'=>'order,t'),$_smarty_tpl);?>
">UID<img src="images/sanj2.jpg"/></a> <?php }?></th>
            <th align="left">猎头名称</th>
            <th>查看</th>
            <th> <?php if ($_GET['t']=="ctime"&&$_GET['order']=="asc") {?> <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'ctime','m'=>'admin_lt_cert','untype'=>'order,t'),$_smarty_tpl);?>
">申请时间<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'ctime','m'=>'admin_lt_cert','untype'=>'order,t'),$_smarty_tpl);?>
">申请时间<img src="images/sanj2.jpg"/></a> <?php }?></th>
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
        <tr align="center"<?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
          <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
          <td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</span></td>
          <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['realname'];?>
</td>
          <td class="gd" width="100"><a href="javascript:void(0)"  onclick="preview('<?php echo smarty_function_formatpicurl(array('path'=>$_smarty_tpl->tpl_vars['v']->value['check']),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" class="admin_cz_sc admin_n_img"></a></td>
          <td class="td" width="400"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d");?>
</td>
          <td><?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?><span class="admin_com_Audited">已审核</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==0) {?><span class="admin_com_noAudited">未审核</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?><span  class="admin_com_tg">未通过</font><?php }?></td>
          <td><a href="javascript:void(0);" class="status admin_new_c_bth admin_new_c_bthsh" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
"  url="<?php echo smarty_function_formatpicurl(array('path'=>$_smarty_tpl->tpl_vars['v']->value['check']),$_smarty_tpl);?>
">审核</a> 
           <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=<?php echo $_GET['m'];?>
&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
        </tr>
        <?php } ?>
        <tr >
          <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
          <td colspan="6">
          <label for="chkAll2">全选</label>&nbsp;
          <input class="admin_button"  type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
          &nbsp;&nbsp;
          <input class="admin_button" type="button" name="delsub" value="批量审核" onClick="audall();" /></td>
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
				<td colspan="4" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
			</tr>
		<?php }?>
        </tbody>
      </table>
    </form>
    </div>
  </div>
</div>

<div id="preview"  style="display:none;width:390px;">
  <div style="height:290px;overflow:auto;width:390px;" >

	 
      <form class="layui-form" action="index.php?m=admin_lt_cert&c=status" target="supportiframe" method="post" id="formstatus">
      <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
           <table cellspacing='1' cellpadding='1' class="admin_examine_table">
          <tr>
        <th>认证执照：</th>
        <td align="left">  <div class="job_box_div"style="float:left;border:1px solid #eee;"></div> <a target="_blank" href="" id='preview_url' style="line-height:70px; padding-left:10px;">查看原图</a></td> 
        </tr>
          <tr>
            <th width="80">审核操作：</th>
            <td>
          
			  	<div class="layui-form-item">
                 <div class="layui-input-block">
                     
                      	<input name="status" id="status0" value="0" title="待审核" type="radio"/>
						<input name="status" id="status1" value="1" title="正常" type="radio"/>
						<input name="status" id="status2" value="2" title="未通过" type="radio"/>
                     
                  </div>
             </div>	
              </td>
          </tr>
          <tr>
            <th>审核说明：</th>
            <td><textarea id="alertcontent" name="statusbody" class="admin_explain_textarea"></textarea></td>
          </tr>
          <tr style="text-align:center;margin-top:10px">
            <td colspan='2' align="center">
              <div class="admin_Operating_sub"> <input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth">
              <input type="button"  onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></div>
              </td>
          </tr>
        </table>
        <input name="uid" value="0" type="hidden">
      </form>

  </div>
</div>
<div id="infobox2"  style="display:none; width: 390px;"> 
  
      <form class="layui-form" action="index.php?m=admin_lt_cert&c=status" target="supportiframe" method="post" id="formstatus">
     <table cellspacing='1' cellpadding='1' class="admin_examine_table">
       <tr>
    <th width="80">审核操作：</th>
      <td align="left">
      
			<div class="layui-form-item">
                 <div class="layui-input-block">
                       	<input name="status" id="status0" value="0" title="未审核" type="radio"/>
						<input name="status" id="status1" value="1" title="正常" type="radio"/>
						<input name="status" id="status2" value="2" title="未通过" type="radio"/>
                   </div>
             </div>	
		 
               </td>
          </tr>
          <tr>
            <th>审核说明：</th>
   <td align="left"><textarea id="statusbody" name="statusbody" class="admin_explain_textarea"></textarea></div>
		 </tr>
     <tr>
           <td colspan='2' align="center">
            <input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth">
       <input type="button"  onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></div>
	 </tr>
		<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
        <input name="uid" value="0" type="hidden">
         </table>
      </form>
   
</div>
<?php echo '<script'; ?>
 type="text/javascript">
  layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,$ = layui.$;
  });


function audall(){
	var codewebarr="";
	$(".check_all:checked").each(function(){  
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg('您还未选择任何信息！', 2, 8);	return false;
	}else{
		$("input[name=uid]").val(codewebarr);
 		$("#statusbody").val('');
		$("input[name='status']").attr('checked',false);
		$.layer({
			type : 1,
			title :'批量审核', 
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['390px','250px'],
			page : {dom :"#infobox2"}
		});
	}
}
$(function(){
	$(".status").click(function(){ 
		var uid=$(this).attr("uid");
		var url=$(this).attr("url");
		var status=$(this).attr("status");
		preview(url,uid,status); 
	});
});  
function preview(url,uid,status){
	$(".job_box_div").html("<img src='"+url+"' style='width:150px;height:80px' />");
	$("#preview_url").attr("href",url);
	var pytoken=$('#pytoken').val();
	$("#status"+status).attr("checked",true);
	 layui.use(['form'],function(){
		var form = layui.form;
		form.render();
	});
	$("input[name=uid]").val(uid); 
	$.post("index.php?m=admin_lt_cert&c=lockinfo",{uid:uid,pytoken:pytoken},function(msg){
		$("#alertcontent").val(msg); 
	}); 	
	$.layer({
		type : 1,
		title : '查看图片',
		closeBtn : [0 , true], 
		offset : ['20%' , '30%'],
		border : [10 , 0.3 , '#000', true],
		area : ['390px','auto'],
		zIndex:9999,
		page : {dom : '#preview'}
	}); 
}
	$(document).ready(function(){
		$.get("index.php?m=admin_lt_cert&c=ltcertNum", function(data) {
			var datas = eval('(' + data + ')');
			if(datas.ltCertAllNum) {
				$('.ajaxltcertall').html(datas.ltCertAllNum);
			}
			if(datas.ltcertStatusNum1) {
				$('.ltcertStatusNum1').html(datas.ltcertStatusNum1);
			}
			if(datas.ltcertStatusNum2) {
				$('.ltcertStatusNum2').html(datas.ltcertStatusNum2);
			}
		});
	});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
