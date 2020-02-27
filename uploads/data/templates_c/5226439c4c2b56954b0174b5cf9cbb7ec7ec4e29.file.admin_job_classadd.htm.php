<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-23 23:22:16
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_job_classadd.htm" */ ?>
<?php /*%%SmartyHeaderCode:10086728185e5298a8651774-87558994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5226439c4c2b56954b0174b5cf9cbb7ec7ec4e29' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_job_classadd.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10086728185e5298a8651774-87558994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'info' => 0,
    'position' => 0,
    'one' => 0,
    'job' => 0,
    'class2' => 0,
    'two' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e5298a86b2b95_25015398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5298a86b2b95_25015398')) {function content_5e5298a86b2b95_25015398($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>

<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet"/>
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
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了添加职位类别 。</div>
</div>
</div>

  <div class="infoboxp_top mt10">
    <h6>添加类别</h6>
	  <div class="infoboxp_right">
	<a href=" javascript:history.back(-1);" class="infoboxp_tj">类别列表</a>
	</div>
  </div>
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe"  onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form name="myform" action="index.php?m=admin_job&c=save" method="post"  onSubmit="return save();" target="supportiframe" class="layui-form">
      <table width="100%" class="table_form" style="background:#fff;">
        <tr >
          <th width="120">类别名称：</th>
          <td><input class="input-text" type="text" id="position" name="position" size="40" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
"/></td>
        </tr>

        <tr class="admin_table_trbg" >
          <th>一级分类：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-inline">
                <select name="nid" lay-filter="nid">
                  <option value="">请选择</option>
                  <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['position']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
"
                   <?php if ($_smarty_tpl->tpl_vars['job']->value['keyid']==$_smarty_tpl->tpl_vars['one']->value['id']) {?>
                   selected
                   <?php }?>
                   ><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>

                  </option>
                  <?php } ?>
                </select>
              </div>
            </div>      
          </td>
        </tr>
        <tr >
          <th>二级分类：</th>
          <td>  
            <div class="layui-form-item">
              <div class="layui-input-inline">
                <select name="keyid" lay-filter="keyid" id="keyid_select">
                  <option value="">请选择</option>
                  <?php  $_smarty_tpl->tpl_vars['two'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['two']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['two']->key => $_smarty_tpl->tpl_vars['two']->value) {
$_smarty_tpl->tpl_vars['two']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
"
                   <?php if ($_smarty_tpl->tpl_vars['info']->value['keyid']==$_smarty_tpl->tpl_vars['two']->value['id']) {?>
                   selected
                   <?php }?>
                   ><?php echo $_smarty_tpl->tpl_vars['two']->value['name'];?>

                  </option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </td>
        </tr>
        <tr class="admin_table_trbg" id="content">
          <th>自定义描述： </th>
          <td><textarea  id="intro" name="content" style="width:500px; height:150px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
</textarea></td>
        </tr>
        <tr>
          <th>排序：</th>
          <td><input class="input-text" type="text" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
            越小越在前</td>
        </tr>
        <tr class="admin_table_trbg" >
          <td align="center" colspan="2"> <?php if ($_smarty_tpl->tpl_vars['info']->value['id']) {?>
            <input type="hidden" name="id"   value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"/>
            <input class="admin_button" type="submit" name="submit" value="&nbsp;更 新&nbsp;"  />
            <?php } else { ?>
            <input class="admin_button" type="submit" name="submit" value="&nbsp;添 加&nbsp;"  />
            <?php }?>
            <input class="admin_button" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
        </tr>
      </table>
       <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">	  
    </form>
  </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	layui.use(['form'], function(){
		var form = layui.form
			,$ = layui.$;

		form.on('select(nid)', function(data){
			var pytoken=$("#pytoken").val(); 
			$.post("index.php?m=admin_job&c=get_class", {nid:data.value,pytoken:pytoken,use_layui:1},function(data) {
				$("#keyid_select").html(data);
				form.render();
			})
		});
	})
	function save(){
		var position=$("#position").val();
		if($.trim(position)==''){
			parent.layer.msg('类别名称不能为空！', 2, 8);return false;
		}
	}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
	var editor = UE.getEditor('intro',{
		toolbars:[[ 'Source','|', 'Undo', 'Redo','Bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'fontfamily', 'fontsize',  'forecolor', 'backcolor', 'removeformat', 'autotypeset', 'pasteplain', '|','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload', '|','link', 'unlink', 'indent', '|','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify']],wordCount:false,elementPathEnabled:false,initialFrameHeight:200
	});
<?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
