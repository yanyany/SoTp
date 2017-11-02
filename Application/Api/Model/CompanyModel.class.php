<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Model;
use Think\Model;
class CompanyModel extends Model {
    /**
        获取用户登录次数
     **/
    public function listData(){
        $data = M('company')->select();
        return $data;
    }
}