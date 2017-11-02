<?php
namespace Api\Controller;
use Think\Controller;
class LoginController extends Controller {
    /**
    登录
     **/
    public function login(){
        $phone = I("post.phone")?I("post.phone"):$this->ajaxReturn(array('code'=>1,'msg'=>'请填写手机号'));
        $password = I("post.password")?md5(I("post.password")):$this->ajaxReturn(array('code'=>1,'msg'=>'请填写密码'));
        $checkPhone = D("Login")->checkUser($phone);
        if($checkPhone){
            if($checkPhone[0]['status'] == 1){
                $this->ajaxReturn(array('code'=>1,'msg'=>'您的帐号已停用'));
            }
            if($password != $checkPhone[0]['password'])
                $this->ajaxReturn(array('code'=>1,'msg'=>'密码错误'));
           else
               $this->ajaxReturn(array('code'=>0,'msg'=>'登录成功'));

        }else{
            $this->ajaxReturn(array('code'=>1,'msg'=>'没有该用户'));
        }
    }



    /*
     * 用户注册
     */
    public function userReg(){
        $phone = I("post.phone");
        $password = I("post.password");
        $verify = I("post.verify");
        $this->checkVerify($verify);
        if($phone && $password){
            if($verify == ''){
                $this->ajaxReturn(array('code'=>2,'msg'=>'请填写验证码'));
            }else{
                $data = array(
                    'phone' =>$phone,
                    'password' =>$password,
                    'create_time' =>time(),
                    'status' =>0
                );
                $result = D('Login')->reg($data);
                if($result){
                    $this->ajaxReturn(array('code'=>1,'msg'=>'注册成功'));
                }else{
                    $this->ajaxReturn(array('code'=>2,'msg'=>'注册失败'));
                }
            }

        }else{
            $this->ajaxReturn(array('code'=>'3','msg'=>'请填写全部信息'));
        }
    }
    /*
     * 公司注册
     */
    public function companyReg(){
         $name = I("post.name");
         $email = I("post.email");
         $phone = I("post.phone");
         $password =I("post.password");
         $address = I("post.address");
         $status = '1';
         $cetificate = $_FILES['file'];
         $card = I("post.card");
         $regtime = time();

    }
}