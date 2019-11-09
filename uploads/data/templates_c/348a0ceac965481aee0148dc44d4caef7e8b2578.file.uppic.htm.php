<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 16:25:13
         compiled from "/www/fpwjob/uploads/app/template/member/lietou/uppic.htm" */ ?>
<?php /*%%SmartyHeaderCode:14613404405dc52669b09d39-62204015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '348a0ceac965481aee0148dc44d4caef7e8b2578' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/lietou/uppic.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14613404405dc52669b09d39-62204015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'bpic' => 0,
    'spic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc52669b56a79_64622681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc52669b56a79_64622681')) {function content_5dc52669b56a79_64622681($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/imgareaselect/imgareaselect.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
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
</head>

<body>
<!--header头部-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--内容部分content-->
<div class="m_content">
  <div class="wrap">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

         <div class="m_inner_youb fl">

       <div class="resume_box_list" >
    <div class="uppic_msg">提示：有时因页面缓存问题，上传后照片不能及时更新请击刷新页面即可 </div>
  
   <div class="uppic_left">
            <div class="uppic_tip">方法一：选择本地照片，上传编辑自己的头像</div>
            <div class="uppic_tip_bth">
             <a class="uppic_tip_bthupload" href="javascript:;">选择照片</a>
              <input id="image" class="uppic_tip_bthfile" type="file" name="image" onchange="ajaxfile();" >
              </div>
             <div class="uppic_tip_gs">支持<?php echo $_smarty_tpl->tpl_vars['config']->value['pic_type'];?>
文件格式，最大不要超过<?php echo $_smarty_tpl->tpl_vars['config']->value['file_maxsize'];?>
 M</div>            
          
                    <div class="clear"></div>
                     <div class="uppic_tit">头像预览</div>
                                 <div class="clear"></div>
                                 
                         <div class="oppic_img_big">
              <div class="oppic_img_big_img" style="width:120px;"><img src=".<?php echo $_smarty_tpl->tpl_vars['bpic']->value;?>
" width='120' height='120' onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_lt_icon'];?>
',2);"/></div>
              <div class="oppic_img_big_p">标准头像120x120</div>
            </div>
            <div class="oppic_img_sim">
              <div class="oppic_img_sim_img" style="width:50px;"><img src=".<?php echo $_smarty_tpl->tpl_vars['spic']->value;?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_lt_icon'];?>
',2);" width='50' height='50'/></div>
              <div class="oppic_img_sim_img_p">小头像<br/>
                50×50</div>
            </div>          
                   <div class="clear"></div>  
          <div class="uppic_flash" style="display:none;" id='uppic_flash'> 
			<div class="uppic_big_zx">
				<img src="" style="float: left; margin-right: 10px;" id="thumbnail" />
               </div>
               <div style="width:150px; float:left">
				<div id="preview2"  class="uppic_previ2">
					<img id="preview2_img"  src="" style="position: relative;"/>
				</div>
                <div id="preview1" class="uppic_previ1">
					<img id="preview1_img" src="" style="position: relative;"/>
                   
				</div>

				
            </div>      
			<div class="uppic_pb">
			<form name="form1" id="form1">
				<input name="sizeit" id="sizeit" type="submit" value="保存头像"  class="uppic_pb_bth"/>	
			</form>
          </div> 
          </div>               
              </div>      
              
                
  
       
         
			
          <div class="clear"></div>
         
         
        </div>
      </div>
      
    </div>
  </div>



<?php echo '<script'; ?>
>
function ajaxfile(){
	if($("#image").val() != ''){
		layer.load('图片上传中，请稍候....',0);
			$.ajaxFileUpload({
				url: 'index.php?c=uppic&act=ajaxfileupload', //用于文件上传的服务器端请求地址
				secureuri: false, //是否需要安全协议，一般设置为false
				fileElementId: 'image', //文件上传域的ID
				dataType: 'json', //返回值类型 一般设置为json
				success: function (data, status){  //服务器成功响应处理函数
					layer.closeAll('loading');
				   if(data.s_thumb){
						layer.msg(data.s_thumb, 2,8);
						setTimeout(function(){location.href='';},2000);
					}else{
						  hideLoading(data.url);
					}
				}
			}
		)
	}
}

var size1={
	width:120,
	height:120
}
$('#preview1').width(size1.width);
$('#preview1').height(size1.height);
var size2={
	width:50,
	height:50
}	
$('#preview2').width(size2.width);
$('#preview2').height(size2.height);
	
function hideLoading(pic){
	$("#thumbnail").attr({'src':pic}); 
	$("#preview1_img").attr({'src':pic});
	$("#preview2_img").attr({'src':pic});
	$('#uppic_flash').show();
	var ias=$('#thumbnail')
	.imgAreaSelect({aspectRatio: '1:1', //长宽1:1的比例，在等待剪裁的图像上呈现出正方形的选择框
					onSelectChange: lis, //把用户当前的选择状态传给lis函数
					onInit:function(){
						var _opt=ias.getOptions();
						render($('#preview1_img'),$("#thumbnail")[0],{
							height:_opt.y2-_opt.y1,
							width:_opt.x2-_opt.x1,
							x1:_opt.x1,
							x2:_opt.x2,
							y1:_opt.y1,
							y2:_opt.y2
						},size1);
						render($('#preview2_img'), $("#thumbnail")[0], {
							height: _opt.y2 - _opt.y1,
							width: _opt.x2 - _opt.x1,
							x1: _opt.x1,
							x2: _opt.x2,
							y1: _opt.y1,
							y2: _opt.y2
						}, size2);
					},
					instance:true,
					keys:true,
					x1:50, //选择框在图片里的初始位置，这里默认是图片左上角，宽度和高度都是200px，符合size1
					y1:50,
					x2:size1.width,
					y2:size1.height});
}
function lis(img, sel) {
	render($('#preview1 img'), img, sel, size1);
	render($('#preview2 img'), img, sel, size2);
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
//ajax提交表单
$(function(){
	$('#form1').submit(function(e){
		e.preventDefault();
		e.stopPropagation();
		
		var preview1=$('#preview1 img');
		var preview2=$('#preview2 img');
		
		
		$.post("index.php?c=uppic&act=savethumb",{
			sizeit:	true,
			count:2,
			/*图1*/
			width1:preview1.data('width'),
			height1:preview1.data('height'),
			x1:preview1.data('x'),
			y1:preview1.data('y'),
			img1:$('#preview1_img').attr('src'),
			scale1:preview1.data('scale'),
			/*图2*/
			width2:preview2.data('width'),
			height2:preview2.data('height'),
			x2:preview2.data('x'),
			y2:preview2.data('y'),
			img2:$('#preview2_img').attr('src'),
			scale2:preview2.data('scale')
		},function(res){
			var _n=parseInt(res);
			if (_n == 2) {
				layer.msg('头像设置失败！', 2, 8,function(){location.reload();}); 
				
			} else {
				layer.msg('头像设置成功！', 2, 9,function(){location.reload();}); 
			}
		});

	});
});
<?php echo '</script'; ?>
>
  </div>
</div></div>
<div class="clear"></div>
<!--内容结束--> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['lietoustyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php }} ?>
