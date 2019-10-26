<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class chat_model extends model{
    
    function getAppToken(){
        include(PLUS_PATH.'config.php');
        
        $Token = $config['easemob_apptoken'];
        $TokenTime = $config['easemob_tokentime'];
        $NowTime = time();
        
        if(($NowTime-$TokenTime)>(86400*50) || !$Token){
            $orgname     = $config['sy_easemob_orgname'];
            $appname     = $config['sy_easemob_appname'];
            
            $Url         = 'https://a1.easemob.com/'.$orgname.'/'.$appname.'/token';
            $client_id   = $config['sy_easemob_clientid'];
            $client_secret=$config['sy_easemob_clientSecret'];
            $postData = array(
                'grant_type' => 'client_credentials',
                'client_id' => $client_id,
                'client_secret' => $client_secret
            );
            $CurlReturn  = CurlPost($Url,json_encode($postData));
            $result      = json_decode($CurlReturn,true);
            if ($result['access_token']){
                $config['easemob_apptoken']      = $result['access_token'];
                $config['easemob_application']   = $result['application'];
                $config['easemob_tokentime']     = time();
                made_web(PLUS_PATH."config.php",ArrayToString($config),"config");
                return $config['easemob_apptoken'];
            }else{
                return 1;
            }
        }else{
            return $Token;
        }
    }
    
    function getEasemobToken($username,$password){
        if ($this->getAppToken()!=1){
            $Url = 'https://a1.easemob.com/'.$this->config['sy_easemob_orgname'].'/'.$this->config['sy_easemob_appname'].'/token';
            $postData = array(
                'grant_type' => 'password',
                'username' => $username,
                'password' => $password
            );
            $authorization = 'Bearer '.$this->getAppToken();
            $headers = array('Authorization:'.$authorization);
            $CurlReturn  = CurlPost($Url,json_encode($postData),$headers);
            $result      = json_decode($CurlReturn,true);
            if ($result['access_token']){
                return $result;
            }else{
                return 1;
            }
        }else{
            return 3;
        }
    }
    
    function addEasemob($username,$password){
        if ($this->getAppToken()!=1){
            $Url = 'https://a1.easemob.com/'.$this->config['sy_easemob_orgname'].'/'.$this->config['sy_easemob_appname'].'/users';
            $postData = array(
                'username' => $username,
                'password' => $password,
                'nickname' => $username
            );
            $authorization = 'Bearer '.$this->getAppToken();
            $headers = array('Authorization:'.$authorization);
            $CurlReturn  = CurlPost($Url,json_encode($postData),$headers);
            $result      = json_decode($CurlReturn,true);
            if ($result['entities']){
                return 2;
            }else{
                return 1;
            }
        }else{
            return 3;
        }
    }
    
    function getEasemobUser($username){
        if ($this->getAppToken()!=1){
            $Url = 'https://a1.easemob.com/'.$this->config['sy_easemob_orgname'].'/'.$this->config['sy_easemob_appname'].'/users/'.$username;
            $authorization = 'Bearer '.$this->getAppToken();
            $headers = array('Authorization:'.$authorization);
            $CurlReturn  = CurlPost($Url,'',$headers);
            $result      = json_decode($CurlReturn,true);
            if ($result['entities']){
                return 2;
            }else{
                return 1;
            }
        }else{
            return 3;
        }
    }
    
    function userStatus($username){
        if ($this->getAppToken()!=1){
            $Url = 'https://a1.easemob.com/'.$this->config['sy_easemob_orgname'].'/'.$this->config['sy_easemob_appname'].'/users/'.$username.'/status';
            $authorization = 'Bearer '.$this->getAppToken();
            $headers = array('Authorization:'.$authorization);
            $CurlReturn  = CurlPost($Url,'',$headers);
            $result      = json_decode($CurlReturn,true);
            if ($result['data'][$username] == 'online'){
                return 'online';
            }elseif ($result['data'][$username] == 'offline'){
                return 'offline';
            }else{
                return 0;
            }
        }
    }
    
    function sendMsg($from,$to,$type,$msg){
        if ($this->getAppToken()!=1){
            $Url = 'https://a1.easemob.com/'.$this->config['sy_easemob_orgname'].'/'.$this->config['sy_easemob_appname'].'/messages';
            $authorization = 'Bearer '.$this->getAppToken();
            $headers = array('Authorization:'.$authorization);
            if ($type == 'txt'){
                $postData = array(
                    'target_type' => 'users',
                    'target' => array($to),
                    'msg' => array('type'=>'txt','msg'=>$msg),
                    'from' => $from
                );
            }elseif ($type == 'img'){
                $postData = array(
                    'target_type' => 'users',
                    'target' => array($to),
                    'msg' => array(
                        'type'=>'img',
                        'url' => 'https://a1.easemob.com/'.$this->config['sy_easemob_orgname'].'/'.$this->config['sy_easemob_appname'].'/chatfiles/'.$msg['uuid'],
                        'filename' => $msg['filename'],
                        'secret' => $msg['secret'],
                        'size' => array('width'=>$msg['width'],'height'=>$msg['height'])
                    ),
                    'from' => $from
                );
            }
            $CurlReturn  = CurlPost($Url, json_encode($postData), $headers);
            $result      = json_decode($CurlReturn,true);
            if ($result['data'][$to] == 'success'){
                return 2;
            }else{
                return 1;
            }
        }
    }
    
    function addMember($Values=array()){
        return $this->insert_into('chat_member',$Values);
    }
    
    function getMember($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('chat_member',$WhereStr,$FormatOptions['field']);
    }
    
    function getMembers($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('chat_member',$WhereStr,$FormatOptions['field']);
    }
    
    
    function updateMembers($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('chat_member',$ValuesStr,$WhereStr);
    }
    
    function addChat($Values=array()){
        return $this->insert_into('chat_log',$Values);
    }
    
    function getChat($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('chat_log',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    
    function getChats($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('chat_log',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    
    function getChatNum($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_select_num('chat_log',$WhereStr);
    }
    
    function deleteLog($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all('chat_log',$WhereStr,'');
    }
    
    function updateLogs($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('chat_log',$ValuesStr,$WhereStr);
    }
    
    function addCache($Values=array()){
        return $this->insert_into('chat_log_cache',$Values);
   }
   
   function getCaches($Where=array(),$Options=array('field'=>null)){
       $WhereStr=$this->FormatWhere($Where);
       $FormatOptions=$this->FormatOptions($Options);
       return $this->DB_select_all('chat_log_cache',$WhereStr,$FormatOptions['field']);
   }
   
   function updateCaches($Values=array(),$Where=array()){
       $WhereStr=$this->FormatWhere($Where);
       $ValuesStr=$this->FormatValues($Values);
       return $this->DB_update_all('chat_log_cache',$ValuesStr,$WhereStr);
   }
}
?>