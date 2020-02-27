<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:58:38
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/consume.htm" */ ?>
<?php /*%%SmartyHeaderCode:5224109315e4c883e19a005-76339596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b199f37acc03e1499948b84e38b567a9d5fe904' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/consume.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5224109315e4c883e19a005-76339596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'lietou_style' => 0,
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c883e1c26a9_74863543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c883e1c26a9_74863543')) {function content_5e4c883e1c26a9_74863543($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/jianli.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/guanli.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/account.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
    </head>

    <body>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        <div class="m_content">
            <div class="wrap">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <div class="m_inner_youb fr">
                    <div class="report_uaer_list fl">
                        <ul>
                            <li>
                                <a href="index.php?c=paylog">充值记录</a>
                            </li>
                            <li class="report_uaer_list_cur">
                                <a href="index.php?c=consume">消费记录</a>
                            </li>
							<li><a href="index.php?c=jobpack&act=withdrawlist" >提现记录</a></li> 
							<li><a href="index.php?c=jobpack&act=changelist" >转换记录</a></li>	
                        </ul>
                    </div>
                    <div class="search_con mt20 fl">
                        <div class="lt_m_table">
                            <table>
                                <tbody>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
                                    <tr>

                                        <th scope="col"><span>消费单号</span></th>
                                        <th scope="col"><span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span></th>
                                        <th scope="col"><span>消费时间</span></th>
                                        <th scope="col" width="300">备注</th>
                                    </tr>

                                    <?php }?> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                    <tr>

                                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['order_id'];?>
</td>
                                        <td align="center"> <?php if ($_smarty_tpl->tpl_vars['v']->value['type']==2) {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['order_price'];?>
元 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['v']->value['order_price'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
 <?php }?>
                                        </td>
                                        <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['pay_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
                                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['pay_remark'];?>
</td>

                                    </tr>

                                    <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
                                    <tr>
                                        <td colspan="4" class="lt_m_table_end">
                                            <div class="member_no_content"> 您还没有消费记录！</div>
                                        </td>
                                    </tr>
                                    <?php } ?>

                                    <tr>
                                        <td colspan="4" class="lt_m_table_end">
                                            <div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
