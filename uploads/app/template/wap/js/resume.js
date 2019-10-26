function checkinfo() {
	var name = $.trim(document.getElementById('name').value),
		sex = $.trim(document.getElementById('sex').value),
		birthday = $.trim(document.getElementById('birthday').value),
		edu = $.trim(document.getElementById('edu').value),
		exp = $.trim(document.getElementById('exp').value),
		living = $.trim(document.getElementById('living').value),
		telphone = $.trim(document.getElementById('telphone').value),
		email = $.trim(document.getElementById('email').value),
		address = $.trim(document.getElementById('address').value),
		height = $.trim(document.getElementById('height').value),
		weight = $.trim(document.getElementById('weight').value),
		nationality = $.trim(document.getElementById('nationality').value),
		marriage = $.trim(document.getElementById('marriage').value),
		domicile = $.trim(document.getElementById('domicile').value),
		qq = $.trim(document.getElementById('qq').value),
		preview = $.trim(document.getElementById('preview').value),
		homepage = $.trim(document.getElementById('homepage').value),
		logid = $.trim(document.getElementById('logid').value);

	if(name == '') {
		return mui.toast('请输入姓名！');
	}
	if(sex == '') {
		return mui.toast('请选择性别！');
	}
	if(birthday == '') {
		return mui.toast('请选择出生年月！');
	}
	if(edu == '') {
		return mui.toast('请选择最高学历！');
	}
	if(exp == '') {
		return mui.toast('请选择工作经验！');
	}
	if(living == '') {
		return mui.toast('请输入现居住地！');
	}
	if(telphone == '') {
		return mui.toast('请输入手机！');
	}
	var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	if(email != "" && !myreg.test(email)) {
		mui.toast('邮箱格式错误！');
		return false;
	}


	formData.append('name', name);
	formData.append('sex', sex);
	formData.append('birthday', birthday);
	formData.append('edu', edu);
	formData.append('exp', exp);
	formData.append('living', living);
	formData.append('telphone', telphone);
	formData.append('email', email);
	formData.append('address', address);
	formData.append('height', height);
	formData.append('weight', weight);
	formData.append('nationality', nationality);
	formData.append('marriage', marriage);
	formData.append('domicile', domicile);
	formData.append('qq', qq);
	formData.append('preview', preview);
	formData.append('homepage', homepage);
	formData.append('logid', logid);
	formData.append('submit', 'submit');

	$.ajax({
		url: "index.php?c=info",
		type: 'post',
		data: formData,
		contentType: false,
		processData: false,
		dataType: 'json',
		success: function(res) {
			var res = JSON.stringify(res);
			var data = JSON.parse(res);
			if(data.url) {
				layermsg(data.msg, 2, function() {
					location.href = data.url;
				});
			} else {
				layermsg(data.msg, 2);
				return false;
			}
		}
	})
}

function kresume() {
	var table = $.trim(document.getElementById('table').value),
		eid = $.trim(document.getElementById('eid').value),
		id = $.trim(document.getElementById('id').value);

	if(table == 'work') {
		var name = $.trim(document.getElementById('name').value),
			title = $.trim(document.getElementById('title').value),
			sdate = $.trim(document.getElementById('sdate').value),
			edate = $.trim(document.getElementById('edate').value),
			totoday = $.trim(document.getElementById('totoday').value),
			content = $.trim(document.getElementById('content').value);
		if(name == '') {
			return mui.toast('请输入单位名称！');
		}
		if(sdate == '') {
			return mui.toast('请选择入职时间！');
		} else if(edate) {
			if(sdate > edate) {
				return mui.toast('请确认日期先后顺序！');
			}
		}
		if(edate == '' && totoday != 1) {
			return mui.toast('请选择离职时间！');
		}
		var arr = {
			name: name,
			title: title,
			sdate: sdate,
			edate: edate,
			totoday: totoday,
			table: table,
			eid: eid,
			id: id,
			content: content,
			submit: 'submit'
		}
	} else if(table == 'edu') {
		var name = $.trim(document.getElementById('name').value),
			title = $.trim(document.getElementById('title').value),
			sdate = $.trim(document.getElementById('sdate').value),
			edate = $.trim(document.getElementById('edate').value),
			education = $.trim(document.getElementById('education').value),
			specialty = $.trim(document.getElementById('specialty').value);
		if(name == '') {
			return mui.toast('请输入学校名称！');
		}
		if(sdate == '' || edate == '') {
			return mui.toast('请正确选择在校时间！');
		}
		if(sdate > edate) {
			return mui.toast('入校时间不能大于离校时间！');
		}
		var arr = {
			name: name,
			title: title,
			sdate: sdate,
			edate: edate,
			table: table,
			eid: eid,
			id: id,
			education: education,
			specialty: specialty,
			submit: 'submit'
		}
	} else if(table == 'project') {
		var name = $.trim(document.getElementById('name').value),
			title = $.trim(document.getElementById('title').value),
			sdate = $.trim(document.getElementById('sdate').value),
			edate = $.trim(document.getElementById('edate').value),
			content = $.trim(document.getElementById('content').value);
		if(name == '') {
			return mui.toast('请输入项目名称！');
		}
		if(sdate == '' || edate == '') {
			return mui.toast('请正确选择项目时间！');
		}
		if(sdate > edate) {
			return mui.toast('开始时间不能大于结束时间！');
		}
		var arr = {
			name: name,
			title: title,
			sdate: sdate,
			edate: edate,
			table: table,
			eid: eid,
			id: id,
			content: content,
			submit: 'submit'
		}
	} else if(table == 'training') {
		var name = $.trim(document.getElementById('name').value),
			title = $.trim(document.getElementById('title').value),
			sdate = $.trim(document.getElementById('sdate').value),
			edate = $.trim(document.getElementById('edate').value),
			content = $.trim(document.getElementById('content').value);
		if(name == '') {
			return mui.toast('请输入培训中心！');
		}
		if(sdate == '' || edate == '') {
			return mui.toast('请正确选择培训时间！');
		}
		if(sdate > edate) {
			return mui.toast('开始时间不能大于结束时间！');
		}
		var arr = {
			name: name,
			title: title,
			sdate: sdate,
			edate: edate,
			table: table,
			eid: eid,
			id: id,
			content: content,
			submit: 'submit'
		}
	} else if(table == 'skill') {
		var name = $.trim(document.getElementById('name').value),
			longtime = $.trim(document.getElementById('longtime').value),
			preview = $.trim(document.getElementById('preview').value);
		if(name == '') {
			return mui.toast('请输入技能名称！');
		}
		

		formData.append('name', name);
		formData.append('longtime', longtime);
		formData.append('table', table);
		formData.append('preview', preview);
		formData.append('eid', eid);
		formData.append('id', id);
		formData.append('submit', submit);
		
	} else if(table == 'show') {
		var title = $.trim(document.getElementById('title').value),
			sort = $.trim(document.getElementById('sort').value),
 			id = $.trim(document.getElementById('id').value),
		 	preview = $.trim(document.getElementById('preview').value),
			picid = $('input[name="picid"]').val();
		
		if(title == '') {
			return mui.toast('作品标题不能为空！');
		}
		if(sort == '') {
			return mui.toast('作品排序不能为空！');
		}
		if(show == '' && id == '') {
			return mui.toast('请上传作品！');
		}

		formData.append('title', title);
		formData.append('sort', sort);
		formData.append('table', table);
		formData.append('eid', eid);
		formData.append('preview', preview);
		formData.append('id', id);
		formData.append('submit', submit);
	} else if(table == 'other') {
		var name = $.trim(document.getElementById('name').value),
			content = $.trim(document.getElementById('content').value);
			
		if(name == '') {
			return mui.toast('请输入其他标题！');
		}
		if(content == '') {
			return mui.toast('请输入其他描述！');
		}
		var arr = {
			name: name,
			table: table,
			eid: eid,
			id: id,
			content: content,
			submit: 'submit'
		}
	} else if(table == 'resume') {
		var description = $.trim(document.getElementById('description').value);
		var alltag = '';
		var num = 0;
		$('.tag').each(function(w, tag) {
			if(tag.checked == true) {
				alltag = alltag + tag.dataset.name + ',';
				num++;
			}
		});
		if(num > 5) {
			return mui.toast('最多只能选择五项！');
		}
		if(description == '') {
			return mui.toast('请输入自我评价！');
		}
		var arr = {
			description: description,
			table: table,
			eid: eid,
			id: id,
			tag: alltag,
			submit: 'submit'
		}
	} else if(table == 'doc') {
		var doc = UE.getEditor('doc').getContent();
		if(doc == '') {
			return mui.toast('请输入黏贴简历内容！');
		}
		var arr = {
			doc: doc,
			table: table,
			eid: eid,
			id: id,
			submit: 'submit'
		}
	}

	if(table == "skill" || table == "show") {
		$.ajax({
			url: "index.php?c=saveresumeson",
			type: 'post',
			data: formData,
			contentType: false,
			processData: false,
			dataType: 'json',
			success: function(res) {
				var res = JSON.stringify(res);
				var data = JSON.parse(res);
				if(data.url) {
					layermsg(data.msg, 2, function() {
						location.href = data.url;
					});
				} else {
					layermsg(data.msg, 2);
					return false;
				}
			}
		})
	} else {
		mui.post('index.php?c=saveresumeson', arr, function(data) {
			if(data.url) {
				mui.openWindow({
					url: data.url,
				});
			} else {
				layermsg(data.msg);
			}
		}, 'json');
	}
}

function saveexpect() {
	var name = $.trim(document.getElementById('name').value),
		job_classid = $.trim(document.getElementById('job_classid').value),
		hy = $.trim(document.getElementById('hy').value),
		city_classid = $.trim(document.getElementById('city_classid').value),
		type = $.trim(document.getElementById('type').value),
		report = $.trim(document.getElementById('report').value),
		minsalary = $.trim(document.getElementById('minsalary').value),
		maxsalary = $.trim(document.getElementById('maxsalary').value),
		eid = $.trim(document.getElementById('eid').value),
		jobstatus = $.trim(document.getElementById('jobstatus').value);

	if(name == '') {
		return mui.toast('请填写期望岗位！');
	}
	if(job_classid == '') {
		return mui.toast('请选择工作职能！');
	}
	if(hy == '') {
		return mui.toast('请选择从事行业！');
	}
	if(city_classid == '') {
		return mui.toast('请选择期望城市！');
	}
	if(type == '') {
		return mui.toast('请选择工作性质');
	}
	if(report == '') {
		return mui.toast('请选择到岗时间！');
	}
	if(jobstatus == '' && linkphone == '') {
		return mui.toast('请选择求职状态！');
	}	
	layer_load('执行中，请稍候...');
	mui.post('index.php?c=expect', {
		name: name,
		job_classid: job_classid,
		hy: hy,
		city_classid: city_classid,
		type: type,
		report: report,
		jobstatus: jobstatus,
		minsalary: minsalary,
		maxsalary: maxsalary,
		eid: eid,
		submit: 'submit'
	}, function(data) {
		layer.closeAll();
		if(data > 0) {
			mui.openWindow({
				url: wapurl + "member/index.php?c=resume&eid=" + eid.value,
			});

		} else {
			return mui.toast('保存失败！');
		}
	}, 'json');
}

function addresume() {
	var name = $.trim(document.getElementById('name').value),
		hy = $.trim(document.getElementById('hy').value),
		job_classid = $.trim(document.getElementById('job_classid').value),
		city_classid = $.trim(document.getElementById('city_classid').value),
		minsalary = $.trim(document.getElementById('minsalary').value),
		maxsalary = $.trim(document.getElementById('maxsalary').value),
		report = $.trim(document.getElementById('report').value),
		type = $.trim(document.getElementById('type').value),
		jobstatus = $.trim(document.getElementById('jobstatus').value),
		uname = $.trim(document.getElementById('uname').value),
		sex = $.trim(document.getElementById('sex').value),
		birthday = $.trim(document.getElementById('birthday').value),
		edu = $.trim(document.getElementById('edu').value),
		exp = $.trim(document.getElementById('exp').value),
		telphone = $.trim(document.getElementById('telphone').value),
		email = $.trim(document.getElementById('email').value),
		living = $.trim(document.getElementById('living').value),
		logid = $.trim(document.getElementById('logid').value);
	if(uname == "") {
		return mui.toast('请输入真实姓名！');
	}
	if(sex == '') {
		return mui.toast('请选择性别！');
	}
	if(birthday == '') {
		return mui.toast('请选择出生年月！');
	}
	if(edu == '') {
		return mui.toast('请选择最高学历！');
	}
	if(exp == '') {
		return mui.toast('请选择工作经验！');
	}
	if(telphone == '') {
		return mui.toast('请输入手机号码！');
	} else {
		var reg = /^[1][3456789]\d{9}$/; 
		if(!reg.test(telphone)) {
			return mui.toast('手机号码格式错误！');
		}
	}
	var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	if(email != "" && !myreg.test(email)) {
		return mui.toast('邮箱格式错误！');
	}
	if(living == '') {
		return mui.toast('请输入现居住地！');
	}
	if(name == "") {
		return mui.toast('请输入期望岗位！');
	}
	if(hy == "") {
		return mui.toast('请选择从事行业！');
	}
	if(job_classid == "") {
		return mui.toast('请选择工作职能！');
	}
	if(minsalary == "") {
		return mui.toast('请输入期望薪资！');
	}
	if(parseInt(maxsalary)>0) {
		if(parseInt(maxsalary) <= parseInt(minsalary)) {
			return mui.toast('最高薪资必须大于最低薪资！');
		}

	}
	if(city_classid == "") {
		return mui.toast('请选择期望城市！');
	}
	if(type == "") {
		return mui.toast('请选择工作性质！');
	}
	if(report == "") {
		return mui.toast('请选择到岗时间！');
	}
	if(jobstatus == "") {
		return mui.toast('请选择求职状态！');
	}
	var arr = {};

	arr = {
		name: name,
		hy: hy,
		job_classid: job_classid,
		city_classid: city_classid,
		minsalary: minsalary,
		maxsalary: maxsalary,
		report: report,
		type: type,
		jobstatus: jobstatus,
		uname: uname,
		sex: sex,
		birthday: birthday,
		edu: edu,
		exp: exp,
		email: email,
		telphone: telphone,
		living: living,
		logid: logid
	};

	if($.trim(document.getElementById('resume_exp').value) == '1') {
		var workname = $.trim(document.getElementById('workname').value),
			worksdate = $.trim(document.getElementById('worksdate').value),
			workedate = $.trim(document.getElementById('workedate').value),
			worktitle = $.trim(document.getElementById('worktitle').value),
			totoday = $.trim(document.getElementById('totoday').value),
			workcontent = $.trim(document.getElementById('workcontent').value);
		if(workname == '') {
			return mui.toast('请填写公司名称！');
		}
		if(worktitle == '') {
			return mui.toast('请填写担任职务！');
		}
		if(worksdate == '') {
			return mui.toast('请选择入职时间！');

		}
		arr.workname = workname;
		arr.worksdate = worksdate;
		arr.workedate = workedate;
		arr.worktitle = worktitle;
		arr.totoday = totoday;
		arr.workcontent = workcontent;
	}
	if($.trim(document.getElementById('resume_edu').value) == '1') {
		var eduname = $.trim(document.getElementById('eduname').value),
			edusdate = $.trim(document.getElementById('edusdate').value),
			eduedate = $.trim(document.getElementById('eduedate').value),
			education = $.trim(document.getElementById('education').value),
			eduspec = $.trim(document.getElementById('eduspec').value);
		if(eduname == '') {
			return mui.toast('请填写学校名称！');
		}
		if(edusdate == '') {
			return mui.toast('请选择入学时间！');
		}
		if(eduedate == '') {
			return mui.toast('请选择离校或预计离校时间！');
		}
		if(eduspec == '') {
			return mui.toast('请填写所学专业！');
		}
		if(education == '') {
			return mui.toast('请选择毕业学历！');
		}
		arr.eduname = eduname;
		arr.edusdate = edusdate;
		arr.eduedate = eduedate;
		arr.eduspec = eduspec;
		arr.education = education;
	}
	if($.trim(document.getElementById('resume_pro').value) == '1') {
		var proname = $.trim(document.getElementById('proname').value),
			prosdate = $.trim(document.getElementById('prosdate').value),
			proedate = $.trim(document.getElementById('proedate').value),
			protitle = $.trim(document.getElementById('protitle').value),
			procontent = $.trim(document.getElementById('procontent').value);
		if(proname == '') {
			return mui.toast('请填写项目名称！');
		}
		if(protitle == '') {
			return mui.toast('请填写项目担任职务！');
		}
		if(prosdate == '') {
			return mui.toast('请选择项目开始时间！');
		}
		if(proedate == '') {
			return mui.toast('请选择项目结束时间！');
		}
		arr.proname = proname;
		arr.prosdate = prosdate;
		arr.proedate = proedate;
		arr.protitle = protitle;
		arr.procontent = procontent;
	}
	arr.submit = 'submit';
    layer_load('执行中，请稍候...');
	mui('.yunset_bth_box').off('tap', '#resumesubmit', addresume);
	mui.post('index.php?c=kresume', arr, function(data) {
		layer.closeAll();
		if(data.url) {
			layermsg(data.msg, 2, function() {
				window.location.href = data.url;
			});
		} else {
			mui('.yunset_bth_box').on('tap', '#resumesubmit', addresume);
			return mui.toast(data.msg);
		}
	}, 'json');
}

function app_height_status(id) {
	$("#wname .sq_gjresume_bth").html("<a class=\"sq_gjresume_bth_a\" href=\"javascript:void(0);\" onclick=\"layer_del('','index.php?c=resumeset&height=" + id + "');\">申请高级简历</a>");
	wnamehtml = $("#wname").html();
	$("#wname").html('');
	layer.open({
		type: 1,
		title: '申请高级简历',
		closeBtn: [0, true],
		border: [10, 0.3, '#000', true],
		area: ['300px', 'auto'],
		content: wnamehtml,
		cannel: $("#wname").html(wnamehtml)
	});
}

function entr_resume_free(id) {
	$.post(wapurl + "/member/index.php?c=canceltrust", {
		id: id
	}, function(data) {
		var data = eval('(' + data + ')');
		if(data.url) {
			layermsg(data.msg, Number(data.tm), function() {
				location.reload(true);
			});
			return false;
		} else {
			layermsg(data.msg, Number(data.tm), function() {
				location.href = data.url;
			});
			return false;
		}
	});
}

function entrust(msg, id) {

	if(msg) {
		layer.open({
			content: msg,
			btn: ['确认', '取消'],
			shadeClose: false,
			yes: function() {
				layer.closeAll();
				layer_load('执行中，请稍候...');
				$.post(wapurl + "/member/index.php?c=canceltrust", {
					id: id
				}, function(data) {
					layer.closeAll();
					var data = eval('(' + data + ')');
					if(data.url == '1') {
						layermsg(data.msg, Number(data.tm), function() {
							location.reload(true);
						});
						return false;
					} else {
						layermsg(data.msg, Number(data.tm), function() {
							location.href = data.url;
						});
						return false;
					}
				});
			}
		});
	} else {
		$.post(wapurl + "/member/index.php?c=canceltrust", {
			id: id
		}, function(data) {
			var data = eval('(' + data + ')');
			if(data.url) {
				layermsg(data.msg, Number(data.tm), function() {
					location.reload(true);
				});
				return false;
			} else {
				layermsg(data.msg, Number(data.tm), function() {
					location.href = data.url;
				});
				return false;
			}
		});
	}
}