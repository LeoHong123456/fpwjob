<?php
/*
* $Author ：LEO
*
* 官网: https://www.fpwjob.com
*
* 版权所有 2018-2019 菲聘网，并保留所有权利。
*
* 
 */

error_reporting(0);
require_once("alipay_config.php");
require_once("class/alipay_service.php");
require_once(dirname(dirname(dirname(__FILE__)))."/config/db.safety.php");
require_once(dirname(dirname(dirname(__FILE__)))."/config/db.config.php");
require_once(dirname(dirname(dirname(__FILE__)))."/data/plus/config.php");
if (substr(PHP_VERSION, 0, 1) == '7') {
	require_once(dirname(dirname(dirname(__FILE__)))."/app/include/mysqli.class.php");
}else{
	require_once(dirname(dirname(dirname(__FILE__)))."/app/include/mysql.class.php");
}
$db = new mysql($db_config['dbhost'], $db_config['dbuser'], $db_config['dbpass'], $db_config['dbname'], ALL_PS, $db_config['charset']);
if(!is_numeric($_POST['dingdan'])){die;}
$_COOKIE['uid']=(int)$_COOKIE['uid'];
$_POST['is_invoice']=(int)$_POST['is_invoice'];
$_POST['coupon']=(int)$_POST['coupon'];
$invoice_title=trim($_POST['invoice_title']);
$member_sql=$db->query("SELECT * FROM `".$db_config["def"]."member` WHERE `uid`='".$_COOKIE['uid']."' limit 1");
$member=$db->fetch_array($member_sql);
if($member['usertype'] != $_COOKIE['usertype']||md5($member['username'].$member['password'].$member['salt'])!=$_COOKIE['shell']){
	echo '登录信息验证错误，请重新登录！';die;
}
$sql=$db->query("select * from `".$db_config["def"]."company_order` where `order_id`='".$_POST['dingdan']."' AND `order_price`>=0");
$row=$db->fetch_array($sql);
if(!$row['uid'] || $row['uid']!=$_COOKIE['uid'])
{
	die;
}
if($_POST['coupon'] && $row['coupon']==""){
	$where="`uid`='".$_COOKIE['uid']."' and `id`='".$_POST['coupon']."' and `validity`>'".time()."'  and `status`='1' and `coupon_scope`<='".$row['order_price']."'";
	$cousql=$db->query("select * from `".$db_config["def"]."coupon_list` where ".$where);
	$coupon=$db->fetch_array($cousql);
	$row['order_price']=sprintf("%.2f", $row['order_price']-$coupon['coupon_amount']);
	if($row['order_price']<0){$row['order_price']='0.01';}
	if($coupon['id']&&$row['coupon']<'1'){
		$db->query("update `".$db_config[def]."coupon_list` set `status`='2',`xf_time`='".time()."' where `id`='".$coupon['id']."'");
		$db->query("update `".$db_config[def]."company_order` set `coupon`='".$_POST['coupon']."',`order_price`='".$row['order_price']."' where `id`='".$row['id']."'");
	}
}

if($invoice_title){
	$up_order=$db->query("update `".$db_config["def"]."company_order` set `is_invoice`='".$_POST['is_invoice']."',`order_bank`='bank' where `order_id`='".$row['order_id']."'");
	//$db->fetch_array($up_order);//更改订单发票信息
}

/*以下参数是需要通过下单时的订单数据传入进来获得*/
//必填参数
$out_trade_no = $_POST['dingdan'];	//请与贵网站订单系统中的唯一订单号匹配
$subject      = $_POST['subject']?$_POST['subject']:'充值';		//订单名称，显示在支付宝收银台里的“商品名称”里，显示在支付宝的交易管理的“商品名称”的列表里。
$body         = $row['order_remark'];		//订单描述、订单详细、订单备注，显示在支付宝收银台里的“商品描述”里
$total_fee    = $row['order_price'];		//订单总金额，显示在支付宝收银台里的“应付总额”里

//扩展功能参数——网银提前
$pay_mode	  = $_POST['pay_bank'];

if ($pay_mode == "directPay") {
	$paymethod    = "directPay";	//默认支付方式，四个值可选：bankPay(网银); cartoon(卡通); directPay(余额); CASH(网点支付)
	$defaultbank  = "";
}
else {
	$paymethod    = "bankPay";		//默认支付方式，四个值可选：bankPay(网银); cartoon(卡通); directPay(余额); CASH(网点支付)
	$defaultbank  = $pay_mode;		//默认网银代号，代号列表见http://club.alipay.com/read.php?tid=8681379
}

//扩展功能参数——防钓鱼
$encrypt_key  = '';					//防钓鱼时间戳，初始值
$exter_invoke_ip = '';				//客户端的IP地址，初始值
if($antiphishing == 1){
    $encrypt_key = query_timestamp($partner);
	$exter_invoke_ip = '';			//获取客户端的IP地址，建议：编写获取客户端IP地址的程序
}

//扩展功能参数——其他
$extra_common_param =$_POST['pay_type'];			//自定义参数，可存放任何内容（除=、&等特殊字符外），不会显示在页面上
$buyer_email		= '';			//默认买家支付宝账号

/////////////////////////////////////////////////

//构造要请求的参数数组
$parameter = array(
        "service"         => "create_direct_pay_by_user",	//接口名称，不需要修改
        "payment_type"    => "1",               			//交易类型，不需要修改

        //获取配置文件(alipay_config.php)中的值
        "partner"         => $partner,
        "seller_email"    => $seller_email,
        "return_url"      => $return_url,
        "notify_url"      => $notify_url,
        "_input_charset"  => $_input_charset,
        "show_url"        => $show_url,

        //从订单数据中动态获取到的必填参数
        "out_trade_no"    => $out_trade_no,
        "subject"         => $subject,
        "body"            => $body,
        "total_fee"       => $total_fee,

        //扩展功能参数——网银提前
        "paymethod"	      => $paymethod,
        "defaultbank"	  => $defaultbank,

        //扩展功能参数——防钓鱼
        "anti_phishing_key"=> $encrypt_key,
		"exter_invoke_ip" => $exter_invoke_ip,

        //扩展功能参数——分润(若要使用，请取消下面两行注释)
        //$royalty_type   => "10",	  //提成类型，不需要修改
        //$royalty_parameters => "111@126.com^0.01^分润备注一|222@126.com^0.01^分润备注二",
        /*提成信息集，与需要结合商户网站自身情况动态获取每笔交易的各分润收款账号、各分润金额、各分润说明。最多只能设置10条
	提成信息集格式为：收款方Email_1^金额1^备注1|收款方Email_2^金额2^备注2
        */

        //扩展功能参数——自定义超时(若要使用，请取消下面一行注释)。该功能默认不开通，需联系客户经理咨询
        //$it_b_pay	      => "1c",	  //超时时间，不填默认是15天。八个值可选：1h(1小时),2h(2小时),3h(3小时),1d(1天),3d(3天),7d(7天),15d(15天),1c(当天)

		//扩展功能参数——自定义参数
		"buyer_email"	 => $buyer_email,
        "extra_common_param" => $extra_common_param
);
//构造请求函数
$alipay = new alipay_service($parameter,$security_code,$sign_type);


//若改成GET方式传递
$url = $alipay->create_url();
header("location:".$url);


?>
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title>支付宝即时支付</title>
        <style type="text/css">
            .font_content{
                font-family:"宋体";
                font-size:14px;
                color:#FF6600;
            }
            .font_title{
                font-family:"宋体";
                font-size:16px;
                color:#FF0000;
                font-weight:bold;
            }
            table{
                border: 1px solid #CCCCCC;
            }
        </style>
    </head>
    <body>

        <table align="center" width="350" cellpadding="5" cellspacing="0">
            <tr>
                <td align="center" class="font_title" colspan="2">订单确认</td>
            </tr>
            <tr>
                <td class="font_content" align="right">订单号：</td>
                <td class="font_content" align="left"><?php echo $out_trade_no; ?></td>
            </tr>
            <tr>
                <td class="font_content" align="right">付款总金额：</td>
                <td class="font_content" align="left"><?php echo $total_fee; ?></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><?php echo $sHtmlText; ?></td>
            </tr>
        </table>
    </body>
</html>
