<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-17 12:05:18
         compiled from "/www/fpwjob/uploads/app/template/member/com/paylog.htm" */ ?>
<?php /*%%SmartyHeaderCode:20516389065e4a10fe416fd3-98305654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b08e9053178e03517d3f589fd8d84b22d2146f9' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/paylog.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20516389065e4a10fe416fd3-98305654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statis' => 0,
    'config' => 0,
    'integral' => 0,
    'now_url' => 0,
    'ordertype' => 0,
    'rows' => 0,
    'log' => 0,
    'state' => 0,
    'arr_data' => 0,
    'type' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4a10fe4cc958_27371340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4a10fe4cc958_27371340')) {function content_5e4a10fe4cc958_27371340($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
    <div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class=right_box>
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
                        <a href="index.php?c=right" class="cblue">立即开通</a>

                        <?php }?>
                    </div>
                </div>
                <div class="member_data_right">
                    <ul>
                        <li><span class="member_data_right_n"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
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

            <div class="admincont_box mt20">
                <div class="yun_com_tit">
                    <span class="yun_com_tit_s">财务明细</span>
                </div>
                <div class="job_list_tit">
                    <ul class="">
                        <li <?php if ($_GET['c']=="paylog"&&$_GET['consume']!="ok") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=paylog">订单记录</a>
                        </li>

                        <li <?php if ($_GET['c']=="paylog"&&$_GET['consume']=="ok") {?>class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=paylog&consume=ok">账单明细</a>
                        </li>

                        <ul>

                </div>

                <div class="com_body">
                    <div class=admin_textbox_04>
                        <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
" target="supportiframe" method="post">
                            <div class="mt20"> <?php if ($_smarty_tpl->tpl_vars['ordertype']->value) {?>
                                <table class="com_table" id="job_checkbokid">
                                    <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                                    <tr>
                                        <th>流水单号</th>
                                        <th>金额</th>
                                        <th>状态</th>
                                        <th> 备注</th>
                                        <th>时间</th>
                                    </tr>
                                    <?php }?> <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?> <?php $_smarty_tpl->tpl_vars["state"] = new Smarty_variable($_smarty_tpl->tpl_vars['log']->value['pay_state'], null, 0);?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['order_id'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['order_price'];
if ($_smarty_tpl->tpl_vars['log']->value['type']==2) {?>元<?php } else {
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
}?></td>
                                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['arr_data']->value['paystate'][$_smarty_tpl->tpl_vars['state']->value];?>
</td>
                                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['log']->value['pay_remark'];?>
&nbsp;</td>
                                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['log']->value['pay_time'];?>
</td>
                                    </tr>
                                    <?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
                                    <tr>
                                        <td colspan="6" class="table_end">
                                            <div class="msg_no">您还没有记录。</div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                                <?php } else { ?>
                                <table class="com_table" id="job_checkbokid">
                                    <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                                    <tr>
                                        <th>充值单号</th>
                                        <th>支付类型</th>
                                        <th>支付形式</th>
                                        <th>充值金额</th>
                                        <th>支付状态</th>
                                        <th> 时间</th>
                                        <th>操作</th>
                                    </tr>
                                    <?php }?> <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?> <?php $_smarty_tpl->tpl_vars["state"] = new Smarty_variable($_smarty_tpl->tpl_vars['log']->value['order_state'], null, 0);?> <?php $_smarty_tpl->tpl_vars["type"] = new Smarty_variable($_smarty_tpl->tpl_vars['log']->value['order_type'], null, 0);?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['order_id'];?>
</td>
                                        <td align="center">
                                            <?php if ($_smarty_tpl->tpl_vars['log']->value['type']==1) {?>购买会员 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='2') {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
充值 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='3') {?>银行转帐 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='4') {?>金额充值 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='5') {?>增值服务 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='6') {?>课程订购 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='7') {?>购买小程序 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='8') {?>分享红包推广 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='9') {?>悬赏红包 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='10') {?>职位置顶 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='11') {?>紧急招聘 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='12') {?>职位推荐 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='13') {?>职位自动刷新 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='16') {?>职位刷新 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='17') {?>兼职刷新 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='18') {?>高级职位刷新 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='19') {?>下载简历 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='20') {?>发布职位 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='21') {?>发布兼职 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='22') {?>发布高级职位 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='23') {?>面试邀请 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='24') {?>兼职推荐 <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['type']=='26') {?>购买广告位 <?php }?>&nbsp;
                                        </td>
                                        <td align="center"><?php if ($_smarty_tpl->tpl_vars['type']->value) {
echo $_smarty_tpl->tpl_vars['arr_data']->value['pay'][$_smarty_tpl->tpl_vars['type']->value];
} else { ?>手动<?php }?></td>
                                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['log']->value['order_price'];?>
</td>
                                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['arr_data']->value['paystate'][$_smarty_tpl->tpl_vars['state']->value];?>
</td>
                                        <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['order_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
                                        <td align="center">
                                            <?php if ($_smarty_tpl->tpl_vars['log']->value['order_type']=='bank'&&$_smarty_tpl->tpl_vars['log']->value['order_state']!='2') {?>
                                            <a href="javascript:;" id="<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
" class="com_bth cblue status" remark="<?php echo $_smarty_tpl->tpl_vars['log']->value['order_remark'];?>
">备注修改</a>
                                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['log']->value['order_state']=='1'&&$_smarty_tpl->tpl_vars['log']->value['order_type']!='bank') {?>
                                            <a href="index.php?c=payment&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
" class="com_bth cblue">付款</a>
                                            <a href="javascript:void(0)" onclick="del_pay(<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
)" class="com_bth cblue">取消</a>
                                            <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['arr_data']->value['paystate'][$_smarty_tpl->tpl_vars['state']->value];?>
 <?php }?>

                                        </td>

                                    </tr>
                                    <?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
                                    <tr>
                                        <td colspan="6" class="table_end">
                                            <div class="msg_no">您还没有充值记录。</div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                                <?php }?> </div>
                            <div>
                                <div style="clear:both"></div>
                                <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                            </div>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>

<div class="infoboxp22" id="infobox" style="display:none;width: 303px; height:152px;">
    <div>
        <form action="index.php?c=paylog" method="post" id="formstatus" target="supportiframe" onsubmit="return paylog_remark();">
            <div class="jb_infobox" style="width: 100%;">
                <input name="id" id='paylog_id' type="hidden">
                <textarea id="alertcontent" style="width:310px;margin:5px;height:100px" name="order_remark" cols="30" rows="9" class="hr_textarea"></textarea>
            </div>
            <div class="jb_infobox" style="width: 100%;">
                <button type="submit" name='submit' value='1' class="com_pop_bth_qd" style="margin-left:80px;">确认</button> &nbsp;&nbsp;
                <button type="button" class="com_pop_bth_qx">取消</button>
            </div>
        </form>
    </div>
</div>
<div id="use_card" style="display:none; width: 400px;">
    <div class="job_box_div" style="width:340px;">
        <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
        <form action="index.php?c=paylog&act=card" target="supportiframe" method="post" id='myform'>
            <div class="job_box_inp" style="padding:10px 5px 5px 20px">
                <span class="fltL"> 卡号：</span>
                <input name="card" class="com_info_text placeholder fltL" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:240px;" />
            </div>
            <div class="job_box_inp" style="padding:10px 5px 5px 20px">
                <span class="fltL"> 密码：</span>
                <input name="password" class="com_info_text placeholder fltL" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:240px;" />
            </div>
            <span class="job_box_botton" style="width:100%;"> 
      			<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#myform').submit()},0);">确定</a> 
            </span>
        </form>
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

    $(document).ready(function() {
        var layindex = '';
        $('.com_pop_bth_qx').click(function() {
            layer.close(layindex);
        });
        $(".status").click(function() {
            $("#paylog_id").val($(this).attr("id"));
            $("#alertcontent").val($(this).attr("remark"));
            layindex = $.layer({
                type: 1,
                title: '备注',
                closeBtn: [0, true],
                border: [10, 0.3, '#000', true],
                area: ['325px', '210px'],
                page: {
                    dom: "#infobox"
                }
            });
        });

        
    });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
