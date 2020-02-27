<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-23 23:09:42
         compiled from "/www/fpwjob/uploads/app/template/member/com/map.htm" */ ?>
<?php /*%%SmartyHeaderCode:15336199925e5295b639e6e4-30599530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9320c24d9ef9e44a8d849139882736639863ca5' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/map.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15336199925e5295b639e6e4-30599530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'row' => 0,
    'city_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e5295b63dacb2_60554732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5295b63dacb2_60554732')) {function content_5e5295b63dacb2_60554732($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
  <div class="admin_mainbody">
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/map.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
    <div class=right_box>
      <div class=admincont_box>
          <div class="com_tit"><span class="com_tit_span">企业资料</span></div>
          <div class="job_list_tit">
         <ul class="">
         <li><a href="index.php?c=info">基本信息</a></li>
         <li class="job_list_tit_cur"><a href="index.php?c=map">企业地图</a></li>
         <li><a href="index.php?c=news">企业新闻</a></li>
         <li><a href="index.php?c=show">企业环境</a></li>
         <li><a href="index.php?c=product">企业产品</a></li>
        
         </ul>
         </div>
     <div class="com_body">
       <div class="admin_new_tip mt20 ">
            <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
            <div class="admin_new_tip_list_cont">
              <div class="admin_new_tip_list"> 搜索框内输入地址搜索，在地图区域点击公司所在的位置，点击保存地图</div>
             </div>
          </div>
          
    
     <div class="joblist_search">
		
			<div class="joblist_search_box">
		
            <input id="map_keyword" type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
" class="joblist_search_box_text" placeholder="请输入地址" onclick="if(this.value=='请输入地址'){this.value='';}" onblur="if(this.value==''){this.value='请输入地址';}"/><input type="button" value=" " onclick="localsearch('全国');" class="joblist_search_bth"/>
            
            </div>
		
	</div>
    
    <div class="clear"></div>
        <div class=admin_note_map style="position:relative; margin-top:20px;">
		<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
        <form name="myform" onSubmit="return checkpost();" target="supportiframe" action="index.php?c=map&act=save" method="post">
          <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:12px;">
              <tr>
                <th height="30"></th>
                <td><div id="map_container" style="width:100%;height:350px;"></div><br>
                </td>
              </tr>
              <tr>
                <th>&nbsp;</th>
                <td height="40">
                <span class="com_info_text_s"> X轴：</span>
                  <input name="xvalue" id="map_x" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" readonly="readonly" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['x'];?>
"  class="com_info_text">
                 <span class="com_info_text_s"> Y轴：</span>
                  <input name="yvalue" id="map_y" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" readonly="readonly" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['y'];?>
"  class="com_info_text">
                
                  <input type="submit" name="savemap" class="com_info_mapbth" value="保存地图" style="">
                  <span id="by_map" class="errordisplay">请先设置地图位置</span></td>
              </tr>
            
          </table>
		</form>
          
        </div>
      </div>
    </div>
    <?php echo '<script'; ?>
>
		var map=new BMap.Map("map_container");
		setLocation('map_container',116.404,39.915,"map_x","map_y");
		$(document).ready(function() {
			<?php if (($_smarty_tpl->tpl_vars['row']->value['x']==''||$_smarty_tpl->tpl_vars['row']->value['y']=='')&&$_smarty_tpl->tpl_vars['row']->value['address']!='') {?>
				$("#map_keyword").val("<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['three_cityid']];
echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
");
				var address = "<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
";
				localsearch('<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['three_cityid']];?>
'+address.replace(/\s+/g,""));
			<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['x']!=''&&$_smarty_tpl->tpl_vars['row']->value['y']!='') {?>
				setLocation('map_container',<?php echo $_smarty_tpl->tpl_vars['row']->value['x'];?>
,<?php echo $_smarty_tpl->tpl_vars['row']->value['y'];?>
,"map_x","map_y");
			<?php } else { ?>
				
				function myFun(result){
					var cityName = result.name;
					map.setCenter(cityName);
				}
				var myCity = new BMap.LocalCity();
				myCity.get(myFun);
				
			<?php }?>
		});

		function localsearch(city){
			if($("#map_keyword").val()=="" || $("#map_keyword").val()=="请输入地址"){
				layer.msg('请输入地址！', 2, 8);return false;
			}
			var local = new BMap.LocalSearch(map, {
				renderOptions: {
					map: map
				}
			});
			local.clearResults();
			local.search($("#map_keyword").val().replace(/\s+/g,""));
		}
		function checkpost(){
			if($.trim($("#map_x").val())==''||$.trim($("#map_y").val())==''){
				layer.msg('请先设置地图位置！', 2, 8);return false;
			}
		}
		function setLocation(id,x,y,xid,yid){
			var data=get_map_config();
			var config=eval('('+data+')');
			var rating,map_control_type,map_control_anchor;
			if(!x && !y){x=config.map_x;y=config.map_y;}
			var point = new BMap.Point(x,y);
			var marker = new BMap.Marker(point);
			var opts = {type:BMAP_NAVIGATION_CONTROL_LARGE}
			map.enableScrollWheelZoom(true);
			map.addControl(new BMap.NavigationControl(opts));
			map.centerAndZoom(point, 15);
			map.addOverlay(marker);
			map.addEventListener("click",function(e){
			   var info = new BMap.InfoWindow('', {width: 260});
				var projection = this.getMapType().getProjection();
				var lngLat = e.point;
				document.getElementById(xid).value=lngLat.lng;
				document.getElementById(yid).value=lngLat.lat;
				map.clearOverlays();
				var point = new BMap.Point(lngLat.lng,lngLat.lat);
				var marker = new BMap.Marker(point);
				map.addOverlay(marker);
			});
		}
	<?php echo '</script'; ?>
>
  </div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
