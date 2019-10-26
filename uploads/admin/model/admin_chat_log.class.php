<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class admin_chat_log_controller extends adminCommon{  
	function index_action(){
	    $where = 1;
	    if($_GET['keyword']){
	        $keyword = trim($_GET['keyword']);
	        $type = intval($_GET['type']);
	        if ($type=='1'){
	            $where.=" and `fname` like '%".$keyword."%'";
	        }else if($type=='2'){
	            $where.=" and `tname` like '%".$keyword."%'";
	        }elseif($type=='3'){
	            $where.=" and `content` like '%".$keyword."%'";
	        }
	        $urlarr['type']="".$type."";
	        $urlarr['keyword']="".$keyword."";
	    }
	    if(($_GET['date'])){
	        $times=@explode('~',$_GET['date']);
	        $where.=" and `sendTime` >= '".(strtotime($times[0]." 00:00:00")*1000)."' and `sendTime`<'".(strtotime($times[1]." 23:59:59")*1000)."'";
	        $urlarr['date']=$_GET['date'];
	    }
	    if($_GET['order']){
	        if($_GET['order']=="desc"){
	            $order=" order by `".$_GET['t']."` desc";
	        }else{
	            $order=" order by `".$_GET['t']."` asc";
	        }
	        $urlarr['t']=$_GET['t'];
	        $urlarr['order']=$_GET['order'];
	    }else{
	        $order=" order by `id` desc";
	    }
	    $urlarr['page']="{{page}}";
	    $pageurl=Url($_GET['m'],$urlarr,'admin');
	    $rows = $this->get_page('chat_log',$where.$order,$pageurl,$this->config['sy_listnum']);
	    if ($rows && is_array($rows)){
	        foreach ($rows as $k=>$v){
	            $rows[$k]['sendTime'] = ceil($v['sendTime']/1000);
	        }
	    }
	    $this->yunset('rows',$rows);
		$this->yuntpl(array('admin/admin_chat_log'));
	}
	function del_action(){
	    if(is_array($_POST['del'])){
	        $delid=@implode(',',$_POST['del']);
	        $layer_type=1;
	    }else{
	        $this->check_token();
	        $delid=(int)$_GET['id'];
	        $layer_type=0;
	    }
	    if(!$delid){
	        $this->layer_msg('请选择要删除的内容！',8,$layer_type,$_SERVER['HTTP_REFERER']);
	    }
	    $chatM = $this->MODEL('chat');
	    $del=$chatM->deleteLog(array("`id` in ($delid)"));
	    $del?$this->layer_msg('聊天记录(ID:'.$delid.')删除成功！',9,$layer_type,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,$layer_type,$_SERVER['HTTP_REFERER']);
	}
	function clean_action(){
	    $month = intval($_POST['month']);
	    $time = strtotime("-".$month." month")*1000;
	    $chatM = $this->MODEL('chat');
	    $del=$chatM->deleteLog(array("`sendTime` < '".$time."'"));
	    $del?$this->layer_msg('聊天记录清理成功！',9):$this->layer_msg('清理失败！',8);
	}
}

?>