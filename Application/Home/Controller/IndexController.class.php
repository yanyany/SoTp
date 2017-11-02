<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    //首页
    public function index(){
        $data = array(
            'name'=>$this->name,
        );
        $this->assign("data",$data);
	   $this->display();
    }
    //欢迎页面
    public function welcome(){
        $data  = array(
            'ip'     =>  $_SERVER["REMOTE_ADDR"],
            'name'  =>session("name"),
            'time'   =>  time(),
            'pcName' => $_SERVER['SERVER_NAME'],
            'port'    =>   $_SERVER['SERVER_PORT'],
            'loginNum' => D("Index")->loginNum($this->userid),
    );
/*       echo "<pre>";
        print_r($data);die;*/
        $this->assign("data",$data);
        $this->display();
    }


}