<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:09:23
         compiled from "/www/fpwjob/uploads/app/template/admin/admin_right_web.htm" */ ?>
<?php /*%%SmartyHeaderCode:17340666635e2e38431fc556-41188571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a804da5f9798cbde816a7aabf84b25a9354871d' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/admin_right_web.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17340666635e2e38431fc556-41188571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'type' => 0,
    'name' => 0,
    'list' => 0,
    'daylist' => 0,
    'twolist' => 0,
    'daylist2' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e38432bf927_01423770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e38432bf927_01423770')) {function content_5e2e38432bf927_01423770($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<title>后台管理</title>
</head>
<body class="body_ifm">
<?php if ($_smarty_tpl->tpl_vars['type']->value=="tj") {?>
<div class="admin_atatic_chart fl" id="main2" style="height:300px;"></div>
    <!-- ECharts单文件引入 -->
    <?php echo '<script'; ?>
 src="js/echarts_plain.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        // 基于准备好的dom，初始化echarts图表
        var myChart = echarts.init(document.getElementById('main2')); 
        var option = {tooltip : {trigger: 'axis'},legend: {data:['<?php echo $_smarty_tpl->tpl_vars['name']->value[0];?>
','<?php echo $_smarty_tpl->tpl_vars['name']->value[1];?>
']},
    calculable : false,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : [<?php  $_smarty_tpl->tpl_vars['daylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['daylist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['daylist']->key => $_smarty_tpl->tpl_vars['daylist']->value) {
$_smarty_tpl->tpl_vars['daylist']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']>0) {?>,<?php }?>'<?php echo $_smarty_tpl->tpl_vars['daylist']->value['td'];?>
'<?php } ?>]
        }
    ],
    yAxis : [{type : 'value',minInterval: 1}],
    series : [
        {
            name:'<?php echo $_smarty_tpl->tpl_vars['name']->value[0];?>
',
            type:'line',
            symbol:'emptyCircle',
            smooth:false,
            itemStyle: {
                normal: {
                    areaStyle: {
                        width: 2,
						color:'rgb(191,227,249)'
					}
                }
            },
            data:[<?php  $_smarty_tpl->tpl_vars['daylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['daylist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo1']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['daylist']->key => $_smarty_tpl->tpl_vars['daylist']->value) {
$_smarty_tpl->tpl_vars['daylist']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo1']['index']++;
if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo1']['index']>0) {?>,<?php }
echo $_smarty_tpl->tpl_vars['daylist']->value['cnt'];
} ?>]
        }<?php if ($_smarty_tpl->tpl_vars['twolist']->value) {?>,
		{
		    name:'<?php echo $_smarty_tpl->tpl_vars['name']->value[1];?>
',
            type:'line',
            symbol:'emptyCircle',
            smooth:false,
            itemStyle: {
                normal: {
                    areaStyle: {
                        width: 2,
						color:'rgb(191,227,249)'
					}
                }
            },
            data:[<?php  $_smarty_tpl->tpl_vars['daylist2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['daylist2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['twolist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo2']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['daylist2']->key => $_smarty_tpl->tpl_vars['daylist2']->value) {
$_smarty_tpl->tpl_vars['daylist2']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo2']['index']++;
if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo2']['index']>0) {?>,<?php }
echo $_smarty_tpl->tpl_vars['daylist2']->value['cnt'];
} ?>]
		}
		<?php }?>
    ]
};
        myChart.setOption(option); // 为echarts对象加载数据 
    <?php echo '</script'; ?>
>
    
<?php } elseif (($_smarty_tpl->tpl_vars['type']->value=="dt")) {?>
<ul class="right_web_list">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<li>会员

<?php if ($_smarty_tpl->tpl_vars['v']->value['downtime']) {?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['comusername'];?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['order_time']) {?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['com_name']) {?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['jobid']) {?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['resume_id']) {?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['comusername'];?>

<?php }?>

在

<?php if ($_smarty_tpl->tpl_vars['v']->value['downtime']) {?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['time']<60) {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</span> <?php } else {
echo $_smarty_tpl->tpl_vars['v']->value['time'];
}?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['datetime']) {?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['times']<60) {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['v']->value['times'];?>
</span> <?php } else {
echo $_smarty_tpl->tpl_vars['v']->value['times'];
}?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['order_time']) {?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['timess']<60) {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['v']->value['timess'];?>
</span> <?php } else {
echo $_smarty_tpl->tpl_vars['v']->value['timess'];
}?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['downtime']) {?>
下载了<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
的简历
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['job_name']) {?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['eid']) {?>申请了<?php } else { ?>收藏了<?php }
echo $_smarty_tpl->tpl_vars['v']->value['job_name'];?>
职位
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['jobid']) {?>
浏览了<?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
职位
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['resume_id']) {?>
浏览了<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
简历
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['order_time']) {?>
充值了<?php echo $_smarty_tpl->tpl_vars['v']->value['order_price'];?>

<?php }?>
</li>
<?php } ?>
</ul>

<?php } elseif (($_smarty_tpl->tpl_vars['type']->value=="rz")) {?>

<ul class="right_web_list">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<li>会员<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
在
<?php if ($_smarty_tpl->tpl_vars['v']->value['ctime']) {?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['time']<60) {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</span> <?php } else {
echo $_smarty_tpl->tpl_vars['v']->value['time'];
}?>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</li>
<?php } ?>
</ul>
<?php }?>
</body>
</html><?php }} ?>
