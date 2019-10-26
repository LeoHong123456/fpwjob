$(function() {
	goChat();
	$(".chat_box").click(function(){
		$(".chat_box").addClass('none');
	})
}); 

function goChat(mode){
	//点击右下角图片打开，聊天主面板将是非最小化（此种情况为同浏览器，其他页面登录聊天账号时）
	if(mode == 'reconnection'){
		var min = false;
	}else{
		var min = true;
	}
	$.post(weburl+"/index.php?m=chat&c=goChat",{rand: Math.random()},function(data){
		var res = eval('(' + data + ')');
		var connection = $("#chat_connection").val();
		if(connection==1){
			layui.config({
				base: style+'/chat/easemob/'
			}).extend({
				socket: 'socket',
			});
		}else{
			$("#chat_connection").val(1);
		}
		layui.use(['layim', 'jquery', 'socket'], function (layim, socket) {
			var $ = layui.jquery;
			var socket = layui.socket;
			socket.config({
				user: res.user,
				accessToken: res.token ,
				access_token: res.token ,
				pwd: res.pwd,
				layim: layim,
				chat_type:res.chat_type
			});
			//获取历史聊天对象
			var local = layui.data('layim')[res.id] || {};
			local.history = res.history;
			layui.data('layim', {
				key: res.id
				,value: local
			});
			//将右下角备用直聊图片的图标换成自己的头像
			$(".chat_box").find('img').attr('src',res.mine.avatar);
			layim.config({
				init: {
					mine: {
						"id": res.mine.id
						,"username": res.mine.username
						,"uname": res.mine.uname
						,"access_token": res.mine.token
						,"avatar": res.mine.avatar
						,"sign": res.mine.sign
						,"resource": res.mine.resource
						,"usertype":res.mine.usertype
					}
				}
				//上传图片接口
				, uploadImage: {
					url: weburl+"/index.php?m=chat&c=uploadImage" //（返回的数据格式见下文）
					, type: 'post' //默认post
				}
				//获取推荐好友
				,getRecommend:{
					url: weburl+"/index.php?m=chat&c=getRecommend"
					, type: 'get' //默认
				}
				//查找好友总数
				,findFriendTotal:{
					url: weburl+"/index.php?m=chat&c=findFriendTotal"
					, type: 'get' //默认
				}                       
				//获取好友资料
				,getInformation:{
					url: weburl+"/index.php?m=chat&c=getInfomation"
					, type: 'get' //默认
				}  
				//保存我的资料
				,saveMyInformation:{
					url: weburl+"/index.php?m=chat&c=saveInfo"
					, type: 'post' //默认
				}                                       
				//获取总的记录数
				,getChatLogTotal:{
					url: weburl+"/index.php?m=chat&c=getChat"
					, type: 'get' //默认post
				}                       
				//获取历史记录
				,getChatLog:{
					url: weburl+"/index.php?m=chat&c=getChatPage"
					, type: 'get' //默认post
				}    
				,initSkin: res.skin ? res.skin : '3.jpg' //1-5 设置初始背景
				,title: '直聊' 
				,min: min //是否始终最小化主面板，默认false
				,copyright:true
				, notice: true //是否开启桌面消息提醒，默认false
				,isfriend: false //是否开启好友
				,isgroup: false //是否开启群组
				, chatLog: layui.cache.dir + 'css/modules/layim/html/chatlog.html' //聊天记录页面地址，若不开启，剔除该项即可
				, Information: layui.cache.dir + 'css/modules/layim/html/getInformation.html' //好友群资料页面
			}); 
		});
	});
}
//下载简历需要重新连接
function dowmChat(){
	$.post(weburl+"/index.php?m=chat&c=goChat",{rand: Math.random()},function(data){
		var res = eval('(' + data + ')');
		if (res.errormsg){
			layer.msg(res.errormsg,2,8);
		}else{
			layui.use(['socket'], function (socket) {
				var socket = layui.socket;
				socket.config({
					user: res.user,
					accessToken: res.token ,
					access_token: res.token ,
					pwd: res.pwd
				});
			})
		}
	})
}

function resumeChat(id, type, eid,usertype){
	var chat = $("#chat_connection").val(),ready = $("#chatready").val();
	if(ready==1){
		if(chat==0){
			$(".chat_box").addClass('none');
			goChat('reconnection');
		}else if(chat==2){   //下载简历需要重新连接
			dowmChat();
		}
		var i=layer.load('请稍候...',0);
		$.post(weburl+"/index.php?m=chat&c=isJob",{id: id},function(data){
			layer.close(i);
			var res = eval('(' + data + ')');
			if(res.code==1){
				$.post(weburl+"/index.php?m=chat&c=getdown",{id: id ,eid: eid},function(data){
					layer.close(i);
					var res = eval('(' + data + ')');
					if (type=='2' && res.code == 1){
						layer.msg('请先下载简历',2,8);return false;
					}else{
						var timestamp = Date.now();
						$.post(weburl+"/index.php?m=chat&c=beginChat",{id: id ,timestamp: timestamp},function(data){
							
						});
					}
				});
			}else if(res.code==2){
				layer.alert('您还没有招聘中的职位，是否先发布职位？', 0, '提示',function(){window.location.href =weburl+"/member/index.php?c=job&w=1";window.event.returnValue = false;return false; });
			}else if(res.code==3){
				layer.alert('您还没有招聘中的职位，是否先发布职位？', 0, '提示',function(){window.location.href =weburl+"/member/index.php?c=job&s=1";window.event.returnValue = false;return false; });
			}else if (res.code==4){
				showlogin(usertype);
			}
		})
	}else{
		layer.msg('聊天模块正在拼命加载中，请稍候',3,8);
	}
}
function jobChat(id, type, sq, jobtype, jobid){
	var chat = $("#chat_connection").val(),ready = $("#chatready").val();
	if(ready==1){
		if(chat==0){
			$(".chat_box").addClass('none');
			goChat('reconnection');
		}
		var i=layer.load('加载中..',0);
		$.post(weburl+"/index.php?m=chat&c=isResume",{jobtype: jobtype,id: id},function(data){
			layer.close(i);
			var res = eval('(' + data + ')');
			if(res.code==1 || res.code==5){
				if(type=='2' && (sq=='' || sq=='0') && res.code!=5){
					layer.msg('请先申请职位',2,8);return false;
				}
				var timestamp = Date.now();
				$.post(weburl+"/index.php?m=chat&c=beginChat",{id: id ,timestamp: timestamp, jobid: jobid, jobtype: jobtype},function(data){
					
				});
			}else if(res.code==3){
				layer.alert('您还没有高级简历，是否先添加简历？', 0, '提示',function(){window.location.href =weburl+"/member/index.php?c=resume";window.event.returnValue = false;return false; });
			}else if(res.code==2){
				layer.alert('您还没有简历，是否先添加简历？', 0, '提示',function(){window.location.href =weburl+"/member/index.php?c=expect";window.event.returnValue = false;return false; });
			}else if(res.code==4){
				showlogin('1');
			}else if(res.code==6){
				layer.msg('您的简历未通过审核，无法聊天',2,8);return false;
			}else if(res.code==7){
				layer.msg('您的简历还在审核中，无法聊天',2,8);return false;
			}else if(res.code==6){
				layer.msg('您的简历已被举报，无法聊天',2,8);return false;
			}
		});
	}else{
		layer.msg('聊天模块正在拼命加载中，请稍候',3,8);
	}
}