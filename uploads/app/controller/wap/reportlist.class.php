<?php
/* *
* $Author ：LEO
*
* 官网: https://www.fpwjob.com
*
* 版权所有 2018-2019 菲聘网，并保留所有权利。
*
*
*/
class reportlist_controller extends common{
	function index_action(){ 
        if($_POST['submit']){
            if($_POST['reason']==""){
                $data['msg']='请选择举报原因！';
                $this->yunset("layer",$data);                
            }else{
                $data1['c_uid']=(int)$_GET['uid'];
                $data1['inputtime']=mktime();
                $data1['p_uid']=$this->uid;
                $data1['did']=$this->userdid;
                $data1['usertype']=(int)$this->usertype;
                $data1['eid']=(int)$_GET['eid'];
                $data1['r_name']=$_GET['r_name'];
                $data1['username']=$this->username;
                $data1['r_reason']=@implode(',',$_POST['reason']);
                $nid=$this->obj->insert_into("report",$data1);
                if($nid){
                    $this->obj->member_log("举报简历",23,1);
                    $data['msg']='举报成功！';
                    $data['url']=Url('wap',array('c'=>'resume','a'=>'show','id'=>$_GET['eid']));
                     $this->yunset("layer",$data);
                }else{
                    $this->obj->member_log("举报简历",23,1);
                    $data['msg']='举报失败！';
                    $data['url']=Url('wap',array('c'=>'resume','a'=>'show','id'=>$_GET['eid']));
                     $this->yunset("layer",$data);
                } 
            }
        }
         $this->yunset("layer",$data);
        $searchurl=@implode("&",$searchurl);
		$this->yunset("searchurl",$searchurl);
		$this->yunset('backurl',Url('wap',array('c'=>'resume','a'=>'show','id'=>$_GET['eid'])));
		$this->yunset($CacheArr);
		$this->yunset("headertitle","找人才");
        $this->seo("report");
        $this->yuntpl(array('wap/reportlist'));
	}
}
?>