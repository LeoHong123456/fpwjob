<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-17 11:09:46
         compiled from "/www/fpwjob/uploads/app/template/member/com/jobadd.htm" */ ?>
<?php /*%%SmartyHeaderCode:12359756705e4a03fad367c8-05930694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3712a66d3024c256bf7fec2349d017760e74087' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/jobadd.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12359756705e4a03fad367c8-05930694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'style' => 0,
    'company' => 0,
    'statis' => 0,
    'jobnum' => 0,
    'save' => 0,
    'row' => 0,
    'job_name' => 0,
    'city_index' => 0,
    'v' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'industry_index' => 0,
    'industry_name' => 0,
    'comdata' => 0,
    'comclass_name' => 0,
    'arr_data' => 0,
    'j' => 0,
    'job_link' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4a03fae38447_25761177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4a03fae38447_25761177')) {function content_5e4a03fae38447_25761177($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
	<div class="admin_mainbody">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/job.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/newclass.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/newclass.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lssave.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 language="javascript">
	var saveid=$("#id").val();
	var start = 30;
	var step = -1;
	if(!saveid){
		function count(){
			$("#atime").click(function(){ start=30});
			document.getElementById("totalSecond").innerHTML = start;
			start += step;
			if(start < 0 ){
				savejobform();
				start = 30;
			}
			setTimeout("count()",1000);
		}
		window.onload = count;	
	}
	
	function toDate(str){
		var sd=str.split("-");
		return new Date(sd[0],sd[1],sd[2]);
	}
	
function CheckPost(){
 	if($.trim($("#name").val())==''){layer.msg('职位名称不能为空！',2,8);return false;}
	if($("#job_post").val()==''){layer.msg('职位类别不能为空！', 2, 8);return false;}
	if($("#cityid").val()==''){layer.msg('工作地点不能为空！', 2, 8);return false;}

	var minsalary=$.trim($("#minsalary").val());
	var maxsalary=$.trim($("#maxsalary").val());
	if($("#salary_type").attr("checked")!='checked'){
		if(minsalary==''||minsalary=='0'){
			layer.msg('请填写薪资待遇！', 2, 8);return false;
		}
		if(maxsalary){
			if(parseInt(maxsalary)<=parseInt(minsalary)){
				layer.msg('最高工资必须大于最低工资！', 2, 8);return false;
			}
		}
	}
	var description = editor.getContent();
	if($.trim(description)==''){layer.msg('职位描述不能为空！', 2, 8);return false;}
	
	var islink=$("input[name='islink']").val();
	var isemail=$("input[name='isemail']").val();
	if(!islink){
		layer.msg('请选择联系方式！', 2, 8);return false;
	}else if(islink==2){
		var link_man=$.trim($("input[name='link_man']").val());
		var link_moblie=$.trim($("input[name='link_moblie']").val());
 		if(link_man==''||link_moblie==''){
			layer.msg('联系人及联系电话均不能为空！', 2, 8);return false;
		}
		if(link_moblie&& (isjsMobile(link_moblie)==false && !isjsTell(link_moblie))){
			layer.msg('联系电话格式错误！', 2, 8);return false;
		}
	} 
	if(isemail=='2'){
		var email=$.trim($("input[name='email']").val());
		if(email==''){
			layer.msg('请输入邮箱！', 2, 8);return false;
		}else if(check_email(email)==false){
			layer.msg('新邮箱格式错误！', 2, 8);return false;
		} 
	}
	var index = layer.load('执行中，请稍候...',0);
} 
function choice(id,type){
	if(type=='link'||type=='email'){
		if(id==1){
			$("#is"+type+"3").removeClass('admin_job_style_n');
			$("#is"+type+"2").removeClass('admin_job_style_n');
			$("#is"+type+id).addClass('admin_job_style_n');
			$("input[name='is"+type+"']").val(id);
			$("#new"+type).hide();
			$("#tblink").val(2)
		}else if(id==2){
			$("#is"+type+"3").removeClass('admin_job_style_n');
			$("#is"+type+"1").removeClass('admin_job_style_n');
			$("#is"+type+id).addClass('admin_job_style_n');
			$("input[name='is"+type+"']").val(id);
			$("#new"+type).show();
		}else if(id==3){
			$("#is"+type+"1").removeClass('admin_job_style_n');
			$("#is"+type+"2").removeClass('admin_job_style_n');
			$("#is"+type+id).addClass('admin_job_style_n');
			$("input[name='is"+type+"']").val(id);
			$("#new"+type).hide();
		}
	}
}
function returnmessagejob(frame_id){ 
	if(frame_id==''||frame_id==undefined){
		frame_id='supportiframe';
	}
	var message = $(window.frames[frame_id].document).find("#layer_msg").val(); 
	if(message != null){
		var url=$(window.frames[frame_id].document).find("#layer_url").val();
		var layer_time=$(window.frames[frame_id].document).find("#layer_time").val();
		var layer_st=$(window.frames[frame_id].document).find("#layer_st").val();
		var layer_url = $(window.frames[frame_id].document).find("#layer_url").val();
		layer.closeAll('loading');
		if(layer_st=='9'){
			
			$('#jobid').val(layer_url);
				$.layer({
					type : 1,
					move:false,
					fix: true,
					zIndex:666,
					title : '系统提示', 
					border : [10 , 0.3 , '#000', true],
					area : ['480px','330px'],
					page : {dom : '#addjob'},
					close: function(){
						<?php if ($_smarty_tpl->tpl_vars['config']->value['com_job_status']=='1') {?>
						window.location.href = "index.php?c=job&w=1";
						<?php } else { ?>
						window.location.href = "index.php?c=job&w=0";
						<?php }?>
					}
				});
		}else{
			if(url=='1'){
				layer.msg(message, layer_time, Number(layer_st),function(){window.location.reload();window.event.returnValue = false;return false;});
			}else if(url==''){

				layer.msg(message, layer_time, Number(layer_st));
			}else{
				layer.msg(message, layer_time, Number(layer_st),function(){window.location.href = url;window.event.returnValue = false;return false;});
			}
		} 
	}
}


<?php echo '</script'; ?>
>
<input type="hidden" id="comname" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
">
    <div class=right_box>
      <div class=admincont_box>
           <div class="com_tit"><span class="com_tit_span">新增职位</span></div>  
            <div class="com_body">
         <div class="admin_new_tip ">
        <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
        <div class="admin_new_tip_list_cont">
          <div class="admin_new_tip_list"> 
          
			<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>time()||$_smarty_tpl->tpl_vars['statis']->value['vip_etime']=="0") {?>
			
				<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==1) {?>

					您当前是<?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];
if ($_smarty_tpl->tpl_vars['jobnum']->value) {?> ，现已发布 <?php echo $_smarty_tpl->tpl_vars['jobnum']->value;?>
 条职位<?php }?>， 账号剩余职位数目：<?php echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];?>
条

				<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==2) {?>

					您当前是<?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>
，到期时间是<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']!="0") {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');
} else { ?>永久<?php }?>，在此之前您可以任意发布职位

				<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==0) {?>

					您当前是<?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];
if ($_smarty_tpl->tpl_vars['jobnum']->value) {?> ，现已发布 <?php echo $_smarty_tpl->tpl_vars['jobnum']->value;?>
 条职位<?php }?>， 账号剩余职位数目：<?php echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];?>
 条

				<?php }?>

            <?php } else { ?>

				您的会员已到期，为了更好的招聘人才，请先<a href="index.php?c=right" class="cblue"> 升级会员</a>！
			
			<?php }?>
			
		</div>
          <?php if ($_smarty_tpl->tpl_vars['save']->value) {?>
         
          <div id="forms"class="admin_new_tip_list">您有上次未提交成功的数据 <a href="javascript:;" onclick="savejob();" class="f60">恢复数据</a> </div>
          <?php }?> </div>
      </div>
        <iframe id="supportiframejob"  name="supportiframejob" onload="returnmessagejob('supportiframejob');" style="display:none"></iframe>
        <form name="MyForm" target="supportiframejob" method="post" action="index.php?c=jobadd&act=save" onsubmit="return CheckPost();" class="layui-form">
    
           <div class="com_release_box">
		<ul>
			<li>
				 <div class="com_release_name"><i class="ff0">*</i> 职位名称</div>
			 <div class="com_release_cont">
             <div class="com_release_cont_text">
					<input type="text" size="45" lay-verify="required" name="name" id='name' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" class="layui-input">
                    </div>
  					<span id="by_name" class="errordisplay">职位名不能为空</span> </div>
            </li>
            <li>
	        <div class="com_release_name"><i class="ff0">*</i> 职位类别</div>
			  <div class="com_release_cont">
              <div class="com_release_cont_text">
			   <input type="hidden" name="job_post" id="job_post" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['job_post']) {
echo $_smarty_tpl->tpl_vars['row']->value['job_post'];
} else {
echo $_smarty_tpl->tpl_vars['row']->value['job1_son'];
}?>"/>
 				<input class="layui-input layui_input_bg" type="button" id="workadds_job"   value="<?php if ($_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job_post']]) {
echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job_post']];
} elseif ($_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job1_son']]) {
echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['row']->value['job1_son']];
} else { ?>请选择职位类别<?php }?>" onclick="index_job_new(1,'#workadds_job','#job_post','left:100px;top:100px; position:absolute;','1');" readonly="readonly" />
                </div>
				</div>
			</li>
           <li>
		    <div class="com_release_name"><i class="ff0">*</i> 工作地点</div>
             <div class="com_release_cont">
             <div class="com_release_select com_release_selectw145">
					  <div class="layui-input-inline ">
						<select name="provinceid" lay-filter="citys" id="provinceid">
						  <option value="">请选择</option>
						  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['provinceid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
						  <?php } ?>
						</select>
					  </div>
                      			  </div>
                                   <div class="com_release_select com_release_selectw145">
					  <div class="layui-input-inline">
						<select name="cityid" lay-filter="citys" id="cityid">
						  <option value="">请选择</option>
						  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
						  <?php } ?>
						</select>
					  </div>
					    </div>
                        
					    <div class="com_release_select com_release_selectw145">
                    <div class="layui-input-inline" id="cityshowth" <?php if ($_smarty_tpl->tpl_vars['row']->value['three_cityid']<1) {?>style="display:none"<?php }?>>
						<select name="three_cityid" id="three_cityid">
						  <option value="">请选择</option>
						  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['three_cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
						  <?php } ?>
						</select>
					  </div>
				    </div>
              </div>
            </li>
         
            <li>
				<div class="com_release_name"><i class="ff0">*</i> 薪资待遇</div>
				
				<div class="com_release_cont">
					<div class="com_release_cont_textw130">
						<input type="text" size="5" id="minsalary" name="minsalary" <?php if ($_smarty_tpl->tpl_vars['row']->value['minsalary']) {?>value="<?php echo $_smarty_tpl->tpl_vars['row']->value['minsalary'];?>
"<?php }?>  onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="layui-input" placeholder="最低薪资"<?php if (!$_smarty_tpl->tpl_vars['row']->value['minsalary']&&!$_smarty_tpl->tpl_vars['row']->value['maxsalary']&&$_smarty_tpl->tpl_vars['row']->value['id']) {?> disabled="disabled"<?php }?>>
						<span class="com_release_cont_dw">元/月</span>
					</div>
					
					<span class="com_release_cont_line">- </span>

					<div class="com_release_cont_textw130">
						<input type="text" size="5" id="maxsalary" name="maxsalary" <?php if ($_smarty_tpl->tpl_vars['row']->value['maxsalary']) {?>value="<?php echo $_smarty_tpl->tpl_vars['row']->value['maxsalary'];?>
"<?php }?> onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"  class="layui-input" placeholder="最高薪资"<?php if (!$_smarty_tpl->tpl_vars['row']->value['minsalary']&&!$_smarty_tpl->tpl_vars['row']->value['maxsalary']&&$_smarty_tpl->tpl_vars['row']->value['id']) {?> disabled="disabled"<?php }?>>
						<span class="com_release_cont_dw">元/月</span>
					</div>
 					
					<input type="checkbox" id="salary_type" name="salary_type"  title="面议" value="1" <?php if (!$_smarty_tpl->tpl_vars['row']->value['minsalary']&&!$_smarty_tpl->tpl_vars['row']->value['maxsalary']&&$_smarty_tpl->tpl_vars['row']->value['id']) {?> checked="checked"<?php }?> lay-filter="salary_type" lay-skin="primary" />   
 			
				</div> 

            </li>
            <li>
				<div class="com_release_name"><i class="ff0">*</i> 职位描述</div>
				<div class="com_release_cont">
              
					<div class="Description" style="display:none;">
						<div class="Description_icon">
							<i class="Description_icon_i"></i>
							<div class="Description_box" style="display:none;">
								<i class="Description_icon_i_j"></i>
								点击职位链接，为你推荐的职位要求模板复制到编辑区域内！<br>您也可以编辑，直至完美！
							</div>
						</div>
						<div class="Description_box_mb">模板：<span id="JobRequInfoTemplate"></span></div>
					</div>
					<div class="clear"></div>
 					<?php echo '<script'; ?>
 id="description" name="description" type="text/plain" style="width:500px; height:180px;"> <?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
 <?php echo '</script'; ?>
>
					<span id="by_description" class="errordisplay">不能为空</span>
				</div>
            </li>
            
            
          <div class="com_release_tip"><span class="com_release_tip_bg">完善职位信息，让求职者更了解您的职位需求，增加简历投递量</span></div>
         
            
            <li>
           <div class="com_release_name">从事行业</div>
               <div class="com_release_cont">
 				
				 
				  <div class="layui-input-inline">
					<select name="hy" lay-filter="hy">
					  <option value="">请选择</option>
					  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['hy']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
					  <?php } ?>
					</select>
				 
				</div>

               </div>
            </li>
           <li>
             <div class="com_release_name">招聘人数</div>
         <div class="com_release_cont">
			
				  <div class="layui-input-inline">
					<select name="number" lay-filter="number">
					  <option value="">请选择</option>
					  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['number']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
					  <?php } ?>
					</select>
				
				</div>
              </div>
            </li>
             <li>
            <div class="com_release_name">工作经验</div>
              <div class="com_release_cont">
              
				  <div class="layui-input-inline">
					<select name="exp" lay-filter="exp">
 					  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['exp']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
					  <?php } ?>
					</select>
				
				</div>
              </div>
            </li>
            <li>
             <div class="com_release_name">到岗时间</div>
               <div class="com_release_cont">
               
				  <div class="layui-input-inline">
					<select name="report" lay-filter="report">
 					  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['report']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
					  <?php } ?>
					</select>
				 
				</div>
              </div>
            </li>
         <li>
             <div class="com_release_name">年龄要求</div>
              <div class="com_release_cont">
            
				  <div class="layui-input-inline">
					<select name="age" lay-filter="age">
					  <option value="">请选择</option>
					  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['age']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
					  <?php } ?>
					</select>
				
				</div>
              </div>
            </li>
         <li>
             <div class="com_release_name">性别要求</div>
               <div class="com_release_cont">
			
				  <div class="layui-input-inline">
					<select name="sex" lay-filter="sex">
 					  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					  <option value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['arr_data']->value['sex'][$_smarty_tpl->tpl_vars['row']->value['sex']]==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
					  <?php } ?>
					</select>
				
				</div>
              </div>
            </li>
          <li>
              <div class="com_release_name">教育程度</div>
              <div class="com_release_cont">
              
				  <div class="layui-input-inline">
					<select name="edu" lay-filter="edu">
 					  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['edu']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
					  <?php } ?>
					</select>
					
				</div>&nbsp;&nbsp;<input name="is_graduate" type="checkbox" value="1" title="可接受应届生" <?php if ($_smarty_tpl->tpl_vars['row']->value['is_graduate']) {?>checked<?php }?> lay-skin="primary" />
              </div>
            </li>
          <li>
             <div class="com_release_name">婚姻状况</div>
               <div class="com_release_cont">
              
				  <div class="layui-input-inline">
					<select name="marriage" lay-filter="marriage">
 					  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['marriage']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
					  <?php } ?>
					</select>
				  </div>
			
              </div>
            </li>
           
			<li>
              <div class="com_release_name">语言要求</div>
				
				<div class="layui-form-item">
			
		        <div class="layui-input-block">
		          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		          <input name="lang[]" id="lang<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value,$_smarty_tpl->tpl_vars['row']->value['lang'])) {?> checked="checked" <?php }?> type="checkbox" lay-skin="primary">
		        <?php } ?>
		        
		        </div>
		      </div>

            </li>
          
          </ul>
          </div>
            <div class="com_release_tip"><span class="com_release_tip_bg">联系方式默认为基本信息里的企业联系方式</span></div>
	<div class="job_touch">
		<input type="hidden" name="islink" id="islink" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['islink']) {
echo $_smarty_tpl->tpl_vars['row']->value['islink'];
} else { ?>1<?php }?>" />
		<div class="admin_job_js_w_list fl" style="margin-top:20px;">
			<div class="admin_job_js_list_ft mt10 fl"><span style="width:100%;">联系方式</span></div>
			<div class="admin_job_js_list_rt fl">
				<span class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['islink']==1||($_smarty_tpl->tpl_vars['row']->value['islink']==''&&$_smarty_tpl->tpl_vars['row']->value['infostatus']==1)) {?>admin_job_style_n<?php }?> fl" onclick="choice('1','link')" id="islink1">
					使用企业联系方式（<?php echo $_smarty_tpl->tpl_vars['company']->value['linkman'];?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['company']->value['linktel']) {
echo $_smarty_tpl->tpl_vars['company']->value['linktel'];
} else {
echo $_smarty_tpl->tpl_vars['company']->value['linkphone'];
}?>）
				</span>
				<span class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['islink']==2) {?>admin_job_style_n<?php }?> fl" onclick="choice('2','link')" id="islink2">
					使用新联系方式
				</span>
				<div id="newlink" <?php if ($_smarty_tpl->tpl_vars['row']->value['islink']!=2) {?> style="display:none;" <?php }?> >
					<div class="job_touch_other mt10 fl">
						
						<div class="layui-form-item">
						<div class="job_touch_other_tit fl">使用新联系方式</div>
							<div class="layui-input-inline">
								<input type="text" <?php if ($_smarty_tpl->tpl_vars['job_link']->value['link_man']&&$_smarty_tpl->tpl_vars['row']->value['islink']=='2') {?>value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_man'];?>
"<?php }?> placeholder="请输入联系人" id="link_man" name="link_man" class="layui-input"> 
							</div>
							<div class="layui-input-inline">
								<input type="tel" <?php if ($_smarty_tpl->tpl_vars['job_link']->value['link_moblie']&&$_smarty_tpl->tpl_vars['row']->value['islink']=='2') {?>value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_moblie'];?>
"<?php }?> id="link_moblie" name="link_moblie" placeholder="请输入联系电话" lay-verify="phone" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" class="layui-input">
							</div>
							<div class="layui-input-inline">
								<input name="type_switch" lay-filter="type_switch" lay-skin="switch" lay-text="开启|关闭" type="checkbox" >
								<input name="tblink" id="tblink" type="hidden" value="">
 								<div class="layui-form-mid layui-word-aux">同步到所有职位</div>
							</div>
 						</div>
					</div>
				</div> 
			</div>
		</div>    
	</div>
	<div class="admin_job_js_w_list fl">
		<div class="admin_job_js_list_ft fl"><span style="width:100%;">&nbsp;</span></div>
		<span class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['islink']==3||($_smarty_tpl->tpl_vars['row']->value['islink']==''&&$_smarty_tpl->tpl_vars['row']->value['infostatus']==2)) {?>admin_job_style_n<?php }?> fl" onclick="choice('3','link')" id="islink3">
			不向求职者展示联系方式（不想受到骚扰）
		</span>  
	</div>
                
             <div class="admin_job_js_w_list fl" style="margin-top:20px;">
                 <input type="hidden" name="isemail" id="isemail" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['isemail']) {
echo $_smarty_tpl->tpl_vars['row']->value['isemail'];
} else {
if ($_smarty_tpl->tpl_vars['company']->value['linkmail']) {?>1<?php } else { ?>0<?php }
}?>" />
                 <div class="admin_job_js_list_ft mt10 fl"><span style="width:100%;">接收简历的邮箱</span></div>
                 <div class="admin_job_js_list_rt fl">
                     <?php if ($_smarty_tpl->tpl_vars['company']->value['linkmail']) {?><span class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['isemail']==1||!$_smarty_tpl->tpl_vars['row']->value['isemail']) {?>admin_job_style_n<?php }?> fl" onclick="choice('1','email')" id="isemail1">使用企业邮箱（<?php echo $_smarty_tpl->tpl_vars['company']->value['linkmail'];?>
）</span><?php }?>
				     <span class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['isemail']==2) {?>admin_job_style_n<?php }?> fl" onclick="choice('2','email')" id="isemail2">使用新邮箱</span> 
			
				    <div class="" id="newemail" style="padding:10px 10px 10px 0px;<?php if ($_smarty_tpl->tpl_vars['row']->value['isemail']!=2) {?>display:none;<?php }?>">
                         <span class="admin_job_style admin_job_style_n fl" style="height:90px;">
                               <div class="admin_job_js_wr fl">使用新邮箱</div>
                               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['email'];?>
" placeholder="请填写新邮箱" class="payment_fp_touch_text" id="email" name="email">				         
                         </span>
                    
                     	 </div></div>
             
             <div class="admin_job_js_w_list fl">
                <div class="admin_job_js_list_ft fl"><span style="width:100%;">&nbsp;</span></div>
				 <span class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['isemail']==3) {?>admin_job_style_n<?php }?> fl" onclick="choice('3','email')" id="isemail3">不需要将收到的简历发送到邮箱</span> 
				
             </div>
             </div> <div class="clear"></div>
			
             
         <div class="clear"></div>
          <div class=admin_submit>
                <div class="admin_job_js_list_ft fl"><span style="width:100%;">&nbsp;</span></div>
          <div class=sub_btn>
			<input type="hidden" id="logid" name="logid">
              <input class="btn_01"  id="submitBtn"type="submit" name="submitBtn" value=" 提 交 操 作 ">
              <input name="jobcopy" value="<?php echo $_GET['jobcopy'];?>
" type="hidden"/>
           <?php if ($_GET['id']) {?>
            <input id="id"name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="hidden"/>
            <?php }?>
            <input name="state" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['state'];?>
" type="hidden"/>
             <input id="save"name="save" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" type="hidden"/>
          </div> <div class="clear"></div>
			</div>
        </form>
     
    </div>  </div>

       </div>
  
  </div>
</div>  <?php if (!$_GET['id']) {?>
     <div class="text_tips_bc">
   <div class="text_tips_bc_h1"> 保存临时信息</div>
   <div class="text_tips_bc_cont"> 
     <?php if ($_smarty_tpl->tpl_vars['save']->value['time']) {?>
     <div class="text_tips_bc_l">信息已于<?php echo $_smarty_tpl->tpl_vars['save']->value['time'];?>
保存</div>
     <?php }?>
     <div> 
     <div class="text_tips_bc_r">
     <div class="text_tips_bc_time"> <div class="text_tips_bc_time_c">  <span class="text_tips_bc_time_n" id="totalSecond"></span>s</div>后将自动保存已填信息</div>
     <a id="atime"href="javascript:;" onclick="savejobform();" class="text_tips_bc_bth">临时保存</a>
     </div>
     </div>
     </div>
      </div>
    <?php }?>

<input type='hidden' id='jobid' value=''>
<div class="job_tck_box" id="addjob" style="display:none;">
	<div class="job_box_div" style="width:440px;"> 
        <div class="jonadd_prompt_icon"></div>
		<div class="jonadd_prompt">
     <div class="jonadd_prompt_p"><span id="returnmsg" class="job_add_success">职位发布成功！</span></div>
        
        <a href="javascript:void(0)"  onclick="addjob_continue('<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
');return false;" class="job_add_continue">继续发布职位</a>
        </div>
        
        <div class="jonadd_prompt_img" id="qrcodeimg">
			<img src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
'  width='80' height='80'>
            <div class="jonadd_prompt_img_p">微信公众号</div>
        </div>
        
       
        <div class="jonadd_prompt_share_jy"  id="moreget">为了吸引更多求职者的关注，建议您设置：
		<a href="javascript:void(0)" onclick="urgent('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['row']->value['urgent']=='1') {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['urgent_time'],'%Y-%m-%d');
} else { ?>0<?php }?>')">紧急职位</a>
		<a href="javascript:void(0)" onclick="autojobs('','<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['row']->value['autodate'];?>
');">自动刷新</a>
		<input type="hidden" id="autodj" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['job_auto'];?>
"/>
		</div>  
         <div class="jonadd_prompt_share">让企业品牌更红，让招聘效果更高，立即分享转发招聘职位吧</div>
        <div class="jonadd_prompt_share_opt" id="share" style="height:50px;"></div>
	</div>
	
</div>
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/city.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
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
<?php echo '<script'; ?>
>
layui.use(['form', 'layer', 'laydate'], function(){
    var form = layui.form,
		layer = layui.layer,
		laydate = layui.laydate,
		$ = layui.$;  

	form.on('select(moneytype)', function(data){
      if(data.value == 1){
        $("#money_1").show();
        $("#money_2").hide();
      }else{
        $("#money_2").show();
        $("#money_1").hide();
      }
    });
 
	form.on('switch(type_switch)', function(data){
      var v = this.checked ? 1 : 2;
      $("#tblink").val(v);
    });

 	form.on('checkbox(salary_type)', function(data){
		if(data.elem.checked){
			$("#minsalary").attr("disabled","disabled");
			$("#maxsalary").attr("disabled","disabled");
			$("#minsalary").val(0);
			$("#maxsalary").val(0);
		}else if(!data.elem.checked){
			$("#minsalary").removeAttr("disabled","disabled");
			$("#maxsalary").removeAttr("disabled","disabled");
			$("#minsalary").val('<?php echo $_smarty_tpl->tpl_vars['row']->value['minsalary'];?>
');
			$("#maxsalary").val('<?php echo $_smarty_tpl->tpl_vars['row']->value['maxsalary'];?>
');
		}
    });

  });

	function addjob_continue(uid,integral_job){
		var gourl='index.php?c=jobadd';
		var url = weburl + '/index.php?m=ajax&c=ajax_day_action_check';
		$.post(url,
			{'type': 'addjob'},
			function(data){
				data = eval('(' + data + ')');
				if(data.status == -1){
					layer.msg(data.msg, 2, 8);
				}else if(data.status == 1){
					
					var addurl = 'index.php?c=jobadd&act=getJobNum';
					$.post(addurl,{uid:uid},function(data1){
 
 						if(data1 == 1 || (integral_job==0 && data1!=0)){
							window.location.href=gourl;
							window.event.returnValue = false;
							return false;
						}else if(data1 == 2){
							var msg='套餐已用完，继续操作将会消费'+integral_job+'元，您还可以<a href="index.php?c=right&act=added" style="color:red">购买增值包</a>，是否继续？';
							layer.confirm(msg, function(){
 								var height="300px";
 								$.layer({	
									type : 1,
									title : '发布职位',
									closeBtn : [0 , true],
									border : [10 , 0.3 , '#000', true],
									area : ['480px',height],
									page : {dom : '#issue_job'}
								});
 							});

						}else if(data1==0){
							var msg='会员已到期，您可以<a href="index.php?c=right" style="color:red">购买会员</a>，是否继续？';

							layer.confirm(msg, function(){
								window.location.href="index.php?c=right"; 
							});  
							
						}
					});
				}
			}
		);
	}
	var editor = UE.getEditor('description',{
		toolbars:[[ 'Source','|', 'Undo', 'Redo','Bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'fontfamily', 'fontsize',  'forecolor', 'backcolor', 'removeformat', 'autotypeset', 'pasteplain', '|','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload', '|', 'indent', '|','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify']],wordCount:false,elementPathEnabled:false,initialFrameHeight:200
	});

 	var second = 0;
	window.setInterval(function () {
		second ++;
	}, 1000);

	var url     = location.href, 
		refer   = document.referrer, 
		timeIn  = Math.ceil(new Date().getTime()/1000); 
	<?php if ($_GET['id']) {?>
		var opera=32;
	<?php } else { ?>
		var opera=31;
	<?php }?>
	$(function(){
		setTimeout(function(){ 
			$.post('index.php?c=log',{url:url,refer:refer,timeIn:timeIn,second:2,opera:opera},function(data){
				if(data){
					$("#logid").val(data);
				}
			})
		},2000);
		
    }) 
	
	window.onbeforeunload = function(){
		var logid = $("#logid").val();
 		if(second>2){ 
			$.post('index.php?c=log&act=gxLog',{id:logid,second:second},function(data){
				if(data) {
					return false;
				}
			})
		}
   	}
<?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/jobpay.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/jobserver.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
