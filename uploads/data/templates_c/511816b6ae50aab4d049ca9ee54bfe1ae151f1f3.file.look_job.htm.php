<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:59:54
         compiled from "/www/fpwjob/uploads/app/template/member/com/look_job.htm" */ ?>
<?php /*%%SmartyHeaderCode:19265284115dbd458a5f4b33-45091824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '511816b6ae50aab4d049ca9ee54bfe1ae151f1f3' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/look_job.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19265284115dbd458a5f4b33-45091824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comstyle' => 0,
    'config' => 0,
    'rows' => 0,
    'v' => 0,
    'now_url' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd458a629517_83981962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd458a629517_83981962')) {function content_5dbd458a629517_83981962($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['comstyle']->value;?>
/images/index_style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type=text/css rel=stylesheet>

<div class="w1000">
	<div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class=right_box>
			<div class=admincont_box>
				<div class="com_tit"> <span class="com_tit_span">被浏览的职位</span> </div>
      
				<div class="com_body">
        
				<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
				<form action="index.php?c=look_job&act=del" method="post" target="supportiframe" id='myform'>
					<table class="com_table"id="job_checkbokid" >
						<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
							<tr>
								<th width="20">&nbsp;</th>
								<th>被浏览的职位名称</th>
								<th>姓名</th>
								<th>意向职位</th>
								<th>工作经验</th>
								<th>期望薪资</th>
								<th>浏览时间</th>
								<th>邀请面试</th>
								<th>操作</th>
							</tr>
						<?php }?>
						
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<tr>
								<td>
									<input type='checkbox' name="delid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="com_Release_job_qx_check" >
								</td> 
								<td><?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
&nbsp;</td> 
								<td><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.eid`'),$_smarty_tpl);?>
" target="_blank" class="uesr_name_a">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></td>
								<td align="center"><span class="yxjob_name">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['jobclassidname'];?>
</span></td> 
								<td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['exp'];?>
</td>
								<td align="center">
									<?php if ($_smarty_tpl->tpl_vars['v']->value['minsalary']&&$_smarty_tpl->tpl_vars['v']->value['maxsalary']) {?>
										￥<?php echo $_smarty_tpl->tpl_vars['v']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['v']->value['maxsalary'];?>

									<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['minsalary']) {?>
										￥<?php echo $_smarty_tpl->tpl_vars['v']->value['minsalary'];?>
以上
									<?php } else { ?>
										面议
									<?php }?>
								</td> 
								<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['datetime'],'%Y-%m-%d %H:%M');?>
</td> 
								
								<td align="center">
									<?php if ($_smarty_tpl->tpl_vars['v']->value['userid_msg']==1) {?> 
										<font color="red">已邀请</font> 
									<?php } else { ?> 
										<a href="javascript:;" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" username="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" class=" com_bth cblue sq_resume"> 邀请面试</a>
									<?php }?>
								</td>
								<td align="center"> 
									<a href="javascript:void(0)" onclick="layer_del('确定要删除？', '<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" class=" com_bth cblue">删除</a>
								</td> 
							</tr>
						<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
							<tr>
								<td colspan="8" class="table_end">
									<div class="msg_no">
										亲爱的用户，目前还没有人才浏览您。
										<p>您可以主动邀请人才面试</p>
										<a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="com_msg_no_bth com_submit">我要主动找人才</a>
									</div>
								</td>
							</tr>
						<?php } ?>
           
						<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
							<tr>
								<td colspan="8" class="table_end">
									<div class="com_Release_job_bot"> 
										<span class="com_Release_job_qx">
											<input id='checkAll'  type="checkbox" onclick='m_checkAll(this.form)'class="com_Release_job_qx_check">全选
										</span>
										<input class="c_btn_02" type="button" name="subdel" value="批量删除" onclick="return really('delid[]');">
									</div>
									<div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
								</td>
							</tr>
						<?php }?>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/yqms.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
