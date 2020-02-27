<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-01-27 09:12:33
         compiled from "/www/fpwjob/uploads//app/template/wap/nativeshare.htm" */ ?>
<?php /*%%SmartyHeaderCode:13593210015e2e39015c0c55-74518682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81647906f2902b8b187800a66a8021b6b1b5bd6c' => 
    array (
      0 => '/www/fpwjob/uploads//app/template/wap/nativeshare.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13593210015e2e39015c0c55-74518682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'isweixin' => 0,
    'reg_url' => 0,
    'signPackage' => 0,
    'shareurl' => 0,
    'title' => 0,
    'description' => 0,
    'job' => 0,
    'Info' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e2e3901618b46_82695807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2e3901618b46_82695807')) {function content_5e2e3901618b46_82695807($_smarty_tpl) {?><!----如果是微信登录，引导微信自有分享------>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/nativeshare/nativeshare.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/nativeshare/nativeshare.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>


<?php if ($_smarty_tpl->tpl_vars['isweixin']->value) {?>

<?php if (strpos($_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'],'https://')!==false) {?>
<?php echo '<script'; ?>
 src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php } else { ?>
<?php echo '<script'; ?>
 src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>

<?php }?>
<?php echo '<script'; ?>
>
	$(function(){
		$('#shareClick').click(function(){
			
			var url = $(this).attr('data-url');
			if(new RegExp('http://').test(url)){
				window.location.href=url;
			}else{
				var regurl = '<?php echo $_smarty_tpl->tpl_vars['reg_url']->value;?>
';
				if(regurl!=''){
					 wx.ready(function () {
					  var shareData = {
						  title: '邀请注册-<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
',
						  desc: '#推荐得<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
，好礼尽情拿#只要成功推荐1位朋友注册，就可以兑换到礼品了！只要推荐<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
够给力，更有新iPad、iPod、音响、耳机、背包、笔记本等数万件礼品可尽情兑换！给我点力吧！注册成功你也可以获得礼品兑换<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
哦，赶快来参加吧！',
						  link: regurl,
						  imgUrl: '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
',
							success: function () { 
								// 用户确认分享后执行的回调函数

							},
							cancel: function () { 
								// 用户取消分享后执行的回调函数
								
							}
						  };
						  wx.onMenuShareAppMessage(shareData);
						  wx.onMenuShareTimeline(shareData);
						  wx.onMenuShareQQ(shareData);
						  wx.onMenuShareWeibo(shareData);
						  wx.onMenuShareQZone(shareData);
					  });
					  wx.error(function (res) {
						console.log(res.errMsg);
					  });
				}
				$("#weixinBrowser").show();
			}
			
		});
		$('#weixinBrowser').click(function(){
			
			$(this).hide();
		});
	});
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['signPackage']->value) {?>
<?php echo '<script'; ?>
>
var shareurl = '<?php echo $_smarty_tpl->tpl_vars['shareurl']->value;?>
';
wx.config({
    appId: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['appId'];?>
',
    timestamp: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['timestamp'];?>
',
    nonceStr: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['nonceStr'];?>
',
    signature: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['signature'];?>
',
    jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
		'onMenuShareQZone'
      ]
  });
	if(shareurl!=''){
		
		var link = shareurl;

		}else{
		
		var link = '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['url'];?>
';
	}
 wx.ready(function () {
  var shareData = {
  title: '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
',
  desc: '<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
',
  link: link,
  imgUrl: '<?php if ($_smarty_tpl->tpl_vars['job']->value['com_logo']) {
echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['com_logo'];
} elseif ($_smarty_tpl->tpl_vars['Info']->value['resume_photo']) {
echo $_smarty_tpl->tpl_vars['Info']->value['resume_photo'];
} elseif ($_smarty_tpl->tpl_vars['row']->value['logo']) {
echo $_smarty_tpl->tpl_vars['row']->value['logo'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];
}?>',
	success: function () { 
		// 用户确认分享后执行的回调函数

	},
	cancel: function () { 
		// 用户取消分享后执行的回调函数
		
	}
  };
  wx.onMenuShareAppMessage(shareData);
  wx.onMenuShareTimeline(shareData);
  wx.onMenuShareQQ(shareData);
  wx.onMenuShareWeibo(shareData);
  wx.onMenuShareQZone(shareData);
  });
  wx.error(function (res) {
  console.log(res.errMsg);
  });
<?php echo '</script'; ?>
>
<?php }?>
<?php } else { ?>
<!----如果是UC QQ浏览器，弹出分享界面------>
<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/appshare.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
' type='text/javascript' ><?php echo '</script'; ?>
>
<div id="nativeShare"></div>
<?php echo '<script'; ?>
 language="javascript">
if(navigator.userAgent.indexOf('Html5Plus') > -1){
var shares=null;
// 监听plusready事件  
document.addEventListener( "plusready", function(){
	document.getElementById("shareClick").addEventListener("click", function() {
		var message = {
				title: '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
',
				content: '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
',
				href: '<?php echo $_smarty_tpl->tpl_vars['shareurl']->value;?>
',
				thumbs: ["<?php if ($_smarty_tpl->tpl_vars['job']->value['com_logo']) {
echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['com_logo'];
} elseif ($_smarty_tpl->tpl_vars['Info']->value['resume_photo']) {
echo $_smarty_tpl->tpl_vars['Info']->value['resume_photo'];
} elseif ($_smarty_tpl->tpl_vars['row']->value['logo']) {
echo $_smarty_tpl->tpl_vars['row']->value['logo'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];
}?>"] //分享缩略图
			}
		plusShare(message, function(res) {
			if(res) {
				plus.nativeUI.toast("分享成功");
			} else {
				plus.nativeUI.toast("分享失败");
			}
		})
	});
	});
}else{
	$(function(){
		$('#shareClick').click('click', function () {
			new nativeShare('nativeShare',config);	
		}); 
		$('#otherBrowser').click(function(){
			$(this).hide();
		});
		$('#nativeShare').click(function(evt){
			if($(evt.target).parents(".share_bgbox").length==0){
				$(this).hide();
			}
		});
	});
}
<?php echo '</script'; ?>
>
<!----如果是其他浏览器分享，则弹出分享指引------>
<?php }?>
<!--微信分享公共代码--->
<!--分享-->

<div id="otherBrowser" style="width:100%;height:100%; background:rgba(51,51,51,0.9); position:fixed;left:0px;top:0px ; z-index:100000001;display:none" > 
 <div class="yun_wap_share_tip" style="width:100%; position:absolute; z-index:100000001;top:50%; margin-top:-90px;">
 
 <div class="yun_wap_share_tip_p"><i class="yun_wap_share_n">1.</i>点击浏览器顶部或底部的<i class="yun_wap_share_tip_i3"></i>或<i class="yun_wap_share_tip_i4"></i></div>
 <div class="yun_wap_share_tip_p"><i class="yun_wap_share_n">2.</i>然后点击分享按钮<i class="yun_wap_share_tip_i"></i>或<i class="yun_wap_share_tip_i2"></i></div>
 <div class="yun_wap_share_tip_p"><i class="yun_wap_share_n">3.</i>分享给朋友或者朋友圈</div>
</div>
</div>

<!--分享-->

<div id="weixinBrowser" style="width:100%;height:100%; background:rgba(51,51,51,0.9); position:fixed;left:0px;top:0px ; z-index:100000001;display:block;display:none" > 
 <div class="yun_wap_share_tip" style="width:100%; position:absolute; z-index:100000001;">
 <i class="yun_wap_share_tip_wxicon_more"></i>
<i class="yun_wap_share_tip_wxicon"></i>
</div>
</div><?php }} ?>
