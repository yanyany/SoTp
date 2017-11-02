<?php
namespace Api\Controller;
use Think\Controller;
class BaseController extends Controller {
    //初始化
     public function _initialize(){
        // $this->checkLogin();
     }
    //检验是否登录
    public function checkLogin(){
        if(!$_SESSION['HOME_USER'] && CONTROLLER_NAME != 'Login' && !in_array(CONTROLLER_NAME.":".ACTION_NAME,C('CHECK_LOGIN'))){
            redirect('/Home/Login/index');
        }else{
            $sessionUser = $_SESSION['HOME_USER'];
            $this->userid = $sessionUser['id'];
            $this->name = $sessionUser['name'];
        }
    }
    //分页显示
    function getpage($count, $pagesize = 10) {
        import('ORG.Util.Page');
        $p = new \Think\Page($count, $pagesize);
        $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $p->setConfig('prev', '上一页');
        $p->setConfig('next', '下一页');
        $p->setConfig('last', '末页');
        $p->setConfig('first', '首页');
        $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $p->lastSuffix = false;//最后一页不显示为总页数
        return $p;
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
    /*
     * 检查验证码
     */
    public function checkVerify($verify){
        if($verify != '1234'){
            $this->ajaxReturn(array('msg'=>'验证码错误'));
            die;
        }else{
            return true;
        }
    }

}