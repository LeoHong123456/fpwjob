<?php
/*
* $Author ：LEO
*
* 官网: http://www.fpwjob.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class statis_elog_controller extends adminCommon{

	
	

	private $typeMapping = array(
		10 => '基本信息（PC）',
		11 => '基本信息（WAP）',
		12 => '账户认证（PC）',
		13 => '账户认证（WAP）',

		21 => '新建简历（PC）',
		22 => '新建简历（WAP）',

		31 => '发布职位（PC）',
		32 => '修改职位（PC）',
		33 => '兼职发布（PC）',
		34 => '兼职修改（PC）',
		35 => '发布职位（WAP）',
		36 => '修改职位（WAP）',
		37 => '兼职发布（WAP）',
		38 => '兼职修改（WAP）',

		41 => '账户充值（PC）',
		42 => '套餐会员（PC）',
		43 => '时间会员（PC）',
		44 => '增值服务（PC）',
		45 => '账户充值（WAP）',
		46 => '套餐会员（WAP）',
		47 => '时间会员（WAP）',
		48 => '增值服务（WAP）'
 	);

	
	private function getTotal($timeBegin = '', $timeEnd = ''){
 		$where = '1';
		if($timeBegin != ''){
			$where .= " and `timein` >= {$timeBegin} and `timein` <= {$timeEnd}";
		}
		$num = $this->obj->DB_select_num('user_log', $where);
		
		$where.=" and `url` LIKE '%wap%'";
		$wapnum = $this->obj->DB_select_num("user_log",$where);
		
		$pcnum = $num-$wapnum;
		return array($num,$pcnum,$wapnum);
	}

	
	function index_action(){
		
		if($_GET['date']){
			$dates=@explode('~',$_GET['date']);
			$timeBegin = strtotime($dates[0]);
			$timeEnd = strtotime($dates[1])+86400;
			$time_begin = $dates[0];
			$time_end = $dates[1];
 		}else{
		
			if($_GET['days']=="-1"){
				$time_begin = date('Y-m-d 00:00:00', strtotime('-1 day'));
				$time_end = date('Y-m-d 00:00:00');
			}else if($_GET['days']=="1" || !$_GET['days']){
				$time_begin = date('Y-m-d 00:00:00');
				$time_end = date('Y-m-d H:i:s');
			}else if($_GET['days']=="7"){
				$time_begin = date('Y-m-d 00:00:00', strtotime('-7 day'));
				$time_end = date('Y-m-d H:i:s');
			}

		}
		
		$timeBegin = strtotime($time_begin);
		$timeEnd = strtotime($time_end);
 		
		$this->yunset('defaultTimeBegin', $time_begin);
		$this->yunset('defaultTimeEnd', $time_end);

		list($num, $pcnum, $wapnum) = $this->getTotal($timeBegin, $timeEnd);
		$data [] = array('num' => $num, 'pcnum' => $pcnum, 'wapnum'=> $wapnum);
		$this->yunset('data', $data);
		
		$dateBegin = date('Y-m-d', $timeBegin);
		$dateEnd = date('Y-m-d', $timeEnd);
			
		$title = "访问流量统计 - {$dateBegin}~{$dateEnd}";

		$names = array();
		$values = array();
		
		$where = '1';
 		$where .= " and `timein` >= {$timeBegin} and `timein` <= {$timeEnd}";
 		$where .= ' group by `opera` order by `num` desc';
		$field = 'COUNT(id) as `num`, `opera`';
 		$row = $this->obj->DB_select_all('user_log', $where, $field);
		
		$total = 0;
		 
		foreach($row as $r){
			
			if(isset($this->typeMapping[$r['opera']])){
				$names [] = $this->typeMapping[$r['opera']];
				$rr['value'] = $r['num'];
				$rr['name'] = $this->typeMapping[$r['opera']];
				$values [] = $rr;
				$total += $r['num'];
			}

		}
		 
		$data = array('title' => $title, 'names' => $names, 'values' => $values);
 		$this->yunset($data);
		$this->yunset('total', $total);
 
		$this->yuntpl(array('admin/admin_statis_event_log'));
 
	}
}
?>