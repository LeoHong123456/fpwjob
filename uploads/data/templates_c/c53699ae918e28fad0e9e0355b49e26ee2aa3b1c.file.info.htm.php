<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-02-19 14:21:07
         compiled from "/www/fpwjob/uploads/app/template/wap/member/user/info.htm" */ ?>
<?php /*%%SmartyHeaderCode:8281449635e4cd3d397a8f5-16814589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c53699ae918e28fad0e9e0355b49e26ee2aa3b1c' => 
    array (
      0 => '/www/fpwjob/uploads/app/template/wap/member/user/info.htm',
      1 => 1572067313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8281449635e4cd3d397a8f5-16814589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'resume' => 0,
    'arr_data1' => 0,
    'userclass_name' => 0,
    'arr_data' => 0,
    'j' => 0,
    'v' => 0,
    'userdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5e4cd3d3a23dc2_57123987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4cd3d3a23dc2_57123987')) {function content_5e4cd3d3a23dc2_57123987($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.picker.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.poppicker.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/webapppic/cropper.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/webapppic/cropper.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/compress.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>


<div id="app" class="mui-views">
    <div class="mui-view">
        <div class="mui-pages"></div>
    </div>
</div>


<div id="main" class="mui-page">
    
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">
                <ul class="yunset_list">
                    <li>
                        <a href="#photohtml" class="yunset_list_max">
                            <span class="yunset_list_name">头像</span>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value['photo_status']=='1') {?>
							<span style="width:60px;position: absolute;top:10px; font-weight:bold; color:#f00">审核中</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value['photo_status']=='2') {?>
							<span style="width:60px;position: absolute;top:10px; font-weight:bold; color:#f00">未通过</span>
							<?php }?>
 							<span class="yunset_list_tx ">
								<?php if ($_smarty_tpl->tpl_vars['resume']->value['sex']==1) {?>
									<img id="photopic" src="<?php echo $_smarty_tpl->tpl_vars['resume']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);">
								<?php } else { ?>
									<img id="photopic" src="<?php echo $_smarty_tpl->tpl_vars['resume']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
',2);">
								<?php }?>
							</span>
                        </a>
                    </li>
                </ul>
                <ul class="yunset_list mt15">
                    <li class="yunset_list_text"><span class="yunset_list_name">姓名</span ><span class="yunset_list_commentary"><input type="text" name="name" id="name"  value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
" placeholder="请输入姓名"></span></li>
                </ul>
                <ul class="yunset_list mt15">

                    <li><span class="yunset_list_name">性别</span><span class="yunset_list_commentary">
					<button id='sexPicker' class="mui-btn mui-btn-block" type='button' data-sex="<?php echo $_smarty_tpl->tpl_vars['resume']->value['sex'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['sex']==1) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} elseif ($_smarty_tpl->tpl_vars['resume']->value['sex']==2) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} else { ?>请选择性别<?php }?></button>
					<input type="hidden" id="sex" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['sex'];?>
">
					</span></li>

                    <li><span class="yunset_list_name">出生年月</span><span class="yunset_list_commentary">
					<button id='birthdayUserPicker' data-options='{"type":"date","value":"<?php if ($_smarty_tpl->tpl_vars['resume']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];
} else { ?>1988-08-08<?php }?>","beginYear":1955,"endYear":2010}'  class="btn mui-btn mui-btn-block"><?php if ($_smarty_tpl->tpl_vars['resume']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];
} else { ?>1988-08-08<?php }?></button>
					<input type="hidden" id="birthday" name="birthday" value="<?php if ($_smarty_tpl->tpl_vars['resume']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];
} else { ?>1988-08-08<?php }?>">
					</span></li>

                    <li><span class="yunset_list_name">最高学历</span><span class="yunset_list_commentary">
					<button id='eduPicker' class="mui-btn mui-btn-block" type='button' data-edu="<?php echo $_smarty_tpl->tpl_vars['resume']->value['edu'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['edu']];
} else { ?>请选择最高学历<?php }?></button>
					<input type="hidden" id="edu" name="edu" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['edu'];?>
">
					</span></li>

                    <li><span class="yunset_list_name">工作经验</span><span class="yunset_list_commentary">
					<button id='expPicker' class="mui-btn mui-btn-block" type='button' data-exp="<?php echo $_smarty_tpl->tpl_vars['resume']->value['exp'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['exp']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['exp']];
} else { ?>请选择工作经验<?php }?></button>
					<input type="hidden" id="exp" name="exp" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['exp'];?>
">
					</span></li>

                    <li class="yunset_list_text"><span class="yunset_list_name">现居住地</span><span class="yunset_list_commentary"><input type="text" name="living"  id="living"value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['living'];?>
" placeholder="请输入现居住地"></span></li>
                </ul>
                <ul class="yunset_list mt15">
                    <li class="yunset_list_text"><span class="yunset_list_name">手机</span><span class="yunset_list_commentary">
					<?php if ($_smarty_tpl->tpl_vars['resume']->value['moblie_status']==1) {?>
					（已绑定）<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
 
					<input type="hidden" id="telphone" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
">
					<?php } else { ?>
					<input type="text" name="telphone" id="telphone" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" class=""placeholder="请输入手机号码" >
					<?php }?> 
					</span></li>
						
                </ul>

                <div class="yunset_bth_box" style="background: transparent; border: none; padding:0px;">
                    <a href="#addnexthtml" class="yun_wap_info_brief_tit_bc addnext">下一步</a>
                </div>
                <div style="height:30px;"></div>
                
            </div>
        </div>
    </div>
</div>
</div>

<div id="addnexthtml" class="mui-page">
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">

                <ul class="yunset_list">

                    <li class="yunset_list_text"><span class="yunset_list_name" style="width:150px">详细地址<em class="yunset_xttip">（选填）</em></span>
                        <div class="yunset_list_commentary"> <input type="text" name="address" id="address" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['address'];?>
" placeholder="XXX省XXX市XXX区XXX街道" class=""></div>
                    </li>

                    <li class="yunset_list_text"><span class="yunset_list_name">身高<em class="yunset_xttip">（选填）</em></span > 
                      	<span class="yunset_list_commentary" style="padding-right:20px;">
                    		<input type="number" name="height" id="height"  value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['height'];?>
" placeholder="">
                      	</span>
                        <i style=" position:absolute;right:10px;top:0px; display:inline-block; line-height:44px;">CM</i>
                    </li>

                    <li class="yunset_list_text"><span class="yunset_list_name">体重<em class="yunset_xttip">（选填）</em></span > 
                      	<span class="yunset_list_commentary" style="padding-right:20px;">
                    		<input type="number" name="weight" id="weight"  value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['weight'];?>
" placeholder="">
                      	</span>
                        <i style=" position:absolute;right:10px;top:0px; display:inline-block; line-height:44px;">KG</i>
                    </li>

                    <li class="yunset_list_text"><span class="yunset_list_name">民族<em class="yunset_xttip">（选填）</em></span>
                        <div class="yunset_list_commentary"> <input type="text" name="nationality" id="nationality" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['nationality'];?>
" placeholder="例：汉" class=""></div>
                    </li>

                    <li><span class="yunset_list_name">婚姻<em class="yunset_xttip">（选填）</em></span><span class="yunset_list_commentary">
					<button id='marriagePicker' class="mui-btn mui-btn-block" type='button' data-marriage="<?php echo $_smarty_tpl->tpl_vars['resume']->value['marriage'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['marriage']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['marriage']];
} else { ?>请选择婚姻状况<?php }?></button>
					<input type="hidden" id="marriage" name="marriage" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['marriage'];?>
">
					</span></li>

                    <li class="yunset_list_text"><span class="yunset_list_name" style="width:150px">户籍所在地<em class="yunset_xttip">（选填）</em></span>
                        <div class="yunset_list_commentary"> <input type="text" name="domicile" id="domicile" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['domicile'];?>
" placeholder="例：江苏-宿迁" class=""></div>
                    </li>

                    <li class="yunset_list_text"><span class="yunset_list_name">QQ<em class="yunset_xttip">（选填）</em></span>
                        <div class="yunset_list_commentary"> <input type="text" name="qq" id="qq" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['qq'];?>
" class="" placeholder="请填写QQ号码"></div>
                    </li>

					<li class="yunset_list_text">
							<span class="yunset_list_name">邮箱</span>
							<span class="yunset_list_commentary ">
								<?php if ($_smarty_tpl->tpl_vars['resume']->value['email_status']==1) {?>
									已验证）<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>

									<input type="hidden" id="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
">
								<?php } else { ?>
									<input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
" class="" placeholder="请输入联系邮箱" > 
								<?php }?> 
							</span>
						</li>

                    <li class="yunset_list_text">
                        <span class="yunset_list_name" style="width:150px">个人二维码<em class="yunset_xttip">（选填）</em></span>
                     	<span class="yunset_list_commentary" id="previewshow">
                          	<img id="previewimg" src="<?php echo $_smarty_tpl->tpl_vars['resume']->value['wxewm'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_ewm'];?>
',2);" style="border-radius:0px;width:20px;height:20px;">
                       	</span>
                        <div class="yunset_list_file"> 
                        	<input type="file" id="pic" name="pic" onchange="previewImage(this,'preview')" accept="image/*"  />
                        </div>
                   		<input type='hidden' name='preview' value='' id='preview'>  
                    </li>

                    <li class="yunset_list_text"><span class="yunset_list_name" style="width:150px">个人主页/博客<em class="yunset_xttip">（选填）</em></span>
                        <div class="yunset_list_commentary"> <input type="text" name="homepage" id="homepage" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['homepage'];?>
" placeholder="请填写个人主页/博客" class="" style="width:78%"></div>
                    </li>
                </ul>

				<input type="hidden" id="logid" name="logid">

                <div class="yunset_bth_box" style="background: transparent; border: none;">
					
                    <button id="submit" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>

                    <a class="yun_wap_info_brief_tit_bc mui-action-back" style="background:#f8f8f8;border:1px solid #eee;color:#333">返回上一步</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="photohtml" class="mui-page">
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">
                <div id="showResult">
                    <div id="changeAvatar" class="photo_i_box">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['resume']->value['photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" width="120" height="120">
                    </div>
                    <div class="clear"></div>
                    <div class="photo_xz">
                        <input id="image" type="file" accept="image/*" />选择上传头像
                    </div>
                    <div class="yunset_identity_msg"><i class="yunset_identity_msg_icon"></i>选择上传头像点击提交按钮即可上传</div>
                    <div class="photo_tj">
                        <input type='hidden' name="txt" id="uimage" value="">
                        <input name="submit" type="button" onclick="photo()" value="提交" class="yunset_bth" />
                    </div>
                </div>
                <div id="showEdit" style="display: none;width:100%;height: 100%;position: absolute;top:0;left: 0;z-index: 9;">
                    <div class="photo_cz_bth">
                        <button class="mui-btn" data-mui-style="fab" id='cancleBtn'>取消</button>
                        <button class="mui-btn" data-mui-style="fab" id='rotateBtn'>旋转</button>
                        <div class="photo_cz_bth_qd">
                            <button class="mui-btn" data-mui-style="fab" data-mui-color="primary" id='confirmBtn'>确定</button>
                        </div>
                    </div>
                    <div id="report"><img src="" alt="Picture" id="readyimg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
    var formData = new FormData(),
        newuploadpic;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.view.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.picker.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/mui.poppicker.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/resume.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>

 <?php echo '<script'; ?>
 language="javascript">
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
    
    var sexData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
    sexData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'
    })
    '<?php } ?>'
    var eduData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
    eduData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
    })
    '<?php } ?>'
    var marriageData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
    marriageData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
    })
    '<?php } ?>'
    var expData = [];
    '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
    expData.push({
        value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
    })
    '<?php } ?>'
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
    (function() {
    	
		if(document.getElementById('main')){
			document.getElementById('main').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		if(document.getElementById('addnexthtml')){
			document.getElementById('addnexthtml').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		
        mui('.yunset_bth_box').on('tap', '.addnext', function() {
            var name = $.trim(document.getElementById('name').value),
                sex = $.trim(document.getElementById('sex').value),
                birthday = $.trim(document.getElementById('birthday').value),
                edu = $.trim(document.getElementById('edu').value),
                exp = $.trim(document.getElementById('exp').value),
                living = $.trim(document.getElementById('living').value),
                telphone = $.trim(document.getElementById('telphone').value),
                email = $.trim(document.getElementById('email').value);

            if(name == '') {
                mui.toast('请填写姓名！');
                return false;
            }
            if(sex == '') {
                mui.toast('请选择性别！');
                return false;
            }
            if(birthday == '') {
                mui.toast('请选择出生年月！');
                return false;
            }
            if(edu == '') {
                mui.toast('请选择最高学历！');
                return false;
            }
            if(exp == '') {
                mui.toast('请选择工作经验！');
                return false;
            }
            if(living == '') {
                mui.toast('请填写现居住地！');
                return false;
            }
            if(telphone == '') {
                mui.toast('请填写手机！');
                return false;
            } else if(!isjsMobile(telphone)) {
                mui.toast('手机格式错误！');
                return false;
            }
            var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
            if(email != "" && !myreg.test(email)) {
                mui.toast('邮箱格式错误！');
                return false;
            }

        })
        var submitBtn = document.getElementById('submit')
        if(submitBtn) {
            submitBtn.addEventListener('tap', checkinfo, false)
        }
    })();

    function photo() {
        var uimage = $("#uimage").val();
        if(uimage == '') {
            layermsg('头像未改变，无需修改');
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
					} else if(msg == '4') {
						var date = '上传失败，请重新上传！';
					} else {
						var date = '上传失败！';
					}
					layermsg(date, 2, function() {  
						window.location.href = wapurl + "member/index.php?c=info";
					});
					return false;
				}
			});
		}
        
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/publicselect.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/category.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
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
	
	$(function(){
 		setTimeout(function(){ 
			$.post('index.php?c=userLog',{url:url,refer:refer,timeIn:timeIn,second:2,opera:11},function(data){
				if(data){
					$("#logid").val(data);
				}
			})
		},2000);
		
    }) 
	
	window.onbeforeunload = function(){
		var logid = $("#logid").val();
 		if(second>2){ 
			$.post('index.php?c=gxUserLog',{id:logid,second:second},function(data){
				if(data) {
					return false;
				}
			})
		}
   	}
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
