<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:46:34
         compiled from "/www/fpwjob/uploads/app/template/admin/crm_my_performance.htm" */ ?>
<?php /*%%SmartyHeaderCode:3065662155dc51d5a89fd83-31876944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9848deb37d117f8fb616e9bc85c2983c200a384d' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/admin/crm_my_performance.htm',
      1 => 1572067312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3065662155dc51d5a89fd83-31876944',
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
    'totalAll' => 0,
    'totalNew' => 0,
    'totalAttention' => 0,
    'defaultTime' => 0,
    'title' => 0,
    'v' => 0,
    'kk' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51d5a908b92_68584140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51d5a908b92_68584140')) {function content_5dc51d5a908b92_68584140($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /> 
	<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<title>后台管理-图表分析</title>

	<style>
	  .layui-form-item{
		margin-top: 10px;
		/*margin-left: 10px;*/
	  }

	  .layui-form-label{
		width: auto;
	  }

	  .sub-radio{
		margin-left:100px;
		border:1px dashed #c2c2c2;
		display:inline-block
	  }

	  .layui-btn{
		/*margin-left: 15px !important;*/
	  }

	  .layui-form{
		margin-left: 25px;
	  }

	  .layui-form-label{
		padding-left: 0px !important;
	  }

	  .layui-table{
		margin-left: 25px;
		width:95%;
	  }
	  
	  .page-nav{
		margin:10px 10px 10px 25px;
	  }
	</style>
</head>

<body class="body_ifm">

<div class="infoboxp">
	<div class="tabs_info">
		<ul>
			<li  class="curr"><a href="index.php?m=crm_my_performance">客户数量</a></li>
			<li><a href="index.php?m=crm_my_performance&c=concern">关怀记录</a></li>
			<li><a href="index.php?m=crm_my_performance&c=amount">成交金额</a></li>
		</ul>
	</div>

 	<div class="admin_new_tip">
		<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
		<div class="admin_new_tip_list_cont">
			<div class="admin_new_tip_list">该页面展示了客户数量统计 。</div>
		</div>
	</div>
<div class="crm_chose">
	<form class="layui-form">
		<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">

		<!--选择时间范围-->
		<div class="layui-form-item" id="time_range">
			<label class="layui-form-label">查询范围</label>
			<div class="layui-input-inline">
				<input type="text" class="layui-input" id="time" style="width:280px;">
			</div>

			<div class="layui-input-inline">
				<button class="layui-btn" lay-filter="query" onclick="return query();">点击查询</button>
				<button class="layui-btn" onclick="return showDetail(this);">查看详情</button>
			</div>
			
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
        <?php if ($_smarty_tpl->tpl_vars['radio_time']->value=='30'||$_smarty_tpl->tpl_vars['radio_time']->value=='-2') {?>
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
	</div><div style="background:#fff">
	<div class="admin_index_statistics" style="display:block;">
		<div class="admin_index_statistics_box" style="border-top:1px solid #eee;border-bottom:1px solid #eee; margin-bottom:10px;">
			
			<div class="admin_index_statistics_list" style="width:32%" >
				<div class="admin_index_statistics_list_c"style="border-right:1px solid #eee;padding-right:20px;">
					<a class="admin_index_statistics_list_b">
						<div class="admin_index_statistics_tit">客户总数</div>
						<div class="admin_index_statistics_n"><?php echo $_smarty_tpl->tpl_vars['data']->value[3]['all'];?>
 人</div>
						
						<div class="admin_index_statistics_time">
							<ul>
								<li><div class="admin_index_statistics_time_t">本月</div><div class="admin_index_statistics_time_n"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['all'];?>
</div></li>
								<li><div class="admin_index_statistics_time_t">本周</div><div class="admin_index_statistics_time_n"><?php echo $_smarty_tpl->tpl_vars['data']->value[1]['all'];?>
</div></li>
								<li class=" admin_index_statistics_time_t_end">
									<div class="admin_index_statistics_time_t">昨日</div>
									<div class="admin_index_statistics_time_n"><?php echo $_smarty_tpl->tpl_vars['data']->value[2]['all'];?>
</div>
								</li>
							</ul>
						</div>
					</a>
				</div>
			</div>

			<div class="admin_index_statistics_list"style="width:32%" >
				<div class="admin_index_statistics_list_c"style="border-right:1px solid #eee;padding-right:20px;">
					<a class="admin_index_statistics_list_b" >
						<div class="admin_index_statistics_tit">待关怀</div>
						<div class="admin_index_statistics_n"> <?php echo $_smarty_tpl->tpl_vars['data']->value[3]['new'];?>
 人</div>
						<div class="admin_index_statistics_time">
							<ul>
								<li><div class="admin_index_statistics_time_t">本月</div><div class="admin_index_statistics_time_n"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['new'];?>
</div></li>
								<li><div class="admin_index_statistics_time_t">本周</div><div class="admin_index_statistics_time_n"><?php echo $_smarty_tpl->tpl_vars['data']->value[1]['new'];?>
</div></li>
								<li class=" admin_index_statistics_time_t_end">
									<div class="admin_index_statistics_time_t">昨日</div>
									<div class="admin_index_statistics_time_n"><?php echo $_smarty_tpl->tpl_vars['data']->value[2]['new'];?>
</div>
								</li>
							</ul>
						</div>
					</a>
				</div>
			</div>

			<div class="admin_index_statistics_list"style="width:30%" >
				<div class="admin_index_statistics_list_c">
					<a class="admin_index_statistics_list_b">
						<div class="admin_index_statistics_tit">已关怀</div>
						<div class="admin_index_statistics_n"> <?php echo $_smarty_tpl->tpl_vars['data']->value[3]['attention'];?>
 人</div>
						<div class="admin_index_statistics_time">
							<ul>
								<li><div class="admin_index_statistics_time_t">本月</div><div class="admin_index_statistics_time_n"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['attention'];?>
</div></li>
								<li><div class="admin_index_statistics_time_t">本周</div><div class="admin_index_statistics_time_n"><?php echo $_smarty_tpl->tpl_vars['data']->value[1]['attention'];?>
</div></li>
								<li class=" admin_index_statistics_time_t_end">
									<div class="admin_index_statistics_time_t">昨日</div>
									<div class="admin_index_statistics_time_n"><?php echo $_smarty_tpl->tpl_vars['data']->value[2]['attention'];?>
</div>
								</li>
							</ul>
						</div>
					</a>
				</div>
			</div>

		</div>
	</div>

	<div class="admin_atatic_chart" id="chart" style="width:1200px; height:300px; margin-left:25px;"></div>
  </div>
	<table class="layui-table" lay-skin="nob" style="display: none;" id="detail">
		<thead>
			<tr id="detail_thead">
				<th>日期</th>
				<th>客户总数</th>
				<th>待关怀客户</th>
				<th>已关怀客户</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['totalAll']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['totalNew']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['totalAttention']->value;?>
</td>
			</tr>
		</tbody>
	</table>

</div>

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
    function getDateTimeStr(timestamp){
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

		return (d.getFullYear()) + "-" + month + "-" + day + " " + h + ":" + m + ":" + s;
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
			elem : '#time' //指定元素
			,type : 'datetime'
			,range : '~'
			,value : '<?php echo $_smarty_tpl->tpl_vars['defaultTime']->value;?>
'
		});

		form.on('radio(radio_time)', function(data){
			if(data.value == -1){
				window.location = 'index.php?m=crm_my_performance&isAllTime=1&radio_time=' + data.value;
			}else{
				var today = getToday();
				var diff = 1000 * 60 * 60 * 24 * data.value;
				var day = new Date(today - diff);
				var str = getDateTimeStr(Date.parse(day)) + ' ~ ' + getDateTimeStr(Date.parse(new Date()));  
				window.location = 'index.php?m=crm_my_performance&time=' + str + '&radio_time=' + data.value;
			}
		});

		var title = '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
';
		var names = [
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['k']->value>0) {?>
					,
				<?php }?>
				'<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'
			<?php } ?>
		];

		var dataGroupNames = [
			'客户总数',
			'未关怀',
			'已关怀'
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
			<?php } ?>
		];

		refreshBarChart(title, names, values, dataGroupNames);
    });//end layui.use()

    function query(){
		window.location = 'index.php?m=crm_my_performance&time=' + $("#time").val();
		return false;
    }

    function refreshBarChart(title, names, values, dataGroupNames){
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
			series : values,
		};

		// 基于准备好的dom，初始化echarts实例
		var myChart = echarts.init(document.getElementById('chart'));

		// 使用刚指定的配置项和数据显示图表。
		 myChart.setOption(option);
    }

    //查看详情
    var flag = true;
    function showDetail(o){
		if(flag){
			$("#chart").hide();
			$("#detail").show();
			flag = false;
			$(o).html('查看图表');
		}else{
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
