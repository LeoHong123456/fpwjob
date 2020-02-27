<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-17 11:07:53
         compiled from "/www/fpwjob/uploads/app/template/member/com/info.htm" */ ?>
<?php /*%%SmartyHeaderCode:201325045e4a0389e4a139-06545687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ab6934239ff7e721b295c546581320bfa3d56f3' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/info.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201325045e4a0389e4a139-06545687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'user_style' => 0,
    'row' => 0,
    'save' => 0,
    'cert' => 0,
    'industry_index' => 0,
    'v' => 0,
    'industry_name' => 0,
    'comdata' => 0,
    'comclass_name' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'tv' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4a038a01c435_34371756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4a038a01c435_34371756')) {function content_5e4a038a01c435_34371756($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lssave.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/binding.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/map.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 language="javascript">
	var userstyle='<?php echo $_smarty_tpl->tpl_vars['user_style']->value;?>
';
	
	var save= $("#save").val();
	var start = 30;
	var step = -1;
	if(!save){
		function count(){
			$("#atime").click(function(){ start=30});
			$("#totalSecond").html(start);
			start += step;
			if(start < 0 ){
				savecomform();
				start = 30;
			}
			setTimeout("count()",1000);
		}
		window.onload = count;	
	}


	function checkpostcom(){
		
		var ifcheck = check_form(document.myform.name.value=="",'by_name') & 
		check_form(document.myform.hy.value=="",'by_hy') & 
		check_form(document.myform.pr.value=="",'by_pr') & 
		check_form(document.myform.mun.value=="",'by_mun') & 
		check_form(document.myform.cityid.value=="",'by_cityid') & 
		check_form(document.myform.address.value=="",'by_address') & 
		check_form(document.myform.linkman.value=="",'by_linkman');

		if(ifcheck==0){return false;} 

		<?php if ($_smarty_tpl->tpl_vars['row']->value['moblie_status']==1) {?>
			ifmoblie = true;
		<?php } else { ?>
			ifmoblie = isjsMobile(document.myform.linktel.value);
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['row']->value['email_status']==1) {?>
			ifemail = true; 
		<?php } else { ?>
			var mail=document.myform.linkmail.value;
			if(mail==""){
				ifemail = true;
			}else{
				ifemail = check_email(mail);
			}
		<?php }?>

		if(document.myform.phonetwo.value!=''){
			if(document.myform.phoneone.value==''){
				layer.msg('请填写区号！', 2, 8);return false;
			}else if(document.myform.phoneone.value.length>4){
				layer.msg('请正确填写区号！', 2, 8);return false;
			}else if(document.myform.phonethree.value){
				var linkphone = document.myform.phoneone.value+'-'+document.myform.phonetwo.value+'-'+document.myform.phonethree.value;
			}else{
				var linkphone = document.myform.phoneone.value+'-'+document.myform.phonetwo.value;
			}
		}
		if(!document.myform.linktel.value && !linkphone){
			layer.msg('联系手机和固定电话必填一项！', 2, 8);return false; 
		}
		if(ifmoblie==false && document.myform.linktel.value!=''){ 
			layer.msg('联系手机格式不正确！', 2, 8);return false;
		}
		if(linkphone){
			if(!isjsTell(linkphone) && linkphone!=""){
				layer.msg('固话格式不正确！', 2, 8);return false;
			}
		}
		var html = editor.getContent();
		if(html==""){
			layer.msg('企业简介不能为空！', 2, 8);return false;
		}
		
		var website=$.trim($("#website").val());
		if(website!=''){
			if(check_url(website)==false){
				layer.msg('企业网址格式不正确！', 2, 8);return false;
			}
		}
		var qq=$.trim($("#linkqq").val());
		if(qq!=''&&isQQ(qq)==false){
			layer.msg('QQ格式不正确！', 2, 8);return false; 
		}
		$("#infoform").submit();
		layer.load('执行中，请稍候...',0);
	} 	
<?php echo '</script'; ?>
> 

<div class="w1000">
	<div class="admin_mainbody"> 
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
    <div class=right_box>
		<div class=admincont_box>

        <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
        <form id="infoform" name="myform" method="post" target="supportiframe" action="index.php?c=info&act=save" autocomplete="off" enctype="multipart/form-data" class="layui-form">
			<div class="com_tit"><span class="com_tit_span">企业资料</span></div>
			<div class="job_list_tit">
				<ul class="">
					<li class="job_list_tit_cur"><a href="index.php?c=info">基本信息</a></li>
					<li><a href="index.php?c=map">企业地图</a></li>
					<li><a href="index.php?c=news">企业新闻</a></li>
					<li><a href="index.php?c=show">企业环境</a></li>
					<li><a href="index.php?c=product">企业产品</a></li>
				</ul>
			</div>

			<div class="clear"></div>
			<?php if ($_smarty_tpl->tpl_vars['save']->value) {?>
				<div id="forms" class="com_tip_box mt20">
					<div class="com_tip">
						<i class="com_tip_icon"></i>
						您有上次未提交成功的数据<a href="javascript:;" onclick="savecom();" class="text_tips_a">恢复数据</a> 
						<i id="close" class="text_tips_close"></i>
					</div>
				</div>
			<?php }?>

           <div class="com_release_box">
			<ul>
				<li>
					<div class="com_release_name"><i class="ff0">*</i>  企业全称</div>
					<?php if ($_smarty_tpl->tpl_vars['row']->value['yyzz_status']==1) {?>
						<label><div class="info_comname_text"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</div></label>
						<input type="hidden"  name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
">
					<?php } else { ?>
						<div class="com_release_cont_text">
							<input type="text" size="45" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" lay-verify="required" class="layui-input" />  
						</div>
						<div id="cdiv" class="com_">
							<?php if (!empty($_smarty_tpl->tpl_vars['cert']->value)) {?>
								<?php if ($_smarty_tpl->tpl_vars['cert']->value['status']==2) {?>
									<div id="dcert" class="com_info_tipbox_p">
										<?php if ($_smarty_tpl->tpl_vars['cert']->value['statusbody']) {?>  
											<div class="com_info_tipbox_box">
												<i class="com_info_tip_icon"></i>
												<div id="showcomstatusbody" style="display:none;">
													<div class="info_z_y"><?php echo $_smarty_tpl->tpl_vars['cert']->value['statusbody'];?>
</div> 
												</div>
 												<a href="javascript:void(0)"  onclick="getyyzzcom('营业执照认证',550,310);" class="com_set_a fl" >重新认证</a>
												<span class="" style="margin-left:5px;">
													审核未通过
													<a class="infor_check" href="javascript:void(0)" onclick="showcomstatusbody();" style="color:#09F">说明</a>
												</span>
											</div>
										<?php }?>
									</div>
								<?php } else { ?>
									<div id="dcert" class="com_info_tipbox_p">   
										<div class="com_info_tipbox_box"><i class="com_info_tip_icon"></i>营业执照已上传，请等待审核</div>
									</div>
								<?php }?>
							<?php } else { ?>
								<div id="dcert" class="com_info_tipbox_p">   
									<div class="com_info_tipbox_box"><i class="com_info_tip_icon"></i>请与贵公司营业执照保持一致 <a href="javascript:void(0)"  onclick="getyyzzcom('营业执照认证',550,310);" class="com_set_a" ><i class="com_set_a_rzicon"></i>企业认证</a></div>
								</div>
							<?php }?>
						</div>
					<?php }?> 
					<span id="by_name" class="errordisplay">企业全称不能为空</span>
				</li>

				<li>
					<div class="com_release_name"> 简称</div>
					<div class="com_release_cont_text">
						<input type="text" size="45" id="shortname" name="shortname" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['shortname'];?>
" lay-verify="required" class="layui-input"/>
					</div>
					<span id="by_shortname" class="errordisplay">简称不能为空</span>
				</li>

				<li>
					<div class="com_release_name"><i class="ff0">*</i> 从事行业</div>
					<div class="com_release_selectbox">
						<div class="layui-input-inline">
							<select name="hy" lay-filter="hy">
								<option value="">请选择</option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['hy']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
								<?php } ?>
							</select>
						</div>
						<span id="by_hy" class="errordisplay">请选择从事行业</span> 
					</div>
				</li>
				<li>
					<div class="com_release_name"><i class="ff0">*</i> 企业性质</div>
					<div class="com_release_selectbox">
						<div class="layui-input-inline">
							<select name="pr" lay-filter="pr">
								<option value="">请选择</option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['pr']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
								<?php } ?>
							</select>
						</div>
						<span id="by_pr" class="errordisplay">企业性质不能为空！</span> 
					</div>
				</li>

				<li>
					<div class="com_release_name"><i class="ff0">*</i> 企业规模</div>
					<div class="com_release_selectbox">
						<div class="layui-input-inline">
							<select name="mun" lay-filter="mun">
								<option value="">请选择</option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['mun']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
								<?php } ?>
							</select>
						</div>
						<span id="by_mun" class="errordisplay">请选择企业规模</span> 
					</div>
				</li>
				<li>
					<div class="com_release_name"><i class="ff0">*</i> 所在地</div>
					
					<div class="com_release_select com_release_selectw145">
						<div class="layui-input-inline">
							<select name="provinceid" lay-filter="citys" id="provinceid">
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
					</div>

					<div class="com_release_select com_release_selectw145">
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
					</div>
                    <div class="com_release_select com_release_selectw145">
						<div class="layui-input-inline" id="cityshowth" <?php if ($_smarty_tpl->tpl_vars['row']->value['three_cityid']<1) {?>style="display:none"<?php }?>>
							<select name="three_cityid" id="three_cityid">
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
					</div>
					<span id="by_cityid" class="errordisplay">请选择所在地</span> 
				</li>
				<li>
					<div class="com_release_name"><i class="ff0">*</i> 公司地址</div>
					<div class="com_release_cont_text com_info_tip">
						<input type="text" id="address" name="address" size="45" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
" class="layui-input"/>
						<i class="com_release_mapicon" onclick="setmap('<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
')"></i>
					</div>
					<?php if (!$_smarty_tpl->tpl_vars['row']->value['x']||!$_smarty_tpl->tpl_vars['row']->value['y']) {?>
						<div class="com_info_tipbox_p" id="setmaptip">   
							<div class="com_info_tipbox_box">
								<i class="com_info_tip_icon"></i>方便求职者查找贵公司位置请 
								<a href="javascript:void(0)"  onclick="setmap('<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
')" class="com_set_a">设置地图</a>
							</div>
						</div>
					<?php }?>
					<span id="by_address" class="errordisplay">请填写正确的公司地址</span> 
				</li>
				<li>
					<div class="com_release_name"><i class="ff0">*</i> 联  系  人</div>
					<div class="com_release_cont_text">
						<input type="text" id="linkman" name="linkman" size="15" lay-verify="required" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkman'];?>
" class="layui-input"/>   
					</div>
					<span id="by_linkman" class="errordisplay">请填写招聘联系人</span> 
				</li>
				
				<li>
					<div class="com_release_name">联系手机</div>
					<div class="com_release_cont_text">
						<div id="bdphone"> 
							<?php if ($_smarty_tpl->tpl_vars['row']->value['moblie_status']==1) {?>
								<input type="text" size="35" id="linktel" name="linktel" lay-verify="phone" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
" class="com_info_text" style="width:300px;background:#f8f8f8;" readonly="readonly"/>
								<div class="com_info_tipbox_p">   
									<div class="com_info_tipbox_box">
										<i class="com_info_tip_icon"></i>若需修改手机号可   
										<a href="javascript:void(0)" onclick="getshow('moblie','绑定手机号码');" class="com_set_a">重新绑定</a>
									</div>
								</div>
							<?php } else { ?>
								<input type="text" id="linktel" name="linktel" size="25" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" class="layui-input"/>
								<div class="com_info_tipbox_p">   
									<div class="com_info_tipbox_box">
										<i class="com_info_tip_icon"></i>及时通知求职者申请信息请   
										<a href="javascript:void(0)" onclick="getshow('moblie','绑定手机号码');" class="com_set_a">绑定手机</a>
									</div>
								</div>
								<span id="by_linktel" class="errordisplay">手机格式不正确</span>
							<?php }?> 
						</div>   
					</div>
					<span class="com_release_teltip"><font color="#FF0000">*</font> 固定电话与手机号码必须填写一项</span> 
				</li>

				<li>
					<div class="com_release_name"><i class="ff0">*</i> 固定电话</div>
					<div class=textbox>
						<input type="text" id="phoneone" name="phoneone" style="width:60px" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phoneone'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="com_info_text" placeholder="区号" maxlength="4"/>
						<span class="com_info_text_r">-</span>
						<input type="text" id="phonetwo" placeholder="座机号" name="phonetwo"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phonetwo'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" maxlength="8" class="com_info_text com_info_text_120"/>
						<span class="com_info_text_r">-</span>
						<input type="text" id="phonethree" placeholder="分机号" name="phonethree"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phonethree'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="com_info_text com_info_text_60"/>
					</div>
				</li>
				
				<li>
					<div class="com_release_name"> 企业邮箱</div>
					<div class=textbox id="bdmail"> 
						<?php if ($_smarty_tpl->tpl_vars['row']->value['email_status']==1) {?>
							<input type="text" id="linkmail" name="linkmail" size="35" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkmail'];?>
" class="com_info_text" style="width:300px;background:#f8f8f8;" readonly="readonly"/>
							<div class="com_info_tipbox_p">   
								<div class="com_info_tipbox_box">
									<i class="com_info_tip_icon"></i>若需修改招聘邮箱可 
									<a href="javascript:void(0)"  onclick="getshow('email','绑定邮箱');"  class="com_set_a">重新绑定</a>
								</div>
							</div>
						<?php } else { ?>
							<input type="text" id="linkmail" name="linkmail" size="35" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkmail'];?>
" class="com_info_text" />
							<div class="com_info_tipbox_p">   
								<div class="com_info_tipbox_box">
									<i class="com_info_tip_icon"></i>方便接受简历投递信息请 
									<a href="javascript:void(0)"  onclick="getshow('email','绑定邮箱');" class="com_set_a">邮箱绑定</a>
								</div>
							</div>
						<?php }?> 
						<span id="by_linkmail" class="errordisplay">请填写企业邮箱</span> 
					</div>
				</li>
				<li>
					<div class="com_release_name"><i class="ff0">*</i>  企业简介</div>
					<div class=textbox>
 						<?php echo '<script'; ?>
 id="content" name="content" type="text/plain" style="width:640px; height:150px;"> <?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
 <?php echo '</script'; ?>
>
					</div>
				</li>
                 
				<div class="com_release_tip"><span class="com_release_tip_bg">完善基本信息，让求职者更了解您的企业，增加简历投递量</span></div>
				
				<li>
					<div class="com_release_name"> LOGO图片</div>
					<div class="info_logo_box ">		
						<img src=".<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
" width="80" height="80" id="logo" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
','2')"/>
						<div class="">
							<button type="button" class="yun_bth_pic mt10 adminupload" lay-data="{imgid: 'logo',path: 'company'}">上传LOGO</button>
						</div>  
						<div class="info_logo_tip">
							注：上传图片后便于求职者能快速认识你的企业，如果您的LOGO<br>不利于求职者快速识别你的企业，请在图片上加上公司简称
						</div>
					</div>
				</li>
				<li>
					<div class="com_release_name"> 创办时间</div>
 					<input type="text" name="sdate" id="sdate" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sdate'];?>
" class="com_info_text">
				</li>
				<li>
					<div class="com_release_name"> 注册资金</div>
					
					<div class="com_release_select com_release_selectw145">
						<div class="layui-input-inline">
							<select name="moneytype" lay-filter="moneytype">
								<option value="">请选择</option>
								<option value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']==1) {?> selected<?php }?>>人民币</option>
								<option value="2" <?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']==2) {?> selected<?php }?>>美元</option>
							</select>
 						</div>
					</div>

					<div class="layui-input-inline">
						<input type="text" id="money" name="money" size="10" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="com_info_text com_info_text_120" />
 						<span class='moneyname' id="money_1" <?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']!='1') {?>style="display:none;"<?php }?>>万元</span>
 						<span class='moneyname' id="money_2" <?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']!='2') {?>style="display:none;"<?php }?>>万美元</span>
					</div>
				</li>
             
				<li>
					<div class="com_release_name"> 联系人职位</div>
					<div class=textbox>
						<input type="text" id="linkjob" name="linkjob" size="15" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkjob'];?>
" class="com_info_text"/>
					</div>
				</li>

				<li>
					<div class="com_release_name"> 联 系 QQ</div>
					<div class=textbox>
						<input type="text" id="linkqq" name="linkqq" size="15" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkqq'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" maxlength='12' class="com_info_text"/>
					</div>
				</li>

				<li>
					<div class="com_release_name"> 企业网址</div>
					<div class="textbox">
						<input type="text" id="website" name="website" size="35" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['website'];?>
" class="com_info_text"/>
						如：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
 
					</div>
				</li>
				<li>
					<div class="com_release_name"> 公交站点</div>
					<div class="textbox">
						<textarea name="busstops" id="busstops" class="com_info_textarea" rows="3"><?php echo $_smarty_tpl->tpl_vars['row']->value['busstops'];?>
</textarea>
					</div>
				</li>

				<li>
					<div class="com_release_name"> 联系方式</div>
					<div class="com_release_selectbox">
						<div class="layui-input-inline">
							<select name="infostatus" lay-filter="infostatus">
								<option value="">请选择</option>
								<option value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['infostatus']==1) {?> selected<?php }?>>公开</option>
								<option value="2" <?php if ($_smarty_tpl->tpl_vars['row']->value['infostatus']==2) {?> selected<?php }?>>不公开</option>
							</select>
						</div>   
					</div>
				</li>
				<li>
					<div class="com_release_name"> 公司二维码</div>
					<button type="button" class="yun_bth_pic adminupload" lay-data="{imgid: 'ewm',path: 'company',parentid:'imgparent'}">上传二维码</button>
    				<div class="com_release_nameewm_img <?php if (!$_smarty_tpl->tpl_vars['row']->value['comqcode']) {?>none<?php }?>" id="imgparent"> 
						<img id="ewm" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['comqcode'];?>
" width="40" height="40">
					</div>
				</li>
				<li class="jobadd_list_fl">
					<div class="com_release_name">福利待遇</div>
 					<div class="layui-form-item">
						<div class="layui-input-block">
							<span class="" id="addwelfarelist">
								<?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tv']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['arraywelfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tv']->key;
?>
									<input name="welfare[]" id="welfare<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
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
									<input name="welfare[]" id="welfare<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" value="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value],$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?> checked="checked" <?php }?> type="checkbox" title="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" data-tag="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" class="changewelfare" lay-skin="primary">
								<?php }?>
							<?php } ?>
							<div class="addwelfare_b">
								<input class="addwelfare_text" type="text" tabindex="1000" id="addwelfare" ><a class="addwelfarebox">添加福利</a>    
							</div>
						</div>
					</div>
				</li>
				<li>
					<input type="hidden" id="logid" name="logid">
					<input class="btn_01" style="_margin-left:-3px" type="button" onclick="checkpostcom()" value="保存信息">
					<input id="save" name="save" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkman'];?>
" type="hidden"/>
				</li>
            </ul>
            <div class="clear"></div>
          </div>
          <?php if (!$_smarty_tpl->tpl_vars['row']->value['content']) {?>
          <div class="text_tips_bc">
            <div class="text_tips_bc_h1"> 信息保存</div>
            <div class="text_tips_bc_cont"> <?php if ($_smarty_tpl->tpl_vars['save']->value['time']) {?>
              <div class="text_tips_bc_l">信息已于<?php echo $_smarty_tpl->tpl_vars['save']->value['time'];?>
保存</div>
              <?php }?>
              <div class="text_tips_bc_r">
                <div class="text_tips_bc_time"> <span id="totalSecond"></span>s后将自动保存<br>
                  已填信息</div>
                <a  id="atime" href="javascript:;" onclick="savecomform();" class="text_tips_bc_bth">临时保存信息</a> </div>
            </div>
          </div>
          <?php }?>
		  <div class="clear"></div>
        </form>
		<div class="clear"></div>
      </div>
    </div>
  </div>
</div>  
<div class="clear"></div>

<div id="yyzz" style=" display:none;">
	<div class="license_box">
		<div class="license_tip">提示：营业执照中的公司名称与招聘账号的公司名称保持一致，扫描件中的注册号,企业名称，年检章等需清晰可辨，否则不能通过认证</div>
		<form name="MyForm" >
			<div class="license_left">
				<div class="license_tit">方式一：本地上传</div>
				<div class="license_list">
					<span class="license_list_name"><i class="Binding_pop_box_list_left_i">*</i>公司名称</span>
					<input  type="text" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" name="company_name" id="company_name" class="license_left_text">
				</div>

				<div class="license_list">
					<span class="license_list_name"><i class="Binding_pop_box_list_left_i">*</i>上传副本</span>
					<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'check',imgid: 'imgicon',parentid: 'imgparent1',imga: 'checka'}">上传图片</button>
					<input type="hidden" id="layupload_type" value="2"/>
					<input type="hidden" id="upload_path" value="cert"/>
					<input type="hidden" id="cert_pic" name="check" value="<?php echo $_smarty_tpl->tpl_vars['cert']->value['check'];?>
"/>
					<div id="imgparent1" class="licensefile_box_img <?php if (!$_smarty_tpl->tpl_vars['cert']->value['check']) {?>none<?php }?>">
						<img id="imgicon" src=".<?php echo $_smarty_tpl->tpl_vars['cert']->value['check'];?>
" width="40" height="40"/>        	
						<a target="_blank" id="checka" href=".<?php echo $_smarty_tpl->tpl_vars['cert']->value['check'];?>
" class="Binding_pop_box_msg_cont_pic_p">查看原图</a>
					</div>
					<div class="licensefile_box_tip">最大<?php echo $_smarty_tpl->tpl_vars['config']->value['file_maxsize'];?>
M,支持<?php echo $_smarty_tpl->tpl_vars['config']->value['pic_type'];?>
格式</div>
				</div>
				<div class="license_list">
					<input class="license_list_bth" onclick="certform()" type="button" value="提交">
				</div>
			</div>
		</form>
		<div class="license_right">
			<div class="license_tit">方式二：手机拍照上传</div>
			<div class="license_ewm">
				<img src="<?php echo smarty_function_url(array('m'=>'upload','c'=>'qrcode','type'=>1),$_smarty_tpl);?>
" alt="手机扫码拍照上传" width="130" height="130" />
			</div>
			<div class="license_right_p"> 扫描二维码 </div>
			<div class="">  打开我-修改资料-点击我要认证 </div>
		</div>
	</div>
</div>
 <div id="moblie" style=" display:none;">
  <div class="Binding_pop_box" style="padding:10px;width:480px;background:#fff;">


      <div class="Binding_pop_box_list" style=" display:block">
   <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>手机号码：</span>
  <input type="text" name="moblie" class="Binding_pop_box_list_text" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['linktel'];?>
">
   </div>
	 <div class="Binding_pop_box_list"><span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>验证码：</span>
	 <input type="text" name="phoneimg_code" maxlength="6" class="Binding_pop_box_list_text">
	 <img id="pcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" style=" margin:0 5px 5px 5px; vertical-align:middle;">
	 <a href="javascript:void(0);" onclick="checkCode('pcode_img');">看不清</a></div>
    <div class="Binding_pop_box_list">
   <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>手机校验码：</span>
   <div class="Binding_pop_right"> <input type="text" id="moblie_code" class="Binding_pop_box_list_text">
        <a href="javascript:;" onclick="sendmoblie('pcode_img');" class="Binding_pop_box_magbth" id="time">获取短信校验码
</a></div>
   
    </div>
    <div class="Binding_pop_box_list">  <input class="Binding_pop_bth" onclick="check_moblie();" type="button" value="提交">
      </div>
<div class="Binding_pop_tip">收不到短信验证码?</div>
<div class="Binding_pop_tip_p">
1.短信验证码有效时效为120秒，超过120秒请点击重新发送；<br>
2.如您手机无法收取短信或者收取延迟，请关机重启或者联系运营商处理；<br/>
3.如以上措施还无法解决，请确认用户名，手机号以及邮箱联系我司客服 
</div>
  </div>
</div>

 <div id="email" style="display:none;">
   <div class="Binding_pop_box" style="padding:10px;width:480px;background:#fff">
   
    <div >
      <div class="Binding_pop_box_list"><span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>我的邮箱：</span>
        <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['linkmail'];?>
" class="Binding_pop_box_list_text Binding_pop_box_list_textw200">
      </div>
      <div class="Binding_pop_box_list"><span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>验证码：</span>
        <input type="text" name="email_code" maxlength="6" class="Binding_pop_box_list_text">
        <img id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" style=" margin:0 5px 5px 5px; vertical-align:middle;">
        <a href="javascript:void(0);" onclick="checkCode('vcode_img');">看不清</a></div>
       <div class="Binding_pop_box_list"><input class=" Binding_pop_bth" type="button" onclick="sendbemail('vcode_img');" value="发送验证邮件">
      </div>
<div class="Binding_pop_tip">没收到邮件？</div>
<div class="Binding_pop_tip_p">
1. 请检查您的垃圾箱或者广告箱，邮件有可能被误认为垃圾或者广告邮件；<br/>
2.验证邮件24小时内有效，请尽快登录您的邮箱点击验证链接完成验证
    </div>
    </div>
  </div>
</div>


 <div id="setmap" style="display:none;">
 <div style="position:relative" style="width:740px;"> 
 <input type="hidden" name="type" value="info">
          <div class="infomap_seach"><input id="map_keyword" type="text" value="<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['three_cityid']];
echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
" class="infomap_seach_text" placeholder="请输入地址" onclick="if(this.value=='请输入地址'){this.value='';}" onblur="if(this.value==''){this.value='请输入地址';}"/><input type="button" value="搜索" onclick="localsearch('全国');" class="infomap_seach_sub"/></div>
          <table border="0" cellspacing="0" cellpadding="0" style="font-size:12px;">
              <tr>
                <th height="30"></th>
                <td><div id="map_container" style="width:739px;height:300px;"></div><br>
                </td>
              </tr>
              <tr>
                <th>&nbsp;</th>
                <td height="40"> X轴:
                  <input name="xvalue" id="map_x" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" readonly="readonly" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['x'];?>
"  class="com_info_text" style='float:none;width:260px'>
                  &nbsp;&nbsp;
                  Y轴:
                  <input name="yvalue" id="map_y" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" readonly="readonly" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['y'];?>
"  class="com_info_text" style='float:none;width:260px'>
                  &nbsp;&nbsp;
                  <input type="button" name="savemap" class="btn_01" value="保存地图" onclick="checkpost();" style="width:118px">
                  <span id="by_map" class="errordisplay">请先设置地图位置</span></td>
              </tr>
              <tr>
                <th height="30"></th>
                <td>
				  <div class="wxts_box wxts_box_mt20">
					<div class="wxts">操作说明：</div>
				   在地图区域点击公司所在的位置，点击保存地图。</div>
				</td>
				</tr>
          </table>
		 
          
   </div>
</div>
 <?php echo '<script'; ?>
>
function showcomstatusbody(){
	$.layer({
		type : 1,
		title : '审核说明',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['300px','auto'],
		page : {dom :"#showcomstatusbody"}
	});
}
function certform(){
	var company_name=$.trim($("#company_name").val());
	var com_cert=$('#cert_pic').val();
	if(company_name==''){
		layer.msg('企业全称不能为空！',2,8);
		return false;
	}
	 if(com_cert==''){
		layer.msg('请上传营业执照！',2,8);
		return false;
	 }
	var i=layer.load('执行中，请稍候...',0);
	$.post("index.php?c=binding&act=savecert", {
		company_name: company_name,
		check: com_cert,
		upfile: 'info'
	}, function (res) {
		layer.close(i);
		data=eval('('+res+')');
		if(data.msg){
			layer.msg(data.msg, 2, 8);
		}else{
			$("#dcert").remove();
			$("#cdiv").append(' <div id="dcert" class="com_info_tipbox_p"><div class="com_info_tipbox_box"><i class="com_info_tip_icon"></i>营业执照已上传</div></div>');
			layer.msg('营业执照已上传成功！', 2, 9); 
		}
	});
	setTimeout(function(){layer.close($("#layindex").val());},2000);
}

$(function () {
	
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

function getmap(){
   var map=new BMap.Map("map_container");
   var x = '<?php echo $_smarty_tpl->tpl_vars['config']->value['map_x'];?>
';
   var y = '<?php echo $_smarty_tpl->tpl_vars['config']->value['map_y'];?>
';
   if(!x || !y){
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 12);
   }else{
	map.centerAndZoom(new BMap.Point(x, y), 12);
	}
   
   return map;
}

function setmap(address){

	var x = $("#map_x").val();
	var y = $("#map_y").val();
	var layindex = $.layer({
		type : 1,
		title : '设置企业地图',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['790px','590px'],
		page : {dom :"#setmap"}
	});
	$("#layindex").val(layindex);
	var map=getmap();
	
	setLocation('map_container',116.404,39.915,"map_x","map_y",map);

	if(x && y){
		
	    setLocation('map_container',x,y,"map_x","map_y",map);
	}else if(address){
		

	    $("#map_keyword").val("<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['three_cityid']];
echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
");
		address = "<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['three_cityid']];
echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
";
		localsearch(address.replace(/\s+/g,""),map);

	}else{
	    
		function myFun(result){
			var cityName = result.name;
			map.setCenter(cityName);
		}
		var myCity = new BMap.LocalCity();
		myCity.get(myFun);
		
	}
}

function getLocalResult(local){
	var map_keyword=$.trim($("#map_keyword").val());
	var points=local.getResults();
		var lngLat=points.getPoi(0).point;
		setLocation('map_container',lngLat.lng,lngLat.lat,"map_x","map_y");
		document.getElementById("map_x").value=lngLat.lng;
		document.getElementById("map_y").value=lngLat.lat;
	
}
function localsearch(city){
	var map=getmap();
	setLocation('map_container',116.404,39.915,"map_x","map_y",map);
	
	if($("#map_keyword").val()==""){
		layer.msg('请输入地址！', 2, 8);return false;
	}
	
	var local = new BMap.LocalSearch(map, {
		renderOptions: {
			map: map
		}
	});
	local.clearResults();
	local.search($("#map_keyword").val().replace(/\s+/g,""));
	
}
function checkpost(){
	if($.trim($("#map_x").val())==''||$.trim($("#map_y").val())==''){
		layer.msg('请先设置地图位置！', 2, 8);return false;
	}
	var xvalue = $("#map_x").val();
	var yvalue = $("#map_y").val();
	$.post('index.php?c=map&act=save',{xvalue:xvalue,yvalue:yvalue,type:'info',savemap:'1'},function(data){
		
		if(data=='1'){
			layer.close($("#layindex").val());
			$("#setmaptip").hide();
			layer.msg('地图设置成功！', 2, 9);return false;
		}else{
			layer.msg('地图设置失败，请重试！', 2, 8);return false;
		}
	
	})
}
function setLocation(id,x,y,xid,yid,map){
	var data=get_map_config();
	var config=eval('('+data+')');
	var rating,map_control_type,map_control_anchor;
	if(!x && !y){x=config.map_x;y=config.map_y;}
	var point = new BMap.Point(x,y);
	var marker = new BMap.Marker(point);
	var opts = {type:BMAP_NAVIGATION_CONTROL_LARGE}
	map.enableScrollWheelZoom(true);
	map.addControl(new BMap.NavigationControl(opts));
	map.centerAndZoom(point, 15);
	map.addOverlay(marker);
	map.addEventListener("click",function(e){
	   var info = new BMap.InfoWindow('', {width: 260});
		var projection = this.getMapType().getProjection();
		var lngLat = e.point;
		document.getElementById(xid).value=lngLat.lng;
		document.getElementById(yid).value=lngLat.lat;
		map.clearOverlays();
		var point = new BMap.Point(lngLat.lng,lngLat.lat);
		var marker = new BMap.Marker(point);
		map.addOverlay(marker);
	});
}

layui.use(['form','layer', 'laydate'], function(){
    var $ = layui.$,
		form = layui.form,
		laydate = layui.laydate,
		layer = layui.layer;

	laydate.render({
		elem: '#sdate'
	})

	form.on('select(moneytype)', function(data){
      if(data.value == 1){
        $("#money_1").show();
        $("#money_2").hide();
      }else{
        $("#money_2").show();
        $("#money_1").hide();
      }
    });

  });

  $('#showUploadQrcode').on('mouseover', function(){
    var that = this;
    layer.tips( '<img src="<?php echo smarty_function_url(array('m'=>'upload','c'=>'qrcode','type'=>1),$_smarty_tpl);?>
" alt="手机扫码拍照上传" />', that); 
    return false;
  });

  $('#showUploadQrcode').on('mouseout', function(){
    layer.closeAll('tips');
  });
  
<?php echo '</script'; ?>
>
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
		toolbars:[[ 'Source','|', 'Undo', 'Redo','Bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'fontfamily', 'fontsize',  'forecolor', 'backcolor', 'removeformat', 'autotypeset', 'pasteplain', '|','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload', '|', 'indent', '|','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify']],wordCount:false,elementPathEnabled:false,initialFrameHeight:200
	});
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	var second = 0;
	window.setInterval(function () {
		second ++;
	}, 1000);

	var url     = location.href, 
		refer   = document.referrer, 
		timeIn  = Math.ceil(new Date().getTime()/1000); 
	
	$(function(){
		setTimeout(function(){ 
			$.post('index.php?c=log',{url:url,refer:refer,timeIn:timeIn,second:2,opera:10},function(data){
				if(data){
					$("#logid").val(data);
				}
			})
		},2000);
		
    }) 
	
	window.onbeforeunload = function(){
		var logid = $("#logid").val();
 		if(second>2){ 
			$.post('index.php?c=log&act=gxLog',{id:logid,second:second},function(data){
				if(data) {
					return false;
				}
			})
		}
   	}
	
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
