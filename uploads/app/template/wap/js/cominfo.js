var umeditor = UM.getEditor('content', {
	toolbar: false,
	elementPathEnabled: false,
	wordCount: false,
	autoHeightEnabled: false
});
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
	if(e.detail.page.id == 'welfarehtml') {
		var allwel = '';
		$('.welfare').each(function(w, wel) {
			if(wel.checked == true) {
				if(allwel == '') {
					allwel = wel.dataset.name;
				} else {
					allwel = allwel + ',' + wel.dataset.name;
				}
			}
		});
		document.getElementById('welfareshow').innerText = allwel?allwel:'请选择';
		document.getElementById('welfare').value = allwel;
	}
	if(e.detail.page.id == 'moneyhtml') {
		var money = document.getElementById('money').value;
		var moneytype = document.getElementById('moneytype').value;
 		
		if(money != "") {
			if(moneytype==1){
				document.getElementById('moneyshow').innerText = document.getElementById('money').value + "万元";
 			}else if(moneytype==2){
				document.getElementById('moneyshow').innerText = document.getElementById('money').value + "万美元";
			}
		}
	}
	if(e.detail.page.id == 'contenthtml') {
		var content = umeditor.getContent();
		if(content != "") {
			document.getElementById('contentshow').innerText = content.replace(/<\/?.+?>/g, "").replace(/ /g, "");
			document.getElementById('contenttext').innerText = content;
		}else{
			document.getElementById('contentshow').innerText='';
			document.getElementById('contenttext').innerText='';
		}
	}
});
var moneytypeData = [{
	value: 1,
	text: '人民币'
}, {
	value: 2,
	text: '美元'
}];
(function($, doc) {
	$.init();
	$.ready(function() {
		var sdatePicker = document.getElementById('sdatePicker');
		if(sdatePicker) {
			var sdate = document.getElementById('sdate');
			sdatePicker.addEventListener('tap', function() {
				document.activeElement.blur();
				var optionsJson = this.getAttribute('data-options') || '{}';
				var options = JSON.parse(optionsJson);
				var picker = new $.DtPicker(options);
				picker.show(function(rs) {
					sdate.value = rs.text;
					sdatePicker.innerText = rs.text;
					picker.dispose();
				});
			}, false);
		}
	});
	
	
	var addwelfarebox = $('.addwelfarebox')[0];
	if(addwelfarebox) {
		addwelfarebox.addEventListener('tap', function(event) { 
			var welfare = doc.getElementById('addwelfare').value;
			var error = 0;
			if(welfare.length >= 2 && welfare.length <= 8) {
				
				$('.welfare').each(function(i, arr) {
					var otag = arr.dataset.name;
					if(welfare == otag) {
						error = 1;
						return mui.toast('相同福利已存在，请选择或重新填写！');
					}
				});
				if(error == 0) {
					var html = "<div class='mui-input-row mui-checkbox'><label>" + welfare + "</label><input name='welfare[]' value='" + welfare + "' type='checkbox' class='welfare' data-name='" + welfare + "' checked></div>";
					var oDiv = doc.createElement('div');
					oDiv.className = 'yun_info_fl_list';
					oDiv.innerHTML = html;
					doc.getElementById('addwelfarelist').appendChild(oDiv);
				}
				doc.getElementById('addwelfare').value = '';
			} else {
				return mui.toast('请输入2-8个福利字符！');
			}
		}, false);
	}

})(mui, document);

(function() {
	mui('.yunset_bth_box').on('tap', '.addnext', function() {
		var name = $.trim(document.getElementById('name').value),
			shortname = $.trim(document.getElementById('shortname').value),
			hy = $.trim(document.getElementById('hy').value),
			pr = $.trim(document.getElementById('pr').value),
			mun = $.trim(document.getElementById('mun').value),
			provinceid = $.trim(document.getElementById('provinceid').value),
			cityid = $.trim(document.getElementById('cityid').value),
			three_cityid = $.trim(document.getElementById('three_cityid').value),
			address = $.trim(document.getElementById('address').value),
			linkman = $.trim(document.getElementById('linkman').value),
			linktel = $.trim(document.getElementById('linktel').value),
			linkphone = $.trim(document.getElementById('linkphone').value),
			content = $.trim(document.getElementById('contenttext').value);

		if(name == '') {
			mui.toast('请填写企业全称！');
			return false;
		}

 		if(hy == '') {
			mui.toast('请选择从事行业！');
			return false;
		}
		if(pr == '') {
			mui.toast('请选择企业性质！');
			return false;
		}
		if(mun == '') {
			mui.toast('请选择企业规模！');
			return false;
		}
		if(cityid == '') {
			mui.toast('请选择所在地！');
			return false;
		}
		if(address == '') {
			mui.toast('请填写公司地址！');
			return false;
		}
		if(linkman == '') {
			mui.toast('请填写联系人！');
			return false;
		}
		if(linktel == '' && linkphone == '') {
			mui.toast('固定电话与手机号码必须填写一项！');
			return false;
		}
		if(linktel != '' && !isjsMobile(linktel)) {
			mui.toast('请填写正确手机格式！');
			return false;
		}
		if(linkphone != '' && !isjsTell(linkphone)) {
			mui.toast('请填写正确电话格式！');
			return false;
		}
		if(content == '') {
			mui.toast('请填写企业简介！');
			return false;
		}
	})

	var infosubmitBtn = document.getElementById('infosubmit')
	if(infosubmitBtn) {
		infosubmitBtn.addEventListener('tap', checkinfo, false)
	}
})();

function checkinfo() {

	var name = $.trim(document.getElementById('name').value),
		shortname = $.trim(document.getElementById('shortname').value),
		hy = $.trim(document.getElementById('hy').value),
		pr = $.trim(document.getElementById('pr').value),
		mun = $.trim(document.getElementById('mun').value),
		provinceid = $.trim(document.getElementById('provinceid').value),
		cityid = $.trim(document.getElementById('cityid').value),
		three_cityid = $.trim(document.getElementById('three_cityid').value),
		address = $.trim(document.getElementById('address').value),
		linkman = $.trim(document.getElementById('linkman').value),
		linktel = $.trim(document.getElementById('linktel').value),
		linkphone = $.trim(document.getElementById('linkphone').value),
		linkmail = $.trim(document.getElementById('linkmail').value),
		website = $.trim(document.getElementById('website').value),
		linkjob = $.trim(document.getElementById('linkjob').value),
		linkqq = $.trim(document.getElementById('linkqq').value),
		busstops = $.trim(document.getElementById('busstops').value),
		sdate = $.trim(document.getElementById('sdate').value),
		money = $.trim(document.getElementById('money').value),
		preview = $.trim(document.getElementById('preview').value),
		moneytype = $.trim(document.getElementById('moneytype').value),
		content = document.getElementById('contenttext'),
		welfare = $.trim(document.getElementById('welfare').value),
		logid = $.trim(document.getElementById('logid').value);

	if(name == '') {
		return mui.toast('请填写企业全称！');
	}
	if(hy == '') {
		return mui.toast('请选择从事行业！');
	}
	if(pr == '') {
		return mui.toast('请选择企业性质！');
	}
	if(mun == '') {
		return mui.toast('请选择企业规模！');
	}
	if(cityid == '') {
		return mui.toast('请选择所在地！');
	}
	if(address == '') {
		return mui.toast('请填写公司地址！');
	}
	if(linkman == '') {
		return mui.toast('请填写联 系 人！');
	}
	if(linktel == '' && linkphone == '') {
		return mui.toast('固定电话与手机号码必须填写一项！');
	}
	if(linktel != '' && !isjsMobile(linktel)) {
		mui.toast('请填写正确手机格式！');
		return false;
	}
	if(linkphone != '' && !isjsTell(linkphone)) {
		mui.toast('请填写正确电话格式！');
		return false;
	}
	if(content.innerText == '') {
		return mui.toast('请填写企业简介！');
	}

	formData.append('name', name);
	formData.append('shortname', shortname);
	formData.append('hy', hy);
	formData.append('pr', pr);
	formData.append('mun', mun);
	formData.append('provinceid', provinceid);
	formData.append('cityid', cityid);
	formData.append('three_cityid', three_cityid);
	formData.append('address', address);

	formData.append('linkman', linkman);
	formData.append('linktel', linktel);
	formData.append('linkphone', linkphone);
	formData.append('linkmail', linkmail);

	formData.append('website', website);
	formData.append('linkjob', linkjob);
	formData.append('linkqq', linkqq);
	formData.append('busstops', busstops);
	formData.append('sdate', sdate);
	formData.append('preview', preview);
	formData.append('money', money);
	formData.append('moneytype', moneytype);

	formData.append('content', content.innerText);
	formData.append('welfare', welfare);
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

$(function() {
	
	function toFixed2(num) {
		return parseFloat(+num.toFixed(2));
	}

	$('#cancleBtn').on('click', function() {
		$("#showEdit").fadeOut();
		$('#showResult').fadeIn();
	});
	$('#rotateBtn').on('click', function() {
		$('#readyimg').cropper('rotate',90);
	});
	$('#confirmBtn').on('click', function() {
		$("#showEdit").fadeOut();

		var $image = $('#report > img');
		var dataURL = $image.cropper("getCroppedCanvas");
		var imgurl = dataURL.toDataURL("image/jpeg", 0.5);
		$("#changeAvatar > img").attr("src", imgurl);
		$("#uimage").val(imgurl);
		$('#showResult').fadeIn();

	});

	function cutImg() {
		$('#showResult').fadeOut();
		$("#showEdit").fadeIn();
	}
	$('#image').on('change', function() {
		cutImg();
	});

	var $image = $('#report > img'),
		options = {
			modal: true,
			autoCropArea: 0.5,
			dragCrop: false,
			movable: true,
			resizable: false,
			minContainerWidth: 400,
			minContainerHeight: 400,
			aspectRatio: 1 / 1,
			crop: function(data) {

			}
		};

	$image.on().cropper(options);

	var $inputImage = $('#image'),
		URL = window.URL || window.webkitURL,
		blobURL;
	if(URL) {
		$inputImage.change(function() {
			var files = this.files,
				file;

			if(files && files.length) {
				file = files[0];

				if(/^image\/\w+$/.test(file.type)) {
					blobURL = URL.createObjectURL(file);

					$image.one('built.cropper', function() {
						URL.revokeObjectURL(blobURL); 
					}).cropper('reset', true).cropper('replace', blobURL);

					$inputImage.val('');
				} else {
					showMessage('请上传图片');
				}
			}
		});
	} else {
		$inputImage.parent().remove();
	}
});

function photo() {
	var uimage = $("#uimage").val();
	if(uimage == '') {
		layermsg('图片未改变，无需修改');
		return false;
	}else{
		var regS = new RegExp("\\+", "gi");
		uimage = uimage.replace(regS, "#");
		$.ajax({
			type: 'POST',
			url: "index.php?c=photo",
			cache: false,
			dataType: 'json',
			data: {
				uimage: uimage,
				submit: 1
			},
			success: function(msg) {
				if(msg == '1') {
					var date = '上传成功！';
				} else if(msg == '3') {
					var date = '上传成功，等待审核！';
				} else {
					var date = '上传失败，请重新上传！';
				} 
				layermsg(date, 2, function() {
					window.location.href = wapurl + "member/index.php?c=info";
				});
				return false;
			}
		});
	}
	
}