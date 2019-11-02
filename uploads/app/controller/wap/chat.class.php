<?php
/*
 * $Author ：LEO
 *
 * 官网: https://www.fpwjob.com
 *
 * 版权所有 2018-2019 菲聘网，并保留所有权利。
 *
 * 
 */

class chat_controller extends common{
    function index_action(){
        if ($_GET['id']){
            $toid = intval($_GET['id']);
            $chatM = $this->MODEL('chat');
            $member = $chatM->getMember(array('uid'=>$toid));
            
            if (!$member){
                $sql=$this->userinfo($toid);
                $sql['uid'] = $toid;
                $sql['username'] = 'phpyun'.$toid;
                if ($this->config['chat_platform']==2){   
                    $this->isEasemobUser($toid,$sql);
                }elseif ($this->config['chat_platform']==3){  
                    $this->isRongUser($toid,$sql);
                }
                $member = $chatM->getMember(array('uid'=>$toid));
            }
            $this->yunset('member',$member);
            $data['nickname']=$member['nickname'];
            $this->data=$data;
            $this->seo('chat');
        }else{
            if (!$_GET['token']){
                $this->seo('wap');
            }else{
                $data['nickname']='直聊';
                $this->data=$data;
                $this->seo('chat');
            }
        }
        if($_GET['token']){
            $userInfoM = $this->MODEL('userinfo');
            $member = $userInfoM->GetMemberOne(array('token'=>trim($_GET['token'])),array('field'=>'`uid`,`username`,`password`,`usertype`,`email`,`salt`,`did`,`tokentime`,`appuuid`'));
            if ($member){
                $mdtoken = md5($member['username'].$member['password'].$member['salt'].$member['tokentime'].$member['appuuid']);
                if(trim($_GET['token'])==$mdtoken){
                    if (!$this->uid || $this->uid!=$member['uid']){
                        $this->cookie->add_cookie($member['uid'],$member['username'],$member['salt'],$member['email'],$member['password'],$member['usertype'],1,$member['did']);
                        echo "<script>location.reload();</script>";die;
                    }
                }
            }
            $this->yunset('chatplace',1);
        }
        if ($this->config['sy_chat_open']==1){
            if ($this->config['chat_platform']==2){   
                $this->yuntpl(array('wap/chat/wapim_easemob'));
            }elseif ($this->config['chat_platform']==3){  
                $this->yuntpl(array('wap/chat/wapim_rongcloud'));
            }
        }
    }
    function goChat_action(){
        if ($this->config['sy_chat_open']==1){
            $sql=$this->userinfo($this->uid);
            $sql['uid'] = $this->uid;
            $sql['username'] = 'phpyun'.$this->uid;
            $sql['resource'] = $_COOKIE['chat'];
            if ($this->config['chat_platform']==2){   
                $this->easemobUser($sql);
            }elseif ($this->config['chat_platform']==3){  
                $this->rongUser($sql);
            }
        }
    }
    function userinfo($id){
        
        
        $userinfoM = $this->model('userinfo');
        $user = $userinfoM->GetMemberOne(array('uid'=>$id),array('field'=>'`usertype`,`username`'));
        if ($user['usertype']==1){
            $field = '`name`,`photo`';
        }elseif ($user['usertype']==2){
            $field = '`name`,`shortname`,`logo`';
        }elseif ($user['usertype']==3){
            $field = '`realname`,`photo`';
        }
        $userinfo = $userinfoM->GetUserinfoOne(array('uid'=>$id),array('usertype'=>$user['usertype'],'field'=>$field));
        if ($user['usertype']==1){
            $sql['nickname'] = $userinfo['name']?$userinfo['name']:$user['username'];
            if (file_exists(str_replace('./data',APP_PATH.'data',$userinfo['photo']))){
                $sql['avatar']=$userinfo['photo'];
            }else{
                $sql['avatar']="./".$this->config['sy_chat_logo'];
            }
        }elseif ($user['usertype']==2){
            $name = $userinfo['name']?$userinfo['name']:$user['username'];
            $sql['nickname'] = $userinfo['shortname']?$userinfo['shortname']:$name;
            if (file_exists(str_replace('./data',APP_PATH.'data',$userinfo['logo']))){
                $sql['avatar']=$userinfo['logo'];
            }else{
                $sql['avatar']="./".$this->config['sy_chat_logo'];
            }
        }elseif ($user['usertype']==3){
            $sql['nickname'] = $userinfo['realname']?$userinfo['realname']:$user['username'];;
            if (file_exists(str_replace('./data',APP_PATH.'data',$userinfo['photo']))){
                $sql['avatar']=$userinfo['photo'];
            }else{
                $sql['avatar']="./".$this->config['sy_chat_logo'];
            }
        }
        $sql['usertype'] = $user['usertype'];
        return $sql;
    }
    
    function rongUser($sql){
        $user = $this->isRongUser($this->uid, $sql);
        
        $mine = array(
            'avatar' => str_replace('./data',$this->config['sy_weburl'].'/data',$sql['avatar']),
            'id' => $this->uid,
            'status' => 'online',
            'sign' => $user['signature'],
            'username' => $user['nickname'],
            'uname' => $sql['username'],
            'token'=> $user['token'],
            'resource' => $_COOKIE['chat'],
            'usertype' => $this->usertype
        );
        $user['mine'] = $mine;
        $user['key'] =  $this->config['sy_rong_appkey'];
        $user['id'] = $this->uid;
        $user['chat_type'] = $this->config['sy_chat_type'];
        $user['history'] = $user['new']==1 ? '': $this->getHistory();
        echo  json_encode($user);
    }
    
    function isRongUser($uid,$sql=array()){
        
        require_once APP_PATH."api/rongcloud/rongcloud.php";
        $RongCloud = new RongCloud($this->config['sy_rong_appkey'], $this->config['sy_rong_appsecret']);
        
        
        if ($RongCloud) {
            $chatM = $this->MODEL('chat');
            $member = $chatM->getMember(array('uid'=>$uid));
            if (empty($sql)){
                $sql=$this->userinfo($uid);
                $sql['username'] = 'phpyun'.$uid;
            }
            $avatar = str_replace('./', $this->config['sy_weburl'].'/', $sql['avatar']);
            
            $userinfoM = $this->MODEL('userinfo');
            $userinfo = $userinfoM->GetMemberOne(array('uid'=>$uid));
            $sql['nickname'] = $member['nickname'] ? $member['nickname'] : $sql['nickname'];
            $result = $RongCloud->user()->getToken($sql['username'], $sql['nickname'], $avatar);
            $json = json_decode($result, true);
            $sql['token'] = $token = $json['token'];
            if ($token){
                if ($member){
                    $user['nickname'] = $member['nickname'];
                    $chatM->updateMembers(array('token'=>$token,'resource'=>$sql['resource'],'avatar'=>$sql['avatar'],'usertype'=>$sql['usertype']),array('uid'=>$uid));
                }else{
                    $user['new']=1;
                    $user['nickname'] = $sql['nickname'];
                    $sql['uid'] = $uid;
                    $chatM->addMember($sql);
                    $this->obj->member_log('用户：'.$uid.'融云注册成功');
                }
                $user['token'] =  $token;
            }else{
                $user['errormsg'] = '直聊注册失败';
                $this->obj->member_log('用户：'.$uid.'融云token获取失败');
            }
        }else{
            $user['errormsg'] = '融云API引用失败';
        }
        $user['skin'] = $member['skin'] ? $member['skin'] : '';
        $user['nickname'] = $member['nickname'] ? $member['nickname'] : $sql['nickname'];
        $user['signature'] = $member['signature']? $member['signature']:'';
        return $user;
    }
    
    function easemobUser($sql){
        $user = $this->isEasemobUser($this->uid, $sql);
        
        $mine = array(
            'avatar' => str_replace('./data',$this->config['sy_weburl'].'/data',$sql['avatar']),
            'id' => $this->uid,
            'status' => 'online',
            'sign' => $user['signature'],
            'username' => $user['nickname'],
            'uname' => $sql['username'],
            'token'=> $user['token'],
            'resource' => $_COOKIE['chat'],
            'usertype' => $this->usertype
        );
        $user['mine'] = $mine;
        $user['id'] = $this->uid;
        $user['chat_type'] = $this->config['sy_chat_type'];
        $user['history'] = $user['new']==1 ? '': $this->getHistory();
        $user['skin'] = $user['skin'];
        echo  json_encode($user);
    }
    
    function isEasemobUser($uid,$sql=array()){
        $chatM = $this->MODEL('chat');
        $member = $chatM->getMember(array('uid'=>$uid));
        if (empty($sql)){
            $sql=$this->userinfo($uid);
            $sql['username'] = 'phpyun'.$uid;
        }
        $easemob = $chatM->getEasemobUser($sql['username']);     
        if (!$member || $easemob !=2){   
            $salt = substr(uniqid(rand()), -6);
            $password = md5(md5('pwd'.$this->uid).$salt);
            $add = $chatM->addEasemob($sql['username'],$password);
            if ($add == 2){
                $easemob_token = $chatM->getEasemobToken($sql['username'],$password);
                $userinfoM = $this->MODEL('userinfo');
                $userinfo = $userinfoM->GetMemberOne(array('uid'=>$uid));
                $sql['uid'] = $uid;
                $sql['nickname'] = $userinfo['username'];
                $sql['password'] = $password;
                $sql['salt'] = $salt;
                $sql['access_token'] = $token = $easemob_token['access_token'];
                $sql['expires_in'] = $easemob_token['expires_in'];
                $sql['logintime'] = time();
                $sql['signature'] = '';
                if ($member){
                    $chatM->updateMembers($sql,array('id'=>$member['id']));
                }else{
                    $chatM->addMember($sql);
                }
                $user['new'] = 1;
                $this->obj->member_log('用户：'.$this->uid.'环信注册成功');
            }else{
                $this->obj->member_log('用户：'.$this->uid.'环信注册失败');
            }
        }
        
        if ($easemob ==2 && $member ){
            if (($member['logintime']+$member['expires_in']-3600*24*5) < time()){
                $easemob_token = $chatM->getEasemobToken($member['username'], $member['password']);
                if ($easemob_token!=1){
                    $data['access_token'] = $token =$easemob_token['access_token'];
                    $data['logintime'] = time();
                    $data['expires_in'] = $easemob_token['expires_in'];
                    $this->obj->member_log('用户：'.$this->uid.'环信登录成功');
                }else{
                    $this->obj->member_log('用户：'.$this->uid.'环信登录失败');
                }
            }
            $data['resource'] = $sql['resource'];
            $data['avatar'] = $sql['avatar'];
            $data['signature'] = $member['signature'];
            $data['usertype'] = $sql['usertype'];
            $chatM->updateMembers($data, array('uid'=>$uid));
        }
        $user['user'] = $member['username'] ? $member['username'] : $sql['username'];
        $user['pwd'] =  $member['password'] ? $member['password'] : $password;
        $user['token'] = $token ? $token : $member['access_token'];
        $user['skin'] = $member['skin'] ? $member['skin'] : '';
        $user['nickname'] = $member['nickname'] ? $member['nickname'] : $sql['nickname'];
        $user['signature'] = $member['signature'] ? $member['signature'] : '';
        return $user;
    }
    
    function getHistory(){
        $chatM = $this->MODEL('chat');
        $chatfrom = $chatM->getChats(array('from'=>$this->uid),array('field'=>'`id`,`beginid`,`from`,`to`,`last`,`content`','orderby'=>'id'));
        $chatto = $chatM->getChats(array('to'=>$this->uid),array('field'=>'`id`,`beginid`,`from`,`to`,`last`,`content`','orderby'=>'id'));
        $chats = array_merge($chatfrom,$chatto);
        
        $sort = array(
            'direction' => 'SORT_DESC', 
            'field'     => 'id',       
        );
        $arrSort = array();
        foreach($chats as $uniqid => $row){
            foreach($row as $key=>$value){
                $arrSort[$key][$uniqid] = $value;
            }
        }
        if($sort['direction']){
            array_multisort($arrSort[$sort['field']], constant($sort['direction']), $chats);
        }
        $chatlist=$beginids=array();
        foreach ($chats as $v){
            if (!in_array($v['beginid'], $beginids)){
                $beginids[]=$v['beginid'];
                if ($v['from']==$this->uid){
                    $fuid[] = $v['to'];
                    $chatlist[]=$v;
                }elseif ($v['to']==$this->uid){
                    $fuid[] = $v['from'];
                    $chatlist[]=$v;
                }
            }
        }
        
        if (!empty($fuid)){
            $unread = $chatM->getChats(array('to'=>$this->uid,'status'=>2),array('field'=>'`from`,count(*) as num','groupby'=>'`from`','orderby'=>'`id`'));
            $from = $chatM->getMembers(array("`uid` in ('".@pylode("','", $fuid)."')"));
            $history=array();
            foreach ($chatlist as $k=>$v){
                foreach ($from as $val){
                    if ($v['from']==$val['uid']||$v['to']==$val['uid']){
                        if($v['last']==1){
                            $history['friend'.$val['username']]['lastmsg']=$v['content'];
                        }else{
                            $history['friend'.$val['username']]['lastmsg']='none';
                        }
                        $history['friend'.$val['username']]['uid']=$val['uid'];
                        if (file_exists(str_replace('./data',APP_PATH.'data',$val['avatar']))){
                            $history['friend'.$val['username']]['avatar']=str_replace('./data',$this->config['sy_weburl'].'/data',$val['avatar']);
                        }else{
                            $history['friend'.$val['username']]['avatar']=$this->config['sy_weburl']."/".$this->config['sy_chat_logo'];;
                        }
                        $history['friend'.$val['username']]['content'] = '您好';
                        $history['friend'.$val['username']]['fromid'] = $val['username'];
                        $history['friend'.$val['username']]['id'] = $val['username'];
                        $history['friend'.$val['username']]['mine'] = false;
                        $history['friend'.$val['username']]['temporary'] = true;
                        $history['friend'.$val['username']]['type'] = 'friend';
                        $history['friend'.$val['username']]['username'] = $val['nickname'];
                        $history['friend'.$val['username']]['usertype'] = $val['usertype'];
                        $status = $this->userStatus($val['username']);     
                        $history['friend'.$val['username']]['status'] = $status;
                    }
                }
            }
            foreach ($history as $k=>$v){
                $history[$k]['msgstatus']= 'none';
                foreach ($unread as $val){
                    if ($v['uid']==$val['from']){
                        $history[$k]['msgstatus']=$val['num'];
                    }
                }
            }
            return $history;
        }
    }
    
    function userStatus($username){
        if ($this->config['chat_platform']==2){   
            $chatM = $this->MODEL('chat');
            $status = $chatM->userStatus($username);
        }elseif ($this->config['chat_platform']==3){  
            
            require_once APP_PATH."api/rongcloud/rongcloud.php";
            $RongCloud = new RongCloud($this->config['sy_rong_appkey'], $this->config['sy_rong_appsecret']);
            if ($RongCloud) {
                $return = $RongCloud->user()->checkOnline($username);
                $json = json_decode($return, true);
                $result = $json['status'];
                if ($result == 1){
                    $status='online';
                }else{
                    $status='offline';
                }
            }
        }
        return $status;
    }
    
    function userStatus_action(){
        $id = $_GET['id'];
        if (strpos($id,'phpyun')===false){
            $chatM = $this->MODEL('chat');
            $user = $chatM->getMember(array('uid'=>$id),array('field'=>'username'));
            $status = $this->userStatus($user['username']);
        }else{
            $status = $this->userStatus($id);
        }
        if ($status == 'online') {
            $res['code'] = 0;
            $res['msg'] = '';
            $res['data'] = 'online';
            echo  json_encode($res);
        }else{
            $res['code'] = -1;
            $res['msg'] = '';
            $res['data'] = 'offline';
            echo  json_encode($res);
        }
    }
    
    function beginChat_action(){
        $id = (int)$_POST['id'];
        $chatM = $this->MODEL('chat');
        if ($this->config['chat_platform']==2){   
            $this->isEasemobUser($id);
        }elseif ($this->config['chat_platform']==3){  
            $this->isRongUser($id);
        }
        
        $beginid = $id.'-'.$this->uid;
        $from = $chatM->getMember(array('uid'=>$id),array('field'=>'`uid`,`username`,`nickname`'));
        $to = $chatM->getMember(array('uid'=>$this->uid),array('`uid`,field'=>'`username`,`nickname`'));
        $job_href = '';
        
        if ($this->usertype == 1){
            if ($_POST['jobid']){
                $jobid = (int)$_POST['jobid'];
                $userinfoM = $this->MODEL('userinfo');
                $fmember = $userinfoM->GetMemberOne(array('uid'=>$id));
                if ($fmember['usertype'] == 2){
                    if ($_POST['jobtype'] == 'com'){
                        $jobM = $this->MODEL('job');
                        $job = $jobM->GetComjobOne(array('id'=>$jobid,'uid'=>$id),array('field'=>'id,name'));
                        $job_href = '对职位"'.$job['name'].'"有什么想了解的吗？';
                    }elseif($_POST['jobtype']=='lt'){
                        $lietouM = $this->MODEL('lietou');
                        $job = $lietouM->GetLietoujobOne(array('id'=>$jobid,'uid'=>$id),array('field'=>'job_name'));
                        $job_href = '对职位"'.$job['job_name'].'"有什么想了解的吗？';
                    }
                }elseif ($fmember['usertype'] == 3){
                    $lietouM = $this->MODEL('lietou');
                    $job = $lietouM->GetLietoujobOne(array('id'=>$jobid,'uid'=>$id),array('field'=>'job_name'));
                    $job_href = '对职位"'.$job['job_name'].'"有什么想了解的吗？';
                }
            }
        }else{
            $job_href = '感谢您查看我的简历！';
        }
        $content = '您好！'.$job_href;
        $this->sendChat($from,$to,$content,$_POST['timestamp'],$beginid);
        
    }
    
    function sendChat($from,$to,$content,$sendtime,$beginid){
        $chatM = $this->MODEL('chat');
        if ($this->config['chat_platform']==2){   
            $code = $chatM->sendMsg($from['username'], $to['username'], 'txt' ,$content);
        }elseif ($this->config['chat_platform']==3){  
            
            require_once APP_PATH."api/rongcloud/rongcloud.php";
            $RongCloud = new RongCloud($this->config['sy_rong_appkey'], $this->config['sy_rong_appsecret']);
            if ($RongCloud) {
                $scontent = array('content'=>$content);
                $result = $RongCloud->Message()->publishPrivate($from['username'], $to['username'], 'RC:TxtMsg' , json_encode($scontent));
                $json=json_decode($result,true);
                if ($json['code']==200){
                    $code = 2;
                }
            }
        }
        if ($code==2){
            $data['uid'] = $this->uid;
            $data['beginid'] = $beginid;
            $data['from'] = $from['uid'];
            $data['to'] = $to['uid'];
            $data['fname'] = $from['nickname'];
            $data['tname'] = $to['nickname'];
            $data['content'] = $content;
            $data['sendTime'] = $sendtime;
            $data['type'] = 'friend';
            $success = $chatM->addChat($data);
        }
    }
    
    function saveSign_action(){
        $chatM = $this->MODEL('chat');
        $nid = $chatM->updateMembers(array('signature'=>$_POST['sign']), array('uid'=>$this->uid));
        echo  json_encode($nid);
    }
    
    function getInfomation_action(){
        $id = $_GET['?id'];
        $type = $_GET['type'] ;
        $chatM = $this->MODEL('chat');
        if ($type == 'friend') {
            $info = $chatM->getMember(array('uid'=>$this->uid));
            $info['type'] = $type;
            $res['code'] = 0;
            $res['msg'] = "";
            $res['data'] = $info;
            echo  json_encode($res);
        }
    }
    
    function saveInfo_action(){
        $sql = array_filter($_POST);
        $chatM = $this->MODEL('chat');
        $nid = $chatM->updateMembers($sql, array('uid'=>$this->uid)) ;
        $res['code'] = 0;
        $res['msg'] = '';
        echo  json_encode($res);
    }
    
    function chatLog_action(){
        $toid =$_GET['to'];
        if (strpos($toid,'phpyun')!==false){
            $toid = str_replace('phpyun', '', $toid);
        }
        $chatM = $this->MODEL('chat');
        
        $chatto = $chatM->getChat(array('beginid'=>$toid.'-'.$this->uid),array('field'=>'`beginid`'));
        $chatfrom = $chatM->getChat(array('beginid'=>$this->uid.'-'.$toid),array('field'=>'`beginid`'));
        if ($chatto['beginid']){
            $beginid = $chatto['beginid'];
        }elseif ($chatfrom['beginid']){
            $beginid = $chatfrom['beginid'];
        }else{
            $beginid = $this->uid.'-'.$toid;
        }
        $time = $_GET['timestamp'];
        






        $from = $chatM->getMember(array('uid'=>$this->uid),array('field'=>'`uid`,`username`,`nickname`'));
        $to = $chatM->getMember(array('uid'=>$toid),array('field'=>'`uid`,`username`,`nickname`'));
        $chatM->updateLogs(array('last'=>0),array('beginid'=>$beginid));
        $data['from'] = $from['uid'];
        $data['to'] = $to['uid'];
        $data['uid'] = $this->uid;
        $data['beginid'] = $beginid;
        $data['fname'] = $from['nickname'];
        $data['tname'] = $to['nickname'];
        $data['content'] = $_GET['content'];
        $data['sendTime'] = $time;
        $data['type'] = $_GET['type'];
        if (!$data['from']) {
            $res['code'] = -1;
            echo  json_encode($res);
            exit();
        }
        $success = $chatM->addChat($data);
        if($this->config['sy_push_open']==1){
            
            $status = $this->userStatus($to['username']);
            if ($status=='offline'){
                $content = mb_substr($data['content'], 0,24,'utf-8');
                $this->makePush($from['nickname'], $content, $toid);
            }
        }
        if ($success) {
            $res['code'] = 0;
        }else{
            $res['code'] = -1;
        }
        $res['msg'] = "";
        echo  json_encode($res);
    }
    
    function getChat_action(){
        $id = $_GET['?id'];
        if (strpos($id,'phpyun')!==false){
            $id = str_replace('phpyun', '', $id);
        }
        $rows = 20;
        $chatM = $this->MODEL('chat');
        
        $chatfrom = $chatM->getChat(array('from'=>$this->uid,'to'=>$id),array('field'=>'`beginid`'));
        $chatto = $chatM->getChat(array('from'=>$id,'to'=>$this->uid),array('field'=>'`beginid`'));
        if ($chatfrom['beginid']){
            $beginid=$chatfrom['beginid'];
        }else{
            $beginid=$chatto['beginid'];
        }
        $chatnum = $chatM->getChatNum(array('beginid'=>$beginid));
        if ($chatnum>0) {
            $res['code'] = 0;
        }else{
            $res['code'] = -1;
        }
        $res['count'] = $chatnum;
        $res['data']['limit'] = $rows;
        echo  json_encode($res);
    }
    function getChatPage_action(){
        $id = $_GET['?id'];
        if (strpos($id,'phpyun')!==false){
            $id = str_replace('phpyun', '', $id);
        }
        $page = $_GET['page'] ;
        $type = $_GET['type'] ;
        $rows = 20;
        $select_from = ($page-1) * $rows;
        $chatM = $this->MODEL('chat');
        if ($type == 'friend') {
            
            $chatfrom = $chatM->getChat(array('from'=>$this->uid,'to'=>$id),array('field'=>'`beginid`'));
            $chatto = $chatM->getChat(array('from'=>$id,'to'=>$this->uid),array('field'=>'`beginid`'));
            if ($chatfrom['beginid']){
                $beginid=$chatfrom['beginid'];
            }else{
                $beginid=$chatto['beginid'];
            }
            $chats = $chatM->getChats(array('beginid'=>$beginid),array('orderby'=>'id','limit'=>$select_from.','.$rows));
            $from = $chatM->getMember(array('uid'=>$this->uid));
            $to = $chatM->getMember(array('uid'=>$id));
            $res['count'] = "";
            foreach ($chats as $k=>$v){
                $chatlog[$k]['from']= $v['from'];
                $chatlog[$k]['cid'] = 0;
                $chatlog[$k]['content'] = $v['content'];
                if ($v['from'] == $this->uid){
                    $chatlog[$k]['fromid'] = $from['username'];
                    $chatlog[$k]['id'] = $from['username'];
                    $chatlog[$k]['mine'] = true;
                    $chatlog[$k]['username'] = $from['nickname'];
                    if (file_exists(str_replace('./data',APP_PATH.'data',$from['avatar']))){
                        $chatlog[$k]['avatar']=str_replace('./data',$this->config['sy_weburl'].'/data',$from['avatar']);
                    }else{
                        $chatlog[$k]['avatar']=$this->config['sy_weburl']."/".$this->config['sy_chat_logo'];;
                    }
                }elseif ($v['to'] == $this->uid){
                    $chatlog[$k]['fromid'] = $to['username'];
                    $chatlog[$k]['id'] = $to['username'];
                    $chatlog[$k]['mine'] = false;
                    $chatlog[$k]['username'] = $to['nickname'];
                    if (file_exists(str_replace('./data',APP_PATH.'data',$to['avatar']))){
                        $chatlog[$k]['avatar']=str_replace('./data',$this->config['sy_weburl'].'/data',$to['avatar']);
                    }else{
                        $chatlog[$k]['avatar']=$this->config['sy_weburl']."/".$this->config['sy_chat_logo'];;
                    }
                }
                $chatlog[$k]['sendTime'] = $v['sendTime'];
                $chatlog[$k]['type'] = 'friend';
            }
        }
        if ($chats) {
            $res['code'] = 0;
        }else{
            $res['code'] = -1;
        }
        $res['data'] = $chatlog;
        echo  json_encode($res);
    }
    
    function getUser_action(){
        $chatM = $this->MODEL('chat');
        $username = $_GET['username'];
        $user = $chatM->getMember(array('username'=>$username),array('field'=>'`nickname`,`avatar`'));
        if (file_exists(str_replace('./data',APP_PATH.'data',$user['avatar']))){
            $user['avatar']=str_replace('./data',$this->config['sy_weburl'].'/data',$user['avatar']);
        }else{
            $user['avatar']=$this->config['sy_weburl']."/".$this->config['sy_chat_logo'];;
        }
        $user['status'] = $this->userStatus($username);
        $res['code'] = 0;
        $res['msg'] = "";
        $res['data'] = $user;
        echo  json_encode($res);
    }
    
    function getdown_action(){
        $uid = $_POST['id'];
        if (strpos($uid,'phpyun')!==false){
            $uid = str_replace('phpyun', '', $uid);
        }
        $eid = (int)$_POST['eid'];
        $resumeM = $this->MODEL('resume');
        if ($_POST['eid']){
            $where = array('eid'=>$eid,'comid'=>$this->uid);
        }else{
            $where = array('uid'=>$uid,'comid'=>$this->uid);
        }
        $row = $resumeM->SelectDownResumeOne($where);
        
        $comlook=1;
        if ($this->usertype==2){
            $userid_job=$this->obj->DB_select_once("userid_job","`com_id`='".$this->uid."' and `uid`='".$uid."'");
            $statis = $this->obj->DB_select_once("company_statis","`uid`='".$this->uid."'","rating");
            if ($userid_job && in_array($statis['rating'], @explode(',', $this->config['com_look']))){
                $comlook=2;
            }
            $userid_msg=$this->obj->DB_select_once("userid_msg","`fid`='".$this->uid."' and `uid`='".$uid."' and `is_browse`=3");
            if($userid_msg){
                $comlook=2;
            }
        }
        if (!$row && $comlook==1){
            
            if (!$_POST['eid'] && $_POST['id']){
                $resume = $resumeM->SelectExpectOne(array('uid'=>$uid,'defaults'=>1),'`id`,`name`,`height_status`');
                if ($resume['height_status'] == 2){
                    $resume_href = 'a('.Url('wap',array('c'=>'ltresume','a'=>'show','id'=>$resume['id'])).')['.$resume['name'].']';
                }else{
                    $resume_href = 'a('.Url('wap',array('c'=>'resume','a'=>'show','id'=>$resume['id'])).')['.$resume['name'].']';
                }
                
                $chatM = $this->MODEL('chat');
                $caches = $chatM->getCaches(array('from'=>$uid,'to'=>$this->uid));
                $res['cache']=0;
                if ($caches){
                    $res['cache']=1;
                }
            }
            $res['href'] = $resume_href;
            $res['code'] = 1;
            echo  json_encode($res);
        }else{
            $res['code'] = 0;
            echo  json_encode($res);
        }
    }
    
    function uploadImage_action(){
        $UploadM=$this->MODEL("upload");
        $upload=$UploadM->Upload_pic("../data/upload/chat/",false);
        $pic=$upload->picture($_FILES['file']);
        $picmsg=$UploadM->picmsg($pic,$_SERVER['HTTP_REFERER']);
        if($picmsg['status'] == $pic){
            $return =array('code'=>1, 'msg'=>$picmsg['msg']);
        }else{
            $picurl=str_replace("../data/upload/chat", $this->config['sy_weburl']."/data/upload/chat", $pic);
            $return = array(
                'code' => 0,
                'msg' => '',
                'data' => array('src'=>$picurl)
            );
        }
        echo json_encode($return);
    }
    
    function saveSkin_action(){
        $filename = $_POST['filename'];
        $chatM = $this->MODEL('chat');
        $data['skin'] = $filename;
        $nid = $chatM->updateMembers($data, array('uid'=>$this->uid));
        echo  json_encode($nid);
    }
    
    function resource_action(){
        $chatM = $this->MODEL('chat');
        $user = $chatM->getMember(array('uid'=>$this->uid),array('field'=>'resource'));
        if ($_POST['resource']==$user['resource']){
            $data['code']=1;
        }else{
            $data['code']=0;
        }
        echo json_encode($data);
    }
    
    function isResume_action(){
        if ($this->uid){
            $resumeM = $this->model('resume');
            $where['uid'] = $this->uid;
            $where['defaults'] = 1;
            if ($_POST['jobtype']=='lt'){
                $where['height_status'] = 2;
            }
            $row = $resumeM->SelectExpectOne($where);
            if(is_array($row)&&!empty($row)){
                $data['code']=1;
                
                if ($row['r_status']==1){
                    $resumeM = $this->MODEL('resume');
                    $useridmsg = $resumeM->GetUserMsg(array('uid'=>$this->uid,'fid'=>intval($_POST['id'])));
                    
                    if ($useridmsg){
                        $data['code']=5;
                    }
                }else{
                    if ($row['r_status']==3){
                        $data['code']=6;
                    }elseif ($row['r_status']==0){
                        $data['code']=7;
                    }else{
                        $data['code']=8;
                    }
                }
            }else{
                if ($_POST['jobtype']=='lt'){
                    $data['code']=3;
                }else{
                    $data['code']=2;
                }
            }
        }else{
            $data['code']=4;
        }
        echo json_encode($data);
    }
    
    function isDown_action(){
        if ($this->uid){
            $from = $_POST['send'];
            $to = $_POST['to'];
            $tostatus = $this->userStatus($to);
            if (strpos($to,'phpyun')!==false){
                $to = str_replace('phpyun', '', $to);
            }
            $chatM = $this->MODEL('chat');
            $fuser = $chatM->getMember(array('uid'=>$to),array('field'=>'`uid`,`username`,`nickname`,`msg_chat`'));
            
            if ($tostatus=='offline' && (time()-$fuser['msg_chat'])>86400){
                $userinfoM = $this->model('userinfo');
                $user = $userinfoM->GetMemberOne(array('uid'=>$to),array('field'=>'`username`,`moblie`'));
                if ($user['moblie']){
                    $data=array('uid'=>$to,'name'=>$user['username'],'cuid'=>$this->uid,'cname'=>$this->username,'type'=>'chat','date'=>date("Y-m-d H:i:s"),'moblie'=>$user['moblie'],'webname'=>$this->config['sy_webname']);
                    $notice = $this->MODEL('notice');
                    $notice->sendSMSType($data);
                    $chatM->updateMembers(array('msg_chat'=>time()),array('uid'=>$to));
                }
            }
            if ($from==$this->uid){
                
                if (($this->usertype == 2 || $this->usertype == 3) && $this->config['sy_chat_type']==2){
                    $resumeM = $this->model('resume');
                    $down = $resumeM->SelectDownResumeOne(array('uid'=>$to,'comid'=>$this->uid));
                    $comlook=1;
                    $userid_job=$this->obj->DB_select_once("userid_job","`com_id`='".$this->uid."' and `uid`='".$to."'");
                    $statis = $this->obj->DB_select_once("company_statis","`uid`='".$this->uid."'","rating");
                    if ($userid_job && in_array($statis['rating'], @explode(',', $this->config['com_look']))){
                        $comlook=2;
                    }
                    $userid_msg=$this->obj->DB_select_once("userid_msg","`fid`='".$this->uid."' and `uid`='".$to."' and `is_browse`=3");
                    if($userid_msg){
                        $comlook=2;
                    }
                    if ($down || $comlook==2){
                        $code = 1;  
                    }else{
                        $code = 2;  
                        if ($this->config['chat_platform']==2){   
                            $this->isEasemobUser($to);
                        }elseif ($this->config['chat_platform']==3){  
                            $this->isRongUser($to);
                        }
                        $tuser = $chatM->getMember(array('uid'=>$this->uid),array('field'=>'`uid`,`username`,`nickname`'));
                        $row = $resumeM->SelectExpectOne(array('uid'=>$to,'defaults'=>1),'`id`,`name`');
                        if ($row){
                            if ($row['height_status'] == 2 && $this->usertype == 3){
                                $resume_href = 'a('.Url('wap',array('c'=>'ltresume','a'=>'show','id'=>$row['id'])).')['.$row['name'].']';
                            }else{
                                $resume_href = 'a('.Url('wap',array('c'=>'resume','a'=>'show','id'=>$row['id'])).')['.$row['name'].']';
                            }
                            
                            $chatto = $chatM->getChat(array('beginid'=>$to.'-'.$this->uid),array('field'=>'`beginid`'));
                            $chatfrom = $chatM->getChat(array('beginid'=>$this->uid.'-'.$to),array('field'=>'`beginid`'));
                            if ($chatto['beginid']){
                                $beginid = $chatto['beginid'];
                            }elseif ($chatfrom['beginid']){
                                $beginid = $chatfrom['beginid'];
                            }else{
                                $beginid = $this->uid.'-'.$to;
                            }
                            $content = '您好！我的简历：'.$resume_href;
                            $this->sendChat($fuser,$tuser,$content,$_POST['timestamp'],$beginid);
                            $data['href'] = $resume_href;
                        }
                    }
                }else{
                    $code = 3;
                }
            }
        }else{
            $code = 4;
        }
        $data['code'] = $code;
        echo json_encode($data);
    }
    
    function isJob_action(){
        if ($this->uid){
            if ($this->usertype==2){
                $jobM = $this->MODEL('job');
                $job = $jobM->GetComjobOne(array('uid'=>$this->uid,'`r_status`<>2 and `status`<>1'));
                $code = 2;
            }elseif ($this->usertype==3){
                $lietouM = $this->MODEL('lietou');
                $job = $lietouM->GetLietoujobOne(array('uid'=>$this->uid,'zp_status'=>0,'`r_status`<>2', 'status'=>'1'));
                $code = 3;
            }
            if ($job){
                $code = 1;  
            }
        }else{
            $code = 4;
        }
        $data['code'] = $code;
        echo json_encode($data);
    }
    
    function savecache_action(){
        $from = $_POST['id'];
        if (strpos($from,'phpyun')!==false){
            $from = str_replace('phpyun', '', $from);
        }
        $chatM = $this->MODEL('chat');
        $nid = $chatM->addCache(array('from'=>$from,'to'=>$this->uid,'content'=>$_POST['content'],'time'=>$_POST['timestamp']));
    }
    
    function getcache_action(){
        $chatM = $this->MODEL('chat');
        $caches = $chatM->getCaches(array('to'=>$this->uid,'status'=>2));
        foreach ($caches as $v){
            $ids[]=$v['id'];
            $fuid[]=$v['from'];
        }
        $chatM->updateCaches(array('status'=>1),array("`id` in (".@pylode(',', $ids).")"));
        $from = $chatM->getMembers(array("`uid` in (".@pylode(',', array_unique($fuid)).")"),array('field'=>'`uid`,`username`,`nickname`'));
        $to = $chatM->getMember(array('uid'=>$this->uid),array('field'=>'`uid`,`username`,`nickname`'));
        foreach ($caches as $key=>$v){
            foreach ($from as $val){
                if ($v['from']==$val['uid']){
                    $caches[$key]['from'] =$val;
                }
            }
        }
        foreach ($caches as $v){
            $this->sendChat($v['from'],$to,$v['content'],time()*1000,$v['from'].'-'.$this->uid);
        }
    }
    function setMsgStatus_action(){
        $from = $_POST['id'];
        if (strpos($from,'phpyun')!==false){
            $from = str_replace('phpyun', '', $from);
        }
        $chatM = $this->MODEL('chat');
        $chatlog=$chatM->getChat(array('from'=>$from,'to'=>$this->uid),array('field'=>'`beginid`'));
        if ($chatlog['beginid']){
            $chatM->updateLogs(array('status'=>1),array('to'=>$this->uid,'beginid'=>$chatlog['beginid']));
        }
    }
}
?>