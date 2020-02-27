<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-22 08:59:46
         compiled from "/www/fpwjob/uploads/app/template/admin/statis.htm" */ ?>
<?php /*%%SmartyHeaderCode:7929193435e507d027057b0-62708612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07151685c4af7be17d81a05c121fffdb93af98cc' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/statis.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7929193435e507d027057b0-62708612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'radio_time' => 0,
    'data' => 0,
    'names' => 0,
    'date' => 0,
    'k' => 0,
    'values' => 0,
    'totalIn' => 0,
    'totalOut' => 0,
    'totalNetIncome' => 0,
    'defaultTimeBegin' => 0,
    'defaultTimeEnd' => 0,
    'title' => 0,
    'kkk' => 0,
    'v' => 0,
    'kk' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e507d0274b5a3_61885792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e507d0274b5a3_61885792')) {function content_5e507d0274b5a3_61885792($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	
	<link href="./images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	
	<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
  <link href="images/statis.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<title>后台管理-图表分析</title>
  <style>
  .admin_new_search_time{
    width: 120px !important;
  }
  </style>
</head>
<body class="body_ifm">

<div class="infoboxp">
<div class="tabs_info">
    <ul>
      
        <li class="curr"><a href="index.php?m=statis" >收支总计</a></li>
  <li><a href="index.php?m=statis_income">收益渠道</a></li>
  <li><a href="index.php?m=statis_user">消费群体</a></li>
  
    </ul>
  </div>
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了收支总计统计。</div>
</div>
</div>
<div class="clear"></div>

<div class="admin_new_search_box">

<form class="layui-form">
  <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">

  <!--选择时间范围-->
  <div class=" " id="time_range">
    <div class="admin_new_search_name"><label>查询范围：</label></div>
   
      <input type="text" class="admin_new_search_time" id="time_begin">
      <input type="text" class="admin_new_search_time" id="time_end">

      <button class="admin_new_search_timebth" lay-filter="query" onclick="return query();">点击查询</button>
      <button class="admin_new_search_timebth" onclick="return showDetail(this);">查看详情</button>
 

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
      <?php if ($_smarty_tpl->tpl_vars['radio_time']->value==''||$_smarty_tpl->tpl_vars['radio_time']->value=='30') {?>
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
      <input type="hidden" name="isAllTime" id="isAllTime" value="0"/>
    </div>
  </div>
</form>
  </div>

<div class="clear"></div>

<div class="clear"></div>
  <div class="adminstatis_box">

    <div class="com_pay_balance">
      <div class="com_pay_balance_data_q">
      <i class="com_pay_balance_data_q_icon"></i>
        <div class="com_pay_balance_data_n"><strong><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['in'];?>
</strong></div>
        <div class="com_pay_balance_data_name">收益</div>
      </div>
    </div>
    <div class="com_pay_balance">
      <div class="com_pay_balance_data_q border_blue">
       <i class="com_pay_balance_data_q_icon"></i>
        <div class="com_pay_balance_data_n color_blue"><strong><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['out'];?>
</strong></div>
        <div class="com_pay_balance_data_name">支出/提现</div>
      </div>
    </div>
    <div class="com_pay_balance">
      <div class="com_pay_balance_data_q border_orange">
       <i class="com_pay_balance_data_q_icon"></i>
        <div class="com_pay_balance_data_n color_orange"><strong><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['net_income'];?>
</strong></div>
        <div class="com_pay_balance_data_name">净收入</div>
      </div>
    </div>
  
  </div>  
  

  
  <div class="clear"></div>
 
<div class="payments_com_pay_cont">
  <div class="admin_atatic_chart bg_gray" id="chart" style="height:350px;">
  </div>
       <div class="statis_list" style="padding-top:0px;">
  <table class="" lay-skin="nob" style="display: none;" id="detail" width="100%">
    <thead>
      <tr id="detail_thead" class="admin_table_top" style="text-align:left">
        <th>日期</th>
        <th>毛收入</th>
        <th>支出/提现</th>
        <th>净收入</th>
      </tr> 
    </thead>
    <tbody id="detail_tbody">
      <?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['date']->key;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['values']->value[0]['data'][$_smarty_tpl->tpl_vars['k']->value];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['values']->value[1]['data'][$_smarty_tpl->tpl_vars['k']->value];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['values']->value[2]['data'][$_smarty_tpl->tpl_vars['k']->value];?>
</td>
      </tr>
      <?php } ?>

      <tr>
        <td>总计</td>
        <td><?php echo $_smarty_tpl->tpl_vars['totalIn']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['totalOut']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['totalNetIncome']->value;?>
</td>
      </tr>
    </tbody>
  </table>
 </div>  </div>  </div>  
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
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/echarts_plain.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    function getDateTimeStr(timestamp)
    {
      var d = new Date(timestamp);    //根据时间戳生成的时间对象
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

      return (d.getFullYear()) + "-" + month + "-" + day + " " + 
           h + ":" + m + ":" + s;
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
        elem : '#time_begin' //指定元素
        ,type : 'datetime'
        ,value : '<?php echo $_smarty_tpl->tpl_vars['defaultTimeBegin']->value;?>
'
      });

      laydate.render({
        elem : '#time_end' //指定元素
        ,type : 'datetime'
        ,value : '<?php echo $_smarty_tpl->tpl_vars['defaultTimeEnd']->value;?>
'
      });

      form.on('radio(radio_time)', function(data){
        if(data.value == -1){
          window.location = 'index.php?m=statis&isAllTime=1' + '&radio_time=' + data.value;
        }
        else{
          var today = getToday();
          var diff = 1000 * 60 * 60 * 24 * data.value;
          var day = new Date(today - diff);
          window.location = 'index.php?m=statis&time_begin=' + getDateTimeStr(Date.parse(day)) + '&time_end=' + getDateTimeStr(Date.parse(new Date())) + '&radio_time=' + data.value;
        }
      });

      var title = '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
';
      var names = [
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['kkk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['kkk']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <?php if ($_smarty_tpl->tpl_vars['kkk']->value>0) {?>
          ,
          <?php }?>
        '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'
        <?php } ?>
      ];

      var dataGroupNames = [
        '毛收入',
        '支出/提现',
        '净收入'
      ];

      var values = [
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <?php if ($_smarty_tpl->tpl_vars['k']->value>0) {?>
          ,
          <?php }?>
        {
          name : '<?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
',
          type : '<?php echo $_smarty_tpl->tpl_vars['v']->value["type"];?>
',
          label: {
              normal: {
                  show:true,
                  position: 'top',
                  textStyle: {
                      color: '#27727B'
                  }
              }
          },
          data : [
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value["data"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['r']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['kk']->value>0) {?>
            ,
            <?php }?>
            parseFloat('<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
')
            <?php } ?>
          ]
        }
        //ie9 不兼容最后一个属性多出的逗号
        <?php } ?>
      ];

      refreshBarChart(title, names, values, dataGroupNames);
    });//end layui.use()

    function query()
    {
      window.location = 'index.php?m=statis&time_begin=' + $("#time_begin").val() + '&time_end=' + $('#time_end').val();
      return false;
    }

    function refreshBarChart(title, names, values, dataGroupNames)
    {
      var option = {
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },

        title: {
            text: title,
            subtext: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
'
        },
        legend: {
            data: dataGroupNames
        },
        xAxis : [
            {
                type : 'category',
                data : names
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : values
      };

      // 基于准备好的dom，初始化echarts实例
      var myChart = echarts.init(document.getElementById('chart'));

      // 使用刚指定的配置项和数据显示图表。
      myChart.setOption(option);
    }

    //查看详情
    var flag = true;
    function showDetail(o)
    {
      if(flag){
        $("#chart").hide();
        $("#detail").show();
        flag = false;

        $(o).html('查看图表');
      }
      else{
        $("#detail").hide();
        $("#chart").show();
        flag = true;

        $(o).html('查看详情');
      }
      return false;
    }
  <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
