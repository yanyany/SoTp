<?php
namespace Web\Controller;
use Think\Controller;
class RegController extends Controller {
    /**
    注册
     **/
    public function reg(){
	  $this->display();
    }
    /*
     * 企业注册
     */
    public function companyReg(){
        if(empty($_POST)){
            $this->display();
        }else{
           if(empty($_POST)){
               $this->ajaxReturn(array('code'=>3,'msg'=>'请填写全部信息'));
           }else{
               $data = D('Reg')->addData($_POST);
               if($data){
                   $this->ajaxReturn(array('code'=>1,'msg'=>'注册成功'));
               }else{
                   $this->ajaxReturn(array('code'=>2,'msg'=>'注册失败'));
               }
           }
        }

    }
    /*
     * 学校注册
     */
    public function schoolReg(){
       $this->display();
    }
}