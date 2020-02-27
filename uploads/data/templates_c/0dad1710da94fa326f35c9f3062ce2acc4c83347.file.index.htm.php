<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:39:18
         compiled from "/www/fpwjob/uploads/app/template/member/com/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:11732271205e2e3f461d2af0-32887105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dad1710da94fa326f35c9f3062ce2acc4c83347' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/index.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11732271205e2e3f461d2af0-32887105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'member' => 0,
    'config' => 0,
    'qrcode' => 0,
    'company_rating' => 0,
    'statis' => 0,
    'payed' => 0,
    'paying' => 0,
    'com_style' => 0,
    'des_resume' => 0,
    'de_resume' => 0,
    'down_resume' => 0,
    'look_resume' => 0,
    'jobids' => 0,
    'addjobnum' => 0,
    'guweninfo' => 0,
    'atn' => 0,
    'report' => 0,
    'kfqq' => 0,
    'jobnames' => 0,
    'norefresh' => 0,
    'normal_job_num' => 0,
    'un_refreshjob_num' => 0,
    'jobs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e3f4628afa9_40817085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e3f4628afa9_40817085')) {function content_5e2e3f4628afa9_40817085($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_sign')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.sign.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
>
    function Close(id) {
        $("#" + id).hide();
        $("#bg").hide();
    }
    function Next() {
        $("#one_tip").hide();
        $("#two_tip").show();
    }
    function showindextip(id) {
        $(".indextiphide").hide();
        $("#indextiphide" + id).show();
    }
    function hideindextip() {
        $(".indextiphide").hide();
        $("#bg").hide();
    }
<?php echo '</script'; ?>
>

<div class="w1000">
    <div class="admin_mainbody">
    	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
    	
    	<?php if ($_smarty_tpl->tpl_vars['company']->value['hy']==''&&($_GET['c']=="index"||$_GET['c']=='')) {?>
         <div class="yun_com_indextip indextiphide" style="display:block;">
            <div class="yun_com_indextip_box">
                <i class="yun_com_indextip_jt"></i>
                <i class="yun_com_indextip_jl"></i>
                <div class="yun_com_indextip_p">在这里可以发布职位 </div>
                <a href="javascript:void(0);" onclick="showindextip('1');" class="yun_com_indexbth_next">下一步</a>
                <a href="javascript:void(0);" onclick="hideindextip();" class="yun_com_indexbth_tg">跳过</a>
            </div>
        </div>

         <div class="yun_resume_indextip indextiphide" id="indextiphide1" style="display:none;">
            <div class="yun_com_indextip_box">
                <i class="yun_com_indextip_jt"></i>
                <i class="yun_resume_indextip_jl"></i>
                <div class="yun_com_indextip_p">在这里可以查看应聘者的简历 </div>
                <a href="javascript:void(0);" onclick="showindextip('2');" class="yun_com_indexbth_next">下一步</a>
                <a href="javascript:void(0);" onclick="hideindextip();" class="yun_com_indexbth_tg">跳过</a>
            </div>
        </div>
         <div class="yun_tg_indextip indextiphide" id="indextiphide2" style="display:none;">
            <div class="yun_com_indextip_box">
                <i class="yun_com_indextip_jt"></i>
                <i class="yun_com_indextip_cw"></i>
                <div class="yun_com_indextip_p">在这里可以推广职位 </div>
                <a href="javascript:void(0);" onclick="showindextip('3');" class="yun_com_indexbth_next">下一步</a>
                <a href="javascript:void(0);" onclick="hideindextip();" class="yun_com_indexbth_tg">跳过</a>
            </div>
        </div>
         <div class="yun_info_indextip indextiphide" id="indextiphide3" style="display:none;">
            <div class="yun_com_indextip_box">
                <i class="yun_com_indextip_jt"></i>
                <i class="yun_info_indextip_zl"></i>
                <div class="yun_com_indextip_p">
                    <div class="yun_com_indextip_p_may">在这里可以</div>完善企业基本资料 </div>
                <a href="index.php?c=info" class="yun_com_indexbth_next">完善资料</a>
                <a href="javascript:void(0);" onclick="hideindextip();" class="yun_com_indexbth_tg">跳过</a>
            </div>
        </div>
        <?php }?> 

        <?php if ($_smarty_tpl->tpl_vars['member']->value['status']!=1) {?>
        
		<div class="admin_new_tip " style="margin-bottom:20px;">
            <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
            <div class="admin_new_tip_list_cont">
				<?php if ($_smarty_tpl->tpl_vars['member']->value['status']==0) {?>
                <div class="admin_new_tip_list"> 您的帐号尚未审核，发布的职位信息将在审核通过后展示 </div>
				<div id="forms" class="admin_new_tip_list">
					您暂时无法查看简历的联系方式，我们会24小时内进行审核请保持电话畅通，您可联系客服快速审核（<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
）
				</div>
				<?php } else { if (!isset($_smarty_tpl->tpl_vars['member']) || !is_array($_smarty_tpl->tpl_vars['member']->value)) $_smarty_tpl->createLocalArrayVariable('member');
if ($_smarty_tpl->tpl_vars['member']->value['status'] = 2) {?>
					<div class="admin_new_tip_list"> 您的帐号已被锁定，您可联系客服快速解锁（<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
） </div>
				<?php } else { if (!isset($_smarty_tpl->tpl_vars['member']) || !is_array($_smarty_tpl->tpl_vars['member']->value)) $_smarty_tpl->createLocalArrayVariable('member');
if ($_smarty_tpl->tpl_vars['member']->value['status'] = 3) {?>
					<div class="admin_new_tip_list"> 您的帐号未通过审核，请重新完善资料，您也可联系客服快速审核（<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
） </div>
				<?php }}}?> 
            </div>
        </div>

        <?php }?> 
		
		<?php if (!$_smarty_tpl->tpl_vars['company']->value['name']) {?>
			<div class="com_index_Prompt ">
				<span class="com_index_Prompt_tip ">贵公司的资料还未填写完整，暂时还不可以发布职位哦</span>
				<a href="index.php?c=info" class="com_index_Prompt_ws cblue ">完善资料>></a>
			</div>
        <?php }?> 
		
		<?php if ($_smarty_tpl->tpl_vars['company']->value['yyzz_status']!="1") {?>
			<div class="com_index_Prompt ">
				<span class="com_index_Prompt_tip ">贵公司还没进行营业执照认证，可能会影响您的招聘效果哦</span>
				<a href="index.php?c=binding" class="com_index_Prompt_ws cblue ">立即认证>></a>
			</div>
        <?php }?>

        <div class="clear"></div>
         <div class="com_m_index_right">
			<?php if ($_smarty_tpl->tpl_vars['member']->value['wxid']==''&&$_smarty_tpl->tpl_vars['config']->value['wx_author']=='1') {?>
			<div class="yun_wtbd_tip">
				<div class="yun_wtbd_tip_tit">绑定微信，及时查询简历投递，优秀人才绝不错过！</div>
				<div class="yun_wtbd_tip_p"> 可便捷操作简历搜索、职位管理、发布职位、简历投递快速提醒等，随时随地轻松招人才</div>
				<?php if ($_smarty_tpl->tpl_vars['qrcode']->value) {?>
        <a href="javascript:;" class="wxtitle yun_wtbd_tip_bth">马上绑定微信</a>
        <?php } else { ?>
        <a href="javascript:void(0)" onclick="notweixin();" class=" yun_wtbd_tip_bth">马上绑定微信</a>
        <?php }?>
      </div>
			<?php }?>

            <div class="comindex_info_box">
                <div class="comindex_info_logo">
                    <div class="comindex_info_logo_img">
                        <a href="index.php?c=uppic" class="">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" width="100" height="100" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
','2')" /></a>
                    </div>

                    <a href="index.php?c=uppic" class="comindex_info_logo_a cblue">修改LOGO</a>
                </div>

                <div class="comindex_comname">
                    <?php if ($_smarty_tpl->tpl_vars['company']->value['name']) {?> 
						<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>

						<?php if ($_smarty_tpl->tpl_vars['company_rating']->value['com_pic']) {?> 
							<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['company_rating']->value['com_pic'];?>
" width="16" >
						<?php }?>
						
					<?php } else { ?>
						<a href="index.php?c=info" style="color:#f60; text-decoration:underline">您还未完善企业信息，点击完善！</a>
                    <?php }?>
                   
                </div>
                <div class="com_m_index_vip_box">
                    我的服务：<span class="com_m_index_vip_box_c"><?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>
</span>&nbsp;&nbsp;&nbsp; 会员服务时间：
                    <span class="f60">
						<em class="com_m_index_vip_box_c_3">
						<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>time()) {?>
							<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y.%m.%d');?>
-</em><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');?>

						<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']==0) {?>
							<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y.%m.%d');?>
-</em>永久
						<?php } else { ?>
							<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y.%m.%d');?>
-</em><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y.%m.%d');?>

						<?php }?>
					</span>

                    <a href="index.php?c=right" class="com_m_index_vip_sj"><i class="com_m_index_vip_sj_icon"></i>升级VIP会员</a>
                    <a href="index.php?c=right&act=added" target="_blank" class="com_m_index_vip_a">购买增值包</a>
                </div>
                <div class="comindex_rz ">
                    <?php if ($_smarty_tpl->tpl_vars['company']->value['email_status']=="1") {?>
                    <a title="邮件已验证" href="index.php?c=binding" class="comindex_rz_a">
                        <i class="comindex_rz_icon comindex_rz_yxyrz"></i>邮箱已验证
                    </a>
                    <?php } else { ?>
                    <a title="邮件未验证" href="index.php?c=binding" class="comindex_rz_a">
                        <i class="comindex_rz_icon comindex_rz_yxwrz"></i>邮箱未验证
                    </a>
                    <?php }?> <?php if ($_smarty_tpl->tpl_vars['company']->value['moblie_status']=="1") {?>
                    <a title="手机已验证" href="index.php?c=binding" class="comindex_rz_a">
                        <i class="comindex_rz_icon comindex_rz_sjyrz"></i>手机已验证
                    </a>
                    <?php } else { ?>
                    <a title="手机未验证" href="index.php?c=binding" class="comindex_rz_a">
                        <i class="comindex_rz_icon comindex_rz_sjwrz"></i>手机未验证
                    </a>
                    <?php }?> <?php if ($_smarty_tpl->tpl_vars['company']->value['yyzz_status']=="1") {?>
                    <a title="营业执照已验证" href="index.php?c=binding" id="biza" class="comindex_rz_a">
                        <i class="comindex_rz_icon comindex_rz_zzyrz"></i>营业执照已验证
                    </a>
                    <?php } else { ?>
                    <a title="营业执照未验证" href="index.php?c=binding" id="biza" class="comindex_rz_a">
                        <i class="comindex_rz_icon comindex_rz_zzwrz"></i>营业执照未验证
                    </a>
                    <?php }?>
                </div>
                <div class="comindex_cz">
                    <div class="comindex_cz_list">
                        <a href="index.php?c=info" class="comindex_cz_a cblue"><i class="comindex_cz_icon"></i>编辑资料</a>
                        <i class="comindex_cz_line">|</i>
                        <a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$uid`'),$_smarty_tpl);?>
" target="_blank" class="comindex_cz_a cblue "><i class="comindex_cz_icon comindex_cz_icon_yl"></i>预览主页</a>
                        <i class="comindex_cz_line">|</i>
                        <a href="index.php?c=comtpl" class="comindex_cz_a cblue">
                            <i class="comindex_cz_icon comindex_cz_icon_set"></i>模板设置</a>
                             <div class="com_index_sign_box">
						<div class="com_index_sign"><?php echo smarty_function_sign(array(),$_smarty_tpl);?>
</div>
					</div>
                    </div>
                </div>

            

               

                <i class="com_index_line"></i>
                <div class="comindex_money">
                    <div class="comindex_money_h1">可用<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</div>
                    <div class="comindex_money_m">
                        <span id="integral" class="comindex_money_n"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</span><em class="comindex_money_m"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];?>
</em>
                    </div>
                    <div class="comindex_money_zt"> 已支付订单
                        <a href="index.php?c=paylog" style="color:red"><?php echo $_smarty_tpl->tpl_vars['payed']->value;?>
</a><i class="comindex_cz_line">|</i>未付款
                        <a href="index.php?c=paylog" style="color:red"><?php echo $_smarty_tpl->tpl_vars['paying']->value;?>
</a>
                    </div>
                    <div class="comindex_money_pd">
                        <a href="index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
                        <a href="index.php?c=paylog&consume=ok" class="comindex_money_pd_a cblue">明细</a>
                        <a href="index.php?c=integral" class="comindex_money_pd_a cblue">赚<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</a>
                    </div>
                    <div class="comindex_money_sy">
                        <a href="index.php?c=integral_reduce">消费规则>></a>
                    </div>
                </div>
            </div>

            <div class="clear"></div>
            <div class="index_banner"><a href="index.php?c=right"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/banner_hy.png"></a></div>
            <div class="comindex_box">
                <div class="yun_m_index_date_box"style="position:relative"><div class="comindex_logintime">上次登录时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['member']->value['login_date'],'%Y-%m-%d %H:%M');?>
 </div>
                    <div class="yun_m_index_date_box_tit" > 招聘管理 </div>
                    <div class="yun_m_index_date_list">
                        <a href="index.php?c=hr">
                            <div class="yun_m_index_date_n">
                                <span class="yun_m_index_date_n_m"><?php echo $_smarty_tpl->tpl_vars['des_resume']->value;?>

								<?php if ($_smarty_tpl->tpl_vars['de_resume']->value>0) {?>
									<i class="yun_m_index_data_list_n_new"><?php echo $_smarty_tpl->tpl_vars['de_resume']->value;?>
</i>
								<?php }?></span></div>
                            <div class="yun_m_index_datename">收到简历</div>
                        </a>
                    </div>
                    <a href="index.php?c=down">
                        <div class="yun_m_index_date_list">
                            <div class="yun_m_index_date_n"> <?php echo $_smarty_tpl->tpl_vars['down_resume']->value;?>
</div>
                            <div class="yun_m_index_datename">下载简历</div>
                        </div>
                    </a>
                    <a href="index.php?c=look_resume">
                        <div class="yun_m_index_date_list">
                            <div class="yun_m_index_date_n"> <?php echo $_smarty_tpl->tpl_vars['look_resume']->value;?>
</div>
                            <div class="yun_m_index_datename">浏览记录</div>
                        </div>
                    </a>
                    <a href="index.php?c=attention_me">
                        <div class="yun_m_index_date_list yun_m_index_date_list_end">
                            <div class="yun_m_index_date_n"> <?php echo $_smarty_tpl->tpl_vars['company']->value['ant_num'];?>
</div>
                            <div class="yun_m_index_datename">关注记录</div>
                        </div>
                    </a>
                </div>
                <div class="clear"></div>

                <div class="com_m_index_vip">
                    <div class="yun_m_index_date_box_tit mt20" style="position:relative; padding-bottom:10px;"> 简历速配
                        <a href="index.php?c=attention_me" class="com_m_index_vip_look" target="_blank">查看关注我公司的人才>></a>
                    </div>
                    <div id="resumelist" class="com_m_index_resume">

                        <div id="noresumelist" class="msg_no none">根据您的招聘需求，暂未匹配到合适的简历！ </div>
                    </div>
                </div>
                <div class="com_m_index_vip_right">
					
                    <div class="com_m_index_kjcz">
                        <div class="com_m_index_kjcz_tit"> 快捷操作 </div>
                        <div class="com_m_index_kjcz_p">
                            <a href="javascript:;" onclick="return RefreshAll('<?php echo $_smarty_tpl->tpl_vars['jobids']->value;?>
');"><i class="com_m_index_kjcz_p_icon"></i>刷新职位</a>
                            <input type="hidden" id="refreshjobids" value="" />
                        </div>
                        <div class="com_m_index_kjcz_p">
                            <a href="javascript:void(0)" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;"><i class="com_m_index_kjcz_p_icon com_m_index_kjcz_p_icon_fb"></i>发布职位</a>
                        </div>
                        <div class="com_m_index_kjcz_p">
                            <a href="index.php?c=job&w=1"> <i class="com_m_index_kjcz_p_icon com_m_index_kjcz_p_icon_zd"></i>置顶职位</a>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['guweninfo']->value['id']) {?>
                    <div class="com_index_kf mt20">
                        <div class="com_m_index_h1"><span class="com_m_index_h1_s" style="font-size:14px;">Hi,我是您的客服经理</span></div>
                        <div class="com_index_kf_box">
                            <div class="com_index_kf_box_user">
                                <div class="com_index_kf_box_user_photo">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['logo'];?>
" style="width:64px;height:64px">
                                </div>
                                <div class="com_index_kf_box_username"><?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['username'];?>
</div>
                                <div class="">
                                    <?php if ($_smarty_tpl->tpl_vars['guweninfo']->value['qq']) {?>
                                    <a target="_blank" href="tencent://message/?uin=<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['qq'];?>
&Site=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
&Menu=yes">
                                        <img border="0" src="http://wpa.qq.com/pa?p=1:<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['qq'];?>
:12" alt="点击这里给我发消息"></a>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="com_index_kf_p">电话：<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['mobile'];?>
</div>
                            <div class="com_index_kf_p">微信：<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['weixin'];?>
</div>
                            <div class="com_index_kf_p">Q Q：<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['qq'];?>
</div>
                            <div class="com_index_kf_p">
                                <?php if ($_smarty_tpl->tpl_vars['atn']->value['uid']) {?>
                                <a href="javascript:void(0)" class="com_index_kf_dz">
                                    <i class="com_index_kf_dz_icon"></i>已点赞
                                </a>
                                <?php } else { ?>
                                <a href="javascript:void(0)" onclick="zan('<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['id'];?>
');" class="com_index_kf_dz">
                                    <i class="com_index_kf_dz_icon"></i>点赞
                                </a>
                                <?php }?> <?php if (is_array($_smarty_tpl->tpl_vars['report']->value)&&!$_smarty_tpl->tpl_vars['report']->value['result']) {?>
                                <a href="index.php?c=report&act=show" class="com_index_kf_ts">
                                    <i class="com_index_kf_ts_icon"></i>已投诉
                                </a>
                                <?php } else { ?>
                                <a href="javascript:void(0)" onclick="reportgw('<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['id'];?>
','投诉顾问');" class="com_index_kf_ts"><i class="com_index_kf_ts_icon"></i>投诉</a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="com_index_kf mt20">
                        <div class="com_m_index_h1"><span class="com_m_index_h1_s">招聘顾问</span></div>
                        <div class="com_index_kf_box">
                            <div class="com_index_kf_box_user">
                                <div class="com_index_kf_box_user_photo">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_guwen'];?>
" style="width:64px;height:64px">
                                </div>
                                <div class="com_index_kf_box_username">网站客服</div>
                                <div class="">
                                    <?php if ($_smarty_tpl->tpl_vars['kfqq']->value) {?>
                                    <a target="_blank" href="tencent://message/?uin=<?php echo $_smarty_tpl->tpl_vars['kfqq']->value;?>
&Site=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
&Menu=yes">
                                        <img border="0" src="http://wpa.qq.com/pa?p=1:<?php echo $_smarty_tpl->tpl_vars['kfqq']->value;?>
:12" alt="点击这里给我发消息"></a>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="com_index_kf_p">电话：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
                            <div class="com_index_kf_p">手机：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webmoblie'];?>
</div>
                            <div class="com_index_kf_p">Q Q：<?php echo $_smarty_tpl->tpl_vars['kfqq']->value;?>
</div>
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['wx_name']) {?>
                            <div class="com_index_kf_p">微信：<?php echo $_smarty_tpl->tpl_vars['config']->value['wx_name'];?>
</div>
                            <?php }?>
                        </div>
                    </div>
                    <?php }?>
                    <div class="index_wx_box">
                        <div class="index_wx_box_ewm"> <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="80" height="80"></div>
                        <div class="index_wx_box_tit">微信招聘 </div>
                        扫码分享微信朋友圈， 招人更简单
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

 <div id="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['id'];?>
" style="display:none;">
    <div class="Binding_pop_box" style="padding:10px;width:350px;height:200px; background:#fff;">

        <div class="complaint_hi">尊敬的用户您好！</div>
        <div class="complaint_p">为了能够给您提供高质量的服务，反馈具体情况，我们会第一时间给您满意的答复！</div>
        <div class="complaint_p_gw" style="padding:10px 0;color:#f00">您要投诉的顾问是：<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['username'];?>
</div>
        <div class="popjb_tip"></div>

        <div class="">
            <textarea id="reason" name="reason" class="complaint_text"></textarea>
        </div>
        <div class="complaint_bot">
            <input class="com_pop_bth_qd" onclick="reportSub('index.php?c=report')" type="button" value="确定">
            <input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['id'];?>
" id='eid' name='eid'>
            <input class="com_pop_bth_qx" type="button" value="取消" onclick="layer.close($('#layindex').val());">
        </div>
    </div>
</div>
 
 
<div id="shuaxin" style="display:none;">
    <div class="sx_pd">
        <div class="sx_top">
            <dl>
                <dt></dt>
                <dd>
                    <div>今天还没刷新，刷新职位将<em class="sx_bot_or">职位排名提前</em><br/>让人才更容易看到你，<em class="sx_bot_or">提高职位申请率！</em></div>
                    <div class="sx_top_t">
                        <em class="sx_top_t_tt">刷新前请确认以下信息准确完整：</em>
						<?php if ($_smarty_tpl->tpl_vars['company']->value['linktel']) {?>
							<p>联系电话：<?php echo $_smarty_tpl->tpl_vars['company']->value['linktel'];?>
</p>
						<?php } elseif ($_smarty_tpl->tpl_vars['company']->value['linkphone']) {?>
							<p>联系电话：<?php echo $_smarty_tpl->tpl_vars['company']->value['linkphone'];?>
</p>
						<?php }?>
                        <p>上次刷新时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['company']->value['lastupdate'],"%Y-%m-%d %H:%M:%S");?>
</p>
                        <p>招聘职位：<?php echo $_smarty_tpl->tpl_vars['jobnames']->value;?>
 </p>
                    </div>
                </dd>
            </dl>
        </div>
    </div>

    <div class="sx_bot">
        <a class="sx_bot_sx" href="javascript:void(0)" onclick="RefreshAll('<?php echo $_smarty_tpl->tpl_vars['jobids']->value;?>
');">刷新</a>
        <a class="sx_bot_qx" href="javascript:void(0)">取消</a>
    </div>

</div>

<div id="updaterating" style="display:none;">
    <div class="sx_pd">
        <div class="sx_top">
            <dl>
                <dt></dt>
                <dd>
                    <div>
                        <em class="sx_top_t_tt">尊敬的企业用户您好！</em>
                    </div>
                    <div class="sx_top_t">很抱歉，你的会员<em class="sx_bot_or">已到期</em><br/> 
                    	服务时间：
                        <em class="sx_bot_or"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y.%m.%d');?>
-<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');?>
</em>
                    </div>
                    <div class="sx_top_t">
                     	<p>为了更好地使用招聘服务，请先 <a href="index.php?c=right" style="color: red;">续费会员</a> ！</p>
                    </div>

                </dd>
            </dl>
        </div>
    </div>

    <div class="sx_bot">
        <a class="sx_bot_sx" href="index.php?c=right">续费</a>
        <a class="sx_bot_qx" href="javascript:void(0)">取消</a>
    </div>

</div>
<?php if ($_smarty_tpl->tpl_vars['qrcode']->value) {?>
<div id="wxbd" style="display:none;">
	<div class="yun_wxbd_img"> 
		<img src="<?php echo $_smarty_tpl->tpl_vars['qrcode']->value;?>
" width="100" height="100" />
	</div>
	<div class="yun_wxbd_tit">微信扫一扫</div>
	<div class="yun_wxbd_p">招聘人才，消息先人一步</div>
	<div class="yun_wxbd_ok">
		<a class="sx_bot_qx" href="javascript:void(0)" style=" background:none; margin-left:0px;height:20px; line-height:20px;">好，知道了</a>
	</div>
</div>
<?php }?>
<?php echo '<script'; ?>
 type="text/javascript">
    function RefreshAll(id) {
        var chk_value = [];
        chk_value = id.split(",");

        if(chk_value.length == 0) {
            layer.msg("您暂无发布中的职位！", 2, 8);
            return false;
        } else {
            
            $.post(weburl + '/index.php?m=ajax&c=ajax_day_action_check', { 'type': 'refreshjob' }, function(data) {
				layer.closeAll('loading');
				data = eval('(' + data + ')');
				if(data.status == -1) {
					layer.msg(data.msg, 2, 8);
				} else if(data.status == 1) { 
					$("#refreshjobids").val(chk_value.join(','));
					var jobid = $("#refreshjobids").val();
					var breakjob_num = '<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>
';
					var sxdj = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_jobefresh'];?>
';
					var online = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
					var pro = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';
					var num = accSub(chk_value.length, breakjob_num);
					var sxneed = accMul(sxdj, num);
					if(online == 3) {
						var sxneed = accMul(sxneed, pro);
					}
					var ajaxUrl = weburl + "/member/index.php?c=job&act=refresh_job";
					$.post(ajaxUrl, {
						jobid: jobid
					}, function(data) {
						data = eval('(' + data + ')');
						if(data.error == 1) {
							layer.msg(data.msg, 2, 9, function() {
								window.location.href = '';
							});
						} else if(data.error == 2) {

							if(online == 3) {
								var msg = '很抱歉，您的套餐已用完，继续操作将会消费 <span class="job_add_tck_bq_money">' + sxneed + ' </span>积分';
							} else {
								var msg = '很抱歉，您的套餐已用完，继续操作将会消费 <span class="job_add_tck_bq_money">' + sxneed + ' </span>元';
							}

							var msglayer = layer.open({
								type: 1,
								title: '刷新职位',
								closeBtn: 1,
								border: [10, 0.3, '#000', true],
								area: ['550px', 'auto'],
								content: $("#tcmsg")
							});

							$("#msg_show").html(msg);
							$("#pay_jobid").val(chk_value);
							$("#pay_need").val(sxneed);
							$("#btn_value").html('<a href="javascript:void(0);" onclick="onRefresh();">确定</a>');

						} else {
							if(data.url) {
								layer.msg(data.msg, 2, 9, function() {
									window.location.href = data.url;
								});
							} else {
								layer.msg(data.msg, 2, 8);
							}
						}
					});
				}
			}); 
        }
    }
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    var jobrefresh = '<?php echo $_COOKIE['jobrefresh'];?>
';

    layui.use(['layer'], function() {
        var layer = layui.layer,
            $ = layui.$;

        '<?php if ($_smarty_tpl->tpl_vars['company']->value['hy']!=''&&$_smarty_tpl->tpl_vars['norefresh']->value!=1&&$_smarty_tpl->tpl_vars['normal_job_num']->value!=0&&$_smarty_tpl->tpl_vars['un_refreshjob_num']->value!=0&&$_COOKIE['jobrefresh']!=1) {?>'

			var shuaxinlayer = layer.open({
				type: 1,
				title: '刷新职位',
				closeBtn: 0,
				border: [10, 0.3, '#000', true],
				area: ['500px', 'auto'],
				content: $("#shuaxin")
			});

			$(".sx_bot_qx").click(function() {
				layer.close(shuaxinlayer);
			})

        '<?php } elseif ($_smarty_tpl->tpl_vars['norefresh']->value==1&&$_COOKIE['jobrefresh']!=1) {?>'

			var updatelayer = layer.open({
				type: 1,
				title: '升级会员',
				closeBtn: 0,
				border: [10, 0.3, '#000', true],
				area: ['500px', 'auto'],
				content: $("#updaterating")
			});

			$(".sx_bot_qx").click(function() {
				layer.close(updatelayer);
			})
		
		'<?php } elseif ($_smarty_tpl->tpl_vars['norefresh']->value!=1&&$_smarty_tpl->tpl_vars['company']->value['hy']!=''&&$_smarty_tpl->tpl_vars['normal_job_num']->value!=0&&$_COOKIE['jobrefresh']!=1&&$_smarty_tpl->tpl_vars['member']->value['wxid']=='') {?>'
      '<?php if ($_smarty_tpl->tpl_vars['qrcode']->value) {?>'
			var wxlayer = layer.open({
				type: 1,
				title: '绑定微信',
				closeBtn: 0,
				border: [10, 0.3, '#000', true],
				area: ['300px', 'auto'],
				content: $("#wxbd")
			});

			$(".sx_bot_qx").click(function() {
				layer.close(wxlayer);
			})
      '<?php }?>'
        '<?php }?>'
    });
 
	'<?php if ($_smarty_tpl->tpl_vars['jobs']->value) {?>'
    $(function() {
        hsresumelist();
    })
    '<?php }?>'

	$(document).ready(function() {
 		$('.wxtitle').click(function(){
			var wxlayer = layer.open({
				type: 1,
				title: '绑定微信',
				closeBtn: 0,
				border: [10, 0.3, '#000', true],
				area: ['300px', 'auto'],
				content: $("#wxbd")
			});

			$(".sx_bot_qx").click(function() {
				layer.close(wxlayer);
			})
		})
	})

    function reportgw(eid, title) {
        var layindex = $.layer({
            type: 1,
            title: title,
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['400px', '300px'],
            page: {
                dom: "#" + eid
            }
        });
        $("#layindex").val(layindex);
    }

    function reportSub(url) {
        var reason = $("#reason").val();
        var eid = $("#eid").val();
        if(reason == '') {
            layer.msg('请填写投诉内容！', 2, 8);
            return false;
        }
        $.post(url, {
            reason: reason,
            eid: eid
        }, function(data) {
            layer.close($('#layindex').val());
            if(data == '0') {
                layer.msg('投诉失败！', 2, 8);
            } else if(data == '1') {
                layer.msg('投诉成功！', 2, 9, function() {
                    window.location.reload();
                });
            } else if(data == '2') {
                layer.msg('已投诉成功，等待管理员回复！', 2, 8);
            }
        });
    }

    function zan(id) {
        $.post("index.php?m=ajax&c=guwenZan", {
            id: id
        }, function(data) {
            if(data == '2') {
                layer.msg('请不要重复点赞！', 2, 8);
            } else if(data == '1') {
                layer.msg('点赞成功！', 2, 9, function() {
                    window.location.reload();
                });
            }
        });
    }

    function hsresumelist() {
        $.get('index.php?c=index&act=resumeajax', {
            rand: Math.random()
        }, function(data) {
            var res = JSON.parse(data);
            if(res.list.length > 0) {
                var html = '';
                for(var i = 0; i < res.list.length; i++) {
                    html += '<div class="com_index_rue_list"><dl>';
                    html += '<dt><a href="' + res.list[i].resumeurl + '" target="_blank"><img src="' + res.list[i].photo + '" width="40" height="40" title="' + res.list[i].username_n + '"/></a></dt>';
                    html += '<dd><strong><a class="blod" href="' + res.list[i].resumeurl + '" target="_blank" title="' + res.list[i].username_n + '">' + res.list[i].username_n + '</a></strong>';
                    html += '<div class="com_index_rue_list_js">' + res.list[i].cityname + '<i class="com_index_rue_listline">|</i>' + res.list[i].edu_n + '<i class="com_index_rue_listline">|</i>' + res.list[i].exp_n + '</div>';
                    html += '<div class="com_index_rue_list_yx"><span class="com_index_rue_list_yx_s">意向职位：</span><span class="comn_index_user">' + res.list[i].jobname + '</span></div></dd></dl></div>';
                }
                $("#resumelist").prepend(html);
            } else {
                $("#noresumelist").removeClass('none');
            }
        })
    }
    function notweixin(){
      layer.msg('微信公众号暂未绑定！', 2,8);
    }
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/com_tc_server.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
