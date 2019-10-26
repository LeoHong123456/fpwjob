<?php
class Smarty_Internal_Compile_Fast extends Smarty_Internal_CompileBase{
    public $required_attributes = array('item');
    public $optional_attributes = array('name', 'key', 'ispage', 'limit', 'keyword','delid','islt','add_time');
    public $shorttag_order = array('from', 'item', 'key', 'name');
    public function compile($args, $compiler, $parameter){
        $_attr = $this->getAttributes($compiler, $args);

        $from = $_attr['from'];
        $item = $_attr['item'];
        $name = $_attr['item'];
        $name=str_replace('\'','',$name);
        $name=$name?$name:'list';$name='$'.$name;
        if (!strncmp("\$_smarty_tpl->tpl_vars[$item]", $from, strlen($item) + 24)) {
            $compiler->trigger_template_error("item variable {$item} may not be the same variable as at 'from'", $compiler->lex->taglineno);
        }
        //自定义标签START
        $OutputStr=''.$name.'=array();global $db,$db_config,$config;eval(\'$paramer='.str_replace('\'','\\\'',ArrayToString($_attr,true)).';\');
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

    if(isUseSphinx()){
      $now = time();
      $where = array();

      $where [] = array("setFilter", "status", array(1));
      $where [] = array("setFilterRange", "edate", $now, 9999999999);

      if($paramer["add_time"]>0){
        $time = $now - $paramer[\'add_time\']*86400;
        $where [] = array("setFilterRange", "ctime", $time, 9999999999);
      }

      //关键字
      if($paramer[keyword]){
        $where["keywords"] = $paramer[keyword];
      }

      if($paramer[\'delid\']){
        $where [] = array("setFilter", "id", array($paramer[\'delid\']), true);
      }

      //排序字段默认为更新时间
      if($paramer[order]){
        $orderField = str_replace("\'","",$paramer[order]);
      }else{
        $orderField = "ctime";
      }

      //排序规则 默认为倒序
      if(strtoupper(trim($paramer[sort])) == "ASC"){
        $orderType = "ASC";
      }else{
        $orderType = "DESC";
      }

      $sphinx = new sphinx();

      $sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

      if($paramer[ispage]){
        
        $limitArr = PageNav($paramer,$_GET,"once_job",$where,$Purl, "","0",$_smarty_tpl);
        if($limitArr["offset"] >= 0){
          $ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "once_job");
        }
        else{
          $ids = array();
        }
      }
      else if($paramer[limit]){
        $ids = $sphinx->getIds($where, 0, $paramer[limit], "once_job");
      }
      else{
        $ids = $sphinx->getIds($where, 0, 20, "once_job");
      }

      if(count(ids) > 0){
        $ids = implode(",", $ids);
        $where = "id in ($ids) order by field(id, $ids) ";
      }
      else{
        $where = "0";
      }
    }//end if($config["useSphinx"])
    else{
      $where = "`status`=\'1\' and `pay`<>\'1\' and `edate`>".time();
      if($config[did]){
        $where.=" AND `did`=\'".$config[\'did\']."\'";
      }
          if($paramer[\'add_time\']>0){
        $time=time()-$paramer[\'add_time\']*86400;
        $where.=" and `ctime`>".$time;
      }
      //关键字
      if($paramer[keyword]){
        $where.=" AND (`title` LIKE \'%".$paramer[keyword]."%\' or `companyname` LIKE \'%".$paramer[keyword]."%\')";
      }
      if($paramer[\'delid\']){
        $where.=" AND `id`<>\'".$paramer[\'delid\']."\'";
      }
      //排序字段默认为更新时间
      if($paramer[order]){
        $order = " ORDER BY `".str_replace("\'","",$paramer[order])."`";
      }else{
        $order = " ORDER BY ctime ";
      }
      //排序规则 默认为倒序
      if($paramer[sort]){
        $sort = $paramer[sort];
      }else{
        $sort = " DESC";
      }
      //查询条数
      if($paramer[limit]){
        $limit=" LIMIT ".$paramer[limit];
      }else{
        $limit=" LIMIT 20";
      }
      //自定义查询条件，默认取代上面任何参数直接使用该语句
      if($paramer[where]){
        $where = $paramer[where];
      }
      if($paramer[ispage]){
        $limit = PageNav($paramer,$_GET,"once_job",$where,$Purl,\'\',\'0\',$_smarty_tpl);
      }
      $where.=$order.$sort.$limit;
    }//end if($config["useSphinx"]) else
		
		'.$name.'=$db->select_all("once_job",$where);
		if(is_array('.$name.')){
			foreach('.$name.' as $key=>$value){
				$time=time()-$value[\'ctime\'];
				if($time>86400 && $time<604800){
					'.$name.'[$key][\'ctime\'] = ceil($time/86400)."天前";
				}elseif($time>3600 && $time<86400){
					'.$name.'[$key][\'ctime\'] = ceil($time/3600)."小时前";
				}elseif($time>60 && $time<3600){
					'.$name.'[$key][\'ctime\'] = ceil($time/60)."分钟前";
				}elseif($time<60){
					'.$name.'[$key][\'ctime\'] = "刚刚";
					'.$name.'[$key][\'redtime\'] =1;
				}else{
					'.$name.'[$key][\'ctime\'] = date("Y-m-d",$value[\'ctime\']);
				}
				if(!$value[\'pic\']||!file_exists(str_replace(\'./\',APP_PATH,$value[\'pic\']))){
					'.$name.'[$key][\'pic\'] = $config[\'sy_weburl\']."/".$config[\'sy_once_icon\'];
				}else{
					'.$name.'[$key][\'pic\']= $config[\'sy_weburl\']."/".$value[\'pic\'];
				}
			}
			if($paramer[keyword]!=""&&!empty('.$name.')){
				addkeywords(\'1\',$paramer[keyword]);
			}
		}';
        //自定义标签 END
        //global $DiyTagOutputStr;
       // $DiyTagOutputStr[]=$OutputStr;
        return SmartyOutputStr($this,$compiler,$_attr,'fast',$name,$OutputStr,$name);
    }
}
class Smarty_Internal_Compile_Fastelse extends Smarty_Internal_CompileBase{
    public function compile($args, $compiler, $parameter){
        $_attr = $this->getAttributes($compiler, $args);

        list($openTag, $nocache, $item, $key) = $this->closeTag($compiler, array('fast'));
        $this->openTag($compiler, 'fastelse', array('fastelse', $nocache, $item, $key));

        return "<?php }\nif (!\$_smarty_tpl->tpl_vars[$item]->_loop) {\n?>";
    }
}
class Smarty_Internal_Compile_Fastclose extends Smarty_Internal_CompileBase{
    public function compile($args, $compiler, $parameter){
        $_attr = $this->getAttributes($compiler, $args);
        if ($compiler->nocache) {
            $compiler->tag_nocache = true;
        }

        list($openTag, $compiler->nocache, $item, $key) = $this->closeTag($compiler, array('fast', 'fastelse'));

        return "<?php } ?>";
    }
}
