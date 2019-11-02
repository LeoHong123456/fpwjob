<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:18:36
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_news_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:5997063515dbd3bdcbae485-40006479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36854d54a624857511a033abf7bc00ad6f1c902c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_news_add.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5997063515dbd3bdcbae485-40006479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'info' => 0,
    'one_class' => 0,
    'v' => 0,
    'two_class' => 0,
    'val' => 0,
    'Dname' => 0,
    'property' => 0,
    'property_row' => 0,
    'describe' => 0,
    'lasturl' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd3bdcc3c1b7_99136571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd3bdcc3c1b7_99136571')) {function content_5dbd3bdcc3c1b7_99136571($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<?php echo '<script'; ?>
>var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';<?php echo '</script'; ?>
>
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
 language="javascript">
function news_preview(url){
	$(".job_box_div").html("<img src='"+url+"' style='max-width:500px' />");//
 	$.layer({
		type : 1,
		title : '查看图片',
		closeBtn : [0 , true],
		offset : ['20%' , '30%'],
		border : [10 , 0.3 , '#000', true],
		area : ['560px','auto'],
		page : {dom : '#news_preview'}
	}); 
}
function checkform(myform){
	if ($("#nid").val()=="") {
		parent.layer.msg('请选择新闻类别！', 2,8);return false;
	}
	if ($("#title").val()=="") {
		parent.layer.msg('请填写新闻标题！', 2,8);return false;
	}
	var content = UE.getEditor('myEditor').getContent();
	if (content=="") {
		parent.layer.msg('请填写新闻内容！', 2,8);return false;
	}
	$("#newsform").submit();
}
<?php echo '</script'; ?>
>
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />

<title>后台管理</title>
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
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">管理员根据自己运营需求自由添加新闻！添加新闻内容（针对新闻的标题、关健词和简短描述）进行SEO角度去设置！可以提升搜索引擎对网站收录友好度。</div>
</div>
</div>


  <div class="clear"></div>
  <div class="tag_box mt10">
    <iframe  id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form id="newsform" name="myform" target="supportiframe" action="index.php?m=admin_news&c=addnews" method="post" encType="multipart/form-data" class="layui-form">
      <table width="100%" class="table_form">
       <tr >  
       <tbody>
          <th bgcolor="#f0f6fb" colspan="2" ><span class="admin_bold">添加新闻</span></th>
            </tbody>
            </tr >
        <tr >
     
          <th width="120">新闻类别：</th>
          <td>
            <div class="layui-input-inline">
		      <select id="nid" name="nid">
			    <?php if ($_smarty_tpl->tpl_vars['info']->value['nid']) {?>
		 		  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['one_class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	                    <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->tpl_vars['info']->value['nid']) {?>
	                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	                    <?php } else { ?>
	                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	                    <?php }?>
	                    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['two_class']->value[$_smarty_tpl->tpl_vars['v']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
	                        <?php if ($_smarty_tpl->tpl_vars['val']->value['id']==$_smarty_tpl->tpl_vars['info']->value['nid']) {?>
	                        <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
	                        <?php } else { ?>
	                    	<option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" > 　┗<?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
	                        <?php }?>
	                    <?php } ?>
	                <?php } ?>
	            <?php } else { ?>
	                <option value="">请选择</option>
	            <?php }?>
		        
		        <?php if (!$_smarty_tpl->tpl_vars['info']->value['nid']) {?>
			        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['one_class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	                	  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['two_class']->value[$_smarty_tpl->tpl_vars['v']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
	                           <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"> 　┗<?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
	                      <?php } ?>                    
	                <?php } ?>
                <?php }?>
                
		      </select>
		    </div>
            
         <a href="index.php?m=admin_news&c=group" class="layui-btn layui-btn-normal">添加分类</a></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>新闻标题：</th>
          <td>
          	
          <div class="layui-form-item">
            <div class="layui-input-block">
            <div class="layui-input-inline">
              <input type="text" name="title" id="title" size="60" lay-verify="required" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
" style="display:inline;width:400px;" autocomplete="off" class="layui-input">
            </div>
            </div>
          </div>
          </td>
        </tr>
     	<tr>
        <th>使用范围：</th>
        <td><input type="button" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['did']) {
echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['info']->value['did']];
} else { ?>总站<?php }?>" class="city_news_but" onClick="add_site('<?php echo $_smarty_tpl->tpl_vars['info']->value['did'];?>
','<?php echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['info']->value['did']];?>
');">
        <input type="hidden" id="did" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['did'];?>
" name="did"></td>
      </tr> 
        <tr class="admin_table_trbg" >
          <th>作　　者：</th>
          <td>
          
          <div class="layui-form-item">
            <div class="layui-input-block">
            <div class="layui-input-inline">
              <input type="text" name="author" id="author"  lay-verify="required" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['author'];?>
" size="60"  autocomplete="off" class="layui-input" style="display:inline;width:400px;">
              </div>
            </div>
          </div>
          
          </td>
        </tr>
        <tr >
          <th>来　　源：</th>
          <td>
          <div class="layui-form-item">
            <div class="layui-input-block">
            <div class="layui-input-inline">
              <input type="text" name="source" id="source"  lay-verify="required" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['source'];?>
" size="60"  autocomplete="off" class="layui-input" style="display:inline;width:400px;">
              </div>
            </div>
          </div>
          </td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>关 键 词：</th>
          <td>
          <div class="layui-form-item">
            <div class="layui-input-block">
            <div class="layui-input-inline">
              <input type="text" name="keyword" id="keyword"  lay-verify="required" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['keyword'];?>
" size="60"  autocomplete="off" class="layui-input" style="display:inline;width:400px;">
              </div>
              <span class="admin_web_tip">多个关键字，请用,隔开</span>
              
            </div>
          </div>
            </td>
        </tr>
        <tr >
          <th>描　　述：</th>
          <td>
          
          <div class="layui-form-item">
            <div class="layui-input-block">
              <textarea name="description" cols="60" rows="3" class="admin_comdit_textarea web_text_textarea"  style="display:inline;width:390px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</textarea>
            </div>
          </div>
          
          </td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>新闻内容： </th>
          <td>
 		  <?php echo '<script'; ?>
 id="myEditor" name="content" type="text/plain" style="width:800px;height:300px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>

		  <?php echo '</script'; ?>
>
		  </td>
        </tr>
        <tr >
          <th>缩 略 图：</th>
          <td>
		  <button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'newsphoto',imgnews: 'imgicon',imgthumb: 's_thumb'}">上传图片</button>
			
			<input type="hidden" id="layupload_type" value="2"/>
			<input type="hidden" id="upload_path" value="news"/>

			<input type="hidden" name="newsphoto" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['newsphoto'];?>
"/>
			<input type="hidden" name="s_thumb" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['s_thumb'];?>
"/>
			<a id="imgicon" href="javascript:void(0)" onClick="news_preview('<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['newsphoto'];?>
')" class="admin_chlose_img_look <?php if (!$_smarty_tpl->tpl_vars['info']->value['newsphoto']) {?>none<?php }?>">查看图片</a>
         </tr>
        <?php if ($_smarty_tpl->tpl_vars['property']->value) {?>
        <tr class="admin_table_trbg" >
          <th>类　　型：</th>
            <td> 
		      <div class="layui-form-item">
		        <div class="layui-input-block">
		          <?php  $_smarty_tpl->tpl_vars['property_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property_row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['property']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property_row']->key => $_smarty_tpl->tpl_vars['property_row']->value) {
$_smarty_tpl->tpl_vars['property_row']->_loop = true;
?>
		          <input name="describe[]" title="<?php echo $_smarty_tpl->tpl_vars['property_row']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['property_row']->value['value'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['property_row']->value['value'],$_smarty_tpl->tpl_vars['describe']->value)) {?> checked="checked" <?php }?> type="checkbox">
		        <?php } ?>
		        
		        </div>
		      </div>
		    </td>
        </tr>
        <?php }?>
        <tr >
          <th>排　　序：</th>
          <td>
          <div class="layui-form-item">
            <div class="layui-input-block">
              <input type="text" name="sort" id="sort"  lay-verify="required" placeholder="请输入排序" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
" size="10"  autocomplete="off" class="layui-input input-text">
            </div>
          </div>
          
          </td>
        </tr>
        <tr class="admin_table_trbg" >
           <th style="border-bottom:none;">&nbsp;</th>
          <td align="left" style="border-bottom:none;"> 
            <?php if ($_smarty_tpl->tpl_vars['info']->value['id']) {?>
            <input type="hidden" name="id" size="40" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"/>
            <input type="hidden" name="lasturl" value="<?php echo $_smarty_tpl->tpl_vars['lasturl']->value;?>
">
            <input type="hidden" name="updatenews" value="1">
            <input class="layui-btn layui-btn-normal" type="button" onclick="checkform()" value="&nbsp;更 新&nbsp;"  />
            <?php } else { ?>
            <input type="hidden" name="newsadd" value="1">
            <input class="layui-btn layui-btn-normal" type="button" onclick="checkform()" value="&nbsp;添 加&nbsp;"  />
            <?php }?>
            <input class="layui-btn layui-btn-normal" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
        </tr>
      </table>
	  <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
    </form>
  </div>
</div>
<div id="news_preview"  style="display:none;width:560px ">
	<div style="height:300px; overflow:auto;width:560px;" >
		<div class="job_box_div" style="text-align:center;margin-top:10px;"></div>
	</div>
</div>
<style>
.layui-form-item {
    margin-bottom: 0px;
    clear: both;
}
</style>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript">
	var ue = UE.getEditor('myEditor');
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 >
  layui.use(['layer', 'form','element'], function(){
    var layer = layui.layer
    ,form = layui.form
	,element = layui.element
    ,$ = layui.$;

  });
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
