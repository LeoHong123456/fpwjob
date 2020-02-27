<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-24 13:21:44
         compiled from "/www/fpwjob/uploads/app/template/admin/crm_audit.htm" */ ?>
<?php /*%%SmartyHeaderCode:21108554465e535d68047084-33462547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9ae529de8032e4cdfcd6e96ccb3d133c3da5acf' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/crm_audit.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21108554465e535d68047084-33462547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'radio_time' => 0,
    'isAllTime' => 0,
    'order' => 0,
    'key' => 0,
    'v' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
    'defaultTime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e535d680a2e23_22568830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e535d680a2e23_22568830')) {function content_5e535d680a2e23_22568830($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet">

<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />

<title>后台管理</title>
</head>
<body class="body_ifm">
<form action="index.php?m=admin_message&c=show" method="post" id='checkform'>
  <input type="hidden" name="userid" id="userid" value="">
  <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
</form>

<div id="info_div"  style="display:none; width: 390px; ">
	<div class="" style=" margin-top:10px; "  >
	<form class="layui-form" action="index.php?m=crm_salesman_list&c=status" target="supportiframe" method="post" id="formstatus">
	<table cellspacing='1' cellpadding='1' class="admin_examine_table">
		<tr>
			<th width="120">设置在职/离职：</th>
			<td align="left">
				<div class="layui-form-item">
				<div class="layui-input-block">
					<input name="status" id="state1" value="1" title="在职" type="radio"/>
					<input name="status" id="state2" value="2" title="离职" type="radio"/>
				</div>
				</div>
			</td>
		</tr>
    
    <tr>
			<td colspan='2' align="center">
	     	<input type="submit"  value='确认' class="admin_examine_bth">
        <input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
			</td>
    </tr>
		<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
		<input name="uid" value="0" type="hidden">
	</table>
    </form>
  </div>
</div>

<div class="infoboxp">
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示近期每日理论上的收入支出。</div>
<div class="admin_new_tip_list">收入 - 支出 = 合计</div>
<div class="admin_new_tip_list">收入中包括“业务员开通套餐金额”，并且只有“业务员开通套餐金额”这一部分收入需要核对查账。</div>
</div>
</div>
<div class="clear"></div>
<div class="crm_chose">
 <form class="layui-form" method="get" action="index.php?m=crm_audit" >
    <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">

    <div class="layui-form-item" id="time_range"style="margin-bottom:0px;">
      <label class="layui-form-label">查询范围</label>
      <div class="layui-input-inline">
        <input type="text" class="layui-input" id="time" name="time" style="width:175px;">
      </div>
     
      <input type="hidden" name="m" value="crm_audit"/>

      <div class="layui-input-inline">
        <input name="radio_time" value="0" title="今天" type="radio" lay-filter="radio_time"
        <?php if ($_smarty_tpl->tpl_vars['radio_time']->value=='0') {?>
        checked
        <?php }?>
        />
        <input name="radio_time" value="1" title="昨天" type="radio" lay-filter="radio_time"
        <?php if ($_smarty_tpl->tpl_vars['radio_time']->value=='1') {?>
        checked
        <?php }?>
        />
        <input name="radio_time" value="7" title="7天内" type="radio" lay-filter="radio_time"
        <?php if ($_smarty_tpl->tpl_vars['radio_time']->value=='7') {?>
        checked
        <?php }?>
        />
        <input name="radio_time" value="30" title="30天内" type="radio" lay-filter="radio_time"
        <?php if ($_smarty_tpl->tpl_vars['radio_time']->value=='30') {?>
        checked
        <?php }?>
        />
        <input name="radio_time" value="90" title="90天内" type="radio" lay-filter="radio_time"
        <?php if ($_smarty_tpl->tpl_vars['radio_time']->value=='90') {?>
        checked
        <?php }?>
        />
        <input name="radio_time" value="-1" title="全部" type="radio" lay-filter="radio_time"
        <?php if ($_smarty_tpl->tpl_vars['radio_time']->value=='-1') {?>
        checked
        <?php }?>
        />
        <input type="hidden" name="isAllTime" id="isAllTime" value="<?php echo $_smarty_tpl->tpl_vars['isAllTime']->value;?>
"/>
      </div>
	   <div class="layui-input-inline">
        <button class="layui-btn" lay-filter="query" >点击查询</button>
      </div>

    </div>

  </form>
    </div>

<div class="clear"></div>  
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php"  target="supportiframe" name="myform" method="get" id='myform'>
        <input name="m" value="crm_audit" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              
              <th width="100"> 
                <?php if ($_GET['t']=="date"&&$_GET['order']=="asc") {?> 
                  <a href="index.php?m=crm_audit&order=desc&t=date">日期<img src="images/sanj.jpg"/></a>
                <?php } else { ?>
                  <a href="index.php?m=crm_audit&order=asc&t=date">日期<img src="images/sanj2.jpg"/></a> 
                <?php }?>
              </th>

              <th>收入</th>
              <th align="left">业务员开通套餐金额 / 查看详情</th>
              <th align="left">支出</th>
              <th align="left">合计</th>
              
            </tr>
          </thead>
          <tbody>
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <tr <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
            
            <td align="center" class="td1"><?php echo $_smarty_tpl->tpl_vars['v']->value['date'];?>
</td>
            
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</td>
            <td align="left">
				<?php echo $_smarty_tpl->tpl_vars['v']->value['salesmanNum'];?>

				    &nbsp;&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['v']->value['salesmanNum']>0) {?>
					<a href="index.php?m=crm_audit&c=detail&date=<?php echo $_smarty_tpl->tpl_vars['v']->value['date'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
" style="color:#f60; text-decoration:underline">查看详情</a>
				<?php }?>
            </td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['out'];?>
</td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['total'];?>
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
				<td colspan="5" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
			</tr>
		<?php }?>
        </tbody>
        </table>
        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      </form>
    </div>
  </div>
</div>

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

<?php echo '<script'; ?>
>

function detail(date)
{
  layer.iframe(
    'index.php?m=crm_audit&c=detail&date=' + date,
    date + '业务员开通套餐金额明细',
    ['500px', '500px'],
    'auto',
    {
      maxmin: true
    }
  );
}

function getDateTimeStr(timestamp)
{
  var d = new Date(timestamp);    
  var h = d.getHours(),
    m = d.getMinutes(),
    s = d.getSeconds(),
    month = d.getMonth() + 1,
    day = d.getDate();

  h = h < 10 ? '0' + h : h;
  m = m < 10 ? '0' + m : m;
  s = s < 10 ? '0' + s : s;

  month = month < 10 ? '0' + month : month;
  day = day < 10 ? '0' + day : day;

  return (d.getFullYear()) + "-" + month + "-" + day ;
}
function getToday(){
  var today = new Date();
  today.setHours(0);
  today.setMinutes(0);
  today.setSeconds(0);
  today.setMilliseconds(0);
  return today;
}

layui.use(['form', 'laydate'], function(){
  var laydate = layui.laydate
    ,form = layui.form
    ,$ = layui.$;

  laydate.render({
    elem : '#time' 
    ,type : 'date'
    ,range : '-'
    ,value : '<?php echo $_smarty_tpl->tpl_vars['defaultTime']->value;?>
'
  });

  form.on('radio(radio_time)', function(data){
    if(data.value == -1){
      $('#isAllTime').val(1);
      $("#time").val('');
    }
    else{
      $('#isAllTime').val(0);

      var today = getToday();
      var diff = 1000 * 60 * 60 * 24 * data.value;
      var day = new Date(today - diff);
      var str = getDateTimeStr(Date.parse(day)) + ' - ' + getDateTimeStr(Date.parse(new Date()));
      
      $("#time").val(str);
    }
  });

});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
