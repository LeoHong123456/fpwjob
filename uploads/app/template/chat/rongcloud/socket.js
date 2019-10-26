layui.define(['jquery', 'layer'], function (exports) {
    var lib = RongIMLib;
    var $ = layui.jquery;
    var layer = layui.layer;
	var cachedata =  layui.layim.cache();  
    var conf = {
        uid: 0, 
        key: '',
        layim: null,
        token: null,
    };

    var socket = {
        config: function (options) {
            conf = $.extend(conf, options);
            this.register();
            im.init(options.key);
            im.connectWithToken(options.token);
        },
        register: function () {
			
			var connection = $("#chat_connection").val();
			if(connection!=2){
				var layim = conf.layim;
				if (layim) {
					
					layim.on('sign', function (value) {
						$.post(weburl+'/index.php?m=chat&c=saveSign', {sign: value}, function (data) {});
					});
					
					layim.on('ready', function (res) {
						$("#chatready").val(1);
						
						if(cachedata.mine.usertype==2){
							$.post(weburl+'/index.php?m=chat&c=getcache', {rand: Math.random()}, function (data) {});
						}
					});
					layim.on('chatChange', function (res) {
						var type = res.data.type;
						if (type === 'friend') {
							
							im.userStatus({
								id: res.data.id
							});
						} else if (type === 'group') {

						}
					});
					$('body').on('click', '.layui-layim-user', function () {
						var information = $("#chat_information").val();
						if(information == 1){
							$("#chat_information").val(2);
							im.getInformation({
								id: cachedata.mine.id,
								type:'friend'
							}); 
						}
					}); 
					layim.on('sendMessage', function (data) { 
						var connection = $("#chat_connection").val();
						if(connection==1){
							var cansend = 1;
							if(cachedata.local.chatlog['friend' + data.to.id]){
								var thisChatlog = cachedata.local.chatlog['friend' + data.to.id];
								if(thisChatlog.length > 20){
									thisChatlog.shift();
								}
							}
							if(thisChatlog){
								var message={};
								message.timestamp =  new Date().getTime();
								message.id = data.to.id;
								message.content = data.mine.content;
								message.fromid = data.to.id;
								var nosame;
								layui.each(thisChatlog, function(index, item){
									if(item.type === message.type && item.id === message.id && item.content === message.content){
										if(Math.abs(parseInt(item.timestamp)-parseInt(message.timestamp))<1000 || Math.abs(parseInt(message.timestamp)-parseInt(item.timestamp))<1000){
											nosame = true;
										}
									}
								  });
								if(!(nosame || message.fromid == cachedata.mine.id)){
									thisChatlog.push(message);
									cachedata.local.chatlog['friend' + data.to.id]= thisChatlog;
									cansend =2;	
								}
							}else{
								cansend =2;	
							}
							if(cansend==2){
								$.post(weburl+'/index.php?m=chat&c=isDown', {send: data.mine.id, to: data.to.id ,timestamp: Date.now()}, function (res) {
									var res = eval('(' + res + ')');
									
									if(res.code==1 || res.code==3){
										im.sendMsg(data);
									}else if(res.code==2){
										layer.msg('未下载其简历，无法聊天！',{icon:5});
										$(".layui-show").find(".layim-chat-mine").remove();
										var local = layui.data('layim')[data.mine.id] || {};
										var chatlog = local.chatlog[data.to.type+data.to.id];
										chatlog.pop();
										local.chatlog[data.to.type+data.to.id] = chatlog;
										layui.data('layim', {
											key: data.mine.id
											,value: local
										});
									}else if(res.code==4){
										layer.closeAll();
										showlogin(data.mine.usertype);
									}
								});
							}
						}else{
							layer.alert('发送失败，请刷新页面', {
							  skin: 'layui-layer-molv'
							  ,closeBtn: 0
							}, function(){
								window.location.reload();
							});
						}
					});
					layim.on('setSkin', function(filename, src){
						$.post(weburl+'/index.php?m=chat&c=saveSkin', {filename: filename}, function (data) {
							
						});
					}); 
					layim.on('deletehistory', function (data) {
						$.post(weburl+'/index.php?m=chat&c=delchatlog', {data: data}, function (data) {});
					});
				}
			}
        },
    };

    var im = {
        init: function (key) { 
            lib.RongIMClient.init(key);
            this.initListener();   
            this.defineMessage();  
        },
        initListener: function () { 
            RongIMClient.setConnectionStatusListener({
                onChanged: function (status) {
                    switch (status) {
                        case lib.ConnectionStatus.CONNECTED: 
                            break;
                        case lib.ConnectionStatus.CONNECTING: 
                            break;
                        case lib.ConnectionStatus.DISCONNECTED: 
                            break;
                        case lib.ConnectionStatus.KICKED_OFFLINE_BY_OTHER_CLIENT:
							$("#chat_connection").val('0');
							$.post(weburl+"/index.php?m=chat&c=resource",{resource: cachedata.mine.resource},function(data){
								var res = eval('(' + data + ')');
								if(res.code==1){
									layer.closeAll();
									$(".chat_box").removeClass('none');
								}else{
									layer.alert('聊天功能只支持同一浏览器登录，刷新页面可以重新连接', {
									  skin: 'layui-layer-molv' 
									  ,closeBtn: 0
									}, function(){
										$("#chat_connection").val('1');
										window.location.reload();
									});
								}
							});
                            break;
                        case lib.ConnectionStatus.NETWORK_UNAVAILABLE: 
                            break;
                    }
                }});

            RongIMClient.setOnReceiveMessageListener({
                onReceived: function (message) { 
                    switch (message.messageType) { 
                        case RongIMClient.MessageType.LAYIM_TEXT_MESSAGE:
							var msg = message.content,
								chatUserId = 'phpyun' + cachedata.mine.id;
							if(chatUserId != msg.id){
								if(msg.usertype==1  && conf.chat_type=='2'){
									$.post(weburl+"/index.php?m=chat&c=getdown",{id: msg.id},function(data){
										var res = eval('(' + data + ')');
										if (res.code == 1){
											$.post(weburl+"/index.php?m=chat&c=savecache",{id: msg.id,content: msg.content},function(data){})
											if(res.cache!=1){
												msg.content='求职者向您发送了信息，下载其简历'+ res.href +'后才能查看！';
												conf.layim.getMessage(msg);
											}
										}else{
											conf.layim.getMessage(msg);
											$.post(weburl+"/index.php?m=chat&c=setMsgStatus",{id: msg.id},function(data){})
										}
									})
								}else{
									conf.layim.getMessage(msg);
									$.post(weburl+"/index.php?m=chat&c=setMsgStatus",{id: msg.id},function(data){})
								}
							}
                            break;
						case RongIMClient.MessageType.TextMessage:
							$.get(weburl+"/index.php?m=chat&c=getUser", {username:message.senderUserId}, function (data) {
								 var res_data = eval('(' + data + ')');
								 if (res_data.code == 0) {
									 var username = res_data.data.nickname?res_data.data.nickname:'佚名', avatar = res_data.data.avatar; 
									 var data = {
										 avatar:avatar
										 ,content:message.content.content
										 ,id:message.senderUserId
										 ,status:res_data.data.status
										 ,timestamp:message.receivedTime
										 ,type:'friend'
										 ,username:username
									 };
									 var chatUserId = 'phpyun' + cachedata.mine.id;
									 if(chatUserId != message.senderUserId){
										 conf.layim.getMessage(data);
										 $.post(weburl+"/index.php?m=chat&c=setMsgStatus",{id: message.content.id,timestamp:message.content.timestamp},function(data){})
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
        connectWithToken: function (token) {   
            RongIMClient.connect(token, {
                onSuccess: function (userId) {
                   
                },
                onTokenIncorrect: function () {
                    console.log('token无效');
                },
                onError: function (errorCode) {
                    console.log('发送失败:' + errorCode);
                }
            });
        },
       
        defineMessage: function () {
            var defineMsg = function (obj) {
                RongIMClient.registerMessageType(obj.msgName, obj.objName, obj.msgTag, obj.msgProperties);
            }
            
            var textMsg = {
                msgName: 'LAYIM_TEXT_MESSAGE',
                objName: 'LAYIM:CHAT',
                msgTag: new lib.MessageTag(false, false),
                msgProperties: ["username", "avatar", "id", "type", "content","usertype"]
            };
           
            defineMsg(textMsg);

        },
        sendMsg: function (data) { 
            var mine = data.mine;
            var to = data.to;
            var id = mine.id;   
            var group = to.type == 'group';
            if (group) {
                id = to.id;    
            }
            
            var msg = {
                username: mine.username
                , avatar: mine.avatar
                , id: 'phpyun'+id    
                , type: to.type
                , content: mine.content
				, usertype: mine.usertype
            };
          
            var conversationType = group ? lib.ConversationType.GROUP : lib.ConversationType.PRIVATE;
            var targetId = to.id.toString();    
            
            
            var detail = new RongIMClient.RegisterMessage.LAYIM_TEXT_MESSAGE(msg);
           
            RongIMClient.getInstance().sendMessage(conversationType, targetId, detail, {
                onSuccess: function (message) {
					$.get(weburl+"/index.php?m=chat&c=chatLog", {to:to.id,content:data.mine.content,timestamp:Date.now(),type:data.to.type}, function (res) {
                        var data = eval('(' + res + ')');
                        if (data.code != 0) {
                            console.log('message record fail');                       
                        }
                        
                    });
                },
                onError: function (errorCode, message) { 
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
                      skin: 'layui-layer-molv' 
                      ,closeBtn: 0
                    }, function(){
                        window.location.reload();
                    });
                }
            });
        },
		getInformation: function(data){
           var id = data.id || {},type = data.type || {};
            var index = layer.open({
                type: 2
                ,title: type  == 'friend'?(cachedata.mine.id == id?'我的资料':'好友资料') :'群资料'
                ,shade: false
                ,maxmin: false
                
                ,area: ['400px', '320px']
                ,skin: 'layui-box layui-layer-border'
                ,resize: true
                ,content: cachedata.base.Information+'?id='+id+'&type='+type
				,cancel: function(index, layero){ 
					$("#chat_information") .val(1);
				}    
            });           
        },
        userStatus: function(data){
            if (data.id) {
                $.get(weburl+"/index.php?m=chat&c=userStatus", {id:data.id}, function (res) {
                    var res = eval('(' + res + ')');
                    if (res.code == 0) {  
                        if (res.data == 'online') {
							$("#layim-history"+data.id).removeClass('layim-list-gray');
                            conf.layim.setChatStatus('<span style="color:#FF5722;">在线</span>');
                        }else{
							$("#layim-history"+data.id).addClass('layim-list-gray');
                            conf.layim.setChatStatus('<span style="color:#444;">离线</span>');
                        }                                          
                    }else{
						$("#layim-history"+data.id).addClass('layim-list-gray');
						conf.layim.setChatStatus('<span style="color:#444;">离线</span>');
                    }
                });                 
            }
        }      
    };


    exports('socket', socket);
});