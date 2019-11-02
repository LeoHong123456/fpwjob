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
/************
* 计划任务：每日自动更新部分职位
* 仅作参考
*/
global $db_config,$db;
$stime = time()-86400*31;
$query = $db->query("SELECT r1.id FROM $db_config[def]company_job AS r1 JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $db_config[def]company_job)) AS id) AS r2 WHERE r1.id >= r2.id AND `sdate`>'".$stime."'  AND `state`=1 AND `r_status`<>2 AND `status`<>1 ORDER BY r1.id ASC LIMIT 30");

while($rs = $db->fetch_array($query))
{
	
	$LastTime = strtotime('-'.rand(1,59).' minutes', time());

	$db->update_all("company_job","`lastupdate`='".$LastTime."'","`id`='".$rs['id']."'");
}


?>