<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Model;
use Think\Model;
class IndexModel extends Model {
    /**
        获取用户登录次数
     **/
    public function loginNum($id){
        $data = M('login')->where("userId=$id")->count();
        return $data;
    }
}