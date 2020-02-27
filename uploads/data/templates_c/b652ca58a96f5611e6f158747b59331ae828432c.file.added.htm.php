<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-17 12:05:41
         compiled from "/www/fpwjob/uploads/app/template/member/com/added.htm" */ ?>
<?php /*%%SmartyHeaderCode:7064423705e4a11153d21a6-72283144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b652ca58a96f5611e6f158747b59331ae828432c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/member/com/added.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7064423705e4a11153d21a6-72283144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statis' => 0,
    'config' => 0,
    'rows' => 0,
    'v' => 0,
    'key' => 0,
    'info' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4a1115494cc1_20626379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4a1115494cc1_20626379')) {function content_5e4a1115494cc1_20626379($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/fpwjob/uploads/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
<div class="admin_mainbody">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=right_box>
	<div id="grow_freedom" class="grow_mod_wrap my_freedom" style="padding:0px;border:none;">
    
      <div class="member_data">
        <div class="member_data_left">
          <div class="member_data_left_name">尊敬的企业用户：</div>
          <div class="mt10">您当前是：<span class="comindex_money_pd_s"><?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>
</span></div>
          	
          	<div class="member_data_tip mt10">
          		服务到期为：
          	<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>time()) {?>
           		
           		<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y-%m-%d');?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');?>

           		
        	<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']==0) {?>
         		
         		<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y-%m-%d');?>
 - 永久
         		
         	<?php } else { ?>
           		
           		<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_stime'],'%Y-%m-%d');?>
 - <span class="comindex_money_pd_s"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');?>
</span> <a href="index.php?c=right" class="cblue">立即开通</a>
           		
        	<?php }?>
        	</div>
        	 
       		
        </div>
        <div class="member_data_right">
          <ul>
            <li><span class="member_data_right_n"><?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']!='2') {
echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];
} else { ?>不限<?php }?></span>
              <div class="member_data_right_p">剩余职位数</div>
            </li>
            <li><span class="member_data_right_n"><?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']!='2') {
echo $_smarty_tpl->tpl_vars['statis']->value['down_resume'];
} else { ?>不限<?php }?></span>
              <div class="member_data_right_p">剩余简历数</div>
            </li>
            <li><span class="member_data_right_n"><?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']!='2') {
echo $_smarty_tpl->tpl_vars['statis']->value['invite_resume'];
} else { ?>不限<?php }?></span>
              <div class="member_data_right_p">剩余邀请数</div>
            </li>
          </ul>
        </div>
	</div>
    
    
    
    
    
    <div class="admincont_box mt20">
      <div class="package_tit"><span class="com_tit_span">选择适合您的企业VIP套餐</span></div>
   	<iframe id="fdingdan"  name="fdingdan" onload="returnmessage('fdingdan');" style="display:none"></iframe>
    
  
        <div class="report_uaer_list fl">
        	<ul>
			    <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==2) {?>
			    <li><a href="index.php?c=right" >套餐会员</a></li>
                <?php }?>
                 
                <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==1) {?>
			    <li><a href="index.php?c=right&act=time" >时间会员</a></li> 
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==0) {?>
			    <li><a href="index.php?c=right" >套餐会员</a></li>               
			    <li><a href="index.php?c=right&act=time" >时间会员</a></li> 
                <?php }?>
                
                
                <li class="report_uaer_list_cur"><a href="index.php?c=right&act=added" >增值包</a></li> 
                <li><a href="index.php?c=ad" >广告位推广</a></li> 
            </ul>
		</div>
        <div class="clear"></div>
           <div class="Value_added_pd">
        <div class="Value_added">
	        <div class="Value_added_mune">  
		        <ul class="Value_added_mune_left">
		        	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<li <?php if ($_GET['id']==$_smarty_tpl->tpl_vars['v']->value['id']||($_GET['id']==''&&$_smarty_tpl->tpl_vars['key']->value<1)) {?>class="Value_added_mune_cur"<?php }?>><a href="index.php?c=right&act=added&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a><i class="Value_added_bg"></i></li>
					<?php } ?>
		        </ul>
	        </div>
            <div class="Value_added_box"> 
            <div class="clear"></div>
			<?php if ($_smarty_tpl->tpl_vars['info']->value) {?>
        	<table class="added_de_box_table" cellpadding="0" cellspacing="0">
           		<tbody>
	           		<tr>
	           			<th>套餐内容</th><th  align="center"><div style="width:65px">套餐价</div></th><th align="center"><div style="width:85px">会员价格</div></th>
	           		</tr>
	           		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	                <tr>
                   
	           			<td>
	           				<label>
                            <div class="added_cont_b">
	                    	<input type="radio" name="service_package" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="toChange()" class="added_cont_radio"/>
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value['resume']) {?><span class="added_cont_s">下载简历：<i class="com_dt_rage"><?php echo $_smarty_tpl->tpl_vars['v']->value['resume'];?>
份</i>，</span><?php }?>
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value['interview']) {?><span class="added_cont_s">邀请面试：<i class="com_dt_rage"><?php echo $_smarty_tpl->tpl_vars['v']->value['interview'];?>
份</i>，</span><?php }?>
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value['job_num']) {?><span class="added_cont_s">发布职位：<i class="com_dt_rage"><?php echo $_smarty_tpl->tpl_vars['v']->value['job_num'];?>
份</i>，</span><?php }?>
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value['breakjob_num']) {?><span class="added_cont_s">刷新职位：<i class="com_dt_rage"><?php echo $_smarty_tpl->tpl_vars['v']->value['breakjob_num'];?>
份</i>，</span><?php }?> 
	                    	
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value['part_num']) {?><span class="added_cont_s">发布兼职：<i class="com_dt_rage"><?php echo $_smarty_tpl->tpl_vars['v']->value['part_num'];?>
份</i>，</span><?php }?> 
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value['breakpart_num']) {?><span class="added_cont_s">刷新兼职：<i class="com_dt_rage"><?php echo $_smarty_tpl->tpl_vars['v']->value['breakpart_num'];?>
份</i>，</span><?php }?> 
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value['lt_job_num']) {?><span class="added_cont_s">发布猎头职位：<i class="com_dt_rage"><?php echo $_smarty_tpl->tpl_vars['v']->value['lt_job_num'];?>
份</i>，</span><?php }?> 
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value['lt_breakjob_num']) {?><span class="added_cont_s">刷新猎头职位：<i class="com_dt_rage"><?php echo $_smarty_tpl->tpl_vars['v']->value['lt_breakjob_num'];?>
份</i>，</span><?php }?> 
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value['lt_resume']) {?><span class="added_cont_s">下载高级简历：<i class="com_dt_rage"><?php echo $_smarty_tpl->tpl_vars['v']->value['lt_resume'];?>
份</i>，</span><?php }?> 
                            </div>
	                    	</label>
	                    </td>
	           			<td align="center"><span class=""><?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>
</span>元</td>
	           			<td align="center">
	           				<span class="added_de_box_table_jg"><?php if ($_smarty_tpl->tpl_vars['discount']->value['service_discount']) {
echo $_smarty_tpl->tpl_vars['v']->value['service_price']*$_smarty_tpl->tpl_vars['discount']->value['service_discount']*0.01;
} else {
echo $_smarty_tpl->tpl_vars['v']->value['service_price'];
}?></span> 元 
	           				<div class="added_de_box_table_jgyh"><?php if ($_smarty_tpl->tpl_vars['discount']->value['service_discount']) {?>专享<?php echo 0.1*$_smarty_tpl->tpl_vars['discount']->value['service_discount'];?>
折优惠<?php }?> </div> 
	           			</td>
                     
	         		</tr>  
	         		<?php } ?>
           		</tbody>
           	</table>
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
            <div class="added_de_box_fk">
				账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<span class="added_de_box_fk_je"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

				（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
 			</div>  
			<?php }?>

			<div class="added_de_box_fk">
				
				应付<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php } else { ?>金额：<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>
					<span id="price" class="added_de_box_fk_je">0</span> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

				<?php } else { ?>
					<span id="price" class="added_de_box_fk_je">0</span> 元
				<?php }?>
 
			</div>

			<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>
				<div class="added_de_box_fk">
					抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<input type="text" id="dkjf" onkeyup="checkNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)" class="com_jf_text">
				</div>
				<div class="added_de_box_fk">
					账户<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
（1元 = <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
）
				</div>
			<?php }?>

			<div class="added_de_box_fk dkh_div" style="display:none">抵扣<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
后消费金额：
				<span class="added_de_box_fk_je" id="price_dk"></span> 元
			</div>

            <div class="added_de_box_fk">
				<form name="alipayment" target="fdingdan" action="index.php?c=pay&act=dingdan" method="post" id="myform1">
					<input type="hidden" value="" id="comserviceid" name="comservice"/>
					<input type="hidden" value="" id="dkjf2" name="dkjf"/>
					<input type="hidden" value="" id="dkprice" name="dkprice"/>
					<input type="hidden" id="logid" name="logid" />
					<div id="zf_div" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?> style="display:none"<?php }?>>
						<a href="javascript:buyvip();" class="added_de_box_bth">立即购买</a>
					</div>
					<div id="zf_div2" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']!=3) {?> style="display:none"<?php }?>>
						<a href="javascript:qrzf();" class="added_de_box_bth">立即购买</a>
					</div>
				</form>
            </div>
			<?php } else { ?>
			<div class="msg_no"><p>亲爱的用户，目前没有增值包服务</p></div>
			<?php }?>
            <div class="clear"></div> 
        
		</div>
        </div>
	</div>
	</div>
	</div>
</div>
</div>
<?php echo '<script'; ?>
>

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

function toChange(){
	var online = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
 
	var obj  = document.getElementsByName('service_package');
    for(var i=0;i<obj.length;i++){
        if(obj[i].checked==true){
			$("#dkjf").val('');
 			$(".dkh_div").hide();
        	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				if(obj[i].value=='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'){
					if(online==3){
						document.getElementById('price').innerHTML='<?php if ($_smarty_tpl->tpl_vars['discount']->value['service_discount']) {
echo $_smarty_tpl->tpl_vars['v']->value['service_price']*$_smarty_tpl->tpl_vars['discount']->value['service_discount']*0.01*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['service_price']*$_smarty_tpl->tpl_vars['config']->value['integral_proportion'];
}?>';
					}else{
						document.getElementById('price').innerHTML='<?php if ($_smarty_tpl->tpl_vars['discount']->value['service_discount']) {
echo $_smarty_tpl->tpl_vars['v']->value['service_price']*$_smarty_tpl->tpl_vars['discount']->value['service_discount']*0.01;
} else {
echo $_smarty_tpl->tpl_vars['v']->value['service_price'];
}?>';
					}
					
					document.getElementById('comserviceid').value='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
';
					
					$("#dkprice").val(<?php if ($_smarty_tpl->tpl_vars['discount']->value['service_discount']) {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['service_price']*$_smarty_tpl->tpl_vars['discount']->value['service_discount']*0.01;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>
 <?php }?>);

				}	
            <?php } ?>
        }
    }
	
}

function checkNum(integral,integral_pro){
	var dkjf = $("#dkjf").val();
 	if(dkjf){
		$(".dkh_div").show();
	} 
	var price = $("#price").text();
	var need_jifen = accMul(price, integral_pro);

  	if(parseInt(integral) >= parseInt(need_jifen)){
		if(parseInt(dkjf) > parseInt(need_jifen)){
			$("#dkjf").val(parseInt(need_jifen));
			var dkjfh = accSub(price , accDiv(need_jifen,integral_pro));
		}else{
			var dkjfh = accSub(price, accDiv(dkjf,integral_pro));
		}	
 	}else{
		if(parseInt(dkjf) > parseInt(integral)){
			$("#dkjf").val(parseInt(integral));
			var dkjfh = accSub(price , accDiv(integral,integral_pro));
		}else{
			var dkjfh = accSub(price, accDiv(dkjf,integral_pro));
 		}
 	}
 		if(dkjfh<=0){
			$("#price_dk").html(0);
			$("#zf_div").hide();
			$("#zf_div2").show();
		}else{
			$("#price_dk").html(dkjfh);
			$("#dkjf2").val(dkjf);
			$("#dkprice").val(dkjfh);
			$("#zf_div").show();
			$("#zf_div2").hide();
		}
 	 
	 	
}

function qrzf(){
	var index = layer.load('执行中，请稍候...',0);

	var logid = $("#logid").val();
	var tcid = $("#comserviceid").val();
	if(tcid==''){
		layer.closeAll();
		layer.msg("请选择增值服务",2,8);
		return false;
	}
	
	var price = $("#price").text();

 	var url = "index.php?c=pay&act=dkzf";
 	
	$.post(url,{tcid:tcid,price:price,logid:logid},function(data){
		layer.closeAll('loading');
		if(data){
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
					window.location.href='index.php?c=paylogtc';
				}); 
    		}
		}
	})
}


function buyvip(){
	var tcid = $("#comserviceid").val();
	if(tcid==''){
		layer.closeAll();
		layer.msg("请选择增值服务",2,8);
		return false;
	}
	$('#myform1').submit();
}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
 	var second = 0;
	window.setInterval(function () {
		second ++;
	}, 1000);

	var url     = location.href, 
		refer   = document.referrer, 
		timeIn  = Math.ceil(new Date().getTime()/1000); 
	var opera   = 44; 
 	$(function(){ 
		setTimeout(function(){ 
			$.post('index.php?c=log',{url:url,refer:refer,timeIn:timeIn,second:2,opera:opera},function(data){
				if(data){
					$("#logid").val(data);
				}
			})
		},2000);
		
    }) 
	
	window.onbeforeunload = function(){ 
		var logid = $("#logid").val();
 		if(second>2){ 
			$.post('index.php?c=log&act=gxLog',{id:logid,second:second},function(data){
				if(data) {
					return false;
				}
			})
		}
   	}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
