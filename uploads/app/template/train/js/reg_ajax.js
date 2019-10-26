 
function exitsid(id){
	if(document.getElementById(id)){
		return true;
	}else{
		return false;
	}
}


function reg_checkAjax(id){

 	var obj = $("#"+id).val();
	var msg;
	if(id=="username"){
		if(obj==""){			
			msg='用户名不能为空！';
			update_html(id,"0",msg); 
			return false;
		}else if(obj.length<2||obj.length>16){
			msg = "用户名应该在2-16个字符！";
			return update_html(id,"0",msg);
		}else{	
			$.post(weburl+"/index.php?m=register&c=ajaxreg",{username:obj},function(data){
				if(data==0){	
					msg='填写正确！';
					update_html(id,"1",msg);
				}else{
					if(data==1){
						msg="用户名已存在！";
					}else if(data==2){
						msg="用户名不得包含特殊字符！";
					}else if(data==3){
						msg="该用户名已被禁止注册！";
					} 
					update_html(id,"0",msg);
				}
			});	
		}
	}
	
	if(id=="password"){
		if(obj==""){
			 msg='密码不能为空！';
			 update_html(id,"0",msg);
			 return false;
		 }else if(obj.length<6 || obj.length>20){
			 msg = "密码应该在6-20个字符！";
			 return update_html(id,"0",msg);
		 }else{
			msg = "填写正确！";
			 return update_html(id,"1",msg);
		 }   	
		
	}
	if(id=="passconfirm"){
		var obj2 = $("#password").val();
		 if(obj==""){
			  msg = "重复密码不能为空！";
			 return update_html(id,"0",msg);
		 }else if(obj2!=obj){
			 msg = "重复密码不一致！";
			 return update_html(id,"0",msg);
		}else{
			msg = "填写正确！";
			return update_html(id,"1",msg);
		 }   	
		
	}
	if(id=="moblie"){
		var reg= /^\d{5,15}$/;
		 if(obj==''){
			msg="手机号不能为空！";
			 update_html(id,"0",msg);
			 return false;
		}else if(!reg.test(obj)){
			  msg = "手机格式不正确！"
			 return update_html(id,"0",msg);
		 }else{
			$.post(weburl+"/index.php?m=register&c=regmoblie",{moblie:obj},function(data){
				if(data==0){	
					msg='填写正确！';
					update_html(id,"1",msg);
					return true;
				}else{
					if(data == 2) {
						msg = "该手机号已被禁止使用！";
						update_html(id, "0", msg);
					} else {
						if(document.getElementById('written_off').style.display!='none'){
							return;
						}
						var data = eval('(' + data + ')');
						var msglayer = layer.open({
							type: 1,
							title: '手机号已被占用',
							closeBtn: 1,
							border: [10, 0.3, '#000', true],
							area: ['550px', 'auto'],
							content: $("#written_off"),
							cancel: function() {
								window.location.reload();
							}
						});
						$("#moblie").val("");
						$("#zy_uid").val(data.uid);
						$("#zy_mobile").val(obj);
						if(data.usertype == '1') {
							$("#zy_type").html("该手机号已被注册为个人账号");
							if(data.name){
								$("#zy_name").html("个人名称：<span class=reg_have_tip_tit_name>" + data.name.substr(0, 1) + "**</span>");
							}
						} else if(data.usertype == '2') {
							$("#zy_type").html("该手机号已被注册为企业账号");
							if(data.name){
								$("#zy_name").html("企业名称：<span class=reg_have_tip_tit_name>" + data.name + "</span>");
							}

						} else if(data.usertype == '3') {
							$("#zy_type").html("该手机号已被注册为猎头账号");
							if(data.name){
								$("#zy_name").html("猎头姓名：<span class=reg_have_tip_tit_name>" + data.name.substr(0, 1) + "**</span>");
							}

						} else if(data.usertype == '4') {
							$("#zy_type").html("该手机号已被注册为培训账号");
							if(data.name){
								$("#zy_name").html("机构名称：<span class=reg_have_tip_tit_name>" + data.name + "</span>");
							}
						}

					}

				}
			});	
		 }
	}
	if(id=="email1"){
		
         var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
         if(obj==""){
			 msg='邮箱不能为空！';
			 update_html(id,"0",msg);
			 return false;
		 }else if(!myreg.test(obj)){
			 msg = "邮箱格式不正确！"
			 return update_html(id,"0",msg);
         }else{
			$.post(weburl+"/index.php?m=register&c=regemail",{email:obj},function(data){
				if(data==0){
					$("#def"+id).hide();
					msg="输入成功！";
					update_html(id,"1",msg);
				}else{
					if(document.getElementById('written_off').style.display!='none'){
						return;
					}
					var data = eval('(' + data + ')');
					var msglayer = layer.open({
						type: 1,
						title: '邮箱已被占用',
						closeBtn: 1,
						border: [10, 0.3, '#000', true],
						area: ['550px', 'auto'],
						content: $("#written_off"),
						cancel: function() {
							window.location.reload();
						}
					});

					$("#email").val("");
					$("#zy_uid").val(data.uid);
					$("#zy_email").val(obj);
					
					$("#desc_toast").html("2. 解除邮箱与该账号的绑定，解除绑定后，您无法继续用该邮箱登录");


					if(data.usertype == '1') {
						$("#zy_type").html("该邮箱已被注册为个人账号");
						if(data.name){
							$("#zy_name").html("个人名称：<span class=reg_have_tip_tit_name>" + data.name.substr(0, 1) + "**</span>");
						}

					} else if(data.usertype == '2') {
						$("#zy_type").html("该邮箱已被注册为企业账号");
						if(data.name){
							$("#zy_name").html("企业名称：<span class=reg_have_tip_tit_name>" + data.name + "</span>");
						}

					} else if(data.usertype == '3') {
						$("#zy_type").html("该邮箱已被注册为猎头账号");
						if(data.name){
							$("#zy_name").html("猎头姓名：<span class=reg_have_tip_tit_name>" + data.name.substr(0, 1) + "**</span>");
						}

					} else if(data.usertype == '4') {
						$("#zy_type").html("该邮箱已被注册为培训账号");
						if(data.name){
							$("#zy_name").html("机构名称：<span class=reg_have_tip_tit_name>" + data.name + "</span>");
						}
					}

					
				}
			});
		 }
	}
	if(id=="CheckCode"){
		if(obj==""){
			msg="请输入验证码！";
			 update_html(id,"0",msg);
		 }else{
			msg="输入成功！";
			update_html(id,"1",msg);
		 }
	}

	if(id == "moblie_code"){
		if(obj==""){
			msg="请输入短信验证码！";
			update_html(id,"0",msg);
		 }else{
			msg="输入成功！";
			update_html(id,"1",msg);
		 }
	}

	if(id=="realname"){	
		var rname = /^[\u4e00-\u9fa5]+(·[\u4e00-\u9fa5]+)*$/;
		if(obj==""){			
			msg='真实姓名不能为空！';
			update_html(id,"0",msg); 
			return false;
		}else if(obj.length<2){
			msg = "真实姓名应该多于1个字符！";
			return update_html(id,"0",msg);
		}else if(!rname.test(obj)){
			msg = "真实姓名格式不规范！"
			return update_html(id,"0",msg);
		}else{	
			$.post(weburl+"/index.php?m=register&c=ajaxreg",{realname:obj},function(data){
				if(data==0){	
					msg = "可以使用！";
					return update_html(id,"1",msg);
				}else{
					msg = "请输入真实姓名！";
					return update_html(id,"0",msg);
				}
			});	
		}
	}
}
function update_html(id,type,msg){
	if(type=="1"){  
		$("#ajax_"+id).html('<i class="reg_tips_icon"></i>'+msg); 
		$("#ajax_"+id).attr('class','reg_tips reg_tips_blue false');  
	}else{  
		$("#ajax_"+id).html('<i class="reg_tips_icon"></i>'+msg); 
		$("#ajax_"+id).attr('class','reg_tips reg_tips_red false');  
	} 
	$("#ajax_"+id).show();
	$("#"+id).attr('date',type);
}
function checkform(url,okurl,img){
	var username=$.trim($("#username").val());
	var realname=$.trim($("#realname").val());
	var passconfirm=$.trim($("#passconfirm").val());
	var password=$.trim($("#password").val());
	var email1=$.trim($("#email1").val());
	var moblie=$.trim($("#moblie").val());
	var authcode=$.trim($("#CheckCode").val());	
	var geetest_challenge;
	var geetest_validate;
	var geetest_seccode;

	var moblie_code;

	reg_checkAjax("username");
	reg_checkAjax("password");
	reg_checkAjax("passconfirm");
	reg_checkAjax("moblie");
	reg_checkAjax("email1");
	
 	
	if(exitsid("CheckCode")){
		reg_checkAjax("CheckCode");
	}

	if(exitsid("moblie_code")){
		reg_checkAjax("moblie_code");
	}

	if(exitsid("realname")){
		reg_checkAjax("realname");
	}

	if($("#username").attr('date')!="1"||$("#password").attr('date')!="1"||$("#passconfirm").attr('date')!="1"||$("#email1").attr('date')!="1"||$("#moblie").attr('date')!="1"|| (exitsid("realname") && $("#realname").attr('date')!="1")){
		return false; 		
	}else{
		var codesear=new RegExp('注册会员');
		if(codesear.test(code_web)){
			if(code_kind==1){
				reg_checkAjax("CheckCode");
				if($("#CheckCode").attr('date')!="1"){
					return false;
				}
			}else if(code_kind==3){
				geetest_challenge = $('input[name="geetest_challenge"]').val();
				geetest_validate = $('input[name="geetest_validate"]').val();
				geetest_seccode = $('input[name="geetest_seccode"]').val();
				if(geetest_challenge =='' || geetest_validate=='' || geetest_seccode==''){
					$("#popup-submit").trigger("click");
					layer.msg('请点击按钮进行验证！', 2, 8);return false;
					return false;
				}
			}
		}
		if($("#xieyi").attr("checked")!='checked'){
			layer.msg('您必须同意注册协议才能成为本站会员！', 2, 8);return false;  
		}else{
			if(exitsid("moblie_code")){
				reg_checkAjax("moblie_code");
				moblie_code = $.trim($("#moblie_code").val());
			}

			var loadi = layer.load('正在注册……',0);
			$.post(url,{
				username:username,
				realname:realname,
				password:password,
				passconfirm:passconfirm,
				email:email1,
				moblie:moblie,
				moblie_code:moblie_code,
				authcode:authcode,
				geetest_challenge:geetest_challenge,
				geetest_validate:geetest_validate,
				geetest_seccode:geetest_seccode
			},function(data){ 
				layer.close(loadi);
				var data=eval('('+data+')');
				var status=data.status;
				var msg=data.msg;
				if(status==1){
					window.location.href=weburl+"/member/index.php";
				}else if(status==0){
					window.location.href =okurl;
				}else if(status==8){
					
					if(codesear.test(code_web)){
						if(code_kind==1){
							checkCode(img);
						}else if(code_kind==3){
							$("#popup-submit").trigger("click");
						}
					}
					layer.msg(msg, 2, 8);
				}
			});
		}
	}
}
function checklogin(url,img){
	var username=$("#username").val();
	var password=$("#password").val();
	var authcode=$("#txt_CheckCode").val();
	var cookie=$("#cookie").val();
	var geetest_challenge;
	var geetest_validate;
	var geetest_seccode;
	if(username==""){ 
		layer.msg('用户名不能为空！', 2, 8);return false;  
	}
	if(password==''){
		layer.msg('密码不能为空！', 2, 8);return false;
	}
	var codesear=new RegExp('前台登录');
	if(codesear.test(code_web)){
		if(code_kind==1){
			if(authcode==""){
				layer.msg('验证码不能为空！', 2,8);return false; 
			}
		}else if(code_kind==3){
			geetest_challenge = $('input[name="geetest_challenge"]').val();
			geetest_validate = $('input[name="geetest_validate"]').val();
			geetest_seccode = $('input[name="geetest_seccode"]').val();
			if(geetest_challenge =='' || geetest_validate=='' || geetest_seccode==''){
				$("#popup-submit").trigger("click");
				layer.msg('请点击按钮进行验证！', 2, 8);return false;
			}
		}
	}
	$.post(url,{
			username:username,
			password:password,
			authcode:authcode,
			geetest_challenge:geetest_challenge,
			geetest_validate:geetest_validate,
			geetest_seccode:geetest_seccode},function(data){
		if(data==1){
			window.location.href=weburl+"/member/index.php"
		}else if(data==2){
			window.location.href=weburl+"/index.php?m=register&c=ok&type=2";
		}else if(data==3){
			window.location.href=weburl+"/index.php?m=register&c=ok&type=3";
		}else if(data==5){
			window.location.href=weburl+"/index.php?m=register&c=ok&type=5";
		}else{
			if(codesear.test(code_web)){
				if(code_kind==1){
					checkCode(img);
				}else if(code_kind==3){
					$("#popup-submit").trigger("click");
				}
			}
			layer.msg(data, 2, 8);
		}
	})
}


function get_def_email(email,type){
		$("#ajax_email"+type).hide();
		var postemail=email.split("@");
		var configemail = $('#defEmail').val();
		var def_email=configemail.split("|");
		var emails=[];
		if($.trim(postemail[1])!=""){
			$.each(def_email,function(index,data){ 
				if(data.indexOf(postemail[1])>-1){
					emails.push(data);
				};
			});
		}else{
			emails=def_email;
		}
		var html='';
		$.each(emails,function(index,data){ 
			if(index==0){
				$class=" reg_email_box_list_hover";
			}else{
				$class="";
			}
			html+='<div class="reg_email_box_list'+$class+' email'+index+'" aid="'+type+'" onclick="click_email('+index+','+type+');" onmousemove="hover_email('+index+');"><span class="eg_email_box_list_left">'+postemail[0]+'</span>'+data+'</div>';
		})
		$(".reg_email_box").html(html);
		$(".reg_email_box").show();
		$("#def").val(email);
		$("#default").val(0);
		$("#allnum").val(emails.length);
}
function hover_email(id){
	$(".reg_email_box_list_hover").removeClass("reg_email_box_list_hover");
	$(".email"+id).addClass("reg_email_box_list_hover");
	$("#default").val(id);
}
function click_email(id,type){
	var email=$(".email"+id).html();
	email=email.replace('<span class="eg_email_box_list_left">','');
	email=email.replace('</span>','');
	email=email.replace('<SPAN class=eg_email_box_list_left>','');
	email=email.replace('</SPAN>','');
	var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	if(myreg.test(email)){
		$("#email"+type).val(email);
	}else{
		$("#email"+type).val('');
	}
	$("#email"+type).val(email);
	$(".reg_email_box").hide();
}
function keyDown(event) {
	var aevt=event;
	var evt = (aevt) ? aevt : ((window.event) ? window.event : ""); 
	var key = evt.keyCode?evt.keyCode:evt.which; 
    if (key==38){
		var def=$("#default").val();
		if(def>0){
			var num=parseInt(def)-1;
			$("#default").val(num);
			$(".reg_email_box_list_hover").removeClass("reg_email_box_list_hover");
			$(".email"+num).addClass("reg_email_box_list_hover");
		}
	}
    if (key==40){
		var def=$("#default").val();
		var num=parseInt(def)+1;
		var allnum=$("#allnum").val();
		if(num<allnum){
			$("#default").val(num);
			$(".reg_email_box_list_hover").removeClass("reg_email_box_list_hover");
			$(".email"+num).addClass("reg_email_box_list_hover");
		}
	}
    if (key==13){
		var type=$(".reg_email_box_list_hover").attr("aid");
		var email=$(".reg_email_box_list_hover").html();
		if(email){
			email=email.replace('<span class="eg_email_box_list_left">','');
			email=email.replace('</span>','');
			email=email.replace('<SPAN class=eg_email_box_list_left>','');
			email=email.replace('</SPAN>','');
			$("#event").val('13');
			var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
			if(myreg.test(email)){
				$("#email"+type).val(email);
			}else{
				$("#email"+type).val('');
			}
			$(".reg_email_box").hide();
			setTimeout(function (){ $("#event").val('1');},1000);
		}
	}
}
$(function(){
	$('body').click(function(evt){
		if($(evt.target).parents("#defemail1").length==0 && evt.target.id != "defemail1") {
			$('#defemail1').hide();
		}
	});
	$("#email1").blur(function(){
         setTimeout("reg_checkAjax('email1')",300);
     });
})
document.onkeydown = keyDown;



function sendtime(i){
	i--;
	if(i==-1){
		$("#time").html("重新获取");
		$("#send").val(0)
	}else{
		$("#send").val(1)
		$("#time").html(i+"秒");
		setTimeout("sendtime("+i+");",1000);
	}
}

function sendmsg(img){
	reg_checkAjax("moblie");

	var moblie = $("#moblie").val();
	
	var send=$("#send").val();

	var geetest_challenge='';
	var geetest_validate='';
	var geetest_seccode = '';
	var code = '';
	
	if(!moblie){
		layer.msg('手机不能为空！', 2, 8);return false;
	} 

	var showCodeCheck = code_web.indexOf('注册会员');

	if(code_kind==1 && showCodeCheck >= 0){
		if($("#CheckCode").length>0){
			code=$.trim($("#CheckCode").val());  
			if(!code){
				layer.msg('图片验证码不能为空！', 2, 8);return false;
			}	
	    } 
	}else if(code_kind==3 && showCodeCheck >= 0){
		geetest_challenge = $('input[name="geetest_challenge"]').val();
		geetest_validate = $('input[name="geetest_validate"]').val();
		geetest_seccode = $('input[name="geetest_seccode"]').val();
		if(geetest_challenge =='' || geetest_validate=='' || geetest_seccode==''){

			$("#popup-submit").trigger("click");
			layer.msg('请点击按钮进行验证！', 2, 8);return false;
			return false;
		}
	}
	if(send>0){ 
		layer.msg('请不要频繁重复发送！', 2, 8);return false;  
	}

	date = 1;
	if(date==1 && send==0){
		layer.load('执行中，请稍候...',0);
		$.post(weburl+"/index.php?m=ajax&c=regcode",{
			moblie:moblie,
				code:code,
				geetest_challenge:geetest_challenge,
				geetest_validate:geetest_validate,
				geetest_seccode:geetest_seccode
				},function(data){ 
			layer.closeAll();
			if(data==0){
				layer.msg('手机不能为空！', 2, 8,function(){
					if(code_kind==1){
						checkCode(img);
					}else if(code_kind==3){
						$("#popup-submit").trigger("click");
					}
				});return false; 
			}else if(data==1){
				layer.msg('同一手机号一天发送次数已超！', 2, 8,function(){
					if(code_kind==1){
						checkCode(img);
					}else if(code_kind==3){
						$("#popup-submit").trigger("click");
					}
				});
			}else if(data==2){
				layer.msg('同一IP一天发送次数已超！', 2, 8,function(){
					if(code_kind==1){
						checkCode(img);
					}else if(code_kind==3){
						$("#popup-submit").trigger("click");
					}
				});
			}else if(data==3){
				layer.msg('短信还没有配置，请联系管理员！', 2, 8,function(){
					if(code_kind==1){
						checkCode(img);
					}else if(code_kind==3){
						$("#popup-submit").trigger("click");
					}
				});return false; 
			}else if(data==4){
				layer.msg('请不要频繁重复发送！', 2, 8,function(){
					if(code_kind==1){
						checkCode(img);
					}else if(code_kind==3){
						$("#popup-submit").trigger("click");
					}
				});return false; 
			}else if(data==5){
				layer.msg('图片验证码错误！', 2, 8,function(){checkCode(img);});return false; 
			}else if(data==6){
				layer.msg('请点击按钮进行验证！', 2, 8,function(){
					if(code_kind==1){
						checkCode(img);
					}else if(code_kind==3){
						$("#popup-submit").trigger("click");
					}
				
				});return false; 
			}else if(data=="发送成功!"){
				sendtime("121"); 
			}else{
				layer.msg(data, 2, 8,function(){
					if(code_kind==1){
						checkCode(img);
					}else if(code_kind==3){
						$("#popup-submit").trigger("click");
					}
				});return false; 
			}
		})
	}
}

function CheckPW() {

	$.layer({
		type: 1,
		title: '验证身份',
		offset: [($(window).height() - 200) / 2 + 'px', ''],
		closeBtn: [0, true],
		border: [10, 0.3, '#000', true],
		area: ['350px', '220px'],
		page: {
			dom: "#postpw"
		}
	});

}

function post_pass(img) {
	var zyuid = $("#zy_uid").val();
	var mobile = $("#zy_mobile").val();
	var email = $("#zy_email").val();
	var pw = $("#pw").val();
	var code = $("#code").val();

	if(zyuid == "") {
		layer.msg('该用户不存在', 2, 8);
		return false;
	}
	if(pw == "") {
		layer.msg('请输入密码', 2, 8);
		return false;
	}
	if(code == "") {
		layer.msg('请输入验证码', 2, 8);
		return false;
	}
	$.post(weburl+"/register/index.php?m=register&c=writtenOff", {
		zyuid: zyuid,
		mobile: mobile,
		email: email,
		pw: pw,
		code: code
	},function(data) {

		if(data == 3) {
			layer.msg('验证码错误！', 2, 8);
			checkCode(img);
			return false;
		} else if(data == 2) {
			layer.msg('密码错误！', 2, 8);
			return false;
		} else if(data == 1){
			layer.closeAll();

			layer.msg('解绑成功！', 2, 9, function() {
				window.location.reload();
			});

		}
	})
}

function CloseToast() {
	layer.closeAll();
}