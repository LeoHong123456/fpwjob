<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-08 15:43:00
         compiled from "/www/fpwjob/uploads//app/template/member/com/jobserver.htm" */ ?>
<?php /*%%SmartyHeaderCode:5525765735dc51c84898f71-33804566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '025b67f9bb8a0a4aeef4ae40f2702cdaa2ba0d9c' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/member/com/jobserver.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5525765735dc51c84898f71-33804566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'statis' => 0,
    'com_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc51c84a1da42_85563874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc51c84a1da42_85563874')) {function content_5dc51c84a1da42_85563874($_smarty_tpl) {?><?php echo '<script'; ?>
>
function jingjia(id,xsdate){ 
	$("#wnameid").val(id);
	var height="400px";
	if(xsdate!='0'){
		$("#xsdiv").show();
		$('#xstime').html('<font color="red">'+xsdate+'</font>');
		height='400px';
	}
	$.layer({
		type : 1,
		title : '职位置顶',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['480px',height],
        page : {dom : '#wname'}
	});
}
function rec(id,rectime){ 
	$("#recjobid").val(id);
	var height="400px";
	if(rectime!='0'){
		$("#recdiv").show();
		$('#rectime').html('<font color="red">'+rectime+'</font>');
		height='400px';
	}
	$.layer({
		type : 1,
		title : '推荐职位',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['480px',height],
		page : {dom : '#recom'}
	});
}

function recpart(id,rectime){
	$("#recpartid").val(id);
	var height="400px";
	if(rectime!='0'){
 		$("#recpartdiv").show();
		$('#recparttime').html('<font color="red">'+rectime+'</font>');
		height='400px';
	}
	$.layer({
		type : 1,
		title : '推荐兼职',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['480px',height],
		page : {dom : '#recpart'}
	});
}
function urgent(id,urgenttime){ 
	if(id==''){
		var id = $("#jobid").val();
	}
	$("#urgentid").val(id);
	var height="400px";
	if(urgenttime&&urgenttime!=0){
	    $("#udiv").show();
		$('#utime').html('<font color="red">'+urgenttime+'</font>');
		height='400px';
	}
	$.layer({
		type : 1,
		title : '紧急招聘',
		move:false,
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['480px',height],
		page : {dom : '#urgent'}
	});
}
function autojobs(name,id,date){ 
	if(id==''){
		var id = $("#jobid").val();
	}
    var height="400px";
	if(id){
		var chk_value=id;
		var i=1;
	}else{
		var chk_value =[];
		var i=0;
		$('input[name="'+name+'"]:checked').each(function(){
			chk_value.push($(this).val());
			i++;
		}); 
	} 
	var dj = $("#autodj").val();
	
	var online = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
	var pro = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';

	if(i>0){ 
		$("input[name='synalljob']").attr('checked',false);
		$("#jobautoids").val(chk_value);
		$("#jobnum").val(i);
		
		if(online==3){
			$("#rneed").html(i*dj*pro);
		}else{
			$("#rneed").html(i*dj);
		}
		

		$("#jobautobuysdate").hide();
		$(".synalljob").hide();
		if(date){
			$("#rdiv").show();
		    $('#rtime').html('<font color="red">'+date+'</font>');
			height='400px';
		}
		if(id){
			$(".synalljob").show();
		}
		$.layer({
			type : 1,
			move:false,
			title : '预约自动刷新', 
			border : [10 , 0.3 , '#000', true],
			area : ['480px',height],
			page : {dom : '#jobautobuys'}
		})
	}else{
		layer.msg("请选择要自动刷新的职位！",2,8);return false;
	}
}


function accAdd(arg1,arg2){ 
	var r1,r2,m; 
	try{r1=arg1.toString().split(".")[1].length}catch(e){r1=0} 
	try{r2=arg2.toString().split(".")[1].length}catch(e){r2=0} 
	m=Math.pow(10,Math.max(r1,r2)) 
	return (arg1*m+arg2*m)/m 
} 
function accSub(arg1,arg2){ 
	return accAdd(arg1,-arg2); 
} 
function accMul(arg1, arg2) {
	var m = 0, s1 = arg1.toString(), s2 = arg2.toString();
	try { m += s1.split(".")[1].length } catch (e) { }
	try { m += s2.split(".")[1].length } catch (e) { }
	return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)
}
function accDiv(arg1,arg2){    
	var t1=0,t2=0,r1,r2;    
	try{t1=arg1.toString().split(".")[1].length}catch(e){}    
	try{t2=arg2.toString().split(".")[1].length}catch(e){}    
	with(Math){        
		r1=Number(arg1.toString().replace(".",""));        
		r2=Number(arg2.toString().replace(".",""));        
		return (r1/r2)*pow(10,t2-t1);    
	}
}

function myFunction(_this) {
    _this.value = _this.value.replace(/[^0-9]/g, '');
}
 
$(document).ready(function(){ 
	var online = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
	var pro = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';

	$(".job_tck_list").click(function(){
		var cron = $(this).attr('data-cron');
		var name = $(this).attr('data-name');
		$("#autotype").val(cron);
		$(".job_box_in").html(name);
		$(".job_tck_box_pot").hide();
	});
	$(".job_box_in").click(function(e){
		$(".job_tck_box_pot").toggle();
	});
	$(document).bind("click",function(e){
		if(e.target.className != 'job_box_in'){
			$(".job_tck_box_pot").hide();
		}
	}); 
	$("input[name='xsdays']").click(function(){
		var days=$(this).val();
		var xs=$("#myxs").val();
		var need=accMul(xs,days);
		if(online==3){
			var need = accMul(need, pro);
		}
		$("#xsneed").html(need);
		var all=$("#xsall").html();
		if (all<need){
			$("#xspay").show();
		}else{
			$("#xspay").hide();
		}
	});
	$("input[name='recdays']").click(function(){
		var days=$(this).val();
		var rec=$("#myrec").val();
		var need=accMul(rec,days);
		if(online==3){
			var need = accMul(need, pro);
		}
		$("#recneed").html(need);
		var all=$("#recall").html();
		if (all<need){
			$("#recpay").show();
		}else{
	       $("#recpay").hide();
	    }
	});
	$("input[name='recpartdays']").click(function(){
		var days=$(this).val();
		var rec=$("#myrecpart").val();
		var need=accMul(rec,days);
		if(online==3){
			var need = accMul(need, pro);
		}
		$("#recpartneed").html(need);
		var all=$("#recpartall").html();
		if (all<need){
			$("#recpartpay").show();
		}else{
	       $("#recpartpay").hide();
	    }
	});
	$("input[name='udays']").click(function(){
		var days=$(this).val();
		var u=$("#myu").val();
		var need=accMul(u,days);
		if(online==3){
			var need = accMul(need, pro);
		}
		$("#uneed").html(need);
		var all=$("#uall").html();
		if (all<need){
			$("#upay").show();
		}else{
			$("#upay").hide();
		}
	});
	$("input[name='rdays']").click(function(){
		var days=$(this).val();
		var r=$("#myr").val();
		var num=$("#jobnum").val();
		var need=accMul(r,days);
		var needs=accMul(need, num);
		
		if(online==3){
			var needs = accMul(needs, pro);
		}

		$("#rneed").html(needs);
		var all=$("#rall").html();
		if (all<need){
			$("#rpay").show();
		}else{
	        $("#rpay").hide();
	    }
	});
	
}); 



function checkXs(){
	var online = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
	var pro = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';

	var xs=$("#myxs").val();
	var cdays=$("#cxsdays").val();
	if(cdays==''){
		cdays=0;
	}
	var need=accMul(xs,cdays);
	if(online==3){
		var need = accMul(need, pro);
	}

	$("#xsneed").html(need);
	var all=$("#xsall").html();
	if (all<need){
		$("#xspay").show();
	}else{
	    $("#xspay").hide();
	}
}


function checkXsNum(integral,integral_pro){
	var dkjf = $("#xsdkjf").val();
 	if(dkjf){
		$(".xsjfdkh_m").show();
	} 
	var need = $("#xsneed").text();
	var need_jifen = accMul(need, integral_pro);
	if(parseInt(integral) >= parseInt(need_jifen)){
		if(parseInt(dkjf) > parseInt(need_jifen)){
			$("#xsdkjf").val(need_jifen);
			var dkjfh = accSub(need , accDiv(need_jifen,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
		}	
 	}else{
		if(parseInt(dkjf) > parseInt(integral)){
			$("#xsdkjf").val(integral);
			var dkjfh = accSub(need , accDiv(integral,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
 		}
 	}
	if(dkjfh<=0){
		$("#xsdkjfh").html(0);
		$("#xszf").hide();
		$("#xs_btn").show();
	}else{
		$("#xsdkjfh").html(dkjfh);
		$("#xszf").show();
		$("#xs_btn").hide();
	}
  	 	
 }


function checkRec(){
	var online = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
	var pro = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';

	var rec=$("#myrec").val();
	var cdays=$("#crecdays").val();
	var need=accMul(rec,cdays);

	if(online==3){
		var need = accMul(need, pro);
	}

	$("#recneed").html(need);
	var all=$("#recall").html();
	if (all<need){
		$("#recpay").show();
	}else{
	    $("#recpay").hide();
	}
}


function checkRecNum(integral,integral_pro){
	var dkjf = $("#recdkjf").val();
 	if(dkjf){
		$(".recjfdkh_m").show();
	} 
	var need = $("#recneed").text();
	var need_jifen = accMul(need, integral_pro);
	if(parseInt(integral) >= parseInt(need_jifen)){
		if(parseInt(dkjf) > parseInt(need_jifen)){
			$("#recdkjf").val(need_jifen);
			var dkjfh = accSub(need , accDiv(need_jifen,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
		}	
 	}else{
		if(parseInt(dkjf) > parseInt(integral)){
			$("#recdkjf").val(integral);
			var dkjfh = accSub(need , accDiv(integral,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
 		}
 	}
	if(dkjfh<=0){
		$("#recdkjfh").html(0);
		$("#reczf").hide();
		$("#rec_btn").show();
	}else{
		$("#recdkjfh").html(dkjfh);
		$("#reczf").show();
		$("#rec_btn").hide();
	}	
 }


function checkRecPart(){
	var online = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
	var pro = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';

	var rec=$("#myrecpart").val();
	var cdays=$("#crecpartdays").val();
	var need=accMul(rec,cdays);
	
	if(online==3){
		var need = accMul(need, pro);
	}
	$("#recpartneed").html(need);
	var all=$("#recpartall").html();
	if (all<need){
		$("#recpartpay").show();
	}else{
	    $("#recpartpay").hide();
	}
}


function checkRecPartNum(integral,integral_pro){
	var dkjf = $("#recpartdkjf").val();
 	if(dkjf){
		$(".recpartjfdkh_m").show();
	} 
	var need = $("#recpartneed").text();
	var need_jifen = accMul(need, integral_pro);
	
	if(parseInt(integral) >= parseInt(need_jifen)){
		if(parseInt(dkjf) > parseInt(need_jifen)){
			$("#recpartdkjf").val(need_jifen);
			var dkjfh = accSub(need , accDiv(need_jifen,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
		}	
 	}else{
		if(parseInt(dkjf) > parseInt(integral)){
			$("#recpartdkjf").val(integral);
			var dkjfh = accSub(need , accDiv(integral,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
 		}
 	}
  
	if(dkjfh<=0){
		$("#recpartdkjfh").html(0);
		$("#recpartzf").hide();
		$("#recpart_btn").show();
	}else{
		$("#recpartdkjfh").html(dkjfh);
		$("#recpartzf").show();
		$("#recpart_btn").hide();
	}	
 }


function checkU(){
	var online = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
	var pro = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';

	var u=$("#myu").val();
	var cdays=$("#cudays").val();
	var need=accMul(u,cdays);
	
	if(online==3){
		var need = accMul(need, pro);
	}

	$("#uneed").html(need);
	var all=$("#uall").html();
	if (all<need){
		$("#upay").show();
	}else{
	    $("#upay").hide();
	}
}


function checkUrNum(integral,integral_pro){
	var dkjf = $("#urdkjf").val();
 	if(dkjf){
		$(".urjfdkh_m").show();
	} 
	var need = $("#uneed").text();
	var need_jifen = accMul(need, integral_pro);
  	if(parseInt(integral) >= parseInt(need_jifen)){
		if(parseInt(dkjf) > parseInt(need_jifen)){
			$("#urdkjf").val(need_jifen);
			var dkjfh = accSub(need , accDiv(need_jifen,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
		}	
 	}else{
		if(parseInt(dkjf) > parseInt(integral)){
			$("#urdkjf").val(integral);
			var dkjfh = accSub(need , accDiv(integral,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
 		}
 	}
 	if(dkjfh<=0){
		$("#urdkjfh").html(0);
		$("#urzf").hide();
		$("#ur_btn").show();
	}else{
		$("#urdkjfh").html(dkjfh);
		$("#urzf").show();
		$("#ur_btn").hide();
	}
}


function checkUp(){
	var online = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
	var pro = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';

	var r=$("#myr").val();
	var cdays=$("#crdays").val();
	var num=$("#jobnum").val();
	var need=accMul(r,cdays);
	var needs=accMul(need,num);
	
	if(online==3){
		var needs = accMul(needs, pro);
	}

	$("#rneed").html(needs);
	var all=$("#rall").html();
	if (all<need){
		$("#rpay").show();
	}else{
	    $("#rpay").hide();
	}
}


function checkNum(integral,integral_pro){
	var dkjf = $("#rdkjf").val();
 	if(dkjf){
		$(".jfdkh_m").show();
	} 
	var need = $("#rneed").text();
	var need_jifen = accMul(need, integral_pro);
	if(parseInt(integral) >= parseInt(need_jifen)){
		if(parseInt(dkjf) > parseInt(need_jifen)){
			$("#rdkjf").val(parseInt(need_jifen));
			var dkjfh = accSub(need , accDiv(need_jifen,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
		}	
 	}else{
		if(parseInt(dkjf) > parseInt(integral)){
			$("#rdkjf").val(parseInt(integral));
			var dkjfh = accSub(need , accDiv(integral,integral_pro));
		}else{
			var dkjfh = accSub(need, accDiv(dkjf,integral_pro));
 		}
 	}
  	 
	if(dkjfh<=0){
		$("#dkjfh").html(0);
		$("#zffs").hide();
		$("#auto_btn").show();
	}else{
		$("#dkjfh").html(dkjfh);
		$("#zffs").show();
		$("#auto_btn").hide();
	}
 
}

function dayclean(type){
    $(".job_recom_time_zdy").val('');

	var online = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
	var myr = $("#myr").val();
	var myxs= $("#myxs").val();
	var myrec = $("#myrec").val();
	var myu = $("#myu").val();
	var myrecpart = $("#myrecpart").val();

	if(type==rec && myrec!='0' && online!='3'){
		$("#recdkjf").val('');
		$(".recjfdkh_m").hide();
		$("#reczf").show();
		$("#rec_btn").hide();
	}else if(type==urgent && myu!='0' && online!='3'){
		$("#urdkjf").val('');
		$(".urjfdkh_m").hide();
		$("#urzf").show();
		$("#ur_btn").hide();
	}else if(type==top && myxs!='0' && online!='3'){
		$("#xsdkjf").val('');
		$(".xsjfdkh_m").hide();
		$("#xszf").show();
		$("#xs_btn").hide();
	}else if(type==refresh && myr!='0' && online!='3'){
 		$("#rdkjf").val('');
		$(".jfdkh_m").hide();
		$("#zffs").show();
		$("#auto_btn").hide();
	}else if(type==recpart && myrecpart!='0' && online!='3'){
  		$("#recpartdkjf").val('');
		$(".recpartjfdkh_m").hide();
		$("#recpartzf").show();
		$("#recpart_btn").hide();
	}	
}

function radioclean(obj){
    $("input[name='recdays']").attr("checked",false);
	$("input[name='xsdays']").attr("checked",false);
	$("input[name='udays']").attr("checked",false);
	$("input[name='rdays']").attr("checked",false);
	$("input[name='recpartdays']").attr("checked",false);
	if(obj==''){
	    $(".sxc_p").html('0');
	}
	$("#rdkjf").val('');
	$(".jfdkh_m").hide();

	$("#xsdkjf").val('');
	$(".xsjfdkh_m").hide();
	
	$("#recdkjf").val('');
	$(".recjfdkh_m").hide();
	
	$("#urdkjf").val('');
	$(".urjfdkh_m").hide();
	
	$("#recpartdkjf").val('');
	$(".recpartjfdkh_m").hide();
}

 
function dkzf(){ 
	var jobautoids = $('#jobautoids').val();
 	var rdays = $("input[name='rdays']:checked").val();
 	var crdays = $('#crdays').val();
 	var rdkjf = $('#rdkjf').val();
 	var index = layer.load('执行中，请稍候...',0);
	var url = "index.php?c=job&act=dkBuy";
	$.post(url,{jobautoids:jobautoids,rdays:rdays,crdays:crdays,rdkjf:rdkjf},function(data){
		if(data){
			layer.closeAll();
			data=eval('('+data+')'); 
			if(data.error==1){
				if(data.url){
					layer.msg(data.msg, 2,8,function(){
						window.location.href=data.url;
					});
				}else{
					layer.msg(data.msg, 2,8);
				}
     			
     		}else if(data.error==0){
     			layer.msg(data.msg, 2,9,function(){
					window.location.href='';
				}); 
    		}
		}
	})
}
function xsdkzf(){
	var jobid = $('#wnameid').val();
 	var xsdays = $("input[name='xsdays']:checked").val();
 	var cxsdays = $('#cxsdays').val();
 	var xsdkjf = $('#xsdkjf').val();
 	var index = layer.load('执行中，请稍候...',0);
	var url = "index.php?c=job&act=dkBuy";
	$.post(url,{zdjobid:jobid,xsdays:xsdays,cxsdays:cxsdays,xsdkjf:xsdkjf},function(data){
		if(data){
			layer.closeAll();
			data=eval('('+data+')'); 
			if(data.error==1){
				if(data.url){
					layer.msg(data.msg, 2,8,function(){
						window.location.href=data.url;
					});
				}else{
					layer.msg(data.msg, 2,8);
				}
     			
     		}else if(data.error==0){
     			layer.msg(data.msg, 2,9,function(){
					window.location.href='';
				}); 
    		}
		}
	})
}
function recdkzf(){
	var jobid = $('#recjobid').val();
 	var recdays = $("input[name='recdays']:checked").val();
 	var crecdays = $('#crecdays').val();
 	var recdkjf = $('#recdkjf').val();
 	var index = layer.load('执行中，请稍候...',0);
	var url = "index.php?c=job&act=dkBuy";
	$.post(url,{recjobid:jobid,recdays:recdays,crecdays:crecdays,recdkjf:recdkjf},function(data){
		if(data){
			layer.closeAll();
			data=eval('('+data+')'); 
			if(data.error==1){
				if(data.url){
					layer.msg(data.msg, 2,8,function(){
						window.location.href=data.url;
					});
				}else{
					layer.msg(data.msg, 2,8);
				}
     			
     		}else if(data.error==0){
     			layer.msg(data.msg, 2,9,function(){
					window.location.href='';
				}); 
    		}
		}
	})
}
function urdkzf(){
	var jobid = $('#urgentid').val();
 	var udays = $("input[name='udays']:checked").val();
 	var cudays = $('#cudays').val();
 	var urdkjf = $('#urdkjf').val();
 	var index = layer.load('执行中，请稍候...',0);
	var url = "index.php?c=job&act=dkBuy";
	$.post(url,{ujobid:jobid,udays:udays,cudays:cudays,urdkjf:urdkjf},function(data){
		if(data){
			layer.closeAll();
			data=eval('('+data+')'); 
			if(data.error==1){
				if(data.url){
					layer.msg(data.msg, 2,8,function(){
						window.location.href=data.url;
					});
				}else{
					layer.msg(data.msg, 2,8);
				}
     			
     		}else if(data.error==0){
     			layer.msg(data.msg, 2,9,function(){
					window.location.href='';
				}); 
    		}
		}
	})
}
function recpartdkzf(){
	var jobid = $('#recpartid').val();
 	var recpartdays = $("input[name='recpartdays']:checked").val();
 	var crecpartdays = $('#crecpartdays').val();
 	var recpartdkjf = $('#recpartdkjf').val();
 	var index = layer.load('执行中，请稍候...',0);
	var url = "index.php?c=job&act=dkBuy";
	$.post(url,{recpartid:jobid,recpartdays:recpartdays,crecpartdays:crecpartdays,recpartdkjf:recpartdkjf},function(data){
		if(data){
			layer.closeAll();
			data=eval('('+data+')'); 
			if(data.error==1){
				if(data.url){
					layer.msg(data.msg, 2,8,function(){
						window.location.href=data.url;
					});
				}else{
					layer.msg(data.msg, 2,8);
				}
     			
     		}else if(data.error==0){
     			layer.msg(data.msg, 2,9,function(){
					window.location.href='';
				}); 
    		}
		}
	})
}

 
function buyAutoJobOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var jobautoids = $('#jobautoids').val();
 	var rdays = $("input[name='rdays']:checked").val();
 	var crdays = $('#crdays').val();
 	var rdkjf = $('#rdkjf').val();
 	var index = layer.load('执行中，请稍候...',0);
 	
 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {jobautoids:jobautoids,rdays:rdays,crdays:crdays,rdkjf:rdkjf},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
          
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_auto_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_auto').submit();
    		}
        }  
  	});
}

function zdJobOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var jobid = $('#wnameid').val();
 	var xsdays = $("input[name='xsdays']:checked").val();
 	var cxsdays = $('#cxsdays').val();
	var xsdkjf = $('#xsdkjf').val();
 	var index = layer.load('执行中，请稍候...',0);

 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {zdjobid:jobid,xsdays:xsdays,cxsdays:cxsdays,xsdkjf:xsdkjf},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
          
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_zd_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_zd').submit();
    		}
        }  
  	});
}

function recJobOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var jobid = $('#recjobid').val();
 	var recdays = $("input[name='recdays']:checked").val();
 	var crecdays = $('#crecdays').val();
	var recdkjf = $('#recdkjf').val();
 	var index = layer.load('执行中，请稍候...',0);

 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {recjobid:jobid,recdays:recdays,crecdays:crecdays,recdkjf:recdkjf},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
          
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_rec_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_rec').submit();
    		}
        }  
  	});
}

function urgentJobOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var jobid = $('#urgentid').val();
 	var udays = $("input[name='udays']:checked").val();
 	var cudays = $('#cudays').val();
	var urdkjf = $('#urdkjf').val();
 	var index = layer.load('执行中，请稍候...',0);

 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {ujobid:jobid,udays:udays,cudays:cudays,urdkjf:urdkjf},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
          
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_urgent_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_urgent').submit();
    		}
        }  
  	});
}

function recPartOrder(pay_type){
 	$('#pay_type').val(pay_type);
 	var jobid = $('#recpartid').val();
 	var recdays = $("input[name='recpartdays']:checked").val();
 	var crecdays = $('#crecpartdays').val();
	var recdkjf = $('#recpartdkjf').val();
 	var index = layer.load('执行中，请稍候...',0);

 	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=job&act=buyJob",  
        data: {recpartid:jobid,recdays:recdays,crecdays:crecdays,recdkjf:recdkjf},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
          
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_recpart_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_recpart').submit();
    		}
        }  
  	});
}

function wxorderstatus(orderid) { 
	$.post('<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/api/wxpay/wxorder.php',{orderid:orderid},function(data){
		if(data==1){
			window.location.href='index.php?c=paylog';
		}
	});
}

function pay_forms(){
	var pay_type=$("#pay_type").val();
	if(pay_type==''){
		layer.msg('请选择支付方式！', 2,8);
	}else if(pay_type == 'wxpay'){ 
		var orderId = $("#orderid").val();
		$.post('index.php?c=payment&act=wxurl',{orderId:orderId},function(data){
			$('.wx_payment_ewm').html(data);
			$.layer({
				type : 1,
				title :'微信扫码支付', 
				closeBtn : [0 , true],
				border : [10 , 0.3 , '#000', true],
				area : ['320px','400px'],
				page : {dom :"#wxpayTx"}
			});
			setInterval("wxorderstatus("+orderId+")", 3000); 
		})
		return false;  
	} else{
		$.layer({
			type : 1,
			title :'提示',
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['450px','280px'],
			page : {dom :"#payshow"}
		});
	}
}
function rePay(){
	var orderId = $("#orderid").val();
	location.href="index.php?c=payment&id="+orderId;
}
<?php echo '</script'; ?>
>

 <div class="job_tck_box" id="jobautobuys" style="display:none;">
	<div class="job_recom_box">
		<div class="job_recom_list">
			<span class="job_recom_s job_recom_s_mt">自动刷新：</span>
			<div class="job_recom_list_jobtime">
				<label><span class="job_recom_time"><input type="radio" name="rdays" value="1" onclick="dayclean(refresh)" checked="checked">1天</span></label> 
				<label><span class="job_recom_time"><input type="radio" name="rdays" value="3" onclick="dayclean(refresh)">3天</span> </label> 
				<label><span class="job_recom_time"><input type="radio" name="rdays" value="7" onclick="dayclean(refresh)">7天</span> </label> 
				<label><span class="job_recom_time"><input type="radio" name="rdays" value="15" onclick="dayclean(refresh)">15天</span></label>  
				<label><span class="job_recom_time"><input type="radio" name="rdays" value="30" onclick="dayclean(refresh)">30天</span></label>  
				<input type="text" value="" class="job_recom_time_zdy" id="crdays" name="crdays" maxlength="3" onclick="radioclean(this.value)" onkeyup="checkUp();" oninput="myFunction(this)" placeholder="自定义"><span class="job_recom_time_zdy_t">天</span>
				<input type="hidden" name="jobautoids" id="jobautoids"/>
				<input type="hidden" name="jobnum" id="jobnum"/>
				<input type="hidden" id="myr" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['job_auto'];?>
"/>
			</div>
 		</div>
		<div class="job_recom_list">
			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
			<span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
					<a href="index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
 				</div>
			</div>
			<?php }?>
			<span class="job_recom_s">所需<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?></span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
						<span id="rneed" class="job_recom_list_jobtime_s sxc_p"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['job_auto'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					<?php } else { ?>
						<span id="rneed" class="job_recom_list_jobtime_s sxc_p"><?php echo $_smarty_tpl->tpl_vars['config']->value['job_auto'];?>
</span>元
					<?php }?>
 				</div>
			</div>
		</div>

 		<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
		<div class="job_recom_list">
			<span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
			<input type="text" value="" id="rdkjf" name="rdkjf" onkeyup="checkNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" class="com_jf_text">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
		</div>
		<?php }?>
		<div class="job_recom_list jfdkh_m" style="display:none">
			<span class="job_recom_s">抵扣后金额：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span id="dkjfh" class="job_recom_list_jobtime_s"></span>元
				</div>
			</div>
		</div>

		<div class="job_recom_list" id="rdiv" style="display:none">
			<span class="job_recom_s">到期时间：</span>
			<div class="job_recom_list_jobtime">
				<span id="rtime" class="job_recom_list_tip_s"></span>
			</div>
		</div>
		<div id="zffs" <?php if ($_smarty_tpl->tpl_vars['config']->value['job_auto']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>style="display:none"<?php }?>>
			<form name="alipayment"  id="payform_auto" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_redpack_list">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
						<div class="job_redpack_list_name">支付方式：</div>
						<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
							<div class="job_redpack_pay">
								<a href="javascript:;" onclick="buyAutoJobOrder('wxpay');">
									<div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付
								</a>
							</div> 
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
							<div class="job_redpack_pay">
								<a href="javascript:;" onclick="buyAutoJobOrder('alipay');">
									<div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付
								</a>
							</div>
						<?php }?>
					<?php } else { ?>
						<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
					<?php }?>
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_auto_id" value=""/>
					<input type="hidden" value="自动刷新金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
			</form>
		</div>
		<div id="auto_btn" <?php if ($_smarty_tpl->tpl_vars['config']->value['job_auto']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?>style="display:none"<?php }?> class="job_tck_bth_pd">
			<input type='button' name='rzf' value='确认支付' onClick="dkzf();" class='job_redpack_list_c_bth'>
		</div>
	</div>
</div>

 <div id="wname"  style="display:none; ">
	<div class="job_recom_box">
		<div class="job_recom_box_js">  
			<div class="job_recom_list">
				<span class="job_recom_s job_recom_s_mt">置顶时长：</span>
				<div class="job_recom_list_jobtime">
					<label><span class="job_recom_time"><input type="radio" name="xsdays" value="1" onclick="dayclean(top)" checked="checked"/>1天</span></label> 
					<label><span class="job_recom_time"><input type="radio" name="xsdays" value="3" onclick="dayclean(top)"/>3天</span> </label> 
					<label><span class="job_recom_time"><input type="radio" name="xsdays" value="7" onclick="dayclean(top)"/>7天</span> </label> 
					<label><span class="job_recom_time"><input type="radio" name="xsdays" value="15" onclick="dayclean(top)"/>15天</span></label>  
					<label><span class="job_recom_time"><input type="radio" name="xsdays" value="30" onclick="dayclean(top)"/>30天</span></label>  
					<input type="text" value="" class="job_recom_time_zdy" id="cxsdays" name="cxsdays" maxlength="3" onclick="radioclean(this.value)" onkeyup="checkXs();" oninput="myFunction(this)" placeholder="自定义"/><span class="job_recom_time_zdy_t">天</span>
					<input type="hidden" name="wnameid" id="wnameid" value=""/>
					<input type="hidden" id="myxs" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job_top'];?>
"/>
				</div>
			</div>
			<div class="job_recom_list">
				<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
			<span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
					<a href="index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
 				</div>
			</div>
			<?php }?>
				<span class="job_recom_s">所需<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?></span>
				<div class="job_recom_list_jobtime">
					<div class="job_recom_list_jobtime_money">
						<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
							<span id="xsneed" class="job_recom_list_jobtime_s sxc_p"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['integral_job_top'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

						<?php } else { ?>
							<span id="xsneed" class="job_recom_list_jobtime_s sxc_p"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job_top'];?>
</span>元
						<?php }?>
 					</div>
				</div>
			</div>

 			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
			<div class="job_recom_list">
				<span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
				<input type="text" value="" id="xsdkjf" name="xsdkjf" onkeyup="checkXsNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" class="com_jf_text">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
			</div>
			<?php }?>
			<div class="job_recom_list xsjfdkh_m" style="display:none">
				<span class="job_recom_s">抵扣后金额：</span>
				<div class="job_recom_list_jobtime">
					<div class="job_recom_list_jobtime_money">
						<span id="xsdkjfh" class="job_recom_list_jobtime_s"></span>元
					</div>
				</div>
			</div>

			<div class="job_recom_list" id="xsdiv" style="display:none">
				<span class="job_recom_s">到期时间：</span>
				<div class="job_recom_list_jobtime"><span id="xstime" class="job_recom_list_tip_s"></span></div>
			</div>
			<div id="xszf" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_job_top']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>style="display:none"<?php }?>>
				<form name="alipayment"  id="payform_zd" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
					<div class="job_redpack_list" >
						<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
						<div class="job_redpack_list_name">支付方式：</div>
						<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
						<div class="job_redpack_pay">
							<a href="javascript:;" onclick="zdJobOrder('wxpay');"><div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付</a>
						</div> 
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
						<div class="job_redpack_pay">
							<a href="javascript:;" onclick="zdJobOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
						</div>
						<?php }?>
						<?php } else { ?>
						<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
						<?php }?>
						<input type="hidden" value="" id="pay_type" name="pay_type"/>
						<input type="hidden" name="dingdan" id="order_zd_id" value=""/>
						<input type="hidden" value="置顶服务金额"  name="subject"/>
						<input type="hidden" name="pay_bank" value="directPay">
					</div>
				</form>
			</div>
			<div id="xs_btn" <?php if ($_smarty_tpl->tpl_vars['config']->value['integral_job_top']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?>style="display:none"<?php }?> class="job_tck_bth_pd">
				<input type='button' name='xszf' value='确认支付' onClick="xsdkzf();" class='job_redpack_list_c_bth'>
			</div>
		</div>
	</div>
</div>

 <div id="recom"  style="display:none; width:480px; ">
	<div class="job_recom_box">
		<div class="job_recom_list">
			<span class="job_recom_s job_recom_s_mt">推荐时长：</span>
			<div class="job_recom_list_jobtime">
				<label><span class="job_recom_time"><input type="radio" name="recdays" value="1" onclick="dayclean(rec)" checked="checked">1天</span></label> 
				<label><span class="job_recom_time"><input type="radio" name="recdays" value="3" onclick="dayclean(rec)">3天</span> </label> 
				<label><span class="job_recom_time"><input type="radio" name="recdays" value="7" onclick="dayclean(rec)">7天</span> </label> 
				<label><span class="job_recom_time"><input type="radio" name="recdays" value="15" onclick="dayclean(rec)">15天</span></label>  
				<label><span class="job_recom_time"><input type="radio" name="recdays" value="30" onclick="dayclean(rec)">30天</span></label>  
				<input type="text" value="" class="job_recom_time_zdy" id="crecdays" name="crecdays" maxlength="3" onclick="radioclean(this.value)" onkeyup="checkRec();" oninput="myFunction(this)" placeholder="自定义"/>
				<span class="job_recom_time_zdy_t">天</span>
				<input type="hidden" name="recjobid" id="recjobid" value=""/>
				<input type="hidden" id="myrec" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['com_recjob'];?>
"/>
			</div>
		</div>
		<div class="job_recom_list">
			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
			<span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
					<a href="index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
 				</div>
			</div>
			<?php }?>
			<span class="job_recom_s">所需<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?></span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
						<span id="recneed" class="job_recom_list_jobtime_s sxc_p"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['com_recjob'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					<?php } else { ?>
						<span id="recneed" class="job_recom_list_jobtime_s sxc_p"><?php echo $_smarty_tpl->tpl_vars['config']->value['com_recjob'];?>
</span>元
					<?php }?>
 				</div>
			</div>
		</div>

 		<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
			<div class="job_recom_list">
				<span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
				<input type="text" value="" id="recdkjf" name="recdkjf" onkeyup="checkRecNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" class="com_jf_text">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
			</div>
		<?php }?>
		<div class="job_recom_list recjfdkh_m" style="display:none">
			<span class="job_recom_s">抵扣后金额：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span id="recdkjfh" class="job_recom_list_jobtime_s"></span>元
				</div>
			</div>
		</div>

		<div class="job_recom_list" id="recdiv" style="display:none">
			<span class="job_recom_s">到期时间：</span>
			<div class="job_recom_list_jobtime"><span id="rectime" class="job_recom_list_tip_s"></span></div>
		</div>
		
		<div id="reczf" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_recjob']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>style="display:none"<?php }?>>
			<form name="alipayment"  id="payform_rec" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_redpack_list">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_list_name">支付方式：</div>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="recJobOrder('wxpay');"><div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付</a>
					</div> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
				 	<div class="job_redpack_pay">
						<a href="javascript:;" onclick="recJobOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
					</div>
					<?php }?>
					<?php } else { ?>
					<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
					<?php }?>
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_rec_id" value=""/>
					<input type="hidden" value="职位推荐金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
 			</form>
		</div>
		<div id="rec_btn" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_recjob']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?>style="display:none"<?php }?> class="job_tck_bth_pd">
			<input type='button' name='reczf' value='确认支付' onClick="recdkzf();" class='job_redpack_list_c_bth'>
		</div>
	</div>
</div>
 
 <div id="urgent"  style="display:none; ">
	<div class="job_recom_box">
		<div class="job_recom_list">
			<span class="job_recom_s job_recom_s_mt">紧急天数：</span>
			<div class="job_recom_list_jobtime">
				<label><span class="job_recom_time"><input type="radio" name="udays" value="1" onclick="dayclean(urgent)" checked="checked">1天</span></label> 
				<label><span class="job_recom_time"><input type="radio" name="udays" value="3" onclick="dayclean(urgent)">3天</span> </label> 
				<label><span class="job_recom_time"><input type="radio" name="udays" value="7" onclick="dayclean(urgent)">7天</span> </label> 
				<label><span class="job_recom_time"><input type="radio" name="udays" value="15" onclick="dayclean(urgent)">15天</span></label>  
				<label><span class="job_recom_time"><input type="radio" name="udays" value="30" onclick="dayclean(urgent)">30天</span></label>  
				<input type="text" value="" class="job_recom_time_zdy" id="cudays" name="cudays" maxlength="3" onclick="radioclean(this.value)" onkeyup="checkU();" oninput="myFunction(this)" placeholder="自定义"><span class="job_recom_time_zdy_t">天</span>
				<input type="hidden" name="urgentid" id="urgentid" value=""/>
				<input type="hidden" id="myu" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['com_urgent'];?>
"/>
			</div>
		</div>
		<div class="job_recom_list">
			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
			<span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
					<a href="index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
 				</div>
			</div>
			<?php }?>
			<span class="job_recom_s">所需<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?></span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
						<span id="uneed" class="job_recom_list_jobtime_s sxc_p"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['com_urgent'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					<?php } else { ?>
						<span id="uneed" class="job_recom_list_jobtime_s sxc_p"><?php echo $_smarty_tpl->tpl_vars['config']->value['com_urgent'];?>
</span>元
					<?php }?>
 				</div>
			</div>
		</div>

 		<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
			<div class="job_recom_list">
				<span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
				<input type="text" value="" id="urdkjf" name="urdkjf" onkeyup="checkUrNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" class="com_jf_text">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
			</div>
		<?php }?>
		<div class="job_recom_list urjfdkh_m" style="display:none">
			<span class="job_recom_s">抵扣后金额：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span id="urdkjfh" class="job_recom_list_jobtime_s"></span>元
				</div>
			</div>
		</div>

		<div class="job_recom_list" id="udiv" style="display:none">
			<span class="job_recom_s">到期时间：</span>
			<div class="job_recom_list_jobtime"><span id="utime" class="job_recom_list_tip_s"></span></div>
		</div>
		<div id="urzf" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_urgent']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>style="display:none"<?php }?>>
			<form name="alipayment"  id="payform_urgent" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_redpack_list">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_list_name">支付方式：</div>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="urgentJobOrder('wxpay');"><div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付</a>
					</div> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="urgentJobOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
					</div>
					<?php }?>
					<?php } else { ?>
					<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
					<?php }?>
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_urgent_id" value=""/>
					<input type="hidden" value="紧急招聘金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
			</form>
		</div>
		<div id="ur_btn" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_urgent']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?>style="display:none"<?php }?> class="job_tck_bth_pd">
			<input type='button' name='urzf' value='确认支付' onClick="urdkzf();" class='job_redpack_list_c_bth'>
		</div>
	</div>
</div>

 <div id="recpart"  style="display:none;">
	<div class="job_recom_box">
		<div class="job_recom_list">
			<span class="job_recom_s job_recom_s_mt">推荐时长：</span>
			<div class="job_recom_list_jobtime">
				<label><span class="job_recom_time"><input type="radio" name="recpartdays" value="1" onclick="dayclean(recpart)" checked="checked">1天</span></label> 
				<label><span class="job_recom_time"><input type="radio" name="recpartdays" value="3" onclick="dayclean(recpart)">3天</span> </label> 
				<label><span class="job_recom_time"><input type="radio" name="recpartdays" value="7" onclick="dayclean(recpart)">7天</span> </label> 
				<label><span class="job_recom_time"><input type="radio" name="recpartdays" value="15" onclick="dayclean(recpart)">15天</span></label>  
				<label><span class="job_recom_time"><input type="radio" name="recpartdays" value="30" onclick="dayclean(recpart)">30天</span></label>  
				<input type="text" value="" class="job_recom_time_zdy" id="crecpartdays" name="crecpartdays" onclick="radioclean(this.value)" onkeyup="checkRecPart();" oninput="myFunction(this)" placeholder="自定义"/><span class="job_recom_time_zdy_t">天</span>
				<input type="hidden" name="recpartid" id="recpartid" value=""/>
				<input type="hidden" id="myrecpart" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['com_recpartjob'];?>
"/>
			</div>
		</div>
		<div class="job_recom_list">
			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
			<span class="job_recom_s">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
					<a href="index.php?c=pay&type=integral" class="comindex_money_pd_a cblue">充值</a>
 				</div>
			</div>
			<?php }?>
			<span class="job_recom_s">所需<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?></span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
						<span id="recpartneed" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion']*$_smarty_tpl->tpl_vars['config']->value['com_recpartjob'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

					<?php } else { ?>
						<span id="recpartneed" class="job_recom_list_jobtime_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['com_recpartjob'];?>
</span>元
					<?php }?>
 				</div>
			</div>
		</div>

 		<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
			<div class="job_recom_list">
				<span class="job_recom_s">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</span>
				<input type="text" value="" id="recpartdkjf" name="recpartdkjf" onkeyup="checkRecPartNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" class="com_jf_text">账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];
echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
			</div>
		<?php }?>
		<div class="job_recom_list recpartjfdkh_m" style="display:none">
			<span class="job_recom_s">抵扣后金额：</span>
			<div class="job_recom_list_jobtime">
				<div class="job_recom_list_jobtime_money">
					<span id="recpartdkjfh" class="job_recom_list_jobtime_s"></span>元
				</div>
			</div>
		</div>

		<div class="job_recom_list" id="recpartdiv" style="display:none">
			<span class="job_recom_s">到期时间：</span>
			<div class="job_recom_list_jobtime"><span id="recparttime" class="job_recom_list_tip_s"></span></div>
		</div>
		
		<div id="recpartzf" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_recpartjob']==0||$_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>style="display:none"<?php }?>>
			<form name="alipayment"  id="payform_recpart" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
				<div class="job_redpack_list">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1'||$_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_list_name">支付方式：</div>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['wxpay']=='1') {?>
					<div class="job_redpack_pay">
						<a href="javascript:;" onclick="recPartOrder('wxpay');"><div class="job_redpack_pay_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/wx_pay.png"></div> 微信支付</a>
					</div> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
				 	<div class="job_redpack_pay">
						<a href="javascript:;" onclick="recPartOrder('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
					</div>
					<?php }?>
					<?php } else { ?>
					<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
					<?php }?>
					<input type="hidden" value="" id="pay_type" name="pay_type"/>
					<input type="hidden" name="dingdan" id="order_recpart_id" value=""/>
					<input type="hidden" value="兼职推荐金额"  name="subject"/>
					<input type="hidden" name="pay_bank" value="directPay">
				</div>
 			</form>
		</div>
		<div id="recpart_btn" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_recpartjob']!=0&&$_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?>style="display:none"<?php }?> class="job_tck_bth_pd">
			<input type='button' name='recpartzf' value='确认支付' onClick="recpartdkzf();" class='job_redpack_list_c_bth'>
		</div>
	</div>
</div>

<input type="hidden" name="orderid" id="orderid" value=""/>
  
 <div id="wxpayTx"  style="display:none;">
	<div class="wx_payment">
		<div class="wx_payment_cont"><div class="wx_payment_ewm">正在加载微信二维码,请稍候....</div> </div><div class="wx_payment_h2">二维码有效时长为2小时，请尽快支付</div>
		
		<div class="wx_payment_tip">
			<div class="wx_payment_tip_left">
				<i class="wx_payment_tip_line1"></i>
				<i class="wx_payment_tip_line2"></i>
				<i class="wx_payment_tip_line3"></i>
			</div> 
			<div class="wx_payment_tip_right">请使用微信扫一扫<br>扫描二维码支付</div>
		</div>
	</div>
</div>  

 <div id="payshow" style="width:450px; position:absolute;left:0px;top:0px; background:#fff; display:none;">
	<div class="payment_tip">
		请在新打开的支付页面上完成付款，付款完成前请不要关闭此窗口。<br>
		如您在支付过程中遇到问题，请联系客服：<span class="payment_tip_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</span>
	</div>
	
	<div class="payment_bottom">
		<a href="index.php?c=paylog" class="payment_bottombutt">已完成付款</a>
		<a href="javascript:;" onclick="rePay();" class="payment_bottom_bth2">重新支付</a>
	</div>
</div>

 <?php }} ?>
