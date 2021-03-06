﻿layui.define(['jquery', 'layer','contextMenu','form'], function (exports) {
    var contextMenu = layui.contextMenu;
    var $ = layui.jquery;
    var layer = layui.layer;
    var form = layui.form;
    var cachedata =  layui.layim.cache();  
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
			//下载简历重新连接的，不需要再次设置layim
			var connection = $("#chat_connection").val();
			if(connection!=2){
				var layim = conf.layim;
				if (layim) {
					//监听签名修改
					layim.on('sign', function (value) {
						$.post(weburl+'/index.php?m=chat&c=saveSign', {sign: value}, function (data) {
							
						});
					});
					//监听layim建立就绪
					layim.on('ready', function (res) {
						$("#chatready").val(1);
						//企业用户，检查是否有因未下载简历被拦截的消息
						if(cachedata.mine.usertype==2){
							$.post(weburl+'/index.php?m=chat&c=getcache', {rand: Math.random()}, function (data) {});
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
						var cansend = 1;
						var thisChatlog = cachedata.local.chatlog['friend' + data.to.id];
						console.log(thisChatlog);
						if(thisChatlog.length > 20){
							thisChatlog.shift();
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
        }          
    }; 


    var im = {
        init: function (user,pwd) { 
            this.initListener(user,pwd);    //初始化事件监听
        },
        initListener: function (user,pwd) { //初始化监听
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
					$("#chat_connection").val('0');
					$.post(weburl+"/index.php?m=chat&c=resource",{resource: cachedata.mine.resource},function(data){
						var res = eval('(' + data + ')');
						if(res.code==1){
							layer.closeAll();
							$(".chat_box").removeClass('none');
						}else{
							layer.alert('聊天功能只支持同一浏览器登录，刷新页面可以重新连接', {
							  skin: 'layui-layer-molv' //样式类名
							  ,closeBtn: 0
							}, function(){
								window.location.reload();
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
				//处理好友申请
                onInviteMessage: function ( message ) {
                    
                },  //处理群组邀请
                onOnline: function () {},                  //本机网络连接成功
                onOffline: function () {
                    layer.alert('网络不稳定，请点击确认刷新页面', {
                      skin: 'layui-layer-molv' //样式类名
                      ,closeBtn: 0
                    }, function(){
                        window.location.reload();
                    });                    
                },                 //本机网络掉线
                onError: function ( message ) {},          //失败回调
                onBlacklistUpdate: function (list) {       //黑名单变动
                    
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
		    $.get(weburl+"/index.php?m=chat&c=getUser", {username:message.from}, function (res) {
			     var res_data = eval('(' + res + ')');
			     if (res_data.code == 0) {
			         var username = res_data.data.nickname?res_data.data.nickname:'佚名', avatar = res_data.data.avatar; 
			         var data = {mine: false,cid: 0,username:username,avatar:avatar,content:msg,id:id,fromid: message.from,timestamp:timestamp,type:type};
					 //拦截消息
					 if(res_data.data.usertype==1 && conf.chat_type=='2'){
						 $.post(weburl+"/index.php?m=chat&c=getdown",{id: message.from},function(resdata){
							var res = eval('(' + resdata + ')');
							if (res.code == 1){
								$.post(weburl+"/index.php?m=chat&c=savecache",{id: message.from,content: msg},function(data){})
								if(res.cache!=1){
									data.content='求职者向您发送了信息，下载其简历'+ res.href +'后才能查看！';
									conf.layim.getMessage(data);
								}
							}else{
								conf.layim.getMessage(data);
								$.post(weburl+"/index.php?m=chat&c=setMsgStatus",{id: message.from},function(data){})
							}
						})
					 }else{
						conf.layim.getMessage(data);
						$.post(weburl+"/index.php?m=chat&c=setMsgStatus",{id: message.from},function(data){})
					}
					 if (msg.indexOf('您好！') !== -1){
						 setTimeout(function(){
							 $("#layui-layim-min").parent().find('span').click();
						 },1500);
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
                layer.msg('不能给自己发送消息');
                return;
            }
            msg.set({
                msg: data.mine.content,   
                to: to,                          // 接收消息对象（用户id）
                roomType: false,
                success: function (id, serverMsgId) {//发送成功则记录信息到服务器 
                    $.get(weburl+"/index.php?m=chat&c=chatLog", {to:to,content:data.mine.content,timestamp:Date.now(),type:data.to.type}, function (res) {
                        var data = eval('(' + res + ')');
                        if (data.code != 0) {
                            console.log('message record fail');                       
                        }
                        
                    });
                },
                fail: function(e){//发送失败移除发送消息并提示发送失败
					var local = layui.data('layim')[data.mine.id] || {};
					var chatlog = local.chatlog[data.to.type+data.to.id];
					chatlog.pop();
					local.chatlog[data.to.type+data.to.id] = chatlog;
					layui.data('layim', {
						key: data.mine.id
						,value: local
					});  
					layer.alert('发送失败，请刷新页面', {
                      skin: 'layui-layer-molv' //样式类名
                      ,closeBtn: 0
                    }, function(){
                        window.location.reload();
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
        getChatLog: function (data){
            if(!cachedata.base.chatLog){
            return layer.msg('未开启更多聊天记录');
            }
            var index = layer.open({
                type: 2
                ,maxmin: true
                ,title: '与 '+ data.name +' 的聊天记录'
                ,area: ['450px', '600px']
                ,shade: false
                ,skin: 'layui-box'
                ,anim: 2
                ,id: 'layui-layim-chatlog'
                ,content: cachedata.base.chatLog + '?id=' + data.id + '&type=' + data.type
            });
        },
        removeFriends: function (username) {
            conn.removeRoster({
                to: username,
                success: function () {  // 删除成功
                    var index = layer.open();
                    layer.close(index);
                    conf.layim.removeList({//从我的列表删除
                        type: 'friend' //或者group
                        ,id: username //好友或者群组ID
                    });  
                    im.removeHistory({//从我的历史列表删除
                        type: 'friend' //或者group
                        ,id: username //好友或者群组ID
                    });
                    parent.location.reload();
                },
                error: function () { 
                    
                }
            });
        },  
        removeHistory: function(data){//删除好友或退出群后清除历史记录
           
            var history = cachedata.local.history;
            delete history[data.type+data.id];
            cachedata.local.history = history;
            layui.data('layim', {
              key: cachedata.mine.id
              ,value: cachedata.local
            });
            $('#layim-history'+data.id).remove();
            var hisElem = $('.layui-layim').find('.layim-list-history');
            var none = '<li class="layim-null">暂无历史会话</li>'        
            if(hisElem.find('li').length === 0){
              hisElem.html(none);
            }        
        }, 
        audio:function(msg){//消息提示
            conf.layim.msgbox(msg);
            var audio = document.createElement("audio");
            audio.src = layui.cache.dir+'css/modules/layim/voice/'+ cachedata.base.voice;
            audio.play(); //消息提示音              
        },
        getInformation: function(data){
           var id = data.id || {},type = data.type || {};
            var index = layer.open({
                type: 2
                ,title: type  == 'friend'?(cachedata.mine.id == id?'我的资料':'好友资料') :'群资料'
                ,shade: false
                ,maxmin: false
                // ,closeBtn: 0
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
    exports('im', im);
});