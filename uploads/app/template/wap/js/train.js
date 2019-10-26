function collect_subject(id, url) {
	$.post(url, {
		id: id
	}, function(data) {
		if(data == "-3") {
			layermsg('您还没有登录，请先登录！');
		} else if(data == "-1") {
			layermsg('只有个人用户和hr才可以收藏！');
		} else if(data == "-2") {
			layermsg('没有该课程！');
		} else if(data == "0") {
			layermsg('您已经收藏过该课程！');
		} else {
			layermsg('收藏成功！', 2, function() {
				location.reload(true);
			});
		}
	})
}

function baoming() {
	content = $("#baoming").html();
	$("#baoming").html('');
	layer.open({
		type: 1,
		title: '在线报名',
		offset: [($(window).height() - 400) / 2 + 'px', ''],
		closeBtn: [0, true],
		border: [10, 0.3, '#000', true],
		area: ['400px', 'auto'],
		content: content,
		cancel: function() {
			$("#baoming").html(content);
		}
	});
}

function check_baoming(target_form) {
	var name = $("#name").val();
	var phone = $("#bmphone").val();
	var content = $("#bmcontent").val();
	if(name == "") {
		layermsg('姓名不能为空！');
		return false;
	}
	var phoneset = isjsMobile(phone);
	if(phone == "") {
		layermsg('电话不能为空！');
		return false;
	} else if(phoneset == false && isjsTell(phone) == false) {
		layermsg('电话格式错误！');
		return false;
	}
	if(content == "") {
		layermsg('留言不能为空！');
		return false;
	}
	post2ajax(target_form);
	return false;
}

function check_con() {
	var content = $("#content").val();
	if(content == "我想参加这个培训班，请尽快跟我联系。") {
		$("#content").val('');
	}
}

function over_con() {
	var content = $("#content").val();
	if(content == "") {
		$("#content").val('我想参加这个培训班，请尽快跟我联系。');
	}
}

function zixun(uid, id) {
	$("input[name=sid]").val(id);
	$("input[name=s_uid]").val(uid);
	content = $("#zixun").html();
	$("#zixun").html('');
	layer.open({
		type: 1,
		title: '咨询',
		offset: [($(window).height() - 300) / 2 + 'px', ''],
		closeBtn: [0, true],
		border: [10, 0.3, '#000', true],
		area: ['400px', 'auto'],
		content: content,
		cancel: function() {
			$("#zixun").html(content);
		}
	});
}

function check_zixun(target_form) {

	var phone = $("#phone").val();
	var content = $("#content").val();
	if(phone == "") {
		layermsg('电话不能为空！' + phone);
		return false;
	}
	var reg_phone = (/^[1][3456789]\d{9}$|^([0-9]{3,4})[-]?[0-9]{7,8}$/);
	if(!reg_phone.test(phone)) {
		layermsg('请正确填写联系电话');
		return false;
	}
	if(content == "") {
		layermsg('内容不能为空！');
		return false;
	}
	post2ajax(target_form);
	return false;
}
$(document).ready(function() {
	$("#ckcontent").click(function() {
		var obj = $("#contentshow").css('display');
		if(obj == 'none') {
			$("#contentshow").show();
			$("#contenthide").hide();
			$("#ckcontent").html('展开查看更多');
		} else {
			$("#contentshow").hide();
			$("#contenthide").show();
			$("#ckcontent").html('收起');
		}
	});
});

function cktrain(type) {
	var val = $("#" + type).find("option:selected").text();
	$('.' + type).html(val);
}

