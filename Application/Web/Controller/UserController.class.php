<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends BaseController {
    public function index(){
	  $this->display();
    }
    /**
    登录
     **/
    public function login(){
        $phone = I("post.phone")?I("post.phone"):$this->ajaxReturn(array('code'=>1,'msg'=>'请填写手机号'));
        $password = I("post.password")?md5(I("post.password")):$this->ajaxReturn(array('code'=>1,'msg'=>'请填写密码'));
        $verify = I("post.verify")? I("post.verify"):$this->ajaxReturn(array('code'=>1,'msg'=>'请输入验证码'));
        if(!check_verify($verify)){$this->ajaxReturn(array('code'=>1,'msg'=>'亲，验证码输错了哦'));}
        $checkPhone = D("Login")->checkUser($phone);
        if($checkPhone){
            if($password != $checkPhone[0]['password'])
                $this->ajaxReturn(array('code'=>1,'msg'=>'密码错误'));
            else
                $this->userLogin($checkPhone[0]['id']);
                session("userid", $checkPhone[0]['id']);
                session("name", $checkPhone[0]['name']);
            $this->ajaxReturn(array('code'=>0,'msg'=>'登录成功'));

        }else{
            $this->ajaxReturn(array('code'=>1,'msg'=>'没有该用户'));
        }
    }

    /**
     *
     * 验证码生成
     */
    public function verify_c(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 18;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->codeSet = '0123456789';
        $Verify->imageW = 130;
        $Verify->imageH = 50;
        //$Verify->expire = 600;
        $Verify->entry();
    }

    //用户登录记录
    public function userLogin($userid){
        $data = array(
            'loginIp'       =>   $_SERVER["REMOTE_ADDR"],
            'loginTime'     =>time(),
            'userId'        => $userid
        );
        D("Login")->addLog($data);
    }
    //个人登录记录
    public function record(){
        $id = session("userid");
        $count = M("Login")->count();
        $p = $this->getpage($count,5);
        $model = M("login");
        if($id == 1){
            $data =  $model->table("s_login as cn")
                ->join("s_user as n ON cn.userId = n.id")
                ->order("cn.id desc")
                ->limit($p->firstRow, $p->listRows)
                ->select();
        }else{
            $data =  $model->table("s_login as cn")
                ->join("s_user as n ON cn.userId = n.id")
                ->where("cn.userId = ".$id)
                ->order("cn.id desc")
                ->limit($p->firstRow, $p->listRows)
                ->select();
        }
        $this->assign("data",$data);
        $this->assign('page', $p->show());
        $this->display();
    }
    /**
     *删除个人登录记录
     **/
    public function delLog(){
        if(session("userid") != 1){
            $this->ajaxReturn(array('code'=>3,'msg'=>'您无权限删除，请联系超级管理员'));
            return false;
        }else{
            $id = I("post.id");
            $data = D("Login")->delLog($id);
            if($data){
                $this->ajaxReturn(array('code'=>1,"msg"=>"删除成功"));
            }else{
                $this>ajaxReturn(array('code'=>2,"msg"=>"删除失败"));
            }
        }
    }

}