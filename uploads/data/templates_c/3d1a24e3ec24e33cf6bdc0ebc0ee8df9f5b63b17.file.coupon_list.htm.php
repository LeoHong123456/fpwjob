<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:59:06
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/coupon_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:13891564815e4c885a9aa907-39592233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d1a24e3ec24e33cf6bdc0ebc0ee8df9f5b63b17' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/coupon_list.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13891564815e4c885a9aa907-39592233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lietou_style' => 0,
    'config' => 0,
    'rows' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c885a9d69b4_48370272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c885a9d69b4_48370272')) {function content_5e4c885a9d69b4_48370272($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/jianli.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<!--内容部分content-->
<div class="m_content">
  <div class="wrap">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <div class="m_inner_youb fr">
        <div class="m_s_browse">
        <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
          <div class="m_browse_list">
            <ul>
              <li class="w90">优惠码</li>
              <li class="w160">优惠券名称</li>
              <li class="w90">金额</li>
              <li class="w146">使用条件</li>
              <li class="w90">获赠时间</li>
              <li class="w90">到期时间</li>
              <li class="w90">消费时间</li>
              <li class="w90">状态</li>
              <li class="w90">操作</li>
            </ul>
            <div class="clear"></div>
          </div>
          <?php }?>
          <div class="m_browse_cont">
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <ul>
              <li class="w90"><?php echo $_smarty_tpl->tpl_vars['v']->value['number'];?>
</li>
              <li class="w160"><?php echo $_smarty_tpl->tpl_vars['v']->value['coupon_name'];?>
</li>
              <li class="w90"><?php echo $_smarty_tpl->tpl_vars['v']->value['coupon_amount'];?>
元</li>
              <li class="w146">消费<?php echo $_smarty_tpl->tpl_vars['v']->value['coupon_scope'];?>
元</li>
              <li class="w90"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d");?>
</li>
              <li class="w90"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['validity'],"%Y-%m-%d");?>
</li>
              <li class="w90">&nbsp;
              <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['xf_time'],"%Y-%d-%d")) {?>
              <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['xf_time'],"%Y-%m-%d");?>

              <?php } else { ?>
              未使用
              <?php }?></li>
              <li class="w90"><?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?><font color="blue">未消费</font><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?><font color="green">已消费</font><?php } else { ?><font color="red">已到期</font><?php }?></li>
				<li class="w90">
									<a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=coupon_list&act=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" class="coupon_botbox_sc">删除</a>
								</li>            </ul>
            
            <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
            <div class="member_no_content">您还没有优惠券。</div>
            <?php } ?>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<!--内容结束--> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
