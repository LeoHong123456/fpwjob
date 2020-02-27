<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-16 16:26:48
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_member_comedit.htm" */ ?>
<?php /*%%SmartyHeaderCode:10346651705e48fcc888f9c3-18868448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f1b60550dae59e456e9fab1f7ff8da50c63bfc' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_member_comedit.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10346651705e48fcc888f9c3-18868448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'com_info' => 0,
    'rating_list' => 0,
    'ratings' => 0,
    'statis' => 0,
    'row' => 0,
    'industry_index' => 0,
    'v' => 0,
    'industry_name' => 0,
    'comdata' => 0,
    'comclass_name' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'tv' => 0,
    'lasturl' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e48fcc8998cb1_74508047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e48fcc8998cb1_74508047')) {function content_5e48fcc8998cb1_74508047($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
	
	<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
	<div class="admin_new_tip">
		<a href="javascript:;" class="admin_new_tip_close"></a>
		<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
		
		<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
		
		<div class="admin_new_tip_list_cont">
			<div class="admin_new_tip_list">对企业会员进行编辑修改操作。</div>
			<div class="admin_new_tip_list"> 
				<?php if (is_array($_smarty_tpl->tpl_vars['com_info']->value)) {?>
					<span class="admin_new_comsj">  
						注册IP：<?php echo $_smarty_tpl->tpl_vars['com_info']->value['reg_ip'];?>

					</span>
					<span class="admin_new_comsj">  
						注册时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['com_info']->value['reg_date'],'%Y-%m-%d');?>

 					</span>
					<span class="admin_new_comsj">  
						登录IP：<?php echo $_smarty_tpl->tpl_vars['com_info']->value['login_ip'];?>

						<font color="gray"></font>
					</span>
					<span class="admin_new_comsj">
						最近登录时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['com_info']->value['login_date'],'%Y-%m-%d');?>

						<font color="gray"></font>
					</span>
					<span class="admin_new_comsj">
						登录次数：<?php echo $_smarty_tpl->tpl_vars['com_info']->value['login_hits'];?>

						<font color="gray"></font>
					</span>
				<?php }?>
			</div>
		</div>
	</div>


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

<?php echo '<script'; ?>
 language="javascript">
var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";

function editrat(){
	var ratingid = $("#ratingid").val();
	if(ratingid==""){
		layer.msg('请选择会员等级！',2,8);return false;
	}
 	var uid = $("#uid").val();
	var pytoken = $('#pytoken').val();
	$.post("index.php?m=admin_company&c=rating",{ratingid:ratingid,uid:uid,pytoken:pytoken},function(data){
		if(data==1){
			parent.layer.msg('操作成功！', 2, 9);
			window.location.reload();
		}else if(data==0){
			layer.msg('会员级别没有改变！', 2, 9);
		}else{
			parent.layer.msg('网络繁忙，请稍后再试！', 2,8);
		}

	})
}
function cleartime(){
	$("#vip_etime").val('');
}
function ckform(){ 
	var email=$.trim($("input[name='email']").val());
	if(email&&check_email(email)==false){
		layer.msg('邮箱格式错误！',2,8);return false;
	}
	var moblie=$.trim($("input[name='moblie']").val());
	if(moblie&&isjsMobile(moblie)==false){
		layer.msg('手机格式错误！',2,8);return false;
	}
	var phoneone=$.trim($("input[name='phoneone']").val());
	var phonetwo=$.trim($("input[name='phonetwo']").val());
	var phonethree=$.trim($("input[name='phonethree']").val());
	var phone=phoneone+'-'+phonetwo;
	if((phoneone&&phonetwo=='')||(phoneone==''&&phonetwo)){
		layer.msg('请填写完整固定电话！',2,8);return false;
	}
	if(phoneone&&phonetwo&&isjsTell(phone)==false){
		layer.msg('固定电话格式错误！',2,8);return false;
	}
	$("#comform").submit();
	loadlayer();
}
function selectsmoney(id,moneyname,name){
	$("#moneytype_select").hide();
	$("#moneytype_name").val(name);
	$("#moneytype_val").val(id);
	$(".moneyname").html(moneyname);
} 
<?php echo '</script'; ?>
>
<div class="main_tag mt10" >
<div class="tag_box">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form id="comform" class="layui-form" name="myform" target="supportiframe" action="index.php?m=admin_company&c=comeditsave" method="post" enctype="multipart/form-data">
	<table width="100%" class="table_form table_form_thr" style="background:#fff;">
		<tr>	
			<td colspan="4"bgcolor="#f0f6fb"><div class="admin_bold">会员信息</div></td>
		</tr>
	<tr>
		<th width="130" align="left">会员等级：</th>
		<td width="400" colspan="3"> 
			<div class="layui-input-block" style=" float:left">
				<div class="layui-input-inline">
					<select name="ratingid" id="ratingid" lay-verify="" >
						<option value="">请选择</option>
						<?php  $_smarty_tpl->tpl_vars['ratings'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ratings']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rating_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ratings']->key => $_smarty_tpl->tpl_vars['ratings']->value) {
$_smarty_tpl->tpl_vars['ratings']->_loop = true;
?>
							<option  value="<?php echo $_smarty_tpl->tpl_vars['ratings']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['ratings']->value['id']==$_smarty_tpl->tpl_vars['statis']->value['rating']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ratings']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<a href="javascript:;" onClick="editrat();" class="admin_comedity_text_a" style="margin-top:10px">点击修改会员级别</a>
        </td>
	</tr>

    <tr>
		<th width="140">到期时间：</th>
		<td colspan="3"> 
			<input id="vip_etime" class="admin_comedity_text" type="text" readonly size="20" value="<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');
}?>" name="vip_etime">
			<a href="javascript:;" onClick="cleartime();">无限期</a>
		</td>
	</tr>

	<tr class="admin_table_trbg" >
		<th>用户名：</th>
		<td colspan="3">  
			<input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['com_info']->value['username'];?>
" name="username" id="username" class="admin_comedity_text">
			<a href="javascript:;" onClick="editname('<?php echo $_smarty_tpl->tpl_vars['com_info']->value['username'];?>
');" class="admin_comedity_text_a">修改用户名</a>
		</td>
	</tr>
    
	<tr>
		<th>密码：</th>
		<td colspan="3"> 
			<input type="text" value="" name="password" class="admin_comedity_text">
			<span class="admin_web_tip">不修改请留空!</span>
		</td>
	</tr>

    <tr>
		<td colspan="4"bgcolor="#f0f6fb"><div class="admin_bold">基本资料</div></td>
	</tr>
    
	<tr>
		<th>企业全称：</th>
		<td colspan="3"> 
			<input type="text" size="45" name="name" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
">
		</td>
	</tr>
	
	<tr>
		<th>企业简称：</th>
		<td colspan="3"> <input type="text" size="45" name="shortname" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['shortname'];?>
"></td>
	</tr>
    
    <tr>	
		<th>从事行业：</th>
		<td colspan="3"> 
			<div class="layui-input-block">
				<div class="layui-input-inline">
					<select name="hy" id="hy" lay-verify="" >
						<option>请选择</option>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['hy']==$_smarty_tpl->tpl_vars['v']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
        </td>
	</tr>

	<tr>
        <th>企业性质：</th>
		<td colspan="3"> 
			<div class="layui-input-block">
				<div class="layui-input-inline">
					<select name="pr" id="pr" lay-verify="" >
						<option>请选择</option>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['pr']==$_smarty_tpl->tpl_vars['v']->value) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
		</td>
	</tr>
	
	<tr>
		<th>企业规模：</th>
		<td colspan="3"> 
			<div class="layui-input-block">
				<div class="layui-input-inline">
					<select name="mun" id="mun" lay-verify="" >
						<option>请选择</option>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['mun']==$_smarty_tpl->tpl_vars['v']->value) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </option>
						<?php } ?>
					</select>
				</div>
			</div>
		</td>
	</tr> 
	
	<tr>
		<th>联系人：</th>
		<td colspan="3"> <input type="text" name="linkman" size="15" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkman'];?>
" /></td>
	</tr>

    <tr>
		<th>所属职位：</th>
		<td colspan="3"><input type="text" name="linkjob" size="15" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkjob'];?>
" /></td>
	</tr>	
	
	<tr>
		<th>联系手机：</th>
		<td colspan="3"> 
			<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
" name="moblie" class="admin_comedity_text">
			<font color="gray"></font>
        </td>
    </tr> 
	
	<tr>
        <th>固定电话：</th>
		<td colspan="3"> 
			<input type="text" name="phoneone" class="admin_text_w100" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phoneone'];?>
"  onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"  maxlength="4"/>
			<input type="text" name="phonetwo" class="admin_text_w150" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phonetwo'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"maxlength="8"  />
			<input type="text" name="phonethree"  class="admin_text_w100" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phonethree'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" />
		</td>
	</tr>
	
	<tr class="admin_table_trbg" >
		<th>联系邮箱：</th>
		<td colspan="3"> 
			<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkmail'];?>
" name="email" class="admin_comedity_text">
			<font color="gray"></font>
		</td>
	</tr>
 
	<tr class="admin_table_trbg" >
		<th>企业地址：</th>
		<td>
			<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
" size="45" name="address" class="input-text">
			<font color="gray"></font>
		</td>
	</tr>

	<tr class="admin_table_trbg" >
		<th>所在地：</th>
		<td  colspan="3">
			<div class="layui-input-inline">
				<select name="provinceid" id="provinceid" lay-filter="citys">
					<option value="">请选择</option>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['provinceid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
					<?php } ?>
				</select>
			</div>
			
			<div class="layui-input-inline">
				<select name="cityid" lay-filter="citys" id="cityid">
					<option value="">请选择</option>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
					<?php } ?>
				</select>
			</div>
          
			<div class="layui-input-inline">
				<select name="three_cityid" lay-filter="three_cityid" id="three_cityid">
					<option value="">请选择</option>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['three_cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
					<?php } ?>
				</select>
			</div> 
		</td>
	</tr>
   
	<tr class="admin_table_trbg" >
		<th>注册资金：</th>
		<td colspan="3"> 
			<div class="layui-input-block" style="float:left">
				<div class="layui-input-inline">
					<select name="moneytype" id="moneytype" lay-verify="" >
						<option value="0">请选择</option>
						<option value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']=='1') {?>selected<?php }?>>人民币</option>
						<option value="2"  <?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']=='2') {?>selected<?php }?>>美元</option>
					</select>
				</div>
			</div>
			<input type="text" name="money" size="10" class="admin_comedity_text" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['money']=='') {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['row']->value['money'];
}?>" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" style="width:50px;margin-left:10px;"/>
			<span class='moneyname'><?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']=='2') {?>万美元<?php } else { ?>万元<?php }?></span>
		</td>
	</tr>

	<tr class="admin_table_trbg" >
		<th>联系QQ：</th>
		<td colspan="3"> 
			<input type="text" name="linkqq" size="15" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkqq'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/>
		</td>
	</tr>

    <tr>
        <th>企业网址：</th>
		<td colspan="3"> <input type="text" name="website" size="35" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['website'];?>
" /></td>
	</tr> 

 	<tr>
		<th>企业简介：</th>
		<td colspan="3">
 			<?php echo '<script'; ?>
 id="myEditor" name="content" type="text/plain" style="width:400px;height:200px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
<?php echo '</script'; ?>
>
		</td>
	</tr>
	<tr>
        <th width="120">福利待遇：</th>
        <td colspan="3"> 
			<div class="layui-input-block">
				<span class="" id="addwelfarelist">
 					<?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tv']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['arraywelfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tv']->key;
?>
						<input name="welfare[]" value="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['tv']->value,$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?> checked="checked" <?php }?> type="checkbox" title="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" data-tag="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" class="changewelfare" lay-skin="primary">
					<?php } ?>
		        </span>
 				
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
 					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
<?php $_tmp1=ob_get_clean();?><?php if (!in_array($_tmp1,$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?>
						<input name="welfare[]" value="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value],$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?> checked="checked" <?php }?> type="checkbox" title="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" data-tag="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" class="changewelfare" lay-skin="primary">
					<?php }?>
				<?php } ?>
		      	<div class="addwelfare_b">
		      		<input class="input-text" type="text" tabindex="1000" id="addwelfare" >
					<a class="addwelfarebox">添加福利</a>    
				</div>
			</div>
        </td>
	</tr>
	
	<tr>
		<th width="160">公司二维码：</th>
		<td colspan="3">
			<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'comqcode',imgid: 'imgicon'}">上传图片</button>
			<input type="hidden" id="layupload_type" value="2"/>
			<input type="hidden" id="upload_path" value="company"/>
			<input type="hidden" name="comqcode" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['comqcode'];?>
"/>
			<img id="imgicon" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['comqcode'];?>
" width="100" height="100" <?php if (!$_smarty_tpl->tpl_vars['row']->value['comqcode']) {?>class="none"<?php }?>/>
		</td>
	</tr>
	
	<tr>
		<th>公交站点：</th>
		<td colspan="3"><textarea name="busstops" id="busstops" cols="70" rows="3" class="admin_comdit_textarea"><?php echo $_smarty_tpl->tpl_vars['row']->value['busstops'];?>
</textarea></td>
	</tr>
	<tr>
		<th>联系方式：</th>
		<td colspan="3">
			<div class="layui-form-item">
				<div class="layui-input-block">
					<div class="layui-input-inline">
						<select name="infostatus" id="infostatus" lay-verify="" >
							<option value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['infostatus']=='1') {?>selected<?php }?>>公开</option>
							<option value="2"  <?php if ($_smarty_tpl->tpl_vars['row']->value['infostatus']=='2') {?>selected<?php }?>>不公开</option>
						</select>
					</div>
				</div>
			</div>
		</td>
	</tr>
 	
	<tr class="admin_table_trbg">
		<th>管理员评价：</th>
		<td colspan="3"><input type="text" name="admin_remark" size="70" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['admin_remark'];?>
" /></td>
	</tr>
	
	<tr >
		<th>状态：</th>
		<td colspan="3">
			<div class="layui-form-item">
				<div class="layui-input-block">
					<div class="admin_examine_right">
                      	<input name="status" id="status0" <?php if ($_smarty_tpl->tpl_vars['com_info']->value['status']=='0') {?>checked<?php }?>  value="0" title="未审核" type="radio"/>
						<input name="status" id="status1" <?php if ($_smarty_tpl->tpl_vars['com_info']->value['status']=='1') {?>checked<?php }?> value="1" title="正常" type="radio"/>
						<input name="status" id="status2" <?php if ($_smarty_tpl->tpl_vars['com_info']->value['status']=='2') {?>checked<?php }?> value="2" title="锁定" type="radio"/>
                    </div>
				</div>
			</div>	
			<font color="gray"></font>
		</td>
	</tr>

	<tr id="lock_info" <?php if ($_smarty_tpl->tpl_vars['com_info']->value['status']!='2') {?>style="display:none"<?php }?>>
		<th>锁定说明：</th>
		<td colspan="3"><textarea   name="lock_info" cols="70" rows="2" class="admin_comdit_textarea"><?php echo $_smarty_tpl->tpl_vars['com_info']->value['lock_info'];?>
</textarea></td>
    </tr>
    
	<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating']!="0") {?>
	<tr>
		<td colspan="4"bgcolor="#f0f6fb"><div class="admin_bold">账户数据</div></td>
	</tr>
	
	<tr>
		<th>剩余职位数：</th>
		<td><input type="text" name="job_num" size="15" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
		
		<th>刷新职位数：</th>
		<td><input type="text" name="breakjob_num" size="15" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
		
		
		</tr>
	<tr class="admin_table_trbg" >
		
		<th>剩余兼职职位数：</th>
		<td><input type="text" name="part_num" size="15" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['statis']->value['part_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
		
		<th>刷新兼职职位数：</th>
		<td><input type="text" name="breakpart_num" size="15" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakpart_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /></td>
		
	</tr>
	<tr>
		<th>剩余下载数：</th>
		<td><input type="text" name="down_resume" size="15" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['statis']->value['down_resume'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /></td>
		
		<th>邀请人才面试数：</th>
		<td><input type="text" name="invite_resume" size="15" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['statis']->value['invite_resume'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /></td>
	</tr>
    <tr class="admin_table_trbg" >
		<th>剩余猎头职位数：</th>
		<td><input type="text" name="lt_job_num" size="15" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['statis']->value['lt_job_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
		
		<th>刷新猎头职位数：</th>
		<td><input type="text" name="lt_breakjob_num" size="15" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['statis']->value['lt_breakjob_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /></td>
	</tr>
	<tr>
		<th>剩余高级简历下载数：</th>
		<td><input type="text" name="lt_down_resume" size="15" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['statis']->value['lt_down_resume'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
		
		<th>招聘会报名次数：</th>
		<td><input type="text" name="zph_num" size="15" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['statis']->value['zph_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
	</tr>
	<?php }?>

	<tr class="admin_table_trbg" >
	<th></th>
		<td align="left" colspan="3">
        <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['com_info']->value['uid'];?>
" id="uid"/>
        <input type="hidden" name="lasturl" value="<?php echo $_smarty_tpl->tpl_vars['lasturl']->value;?>
">
        <input class="layui-btn layui-btn-normal" type="button" onclick="ckform()" value="&nbsp;修 改&nbsp;" />
		<input class="layui-btn layui-btn-normal" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
	</tr>
</table>
<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
</form>
<?php echo '<script'; ?>
 language="javascript">
$(document).ready(function(){
	$("input[name=status]").click(function(){
		if($(this).val()=="2"){
			$("#lock_info").show();
		}else{
			$("#lock_info").hide();
		}
	});
	 
	$('.addwelfarebox').click(function(){

		var welfare = $('#addwelfare').val();
		var error=0;
		if(welfare.length>=2 && welfare.length<=8){
 			$('.changewelfare').each(function(){
				var otag = $(this).attr('data-tag');
				if(welfare == otag){
					layer.msg('相同福利已存在，请选择或重新填写！', 2,8);
					error = 1;
				}
			});
			if(error==0){
				$('#addwelfarelist').append('<input name="welfare[]" value="'+welfare+'" checked="checked"  type="checkbox" title="'+welfare+'" data-tag="'+welfare+'" class="changewelfare" lay-skin="primary">');
				layui.use(['layer', 'form'], function(){
				    var layer = layui.layer
				    ,form = layui.form
				    ,$ = layui.$;
				    form.render('checkbox');
				});
			}
			$('#addwelfare').val('');
		}else{
			layer.msg('请输入2-8个福利字符！', 2,8);
		}
		
	});
});
UE.getEditor('myEditor',{
	toolbars:[['Bold', 'italic', 'underline', 'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright','insertorderedlist', 'insertunorderedlist']],
	wordCount:false,
    elementPathEnabled:false,
    initialFrameHeight:200
});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
var form ,url = weburl+"/index.php?m=ajax&c=get_city_option";

  layui.use(['layer', 'form','laydate'], function(){
   form = layui.form;
   var laydate = layui.laydate
    ,$ = layui.$;
	laydate.render({
		elem: '#vip_etime'
	});

   }); 
<?php echo '</script'; ?>
>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/city.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
