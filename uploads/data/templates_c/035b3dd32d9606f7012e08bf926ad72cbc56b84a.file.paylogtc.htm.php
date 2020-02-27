<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 08:58:41
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/paylogtc.htm" */ ?>
<?php /*%%SmartyHeaderCode:4554468015e4c88418fe855-86723298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '035b3dd32d9606f7012e08bf926ad72cbc56b84a' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/paylogtc.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4554468015e4c88418fe855-86723298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lietou_style' => 0,
    'config' => 0,
    'statis' => 0,
    'addltjobnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c8841951a74_61650552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c8841951a74_61650552')) {function content_5e4c8841951a74_61650552($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
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
         <div class="lt_m_tit"><span class="lt_m_tit_s">我的会员</span></div>
        <div class="m_s_browse">
       
         
 <div class="com_body_tc_zt">您当前是：<span class="com_body_tc_zt_n"><?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>
</span> <?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>(时间会员)<?php } else { ?>(套餐会员)<?php }?></div>
  <div class="com_body_tc_zt">到期时间：<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']==0) {?>永久<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']<time()) {?>已过期<?php } else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');
}?></div>


<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']=='2') {?>

<div class="clear"></div>
  
  <div class="com_pay_balance_data">
              <div class="com_pay_balance_data_q">
                <div class="com_pay_balance_data_n"><strong>不限</strong></div>
                <div class="com_pay_balance_data_name">可发布职位</div>
              </div>
             
              
              <div class="com_pay_balance_data_bth"><a  href="javascript:void(0);" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addltjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_lt_job'];?>
','lietou','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" class="com_pay_balance_data_btha">发布职位</a></div>
            </div>
            
            <div class="com_pay_balance_data com_pay_balance_data_xz">
                <div class="com_pay_balance_data_q">
                  <div class="com_pay_balance_data_n"><strong>不限</strong> </div>
                  <div class="com_pay_balance_data_name">可下载简历</div>
                </div>
        
                
                <div class="com_pay_balance_data_bth"><a href="index.php?c=down_resume" class="com_pay_balance_data_btha">查看</a></div>
              </div>
              
              <div class="com_pay_balance_data com_pay_balance_data_yq">
                  <div class="com_pay_balance_data_q">
                    <div class="com_pay_balance_data_n">不限</div>
                    <div class="com_pay_balance_data_name">可刷新职位</div>
                  </div>
                
                  <div class="com_pay_balance_data_bth">
                    <a href="index.php?c=job&s=1" class="com_pay_balance_data_btha">刷新职位</a>                    </div>
                </div>
    <div class="clear"></div>

<?php } else { ?>

  <div class="clear"></div>
  
  <div class="com_pay_balance_data">
              <div class="com_pay_balance_data_q">
                <div class="com_pay_balance_data_n"><strong><?php echo $_smarty_tpl->tpl_vars['statis']->value['lt_job_num'];?>
</strong></div>
                <div class="com_pay_balance_data_name">可发布职位</div>
              </div>
             
              
              <div class="com_pay_balance_data_bth"><a  href="javascript:void(0);" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addltjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_lt_job'];?>
','lietou','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" class="com_pay_balance_data_btha">发布职位</a></div>
            </div>
            
            <div class="com_pay_balance_data com_pay_balance_data_xz">
                <div class="com_pay_balance_data_q">
                  <div class="com_pay_balance_data_n"><strong><?php echo $_smarty_tpl->tpl_vars['statis']->value['lt_down_resume'];?>
</strong> </div>
                  <div class="com_pay_balance_data_name">可下载简历</div>
                </div>
        
                
                <div class="com_pay_balance_data_bth"><a href="index.php?c=down_resume" class="com_pay_balance_data_btha">查看</a></div>
              </div>
              
              <div class="com_pay_balance_data com_pay_balance_data_yq">
                  <div class="com_pay_balance_data_q">
                    <div class="com_pay_balance_data_n"><?php echo $_smarty_tpl->tpl_vars['statis']->value['lt_breakjob_num'];?>
</div>
                    <div class="com_pay_balance_data_name">可刷新职位</div>
                  </div>
                
                  <div class="com_pay_balance_data_bth">
                    <a href="index.php?c=job&s=1" class="com_pay_balance_data_btha">刷新职位</a>                    </div>
                </div>
			<div class="clear"></div>

		<?php }?>
        </div>
      </div>
     
    </div>
  </div>
  <div class="clear"></div>
</div>
<!--内容结束--> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
