




var layupload_type = $("#layupload_type").val();   
var laynoupload = $("#laynoupload").val(); 			
var path = $("#upload_path").val();                
var showid = 0;
layui.use('upload', function(){
	var upload = layui.upload;
	
	if (laynoupload == 1){
		var layfiletype = $("#layfiletype").val();
		
		if (layfiletype == 2){
			var layaccept = 'file', layexts = 'doc|docx|rar|zip|pdf';
		}else{
			var layaccept = 'images', layexts = 'jpg|png|gif|bmp|jpeg';
		}
		var field = $("#upload_field").val();
		if (!field){
			var field = 'file';
		}
		upload.render({
			elem: '#noupload'
			,url: weburl+'/index.php?m=ajax&c=layui_upload'
			,auto: false
			,bindAction: '#test9'   
			,accept: layaccept
			,exts: layexts
			,field: field
			,done: function(res){
				
			}
		});
	}
	if (layupload_type == 2){	
		if($(".adminupload").length>0){
			upload.render({
				elem: '.adminupload' 
				,url: weburl+'/index.php?m=ajax&c=layui_upload'
				,data: {path: path}
				,done: function(res){
					if(res.code > 0){                
						return layer.msg(res.msg,2,8);
					}else{
						layer.closeAll('loading');
						
						if ($('#'+this.fileid).length>0){
							$('#'+this.fileid).val(res.data.src);
						}else{
							$('input[name="'+ this.name +'"]').val(res.data.src);
						}
						
						if ($('#'+this.parentid).length>0){
							$('#'+this.parentid).removeClass('none');
							$('#'+this.imgid).attr('src', res.data.url); 
						}else if ($('#'+this.imgnews).length>0){           
							$('input[name="'+ this.imgthumb +'"]').val(res.data.s_thumb);
							$('#'+this.imgnews).removeClass('none');
							$('#'+this.imgnews).attr('onclick','news_preview("'+ res.data.url +'")');
						}else{
							$('#'+this.imgid).removeClass('none');
							$('#'+this.imgid).attr('src', res.data.url); 
						}
						
						if($('#'+this.imga).length>0){
							$('#'+this.imga).attr('href', res.data.url);
						}
						
						if(this.path){
							$.post(weburl+'/index.php?m=ajax&c=uploadfast',{path: this.path,url: res.data.src,img: this.imgid},function(data){})
						}
						if(document.getElementById('newbind')){
							$('#newbind').removeClass('none');
						}
					}
				}
			});
		}
	}
});