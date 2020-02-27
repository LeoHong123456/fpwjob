<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 21:00:23
         compiled from "/www/fpwjob/uploads/app/template/member/user/info.htm" */ ?>
<?php /*%%SmartyHeaderCode:2373974785e4d316709f729-02228362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3efc0d393c7c5ac18d7bc435992c29cd1f77cad9' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/user/info.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2373974785e4d316709f729-02228362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'save' => 0,
    'row' => 0,
    'nametype' => 0,
    'key' => 0,
    'v' => 0,
    'arr_data' => 0,
    'j' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
    'user_photo' => 0,
    'user_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4d3167147253_32810321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4d3167147253_32810321')) {function content_5e4d3167147253_32810321($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lssave.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<div class="yun_w1200">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="yun_m_rightbox fltR mt20 re">
	<form id="infoform" name="MyForm" method="post" action="index.php?c=info&act=save" target="supportiframe" enctype="multipart/form-data" class="layui-form">
		<div class="member_right_index_h1 fltL"> 
			<span class="member_right_h1_span fltL">账号设置</span> 
			<i class="member_right_h1_icon user_bg"></i>
		</div>
		
		<div class="clear"></div>

		<div class="job_list_tit">
			<ul class="">
				<li class="job_list_tit_cur"><a href="index.php?c=info">基本信息</a><i class="left_sidebar_leftmune_icon"></i></li>
				<li><a href="index.php?c=passwd">账号安全</a></li>
				<li><a href="index.php?c=binding">绑定授权</a></li>
				<li><a href="index.php?c=uppic">上传照片 </a></li>
			</ul>
		</div>
		
		<div class="resume_Prompt_box">
			<div class="resume_Prompt"><i class="resume_Prompt_icon"></i>安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗！</div>
			<?php if ($_smarty_tpl->tpl_vars['save']->value) {?>
				<div class="resume_Prompt">您有上次未提交成功的数据 <a href="javascript:;" onclick="saveuser();" class="text_tips_a">恢复数据</a></div>
			<?php }?>
		</div>

 			 
 
		<div class="resume_box_list" style="margin-top:0px;">
			<div class="yun_m_info">
				<ul>
					<li class="yun_m_info_list">
						<div class="yun_m_info_name"><b>*</b> 姓 名</div>
						<div class="yun_m_info_text">
							<div class="yun_m_info_text_name_box">
								<input name="name" id="name" type="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" class="yun_m_info_text_name_box_t" />
							</div>

							<div class="yun_m_info_text_gk">
              					<div class="layui-form-item">
									<div class="layui-input-inline" style="width:100px;">
										<select name="nametype" lay-filter="" id="nametypecid">
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nametype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['nametype']==$_smarty_tpl->tpl_vars['key']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
										<?php } ?>
										</select>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="yun_m_info_list">
						<div class="yun_m_info_name"><b>*</b> 性 别</div>
						<div class="yun_m_info_text"> 
							<div class="layui-input-inline">
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<input type="radio" id="sex" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['j']->value==$_smarty_tpl->tpl_vars['row']->value['sex']) {?>checked="checked"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" />
								<?php } ?>
							</div>
						</div>
						<span id="by_sex" class="errordisplay">请选择性别</span> 
					</li>

					<li class="yun_m_info_list">
						<div class="yun_m_info_name"> <b>*</b> 出生年月</div>
						<div class="yun_m_info_text"> 
							<div class="layui-input-inline">
								<input name="birthday" id="birthday" type="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['birthday'];?>
" class="yun_m_info_birthday" />
							</div>
						</div>
						<span id="by_birthday" class="errordisplay">请正确填写出生年月</span>
					</li>

					<li class="yun_m_info_list">
						<div class="yun_m_info_name"><b>*</b> 最高学历</div>
						<div class="yun_m_info_text">
							<div class="layui-input-inline yun_m_info_w250">
								<select name="edu" lay-filter="" id="educid">
									<option value="">请选择最高学历</option>
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['edu']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
									<?php } ?>
								</select>
							</div>
							<span id="by_educid" class="errordisplay">请选择最高学历</span>
						</div>
					</li>

					<li class="yun_m_info_list">
						<div class="yun_m_info_name"> <b>*</b> 工作经验</div>
						<div class="yun_m_info_text">
							<div class="layui-input-inline yun_m_info_w250">
								<select name="exp" lay-filter="" id="expid">
									<option value="">请选择工作经验</option>
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['exp']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
									<?php } ?>
								</select>
							</div>
							<span id="by_expid" class="errordisplay">请选择工作经验</span>
						</div>
					</li>

					<li class="yun_m_info_list">
						<div class="yun_m_info_name"><b>*</b> 手机</div>
						<div class="yun_m_info_text">
							<div class="yun_m_info_text_box yun_m_info_text_box_re">
								<?php if ($_smarty_tpl->tpl_vars['row']->value['moblie_status']==1) {?>
									<span class="info_phe_ok"><?php echo $_smarty_tpl->tpl_vars['row']->value['telphone'];?>
</span>
									<a href="index.php?c=passwd" class="yun_m_info_text_box_re_a">重新认证</a>
									<input type="hidden" id="telphone" name="telphone" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['telphone'];?>
">
								<?php } else { ?>
									<input id="telphone" name="telphone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['telphone'];?>
" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" class="yun_m_info_text_input" />
									<i class="yun_m_info_telphone"></i>
									<span id="by_telphone" class="errordisplay">请正确填写手机号</span> 
								<?php }?> 
							</div>
						</div>
					</li>

					<li class="yun_m_info_list">
						<div class="yun_m_info_name"> <b>*</b> 现居住地</div>
						<div class="yun_m_info_text">
							<div class="yun_m_info_text_box ">
								<input class="yun_m_info_fill" type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['living'];?>
" size="30" id="living" name="living">
								<span id="by_living" class="errordisplay">请填写现居住地</span> 
							</div>
						</div>
					</li>

					<li class="yun_m_info_list">
						<div class="yun_m_info_list_xt">
							<span class="yun_m_info_list_xt_s">以下是补充信息可选填让企业更了解你</span>
						</div>
					</li>

					<li class="yun_m_info_list" style="margin-top:40px;">
						<div class="yun_m_info_name">电子邮件</div>
						<div class="yun_m_info_text "> 
							<div class="yun_m_info_text_box yun_m_info_text_box_re">
								<?php if ($_smarty_tpl->tpl_vars['row']->value['email_status']==1) {?>
									<span class="info_phe_ok"><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</span>
									<a href="index.php?c=passwd" class="yun_m_info_text_box_re_a">重新认证</a>
									<input type="hidden" id="email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
">
								<?php } else { ?>
									<input name="email" id="email"  type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
" class="yun_m_info_fill" />
									<span id="by_email" class="errordisplay">邮件格式错误</span> 
								<?php }?> 
							</div>
						</div>
					</li>

					<li class="yun_m_info_list">
						<div class="yun_m_info_name">头像</div>
						<div class="yun_m_info_text" style="width:480px;">
							<div class="yun_uer_info_photo">
								<div class="yun_uer_info_photo_pt">
									<?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==1) {?>
										<img src=".<?php echo $_smarty_tpl->tpl_vars['user_photo']->value;?>
" id="logo" border="0" height="38" width="38" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" />
									<?php } else { ?>
										<img src=".<?php echo $_smarty_tpl->tpl_vars['user_photo']->value;?>
" id="logo" border="0" height="38" width="38" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
',2);" />
									<?php }?>  
								</div>     
								
								<button type="button" class="yun_bth_pic adminupload" lay-data="{imgid: 'logo',path: 'user'}">上传头像</button>
								<input type="hidden" id="layupload_type" value="2"/>
								
								<div class="yun_uer_info_gk">
									<span id="userphototype" onclick="phototype()" <?php if (!$_smarty_tpl->tpl_vars['row']->value['photo']) {?>class="none"<?php }?>>
										<input type="checkbox" id='phototype' value='1' <?php if ($_smarty_tpl->tpl_vars['row']->value['phototype']==1) {?>checked="checked"<?php }?> title="头像不公开"/>
									</span>
									<span class="layui-btn layui-btn-small" id="spanQrcode">手机扫码上传</span>
									<?php echo '<script'; ?>
 type="text/javascript">
										$(document).ready(function() {
											$("#spanQrcode").hover(function(){  
												var pic_url = '<?php echo smarty_function_url(array('m'=>'upload','c'=>'qrcode','type'=>3),$_smarty_tpl);?>
';
												layer.tips("<img src="+pic_url+" style='max-width:380px'>", this);
											},function(){layer.closeAll('tips');});
										});
									<?php echo '</script'; ?>
>
								</div> 
							</div>
     					</div>
					</li>

					<li class="yun_m_info_list">
						<div class="yun_m_info_name"> 详细地址</div>
						<div class="yun_m_info_text">
							<div class="yun_m_info_text_box">
								<input name="address" id="address" type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
" size="40" class="yun_m_info_fill">
							</div>  
						</div>
					</li>

					<li class="yun_m_info_list">
						<div class="yun_m_info_name"> 身高</div>
						<div class="yun_m_info_height_box">
							<input type="text" id="height" name="height" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['height'];?>
" size="10" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" class="yun_m_info_height_box_text" />
							<em class="yun_m_info_height_box_dw">CM</em> 
						</div>
						<div class="yun_m_info_height_p"> 体重</div>
						<div class="yun_m_info_height_box">
							<input type="text" id="weight" name="weight" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['weight'];?>
" size="10" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" class="yun_m_info_height_box_text" />
							<em class="yun_m_info_height_box_dw"> KG</em> 
						</div> 
					</li>
					<li class="yun_m_info_list">
						<div class="yun_m_info_name"> 民族</div>
						<div class="yun_m_info_text">
							<div class="yun_m_info_text_box">
								<input type="text" id="nationality" name="nationality" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['nationality'];?>
" size="10" class="yun_m_info_fill " />
							</div>
						</div>
					</li>

					<li class="yun_m_info_list">
						<div class="yun_m_info_name"> 婚姻</div>
						<div class="yun_m_info_text">
							<div class="layui-input-inline yun_m_info_w250">
								<select name="marriage" lay-filter="" id="marriage">
									<option value="">请选择婚姻状况</option>
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['marriage']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
									<?php } ?>
								</select>
							</div>
						</div>
					</li>

					 

					<li class="yun_m_info_list">
						<div class="yun_m_info_name"> 户籍所在地</div>
						<div class="yun_m_info_text">
							<div class="yun_m_info_text_box">
								<input class="yun_m_info_fill" type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['domicile'];?>
" size="30" id="domicile" name="domicile">
							</div>
						</div>
					</li>
     
					<li class="yun_m_info_list">
						<div class="yun_m_info_name"> QQ</div>
						<div class="yun_m_info_text">
							<div class="yun_m_info_text_box">
								<input id="qq" name="qq" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['qq'];?>
" onkeyup="this.value=this.value.replace(/[^0-9-.]/g,'')" class="yun_m_info_fill" />
							</div>
						</div>
					</li>

					<li class="yun_m_info_list">
						<div class="yun_m_info_name"> 上传个人二维码</div>
						<div class="yun_m_info_text">
							<div class="yun_uer_info_photo">
								<div class="yun_uer_info_photo_pt">
									<div id="imgparent" class="ewm_img <?php if (!$_smarty_tpl->tpl_vars['row']->value['wxewm']) {?>none<?php }?>">
										<img id="ewm" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['wxewm'];?>
" width="38" height="38"/>
									</div>
								</div>     
								<button type="button" class="yun_bth_pic adminupload" lay-data="{imgid: 'ewm',path: 'user',parentid:'imgparent'}">上传二维码</button>
							</div>
						</div>
					</li>
					<li class="yun_m_info_list">
						<div class="yun_m_info_name"> 个人主页/博客</div>
						<div class="yun_m_info_text">
							<div class="yun_m_info_text_box">
								<input id="homepage" name="homepage" type="text" maxlength="255" size="40" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['homepage'];?>
" class="yun_m_info_fill" />
							</div>
						</div>
					</li>
       
					<li class="yun_m_info_list">
						<div class="yun_m_info_name">&nbsp;</div>
						<div class="yun_m_info_text">
							<input type="hidden" id="logid" name="logid">
							<input type="button" onclick="CheckPost()" value="保存信息" class="layui-btn layui-btn-normal yun_m_info_textbth" />
							<input id="save" name="save" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" type="hidden"/>
						</div>
					</li>
				</ul>
				<div class="operatebox03 mt10"><span> </span> </div>
			</div>
			<?php if (!$_smarty_tpl->tpl_vars['row']->value['name']) {?>
 				<div class="text_tips_bc" style="right:10px">
					<div class="text_tips_bc_h1"> 信息保存</div>
					<div class="text_tips_bc_cont"> 
						<?php if ($_smarty_tpl->tpl_vars['save']->value['time']) {?>
							<div class="text_tips_bc_l">信息已于<?php echo $_smarty_tpl->tpl_vars['save']->value['time'];?>
保存</div>
						<?php }?>

						<div class="text_tips_bc_time"> 
							<span id="totalSecond"></span>s后将自动保存<br>已填信息
						</div>
						<a id="atime" href="javascript:;" onclick="saveuserform();" class="text_tips_bc_bth">临时保存信息</a>
					</div>
				</div>
			<?php }?>
 		</div>
	</form>
	</div>	
</div>

<?php echo '<script'; ?>
>
	layui.use(['layer', 'form','laydate'], function(){
		var layer = layui.layer,
			form = layui.form,
			laydate = layui.laydate,
			$ = layui.$;
		'<?php if (!$_smarty_tpl->tpl_vars['row']->value['birthday']) {?>'
		laydate.render({
			elem: '#birthday'
			,max: -5113,
			value: '1990-01-01'
		});
		'<?php } else { ?>'
		laydate.render({
			elem: '#birthday'
			,max: -5113,
		});
		'<?php }?>'
	});

	var userstyle='<?php echo $_smarty_tpl->tpl_vars['user_style']->value;?>
';

	function CheckPost(){
		var name=$.trim($("input[name='name']").val());
		var sex=$.trim($("input[name='sex']:checked").val());
		var birthday = $.trim($('#birthday').val());
		var educid=$.trim($("#educid").val());
		var expid=$.trim($("#expid").val());
		
		'<?php if ($_smarty_tpl->tpl_vars['row']->value['moblie_status']==1) {?>'
			var telphone = true;
		'<?php } else { ?>'
			var telphone=$.trim($("input[name='telphone']").val());
				telphone=isjsMobile(telphone);
		'<?php }?>'

		var living=$.trim($("input[name='living']").val());			

		'<?php if ($_smarty_tpl->tpl_vars['row']->value['email_status']==1) {?>'
			var ifemail = true; 
		'<?php } else { ?>'
			var email=$.trim($("input[name='email']").val());
			if (email==""){
				var ifemail = true;
			}else{
				var ifemail = check_email(email);
			}
		'<?php }?>'
		
		if(name==""){layer.msg("请填写姓名", 2, 8);return false;}
		if(sex==""){layer.msg('请选择性别！',2,8);return false;}
		if(birthday==''){layer.msg('请选择出生年月', 2, 8);return false; }
		if(educid==""){layer.msg($('#by_educid').html(), 2, 8);return false;}
		if(expid==""){layer.msg($("#by_expid").html(), 2, 8);return false;}
		if(telphone==false){layer.msg($("#by_telphone").html(), 2, 8);return false;}
		if(living==""){layer.msg($("#by_living").html(), 2, 8);return false;}
		if(ifemail==false){layer.msg($("#by_email").html(), 2, 8);return false;}
		$("#infoform").submit();
		layer.load('执行中，请稍候...',0);
	}

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
 	var start = 30;
	var step = -1;
	var save=$("#save").val();
	if(!save){
		function count(){
			$("#atime").click(function(){ start=30});
			$("#totalSecond").html(start);
			start += step;
			if(start < 0 ){
				saveuserform();
				start = 30;
			}
			setTimeout("count()",1000);
		}
		window.onload = count;	
	}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
