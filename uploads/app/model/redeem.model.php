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
class redeem_model extends model
{
	
    function GetRewardClass($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('redeem_class',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
	
    function GetRewardOne($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('reward',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
	
    function GetRewardOnes($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        $user=$this->DB_select_once('member',$WhereStr,$FormatOptions['field']);
        switch ($user['usertype']){
            case 1:
                $table = 'member_statis';
                break;
            case 2:
                $table = 'company_statis';
                break;
            case 3:
                $table = 'lt_statis';
                break;
            case 4:
                $table = 'px_train_statis';
                break;
            default:
                $table = 'member_statis';
        }
        return $this->DB_select_once($table,$WhereStr,$FormatOptions['field']);
    }
	
    function GetReward($Where=array(),$Options=array()){
		
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('reward',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function GetChangeOne($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('change',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
	
    function GetChange($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('change',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    
    function AddChange($Values=array()){
        return $this->insert_into('change',$Values);
    }
	
    function GetChangeNum($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_select_num('change',$WhereStr);
    }
    function UpdateReward($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('reward',$ValuesStr,$WhereStr);
    }

    function DeleteReward($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all('reward',$WhereStr);
    }

    function GetRewardNum($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_select_num('reward',$WhereStr);
    }
}
?>