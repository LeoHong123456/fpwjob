<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 17:00:17
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_comclass_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:15291894625dbd45a10e2794-15307748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dec1a8d74a3ff36bf2a5a7c0f5847e907160d64c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_comclass_add.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15291894625dbd45a10e2794-15307748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'row' => 0,
    'coupon' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd45a114c439_43021446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd45a114c439_43021446')) {function content_5dbd45a114c439_43021446($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link href="./images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
		<link href="./images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
		<link href="./images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet">
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	
	</head>
	
	<body class="body_ifm">
	
		<div class="infoboxp">
			<div class="tabs_info">
			  	<ul>
				    <li class="curr"> <a href="index.php?m=admin_comrating" >套餐设置</a></li>
				    <li> <a href="index.php?m=admin_comrating&c=server" >增值服务</a> </li>
			  	</ul>
			</div>
			
			<div class="admin_new_tip">
				<a href="javascript:;" class="admin_new_tip_close"></a>
				<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
			  	<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
			  	<div class="admin_new_tip_list_cont">
			    	<div class="admin_new_tip_list">企业会员等级关乎您的收入问题，请谨慎添加和修改并注意整体的合理性。</div>
			  	</div>
			</div>
			
			<div class="clear"></div>
			
	  		<div class="tag_box mt10">
				<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
				<form id="classform" class="layui-form" name="myform" target="supportiframe" action="index.php?m=admin_comrating&c=saveclass" method="post" id="myform" enctype="multipart/form-data">
				  	<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				  	<input name="category" value="1" type="hidden"/>
	  				
	  				<table width="100%" class="table_form table_form_thr">
	  					<tr><td colspan="4" bgcolor="#f0f6fb"><div class="admin_bold">套餐设置</div></td></tr>
	   					<tr>
	   						<th width="160">会员模式：</th>
						   	<td colspan="3">
						      	<div class="layui-form-item">
						        	<div class="layui-input-inline">
						          		<input type="radio" name="type" value="1" title="套餐模式" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1) {?>checked<?php }?> lay-filter="type">
						          		<input type="radio" name="type" value="2" title="时间模式" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']==2) {?>checked<?php }?> lay-filter="type">
						        	</div>
									<span class="admin_web_tip">套餐模式针对下载简历等数量控制，时间模式在服务有效期内，不限数量，可以限制每日上限</span>
						      	</div>
						  	</td>
						</tr>
						
						<tr>
						 	<th>会员等级名称：</th>
						 	<td colspan="3">
						  		<input type="text" name="name" id="name" class="admin_comclass_add_text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
">
						      	<input type="checkbox" name="youhui" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['yh_price']) {?> checked <?php }?> title="优惠活动" lay-filter="youhui">
						 	</td>
						</tr>
						
					   	<tr class="admin_table_trbg vip_type_youhui" <?php if ($_smarty_tpl->tpl_vars['row']->value['yh_price']<1) {?>style="display:none;"<?php }?>>
					  		<th>设置优惠：</th>
					  		<td colspan="3">
					    		<div class="layui-form-item">
					      			<label class="layui-form-label">优惠后价格：</label>
					      			<div class="layui-input-inline">
					        			<input type="text" id="th_price" name="yh_price" style="width:80px" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['yh_price'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')">
					      			</div>
					      			<div class="layui-form-mid layui-word-aux">元</div>
					      			<label class="layui-form-label">优惠日期：</label>
					      			<div class="layui-input-inline">
					        			<input type="text" id="time" name="time" style="width:180px" class="layui-input" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['time_start']&&$_smarty_tpl->tpl_vars['row']->value['time_end']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['time_start'],'%Y-%m-%d');?>
 ~ <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['time_end'],'%Y-%m-%d');?>
 <?php }?>">
					      			</div>
					      			<label class="layui-form-label">赠送优惠券:</label>
					      			<div class="layui-input-inline">
										<select name="coupon" lay-filter="coupon">
											<option value="">请选择</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['coupon']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
									        	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['coupon']==$_smarty_tpl->tpl_vars['v']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</td>
					   	</tr>
	    
					  	<tr>
					  		<th>服务购买价格：</th>
					  		<td colspan="3">
						    	<div class="admin_comclass_addjg_box">
						      		<input type="text" name="service_price" id="service_price" class="admin_comclass_addjg" size="12" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['service_price'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')">
						      		<span class="admin_comclass_add_dw">元</span> 
						    	</div>
							</td>
					  	</tr>
					  	
	  					<tr>
	  						<th>服务有效时间：</th>
	  						<td colspan="3">
							    <div class="admin_comclass_add_right">
							     	<div class="admin_comclass_addjg_box">
							      		<input type="text" name="service_time" id="service_time" class="admin_comclass_addjg" size="12" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['service_time'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">
							      		<span class="admin_comclass_add_dw">天</span>
							     	</div> <!--<span class="admin_comclass_add_tip">( 提示：0 代表不限 )</span>-->
							    </div>
							</td>
	  					</tr>
	  					
						<tr>
							<th>排序：</th>
							<td colspan="3">
						    	<div class="admin_comclass_add_right">
						      		<input type="text" name="sort" id="sort" class="admin_comclass_add_text" size="12" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sort'];?>
" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')">
						      		<span class="admin_web_tip">大前小后</span> 
						    	</div>
						    </td>
						</tr>
						
						<tr>
							<th>状态：</th>
							<td colspan="3">
							    <div class="admin_comclass_add_right">
							      	<div class="layui-form-item">
								        <div class="layui-input-inline">
								          	<input type="radio" name="display" value="1" title="启用" <?php if ($_smarty_tpl->tpl_vars['row']->value['display']==1) {?>checked<?php }?>>
								          	<input type="radio" name="display" value="0" title="不启用" <?php if ($_smarty_tpl->tpl_vars['row']->value['display']==0) {?>checked<?php }?>>
								        </div>
								        <span class="admin_web_tip">前台是否可见</span>
							      	</div>
							    </div>
							</td>
						</tr>
						
					  	<tr>
					  		<th>会员等级图标：</th>
					  		<td colspan="3">
						      	<div class="layui-form-item">
									<div class="layui-input-inline">
										<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'com_pic',imgid: 'imgicon',parentid: 'imgparent'}">上传图片</button>
										<input type="hidden" id="layupload_type" value="2"/>
										<input type="hidden" id="upload_path" value="compic"/>
										<input type="hidden" name="com_pic" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['com_pic'];?>
"/>
									</div>	
									<div id="imgparent" class="<?php if (!$_smarty_tpl->tpl_vars['row']->value['com_pic']) {?>none<?php }?>" layui-form-mid layui-word-aux>
										<img id="imgicon" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['com_pic'];?>
" width="28" height="28">
										<?php if ($_smarty_tpl->tpl_vars['row']->value['com_pic']) {?>
											<a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?m=admin_comrating&c=delpic&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');" style="color:red;">删除图标</a>
										<?php }?>
									</div>
						      	</div>
					   		</td>
					  	</tr>
	
					   	<tr>
					   		<th>会员等级说明：</th>
					   		<td colspan="3">
					    		<div class="admin_comclass_add_right">
					      			<textarea name="explains" id="explain" rows="3" cols="50" class="admin_explain_textarea_w400"><?php echo $_smarty_tpl->tpl_vars['row']->value['explains'];?>
</textarea>
					      			<span class="admin_web_tip">类别备注说明</span> 
					    		</div>
							</td>
					   	</tr>
					   	
						<tr>
							<th>赠送<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</th>
							<td colspan="3">
						    	<div class="admin_comclass_add_right">
						      		<input type="number" name="integral_buy" id="integral_buy" min="0" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['integral_buy'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" class="admin_comclass_add_text">
						      		<span class="admin_web_tip">企业购买套餐赠送一定积分用于职位置顶、紧急招聘等服务 </span> 
						    	</div>
							</td>
						</tr>
						
	   					<tr>
	   						<th>增值服务折扣：</th>
	   						<td colspan="3">
						  		<div class="admin_comclass_addjg_box">    
						  			<input type="number" name="service_discount" id="service_discount" min="0" max="100" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['service_discount'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" class="admin_comclass_addjg">
						      		<span class="admin_comclass_add_dw">折</span>
						  		</div>
							</td>
	   					</tr>
	  
	   					<tr class="admin_comclass_add_list vip_type">
	     					<th>
	   							<div class=" vip_type_title_1" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']==2) {?> style="display:none;" <?php }?> >设置套餐：</div>
	 							<div  class=" vip_type_title_2" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']!=2) {?> style="display:none;"<?php }?>>
	 								<font color="red">限制时间会员每日最大操作次数：</font>
	 							</div>
	     					</th>
	    
	    					<td colspan="3">
						      	<ul class="admin_comclass_add_n">
							        <li> 
							        	<span class="admin_comclass_add_n_s">发布职位</span>
							          	<input type="text" name="job_num" id="job_num" class="admin_comclass_add_n_text" size="6" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['job_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">
							          	<span class="admin_comclass_add_n_dw">份</span>
							        </li>
							        <li> 
							        	<span class="admin_comclass_add_n_s">下载简历</span>
							         	<input type="text" name="resume" id="resume" class="admin_comclass_add_n_text" size="6" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['resume'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">							         
							        	<span class="admin_comclass_add_n_dw">份</span>
							        </li>
							        <li> 
							        	<span class="admin_comclass_add_n_s">邀请面试</span>
							          	<input type="text" name="interview" id="interview"  class="admin_comclass_add_n_text" size="6" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['interview'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">
							          	<span class="admin_comclass_add_n_dw">份</span>
							        </li>
						      	</ul>
 							 	<div>
							    	<ul class="admin_comclass_add_n">
							            <li> 
							            	<span class="admin_comclass_add_n_s">刷新职位</span>
							              	<input type="text" name="breakjob_num" id="breakjob_num" class="admin_comclass_add_n_text" size="6" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['breakjob_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">
							            	<span class="admin_comclass_add_n_dw">次</span> 
							            </li>
							            <li> 
							            	<span class="admin_comclass_add_n_s">发布兼职</span>
							              	<input type="text" name="part_num" id="part_num"  class="admin_comclass_add_n_text" size="6" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['part_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">
							              	<span class="admin_comclass_add_n_dw">份</span>
							            </li>
							            <li> 
							            	<span class="admin_comclass_add_n_s">刷新兼职</span>
							              	<input type="text" name="breakpart_num" id="breakpart_num" class="admin_comclass_add_n_text" size="6" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['breakpart_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">
							              	<span class="admin_comclass_add_n_dw">次</span>
							            </li>
							       	</ul>
						        </div>
						        <div >
						          	<ul class="admin_comclass_add_n">
						            	<li> 
						            		<span class="admin_comclass_add_n_s">发布猎头职位</span>
						              		<input type="text" name="lt_job_num" id="lt_job_num"  class="admin_comclass_add_n_text" size="6" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['lt_job_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">
						            		<span class="admin_comclass_add_n_dw">份</span>
						            	</li>
						            	<li> 
						            		<span class="admin_comclass_add_n_s">刷新猎头职位</span>
						              		<input type="text" name="lt_breakjob_num" id="lt_breakjob_num"  class="admin_comclass_add_n_text" size="6" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['lt_breakjob_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">
						             		<span class="admin_comclass_add_n_dw">次</span>
						            	</li>
						           	 	<li> 
						           	 		<span class="admin_comclass_add_n_s"> 下载高级简历</span>
						              		<input type="text" name="lt_resume" id="lt_resume"  class="admin_comclass_add_n_text" size="6" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['lt_resume'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">
						              		<span class="admin_comclass_add_n_dw">份</span>
						           	 	</li>
						          	</ul>
						        </div>
						        <div >
						          	<ul class="admin_comclass_add_n">
						      			<li class="com_com_a_list_s_w500">
						      				<span class="admin_comclass_add_n_s"> 招聘会报名</span>
						              		<input type="text" name="zph_num" id="zph_num"  class="admin_comclass_add_n_text" size="6" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['zph_num'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">
						            		<span class="admin_comclass_add_n_dw">次</span>
						      			</li>
						           </ul>
						        </div>
	  						</td>
	   					</tr>
					  	<tr> 
					  		<th>&nbsp;</th>
					   		<td colspan="3">
					  			<input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
					  			<input class="layui-btn layui-btn-normal" type="button" onclick="checkform()" value="提交">  
					 		</td>
					  	</tr>
					</table>
	  			</form>  
			</div>
		</div>
	</body>
	<?php echo '<script'; ?>
 type="text/javascript">
	    layui.use(['layer', 'form', 'laydate'], function() {
	        var layer = layui.layer,
	            form = layui.form,
	            laydate = layui.laydate,
	            $ = layui.$;
	
	        form.on('checkbox(youhui)', function(data) {
	            if(data.elem.checked) {
	                $(".vip_type_youhui").toggle();
	            } else {
	                $(".vip_type_youhui").toggle();
	            }
	        });
	
	        laydate.render({
	            elem: '#time',
	            range: '~'
	        });
	
	        form.on('radio(type)', function(data) {
	            if(data.elem.value == "1") {
	                $('.vip_type_title_1').show();
	                $('.vip_type_title_2').hide();
	            } else {
	                $('.vip_type_title_1').hide();
	                $('.vip_type_title_2').show();
	            }
	        });
	
	    });
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	    var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
	
	    function checkform() {
	        if($("#name").val() == "") {
	            parent.layer.msg("等级名称不能为空！", 2, 8);
	            return false;
	        }
	        if($("#service_price").val() == "") {
	            parent.layer.msg("价格不能为空！", 2, 8);
	            return false;
	        }
	        if($("input[name='youhui']").attr("checked") == 'checked') {
	            if($("#yh_price").val() == '') {
	                parent.layer.msg("优惠价格不能为空！", 2, 8);
	                return false;
	            }
	            if($("#time").val() == '') {
	                parent.layer.msg("请选择优惠时间！", 2, 8);
	                return false;
	            }
	        }
	        $("#classform").submit();
	    }
	    $(".tips_class").hover(function() {
	        var msg_id = $(this).attr('id');
	        var msg = $('#' + msg_id + ' + font').html();
	        if($.trim(msg) != '') {
	            layer.tips(msg, this, {
	                guide: 1,
	                style: ['background-color:#5EA7DC; color:#fff;top:-7px', '#5EA7DC']
	            });
	            $(".xubox_layer").addClass("xubox_tips_border");
	        }
	    }, function() {
	        var msg_id = $(this).attr('id');
	        var msg = $('#' + msg_id + ' + font').html();
	        if($.trim(msg) != '') {
	            layer.closeAll('tips');
	        }
	    });
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
> 
</html><?php }} ?>
