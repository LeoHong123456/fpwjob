<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:54:37
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_wx.htm" */ ?>
<?php /*%%SmartyHeaderCode:18652833125dbd444dee8e13-37709349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '118fbed65bbeb903f85fd342c7b5e768d8704b44' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_wx.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18652833125dbd444dee8e13-37709349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd444df221c0_38796365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd444df221c0_38796365')) {function content_5dbd444df221c0_38796365($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<?php echo '<script'; ?>
> 
var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
<?php echo '</script'; ?>
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
<div class="admin_new_tip_list">公众号为认证服务号，到微信公众号平台设置服务器IP白名单</div>
</div>
</div>
<div class="clear"></div>

<div class="tag_box mt10">
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
	<form name="myform" target="supportiframe" action="index.php?m=wx&c=save" method="post" enctype="multipart/form-data" class="layui-form">
         <table width="100%" class="table_form">
            <tr class="admin_table_trbg">
        	<th colspan="2" bgcolor="#f0f6fb"><span class="admin_bold">微信公众号设置</span></th>
            </tr>
			 <tr>
                <th width="160">公众号：</th>
                <td><input class="input-text" type="text" name="wx_name" id="wx_name" size="30" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['wx_name'];?>
" maxlength="255" >
                <span class="admin_web_tip">在微信公众平台获取</span></td>
            </tr>
             <tr>
                <th width="160">URL：</th>
                <td style="height:30px"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/weixin/index.php</td>
            </tr>
          <tr>
                <th width="160">Token</th>
                <td><input class="input-text" type="text" name="wx_token" id="wx_token" size="30" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['wx_token'];?>
" maxlength="255" >
                <span class="admin_web_tip">自定义填写，需和微信公众平台一致</span></td>
            </tr>
              <tr class="admin_table_trbg">
              <th>&nbsp;</th>
                <td align="left">
                <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
"/>	
                <input class="layui-btn layui-btn-normal" id="wxconfig" type="submit" name="msgconfig" value="提交" />&nbsp;&nbsp;<input class="layui-btn layui-btn-normal" type="reset" value="重置" /></td>
            </tr>
        </table>
		</form>
             
             <form name="myform" target="supportiframe" action="index.php?m=wx&c=save" method="post" enctype="multipart/form-data">
             <table width="100%" class="table_form">
            <tr >
                <th colspan="2" bgcolor="#f0f6fb"><span class="admin_bold">开发者凭据</span></th>
            </tr>
          <tr>
                <th width="160">AppId：</th>
                <td><input class="input-text" type="text" name="wx_appid" id="wx_appid" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['wx_appid'];?>
" size="30" maxlength="255"/><span class="admin_web_tip">如：1002478xx</span></td>
            </tr>
            <tr>
                <th width="160">AppSecret：</th>
                <td><input class="input-text" type="text" name="wx_appsecret" id="wx_appsecret" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['wx_appsecret'];?>
" size="30" maxlength="255"/><span class="admin_web_tip">如：4dd1c30d472676914f2fbfbnjt33</span></td>
            </tr>
            
          <tr class="admin_table_trbg">
              <th>&nbsp;</th>
                <td align="left">
                <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
"/>	
                <input class="layui-btn layui-btn-normal" id="wxconfig" type="submit" name="msgconfig" value="提交" />&nbsp;&nbsp;<input class="layui-btn layui-btn-normal" type="reset" value="重置" /></td>
            </tr>
        </table>
		</form>
             
             <form name="myform" target="supportiframe" action="index.php?m=wx&c=save" method="post" enctype="multipart/form-data" class="layui-form">
             <table width="100%" class="table_form">
			
		<tr>
                <th colspan="2" bgcolor="#f0f6fb"><span class="admin_bold">体验设置</span></th>
            </tr>

			 <tr>
                <th width="160">关注欢迎语：</th>
                <td><textarea  name="wx_welcom"  rows="10" cols='40' maxlength="255" class="wx_search_textarea web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['wx_welcom'];?>
</textarea></td>
            </tr>
			<tr>
                <th width="160">搜索提示：</th>
                <td><textarea  name="wx_search"  rows="10" cols='40'  maxlength="255" class="wx_search_textarea web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['wx_search'];?>
</textarea></td>
            </tr>
			<tr>	
			<th width="160">公众号二维码：</th>
			<td>
			<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'sy_wx_qcode',imgid: 'imgqcode'}">上传图片</button>
			<input type="hidden" id="layupload_type" value="2"/>
			<input type="hidden" id="upload_path" value="logo"/>
			<input type="hidden" name="sy_wx_qcode" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
"/>
			<img id="imgqcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" style="max-width:200px" <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode']) {?>class="none"<?php }?>>
			  </td>
			</tr>
			 <tr>	
			<th width="160">微信封面：<br>(360px * 100px)</th>
			<td>
			<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'sy_wx_logo',imgid: 'imglogo'}">上传图片</button>
			<input type="hidden" name="sy_wx_logo" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_logo'];?>
"/>
			<img id="imglogo" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_logo'];?>
" style="max-width:150px" <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_wx_logo']) {?>class="none"<?php }?>>
			  </td>
			</tr>
			<tr>       
			<th width="160">微信分享图片：<br>(300px X 300px)</th>
			<td>
			<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'sy_wx_sharelogo',imgid: 'imgshare'}">上传图片</button>
			<input type="hidden" name="sy_wx_sharelogo" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
"/>
			<img id="imgshare" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
" style="max-width:100px" <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo']) {?>class="none"<?php }?>>
			  </td>
			</tr>
			<tr>
                <th width="160">微信手机登录：</th>
                <td> 
                <div class="layui-form-item">
                  <div class="layui-input-block">
                     <div class="layui-input-inline">
                       <input type="radio" name="wx_rz" checked value='0' id="wx_rz_11" title="否" >
                       <input type="radio" <?php if ($_smarty_tpl->tpl_vars['config']->value['wx_rz']=='1') {?>checked<?php }?> name="wx_rz" value='1' id="wx_rz_12" title="是" >
                     </div>
                     <div class="layui-form-mid layui-word-aux">说明：必须为已认证的服务号</div>
                   </div>
                </div>
                </td>
            </tr>
			<tr>
                <th width="160">微信PC扫码登录：</th>
                <td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                     <div class="layui-input-inline">
                       <input type="radio" name="wx_author" <?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']!='1') {?>checked<?php }?> value='0' id="RadioGroup1_11" title="否" >
                       <input type="radio" <?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']=='1') {?>checked<?php }?> name="wx_author" value='1' id="RadioGroup1_12" title="是" >
                     </div>
                     <div class="layui-form-mid layui-word-aux">说明：必须为已认证的服务号</div>
                   </div>
                </div>
				</td>
            </tr>
            
            <tr class="admin_table_trbg">
              <th>&nbsp;</th>
                <td align="left">
                <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
"/>	
                <input class="layui-btn layui-btn-normal" id="wxconfig" type="submit" name="msgconfig" value="提交" />&nbsp;&nbsp;<input class="layui-btn layui-btn-normal" type="reset" value="重置" /></td>
            </tr>
        </table>
		</form>
             
    </div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,$ = layui.$;
});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
