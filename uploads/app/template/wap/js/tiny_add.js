mui.init();
var viewApi = mui('#app').view({
	defaultPage: '#main'
});

var view = viewApi.view;
(function($) {

	mui('.mui-scroll-wrapper').scroll({
		scrollY: true, 
		scrollX: false, 
		startX: 0, 
		startY: 0, 
		indicators: true,
		deceleration: 0.0006, 
		
	});
	
	var oldBack = $.back;
	$.back = function() {
		if(viewApi.canBack()) { 
			viewApi.back();
		} else { 
			oldBack();
		}
	};
})(mui);
view.addEventListener('pageBeforeBack', function(e) {
	var production = document.getElementById('production');
	if(production.value != '') {
		document.getElementById('production').value = production.value;
		document.getElementById('productionshow').innerText = production.value;
	}
	
});
(function($, doc) {
	$.init();
	$.ready(function() {
		var sexPicker = new $.PopPicker();
		sexPicker.setData(sexData);
		var sexPickerButton = doc.getElementById('sexPicker');
		var sex = doc.getElementById('sex');
		sexPickerButton.addEventListener('tap', function(event) {
			document.activeElement.blur();
			sexPicker.show(function(items) {
				sex.value = items[0].value;
				sexPickerButton.innerText = items[0].text;
			});
		}, false);
		var expPicker = new $.PopPicker();
		expPicker.setData(expData);
		var expPickerButton = doc.getElementById('expPicker');
		var exp = doc.getElementById('exp');
		expPickerButton.addEventListener('tap', function(event) {
			document.activeElement.blur();
			expPicker.show(function(items) {
				exp.value = items[0].value;
				expPickerButton.innerText = items[0].text;
			});
		}, false);
	});
})(mui, document);

(function() {
	var submitBtn = document.getElementById('submit')
	submitBtn.addEventListener('tap', function(event) {
		var name = $.trim(document.getElementById('username').value),
			id = $.trim(document.getElementById('id').value),
			sex = $.trim(document.getElementById('sex').value),
			exp = $.trim(document.getElementById('exp').value),
			job = $.trim(document.getElementById('job').value),
			production = $.trim(document.getElementById('production').value),
			mobile = $.trim(document.getElementById('mobile').value),
			password = $.trim(document.getElementById('password').value),
			checkcode,
			geetest_challenge,
			geetest_validate,
			geetest_seccode;
		if(name == '') {
			return mui.toast('请填写姓名！');
		}
		if(sex == '') {
			return mui.toast('请选择性别！');
		}
		if(exp == '') {
			return mui.toast('请选择工作年限！');
		}
		if(production == '') {
			return mui.toast('请介绍自己！');
		}
		if(job == '') {
			return mui.toast('请填写工作！');
		}
		if(mobile == '') {
			return mui.toast('请填写手机！');
		}
		if(isjsMobile(mobile) == false) {
			return mui.toast('请注意手机号格式！');
		}
		if(password == '') {
			return mui.toast('请填写密码！');
		}
		if(code_web.indexOf("店铺招聘") >= 0) {
			if(code_kind == 1) {
				var checkcode = $("#checkcode").val();
				if(checkcode == '') {
					return mui.toast('请填写验证码！');
				}
			} else if(code_kind == 3) {
				geetest_challenge = $('input[name="geetest_challenge"]').val();
				geetest_validate = $('input[name="geetest_validate"]').val();
				geetest_seccode = $('input[name="geetest_seccode"]').val();

				if(geetest_challenge == '' || geetest_validate == '' || geetest_seccode == '') {
					$("#popup-submit").trigger("click");
					return mui.toast('请点击按钮进行验证！');
				}
			}
		}

		mui.post(wapurl + "/index.php?c=tiny&a=add", {
			id: id,
			name: name,
			sex: sex,
			exp: exp,
			job: job,
			production: production,
			mobile: mobile,
			password: password,
			checkcode: checkcode,
			geetest_challenge: geetest_challenge,
			geetest_validate: geetest_validate,
			geetest_seccode: geetest_seccode,
			submit: 'submit'
		}, function(data) {
			if(data.url) {
				layermsg(data.msg, 2, function() {
					location.href = data.url;
				});
			} else {
				checkCode('vcode_img');
				layermsg(data.msg, 2);
				return false;
			}

		}, 'json');
	}, false)
	
	mui('.mui-popover').on('tap', 'li', function(e) {
		document.getElementById("name").value = document.getElementById("name").value + this.children[0].innerHTML;
		mui('.mui-popover').popover('toggle')
	})
})();