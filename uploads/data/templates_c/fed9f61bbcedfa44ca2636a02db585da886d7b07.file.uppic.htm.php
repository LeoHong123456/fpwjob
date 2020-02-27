<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-17 12:06:11
         compiled from "/www/fpwjob/uploads/app/template/member/com/uppic.htm" */ ?>
<?php /*%%SmartyHeaderCode:19058108705e4a1133229465-09856343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fed9f61bbcedfa44ca2636a02db585da886d7b07' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/uppic.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19058108705e4a1133229465-09856343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4a1133260485_24397667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4a1133260485_24397667')) {function content_5e4a1133260485_24397667($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/imgareaselect/imgareaselect.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/imgareaselect/jquery.imgareaselect.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/imgareaselect/ajaxfileupload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>  
<div class="w1000">
  <div class="admin_mainbody"> 
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class=right_box>
    <div class="admincont_box" style="height:900px;">
      <div class="com_tit"><span class="com_tit_span">企业LOGO</span> </div>
      <div class="com_body">
  <div class="admin_new_tip ">
            <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
            <div class="admin_new_tip_list_cont">
              <div class="admin_new_tip_list"> 提示：有时因页面缓存问题，上传后照片不能及时更新请击刷新页面即可</div>
             </div>
          </div>
  <div class="resume_box_list">
    <div class="uppic_left">
            <div class="uppic_tip">方式一：选择本地LOGO，上传编辑企业LOGO</div>
            <div class="uppic_tip_bth">
             <a class="uppic_tip_bthupload" href="javascript:;">选择LOGO</a>
               <input id="image" class="uppic_tip_bthfile" type="file" name="image" onchange="ajaxfile();">
             </div>
             <div class="uppic_tip_gs">最大<?php echo $_smarty_tpl->tpl_vars['config']->value['file_maxsize'];?>
M,支持<?php echo $_smarty_tpl->tpl_vars['config']->value['pic_type'];?>
格式</div>    
             <div class="clear"></div>
             <div class="uppic_tit">
				LOGO预览
				<?php if ($_smarty_tpl->tpl_vars['company']->value['logo_status']=='1') {?>
					<font color="#f00">审核中</font>
				<?php } elseif ($_smarty_tpl->tpl_vars['company']->value['logo_status']=='2') {?>
					<font color="#f00">未通过</font>
				<?php }?>
			</div>
			
             
              <div class="oppic_img_big">
              <div class="oppic_img_big_img" style="width:140px;height:140px;"><img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" width='140' height='140' onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);"/></div>
              <div class="oppic_img_big_p" style="width:140px;">标准LOGO尺寸 140×140</div>
            </div>
            
            
              <div class="clear"></div>  
          <div class="uppic_flash" style="display:none;" id='uppic_flash'> 
			<div class="uppic_big_zx">
				<img src="" style="float: left; margin-right: 10px;" id="thumbnail" />
               </div>
               <div style="width:200px; float:left"> 
                <div id="preview1" class="uppic_previ1">
					<img id="preview1_img" src="" style="position: relative;"/>
				</div>
            </div>       
			<div class="uppic_pb">
			<form name="form1" id="form1">
				<input name="sizeit" id="sizeit" type="submit" value="保存LOGO"  class="uppic_pb_bth"/>	
			</form>
          </div> 
          </div>
             </div>
        
           <div class="uppic_right">
          
			<div class="uppic_right_tit">方式二：手机拍照上传</div>
			<div class="uppic_ewm">
			 <img src="<?php echo smarty_function_url(array('m'=>'upload','c'=>'qrcode','type'=>4),$_smarty_tpl);?>
" alt="手机扫码拍照上传" width="130" height="130" />
			 </div>
			<div class="uppic_ewm_p"> 扫描二维码 </div>
			<div class="">  手机拍照上传后，请刷新此页面 </div>
		</div>
         
          
        
      </div>
      
    </div>
  </div>
</div>
</div>
</div> 

<?php echo '<script'; ?>
>
function ajaxfile() {
	if($("#image").val() != '') {
		layer.load('图片上传中，请稍候....', 0);
		$.ajaxFileUpload({
			url: 'index.php?c=uppic&act=ajaxfileupload',
			secureuri: false, 
			fileElementId: 'image', 
			dataType: 'json', 
			success: function (data, status){  
				layer.closeAll('loading');
				if (data.s_thumb) {
					layer.msg(data.s_thumb, 2, 8);
				} else {
					hideLoading(data.url);
				}
		   }
		})
	}
}
var size1={
	width:140,
	height:140
}
$('#preview1').width(size1.width);
$('#preview1').height(size1.height);
function hideLoading(pic) {
	$("#thumbnail").attr({ 'src': pic });
	$("#preview1_img").attr({ 'src': pic }); 
	$('#uppic_flash').show();
	var ias = $('#thumbnail')
	.imgAreaSelect({
		aspectRatio: '140:140', 
		onSelectChange: lis, 
		onInit: function () {
			var _opt = ias.getOptions();
			render($('#preview1_img'), $("#thumbnail")[0], {
				height: _opt.y2 - _opt.y1,
				width: _opt.x2 - _opt.x1,
				x1: _opt.x1,
				x2: _opt.x2,
				y1: _opt.y1,
				y2: _opt.y2
			}, size1);
		},
		instance: true,
		keys: true,
		x1: 37, 
		y1: 15,
		x2: size1.width,
		y2: size1.height
	});
}
function lis(img, sel) {
	render($('#preview1 img'), img, sel, size1); 
}
function render(target, img, sel, size) {
	var scale = size.width / sel.width;
	target.css({
		width: Math.round(scale * $(img).width()),
		height: Math.round(scale * $(img).height())
	});
	target.css({
		marginLeft: '-' + Math.round(scale * sel.x1) + 'px',
		marginTop: '-' + Math.round(scale * sel.y1) + 'px'
	});
	target.data('scale', scale);
	target.data('width', sel.width);
	target.data('height', sel.height);
	target.data('x', sel.x1);
	target.data('y', sel.y1);
}

$(function () {
	$('#form1').submit(function (e) {
		e.preventDefault();
		e.stopPropagation();
		var preview1 = $('#preview1 img'); 
		$.post("index.php?c=uppic&act=savethumb", {
			sizeit: true,
			count: 1,
 			width1: preview1.data('width'),
			height1: preview1.data('height'),
			x1: preview1.data('x'),
			y1: preview1.data('y'),
			img1: $('#preview1_img').attr('src'),
			scale1: preview1.data('scale') 
		}, function (res) {
			var _n = parseInt(res);
			if (_n == 2) {
				layer.msg('LOGO设置失败！', 2, 8,function(){location.reload();}); 
				
			} else {
				layer.msg('LOGO设置成功！', 2, 9,function(){location.reload();}); 
			}
		});
	});
});
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
