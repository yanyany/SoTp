<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Model;
use Think\Model;
class LoginModel extends Model {
    /**
        检测登录用户
     **/
    public function checkUser($phone){
        $data = M('User')->where("phone=$phone")->select();
        return $data;
    }
    /**
        记录登录用户log
     **/
    public function addLog($data){
        $data = M("login")->add($data);
        return $data;
    }
    /**
        查询用户登录信息
     **/
    public function listLog($id,$type){
        $model = new Model();
        if($type == 1){
            $list = $model->table("s_login as cn")
                ->join("s_user as n ON cn.userId = n.id")
                ->order("cn.id desc")
                ->select();
        }else{
            $list = $model->table("s_login as cn")
                ->join("s_user as n ON cn.userId = n.id")
                ->where("cn.userId = ".$id)
                ->order("cn.id desc")
                ->select();
        }

        return $list;
    }
    /**
     *删除登录信息
     **/
    public function delLog($id){
        $data = M("Login")->where("id=$id")->delete();
        return $data;
    }
}