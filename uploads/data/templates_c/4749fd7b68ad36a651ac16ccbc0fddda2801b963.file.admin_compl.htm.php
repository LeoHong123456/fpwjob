<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-16 16:38:30
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_compl.htm" */ ?>
<?php /*%%SmartyHeaderCode:2543019875e48ff86100463-92547491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4749fd7b68ad36a651ac16ccbc0fddda2801b963' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_compl.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2543019875e48ff86100463-92547491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'mes_list' => 0,
    'v' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e48ff861b2f14_32827013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e48ff861b2f14_32827013')) {function content_5e48ff861b2f14_32827013($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
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
<?php echo '<script'; ?>
 src="js/show_pub.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<title>后台管理</title>
<?php echo '<script'; ?>
 type="text/javascript">
function showbox(title,msg){
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=com_pl&c=show",{id:msg,pytoken:pytoken},function(data){
		data=eval('('+data+')');
		$('#showboxmsg').html(data.content);
		$.layer({
			type : 1,
			title :title, 
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','240px'],
			page : {dom :"#showbox"}
		});
	});
}
<?php echo '</script'; ?>
>
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
</head>
<body class="body_ifm">
<div class="infoboxp">
  <div class="admin_new_tip">
  <a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
    <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
    <div class="admin_new_tip_list_cont">
      <div class="admin_new_tip_list">该页面展示了网站所有的公司评价信息，可对公司评价进行审核删除操作。</div>
      <div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="admin_new_search_box">
    <form action="index.php" name="myform" method="get">
      <input type="hidden" name="m" value="com_pl"/>
      <div class="admin_new_search_name">搜索类型：</div>
      <div class="admin_Filter_text formselect" did="dtype">
        <input type="button" <?php if ($_GET['type']==''||$_GET['type']=='1') {?> value="评论人"  <?php } elseif ($_GET['type']=='2') {?> value="公司名称" <?php } elseif ($_GET['type']=='3') {?> value="面试过程" <?php } elseif ($_GET['type']=='4') {?> value="回复内容" <?php }?> class="admin_new_select_text" id="btype">
        <input type="hidden" name="type" id="type" value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>"/>
        <div class="admin_Filter_text_box" style="display:none" id="dtype">
          <ul>
            <li><a href="javascript:void(0);" onClick="formselect('1','type','评论人')">评论人</a></li>
            <li><a href="javascript:void(0);" onClick="formselect('2','type','公司名称')">公司名称</a></li>
            <li><a href="javascript:void(0);" onClick="formselect('3','type','面试过程')">面试过程</a></li>
          </ul>
        </div>
      </div>
      <input type="text" value="" placeholder="请输入你要搜索的关键字" name='keyword'class="admin_new_text">
      <input type="submit" value="搜索" name='search'  class="admin_new_bth">
      <a  href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a>
    </form>
    <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
  <div class="clear"></div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?m=com_pl&c=del" name="myform" target="supportiframe" id='myform' method="post">
        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th width="60" > <?php if ($_GET['order']=="asc") {?> <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'com_pl','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'com_pl','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a> <?php }?> </th>
              <th align="left" width="100">评论人</th>
              <th align="left">公司名称</th>
              <th align="left">描述评分</th>
              <th align="left">面试官评分</th>
              <th align="left">环境评分</th>
              <th align="left">面试过程</th>
              <th align="left" width="130" >评论/回复时间</th>
              <th align="center" >操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mes_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" width="60" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
            <td align="left" width="100"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
            <td align="left" width="250"><?php echo $_smarty_tpl->tpl_vars['v']->value['com_name'];?>
</td>
            <td align="left" width="100"><?php echo $_smarty_tpl->tpl_vars['v']->value['desscore'];?>
</td>
            <td align="left" width="100"><?php echo $_smarty_tpl->tpl_vars['v']->value['hrscore'];?>
</td>
            <td align="left" width="100"><?php echo $_smarty_tpl->tpl_vars['v']->value['comscore'];?>
</td>
            <td align="left" width="200"> <?php if ($_smarty_tpl->tpl_vars['v']->value['content']) {?> 
              
              <?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['content'],0,45,"utf-8");?>

              <?php if (strlen($_smarty_tpl->tpl_vars['v']->value['content'])>45) {?> <a href="javascript:void(0);" onclick="showbox('评论内容','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" class="admin_cz_sc">[更多]</a> <?php }?>
              <?php }?> </td>
            <td align="left" width="120"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d %H:%M");?>
</br>
              <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['reply_time'],"%Y-%m-%d %H:%M");?>
</td>
            <td ><span onClick="showpl('houtai_div','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" class="admin_new_c_bth admin_new_c_bth_yl" style="cursor:pointer;">详情</span>
            <div class="mt5"><a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=com_pl&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></div></td>
          </tr>
          <?php } ?>
          <tr>
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="12" ><label for="chkAll2">全选</label>
              &nbsp;
              <input class="admin_button" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
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
      </form>
    </div>
  </div>
</div>
<div id="houtai_div" style="display:none;width:400px">
  <table class="table_form "  id="infobox" style="width:100%">
    <tr>
      <td>面试过程：</td>
      <td><textarea name="beizhu" id="beizhu" class="web_compl_textarea" class="text" readonly>
        </textarea></td>
    </tr>
    <tr>
      <td>其他评论：</td>
      <td><textarea name="beizhu" id="other" class="web_compl_textarea" class="text" readonly>
        </textarea></td>
    </tr>
    <tr>
      <td>企业回复：</td>
      <td><textarea name="reply" id="reply"  class="web_compl_textarea"class="text" readonly>
        </textarea></td>
    </tr>
  </table>
</div>
<div id="showbox"  style="display:none; width: 340px; overflow:hidden ">
  <div id="showboxmsg" style="width:320px; padding:10px;height:150px; line-height:25px; font-size:14px; overflow:auto"> </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
function showpl(div,id){ 
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=com_pl&c=show",{id:id,pytoken:pytoken},function(data){
		data=eval('('+data+')');
		$("#beizhu").html(data.content);
		$("#other").html(data.othercontent);
		$("#reply").html(data.reply);
		$.layer({
			type : 1,
			title :'面试评价', 
			offset: [($(window).height() - 310)/2 + 'px', ''],
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['420px','360px'],
			page : {dom :"#"+div}
		}); 
	});
}
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
