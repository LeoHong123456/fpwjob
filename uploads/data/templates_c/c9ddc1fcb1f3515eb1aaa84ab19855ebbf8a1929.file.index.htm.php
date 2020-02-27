<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 20:42:59
         compiled from "/www/fpwjob/uploads/app/template/member/user/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:6935699305e4d2d536c2e65-03116041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9ddc1fcb1f3515eb1aaa84ab19855ebbf8a1929' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/user/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6935699305e4d2d536c2e65-03116041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resume' => 0,
    'uid' => 0,
    'qrcode' => 0,
    'member' => 0,
    'config' => 0,
    'user_photo' => 0,
    'wenhou' => 0,
    'username' => 0,
    'statis' => 0,
    'yqnum' => 0,
    'lookNum' => 0,
    'ainfo' => 0,
    'alist' => 0,
    'rlist' => 0,
    'userclass_name' => 0,
    'userdata' => 0,
    'v' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4d2d537b05e0_10355880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4d2d537b05e0_10355880')) {function content_5e4d2d537b05e0_10355880($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_sign')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.sign.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="bg" <?php if ($_smarty_tpl->tpl_vars['resume']->value['name']=='') {?>style="display:block" <?php }?>></div>
<div class="yun_w1200">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	
	<div class="index_no_resume_box" id="yingdao" style="display:none;">
		<div class="index_no_resume_cont">
			<div class="index_no_resume_p">
				<div class="index_no_resume_h1">请先填写简历信息 </div>
				<div class="index_no_resume_p_t">你没有创建简历，无法申请职位<br>为了更快的找到工作，需填写个人简历！</div>
				<a href="index.php?c=expect&add=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class=" index_no_resume_bth"> 创建简历 </a>
				<a href="javascript:void(0);" class="close_yd">好,知道了</a>
			</div>

		</div>
	</div>
	
  <?php if ($_smarty_tpl->tpl_vars['qrcode']->value) {?>
	<div class="index_no_resume_box" id="bdwx" style="display:none;">
		<div class="index_no_resume_cont">
			<div>
				
				<div class="yun_wxbd_img" id="#wx_login_qrcode">
					<img src="<?php echo $_smarty_tpl->tpl_vars['qrcode']->value;?>
" width="140" height="140">
				</div>
                <div class="yun_wxbd_tit">微信扫一扫</div>
				<div class="yun_wxbd_p">快速入职，消息先人一步</div>
 				<div class="yun_wxbd_ok"><a href="javascript:void(0);" class="close_yd">好,知道了</a></div>
			</div>

		</div>
	</div>
  <?php }?>

	<div class="yun_m_rightsidebar">
    <div class="yun_m_indexinfo">
    <?php if ($_smarty_tpl->tpl_vars['member']->value['wxid']==''&&$_smarty_tpl->tpl_vars['config']->value['wx_author']=='1') {?>
    <div class="yun_wtbd_tip">
    <div class="yun_wtbd_tip_tit">绑定微信，及时查询招聘单位对您的面试邀请，绝不错过任何机会！</div>
   <div class="yun_wtbd_tip_p"> 可便捷操作职位搜索、创建管理求职简历、简历投递实时追踪，投递进度快速提醒...等，随时随地轻松找工作</div>
   <?php if ($_smarty_tpl->tpl_vars['qrcode']->value) {?>
   <a href="javascript:;" class="wxtitle yun_wtbd_tip_bth">马上绑定微信</a>
   <?php } else { ?>
     <a href="javascript:void(0)" onclick="notweixin();" class=" yun_wtbd_tip_bth">马上绑定微信</a>
    <?php }?>
</div>
    <?php }?>
    
		

			<div class="yun_m_indexinfo_cont">

				<div class="yun_m_indexinfo_photo">
					<a href="index.php?c=uppic">
						<?php if ($_smarty_tpl->tpl_vars['resume']->value['sex']==1) {?>
						<img src=".<?php echo $_smarty_tpl->tpl_vars['user_photo']->value;?>
" border="0" height="80" width="80" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" /> <?php } else { ?>
						<img src=".<?php echo $_smarty_tpl->tpl_vars['user_photo']->value;?>
" border="0" height="80" width="80" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
',2);" /> <?php }?>
					</a>
					<?php if ($_smarty_tpl->tpl_vars['resume']->value['photo_status']=='1') {?>
						<font color="#f00">审核中</font>
					<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value['photo_status']=='2') {?>
						<font color="#f00">未通过</font>
					<?php }?>
				</div>

				<div class="yun_m_indexinfo_user">
					<div class="yun_m_indexinfo_user_p"> 
						<span class="yun_m_indexinfo_user_hi"><?php echo $_smarty_tpl->tpl_vars['wenhou']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

					</div>

					<div class="yun_m_indexinfo_user_bding">

						<div class="yun_m_indexinfo_user_bding_p">
							<a href="index.php?c=passwd"><?php if ($_smarty_tpl->tpl_vars['resume']->value['moblie_status']!='1') {?>
								<span class="yun_user_rz_box yun_user_rz_sj"><i class="yun_user_rz_no_icon"></i><em class="yun_user_rz_no">手机未验证</em></span> <?php } else { ?>
								<span class="yun_user_rz_box yun_user_rz_sj"><i class="yun_user_rz_yes_icon"></i><em class="yun_user_rz_yes">手机已验证</em></span> <?php }?>
							</a>
						</div>

						<div class="yun_m_indexinfo_user_bding_p">
							<a href="index.php?c=passwd"><?php if ($_smarty_tpl->tpl_vars['resume']->value['email_status']!='1') {?>
								<span class="yun_user_rz_box yun_user_rz_yx"><i class="yun_user_rz_no_icon"></i><em class="yun_user_rz_no">邮箱未绑定</em></span> <?php } else { ?>
								<span class="yun_user_rz_box yun_user_rz_yx"><i class="yun_user_rz_yes_icon"></i><em class="yun_user_rz_yes">邮箱已绑定</em></span> <?php }?>
							</a>
						</div>
						<div class="yun_m_indexinfo_user_bding_p">
							<a href="index.php?c=passwd"><?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']!='1') {?>
								<span class="yun_user_rz_box yun_user_rz_sf"><i class="yun_user_rz_no_icon"></i><em class="yun_user_rz_no">身份未验证</em></span> <?php } else { ?>
								<span class="yun_user_rz_box yun_user_rz_sf"><i class="yun_user_rz_yes_icon"></i><em class="yun_user_rz_yes">身份已验证</em></span> <?php }?>
							</a>
						</div>

					</div>
					<div class="yun_m_indexinfo_user_xg">
						<a href="index.php?c=info" class="yun_m_indexinfo_user_xg_a">修改个人信息></a>
					</div>

				</div>

				<div class="yun_m_index_pay">
					我的<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<span class="yun_m_index_pay_n" id="integral"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					<div class="yun_m_index_pay_p">
						<a href="index.php?c=pay" class="yun_m_index_pay_a">充值</a>
						<a href="<?php echo smarty_function_url(array('m'=>'redeem'),$_smarty_tpl);?>
" class="yun_m_index_pay_a" target="_blank">兑换礼品</a>
						<a href="index.php?c=integral" class="yun_m_index_pay_a">赚<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</a>
					</div>
					<div class="yun_m_indexinfo_user_bding_sth">
						<div class="yun_m_indexinfo_user_qd">
							<i class="yun_m_indexinfo_user_qd_icon"></i><?php echo smarty_function_sign(array(),$_smarty_tpl);?>
</div>
					</div>
				</div>

			</div>
		</div>
		<div class="yun_m_index_data" style="display:none;">
			<div class="yun_m_index_data_list">
				<a href="index.php?c=msg"><i class="yun_m_index_data_icon yun_m_index_data_icon_ms"></i>
					<div class="yun_m_index_data_list_n"><?php if ($_smarty_tpl->tpl_vars['yqnum']->value=='') {?>0<?php } else { ?><i class="member_Information_amount_n_c"><?php echo $_smarty_tpl->tpl_vars['yqnum']->value;?>
</i><?php }?></div>
					<div class="yun_m_index_data_list_p">面试通知</div>
				</a>
			</div>

			<div class="yun_m_index_data_list">
				<a href="index.php?c=job"><i class="yun_m_index_data_icon yun_m_index_data_icon_sq"></i>
					<div class="yun_m_index_data_list_n"><?php if ($_smarty_tpl->tpl_vars['statis']->value['sq_jobnum']<1) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['statis']->value['sq_jobnum'];
}?></div>
					<div class="yun_m_index_data_list_p">申请记录</div>
				</a>
				</div>

				<div class="yun_m_index_data_list">
					<a href="index.php?c=favorite"><i class="yun_m_index_data_icon yun_m_index_data_icon_sc"></i>
						<div class="yun_m_index_data_list_n"><?php if ($_smarty_tpl->tpl_vars['statis']->value['fav_jobnum']<1) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['statis']->value['fav_jobnum'];
}?></div>
						<div class="yun_m_index_data_list_p">收藏记录</div>
					</a>
					</div>
					<div class="yun_m_index_data_list yun_m_index_data_list_end">
						<a href="index.php?c=look"><i class="yun_m_index_data_icon yun_m_index_data_icon_look"></i>
							<div class="yun_m_index_data_list_n"><?php echo $_smarty_tpl->tpl_vars['lookNum']->value;?>
</div>
							<div class="yun_m_index_data_list_p">谁看了我的简历</div>
						</a>
					</div>
				</div>
				<div class="yun_m_index_date_box">
					<div class="yun_user_index_jobmsg_gz  sxl">
						<ul class="user_in_gz sxlist">
							<?php  $_smarty_tpl->tpl_vars['alist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ainfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alist']->key => $_smarty_tpl->tpl_vars['alist']->value) {
$_smarty_tpl->tpl_vars['alist']->_loop = true;
?>
							<li>你关注的
								<a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['alist']->value['uid']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['alist']->value['com_name'];?>
</a> 发布了
								<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>$_smarty_tpl->tpl_vars['alist']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['alist']->value['name'];?>
</a> 职位</li>
							<?php } ?>
						</ul>
					</div>
					<div class="yun_m_index_date_box_tit"> 求职管理</div>
					<div class="yun_m_index_date_list">
						<div class="yun_m_index_datename">面试通知</div>
						<a href="index.php?c=msg">
							<div class="yun_m_index_date_n"> <?php echo $_smarty_tpl->tpl_vars['yqnum']->value;?>
</div>
						</a>
					</div>
					<div class="yun_m_index_date_list">
						<div class="yun_m_index_datename">申请记录</div>
						<a href="index.php?c=job">
							<div class="yun_m_index_date_n"> <?php echo $_smarty_tpl->tpl_vars['statis']->value['sq_jobnum'];?>
</div>
						</a>
					</div>

					<div class="yun_m_index_date_list">
						<div class="yun_m_index_datename">收藏记录</div>
						<a href="index.php?c=favorite">
							<div class="yun_m_index_date_n"> <?php echo $_smarty_tpl->tpl_vars['statis']->value['fav_jobnum'];?>
</div>
						</a>
					</div>

					<div class="yun_m_index_date_list yun_m_index_date_list_end">
						<div class="yun_m_index_datename">谁看了我的简历</div>
						<a href="index.php?c=look">
							<div class="yun_m_index_date_n"> <?php echo $_smarty_tpl->tpl_vars['lookNum']->value;?>
</div>
						</a>
					</div>
				</div>

				<div class="yun_m_index_resume">
					<div class="yun_m_index_resume_tit">
						<div class="yun_m_index_resume_span">我的简历</div>
						<span id="myresumelist"></span> 
						<?php if (empty($_smarty_tpl->tpl_vars['rlist']->value)) {?>
						<div class="member_right_no_job">
							<div class="member_right_no_job_box ">
								<div class="yun_m_index_job_icon"> </div>
								<div class="member_right_no_jobr"> 你还没有创建简历，无法申请职位<br>
									<a href="index.php?c=expect&add=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="member_right_no_jobr_bth" style="text-decoration:underline">创建简历</a>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
				<div class="member_right_box_banner fltL" style="width:100%; overflow:hidden"></div>

				<div class="yun_m_index_job mt20 fltL">
					<div class="yun_m_index_job_tit"><span class="yun_m_index_job_tit_s">也许适合你的岗位</span></div>
					<?php if (empty($_smarty_tpl->tpl_vars['rlist']->value)) {?>
					
					<div class="member_right_no_job">
						<div class="member_right_no_job_box ">
							<div class="yun_m_index_job_icon"> </div>
							<div class="member_right_no_jobr"> 创建简历以后，系统会根据您的简历，<br> 通过后台算法为您匹配最适合您的招聘职位
								<br>
								<a href="index.php?c=expect&add=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="member_right_no_jobr_bth" style="text-decoration:underline">创建简历</a>
							</div>
						</div>
					</div>
					<?php } else { ?>
					<div id="joblist" class="member_right_job_box">
		
						<div id="nojoblist" class="member_right_no_job none">
							<div class="member_right_no_job_box ">
								<div class="yun_m_index_job_icon"> </div>
								<div class="yun_m_index_job_tip"> 没有适合的职位 </div>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
		
		<div id="shuaxin" class="" style="display:none;">
			<div class="sx_pd">
				<div class="sx_top">
					<dl>
						<dt></dt>
						<dd>
							<div>今天还没刷新，刷新简历将<em class="sx_bot_or">简历排名提前</em><br/>让企业更容易看到你，<em class="sx_bot_or">提高求职成功率！</em></div>
							<div class="sx_top_t">
								<em class="sx_top_t_tt">刷新前请确认以下信息准确完整：</em>
								<p>手机号码：<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
</p>
								<p>上次刷新时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rlist']->value['lastupdate'],"%Y-%m-%d %H:%M:%S");?>
</p>
								<div style="height:40px;">
									<div id="jobstatuslist">
										<p>求职状态：<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['rlist']->value['jobstatus']];?>

											<a class="sx_top_t_xg" href="#">修改</a>
										</p>
									</div>
									<div id="jobstatusupadte" style="display:none;">
										<span class="fl">求职状态：</span>
										<input style="float:left;" type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['rlist']->value['id'];?>
">
										<div class="news_expect_text  news_expect_text_re5">
											<form class="layui-form">
												<div class="layui-form-item">
													<div class="layui-input-inline" style="width:200px;">
														<select name="jobstatus" lay-filter="" id="jobstatusid">
															<option value="">请选择</option>
															<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_jobstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['rlist']->value['jobstatus']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
															<?php } ?>
														</select>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</dd>
					</dl>
				</div>
			</div>
			<div class="sx_bot">
				<a class="sx_bot_sx" href="javascript:void(0)" onclick="resumerefresh(<?php echo $_smarty_tpl->tpl_vars['rlist']->value['id'];?>
);">刷新</a>
				<a class="sx_bot_qx" href="javascript:void(0)">取消</a>
			</div>
		</div>

		
		<?php echo '<script'; ?>
 type="text/javascript">
			layui.use(['layer', 'form'], function() {
				var layer = layui.layer,
					form = layui.form,
					$ = layui.$;

				'<?php if ($_smarty_tpl->tpl_vars['rlist']->value['name']!=''&&$_smarty_tpl->tpl_vars['rlist']->value['lastupdate']<$_smarty_tpl->tpl_vars['time']->value&&$_COOKIE['exprefresh']!='1'&&$_smarty_tpl->tpl_vars['config']->value['resume_sx']==2) {?>'
					var shuaxinlayer = layer.open({
						type: 1,
						title: '刷新简历',
						closeBtn: 0,
						area: ['500px', '333px'],
						content: $("#shuaxin")
					});
					$(".sx_bot_qx").click(function() {
						layer.close(shuaxinlayer);
					}) 
				'<?php } elseif ($_smarty_tpl->tpl_vars['rlist']->value['name']!=''&&$_COOKIE['exprefresh']!='1'&&$_smarty_tpl->tpl_vars['member']->value['wxid']=='') {?> '
 						'<?php if ($_smarty_tpl->tpl_vars['qrcode']->value) {?>'
          var wxlayer = layer.open({
						type: 1,
						title: '绑定微信',
						closeBtn: 0,
						area: ['350px', '300px'],
						content: $("#bdwx")
					});
					$(".close_yd").click(function() {
						layer.close(wxlayer);
						location.reload();
					}) 
          '<?php }?>'
				'<?php }?>'

				'<?php if ($_smarty_tpl->tpl_vars['rlist']->value['name']=='') {?>'
					var rlayer = layer.open({
						type: 1,
						title: '温馨提示',
						closeBtn: 0,
						area: ['350px', '280px'],
						content: $("#yingdao")
					});
					$(".close_yd").click(function() {
						layer.close(rlayer);
					}) 
				'<?php }?>'
				
				

			});

			
			$(document).ready(function() {
				'<?php if ($_smarty_tpl->tpl_vars['rlist']->value) {?>'
					showresumelist();
					hsjoblist();
				'<?php }?>'

				$("#jobstatuslist").show();
				$("#jobstatusupadte").hide();
				$(".sx_top_t_xg").click(function() {
					$("#jobstatuslist").hide();
					$("#jobstatusupadte").show();
				});
				$('#show_resume').delegate('span', 'click', function() {
					$(this).parent().click();
				});

				$('.wxtitle').click(function(){
					var wxlayer = layer.open({
						type: 1,
						title: '绑定微信',
						closeBtn: 0,
						area: ['350px', '300px'],
						content: $("#bdwx")
					});
					$(".close_yd").click(function() {
						layer.close(wxlayer);
					}) 
				})
			});

			function show_resume(id) {
				if($(".index_resume_my_n #" + id).is(':hidden')) {
					$(".index_resume_my_n #" + id).css('display', 'block');
				} else {
					$(".index_resume_my_n #" + id).css('display', 'none');
				}
			}

			function showresumelist(id) {
				$.get('index.php?c=index&act=resumeajax', {
					rand: Math.random(),
					id: id
				}, function(data) {
					var data = eval("(" + data + ")");
					var $html = '<div class="member_index_resume_box" id="resumelist' + data.id + '" ><div class="member_index_resume_t"> <div class="yun_m_index_resume_QQ">'
					if(data.r_status == 1) {
						$html += '<font color="green">简历<br>已审核</font>';
					} else if(data.r_status == 0) {
						$html += '<font color="#f00">简历<br>审核中</font></span>';
					} else if(data.r_status == 3) {
						$html += '<font color="#f00">未通过<br>审核</font></span>';
					}
					
					$html += '</div>' +
						'<div class="member_index_resume_t_left">' +
						'<div class="member_index_resume_t_name fltL">' +
						'<div class="member_index_resume_t_name_l member_index_resume_t_name_w80 fltL"> 简历名称：</div>' +
						'<div class="index_resume_my_n" id="show_resume" onclick="show_resume(\'resume_expect' + data.id + '\')"> ' + data.resumelist + ' </div>' +
						'<div class="index_resume_my_ll">被浏览：' + data.hits + ' 次 </div></div>' +
						' <div class="member_index_resume_t_wz fltL">' +
						' <div class="member_index_resume_t_name_l fltL"> 完整度 <span class="member_index_resume_t_wz_n">' + data.integrity + '%</span></div>' +
						' <div class="member_index_resume_t_wzd"> ' +
						'<span class="member_index_resume_t_wz_b"> ' +
						'<em class="member_index_resume_t_wz_c" style="width:' + data.integrity + '%"><i class="ember_index_resume_t_wz_c_q"></i></em></span> ' +
						' </div></div>' +
						'<div class="member_index_resume_job fltL"><span class="member_index_resume_t_name_l member_index_resume_t_name_w80 fltL">期望职位：</span>' +
						'<span class="member_index_resume_jobname">' + data.jobname + '</span><span class="member_index_resume_jobxz">期望薪资：' + data.user_salary + '</span><span class="member_index_resume_time">更新时间：' + data.lastupdate + '</span> </div></div><div class="member_index_resume_t_cz fltR"><div  class="member_index_resume_set">';
					if(data.status == 2) {
						$html += '<a onClick="layer_del(\'\', \'index.php?c=privacy&act=up&status=1\');" href="javascript:void(0);"><i class="yun_user_index_r_yc"><em class="myresume_kqicon"></em></i></a><a href="index.php?c=privacy"> <div class="yun_user_index_set_name">简历已关闭</div></a>';
					} else {
						$html += '<a onClick="layer_del(\'\', \'index.php?c=privacy&act=up&status=2\');" href="javascript:void(0);"><i class="yun_user_index_r_gk"></i></a><a href="index.php?c=privacy"> <div class="yun_user_index_set_name">简历已公开</div></a>';
					}
					$html += '</div><div class="member_index_resume_t_cz_b">';
					if(data.r_status ==1){
						if(data.topdatetime > 0) {
							$html += '<a href="javascript:void(0)" onclick="resumetop(\'' + data.id + '\',\'' + data.topdate + '\',\'' + data.name + '\')" class="member_index_resume_t_cz_bth ">简历置顶</a>';
						} else {
							$html += '<a href="javascript:void(0)" onclick="resumetop(\'' + data.id + '\',\'\',\'' + data.name + '\')" class="member_index_resume_t_cz_bth ">简历置顶</a>';
						}
					}

					if(data.doc > 0) {
						$html += ' <a href="index.php?c=expectq&e=' + data.id + '" class="member_index_resume_t_cz_bth ">修改简历</a> ';
					} else {
						$html += ' <a href="index.php?c=expect&e=' + data.id + '" class="member_index_resume_t_cz_bth ">修改简历</a> ';
					}

					$html += '<a href="' + data.url + '" target="_blank" class="member_index_resume_t_cz_bth mt15">预览简历</a> <a onclick="layer_del(\'确定要刷新？\', \'index.php?c=resume&act=refresh&id=' + data.id + '\');" href="javascript:void(0)" class="member_index_resume_t_cz_bth member_index_resume_t_cz_bth_hover mt15">刷新简历</a></div> <div class="member_index_resume_t_cz_tip" id="re' + data.id + '"> 刷新简历可提升排名，每天一刷，提高求职成功率！<i class="member_index_resume_t_cz_tip_lt"></i><a href="javascript:;" onclick="$(\'#re' + data.id + '\').hide();" class="member_index_resume_t_cz_tip_close"></a></div></div></div>';
					if((data.edu == 0 || data.training == 0 || data.skill == 0 || data.work == 0 || data.project == 0 || data.other == 0) && data.doc == 0) {
						$html += '<div class="member_index_resume_msg"><div class="member_index_resume_msg_r"><div class="member_index_resume_msg_r_t"> 您还有以下资料没有填写 <span class="member_index_resume_msg_span">（为了更快的找到工作，建议您立即完善简历！）</span> </div>';
						if(data.work == 0) {
							$html += '<a href="index.php?c=expect&e=' + data.id + '#work_upbox" class="member_index_resume_msg_a">+ 工作经历</a>';
						}
						if(data.edu == 0) {
							$html += '<a href="index.php?c=expect&e=' + data.id + '#edu_upbox" class="member_index_resume_msg_a">+ 教育经历</a>';
						}
						if(data.training == 0) {
							$html += '<a href="index.php?c=expect&e=' + data.id + '#training_upbox" class="member_index_resume_msg_a">+ 培训经历</a>';
						}
						if(data.skill == 0) {
							$html += '<a href="index.php?c=expect&e=' + data.id + '#skill_upbox" class="member_index_resume_msg_a">+ 职业技能</a>';
						}
						if(data.project == 0) {
							$html += '<a href="index.php?c=expect&e=' + data.id + '#project_upbox" class="member_index_resume_msg_a">+ 项目经验</a>';
						}
						if(data.other == 0) {
							$html += '<a href="index.php?c=expect&e=' + data.id + '#other_upbox" class="member_index_resume_msg_a">+ 其他信息</a>';
						}
						if(!data.description) {
							$html += '<a href="index.php?c=expect&e=' + data.id + '#description_upbox" class="member_index_resume_msg_a">+ 自我评价</a>';
						}
						$html += '</div>';
					}
					$html += ' </div>'

					$("#myresumelist").html($html);
				})
			}
			function hsjoblist(){
				$.get('index.php?c=index&act=jobajax', {
					rand: Math.random()
				}, function(data) {
					var res = JSON.parse(data);
					if(res.list.length>0){
						var html = '';
						for(var i=0; i<res.list.length; i++){
							html += '<ul><li class="yun_index_joblist"><div class="yun_index_joblist_jobname">';
							html += '<a href="'+ res.list[i].joburl +'" class="member_right_job_box_name cblue" target="_blank">'+ res.list[i].name +'</a></div>';
							html += '<div class="yun_index_joblist_comname"><a href="'+ res.list[i].comurl +'" target="_blank">'+ res.list[i].com_name +'</a></div>';	
							html += '<div class="yun_index_joblist_xz"><span class="member_right_job_xz">'+ res.list[i].jobsalary +'</span></div>';
							html += '<div class="yun_index_joblist_yq nowrap">'+ res.list[i].citytwo +' | '+ res.list[i].edu_n +' | '+ res.list[i].exp_n +'经验</div></li></ul>';
						}
						$("#joblist").prepend(html);
					}else{
						$("#nojoblist").removeClass('none');
					}
				})
			}
			function marquee(time, id) {
				$(function() {
					var _wrap = $(id);
					var _interval = time;
					var _moving;
					_wrap.hover(function() {
						clearInterval(_moving);
					}, function() {
						_moving = setInterval(function() {
							var _field = _wrap.find('li:first');
							var _h = _field.height();
							_field.animate({
								marginTop: -_h + 'px'
							}, 800, function() {
								_field.css('marginTop', 0).appendTo(_wrap);
							})
						}, _interval)
					}).trigger('mouseleave');
				});
			}
     function notweixin(){
      layer.msg('微信公众号暂未绑定！', 2,8);
    }
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			marquee("2000", ".sxl .sxlist");
		<?php echo '</script'; ?>
>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
