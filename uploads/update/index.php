<?php

set_time_limit(0);
include("../global.php");

if($_GET[step]!="4"){
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>正在升级中.... - - Powered by PHPYun.</title>

<link href="'.$config[sy_weburl].'/template/member/style/msg.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="content" style="background:f5f5f5;">
  <div class="content-title" style="width:100%"><span style="width:100%">正在升级中,已进行'.$_GET[step].'/4</span></div>
  <div style="border:1px solid #ccc; float:left;width:100%;">
    <dl style="width:100%">
       <p style="text-align:center;"><img src="loading.gif"></p><br>
	   <p style="text-align:center;"><font color="red">本次更新时间较长,请不要中途中断,以免升级失败,请耐心等待！</font></p>
    </dl>
</div>
</div>
</body>
</html>';
};
if($_GET[step]==""){

	echo "<script>location.href='$config[sy_weburl]/update/index.php?step=1';</script>";

}

/****************************第一步：新增数据功能表************************************/
if($_GET[step]=="1"){

$db->query("CREATE TABLE `$db_config[def]user_log` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`uid`  int(11) NOT NULL ,
`usertype`  int(11) NOT NULL,
`opera`  int(11) NOT NULL,
`orderid`  varchar(18) DEFAULT '' ,
`url`  varchar(200) DEFAULT '',
`refer`  varchar(200) DEFAULT '',
`timein`  int(11) NOT NULL,
`timeout`  int(11) NOT NULL,
`second`  int(11) NOT NULL,
`content`  text DEFAULT NULL,
`status`  int(11) DEFAULT 0 ,
`note`  varchar(255) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;");



echo "<script>location.href='$config[sy_weburl]/update/index.php?step=2';</script>";

}
/****************************第二步：新增数据字段************************************/


if($_GET[step]=="2"){


$db->query("ALTER TABLE `$db_config[def]zhaopinhui` ADD COLUMN `banner`  varchar(200)  NULL DEFAULT ''");

$db->query("ALTER TABLE `$db_config[def]company` ADD COLUMN `logo_status`  int(11)  NULL DEFAULT 0 ");

$db->query("ALTER TABLE `$db_config[def]company` ADD COLUMN `logo_statusbody`  varchar(255)  NULL DEFAULT NULL");

$db->query("ALTER TABLE `$db_config[def]member` ADD COLUMN `qqunionid`  varchar(200)  NULL DEFAULT NULL");

$db->query("ALTER TABLE `$db_config[def]member` ADD COLUMN `clientid`  varchar(200)  NULL DEFAULT NULL");

$db->query("ALTER TABLE `$db_config[def]member` ADD COLUMN `deviceToken`  varchar(200)  NULL DEFAULT NULL");

$db->query("ALTER TABLE `$db_config[def]member` ADD COLUMN `applocker`  int(9) NULL DEFAULT NULL");

$db->query("ALTER TABLE `$db_config[def]px_train_statis` ADD COLUMN `freeze`  double(10,2) UNSIGNED NULL DEFAULT 0.00");

$db->query("ALTER TABLE `$db_config[def]resume` ADD COLUMN `photo_status`  int(11) NULL DEFAULT 0");

$db->query("ALTER TABLE `$db_config[def]resume` ADD COLUMN `photo_statusbody`  varchar(255)  NULL DEFAULT NULL");

$db->query("ALTER TABLE `$db_config[def]resume` ADD COLUMN `retire`  varchar(100) NULL DEFAULT NULL");

$db->query("ALTER TABLE `$db_config[def]resume` ADD COLUMN `retire_pic`  varchar(200) NULL DEFAULT NULL");

$db->query("ALTER TABLE `$db_config[def]resume` ADD COLUMN `retire_status`  int(1) NULL DEFAULT NULL");

$db->query("ALTER TABLE `$db_config[def]resume` ADD COLUMN `retirebody`  varchar(200) NULL DEFAULT NULL");

$db->query("INSERT INTO `$db_config[def]ad_class` SET `id`='89',`class_name`='测评幻灯',`orders`='0',`type`='2',`btype`='1'");

$db->query("INSERT INTO `$db_config[def]ad_class` SET `id`='90',`class_name`='测评右侧广告',`orders`='0',`type`='2',`btype`='1'");

$db->query("INSERT INTO `$db_config[def]ad_class` SET `id`='91',`class_name`='首页名企左侧banner',`orders`='0',`type`='2',`btype`='1'");

$db->query("INSERT INTO `$db_config[def]ad_class` SET `id`='92',`class_name`='热招人才上方广告',`orders`='0',`type`='2',`btype`='1'");

$db->query("TRUNCATE TABLE  `$db_config[def]admin_navigation`");

$db->query("INSERT INTO `$db_config[def]admin_navigation` (`id`, `name`, `keyid`, `url`, `menu`, `classname`, `sort`, `display`, `dids`) VALUES
(1, '会员', 0, '', 1, '0', 1, 0, 1),
(2, '内容', 0, '', 1, '0', 2, 0, 1),
(3, '运营', 0, '', 1, '0', 3, 0, 1),
(4, '工具', 0, '', 1, '0', 4, 0, 0),
(5, '系统', 0, '', 1, '0', 5, 0, 1),
(6, '企业', 1, '', 1, 'nav_company', 1, 0, 1),
(7, '个人', 1, '', 1, 'nav_user', 2, 0, 1),
(8, '猎头', 1, '', 0, 'nav_lt', 3, 0, 1),
(9, '培训', 1, '', 0, 'nav_py', 4, 0, 1),
(10, '新闻', 2, '', 0, 'nav_news', 1, 0, 1),
(11, '测评', 2, '', 0, 'nav_cp', 2, 0, 0),
(12, '招聘会', 2, '', 0, 'nav_zph', 3, 0, 1),
(13, '工具箱', 2, '', 0, 'nav_gjx', 4, 0, 0),
(14, '公告', 2, '', 0, 'nav_gg', 5, 0, 1),
(17, '个人用户列表', 7, 'index.php?m=user_member', 1, '0', 1, 0, 1),
(15, '问答', 2, '', 0, 'nav_ask', 6, 0, 0),
(16, '企业管理', 6, 'index.php?m=admin_company', 2, '0', 1, 0, 1),
(18, '用户管理', 8, 'index.php?m=admin_lt_member', 1, '0', 1, 0, 1),
(19, '猎头职位管理', 8, 'index.php?m=admin_lt_job', 1, '0', 2, 0, 1),
(20, '高级人才管理', 8, 'index.php?m=height_user', 1, '0', 3, 0, 1),
(21, '猎头认证管理', 8, 'index.php?m=admin_lt_cert', 1, '0', 4, 0, 1),
(22, '猎头悬赏', 8, 'index.php?m=admin_lt_xuanshang', 1, '0', 5, 0, 0),
(23, '增值套餐服务', 8, 'index.php?m=admin_lt_rating', 1, '0', 6, 0, 0),
(24, '猎头设置', 8, 'index.php?m=admin_ltset', 1, '0', 7, 0, 0),
(25, '培训用户列表', 9, 'index.php?m=train_member', 1, '0', 1, 0, 1),
(26, '培训师', 9, 'index.php?m=teacher', 1, '0', 2, 0, 1),
(27, '培训课程管理', 9, 'index.php?m=admin_subject', 1, '0', 3, 0, 1),
(28, '培训认证审核', 9, 'index.php?m=traincert', 1, '0', 4, 0, 1),
(29, '课程报名', 9, 'index.php?m=trainpay', 1, '0', 5, 0, 1),
(30, '培训新闻', 9, 'index.php?m=trainnews', 1, '0', 6, 0, 1),
(31, '咨询留言', 9, 'index.php?m=trainmessage', 1, '0', 7, 0, 1),
(32, '培训设置', 9, 'index.php?m=admin_trainset', 1, '0', 8, 0, 0),
(33, '简历管理', 7, 'index.php?m=admin_resume', 2, '0', 2, 0, 1),
(34, '个人认证审核', 7, 'index.php?m=usercert', 1, '0', 3, 0, 1),
(35, '委托简历管理', 7, 'index.php?m=admin_trust', 1, '0', 4, 0, 1),
(36, '普工简历', 157, 'index.php?m=admin_tiny', 1, '0', 1, 0, 1),
(37, '求职咨询', 7, 'index.php?m=admin_msg', 1, '0', 6, 0, 0),
(38, '简历记录管理', 7, 'index.php?m=admin_userlog', 1, '0', 7, 0, 0),
(39, '个人设置', 7, 'index.php?m=admin_userset', 1, '0', 8, 0, 0),
(40, '职位管理', 6, 'index.php?m=admin_company_job', 2, '0', 2, 0, 1),
(41, '名企管理', 6, 'index.php?m=admin_hotjob', 2, '0', 3, 0, 1),
(42, '兼职管理', 6, 'index.php?m=admin_partjob', 2, '0', 4, 0, 1),
(43, '赏金职位管理', 6, 'index.php?m=admin_jobpack', 1, '0', 5, 0, 0),
(44, '企业产品管理', 6, 'index.php?m=comproduct', 1, '0', 6, 0, 1),
(45, '企业新闻管理', 6, 'index.php?m=comnews', 1, '0', 7, 0, 1),
(46, '面试评价', 6, 'index.php?m=com_pl', 1, '0', 8, 0, 1),
(47, '企业认证审核', 6, 'index.php?m=comcert', 1, '0', 9, 0, 1),
(48, '店铺招聘', 156, 'index.php?m=admin_once', 1, '0', 1, 0, 1),
(49, '专题招聘', 343, 'index.php?m=special', 1, '0', 1, 0, 0),
(50, '职位记录管理', 6, 'index.php?m=admin_comlog', 1, '0', 12, 0, 0),
(51, '招聘顾问', 6, 'index.php?m=admin_company_consultant', 1, '0', 13, 0, 1),
(52, '增值套餐服务', 6, 'index.php?m=admin_comrating', 1, '0', 14, 0, 0),
(53, '企业设置', 6, 'index.php?m=admin_comset', 2, '0', 15, 0, 0),
(54, '新闻管理', 10, 'index.php?m=admin_news', 2, '0', 1, 0, 1),
(55, '添加新闻', 10, 'index.php?m=admin_news&c=news', 1, '0', 2, 0, 1),
(56, '新闻类别', 10, 'index.php?m=admin_news&c=group', 1, '0', 3, 0, 0),
(57, '工具箱', 13, 'index.php?m=hr', 1, '0', 1, 0, 0),
(58, '工具箱类别', 13, 'index.php?m=hrclass', 1, '0', 2, 0, 0),
(59, '公告管理', 14, 'index.php?m=admin_announcement', 2, '0', 1, 0, 1),
(197, '微信通知', 122, 'index.php?m=wx&c=wxtz', 1, '', 8, 0, 0),
(61, '招聘会列表', 12, 'index.php?m=zhaopinhui', 1, '0', 1, 0, 1),
(62, '添加招聘会', 12, 'index.php?m=zhaopinhui&c=add', 1, '0', 2, 0, 1),
(63, '参会企业', 12, 'index.php?m=zhaopinhui&c=com', 1, '0', 3, 0, 1),
(64, '招聘会场地', 12, 'index.php?m=zph_space', 1, '0', 4, 0, 0),
(65, '意见反馈', 198, 'index.php?m=admin_message', 1, '0', 1, 0, 0),
(66, '问答管理', 15, 'index.php?m=admin_question', 1, '0', 1, 0, 0),
(67, '动态管理', 198, 'index.php?m=friend_state', 1, '0', 3, 0, 0),
(68, '系统消息', 198, 'index.php?m=sysnews', 1, '0', 4, 0, 0),
(69, '测评试卷列表', 11, 'index.php?m=admin_evaluate', 1, '0', 1, 0, 0),
(70, '添加测评试卷', 11, 'index.php?m=admin_evaluate&c=examup', 1, '0', 2, 0, 0),
(71, '测评类别管理', 11, 'index.php?m=admin_evaluate&c=group', 1, '0', 3, 0, 0),
(72, '测评留言管理', 11, 'index.php?m=admin_evaluate&c=message', 1, '0', 5, 0, 0),
(73, '类别', 5, '', 0, 'nav_lb', 4, 0, 0),
(74, '商城', 3, '', 0, 'nav_shop', 0, 0, 0),
(75, '广告', 3, '', 0, 'nav_guanggao', 0, 0, 1),
(76, '兑换商品管理', 74, 'index.php?m=reward', 1, '0', 1, 0, 0),
(77, '兑换商品记录', 74, 'index.php?m=reward_list', 1, '0', 2, 0, 0),
(78, '优惠券', 166, 'index.php?m=coupon', 1, '0', 3, 0, 0),
(79, '优惠券记录', 166, 'index.php?m=coupon_list', 1, '0', 4, 0, 0),
(80, '赠送优惠券', 166, 'index.php?m=coupon&c=gift', 1, '0', 5, 0, 0),
(81, '充值卡管理', 166, 'index.php?m=admin_prepaid', 1, '0', 6, 0, 0),
(82, '商品分类', 74, 'index.php?m=redeem_class', 1, '0', 7, 0, 0),
(83, '广告管理', 75, 'index.php?m=advertise', 2, '0', 1, 0, 1),
(84, '添加广告', 75, 'index.php?m=advertise&c=ad_add', 1, '0', 2, 0, 1),
(85, '广告订单', 75, 'index.php?m=ad_order', 1, '0', 3, 0, 1),
(86, '广告类别', 75, 'index.php?m=advertise&c=class', 1, '0', 4, 0, 0),
(87, '个人会员分类', 73, 'index.php?m=userclass', 1, '0', 1, 0, 0),
(88, '城市管理', 73, 'index.php?m=admin_city', 1, '0', 2, 0, 0),
(89, '行业类别', 73, 'index.php?m=admin_industry', 1, '0', 3, 0, 0),
(91, '企业会员分类', 73, 'index.php?m=comclass', 1, '0', 5, 0, 0),
(92, '职位类别管理', 73, 'index.php?m=admin_job', 1, '0', 4, 0, 0),
(93, '兼职分类', 73, 'index.php?m=partclass', 1, '0', 6, 0, 0),
(94, '猎头会员分类', 73, 'index.php?m=ltclass', 1, '0', 7, 0, 0),
(95, '猎头行业分类', 73, 'index.php?m=lthy_class', 1, '0', 8, 0, 0),
(96, '猎头职位分类', 73, 'index.php?m=ltjob_class', 1, '0', 9, 0, 0),
(97, '问答类别', 15, 'index.php?m=question_class', 1, '0', 10, 0, 0),
(98, '举报原因管理', 73, 'index.php?m=admin_reason', 1, '0', 11, 0, 0),
(99, '课程类别', 73, 'index.php?m=subject_class', 1, '0', 12, 0, 0),
(100, '开课类型', 73, 'index.php?m=subject_type', 1, '0', 13, 0, 0),
(101, '单页面类别', 195, 'index.php?m=desc_class', 1, '0', 14, 0, 0),
(102, '管理员', 5, '', 0, 'nav_gly', 5, 0, 1),
(103, '生成', 4, '', 0, 'nav_sc', 0, 0, 0),
(104, '我的帐号', 102, 'index.php?m=admin_user&c=myuser', 2, '0', 1, 0, 1),
(105, '管理员列表', 102, 'index.php?m=admin_user', 1, '0', 2, 0, 1),
(106, '添加管理员', 102, 'index.php?m=admin_user&c=add', 1, '0', 3, 0, 1),
(107, '添加管理员类型', 102, 'index.php?m=admin_user&c=addgroup', 1, '0', 5, 0, 1),
(110, '管理员日志', 102, 'index.php?m=admin_log', 1, '0', 6, 0, 1),
(109, '会员日志', 102, 'index.php?m=admin_memberlog', 1, '0', 7, 0, 0),
(111, '添加分站管理员', 170, 'index.php?m=admin_siteadmin&c=add', 1, '0', 8, 0, 0),
(112, '管理员类型', 102, 'index.php?m=admin_user&c=group', 1, '0', 4, 0, 1),
(113, '首页生成', 103, 'index.php?m=cache&c=index', 1, '0', 1, 0, 0),
(114, '新闻首页', 103, 'index.php?m=cache&c=news', 1, '0', 2, 0, 0),
(115, '新闻类别', 103, 'index.php?m=cache&c=newsclass', 1, '0', 3, 0, 0),
(116, '新闻详细页', 103, 'index.php?m=cache&c=archive', 1, '0', 4, 0, 0),
(117, '生成缓存', 103, 'index.php?m=cache&c=cache', 1, '0', 5, 0, 0),
(118, '单页面生成', 103, 'index.php?m=cache&c=once', 1, '0', 6, 0, 0),
(119, '一键更新', 103, 'index.php?m=cache&c=all', 1, '0', 7, 0, 0),
(120, '生成XML', 103, 'index.php?m=admin_xml', 1, '0', 8, 0, 0),
(121, '设置', 5, '', 0, 'nav_set', 1, 0, 1),
(122, '微信', 4, '', 1, 'nav_weixin', 0, 0, 0),
(123, '数据', 4, '', 1, 'nav_data', 0, 0, 0),
(124, '模板', 5, '', 1, 'nav_tpl', 5, 0, 0),
(125, '微信绑定', 122, 'index.php?m=wx', 1, '0', 1, 0, 0),
(126, '微信菜单', 122, 'index.php?m=wx&c=wxnav', 1, '0', 2, 0, 0),
(127, '微信红包设置', 122, 'index.php?m=wx&c=wxredpack', 1, '0', 3, 0, 0),
(128, '登录日志', 122, 'index.php?m=wx&c=wxqrcodelog', 1, '0', 4, 0, 0),
(129, '用户绑定', 122, 'index.php?m=wx&c=binduser', 1, '0', 5, 0, 0),
(130, '搜索关键字', 122, 'index.php?m=wx&c=keyword', 1, '0', 6, 0, 0),
(131, '自动回复', 122, 'index.php?m=wx&c=zdkeyword', 1, '0', 7, 0, 0),
(132, '数据库管理', 123, 'index.php?m=database', 1, '0', 1, 0, 0),
(133, '数据采集', 123, 'index.php?m=collection', 1, '0', 2, 0, 0),
(134, '数据导入', 123, 'index.php?m=excel', 1, '0', 3, 0, 0),
(135, '数据调用', 123, 'index.php?m=datacall', 1, '0', 4, 0, 0),
(136, '切换模板', 124, 'index.php?m=admin_tpl', 1, '0', 1, 0, 0),
(137, '企业模板', 124, 'index.php?m=admin_tpl&c=comtpl', 1, '0', 2, 0, 0),
(138, '简历模板', 124, 'index.php?m=admin_tpl&c=resumetpl', 1, '0', 4, 0, 0),
(139, '修改模板', 124, 'index.php?m=admin_tpl&c=template', 1, '0', 4, 0, 0),
(140, '添加文档', 13, 'index.php?m=hr&c=add', 1, '0', 2, 0, 0),
(142, '网站设置', 121, 'index.php?m=config', 1, '0', 1, 0, 0),
(143, '模块设置', 121, 'index.php?m=model_config', 1, '0', 2, 0, 0),
(144, '页面设置', 121, 'index.php?m=web_config', 1, '0', 3, 0, 0),
(145, '导航设置', 121, 'index.php?m=navigation', 1, '0', 4, 0, 0),
(146, '邮件服务器设置', 185, 'index.php?m=emailconfig', 1, '0', 5, 0, 1),
(147, '短信设置', 186, 'index.php?m=msgconfig', 1, '0', 6, 0, 0),
(148, '支付设置', 121, 'index.php?m=payconfig', 1, '0', 7, 0, 0),
(149, 'SEO设置', 121, 'index.php?m=seo', 1, '0', 8, 0, 0),
(150, 'CRM用户同步', 121, 'index.php?m=crmsync', 1, '0', 9, 0, 0),
(151, '积分设置', 121, 'index.php?m=integral', 1, '0', 9, 0, 0),
(152, '注册设置', 121, 'index.php?m=regset', 1, '0', 10, 0, 0),
(153, '网站地图', 121, 'index.php?m=navmap', 1, '0', 11, 0, 0),
(154, '添加公告', 14, 'index.php?m=admin_announcement&c=add', 1, '0', 2, 0, 1),
(156, '店铺', 1, '', 1, 'nav_once', 6, 0, 1),
(157, '普工', 1, '', 1, 'nav_tiny', 7, 0, 1),
(158, '登录', 4, '', 1, 'nav_login', 4, 0, 0),
(159, '快捷登录', 158, 'index.php?m=qqconfig', 1, '0', 1, 0, 0),
(160, '整合论坛', 158, 'index.php?m=admin_uc', 1, '0', 2, 0, 0),
(161, '财务', 3, '', 0, 'nav_cw', 0, 0, 1),
(162, '充值订单', 161, 'index.php?m=company_order', 1, '0', 3, 0, 1),
(163, '消费记录', 161, 'index.php?m=company_pay', 2, '0', 2, 0, 1),
(164, '后台充值', 161, 'index.php?m=recharge', 1, '0', 5, 0, 1),
(165, '发票管理', 161, 'index.php?m=invoice', 1, '0', 1, 0, 1),
(166, '优惠券', 3, '', 1, 'nav_reward', 0, 0, 0),
(167, '赏金提现', 161, 'index.php?m=admin_withdraw', 1, '0', 4, 0, 0),
(168, '数据统计', 123, 'index.php?m=admin_tongji', 1, '0', 6, 0, 0),
(169, '回收站', 123, 'index.php?m=recycle', 1, '0', 7, 0, 0),
(170, '分站', 5, '', 1, 'nav_fz', 8, 0, 0),
(171, '分站设置', 170, 'index.php?m=admin_domain', 1, '0', 1, 0, 0),
(172, '分站管理', 170, 'index.php?m=admin_domain&c=alllist', 1, '0', 2, 0, 0),
(173, '添加分站', 170, 'index.php?m=admin_domain&c=AddDomain', 1, '0', 3, 0, 0),
(174, '计划任务', 121, 'index.php?m=cron', 1, '0', 11, 0, 0),
(175, '预警设置', 121, 'index.php?m=warning', 1, '0', 12, 0, 0),
(176, '举报', 3, '0', 1, 'nav_jb', 6, 0, 1),
(177, '营销', 3, '0', 1, 'nav_yx', 7, 0, 1),
(178, '被举报职位', 176, 'index.php?m=report', 1, '0', 1, 0, 1),
(179, '被举报简历', 176, 'index.php?m=report&ut=2', 1, '0', 2, 0, 1),
(180, '被举报问答', 176, 'index.php?m=report&type=1', 1, '0', 3, 0, 1),
(181, '被投诉顾问', 176, 'index.php?m=report&type=2', 1, '0', 5, 0, 1),
(182, '推广营稍', 177, 'index.php?m=email', 1, '0', 1, 0, 1),
(183, '订阅管理', 177, 'index.php?m=subscribe', 1, '0', 2, 0, 0),
(184, '账号申诉', 176, 'index.php?m=admin_appeal', 1, '0', 4, 0, 0),
(185, '邮件', 4, '', 1, 'nav_email', 6, 0, 0),
(186, '短信', 4, '', 1, 'nav_msg', 7, 0, 0),
(187, '短信模板设置', 186, 'index.php?m=msgconfig&c=tpl', 1, '0', 2, 0, 0),
(188, '短信发送记录', 186, 'index.php?m=msgconfiglist', 1, '0', 3, 0, 0),
(189, '邮件模板设置', 185, 'index.php?m=emailconfig&c=tpl', 1, '0', 2, 0, 0),
(190, '邮件发送记录', 185, 'index.php?m=emailconfiglist', 1, '0', 3, 0, 0),
(191, '普工设置', 157, 'index.php?m=admin_once&c=set', 1, '0', 5, 0, 0),
(192, '店铺设置', 156, 'index.php?m=admin_tiny&c=set', 1, '2', 5, 0, 0),
(193, '关键字管理', 121, 'index.php?m=admin_keyword', 1, '', 11, 0, 0),
(194, '友情链接', 121, 'index.php?m=link', 1, '', 12, 0, 1),
(195, '单页面', 5, '', 1, 'nav_desc', 7, 0, 0),
(196, '单页面管理', 195, 'index.php?m=description', 1, '0', 0, 0, 0),
(198, '信息', 5, '', 1, 'nav_xx', 9, 0, 0),
(199, '微信红包记录', 122, 'index.php?m=wx&c=wxlog', 1, '0', 4, 0, 0),
(200, '添加单页面', 195, 'index.php?m=description&c=add', 1, '0', 3, 0, 0),
(201, '首页模板主题', 124, 'index.php?m=admin_tpl_index', 1, '0', 6, 0, 0),
(202, '手机模板装修', 124, 'index.php?m=admin_tpl_moblies', 1, '0', 7, 0, 0),
(203, '分站管理员列表', 170, 'index.php?m=admin_siteadmin', 1, '0', 10, 0, 0),
(204, '新闻属性', 10, 'index.php?m=admin_news&c=type', 1, '0', 5, 0, 0),
(205, '收支统计', 161, 'index.php?m=statis', 1, '0', 6, 0, 1),
(206, '添加商品', 74, 'index.php?m=reward&c=add', 1, '0', 3, 0, 0),
(343, '专题', 3, '', 1, 'nav_sp', 4, 0, 0),
(344, '添加专题', 343, 'index.php?m=special&c=add', 1, '0', 2, 0, 0),
(208, '收入渠道统计', 161, 'index.php?m=statis_income', 1, '0', 7, 0, 0),
(209, '消费用户统计', 161, 'index.php?m=statis_user', 1, '0', 8, 0, 0),
(210, '消费地区统计', 161, 'index.php?m=statis_city', 1, '0', 9, 0, 0),
(211, '消费行业统计', 161, 'index.php?m=statis_hy', 1, '0', 10, 0, 0),
(212, 'CRM业务管理', 0, '', 0, '0', 6, 0, 0),
(213, '管理员', 212, '', 0, 'nav_gly', 1, 0, 0),
(214, '业务员', 212, '', 0, 'nav_user', 2, 0, 0),
(215, '业务员管理', 213, 'index.php?m=crm_salesman_list', 1, '', 1, 0, 0),
(216, '查账助手', 213, 'index.php?m=crm_audit', 1, '', 2, 0, 0),
(219, '我的客户', 214, 'index.php?m=crm_customer', 1, '', 1, 0, 0),
(220, '新增客户', 214, 'index.php?m=crm_customer&c=add', 1, '', 2, 0, 0),
(221, '我的业绩', 214, 'index.php?m=crm_my_performance', 1, '', 3, 0, 0),
(217, '关怀记录', 213, 'index.php?m=crm_concern&c=list', 1, '', 3, 0, 0),
(222, '我的关怀记录', 214, 'index.php?m=crm_concern', 1, '', 4, 0, 0),
(218, '业务统计', 213, 'index.php?m=crm_statis', 1, '', 4, 0, 0),
(337, '校园类别管理', 73, 'index.php?m=schoolclass', 1, '0', 4, 0, 0),
(341, '应届生职位管理', 339, 'index.php?m=admin_school_graduate', 1, '0', 0, 0, 0),
(339, '校园', 1, '', 1, 'nav_school', 8, 0, 0),
(340, '院校管理', 339, 'index.php?m=admin_school_academy', 1, '0', 0, 0, 0),
(342, '宣讲会', 339, 'index.php?m=admin_school_xjh', 1, '0', 0, 0, 0),
(345, '图片管理', 6, 'index.php?m=admin_company_pic', 1, '', 10, 0, 0),
(346, '图片管理', 7, 'index.php?m=admin_user_pic', 1, '', 7, 0, 0),
(347, '图片管理', 8, 'index.php?m=admin_lt_pic', 1, '', 6, 0, 0),
(348, '图片管理', 9, 'index.php?m=admin_px_pic', 1, '', 6, 0, 0),
(349, '简历库', 8, 'index.php?m=lt_talent', 1, '', 9, 0, 0),
(350, '聊天', 4, '', 0, 'nav_chat', 3, 0, 0),
(351, '聊天设置', 350, 'index.php?m=admin_chat_config', 1, '', 5, 0, 0),
(352, '聊天记录', 350, 'index.php?m=admin_chat_log', 1, '', 6, 0, 0),
(353, '被投诉宣讲会', 176, 'index.php?m=report&type=3', 1, '', 6, 0, 0),
(354, '分站管理员类型', 170, 'index.php?m=admin_siteadmin&c=group', 1, '0', 6, 0, 0),
(359, '问答设置', 15, 'index.php?m=admin_question&c=config', 1, '0', 3, 0, 1),
(361, '测评用户记录', 11, 'index.php?m=admin_evaluate&c=record', 1, '', 6, 0, 0),
(362, '添加广告类别', 75, 'index.php?m=advertise&c=addclass', 1, '', 5, 0, 0),
(367, '用户行为', 177, 'index.php?m=admin_event_log', 1, '', 3, 0, 0),
(376, '整合马甲', 158, 'index.php?m=admin_mag', 1, '', 3, 0, 0),
(377, '整合千帆云', 158, 'index.php?m=statis_elog', 1, '', 4, 0, 0),
(378, '访问统计', 177, 'index.php?m=statis_elog', 1, '', 4, 0, 0),
(379, '反馈提醒', 177, 'index.php?m=admin_elog_fk', 1, '', 5, 0, 0),
(380, '微信小程序设置', 122, 'index.php?m=wx&c=xcx', 1, '', 9, 0, 0),
(381, '海报配置', 177, 'index.php?m=admin_haibao', 1, '', 6, 0, 0)");


$group = $db->DB_select_once("admin_user_group","1 order by id asc");

$db->query('UPDATE `' . $db_config[def] . 'admin_user_group` SET `group_power`=\'a:241:{i:0;s:3:"212";i:1;s:3:"214";i:2;s:3:"222";i:3;s:3:"221";i:4;s:3:"220";i:5;s:3:"219";i:6;s:3:"213";i:7;s:3:"218";i:8;s:3:"217";i:9;s:3:"216";i:10;s:3:"215";i:11;s:1:"5";i:12;s:3:"198";i:13;s:2:"68";i:14;s:2:"67";i:15;s:2:"65";i:16;s:3:"170";i:17;s:3:"203";i:18;s:3:"111";i:19;s:3:"354";i:20;s:3:"173";i:21;s:3:"172";i:22;s:3:"171";i:23;s:3:"195";i:24;s:3:"101";i:25;s:3:"200";i:26;s:3:"196";i:27;s:3:"124";i:28;s:3:"202";i:29;s:3:"201";i:30;s:3:"138";i:31;s:3:"139";i:32;s:3:"137";i:33;s:3:"136";i:34;s:3:"102";i:35;s:3:"109";i:36;s:3:"110";i:37;s:3:"107";i:38;s:3:"112";i:39;s:3:"106";i:40;s:3:"105";i:41;s:3:"104";i:42;s:2:"73";i:43;s:3:"100";i:44;s:2:"99";i:45;s:2:"98";i:46;s:2:"96";i:47;s:2:"95";i:48;s:2:"94";i:49;s:2:"93";i:50;s:2:"91";i:51;s:2:"92";i:52;s:3:"337";i:53;s:2:"89";i:54;s:2:"88";i:55;s:2:"87";i:56;s:3:"121";i:57;s:3:"194";i:58;s:3:"175";i:59;s:3:"174";i:60;s:3:"193";i:61;s:3:"153";i:62;s:3:"152";i:63;s:3:"150";i:64;s:3:"151";i:65;s:3:"149";i:66;s:3:"148";i:67;s:3:"145";i:68;s:3:"144";i:69;s:3:"143";i:70;s:3:"142";i:71;s:1:"4";i:72;s:3:"186";i:73;s:3:"147";i:74;s:3:"188";i:75;s:3:"187";i:76;s:3:"185";i:77;s:3:"146";i:78;s:3:"190";i:79;s:3:"189";i:80;s:3:"158";i:81;s:3:"160";i:82;s:3:"159";i:83;s:3:"350";i:84;s:3:"352";i:85;s:3:"351";i:86;s:3:"123";i:87;s:3:"169";i:88;s:3:"168";i:89;s:3:"135";i:90;s:3:"134";i:91;s:3:"133";i:92;s:3:"132";i:93;s:3:"122";i:94;s:3:"380";i:95;s:3:"197";i:96;s:3:"131";i:97;s:3:"130";i:98;s:3:"129";i:99;s:3:"199";i:100;s:3:"128";i:101;s:3:"127";i:102;s:3:"126";i:103;s:3:"125";i:104;s:3:"103";i:105;s:3:"120";i:106;s:3:"119";i:107;s:3:"118";i:108;s:3:"117";i:109;s:3:"116";i:110;s:3:"115";i:111;s:3:"114";i:112;s:3:"113";i:113;s:1:"3";i:114;s:3:"177";i:115;s:3:"381";i:116;s:3:"379";i:117;s:3:"378";i:118;s:3:"367";i:119;s:3:"183";i:120;s:3:"182";i:121;s:3:"176";i:122;s:3:"353";i:123;s:3:"181";i:124;s:3:"184";i:125;s:3:"180";i:126;s:3:"179";i:127;s:3:"178";i:128;s:3:"343";i:129;s:3:"344";i:130;s:2:"49";i:131;s:3:"166";i:132;s:2:"81";i:133;s:2:"80";i:134;s:2:"79";i:135;s:2:"78";i:136;s:2:"75";i:137;s:3:"362";i:138;s:2:"86";i:139;s:2:"85";i:140;s:2:"84";i:141;s:2:"83";i:142;s:3:"161";i:143;s:3:"211";i:144;s:3:"210";i:145;s:3:"209";i:146;s:3:"208";i:147;s:3:"205";i:148;s:3:"164";i:149;s:3:"167";i:150;s:3:"162";i:151;s:3:"163";i:152;s:3:"165";i:153;s:2:"74";i:154;s:2:"82";i:155;s:3:"206";i:156;s:2:"77";i:157;s:2:"76";i:158;s:1:"2";i:159;s:2:"15";i:160;s:2:"97";i:161;s:3:"359";i:162;s:2:"66";i:163;s:2:"14";i:164;s:3:"154";i:165;s:2:"59";i:166;s:2:"13";i:167;s:2:"58";i:168;s:3:"140";i:169;s:2:"57";i:170;s:2:"12";i:171;s:2:"64";i:172;s:2:"63";i:173;s:2:"62";i:174;s:2:"61";i:175;s:2:"11";i:176;s:3:"361";i:177;s:2:"72";i:178;s:2:"71";i:179;s:2:"70";i:180;s:2:"69";i:181;s:2:"10";i:182;s:3:"204";i:183;s:2:"56";i:184;s:2:"55";i:185;s:2:"54";i:186;s:1:"1";i:187;s:3:"339";i:188;s:3:"341";i:189;s:3:"342";i:190;s:3:"340";i:191;s:3:"157";i:192;s:3:"191";i:193;s:2:"36";i:194;s:3:"156";i:195;s:3:"192";i:196;s:2:"48";i:197;s:1:"9";i:198;s:2:"32";i:199;s:2:"31";i:200;s:3:"348";i:201;s:2:"30";i:202;s:2:"29";i:203;s:2:"28";i:204;s:2:"27";i:205;s:2:"26";i:206;s:2:"25";i:207;s:1:"8";i:208;s:3:"349";i:209;s:2:"24";i:210;s:2:"23";i:211;s:3:"347";i:212;s:2:"22";i:213;s:2:"21";i:214;s:2:"20";i:215;s:2:"19";i:216;s:2:"18";i:217;s:1:"7";i:218;s:2:"39";i:219;s:3:"346";i:220;s:2:"38";i:221;s:2:"37";i:222;s:2:"35";i:223;s:2:"34";i:224;s:2:"33";i:225;s:2:"17";i:226;s:1:"6";i:227;s:2:"53";i:228;s:2:"52";i:229;s:2:"51";i:230;s:2:"50";i:231;s:3:"345";i:232;s:2:"47";i:233;s:2:"46";i:234;s:2:"45";i:235;s:2:"44";i:236;s:2:"43";i:237;s:2:"42";i:238;s:2:"41";i:239;s:2:"40";i:240;s:2:"16";}\'',"`id`='".$group['id']."'");


if(!$config['sy_zph_icon']){

	$db->query("INSERT INTO `$db_config[def]admin_config` SET `name`='sy_zph_icon',`config`='data/logo/20170418/15554505938.png'");
	$config['sy_zph_icon'] = 'data/logo/20170418/15554505938.png';

}
if(!$config['sy_zphbanner_icon']){

	$db->query("INSERT INTO `$db_config[def]admin_config` SET `name`='sy_zphbanner_icon',`config`='data/logo/20170418/15539599776.png'");
	$config['sy_zphbanner_icon'] = 'data/logo/20170418/15539599776.png';

}if(!$config['sy_cplogo']){

	$db->query("INSERT INTO `$db_config[def]admin_config` SET `name`='sy_cplogo',`config`='data/logo/20170418/15559380893.png'");
	$config['sy_cplogo'] = 'data/logo/20170418/15559380893.png';

}
if(!$config['paypack_max_recharge']){

	$db->query("INSERT INTO `$db_config[def]admin_config` SET `name`='paypack_max_recharge',`config`='1'");
	$config['paypack_max_recharge'] = '1';

}
if(!$config['sy_reg_invite']){

	$db->query("INSERT INTO `$db_config[def]admin_config` SET `name`='sy_reg_invite',`config`='5'");
	$config['sy_reg_invite'] = '5';

}
if(!$config['com_logo_status']){

	$db->query("INSERT INTO `$db_config[def]admin_config` SET `name`='com_logo_status',`config`='2'");
	$config['com_logo_status'] = '2';

}
if(!$config['sy_com_invoice_money']){

	$db->query("INSERT INTO `$db_config[def]admin_config` SET `name`='sy_com_invoice_money',`config`='100'");
	$config['sy_com_invoice_money'] = '100';

}
if(!$config['user_photo_status']){

	$db->query("INSERT INTO `$db_config[def]admin_config` SET `name`='user_photo_status',`config`='2'");
	$config['user_photo_status'] = '2';

}
if(!$config['packprice_min_recharge']){

	$db->query("INSERT INTO `$db_config[def]admin_config` SET `name`='packprice_min_recharge',`config`='10'");
	$config['packprice_min_recharge'] = '10';

}
if(!$config['sy_once_icon']){

	$db->query("INSERT INTO `$db_config[def]admin_config` SET `name`='sy_once_icon',`config`='data/logo/20170418/15495075889.png'");
	$config['sy_once_icon'] = 'data/logo/20170418/15495075889.png';

}
made_web(PLUS_PATH.'config.php',ArrayToString($config),'config');

$db->query("INSERT INTO `$db_config[def]ad` SET `ad_name`='首页名企左侧banner',`time_start`='2018-01-01',`time_end`='2020-01-01',`ad_type`='pic',`pic_url`='../data/upload/pimg/20170418/15604592383.png',`class_id`='91',`is_check`='1',`is_open`='1',`target`='2'");


echo "<script>location.href='$config[sy_weburl]/update/index.php?step=3';</script>";
}


/****************************第三步：清空缓存************************************/
if($_GET[step]=="3"){
	$delfiles="data/templates_c";
	$dh=@opendir($delfiles);
	while($file=@readdir($dh)){
		if($file!="."&&$file!=".."){
			$fullpath=$delfiles."/".$file;
			@unlink($fullpath);
		}
	}
	@closedir($dh);
	echo "<script>location.href='$config[sy_weburl]/update/index.php?step=4';</script>";
}
/****************************第四步：升级完成************************************/
if($_GET[step]=="4"){
	echo "数据库升级成功！请删除/update/ 目录 根据以下提示继续操作！";
	echo "<pre>";
	echo "1：进入后台 系统-设置-网站LOGO 设置修改相关新增默认图选项";
	echo "<pre>";
	echo "2：进入后台 工具-生成-生成缓存";
	echo "<pre>";
	echo "3：进入后台 会员-企业/个人设置-设置相关新增选项";
	echo "<pre>";
	echo "4：进入后台 清除缓存";
	echo "<pre>";
	echo "5：其他各项配置按需修改";
	echo "<pre>";
}

?>