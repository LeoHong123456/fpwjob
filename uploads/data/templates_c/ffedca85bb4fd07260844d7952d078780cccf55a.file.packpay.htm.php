<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 18:27:12
         compiled from "/www/fpwjob/uploads//app/template/default/public_search/packpay.htm" */ ?>
<?php /*%%SmartyHeaderCode:1172641885dc543006c2591-67913435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffedca85bb4fd07260844d7952d078780cccf55a' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/default/public_search/packpay.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1172641885dc543006c2591-67913435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'packs' => 0,
    'v' => 0,
    'key' => 0,
    'config' => 0,
    'statis' => 0,
    'com_style' => 0,
    'usertype' => 0,
    'Info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc54300838f05_09955550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc54300838f05_09955550')) {function content_5dc54300838f05_09955550($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><div class="none "  style="display:none;" id="packlist">
    <div class="Value_added">
        <div class="Value_added_mune">
            <ul class="Value_added_mune_left">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['packs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?> class="Value_added_mune_cur" <?php }?>>
                    <a href="javascript:void(0)" onclick="showleft('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
                    <i class="Value_added_bg"></i>
                </li>
                <?php } ?>
            </ul>
        </div>

        <div class="Value_added_box">
            <div class="Value_added_box_av">
                <div class="clear"></div>
                <table class="added_de_box_table" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td>
                                <div style="width:458px;">套餐内容</div>
                            </td>
                            <td>
                                <div>套餐价</div>
                            </td>
                            <td>
                                <div>会员价格</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="added_de_box_table" cellpadding="0" cellspacing="0" id="ratinglist"></table>
                <form name="alipayment" id="payform" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return payforms();">
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
                    <div class="added_de_box_fk">
                        账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：
                        <span class="added_de_box_fk_je"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 （1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
                    </div>
                    <?php }?>

                    <div class="added_de_box_fk">
                        应付<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
                        <span id="price" class="added_de_box_fk_je">0</span> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 <?php } else { ?>
                        <span id="price" class="added_de_box_fk_je">0</span>元 <?php }?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
                    <div class="added_de_box_fk">
                        抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<input type="text" id="dkjf_tc" onkeyup="checkTcNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" style="width:80px;" class="job_recom_dktext">
                    </div>
                    <div class="added_de_box_fk">
                        账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
                    </div>
                    <?php }?>

                    <div class="added_de_box_fk dkh_div_tc" style="display:none">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
后消费金额：
                        <span class="added_de_box_fk_je" id="price_dk"></span> 元
                    </div>

                    <input type="hidden" id="comservice" value="">
                    
                    <div class="job_redpack_list">
                        <div id="zftc_div" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?> style="display:none" <?php }?>>
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
                            <div class="job_redpack_list_name">支付方式：</div>
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
                            <div class="job_redpack_pay">
                                <a href="javascript:;" onclick="getOrder('wxpay');"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"> 微信支付</a>
                            </div>
                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
                            <div class="job_redpack_pay">
                                <a href="javascript:;" onclick="getOrder('alipay');"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"> 支付宝支付</a>
                            </div>
                            <?php }?> <?php } else { ?>
                            <div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
                            <?php }?>
                        </div>
                        <div id="zftc_div2" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?> style="display:none" <?php }?>>
                            <input type='button' value='确认支付' onClick="buytc_jfzf();" class='job_redpack_list_c_bth'>
                        </div>
                        <input type="hidden" value="" id="pay_type" name="pay_type" value='' />
                        <input type="hidden" name="dingdan" id="order_id" value="" />
                        <input type="hidden" value="增值包" name="subject" value='' />
                        <input type="hidden" name="pay_bank" value="directPay">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<div style="display:none;" id="downresume_pay">
    <div class="job_recom_box">

        <div class="job_recom_list" style="padding-bottom:10px; padding-top:10px;">

            <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
            <div style="padding-bottom:20px;width:100%; padding-top:10px; float:left">
                <span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
                <div class="job_recom_list_jobtime">
                    <div class="job_recom_list_jobtime_money">
                        <span class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 （1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
                    </div>
                </div>
            </div>
            <?php }?>

            <span class="job_recom_s">应付<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?></span>
            <div class="job_recom_list_jobtime">
                <div class="job_recom_list_jobtime_money">
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
                    <span id="resume_price" class="job_recom_list_jobtime_s">
                    		<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['integral_down_resume'];?>
 
                    	</span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 <?php } else { ?>
                    <span id="resume_price" class="job_recom_list_jobtime_s">
                    		<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_down_resume'];?>

                    	</span>元 <?php }?>
                </div>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
        <div class="job_recom_list">
            <span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
            <input type="text" value="" id="dkjf" name="dkjf" onkeyup="checkNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" style="width:80px;" class="job_recom_dktext">
        </div>
        <div class="job_recom_list">
            <span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
            <div class="job_recom_text_p"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
            </div>
        </div>
        <?php }?>

        <div class="job_recom_list dkh_div" style="display:none">
            <span class="job_recom_s">抵扣后金额：</span>
            <div class="job_recom_list_jobtime">
                <div class="job_recom_list_jobtime_money">
                    <span id="resum_price_dk" class="job_recom_list_jobtime_s"></span>元
                </div>
            </div>
        </div>

        <form name="alipayment" id="payform_downresume" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return payforms();">
            <div class="clear"></div>

            <div class="job_redpack_list" style="margin-top:15px;">
                <div id="zf_div" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_down_resume']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?> style="display:none" <?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
                    <div class="job_recom_s">支付方式：</div>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
                    <div class="job_redpack_pay">
                        <a href="javascript:;" onclick="getResume('wxpay');"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"> 微信支付</a>
                    </div>
                    <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
                    <div class="job_redpack_pay">
                        <a href="javascript:;" onclick="getResume('alipay');"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"> 支付宝支付</a>
                    </div>
                    <?php }?> <?php } else { ?>
                    <div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
                    <?php }?>
                </div>
                <div id="zf_div2" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_down_resume']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?> style="display:none" <?php }?>>
                    <input type='button' value='确认支付' onClick="downresume_jfzf();" class='job_redpack_list_c_bth'>
                </div>

                <input type="hidden" value="" id="pay_type" name="pay_type" value='' />
                <input type="hidden" name="dingdan" id="order_downresume_id" value="" />
                <input type="hidden" value="下载简历金额" name="subject" value='' />
                <input type="hidden" name="pay_bank" value="directPay">
            </div>
        </form>
    </div>
</div>

<div style="display:none;" id="downltresume_pay">
    <div class="job_recom_box">

        <div class="job_recom_list" style="padding-bottom:10px; padding-top:10px;">

            <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
            <div style="padding-bottom:20px;width:100%; padding-top:10px; float:left">
                <span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
                <div class="job_recom_list_jobtime">
                    <div class="job_recom_list_jobtime_money">
                        <span class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 （1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
                    </div>
                </div>
            </div>
            <?php }?>

            <span class="job_recom_s">应付<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?></span>
            <div class="job_recom_list_jobtime">
                <div class="job_recom_list_jobtime_money">
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
                    <span id="resume_price" class="job_recom_list_jobtime_s">
                    		<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['integral_lt_downresume'];?>
 
                    	</span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 <?php } else { ?>
                    <span id="resume_price" class="job_recom_list_jobtime_s">
                    		<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_lt_downresume'];?>

                    	</span>元 <?php }?>
                </div>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
        <div class="job_recom_list">
            <span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
            <input type="text" value="" id="dkjf" name="dkjf" onkeyup="checkNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" style="width:80px;" class="job_recom_dktext">
        </div>
        <div class="job_recom_list">
            <span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
            <div class="job_recom_text_p"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
            </div>
        </div>
        <?php }?>

        <div class="job_recom_list dkh_div" style="display:none">
            <span class="job_recom_s">抵扣后金额：</span>
            <div class="job_recom_list_jobtime">
                <div class="job_recom_list_jobtime_money">
                    <span id="resum_price_dk" class="job_recom_list_jobtime_s"></span>元
                </div>
            </div>
        </div>

        <form name="alipayment" id="payform_downresume" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return payforms();">
            <div class="clear"></div>

            <div class="job_redpack_list" style="margin-top:15px;">
                <div id="zf_div" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_lt_downresume']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?> style="display:none" <?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
                    <div class="job_recom_s">支付方式：</div>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
                    <div class="job_redpack_pay">
                        <a href="javascript:;" onclick="getResume('wxpay');"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"> 微信支付</a>
                    </div>
                    <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
                    <div class="job_redpack_pay">
                        <a href="javascript:;" onclick="getResume('alipay');"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"> 支付宝支付</a>
                    </div>
                    <?php }?> <?php } else { ?>
                    <div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
                    <?php }?>
                </div>
                <div id="zf_div2" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_lt_downresume']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?> style="display:none" <?php }?>>
                    <input type='button' value='确认支付' onClick="downresume_jfzf();" class='job_redpack_list_c_bth'>
                </div>

                <input type="hidden" value="" id="pay_type" name="pay_type" value='' />
                <input type="hidden" name="dingdan" id="order_downresume_id" value="" />
                <input type="hidden" value="下载简历金额" name="subject" value='' />
                <input type="hidden" name="pay_bank" value="directPay">
            </div>
        </form>
    </div>
</div>

<div id="invite_server" style="display:none;">
    <div class="job_recom_box">
        <div class="job_recom_list" style="padding-bottom:10px; padding-top:10px;">
            <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
            <div style="padding-bottom:20px;width:100%; padding-top:10px; float:left">
                <span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
                <div class="job_recom_list_jobtime">
                    <div class="job_recom_list_jobtime_money">
                        <span class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 （1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
                    </div>
                </div>
            </div>
            <?php }?>

            <span class="job_recom_s">所需<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?></span>
            <div class="job_recom_list_jobtime">
                <div class="job_recom_list_jobtime_money">
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
                    <span id="need" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['integral_interview'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 <?php } else { ?>
                    <span id="need" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_interview'];?>
</span>元 <?php }?>
                </div>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
        <div class="job_recom_list">
            <span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
            <input type="text" value="" id="invite_dkjf" name="invite_dkjf" onkeyup="checkInviteNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" style="width:80px;" class="job_recom_text">
        </div>
        <div class="job_recom_list">
            <span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
            <div class="job_recom_text_p"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）</div>
        </div>
        <?php }?>

        <div class="job_recom_list jfdkh_m" style="display:none">
            <span class="job_recom_s">抵扣后金额：</span>
            <div class="job_recom_list_jobtime">
                <div class="job_recom_list_jobtime_money">
                    <span id="dkjfh" class="job_recom_list_jobtime_s"></span>元
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="invite_zf_div" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_interview']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?> style="display:none" <?php }?>>
            <form name="alipayment" id="payform_invite" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return payforms();">
                <div class="job_redpack_list mt10">
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
                    <div class="job_recom_s">支付方式：</div>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
                    <div class="job_redpack_pay">
                        <a href="javascript:;" onclick="inviteOrder('wxpay');">
                            <div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付</a>
                    </div>
                    <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
                    <div class="job_redpack_pay">
                        <a href="javascript:;" onclick="inviteOrder('alipay');">
                            <div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
                    </div>
                    <?php }?> <?php } else { ?>
                    <div class="con_banner_no" style="width:300px; text-align:center;color:#f00"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
                    <?php }?>
                    <input type="hidden" value="" id="pay_type" name="pay_type" />
                    <input type="hidden" name="dingdan" id="order_invite_id" value="" />
                    <input type="hidden" value="邀请面试金额" name="subject" />
                    <input type="hidden" name="pay_bank" value="directPay">
                </div>
            </form>
        </div>
        <div id="invite_zf_btn" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_interview']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?> style="display:none" <?php }?>>
            <input type='button' value='确认支付' onClick="qrzf();" class='job_redpack_list_c_bth'>
        </div>
    </div>
</div>

<div class="none "  style="display:none;" id="ltdownresume">
    <div class="job_recom_box">

        <div class="job_recom_list" style="padding-bottom:10px; padding-top:10px;">

            <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
            <div style="padding-bottom:20px;width:100%; padding-top:10px; float:left">
                <span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
                <div class="job_recom_list_jobtime">
                    <div class="job_recom_list_jobtime_money">
                        <span class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 （1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
                    </div>
                </div>
            </div>
            <?php }?>

            <span class="job_recom_s">应付<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?></span>
            <div class="job_recom_list_jobtime">
                <div class="job_recom_list_jobtime_money">
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
                    <span id="down_price" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['integral_lt_downresume'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 <?php } else { ?>
                    <span id="down_price" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_lt_downresume'];?>
</span>元 <?php }?>
                </div>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
        <div class="job_recom_list">
            <span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
            <input type="text" value="" id="down_dkjf" name="down_dkjf" onkeyup="checkDownNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" style="width:80px;" class="job_recom_dktext">
        </div>
        <div class="job_recom_list">
            <span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
            <div class="job_recom_text_p"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
            </div>
        </div>
        <?php }?>

        <div class="job_recom_list dkh_down_div" style="display:none">
            <span class="job_recom_s">抵扣后金额：</span>
            <div class="job_recom_list_jobtime">
                <div class="job_recom_list_jobtime_money">
                    <span id="down_price_dk" class="job_recom_list_jobtime_s"></span>元
                </div>
            </div>
        </div>

        <form name="alipayment" id="payform_ltdownresume" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return payforms();">

            <div class="job_redpack_list">
                <div id="downzf_div" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_lt_downresume']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?> style="display:none" <?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
                    <div class="job_redpack_list_name">支付方式：</div>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
                    <div class="job_redpack_pay">
                        <a href="javascript:;" onclick="getDownResume('wxpay');"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"> 微信支付</a>
                    </div>
                    <?php }?> <?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
                    <div class="job_redpack_pay">
                        <a href="javascript:;" onclick="getDownResume('alipay');"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"> 支付宝支付</a>
                    </div>
                    <?php }?> <?php } else { ?>
                    <div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
                    <?php }?>
                </div>
                <div id="downzf_div2" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_lt_downresume']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?> style="display:none" <?php }?>>
                    <input type='button' value='确认支付' onClick="lt_downresume();" class='job_redpack_list_c_bth'>
                </div>

                <input type="hidden" value="" id="pay_type" name="pay_type" value='' />
                <input type="hidden" name="dingdan" id="order_ltdownresume_id" value="" />
                <input type="hidden" value="下载简历金额" name="subject" value='' />
                <input type="hidden" name="pay_bank" value="directPay">
            </div>
        </form>
    </div>
</div>

<input type="hidden" name="orderid" id="orderid" value="" />
<div id="wxpayTx" style="display:none;">
    <div class="wx_payment">
        <div class="wx_payment_cont">
            <div class="wx_payment_ewm">正在加载微信二维码,请稍候....</div>
        </div>
        <div class="wx_payment_h2">二维码有效时长为2小时，请尽快支付</div>
        <div class="wx_payment_tip">
            <div class="wx_payment_tip_left"><i class="wx_payment_tip_line1"></i><i class="wx_payment_tip_line2"></i><i class="wx_payment_tip_line3"></i></div>
            <div class="wx_payment_tip_right">请使用微信扫一扫<br>扫描二维码支付</div>
        </div>
    </div>
</div>
<div id="payshow" style="width:450px; position:absolute;left:0px;top:0px; background:#fff; display:none;">
    <div class="payment_tip">请在新打开的支付页面上完成付款，付款完成前请不要关闭此窗口。<br>如您在支付过程中遇到问题，请联系客服：<span class="payment_tip_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</span></div>
    <div class="payment_bottom">
        <?php if ($_smarty_tpl->tpl_vars['usertype']->value==2) {?>
        <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
" class="payment_bottombutt">已完成付款</a>
        <?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value==3) {?>
        <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['Info']->value['id'],'type'=>2),$_smarty_tpl);?>
" class="payment_bottombutt">已完成付款</a>
        <?php }?>
    </div>
</div>

<?php echo '<script'; ?>
>
    
    function accAdd(arg1, arg2) {
        var r1, r2, m;
        try {
            r1 = arg1.toString().split(".")[1].length
        } catch(e) {
            r1 = 0
        }
        try {
            r2 = arg2.toString().split(".")[1].length
        } catch(e) {
            r2 = 0
        }
        m = Math.pow(10, Math.max(r1, r2))
        return(arg1 * m + arg2 * m) / m
    }

    function accSub(arg1, arg2) {
        return accAdd(arg1, -arg2);
    }

    function accMul(arg1, arg2) {
        var m = 0,
            s1 = arg1.toString(),
            s2 = arg2.toString();
        try {
            m += s1.split(".")[1].length
        } catch(e) {}
        try {
            m += s2.split(".")[1].length
        } catch(e) {}
        return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)
    }

    function accDiv(arg1, arg2) {
        var t1 = 0,
            t2 = 0,
            r1, r2;
        try {
            t1 = arg1.toString().split(".")[1].length
        } catch(e) {}
        try {
            t2 = arg2.toString().split(".")[1].length
        } catch(e) {}
        with(Math) {
            r1 = Number(arg1.toString().replace(".", ""));
            r2 = Number(arg2.toString().replace(".", ""));
            return(r1 / r2) * pow(10, t2 - t1);
        }
    }

    function myFunction(_this) {
        _this.value = _this.value.replace(/[^0-9]/g, '');
    }

    function checkTcNum(integral, integral_pro) {
        var dkjf = $("#dkjf_tc").val();
        if(dkjf) {
            $(".dkh_div_tc").show();
        } else {
            $(".dkh_div_tc").hide();
        }
        var price = $("#price").text();
        var need_jifen = accMul(price, integral_pro);
        if(parseInt(integral) >= parseInt(need_jifen)) {
            if(parseInt(dkjf) > parseInt(need_jifen)) {
                $("#dkjf_tc").val(need_jifen);
                var dkjfh = accSub(price, accDiv(need_jifen, integral_pro));
            } else {
                var dkjfh = accSub(price, accDiv(dkjf, integral_pro));
            }
        } else {
            if(parseInt(dkjf) > parseInt(integral)) {
                $("#dkjf_tc").val(integral);
                var dkjfh = accSub(price, accDiv(integral, integral_pro));
            } else {
                var dkjfh = accSub(price, accDiv(dkjf, integral_pro));
            }
        }
        if(dkjfh <= 0) {
            $("#price_dk").html(0);
            $("#zftc_div").hide();
            $("#zftc_div2").show();
        } else {
            $("#price_dk").html(dkjfh);
            $("#zftc_div").show();
            $("#zftc_div2").hide();
        }
    }

    function buytc_jfzf() { 

        var tcid = $("#comservice").val();
        if(tcid == "") {
            layer.msg('请选择增值包套餐！', 2, 8);
            return false;
        } else {

            var index = layer.load('执行中，请稍候...', 0);
            var url = weburl + "/resume/index.php?c=show&a=dkBuy";
            $.post(url, {
                tcid: tcid
            }, function(data) {
                if(data) {
                    layer.closeAll();
                    data = eval('(' + data + ')');
                    if(data.error == 1) {
                        if(data.url) {
                            layer.msg(data.msg, 2, 8, function() {
                                window.location.href = data.url;
                            });
                        } else {
                            layer.msg(data.msg, 2, 8);
                        }
                    } else if(data.error == 0) {
                        layer.msg(data.msg, 2, 9, function() {
                            window.location.href = '<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_GET['id']),$_smarty_tpl);?>
';
                        });
                    }
                }
            })
        }
    }

    function checkNum(integral, integral_pro) {
        var dkjf = $("#dkjf").val();
        if(dkjf) {
            $(".dkh_div").show();
        }
        var resume_price = $("#resume_price").text();
        var need_jifen = accMul(resume_price, integral_pro);
        if(parseInt(integral) >= parseInt(need_jifen)) {
            if(parseInt(dkjf) > parseInt(need_jifen)) {
                $("#dkjf").val(parseInt(need_jifen));
                var dkjfh = accSub(resume_price, accDiv(need_jifen, integral_pro));
            } else {
                var dkjfh = accSub(resume_price, accDiv(dkjf, integral_pro));
            }
        } else {
            if(parseInt(dkjf) > parseInt(integral)) {
                $("#dkjf").val(parseInt(integral));
                var dkjfh = accSub(resume_price, accDiv(integral, integral_pro));
            } else {
                var dkjfh = accSub(resume_price, accDiv(dkjf, integral_pro));
            }
        }
        if(dkjfh <= 0) {
            $("#resum_price_dk").html(0);
            $("#zf_div").hide();
            $("#zf_div2").show();
        } else {
            $("#resum_price_dk").html(dkjfh);
            $("#zf_div").show();
            $("#zf_div2").hide();
        }
    }

    function downresume_jfzf() { 
        var index = layer.load('执行中，请稍候...', 0);
        var eid = $("#eid").val();
        var url = weburl + "/resume/index.php?c=show&a=dkBuy";
        $.post(url, {
            eid: eid
        }, function(data) {
            if(data) {
                layer.closeAll();
                data = eval('(' + data + ')');
                if(data.error == 1) {
                    if(data.url) {
                        layer.msg(data.msg, 2, 8, function() {
                            window.location.href = data.url;
                        });
                    } else {
                        layer.msg(data.msg, 2, 8);
                    }

                } else if(data.error == 0) {
                    layer.msg(data.msg, 2, 9, function() {
                        window.location.href = '';
                    });
                }
            }
        })
    }

    function checkDownNum(integral, integral_pro) {
        var dkjf = $("#down_dkjf").val();
        if(dkjf) {
            $(".dkh_down_div").show();
        }
        var down_price = $("#down_price").text();
        var need_jifen = accMul(down_price, integral_pro);
        if(parseInt(integral) >= parseInt(need_jifen)) {
            if(parseInt(dkjf) > parseInt(need_jifen)) {
                $("#down_dkjf").val(need_jifen);
                var dkjfh = accSub(down_price, accDiv(need_jifen, integral_pro));
            } else {
                var dkjfh = accSub(down_price, accDiv(dkjf, integral_pro));
            }
        } else {
            if(parseInt(dkjf) > parseInt(integral)) {
                $("#down_dkjf").val(integral);
                var dkjfh = accSub(down_price, accDiv(integral, integral_pro));
            } else {
                var dkjfh = accSub(down_price, accDiv(dkjf, integral_pro));
            }
        }
        if(dkjfh <= 0) {
            $("#down_price_dk").html(0);
            $("#downzf_div").hide();
            $("#downzf_div2").show();
        } else {
            $("#down_price_dk").html(dkjfh);
            $("#downzf_div").show();
            $("#downzf_div2").hide();
        }
    }

    function lt_downresume() { 
        var index = layer.load('执行中，请稍候...', 0);
        var eid = $("#eid").val();
        var url = weburl + "/resume/index.php?c=show&a=dkBuy";
        $.post(url, {
            eid: eid
        }, function(data) {
            if(data) {
                layer.closeAll();
                data = eval('(' + data + ')');
                if(data.error == 1) {
                    if(data.url) {
                        layer.msg(data.msg, 2, 8, function() {
                            window.location.href = data.url;
                        });
                    } else {
                        layer.msg(data.msg, 2, 8);
                    }

                } else if(data.error == 0) {
                    layer.msg(data.msg, 2, 9, function() {
                        window.location.href = '';
                    });
                }
            }
        })
    }

    function checkInviteNum(integral, integral_pro) {
        var dkjf = $("#invite_dkjf").val();
        if(dkjf) {
            $(".jfdkh_m").show();
        }
        var need = $("#need").text();
        var need_jifen = accMul(need, integral_pro);

        if(parseInt(integral) >= parseInt(need_jifen)) {
            if(parseInt(dkjf) > parseInt(need_jifen)) {
                $("#invite_dkjf").val(need_jifen);
                var dkjfh = accSub(need, accDiv(need_jifen, integral_pro));
            } else {
                var dkjfh = accSub(need, accDiv(dkjf, integral_pro));
            }
        } else {
            if(parseInt(dkjf) > parseInt(integral)) {
                $("#invite_dkjf").val(integral);
                var dkjfh = accSub(need, accDiv(integral, integral_pro));
            } else {
                var dkjfh = accSub(need, accDiv(dkjf, integral_pro));
            }
        }
        if(dkjfh <= 0) {
            $("#dkjfh").html(0);
            $("#invite_zf_div").hide();
            $("#invite_zf_btn").show();
        } else {
            $("#dkjfh").html(dkjfh);
            $("#invite_zf_div").show();
            $("#invite_zf_btn").hide();
        }
    }

    function qrzf() { 
        var index = layer.load('执行中，请稍候...', 0);
        var url = weburl + "/resume/index.php?c=show&a=dkBuy";
        $.post(url, {
            invite: 1
        }, function(data) {
            if(data) {
                layer.closeAll();
                data = eval('(' + data + ')');
                if(data.error == 1) {
                    if(data.url) {
                        layer.msg(data.msg, 2, 8, function() {
                            window.location.href = data.url;
                        });
                    } else {
                        layer.msg(data.msg, 2, 8);
                    }

                } else if(data.error == 0) {
                    layer.msg(data.msg, 2, 9, function() {
                        $.layer({
                            type: 1,
                            offset: ['100px', ''],
                            title: '邀请面试',
                            closeBtn: [0, true],
                            border: [10, 0.3, '#000', true],
                            area: ['380px', 'auto'],
                            page: {
                                dom: "#job_box"
                            }
                        });
                    });
                }
            }
        })
    }

    function showleft(id) {
        $("#dkjf_tc").val('');
        $(".dkh_div_tc").hide();
        $('#price').html(0);
        $('#comservice').val('');
        $("li").removeClass("Value_added_mune_cur");
        $('#' + id).addClass('Value_added_mune_cur');
        $.post('<?php echo smarty_function_url(array('m'=>'ajax','c'=>'getPack'),$_smarty_tpl);?>
', {
            id: id
        }, function(data) {
            $("#ratinglist").html(data);
        });
    }

    function payforms() {
        var pay_type = $("#pay_type").val();

        if(pay_type == '') {
            layer.msg('请选择支付方式！', 2, 8);

        } else if(pay_type == 'wxpay') {

            var orderId = $("#orderid").val();

            $.post('<?php echo smarty_function_url(array('m'=>'member','c'=>'payment','act'=>'wxurl'),$_smarty_tpl);?>
', {
                orderId: orderId
            }, function(data) {
                $('.wx_payment_ewm').html(data);
                $.layer({
                    type: 1,
                    title: '微信扫码支付',
                    closeBtn: [0, true],
                    border: [10, 0.3, '#000', true],
                    area: ['320px', '400px'],
                    page: {
                        dom: "#wxpayTx"
                    }
                });

                setInterval(function() {

                    $.post('<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/api/wxpay/wxorder.php', {
                        orderid: orderId
                    }, function(data) {
                        if(data == 1) {
                            window.location.href = '';
                        }
                    });

                }, 3000);

            })
            return false;
        } else {

            $.layer({
                type: 1,
                title: '提示',
                closeBtn: [0, true],
                border: [10, 0.3, '#000', true],
                area: ['450px', '280px'],
                page: {
                    dom: "#payshow"
                }
            });
        }
    }
     
    function toChange() {
        var online = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
        var pro = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';

        $("#dkjf_tc").val('');
        $(".dkh_div_tc").hide();
        var obj = document.getElementsByName('service_package');
        for(var i = 0; i < obj.length; i++) {
            if(obj[i].checked == true) {
                $('#comservice').val(obj[i].value);
                var comservinceid = obj[i].value;
                $.post(weburl + "/resume/index.php?c=show&a=getPrice", {
                    comservinceid: comservinceid
                }, function(data) {
                    if(data > 0) {
                        if(online == 3) {
                            $('#price').html(data * pro);
                        } else {
                            $('#price').html(data);
                        }

                    }
                });
            }
        }
    }

    
    function getOrder(pay_type) {

        $('#pay_type').val(pay_type);

        var tid = $("#comservice").val(); 

        var dkjf = $("#dkjf_tc").val(); 

        var price = document.getElementById("price").innerHTML; 

        if(tid == "") {
            layer.msg('请选择增值包套餐！', 2, 8);
            return false;
        } else {

            var index = layer.load('执行中，请稍候...', 0);

            $.ajax({
                async: false, 
                type: 'POST',
                global: false,
                url: weburl + "/resume/index.php?c=show&a=pay",
                data: {
                    tid: tid,
                    price: price,
                    dkjf: dkjf
                },
                success: function(data) {
                    layer.close(index);
                    var data = eval('(' + data + ')');

                    if(data.error == 1) {
                        layer.msg(data.msg, 2, 8);
                    } else if(data.error == 0) {
                        $('#order_id').val(data.orderid);
                        $('#orderid').val(data.id);
                        
                        $('#payform').submit();
                    }
                }
            });
        }
    }

    function getResume(pay_type) {

        $('#pay_type').val(pay_type);

        var eid = $("#eid").val();

        var dkjf = $("#dkjf").val();

        var index = layer.load('执行中，请稍候...', 0);

        $.ajax({
            async: false, 
            type: 'POST',
            global: false,
            url: weburl + "/resume/index.php?c=show&a=pay",
            data: {
                eid: eid,
                dkjf: dkjf
            },
            success: function(data) {
                layer.close(index);
                var data = eval('(' + data + ')');

                if(data.error == 1) {
                    layer.msg(data.msg, 2, 8);
                } else if(data.error == 0) {
                    $('#order_downresume_id').val(data.orderid);
                    $('#orderid').val(data.id);
                    
                    $('#payform_downresume').submit();
                }
            }
        });

    }

    function getDownResume(pay_type) {

        $('#pay_type').val(pay_type);

        var eid = $("#eid").val();

        var dkjf = $("#down_dkjf").val();

        var index = layer.load('执行中，请稍候...', 0);

        $.ajax({
            async: false, 
            type: 'POST',
            global: false,
            url: weburl + "/resume/index.php?c=show&a=pay",
            data: {
                eid: eid,
                down_dkjf: dkjf
            },
            success: function(data) {
                layer.close(index);
                var data = eval('(' + data + ')');

                if(data.error == 1) {
                    layer.msg(data.msg, 2, 8);
                } else if(data.error == 0) {
                    $('#order_ltdownresume_id').val(data.orderid);
                    $('#orderid').val(data.id);
                    
                    $('#payform_ltdownresume').submit();
                }
            }
        });

    }

    function inviteOrder(pay_type) { 
        $('#pay_type').val(pay_type);
        var dkjf = $('#invite_dkjf').val();
        var index = layer.load('执行中，请稍候...', 0);

        $.ajax({
            async: false,
            type: 'POST',
            global: false,
            url: weburl + "/resume/index.php?c=show&a=pay",
            data: {
                invite: 1,
                dkjf: dkjf
            },
            success: function(data) {
                layer.close(index);
                var data = eval('(' + data + ')');

                if(data.error == 1) {
                    layer.msg(data.msg, 2, 8);
                } else if(data.error == 0) {
                    $('#order_invite_id').val(data.orderid);
                    $('#orderid').val(data.id);
                    
                    $('#payform_invite').submit();
                }
            }
        });
    }
<?php echo '</script'; ?>
><?php }} ?>
