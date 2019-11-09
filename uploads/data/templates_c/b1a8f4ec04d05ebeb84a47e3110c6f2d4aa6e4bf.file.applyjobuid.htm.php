<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 21:05:58
         compiled from "/www/fpwjob/uploads/app/template/wap/applyjobuid.htm" */ ?>
<?php /*%%SmartyHeaderCode:972123395dc56836ce53c8-55655464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1a8f4ec04d05ebeb84a47e3110c6f2d4aa6e4bf' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/applyjobuid.htm',
      1 => 1572067844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '972123395dc56836ce53c8-55655464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'job' => 0,
    'row' => 0,
    'userclass_name' => 0,
    'arr_data' => 0,
    'key' => 0,
    'v' => 0,
    'userdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc56836da2051_97728182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc56836da2051_97728182')) {function content_5dc56836da2051_97728182($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.picker.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/yun_wap_member.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<div id="app" class="mui-views">
	<div class="mui-view">
		<div class="mui-pages"></div>
	</div>
</div>

<div id="main" class="mui-page">
	
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div id="infobase" class="mui-scroll">
				<div class="yun_reg_BasicInfo_h1">

					<div class="yun_reg_BasicInfo_h1_em">如您有简历，可直接登录
						<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="yun_reg_BasicInfo_h1_bth">登录</a>
					</div>
				</div>
				<div class="yun_applyjobuid_tit mt15">基本信息</div>

				<ul class="yun_newwap_box">
					<li class="yun_newwap_text"><span class="yun_newwap_text_name">真实姓名</span>
						<div class="yun_newwap_text_box">
							<input type="text" name="uname" id="uname" value="" class=" " placeholder="请填写真实姓名" />
						</div>
					</li>
					<li class=""><span class="yun_newwap_text_name">性别</span>
						<div class="yun_newwap_text_box">
							<button id="sexPicker" class="mui-btn mui-btn-block" type="button" data-sex="">男</button>
							<input type="hidden" id="sex" name="sex" value="1">
						</div>
					</li>
					<li class=""><span class="yun_newwap_text_name">出生年月</span>
						<div class="yun_newwap_text_box">
							<button id='birthdayUserPicker' data-options='{"type":"date","value":"1988-08-08","beginYear":1900,"endYear":<?php echo smarty_modifier_date_format(time(),"Y");?>
}' class="btn mui-btn mui-btn-block" type="button">请选择出生年月</button>
							<input type="hidden" id="birthday" name="birthday" value="">
						</div>
					</li>
					<li class=""><span class="yun_newwap_text_name">最高学历</span>
						<div class="yun_newwap_text_box">
							<button id="eduPicker" class="mui-btn mui-btn-block" type="button" data-edu="">请选择最高学历</button>
							<input type="hidden" id="edu" name="edu" value="">
						</div>
					</li>
					<li class=""><span class="yun_newwap_text_name">工作经验</span>
						<div class="yun_newwap_text_box">
							<button id="expPicker" class="mui-btn mui-btn-block" type="button" data-exp="">请选择工作经验</button>
							<input type="hidden" id="exp" name="exp" value="">
						</div>
					</li>
					<li class=""><span class="yun_newwap_text_name">工作性质</span>
						<div class="yun_newwap_text_box">
							<button id="typePicker" class="mui-btn mui-btn-block" type="button" data-type="">请选择工作性质</button>
							<input type="hidden" id="type" name="type" value="">
						</div>
					</li>
					<li class=""><span class="yun_newwap_text_name">到岗时间</span>
						<div class="yun_newwap_text_box">
							<button id="reportPicker" class="mui-btn mui-btn-block" type="button" data-report="">请选择到岗时间</button>
							<input type="hidden" id="report" name="report" value="">
						</div>
					</li>
				</ul>

				<ul class="yun_newwap_box mt15">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>
					<li class="yun_newwap_text"><span class="yun_newwap_text_name">安全验证</span>
						<div id="mask"></div>
						<div id="popup-captcha-mobile" data-id='subreg' data-type='click'></div>
						<input type='hidden' id="popup-submit">
						<style>
							.geetest_holder.geetest_wind {}
						</style>
					</li>
					<?php } else { ?>
					<li class="yun_newwap_text"><span class="yun_newwap_text_name">验证码</span>
						<div class="yun_newwap_yz">
							<input type="text" name="checkcode" id="checkcode" class="" placeholder="请输入图片验证码">
							<div class="yun_newwap_yz_img">
								<img id="vcode_img" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" onclick="checkCode('vcode_img');" />
							</div>
						</div>
					</li>
					<?php }?>
					<li class="yun_newwap_text"><span class="yun_newwap_text_name">手机号码</span>
						<div class="yun_newwap_text_box">
							<input type="number" name="telphone" id="telphone" value="" placeholder="请输入手机号码" />
						</div>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen']==1&&$_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
					<li class="yun_newwap_text"><span class="yun_newwap_text_name">手机验证</span>
						<div class="yun_newwap_text_sjyz">
							<input type="text" name="mobcode" id="mobcode" class="yun_reg_BasicInfo_text yun_reg_BasicInfo_text_w155" placeholder="请填写手机验证码" />
							<a href="javascript:void(0);" class="yun_newwap_text_sjyz_send" id="send_msg_tip" onclick="send_msg();">发送验证码</span>
								</span>
							</a>
						</div>
					</li>
					<?php }?>
				</ul>
				<input type="hidden" id="jobid" name="jobid" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">
				<input type="hidden" id="resumeid" name="resumeid" value="<?php echo $_GET['id'];?>
"> <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_project']==1||$_smarty_tpl->tpl_vars['config']->value['resume_create_exp']==1||$_smarty_tpl->tpl_vars['config']->value['resume_create_edu']==1) {?>
				<div class="yun_newwap_bth">
					<a href="#nextaddhtml" class="yun_newwap_bth_a">下一步</a>
				</div>
				<?php } else { ?>
				<div class="yun_newwap_bth"><button id="applybtn">立即申请</button></div>
				<?php }?>
			</div>
		</div>
	</div>
</div>

<div id="nextaddhtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']=='1') {?>
				<div class="yun_applyjobuid_tit mt15">最近一份工作</div>
				<ul class="yun_newwap_box">
					<li class="yun_newwap_text"><span class="yun_newwap_text_name">公司名称</span>
						<div class="yun_newwap_text_box">
							<input type="text" id="workname" name="workname" value="" placeholder="请填写公司名称" class="">
						</div>
					</li>
					<li class="yun_newwap_text"><span class="yun_newwap_text_name">担任职位</span>
						<div class="yun_newwap_text_box">
							<input type="text" name="worktitle" id="worktitle" value="" placeholder="请填写担任职位" class=""></div>
					</li>
					<li>
						<a href="#worktimehtml"><span class="yun_newwap_text_name">在职时间</span>
							<div class="yun_newwap_text_box yun_newwap_text_box_p" id="worktimeshow"> 请选择在职时间</div>
						</a>
					</li>
					<li>
						<a href="#workcontenthtml"><span class="yun_newwap_text_name">工作内容</span>
							<div class="yun_newwap_text_box yun_newwap_text_box_p" id="workcontentshow"> 请填写工作职责</div>
						</a>
					</li>
				</ul>
				<?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_edu']=='1') {?>
				<div class="yun_applyjobuid_tit mt15">毕业院校</div>
				<ul class="yun_newwap_box">
					<li class="yun_newwap_text"><span class="yun_newwap_text_name">学校名称</span>
						<div class="yun_newwap_text_box">
							<input type="text" id="eduname" name="eduname" value="" placeholder="请填写学校名称" class=""></div>
					</li>
					<li>
						<a href="#edutimehtml"><span class="yun_newwap_text_name">在校时间</span>
							<div class="yun_newwap_text_box yun_newwap_text_box_p" id="edutimeshow"> 请选择在校时间</div>
						</a>
					</li>

					<li><span class="yun_newwap_text_name">毕业学历</span > <span class="yun_newwap_text_box" ><button id='educationUserPicker' class="mui-btn mui-btn-block" type='button' data-education=""><?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['education']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['education']];
} else { ?>请选择毕业学历<?php }?></button>
						<input type="hidden" id="education" name="education" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['education'];?>
">
							</span>
					</li>
					<li class="yun_newwap_text"><span class="yun_newwap_text_name">所学专业</span>
						<div class="yun_newwap_text_box"> <input type="text" id="eduspec" name="eduspec" value="" placeholder="请填写所学专业" class=""></div>
					</li>

				</ul>
				<?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_project']=='1') {?>
				<div class="yun_applyjobuid_tit mt15">近期项目</div>
				<ul class="yun_newwap_box">
					<li class="yun_newwap_text"><span class="yun_newwap_text_name">项目名称</span>
						<div class="yun_newwap_text_box">
							<input type="text" name="proname" id="proname" value="" placeholder="请填写项目名称" class=""></div>
					</li>
					<li class="yun_newwap_text"><span class="yun_newwap_text_name">担任职位</span>
						<div class="yun_newwap_text_box">
							<input type="text" name="protitle" id="protitle" value="" placeholder="请填写担任职位" class=""></div>
					</li>
					<li>
						<a href="#protimehtml"><span class="yun_newwap_text_name">项目时间</span>
							<div class="yunset_list_commentary yun_newwap_text_box_p" id="protimeshow"> 请选择项目时间</div>
						</a>
					</li>

					<li>
						<a href="#procontenthtml"><span class="yun_newwap_text_name">项目内容</span>
							<div class="yunset_list_commentary yun_newwap_text_box_p" id="procontentshow"> 请填写项目内容</div>
						</a>
					</li>
				</ul>
				<?php }?>
				<input type='hidden' id='resume_edu' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_edu'];?>
'>
				<input type='hidden' id='resume_exp' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_exp'];?>
'>
				<input type='hidden' id='resume_pro' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_project'];?>
'>

				<div class="yun_newwap_bth"><button id="applybtn">立即申请</button></div>
				<div class="yun_newwap_bth_fh">
					<a href="javascript:void(0)" class="mui-action-back">< 返回上一步</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="procontenthtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<div class="yun_wap_addresume_box_group">
					<div class="yun_wap_addresume_box_control_text">
						<textarea name="procontent" id="procontent" style="height:200px;width:100%;" class="yun_wap_addresume_texttextAreaMsg" placeholder="请填写项目内容"></textarea>
					</div>
					<a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="workcontenthtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<div class="yun_wap_addresume_box_group">
					<div class="yun_wap_addresume_box_control_text">
						<textarea name="workcontent" id="workcontent" style="height:200px;width:100%;" class="yun_wap_addresume_texttextAreaMsg" placeholder="请填写工作职责"></textarea>
					</div>
					<a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="worktimehtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<ul class="yunset_list mt15">
					<li><span class="yunset_list_name">入职时间</span > <span class="yunset_list_commentary"><button id='worksdateComPicker' data-options='{"type":"month","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block">请选择入职时间</button>
					<input type="hidden" id="worksdate" name="worksdate" value=""></span>

					</li>
					<li><span class="yunset_list_name">离职时间</span > <span class="yunset_list_commentary"><button id='workedateComPicker' data-options='{"type":"month","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block">请选择离职时间</button>
					<input type="hidden" id="workedate" name="workedate" value=""></span>
					</li>
				</ul>
				<a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>
			</div>
		</div>
	</div>
</div>
<div id="edutimehtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<ul class="yunset_list mt15">
					<li><span class="yunset_list_name">入校时间</span > <span class="yunset_list_commentary"><button id='edusdateComPicker' data-options='{"type":"month","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block">请选择入校时间</button>
					<input type="hidden" id="edusdate" name="edusdate" value=""></span>

					</li>
					<li><span class="yunset_list_name">离校时间</span > <span class="yunset_list_commentary"><button id='eduedateComPicker' data-options='{"type":"month","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block">请选择离校时间</button>
					<input type="hidden" id="eduedate" name="eduedate" value=""></span>
					</li>
				</ul>
				<a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>
			</div>
		</div>
	</div>
</div>
<div id="protimehtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<ul class="yunset_list mt15">
					<li><span class="yunset_list_name">开始时间</span > <span class="yunset_list_commentary"><button id='prosdateComPicker' data-options='{"type":"month","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block">请选择开始时间</button>
					<input type="hidden" id="prosdate" name="prosdate" value=""></span>

					</li>
					<li><span class="yunset_list_name">结束时间</span > <span class="yunset_list_commentary"><button id='proedateComPicker' data-options='{"type":"month","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block">请选择结束时间</button>
					<input type="hidden" id="proedate" name="proedate" value=""></span>
					</li>
				</ul>
				<a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.view.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.picker.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.poppicker.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/mobile.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var wapurl = "<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
";
	var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
"
	var backurl = '<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
';

	var sexData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>';
	sexData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'
	});
	'<?php } ?>';
	var eduData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>';
	eduData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	});
	'<?php } ?>';
	var expData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>';
	expData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	});
	'<?php } ?>';
	var typeData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>';
	typeData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	});
	'<?php } ?>';
	var reportData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>';
	reportData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	});
	'<?php } ?>';
	mui.init();
	var viewApi = mui('#app').view({
		defaultPage: '#main'
	});
	
	var view = viewApi.view;
	(function($) {
		
		mui('.mui-scroll-wrapper').scroll({
			scrollY: true, 
			scrollX: false, 
			startX: 0, 
			startY: 0, 
			indicators: false, 
			deceleration: 0.0006, 
			
		});
		
		var oldBack = $.back;
		$.back = function() {
			if(viewApi.canBack()) { 
				viewApi.back();
			} else { 
				oldBack();
			}
		};
	})(mui);
	view.addEventListener('pageBeforeShow', function(e) {
		document.activeElement.blur();
	});
	view.addEventListener('pageBeforeBack', function(e) {
		var worksdate = document.getElementById('worksdate').value;
		var workedate = document.getElementById('workedate').value;
		if(worksdate && workedate) {
			document.getElementById('worktimeshow').innerText = worksdate + '~' + workedate;
		}
		var workcontent = document.getElementById('workcontent').value;
		if(workcontent) {
			document.getElementById('workcontentshow').innerText = workcontent;
		}
		var edusdate = document.getElementById('edusdate').value;
		var eduedate = document.getElementById('eduedate').value;
		if(edusdate && eduedate) {
			document.getElementById('edutimeshow').innerText = edusdate + '~' + eduedate;
		}
		var prosdate = document.getElementById('prosdate').value;
		var proedate = document.getElementById('proedate').value;
		if(prosdate && proedate) {
			document.getElementById('protimeshow').innerText = prosdate + '~' + proedate;
		}
		var procontent = document.getElementById('procontent').value;
		if(procontent) {
			document.getElementById('procontentshow').innerText = procontent;
		}
	});
	$(function() {
		if(document.getElementById('infobase')){
			document.getElementById('infobase').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		if(document.getElementById('nextaddhtml')){
			document.getElementById('nextaddhtml').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		if(document.getElementById('procontenthtml')){
			document.getElementById('procontenthtml').addEventListener('touchmove', function (e) { e.stopPropagation();}, {passive: false});
		}
		if(document.getElementById('worktimehtml')){
			document.getElementById('worktimehtml').addEventListener('touchmove', function (e) { e.stopPropagation();}, {passive: false});
		}
		mui('.yun_newwap_bth').on('tap', 'a', function() {
			var uname = $.trim($("#uname").val()),
				sex = $.trim($("#sex").val()),
				birthday = $.trim($("#birthday").val()),
				edu = $.trim($("#edu").val()),
				exp = $.trim($("#exp").val()),
				type = $.trim($("#type").val()),
				report = $.trim($("#report").val()),
				telphone = $.trim($("#telphone").val()),
				jobid = $.trim($("#jobid").val()),
				resumeid = $.trim($("#resumeid").val()),
				actlogin;
			if(jobid < 1) {
				mui.toast("职位不存在！");
				return false;
			}
			if(uname == "") {
				mui.toast("请填写真实姓名");
				return false;
			}
			if(sex == '') {
				mui.toast("请选择性别");
				return false;
			}
			if(birthday == "") {
				mui.toast("请选择出生年月");
				return false;
			}
			if(edu == "") {
				mui.toast("请选择最高学历");
				return false;
			}
			if(exp == "") {
				mui.toast("请选择工作经验");
				return false;
			}
			if(type == "") {
				mui.toast("请选择工作性质");
				return false;
			}
			if(report == "") {
				mui.toast("请选择到岗时间");
				return false;
			}
			var reg = /^\d{5,15}$/;
			if(telphone == '') {
				mui.toast("请填写手机号码");
				return false;
			} else if(telphone && !reg.test(telphone)) {
				mui.toast("手机号码格式错误");
				return false;
			}

			var authcode;
			var geetest_challenge;
			var geetest_validate;
			var geetest_seccode;
			if(exitsid("mobcode")) {
				actlogin = 1;
				authcode = $.trim($("#mobcode").val());
				if(!authcode) {
					mui.toast('请填写短信验证码');
					return false;
				}
			} else {
				if(code_kind == 1) {
					authcode = $.trim($("#checkcode").val());
					if(!authcode) {
						mui.toast('请填写验证码');
						return false;
					}
				} else if(code_kind == 3) {
					geetest_challenge = $('input[name="geetest_challenge"]').val();
					geetest_validate = $('input[name="geetest_validate"]').val();
					geetest_seccode = $('input[name="geetest_seccode"]').val();

					if(geetest_challenge == '' || geetest_validate == '' || geetest_seccode == '') {
						$("#popup-submit").trigger("click");
						mui.toast('请点击按钮进行验证');
						return false;
					}
				}
			}
		})
		var applybtn = document.getElementById('applybtn');
		applybtn.addEventListener('tap', function(event) {
			var uname = $.trim($("#uname").val()),
				sex = $.trim($("#sex").val()),
				birthday = $.trim($("#birthday").val()),
				edu = $.trim($("#edu").val()),
				exp = $.trim($("#exp").val()),
				type = $.trim($("#type").val()),
				report = $.trim($("#report").val()),
				telphone = $.trim($("#telphone").val()),
				jobid = $.trim($("#jobid").val()),
				resumeid = $.trim($("#resumeid").val()),
				actlogin;
			if(jobid < 1) {
				return mui.toast("职位不存在！");
			}
			if(uname == "") {
				return mui.toast("请填写真实姓名");
			}
			if(sex == '') {
				return mui.toast("请选择性别");
			}
			if(birthday == "") {
				return mui.toast("请选择出生年月");
			}
			if(edu == "") {
				return mui.toast("请选择最高学历");
			}
			if(exp == "") {
				return mui.toast("请选择工作经验");
			}
			if(type == "") {
				return mui.toast("请选择工作性质");
			}
			if(report == "") {
				return mui.toast("请选择到岗时间");
			}
			var reg = /^\d{5,15}$/;
			if(telphone == '') {
				return mui.toast("请填写手机号码");
			} else if(telphone && !reg.test(telphone)) {
				return mui.toast("手机号码格式错误");
			}

			var authcode;
			var geetest_challenge;
			var geetest_validate;
			var geetest_seccode;
			if(exitsid("mobcode")) {
				actlogin = 1;
				authcode = $.trim($("#mobcode").val());
				if(!authcode) {
					return mui.toast('请填写短信验证码');
				}
			} else {
				if(code_kind == 1) {
					authcode = $.trim($("#checkcode").val());
					if(!authcode) {
						return mui.toast('请填写验证码');
					}
				} else if(code_kind == 3) {
					geetest_challenge = $('input[name="geetest_challenge"]').val();
					geetest_validate = $('input[name="geetest_validate"]').val();
					geetest_seccode = $('input[name="geetest_seccode"]').val();

					if(geetest_challenge == '' || geetest_validate == '' || geetest_seccode == '') {
						$("#popup-submit").trigger("click");
						return mui.toast('请点击按钮进行验证');
					}
				}
			}
			var arr = {
				uname: uname,
				sex: sex,
				birthday: birthday,
				edu: edu,
				exp: exp,
				type: type,
				report: report,
				jobid: jobid,
				resumeid: resumeid,
				telphone: telphone,
				actlogin: actlogin,
				authcode: authcode,
				geetest_challenge: geetest_challenge,
				geetest_validate: geetest_validate,
				geetest_seccode: geetest_seccode
			};
			if($.trim(document.getElementById('resume_exp').value) == '1') {
				var workname = $.trim(document.getElementById('workname').value),
					worksdate = $.trim(document.getElementById('worksdate').value),
					workedate = $.trim(document.getElementById('workedate').value),
					worktitle = $.trim(document.getElementById('worktitle').value),
					workcontent = $.trim(document.getElementById('workcontent').value);
				if(workname == '') {
					return mui.toast('请填写公司名称！');
				}
				if(worktitle == '') {
					return mui.toast('请填写担任职务！');
				}
				if(worksdate == '') {
					return mui.toast('请填写入职时间！');

				}
				arr.workname = workname;
				arr.worksdate = worksdate;
				arr.workedate = workedate;
				arr.worktitle = worktitle;
				arr.workcontent = workcontent;
			}
			if($.trim(document.getElementById('resume_edu').value) == '1') {
				var eduname = $.trim(document.getElementById('eduname').value),
					edusdate = $.trim(document.getElementById('edusdate').value),
					eduedate = $.trim(document.getElementById('eduedate').value),
					education = $.trim(document.getElementById('education').value),
					eduspec = $.trim(document.getElementById('eduspec').value);
				if(eduname == '') {
					return mui.toast('请填写学校名称！');
				}
				if(edusdate == '') {
					return mui.toast('请填写入学时间！');
				}
				if(eduedate == '') {
					return mui.toast('请填写离校或预计离校时间！');
				}
				if(eduspec == '') {
					return mui.toast('请填写所学专业！');
				}
				if(education == '') {
					return mui.toast('请选择毕业学历！');
				}
				arr.eduname = eduname;
				arr.edusdate = edusdate;
				arr.eduedate = eduedate;
				arr.eduspec = eduspec;
				arr.education = education;
			}
			if($.trim(document.getElementById('resume_pro').value) == '1') {
				var proname = $.trim(document.getElementById('proname').value),
					prosdate = $.trim(document.getElementById('prosdate').value),
					proedate = $.trim(document.getElementById('proedate').value),
					protitle = $.trim(document.getElementById('protitle').value),
					procontent = $.trim(document.getElementById('procontent').value);
				if(proname == '') {
					return mui.toast('请填写项目名称！');
				}
				if(protitle == '') {
					return mui.toast('请填写项目担任职务！');
				}
				if(prosdate == '') {
					return mui.toast('请填写项目开始时间！');
				}
				if(proedate == '') {
					return mui.toast('请填写项目结束时间！');
				}
				arr.proname = proname;
				arr.prosdate = prosdate;
				arr.proedate = proedate;
				arr.protitle = protitle;
				arr.procontent = procontent;
			}
			layer_load('执行中，请稍候...');
			mui.post(wapurl + "?c=ajax&a=temporaryresume", arr, function(data) {
				layer.closeAll();
				if(data.status == 1) {
					layermsg(data.msg, 2, function() {
						location.href = data.url;
					});
					return false;
				} else {
					if(code_kind == 1) {
						checkCode('vcode_img');
					} else if(code_kind == 3) {
						$("#popup-submit").trigger("click");
					}
					return mui.toast(data.msg);
				}
			}, 'json');
		});
	});
	var Timer;
	var smsTimer_time = 90; 
	var smsTimer_flag = 90; 
	var smsTime_speed = 1000; 
	
	function send_msg(url) {
		var moblie = $('#telphone').val();
		var code;
		var geetest_challenge;
		var geetest_validate;
		var geetest_seccode;
		if(moblie == "" || moblie == "请输入手机号码") {
			return mui.toast("请输入手机号码");
		} else {

			var reg = /^\d{5,15}$/;
			if(!reg.test(moblie)) {
				return mui.toast('手机格式错误');
			}
		}
		if(code_kind == 1) {
			code = $.trim($("#checkcode").val());
			if(!code) {
				return mui.toast('请填写图片验证码');
			}
		} else if(code_kind == 3) {
			geetest_challenge = $('input[name="geetest_challenge"]').val();
			geetest_validate = $('input[name="geetest_validate"]').val();
			geetest_seccode = $('input[name="geetest_seccode"]').val();
			if(geetest_challenge == '' || geetest_validate == '' || geetest_seccode == '') {
				$("#popup-submit").trigger("click");
				return mui.toast('请点击按钮进行验证');
			}
		}
		if(smsTimer_time == smsTimer_flag) {
			Timer = setInterval("smsTimer($('#send_msg_tip'))", smsTime_speed);
			$.post(wapurl + "?c=ajax&a=sendmsg", {
				moblie: moblie,
				authcode: code,
				geetest_challenge: geetest_challenge,
				geetest_validate: geetest_validate,
				geetest_seccode: geetest_seccode
			}, function(data) {
				var jsonObject = eval("(" + data + ")");
				if(jsonObject.error !== 1) {
					clearInterval(Timer);
				}
				layermsg(jsonObject.msg, 2, function() {
					if(code_kind == 1) {
						checkCode('vcode_img');
					} else if(code_kind == 3) {
						$("#popup-submit").trigger("click");
					}
					if(jsonObject.url) {
						window.location.href = jsonObject.url;
						window.event.returnValue = false;
						return false;
					}
				});
			})
		} else {
			return mui.toast('请勿重复发送！');
		}
	}

	function exitsid(id) {
		if(document.getElementById(id)) {
			return true;
		} else {
			return false;
		}
	}
	
	function smsTimer(obj) {
		if(smsTimer_flag > 0) {
			$(obj).html('重新发送(' + smsTimer_flag + 's)');
			$(obj).attr({
				'style': 'background:#f8f8f8;'
			});
			smsTimer_flag--;
		} else {
			$(obj).html('重新发送');
			$(obj).attr({
				'style': 'background:#f8f8f8;'
			});
			smsTimer_flag = smsTimer_time;
			clearInterval(Timer);
		}
	}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/category.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/publicselect.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
