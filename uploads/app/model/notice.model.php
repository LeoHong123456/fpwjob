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


class notice_model extends model{

    private $smtp = null;
    private function _getSmtp($serverId=''){
		if($this->config['sy_email_online']==1){
			 include_once(LIB_PATH."email.class.php");
			
			include(PLUS_PATH."emailconfig.cache.php");
			
			if($serverId){
				if(is_array($emailconfig)){
					foreach($emailconfig as $value){
						if($value['id'] == $serverId){
						$emailConfig = $value;
						break;
						}	
					}
				}
			}else{
				if(count($emailconfig)>0){
					$rand = array_rand($emailconfig,1);
					$emailConfig = $emailconfig[$rand];
				}
			}
			if($emailConfig['smtpserver'] && $emailConfig['smtpuser'] && $emailConfig['smtppass']){
				if($emailConfig['smtpport']=='465'){
					$smtpserver = "ssl://".$emailConfig["smtpserver"];
					$smtpserverport = '465';
				}else{
					$smtpserver = $emailConfig["smtpserver"];
					$smtpserverport = '25';
				}
				return new smtp($smtpserver,$smtpserverport,true,$emailConfig['smtpuser'],$emailConfig['smtppass'],$emailConfig['smtpnick']);
			}else{
				return false;
			}
		}
		if($this->config['sy_email_online']==2){
			 include_once(LIB_PATH."aliyunemail.class.php");
			 $accesskey=$this->config['accesskey'];  
			 $accesssecret=$this->config['accesssecret'];  
			 $accountname=$this->config['ali_email'];  
			 $fromalias=$this->config['ali_name'];  
			 $tagname=$this->config['ali_tag'];  
			 
			 return new aliyun_sendemail($accesskey,$accesssecret,$accountname,$fromalias,$tagname); 
			 
		}

    }
    
    private function _get_email_tpl(){
    	$tpl=$this->DB_select_all("templates","1");
    	if(is_array($tpl)){
    		foreach($tpl as $v){
    			$rows[$v["name"]]["title"]=$v["title"];
    			$rows[$v["name"]]["content"]=$v["content"];
    		}
    	}
    	return $rows;
    }
    
    public function _tpl($tpl, $data){
        unset($data["type"]);
        $re=array("{webname}","{weburl}","{webtel}");
        $re2[]=$this->config["sy_webname"];
        $re2[]=$this->config["sy_weburl"];
        $re2[]=$this->config["sy_freewebtel"];
        $tpl=str_replace($re,$re2,$tpl);
        foreach($data as $k=>$v){
          $tpl=str_replace("{".$k."}",$v,$tpl);
        }
        return $tpl;
    }
        
    
    private function _isKey($key, $arr){
        if(array_key_exists($key, $arr) && trim($arr[$key]) != ''){
          return trim($arr[$key]);
        }
        return false;
    }

    
    public function sendEmail($data){
		if($this->config['sy_email_online']==1){
			if(!$this->smtp){
				$serverId = array_key_exists('smtpServerId', $data) ? $data['smtpServerId'] : '';
				$this->smtp = $this->_getSmtp($serverId);
			}
			if(!$this->smtp){
				return array('status' => -1, 'msg' => '还没有配置邮箱，请联系管理员！');
			}
			
			if($this->_isKey('email', $data) == false || CheckRegEmail($data['email']) == false){
				return array('status' => -1, 'msg' => 'email地址错误');
			}
			
			if(!$this->_isKey('subject', $data) || !$this->_isKey('content', $data)){
				return array('status' => -1, 'msg' => 'email主题/正文为空');
			}
			
			$sendid = $this->smtp->sendmail($data['email'],$data['subject'],$data['content'],"HTML",$data['cc'],$data['bcc'],$data['additional_headers']);
			if($sendid){
				$state = '1';
				$retval = array('status' => $sendid, 'msg' => 'email发送成功！');
			}else{
				$state = '0';
				$retval = array('status' => -1, 'msg' => 'email发送失败！');
			}
		}
		
		if($this->config['sy_email_online']==2){
		    if(!$this->smtp){
		        $this->smtp = $this->_getSmtp();
		    }
		    if(!$this->smtp){
		        return array('status' => -1, 'msg' => '还没有配置邮箱，请联系管理员！');
		    }
			$sendid = $this->smtp->sendemail($data['email'],$data['subject'],$data['content']);
			if($sendid){
				$state = '1';
				$retval = array('status' => $sendid, 'msg' => 'email发送成功！');
			}else{
				$state = '0';
				$retval = array('status' => -1, 'msg' => 'email发送失败！');
			}
		}
		
        
        
        $tbContent = $data['tbContent'] ? $data['tbContent'] : $data['content'];
        $retval=$this->insert_into("email_msg",array('uid'=>$data['uid'],'name'=>$data['name'],
          'cuid'=>$data['cuid'],'cname'=>$data['cname'],'email'=>$data['email'],
          'title'=>$data['subject'],'content'=>$tbContent ,'state'=>$state,'ctime'=>time(),'smtpserver'=>$this->smtp->user));
        return $retval;
    }

    
    public function sendEmailType($data){
        if(!$this->_isKey("type", $data) 
          || !$this->_isKey("sy_email_".$data["type"], $this->config) 
          || $this->config["sy_email_".$data["type"]] != 1){
          return array('status' => -1, 'msg' => "未开启email提醒，请联系管理员！（code:{$data['type']}）");
        }
        
        $tpl = $this->_get_email_tpl();
        $title_tpl = $tpl["email".$data["type"]]["title"];
        $content_tpl = $tpl["email".$data["type"]]["content"];
        $data['subject'] = $this->_tpl($title_tpl,$data);
        $content = $this->_tpl($content_tpl,$data);
        $data['content'] = html_entity_decode($content,ENT_QUOTES);
        return $this->sendEmail($data);
    }

    private function postSMS($type="msgsend",$data=''){
    	$data['content'] = str_replace(array(" ","　","\t","\n","\r"),array("","","","",""),$data['content']);
    	$url='http://msg.phpyun.com/send.php';
    	$url.='?user='.iconv('UTF-8','GBK',$data['uid']).'&pass='.$data['pwd'].'&code='.$data['key'].'&moblie='.$data['mobile'].'&content='.iconv('UTF-8','GBK//IGNORE',$data['content']).'&time='.$data['time'].'';
    	if (extension_loaded('curl')){
    	    $file_contents = CurlGet($url);
    	}else if(function_exists('file_get_contents')){
    	    $file_contents = file_get_contents($url);
    	}
        return $file_contents;
    }
  
    
    public function sendSMS($data){
        if(!$this->config["sy_msguser"] || !$this->config["sy_msgpw"] 
          || !$this->config["sy_msgkey"]||$this->config['sy_msg_isopen']!='1'){
          return array('status' => -1, 'msg' => "还没有配置短信，请联系管理员！");
        }
    
        $data['mobile'] = $data['moblie'] ? $data['moblie'] : $data['mobile'];
        if($this->_isKey('mobile', $data) == false || CheckMoblie($data['mobile']) == false){
            return array('status' => -1, 'msg' => '手机号错误');
        }
		if($this->config['sy_web_mobile']!=""){
			$regnamer=@explode(";",$this->config['sy_web_mobile']);
			if(in_array($data['mobile'],$regnamer)){
				return array('status' => -1, 'msg' => '该手机号已被禁止使用');
			}
		}
			
        if($this->_isKey('content', $data) == false || $data['content'] == ""){
            return array('status' => -1, 'msg' => '短信内容为空');
        }
    
        
        $msguser=$this->config["sy_msguser"];
        $msgpw= $this->config["sy_msgpw"];
        $msgkey=$this->config["sy_msgkey"];
        
        $time = $data['time'] ? $data['time'] : '';
        $mid = $data['mid'] ? $data['mid'] : '';
        
        $row = array(
    			'uid'=>$msguser,
    			'pwd'=>$msgpw,
    			'key'=>$msgkey,
    			'mobile'=>$data['mobile'],
    			'content'=>$data['content'],
    			'time'=>$time,
    			'mid'=>$mid
    		);
    	$re= $this->postSMS("msgsend",$row);
        
        
        $sql_data["uid"] = $data['uid'];
    	$sql_data["name"] = $data['name'];
    	$sql_data["cuid"] = $data['cuid'];
    	$sql_data['cname'] = $data['cname'] ? $data['cname'] : '系统';
    	$sql_data["moblie"] = $data['mobile'];
    	$sql_data["ctime"] = time();
        $sql_data["content"] = $data['content'];
    
    	if(trim($re) =='1'){
            
            include_once('warning.model.php');
            $warning = new warning_model($this->db,$this->def,
            array('uid'=>$this->uid,'username'=>$this->username,'usertype'=>$this->usertype));
            $warning->warning(5);
    
            $sql_data['state']="0";
            $sql_data['ip']=fun_ip_get();
    		$sqlResult = $this->insert_into("moblie_msg",$sql_data); 
            return array('status' => 1, 'msg' => "发送成功!");
    	}else{
    		$sql_data["state"] = $re;
            $this->insert_into("moblie_msg",$sql_data);
          
            include(CONFIG_PATH."db.data.php");
    		if($arr_data['msgreturn'][$re]){
    			return array('status' => -1, 'msg' => "发送失败！状态：".$arr_data['msgreturn'][$re]);
    		}else{
    			return array('status' => -1, 'msg' => "发送失败！状态：".$re );
    		}
        }
    }

    public function sendSMSType($data){
        if(!$this->_isKey("type", $data) 
        || !$this->_isKey("sy_msg_".$data["type"], $this->config) 
        || $this->config["sy_msg_".$data["type"]] !=1){ 
          return array('status' => -1, 'msg' => "未开启短信提醒，请联系管理员！（code:{$data['type']}）");
        }
        
        $tpl = $this->_get_email_tpl();
        $content_tpl=$tpl["msg".$data["type"]]["content"];
        $data['content'] = $this->_tpl($content_tpl,$data);
        return $this->sendSMS($data);
    }

    public function getBusinessInfo($name){
        if($this->config["sy_msguser"] && $this->config['sy_msgpw'] && $this->config['sy_msgkey']){
            
            $comNameNum = $this->DB_select_num('company',"`name`='".$name."'");
            
            if($comNameNum>0){
                $url='http://msg.phpyun.com/business.php';
                $url.='?user='.$this->config["sy_msguser"].'&pass='.$this->config["sy_msgpw"].'&code='.$this->config['sy_msgkey'].'&name='.iconv('utf-8','gbk',$name);
                if (extension_loaded('curl')){
                    $file_contents = CurlGet($url);
                }else if(function_exists('file_get_contents')){
                    $file_contents = file_get_contents($url);
                }
                $return = json_decode($file_contents,true);
                
                if(!empty($return['content'])){
                    if($return['content']['estiblishTime']){
                        $msectime = $return['content']['estiblishTime'] * 0.001;
                        if(strstr($msectime,'.')){
                            sprintf("%01.3f",$msectime);
                            list($usec, $sec) = explode(".",$msectime);
                            $sec = str_pad($sec,3,"0",STR_PAD_RIGHT);
                        }else{
                            $usec = $msectime;
                            $sec = "000";
                        }
                        $est = date("Y-m-d",$usec);
                        $return['content']['estiblishTime'] =$est;
                	}
                    
                    if($return['content']['fromTime']){
                		
                		
                		
                		$msectime = $return['content']['fromTime'] * 0.001;
                        if(strstr($msectime,'.')){
                            sprintf("%01.3f",$msectime);
                            list($usec, $sec) = explode(".",$msectime);
                            $sec = str_pad($sec,3,"0",STR_PAD_RIGHT);
                        }else{
                            $usec = $msectime;
                            $sec = "000";
                        }
                        $est = date("Y-m-d",$usec);
                        $return['content']['fromTime'] =$est;
                    }
                	if($return['content']['toTime']){
                		$toTime=new DateTime('@'.substr($return['content']['toTime'],0,10));
                		
                		$toTime->setTimezone(new DateTimeZone('PRC'));
                		$return['content']['toTime'] = $toTime->format('Y-m-d');
                	}else{
                		$return['content']['toTime'] = '长期';
                	}
                	
                	
                }
            }
            return $return;
        }
    }
    
  	public function checkTime($data){
   		$cert_validity = 1800; 
  		$time = time();
  		$ctime = ($time - $data);
 		if( $ctime <= $cert_validity){
  			return true;
 		}else{
  			return false;
 		}
 	}
}
?>