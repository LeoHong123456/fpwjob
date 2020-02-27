<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-24 13:21:46
         compiled from "/www/fpwjob/uploads/app/template/admin/crm_concern_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:14642897055e535d6a9723b3-68231815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '045a20b478a69dfec74a8a1958081f5d54da9bd7' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/crm_concern_list.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14642897055e535d6a9723b3-68231815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'rows' => 0,
    'key' => 0,
    'v' => 0,
    'list' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e535d6aa11a48_43728088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e535d6aa11a48_43728088')) {function content_5e535d6aa11a48_43728088($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.searchurl.php';
if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="./js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png,.admin_infoboxp_tj,');
<?php echo '</script'; ?>
>
<![endif]-->

<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/show_pub.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>

<title>后台管理</title>
</head>

<body class="body_ifm">
	<div class="infoboxp"> 
		
		<div class="admin_new_tip">
			<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
			<div class="admin_new_tip_list_cont">
				<div class="admin_new_tip_list">该页面展示了所有业务员全部的客户关怀记录。</div>
				<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
			</div>
		</div>
    
		<div class="clear"></div>

		<div class="admin_new_search_box">
			<div class="admin_new_search_name">搜索类型：</div>
			
			<form action="index.php" name="myform" method="get" >
				
				<input type="hidden" name="m" value="crm_concern"/>
				<input type="hidden" name="c" value="list"/>
				<input type="hidden" name="status" value="<?php echo $_GET['status'];?>
"/>
				<input type="hidden" name="rec" value="<?php echo $_GET['rec'];?>
"/>
				<input type="hidden" name="time" value="<?php echo $_GET['time'];?>
"/>
				<input type="hidden" name="rating" value="<?php echo $_GET['rating'];?>
"/>
			
				<div class="admin_Filter_text formselect" did="dcom_type"> 
				  
					<input type="button" <?php if ($_GET['type']=='1'||$_GET['type']=='') {?> value="企业名称" <?php } elseif ($_GET['type']=='2') {?> value="用户名称" <?php } elseif ($_GET['type']=='3') {?> value="联系人" <?php } elseif ($_GET['type']=='4') {?> value="联系电话" <?php } elseif ($_GET['type']=='5') {?> value="联系邮箱" <?php } elseif ($_GET['type']=='6') {?> value="记录ID" <?php }?> class="admin_new_select_text" id="bcom_type">
					
					<input type="hidden" name="type" id="com_type" value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>"/>
					
					<div class="admin_Filter_text_box" style="display:none" id="dcom_type">
					
						<ul>
							<li><a href="javascript:void(0)" onClick="formselect('1','com_type','企业名称')">企业名称</a></li>
							<li><a href="javascript:void(0)" onClick="formselect('2','com_type','用户名称')">用户名称</a></li>  
							<li><a href="javascript:void(0)" onClick="formselect('3','com_type','联系人')">联系人</a></li>  
							<li><a href="javascript:void(0)" onClick="formselect('4','com_type','联系电话')">联系电话</a></li>  
							<li><a href="javascript:void(0)" onClick="formselect('5','com_type','用户邮箱')">联系邮箱</a></li>
							<li><a href="javascript:void(0)" onClick="formselect('6','com_type','用户ID')">关怀记录ID</a></li>
						</ul>  
					</div>

				</div>

				<input type="text" placeholder="输入你要搜索的关键字" name="keyword" class="admin_new_text">
				<input type="submit" name='news_search' value="搜索" class="admin_new_bth"/>
				
				<a href="javascript:void(0);" onclick="$('.admin_screenlist_box').toggle();" class="admin_new_search_gj">高级搜索</a>
			
			</form>

			<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		</div>

		<div class="clear"></div>  
    
		<div class="table-list" style="color:#898989">
			<div class="admin_table_border">
				<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
				<form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
					<input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
					
					<table width="100%">
						<thead>
							<tr class="admin_table_top">
							  
								<th style="width:20px;">
									<label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label>
								</th>

								<th> 
									<?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?> 
										<a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'crm_concern','untype'=>'order,t'),$_smarty_tpl);?>
">
											记录ID<img src="images/sanj.jpg"/>
										</a>
									<?php } else { ?> 
										<a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'crm_concern','untype'=>'order,t'),$_smarty_tpl);?>
">
											记录ID<img src="images/sanj2.jpg"/>
										</a> 
									<?php }?> 
								</th>

								<th>业务员</th>
								<th>企业id</th>
								<th align="left">企业名称</th>
								<th>联系人</th>
								<th>电话/邮箱</th>
								<th align="left">会员等级/到期时间</th>
								<th>关怀时间</th>
								<th>关怀方式</th>
								<th>关怀内容简述</th>
								<th>备注</th>
								<th>关怀状态</th>
								<th>下次回访时间</th>
								<th>回访说明</th>
 							</tr>
						</thead>

						<tbody>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<tr align="center" <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
									<td>
										<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" email="<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
" moblie="<?php echo $_smarty_tpl->tpl_vars['v']->value['telphone'];?>
" style="margin-left:5px;"/>
 									</td>
								
									<td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>

									<td align="left" class="td1" style="text-align:center;">
										<div class="mt5"><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_name'];?>
</div>
										<div class="mt5"><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_username'];?>
</div>
									</td>

									<td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['comid'];?>
</span></td>
								
									<td align="left">

										<div class="">
											<a href="index.php?m=crm_customer&c=Imitate&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['comid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a>
										</div>
										
										<div class="mt5">
											<a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['comid']),$_smarty_tpl);?>
" target="_blank" class="admin_com_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
										</div>
									</td>

									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['linkman'];?>
</td>

									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['linktel'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['v']->value['linkmail'];?>
</td> 

									<td align="left">
										<?php if ($_smarty_tpl->tpl_vars['v']->value['vip_etime']<time()&&$_smarty_tpl->tpl_vars['v']->value['vip_time']!=0) {?>
											<?php if ($_smarty_tpl->tpl_vars['v']->value['vip_done']==0) {?>
												 过期会员
											<?php }?>
										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['v']->value['rating_name'];?>

										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['vip_etime']) {?>
											<div class="mt5"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['vip_etime'],"%Y-%m-%d");?>
</div>
										<?php }
echo $_smarty_tpl->tpl_vars['list']->value['uid'];?>

									</td>
								
									<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['time'],"%Y-%m-%d");?>
</td>
								
									<td>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['type']==1) {?>电话<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']==2) {?>拜访<?php }?>
									</td>

									<td width="100" align="left">
										<?php if ($_smarty_tpl->tpl_vars['v']->value['content']) {?> 
											<?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['content'],0,10,"utf-8");?>

											<?php if (strlen($_smarty_tpl->tpl_vars['v']->value['content'])>10) {?> 
												<a href="javascript:void(0);" onclick="showInfo('关怀内容','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','1')" class="admin_cz_sc">[更多]</a>
											<?php }?>
										<?php }?>
									</td>
									<td width="100" align="left">
										<?php if ($_smarty_tpl->tpl_vars['v']->value['note']) {?> 
											<?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['note'],0,10,"utf-8");?>

											<?php if (strlen($_smarty_tpl->tpl_vars['v']->value['note'])>10) {?> 
											<a href="javascript:void(0);" onclick="showInfo('备注内容','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','2')" class="admin_cz_sc">[更多]</a>
											<?php }?>
										<?php }?>
									</td>  

									<td>
										<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
											等待客户反馈
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>
											已付费
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==3) {?>
											拒绝付费
										<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==4) {?>
											可能付费，需要再回访
										<?php }?>
									</td>
									<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['nexttime'],"%Y-%m-%d");?>
</td>
									 <td width="100" align="left">
									  <?php if ($_smarty_tpl->tpl_vars['v']->value['nextnote']) {?> 
											<?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['nextnote'],0,10,"utf-8");?>

											<?php if (strlen($_smarty_tpl->tpl_vars['v']->value['nextnote'])>10) {?> 
											<a href="javascript:void(0);" onclick="showInfo('回访说明','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','3')" class="admin_cz_sc">[更多]</a>
											<?php }?>
										<?php }?>
									</td>
								</tr>
							<?php } ?>
						  
							<?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['config']->value['sy_listnum']) {?>
								<tr>
									<?php if ($_smarty_tpl->tpl_vars['pagenum']->value==1) {?>
										<td colspan="3"> 从 1 到 <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
									<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value>1&&$_smarty_tpl->tpl_vars['pagenum']->value<$_smarty_tpl->tpl_vars['pages']->value) {?>
										<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['pagenum']->value*$_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
									<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value==$_smarty_tpl->tpl_vars['pages']->value) {?>
										<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
									<?php }?>

									<td colspan="12" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>

								</tr>
							<?php }?>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>

	<div id="showbox"  style="display:none; width: 480px; overflow:hidden"> 
		<div id="showboxmsg" style="width:480px; padding:20px;height:350px; line-height:25px; font-size:14px; overflow:auto"></div>   
	</div>
 
	<?php echo '<script'; ?>
>

		function set_rating(uid,name){
			layer.iframe(
				'index.php?m=crm_customer&c=getstatis&uid='+uid,
				'客户['+name+']套餐设置',
				['800px','600px'],
				'auto',
				{maxmin:true}
			);
		}

		function showInfo(title,id,type){
			var pytoken=$("#pytoken").val();
			$.post("index.php?m=crm_concern&c=getContent",{id:id,type:type,pytoken:pytoken},function(data){
				data=eval('('+data+')');
				$('#showboxmsg').html(data.content);
				$.layer({
					type : 1,
					title :title, 
					closeBtn : [0 , true],
					border : [10 , 0.3 , '#000', true],
					area : ['500px','400px'],
					page : {dom :"#showbox"}
				});
			});
		}

	<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
