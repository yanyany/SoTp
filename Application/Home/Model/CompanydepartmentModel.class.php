<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Model;
use Think\Model;
class CompanydepartmentModel extends Model {
    /*
     * 查询公司部门*/
    public function listData($where){
        $data = M("companydepartment")->where($where)->select();
        /*echo M("Department")->getLastSql();die;*/
        return $data;
    }
}