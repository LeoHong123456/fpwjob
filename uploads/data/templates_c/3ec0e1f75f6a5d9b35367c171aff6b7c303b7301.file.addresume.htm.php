<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 14:22:12
         compiled from "/www/fpwjob/uploads/app/template/wap/member/user/addresume.htm" */ ?>
<?php /*%%SmartyHeaderCode:11491715375e4cd4143b4a77-49772999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ec0e1f75f6a5d9b35367c171aff6b7c303b7301' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/member/user/addresume.htm',
      1 => 1572067844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11491715375e4cd4143b4a77-49772999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'wap_style' => 0,
    'resume' => 0,
    'arr_data1' => 0,
    'userclass_name' => 0,
    'row' => 0,
    'job_index' => 0,
    'v' => 0,
    'job_name' => 0,
    'job_type' => 0,
    'key' => 0,
    'vv' => 0,
    'job_classid' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'city_classid' => 0,
    'arr_data' => 0,
    'j' => 0,
    'userdata' => 0,
    'industry_index' => 0,
    'industry_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4cd414586405_94302263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4cd414586405_94302263')) {function content_5e4cd414586405_94302263($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/resume.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.picker.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.poppicker.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/css/cmc.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<div class="wap_member_comp_h1"><span>创建简历</span></div>
<div id="app" class="mui-views">
	<div class="mui-view">
		<div class="mui-pages"></div>
	</div>
</div>


<div id="main" class="mui-page">
	
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">

				<div class="yunset_addresume_tit">基本信息</div>
				<ul class="yunset_list ">
					<li class="yunset_list_text"><span class="yunset_list_name">姓名</span>
						<div class="yunset_list_commentary"> <input type="text" name="uname" id="uname" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
" placeholder="请输入真实姓名" class=""></div>
					</li>
					<li class=""><span class="yunset_list_name">性别</span>
						<div class="yunset_list_commentary"><button id='sexPicker' class="mui-btn mui-btn-block" type='button' data-sex="<?php echo $_smarty_tpl->tpl_vars['resume']->value['sex'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['sex']==1) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} elseif ($_smarty_tpl->tpl_vars['resume']->value['sex']==2) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} else { ?>请选择性别<?php }?></button>
							<input type="hidden" id="sex" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['sex'];?>
"></div>
					</li>
					<li class=""><span class="yunset_list_name">出生年月</span>
						<div class="yunset_list_commentary"><button id='birthdayUserPicker' data-options='{"type":"date","value":"<?php if ($_smarty_tpl->tpl_vars['resume']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];
} else { ?>1988-08-08<?php }?>","beginYear":1955,"endYear":2010}' class="btn mui-btn mui-btn-block"><?php if ($_smarty_tpl->tpl_vars['resume']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];
} else { ?>1989-10-10<?php }?></button>
							<input type="hidden" id="birthday" name="birthday" value="<?php if ($_smarty_tpl->tpl_vars['resume']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];
} else { ?>1989-10-10<?php }?>"></div>
					</li>
					<li class="yunset_list_text"><span class="yunset_list_name">现居住地</span>
						<div class="yunset_list_commentary"> <input type="text" name="living" id="living" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['living'];?>
" placeholder="请输入现居住地" class=""></div>
					</li>

					<li class=""><span class="yunset_list_name">最高学历</span>
						<div class="yunset_list_commentary"> <button id='eduPicker' class="mui-btn mui-btn-block" type='button' data-edu="<?php echo $_smarty_tpl->tpl_vars['resume']->value['edu'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['edu']];
} else { ?>请选择最高学历<?php }?></button>
							<input type="hidden" id="edu" name="edu" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['edu'];?>
">
						</div>
					</li>

					<li class=""><span class="yunset_list_name">工作经验</span>
						<div class="yunset_list_commentary"> <button id='expPicker' class="mui-btn mui-btn-block" type='button' data-exp="<?php echo $_smarty_tpl->tpl_vars['resume']->value['exp'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['exp']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['exp']];
} else { ?>请选择工作经验<?php }?></button>
							<input type="hidden" id="exp" name="exp" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['exp'];?>
"></div>
					</li>
					<li class="yunset_list_text"><span class="yunset_list_name">手机</span><span class="yunset_list_commentary">
						<?php if ($_smarty_tpl->tpl_vars['resume']->value['moblie_status']==1) {?>
						（已绑定）<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
 
						<input type="hidden" id="telphone" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
">
						<?php } else { ?>
						<input type="text" name="telphone" id="telphone" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" class=""placeholder="请输入手机号码" >
						<?php }?> 
						</span></li>
					<li class="yunset_list_text">
						<span class="yunset_list_name">邮箱</span>
						<span class="yunset_list_commentary ">
						 <?php if ($_smarty_tpl->tpl_vars['resume']->value['email_status']==1) {?>
						（已验证）<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>

							<input type="hidden" id="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
">
						<?php } else { ?>
							 <div class=""><input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
" class="" placeholder="请输入联系邮箱" ></div>
						<?php }?> 
					
						</span>
					</li>

				</ul>
				
				<div class="yunset_bth_box" style="background: transparent; border: none; padding:0px;">
                    <a href="#addnexthtml" class="yun_wap_info_brief_tit_bc addnext">下一步</a>
                </div>
                <div style="height:30px;"></div>
				
			</div>
		</div>
	</div>
</div>

<div id="addnexthtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<div class="yunset_addresume_tit">求职意向</div>

				<ul class="yunset_list">
					<li class=""><span class="yunset_list_name">从事行业</span>
						<div class="yunset_list_commentary"> <button id='hyPicker' class="mui-btn mui-btn-block" type='button'>请选择从事行业</button>
							<input type="hidden" id="hy" name="hy" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['hy'];?>
"></div>
					</li>
					<li>
						<a href="#jobclasshtml"><span class="yunset_list_name">工作职能</span ><span class="yunset_list_commentary" id="jobnameshow">请选择工作职能</span></a>
						<input type="hidden" name="job_classid" id="job_classid" value="" />
					</li>

					<li class="yunset_list_text"><span class="yunset_list_name">期望岗位</span>
						<div class="yunset_list_commentary"> <input type="text" name="name" id="name" value="" placeholder="比如：销售总监,销售经理" class=""></div>
					</li>
					<li>
						<a href="#salaryhtml"><span class="yunset_list_name">期望薪资</span > <span class="yunset_list_commentary" id="salaryshow">请输入期望薪资</span></a>
					</li>
					<li>
						<a href="#cityclasshtml"><span class="yunset_list_name">期望城市</span ><span class="yunset_list_commentary" id="citynameshow">请选择期望城市</span></a>
						<input type="hidden" name="city_classid" id="city_classid" value="" />
					</li>
					<li><span class="yunset_list_name">工作性质</span ><span class="yunset_list_commentary">
						<button id='typePicker' class="mui-btn mui-btn-block" type='button'>请选择工作性质</button>
						<input type="hidden" id="type" name="type" value="">
						</span></li>
					<li><span class="yunset_list_name">到岗时间</span ><span class="yunset_list_commentary">
						<button id='reportPicker' class="mui-btn mui-btn-block" type='button'>请选择到岗时间</button>
						<input type="hidden" id="report" name="report" value="">
						</span></li>
					<li><span class="yunset_list_name">求职状态</span ><span class="yunset_list_commentary">
						<button id='jobstatusPicker' class="mui-btn mui-btn-block" type='button'>请选择求职状态</button>
						<input type="hidden" id="jobstatus" name="jobstatus" value="">
						</span></li>
				</ul>
				
				<input type="hidden" id="logid" name="logid">

				<div class="yunset_bth_box" style="background: transparent; border: none; padding:0px;">
				<?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']!='1'&&$_smarty_tpl->tpl_vars['config']->value['resume_create_edu']!='1'&&$_smarty_tpl->tpl_vars['config']->value['resume_create_project']!='1') {?>
				<button id="resumesubmit" type="button" class="mui-btn mui-btn-block mui-btn-primary" style="margin-top: 20px;">保 存</button>
				<?php } else { ?>
                    <a href="#addnexttwohtml" class="yun_wap_info_brief_tit_bc addnexttwo">下一步</a>
					
					<?php }?>
					 <a class="yun_wap_info_brief_tit_bc mui-action-back" style="background:#f8f8f8;border:1px solid #eee;color:#333; margin-bottom:20px;">返回上一步</a>
                </div>
			</div>
		</div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']=='1'||$_smarty_tpl->tpl_vars['config']->value['resume_create_edu']=='1'||$_smarty_tpl->tpl_vars['config']->value['resume_create_project']=='1') {?>
<div id="addnexttwohtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				
				<?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']=='1') {?>
				<div class="yunset_addresume_tit">最近一份工作</div>
				<ul class="yunset_list">
					<li class="yunset_list_text"><span class="yunset_list_name">公司名称</span>
						<div class="yunset_list_commentary">
							<input type="text" id="workname" name="workname" value="" placeholder="请填写公司名称" class="">
						</div>
					</li>
					<li class="yunset_list_text"><span class="yunset_list_name">担任职位</span>
						<div class="yunset_list_commentary">
							<input type="text" name="worktitle" id="worktitle" value="" placeholder="请填写担任职位" class=""></div>
					</li>
					<li>
						<a href="#worktimehtml"><span class="yunset_list_name">在职时间</span>
							<div class="yunset_list_commentary" id="worktimeshow"> 请选择在职时间</div>
						</a>
					</li>
					<li>
						<a href="#workcontenthtml"><span class="yunset_list_name">工作内容</span>
							<div class="yunset_list_commentary" id="workcontentshow"> 请填写工作职责</div>
						</a>
					</li>
				</ul>
				<?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_edu']=='1') {?>
				<div class="yunset_addresume_tit">毕业院校</div>
				<ul class="yunset_list">
					<li class="yunset_list_text"><span class="yunset_list_name">学校名称</span>
						<div class="yunset_list_commentary">
							<input type="text" id="eduname" name="eduname" value="" placeholder="请填写学校名称" class=""></div>
					</li>
					<li>
						<a href="#edutimehtml"><span class="yunset_list_name">在校时间</span>
							<div class="yunset_list_commentary" id="edutimeshow"> 请选择在校时间</div>
						</a>
					</li>
					<li><span class="yunset_list_name">毕业学历</span > <span class="yunset_list_commentary" ><button id='educationUserPicker' class="mui-btn mui-btn-block" type='button'><?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['education']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['education']];
} else { ?>请选择毕业学历<?php }?></button>
						<input type="hidden" id="education" name="education" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['education'];?>
">
							</span>
					</li>
					<li class="yunset_list_text"><span class="yunset_list_name">所学专业</span>
						<div class="yunset_list_commentary"> <input type="text" id="eduspec" name="eduspec" value="" placeholder="请填写所学专业" class=""></div>
					</li>

				</ul>
				<?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_project']=='1') {?>
				<div class="yunset_addresume_tit">近期项目</div>
				<ul class="yunset_list">
					<li class="yunset_list_text"><span class="yunset_list_name">项目名称</span>
						<div class="yunset_list_commentary">
							<input type="text" name="proname" id="proname" value="" placeholder="请填写项目名称" class=""></div>
					</li>
					<li class="yunset_list_text"><span class="yunset_list_name">担任职位</span>
						<div class="yunset_list_commentary">
							<input type="text" name="protitle" id="protitle" value="" placeholder="请填写担任职位" class=""></div>
					</li>
					<li>
						<a href="#protimehtml"><span class="yunset_list_name">项目时间</span>
							<div class="yunset_list_commentary" id="protimeshow"> 请选择项目时间</div>
						</a>
					</li>

					<li>
						<a href="#procontenthtml"><span class="yunset_list_name">项目内容</span>
							<div class="yunset_list_commentary" id="procontentshow"> 请填写项目内容</div>
						</a>
					</li>
				</ul>
				<?php }?>
				
				<div class="yunset_bth_box" style="background: transparent; border: none; padding:0px;">
                  
					<button id="resumesubmit" type="button" class="mui-btn mui-btn-block mui-btn-primary" style="margin-top: 20px;">保 存</button>
					 <a class="yun_wap_info_brief_tit_bc mui-action-back" style="background:#f8f8f8;border:1px solid #eee;color:#333;margin-bottom:20px;">返回上一步</a>
                </div>
			</div>
		</div>
	</div>
</div>
<?php }?>

<div id="procontenthtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<div class="yun_wap_addresume_box_group">
                 <div class="yun_wap_addresume_box_nexttit">项目内容</div>
					<div class="yun_wap_addresume_box_control_text">
						<textarea name="procontent" id="procontent" style="width:100%;height:200px;" class="yun_wap_addresume_texttextAreaMsg" ></textarea>
					</div>
                    	<a class="yun_wap_info_brief_tit_bc mui-action-back"style="margin-top:0px;">确定</a>
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
                <div class="yun_wap_addresume_box_nexttit">工作内容</div>
					<div class="yun_wap_addresume_box_control_text">
						<textarea name="workcontent" id="workcontent" style="width:100%;height:200px;" class="yun_wap_addresume_texttextAreaMsg"></textarea>
					</div>
                      	<a class="yun_wap_info_brief_tit_bc mui-action-back" style="margin-top:0px;">确定</a>
				</div>
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
					<li class="yunset_list_text">
						<span class="yunset_list_name" style="width:150px;">至今<em class="yunset_xttip"></em></span>
						<div class="yunset_kg_box">
							<div class="yunset_kg">
								<div class="mui-switch mui-switch-mini totoday">
									<div class="mui-switch-handle"></div>
								</div>
								<input type="hidden" id="totoday" name="totoday" value="">
							</div>
						</div>
					</li>
				</ul>
				<a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>
			</div>
		</div>
	</div>
</div>

<div id="jobclasshtml" class="mui-page">
	<div class="mui-page-content">
		<div style="height:570px;">
			<div class="grade_tit">选择工作职能 (可多选)</div>
			<div class="grade-eject grade-w-roll">
				<ul class="grade-w" id="jobone">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<li data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
					<?php } ?>
				</ul>
				<ul class="grade-t" id="jobtwo">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['job_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
						<li class="jobtwo job<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none" data-id="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</li>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				</ul>
				<ul class="grade-s" id="jobthree">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['job_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
						<li id="jobtwo<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" class="jobthree job<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
 none"><div class="mui-input-row mui-checkbox"><label>全部</label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" id="jobcheckAll<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" class="checkAll"/></div></li>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (!in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['job_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
						<li class="jobthree job<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none"><div class="mui-input-row mui-checkbox"><label><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</label><input class="jobthreebox jobcheck<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="jobthree<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" type="checkbox"/></div></li>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				</ul>
			</div>
			<div class="grade_chlose_box">
				<div class="grade_chlose_box_c">
					<span class="grade_chlose_box_c_name">已选</span>
					<div class="mui-slider">
						<div class="mui-scroll-wrapper mui-slider-indicator mui-segmented-control mui-segmented-control-inverted" style="background:#fff;height:20px;">
							<div id="jobchoosed" class="mui-scroll" style="background:#fff;height:20px;">
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_classid']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<a class="grade_chlose_box_a" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<a class="grade_chlose_bth mui-action-back">确定 <span id="jobpencent" class="<?php if (!$_smarty_tpl->tpl_vars['job_classid']->value) {?>none<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['job_classid']->value);?>
/5</span></a>
			</div>
		</div>
	</div>
</div>

<div id="cityclasshtml" class="mui-page">
	<div class="mui-page-content">
		<div style="height:570px;">
			<div class="grade_tit">选择城市(可多选)</div>
			<div class="grade-eject grade-w-roll">
				<ul class="grade-w" id="cityone">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<li data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
					<?php } ?>
				</ul>
				<ul class="grade-t" id="citytwo">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['city_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
						<li class="citytwo city<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none" data-id="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</li>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				</ul>
				<ul class="grade-s" id="citythree">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['city_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
						<li id="citytwo<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" class="citythree city<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
 none"><div class="mui-input-row mui-checkbox"><label>全部</label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" id="citycheckAll<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" class="checkAll"/></div></li>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (!in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['city_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
						<li class="citythree city<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none"><div class="mui-input-row mui-checkbox"><label><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</label><input class="citythreebox citycheck<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="citythree<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" type="checkbox"/></div></li>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				</ul>
			</div>
			<div class="grade_chlose_box">
				<div class="grade_chlose_box_c">
					<span class="grade_chlose_box_c_name">已选</span>
					<div class="mui-slider">
						<div class="mui-scroll-wrapper mui-slider-indicator mui-segmented-control mui-segmented-control-inverted" style="background:#fff;height:20px;">
							<div id="citychoosed" class="mui-scroll" style="background:#fff;height:20px;">
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_classid']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<a class="grade_chlose_box_a"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<a class="grade_chlose_bth mui-action-back">确定<span id="citypencent" class="<?php if (!$_smarty_tpl->tpl_vars['city_classid']->value) {?>none<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['city_classid']->value);?>
/5</span></a>
			</div>
		</div>
	</div>
</div>
<div id="salaryhtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll wap_member">
				<ul class="yunset_list">
					<li class="yunset_list_text"><span class="yunset_list_name">最低薪资</span>
						<div class="yunset_list_xzbox">
							<input type="number" id="minsalary" value="" placeholder="请输入最低薪资" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
							<span class="yunset_list_xz">元/月</span>
						</div>
					</li>
					<li class="yunset_list_text"><span class="yunset_list_name">最高薪资<font color="#999">(选填)</font></span>
						<div class="yunset_list_xzbox">
							<input type="number" id="maxsalary" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" value="" placeholder="请输入最高薪资">

							<span class="yunset_list_xz">元/月</span> </div>
					</li>
				</ul>
				<a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>
			</div>
		</div>
	</div>
</div>

<input type='hidden' id='resume_edu' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_edu'];?>
'>
<input type='hidden' id='resume_exp' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_exp'];?>
'>
<input type='hidden' id='resume_pro' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_project'];?>
'>
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
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.view.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
	var sexData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
	sexData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'
	})
	'<?php } ?>'
	var eduData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
	eduData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'
	var expData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
	expData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>';
	var hyData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	hyData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'
	var typeData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	typeData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'
	var reportData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	reportData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'
	var jobstatusData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_jobstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	jobstatusData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'
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
		var salaryshow = ''
		var minsalary = document.getElementById('minsalary').value;
		var maxsalary = document.getElementById('maxsalary').value;
		if(minsalary) {
			salaryshow = minsalary;
			if(maxsalary) {
				salaryshow += '-' + maxsalary +'元/月';
			} else {
				salaryshow += '元以上/月';
			}
			if(parseInt(maxsalary)>0 && parseInt(maxsalary) < parseInt(minsalary)) {
				document.getElementById('minsalary').value = '';
				document.getElementById('maxsalary').value = '';
				document.getElementById('salaryshow').innerText = '';
				return mui.toast('最低薪资不能比最高薪资高，请重新填写');
			}
			document.getElementById('salaryshow').innerText = salaryshow;
		}
		var worksdate = document.getElementById('worksdate').value;
		var workedate = document.getElementById('workedate').value;
		var totoday = document.getElementById('totoday').value;
		if(worksdate && (workedate||totoday)) {
			if(totoday){
				document.getElementById('worktimeshow').innerText = worksdate + '-至今';
			}else{
				document.getElementById('worktimeshow').innerText = worksdate + '-' + workedate;
			}
			
		}
		var workcontent = document.getElementById('workcontent').value;
		if(workcontent) {
			document.getElementById('workcontentshow').innerText = workcontent;
		}
		var edusdate = document.getElementById('edusdate').value;
		var eduedate = document.getElementById('eduedate').value;
		if(edusdate && eduedate) {
			document.getElementById('edutimeshow').innerText = edusdate + '-' + eduedate;
		}
		var prosdate = document.getElementById('prosdate').value;
		var proedate = document.getElementById('proedate').value;
		if(prosdate && proedate) {
			document.getElementById('protimeshow').innerText = prosdate + '-' + proedate;
		}
		var procontent = document.getElementById('procontent').value;
		if(procontent) {
			document.getElementById('procontentshow').innerText = procontent;
		}
	});
	mui('.totoday').each(function() {
		this.addEventListener('toggle', function(event) {
			if(event.detail.isActive){
				document.getElementById('workedateComPicker').disabled=true;
				document.getElementById('workedateComPicker').innerText="<?php echo smarty_modifier_date_format(time(),'%Y-%m');?>
"
				document.getElementById('totoday').value=1;
			}else{
				document.getElementById('totoday').value='';
				document.getElementById('workedateComPicker').disabled=false;
				document.getElementById('workedateComPicker').innerText="请选择离职时间"
			}
		});
	});
	$(function() {
		if(document.getElementById('main')){
			document.getElementById('main').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		if(document.getElementById('addnexthtml')){
			document.getElementById('addnexthtml').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		if(document.getElementById('addnexttwohtml')){
			document.getElementById('addnexttwohtml').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		if(document.getElementById('procontenthtml')){
			document.getElementById('procontenthtml').addEventListener('touchmove', function (e) { e.stopPropagation();}, {passive: false});
		}
		if(document.getElementById('workcontenthtml')){
			document.getElementById('workcontenthtml').addEventListener('touchmove', function (e) { e.stopPropagation();}, {passive: false});
		}
		mui('.yunset_bth_box').on('tap', '.addnext',  function() {
			var uname = $.trim(document.getElementById('uname').value),
				sex = $.trim(document.getElementById('sex').value),
				birthday = $.trim(document.getElementById('birthday').value),
				edu = $.trim(document.getElementById('edu').value),
				exp = $.trim(document.getElementById('exp').value),
				telphone = $.trim(document.getElementById('telphone').value),
				email = $.trim(document.getElementById('email').value),
				living = $.trim(document.getElementById('living').value);
			if(uname == "") {
				mui.toast('请输入真实姓名！');return false;
			}
			if(sex== '') {
				 mui.toast('请选择性别！');return false;
			}
			if(birthday== '') {
				 mui.toast('请选择出生年月！');return false;
			}
			if(living== '') {
				 mui.toast('请输入现居住地！');return false;
			}
			if(edu== '') {
				 mui.toast('请选择最高学历！');return false;
			}
			if(exp== '') {
				 mui.toast('请选择工作经验！');return false;
			}
			if(telphone== '') {
				 mui.toast('请输入手机号码！');return false;
			} else {
				var reg = /^\d{5,15}$/;
				 if(!reg.test(telphone)){
					 mui.toast('手机号码格式错误！');return false;
				 }
			}
			var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
			if(email!="" && !myreg.test(email)){
				 mui.toast('邮箱格式错误！');return false;
			}
		})
		mui('.yunset_bth_box').on('tap', '.addnexttwo',  function() {
			var name = $.trim(document.getElementById('name').value),
				hy = $.trim(document.getElementById('hy').value),
				job_classid = $.trim(document.getElementById('job_classid').value),
				city_classid = $.trim(document.getElementById('city_classid').value),
				minsalary = $.trim(document.getElementById('minsalary').value),
				maxsalary = $.trim(document.getElementById('maxsalary').value),
				report = $.trim(document.getElementById('report').value),
				type = $.trim(document.getElementById('type').value),
				jobstatus = $.trim(document.getElementById('jobstatus').value);
			if(hy== "") {
				mui.toast("请选择从事行业！");return false;
			}
			if(job_classid== "") {
				 mui.toast('请选择工作职能！');return false;
			}
			if(name== "") {
				 mui.toast('请输入期望岗位！');return false;
			}
			if(minsalary== "") {
				 mui.toast('请输入期望薪资！');return false;
			}
			if(maxsalary) {
				if(parseInt(maxsalary)>0 && parseInt(maxsalary) <= parseInt(minsalary)) {
					 mui.toast('最高薪资必须大于最低薪资！');return false;
				}
			}
			if(city_classid == "") {
				 mui.toast('请选择期望城市！');return false;
			}
			if(type== "") {
				 mui.toast('请选择工作性质！');return false;
			}
			if(report== "") {
				mui.toast('请选择到岗时间！');return false;
			}
			if(jobstatus== "") {
				mui.toast('请选择求职状态！');return false;
			}
		})
 		mui('.yunset_bth_box').on('tap', '#resumesubmit', addresume);
	});
	var jn = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_name']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>';
	jn['<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
']='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
';
	'<?php } ?>';
	var cn = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_name']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>';
	cn['<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
']='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
';
	'<?php } ?>';
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/cmc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
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
			$.post('index.php?c=userLog',{url:url,refer:refer,timeIn:timeIn,second:2,opera:22},function(data){
				if(data){
					$("#logid").val(data);
				}
			})
		},2000);
		
    }) 
	
	window.onbeforeunload = function(){
		var logid = $("#logid").val();
 		if(second>2){ 
			$.post('index.php?c=gxUserLog',{id:logid,second:second},function(data){
				if(data) {
					return false;
				}
			})
		}
   	}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
