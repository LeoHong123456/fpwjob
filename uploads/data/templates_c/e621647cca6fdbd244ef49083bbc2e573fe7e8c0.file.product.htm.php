<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-23 23:11:04
         compiled from "/www/fpwjob/uploads/app/template/member/com/product.htm" */ ?>
<?php /*%%SmartyHeaderCode:2050511135e5296089cfae0-14860906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e621647cca6fdbd244ef49083bbc2e573fe7e8c0' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/product.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2050511135e5296089cfae0-14860906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'job' => 0,
    'uid' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e529608a17d58_04721439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e529608a17d58_04721439')) {function content_5e529608a17d58_04721439($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
	<div class="admin_mainbody"> 
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class=right_box>
			<div class=admincont_box>
				<div class="com_tit"><span class="com_tit_span">企业资料</span></div>
				
				<div class="job_list_tit">
					<ul class="">
						<li ><a href="index.php?c=info">基本信息</a></li>
						<li><a href="index.php?c=map">企业地图</a></li>
						<li><a href="index.php?c=news">企业新闻</a></li>
						<li><a href="index.php?c=show">企业环境</a></li>
						<li class="job_list_tit_cur"><a href="index.php?c=product">企业产品</a></li>
					</ul>
				</div>

				<div class="com_m_search">
					<input  class="com_m_tj" onclick="location.href='index.php?c=product&act=add'" type="button" value="+ 添加产品"> 
					<form action="index.php" method="get">
						<input name="c" type="hidden" value="product">
						<div class="com_m_search_box">
							<input name="keyword" type="text" class="com_m_search_box_text" placeholder="请输入产品关键字">
							<input name="" type="submit" class="com_m_search_box_bth" value=" ">
						</div>
					</form>
				</div>

				<div class="com_body">
					<div class="admin_textbox_04">
						<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
						<form action="index.php" method="get" target="supportiframe" id='myform'>
							<input type="hidden" name="c" value="product" />
							<input type="hidden" name="act" value="del" />

							<div id="job_checkbokid">
								<table class="com_table">
									<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
										<tr>
											<th width="20">&nbsp;</th>
											<th>产品名称</th>
											<th>添加时间</th>
											<th>状态 </th>
											<th width="200">操作</th>
										</tr>
									<?php }?>

									<?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
										<tr>
											<td><input class="job_news_input" type='checkbox' name="delid[]" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" ></td>
											<td><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'productshow','id'=>'`$uid`','pid'=>'`$job.id`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
</a></td>
											<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['ctime'],'%Y-%m-%d');?>
</td>
											<td align="center">
												<?php if ($_smarty_tpl->tpl_vars['job']->value['status']=="0") {?> <span class="wate_verify">等待审核</span><?php }?>
												<?php if ($_smarty_tpl->tpl_vars['job']->value['status']=="1") {?> <span class="y_verify">已审核</span><?php }?>
												<?php if ($_smarty_tpl->tpl_vars['job']->value['status']=="2") {?> <span class="n_verify">未通过</span> | <a href="javascript:;" class="looklist" onclick="show_msg('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
')" style="display:inline">查看原因</a><?php }?>    
											</td>
											<td>
												<a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'productshow','id'=>$_smarty_tpl->tpl_vars['uid']->value,'pid'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" target="_blank"  class=" com_bth cblue">预览</a>
												<a href="index.php?c=product&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"  class=" com_bth cblue">修改</a>
												<a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=product&act=del&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
')"  class=" com_bth cblue">删除</a>   
											</td>
										</tr>
									<?php }
if (!$_smarty_tpl->tpl_vars['job']->_loop) {
?>
										<?php if ($_GET['keyword']!='') {?>
											<tr>
												<td colspan="8" class="table_end">
													<div class="msg_no">没有搜索到相关的企业产品信息。</div>
												</td>
											</tr>
										<?php } else { ?>
											<tr>
												<td colspan="8" class="table_end">
													<div class="com_msg_no">
														<p>亲爱的用户，目前您还没有上传企业产品信息</p>
														<p>立即上传产品信息，展示图最佳尺寸：270*180</p>
														<a href="index.php?c=product&act=add" class="com_msg_no_bth com_submit">点击添加</a>
													</div>
												</td>
											</tr>
										<?php }?>
									<?php } ?>
					  
									<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?> 
										<tr>
											<td colspan="8" class="table_end">
												<div class="com_Release_job_bot">
													<span class="com_Release_job_qx">
														<input id='checkAll'  type="checkbox" onclick='m_checkAll(this.form)'> 全选 
														<input class=c_btn_02 type="button" name="subdel" value="批量删除" onclick="return really('delid[]');"> 
													</span> 
												</div>    
												<div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
											</td>
										</tr>
									<?php }?>
								</table>
							</div>	
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<?php echo '<script'; ?>
>
		function show_msg(id){
			$.post("index.php?c=product&act=show",{id:id},function(data){
				if(data){
					data=eval('('+data+')');
					$("#msgs").html(data.statusbody);
					var layindex = $.layer({
						type : 1,
						title :'查看原因', 
						closeBtn : [0 , true],
						border : [10 , 0.3 , '#000', true],
						area : ['400px','200px'],
						page : {dom :"#showmsg"}
					});
					$("#layindex").val(layindex);
				}
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
					<div class="admin_Operating_sub" style="margin-top:10px;"> 
						&nbsp;&nbsp;<input type="button" onClick="layer.close($('#layindex').val());" class="cancel_btn" value='确认'>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
