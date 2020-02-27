<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-22 08:59:06
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_reward_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:8700163715e507cda240757-88906434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b355b407421a5c39268946ae5b18a1b45e100fa' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_reward_add.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8700163715e507cda240757-88906434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'info' => 0,
    'redeem_index' => 0,
    'v' => 0,
    'redeem_name' => 0,
    'redeem_type' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e507cda2954a6_73968560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e507cda2954a6_73968560')) {function content_5e507cda2954a6_73968560($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">添加商品，网站运营者可以将周边产品或已合作商家把购买高频率商品以积分兑换形式放在网站！用户积分达到一定积分可以兑换！增强网站用户互动性！</div>
</div>
</div>
<div class="clear"></div>
<div class="tag_box mt10">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form id="rewardform" name="myform" action="index.php?m=reward&c=save" method="post" encType="multipart/form-data" target="supportiframe" class="layui-form">
      <table width="100%" class="table_form" style="background:#fff;">
       <tr>
              <td colspan="2" bgcolor="#f0f6fb"><div class="admin_bold"> 添加商品</div></td>
            </tr>
        <tr>
          <th width="200">商品名称：</th>
          <td> 
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input class="layui-input input-text" type="text" name="name" size="40" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
"/>
                 </div>
               </div>
            </div></td>
        </tr>
        <tr class="admin_table_trbg">
          <th>商品类别：</th>          
          <td> 
            <!--<div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <select name="nid" lay-filter="" id="nid_val">
                      <option value="">请选择</option>
                      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['redeem_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['info']->value['nid']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['redeem_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                      <?php } ?>
                    </select>
                 </div>
               </div>
            </div>-->
			<div class="layui-form-item">
			<div class="layui-input-inline">
            <select name="nid" id="nid" lay-filter="nid">
              <option value="">请选择</option>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['redeem_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['info']->value['nid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>
                ><?php echo $_smarty_tpl->tpl_vars['redeem_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>

              </option>
              <?php } ?>
            </select>
          </div>
          <div class="layui-input-inline">
            <select name="tnid" lay-filter="tnid" id="tnid">
              <option value="">请选择</option>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['redeem_type']->value[$_smarty_tpl->tpl_vars['info']->value['nid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['info']->value['tnid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>
                ><?php echo $_smarty_tpl->tpl_vars['redeem_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>

              </option>
              <?php } ?>
            </select>
          </div>
        </div> 
            </td>
        </tr>
        <tr>
          <th>商品图片：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
					<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'pic',imgid: 'imgicon'}">上传图片</button>
					<input type="hidden" id="layupload_type" value="2"/>
					<input type="hidden" id="upload_path" value="reward"/>
					<input type="hidden" name="pic" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['pic'];?>
"/>
					<img id="imgicon" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['pic'];?>
" width="50" height="40" <?php if (!$_smarty_tpl->tpl_vars['info']->value['pic']) {?>class="none"<?php }?>>
                 </div>
               </div>
            </div>
			</td>
        </tr>
        <tr class="admin_table_trbg">
          <th>兑换<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input class="layui-input input-text" type="text" name="integral" size="20" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['integral'];?>
" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')"/>
                 </div>
               </div>
            </div></td>
        </tr>
        <tr>
          <th>限购数量：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input class="layui-input input-text" type="text" name="restriction" size="20" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['restriction'];?>
" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')"/>
                 </div>
                 <div class="layui-form-mid layui-word-aux">0为不限</div>
               </div>
            </div></td>
        </tr>
        <tr class="admin_table_trbg">
          <th>库存数量：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input class="layui-input input-text" type="text" name="stock" size="20" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['stock'];?>
" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')"/>
                 </div>
               </div>
            </div></td>
        </tr>
        <tr>
          <th>简介内容： </th>
          <td>
 		  <?php echo '<script'; ?>
 id="myEditor" name="content" type="text/plain" style="width:700px;height:300px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>

		  <?php echo '</script'; ?>
>
		  </td>
        </tr>
        <tr class="admin_table_trbg">
          <th>排序：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input class="layui-input input-text" type="text" name="sort" size="20" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')"/>
                 </div>
                 <div class="layui-form-mid layui-word-aux">越小越在前</div>
               </div>
            </div></td>
        </tr>
        <tr >
          <th>状态：</th>
          <td> 
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input type="radio" name="status" value="1" id="status_1" title="上架" <?php if ($_smarty_tpl->tpl_vars['info']->value['status']==1) {?>checked<?php }?>>
                   <input type="radio" name="status" value="0" id="status_0" title="下架" <?php if ($_smarty_tpl->tpl_vars['info']->value['status']==0) {?>checked<?php }?>>
                 </div>
               </div>
            </div>
            </td>
        </tr>
        <tr class="admin_table_trbg" >
          <td align="center" colspan="2"> 
          	<?php if ($_smarty_tpl->tpl_vars['info']->value['id']) {?>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"/>
            <input class="layui-btn layui-btn-normal" type="button" onclick="checkform()" value="&nbsp;更 新&nbsp;"  />
            <?php } else { ?>
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
<?php echo '<script'; ?>
>
var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,$ = layui.$
	,url=weburl+"/index.php?m=ajax&c=get_redeem_option";
	 form.on('select(nid)', function(data){
      $.post(url,{tnid : data.value},function(html){
        $("#tnid").html(html);
        form.render();
      });
    });
});
function checkform(){
	if ($("#name").val()==""){
		parent.layer.msg('请填写商品名称！', 2, 8);return false;
	}
	if ($("#nid").val()==""){
		parent.layer.msg('请填写商品类别！', 2, 8);return false;
	}
	if ($("#pic").val()==""){
		parent.layer.msg('请上传商品图片！', 2, 8);return false;
	}
	if ($("#integral").val()==""){
		parent.layer.msg('请填写兑换<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
！', 2, 8);return false;
	}
	if ($("#restriction").val()==""){
		parent.layer.msg('请填写限购数量！', 2, 8);return false;
	}
	if ($("#stock").val()==""){
		parent.layer.msg('请填写库存数量！', 2, 8);return false;
	} 
	$("#rewardform").submit();
}
UE.getEditor('myEditor',{
	toolbars:[['Source', 'Bold', 'italic', 'underline', 'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright','insertorderedlist', 'insertunorderedlist','emotion','simpleupload']],
	wordCount:false,
    elementPathEnabled:false,
    initialFrameHeight:180
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
