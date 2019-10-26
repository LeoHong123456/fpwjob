function post_pass_fast(img) {
	var pw = $("#pw").val();
	var code = $("#code").val();
	var tid = $("#tid").val();
	var type = $("#type").val();
	if(pw == "") {
		layer.msg('请输入密码', 2, 8);
		return false;
	}
	if(code == "") {
		layer.msg('请输入验证码', 2, 8);
		return false;
	}
	$.post("index.php?m=once&c=ajax", {
		pw: pw,
		code: code,
		tid: tid,
		type: type
	}, function(data) {
		if(data == 1) {
			layer.msg('验证码错误！', 2,8,function(){checkCode(img);});return false;
			
			
		} else if(data == 2) {
			layer.msg('密码错误！', 2, 8);
			return false;
		} else if(data == 3) {
			layer.msg('刷新成功！', 2, 9, function() {
				window.location.reload();
			});
		} else if(data == 5) {
			layer.msg('对不起你已达到一天最多刷新次数！', 2, 9, function() {
				window.location.reload();
			});
		} else if(data == 4) {
			layer.msg('删除成功！', 2, 9);
			window.location.href = $("#gourl").val();
		} else {
			layer.closeAll();
			var data = eval('(' + data + ')');
			window.location.href =data.url;
			
		}
	})
}

function check_once_job() {
	var password = $("#password").val().length;
	var id = $("#id").val();
	var companyname = $("input[name=companyname]").val();
	var title = $("#title").val();
	var salary = $("#salary").val();
	var linkman = $("input[name=linkman]").val();
	var phone = $.trim($("input[name=phone]").val());
	var reg_phone = (/^\d{5,15}$|^([0-9]{3,4}\-)?[0-9]{7,8}$/);
 	var address = $("#address").val();
	var edate = $("#edate").val();
	
	if($.trim(title) == "") {
		layer.msg('请填写招聘岗位', 2, 8);
		return false;
	}
	if($.trim(salary) == "") {
		layer.msg('请填写工资待遇', 2, 8);
		return false;
	}
	if($.trim(edate) == "") {
		layer.msg('请填写有效期！', 2, 8);
		return false;
	}
	if($.trim($("#require").val()) == "" || $.trim($("#require").val()) == '请填写招聘的具体要求，如：性别，学历，年龄，工作经验，工资待遇等相关信息') {
		layer.msg('请填写招聘要求', 2, 8);
		return false;
	}

	if($.trim(companyname) == "") {
		layer.msg('请填写店面名称', 2, 8);
		return false;
	}
	if($.trim(linkman) == "") {
		layer.msg('请填写联系人', 2, 8);
		return false;
	}
	if(!phone) {
		layer.msg('请填写联系电话！', 2, 8);
		return false;
	}
	if(phone) {
		if(!reg_phone.test(phone)) {
			layer.msg('请正确填写联系电话', 2, 8);
			return false;
		}
	}
	
	if(address == '') {
		layer.msg('请填写店铺地址', 2, 8);
		return false;
	}
	
	if(password < "4") {
		layer.msg('密码不能少于4位', 2, 8);
		return false;
	}
	var codesear = new RegExp('店铺招聘');
	if(codesear.test(code_web)) {
		if(code_kind == 1) {
			var authcode = $("#authcode").val();
			if(!authcode) {
				layer.msg('请输入验证码', 2, 8);
				return false;
			}
		} else if(code_kind == 3) {
			var geetest_challenge = $('input[name="geetest_challenge"]').val();
			var geetest_validate = $('input[name="geetest_validate"]').val();
			var geetest_seccode = $('input[name="geetest_seccode"]').val();
			if(geetest_challenge == '' || geetest_validate == '' || geetest_seccode == '') {
				$("#popup-submit").trigger("click");
				layer.msg('请点击按钮进行验证！', 2, 8);
				return false;
			}
		}
	}
	return true;
}

function check_once_keyword() {
	if($("#Fastkeyword").val() == "" || $("#Fastkeyword").val() == "请输入搜索内容") {
		layer.msg('请输入搜索内容！', 2, 8);
		return false;
	}
}

function formatDate(d) {
	var now = new Date(parseInt(d) * 1000);
	var year = now.getFullYear();
	var month = now.getMonth() + 1;
	var date = now.getDate();
	var hour = now.getHours();
	var minute = now.getMinutes();
	var second = now.getSeconds();
	return year + "-" + month + "-" + date;
}

function showdd(type, id, img) {
	$("#tid").val(id);
	$("#type").val(type);
	$("#pw").val('');
	$("#code").val('');
	checkCode(img);
	$.layer({
		type: 1,
		title: '验证密码',
		offset: [($(window).height() - 200) / 2 + 'px', ''],
		closeBtn: [0, true],
		border: [10, 0.3, '#000', true],
		area: ['350px', '220px'],
		page: {
			dom: "#postpw"
		}
	});
}

function showOrder(num) {

	var i = layer.confirm('您还有' + num + '个订单未付款，是否继续发布！', {
			btn: ['继续发布', '去付款']
		},
		function() {
			layer.close(i);
			
			window.location.href =weburl+'/once/index.php?c=add';
			
		},
		function() {
			layer.close(i);
			showFastOrder();
		}
	);
}

function showFastOrder() {
	$.layer({
		type: 1,
		title: '代付款店铺',
		offset: [($(window).height() - 535) / 2 + 'px', ''],
		closeBtn: [0, true],
		border: [10, 0.3, '#000', true],
		area: ['590px', '320px'],
		zIndex: 99999,
		page: {
			dom: "#fast_order_log"
		}
	});
}

function fast_pay(id) {
	$('#onceid').val(id);
	$.layer({
		type: 1,
		move: false,
		fix: true,
		zIndex: 666,
		title: '店铺招聘收费',
		border: [10, 0.3, '#000', true],
		area: ['480px', '330px'],
		page: {
			dom: '#fastjob'
		},
		close: function() {
			window.location.href = "";
		}
	});
}

function check_resume_tiny() {
	var password = $("#password").val().length;
	var id = $("#id").val();
	var username = $("#username").val();
	if($.trim(username) == "") {
		layer.msg('请填写姓名', 2, 8);
		return false;
	}
	if($("#sex").val() == '') {
		layer.msg('请选择性别！', 2, 8);
		return false;
	}
	var mobile = $.trim($("input[name=mobile]").val());
	if(!mobile) {
		layer.msg('请填写手机号码', 2, 8);
		return false;
	} else {
		var reg = /^\d{5,15}$/;
		if(!reg.test(mobile)) {
			layer.msg('手机号码格式错误！', 2, 8);
			return false;
		}
	}
	var exp = $.trim($("#expid").val());
	if($.trim(exp) == "") {
		layer.msg('请选择工作年限！', 2, 8);
		return false;
	}
	var job = $("input[name=job]").val();
	if($.trim(job) == "") {
		layer.msg('请填写想找什么工作！', 2, 8);
		return false;
	}
	if(id == "") {
		if(password < "4") {
			layer.msg('请正确输入密码！', 2, 8);
			return false;
		}
	}
	var codesear = new RegExp('店铺招聘');
	if(codesear.test(code_web)) {
		if(code_kind == 1) {
			var authcode = $("#authcode").val();
			if(!authcode) {
				layer.msg('请输入验证码', 2, 8);
				return false;
			}
		} else if(code_kind == 3) {
			var geetest_challenge = $('input[name="geetest_challenge"]').val();
			var geetest_validate = $('input[name="geetest_validate"]').val();
			var geetest_seccode = $('input[name="geetest_seccode"]').val();

			if(geetest_challenge == '' || geetest_validate == '' || geetest_seccode == '') {
				$("#popup-submit").trigger("click");
				layer.msg('请点击按钮进行验证！', 2, 8);
				return false;
			}
		}
	}
}

function post_pass_tiny(url, img) {
	var pw = $("#pw").val();
	var code = $("#code").val();
	var tid = $("#tid").val();
	var type = $("#type").val();
	if(pw == "") {
		layer.msg('请输入密码', 2, 8);
		return false;
	}
	if(code == "") {
		layer.msg('请输入验证码', 2, 8);
		return false;
	}
	layer.load('执行中，请稍候...', 0);
	$.post(url, {
		pw: pw,
		code: code,
		tid: tid,
		type: type
	}, function(data) {
		layer.closeAll();
		if(data == 1) {
			layer.msg('验证码错误！', 2, 8);
			checkCode(img);
			return false;
		} else if(data == 2) {
			layer.msg('密码错误！', 2, 8);
			checkCode(img);
			return false;
		} else if(data == 3) {
			layer.msg('刷新成功！', 2, 9, function() {
				window.location.reload();
			});
		} else if(data == 4) {
			layer.msg('删除成功！', 2, 9, function() {
				window.location.href = $("#gourl").val();
			});
		} else {
			
			var data = eval('(' + data + ')');
			window.location.href =data.url;
			
		}
	})
}


function search_once_show(id) {
	if($("#" + id).hasClass('none')) {
		$("#" + id).removeClass('none');
	} else {
		$("#" + id).addClass('none');
	}
}

function select_once_city(id, type, name, gettype, ptype) {
	$("#job_" + type).addClass('none');
	$("#" + type).val(name);
	$("#" + type + "id").val(id);
	$("#" + type).val(name);
	$("#" + type + "id").val(id);
	$('#by_citysid').html('');
	if(type == 'province') {
		$("#citys").val('请选择');
		$("#three_city").val('请选择');
		$("#citysid").val('');
		$("#three_cityid").val('');
		$("#cityshowth").hide();
	}
	var url = weburl + "/index.php?m=ajax&c=ajax_once_city";
	$.post(url, {
		id: id,
		gettype: gettype,
		ptype: ptype
	}, function(data) {
		if(gettype == "citys") {
			$("#" + gettype).val("请选择城市");

			$("#three_cityid").val('');
			$("#cityshowth").hide();
		}
		if(gettype == "three_city") {

			if(data != '') {
				$("#" + gettype).val("请选择区域");
				$("#cityshowth").show();
			} else {
				$("#cityshowth").hide();
			}
		}
		$("#job_" + gettype).html(data);
	})
}

function selects_once(id, type, name) {
	$("#job_" + type).addClass('none');
	$("#" + type).val(name);
	$("#" + type + "id").val(id);
}
$(function() {
	$('body').click(function(evt) {
		if($(evt.target).parents("#job_province").length == 0 && evt.target.id != "province") {
			$("#job_province").addClass('none');
		}
		if($(evt.target).parents("#job_citys").length == 0 && evt.target.id != "citys") {
			$("#job_citys").addClass('none');
		}
		if($(evt.target).parents("#job_three_city").length == 0 && evt.target.id != "three_city") {
			$("#job_three_city").addClass('none');
		}
	})
})