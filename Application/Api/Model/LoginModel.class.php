<?php
// 本类由系统自动生成，仅供测试用途
namespace Api\Model;
use Think\Model;
class LoginModel extends Model {
    /**
        检测登录用户
     **/
    public function checkUser($phone){
        $data = M('Homeuser')->where("phone=$phone")->select();
        return $data;
    }
    /*
     * 用户注册
     *
     */
    public function reg($data){
        $data = M("homeuser")->data($data)->add();
        return $data;
    }
}