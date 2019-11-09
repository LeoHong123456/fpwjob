<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-09 09:05:36
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_lt_talent.htm" */ ?>
<?php /*%%SmartyHeaderCode:17831913955dc610e007f3e3-06643346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e775bf566e20dd30b30a4714e1e54a8e24a9476' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_lt_talent.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17831913955dc610e007f3e3-06643346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'rows' => 0,
    'key' => 0,
    'v' => 0,
    'userclass_name' => 0,
    'city_name' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc610e00e5865_65018257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc610e00e5865_65018257')) {function content_5dc610e00e5865_65018257($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
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
<div id="infobox2"  style="display:none; width: 390px; "> 
	
      <form  class="layui-form" action="index.php?m=lt_talent&c=status" target="supportiframe" method="post" id="formstatus">
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
         <td colspan='2' align="center"> <input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth">
         <input type="button"  onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></div>
		  </tr>
      </table>
		<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
        <input name="pid" value="0" type="hidden">
      </form>

</div>


<div class="infoboxp"> 

<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了网站所有猎头中介的简历库数据。</div>
<div class="admin_new_tip_list">可输入姓名、猎头中介账户、意向岗位关键字进行搜索。</div>
</div>
</div>

<div class="clear"></div>

<div class="admin_new_search_box"> 
  <form action="index.php" name="myform" method="get"> 
        <input name="m" value="lt_talent" type="hidden"/>
		
		<input type="hidden" name="searchtype" value="<?php echo $_GET['searchtype'];?>
"/>
		
		
		
	<div class="admin_new_search_name">搜索类型：</div>
   <div class="admin_Filter_text formselect"  did='dsearchrname'>
		  <input type="button" value="<?php if ($_GET['searchrname']=='1'||$_GET['searchrname']=='') {?>用户名<?php } else { ?>简历名称<?php }?>" class="admin_Filter_but"  id="bsearchrname">
		  <input type="hidden" id='searchrname' value="<?php if ($_GET['searchrname']) {
echo $_GET['searchrname'];
} else { ?>1<?php }?>" name='searchrname'>
		  <div class="admin_Filter_text_box" style="display:none" id='dsearchrname'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('1','searchrname','猎头中介用户名')">猎头中介用户名</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','searchrname','姓名')">姓名</a></li> 
			  <li><a href="javascript:void(0)" onClick="formselect('3','searchrname','意向岗位')">意向岗位</a></li> 
			  </ul>  
		  </div>
		</div>
        <input class="admin_Filter_search" type="text" name="keyword"  size="25"/>
        <input class="admin_Filter_bth" type="submit" name="news_search" value="检索"/>
	
	
	<a  href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a></form>


  
  <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
<div class="clear"></div> 
<div class="table-list">
<div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
      <input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
        <input name="m" value="lt_talent" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th width="3%"><label for="chkall">
                <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
				 
              <th width="8%"> <?php if ($_GET['t']=="uid"&&$_GET['order']=="asc") {?> <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'uid','m'=>'lt_talent','untype'=>'order,t'),$_smarty_tpl);?>
">猎头编号<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'uid','m'=>'lt_talent','untype'=>'order,t'),$_smarty_tpl);?>
">猎头编号<img src="images/sanj2.jpg"/></a> <?php }?> </th>
              <th align="left" width="100">拥有者</th>
              <th align="left" width="50">姓名</th>
              <th align="left" width="8%">意向职位</th>
			  <th align="left" width="100">学历</th>
			  <th align="left" width="100">工作经验</th>
              <th>工作地点</th>
              <th>待遇要求</th>
              <th>联系手机</th>
              <th>状态</th>
              <th>授权状态</th>
             
              <th  class="admin_table_th_bg" >操作</th>
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
            <td><input type="checkbox" class="check_all" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</span></td>
            <td class="gd" align="left" ><?php echo $_smarty_tpl->tpl_vars['v']->value['user'];?>
</td>
            <td class="ud" align="left" ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
            <td class="od" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
</td>
			<td class="od" align="left"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value['edu']];?>
</td>
			<td class="od" align="left"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value['exp']];?>
</td>
            <td class="gd"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value['provinceid']];?>
 <?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value['cityid']];?>
</td>
            <td class="td"><?php if ($_smarty_tpl->tpl_vars['v']->value['minsalary']&&$_smarty_tpl->tpl_vars['v']->value['maxsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['v']->value['maxsalary'];
} elseif ($_smarty_tpl->tpl_vars['v']->value['minsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['minsalary'];?>
以上<?php } else { ?>面议<?php }?></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['linktel'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['v']->value['rewardstatus']=='1') {?>推荐中<?php } else { ?>空闲<?php }?></td>
            <td><?php if ($_smarty_tpl->tpl_vars['v']->value['telstatus']=='1') {?>已授权<?php } else { ?>未授权<?php }?></td>
            
            <td>
            <div class=" mt5"> <a href="index.php?m=lt_talent&c=show&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_new_c_bth admin_new_c_bth_yl"> 预览</a> </div>
            <div class=" mt5"> <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=lt_talent&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></div>
             </td>
          </tr>
          <?php } ?>
          <tr >
          <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
          <td colspan="13">
          <label for="chkAll2">全选</label>&nbsp;
            <input class="admin_button"  type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
              &nbsp;&nbsp;
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
				<td colspan="11" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
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


function audall(){
	var codewebarr="";
	$(".check_all:checked").each(function(){  
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg('您还未选择任何信息！', 2, 8);	return false;
	}else{
		$("input[name=pid]").val(codewebarr);
 		$("#statusbody").val('');
		$("input[name='status']").attr('checked',false);
		$.layer({
			type : 1,
			title :'批量审核', 
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['390px','160px'],
			page : {dom :"#infobox2"}
		});
	}
}
$(function(){
    $(".status").click(function(){
		var pid=$(this).attr("pid");
		var status=$(this).attr("status");
		$("#status"+status).attr("checked",true);
		 layui.use(['form'],function(){
			var form = layui.form;
			form.render();
		});
		$("input[name=pid]").val(pid);
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=height_user&c=lockinfo",{pytoken:pytoken,pid:pid},function(msg){
			$("#statusbody").val(msg);
			$.layer({
				type : 1,
				title :'审核', 
				closeBtn : [0 , true],
				border : [10 , 0.3 , '#000', true],
				area : ['390px','160px'],
				page : {dom :"#infobox2"}
			});
		});
	}); 
}); 
<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
