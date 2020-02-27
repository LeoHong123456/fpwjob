<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 14:32:10
         compiled from "/www/fpwjob/uploads/app/template/default/job/comapply.htm" */ ?>
<?php /*%%SmartyHeaderCode:12684644495e2e83ea1307f6-25481616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1d3cee5caf9dbe9d7c8434fa59b73ff4b5e3327' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/default/job/comapply.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12684644495e2e83ea1307f6-25481616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'title' => 0,
    'Info' => 0,
    'usertype' => 0,
    'favjob' => 0,
    'uid' => 0,
    'userid_job' => 0,
    'wlist' => 0,
    'stop' => 0,
    'sy_recommend_day_num' => 0,
    'recommendInterval' => 0,
    'reward' => 0,
    'resumenum' => 0,
    'useridjobnum' => 0,
    'langlist' => 0,
    'comclass_name' => 0,
    'company_msg' => 0,
    'mlist' => 0,
    'v' => 0,
    'job' => 0,
    'city_type' => 0,
    'city_name' => 0,
    'city_index' => 0,
    'job_type' => 0,
    'job_name' => 0,
    'job_index' => 0,
    'keylist' => 0,
    'pre' => 0,
    'job_jia' => 0,
    'usertypemsg' => 0,
    'arr_data' => 0,
    'j' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
    'isAuthcodeCheck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e83ea4e7916_16069711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e83ea4e7916_16069711')) {function content_5e2e83ea4e7916_16069711($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_listurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.listurl.php';
if (!is_callable('smarty_function_ad')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.ad.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/comapply.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body class="body_bg">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="job_ceil " id="float">
		<div class="job_ceil_box">
			<div class="job_ceil_box_bg"></div>
			<div class="job_ceil_box_c">
				<div class="yun_content">
					<div class="job_ceil_cont"> 
						<span class="job_ceil_jobname"><?php echo $_smarty_tpl->tpl_vars['Info']->value['jobname'];?>
</span> 
						<span class="job_ceil_jobxz">
							<?php if ($_smarty_tpl->tpl_vars['Info']->value['minsalary']&&$_smarty_tpl->tpl_vars['Info']->value['maxsalary']) {?>
								￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['Info']->value['maxsalary'];?>

							<?php } elseif ($_smarty_tpl->tpl_vars['Info']->value['minsalary']) {?>
								<span class="Company_Basic_information_xz"><?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
以上</span>
							<?php } else { ?>
								面议
							<?php }?> 
						</span> 
						<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?> 
							<?php if ($_smarty_tpl->tpl_vars['favjob']->value) {?> 
								<a href="javascript:void(0);" class="job_ceil_jobsc">已收藏</a> 
							<?php } else { ?> 
								<a href="javascript:void(0);" onclick="fav_job('<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
','2');" id="favjobid<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" class="job_ceil_jobsc">收藏</a> 
							<?php }?> 
						<?php } else { ?> 
							<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> 
								<a href="javascript:void(0);" onclick="notuser();" class="job_ceil_jobsc" rel="nofollow">收藏</a> 
							<?php } else { ?> 
								<a href="javascript:void(0);" onclick="showlogin('1');" class="job_ceil_jobsc" rel="nofollow">收藏</a> 
							<?php }?> 
						<?php }?> 

						<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?> 
							<?php if ($_smarty_tpl->tpl_vars['userid_job']->value) {?> 
								<a class="job_ceil_jobtd">已申请</a> 
							<?php } else { ?> 
								<a onclick="sqjobtop();" href="javascript:;" class="job_ceil_jobtd">申请职位</a> 
							<?php }?> 
						<?php } else { ?> 
							<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> 
								<a onclick="notuser();" href="javascript:;" class="job_ceil_jobtd">申请职位</a>
							<?php } else { ?> 
								<a onclick="applyjobuid();" href="javascript:;" class="job_ceil_jobtd">申请职位</a> 
							<?php }?> 
						<?php }?> 

						<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?> 
							<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> 
								<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?> 
									<a href="javascript:void(0);" onclick="jobChat('<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
',<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_chat_type'];?>
,'<?php echo $_smarty_tpl->tpl_vars['userid_job']->value['id'];?>
','com','<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
')" class="job_ceil_jobtd job_ceil_jobzl">主管直聊</a> 
								<?php } else { ?> 
									<a href="javascript:void(0);" onclick="layer.msg('求职者才能和主管直聊',2,8)" class="job_ceil_jobtd job_ceil_jobzl">主管直聊</a> 
								<?php }?> 
							<?php } else { ?>
								<a href="javascript:void(0);" onclick="showlogin('1')" class="job_ceil_jobtd job_ceil_jobzl">主管直聊</a> 
							<?php }?> 
						<?php }?> 
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="yun_content">
		<div class="current_Location png"> 
			您当前的位置： <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
">职位列表</a> > 职位详情 
		</div>
		
		<div class="clear"></div>
		
		<div class="comappiy_left_box fl">
			<div class="Company_post_box fl">
				<div class="Company_post_top fl">
					<div class="Company_post_name fl">
						<h1 class="Company_post_name_h1"><?php echo $_smarty_tpl->tpl_vars['Info']->value['jobname'];?>
</h1>
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['urgent_time']>time()) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/jobjp.png" title="紧急招聘" class="Company_post_name_img">
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['xuanshang']&&$_smarty_tpl->tpl_vars['Info']->value['xsdate']>time()) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/jobtj.png" title="置顶职位" class="Company_post_name_img">
						<?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['rec_time']>time()) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/jobtj.png" title="站长推荐" class="Company_post_name_img">
						<?php }?> 
					</div>

					<div class="Company_post_State_time "> 
						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Info']->value['lastupdate'],"%Y-%m-%d");?>
 更新
						<span class="Company_post_State_s_zw">被浏览：<?php echo '<script'; ?>
 src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','a'=>'GetHits','id'=>$_tmp1),$_smarty_tpl);?>
"><?php echo '</script'; ?>
> 次</span>
					</div>
					
					<div class="Company_post_State">
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['minsalary']&&$_smarty_tpl->tpl_vars['Info']->value['maxsalary']) {?> 
							<span class="Company_Basic_information_xz">￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['Info']->value['maxsalary'];?>
</span> 
						<?php } elseif ($_smarty_tpl->tpl_vars['Info']->value['minsalary']) {?>
							<span class="Company_Basic_information_xz">￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
以上</span> 
						<?php } else { ?> 
							<span class="Company_Basic_information_xz">面议</span>
						<?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_city_one']||$_smarty_tpl->tpl_vars['Info']->value['job_city_two']||$_smarty_tpl->tpl_vars['Info']->value['job_city_three']) {?>
							<i class="Company_Basic_information_line">|</i>
							<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_city_two'];?>

							<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_city_three']) {?> -<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_city_three'];?>
 <?php }?> 
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_exp']) {?>
							<i class="Company_Basic_information_line">|</i>
							<span class="Company_Basic_information_l"><?php echo $_smarty_tpl->tpl_vars['Info']->value['job_exp'];?>
经验</span>
						<?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_edu']) {?>
							<i class="Company_Basic_information_line">|</i>
							<span class="Company_Basic_information_l"><?php echo $_smarty_tpl->tpl_vars['Info']->value['job_edu'];?>
学历</span>
						<?php }?> 
						
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['is_graduate']) {?>
							<i class="Company_Basic_information_line">|</i>
							<span class="Company_Basic_information_l">可接受应届生</span>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['Info']->value['welfare_info']) {?>
							<div class="Company_Basic_information_r mt20"> 
								<?php  $_smarty_tpl->tpl_vars['wlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wlist']->key => $_smarty_tpl->tpl_vars['wlist']->value) {
$_smarty_tpl->tpl_vars['wlist']->_loop = true;
?> 
									<span class="yun_com_fl_dy yun_com_fl_dy_cor"><?php echo $_smarty_tpl->tpl_vars['wlist']->value;?>
</span>
								<?php } ?> 
							</div>
						<?php }?> 
					</div>
				<div>
				<div class="stamp_exceed"> 
					<?php if ($_smarty_tpl->tpl_vars['stop']->value=='1') {?> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/stamp.png" title="已下架"> <?php }?> 
				</div>
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['stop']->value!='1') {?>
				<div class="Company_post_td"> 
					<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
						<?php if ($_smarty_tpl->tpl_vars['userid_job']->value) {?> 
							<a class="Company_post_td_ysq" rel="nofollow">已申请</a>
						<?php } else { ?> 
							<a  href="javascript:;" class="Company_post_td_bth sq_job" rel="nofollow">申请职位</a> 
						<?php }?> 
					<?php } else { ?> 
						<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> 
							<a onclick="notuser();" href="javascript:;" class="Company_post_td_bth" rel="nofollow">申请职位</a> 
						<?php } else { ?> 
							<a onclick="applyjobuid();" href="javascript:;" class="Company_post_td_bth" rel="nofollow">申请职位</a> 
						<?php }?> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_haibao_isopen']==1) {?>
					<div class="com_mok"> 
						<a href="javascript:void(0);" onmousemove="$('#whb').show();" onmouseout="$('#whb').hide();" class="com_job_cz_wxhb " rel="nofollow">微信招聘海报</a>
						<div class="job_hb_box none "  id="whb">
							<div class="job_hb_box_left">
								<div class="job_hb_box_leftewm"> <img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'company','toa'=>'whb','toid'=>$_smarty_tpl->tpl_vars['Info']->value['uid']),$_smarty_tpl);?>
" width="150" height="150" /></div>
								<div class="job_hb_box_leftewm_p"> ↑微信扫上方二维码↑</div>
							</div>
							<div class="job_hb_box_right">
								<div class="job_hb_box_list"> 
									<span class="job_hb_box_list_s">1</span> 微信扫描二维码<br>选择要生成的海报风格 
								</div>
								<div class="job_hb_box_list"> 
									<span class="job_hb_box_list_s">2</span> 长按图片保存到相册-分享到朋友圈<br>转发给朋友/群/员工内推打印张贴 
								</div>
								<div class="job_hb_box_list"> 
									<span class="job_hb_box_list_s">3</span> 求职者只需扫海报二维码<br>即可应聘 
								</div>
							</div>
						</div>
					</div>
					<?php }?>
					<div class="com_mok"> 
						<a href="javascript:void(0);" onmousemove="$('#getwapurl').show();" onmouseout="$('#getwapurl').hide();" class="com_job_cz_wx" rel="nofollow">分享到微信</a>
						<div class="comapply_sq_r_cy none" id="getwapurl">
							<div class="comapply_sq_r_cont"> 
								<div class="comapply_sq_r_tipa"> 微信扫一扫：分享</div>
								<img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'job','toa'=>'share','toid'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
" width="130" height="130" />
								<div class="comapply_sq_r_tipsm"> ↑微信扫上方二维码↑<br>便可将本文分享至朋友圈</div>
							</div>
						</div>
					</div>

					<div class="comapply_n_data">
						<div class="comapply_n_data_r">
							<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='1') {?> 
								<a href="javascript:void(0)" class="Company_post_sub_a Company_post_sub_a_jb" onclick="report_com();" rel="nofollow">举报</a>
							<?php } elseif ($_smarty_tpl->tpl_vars['uid']->value) {?>
								<a href="javascript:void(0)" class="Company_post_sub_a Company_post_sub_a_jb" rel="nofollow" onclick="notuser();">举报</a> 
							<?php } else { ?> 
								<a href="javascript:void(0)" class="Company_post_sub_a Company_post_sub_a_jb" onclick="showlogin('1');" rel="nofollow">举报</a> 
							<?php }?> 
              
							<?php if ($_smarty_tpl->tpl_vars['sy_recommend_day_num']->value) {?> 
								<a href="javascript:void(0);" onclick="recommendToMuch('<?php echo $_smarty_tpl->tpl_vars['sy_recommend_day_num']->value;?>
');" class="Company_post_sub_a Company_post_sub_a_tj" rel="nofollow">推荐</a> 
							<?php } else { ?> 
								<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
									<a href="javascript:void(0);" onclick="recommendInterval('<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
','<?php echo smarty_function_url(array('m'=>'job','c'=>'recommend','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['recommendInterval']->value;?>
');" class="Company_post_sub_a Company_post_sub_a_tj" rel="nofollow">推荐</a> 
								<?php } else { ?> 
									<a href="javascript:void(0);" onclick="showlogin('1');" class="Company_post_sub_a Company_post_sub_a_tj" rel="nofollow">推荐</a> 
								<?php }?>
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?> 
								<?php if ($_smarty_tpl->tpl_vars['favjob']->value) {?> 
									<a href="javascript:void(0);" class="Company_post_sub_a Company_post_sub_a_ysc" rel="nofollow">已收藏</a> 
								<?php } else { ?> 
									<a href="javascript:void(0);" onclick="fav_job('<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
','2');" id="favjobid<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" class="Company_post_sub_a Company_post_sub_a_sc" rel="nofollow">收藏</a> 
								<?php }?> 
							<?php } else { ?> 
								<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> 
									<a href="javascript:void(0);" onclick="notuser();" class="Company_post_sub_a Company_post_sub_a_sc" rel="nofollow">收藏</a> 
								<?php } else { ?> 
									<a href="javascript:void(0);" onclick="showlogin('1');" class="Company_post_sub_a Company_post_sub_a_sc" rel="nofollow">收藏</a> 
								<?php }?> 
							<?php }?>
						</div>
					</div>
				</div>
			<?php }?>
		</div> 
		<div class="Company_post_top_tip"><span class="Company_post_top_tip_s">提示：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_shenming'];?>
 </span></div>
	</div>

    <?php if (!empty($_smarty_tpl->tpl_vars['reward']->value)) {?> 
     <div class="job_reward fl mt20">
      <div class="job_reward_box">
        <div class="job_reward_box_icon">自己或推荐好友 <font color="#f00">赏金投递</font> 均可赚赏金！</div>
        <div class="job_reward_box_sj"><span class="job_reward_r_p_s">总赏金：<span class="job_reward_r_s_n">￥<?php echo $_smarty_tpl->tpl_vars['reward']->value['money'];?>
</span></span> <span class="job_reward_r_p_s">投递：￥<?php echo $_smarty_tpl->tpl_vars['reward']->value['sqmoney'];?>
</span> <span class="job_reward_r_p_s"> 面试：￥<?php echo $_smarty_tpl->tpl_vars['reward']->value['invitemoney'];?>
</span> 入职：￥<?php echo $_smarty_tpl->tpl_vars['reward']->value['offermoney'];?>
</div>
        <a id="sq_rewardjob" href="javascript:;" class="Company_post_td_sjbth" rel="nofollow">赏金投递</a></div>
    </div>
    
     <?php }?>
    <div class="comappiy_left_sidebar  mt20 fl"> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?>
      <div class="jobhr_chat"> <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?> <a href="javascript:void(0);" onclick="jobChat('<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
',<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_chat_type'];?>
,'<?php echo $_smarty_tpl->tpl_vars['userid_job']->value['id'];?>
','com','<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
')">主管直聊</a> <?php } else { ?> <a href="javascript:void(0);" onclick="layer.msg('求职者才能和主管直聊',2,8)">主管直聊</a> <?php }?> <?php } else { ?> <a href="javascript:void(0);" onclick="showlogin('1')">主管直聊</a> <?php }?> </div>
      <?php }?>
      <div class="Company_left_cont">
        <div class="job_show_tit"><span class="job_show_tit_s"><i class="job_show_tit_line"></i>职位发布者</span></div>
       <div class="Company_left_cont_pd">
        <div class="jobshow_telman"><?php echo $_smarty_tpl->tpl_vars['Info']->value['linkman'];?>
</div>
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['is_link']=='1') {?>
			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_login_link']=='1') {?>
			<div class="jobshow_add">
			  <div class="Company_Basic_information_r"> <?php if ($_smarty_tpl->tpl_vars['Info']->value['linktel']) {?><span class="Company_Basic_information_tel"><?php echo $_smarty_tpl->tpl_vars['Info']->value['linktel'];?>
</span><?php }?> <a href="javascript:void(0)" onclick="showtel('<?php echo $_GET['id'];?>
');" class="Company_Basic_information_hm">显示号码</a> </div>
			</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['com_login_link']!='2') {?>
			<div class="jobshow_add">
			  <div class="Company_Basic_information_r"> <?php if ($_smarty_tpl->tpl_vars['Info']->value['linktel']) {?><span class="Company_Basic_information_tel"><?php echo $_smarty_tpl->tpl_vars['Info']->value['linktel'];?>
</span><?php }?> 
				
				<?php if ($_smarty_tpl->tpl_vars['Info']->value['linktel']) {?>
				
				<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='1') {?>
				<?php if ($_smarty_tpl->tpl_vars['config']->value['com_login_link']=='3') {?> <a href="javascript:void(0)" onclick="showtel('<?php echo $_GET['id'];?>
');" class="Company_Basic_information_hm">显示号码</a> <?php } elseif ($_smarty_tpl->tpl_vars['config']->value['com_login_link']=='4') {?>
				<?php if ($_smarty_tpl->tpl_vars['resumenum']->value) {?> <a href="javascript:void(0)" onclick="showtel('<?php echo $_GET['id'];?>
');" class="Company_Basic_information_hm">显示号码</a> <?php } else { ?> <span style="padding:0px 10px;">添加简历后查看联系方式</span> <a  href="<?php echo smarty_function_url(array('m'=>'member','c'=>'expect'),$_smarty_tpl);?>
"  class="Company_Basic_information_hm" rel="nofollow">发布简历</a> <?php }?>
				<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['com_login_link']=='5') {?>
				<?php if ($_smarty_tpl->tpl_vars['useridjobnum']->value) {?> <a href="javascript:void(0)" onclick="showtel('<?php echo $_GET['id'];?>
');" class="Company_Basic_information_hm">显示号码</a> <?php } else { ?> <span style="padding:0px 10px;">点击申请职位查看联系方式</span> <a  href="javascript:;" class="Company_Basic_information_hm sq_job" rel="nofollow">申请职位</a> <?php }?>
				<?php }?>
				<?php } elseif ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['Info']->value['uid']) {?> <a href="javascript:void(0)" onclick="showtel('<?php echo $_GET['id'];?>
');" class="Company_Basic_information_hm">显示号码</a> <?php } else { ?> 
				<?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> <a href="javascript:void(0);" onclick="layer.msg('只有个人用户才能查看', 2, 8)" class="Company_Basic_information_hm">显示号码</a> <?php } else { ?> <a href="javascript:void(0);" onclick="showlogin('1');" class="Company_Basic_information_hm">显示号码</a> <?php }?> 
				<?php }?> 
				<?php }?>  <span class="Company_Basic_information_sm">(联系时请说明是在<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
上看到的)</span> </div>
			 </div>
			<?php } else { ?>
			<div class="Company_Basic_notel">网站暂未开启查看联系方式，可直接申请职位,详情请咨询：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
			<?php }?>
        <?php } else { ?>
              <div class="Company_Basic_notel">企业暂未开启查看联系方式，请直接申请职位</div>
        <?php }?> 
        
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['address']) {?>
        <div class="jobshow_add">
          <div class="Company_Basic_information_r"><?php echo $_smarty_tpl->tpl_vars['Info']->value['address'];?>
 <?php if ($_smarty_tpl->tpl_vars['Info']->value['y']!=''&&$_smarty_tpl->tpl_vars['Info']->value['x']!='') {?> <a href="javascript:showmap('map_show');" class="Company_Basic_information_map" rel="nofollow">查看上班路线</a>
            <div class="frc_map"> </div>
            <?php }?></div>
        </div>
        <?php }?> 
          </div>
      </div>
    </div>
    <div class="comappiy_left_sidebar  mt20 fl">
      <div class="Company_left_cont">
       <div class="job_show_tit"><span class="job_show_tit_s"><i class="job_show_tit_line"></i>职位描述</span></div>
        <div class="Company_left_cont_pd">
        <div class="Company_Basic_information">
          <div class="Company_Basic_information_list"> <i class="Company_Basic_information_icon Company_Basic_information_icon_b"></i>
            <div class="Company_Basic_information_r"> <?php if ($_smarty_tpl->tpl_vars['Info']->value['job_report']) {?><span class="Company_Basic_information_l"><?php echo $_smarty_tpl->tpl_vars['Info']->value['job_report'];?>
到岗</span> <?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['job_age']) {?><i class="Company_Basic_information_line">|</i><span class="Company_Basic_information_l">年龄<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_age'];?>
</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['sex']) {?><i class="Company_Basic_information_line">|</i><span class="Company_Basic_information_l">性别<?php echo $_smarty_tpl->tpl_vars['Info']->value['sex'];?>
</span> <?php }?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['job_marriage']) {?><i class="Company_Basic_information_line">|</i><span class="Company_Basic_information_l">婚况<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_marriage'];?>
</span><?php }?> </div>
          </div>
          <div class="Company_Basic_information_list"><i class="Company_Basic_information_icon Company_Basic_information_icon_c"></i>
            <div class="Company_Basic_information_r"> <?php if ($_smarty_tpl->tpl_vars['Info']->value['job_number']) {?><span class="Company_Basic_information_l">招聘<?php echo $_smarty_tpl->tpl_vars['Info']->value['job_number'];?>
</span> <?php }?> </div>
          </div>
          <div class="clear"></div>
          <?php if ($_smarty_tpl->tpl_vars['Info']->value['lang_info']) {?>
          <div class="Company_Basic_information_list"> <i class="Company_Basic_information_icon Company_Basic_information_icon_e"></i>
            <div class="Company_Basic_information_r">
              <div class="Company_Basic_information_r_y"> <?php  $_smarty_tpl->tpl_vars['langlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langlist']->key => $_smarty_tpl->tpl_vars['langlist']->value) {
$_smarty_tpl->tpl_vars['langlist']->_loop = true;
?> <span class="yun_com_fl_dy "><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['langlist']->value];?>
</span> <?php } ?> </div>
            </div>
          </div>
          <?php }?>
           </div>
   
      <div class="clear"></div>
      <div class="Company_content fl Company_toggle" id="Company_job_info">
        <div class="Job_Description"> <?php echo $_smarty_tpl->tpl_vars['Info']->value['description'];?>
 </div>
      </div>
      <div class="clear"></div>
      <div class="job_hare"> <span class="job_hare_fl">分享到：</span> <span> 
        
         
        <div class="pyshare bdsharebuttonbox bdshare-button-style0-16" data-tag="share_1"> <a class="li s1 bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a> <a class="li s2 bds_renren" data-cmd="renren" title="分享到人人网"></a> <a class="li s3 bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a> <a class="li s4 bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a> <a class="li s5 bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a> <a class="li s6 bds_weixin" data-cmd="weixin" title="分享到微信"></a>
          <div class="clear"></div>
        </div>
        
         
        </span> </div>
      <div class="clear"></div>
      <div class="Company_post_zt">
        <div class="Company_post_zt_wx"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="90" height="90"></div>
        <div class="Company_post_zt_wx_P"><div class="Company_post_zt_wx_h">微信扫一扫</div>关注微信，轻松跟踪应聘进展</div>
        <div class="Company_post_zt_wx_login"> <?php if ($_smarty_tpl->tpl_vars['usertype']->value==''&&$_smarty_tpl->tpl_vars['uid']->value=='') {?> 您目前还没有登录 <a href="javascript:;" onclick="showlogin('1');" class="Company_post_zt_wx_login_a">立即登录</a> <?php }?> </div>
      </div>
      <div class="clear"></div>
      </div>
     <?php if ($_smarty_tpl->tpl_vars['company_msg']->value) {?>
      <div class="job_show_tit"><span class="job_show_tit_s"><i class="job_show_tit_line"></i>面试评价</span></div>
         <div class="Company_left_cont_pd"><div class="evaluate"> 
        
         <?php  $_smarty_tpl->tpl_vars['mlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mlist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("limit"=>"2","id"=>"\'@Info.uid\'","jobid"=>"\'@Info.id\'","item"=>"\'mlist\'","nocache"=>"")
;');$List=array();
		
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
		$where = "`status`='1'";
		global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		if($paramer['id']){
			$where.=" and `cuid`='".$paramer['id']."'";
		}
		if($paramer['jobid']){
			$where.=" and `jobid`='".$paramer['jobid']."'";
		}
		
		
		if($paramer['limit']){
			$limit=" LIMIT ".$paramer['limit'];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"company_msg",$where,$Purl,'','0',$_smarty_tpl);
		}
		if($paramer[order]){
			$where.="  ORDER BY `".$paramer['order']."`";
		}else{
			$where.="  ORDER BY `id`";
		}
		if($paramer['sort']){
			$where.=" ".$paramer['sort'];
		}else{
			$where.=" DESC";
		}

		$mlist=$db->select_all("company_msg",$where.$limit);
		
		if(is_array($mlist)){
			include  PLUS_PATH."/com.cache.php";
			foreach($mlist as $key=>$value){
				
				$UIDList[]=$value['uid'];
				$Jobid[] = $value['jobid'];
			
			}
			$userlist=$db->select_all("resume","`uid` IN (".@implode(',',$UIDList).")","`uid`,`name`,`photo`,`sex`");

			$jobList=$db->select_all("company_job","`id` IN (".@implode(',',$Jobid).")","`id`,`name`");
			
			if(is_array($userlist)){
				foreach($userlist as $v){
							
					$msgUser[$v['uid']]= $v['name'];
					$msgPhoto[$v['uid']]= $v['photo'];
					$msgSex[$v['uid']]= $v['sex'];
				}
			}
			
			if(is_array($jobList)){
				foreach($jobList as $vv){
							
					$msgJob[$vv['id']]= $vv['name'];
						
				}
				$_smarty_tpl->tpl_vars['msgjob']=new Smarty_Variable;
				$_smarty_tpl->tpl_vars['msgjob']->value = $jobList;
			}
			
            foreach($mlist as $k=>$v){
				if($v['isnm']=='1'){
					$mlist[$k]['name']= '匿名';
					$mlist[$k]['photo']= $config['sy_weburl']."/".$config['sy_member_icon'];
				}else{
					if($msgPhoto[$v['uid']] &&file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$msgPhoto[$v['uid']]))){
						$mlist[$k]['photo']= ".".$msgPhoto[$v['uid']];
					}else{
 						if($msgSex[$v['uid']]==1){
							$mlist[$k]['photo']= $config['sy_weburl']."/".$config['sy_member_icon'];
						}else{
							$mlist[$k]['photo']= $config['sy_weburl']."/".$config['sy_member_iconv'];
						}
						
					}
					$mlist[$k]['name']= $msgUser[$v['uid']];
				}
				$mlist[$k]['comscore']= sprintf("%.1f", $v[comscore]);
				$mlist[$k]['hrscore']= sprintf("%.1f", $v[hrscore]);
				$mlist[$k]['desscore']= sprintf("%.1f", $v[desscore]);
			
				$mlist[$k]['scorepf']= round( $v[score]/5 * 100,2);
				$mlist[$k]['comscorepf']= round( $v[comscore]/5 * 100,2);
				$mlist[$k]['hrscorepf']= round( $v[hrscore]/5 * 100,2);
				$mlist[$k]['desscorepf']= round( $v[desscore]/5 * 100,2);
				if($v[tag]){
					$tags = explode(',',$v[tag]);
					$newtags = array();
					foreach($tags as $tv){
						$newtags[] = $comclass_name[$tv];
					}
					
					$mlist[$k]['tags']= $newtags;
				}
				$mlist[$k]['jobname']= $msgJob[$v['jobid']];
            }
		}
		$mlist = $mlist; if (!is_array($mlist) && !is_object($mlist)) { settype($mlist, 'array');}
foreach ($mlist as $_smarty_tpl->tpl_vars['mlist']->key => $_smarty_tpl->tpl_vars['mlist']->value) {
$_smarty_tpl->tpl_vars['mlist']->_loop = true;
?>
        <div class="evaluate_userlist">
          <div class="evaluate_username">
            <div class="evaluate_userphoto"><img src="<?php echo $_smarty_tpl->tpl_vars['mlist']->value['photo'];?>
" width="80" height="80"></div>
            <div class="evaluate_username_u"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['name'];?>
</div>
          </div>
          <div class="evaluate_user_pf">
            <div class="evaluate_ms_box">
              <div class="evaluate_pf_userzh">
                <div class="evaluate_pf_userzh_list">
                  <div class="evaluate_pf_userzh_l">企业环境：</div>
                  <div class="evaluate_pf_other_start"><i class="evaluate_pf_other_start_p" style="width:<?php echo $_smarty_tpl->tpl_vars['mlist']->value['comscorepf'];?>
%"></i></div>
                  <div class="evaluate_pf_other_fs"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['comscore'];?>
</div>
                </div>
                <div class="evaluate_pf_userzh_list">
                  <div class="evaluate_pf_userzh_l">面试官：</div>
                  <div class="evaluate_pf_other_start"><i class="evaluate_pf_other_start_p" style="width:<?php echo $_smarty_tpl->tpl_vars['mlist']->value['hrscorepf'];?>
%"></i></div>
                  <div class="evaluate_pf_other_fs"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['hrscore'];?>
</div>
                </div>
                <div class="evaluate_pf_userzh_list">
                  <div class="evaluate_pf_userzh_l">描述相符：</div>
                  <div class="evaluate_pf_other_start"><i class="evaluate_pf_other_start_p" style="width:<?php echo $_smarty_tpl->tpl_vars['mlist']->value['desscorepf'];?>
%"></i></div>
                  <div class="evaluate_pf_other_fs"><?php echo $_smarty_tpl->tpl_vars['mlist']->value['desscore'];?>
</div>
                </div>
                <div class="evaluate_date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mlist']->value['ctime'],"%Y-%m-%d");?>
</div>
              </div>
              <div class="evaluate_tag"> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mlist']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <span class="evaluate_tag_s"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span> <?php } ?> </div>
              <div class="evaluate_pj_box">
                <div class="evaluate_pj">[面试过程] <?php echo $_smarty_tpl->tpl_vars['mlist']->value['content'];?>
</div>
                <div class="evaluate_pj">[其他评价] <?php echo $_smarty_tpl->tpl_vars['mlist']->value['othercontent'];?>
</div>
              </div>
            </div>
          </div>
        </div>
        <?php }
if (!$_smarty_tpl->tpl_vars['mlist']->_loop) {
?>
        <div class="evaluate_pj_no">该职位尚未收到面试评价! </div>
        <?php } ?> 
         <?php if ($_smarty_tpl->tpl_vars['mlist']->value) {?>
        <div class="evaluate_look_compj"> <a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'msg','id'=>$_smarty_tpl->tpl_vars['Info']->value['uid']),$_smarty_tpl);?>
">查看公司全部评价>></a> </div>
        <?php }?> </div>
    </div>
	 <?php }?>
    </div>      </div>
    <div class="comappiy_left_sidebar mt20 fl">
     <div class="job_show_tit"><span class="job_show_tit_s"><i class="job_show_tit_line"></i>公司简介</span></div>
        <div class="Company_left_cont_pd">
      <div class="Company_content fl">
        <div class="Company_Profile" style="padding-bottom:0px;"> <?php if ($_smarty_tpl->tpl_vars['Info']->value['content']) {?>
          <div style="width:100%;height:auto; overflow:hidden" id="job_content"> <?php echo $_smarty_tpl->tpl_vars['Info']->value['content'];?>
 </div>
          <div class="company_show_more none"> <a href="javascript:;" onclick="showcc()">查看更多</a> </div>
          <?php } else { ?>
          
          <div class="evaluate_pj_no">该职位尚未填写公司简介! </div>
          <?php }?> </div>
        <div class="clear"></div>
      </div>  </div>
    </div>
    <div class="comappiy_left_sidebar mt20">
     <div class="job_show_tit"><span class="job_show_tit_s"><i class="job_show_tit_line"></i>该公司的其TA职位</span></div>
       <div class="Company_left_cont_pd">
      <ul class="comappiy_left_c_list">
        <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("uid"=>"\'@Info.uid\'","noid"=>"\'@Info.id\'","namelen"=>"9","limit"=>"10","item"=>"\'job\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		if(isUseSphinx()){
			include_once(LIB_PATH."sphinx.class.php");
			
			$where = array();

			$where[] = array("setFilterRange", "edate", $time, 9999999999);
			$where[] = array("setFilter", "state", array(1));
			if($paramer[sdate]){
				$where[] = array("setFilterRange", "sdate", strtotime("-".intval($paramer[sdate])." day",time()), 9999999999);
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where[] = array("setFilter", "uid", array($paramer[uid]));
			}

			//是否推荐职位
			if($paramer[rec]){
				$where[] = array("setFilterRange", "rec_time", $time, 9999999999);
			}

			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $job_uid);
			}

			//取不包含当前id的职位
			if($paramer[noid]){
				$where[] = array("setFilter", "id", array($paramer[noid]), true);
			}

			//是否被锁定
			if($paramer[r_status]){
				$where[] = array("setFilter", "r_status", array(2));
			}else{
				$where[] = array("setFilter", "r_status", array(1));
			}

			//是否下架职位
			if($paramer[status]){
				$where[] = array("setFilter", "status", array(1));
			}else{
				$where[] = array("setFilter", "status", array(0));
			}

			//公司体制
			if($paramer[pr]){
				$where[] = array("setFilter", "pr", array($paramer[pr]));
			}

			//公司行业分类
			if($paramer['hy']){
				$where[] = array("setFilter", "hy", array($paramer[hy]));
			}

			//职位大类
			if($paramer[job1]){
				$where[] = array("setFilter", "job1", array($paramer[job1]));
			}
			//职位子类
			if($paramer[job1_son]){
				$where[] = array("setFilter", "job1_son", array($paramer[job1_son]));
			}
			//职位三级分类
			if($paramer[job_post]){
				$job_post = explode(",", $paramer[job_post]);
				$where[] = array("setFilter", "job_post", $job_post);
			}

			//您可能感兴趣的职位--个人会员中心
			// if($paramer['jobwhere']){
			// 	$where[] = array("setFilter", "jobwhere", array($paramer[jobwhere]));
			// }

			//职位分类综合查询
			$queryStr = array();
			if($paramer['jobids']){
				$queryStr [] = "(@job1 = $paramer[jobids] | @job1_son = $paramer[jobids] | @job_post = $paramer[jobids] )";
			}

			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$queryStr [] = "(@job1 in ($paramer[jobin]) | @job1_son in ($paramer[jobin]) | @job_post in ($paramer[jobin]) )";
			}

			//城市大类
			if($paramer[provinceid]){
				$where[] = array("setFilter", "provinceid", array($paramer[provinceid]));
			}
			//城市子类
			if($paramer['cityid']){
				$cityid = explode(",", $paramer[cityid]);
				$where[] = array("setFilter", "cityid", $cityid);
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$three_cityid = explode(",", $paramer[three_cityid]);
				$where[] = array("setFilter", "three_cityid", $three_cityid);
			}
			
			//学历
			if($paramer[edu]){
				$where[] = array("setFilter", "edu", array($paramer[edu]));
			}
			//工作经验
			if($paramer[exp]){
				$where[] = array("setFilter", "exp", array($paramer[exp]));
			}
			//到岗时间
			if($paramer[report]){
				$where[] = array("setFilter", "report", array($paramer[report]));
			}
			//职位性质
			if($paramer[type]){
				$where[] = array("setFilter", "type", array($paramer[type]));
			}
			//性别
			if($paramer[sex]){
				$where[] = array("setFilter", "sex", array($paramer[sex]));
			}
			//应届生
			if($paramer[is_graduate]){
				$where[] = array("setFilter", "is_graduate", array($paramer[is_graduate]));
			}
			//公司规模
			if($paramer[mun]){
				$where[] = array("setFilter", "mun", array($paramer[mun]));
			}

			if($paramer[minsalary]){
				$where[] = array("setFilterRange", "maxsalary", intval($paramer[minsalary]), 99999999);
				
			}
			if($paramer[maxsalary]){
				$where[] = array("setFilterRange", "minsalary", 0, intval($paramer[maxsalary]));
			}

            //福利待遇
            $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $welfareid);
			}

			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$queryStr [] = "(@provinceid in ($paramer[cityin]) | @cityid in ($paramer[cityin]) | @three_cityid in ($paramer[cityin]) )";
			}

			//紧急招聘urgent
			if($paramer[urgent]){
				$where[] = array("setFilterRange", "urgent_time", $time, 9999999999);
			}

			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			    $where[] = array("setFilterRange", "lastupdate", $beginToday, 9999999999);
        		}else{
        			$time=time();
    				$uptime = $time-($paramer[uptime]*86400);
    				$where[] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
        		}
			}

			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$queryStr [] = "(@com_name ($paramer[comname]) )";
			}

			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where[] = array("setFilter", "com_provinceid", array($paramer[com_pro]));
			}

			//按照关键字匹配职位名称、企业名称等
			if($paramer[keyword]){
				include  PLUS_PATH."/city.cache.php";
				$cityid = array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(count($cityid) > 0){
					$cityid = implode(",", $cityid);
					$queryStr [] = "(@provinceid in ($cityid) | @cityid in ($cityid) | @three_cityid in ($cityid) )";
				}

				$where["keywords"] = $paramer[keyword];
			}

			//多选职位
			if($paramer["job"]){
				$paraJob = explode(",", $paramer[job]);
				$where[] = array("setFilter", "job_post", $paraJob);
			}

			//竞价招聘
			if($paramer[bid]){
				$where[] = array("setFilterRange", "xsdate", $time, 9999999999);
			}

			if(count($queryStr) > 0){
				$where["queryStr"] = $queryStr;
			}
			
			$sphinx = new sphinx();
			$sphinx->setFieldWeights(array("name"=>2,"com_name"=>1));

			//排序字段默认为更新时间
			$orderField = "lastupdate";
			if($paramer[order] && $paramer[order]!="lastdate"){
				$orderField = str_replace("'","",$paramer[order]);
			}

			//排序规则 默认为倒序
			$orderType = "DESC";
			if(strtoupper(trim($paramer[sort])) == "ASC"){
				$orderType = "ASC";
			}

			$sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

			if($paramer[ispage]){
				$limitArr = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
				$ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company_job");
			}
			else if($paramer[limit]){
				$ids = $sphinx->getIds($where, 0, $paramer[limit], "company_job");
			}
			else{
				$ids = $sphinx->getIds($where, 0, 20, "company_job");
			}
						
			if(count(ids) > 0){
				$ids = implode(",", $ids);
				$where = "id in ($ids) order by field(id, $ids) ";
			}
			else{
				$where = "0";
			}
			
			$limit = "";
		}//end if($config["useSphinx"])
		else{
			if($paramer[sdate]){
				$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
			}else{
				$where = "`state`=1";
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where .= " AND `uid` = '$paramer[uid]'";
			}
			//是否推荐职位
			if($paramer[rec]){
				
				$where.=" AND `rec_time`>=".time();
				
			}
			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$job_uid).")";
			}
			//取不包含当前id的职位
			if($paramer[noid]){
				$where.= " and `id`<>$paramer[noid]";
			}
			//是否被锁定
			if($paramer[r_status]){
				$where.= " and `r_status`=2";
			}else{
				$where.= " and `r_status`=1";
			}
			//是否下架职位
			if($paramer[status]){
				$where.= " and `status`='1'";
			}else{
				$where.= " and `status`='0'";
			}
			//公司体制
			if($paramer[pr]){
				$where .= " AND `pr` =$paramer[pr]";
			}
			//公司行业分类
			if($paramer['hy']){
				$where .= " AND `hy` = $paramer[hy]";
			} 
			//职位大类
			if($paramer[job1]){
				$where .= " AND `job1` = $paramer[job1]";
			}
			//职位子类
			if($paramer[job1_son]){
				$where .= " AND `job1_son` = $paramer[job1_son]";
			}
			//职位三级分类
			if($paramer[job_post]){
				$where .= " AND (`job_post` IN ($paramer[job_post]))";
			}
			//您可能感兴趣的职位--个人会员中心
			if($paramer['jobwhere']){
				$where .=" and ".$paramer['jobwhere'];
			}
			//职位分类综合查询
			if($paramer['jobids']){
				$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
			}
			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
			}
			//城市大类
			if($paramer[provinceid]){
				$where .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer['cityid']){
				$where .= " AND (`cityid` IN ($paramer[cityid]))";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
			}
			if($paramer['cityin']){
				$where .= " AND `three_cityid` IN ($paramer[cityin])";
			}
			//学历
			if($paramer[edu]){
				$where .= " AND `edu` = $paramer[edu]";
			}
			//工作经验
			if($paramer[exp]){
				$where .= " AND `exp` = $paramer[exp]";
			}
			//到岗时间
			if($paramer[report]){
				$where .= " AND `report` = $paramer[report]";
			}
			//职位性质
			if($paramer[type]){
				$where .= " AND `type` = $paramer[type]";
			}
			//性别
			if($paramer[sex]){
				$where .= " AND `sex` = $paramer[sex]";
			}
			//应届生
			if($paramer[is_graduate]){
				$where .= " AND `is_graduate` = $paramer[is_graduate]";
			}
			//公司规模
			if($paramer[mun]){
				$where .= " AND `mun` = $paramer[mun]";
			}
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary])."))";
				/*$where.= " and case when minsalary>0 then `minsalary`<= ".intval($paramer[minsalary]). " end and case when maxsalary>0 then `maxsalary`<= ".intval($paramer[maxsalary])." else minsalary<".intval($paramer[maxsalary])." and maxsalary =0 end ";*/
	    	}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`>=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`!=0 and  `maxsalary`=0))";
				/*$where.= " AND `minsalary`>=".intval($paramer[minsalary])." and minsalary>0";*/
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and maxsalary=0) 
							or (`minsalary`=0 and  `maxsalary`!=0)
							)";
				/*$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])." and maxsalary>0";*/
			}
	         //福利待遇
	         $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
			}
			//紧急招聘urgent
			if($paramer[urgent]){
				$where.=" AND `urgent_time`>".time();
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND lastupdate>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND lastupdate>$uptime";
	    		}
			}
			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
			}
			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
			}
			//按照职位名称匹配
			if($paramer[keyword]){
				$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
				$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
				include  PLUS_PATH."/city.cache.php";
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(is_array($cityid)){
					foreach($cityid as $value){
						$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
					}
					$where1[]=@implode(" or ",$class);
				}
				$where.=" AND (".@implode(" or ",$where1).")";
			}
			//多选职位
			if($paramer["job"]){
				$where.=" AND `job_post` in ($paramer[job])";
			}
			//置顶招聘
			if($paramer[bid]){
				if($config[joblist_top]!=1){
					$paramer[limit] = 5;
				}
				$where.="  and `xsdate`>'".time()."'";
			} 
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
			}

			//查询条数
			$limit = '';
			if($paramer[limit]){

				$limit = " limit ".$paramer[limit];
			}

			if($paramer[ispage]){
				$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
			}

			//排序字段默认为更新时间
            //置顶设置为随机5条时，随机查询
            if($paramer[bid] && $paramer[limit]){
                $order = " ORDER BY rand() ";
            }else{
                if($paramer[order] && $paramer[order]!="lastdate"){
    				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
    			}else{
    				$order = " ORDER BY `lastupdate` ";
    			}
            }
			//排序规则 默认为倒序
			if($paramer[sort]){
				$sort = $paramer[sort];
			}else{
				$sort = " DESC";
			} 
			$where.=$order.$sort;
		}
		
		
			
		$job = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($job) && !empty($job)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0 ||!file_exists(str_replace('./',APP_PATH,$value['logo']))){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			    
			//$comrat = $db->select_all("company_rating","`display`='1'");
			if($paramer[bid]){
				$noids=array();
			}	
			foreach($job as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job[$key]);
					continue;
				}else{
					$job[$key] = $db->array_action($value,$cache_array);
					$job[$key][stime] = date("Y-m-d",$value[sdate]);
					$job[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job[$key][logo] =$r_uid[$value['uid']][logo];
					$job[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job[$key]['time'] = date("H:i",$value['lastupdate']);
						$job[$key]['redtime'] =1;
					}else{
						$job[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$job[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$job[$key][ratlogo] = $v[com_pic];
							}else{
								$job[$key][ratlogo] ='';
							}
							$job[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job[$key][name_n]);
						$job[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job[$key][com_n]);
						$job[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($job)){
				if($paramer[keyword]!=""&&!empty($job)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job = $job; if (!is_array($job) && !is_object($job)) { settype($job, 'array');}
foreach ($job as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
        <li>
          <div class="comappiy_left_jobname"> <a href="<?php echo $_smarty_tpl->tpl_vars['job']->value['job_url'];?>
" target="_blank" class=""><?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
</a> </div>
         
          <div class="comappiy_left_sidebar_otherjob_x"> <?php if ($_smarty_tpl->tpl_vars['job']->value['job_salary']) {?><span class="comappiy_left_jobname_xz"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_salary'];?>
</span><?php }?> <?php echo $_smarty_tpl->tpl_vars['job']->value['job_city_one'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['job']->value['job_city_two'];?>
  <?php if ($_smarty_tpl->tpl_vars['job']->value['job_edu']) {?><span class="comappiy_left_sidebar_otherjob_line">|</span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_edu'];?>
学历<?php }?> <?php if ($_smarty_tpl->tpl_vars['job']->value['job_exp']) {?><span class="comappiy_left_sidebar_otherjob_line">|</span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_exp'];?>
经验<?php }?> </div>
          <a class="comappiy_left_sidebar_otherjob_sq" href="<?php echo $_smarty_tpl->tpl_vars['job']->value['job_url'];?>
" target="_blank">查看</a> </li>
        <?php } ?> <?php if (!$_smarty_tpl->tpl_vars['job']->value) {?>
         <div class="evaluate_pj_no">该企业暂无其他职位! </div>
        <?php }?>
      </ul>
      </div>
      </div>
      <div class="maincenters mt20">
        <div id="sortBoxs">
          <div class="search_menuBoxs">
            <ul>
              <li class="search_curs" id="typezb" onmousemove="searchtype('zb');">周边招聘</li>
              <li id="typezp" onmousemove="searchtype('zp');">招聘频道</li>
              <li id="typerm" onmousemove="searchtype('rm');">热门搜索</li>
            </ul>
          </div>
          <div class="contentBoxs"> 
             <div class="contentBox_conts " id="type_zb">
              <div class="Industry_lists"> <?php if ($_smarty_tpl->tpl_vars['Info']->value['three_cityid']) {?> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['Info']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <a href="<?php echo smarty_function_listurl(array('provinceid'=>$_smarty_tpl->tpl_vars['Info']->value['provinceid'],'cityid'=>$_smarty_tpl->tpl_vars['Info']->value['cityid'],'type'=>'three_cityid','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a> <?php } ?> <?php } elseif ($_smarty_tpl->tpl_vars['Info']->value['cityid']) {?> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['Info']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <a href="<?php echo smarty_function_listurl(array('type'=>'cityid','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a> <?php } ?> <?php } else { ?> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <a href="<?php echo smarty_function_listurl(array('type'=>'provinceid','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a> <?php } ?> <?php }?> </div>
            </div>
             <div class="contentBox_conts none" id="type_zp">
              <div class="Industry_lists"> <?php if ($_smarty_tpl->tpl_vars['Info']->value['job_post']) {?> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['Info']->value['job1_son']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <a href="<?php echo smarty_function_listurl(array('job1'=>$_smarty_tpl->tpl_vars['Info']->value['job1'],'job1_son'=>$_smarty_tpl->tpl_vars['Info']->value['job1_son'],'type'=>'job_post','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a> <?php } ?> <?php } elseif ($_smarty_tpl->tpl_vars['Info']->value['job1_son']) {?> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['Info']->value['job1']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <a href="<?php echo smarty_function_listurl(array('job1'=>$_smarty_tpl->tpl_vars['Info']->value['job1'],'type'=>'job1_son','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a> <?php } ?> <?php } else { ?> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <a href="<?php echo smarty_function_listurl(array('type'=>'job1','v'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
招聘</a> <?php } ?> <?php }?> </div>
            </div>
             <div class="contentBox_conts none" id="type_rm">
              <div class="Industry_lists"> <?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"20","recom"=>"1","type"=>"3","item"=>"\'keylist\'","nocache"=>"")
;');$list=array();
        
        $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		
		if($paramer[recom]){
			$tuijian = 1;
		}
		
		if($paramer[type]){
			$type = $paramer[type];
		}
		
		if($paramer[limit]){
			$limit=$paramer[limit];
		}else{
			$limit=5;
		}
		include PLUS_PATH."/keyword.cache.php";
		if($paramer[iswap]){
			$wap = "/wap";
		}else{
			$index =1;
		}
		if(is_array($keyword)){
			if($paramer[iswap]){
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v[tuijian]!=1){
						continue;
					}
					if($type && $v[type]!=$type){
						continue;
					}

					$i++;
					if($v[type]=="1"){
						$v[url] = Url("wap",array("c"=>"once","keyword"=>$v['key_name']));
						$v[type_name]='店铺招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("wap",array("c"=>"tiny","keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v[type]=="3"){
						$v[url] = Url("wap",array("c"=>"job","keyword"=>$v['key_name']));
						$v[type_name]='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("wap",array("c"=>"company","keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("wap",array("c"=>"resume","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}else{
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v['tuijian']!=1){
						continue;
					}
					if($type && $v['type']!=$type){
						continue;
					}
					$i++;
					if($v['type']=="1"){
						$v['url'] = Url("once",array("keyword"=>$v['key_name']));
						$v['type_name']='店铺招聘';
					}elseif($v['type']=="2"){
						$v['url'] = Url("part",array("keyword"=>$v['key_name']));
						$v['type_name']='兼职';
					}elseif($v['type']=="13"){
						$v['url'] = Url("tiny",array("keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v['type']=="3"){
						$v['url'] = Url("job",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("company",array("keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("resume",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}elseif($v['type']=="6"){
						$v['url'] = Url("lietou",array("c"=>"service","keyword"=>$v['key_name']));
						$v['type_name']='猎头';
					}elseif($v['type']=="7"){
						$v['url'] = Url("lietou",array("c"=>"post","keyword"=>$v['key_name']));
						$v['type_name']='猎头职位';
					}else if($v['type']=="9"){
						$v['url'] = Url("train",array("c"=>"subject","keyword"=>$v['key_name']));
						$v['type_name']='培训课程';
					}else if($v['type']=="10"){
						$v['url'] = Url("train",array("c"=>"agency","keyword"=>$v['key_name']));
						$v['type_name']='培训机构';
					}else if($v['type']=="11"){
						$v['url'] = Url("train",array("c"=>"teacher","keyword"=>$v['key_name']));
						$v['type_name']='培训师';
					}else if($v['type']=="12"){
						$v['url'] = Url("ask",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='问答';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}

					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['keylist']->key => $_smarty_tpl->tpl_vars['keylist']->value) {
$_smarty_tpl->tpl_vars['keylist']->_loop = true;
?> <a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> <?php } ?> </div>
            </div>
      
        </div>
      </div>
    </div>
  </div>


	<div class="Compply_right_sidebar">
		<div class="Compply_right_qy">
			<div class="Compply_logo"> 
				<img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['logo'];?>
" width="140" height="140" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" alt="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
" /> 
			</div>
			<div class="Compply_right_name"> 
				<a href="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_url'];?>
" target="_blank" class=""><?php echo mb_substr($_smarty_tpl->tpl_vars['Info']->value['com_name'],0,13,'utf-8');?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['Info']->value['yyzz_status']=='1') {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/disc_icon10.png" title="营业执照已审核" class="png" /> <?php }?> 
			</div>

			<?php if ($_smarty_tpl->tpl_vars['Info']->value['all_name']) {?>
			<div class="Compply_right_name_all"><?php echo $_smarty_tpl->tpl_vars['Info']->value['all_name'];?>
</div>
			<?php }?>

			<div class="clear"></div>

			<div class="Compply_right_js">
				<ul>
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_hy']) {?>
						<li><span class="Compply_right_span_c"><i class="Compply_right_icon Compply_right_icon_hy"></i><?php echo $_smarty_tpl->tpl_vars['Info']->value['job_hy'];?>
</span></li>
					<?php }?> 
					
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_pr']) {?>
						<li><span class="Compply_right_span_c"><i class="Compply_right_icon Compply_right_icon_xz"></i><?php echo $_smarty_tpl->tpl_vars['Info']->value['job_pr'];?>
</span> </li>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['com_city']) {?>
						<li><span class="Compply_right_span_c"><i class="Compply_right_icon Compply_right_icon_city"></i><?php echo $_smarty_tpl->tpl_vars['Info']->value['com_city'];?>
</span></li>
					<?php }?> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['job_mun']) {?>
						<li><span class="Compply_right_span_c"><i class="Compply_right_icon Compply_right_icon_rs"></i><?php echo $_smarty_tpl->tpl_vars['Info']->value['job_mun'];?>
</span></li>
					<?php }?> 
					<?php if ($_smarty_tpl->tpl_vars['Info']->value['money']) {?>
						<li><span class="Compply_right_span_c"><i class="Compply_right_icon Compply_right_icon_zj"></i><?php echo $_smarty_tpl->tpl_vars['Info']->value['money'];?>
万</span></li>
					<?php }?>
				</ul>
			</div>
    </div>
    <div class="job_hr_right">
      <div class="job_hr_list"><span class="job_hr_list_n"><?php echo $_smarty_tpl->tpl_vars['Info']->value['snum'];?>
 <em class="job_hr_list_dw">份</em></span>简历投递</div>
      <div class="job_hr_list"><span class="job_hr_list_n"><?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
 <em class="job_hr_list_dw">%</em></span>平均回复率</div>
      <div class="job_hr_list job_hr_listbig_end"><span class="job_hr_list_n"><?php echo $_smarty_tpl->tpl_vars['Info']->value['operatime'];?>
</span>平均回复时长</div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1&&$_smarty_tpl->tpl_vars['config']->value['com_message']==1) {?>
    <div class="Compply_right_post">
      <div class="job_show_tit"><span style="padding-left:20px;">对职位感兴趣？</span></div>
      <div class="job_hr_ly_box" style="padding-top:20px;">
        <form action="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','a'=>'msg'),$_smarty_tpl);?>
" method="post" target="supportiframe" onsubmit="return com_msg();">
          <div>
            <textarea class="comapply_Leave_fb_text" name="content" id='msg_content' placeholder='请输入您对该职位的疑问。比如所在地、年薪、福利等等，我会及时给您回复！期待与您合作。'></textarea>
            <input type="hidden" name="jobid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" />
            <input type="hidden" name="job_uid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" />
            <input type="hidden" name="com_name" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
" />
            <input type="hidden" name="job_name" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['jobname'];?>
" />
          </div>
          <div class="affirm affirm_yz">
            <input class="zx_yx_input fl" id="msg_CheckCode" type="text" placeholder="请输入验证码" value="" maxlength="4" name="authcode" onfocus="checkCode('vcode_imgs')"/>
            <img class="zx_yx_input_img fl" id="vcode_imgs" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" onclick="checkCode('vcode_imgs');" /> <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?>
            <input type="submit" value="提交咨询" name="submit" class="comapply_Leave_fb_sub " />
            <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
            <input type="button" value="提交咨询" onclick="layer.msg('只有个人用户才能咨询', 2, 8)" class="comapply_Leave_fb_sub" />
            <?php } else { ?>
            <input type="button" value="提交咨询" onclick="showlogin('1');" class="comapply_Leave_fb_sub " />
            <?php }?> <?php }?> </div>
          <div class="comapply_Leave_fb_s"> <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1) {?> <a class="comapply_lea_a" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=commsg" target="_blank"> 查看我的咨询>> </a> <?php }?> </div>
        </form>
      </div>
    </div>
    <?php }?>
    <div class="Compply_right_post">
       <div class="job_show_tit"><span class="job_show_tit_s"><i class="job_show_tit_line"></i>相似职位</span></div>
      <?php  $_smarty_tpl->tpl_vars['job_jia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_jia']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("limit"=>"4","rec"=>"1","noid"=>"\'@Info.id\'","jobids"=>"\'@Info.job1\'","namelen"=>"6","item"=>"\'job_jia\'","key"=>"\'key\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		if(isUseSphinx()){
			include_once(LIB_PATH."sphinx.class.php");
			
			$where = array();

			$where[] = array("setFilterRange", "edate", $time, 9999999999);
			$where[] = array("setFilter", "state", array(1));
			if($paramer[sdate]){
				$where[] = array("setFilterRange", "sdate", strtotime("-".intval($paramer[sdate])." day",time()), 9999999999);
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where[] = array("setFilter", "uid", array($paramer[uid]));
			}

			//是否推荐职位
			if($paramer[rec]){
				$where[] = array("setFilterRange", "rec_time", $time, 9999999999);
			}

			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $job_uid);
			}

			//取不包含当前id的职位
			if($paramer[noid]){
				$where[] = array("setFilter", "id", array($paramer[noid]), true);
			}

			//是否被锁定
			if($paramer[r_status]){
				$where[] = array("setFilter", "r_status", array(2));
			}else{
				$where[] = array("setFilter", "r_status", array(1));
			}

			//是否下架职位
			if($paramer[status]){
				$where[] = array("setFilter", "status", array(1));
			}else{
				$where[] = array("setFilter", "status", array(0));
			}

			//公司体制
			if($paramer[pr]){
				$where[] = array("setFilter", "pr", array($paramer[pr]));
			}

			//公司行业分类
			if($paramer['hy']){
				$where[] = array("setFilter", "hy", array($paramer[hy]));
			}

			//职位大类
			if($paramer[job1]){
				$where[] = array("setFilter", "job1", array($paramer[job1]));
			}
			//职位子类
			if($paramer[job1_son]){
				$where[] = array("setFilter", "job1_son", array($paramer[job1_son]));
			}
			//职位三级分类
			if($paramer[job_post]){
				$job_post = explode(",", $paramer[job_post]);
				$where[] = array("setFilter", "job_post", $job_post);
			}

			//您可能感兴趣的职位--个人会员中心
			// if($paramer['jobwhere']){
			// 	$where[] = array("setFilter", "jobwhere", array($paramer[jobwhere]));
			// }

			//职位分类综合查询
			$queryStr = array();
			if($paramer['jobids']){
				$queryStr [] = "(@job1 = $paramer[jobids] | @job1_son = $paramer[jobids] | @job_post = $paramer[jobids] )";
			}

			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$queryStr [] = "(@job1 in ($paramer[jobin]) | @job1_son in ($paramer[jobin]) | @job_post in ($paramer[jobin]) )";
			}

			//城市大类
			if($paramer[provinceid]){
				$where[] = array("setFilter", "provinceid", array($paramer[provinceid]));
			}
			//城市子类
			if($paramer['cityid']){
				$cityid = explode(",", $paramer[cityid]);
				$where[] = array("setFilter", "cityid", $cityid);
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$three_cityid = explode(",", $paramer[three_cityid]);
				$where[] = array("setFilter", "three_cityid", $three_cityid);
			}
			
			//学历
			if($paramer[edu]){
				$where[] = array("setFilter", "edu", array($paramer[edu]));
			}
			//工作经验
			if($paramer[exp]){
				$where[] = array("setFilter", "exp", array($paramer[exp]));
			}
			//到岗时间
			if($paramer[report]){
				$where[] = array("setFilter", "report", array($paramer[report]));
			}
			//职位性质
			if($paramer[type]){
				$where[] = array("setFilter", "type", array($paramer[type]));
			}
			//性别
			if($paramer[sex]){
				$where[] = array("setFilter", "sex", array($paramer[sex]));
			}
			//应届生
			if($paramer[is_graduate]){
				$where[] = array("setFilter", "is_graduate", array($paramer[is_graduate]));
			}
			//公司规模
			if($paramer[mun]){
				$where[] = array("setFilter", "mun", array($paramer[mun]));
			}

			if($paramer[minsalary]){
				$where[] = array("setFilterRange", "maxsalary", intval($paramer[minsalary]), 99999999);
				
			}
			if($paramer[maxsalary]){
				$where[] = array("setFilterRange", "minsalary", 0, intval($paramer[maxsalary]));
			}

            //福利待遇
            $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $welfareid);
			}

			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$queryStr [] = "(@provinceid in ($paramer[cityin]) | @cityid in ($paramer[cityin]) | @three_cityid in ($paramer[cityin]) )";
			}

			//紧急招聘urgent
			if($paramer[urgent]){
				$where[] = array("setFilterRange", "urgent_time", $time, 9999999999);
			}

			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			    $where[] = array("setFilterRange", "lastupdate", $beginToday, 9999999999);
        		}else{
        			$time=time();
    				$uptime = $time-($paramer[uptime]*86400);
    				$where[] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
        		}
			}

			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$queryStr [] = "(@com_name ($paramer[comname]) )";
			}

			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where[] = array("setFilter", "com_provinceid", array($paramer[com_pro]));
			}

			//按照关键字匹配职位名称、企业名称等
			if($paramer[keyword]){
				include  PLUS_PATH."/city.cache.php";
				$cityid = array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(count($cityid) > 0){
					$cityid = implode(",", $cityid);
					$queryStr [] = "(@provinceid in ($cityid) | @cityid in ($cityid) | @three_cityid in ($cityid) )";
				}

				$where["keywords"] = $paramer[keyword];
			}

			//多选职位
			if($paramer["job"]){
				$paraJob = explode(",", $paramer[job]);
				$where[] = array("setFilter", "job_post", $paraJob);
			}

			//竞价招聘
			if($paramer[bid]){
				$where[] = array("setFilterRange", "xsdate", $time, 9999999999);
			}

			if(count($queryStr) > 0){
				$where["queryStr"] = $queryStr;
			}
			
			$sphinx = new sphinx();
			$sphinx->setFieldWeights(array("name"=>2,"com_name"=>1));

			//排序字段默认为更新时间
			$orderField = "lastupdate";
			if($paramer[order] && $paramer[order]!="lastdate"){
				$orderField = str_replace("'","",$paramer[order]);
			}

			//排序规则 默认为倒序
			$orderType = "DESC";
			if(strtoupper(trim($paramer[sort])) == "ASC"){
				$orderType = "ASC";
			}

			$sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

			if($paramer[ispage]){
				$limitArr = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
				$ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company_job");
			}
			else if($paramer[limit]){
				$ids = $sphinx->getIds($where, 0, $paramer[limit], "company_job");
			}
			else{
				$ids = $sphinx->getIds($where, 0, 20, "company_job");
			}
						
			if(count(ids) > 0){
				$ids = implode(",", $ids);
				$where = "id in ($ids) order by field(id, $ids) ";
			}
			else{
				$where = "0";
			}
			
			$limit = "";
		}//end if($config["useSphinx"])
		else{
			if($paramer[sdate]){
				$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
			}else{
				$where = "`state`=1";
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where .= " AND `uid` = '$paramer[uid]'";
			}
			//是否推荐职位
			if($paramer[rec]){
				
				$where.=" AND `rec_time`>=".time();
				
			}
			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$job_uid).")";
			}
			//取不包含当前id的职位
			if($paramer[noid]){
				$where.= " and `id`<>$paramer[noid]";
			}
			//是否被锁定
			if($paramer[r_status]){
				$where.= " and `r_status`=2";
			}else{
				$where.= " and `r_status`=1";
			}
			//是否下架职位
			if($paramer[status]){
				$where.= " and `status`='1'";
			}else{
				$where.= " and `status`='0'";
			}
			//公司体制
			if($paramer[pr]){
				$where .= " AND `pr` =$paramer[pr]";
			}
			//公司行业分类
			if($paramer['hy']){
				$where .= " AND `hy` = $paramer[hy]";
			} 
			//职位大类
			if($paramer[job1]){
				$where .= " AND `job1` = $paramer[job1]";
			}
			//职位子类
			if($paramer[job1_son]){
				$where .= " AND `job1_son` = $paramer[job1_son]";
			}
			//职位三级分类
			if($paramer[job_post]){
				$where .= " AND (`job_post` IN ($paramer[job_post]))";
			}
			//您可能感兴趣的职位--个人会员中心
			if($paramer['jobwhere']){
				$where .=" and ".$paramer['jobwhere'];
			}
			//职位分类综合查询
			if($paramer['jobids']){
				$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
			}
			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
			}
			//城市大类
			if($paramer[provinceid]){
				$where .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer['cityid']){
				$where .= " AND (`cityid` IN ($paramer[cityid]))";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
			}
			if($paramer['cityin']){
				$where .= " AND `three_cityid` IN ($paramer[cityin])";
			}
			//学历
			if($paramer[edu]){
				$where .= " AND `edu` = $paramer[edu]";
			}
			//工作经验
			if($paramer[exp]){
				$where .= " AND `exp` = $paramer[exp]";
			}
			//到岗时间
			if($paramer[report]){
				$where .= " AND `report` = $paramer[report]";
			}
			//职位性质
			if($paramer[type]){
				$where .= " AND `type` = $paramer[type]";
			}
			//性别
			if($paramer[sex]){
				$where .= " AND `sex` = $paramer[sex]";
			}
			//应届生
			if($paramer[is_graduate]){
				$where .= " AND `is_graduate` = $paramer[is_graduate]";
			}
			//公司规模
			if($paramer[mun]){
				$where .= " AND `mun` = $paramer[mun]";
			}
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary])."))";
				/*$where.= " and case when minsalary>0 then `minsalary`<= ".intval($paramer[minsalary]). " end and case when maxsalary>0 then `maxsalary`<= ".intval($paramer[maxsalary])." else minsalary<".intval($paramer[maxsalary])." and maxsalary =0 end ";*/
	    	}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`>=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`!=0 and  `maxsalary`=0))";
				/*$where.= " AND `minsalary`>=".intval($paramer[minsalary])." and minsalary>0";*/
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and maxsalary=0) 
							or (`minsalary`=0 and  `maxsalary`!=0)
							)";
				/*$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])." and maxsalary>0";*/
			}
	         //福利待遇
	         $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
			}
			//紧急招聘urgent
			if($paramer[urgent]){
				$where.=" AND `urgent_time`>".time();
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND lastupdate>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND lastupdate>$uptime";
	    		}
			}
			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
			}
			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
			}
			//按照职位名称匹配
			if($paramer[keyword]){
				$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
				$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
				include  PLUS_PATH."/city.cache.php";
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(is_array($cityid)){
					foreach($cityid as $value){
						$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
					}
					$where1[]=@implode(" or ",$class);
				}
				$where.=" AND (".@implode(" or ",$where1).")";
			}
			//多选职位
			if($paramer["job"]){
				$where.=" AND `job_post` in ($paramer[job])";
			}
			//置顶招聘
			if($paramer[bid]){
				if($config[joblist_top]!=1){
					$paramer[limit] = 5;
				}
				$where.="  and `xsdate`>'".time()."'";
			} 
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
			}

			//查询条数
			$limit = '';
			if($paramer[limit]){

				$limit = " limit ".$paramer[limit];
			}

			if($paramer[ispage]){
				$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
			}

			//排序字段默认为更新时间
            //置顶设置为随机5条时，随机查询
            if($paramer[bid] && $paramer[limit]){
                $order = " ORDER BY rand() ";
            }else{
                if($paramer[order] && $paramer[order]!="lastdate"){
    				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
    			}else{
    				$order = " ORDER BY `lastupdate` ";
    			}
            }
			//排序规则 默认为倒序
			if($paramer[sort]){
				$sort = $paramer[sort];
			}else{
				$sort = " DESC";
			} 
			$where.=$order.$sort;
		}
		
		
			
		$job_jia = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($job_jia) && !empty($job_jia)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_jia as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0 ||!file_exists(str_replace('./',APP_PATH,$value['logo']))){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			    
			//$comrat = $db->select_all("company_rating","`display`='1'");
			if($paramer[bid]){
				$noids=array();
			}	
			foreach($job_jia as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_jia[$key]);
					continue;
				}else{
					$job_jia[$key] = $db->array_action($value,$cache_array);
					$job_jia[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_jia[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_jia[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_jia[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_jia[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_jia[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_jia[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_jia[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_jia[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_jia[$key][logo] =$r_uid[$value['uid']][logo];
					$job_jia[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_jia[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_jia[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_jia[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_jia[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_jia[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_jia[$key]['redtime'] =1;
					}else{
						$job_jia[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$job_jia[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_jia[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_jia[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_jia[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_jia[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_jia[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job_jia[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job_jia[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_jia[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$job_jia[$key][ratlogo] = $v[com_pic];
							}else{
								$job_jia[$key][ratlogo] ='';
							}
							$job_jia[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_jia[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_jia[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_jia[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jia[$key][name_n]);
						$job_jia[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jia[$key][com_n]);
						$job_jia[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_jia[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($job_jia)){
				if($paramer[keyword]!=""&&!empty($job_jia)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job_jia = $job_jia; if (!is_array($job_jia) && !is_object($job_jia)) { settype($job_jia, 'array');}
foreach ($job_jia as $_smarty_tpl->tpl_vars['job_jia']->key => $_smarty_tpl->tpl_vars['job_jia']->value) {
$_smarty_tpl->tpl_vars['job_jia']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['job_jia']->key;
?>
      <div class="Company_other_job">
        <ul>
          <li>
            <div class="Company_other_logo"><img src="<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['logo'];?>
" width="50" height="50" alt="<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['name'];?>
"></div>
            <div> <a href="<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_url'];?>
" class="Company_other_name"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['name'];?>
</a>
             <div class="">
         <?php if ($_smarty_tpl->tpl_vars['job_jia']->value['job_salary']) {?><span class="Company_other_fd8"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_salary'];?>
</span><?php }?>       <span class="job_show_xs_city"><?php if ($_smarty_tpl->tpl_vars['job_jia']->value['job_city_one']) {
echo $_smarty_tpl->tpl_vars['job_jia']->value['job_city_one'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_city_two'];?>
</span> 
         </div>
          <div class="Company_other_comname"><?php echo mb_substr($_smarty_tpl->tpl_vars['job_jia']->value['com_name'],0,13,'utf-8');?>
</div>
              <?php }?></div>
          </li>
        </ul>
      </div>
      <?php } ?> <?php if (!$_smarty_tpl->tpl_vars['job_jia']->value) {?>
      <div class="clear"></div>
           <div class="evaluate_pj_no">暂无相似职位! </div>
      <?php }?> </div>
    <div class="Compply_right_banner fl"><?php echo smarty_function_ad(array('cid'=>27,'id'=>58),$_smarty_tpl);?>
</div>
  </div>
</div>
 
<div id="sqrewardjob_show" class="comapply_redpack_pop none" style="background:#fff">
  <div class="comapply_redpack_tit"><span class="comapply_redpack_tit_s">投递者简历要求</span><span class="comapply_redpack_tit_n">（* 你的简历需必填红色项目才能领取红包）</span></div>
  <div class="comapply_redpack_list_c">
    <div class="comapply_redpack_list_c_s <?php if ($_smarty_tpl->tpl_vars['reward']->value['exp']=='1') {?>comapply_redpack_list_c_s_cur<?php }?>"><i class="comapply_redpack_list_c_icon comapply_redpack_list_c_icon_gz"></i>工作经历
      <div class="comapply_redpack_list_resume_tj expno"><span class="comapply_redpack_list_resume_s expmsg"><?php if ($_smarty_tpl->tpl_vars['reward']->value['exp']!='1') {?>不限<?php }?></span></div>
    </div>
    <div class="comapply_redpack_list_c_s <?php if ($_smarty_tpl->tpl_vars['reward']->value['edu']=='1') {?>comapply_redpack_list_c_s_cur<?php }?>"><i class="comapply_redpack_list_c_icon comapply_redpack_list_c_icon_jy"></i>教育经历
      <div class="comapply_redpack_list_resume_tj eduno"><span class="comapply_redpack_list_resume_s edumsg"><?php if ($_smarty_tpl->tpl_vars['reward']->value['edu']!='1') {?>不限<?php }?></span></div>
    </div>
    <div class="comapply_redpack_list_c_s <?php if ($_smarty_tpl->tpl_vars['reward']->value['project']=='1') {?>comapply_redpack_list_c_s_cur<?php }?>"><i class="comapply_redpack_list_c_icon comapply_redpack_list_c_icon_xm"></i>项目经历
      <div class="comapply_redpack_list_resume_tj projectno "><span class="comapply_redpack_list_resume_s projectmsg"><?php if ($_smarty_tpl->tpl_vars['reward']->value['project']!='1') {?>不限<?php }?></span></div>
    </div>
    <div class="comapply_redpack_list_c_s <?php if ($_smarty_tpl->tpl_vars['reward']->value['skill']=='1') {?>comapply_redpack_list_c_s_cur<?php }?>"><i class="comapply_redpack_list_c_icon comapply_redpack_list_c_icon_jn"></i>技能证书
      <div class="comapply_redpack_list_resume_tj skillno"><span class="comapply_redpack_list_resume_s skillmsg"><?php if ($_smarty_tpl->tpl_vars['reward']->value['skill']!='1') {?>不限<?php }?></span></div>
    </div>
  </div>
  <div class="comapply_redpack_td sqreward none"> <a href="javascript:;" class="comapply_redpack_td_cur" id="clickreward_sq">赏金投递</a> </div>
  <div class="comapply_redpack_td perresume none"> <a href="<?php echo smarty_function_url(array('m'=>'member','c'=>'resume'),$_smarty_tpl);?>
" class="comapply_redpack_td_cur">完善简历</a> </div>
</div>

 
<div id="sqjob_show" class="Pop-up_logoin none" style="background:none;">
  <div class="Pop-up_logoin_sq"> <span>职位名称：</span><em class="yun_red"><?php echo mb_substr($_smarty_tpl->tpl_vars['Info']->value['jobname'],0,14,'utf-8');?>
</em> </div>
  <div class="Pop-up_logoin_sq"> <span>公司名称： </span><em><?php echo mb_substr($_smarty_tpl->tpl_vars['Info']->value['com_name'],0,14,'utf-8');?>
</em> </div>
  <div class="Pop-up_logoin_sq" id="resume_job"> <span>选择简历：</span>
    <div class="POp_up_r"></div>
  </div>
  <div class="Pop-up_logoin_sq" style="clear:both"> <span>&nbsp;</span>
    <input id="companyname" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
" />
    <input id="jobname" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['jobname'];?>
" />
    <input id="companyuid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" />
    <input id="jobid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" />
    <input id="click_sq" class="login_button2" type="button" value="提交申请" name="Submit" />
  </div>
</div>
 <div class="none" id="jobreport">
  <div class="report_jobbox">
    <div class="report_job_ly_tip">请选择您的举报理由</div>
    <span class="report_job_ly" id="r1" onclick="add_reason(1);">电话空号</span> <span class="report_job_ly" id="r2" onclick="add_reason(2);">电话没人接</span> <span class="report_job_ly" id="r3" onclick="add_reason(3);">工资虚假</span> <span class="report_job_ly" id="r4" onclick="add_reason(4);">非法收费</span> <span class="report_job_ly" id="r5" onclick="add_reason(5);">职介冒充</span>
    <div class="report_job_ly_tip mt10">备注说明</div>
    <div class="report_job_textarea_box">
      <input id="r_uid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" type="hidden" />
      <input id="id" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" type="hidden" />
      <input id="r_name" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
" type="hidden" />
      <textarea placeholder="请简明扼要的阐述你的理由，以便工作人员更好的判断" rows="2" cols="38" id="r_reason" class="report_job_textarea"></textarea>
    </div>
    <div class="report_job_yz"> 验 证 码：
      <input type="text" class="report_job_text" id="report_authcode" maxlength="6" placeholder="请输入图片验证码" onfocus="checkCode('vcodeimg')" autocomplete="off"/>
      <img id="vcodeimg" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" /> <a href="javascript:void(0);" onclick="checkCode('vcodeimg');">看不清?</a> </div>
    <div class="report_job_bth_box">
      <input class="report_job_bth" type="button" value="举 报" onclick="reportSub('vcodeimg');" />
    </div>
  </div>
</div>
 <div id="notuser" style="width:350px;" class="none">
  <div class="job_user_box">
    <div class="job_user_name" style="margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['usertypemsg']->value;?>
</div>
    <div class="job_user_name_tip" style="margin-top:10px;margin-bottom:15px;padding:0;">请登录个人用户</div>
    <div style="margin-bottom:20px;"> <a href="javascript:void(0)" onclick="layer.closeAll('page')" class="job_user_box_hn">忽略</a> <a href="javascript:void(0)" style="margin-left:10px;" onclick="switching('<?php echo smarty_function_url(array('c'=>'logout'),$_smarty_tpl);?>
')" class="job_user_box_qh">切换账户</a> </div>
  </div>
</div>
<div id="map_show" class="none">
  <div class="map_query_box">
    <div id="map_container" style="width:1100px;height:450px;"></div>
    <div class="map_query" id="map_search">
      <div class="map_query_tit">线路查询 <span class="map_query_tit_s">注：地图可以左击拖拽任意位置</span></div>
      <div class="map_query_list"><span class="map_query_list_s">起点</span><i class="map_query_list_line"></i>
        <input type="text" class="map_startlist map_query_text" placeholder="输入起点" id="map_start" name="map_start" />
      </div>
      <div class="map_query_list"> <span class="map_query_list_s">终点</span><i class="map_query_list_line"></i> <?php if ($_smarty_tpl->tpl_vars['Info']->value['x']) {?>
        <input type="text" class="map_startend map_query_text" id="map_end" name="map_end" />
        <?php } else { ?>
        <input type="text" class="map_startend map_query_text" placeholder="输入终点" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['address'];?>
" id="map_end" name="map_end" />
        <?php }?> </div>
      <div class="map_query_bth_box">
        <input type="button" class="mapsubmit map_query_bth " value="公交查询" name="submit" onclick="bus_query();" />
        <span>
        <input type="button" class="mapsubmit map_query_bth map_query_bth_car" value="驾车查询"  name="submit" onclick="map_drving();"/>
        </span></div>
    </div>
    <div class="map_query_result">
      <div id="r-result"></div>
    </div>
  </div>
</div>
<div id="tel_show" class="none">
  <div class="jobtel_box">
    <div class="jobtel_box_tel">
      <div class="jobtel_touch_box">
        <div class="jobtel_touch_box_wx">
          <div class="jobtel_box_wx_gz">关注微信公众号</div>
          <div class="jobtel_box_wx">申请结果早知道</div>
          <div class="jobtel_box_wxewm"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="100" height="100"></div>
          <div class="jobtel_box_bot"></div>
        </div>
        <div class="jobtel_box_tip">联系时请说明是在<span class="jobtel_box_tip_name"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
</span>上看到的</div>
        
         <div class="jobtel_box_t_box"> <i class="jobtel_box_t_box_icon"></i>
          <div class="jobtel_box_t_hrl">
            <div class="jobtel_touch_hr" id='linkman'> <?php echo $_smarty_tpl->tpl_vars['Info']->value['linkman'];?>
 </div>
            <div class="jobtel_touch"><span id='linktel'><?php echo $_smarty_tpl->tpl_vars['Info']->value['linktel'];?>
</span></div>
            <div class="jobtel_touch"><span id='linkphone'></span></div>
            <div class="jobtel_box_t_box_cj_tip none" id='addresume'></div>
          </div>
        </div>
        <div class="jobtel_touch_p none" id='linkqq'></div>
        <div class="jobtel_touch_p" id='busstops'></div>
         
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php if (!$_COOKIE['uid']) {?>
 <div id="applydiv" class="none">
  <div class="yun_reg_BasicInfo">
    <div class="yun_reg_BasicInfo_h1"> <span class="yun_reg_BasicInfo_h1_span ">快速填写简历 , 好工作轻松搞定！</span> </div>
    <div class="yun_reg_BasicInfo_box">
      <div class="yun_reg_BasicInfo_left"> 
         <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s">真实姓名</span> <i class="yun_reg_BasicInfo_i">*</i>
          <input type="text" name="uname" id="uname" class="yun_reg_BasicInfo_text" placeholder="请输入姓名"/>
        </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s">性别</span><i class="yun_reg_BasicInfo_i">*</i>
          <input type="hidden" id="sex" name="sex" value="1" />
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?> <?php if ($_smarty_tpl->tpl_vars['j']->value!=3) {?><span class="yun_info_sex <?php if ($_smarty_tpl->tpl_vars['j']->value==1) {?>yun_info_sex_cur<?php }?>" id="sex<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" onclick="checksex('<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
')"><i class="usericon_sex usericon_sex<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"></i><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php }?> <?php } ?> </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s">出生年月</span><i class="yun_reg_BasicInfo_i">*</i>
          <div class="yun_reg_BasicInfo_l_r yun_reg_BasicInfo_l_date">
            <div class="layui-input-inline">
              <input type="button" value="1988-08-08" name="birthday" id="birthday" class="yun_reg_BasicInfo_date_text" />
            </div>
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s">最高学历</span><i class="yun_reg_BasicInfo_i">*</i>
          <div class="yun_reg_BasicInfo_l_r z-index100">
            <input type="button" value="请选择" class="yun_reg_BasicInfo_but" id="educ" onclick="search_show('job_educ');" />
            <input type="hidden" id="educid" name="edu" />
            <i class="yun_reg_BasicInfo_list_icon"></i>
            <div class="yun_reg_BasicInfo_l_box none" id="job_educ">
              <ul class="yun_reg_BasicInfo_text_list">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li> <a href="javascript:;" onclick="selects('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','educ','<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
');" rel="nofollow"> <?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s">工作经验</span><i class="yun_reg_BasicInfo_i">*</i>
          <div class="yun_reg_BasicInfo_l_r  z-index90">
            <input type="button" value="请选择" class="yun_reg_BasicInfo_but" id="exp" onclick="search_show('job_exp');" />
            <input type="hidden" id="expid" name="exp" />
            <i class="yun_reg_BasicInfo_list_icon"></i>
            <div class="yun_reg_BasicInfo_l_box none" id="job_exp">
              <ul class="yun_reg_BasicInfo_text_list">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li> <a href="javascript:;" onclick="selects('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','exp','<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
');"> <?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s">工作性质</span><i class="yun_reg_BasicInfo_i">*</i>
          <div class="yun_reg_BasicInfo_l_r  z-index60">
            <input type="button" value="请选择" class="yun_reg_BasicInfo_but" id="type" onclick="search_show('job_type');" />
            <input type="hidden" id="typeid" name="type" />
            <i class="yun_reg_BasicInfo_list_icon"></i>
            <div class="yun_reg_BasicInfo_l_box none" id="job_type">
              <ul class="yun_reg_BasicInfo_text_list">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li> <a href="javascript:;" onclick="selects('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
', 'type', '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
');" rel="nofollow"> <?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s">到岗时间</span> <i class="yun_reg_BasicInfo_i">*</i>
          <div class="yun_reg_BasicInfo_l_r  z-index50">
            <input type="button" value="请选择" class="yun_reg_BasicInfo_but" id="report" onclick="search_show('job_report');" />
            <input type="hidden" id="reportid" name="report" />
            <i class="yun_reg_BasicInfo_list_icon"></i>
            <div class="yun_reg_BasicInfo_l_box none" id="job_report" style="max-height:100px">
              <ul class="yun_reg_BasicInfo_text_list">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li> <a href="javascript:;" onclick="selects('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
', 'report', '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
');"> <?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
         <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s">手机号码</span><i class="yun_reg_BasicInfo_i">*</i>
          <input type="text" name="telphone" id="telphone" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" onblur="ckjobreg('1')" class="yun_reg_BasicInfo_text"placeholder="请输入手机号码"  />
        </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s">验证码</span><i class="yun_reg_BasicInfo_i">*</i>
          <input id="CheckCodefast" type="text" class="yun_reg_BasicInfo_text yun_reg_BasicInfo_text_w155" onblur="" maxlength="6" style="width:145px; margin-right:10px;"placeholder="请输入验证码" onfocus="checkCode('vcode_img_temp_fast')" autocomplete="off"/>
          <a href="javascript:void(0);" onclick="checkCode('vcode_img_temp_fast');"> <img id="vcode_img_temp_fast" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" /></a> <span class="reg_tips reg_tips_red none" id="ajax_CheckCode"></span> </div>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen']==1&&$_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s">手机验证</span><i class="yun_reg_BasicInfo_i">*</i>
          <input type="hidden" name="isAuthcodeCheck" id="isAuthcodeCheck" value="<?php echo $_smarty_tpl->tpl_vars['isAuthcodeCheck']->value;?>
" placeholder="请输入手机验证码" />
          <input type="text" name="authcode" id="authcode" class="yun_reg_BasicInfo_text yun_reg_BasicInfo_text_w155" />
          <a href="javascript:void(0);" class="login_m_send" id="send_msg_tip" onclick="send_msg('<?php echo smarty_function_url(array('m'=>'ajax','c'=>'sendmsg'),$_smarty_tpl);?>
');">发送验证码</span> </span> </a> </div>
        <?php }?>
        <div style="width:100%; float:left;height:80px;"></div>
        <div class="yun_reg_BasicInfo_bth_box"> <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_project']==1||$_smarty_tpl->tpl_vars['config']->value['resume_create_exp']==1||$_smarty_tpl->tpl_vars['config']->value['resume_create_edu']==1) {?>
          <input type="button" value="下一步" class="yun_reg_BasicInfo_bth" onclick="nextaddresume()" />
          <?php } else { ?>
          <input type="button" value="立即申请" class="yun_reg_BasicInfo_bth" onclick="checkaddresume('vcode_img_temp_fast','vcodeimgs','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'temporaryresume'),$_smarty_tpl);?>
')" />
          <?php }?> <em class="yun_reg_BasicInfo_login_tip">如已有账户，点击此处 <a href="javascript:void(0);" onclick="OnLogin();" class="yun_reg_BasicInfo_login">立即登录</a></em> </div>
      </div>
    </div>
  </div>
</div>
 <div id="nextaddresume" class="none">
  <div class="yun_reg_BasicInfo">
    <div class="yun_reg_BasicInfo_box" style="height:580px;">
      <div class="yun_reg_BasicInfo_left" style="height:580px;"> <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']=='1') {?> 
         <div class="yun_reg_BasicInfo_tit"><span class="">最近一份工作</span></div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s">公司名称</span><i class="yun_reg_BasicInfo_i">*</i>
          <input type="text" class="yun_reg_BasicInfo_text" id="workname" name="workname" value="" placeholder="请填写公司名称">
        </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s">担任职位</span><i class="yun_reg_BasicInfo_i">*</i>
          <input type="text" class="yun_reg_BasicInfo_text" name="worktitle" id="worktitle" value="" placeholder="请填写担任职位">
        </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s">在职时间</span><i class="yun_reg_BasicInfo_i">*</i>
          <div class="yun_reg_BasicInfo_timetext_box">
            <input name="worksdate" id="worksdate" type="text" value="" class="yun_reg_BasicInfo_timetext">
            <span class="yun_reg_BasicInfo_timeline">-</span>
            <input name="workedate" id="workedate" type="text" value="" class="yun_reg_BasicInfo_timetext">
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s">工作内容</span><i class="yun_reg_BasicInfo_i">*</i>
          <textarea class="yun_reg_BasicInfo_listtextarea" id="workcontent"></textarea>
        </div>
        <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_edu']=='1') {?> 
         <div class="yun_reg_BasicInfo_tit"><span class="">毕业院校</span></div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s">学校名称</span><i class="yun_reg_BasicInfo_i">*</i>
          <input type="text" class="yun_reg_BasicInfo_text" id="eduname" name="eduname" value="" placeholder="请填写学校名称">
        </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s">在校时间</span> <i class="yun_reg_BasicInfo_i">*</i>
          <div class="yun_reg_BasicInfo_timetext_box">
            <input name="edusdate" id="edusdate" type="text" value="" class="yun_reg_BasicInfo_timetext">
            <span class="yun_reg_BasicInfo_timeline">-</span>
            <input name="eduedate" id="eduedate" type="text" value="" class="yun_reg_BasicInfo_timetext">
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s">毕业学历</span> <i class="yun_reg_BasicInfo_i">*</i>
          <div class="yun_reg_BasicInfo_l_r z-index100">
            <input type="button" value="请选择" class="yun_reg_BasicInfo_but" id="educationc" onclick="search_show('job_educationc');" />
            <input type="hidden" id="educationcid" name="education" />
            <i class="yun_reg_BasicInfo_list_icon"></i>
            <div class="yun_reg_BasicInfo_l_box none" id="job_educationc">
              <ul class="yun_reg_BasicInfo_text_list">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li> <a href="javascript:;" onclick="selects('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','educationc','<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
');" rel="nofollow"> <?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s">所学专业</span><i class="yun_reg_BasicInfo_i">*</i>
          <input type="text" class="yun_reg_BasicInfo_text" id="eduspec" name="eduspec" value="" placeholder="请填写所学专业">
        </div>
        <?php }?> 
         <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_project']=='1') {?> 
         <div class="yun_reg_BasicInfo_tit"><span class="">近期项目</span></div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s">项目名称</span><i class="yun_reg_BasicInfo_i">*</i>
          <input type="text" class="yun_reg_BasicInfo_text" name="proname" id="proname" value="" placeholder="请填写项目名称">
        </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s">担任职位</span><i class="yun_reg_BasicInfo_i">*</i>
          <input type="text" class="yun_reg_BasicInfo_text" name="protitle" id="protitle" value="" placeholder="请填写担任职位">
        </div>
        <div class="yun_reg_BasicInfo_list"><span class="yun_reg_BasicInfo_s">项目时间</span><i class="yun_reg_BasicInfo_i">*</i>
          <div class="yun_reg_BasicInfo_timetext_box">
            <input type="text" name="prosdate" id="prosdate" value="" class="yun_reg_BasicInfo_timetext">
            <span class="yun_reg_BasicInfo_timeline">-</span>
            <input type="text" name="proedate" id="proedate" value="" class="yun_reg_BasicInfo_timetext">
          </div>
        </div>
        <div class="yun_reg_BasicInfo_list"> <span class="yun_reg_BasicInfo_s">项目内容</span><i class="yun_reg_BasicInfo_i">*</i>
          <textarea class="yun_reg_BasicInfo_listtextarea" id="procontent"></textarea>
        </div>
        <?php }?> 
         <div style="width:100%; float:left;height:80px;"></div>
        <div class="yun_reg_BasicInfo_bth_box">
          <input type='hidden' id='resume_edu' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_edu'];?>
'>
          <input type='hidden' id='resume_exp' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_exp'];?>
'>
          <input type='hidden' id='resume_pro' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_project'];?>
'>
          <input type="button" value="立即申请" class="yun_reg_BasicInfo_bth" onclick="checkaddresume('vcode_img_temp_fast','vcodeimgs','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'temporaryresume'),$_smarty_tpl);?>
');" />
          <input type="button" value="返回上一步" class="" onclick="addresumereturn()" style="border:none; background:#fff;color:#f60;; margin-left:50px;">
        </div>
      </div>
    </div>
  </div>
</div>
 <div class="none" id="userregdiv">
  <div class="yun_reg_box">
    <div class="yun_reg_list_tip_s">保存成功；离完成只差一步</div>
    <div class="yun_reg_Switching_box">
      <ul class="yun_reg_list">
        <li class="mt20"><em><font color="#FF0000">*</font> 密&nbsp;&nbsp;码：</em> <span id="pass1">
          <input type="password" class="yun_reg_text"id="reg_password"/>
          </span> </li>
        <li class="m10"><em><font color="#FF0000">*</font> 验证码：</em>
          <input type="text" class="yun_reg_text_yz" maxlength="6" id="reg_authcode" onfocus="checkCode('vcodeimgs')" autocomplete="off"/>
          <img id="vcodeimgs" class="authcode" onclick="checkCode('vcodeimgs');" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" /> </li>
        <li class="mt10"><em>&nbsp;</em>
          <input type="hidden" id="resumeid" />
          <input type="button" value="保存" class="yun_reg_submit" onclick="checkregfast('vcodeimgs','<?php echo smarty_function_url(array('m'=>'ajax','c'=>'userreg'),$_smarty_tpl);?>
');" />
        </li>
      </ul>
    </div>
  </div>
</div>
<?php }?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/company.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/pack.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
" charset="utf-8"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/map.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/datepicker/css/font-awesome.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />

<!--[if IE 6]>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
		DD_belatedPNG.fix('.png');
		<?php echo '</script'; ?>
>
		<![endif]--> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo '<script'; ?>
>
            $(function() {
                $(".job_hr_left_ly").click(function() {
                    $("#hrmsg").show(500);
                });
                $("#hrmsg").hover(function() {
                    $("#hrmsg").show();
                }, function() {
                    $("#hrmsg").hide(500);
                });
                var cheight = $("#job_content").height();
                if(parseInt(cheight) > 270) {
                    $("#job_content").attr('style', 'width:100%;height:270px; overflow:hidden');
                    $(".company_show_more").show();
                }
            });

            function showcc() {
                $("#job_content").attr('style', 'width:100%;height:auto; overflow:hidden');
                $(".company_show_more").find('a').html('收起');
                $(".company_show_more").find('a').attr('onclick', 'hidecc()');
            }

            function hidecc() {
                $("#job_content").attr('style', 'width:100%;height:270px; overflow:hidden');
                $(".company_show_more").find('a').html('查看更多');
                $(".company_show_more").find('a').attr('onclick', 'showcc()');
            }

            function showmap(id) {
                $.layer({
                    type: 1,
                    title: '地图展示',
                    closeBtn: [0, true],
                    offset: ['100px', ''],
                    border: [10, 0.3, '#000', true],
                    area: ['1100px', 'auto'],
                    page: {
                        dom: "#" + id
                    }
                });
                getmapshowcont('map_container', "<?php echo $_smarty_tpl->tpl_vars['Info']->value['x'];?>
", "<?php echo $_smarty_tpl->tpl_vars['Info']->value['y'];?>
", "<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
", "<?php echo $_smarty_tpl->tpl_vars['Info']->value['address'];?>
");
            }
            
            function bus_query() {
                var map_start = $.trim($("#map_start").val());
                if(map_start == "") {
                    layer.msg("请输入线路查询起点");
                    return false;
                }
                var map_end = $.trim($("#map_end").val());
                var map = new BMap.Map("map_container");
                map.centerAndZoom(new BMap.Point('<?php echo $_smarty_tpl->tpl_vars['Info']->value['x'];?>
', '<?php echo $_smarty_tpl->tpl_vars['Info']->value['y'];?>
'), 12);
                map.clearOverlays();
                var transit = new BMap.TransitRoute(map, {
                    renderOptions: {
                        map: map,
                        panel: "r-result"
                    },
                    onResultsHtmlSet: function() {
                        $("#r-result").show()
                    }
                });

                transit.search(map_start, map_end);
            }
            
            function map_drving() {
                var map_start = $.trim($("#map_start").val());
                if(map_start == "") {
                    layer.msg("请输入线路查询起点");
                    return false;
                }
                var map_end = $.trim($("#map_end").val());
                var map = new BMap.Map("map_container");
                map.clearOverlays();
                map.centerAndZoom(new BMap.Point('<?php echo $_smarty_tpl->tpl_vars['Info']->value['x'];?>
', '<?php echo $_smarty_tpl->tpl_vars['Info']->value['y'];?>
'), 12);
                var driving = new BMap.DrivingRoute(map, {
                    renderOptions: {
                        map: map,
                        panel: "r-result",
                        autoViewport: true
                    }
                });
                driving.search(map_start, map_end);
            }

            function checksm() {
                $('#shenming').hide();
                $("#smtext").show();
            }

            function searchtype(id) {
                $(".search_curs").removeClass("search_curs");
                $("#type" + id).addClass("search_curs");
                $(".contentBox_conts").hide();
                $("#type_" + id).show();
            }

            function subsm(id) {
                var shenming = $("#smname").val();
                $.post(weburl + "/index.php?m=job&c=shenming", {
                    id: id,
                    shenming: shenming
                }, function(data) {
                    if(data) {
                        location.reload();
                    }
                });
            }

            function showtel(id) {
                var loadi = layer.load('请稍后...', 0);
                $.post(weburl + "/job/index.php?c=comapply&a=gettel", {
                    id: id
                }, function(data) {
                    layer.close(loadi);
                    if(data == 1) {
                        layer.msg('企业暂未开放职位联系方式，请直接投递简历！', 2, 8);
                    } else if(data == 2) {
                        layer.msg('系统未开放联系方式，请直接投递简历！', 2, 8);
                    } else if(data == 3) {
                        layer.msg('只有求职者才能查看企业联系方式', 2, 8);
                    } else {
                        $('#linkman').html(data.linkman);
                        if(data == 4) {
                            $('#addresume').html('花1分钟填个简历，联系电话任意看   <a href="<?php echo smarty_function_url(array('m'=>'member','c'=>'expect'),$_smarty_tpl);?>
" target=\'_blank\' class="jobtel_box_t_box_cj">立即创建</a>');
                            $('#addresume').show();
                        } else if(data == 5) {
                            $('#addresume').html('投递简历，联系电话任意看  ');
                            $('#addresume').show();
                        } else {
                            var data = eval('(' + data + ')');
                            $('#linktel').html(data.linktel);
                            $('#linkphone').html(data.linkphone);
                            if(data.linkqq) {
                                $('#linkqq').html('联系Q Q：' + data.linkqq + ' <a target="_blank" href="tencent://message/?uin=' + data.linkqq + '&Site=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
&Menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=1:' + data.linkqq + ':13" alt="点击这里给我发消息"></a>');
                                $('#linkqq').show();
                            }
                            if(data.busstops) {
                                $('#busstops').html('公交站点：' + data.busstops);
                                $('#busstops').show();
                            }
                        }
                        $.layer({
                            type: 1,
                            title: '联系方式',
                            closeBtn: [0, true],
                            offset: ['100px', ''],
                            border: [10, 0.3, '#000', true],
                            area: ['460px', '270px'],
                            page: {
                                dom: "#tel_show"
                            }
                        });
                    }

                });
            }

            function sqjobtop() {
                var jobid = $("#jobid").val();
                $.post(weburl + "/index.php?m=ajax&c=index_ajaxjob", {
                    jobid: jobid
                }, function(data) {

					if(data==6){
						layer.msg('参数错误，请重试！', 2, 8);
					}else if(data==5){
						layer.alert('简历正在审核中，请联系管理员', 0, '提示',function(){window.location.href =weburl+"/member/index.php?c=resume";window.event.returnValue = false;return false; });
					}else if(data == 4) {
								layer.msg('该职位已邀请您面试，无需再投简历！', 2, 8);
                    } else if(data == 3) {
                        layer.msg('您已申请过该职位！', 2, 8);
                    } else if(data == 2) {
                        layer.alert('您还没有合适的简历，是否先添加简历？', 0, '提示', function() {
                            window.location.href = weburl + "/member/index.php?c=expect";
                            window.event.returnValue = false;
                            return false;
                        });
                    } else if(!data || data == 0) {
                        showlogin('1');
                    } else {

                        $(".POp_up_r").html('');
                        $(".POp_up_r").append(data);
                        $.layer({
                            type: 1,
                            title: '申请职位',
                            closeBtn: [0, true],
                            border: [10, 0.3, '#000', true],
                            area: ['380px', 'auto'],
                            page: {
                                dom: "#sqjob_show"
                            }
                        });
                    }
                });
            }
        <?php echo '</script'; ?>
> 
 <?php echo '<script'; ?>
>
            window._bd_share_config = {
                common: {
                    bdText: '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
',
                    bdDesc: '<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
',
                    bdUrl: '<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
',
                    bdPic: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_logo'];?>
'
                },
                share: [{
                    "tag": "share_1",
                    "bdSize": 24,
                    "bdCustomStyle": '<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/share.css'
                }]
            }
            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = weburl+'/js/static/api/js/share.js?cdnversion=' + ~(-new Date() / 36e5)];
        <?php echo '</script'; ?>
> 
 <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" class="none"></iframe>
<?php echo '<script'; ?>
 type="text/javascript">
            var headerfix = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_header_fix'];?>
';
            window.onload = function() {
                var oDiv = document.getElementById("float"),
                    H = 600,
                    Y = oDiv
                while(Y) {
                    H += Y.offsetTop;
                    Y = Y.offsetParent
                }
                window.onscroll = function() {
                    var s = document.body.scrollTop || document.documentElement.scrollTop
                    if(s > H) {
                        if(headerfix == 1) {
                            var top = '40px';
                        } else {
                            var top = '0px';
                        }
                        $("#float").attr('style', 'position:fixed;top:' + top + ';display:block');
                    } else {
                        $("#float").attr('style', '');
                    }
                }
            }
            layui.use('laydate', function() {
                var laydate = layui.laydate;
                laydate.render({
                    elem: '#birthday',
                    max: -5113,
                    value: '1990-01-01'
                });
        		monthclick(laydate,'#worksdate',1);
        		monthclick(laydate,'#workedate',1);
        		monthclick(laydate,'#edusdate',1);
        		monthclick(laydate,'#eduedate',1);
        		monthclick(laydate,'#prosdate',1);
        		monthclick(laydate,'#proedate',1);
            });
        <?php echo '</script'; ?>
> 
<?php if ($_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['usertype']->value==1&&$_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?>
             <?php if ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==2) {?> 
                  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_easemob.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
             <?php } elseif ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==3) {?> 
                  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_rongcloud.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

             <?php }?> 
        <?php }?> 
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
