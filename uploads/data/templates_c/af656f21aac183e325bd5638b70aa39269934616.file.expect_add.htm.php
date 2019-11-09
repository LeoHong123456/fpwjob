<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 21:30:28
         compiled from "/www/fpwjob/uploads/app/template/member/user/expect_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:13577198295dc56df41eb155-99718061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af656f21aac183e325bd5638b70aa39269934616' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/user/expect_add.htm',
      1 => 1572067844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13577198295dc56df41eb155-99718061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
    'config' => 0,
    'save' => 0,
    'resume' => 0,
    'arr_data' => 0,
    'j' => 0,
    'v' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
    'industry_index' => 0,
    'industry_name' => 0,
    'user_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc56df4291d00_89741720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc56df4291d00_89741720')) {function content_5dc56df4291d00_89741720($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/newclass.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<form action="index.php?c=expect&act=add" name="MyForm" method="post" target="supportiframe" onsubmit="return checkexpect();" autocomplete="off" class="layui-form">
	<div class="news_expect_body">
		<div class="news_expect">
			<div class="news_expect_cont">
				<div class="news_expect_cont_h1">
					<div class="news_expect_cont_h1_box">
						<span class="news_expect_cont_h1_s">简历是求职的利器，好的简历才能更快找到好工作！</span>
						<div class="news_expect_cont_h1_p">填写简历要像对待每一次考试那样认真哦！</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['save']->value) {?>
						<div id="forms" class="text_tips">
							您有上次未提交成功的数据
							<a href="javascript:;" onclick="saveexp();" class="text_tips_a">恢复数据</a> 
							<i id="close" class="text_tips_close"></i>
						</div>
					<?php }?>
				</div>

				<div class="news_expect_content">
					<div class="news_expect_tit"><span class="news_expect_tit_s"><i class="news_expect_tit_s_icon"></i>基本信息</span></div>
					<div class="news_expect_n_box">

						<div class="news_expect_list">
							<span class="news_expect_list_span"><i class="news_expectfont">*</i>姓名：</span>
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
" name="uname" id="uname" class="news_expect_text_t1" onBlur="checkonblur('uname');"/>
							<div class="resume_tip"><span class="none" id="hiduname"></span></div>
						</div>

						<div class="news_expect_list">
							<span class="news_expect_list_span news_expect_list_spanw160"><i class="news_expectfont">*</i>性别：</span>
							<input type="hidden" id="sex" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['sex'];?>
" /> 
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<span class="news_expect_sex_t news_expect_sex <?php if ($_smarty_tpl->tpl_vars['j']->value==$_smarty_tpl->tpl_vars['resume']->value['sex']) {?>news_expect_sex_cur<?php }?>" id="sex<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" onclick="checksex('<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
')"><i class="news_expect_icon_sex news_expect_icon_sex<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"></i><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span> 
							<?php } ?>
							<div class="resume_tip"><span class="none" id="hidsex"></span></div>
						</div>

						<div class="news_expect_list">
							<span class="news_expect_list_span"><i class="news_expectfont">*</i>出生年月：</span>
							<div class="text">
								<input name="birthday" id="birthday" type="text" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];?>
" class="news_expect_text_t1" readonly />
							</div>
							<div class="resume_tip"><span class="none" id="hidbirthday"></span> </div>
						</div>

						<div class="news_expect_list">
							<span class="news_expect_list_span news_expect_list_spanw160"><i class="news_expectfont">*</i>现居住地：</span>
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['living'];?>
" name="living" class="news_expect_text_t1" id="living" onBlur="checkonblur('living');" />
							<div class="resume_tip"><span class="none" id="hidliving"></span></div>
						</div>

						<div class="news_expect_list">
							<span class="news_expect_list_span"><i class="news_expectfont">*</i>最高学历：</span>
							<div class="news_expect_text_big news_expect_text_re2">
								<div class="layui-form-item">
									<div class="layui-input-inline" style="width:230px;">
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
" <?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="resume_tip"><span class="none" id="hideducid"></span></div>
						</div>

						<div class="news_expect_list">
							<span class="news_expect_list_span news_expect_list_spanw160"><i class="news_expectfont">*</i>工作经验：</span>
							<div class="news_expect_text_big   news_expect_text_re1">
								<div class="layui-form-item">
									<div class="layui-input-inline" style="width:230px;">
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
" <?php if ($_smarty_tpl->tpl_vars['resume']->value['exp']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="resume_tip"><span class="none" id="hidexpid"></span></div>
						</div>

						<div class="news_expect_list">
							<span class="news_expect_list_span"><i class="news_expectfont">*</i>手机号码：</span> 
							<?php if ($_smarty_tpl->tpl_vars['resume']->value['moblie_status']==1) {?>
								<span class="news_phe_ok"><?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
 </span>
								<a href="index.php?c=passwd" class="news_ok_rz">重新认证</a>
								<input type="hidden" id="telphone" name="telphone" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
"> 
							<?php } else { ?>
								<input name="telphone" id="telphone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" class="news_expect_text_t1" onBlur="checkonblur('telphone');" />
								<span id="by_telphone" style="display:none">请正确填写手机号码</span> 
							<?php }?>
							<div class="resume_tip"><span class="none" id="hidtelphone"></span></div>
						</div>

						<div class="news_expect_list">
							<span class="news_expect_list_span news_expect_list_spanw160">联系邮箱：</span> 
							<?php if ($_smarty_tpl->tpl_vars['resume']->value['email_status']==1) {?>
								<span class="news_email_ok"><?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
</span>
								<a href="index.php?c=passwd" class="news_ok_rz">重新认证</a>
								<input type="hidden" id="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
"> 
							<?php } else { ?>
								<input name="email" id="email" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
" class="news_expect_text_t1" onBlur="checkonblur('email');" />
								<span id="by_email" class="errordisplay">邮件格式错误</span> 
							<?php }?>
							<div class="resume_tip"><span class="none" id="hidemail"></span></div>
						</div>
					</div>

					<div class="news_expect_tit"><span class="news_expect_tit_s"><i class="news_expect_tit_yx_icon"></i>求职意向</span></div>

					<div class="news_expect_n_box">

						<div class="news_expect_list">
							<span class="news_expect_list_span "><i class="news_expectfont">*</i>从事行业：</span>
							<div class="news_expect_text_big  news_expect_text_re10">
								<div class="layui-form-item">
									<div class="layui-input-inline" style="width:230px;">
										<select name="hy" lay-filter="" id="hyid">
											<option value="">请选择行业</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['resume']->value['hy']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
								
							</div>
							<div class="resume_tip"><span class="none" id="hidhyid"></span></div>
						</div>

						<div class="news_expect_list">
							<span class="news_expect_list_span news_expect_list_spanw160"><i class="news_expectfont">*</i>工作职能：</span>
							<div class="news_expect_text_big_box  news_expect_text_re9">
								
								<input name='job_class' id='job_class' value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['job_classid'];?>
" type='hidden'/>
								<input type="button" id="workadds_job"   value="<?php if ($_smarty_tpl->tpl_vars['resume']->value['job_classid']) {
echo $_smarty_tpl->tpl_vars['resume']->value['job_classname'];
} else { ?>请选择工作职能<?php }?>" style=" float:left;" class="news_expect_bth_big"  onclick="index_job_new(5,'#workadds_job','#job_class','left:100px;top:100px; position:absolute;','1');" readonly="readonly" />
								
							</div>
							<div class="resume_tip"><span class="none" id="hidjob_class"></span></div>
						</div>

						<div class="news_expect_list">
							<span class="news_expect_list_span"><i class="news_expectfont">*</i>期望岗位：</span>
							<input type="text" value="" name="name" id="name" class="news_expect_text_t1" onBlur="checkonblur('name');" placeholder="具体岗位 如：销售主管" />
							<div class="resume_tip"><span class="none" id="hidname"></span></div>
						</div>

						<div class="news_expect_list">
							<span class="news_expect_list_span news_expect_list_spanw160"><i class="news_expectfont">*</i>期望薪资：</span>
							<div class="news_expect_xztext_box">
								<input type="text" id="minsalary" name="minsalary" size="5" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['minsalary'];?>
" onkeyup="checkmoney(this)" class="news_expect_xztext " onBlur="checkonblur('minsalary');" placeholder="最低薪资" />
								<span class="job_expectxz_dw">元/月</span>
							</div>
							<span class="news_expect_text_xzline">-</span>
							<div class="news_expect_xztext_box">
								<input type="text" id="maxsalary" name="maxsalary" size="5" placeholder="最高薪资" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['maxsalary'];?>
" onkeyup="checkmoney(this)" class="news_expect_xztext" />
								<span class="job_expectxz_dw">元/月</span>
							</div>
							<div class="resume_tip"><span class="none" id="hidminsalary"></span></div>
						</div>

						<div class="news_expect_list">
							<span class="news_expect_list_span"><i class="news_expectfont">*</i>期望城市：</span>
							<div class="news_expect_text_big_box  news_expect_text_re9">
								
								<input name='city_class' id='city_class' value="" type='hidden' />
								 <input type="button" id="cityadds_job" class="news_expect_bth_big" onclick="index_city_new(5,'#cityadds_job','#city_class','left:100px;top:100px; position:absolute;')" value="请选择期望城市"  />
							</div>
							<div class="resume_tip"><span class="none" id="hidcity_class"></span></div>
						</div>
						
						<div class="news_expect_list">
							<span class="news_expect_list_span news_expect_list_spanw160"><i class="news_expectfont">*</i>工作性质：</span>
							<div class="news_expect_text_big  news_expect_text_re6">
								<div class="layui-form-item">
									<div class="layui-input-inline" style="width:230px;">
										<select name="type" lay-filter="" id="typeid">
											<option value="">请选择工作性质</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['resume']->value['type']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="resume_tip"><span class="none" id="hidtypeid"></span></div>
						</div>

						<div class="news_expect_list">
							<span class="news_expect_list_span"><i class="news_expectfont">*</i>到岗时间：</span>
							<div class="news_expect_text_big  news_expect_text_re5">
								<div class="layui-form-item">
									<div class="layui-input-inline" style="width:230px;">
										<select name="report" lay-filter="" id="reportid">
											<option value="">请选择到岗时间</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['resume']->value['report']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="resume_tip"><span class="none" id="hidreportid"></span></div>
						</div>

						<div class="news_expect_list">
							<span class="news_expect_list_span news_expect_list_spanw160"><i class="news_expectfont">*</i>求职状态：</span>
							<div class="news_expect_text_big  news_expect_text_re4">
								<div class="layui-form-item">
									<div class="layui-input-inline" style="width:230px;">
										<select name="jobstatus" lay-filter="" id="statusid">
											<option value="">请选择求职状态</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_jobstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['resume']->value['jobstatus']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="resume_tip"><span class="none" id="hidstatusid"></span></div>
						</div>

						<?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']=='1') {?>
							
							<div class="news_expect_tit"><span class="news_expect_tit_s"><i class="news_expect_tit_yx_icon"></i>最近一份工作</span></div>

							<div class="news_expect_n_box">
								<div class="news_expect_list">
									<span class="news_expect_list_span"><i class="news_expectfont">*</i>公司名称：</span>
									<input type="text" value="" name="workname" id="workname" class="news_expect_text_t1" onBlur="checkonblur('workname');" placeholder="请填写公司名称"/>
									<span class="news_expect_name"></span>
									<div class="resume_tip"><span class="none" id="hidworkname"></span></div>
								</div>

								<div class="news_expect_list">
									<span class="news_expect_list_span"><i class="news_expectfont">*</i>担任职位：</span>
									<input type="text" value="" name="worktitle" id="worktitle" class="news_expect_text_t1" onBlur="checkonblur('worktitle');" placeholder="请填写担任职位"/>
									<span class="news_expect_name"></span>
									<div class="resume_tip"><span class="none" id="hidworktitle"></span></div>
								</div>

								<div class="news_expect_list news_expect_listw100">
									<span class="news_expect_list_span"><i class="news_expectfont">*</i>在职时间：</span>
									<input name="worksdate" id="worksdate" type="text" value="" class="news_expectadd_text">
									<span class="news_expect_text_xzline">-</span>
									<input name="workedate" id="workedate" type="text" value="" class="news_expectadd_text">
									<div class="news_expect_listtody">
										<input type="checkbox" value='1' id="stopdate" name="stopdate" lay-filter="stopdate" title="至今" lay-skin="primary"> 
									</div>
									<span class="news_expect_name"></span>
									<div class="resume_tip"><span class="none" id="hidworksdate"></span></div>
								</div>

								<div class="news_expect_textarea">
									<span class="news_expect_list_span">工作内容：</span>
									<div class="news_expect_textarea_box">
										<textarea rows="5" cols="50" name="workcontent" id="workcontent" class="news_expect_n_boxtextarea "></textarea>
									</div>
									<span class="news_expect_name"></span>
									<div class="resume_tip"><span class="none" id="hidworkcontent"></span></div>
								</div>
							</div>
							
						<?php }?> 

						<?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_edu']=='1') {?>
							
							<div class="news_expect_tit"><span class="news_expect_tit_s"><i class="news_expect_tit_yx_icon"></i>毕业院校</span></div>

							<div class="news_expect_n_box">
								<div class="news_expect_list"><span class="news_expect_list_span"><i class="news_expectfont">*</i>学校名称：</span>
									<input type="text" value="" name="eduname" id="eduname" class="news_expect_text_t1" onBlur="checkonblur('eduname');" placeholder="请填写学校名称"/>
									<span class="news_expect_name"></span>
									<div class="resume_tip"><span class="none" id="hideduname"></span></div>
								</div>

								<div class="news_expect_list"><span class="news_expect_list_span"><i class="news_expectfont">*</i>在校时间：</span>
									<input name="edusdate" id="edusdate" type="text" value="" class="news_expectadd_text" />
									<span class="news_expect_text_xzline">-</span>
									<input name="eduedate" id="eduedate" type="text" value="" class="news_expectadd_text" />
									<span class="news_expect_name"></span>
									<div class="resume_tip resume_tipw160"><span class="none" id="hidedusdate"></span></div>
								</div>

								<div class="news_expect_list"><span class="news_expect_list_span"><i class="news_expectfont">*</i>最高学历：</span>
									<div class="news_expect_text_big   news_expect_text_re2">
										<div class="layui-form-item">
											<div class="layui-input-inline" style="width:230px;">
												<select name="education" lay-filter="" id="education">
													<option value="">请选择学历</option>
													<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
									<div class="resume_tip"><span class="none" id="hideducation"></span></div>
								</div>
								<div class="news_expect_list"><span class="news_expect_list_span"><i class="news_expectfont">*</i>所学专业：</span>
									<input type="text" value="" name="eduspec" id="eduspec" class="news_expect_text_t1" onBlur="checkonblur('eduspec');" placeholder="请填写所学专业"/>
									<span class="news_expect_name"></span>
									<div class="resume_tip"><span class="none" id="hideduspec"></span></div>
								</div>
								<div class="news_expect_list"><span class="news_expect_list_span">班级职位：</span>
									<input type="text" value="" name="edutitle" id="edutitle" class="news_expect_text_t1"  placeholder="请填写班级职位"/>
									<span class="news_expect_name"></span>
								</div>
							</div>
							
						<?php }?>
								
						<?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_project']=='1') {?>
							
							<div class="news_expect_tit"><span class="news_expect_tit_s"><i class="news_expect_tit_yx_icon"></i>近期项目：</span></div>

							<div class="news_expect_n_box">
								<div class="news_expect_list"><span class="news_expect_list_span"><i class="news_expectfont">*</i>项目名称：</span>
									<input type="text" value="" name="proname" id="proname" class="news_expect_text_t1" onBlur="checkonblur('proname');" />
									<span class="news_expect_name"></span>
									<div class="resume_tip"><span class="none" id="hidproname"></span></div>
								</div>

								<div class="news_expect_list"><span class="news_expect_list_span"><i class="news_expectfont">*</i>担任职位：</span>
									<input type="text" value="" name="protitle" id="protitle" class="news_expect_text_t1" onBlur="checkonblur('protitle');" />
									<span class="news_expect_name"></span>
									<div class="resume_tip"><span class="none" id="hidprotitle"></span></div>
								</div>

								<div class="news_expect_list"><span class="news_expect_list_span"><i class="news_expectfont">*</i>项目时间：</span>
									<input name="prosdate" id="prosdate" type="text" value="" class="news_expectadd_text" />
									<span class="news_expect_text_xzline">-</span>
									<input name="proedate" id="proedate" type="text" value="" class="news_expectadd_text" />
									<span class="news_expect_name"></span>
									<div class="resume_tip resume_tipw140"><span class="none" id="hidprosdate"></span></div>
								</div>

								<div class="news_expect_textarea"><span class="news_expect_list_span">项目内容：</span>
									<div class="news_expect_textarea_box">
										<textarea rows="5" cols="50" name="procontent" id="procontent" class="news_expect_n_boxtextarea"></textarea>
									</div>
									<span class="news_expect_name"></span>
									<div class="resume_tip"><span class="none" id="hidprocontent"></span></div>
								</div>
							</div>
							
						<?php }?>

						<div class="news_expect_nbth">
							<input id="logid" name="logid" type="hidden" />
							<input type="submit" class="news_expect_list_sub" value="保存" name="submit">
							<input id="save" name="save" value="<?php echo $_smarty_tpl->tpl_vars['save']->value['name'];?>
" type="hidden" />
							<input id="addtype" value="addexpect" type="hidden" />
						</div>
					</div>
					
						<div class="text_tips_bc">
							<div class="text_tips_bc_h1"> 信息保存</div>
							<div class="text_tips_bc_cont">
								<?php if ($_smarty_tpl->tpl_vars['save']->value['time']) {?>
									<div class="text_tips_bc_l">信息已于<?php echo $_smarty_tpl->tpl_vars['save']->value['time'];?>
保存</div>
								<?php }?>
								<div class="text_tips_bc_time"> <span id="totalSecond"></span>s后将自动保存<br>已填信息</div>
								<a id="atime" href="javascript:;" onclick="saveexpform();" class="text_tips_bc_bth">保存数据</a>
								
							</div>
						</div>
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
</form>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/job.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/class.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/class.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lssave.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/newclass.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
	layui.use(['layer', 'form', 'laydate'], function() {
		var layer = layui.layer,
			form = layui.form,
			laydate = layui.laydate,
			$ = layui.$;
		'<?php if (!$_smarty_tpl->tpl_vars['resume']->value['birthday']) {?>'
		laydate.render({
			elem: '#birthday',
			max: -5113,
			value: '1990-01-01'
		});
		'<?php } else { ?>'
		laydate.render({
			elem: '#birthday',
			max: -5113
		});
		'<?php }?>'
		monthclick(laydate,'#worksdate',1);
		monthclick(laydate,'#workedate',1);
		monthclick(laydate,'#edusdate',1);
		monthclick(laydate,'#eduedate',1);
		monthclick(laydate,'#prosdate',1);
		monthclick(laydate,'#proedate',1);
		$("input[name='type']").each(function() {
			$(this).next().click(function() {
				var val = $(this).prev().val();
				if(val) {
					$("#typeid").val(val);
				}

			});

		});
		form.on('checkbox(stopdate)', function(data) {

			if(data.elem.checked) {
				$('#workedate').attr('disabled', 'disabled');
				$('#workedate').val('至今');
			} else {
				$('#workedate').val('');
				$('#workedate').removeAttr('disabled');
			}
			form.render('checkbox');

		});
		form.on('radio', function(data) {

			msg = '';
			showblurmsg('typeid', "1", msg);

		});
		form.on('select', function(data) {

			var selid = data.elem.id;
			checkonblur(selid);

		});

	});
	var userstyle = '<?php echo $_smarty_tpl->tpl_vars['user_style']->value;?>
';
	var start = 30;
	var step = -1;
	var save = $("#save").val();
	if(!save) {
		function count() {
			$("#atime").click(function() {
				start = 30
			});
			var totalSecond = document.getElementById("totalSecond");
			if(totalSecond) {
				totalSecond.innerHTML = start;
			}
			start += step;
			if(start < 0) {
				saveexpform();
				start = 30;
			}
			setTimeout("count()", 1000);
		}
		window.onload = count;
	}

	function checkexpect() {

		var resume_edu = $('#resume_edu').val();
		var resume_exp = $('#resume_exp').val();
		var resume_pro = $('#resume_pro').val();

		var arrayObj = new Array('name', 'hyid', 'job_class', 'maxsalary', 'minsalary', 'city_class', 'typeid', 'reportid', 'statusid', 'uname', 'sex', 'birthday', 'educid', 'expid', 'telphone', 'email', 'living');
		if(resume_exp == '1') {

			var arrayExp = new Array('workname', 'worktitle', 'worksdate');

			arrayObj = arrayObj.concat(arrayExp);
		}
		if(resume_edu == '1') {
			var arrayEdu = new Array('eduname', 'edusdate', 'eduedate', 'education', 'eduspec');
			arrayObj = arrayObj = arrayObj.concat(arrayEdu);
		}
		if(resume_pro == '1') {
			var arrayPro = new Array('proname', 'protitle', 'prosdate', 'proedate');
			arrayObj = arrayObj.concat(arrayPro);
		}

		for(i = 0; i < arrayObj.length; i++) {

			checkonblur(arrayObj[i]);
		}

		for(i = 0; i < arrayObj.length; i++) {
			if(exitsdate(arrayObj[i]) == false) {

				return false;
			}
		}
		var loadi = layer.load('保存中，请稍候...', 0);
	}

	function checkonblur(id) {
		var obj = $.trim($("#" + id).val());
		var msg;

		if(id == "name") {
			if(obj == "") {
				msg = '请填写期望岗位！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "hyid") {
			if(obj == "") {
				msg = '请选择从事行业！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "job_class") {
			if(obj == "") {
				msg = '请选择期望职位！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "maxsalary") {
			var minsalary = parseInt($('#minsalary').val());
			if(parseInt(obj) > 0 && parseInt(obj) < minsalary) {
				msg = '最高薪资必须大于最低薪资！';
				showblurmsg('minsalary', "0", msg);
			} else {
				msg = '';
				showblurmsg('minsalary', "1", msg);
				$("#" + id).attr('date', '1');
			}
		}
		if(id == "minsalary") {
			var maxsalary = parseInt($('#maxsalary').val());
			if(obj == 0 || obj == "" || obj == "最低薪资") {
				msg = '请填写期望薪资！';
				showblurmsg(id, "0", msg);
			} else if(parseInt(obj) > maxsalary && maxsalary>0) {
				msg = '最高薪资必须大于最低薪资！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "city_class") {
			if(obj == "") {
				msg = '请选择工作地区！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "typeid") {
			if(obj == "") {
				msg = '请选择工作性质！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "reportid") {
			if(obj == "") {
				msg = '请选择到岗时间！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "statusid") {
			if(obj == "") {
				msg = '请选择求职状态！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "uname") {
			if(obj == "") {
				msg = '请输入真实姓名！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "sex") {
			if(obj == "") {
				msg = '请选择性别！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "birthday") {
			if(obj == "") {
				msg = '请选择出生年月！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "educid") {
			if(obj == "") {
				msg = '请选择最高学历！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "expid") {
			if(obj == "") {
				msg = '请选择工作经验！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "telphone") {
			var reg = /^\d{5,15}$/;
			if(obj == '') {
				msg = "请输入手机号码！";
				showblurmsg(id, "0", msg);
			} else if(!reg.test(obj)) {
				msg = "手机号码格式错误！";
				showblurmsg(id, "0", msg);
			} else {
				$.ajax({
					type: "POST",
					url: weburl + "/member/index.php?c=expect&act=regmoblie",
					data: {
						telphone: obj
					},
					dataType: "text",
					async: false,
					success: function(data) {
						if(data == 0) {
							msg = '';
							showblurmsg(id, "1", msg);
							return true;
						} else {
							msg = "号码已存在！";
							showblurmsg(id, "0", msg);
						}
					}
				});
			}
		}
		if(id == "email") {
			var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
			if(obj != "") {

				if(!myreg.test(obj)) {
					msg = "邮箱格式错误！";
					showblurmsg(id, "0", msg);
				} else {
					$.ajax({
						type: "POST",
						url: weburl + "/member/index.php?c=expect&act=ajaxreg",
						data: {
							email: obj
						},
						dataType: "text",
						async: false,
						success: function(data) {
							if(data == 0) {
								msg = '';
								showblurmsg(id, "1", msg);
							} else {
								msg = "邮箱已被使用！";
								showblurmsg(id, "0", msg);
							}
						}
					});

				}
			} else {
				msg = '';
				showblurmsg(id, "1", msg);

			}
		}
		if(id == "living") {
			if(obj == "") {
				msg = '请输入现居住地！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}

		if(id == "workname") {

			if(obj == "") {
				msg = '请填写公司名称！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "worktitle") {

			if(obj == "") {
				msg = '请填写担任职位！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "worksdate") {

			if(obj == "") {
				msg = '请填写工作时间！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}

		if(id == "eduname") {

			if(obj == "") {
				msg = '请填写学校名称！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "edusdate") {
			if(obj == "") {
				msg = '请填写在校时间！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}

		if(id == "eduedate") {
			if(obj == "") {
				msg = '请填写离校或预计离校时间！';
				showblurmsg('edusdate', "0", msg);
				showblurmsg('eduedate', "0", msg);
			} else {
				var st = toDate($('#edusdate').val());
				var ed = toDate(obj);
				if(st > ed) {
					msg = '离校时间不合理';
					showblurmsg('edusdate', "0", msg);
					showblurmsg('eduedate', "0", msg);
				} else {
					msg = '';
					showblurmsg('edusdate', "1", msg);
					showblurmsg('eduedate', "1", msg);
				}
			}
		}

		if(id == "education") {

			if(obj == "") {
				msg = '请选择相关学历！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "eduspec") {

			if(obj == "") {
				msg = '请填写所学专业！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "proname") {

			if(obj == "") {
				msg = '请填写项目名称！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "protitle") {

			if(obj == "") {
				msg = '请填写项目职位！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "prosdate") {

			if(obj == "") {
				msg = '请选择项目时间！';
				showblurmsg(id, "0", msg);
			} else {
				msg = '';
				showblurmsg(id, "1", msg);
			}
		}
		if(id == "proedate") {

			if(obj == "") {
				msg = '请选择项目结束时间！';
				showblurmsg('prosdate', "0", msg);
				showblurmsg('proedate', "0", msg);
			} else {
				var st = toDate($('#prosdate').val());
				var ed = toDate(obj);

				if(st > ed) {

					msg = '项目结束时间不合理';
					showblurmsg('prosdate', "0", msg);
					showblurmsg('proedate', "0", msg);
				} else {
					msg = '';
					showblurmsg('prosdate', "1", msg);
					showblurmsg('proedate', "1", msg);
				}

			}
		}

	}

	function toDate(str) {
		var sd = str.split("-");
		return new Date(sd[0], sd[1]);
	}

	function showblurmsg(id, type, msg) {
		$("#hid_" + id).show();
		$("#hid" + id).html(msg);
		if(type == "0") {
			$("#hid" + id).attr("class", "");
			$("#" + id).removeClass("resume_tipfalse");
			$("#" + id).attr('date', '0');
			return false;
		} else {
			$("#hid" + id).attr("class", "resume_tipok");
			$("#" + id).addClass("resume_tipfalse");
			$("#" + id).attr('date', '1');
		}
	}

	function exitsdate(id) {
		if(document.getElementById(id)) {
			if($('#' + id).attr('date') != '1') {
				return false;
			} else {
				return true;
			}
		} else {
			return true;
		}
	}

	function checkmoney(obj) {
		obj.value = obj.value.replace(/[^0-9.]/g, '')
		obj.value = obj.value.replace(/[^\d.]/g, ""); 
		obj.value = obj.value.replace(/\.{2,}/g, "."); 
		obj.value = obj.value.replace(".", "$#$").replace(/\./g, "").replace("$#$", ".");
		obj.value = obj.value.replace(/^(\-)*(\d+)\.(\d\d).*$/, '$1$2.$3'); 
		if(obj.value.indexOf(".") < 0 && obj.value != "") { 
			obj.value = parseFloat(obj.value);
		}
	}
	
	function checksex(id) {
		$(".news_expect_sex").removeClass('news_expect_sex_cur');
		$("#sex" + id).addClass('news_expect_sex_cur');
		$("#sex").val(id);
		checkonblur('sex');
	}
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
			$.post('index.php?c=log',{url:url,refer:refer,timeIn:timeIn,second:2,opera:21},function(data){
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

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
