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
!defined('P_W') && exit('Forbidden');


class Invite {

	var $base;
	var $db;

	function Invite($base) {
		$this->base = $base;
		$this->db = $base->db;
	}

	function get($appid, $uid, $num, $start = 0) {
		if ($num == 'all') {
			$num = 500;
		} elseif (!is_numeric($num) || $num < 1) {
			$num = 20;
		} elseif ($num > 500) {
			$num = 500;
		}
		(!is_numeric($start) || $start < 0) && $start = 0;

		$users = array();
		$query = $this->db->query("SELECT friendid FROM pw_friends WHERE status='0' AND uid=" . pwEscape($uid) . pwLimit($start, $num));
		while ($rt = $this->db->fetch_array($query)) {
			$app = $this->db->get_one("SELECT * FROM pw_userapp WHERE uid=".pwEscape($rt['friendid'])." AND appid=".pwEscape($appid));
			if (empty($app)) {
				$users[] = $rt['friendid'];
			}
		}
		return new ApiResponse($users);
	}
}
?>