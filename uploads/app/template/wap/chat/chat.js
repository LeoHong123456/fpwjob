function resumeChat(id, type, eid, usertype){
	if(usertype!=''){
		if(usertype != 1){
			var i=layer_load('执行中，请稍候...');
			$.post(wapurl + "index.php?c=chat&a=isJob",{id: id},function(data){
				layer.closeAll();
				var res = eval('(' + data + ')');
				if(res.code==1){
					$.post(wapurl+"index.php?c=chat&a=getdown",{id: id ,eid: eid},function(data){
						var res = eval('(' + data + ')');
						if (type=='2' && res.code == 1){
							layermsg('请先查看联系方式');return false;
						}else{
							location.href = wapurl+'?c=chat&id='+id;
						}
					});
				}else if(res.code==2){
					layer.open({
						content: '您还没有招聘中的职位，是否先发布职位？'
						,btn: ['确定','取消']
						,yes: function(index){
						  location.href = wapurl+"/member/index.php?c=job";
						}
					});
				}else if(res.code==3){
					layer.open({
						content: '您还没有招聘中的职位，是否先发布职位？'
						,btn: ['确定','取消']
						,yes: function(index){
						  location.href = wapurl+"/member/index.php?c=job&s=1";
						}
					});
				}else if(res.code==4){
					layermsg('请先登录');
				}
			});
			
		}else{
			layermsg('个人用户不能与个人直聊');
		}
	}else{
		layermsg('请先登录');
	}
}
function jobChat(id, type, sq, usertype, jobtype){
	if(usertype!=''){
		if(usertype=='1'){
			var i=layer_load('执行中，请稍候...');
			$.post(wapurl+"index.php?c=chat&a=isResume",{jobtype: jobtype,id: id},function(data){
				layer.closeAll();
				var res = eval('(' + data + ')');
				if(res.code==1 || res.code==5){
					if(type=='2' && sq=='0' && res.code!=5){
						layermsg('请先申请职位');return false;
					}
					location.href = wapurl+'?c=chat&id='+id;
				}else if(res.code==2){
					layer.open({
						content: '您还没有简历，是否先添加简历？'
						,btn: ['确定','取消']
						,yes: function(index){
						  location.href = wapurl+"member/index.php?c=addresume";
						}
					});
				}else if(res.code==3){
					layer.open({
						content: '您还没有高级简历，是否先添加简历？'
						,btn: ['确定','取消']
						,yes: function(index){
						  location.href = wapurl+"member/index.php?c=resume";
						}
					});
				}else if(res.code==4){
					layermsg('请先登录');
				}else if(res.code==6){
					layermsg('您的简历未通过审核，无法聊天');return false;
				}else if(res.code==7){
					layermsg('您的简历还在审核中，无法聊天');return false;
				}else if(res.code==6){
					layermsg('您的简历已被举报，无法聊天');return false;
				}
			})
		}else{
			layermsg('个人用户才能与主管直聊');
		}
	}else{
		layermsg('请先登录');
	}
}