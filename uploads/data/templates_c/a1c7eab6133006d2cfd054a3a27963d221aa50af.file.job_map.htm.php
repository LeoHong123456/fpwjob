<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-09 00:56:23
         compiled from "/www/fpwjob/uploads/app/template/wap/job_map.htm" */ ?>
<?php /*%%SmartyHeaderCode:2994645545dc59e37cd2072-13573961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1c7eab6133006d2cfd054a3a27963d221aa50af' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/job_map.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2994645545dc59e37cd2072-13573961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'config' => 0,
    'tplmoblie' => 0,
    'com' => 0,
    'cityname' => 0,
    'mapx' => 0,
    'mapy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc59e37cf9ec9_79541086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc59e37cf9ec9_79541086')) {function content_5dc59e37cf9ec9_79541086($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/fpwjob/uploads/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - 手机人才网</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width" initial-scale="1"/>
<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no, width=device-width"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/job.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/map.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
</head>
<body>
<header>
   <div class="header" >
    <div class="header_bg <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {?>bg<?php echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>"> <a class="hd-lbtn" href="javascript:history.back();"><i class="header_top_l"></i></a>
       <div class="header_h1"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div> 
     </div>
  </div>
 </header>
<div id="allmap"></div>
<div class="jobmap_box_footer">
	<div class="jobmap_box">
	<div class="jobmap_comname"><?php echo $_smarty_tpl->tpl_vars['com']->value['name'];?>
</div>  
    <div class="jobmap_comsdd"><?php echo $_smarty_tpl->tpl_vars['com']->value['address'];?>
  </div>  
	</div>
	<div class="jobmap_box_look">
	<a href="javascript:void(0);" onclick="way('<?php echo $_smarty_tpl->tpl_vars['com']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['cityname']->value;?>
')">查看路线</a>  
	</div>
</div>
<input type="hidden" id="map_x" value="<?php echo $_smarty_tpl->tpl_vars['mapx']->value;?>
"/>
<input type="hidden" id="map_y" value="<?php echo $_smarty_tpl->tpl_vars['mapy']->value;?>
"/>
<style type="text/css">
	#allmap {width: 100%;height: 80%;overflow: hidden;margin:0;}
</style>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript">
	var wapurl = '<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
';
	// 百度地图API功能
	var x = '<?php echo $_smarty_tpl->tpl_vars['com']->value['x'];?>
';
	var y = '<?php echo $_smarty_tpl->tpl_vars['com']->value['y'];?>
';
	var map = new BMap.Map("allmap");
	var point = new BMap.Point(x, y);
	map.centerAndZoom(point, 15);
	var marker = new BMap.Marker(point);  // 创建标注
	map.addOverlay(marker);               // 将标注添加到地图中

	var map_x = $("#map_x").val();
	var map_y = $("#map_y").val();
	setTimeout(function(){
		if(map_x==0 && map_y==0){
			var geolocation = new BMap.Geolocation();
			geolocation.getCurrentPosition(function (r) {
				if (this.getStatus() == BMAP_STATUS_SUCCESS) {
					$.post(wapurl+'index.php?c=job&a=distance',{x:r.point.lng,y:r.point.lat},function(data){})
					$("#map_x").val(r.point.lng);
					$("#map_y").val(r.point.lat); 
				}
				else {
					if (this.getStatus() == "6") {
						layermsg("开启手机定位后才能使用此功能",2);return false;
					}else if (this.getStatus() == "7") {
						layermsg("开启手机定位后才能使用此功能",2);return false;
					}else {
						layermsg("地图定位出错",2);return false;
					}
				}
			}, { enableHighAccuracy: true })
		}
	},1000);

	function way(name,cityname){
		var map_x=$("#map_x").val(),map_y=$("#map_y").val();
		if(map_x>0 && map_y>0){
			location.href = 'https://api.map.baidu.com/direction?origin=latlng:' + parseFloat(map_y).toFixed(5) + ',' + parseFloat(map_x).toFixed(5) + '|name:当前位置&destination=latlng:' + parseFloat(y).toFixed(5) + ',' + parseFloat(x).toFixed(5) + '|name:'+ name +'&mode=driving&region='+ cityname +'&output=html';
		}else{
			layermsg('正在定位中，请稍候！');
		}
	}
<?php echo '</script'; ?>
> 
</body>
</html><?php }} ?>
