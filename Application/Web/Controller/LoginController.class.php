<?php
namespace Web\Controller;
use Think\Controller;
class LoginController extends Controller {
    /**
    登录
     **/
    public function index(){
	  $this->display();
    }
    /*
     * 注册
     */
    public function reg(){
      $this->display();
    }
}