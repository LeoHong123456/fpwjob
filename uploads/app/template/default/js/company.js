function exitsid(id){
	if(document.getElementById(id)){
		return true;
	}else{
		return false;
	}
}

function notuser(){
	$.layer({
		type : 1,
		title :'网站提示',  
		area : ['350px','auto'],
		page : {dom :"#notuser"}
	}); 
}
function switching(url){
	layer.closeAll();
	$.get(url,function(msg){
		if(msg==1 || msg.indexOf('script')){
			if(msg.indexOf('script')){
				$('#uclogin').html(msg);
			}
			layer.msg('您已成功退出！', 2, 9,function(){showlogin('1')});
		}else{
			layer.msg('退出失败！', 2, 8,function(){location.reload();});
		}
	});
}
function applyjobuid(){
	window.addresumelayer = $.layer({
		type : 1,
		fix: false,
		maxmin: false,
		shadeClose: true,
		title :'快速申请职位', 
		offset: [($(window).height() - 650)/2 + 'px', ''],
		closeBtn : [0 , true], 
		area : ['600px','620px'],
		page : {dom :"#applydiv"}
	})
}
function addresumereturn(){
	layer.close(window.nextaddresumelayer);
	window.addresumelayer = $.layer({
		type : 1,
		fix: false,
		maxmin: false,
		shadeClose: true,
		title :'快速申请职位', 
		offset: [($(window).height() - 650)/2 + 'px', ''],
		closeBtn : [0 , true], 
		area : ['600px','620px'],
		page : {dom :"#applydiv"}
	})
}
function nextaddresume(){
	var uname=$.trim($("#uname").val());
	var sex=$("#sex").val();
	var birthday=$.trim($("#birthday").val());
	var edu=$.trim($("#educid").val());
	var exp=$.trim($("#expid").val());
	var telphone=$.trim($("#telphone").val());
	var email=$.trim($("#email").val());
	var type=$.trim($("#typeid").val());
	var report=$.trim($("#reportid").val());
	var authcode=$.trim($("#authcode").val());
	var checkcode = $.trim($("#CheckCodefast").val());

	var isAuthcodeCheck = $.trim($("#isAuthcodeCheck").val());
	if(uname==""){
		parent.layer.msg("请填写真实姓名！",2,8);return false;
	}
	if(sex==""){
		parent.layer.msg("请填写性别！",2,8);return false;
	}
	if(edu==""){
		parent.layer.msg("请选择最高学历！",2,8);return false;
	}
	if(exp==""){
		parent.layer.msg("请选择工作经验！",2,8);return false;
	}
	if(type==""){
		parent.layer.msg("请选择工作性质！",2,8);return false;
	}
	if(report==""){
		parent.layer.msg("请选择到岗时间！",2,8);return false;
	}
	if(checkcode == ''){
		parent.layer.msg("请填写图片验证码！",2,8);return false;
	}
	if(telphone==''){
		parent.layer.msg("请填写手机号码！",2,8);return false;
	}else{
	  var reg= /^\d{5,15}$/;
		 if(!reg.test(telphone)){
			parent.layer.msg("手机号码格式错误！",2,8);return false;
		 }else{			
		 	if(isAuthcodeCheck == 1 && authcode == ''){
		 		parent.layer.msg("请输入短信验证码！",2,8);return false;
		 	}

			var returntype;
			$.ajax({ 
				async: false, 
				type : "POST", 
				url : weburl+"/index.php?m=register&c=regmoblie", 
				dataType : 'text', 
				data:{'moblie':telphone},
				success : function(data) {
					if(data!=0){
						returntype=1;
					}
				} 
			});
			if(returntype==1){
				parent.layer.msg("手机号码已被使用！",2,8);return false;
			}
		 }
	}
	layer.close(window.addresumelayer);
	window.nextaddresumelayer = $.layer({
		type : 1,
		fix: false,
		maxmin: false,
		shadeClose: true,
		title :'快速申请职位', 
		offset: [($(window).height() - 650)/2 + 'px', ''],
		closeBtn : [0 , true], 
		area : ['600px','620px'],
		page : {dom :"#nextaddresume"}
	})
}
function OnLogin(){
    layer.closeAll();
	showlogin('1');
}
function checkaddresume(img,imgreg,url){  
	var jobid= $.trim($("#jobid").val());
	var uname=$.trim($("#uname").val());
	var sex=$("#sex").val();
	var birthday=$.trim($("#birthday").val());
	var edu=$.trim($("#educid").val());
	var exp=$.trim($("#expid").val());
	var telphone=$.trim($("#telphone").val());
	var email=$.trim($("#email").val());
	var type=$.trim($("#typeid").val());
	var report=$.trim($("#reportid").val());
	var authcode=$.trim($("#authcode").val());
	var checkcode = $.trim($("#CheckCodefast").val());

	var isAuthcodeCheck = $.trim($("#isAuthcodeCheck").val());
	if(uname==""){
		parent.layer.msg("请填写真实姓名！",2,8);return false;
	}
	if(sex==""){
		parent.layer.msg("请填写性别！",2,8);return false;
	}
	if(edu==""){
		parent.layer.msg("请选择最高学历！",2,8);return false;
	}
	if(exp==""){
		parent.layer.msg("请选择工作经验！",2,8);return false;
	}
	if(type==""){
		parent.layer.msg("请选择工作性质！",2,8);return false;
	}
	if(report==""){
		parent.layer.msg("请选择到岗时间！",2,8);return false;
	}
	if(checkcode == ''){
		parent.layer.msg("请填写图片验证码！",2,8);return false;
	}
	if(telphone==''){
		parent.layer.msg("请填写手机号码！",2,8);return false;
	}else{
	  var reg= /^\d{5,15}$/;
		 if(!reg.test(telphone)){
			parent.layer.msg("手机号码格式错误！",2,8);return false;
		 }else{			
		 	if(isAuthcodeCheck == 1 && authcode == ''){
		 		parent.layer.msg("请输入短信验证码！",2,8);return false;
		 	}

			var returntype;
			$.ajax({ 
				async: false, 
				type : "POST", 
				url : weburl+"/index.php?m=register&c=regmoblie", 
				dataType : 'text', 
				data:{'moblie':telphone},
				success : function(data) {
					if(data!=0){
						returntype=1;
					}
				} 
			});
			if(returntype==1){
				parent.layer.msg("手机号码已被使用！",2,8);return false;
			}
		 }
	}
	var arr = {
			uname: uname,
			sex: sex,
			birthday: birthday,
			edu: edu,
			exp: exp,
			type: type,
			report: report,
			jobid: jobid,
			telphone:telphone,
			authcode:authcode,
			checkcode:checkcode
		};
	if(document.getElementById('resume_exp').value == '1') {
		var workname = document.getElementById('workname'),
			worksdate = document.getElementById('worksdate'),
			workedate = document.getElementById('workedate'),
			worktitle = document.getElementById('worktitle'),
			workcontent = document.getElementById('workcontent');
		if(workname.value == '') {
			parent.layer.msg("请填写公司名称！",2,8);return false;
		}
		if(worktitle.value == '') {
			parent.layer.msg("请填写担任职务！",2,8);return false;
		}
		if(worksdate.value == '') {
			parent.layer.msg("请填写入职时间！",2,8);return false;

		}
		arr.workname = workname.value;
		arr.worksdate = worksdate.value;
		arr.workedate = workedate.value;
		arr.worktitle = worktitle.value;
		arr.workcontent = workcontent.value;
	}
	if(document.getElementById('resume_edu').value == '1') {
		var eduname = document.getElementById('eduname'),
			edusdate = document.getElementById('edusdate'),
			eduedate = document.getElementById('eduedate'),
			education = document.getElementById('educationcid'),
			eduspec = document.getElementById('eduspec');
		if(eduname.value == '') {
			parent.layer.msg("请填写学校名称！",2,8);return false;
		}
		if(edusdate.value == '') {
			parent.layer.msg("请填写入学时间！",2,8);return false;
		}
		if(eduedate.value == '') {
			parent.layer.msg("请填写离校或预计离校时间！",2,8);return false;
		}
		if(eduspec.value == '') {
			parent.layer.msg("请填写所学专业！",2,8);return false;
		}
		if(education.value == '') {
			parent.layer.msg("请选择毕业学历！",2,8);return false;
		}
		arr.eduname = eduname.value;
		arr.edusdate = edusdate.value;
		arr.eduedate = eduedate.value;
		arr.eduspec = eduspec.value;
		arr.education = education.value;
	}
	if(document.getElementById('resume_pro').value == '1') {
		var proname = document.getElementById('proname'),
			prosdate = document.getElementById('prosdate'),
			proedate = document.getElementById('proedate'),
			protitle = document.getElementById('protitle'),
			procontent = document.getElementById('procontent');
		if(proname.value == '') {
			parent.layer.msg("请填写项目名称！",2,8);return false;
		}
		if(protitle.value == '') {
			parent.layer.msg("请填写项目担任职务！",2,8);return false;
		}
		if(prosdate.value == '') {
			parent.layer.msg("请填写项目开始时间！",2,8);return false;
		}
		if(proedate.value == '') {
			parent.layer.msg("请填写项目结束时间！",2,8);return false;
		}
		arr.proname = proname.value;
		arr.prosdate = prosdate.value;
		arr.proedate = proedate.value;
		arr.protitle = protitle.value;
		arr.procontent = procontent.value;
	}
	var jobload=parent.layer.load('申请中，请稍候...',0);
	$.post(url,arr,function(data){ 
		layer.closeAll(); 
		if(data>0){
			$("#resumeid").val(data);
			checkCode(imgreg);
			$.layer({
				type : 1,
				title :'立刻注册', 
				offset: [($(window).height() - 550)/2 + 'px', ''],
				closeBtn : [0 , true],
				border : [10 , 0.3 , '#000', true],
				area : ['400px','280px'],
				page : {dom :"#userregdiv"}
			}); 
		}else{
			parent.layer.msg(data,2,8,function(){applyjobuid();checkCode(img);}); 
		}
	})
}
function checkregfast(img,url){
	var password=$("#reg_password").val();
	var authcode=$("#reg_authcode").val();
	var resumeid=$("#resumeid").val();
	var jobid=$("#jobid").val();
	if(password==""){
		parent.layer.msg("请输入密码！",2,8);return false;
	}else if(password.length<6 || password.length>20 ){
		parent.layer.msg("请输入6至20位密码！",2,8);return false;
	}
	if(authcode==""){
		parent.layer.msg("请输入验证码！",2,8);return false;
	}
	var loadi=layer.load('申请中，请稍候...',0);
	$.post(url,{password:password,authcode:authcode,resumeid:resumeid,jobid:jobid},function(data){
		layer.close(loadi);  
		if(data==1){
			parent.layer.msg('申请成功！', 2, 9,function(){parent.location.reload();}); 
		}else if(data==3){
			parent.layer.msg("验证码错误!",2,8,function(){checkCode(img);}); 
		}else{
			parent.layer.msg(data, 2, 8,function(){parent.location.reload();}); 
		}
	})
}
function ckjobreg(id){
	var telphone=$.trim($("#telphone").val());
	var email=$.trim($("#email").val());
	if(id==1){
		if(telphone!==''){
			 var reg= /^\d{5,15}$/;
			 if(!reg.test(telphone)){
				parent.layer.msg("手机号码格式错误！",2,8);return false;
			 }else{
				 $.post(weburl+"/index.php?m=register&c=regmoblie",{moblie:telphone},function(data){
					if(data!=0){	
						parent.layer.msg("手机号码已被使用！",2,8);return false;
					}
				});	
			 }
			 return true;
		}else {
            parent.layer.msg("手机号码格式错误！",2,8);return false;
        }
	}else{
		if(email==''){
			parent.layer.msg("请填写联系邮箱！",2,8);return false;
		}else{
			var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
		   if(!myreg.test(email)){
				parent.layer.msg("邮箱格式错误！",2,8);return false; 
		   }else{
			   $.post(weburl+"/index.php?m=register&c=ajaxreg",{email:email},function(data){
					if(data!=0){
						parent.layer.msg("邮箱已被使用！",2,8);return false;
					}
				});	
		   }
		}
	}
}

var Timer;
var smsTimer_time = 90;		
var smsTimer_flag = 90;		
var smsTime_speed = 1000;	

function send_msg(url){
  var telphone = $('#telphone').val();
  var checkcode = $.trim($("#CheckCodefast").val());

  if(telphone==''){
		parent.layer.msg("请填写手机号码！",2,8);return false;
	}else{
	  var reg= /^\d{5,15}$/;
		 if(!reg.test(telphone)){
			parent.layer.msg("手机号码格式错误！",2,8);return false;
		 }else{
		 	if(checkcode == ''){
		 		parent.layer.msg("请输入图片验证码！",2,8);return false;
		 	}

			var returntype;
			$.ajax({ 
				async: false, 
				type : "POST", 
				url : weburl+"/index.php?m=register&c=regmoblie", 
				dataType : 'text', 
				data:{'moblie':telphone},
				success : function(data) {
					if(data!=0){
						returntype=1;
					}
				} 
			});
			if(returntype==1){
				parent.layer.msg("手机号码已被使用！",2,8);return false;
			}
		 }
	}
	if(smsTimer_time==smsTimer_flag){
		Timer = setInterval("smsTimer($('#send_msg_tip'))", smsTime_speed);
		$.post(url,{moblie:telphone, authcode : checkcode},function(data){
			var jsonObject = eval("(" + data + ")"); 
			if(jsonObject.error !== 1){
				clearInterval(Timer);
			}
			layer.msg(jsonObject.msg, 1,jsonObject.st,function(){ 
				if(jsonObject.url){
					window.location.href=jsonObject.url; 
					window.event.returnValue = false;
					return false;
				}
			});
		})
	}else {
		layer.msg('请勿重复发送！', 2, 8);return false;
	}
}

function testMb(mbNo){
	var reg= /^\d{5,15}$/;
	return reg.test(mbNo);
}

function smsTimer(obj){
	if (smsTimer_flag > 0) {
		$(obj).html('重新发送('+smsTimer_flag+'s)');
		$(obj).attr({'style':'color:#f00;font-weight: bold;'});
		smsTimer_flag--;
	}else{
		$(obj).html('重新发送');
		$(obj).attr({'style':'background:#06C;'});
		smsTimer_flag = smsTimer_time;
		clearInterval(Timer);
	}
}


function recommendToMuch(maxNum)
{
	layer.msg('每天最多推荐' + maxNum + '次职位/简历！', 2, 8);
}


function recommendInterval(uid, url, interval)
{
	var ajaxUrl = weburl+"/index.php?m=ajax&c=ajax_recommend_interval";
	$.post(ajaxUrl, {uid: uid},function(data){
		data = eval('(' + data + ')');
		if(data.status == 0){
			window.location = url;
			
		}
		else{
			layer.msg(data.msg, 3, 8);
		}
	});
}