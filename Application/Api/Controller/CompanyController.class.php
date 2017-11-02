<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller {
    //首页
    public function index(){
        $data = D("company")->listData();
        $this->assign("data",$data);
	    $this->display();
    }

}