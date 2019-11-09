<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:15:33
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/job.htm" */ ?>
<?php /*%%SmartyHeaderCode:5113793555dc52425b095e7-04498474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f87644cc39f706fb8c3179ad6fcad5f9d416040b' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/job.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5113793555dc52425b095e7-04498474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'lietou_style' => 0,
    'joblist' => 0,
    'job' => 0,
    's' => 0,
    'zp_status' => 0,
    'addltjobnum' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc52425b43209_20239407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc52425b43209_20239407')) {function content_5dc52425b43209_20239407($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['lietou_style']->value;?>
/css/jianli.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--内容部分content-->
<div class="m_content">
	<div class="wrap">
		<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
		<form action="index.php" target="supportiframe" method="get" id='myform'>
			<input type="hidden" name="c" value="job" />
			<input type="hidden" name="act" value="del" />
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<div class="m_inner_youb fr">
				<div class="clear"></div>
				<div class="lt_m_tit"><span class="lt_m_tit_s">职位管理</span></div>
				<div class="lt_m_box">
					<div class="lt_m_table">
						<table>
							<tbody>
								<?php if ($_smarty_tpl->tpl_vars['joblist']->value) {?>
									<tr>   
										<th width="15">&nbsp;</th >                         
										<th scope="col"><span>职位名称</span></th>
										<th scope="col"><span>招聘状态</span></th>
										<th scope="col"><span>更新日期</span></th>
										<th scope="col">操作</th>
									</tr>
								<?php }?>
								
								<?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['joblist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
									<tr>
										<td width="15"><input type="checkbox" class="sent_check mt0" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" name="del[]"></td >         
										<td >
											<?php if ($_smarty_tpl->tpl_vars['s']->value=="1") {?>
												<a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'jobshow','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" target="_blank" title="预览" class="m_name">
											<?php }?>
												<?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>

											<?php if ($_smarty_tpl->tpl_vars['s']->value=="1") {?></a><?php }?>
										</td>
									
										<td align="center">
											<?php if ($_smarty_tpl->tpl_vars['job']->value['zp_status']==1&&$_smarty_tpl->tpl_vars['job']->value['status']==1) {?>
												已下架<a href="javascript:void(0)" onclick="layer_del('', 'index.php?c=job&act=jobset&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
&zp=0');" style="margin-left:5px;">【上架】</a>
											<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['zp_status']==0&&$_smarty_tpl->tpl_vars['job']->value['status']==1) {?>
												招聘中<a href="javascript:void(0)" onclick="layer_del('', 'index.php?c=job&act=jobset&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
&zp=1');" style="margin-left:5px;">【下架】</a>
											<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['status']==1) {?>
												已审核
											<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['status']==0) {?>
												待审核
											<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['status']==3) {?>
												未通过
												<?php if ($_smarty_tpl->tpl_vars['job']->value['statusbody']) {?>
													<div class="y_verify_wtg_yuany">原因说明：<?php echo $_smarty_tpl->tpl_vars['job']->value['statusbody'];?>
</div>
												<?php }?>
											<?php }?>
										</td>
 										<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['lastupdate'],"%Y-%m-%d");?>
</td>
											
										<td  align="center">
											
											<a href="index.php?c=jobadd&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="cont_del">编辑</a>
											<span class="del_span">|</span>
												
											<?php if ($_smarty_tpl->tpl_vars['job']->value['status']==1) {?>
												<a href="javascript:void(0)" onclick="ltRefreshJob('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="cont_del">刷新</a> 
												<span class="del_span">|</span>
											<?php }?>
											<a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=job&act=del&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="cont_del">删除</a>
										</td>
									</tr>  
								<?php }
if (!$_smarty_tpl->tpl_vars['job']->_loop) {
?>
									<tr>
										<td colspan="6" class="lt_m_table_end">
											<div class="member_no_content"> 
												<p>	你还没有<?php if ($_smarty_tpl->tpl_vars['zp_status']->value=="1") {?>下架<?php } elseif ($_smarty_tpl->tpl_vars['s']->value=="1") {?>发布中<?php } elseif ($_smarty_tpl->tpl_vars['s']->value==0) {?>待审核<?php } elseif ($_smarty_tpl->tpl_vars['s']->value==2) {?>已过期<?php } elseif ($_smarty_tpl->tpl_vars['s']->value==3) {?>未通过<?php }?>的职位</p>
												<a href="javascript:void(0);" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addltjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_lt_job'];?>
','lietou','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" title="发布职位"  class="lietou_nomsg_a">发布职位</a>
											</div>
										</td>
									</tr>  
								<?php } ?>
						
								<?php if (!empty($_smarty_tpl->tpl_vars['joblist']->value)) {?>
									<tr>
										<td colspan="6"class="lt_m_table_end">
											<div class="m_browse_del m_browse_del01">
												<input id="checkAll" type="checkbox" class="m_del_che" onclick='m_checkAll(this.form)'>全选
												<a href="javascript:void(0);" onclick="return really('del[]');" class="m_mass m_mass01">批量删除职位</a> 
											</div>
										</td>
									</tr>
								<?php }?>
								<tr><td colspan="5" class="lt_m_table_end"><div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div></td></tr>  
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
