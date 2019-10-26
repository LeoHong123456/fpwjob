<?php

include 'rongcloud.php';
$appKey = 'appKey';
$appSecret = 'appSecret';
$jsonPath = "jsonsource/";
$RongCloud = new RongCloud($appKey,$appSecret);


	echo ("\n***************** user **************\n");
	
	$result = $RongCloud->user()->getToken('userId1', 'username', 'http://www.rongcloud.cn/images/logo.png');
	echo "getToken    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->user()->refresh('userId1', 'username', 'http://www.rongcloud.cn/images/logo.png');
	echo "refresh    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->user()->checkOnline('userId1');
	echo "checkOnline    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->user()->block('userId4', '10');
	echo "block    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->user()->unBlock('userId2');
	echo "unBlock    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->user()->queryBlock();
	echo "queryBlock    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->user()->addBlacklist('userId1', 'userId2');
	echo "addBlacklist    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->user()->queryBlacklist('userId1');
	echo "queryBlacklist    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->user()->removeBlacklist('userId1', 'userId2');
	echo "removeBlacklist    ";
	print_r($result);
	echo "\n";
	

	echo ("\n***************** message **************\n");
	
	$result = $RongCloud->message()->publishPrivate('userId1', ["userId2","userid3","userId4"], 'RC:VcMsg',"{\"content\":\"hello\",\"extra\":\"helloExtra\",\"duration\":20}", 'thisisapush', '{\"pushData\":\"hello\"}', '4', '0', '0', '0', '0');
	echo "publishPrivate    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->message()->publishTemplate(file_get_contents($jsonPath.'TemplateMessage.json'));
	echo "publishTemplate    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->message()->PublishSystem('userId1', ["userId2","userid3","userId4"], 'RC:TxtMsg',"{\"content\":\"hello\",\"extra\":\"helloExtra\"}", 'thisisapush', '{\"pushData\":\"hello\"}', '0', '0');
	echo "PublishSystem    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->message()->publishSystemTemplate(file_get_contents($jsonPath.'TemplateMessage.json'));
	echo "publishSystemTemplate    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->message()->publishGroup('userId', ["groupId1","groupId2","groupId3"], 'RC:TxtMsg',"{\"content\":\"hello\",\"extra\":\"helloExtra\"}", 'thisisapush', '{\"pushData\":\"hello\"}', '1', '1', '0');
	echo "publishGroup    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->message()->publishDiscussion('userId1', 'discussionId1', 'RC:TxtMsg',"{\"content\":\"hello\",\"extra\":\"helloExtra\"}", 'thisisapush', '{\"pushData\":\"hello\"}', '1', '1', '0');
	echo "publishDiscussion    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->message()->publishChatroom('userId1', ["ChatroomId1","ChatroomId2","ChatroomId3"], 'RC:TxtMsg',"{\"content\":\"hello\",\"extra\":\"helloExtra\"}");
	echo "publishChatroom    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->message()->broadcast('userId1', 'RC:TxtMsg',"{\"content\":\"哈哈\",\"extra\":\"hello ex\"}", 'thisisapush', '{\"pushData\":\"hello\"}', 'iOS');
	echo "broadcast    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->message()->getHistory('2014010101');
	echo "getHistory    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->message()->deleteMessage('2014010101');
	echo "deleteMessage    ";
	print_r($result);
	echo "\n";
	

	echo ("\n***************** wordfilter **************\n");
	
	$result = $RongCloud->wordfilter()->add('money');
	echo "add    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->wordfilter()->getList();
	echo "getList    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->wordfilter()->delete('money');
	echo "delete    ";
	print_r($result);
	echo "\n";
	

	echo ("\n***************** group **************\n");
	
	$result = $RongCloud->group()->create(["userId1","userid2","userId3"], 'groupId1', 'groupName1');
	echo "create    ";
	print_r($result);
	echo "\n";
	
	
	$groupInfo['gourid1'] = 'gourpName1';
	$groupInfo['gourid2'] = 'gourpName2';
	$groupInfo['gourid3'] = 'gourpName3';
	$result = $RongCloud->group()->sync('userId1', $groupInfo);
	echo "sync    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->group()->refresh('groupId1', 'newGroupName');
	echo "refresh    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->group()->join(["userId2","userid3","userId4"], 'groupId1', 'TestGroup');
	echo "join    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->group()->queryUser('groupId1');
	echo "queryUser    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->group()->quit(["userId2","userid3","userId4"], 'TestGroup');
	echo "quit    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->group()->addGagUser('userId1', 'groupId1', '1');
	echo "addGagUser    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->group()->lisGagUser('groupId1');
	echo "lisGagUser    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->group()->rollBackGagUser(["userId2","userid3","userId4"], 'groupId1');
	echo "rollBackGagUser    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->group()->dismiss('userId1', 'groupId1');
	echo "dismiss    ";
	print_r($result);
	echo "\n";
	

	echo ("\n***************** chatroom **************\n");
	
	$chatRoomInfo['chatroomId1'] = 'chatroomInfo1';
	$chatRoomInfo['chatroomId2'] = 'chatroomInfo2';
	$chatRoomInfo['chatroomId3'] = 'chatroomInfo3';
	$result = $RongCloud->chatroom()->create($chatRoomInfo);
	echo "create    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->join(["userId2","userid3","userId4"], 'chatroomId1');
	echo "join    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->query(["chatroomId1","chatroomId2","chatroomId3"]);
	echo "query    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->queryUser('chatroomId1', '500', '2');
	echo "queryUser    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->stopDistributionMessage('chatroomId1');
	echo "stopDistributionMessage    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->resumeDistributionMessage('chatroomId1');
	echo "resumeDistributionMessage    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->addGagUser('userId1', 'chatroomId1', '1');
	echo "addGagUser    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->ListGagUser('chatroomId1');
	echo "ListGagUser    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->rollbackGagUser('userId1', 'chatroomId1');
	echo "rollbackGagUser    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->addBlockUser('userId1', 'chatroomId1', '1');
	echo "addBlockUser    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->getListBlockUser('chatroomId1');
	echo "getListBlockUser    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->rollbackBlockUser('userId1', 'chatroomId1');
	echo "rollbackBlockUser    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->addPriority(["RC:VcMsg","RC:ImgTextMsg","RC:ImgMsg"]);
	echo "addPriority    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->destroy(["chatroomId","chatroomId1","chatroomId2"]);
	echo "destroy    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->chatroom()->addWhiteListUser('chatroomId', ["userId1","userId2","userId3","userId4","userId5"]);
	echo "addWhiteListUser    ";
	print_r($result);
	echo "\n";
	

	echo ("\n***************** push **************\n");
	
	$result = $RongCloud->push()->setUserPushTag(file_get_contents($jsonPath.'UserTag.json'));
	echo "setUserPushTag    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->push()->broadcastPush(file_get_contents($jsonPath.'PushMessage.json'));
	echo "broadcastPush    ";
	print_r($result);
	echo "\n";
	

	echo ("\n***************** SMS **************\n");
	
	$result = $RongCloud->SMS()->getImageCode('app-key');
	echo "getImageCode    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->SMS()->sendCode('13500000000', 'dsfdsfd', '86', '1408706337', '1408706337');
	echo "sendCode    ";
	print_r($result);
	echo "\n";
	
	
	$result = $RongCloud->SMS()->verifyCode('2312312', '2312312');
	echo "verifyCode    ";
	print_r($result);
	echo "\n";
	
?>
