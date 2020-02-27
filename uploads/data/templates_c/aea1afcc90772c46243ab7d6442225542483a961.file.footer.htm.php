<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:39:18
         compiled from "/www/fpwjob/uploads//app/template/member/com/footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:9755821385e2e3f468443f3-75694016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aea1afcc90772c46243ab7d6442225542483a961' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/member/com/footer.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9755821385e2e3f468443f3-75694016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'company' => 0,
    'rating_1' => 0,
    'v' => 0,
    'rating_2' => 0,
    'added' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e3f4696e0e9_71736682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e3f4696e0e9_71736682')) {function content_5e2e3f4696e0e9_71736682($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['config']->value['sy_chat_open']==1) {?>
     <?php if ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==2) {?> 
          <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_easemob.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
     <?php } elseif ($_smarty_tpl->tpl_vars['config']->value['chat_platform']==3) {?> 
          <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/chat/layerim_rongcloud.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     <?php }?> 
<?php }?>
 <input type='hidden' id="layindex" value="">

<div class="clear"></div>
<div class=footer>
    <div class=w900>
        <div class=footernav>
            <div class="footer_bot_p"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webcopyright'];
echo $_smarty_tpl->tpl_vars['config']->value['sy_webrecord'];?>
 </div>
            <div class="footer_bot_p">地址:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webadd'];?>
 电话(Tel):<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
 EMAIL:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webemail'];?>
</div>
           
        </div>
    </div>
</div>

<div class="clear"></div>

<div id="bg" <?php if ($_smarty_tpl->tpl_vars['company']->value['hy']==''&&($_GET['c']=="index"||$_GET['c']=='')) {?>style="display:block" <?php }?>></div>
<div id="uclogin" style="display:none"></div>
<div class="clear"></div>

<div style="width:550px;height:440px; background:#fff;  display: none; z-index:100000000000" id="tcmsg">
    <div class="job_add_tck">

        <div class="job_add_tck_tip">
            <div class="job_add_tck_hi"><span class="job_add_tck_hi_n">尊敬的企业用户您好！</span></div>
            <div class="job_add_tck_bq">
                <span id="msg_show">很抱歉，您的套餐已用完，请先升级会员</span>
            </div>

            <div class="job_add_tck_bth" id="btn_value">确定</div>

            <input type="hidden" id="pay_jobid" value="" />
            <input type="hidden" id="pay_need" value="" />

        </div>

        <div class="job_add_tck_cont">
            <div class="job_add_tck_fqtip">成为付费用户即可享受免费服务</div>

            <div class="job_add_tck_tc_box">
                <ul class="job_add_tck_tc_tit" id="rating_type">
                   <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==2||$_smarty_tpl->tpl_vars['config']->value['com_vip_type']==0) {?> <li class="job_add_tck_tc_tit_cur">套餐会员</li><?php }?>
                   <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==1||$_smarty_tpl->tpl_vars['config']->value['com_vip_type']==0) {?> <li <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==1) {?>class="job_add_tck_tc_tit_cur"<?php }?>>时间会员</li><?php }?>
                    <li>增值包</li>
                </ul>

                <div class="job_add_tck_tc_cont">
                    <ul class="job_add_tck_tc_list" id="rating_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==1) {?>style="display:none"<?php }?> >

                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rating_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <li>
                            <div class="job_add_tck_tc_list_tit">
                                <span class="job_add_tck_tc_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
                               
									<span class="job_add_tck_tc_jg"><em class="job_add_tck_tc_money">

									<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3&&$_smarty_tpl->tpl_vars['config']->value['member_meal']!=1) {?>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>

										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>

										<?php }?> 
											<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

									<?php } else { ?>
										￥<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>

										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>

										<?php }?> 
									<?php }?>
									</em>/ 
									<?php if ($_smarty_tpl->tpl_vars['v']->value['service_time']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['service_time'];?>
天<?php } else { ?>永久<?php }?>
									</span>
								
                                <a href="index.php?c=right" class="job_add_tck_tc_buy">购买</a>
                            </div>

                            <span class="job_add_tck_tc_s">发布职位数 <?php echo $_smarty_tpl->tpl_vars['v']->value['job_num'];?>
</span>
                            <span class="job_add_tck_tc_s">刷新职位数 <?php echo $_smarty_tpl->tpl_vars['v']->value['breakjob_num'];?>
</span>
                            <span class="job_add_tck_tc_s">下载简历数 <?php echo $_smarty_tpl->tpl_vars['v']->value['resume'];?>
</span>
                            <span class="job_add_tck_tc_s">邀请面试数 <?php echo $_smarty_tpl->tpl_vars['v']->value['interview'];?>
</span>
                            <span class="job_add_tck_tc_s">发布兼职数 <?php echo $_smarty_tpl->tpl_vars['v']->value['part_num'];?>
</span>
                            <span class="job_add_tck_tc_s">刷新兼职数 <?php echo $_smarty_tpl->tpl_vars['v']->value['breakpart_num'];?>
</span>
                            <div class="job_add_tck_tcsm">套餐说明：<?php if ($_smarty_tpl->tpl_vars['v']->value['explains']) {
echo $_smarty_tpl->tpl_vars['v']->value['explains'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['name'];
}?>
							<?php if ($_smarty_tpl->tpl_vars['v']->value['integral_buy']>0) {?>赠送<?php echo $_smarty_tpl->tpl_vars['v']->value['integral_buy'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
}?>
							<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
								<?php if ($_smarty_tpl->tpl_vars['v']->value['couponname']) {?>，现在购买，再送<?php echo $_smarty_tpl->tpl_vars['v']->value['couponname'];?>
一张，先到先得，送完为止<?php }?>
								<?php }?>
							</div>
                        </li>
                        <?php } ?>
                    </ul>
                    <ul class="job_add_tck_tc_list" id="rating_2" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==2||$_smarty_tpl->tpl_vars['config']->value['com_vip_type']==0) {?>style="display:none"<?php }?>>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rating_2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <li>
                            <div class="job_add_tck_tc_list_tit">
                                <span class="job_add_tck_tc_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
                                <span class="job_add_tck_tc_jg"><em class="job_add_tck_tc_money">
								<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3&&$_smarty_tpl->tpl_vars['config']->value['member_meal']!=1) {?>
									<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
										<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>

								   <?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>

									<?php }?>
												
								<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

								<?php } else { ?>
									￥<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
										<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>

									<?php }?>
								<?php }?>
								
								</em>/<?php if ($_smarty_tpl->tpl_vars['v']->value['service_time']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['service_time'];?>
天<?php } else { ?>永久<?php }?></span>
                                <em class="job_add_tck_tc_jg">套餐总数不限</em>
                                <a href="index.php?c=right&act=time" class="job_add_tck_tc_buy">购买</a>
                            </div>

                            <span class="job_add_tck_tc_s">发布职位 <?php if ($_smarty_tpl->tpl_vars['v']->value['job_num']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['job_num'];?>
次/日<?php } else { ?>不限<?php }?></span>
                            <span class="job_add_tck_tc_s">刷新职位 <?php if ($_smarty_tpl->tpl_vars['v']->value['breakjob_num']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['job_num'];?>
次/日<?php } else { ?>不限<?php }?></span>
                            <span class="job_add_tck_tc_s">下载简历 <?php if ($_smarty_tpl->tpl_vars['v']->value['resume']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['resume'];?>
次/日<?php } else { ?>不限<?php }?></span>
                            <span class="job_add_tck_tc_s">邀请面试 <?php if ($_smarty_tpl->tpl_vars['v']->value['interview']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['interview'];?>
次/日<?php } else { ?>不限<?php }?></span>
                            <span class="job_add_tck_tc_s">发布兼职 <?php if ($_smarty_tpl->tpl_vars['v']->value['part_num']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['part_num'];?>
次/日<?php } else { ?>不限<?php }?></span>
                            <span class="job_add_tck_tc_s">刷新兼职 <?php if ($_smarty_tpl->tpl_vars['v']->value['breakpart_num']>0) {
echo $_smarty_tpl->tpl_vars['v']->value['breakpart_num'];?>
次/日<?php } else { ?>不限<?php }?></span>
                            <div class="job_add_tck_tcsm">套餐说明：<?php if ($_smarty_tpl->tpl_vars['v']->value['explains']) {
echo $_smarty_tpl->tpl_vars['v']->value['explains'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['name'];
}?>
							<?php if ($_smarty_tpl->tpl_vars['v']->value['integral_buy']>0) {?>赠送<?php echo $_smarty_tpl->tpl_vars['v']->value['integral_buy'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
}?>
							<?php if ($_smarty_tpl->tpl_vars['v']->value['time_start']<time()&&$_smarty_tpl->tpl_vars['v']->value['time_end']>time()) {?>
								<?php if ($_smarty_tpl->tpl_vars['v']->value['couponname']) {?>，现在购买，再送<?php echo $_smarty_tpl->tpl_vars['v']->value['couponname'];?>
，先到先得，送完为止<?php }?>
							<?php }?>
							</div>
                        </li>
                        <?php } ?>
                    </ul>
                    <ul class="job_add_tck_tc_list" id="add_pack" style="display: none;">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['added']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <li>
                            <div class="job_add_tck_tc_list_tit">
                                <span class="job_add_tck_tc_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

	                                <span class="job_add_tck_tc_jg">
	                                	套餐价：<em class="job_add_tck_tc_money">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'][0];?>
</em> 元 
 	                                </span>
                                </span>
                                <a href="index.php?c=right&act=added&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="job_add_tck_tc_buy">详情</a>
                            </div>
                            
                        <div class="job_add_tck_tc_list_zzb">   
                        	下载简历：<?php echo $_smarty_tpl->tpl_vars['v']->value['resume'][0];?>
份，	邀请面试：<?php echo $_smarty_tpl->tpl_vars['v']->value['interview'][0];?>
份，	发布职位：<?php echo $_smarty_tpl->tpl_vars['v']->value['job_num'][0];?>
份， 刷新职位：<?php echo $_smarty_tpl->tpl_vars['v']->value['breakjob_num'][0];?>
份， 发布兼职：<?php echo $_smarty_tpl->tpl_vars['v']->value['part_num'][0];?>
份， 刷新兼职：<?php echo $_smarty_tpl->tpl_vars['v']->value['breakpart_num'][0];?>
份， 发布猎头职位：<?php echo $_smarty_tpl->tpl_vars['v']->value['lt_job_num'][0];?>
份， 下载高级简历：<?php echo $_smarty_tpl->tpl_vars['v']->value['lt_resume'][0];?>
份
                        </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    $("ul#rating_type").on("click", "li", function() {
        $(this).addClass("job_add_tck_tc_tit_cur");
        $(this).siblings('li').removeClass("job_add_tck_tc_tit_cur");

        var text = this.innerHTML;

        if(text == '套餐会员') {
            $("#rating_1").show();
            $("#rating_2").hide();
            $("#add_pack").hide();

        } else if(text == '时间会员') {
            $("#rating_1").hide();
            $("#rating_2").show();
            $("#add_pack").hide();

        } else if(text == '增值包') {

            $("#rating_1").hide();
            $("#rating_2").hide();
            $("#add_pack").show();

        }
    })

    var height = "300px";

    function addjob_job() {
        $.layer({
            type: 1,
            title: '发布职位',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['480px', height],
            page: {
                dom: '#issue_job'
            }
        });
    }

    function onRefresh() {
        var jobid = $("#pay_jobid").val();
        $("#sxjobid").val(jobid);

        var need = $("#pay_need").val();
        if(need != '') {
            $("#sxneed").html(need);
        }
        $.layer({
            type: 1,
            title: '刷新职位',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['480px', height],
            page: {
                dom: '#refresh'
            }
        });
    }

    function addjob_part() {
        $.layer({
            type: 1,
            title: '发布兼职',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['480px', height],
            page: {
                dom: '#issue_part'
            }
        });
    }

    function onRefreshPart() {
        var jobid = $("#pay_jobid").val();
        $("#partjobid").val(jobid);
        var need = $("#pay_need").val();
        if(need != '') {
            $("#sxpneed").html(need);
        }
        $.layer({
            type: 1,
            title: '刷新职位',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['480px', height],
            page: {
                dom: '#part_refresh'
            }
        });
    }

    function addjob_lt() {
        $.layer({
            type: 1,
            title: '发布猎头职位',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['480px', height],
            page: {
                dom: '#issue_ltjob'
            }
        });
    }

    function onRefreshLt() {
        var jobid = $("#pay_jobid").val();
        $("#sxltjobid").val(jobid);
        $.layer({
            type: 1,
            title: '刷新猎头职位',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['480px', height],
            page: {
                dom: '#ltjob_refresh'
            }
        });
    }

    function onResume_invite() {
        $.layer({
            type: 1,
            title: '邀请面试',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['480px', height],
            page: {
                dom: '#invite_server'
            }
        });
    }
<?php echo '</script'; ?>
>


</body>

</html><?php }} ?>
