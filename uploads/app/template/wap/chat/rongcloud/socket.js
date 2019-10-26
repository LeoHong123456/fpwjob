layui.define(['jquery', 'layer', 'mobile'], function (exports) {
	var mobile = layui.mobile ,layim = mobile.layim; 
    var lib = RongIMLib;
    var $ = layui.jquery;
    var layer = mobile.layer;
	var cachedata = layim.cache();  

    var conf = {
        uid: 0, //连接的用户id，必须传
        key: '', //融云key
        layim: null,
        token: null,
    };

    var socket = {
        config: function (options) {
            conf = $.extend(conf, options); //把layim继承出去，方便在register中使用
            this.register();
            im.init(options.key);
            im.connectWithToken(options.token);
        },
        register: function () {
            var layim = conf.layim;
            if (layim) {
                //监听在线状态的切换事件
                layim.on('online', function (data) {
                    console.log('在线状态'+data);
                });
                //监听签名修改
                layim.on('sign', function (value) {
                    $.post(wapurl+"index.php?c=chat&a=saveSign", {sign: value}, function (data) {
                       
                    });
                });
                //监听layim建立就绪
                layim.on('ready', function (res) {
					//企业用户，检查是否有因未下载简历被拦截的消息
					if(cachedata.mine.usertype==2){
						$.post(wapurl+'index.php?c=chat&a=getcache', {rand: Math.random()}, function (data) {});
					}
					if(chatplace!=""){
						setTimeout(function() {
							$(".layim-title").hide();
						},100);
					}
                });
				layim.on('chatChange', function (res) {
                    var type = res.data.type;
                    if (type === 'friend') {
                        //模拟标注好友状态
                        im.userStatus({
                            id: res.data.id
                        });
                    } else if (type === 'group') {

                    }
                });
                layim.on('sendMessage', function (data) { //监听发送消息
					$.post(wapurl+"index.php?c=chat&a=isdown", {send: data.mine.id, to: data.to.id ,timestamp: Date.now()}, function (res) {
						var res = eval('(' + res + ')');
						//已下载简历或者是个人向企业发送
						if(res.code==1 || res.code==3){
							im.sendMsg(data);
						}else if(res.code==2){
							layer.open({
								content: '未下载其简历，无法聊天！'
								,skin: 'msg'
								,time: 2 
							});
							$(".layim-chat-main").find(".layim-chat-mine").remove();
							var local = layui.data('layim-mobile')[data.mine.id] || {};
							if(local.chatlog[data.to.type+data.to.id]){
								var chatlog = local.chatlog[data.to.type+data.to.id];
								chatlog.pop();
								local.chatlog[data.to.type+data.to.id] = chatlog;
							}
							layui.data('layim-mobile', {
								key: data.mine.id
								,value: local
							});
						}else if(res.code==4){
							layer.open({
								content: '聊天功能离线，请重新登录'
								,btn: ['确定','取消']
								,yes: function(index){
								  location.href = wapurl+'index.php?c=login';
								}
							});
						}
                    });
                });
            }
        },
    };

    var im = {
        init: function (key) { //初始化融云key
            lib.RongIMClient.init(key);
            this.initListener();    //初始化事件监听
            this.defineMessage();   //初始化自定义消息类型
        },
        initListener: function () { //初始化监听
            RongIMClient.setConnectionStatusListener({//连接监听事件
                onChanged: function (status) {
                    switch (status) {
                        case lib.ConnectionStatus.CONNECTED: //链接成功
                            break;
                        case lib.ConnectionStatus.CONNECTING: //正在链接
                            break;
                        case lib.ConnectionStatus.DISCONNECTED: //断开链接
                            break;
                        case lib.ConnectionStatus.KICKED_OFFLINE_BY_OTHER_CLIENT://其他设备登录
							$.post(wapurl+"index.php?c=chat&a=resource",{resource: cachedata.mine.resource},function(data){
								var res = eval('(' + data + ')');
								if(res.code!=1){
									layer.open({
										content: '聊天功能只支持同一浏览器登录'
										,btn: ['返回首页']
										,yes: function(index){
										  location.href= wapurl;
										}
									});
								}else{
									location.href= wapurl;
								}
							});
                            break;
                        case lib.ConnectionStatus.NETWORK_UNAVAILABLE: //网络不可用
                            break;
                    }
                }});

            RongIMClient.setOnReceiveMessageListener({// 消息监听器
                onReceived: function (message) { // 接收到的消息
                    switch (message.messageType) { // 判断消息类型
                        case RongIMClient.MessageType.LAYIM_TEXT_MESSAGE:
                            var msg = message.content,
								chatUserId = 'phpyun' + cachedata.mine.id;
								//收到的人不是发信息的人
							if(chatUserId != msg.id){
								//只有收件人是企业。发件人是个人才需要判断是否拦截
								if(msg.usertype==1 && conf.chat_type=='2'){
									$.post(wapurl+"index.php?c=chat&a=getdown",{id: msg.id},function(data){
										var res = eval('(' + data + ')');
										if (res.code == 1){
											$.post(wapurl+"index.php?c=chat&a=savecache",{id: msg.id,content: msg.content},function(data){})
											if(res.cache!=1){
												msg.content='求职者向您发送了信息，下载其简历'+ res.href +'后才能查看！';
												conf.layim.getMessage(msg);
											}
										}else{
											conf.layim.getMessage(msg);
											$.post(wapurl+"index.php?c=chat&a=setMsgStatus",{id: msg.id},function(data){})
										}
									})
								}else{
									conf.layim.getMessage(msg);
									$.post(wapurl+"index.php?c=chat&a=setMsgStatus",{id: msg.id},function(data){})
								}
							}	
                            break;
						case RongIMClient.MessageType.TextMessage:
							$.get(wapurl+"index.php?c=chat&a=getUser", {username:message.senderUserId}, function (data) {
								 var res_data = eval('(' + data + ')');
								 if (res_data.code == 0) {
									 var username = res_data.data.nickname?res_data.data.nickname:'佚名', avatar = res_data.data.avatar; 
									 var data = {
										 mine: false
										 ,cid: 0
										 ,username:username
										 ,avatar:avatar
										 ,content:message.content.content
										 ,id:message.senderUserId
										 ,fromid: message.senderUserId
										 ,timestamp:message.receivedTime
										 ,type:'friend'
									 };
									 var chatUserId = 'phpyun' + cachedata.mine.id;
									 if(chatUserId != message.senderUserId){
										 conf.layim.getMessage(data);
										 $.post(wapurl+"index.php?c=chat&a=setMsgStatus",{id: message.content.id,timestamp:message.content.timestamp},function(data){})
										 if (message.content.content.indexOf('您好！') !== -1){
											 setTimeout(function(){
												 $("#layui-layim-min").parent().find('span').click();
											 },1500);
										 }
									 }
								 }
							 });
							break;
                    }
                }
            });
        },
        connectWithToken: function (token) {    //连接事件
            RongIMClient.connect(token, {
                onSuccess: function (userId) {
                    //console.log("Login successfully." + userId);
                },
                onTokenIncorrect: function () {
                    console.log('token无效');
                },
                onError: function (errorCode) {
                    console.log('发送失败:' + errorCode);
                }
            });
        },
        //融云自定义消息，把消息格式定义为layim的消息类型
        defineMessage: function () {
            var defineMsg = function (obj) {
                RongIMClient.registerMessageType(obj.msgName, obj.objName, obj.msgTag, obj.msgProperties);
            }
            //注册普通消息
            var textMsg = {
                msgName: 'LAYIM_TEXT_MESSAGE',
                objName: 'LAYIM:CHAT',
                msgTag: new lib.MessageTag(false, false),
                msgProperties: ["username", "avatar", "id", "type", "content", "usertype"]
            };
            //注册
            //console.log('注册用户自定义消息类型：LAYIM_TEXT_MESSAGE');
            defineMsg(textMsg);

        },
        sendMsg: function (data) {  //根据layim提供的data数据，进行解析
            var mine = data.mine;
            var to = data.to;
            var id = mine.id;   //当前用户id
            var group = to.type == 'group';
            if (group) {
                id = to.id;     //如果是group类型，id就是当前groupid，切记不可写成 mine.id否则会出现一些问题。
            }
            //构造消息
            var msg = {
                username: mine.username
                , avatar: mine.avatar
                , id: 'phpyun'+id    //与环信的formid相统一
                , type: to.type
                , content: mine.content
				, usertype: mine.usertype
            };
            //这里要判断消息类型
            var conversationType = group ? lib.ConversationType.GROUP : lib.ConversationType.PRIVATE; //私聊,其他会话选择相应的消息类型即可。
            var targetId = to.id.toString();        //这里的targetId必须是string类型，否则会报错
            //构造消息体，这里就是我们刚才已经注册过的自定义消息
            //console.log(msg);
            var detail = new RongIMClient.RegisterMessage.LAYIM_TEXT_MESSAGE(msg);
            //发送消息
            RongIMClient.getInstance().sendMessage(conversationType, targetId, detail, {
                onSuccess: function (message) {
					$.get(wapurl+"index.php?c=chat&a=chatLog", {to:to.id,content:data.mine.content,timestamp:Date.now(),type:data.to.type}, function (res) {
						/*
                        var data = eval('(' + res + ')');
                        if (data.code != 0) {
                            console.log('message record fail');                       
                        }
						*/
                    });
                },
                onError: function (errorCode, message) { //发送失败移除发送消息并提示发送失败
					var local = layui.data('layim')[data.mine.id] || {};
					if(local.chatlog[data.to.type+data.to.id]){
						var chatlog = local.chatlog[data.to.type+data.to.id];
						chatlog.pop();
						local.chatlog[data.to.type+data.to.id] = chatlog;
					}
					layui.data('layim', {
						key: data.mine.id
						,value: local
					});  
					layer.alert('发送失败，请刷新页面', {
                      skin: 'layui-layer-molv' //样式类名
                      ,closeBtn: 0
                    }, function(){
                        window.location.reload(true);
                    });
                }
            });
        },
		//好友是否在线
        userStatus: function(data){
            if (data.id) {
                $.get(wapurl+"index.php?c=chat&a=userStatus", {id:data.id}, function (res) {
                    var data = eval('(' + res + ')');
                    if (data.code == 0) {  
                        if (data.data == 'online') {
                            conf.layim.setChatStatus('(在线)');
                        }else{
                            conf.layim.setChatStatus('(离线)');
                        }                                          
                    }else{
                        //没有该用户
						conf.layim.setChatStatus('(离线)');
                    }
                });                 
            }
        }       
    };


    exports('socket', socket);
});