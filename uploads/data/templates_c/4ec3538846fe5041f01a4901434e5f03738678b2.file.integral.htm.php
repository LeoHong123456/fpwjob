<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 18:24:45
         compiled from "/www/fpwjob/uploads/app/template/member/com/integral.htm" */ ?>
<?php /*%%SmartyHeaderCode:16371326295dc5426d38bc11-44017357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ec3538846fe5041f01a4901434e5f03738678b2' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/integral.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16371326295dc5426d38bc11-44017357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'statusList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc5426d41e965_38668533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc5426d41e965_38668533')) {function content_5dc5426d41e965_38668533($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
    <div class="admin_mainbody">
        <style>.my_table_msg th {text-align: right}</style>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class=right_box>
            <div class=admincont_box>
                <div class="yun_com_tit"><span class="yun_com_tit_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
管理</span></div>
                <div class="job_list_tit">
                    <ul class="">
                        <li <?php if ($_GET['c']=="integral") {?>class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=integral"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
任务</a>
                        </li>
                        <li <?php if ($_GET['c']=="integral_reduce") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=integral_reduce">消费规则</a>
                        </li>
                        <li <?php if ($_GET['c']=="reward_list") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=reward_list"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换</a>
                        </li>
                    </ul>
                </div>
                <div class="com_body">
                    <div class="admin_new_tip mt20">
                        <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                        <div class="admin_new_tip_list_cont">
                            <div class="admin_new_tip_list">做任务，赚<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 </div>
                        </div>
                    </div>

                    <div class="integral_cont">
						<table class="integral_table" cellpadding="1" cellspacing="1">
							<tr><th>任务</th><th width="200">奖励</th><th width="200">操作</th></tr>
							<tr>
								<td><span class="integral_table_name integral_table_name_ws">完善基本资料</span></td>
								<td align="left">
									<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_userinfo'];?>
</em>
									<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

								</td>
								<td align="center">
									<span class="integral_list_bth_s">
										<?php if ($_smarty_tpl->tpl_vars['statusList']->value['baseInfo']) {?>
											已完善
										<?php } else { ?> 
											<a href="index.php?c=info" target="_blank" class="integral_list_bth_a">立即完善</a> 
										<?php }?>
									</span>
								</td>
							</tr>
							<tr>
								<td><span class="integral_table_name integral_table_name_logo">上传企业logo</span></td>
								<td align="left">
									<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_avatar'];?>
</em>
									<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

								</td>
								<td align="center">
									<span class="integral_list_bth_s">
										<?php if ($_smarty_tpl->tpl_vars['statusList']->value['logo']) {?>
											已上传
										<?php } else { ?> 
											<a href="index.php?c=uppic" target="_blank"  class="integral_list_bth_a">上传logo</a> 
										<?php }?> 
									</span>
								</td>
							</tr>
             
							<tr>	
								<td><span class="integral_table_name integral_table_name_yq">邀请朋友注册</span></td>
								<td align="left">
									<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_invite_reg'];?>
</em>
									<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 
								</td> 
								<td  align="center">
									<span class="integral_list_bth_s">
										<a href="<?php echo smarty_function_url(array('m'=>'invitereg'),$_smarty_tpl);?>
" target="_blank" class="integral_list_bth_a">现在就邀请</a>
									</span>
								</td>
                            </tr>

                            <tr>
								<td><span class="integral_table_name integral_table_name_dl">每天第一次登录</td>
								<td align="left">
									<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_login'];?>
</em>
									<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

								</td> 
								<td align="center"><span class="integral_list_bth_s">今日已登录 </span></td>
                            </tr>

                            <tr>
								<td><span class="integral_table_name integral_table_name_qd">每日签到</span></td>
								<td align="left">
									<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_signin'];?>
</em>
									<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

								</td> 
								<td align="center">
									<span class="integral_list_bth_s"> 
										<?php if ($_smarty_tpl->tpl_vars['statusList']->value['signin']) {?>
											今日已签到
										<?php } else { ?> 
											<a href="index.php" target="_blank"  class="integral_list_bth_a">去签到</a> 
										<?php }?>
									</span>
								</td>
                            </tr>

                            <tr>
								<td><span class="integral_table_name integral_table_name_yx">认证电子邮箱</span></td>
								<td align="left">
									<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_emailcert'];?>
</em>
									<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 
								</td> 
								<td align="center">
									<span class="integral_list_bth_s">
										<?php if ($_smarty_tpl->tpl_vars['statusList']->value['emailChecked']) {?>
											已验证
										<?php } else { ?> 
											<a href="index.php?c=binding" target="_blank"  class="integral_list_bth_a">邮箱认证</a> 
										<?php }?>
									</span>
								</td>
                            </tr>

                            <tr>
								<td><span class="integral_table_name integral_table_name_sj">认证手机号码</span></td>
								<td align="left">
									<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_mobliecert'];?>
</em>
									<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

								</td> 
								<td align="center">
									<span class="integral_list_bth_s">
										<?php if ($_smarty_tpl->tpl_vars['statusList']->value['phoneChecked']) {?>
											已验证
										<?php } else { ?> 
											<a href="index.php?c=binding" target="_blank"  class="integral_list_bth_a">手机验证</a>
										<?php }?> 
									</span>
								</td>
                            </tr>

                            <tr>
								<td><span class="integral_table_name integral_table_name_map">设置企业地图</span></td>
								<td align="left">
								   <em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_map'];?>
</em>
								   <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

								</td> 
								<td align="center">
									<span class="integral_list_bth_s">
										<?php if ($_smarty_tpl->tpl_vars['statusList']->value['map']) {?>
											已设置
										<?php } else { ?> 
											<a href="index.php?c=map" target="_blank"  class="integral_list_bth_a">设置地图</a> 
										<?php }?> 
									</span>
								</td>
                            </tr>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_banner_type']=='1') {?>
								<tr>
									<td><span class="integral_table_name integral_table_name_hf">上传企业横幅</span></td>
									<td align="left">
										<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_banner'];?>
</em>
										<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

									</td> 
									<td align="center">
										<span class="integral_list_bth_s"> 
											<?php if ($_smarty_tpl->tpl_vars['statusList']->value['banner']) {?>
												<a href="index.php?c=banner" target="_blank" class="integral_list_bth_a">更新横幅</a>
											<?php } else { ?> 
												<a href="index.php?c=banner" target="_blank" class="integral_list_bth_a">上传横幅</a>
											<?php }?>
										</span>
									</td>
								</tr>
                            <?php }?>
                            <tr>
								<td><span class="integral_table_name integral_table_name_zz">认证营业执照</span></td>
								<td align="left">
									<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_comcert'];?>
</em>
									<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

								</td> 
								<td align="center">
									<span class="integral_list_bth_s">
										<?php if ($_smarty_tpl->tpl_vars['statusList']->value['yyzz']) {?>
											已验证
										<?php } else { ?> 
											<a href="index.php?c=binding" target="_blank" class="integral_list_bth_a">认证营业执照</a>
										<?php }?>
									</span>
								</td>
                            </tr>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_question_type']==1) {?> 
								<?php if ($_smarty_tpl->tpl_vars['statusList']->value['question']) {?>
									<tr>
										<td><span class="integral_table_name integral_table_name_fb">发布问题</span></td>
										<td align="left">
											<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_question'];?>
</em>
											<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

										</td> 
										<td  align="center">
											<span class="integral_list_bth_s">
												<a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'addquestion'),$_smarty_tpl);?>
" target="_blank"  class="integral_list_bth_a">发布问题</a>
											</span>
										</td>
									</tr>
								<?php } else { ?>
									<tr>
										<td><span class="integral_table_name integral_table_name_fb">发布问题</span></td>
										<td align="left">
											<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_question'];?>
</em>
											<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

										</td> 
										<td align="center"><span class="integral_list_bth_s">今日已发布</span></td>
									</tr>
								<?php }?> 
							<?php }?> 
							
							<?php if ($_smarty_tpl->tpl_vars['config']->value['integral_answer_type']==1) {?> 
								<?php if ($_smarty_tpl->tpl_vars['statusList']->value['answer']) {?>
									<tr>
										<td><span class="integral_table_name integral_table_name_hd">回答问题</span></td>
										<td align="left">
											<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answer'];?>
</em>
											<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

										</td> 
										<td  align="center">
											<span class="integral_list_bth_s">
												<a href="<?php echo smarty_function_url(array('m'=>'ask'),$_smarty_tpl);?>
#last-question" target="_blank"  class="integral_list_bth_a">回答问题</a>
											</span>
										</td>
									</tr>
								<?php } else { ?>
									<tr>
										<td><span class="integral_table_name integral_table_name_hd">回答问题</span></td>
										<td align="left">
											<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answer'];?>
</em>
											<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

										</td> 
										<td align="center"><span class="integral_list_bth_s">今日已回答</span></td>
									</tr>
								<?php }?> 
							<?php }?> 
								
							<?php if ($_smarty_tpl->tpl_vars['config']->value['integral_answerpl_type']==1) {?> 
								<?php if ($_smarty_tpl->tpl_vars['statusList']->value['answerpl']) {?>
									<tr>
										<td><span class="integral_table_name integral_table_name_pl">评论回答</span></td>
										<td align="left">
											<em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answerpl'];?>
</em>
											<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

										</td> 
										<td  align="center">
											<span class="integral_list_bth_s">
												<a href="<?php echo smarty_function_url(array('m'=>'ask'),$_smarty_tpl);?>
#last-question"  target="_blank"  class="integral_list_bth_a">评论回答</a>
											</span>
										</td>
									</tr>
								<?php } else { ?>
									<tr>
									   <td align="left"><span class="integral_table_name integral_table_name_pl">评论回答</span></td><td align="left"><em class="integral_table_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_answerpl'];?>
</em><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</td> 
									   <td  align="center"><span class="integral_list_bth_s">今日已评论</span></td>
									</tr>
								<?php }?> 
							<?php }?>
						</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
