<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-17 12:05:54
         compiled from "/www/fpwjob/uploads/app/template/member/com/ad_order.htm" */ ?>
<?php /*%%SmartyHeaderCode:12934876445e4a112275a138-71299663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e01c0cb78b9bdae3c5d42582dae6ff99b050c7f1' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/ad_order.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12934876445e4a112275a138-71299663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'log' => 0,
    'config' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4a11227b8150_07545318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4a11227b8150_07545318')) {function content_5e4a11227b8150_07545318($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
<div class="admin_mainbody">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=right_box>
  <div class=admincont_box>
    <div class="com_tit"><span class="com_tit_span"> 招聘广告服务</span> </div>
	<div class="job_list_tit">
         <ul class="">
       
       <li <?php if ($_GET['c']=="ad") {?>  class="job_list_tit_cur"<?php }?> ><a href="index.php?c=ad">购买广告位</a></li> 
       <li <?php if ($_GET['c']=="ad_order") {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=ad_order">广告订单</a></li>
         </ul>
         </div>
    <div class="com_body mt20">
      <table class="com_table" id="job_checkbokid">
        <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
        <tr>
          <th>充值单号</th>
          <th>订单金额</th>
		  <th>购买时长</th>
		  <th>广告图片</th>
          <th>订单时间</th>
          <th>状态</th>
          <th>操作</th>
        </tr>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars["state"] = new Smarty_variable($_smarty_tpl->tpl_vars['log']->value['pay_state'], null, 0);?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['log']->value['order_id'];?>
</td>
          <td  align="center"><?php if ($_smarty_tpl->tpl_vars['log']->value['buytype']==1) {
echo $_smarty_tpl->tpl_vars['log']->value['integral'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
} elseif ($_smarty_tpl->tpl_vars['log']->value['buytype']==2) {
echo $_smarty_tpl->tpl_vars['log']->value['price'];?>
&nbsp;元<?php }?></td>
          
		  <td align="center"><?php echo $_smarty_tpl->tpl_vars['log']->value['buy_time'];?>
个月</td>
		  <td align="center"><a href=".<?php echo $_smarty_tpl->tpl_vars['log']->value['pic_url'];?>
" target="_blank">查看</a></td>
          <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['datetime'],'%Y-%m-%d %H:%M:%S');?>
</td>
          <td align="center"> <?php if ($_smarty_tpl->tpl_vars['log']->value['status']=="1") {?> <span class="y_verify">已审核</span><?php } elseif ($_smarty_tpl->tpl_vars['log']->value['status']=="2") {?> <span class="n_verify">已退回</span><?php } else { ?> <span class="wate_verify">未审核</span><?php }?> </td>
          <td align="center"> 
		  <?php if ($_smarty_tpl->tpl_vars['log']->value['status']!="1") {?> <a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=ad_order&act=del&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
'); " class="com_bth cblue">删除</a> <?php }?> 
		  <a href="index.php?c=ad_order&act=look&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
" class="com_bth cblue">详情</a>
		  <?php if ($_smarty_tpl->tpl_vars['log']->value['status']=="2"&&$_smarty_tpl->tpl_vars['log']->value['statusbody']) {?> <a href="javascript:;" onclick="show_msg('<?php echo $_smarty_tpl->tpl_vars['log']->value['statusbody'];?>
')" class="com_bth cblue">原因</a><?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['log']->value['order_state']==1&&$_smarty_tpl->tpl_vars['log']->value['order_type']!='bank') {?><a href="index.php?c=payment&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['orderid'];?>
" class="com_bth cblue">去付款</a><?php }?>
		  </td>
        </tr>
        <?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
        <tr>
          <td colspan="6" class="table_end"><div class="msg_no">
              <p>亲爱的用户，目前您还没有广告订单记录</p>
              <a href="index.php?c=ad" title="购买广告位"  class="com_msg_no_bth com_submit">购买广告位</a></div></td>
        </tr>
        <?php } ?>
        <tr>
          <td colspan="6" class="table_end"><div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
function show_msg(msg){
	$("#msgs").html(msg);
	$.layer({
		type : 1,
		title :'查看原因', 
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['400px','200px'],
		page : {dom :"#showmsg"}
	});
}
<?php echo '</script'; ?>
>
<div id="showmsg"  style="display:none; width: 400px;">
  <div>
    <div id="infobox">
      <div class="admin_Operating_sh" style="padding:10px; ">
        <div class="admin_Operating_sh_h1" style="padding:5px;">
          <div style="height:80px;overflow:auto;" id="msgs"></div>
        </div>
        <div class="admin_Operating_sub" style="margin-top:10px;"> &nbsp;&nbsp;
          <input type="button" onClick="layer.close(layer.index);" class="cancel_btn" value='确认'>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
