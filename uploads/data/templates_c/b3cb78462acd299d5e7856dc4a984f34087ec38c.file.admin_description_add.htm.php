<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:38:43
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_description_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:10760625455dc51b833645f6-66305210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3cb78462acd299d5e7856dc4a984f34087ec38c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_description_add.htm',
      1 => 1572667770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10760625455dc51b833645f6-66305210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'descrow' => 0,
    'class' => 0,
    'v' => 0,
    'lasturl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51b833c1f20_53777275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51b833c1f20_53777275')) {function content_5dc51b833c1f20_53777275($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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

<?php echo '<script'; ?>
 language="javascript">
	function checkform(myform){
		var is_type=myform.is_type.value;
		if (myform.name.value=="") { 
			 parent.layer.msg('请填写单页面名称！', 2, 8);
			 myform.name.focus();
			 return (false);
		}
		if (myform.url.value=="") { 
			parent.layer.msg('请填写URL链接！', 2, 8);
			 myform.url.focus();
			return (false);
		}
		if (myform.title.value=="" && is_type==1) { 
			parent.layer.msg('请填写标题！', 2, 8);
			myform.title.focus();
			return (false);
		}
	}
<?php echo '</script'; ?>
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

<title>后台管理</title>
<style>
.layui-form-onswitch i{
  left: 52px !important;
}
.layui-form-switch em{
  width: 45px !important;
}
.layui-form-switch{
  width: 62px !important;
}
</style>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">添加单页面,自定义页面的URL为HTML静态页面，外部链接为绝对路径，例：http://www.phpyun.com/index.php</div>
</div>
</div>
<div class="clear"></div>

<div class="tag_box mt10">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form  target="supportiframe" name="myform" action="index.php?m=description&c=save" method="post"  onSubmit="return checkform(this);" class="layui-form">
<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
	<table width="100%" class="table_form">
		
           <tbody>
  <tr class="admin_table_trbg">
    <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
    <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>   
  </tr>
 </tbody>
 <tr>
			<th>名称：</th>
			<td><input class="input-text" type="text" name="name" size="40" value="<?php echo $_smarty_tpl->tpl_vars['descrow']->value['name'];?>
"/></td>
		</tr>
		<tr class="admin_table_trbg">
			<th>类别：</th>
			<td>
        <div class="layui-form-item">
          <div class="layui-input-inline">
            <select name="nid">
              <option value="">请选择</option>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"
                <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->tpl_vars['descrow']->value['nid']) {?>
                selected
                <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
              <?php } ?>
            </select>
          </div>
        </div>
      </td>
		</tr>
    <tr class="admin_table_trbg">
			<th>类型：</th>
			<td>
        <div class="layui-form-item">
          <div class="layui-input-inline">
            <input name="is_type" value="1" title="自定义页面" lay-filter="is_type"
              <?php if ($_smarty_tpl->tpl_vars['descrow']->value['is_type']=="1") {?> checked <?php }?>
              type="radio">
            <input name="is_type" value="0" title="外部链接" lay-filter="is_type"
              <?php if ($_smarty_tpl->tpl_vars['descrow']->value['is_type']=="0") {?> checked <?php }?>
              type="radio">
            <input name="is_type" value="2" title="站内链接" lay-filter="is_type"
              <?php if ($_smarty_tpl->tpl_vars['descrow']->value['is_type']=="2") {?> checked <?php }?>
              type="radio">
          </div>
        </div>
      </td>
		</tr>
      	<tr>
			<th>URL链接：</th>
			<td><input class="input-text" type="text" name="url" size="40" value="<?php echo $_smarty_tpl->tpl_vars['descrow']->value['url'];?>
"/>(可以为多级目录)。例：/about/index.html</td>
		</tr>
        <tr class="admin_table_trbg diyweb" <?php if ($_smarty_tpl->tpl_vars['descrow']->value['is_type']!="1") {?>style="display:none;"<?php }?>>
			<th>标题：</th>
			<td><input class="input-text" type="text" name="title" size="40" value="<?php echo $_smarty_tpl->tpl_vars['descrow']->value['title'];?>
"/></td>
		</tr>
		<tr class="diyweb" <?php if ($_smarty_tpl->tpl_vars['descrow']->value['is_type']!="1") {?>style="display:none;"<?php }?>>
			<th>关键词：</th>
			<td>
			 <input class="input-text" type="text" name="keyword" size="50" value="<?php echo $_smarty_tpl->tpl_vars['descrow']->value['keyword'];?>
"/>(多关键字，请用，隔开，请不要为空)
			</td>
		</tr>
    	<tr class="admin_table_trbg diyweb" <?php if ($_smarty_tpl->tpl_vars['descrow']->value['is_type']!="1") {?>style="display:none;"<?php }?>>
			<th>描述：</th>
			<td><textarea name="description" cols="55" rows="3"><?php echo $_smarty_tpl->tpl_vars['descrow']->value['descs'];?>
</textarea></td>
		</tr>
      	<tr class="diyweb" <?php if ($_smarty_tpl->tpl_vars['descrow']->value['is_type']!="1") {?>style="display:none;"<?php }?>>
			<th>头部模板：<div style="height:10px;"></div>底部模板：<div style="height:10px;"></div> <div style="height:10px;"></div></th>
			<td>
        <div class="layui-form-item">
          <div class="layui-input-inline">
            <select name="top_tpl" lay-filter="top_tpl">
              <option value="1"
                <?php if ($_smarty_tpl->tpl_vars['descrow']->value['top_tpl']=='1') {?> selected<?php }?>
                >默认模板</option>
              <option value="2"
                <?php if ($_smarty_tpl->tpl_vars['descrow']->value['top_tpl']=='2') {?> selected<?php }?>
                >空白模板</option>
              <option value="3"
                <?php if ($_smarty_tpl->tpl_vars['descrow']->value['top_tpl']=='3') {?> selected<?php }?>
                >自定义模板</option>
            </select>

          </div>
          <span id="top_tpl_dir" <?php if ($_smarty_tpl->tpl_vars['descrow']->value['top_tpl']!='3') {?> style="display:none;"<?php }?>>
              <input class="input-text" type="text" name="top_tpl_dir" size="40" value="<?php echo $_smarty_tpl->tpl_vars['descrow']->value['top_tpl_dir'];?>
"/>
                <span class="admin_web_tip">例：default/header 注：default为当前风格目录 模板后缀为(.htm)</span>
            </span>
            <span id="top_styletpl" <?php if ($_smarty_tpl->tpl_vars['descrow']->value['top_tpl']&&$_smarty_tpl->tpl_vars['descrow']->value['top_tpl']!='1') {?> style="display:none;"<?php }?>>
              <span class="admin_web_tip">头部默认模板为当前模板风格下的header.htm</span>
            </span>
        </div>

        <div class="layui-form-item">
          <div class="layui-input-inline">
            <select name="footer_tpl" lay-filter="footer_tpl">
              <option value="1"
                <?php if ($_smarty_tpl->tpl_vars['descrow']->value['footer_tpl']=='1') {?> selected<?php }?>
                >默认模板</option>
              <option value="2"
                <?php if ($_smarty_tpl->tpl_vars['descrow']->value['footer_tpl']=='2') {?> selected<?php }?>
                >空白模板</option>
              <option value="3"
                <?php if ($_smarty_tpl->tpl_vars['descrow']->value['footer_tpl']=='3') {?> selected<?php }?>
                >自定义模板</option>
            </select>

          </div>
          <span id="footer_tpl_dir" <?php if ($_smarty_tpl->tpl_vars['descrow']->value['footer_tpl']!='3') {?>style="display:none;"<?php }?>>
            <input class="input-text" type="text" name="footer_tpl_dir" size="40" value="<?php echo $_smarty_tpl->tpl_vars['descrow']->value['footer_tpl_dir'];?>
"/>
            <span class="admin_web_tip">例：default/footer 注：default为当前风格目录 模板后缀为(.htm)</span>
          </span>
          <span id="footer_styletpl" <?php if ($_smarty_tpl->tpl_vars['descrow']->value['footer_tpl']&&$_smarty_tpl->tpl_vars['descrow']->value['footer_tpl']!='1') {?>style="display:none;"<?php }?>>
            <span class="admin_web_tip">底部默认模板为当前模板风格下的footer.htm</span>
          </span>
        </div>
      </td>
		</tr>
    	<tr class="admin_table_trbg diyweb" <?php if ($_smarty_tpl->tpl_vars['descrow']->value['is_type']!="1") {?>style="display:none;"<?php }?>>
			<th>页面内容： </th>
			<td>
 			<?php echo '<script'; ?>
 id="content" name="content" type="text/plain" cols="100" rows="8" style="width:700px; height:300px;"> <?php echo $_smarty_tpl->tpl_vars['descrow']->value['content'];?>
 <?php echo '</script'; ?>
>
			</td>
		</tr>
        <tr>
			<th>排序：</th>
			<td><input class="input-text" type="text" name="sort" size="20" value="<?php echo $_smarty_tpl->tpl_vars['descrow']->value['sort'];?>
"/></td>
		</tr>
         <tr class="admin_table_trbg">
			<th>单页面左则导航：</th>
			<td>
        <div class="layui-form-item">
          <div class="layui-input-inline">
            <input name="is_nav_switch" lay-skin="switch" lay-text="显示|不显示" lay-filter="is_nav"
             <?php if ($_smarty_tpl->tpl_vars['descrow']->value['is_nav']=='1') {?> checked <?php }?>
             type="checkbox"/>
            <input name="is_nav" id="is_nav" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['descrow']->value['is_nav'];?>
" />
          </div>
        </div>
      </td>
		</tr>
		<tr><td align="left">&nbsp;</td>
			<td align="left">
			<?php if ($_smarty_tpl->tpl_vars['descrow']->value['id']) {?>
        	<input type="hidden" name="id" size="40" value="<?php echo $_smarty_tpl->tpl_vars['descrow']->value['id'];?>
"/>
        	<input class="layui-btn layui-btn-normal" type="submit" name="update_desc" value="&nbsp;更 新&nbsp;"  />
        	<?php } else { ?>
    		<input class="layui-btn layui-btn-normal" type="submit" name="add_desc" value="&nbsp;添 加&nbsp;"  />
     		<?php }?>
     		<input class="layui-btn layui-btn-normal" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" />
     		<input type="hidden" name="lasturl" value="<?php echo $_smarty_tpl->tpl_vars['lasturl']->value;?>
" />
			</td>
		</tr>
	</table>
</form>
</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
  layui.use(['form'], function(){
    var form = layui.form
      ,$ = layui.$;

    form.on('radio(is_type)' ,function(data){
      var footervalue = data.value;
      if(footervalue==1){
        $(".diyweb").show();
      }else{
        $(".diyweb").hide();
      }
    });

    form.on('switch(is_nav)', function(data){
      var v = this.checked ? 1 : 0;
      $("#is_nav").val(v);
    });

    form.on('select(top_tpl)', function(data){
      if(data.value == 1){
        $("#top_styletpl").show();
        $("#top_tpl_dir").hide();
      }
      else if(data.value == 2){
        $("#top_styletpl").hide();
        $("input[name=top_tpl_dir]").val('');
        $("#top_tpl_dir").hide();
      }
      else if(data.value == 3){
        $("#top_styletpl").hide();
        $("#top_tpl_dir").show();
      }
    });

    form.on('select(footer_tpl)', function(data){
      if(data.value==1){
        $("#footer_styletpl").show();
        $("#footer_tpl_dir").hide();
      }
      else if(data.value == 2){
        $("#footer_styletpl").hide();
        $("input[name=footer_tpl_dir]").val('');
        $("#footer_tpl_dir").hide();
      }
      else if(data.value==3){
        $("#footer_styletpl").hide();
        $("#footer_tpl_dir").show();
      }
    });

  });
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
	var editor = UE.getEditor('content',{
		toolbars:[[ 'Source','|', 'Undo', 'Redo','Bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'fontfamily', 'fontsize',  'forecolor', 'backcolor', 'removeformat', 'autotypeset', 'pasteplain', '|','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload','attachment', '|','link', 'unlink', 'indent', '|','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify']],wordCount:false,elementPathEnabled:false,initialFrameHeight:200
	});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
