layui.define(['jquery', 'layer','mobile'], function (exports) {
	var mobile = layui.mobile ,layim = mobile.layim; 
    var $ = layui.jquery;
    var layer = mobile.layer;
    var cachedata = layim.cache();  
    var conf = {
        uid: 0, //
        key: '', //
        layim: null,
        token: null,
    };

    var conn = new WebIM.connection({
        isMultiLoginSessions: WebIM.config.isMultiLoginSessions,
        https: typeof WebIM.config.https === 'boolean' ? WebIM.config.https : location.protocol === 'https:',
        url: WebIM.config.xmppURL,
        heartBeatWait: WebIM.config.heartBeatWait,
        autoReconnectNumMax: WebIM.config.autoReconnectNumMax,
        autoReconnectInterval: WebIM.config.autoReconnectInterval,
        apiUrl: WebIM.config.apiURL,
        isAutoLogin: true
    }); 
    var socket = {
        config: function (options) {
            conf = $.extend(conf, options); //把layim继承出去，方便在register中使用
            this.register();
            im.init(options.user,options.pwd);
        },
        register: function () {
            var layim = conf.layim;
            if (layim) {
                //监听在线状态的切换事件
                layim.on('online', function (data) {
                    
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
                
                //监听查看群员
                layim.on('members', function (data) {
					
                });                
                //监听聊天窗口的切换
                layim.on('chatChange', function (res) {
                    var type = res.data.type;
                    if (type === 'friend') {
                        //模拟标注好友状态
                        im.userStatus({
                            id: res.data.id
                        });
                        // layim.setFriendStatus(res.data.id, status); //设置指定好友在线，即头像置灰
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
							var chatlog = local.chatlog[data.to.type+data.to.id];
							chatlog.pop();
							local.chatlog[data.to.type+data.to.id] = chatlog;
							layui.data('layim-mobile', {
								key: data.mine.id
								,value: local
							});
						}else if(res.code==4){
							layer.open({
								content: '聊天功能离线，请重新登录'
								,btn: ['确定','取消']
								,yes: function(index){
								  location.href = wapurl+'?c=login';
								}
							});
						}
                    });
                });
            }
        }          
    }; 

    var im = {
        init: function (user,pwd) { 
            this.initListener(user,pwd);    //初始化事件监听
        },
        initListener: function (user,pwd) { //初始化监听
            
            // var layim = conf.layim;
			//var resource_value = Math.floor(Math.random()*1000);
            var options = { 
              apiUrl: WebIM.config.apiURL,
              user: user,
              pwd: pwd,
              appKey: WebIM.config.appkey
            };
            conn.open(options); 
            conn.listen({
                onOpened: function ( message ) { 
                    //连接成功回调
                    // 如果isAutoLogin设置为false，那么必须手动设置上线，否则无法收消息
                    // 手动上线指的是调用conn.setPresence(); 如果conn初始化时已将isAutoLogin设置为true
                    // 则无需调用conn.setPresence();             
                },  
                onClosed: function ( message ) {
					$.post(wapurl+"index.php?c=chat&a=resource",{resource: cachedata.mine.resource},function(data){
						var res = eval('(' + data + ')');
						if(res.code==1){
							location.href= wapurl;
						}else{
							layer.open({
								content: '聊天功能只支持同一浏览器登录'
								,btn: ['返回首页']
								,yes: function(index){
								  location.href= wapurl;
								}
							});
						}
					});
                },         //连接关闭回调
                onTextMessage: function ( message ) {
                    im.defineMessage(message,'Text');
                },    //收到文本消息
                onEmojiMessage: function ( message ) {},   //收到表情消息
                onPictureMessage: function ( message ) {
                    im.defineMessage(message,'Picture');
                }, //收到图片消息
                onCmdMessage: function ( message ) {},     //收到命令消息
                onAudioMessage: function ( message ) {
                    var options = { url: message.url };
                    options.onFileDownloadComplete = function ( response ) { 
                        //音频下载成功，需要将response转换成blob，使用objectURL作为audio标签的src即可播放。
                        var objectURL = WebIM.utils.parseDownloadResponse.call(conn, response);
                        message.audio = objectURL;
                        im.defineMessage(message,'Audio');    
                    };  

                    options.onFileDownloadError = function () {
                      //音频下载失败 
                    };  
                    //通知服务器将音频转为mp3
                    options.headers = { 
                      'Accept': 'audio/mp3'
                    };
                    WebIM.utils.download.call(conn, options);
                         
                },     //收到音频消息
                onLocationMessage: function ( message ) {},//收到位置消息
                onFileMessage: function ( message ) {
                    im.defineMessage(message,'File');                    
                },    //收到文件消息
                onVideoMessage: function (message) {
                    var options = { url: message.url };
                    options.onFileDownloadComplete = function ( response ) { 
                        //音频下载成功，需要将response转换成blob，使用objectURL作为audio标签的src即可播放。
                        var objectURL = WebIM.utils.parseDownloadResponse.call(conn, response);
                        message.video = objectURL;
                        im.defineMessage(message,'Video');       
                    };  
                    options.onFileDownloadError = function () {
                      //音频下载失败 
                    };  
                    //通知服务器将音频转为mp4
                    options.headers = { 
                      'Accept': 'audio/mp4'
                    };

                    WebIM.utils.download.call(conn, options);
                },   //收到视频消息
                onOnline: function () {},                  //本机网络连接成功
                onOffline: function () {
					layer.open({
						content: '网络不稳定'
						,btn: ['返回首页']
						,yes: function(index){
						  location.href= wapurl;
						}
					});                   
                },                 //本机网络掉线
                onError: function ( message ) {},          //失败回调
                onBlacklistUpdate: function (list) {       //黑名单变动
                    // 查询黑名单，将好友拉黑，将好友从黑名单移除都会回调这个函数，list则是黑名单现有的所有好友信息
                    
                },
                onReceivedMessage: function(message){},    //收到消息送达服务器回执
                onDeliveredMessage: function(message){},   //收到消息送达客户端回执
                onReadMessage: function(message){},        //收到消息已读回执
                onCreateGroup: function(message){},        //创建群组成功回执（需调用createGroupNew）
                onMutedMessage: function(message){}        //如果用户在A群组被禁言，在A群发消息会走这个回调并且消息不会传递给群其它成员          
            }); 

        },
        //自定义消息，把消息格式定义为layim的消息类型
        defineMessage: function (message,msgType) {
            var msg;
            if (message.ext.system) {//如果是系统消息                
                conf.layim.getMessage({
                  system: true //系统消息
                  ,id: message.to //聊天窗口ID
                  ,type: "group" //聊天窗口类型
                  ,content: message.ext.username + '已加入该群'
                }); 
                return; 
            }
            switch (msgType) 
            {
                case 'Text': msg = message.data;break;
                case 'Picture': msg = 'img['+message.thumb+']';break;
                case 'Audio': msg = 'audio['+message.audio+']';break;
                case 'File': msg = 'file('+message.url+')['+message.filename+']';break;
                case 'Video': msg = 'video['+message.video+']';break;
            };
            if (message.type == 'chat') {
                var type = 'friend';
                var id = message.from;
            }else if(message.type == 'groupchat'){
                var type = 'group';
                var id = message.to;
            }               
            if (message.delay) {//离线消息获取不到本地cachedata用户名称需要从服务器获取
               
                var timestamp = Date.parse(new Date(message.delay));                   
            }else{
                var timestamp = (new Date()).valueOf(); 
       
            }  
		    $.get(wapurl+"index.php?c=chat&a=getUser", {username:message.from}, function (res) {
			     var res_data = eval('(' + res + ')');
			     if (res_data.code == 0) {
			         var username = res_data.data.nickname?res_data.data.nickname:'佚名', avatar = res_data.data.avatar; 
			         var data = {mine: false,cid: 0,username:username,avatar:avatar,content:msg,id:id,fromid: message.from,timestamp:timestamp,type:type};
					 //拦截消息
					 if(res_data.data.usertype==1 && conf.chat_type=='2'){
						 $.post(wapurl+"index.php?c=chat&a=getdown",{id: message.from},function(resdata){
							var res = eval('(' + resdata + ')');
							if (res.code == 1){
								$.post(wapurl+"index.php?c=chat&a=savecache",{id: message.from,content: msg},function(data){})
								if(res.cache!=1){
									data.content='求职者向您发送了信息，下载其简历'+ res.href +'后才能查看！';
									conf.layim.getMessage(data);
								}
							}else{
								conf.layim.getMessage(data);
								$.post(wapurl+"index.php?c=chat&a=setMsgStatus",{id: message.from},function(data){})
							}
						})
					 }else{
						conf.layim.getMessage(data);
						$.post(wapurl+"index.php?c=chat&a=setMsgStatus",{id: message.from},function(data){})
					}
			     }
			 });   

        }, 
        sendMsg: function (data) {  //根据layim提供的data数据，进行解析
            var id = conn.getUniqueId();
			var to = data.to.id;
            var content = data.mine.content;
            var msg = new WebIM.message('txt', id);      // 创建文本消息
            if (data.to.id == data.mine.id) {
				layer.open({
					content: '不能给自己发送消息'
					,skin: 'msg'
					,time: 2 
				}); 
                return;
            }
            msg.set({
                msg: data.mine.content,   
                to: to,                          // 接收消息对象（用户id）
                roomType: false,
                success: function (id, serverMsgId) {//发送成功则记录信息到服务器 
                    $.get(wapurl+"index.php?c=chat&a=chatLog", {to:to,content:data.mine.content,timestamp:Date.now(),type:data.to.type}, function (res) {
                        var data = eval('(' + res + ')');
                        if (data.code != 0) {
                            console.log('message record fail');                       
                        }
                        
                    });
                },
                fail: function(e){//发送失败移除发送消息并提示发送失败
					var local = layui.data('layim-mobile')[data.mine.id] || {};
					var chatlog = local.chatlog[data.to.type+data.to.id];
					chatlog.pop();
					local.chatlog[data.to.type+data.to.id] = chatlog;
					layui.data('layim-mobile', {
						key: data.mine.id
						,value: local
					});
					layer.open({
						content: '发送失败，请刷新页面'
						,btn: ['确定']
						,yes: function(index){
						  window.location.reload(true);
						}
					});										
                }
            });
            msg.body.ext.username = cachedata.mine.uname;
            if (data.to.system == 'system') {
                msg.body.ext.system = 'system';
            }
            if (data.to.type == 'group') {
                msg.setGroup('groupchat');
                msg.body.chatType = 'chatRoom';
            }else{
                msg.body.chatType = 'singleChat';
            }
            // msg.body.chatType = 'singleChat';
            // msg.body.Type = 'img';
            conn.send(msg.body);
        },      
        audio:function(msg){//消息提示
            conf.layim.msgbox(msg);
            var audio = document.createElement("audio");
            audio.src = layui.cache.dir+'css/modules/layim/voice/'+ cachedata.base.voice;
            audio.play(); //消息提示音              
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
                    }
                });                 
            }
        }                             
    };
    exports('socket', socket);
    exports('im', im);
});