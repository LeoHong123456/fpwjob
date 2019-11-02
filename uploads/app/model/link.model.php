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
class link_model extends model{
    function AddLink($Values=array())
    {
        return $this->insert_into('admin_link',$Values);
    }
}
?>