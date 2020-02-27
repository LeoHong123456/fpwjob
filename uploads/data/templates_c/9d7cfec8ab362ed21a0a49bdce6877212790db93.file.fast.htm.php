<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-28 03:57:49
         compiled from "/www/fpwjob/uploads//app/template/default/once/fast.htm" */ ?>
<?php /*%%SmartyHeaderCode:11776286865e2f40bde91708-16363072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d7cfec8ab362ed21a0a49bdce6877212790db93' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/default/once/fast.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11776286865e2f40bde91708-16363072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paylog' => 0,
    'log' => 0,
    'fast' => 0,
    'config' => 0,
    'com_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2f40bdecdfd9_48454067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2f40bdecdfd9_48454067')) {function content_5e2f40bdecdfd9_48454067($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><div class=" none" style="_position:absolute;" id="fast_order_log">
    <div class="once_paytck_cont">
        <div class="once_paytck_box">
            <?php if ($_smarty_tpl->tpl_vars['paylog']->value) {?> 
            
            <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paylog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>

            <div class="once_paylog">
                <div class="once_paylog_tit">

            	<span class="once_paylog_tit_dh">充值单号：</span><?php echo $_smarty_tpl->tpl_vars['log']->value['order_id'];?>
<span class="once_paylog_tit_zt">未付款</span></div>
                	<div class="once_paylog_pbox">

                    <div class="once_paylog_p"><span class="member_c9">订单类型：</span> 店铺招聘 </div>
                    <div class="once_paylog_p">
                        <span class="member_c9">支付形式：</span> <?php if ($_smarty_tpl->tpl_vars['log']->value['order_type']=='wxpay') {?>微信支付<?php } elseif ($_smarty_tpl->tpl_vars['log']->value['order_type']=='alipay') {?>支付宝支付<?php } else { ?>手动<?php }?></div>

                    <div class="once_paylog_p"><span class="member_c9">时间：</span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['order_time'],"%Y-%m-%d %H:%M:%S");?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['log']->value['order_remark']) {?>
                    <div class="once_paylog_p"><span class="member_c9">备注：</span><?php echo $_smarty_tpl->tpl_vars['log']->value['order_remark'];?>
</div>
                    <?php }?>
                    <div class="once_paylog_money_box"><span class="member_c9">充值金额：</span><span class="once_paylog_money"><?php echo $_smarty_tpl->tpl_vars['log']->value['order_price'];?>
</span></div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['log']->value['order_state']=='1'&&$_smarty_tpl->tpl_vars['log']->value['order_type']!='bank') {?>
                <div class="once_paylog_cz">
                    <a href="<?php echo smarty_function_url(array('m'=>'once','c'=>'show','id'=>$_smarty_tpl->tpl_vars['log']->value['once_id'],'pay'=>$_smarty_tpl->tpl_vars['fast']->value),$_smarty_tpl);?>
" class="yun_member_hr_bth">招聘信息</a>
                    <a href="javascript:void(0)" onclick="fast_pay('<?php echo $_smarty_tpl->tpl_vars['log']->value['once_id'];?>
')" class="yun_member_hr_bth">去付款</a>
                    <a href="javascript:void(0)" onclick="layer_del('确定要取消该订单吗？','<?php echo smarty_function_url(array('m'=>'once','c'=>'delpaylog','id'=>$_smarty_tpl->tpl_vars['log']->value['id']),$_smarty_tpl);?>
')" class="yun_member_hr_bth">取消充值</a>
                </div><?php }?>
            </div>
            <?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
            	<div class="wap_member_no">暂无相关信息</div>
            <?php } ?> 
            
            <?php }?>
        </div>
    </div>
</div>

<div style="display:none;" id="fastjob">
    <div class="job_recom_box">

        <div class="job_recom_list" style="padding-bottom:10px; padding-top:10px;">

            <span class="job_recom_s">应付金额：</span>
            <div class="job_recom_list_jobtime">
                <div class="job_recom_list_jobtime_money">
                    <span id="resume_price" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['once_pay_price'];?>
</span>元
                </div>
            </div>
        </div>

        <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>

        <form name="alipayment" id="payform_fast" action="../api/alipay/alipayto_fast.php" method="post" target="_blank" onsubmit="return payform_fast();">
            <div class="job_redpack_list" style="margin-top:15px;">
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
                    <div class="job_recom_s">支付方式：</div>
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
                <input type="hidden" value="" id="pay_type" name="pay_type" value='' />
                <input type="hidden" name="dingdan" id="order_fast_id" value="" />
                <input type="hidden" value="店铺招聘金额" name="subject" value='' />
                <input type="hidden" name="pay_bank" value="directPay">
            </div>
        </form>

    </div>
</div>

<input type="hidden" name="orderid" id="orderid" value="" />
<input type="hidden" name="onceid" id="onceid" value="" />

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
        <a href="<?php echo smarty_function_url(array('m'=>'once'),$_smarty_tpl);?>
" class="payment_bottombutt">已完成付款</a>
    </div>
</div>

<?php echo '<script'; ?>
>
    function payform_fast() {
        var pay_type = $("#pay_type").val();

        if(pay_type == '') {
            layer.msg('请选择支付方式！', 2, 8);

        } else if(pay_type == 'wxpay') {

            var orderId = $("#orderid").val();

            $.post('<?php echo smarty_function_url(array('m'=>'once','c'=>'wxurl'),$_smarty_tpl);?>
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
                            window.location.href = '<?php echo smarty_function_url(array('m'=>'once'),$_smarty_tpl);?>
';
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

     
    function getOrder(pay_type) {
        $('#pay_type').val(pay_type);
        var onceid = $('#onceid').val();

        if(onceid == "") {
            layer.msg('参数错误！', 2, 8);
            return false;
        } else {
            var index = layer.load('执行中，请稍候...', 0);
            $.ajax({
                async: false, 
                type: 'POST',
                global: false,
                url: weburl + "/once/index.php?c=pay",
                data: {
                    onceid: onceid,
                    pay_type: pay_type
                },
                success: function(data) {
                    layer.close(index);
                    var data = eval('(' + data + ')');

                    if(data.error == 1) {
                        layer.msg(data.msg, 2, 8);
                    } else if(data.error == 0) {
                        $('#order_fast_id').val(data.orderid);
                        $('#orderid').val(data.id);
                        
                        $('#payform_fast').submit();
                    }
                }
            });
        }
    }
<?php echo '</script'; ?>
><?php }} ?>
