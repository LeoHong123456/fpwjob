<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 16:37:04
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_news_group.htm" */ ?>
<?php /*%%SmartyHeaderCode:7633508725dbd40300f0480-43676098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '284fe783d034f2224e39bf658be1a637a870bb70' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_news_group.htm',
      1 => 1572667770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7633508725dbd40300f0480-43676098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'type' => 0,
    'v' => 0,
    'pytoken' => 0,
    'news_group' => 0,
    'gkey' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
    'one_class' => 0,
    'info' => 0,
    'cou' => 0,
    'roo' => 0,
    'subclass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbd40301f3e47_78042997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbd40301f3e47_78042997')) {function content_5dbd40301f3e47_78042997($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/show_pub.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
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

<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /> 
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />

<title>后台管理</title>
</head>
<body class="body_ifm">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<div id="menu" style="display:none;width:600px;">
    <form name="myform" target="supportiframe" action="index.php?m=admin_news&c=set_menu" class="layui-form" method="post">
      <table width="100%" class="table_form" style="background:#fff;">
        <tr >
          <th>导航类别：</th>
          <td>
           
             
            
            <div class="layui-input-inline" style='float:left'>
		      <select name="nid" id='nid'>
		        
			        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	                	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>
</option>
	                <?php } ?>
		      </select>
		    </div>
            
            </td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>导航名称：</th>
          <td><input class="input-text" type="text" name="name" size="40"/>
         </td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>链接地址：</th>
          <td><input class="input-text" type="text" name="url" size="50"/></td>
        </tr>
        <tr >
          <th>伪静态地址：</th>
          <td><input class="input-text" type="text" name="furl" size="50"/></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>导航类型：</th>
          <td>
          <div class="adminav_set_r">
            站内链接如：http://www.phpyun.com  原链接如：index.php?m=com </div>
            
         
                
            <div class="layui-input-block">
		      <input type="radio" id='type1' name="type" value="1" title="站内链接"><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon"></i><span>站内链接</span></div>
		      <input type="radio" id='type2' name="type" value="2" title="原链接">  <div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>原链接</span></div>
		    </div>   
            
            </td>
        </tr>
        <tr >
          <th>排　　序：</th>
          <td><input class="input-text" type="text" name="sort" size="5"/></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>弹出窗口：</th>
          <td>
            
            <div class="layui-input-block">
		      <input type="radio" id='eject1' name="eject" value="1" title="新窗口"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>新窗口</span></div>
		      <input type="radio" id='eject0' name="eject" value="0" title="原窗口"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>原窗口</span></div>
		    </div>   
            
            </td>
        </tr>
        <tr >
          <th>状态：</th>
          <td>
          <div style="width:480px;">
          	 
            
            <div class="layui-input-block">
		      <input type="radio" id='modelhot' name="model" value="hot" title="热"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>热</span></div>
		      <input type="radio" id='modelnew' name="model" value="new" title="新"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>新</span></div>
		      <input type="radio" id='model'    name="model" value=""    title="无"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>无</span></div>
		    </div>  
            
            </div>
            </td>
        </tr>
        <tr >
          <th>加粗：</th>
          <td>
          <div style="width:480px;">
            
          
            
            <div class="layui-form-item">
	            <div class="layui-input-block">
			      <input type="radio" id='bold1' name="bold" value="1" title="是"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>是</span></div>
			      <input type="radio" id='bold0' name="bold" value="0" title="否"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>否</span></div>
			    </div> 
            </div>
            
            </div>
            </td>
        </tr>
        <tr >
          <th>显示：</th>
          <td>
          <div style="width:480px;">
            
            
            
            <div class="layui-form-item">
            <div class="layui-input-block">
		      <input type="radio" id='display1' name="display" value="1" title="是"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>是</span></div>
		      <input type="radio" id='display0' name="display" value="0" title="否"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>否</span></div>
		    </div> 
            </div> 
            
            </div>
            </td>
        </tr>
        <tr class="admin_table_trbg" >
          <td align="center" colspan="2">
            <input type="hidden" name="id" size="40"/>
            <input class="admin_button" type="submit" name="submit" value="&nbsp;保 存&nbsp;"  />
            <input class="admin_button" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
        </tr>
      </table>
      <input type="hidden" name="did">
	  <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
    </form>
</div>
<form class="layui-form">
<div id="houtai_div" style=" width:450px; display:none;" >
	     <table cellspacing='1' cellpadding='1' class="admin_examine_table">
			<tbody>
				<tr class="ui_td_11" >
					<th width="100">父类名称：</th>
					<td>
                        
		            <div class="layui-input-inline" style='float:left'>
				      <select name="f_id" id='f_id_val' lay-filter="swId">
					    <option value="">请选择</option>
			            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					    <?php if ($_smarty_tpl->tpl_vars['v']->value['keyid']==0) {?>
					    	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
						<?php }?>
		                <?php } ?> </div>
				      </select>
				    </div>
                        
					</td>
				</tr>
				<tr class="ui_td_11">
					<th>类别名称：</th>
					<td><textarea  id='classname'name="classname" class="add_class_textarea"></textarea>
					</td>
					
				</tr>
				<tr><td  colspan='2'><div class="add_class_div"><span class="admin_web_tip">说明：可以添加多条分类（请按回车键换行，一行一个）</span></div></td></tr>
				<tr id='is_rec'>
					<th>首页是否推荐：</th>
					<td>
                    
			           <div class="layui-form-item">
				          <div class="layui-input-block">
				          	<input type="hidden" name="rec" id="rec_val" value="0" />
				            <input type="checkbox" lay-skin="switch" lay-text="是|否"  lay-filter="swiId"/>
				          </div>
				        </div> 
                    
                    </td>
				</tr>
				<tr class="ui_td_11">
					<td  class="ui_content_wrap" colspan='2' style="border-bottom:none"><input class="admin_examine_bth" type="button" name="sub" value=" 添加 "  onclick="saveNclass('index.php?m=admin_news&c=addgroup')"/></td>
				</tr> 
			</tbody>
		</table>
		<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
</div></form>

<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">添加大类时，不用选择类别。　添加二级分类时，要选择类别。 分类转移只能转移二级分类。</div>
</div>
</div>
<div class="clear"></div>




<div class="admin_new_search_box">
<a href="javascript:void(0)" onClick="make_cache()" class="admin_new_cz_tj" style="margin-left:0px;">更新缓存</a>
<a href="javascript:void(0);" onClick="add_class('添加类别','450','350','#houtai_div','')" class="admin_new_cz_tj">+ 添加类别</a>
</div>

<div class="clear"></div>
<div class="clear"></div>
<div class="table-list" style="min-height:300px;">
<div class="admin_table_border">
<?php if (empty($_GET['id'])) {?>

<form action="index.php?m=admin_news&c=delgroups" name="myform" method="post" target="supportiframe" id='myform'>
<input name="m" value="admin_news" type="hidden"/>
<input name="c" value="delgroup" type="hidden"/>
<table width="100%">
<thead>
	<tr class="admin_table_top">
		<th width="50"><input type="checkbox" name="delsubs" onclick="allgroup(0)"/></th>
		<th>编号</th>
		<th width="200">类别名称<span class="clickup">(点击修改)</span></th>
		<th align="left">记录数</th>
        <th>排序(点击修改)</th>
        <th>首页推荐</th>
		<th>新闻首页</th>
        <th>设为导航</th>
		<th class="admin_table_th_bg">操作</th>
	</tr>
</thead>
<tbody>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['news_group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['v']->value['keyid']==0) {?>
    
	<tr align="center"<?php if ($_smarty_tpl->tpl_vars['gkey']->value%2==0) {?>class="admin_com_td_bg"<?php }?>>
		<td> <input type="checkbox" name='del[]'  class="check_all" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  onclick="notallgroup(this)"/></td>
		<td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
		<td class="ud"><span onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" id="name<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
        <input class="input-text hidden" type="text" id="inputname<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" onBlur="subname('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','index.php?m=admin_news&c=ajax');" style="width:150px"/>
		<img class="" style="padding-left:5px;cursor:pointer;" title="" src="images/xg.png" onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"/>
		</td>
		<td class="od" align="left">
		 共有文章 <font color="#0033FF"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['count']!=0) {
echo $_smarty_tpl->tpl_vars['v']->value['count'];
} else { ?>0<?php }?></a></font> 篇，子类别 <font color="#0033FF"><?php if ($_smarty_tpl->tpl_vars['v']->value['roots']!=0) {
echo $_smarty_tpl->tpl_vars['v']->value['roots'];
} else { ?>0<?php }?></font> 个</td>
        <td><span onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" id="sort<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size="10" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
" onBlur="subsort('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','index.php?m=admin_news&c=ajax');" style="width:80px"/>
		<img class="" style="padding-left:5px;cursor:pointer;" title="" src="images/xg.png" onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"/>
		</td>
		<td id="rec<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
			<?php if ($_smarty_tpl->tpl_vars['v']->value['rec']==0) {?>
			<a onClick="rec_up('index.php?m=admin_news&c=recommend','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','1','rec');" href="javascript:void(0);"><img src="../config/ajax_img/errorico.gif"></a>
			<?php } else { ?>
			<a onClick="rec_up('index.php?m=admin_news&c=recommend','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','0','rec');" href="javascript:void(0);"><img src="../config/ajax_img/doneico.gif"></a>
			<?php }?></td>
		
		<td id="rec_news<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
			<?php if ($_smarty_tpl->tpl_vars['v']->value['rec_news']==0) {?>
			<a onClick="rec_up('index.php?m=admin_news&c=recommend','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','1','rec_news');" href="javascript:void(0);"><img src="../config/ajax_img/errorico.gif"></a>
			<?php } else { ?>
			<a onClick="rec_up('index.php?m=admin_news&c=recommend','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','0','rec_news');" href="javascript:void(0);"><img src="../config/ajax_img/doneico.gif"></a>
			<?php }?>
		</td>
				
        <td><?php if ($_smarty_tpl->tpl_vars['v']->value['is_menu']==0) {?><a href="javascript:set_menu('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_cz_sc">设为导航</a><?php } else { ?>
            <a href="javascript:set_menu('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"  class="admin_cz_sc">修改导航</a>
            <a href="javascript:void(0)" class="admin_cz_sc" onClick="layer_del('确定取消该导航？','index.php?m=admin_news&c=delmenu&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');">取消导航</a><?php }?></td>
		<td><a href="index.php?m=admin_news&c=group&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_new_c_bth">管理</a>
            <a href="javascript:void(0)" class="admin_new_c_bth admin_new_c_bth_sc" onClick="layer_del('确定要删除？', 'index.php?m=admin_news&c=delgroup&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');">删除</a>
        </td>
	</tr>
	<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
    <?php }?>
	<?php } ?>
    <tr>
    <td align="center"><input type="checkbox" name="delsubs" id="chkAll1" onclick="allgroup(1)"/></td>
    <td colspan="10"><label for="chkAll1">全选</label>&nbsp;
    <input class="admin_button" type="button" name="delsub" value="删除所选" onclick="return really('del[]')">
    <input class="admin_button" type="button" value="批量转移分类" onclick="changeClass()">
    </td>
     </tr>
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
				<td colspan="8" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
			</tr>
		<?php }?>
</table> 
</form>

<div id="infoboxclass"  style="display:none; width: 350px; ">
		<form action="index.php?m=admin_news&c=changeSon" target="supportiframe" method="post" id="classform"> 
			<div class="admin_compay_fp fl">
				<span class="admin_compay_fp_s">类别搜索：</span>
				<input type="text" value="" id="classkeyword" class="admin_compay_fp_sub">
				<input type='button' id="classbutton" value="搜索" class="admin_compay_fp_sub1">
			</div>
			<div class="admin_compay_fp fl">
			<span class="admin_compay_fp_s fl" style="line-height:34px;">新闻类别：</span>

              <div class="yun_admin_select_box zindex100"> 
                  <input type="button" value="请选择" class="yun_admin_select_box_text" id="nids_name" onClick="select_click('nids');">
                  <input name="nids" type="hidden" id="nids_val" value="">
                  
                  <div class="yun_admin_select_box_list_box dn" id="nids_select"> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['one_class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <div class="yun_admin_select_box_list"> <a href="javascript:;" onClick="select_new('nids','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
')"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a> </div>
                    <?php } ?> </div>
           </div>
			</div>
			<div class="admin_compay_fp fl">
			<span style="width:350px;text-align:center;font-weight:bold; display:inline-block"><font color="red"> 说明：不选择新闻类别，则转移为父类</font></span>
			</div> 
			<div class="admin_compay_fp fl" style="margin-top:20px;">
				<span class="admin_compay_fp_s">&nbsp;</span>
				<input type="submit"  value='确认' class="submit_btn"><input type="button"  onClick="layer.closeAll();" class="cancel_btn cancel_qqx" value='取消' style="margin-left:10px;margin-top:0;">
			</div>
			<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
			<input name="id" value="0" id="classid" type="hidden">
			<input name="fid" id="fid" value="<?php echo $_GET['id'];?>
"type="hidden">
		</form> 
	</div>
<?php }?>
<?php if ($_GET['id']) {?>
<form action="index.php?m=admin_news&c=delgroups" method="post" id='myform' target="supportiframe">
<table cellpadding="0" cellspacing="1" class="list" id="tree_list" width="100%">
<thead>
		<tr>
		<th width="50"><label for="chkall"> <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
		<th width="20%">编号</th>
		<th width="20%">类别名称(点击修改)</th>
        <th width="20%">记录数</th>
        <th width="20%">排序(点击修改)</th>
		<th width="20%">操作</th>
	</tr>
</thead>
<tbody>
	<tr align="center">
	    <td width="50"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud"><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
</td>
        <td class="ud" align='left'>一级分类：<span onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
');" id="name<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</span>
        <input class="input-text hidden" type="text" id="inputname<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
" onBlur="subname('<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
','index.php?m=admin_news&c=ajax');" style="width:150px"/>
		<img class="" style="padding-left:5px;cursor:pointer;" title="" src="images/xg.png" onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
');"/>
		</td> 
       <td class="ud">
        共有文章 <font color="#0033FF"><a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['url'];?>
"><?php if ($_smarty_tpl->tpl_vars['cou']->value!=0) {
echo $_smarty_tpl->tpl_vars['cou']->value;
} else { ?>0<?php }?></a></font> 篇，子类别 <font color="#0033FF"><?php if ($_smarty_tpl->tpl_vars['roo']->value!=0) {
echo $_smarty_tpl->tpl_vars['roo']->value;
} else { ?>0<?php }?></font> 个
		 </td>   
        <td><span onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
');" id="sort<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" size="10" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
" onBlur="subsort('<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
','index.php?m=admin_news&c=ajax');" style="width:80px"/>
		<img class="" style="padding-left:5px;cursor:pointer;" title="" src="images/xg.png" onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
');"/>
		</td>
		<td class="ud">
	 <A href="javascript:void(0)"   onclick="layer_del('确定要删除？', 'index.php?m=admin_news&c=delgroup&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
');"class="admin_cz_sc">删除</A></td>
	</tr> 
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subclass']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<tr align="center" id="msg<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
	    <td width="50"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud" ><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
		<td class="ud" align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;┗<span onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" id="name<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
    <input class="input-text hidden" type="text" id="inputname<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" onBlur="subname('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','index.php?m=admin_news&c=ajax');" style="width:150px"/>
	<img class="" style="padding-left:5px;cursor:pointer;" title="" src="images/xg.png" onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"/>
	</td>
     <td class="ud">
		 共有子类文章 <font color="#0033FF"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['counts']!=0) {?><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['counts'];
} else { ?>0<?php }?></a></font> 篇</td>
     <td><span onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" id="sort<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
</span>
     <input class="input-text hidden" type="text" id="input<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  size="10" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
" onBlur="subsort('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','index.php?m=admin_news&c=ajax');" style="width:80px"/>
	 <img class="" style="padding-left:5px;cursor:pointer;" title="" src="images/xg.png" onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"/>
	 </td>
		<td class="ud">
    <A href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_news&c=delgroup&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"class="admin_cz_sc">删除</A></td>
	</tr> 
	<?php } ?>
	  <tr style="background:#f1f1f1;">
        <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
        <td colspan="5" >
        <label for="chkAll2">全选</label>&nbsp;
        <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
        <input name="fid" value="<?php echo $_GET['id'];?>
"type="hidden">
        <input class="admin_button"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/>
        <input class="admin_button"  type="button"  value="批量转移分类" onClick="changeClass()" />
        </td>
       </tr>
  </tbody>
</table>
</form>
<?php }?>
</div>
</div> 
</div>
<style>
.admin_compay_fp{width:340px; margin-top:10px;}
.admin_compay_fp_s{width:100px; text-align:right; font-weight:bold; display:inline-block}
.admin_compay_fp_sub{width:140px;height:25px;border:1px solid #ddd;}
.admin_compay_fp_sub1{width:40px;height:27px; background:#3692cf;color:#fff;border:none; cursor:pointer}
</style>
	<div id="infoboxclass"  style="display:none; width: 350px; ">
		<form action="index.php?m=admin_news&c=changeSon" target="supportiframe" method="post" id="classform"> 
			<div class="admin_compay_fp fl">
				<span class="admin_compay_fp_s">类别搜索：</span>
				<input type="text" value="" id="classkeyword" class="admin_compay_fp_sub">
				<input type='button' id="classbutton" value="搜索" class="admin_compay_fp_sub1">
			</div>
			<div class="admin_compay_fp fl">
			<span class="admin_compay_fp_s fl" style="line-height:34px;">新闻类别：</span>

              <div class="yun_admin_select_box zindex100"> 
                  <input type="button" value="请选择" class="yun_admin_select_box_text" id="nids_name" onClick="select_click('nids');">
                  <input name="nids" type="hidden" id="nids_val" value="">
                  
                  <div class="yun_admin_select_box_list_box dn" id="nids_select"> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['one_class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <div class="yun_admin_select_box_list"> <a href="javascript:;" onClick="select_new('nids','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
')"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a> </div>
                    <?php } ?> </div>
           </div>
              
              
			</div>
			<div class="admin_compay_fp fl">
			<span style="width:350px;text-align:center;font-weight:bold; display:inline-block"><font color="red"> 说明：不选择新闻类别，则转移为父类</font></span>
			</div> 
			<div class="admin_compay_fp fl" style="margin-top:20px;">
				<span class="admin_compay_fp_s">&nbsp;</span>
				<input type="submit"  value='确认' class="submit_btn"><input type="button"  onClick="layer.closeAll();" class="cancel_btn cancel_qqx" value='取消' style="margin-left:10px;margin-top:0;">
			</div>
			<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
			<input name="id" value="0" id="classid" type="hidden">
			<input name="fid" id="fid" value="<?php echo $_GET['id'];?>
"type="hidden">
		</form> 
	</div>
<style>
.layui-form-item {
    margin-bottom: 0px;
    clear: both;
}
</style>
<?php echo '<script'; ?>
 language="javascript">
  layui.use(['layer', 'form','element'], function(){
    var layer = layui.layer
    ,form = layui.form
	,element = layui.element
    ,$ = layui.$;
	form.on('switch(swiId)', function(data){
    	if(this.checked){
    		$('#rec_val').val(1);
    	}else{
    		$('#rec_val').val(0);
    	}
    });
  });
function check_form(){
	if($.trim($("#classname").val())==""){ 
		parent.layer.msg("类别名称不能为空！",2,2);return false; 
	}
}	
function allgroup(id){
	if($("input[name='delsubs']").get(id).checked){
    	$("input[name='del[]']").attr("checked","true"); 
    	$(".admin_com_td_bg").css("background","#d0e3ef"); 
		$("input[name='delsubs']").attr("checked","true"); 
	}else{
		$("input[name='del[]']").removeAttr("checked"); 
		$(".admin_com_td_bg").css("background",""); 
		$("input[name='delsubs']").removeAttr("checked"); 
	}
}
function notallgroup($this){
	if($($this).get(0).checked){
		$($this).parent().parent('tr').css("background","#d0e3ef"); 
	}else{
		$($this).parent().parent('tr').css("background",""); 
	}
	$("input[name='delsubs']").removeAttr("checked"); 
}
function make_cache(){
	$.get("index.php?m=admin_news&c=make_cache",function(msg){
		if(msg==1){parent.layer.msg("更新成功！",2,9);}else{parent.layer.msg("更新失败！",2,8);}return false; 
	});
}
function change_f(){
	var f_id=$("#f_id").val();
	f_id=='0'?$("#is_rec").show():$("#is_rec").hide();
}
function changeClass(){
	var codewebarr="";
	$(".check_all:checked").each(function(){  
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg('您还未选择任何信息！', 2, 8);	return false;
	}else{
		$('#classid').val(codewebarr);
		var classid=$('#classid').val();
		$.layer({
			type : 1,
			title :'批量转移分类', 
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','250px'],
			page : {dom :"#infoboxclass"}
		});
	}
}
$(document).ready(function(){	
	$('#classbutton').click(function(){		
		var pytoken = $('#pytoken').val();
		var keyword = $('#classkeyword').val();
		$.post("index.php?m=admin_news&c=fatherclass",{pytoken:pytoken,keyword:keyword},function(data){
			$('#cname').html(data);		
		});
	});	
});
 
function set_menu(id){
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=admin_news&c=ajax_menu",{id:id,pytoken:pytoken},function(data){
		var data=eval('('+data+')');
		$("input[name=name]").val(data.name);
		$("input[name=url]").val(data.url);
		$("input[name=furl]").val(data.furl);
		$("input[name=did]").val(id);
		if(data.id>0){
			$("input[name=id]").val(data.id);
			$("#nid").val(data.nid);
			$("#type"+data.type).attr("checked","checked");
			$("input[name=sort]").val(data.sort);
			$("#eject"+data.eject).attr("checked","checked");
			$("#model"+data.model).attr("checked","checked");
			$("#bold"+data.bold).attr("checked","checked");
			$("#display"+data.display).attr("checked","checked");
			layui.use(['form'], function(){var form = layui.form;form.render();});
			$("#color").val(data.color);
			$("#colorid").attr("style","color:"+data.color);
		}else{
			$("input[name=id]").val('');
			$("#type0").attr("checked","checked");
			$("input[name=sort]").val('');
			$("#eject0").attr("checked","checked");
			$("#model").attr("checked","checked");
			$("#bold0").attr("checked","checked");
			$("#display0").attr("checked","checked");
			layui.use(['form'], function(){var form = layui.form;form.render();});
			$("#color").val('');
			$("#colorid").attr("style","");
		}
	})
	$.layer({
		type : 1,
		title : '设置导航',
		fix:false,
		closeBtn : [0 , true], 
		offset : ['5%' , '20%'],
		border : [10 , 0.3 , '#000', true],
		area : ['600px','580px'],
		page : {dom : '#menu'}
	});  
}
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
