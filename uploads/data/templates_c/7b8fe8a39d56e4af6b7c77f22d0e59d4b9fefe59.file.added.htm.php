<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 09:25:28
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/added.htm" */ ?>
<?php /*%%SmartyHeaderCode:15762970055e4c8e88bbccc2-12678190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b8fe8a39d56e4af6b7c77f22d0e59d4b9fefe59' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/added.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15762970055e4c8e88bbccc2-12678190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lietou_style' => 0,
    'config' => 0,
    'rows' => 0,
    'v' => 0,
    'key' => 0,
    'info' => 0,
    'list' => 0,
    'discount' => 0,
    'statis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4c8e88c0afd8_16877869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4c8e88c0afd8_16877869')) {function content_5e4c8e88c0afd8_16877869($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>会员服务</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/account.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" /> 
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--内容部分content-->
<div class="m_content">
	<div class="wrap">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<iframe id="fdingdan"  name="fdingdan" onload="returnmessage('fdingdan');" style="display:none"></iframe>
		<div class="m_inner_youb fr">
            <div class="report_uaer_list fl">
            <ul>
			    <li><a href="index.php?c=right" >套餐会员</a></li>
                <li><a href="index.php?c=right&act=time" >时间会员</a></li> 
 			    <li class="report_uaer_list_cur"><a href="index.php?c=right&act=added" >增值包</a></li> 
             </ul>
			
		</div>
              <div class="clear"></div>
              
			<div class="package_box">
				<div class="search_con fl" style="padding-left:30px;">
					<div class="value_added_box "> 
						<div class="value_added_left ">  
							<ul>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<li <?php if ($_GET['id']==$_smarty_tpl->tpl_vars['v']->value['id']||($_GET['id']==''&&$_smarty_tpl->tpl_vars['key']->value<1)) {?>class="value_added_cur"<?php }?>>
										<a href="index.php?c=right&act=added&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
										<i class="Value_added_bg"></i>
									</li>
								<?php } ?>
							</ul>
						</div>
						
						<div class="value_added_right"> 
							<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
								<div class="value_added_right_list fl">
									<div class="value_added_right_c fl"> 
										<div class=""> 
											服务价格：<em><?php echo $_smarty_tpl->tpl_vars['list']->value['service_price'];?>
</em>元
											<span class="value_added_right_c_hy">
												会员价格：
												<em>
												<?php if ($_smarty_tpl->tpl_vars['discount']->value['service_discount']) {?> 
													<?php echo $_smarty_tpl->tpl_vars['list']->value['service_price']*$_smarty_tpl->tpl_vars['discount']->value['service_discount']*0.01;?>
 
												<?php } else { ?>
													<?php echo $_smarty_tpl->tpl_vars['list']->value['service_price'];?>

												<?php }?>
												</em>元
											</span>
										</div>
										可发布职位数：<em><?php echo $_smarty_tpl->tpl_vars['list']->value['lt_job_num'];?>
</em>份
										可下载简历数：<em><?php echo $_smarty_tpl->tpl_vars['list']->value['resume'];?>
</em>份 +
										刷新职位数：<em><?php echo $_smarty_tpl->tpl_vars['list']->value['lt_breakjob_num'];?>
</em>份
									</div>
									
									
										
										<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']!=2) {?>
										<div class="value_added_right_bth fr">
											<form name="alipayment" target="fdingdan" action="index.php?c=pay&act=dingdan" method="post" id='myform<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
' >
												<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" name="comservice" />
													<div class="com_limit_vip fl">
														<a href="javascript:buyvip('<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
');">立即购买</a>
													</div>
											</form>
										</div>
										<?php } else { ?>
											<span style="float:right; margin-right: 15px; transform: translateY(150%);">
											时间会员无需购买
											</span>
										<?php }?>
									
								</div>
							<?php }
if (!$_smarty_tpl->tpl_vars['list']->_loop) {
?>
								<div class="member_no_content">您还没有增值服务包信息!</div>
							<?php } ?>  
						</div>
					</div>
				</div>
			</div>
		</div>  
	</div>
</div>
<div class="clear"></div>
<?php echo '<script'; ?>
>
function buyvip(id){
	$('#myform'+id).submit();
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
