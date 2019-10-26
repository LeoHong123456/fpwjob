layui.use(['layer'], function(){
	var layer = layui.layer,
    $ = layui.$;

	layer.oriMsg = layer.msg;


  layer.msg = function (msg, timeSecond , icon , callback ){
    timeSecond = (typeof timeSecond !== 'undefined') ?  timeSecond : 1.5;
    icon = (typeof icon !== 'undefined') ?  icon : 6;
    callback = (typeof callback !== 'undefined') ?  callback : function(){};


  	if(typeof(timeSecond) == 'object'){
  		if(typeof(icon) == 'function'){
  			return layer.oriMsg(msg, timeSecond, icon);
  		}
  		else{
  			return layer.oriMsg(msg, timeSecond);
  		}
  	}

    var tm = timeSecond * 1000;

	
		if(icon == 8){
			icon = 5;
		}
		if(icon == 9){
			icon = 6;
		}

		return layer.oriMsg(msg,
			{
				time : tm,
				icon : icon,
                shade: [0.8, '#393D49'] 
			},
			function(){
				callback();
			}
		);
  };

	
	layer.oriLoad = layer.load;
	layer.load = function(icon,options)
	{
		icon = (typeof icon !== 'undefined') ? icon : 0;
		options = (typeof options == 'object') ? options : {};
		
		options.shade = [0.8, '#393D49'];
		return layer.oriLoad(icon, options);
	};

	
	layer.oriAlert = layer.alert;
	layer.alert = function(msg, icon, title, callback)
	{
		
		if(typeof icon == 'object'){
			if(typeof title == 'function'){
				return layer.oriAlert(msg, icon, title);
			}
			else{
				return layer.oriAlert(msg, icon);
			}
		}

		
		if(typeof title == 'undefined'){
			return layer.msg(msg, 1.5, icon);
		}

		if(typeof callback == 'function'){
			return layer.oriAlert(msg, {title : title}, callback);
		}
	}

 
 
  layer.page = function (content, title, area, offset , options ){
    offset = (typeof offset !== 'undefined') ?  offset : 'auto';
    options = (typeof options !== 'undefined') ?  options : {};

  	options.type = 1;
  	options.content = content;
  	options.area = area;
  	options.offset = offset;
  	options.title = title;

  	return layer.open(options);
  };

  
  layer.iframe = function (url, title, area, offset, options ){
    offset = (typeof offset !== 'undefined') ?  offset : 'auto';
    options = (typeof options !== 'undefined') ?  options : {};

  	options.type = 2;
  	options.content = url;
  	options.area = area;
  	options.offset = offset;
  	options.title = title;

  	return layer.open(options);
  };
});
function monthclick(laydate,elem,hasdone){
	var timestamp=new Date();
	nowyear = timestamp.getFullYear(),
	nowmonth = timestamp.getMonth() + 1;
	if(nowmonth<10){
		nowmonth = "0"+ nowmonth;
	}
	nowday = timestamp.getDate();
	laydateobj = 
	laydate.render({
		elem: elem,
		type: 'month',
		max: nowyear+'-'+nowmonth+'-'+nowday,
		change: function(value, date, endDate){
			var nowtimestr=nowyear+'-'+nowmonth;
			var oldVal = $(elem).val();
			if(nowtimestr>=value){
				$(elem).val(value);
			}else{
				$(elem).val(nowtimestr);
			}
			if(oldVal.substr(0, 4) == value.substr(0, 4) || nowyear == value.substr(0, 4)){
			  $('.laydate-btns-confirm').click();
			}
		},
		done: function(value, date, endDate) {
			if(hasdone==1){
				var id=elem.replace('#','');
				
			}
		}
	});
}
if(typeof($) !== 'undefined'){
  $.layer = function(obj){
    var retval;
    layui.use(['layer'], function(){
      var layer = layui.layer,
        $ = layui.$;

      var offset = 'auto';
      if(obj.offset){
        offset = obj.offset;
      }

      var content = '';
      if(obj.page){
        if(obj.page.dom){
          content = $(obj.page.dom);
        }
        else if(obj.page.html){
          content = obj.page.html;
        } 
      }
      else if(obj.iframe){
        if(obj.iframe.src){
          content = obj.iframe.src;
        }
      }
      
      var id = obj.id ? obj.id : '';
      
      var close = obj.close ? obj.close : function(){};

      retval = layer.open({
        type : obj.type,
        title : obj.title,
        area : obj.area,
        content : content,
        offset : offset,
        id : id,
        end : close
      });
    });
    
    return retval;
  }; 
}

