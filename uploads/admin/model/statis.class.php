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
class statis_controller extends adminCommon{

	
	private $chartType = 'line';

	
	private function getTotal($timeBegin = '', $timeEnd = '')
	{
		
		$where = 'order_state = 2';
		if($timeBegin != ''){
			$where .= " and order_time >= {$timeBegin} and order_time <= {$timeEnd}";
		}
		$field = 'sum(order_price) as `num`';
		
		$row = $this->obj->DB_select_all('company_order', $where, $field);
		$in = isset($row[0]['num']) && $row[0]['num'] > 0 ? $row[0]['num'] : 0;
		
		
		$where = 'order_state = 1';
		if($timeBegin != ''){
			$where .= " and `time` >= {$timeBegin} and `time` <= {$timeEnd}";
		}
		$field = 'sum(order_price) as `num`';
		
		$row = $this->obj->DB_select_all('member_withdraw', $where, $field);
		$out = isset($row[0]['num']) && $row[0]['num'] > 0 ? $row[0]['num'] : 0;

		
		$net_income = $in - $out;

		return array($in, $out, $net_income);
	}

	
	public function index_action(){

		if(isset($_GET['radio_time'])){
			$this->yunset('radio_time', $_GET['radio_time']);
		}

		
		$time_begin = isset($_GET['time_begin']) ? $_GET['time_begin'] : 
			date('Y-m-d 00:00:00', strtotime('-30 day'));
		$time_end = isset($_GET['time_end']) ? $_GET['time_end'] :
			date('Y-m-d H:i:s');
		$this->yunset('defaultTimeBegin', $time_begin);
		$this->yunset('defaultTimeEnd', $time_end);
		
		$isAllTime = isset($_GET['isAllTime']) ? $_GET['isAllTime'] : 0; 
		
		
		if($isAllTime != 1){
			$timeBegin = strtotime($time_begin);
		}else{
			$timeBegin = strtotime(date('Y-m-d 00:00:00', strtotime('-30 year')));
		}	
		$timeEnd = strtotime($time_end);
		list($in, $out, $net_income) = $this->getTotal($timeBegin, $timeEnd );
		$data [] = array('time' => '近30', 'in' => $in, 'out' => $out, 'net_income' => $net_income);
		$this->yunset('data', $data);


		
		if($isAllTime != 1){
			$timeBegin = strtotime($time_begin);
			$timeEnd = strtotime($time_end);
			
			$dateBegin = date('Y-m-d', $timeBegin);
			$dateEnd = date('Y-m-d', $timeEnd);
			$title = "收支统计 - {$dateBegin}~{$dateEnd}";
		}else{
			$title = "收支统计 - 全部数据";	
		}

		
		$names = array();
		$values = array();
		$dataGroupNames = array();
    		
		
		$where = 'order_state = 2';
		if($isAllTime != 1){
			$where .= " and order_time >= {$timeBegin} and order_time <= {$timeEnd}";
		}
		$where .= ' group by `date` order by `date`';
		$field = "sum(order_price) as `num`, from_unixtime(order_time,'%Y-%m-%d') as `date`";
		
		$row = $this->obj->DB_select_all('company_order', $where, $field);
		$totalIn = 0;
		if(count($row) < 1){
			$in = array('names' => array(), 'values' => array());
		}
		else{
			$inNames = array();
			$inValues = array();
			foreach($row as $r){
				$inNames [] = $r['date'];
				$inValues [] = $r['num'];

				$totalIn += $r['num'];
			}
			$in = array('names' => $inNames, 'values' => $inValues);
		}

		
		$where = 'order_state = 1';
		if($isAllTime != 1){
			$where .= " and `time` >= {$timeBegin} and `time` <= {$timeEnd}";
		}
		$where .= ' group by `date` order by `date`';
		$field = "sum(order_price) as num, from_unixtime(`time`,'%Y-%m-%d') as `date`";
		
		$row = $this->obj->DB_select_all('member_withdraw', $where, $field);
		$totalOut = 0;
		if(count($row) < 1){
			$out = array('names' => array(), 'values' => array());
		}
		else{
			$outNames = array();
			$outValues = array();
			foreach($row as $r){
				$outNames [] = $r['date'];
				$outValues [] = $r['num'];

				$totalOut += $r['num'];
			}
			$out = array('names' => $outNames, 'values' => $outValues);
		}
		
		
		$names = array_merge($in['names'], $out['names']);
		$names = array_unique($names);
		usort($names,'t_sort');

		$inValues = array();
		$outValues = array();
		$inK = 0;
		$outK = 0;
		foreach($names as $n){
			if(in_array($n, $in['names'])){
				$inValues [] = $in['values'][$inK];
				$inK ++;
			}
			else{
				$inValues [] = 0;
			}

			if(in_array($n, $out['names'])){
				$outValues [] = $out['values'][$outK];
				$outK ++;
			}
			else{
				$outValues [] = 0;
			}

			$netIncomeValues [] = end($inValues) - end($outValues);
		}

		$in['values'] = $inValues;
		$out['values'] = $outValues;
		
		$dataGroupNames [] = '毛收入';
		$dataGroupNames [] = '支出/提现';
		$dataGroupNames [] = '净收入';

		$values[] = array('name' => '毛收入',
				'type' => $this->chartType,
				'data' => $in['values']
			);
		
		$values[] = array('name' => '支出/提现',
			'type' => $this->chartType,
			'data' => $out['values']
		);

		$values[] = array('name' => '净收入',
			'type' => $this->chartType,
			'data' => $netIncomeValues
		);

		$data = array('title' => $title,'names' => $names, 'values' => $values, 'dataGroupNames' => $dataGroupNames);
		$this->yunset($data);

		$this->yunset(array('totalIn'=> $totalIn, 'totalOut' => $totalOut, 'totalNetIncome' => $totalIn - $totalOut));

		
		$this->yuntpl(array('admin/statis'));
	}

}
?>