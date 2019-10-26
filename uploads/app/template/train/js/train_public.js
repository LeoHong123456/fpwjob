function collect_subject(id,url){
	$.post(url,{id:id},function(data){
		if(data=="-3"){
			showlogin(1);
		}else if(data=="-1"){
			layer.msg('只有个人用户和hr才可以收藏！',2,8);
		}else if(data=="-2"){
			layer.msg('没有该课程！',2,8);
		}else if(data=="0"){
			layer.msg('您已经收藏过该课程！',2,8);
		}else{
			layer.msg('收藏成功！',2,9,function(){
				location.reload();
			}); 
		}
	})
}
function baoming(){
	$.layer({
		type : 1,
		title :'在线报名',
		offset: [($(window).height() - 400)/2 + 'px', ''],
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['400px','auto'],
		page : {dom :"#baoming"}
	});
}
function check_baoming(){
	var name=$("#name").val();
	var phone=$("#bmphone").val();
	var content=$("#bmcontent").val();
	if(name==""){
		layer.msg('姓名不能为空！', 2, 8);return false;
	}
  var phoneset=isjsMobile(phone);
	if(phone==""){
		layer.msg('电话不能为空！', 2, 8);return false;
	}else if(phoneset==false&&isjsTell(phone)==false){
    layer.msg('电话格式错误！', 2, 8);return false;
  }
	if(content==""){
		layer.msg('留言不能为空！', 2, 8);return false;
	}
}
function check_con(){
	var content=$("#content").val();
	if(content=="我想参加这个培训班，请尽快跟我联系。"){
		$("#content").val('');
	}
}
function over_con(){
	var content=$("#content").val();
	if(content==""){
		$("#content").val('我想参加这个培训班，请尽快跟我联系。');
	}
}
function zixun(uid,id){
	$("input[name=sid]").val(id);
	$("input[name=s_uid]").val(uid);
	$.layer({
		type : 1,
		title :'咨询',
		offset: [($(window).height() - 300)/2 + 'px', ''],
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['400px','auto'],
		page : {dom :"#zixun"}
	});
}
function check_zixun(){
		
	var phone=$("#phone").val();
	var content=$("#content").val();	
	if($.trim(phone)==""){
		layer.msg('电话不能为空！', 2, 8);return false;
	}	
	var reg_phone= (/^[1][3456789]\d{9}$|^([0-9]{3,4})[-]?[0-9]{7,8}$/); 
	if(!reg_phone.test(phone)){
		layer.msg('请正确填写联系电话', 2, 8);return false; 
	}  
	if($.trim(content)==""){
		layer.msg('内容不能为空！', 2, 8);return false;
	}
}
//关注培训讲师
function pxatn(id,url,tid){
	if(id){
		$.post(url,{id:id,tid:tid},function(data){
			if(data==1){
				$("#atn_"+id).removeClass('zg-btn-unfollow');
				$("#atn_"+id).addClass('zg-btn-green'); 
				if($("#atn_"+id).attr('tagName')=='input'){
					$("#atn_"+id).val("取消关注"); 
				}else{
					$("#atn_"+id).html("取消关注");
				}
				$("#guanzhu"+id).val('取消关注');
				var antnum=$("#antnum"+id).html();
				$("#antnum" + id).html(parseInt(antnum) + 1);//关注数加1
				$("#atn_" + id).addClass('company_att');
			}else if(data==2){
				$("#atn_"+id).removeClass('zg-btn-green');
				$("#atn_"+id).addClass('zg-btn-unfollow attentioned'); 
				if($("#atn_"+id).attr('tagName')=='input'){
					$("#atn_"+id).val("关注"); 
				}else{
					$("#atn_"+id).html("关注");
				}
				$("#guanzhu"+id).val('+关注');
				var antnum=$("#antnum"+id).html();
				$("#antnum" + id).html(parseInt(antnum) - 1);//关注数减1
				$("#atn_" + id).removeClass('company_att');
			}else if(data==3){
				showlogin(1);
			}else if(data==4){
				layer.msg('只有个人用户和hr才能关注', 2,8);return false;
			}
		});
	}
}

function teacheratn(uid,url){
	if(uid){
		$.post(url,{uid:uid},function(data){
			if(data==1){
				$("#atn_"+uid).removeClass('zg-btn-unfollow');
				$("#atn_"+uid).addClass('zg-btn-green'); 
				if($("#atn_"+uid).attr('tagName')=='input'){
					$("#atn_"+uid).val("取消关注"); 
				}else{
					$("#atn_"+uid).html("取消关注");
					$("#atn_"+uid).attr("class",'Agency_Int_Consultings');
				}
				$("#guanzhu"+uid).val('取消关注');
				var antnum=$("#antnum"+uid).html();
				$("#antnum" + uid).html(parseInt(antnum) + 1);//关注数加1
				$("#atn_" + uid).addClass('company_att');
			}else if(data==2){
				$("#atn_"+uid).removeClass('zg-btn-green');
				$("#atn_"+uid).addClass('zg-btn-unfollow attentioned'); 
				if($("#atn_"+uid).attr('tagName')=='input'){
					$("#atn_"+uid).val("关注"); 
				}else{
					$("#atn_"+uid).html("关注");
					$("#atn_"+uid).attr("class",'Agency_Int_Consultings');
				}
				$("#guanzhu"+uid).val('+关注');
				var antnum=$("#antnum"+uid).html();
				$("#antnum" + uid).html(parseInt(antnum) - 1);//关注数减1
				$("#atn_" + uid).removeClass('company_att');
			}else if(data==3){
				showlogin(1);
			}else if(data==4){
				layer.msg('只有个人用户和hr才能关注', 2,8);return false;
			}
		});
	}
}
function checkzx(){
	if($("input[name='uid']").val()==''){
		showlogin('1');return false;
	}
	if($("input[name='phone']").val()==''){
		layer.msg('请填写联系电话', 2,8);return false;
	}
	if($("input[name='content']").val()==''){
		layer.msg('请填写资讯内容', 2,8);return false;
	}
}