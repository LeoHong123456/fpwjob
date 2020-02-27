<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-17 12:05:20
         compiled from "/www/fpwjob/uploads/app/template/member/com/paylogtc.htm" */ ?>
<?php /*%%SmartyHeaderCode:12095722905e4a1100d42a84-42568953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b868afc8d6b107daff00cbe0377916fea52e36b' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/paylogtc.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12095722905e4a1100d42a84-42568953',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statis' => 0,
    'config' => 0,
    'integral' => 0,
    'rating' => 0,
    'addjobnum' => 0,
    'addpartjobnum' => 0,
    'addltjobnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4a1101036a28_88269662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4a1101036a28_88269662')) {function content_5e4a1101036a28_88269662($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
    <div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="right_box">
            <div class="member_data">
                <div class="member_data_left">
                    <div class="member_data_left_name">尊敬的企业用户：</div>
                    <div class="mt10">您当前是：<span class="comindex_money_pd_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>
</span></div>
                    
                  		<div class="member_data_tip mt10"> 
                  			服务到期为：
                  			<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>time()) {?>
                  				<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y-%m-%d');?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');?>

                  			<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']==0) {?>
                  				<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y-%m-%d');?>
 - 永久
                  			<?php } else { ?>
                  				<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y-%m-%d');?>
 - <span class="comindex_money_pd_s"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');?>
</span>
                        
                  				<a href="index.php?c=right" class="member_data_right_a member_data_right_a_cz">立即开通</a>
                  			<?php }?>
                  		</div>
                </div>
                <div class="member_data_right">
                    <ul>
                        <li><span class="member_data_right_n"><?php echo $_smarty_tpl->tpl_vars['statis']->value['zhjf'];?>
</span>
                            <div class="member_data_right_p">可用<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</div>
                        </li>
                        <li><span class="member_data_right_n"><?php echo $_smarty_tpl->tpl_vars['integral']->value;?>
</span>
                            <div class="member_data_right_p">已消费<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</div>
                        </li>
                        <li>
                            <a href="index.php?c=pay&type=integral" class="member_data_right_a member_data_right_a_cz">充值</a>
                            <div class="member_data_right_p">
                                <a href="index.php?c=paylog&consume=ok" class="member_data_right_a cblue">明细</a>
                            </div>
                            <a href="javascript:use_card();" class="com_pay_balance_a cblue">使用充值卡充值</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="admincont_box  mt20">
                <div class="com_tit"> <span class="com_tit_span">专属服务使用情况</span> </div>
                <div class="com_body ">
                    <ul class="member_data_list">
                        <li>
                            <div class="com_pay_balance_list">
                                <div class="com_pay_balance_m">
                                    <?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?> <?php if ($_smarty_tpl->tpl_vars['rating']->value['job_num']==0) {?>
                                    <div class="com_pay_balance_n">
                                        不限
                                    </div>
                                    <?php } else { ?>
                                    <div class="com_pay_balance_n" style="font-size:21px;">
                                        <?php echo $_smarty_tpl->tpl_vars['rating']->value['job_num'];?>
次/天
                                    </div>
                                    <?php }?> <?php } else { ?>
                                    <div class="com_pay_balance_n">
                                        <?php echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];?>

                                    </div>
                                    <?php }?>
                                </div>
                                <div class="com_pay_balance_list_h1">发布职位</div>
                                <div class="com_pay_balance_list_zs">套餐总数：<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>会员有效期内不限<?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['job_num'];
}?></div>
                                <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn"></i><i class="com_body_pay_list_sl_iocn"></i> <?php if ($_smarty_tpl->tpl_vars['rating']->value['job_num']-$_smarty_tpl->tpl_vars['statis']->value['job_num']>=0) {?> 已发布：<?php echo $_smarty_tpl->tpl_vars['rating']->value['job_num']-$_smarty_tpl->tpl_vars['statis']->value['job_num'];?>
 <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['job_num']-$_smarty_tpl->tpl_vars['statis']->value['job_num']<0) {?> 增值服务：<?php echo $_smarty_tpl->tpl_vars['statis']->value['job_num']-$_smarty_tpl->tpl_vars['rating']->value['job_num'];?>
 <?php }?> </div>
                                        <div class="com_pay_balance_data_bth">
                                            <a href="javascript:void(0);" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;" class="com_pay_balance_data_btha">发布职位</a>
                                        </div>
                                </div>
                        </li>
                        <li>
                            <div class="com_pay_balance_list">
                                <div class="com_pay_balance_m">
                                    <?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?> <?php if ($_smarty_tpl->tpl_vars['rating']->value['resume']==0) {?>
                                    <div class="com_pay_balance_n">
                                        不限
                                    </div>
                                    <?php } else { ?>
                                    <div class="com_pay_balance_n" style="font-size:21px;">
                                        <?php echo $_smarty_tpl->tpl_vars['rating']->value['resume'];?>
次/天
                                    </div>
                                    <?php }?> <?php } else { ?>
                                    <div class="com_pay_balance_n">
                                        <?php echo $_smarty_tpl->tpl_vars['statis']->value['down_resume'];?>

                                    </div>
                                    <?php }?>
                                </div>
                                <div class="com_pay_balance_list_h1">下载简历</div>
                                <div class="com_pay_balance_list_zs">套餐总数：<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>会员有效期内不限<?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['resume'];
}?></div>
                                <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn"></i><i class="com_body_pay_list_sl_iocn"></i> <?php if ($_smarty_tpl->tpl_vars['rating']->value['resume']-$_smarty_tpl->tpl_vars['statis']->value['down_resume']>=0) {?> 已下载：<?php echo $_smarty_tpl->tpl_vars['rating']->value['resume']-$_smarty_tpl->tpl_vars['statis']->value['down_resume'];?>
 <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['resume']-$_smarty_tpl->tpl_vars['statis']->value['down_resume']<0) {?> 增值服务:<?php echo $_smarty_tpl->tpl_vars['statis']->value['down_resume']-$_smarty_tpl->tpl_vars['rating']->value['resume'];?>
 <?php }?> </div>
                                        <div class="com_pay_balance_data_bth">
                                            <a href="index.php?c=down" class="com_pay_balance_data_btha">查看</a>
                                        </div>
                                </div>
                        </li>
                        <li>
                            <div class="com_pay_balance_list">
                                <div class="com_pay_balance_m">
                                    <?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?> <?php if ($_smarty_tpl->tpl_vars['rating']->value['interview']==0) {?>
                                    <div class="com_pay_balance_n">
                                        不限
                                    </div>
                                    <?php } else { ?>
                                    <div class="com_pay_balance_n" style="font-size:21px;">
                                        <?php echo $_smarty_tpl->tpl_vars['rating']->value['interview'];?>
次/天
                                    </div>
                                    <?php }?> <?php } else { ?>
                                    <div class="com_pay_balance_n">
                                        <?php echo $_smarty_tpl->tpl_vars['statis']->value['invite_resume'];?>

                                    </div>
                                    <?php }?>
                                </div>
                                <div class="com_pay_balance_list_h1">邀请面试</div>
                                <div class="com_pay_balance_list_zs">套餐总数：<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>会员有效期内不限<?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['interview'];
}?></div>
                                <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn"></i><i class="com_body_pay_list_sl_iocn"></i> <?php if ($_smarty_tpl->tpl_vars['rating']->value['interview']-$_smarty_tpl->tpl_vars['statis']->value['invite_resume']>=0) {?> 已邀请：<?php echo $_smarty_tpl->tpl_vars['rating']->value['interview']-$_smarty_tpl->tpl_vars['statis']->value['invite_resume'];?>
 <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['interview']-$_smarty_tpl->tpl_vars['statis']->value['invite_resume']<0) {?> 增值服务：<?php echo $_smarty_tpl->tpl_vars['statis']->value['invite_resume']-$_smarty_tpl->tpl_vars['rating']->value['interview'];?>
 <?php }?> </div>
                                        <div class="com_pay_balance_data_bth">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/resume" class="com_pay_balance_data_btha">搜人才</a>
                                        </div>
                                </div>
                        </li>
                        <li>
                            <div class="com_pay_balance_list">
                                <div class="com_pay_balance_m">
                                    <?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?> <?php if ($_smarty_tpl->tpl_vars['rating']->value['breakjob_num']==0) {?>
                                    <div class="com_pay_balance_n">
                                        不限
                                    </div>
                                    <?php } else { ?>
                                    <div class="com_pay_balance_n" style="font-size:21px;">
                                        <?php echo $_smarty_tpl->tpl_vars['rating']->value['breakjob_num'];?>
次/天
                                    </div>
                                    <?php }?> <?php } else { ?>
                                    <div class="com_pay_balance_n">
                                        <?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>

                                    </div>
                                    <?php }?>
                                </div>
                                <div class="com_pay_balance_list_h1">刷新职位</div>
                                <div class="com_pay_balance_list_zs">套餐总数：<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>会员有效期内不限<?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['breakjob_num'];
}?></div>
                                <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn"></i><i class="com_body_pay_list_sl_iocn"></i> <?php if ($_smarty_tpl->tpl_vars['rating']->value['breakjob_num']-$_smarty_tpl->tpl_vars['statis']->value['breakjob_num']>=0) {?> 已使用：<?php echo $_smarty_tpl->tpl_vars['rating']->value['breakjob_num']-$_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>
 <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['breakjob_num']-$_smarty_tpl->tpl_vars['statis']->value['breakjob_num']<0) {?> 增值服务：<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num']-$_smarty_tpl->tpl_vars['rating']->value['breakjob_num'];?>
 <?php }?> </div>
                                        <div class="com_pay_balance_data_bth">
                                            <a href="index.php?c=job&w=1" class="com_pay_balance_data_btha">刷新职位</a>
                                        </div>
                                </div>
                        </li>
                        <li>
                            <div class="com_pay_balance_list">
                                <div class="com_pay_balance_m">
                                    <?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?> <?php if ($_smarty_tpl->tpl_vars['rating']->value['part_num']==0) {?>
                                    <div class="com_pay_balance_n">
                                        	不限
                                    </div>
                                    <?php } else { ?>
                                    <div class="com_pay_balance_n" style="font-size:21px;">
                                        <?php echo $_smarty_tpl->tpl_vars['rating']->value['part_num'];?>
次/天
                                    </div>
                                    <?php }?> <?php } else { ?>
                                    <div class="com_pay_balance_n">
                                        <?php echo $_smarty_tpl->tpl_vars['statis']->value['part_num'];?>

                                    </div>
                                    <?php }?>
                                </div>
                                <div class="com_pay_balance_list_h1">发布兼职职位</div>
                                <div class="com_pay_balance_list_zs">套餐总数：<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>会员有效期内不限<?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['part_num'];
}?></div>
                                <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn"></i> <?php if ($_smarty_tpl->tpl_vars['rating']->value['part_num']-$_smarty_tpl->tpl_vars['statis']->value['part_num']>=0) {?> 已使用：<?php echo $_smarty_tpl->tpl_vars['rating']->value['part_num']-$_smarty_tpl->tpl_vars['statis']->value['part_num'];?>
 <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['part_num']-$_smarty_tpl->tpl_vars['statis']->value['part_num']<0) {?> 增值服务：<?php echo $_smarty_tpl->tpl_vars['statis']->value['part_num']-$_smarty_tpl->tpl_vars['rating']->value['part_num'];?>
 <?php }?> </div>
                                        <div class="com_pay_balance_data_bth">
                                            <a href="javascript:void(0);" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addpartjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_partjob'];?>
','part','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" title="发布兼职" class="com_pay_balance_data_btha">发布兼职职位</a>
                                        </div>
                                </div>
                        </li>

                        <li>
                            <div class="com_pay_balance_list">
                                <div class="com_pay_balance_m">
                                    <?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?> <?php if ($_smarty_tpl->tpl_vars['rating']->value['breakpart_num']==0) {?>
                                    <div class="com_pay_balance_n">
                                        不限
                                    </div>
                                    <?php } else { ?>
                                    <div class="com_pay_balance_n" style="font-size:21px;">
                                        <?php echo $_smarty_tpl->tpl_vars['rating']->value['breakpart_num'];?>
次/天
                                    </div>
                                    <?php }?> <?php } else { ?>
                                    <div class="com_pay_balance_n">
                                        <?php echo $_smarty_tpl->tpl_vars['statis']->value['breakpart_num'];?>

                                    </div>
                                    <?php }?>
                                </div>
                                <div class="com_pay_balance_list_h1">刷新兼职职位</div>
                                <div class="com_pay_balance_list_zs">套餐总数：<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>会员有效期内不限<?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['breakpart_num'];
}?></div>
                                <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn"></i> <?php if ($_smarty_tpl->tpl_vars['rating']->value['breakpart_num']-$_smarty_tpl->tpl_vars['statis']->value['breakpart_num']>=0) {?> 已使用：<?php echo $_smarty_tpl->tpl_vars['rating']->value['breakpart_num']-$_smarty_tpl->tpl_vars['statis']->value['breakpart_num'];?>
 <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['breakpart_num']-$_smarty_tpl->tpl_vars['statis']->value['breakpart_num']<0) {?> 增值服务：<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakpart_num']-$_smarty_tpl->tpl_vars['rating']->value['breakpart_num'];?>
 <?php }?> </div>
                                        <div class="com_pay_balance_data_bth">
                                            <a href="index.php?c=partok&w=1" title="刷新兼职职位" class="com_pay_balance_data_btha">刷新兼职职位</a>
                                        </div>
                                </div>
                        </li>

                        <li>
                            <div class="com_pay_balance_list">
                                <div class="com_pay_balance_m">
                                    <?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?> <?php if ($_smarty_tpl->tpl_vars['rating']->value['zph_num']==0) {?>
                                    <div class="com_pay_balance_n">
                                        不限
                                    </div>
                                    <?php } else { ?>
                                    <div class="com_pay_balance_n" style="font-size:21px;">
                                        <?php echo $_smarty_tpl->tpl_vars['rating']->value['zph_num'];?>
次/天
                                    </div>
                                    <?php }?> <?php } else { ?>
                                    <div class="com_pay_balance_n">
                                        <?php echo $_smarty_tpl->tpl_vars['statis']->value['zph_num'];?>

                                    </div>
                                    <?php }?>
                                </div>
                                <div class="com_pay_balance_list_h1">招聘会报名次数</div>
                                <div class="com_pay_balance_list_zs">套餐总数：<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>会员有效期内不限<?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['zph_num'];
}?></div>
                                <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn"></i> <?php if ($_smarty_tpl->tpl_vars['rating']->value['zph_num']-$_smarty_tpl->tpl_vars['statis']->value['zph_num']>=0) {?> 已使用：<?php echo $_smarty_tpl->tpl_vars['rating']->value['zph_num']-$_smarty_tpl->tpl_vars['statis']->value['zph_num'];?>
 <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['zph_num']-$_smarty_tpl->tpl_vars['statis']->value['zph_num']<0) {?> 增值服务：<?php echo $_smarty_tpl->tpl_vars['statis']->value['zph_num']-$_smarty_tpl->tpl_vars['rating']->value['zph_num'];?>
 <?php }?> </div>
                                        <div class="com_pay_balance_data_bth">
                                            <a href="<?php echo smarty_function_url(array('m'=>'zph'),$_smarty_tpl);?>
" class="com_pay_balance_data_btha">查看招聘会</a>
                                        </div>
                                </div>
                        </li>
                        <li>
                            <div class="com_pay_balance_list">
                                <div class="com_pay_balance_m">
                                    <?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?> <?php if ($_smarty_tpl->tpl_vars['rating']->value['lt_job_num']==0) {?>
                                    <div class="com_pay_balance_n">
                                        不限
                                    </div>
                                    <?php } else { ?>
                                    <div class="com_pay_balance_n" style="font-size:21px;">
                                        <?php echo $_smarty_tpl->tpl_vars['rating']->value['lt_job_num'];?>
次/天
                                    </div>
                                    <?php }?> <?php } else { ?>
                                    <div class="com_pay_balance_n">
                                        <?php echo $_smarty_tpl->tpl_vars['statis']->value['lt_job_num'];?>

                                    </div>
                                    <?php }?>
                                </div>
                                <div class="com_pay_balance_list_h1">发布猎头职位</div>
                                <div class="com_pay_balance_list_zs">套餐总数：<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>会员有效期内不限<?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['lt_job_num'];
}?></div>
                                <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn"></i> <?php if ($_smarty_tpl->tpl_vars['rating']->value['lt_job_num']-$_smarty_tpl->tpl_vars['statis']->value['lt_job_num']>=0) {?> 已使用：<?php echo $_smarty_tpl->tpl_vars['rating']->value['lt_job_num']-$_smarty_tpl->tpl_vars['statis']->value['lt_job_num'];?>
 <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['lt_job_num']-$_smarty_tpl->tpl_vars['statis']->value['lt_job_num']<0) {?> 增值服务：<?php echo $_smarty_tpl->tpl_vars['statis']->value['lt_job_num']-$_smarty_tpl->tpl_vars['rating']->value['lt_job_num'];?>
 <?php }?> </div>
                                        <div class="com_pay_balance_data_bth">
                                            <a href="javascript:void(0);" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addltjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_lt_job'];?>
','lt','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;" title="新增猎头职位" class="com_pay_balance_data_btha">发布猎头职位</a>
                                        </div>
                                </div>
                        </li>
                        <li>
                            <div class="com_pay_balance_list">
                                <div class="com_pay_balance_m">
                                    <?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?> <?php if ($_smarty_tpl->tpl_vars['rating']->value['lt_breakjob_num']==0) {?>
                                    <div class="com_pay_balance_n">
                                        不限
                                    </div>
                                    <?php } else { ?>
                                    <div class="com_pay_balance_n" style="font-size:21px;">
                                        <?php echo $_smarty_tpl->tpl_vars['rating']->value['lt_breakjob_num'];?>
次/天
                                    </div>
                                    <?php }?> <?php } else { ?>
                                    <div class="com_pay_balance_n">
                                        <?php echo $_smarty_tpl->tpl_vars['statis']->value['lt_breakjob_num'];?>

                                    </div>
                                    <?php }?>
                                </div>
                                <div class="com_pay_balance_list_h1">刷新猎头职位</div>
                                <div class="com_pay_balance_list_zs">套餐总数：<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>会员有效期内不限<?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['lt_breakjob_num'];
}?></div>
                                <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn"></i> <?php if ($_smarty_tpl->tpl_vars['rating']->value['lt_breakjob_num']-$_smarty_tpl->tpl_vars['statis']->value['lt_breakjob_num']>=0) {?> 已使用：<?php echo $_smarty_tpl->tpl_vars['rating']->value['lt_breakjob_num']-$_smarty_tpl->tpl_vars['statis']->value['lt_breakjob_num'];?>
 <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['lt_breakjob_num']-$_smarty_tpl->tpl_vars['statis']->value['lt_breakjob_num']<0) {?> 增值服务：<?php echo $_smarty_tpl->tpl_vars['statis']->value['lt_breakjob_num']-$_smarty_tpl->tpl_vars['rating']->value['lt_breakjob_num'];?>
 <?php }?> </div>
                                        <div class="com_pay_balance_data_bth">
                                            <a href="index.php?c=lt_job" class="com_pay_balance_data_btha">刷新猎头职位</a>
                                        </div>
                                </div>
                        </li>
                        <li>
                            <div class="com_pay_balance_list">
                                <div class="com_pay_balance_m">
                                    <?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?> <?php if ($_smarty_tpl->tpl_vars['rating']->value['lt_resume']==0) {?>
                                    <div class="com_pay_balance_n">
                                        不限
                                    </div>
                                    <?php } else { ?>
                                    <div class="com_pay_balance_n" style="font-size:21px;">
                                        <?php echo $_smarty_tpl->tpl_vars['rating']->value['lt_resume'];?>
次/天
                                    </div>
                                    <?php }?> <?php } else { ?>
                                    <div class="com_pay_balance_n">
                                        <?php echo $_smarty_tpl->tpl_vars['statis']->value['lt_down_resume'];?>

                                    </div>
                                    <?php }?>
                                </div>
                                <div class="com_pay_balance_list_h1">下载高级简历</div>
                                <div class="com_pay_balance_list_zs">套餐总数：<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>会员有效期内不限<?php } else {
echo $_smarty_tpl->tpl_vars['rating']->value['lt_resume'];
}?></div>
                                <div class="com_pay_balance_list_p"><i class="com_body_pay_list_sl_iocn"></i> <?php if ($_smarty_tpl->tpl_vars['rating']->value['lt_resume']-$_smarty_tpl->tpl_vars['statis']->value['lt_down_resume']>=0) {?> 已使用：<?php echo $_smarty_tpl->tpl_vars['rating']->value['lt_resume']-$_smarty_tpl->tpl_vars['statis']->value['lt_down_resume'];?>
 <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value['lt_resume']-$_smarty_tpl->tpl_vars['statis']->value['lt_down_resume']<0) {?> 增值服务：<?php echo $_smarty_tpl->tpl_vars['statis']->value['lt_down_resume']-$_smarty_tpl->tpl_vars['rating']->value['lt_resume'];?>
 <?php }?> </div>
                                        <div class="com_pay_balance_data_bth">
                                            <a href="index.php?c=lt_job" class="com_pay_balance_data_btha">下载高级简历</a>
                                        </div>
                                </div>
                        </li>
                        <li>
                            <div class="com_pay_balance_list">
                                <div class="com_pay_balance_look_tq_box">
                                    <a href="index.php?c=right" class="com_pay_balance_look_tq"> 点击查看
                                        <div class="">会员套餐特权</div>
                                        <i class="com_pay_balance_look_tq_box_icon"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <?php echo '<script'; ?>
>
                        function use_card() {
                            $.layer({
                                type: 1,
                                title: '使用充值卡充值',
                                closeBtn: [0, true],
                                border: [10, 0.3, '#000', true],
                                area: ['380px', '250px'],
                                page: {
                                    dom: '#use_card'
                                }
                            });
                        }
                    <?php echo '</script'; ?>
>
                    <div id="use_card" style="display:none; width: 400px;">
                        <div class="job_box_div" style="width:340px;">
                            <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                            <form action="index.php?c=paylog&act=card" target="supportiframe" method="post" id='myform'>
                                <div class="job_box_inp" style="padding:10px 5px 5px 20px"> <span class="fltL"> 卡号：</span>
                                    <input name="card" class="com_info_text placeholder fltL" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:220px;" />
                                </div>
                                <div class="job_box_inp" style="padding:10px 5px 5px 20px"> <span class="fltL"> 密码：</span>
                                    <input name="password" class="com_info_text placeholder fltL" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:220px;" />
                                </div>
                                <span class="job_box_botton" style="width:100%;"> <a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#myform').submit()},0);">确定</a> </span>
                            </form>
                        </div>
                    </div>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
