$(function() {
	goChat();
	$(".chat_box").click(function(){
		$(".chat_box").addClass('none');
	})
}); 

function goChat(mode){
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
			var local = layui.data('layim')[res.id] || {};
			local.history = res.history;
			layui.data('layim', {
				key: res.id
				,value: local
			});
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
				, uploadImage: {
					url: weburl+"/index.php?m=chat&c=uploadImage" 
					, type: 'post'
				}
				,getRecommend:{
					url: weburl+"/index.php?m=chat&c=getRecommend"
					, type: 'get'
				}
				,findFriendTotal:{
					url: weburl+"/index.php?m=chat&c=findFriendTotal"
					, type: 'get'
				}                       
				,getInformation:{
					url: weburl+"/index.php?m=chat&c=getInfomation"
					, type: 'get'
				}  
				,saveMyInformation:{
					url: weburl+"/index.php?m=chat&c=saveInfo"
					, type: 'post'
				}                                       
				,getChatLogTotal:{
					url: weburl+"/index.php?m=chat&c=getChat"
					, type: 'get'
				}                       
				,getChatLog:{
					url: weburl+"/index.php?m=chat&c=getChatPage"
					, type: 'get'
				}    
				,initSkin: res.skin ? res.skin : '3.jpg'
				,title: '直聊' 
				,min: min 
				,copyright:true
				, notice: true 
				,isfriend: false 
				,isgroup: false 
				, chatLog: layui.cache.dir + 'css/modules/layim/html/chatlog.html' 
				, Information: layui.cache.dir + 'css/modules/layim/html/getInformation.html' 
			}); 
		});
	});
}
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
		}else if(chat==2){  
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