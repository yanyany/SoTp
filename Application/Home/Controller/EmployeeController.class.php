<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class CompanyController extends BaseController{
    //首页
    public function index(){
        $data = D("company")->listData();
        $count = count($data);
        $p = $this->getpage($count,5);
        $this->assign("data",$data);
        $this->assign("page",$p->show());
	    $this->display();
    }
    //部门查看
    public function department(){
        $where = array('company_id'=>I("get.id"));
        $data = D("companydepartment")->listData($where);
        $this->assign("name",I("get.name"));
        $this->assign("data",$data);
        $this->display();
    }
    //审核公司
    public function companyVerfiy(){
        $where = array(
            'id'=>  I("post.id")
        );
        $data = array(
            'status'=>  I("post.status")
        );
        if(I("post.id") == '' || I("post.status") =='' ){
            $this->ajaxReturn(array('code'=>3,'msg'=>'数据丢失'));
        }else{
            $data = D("company")->companyVerfiy($where,$data);
            if($data){
                $this->ajaxReturn(array('code'=>1,'msg'=>'审核成功'));
            }else{
                $this->ajaxReturn(array('code'=>2,'msg'=>'审核失败'));
            }
        }
    }
    //停用用户
    public function stopCompany(){
        $where = array('id'=>I("post.id"));
        $data = array('status'=>I("post.status"));
        if(I("post.id") == '' || I("post.status") =='' ){
            $this->ajaxReturn(array('code'=>3,'msg'=>'数据丢失'));
        }else{
            $data = D("company")->companyVerfiy($where,$data);
            if($data){
                $this->ajaxReturn(array('code'=>1,'msg'=>'操作成功'));
            }else{
                $this->ajaxReturn(array('code'=>2,'msg'=>'操作失败'));
            }
        }
    }
    /*
     * 删除公司
     * */
    public function delCompany(){
        $where = array('id'=>I("post.id"));
        $data = D("Company")->delCompany($where);
        if($data){
            $this->ajaxReturn(array('code'=>1,'msg'=>'删除成功'));
        }else{
            $this->ajaxReturn(array('code'=>2,'msg'=>'删除成功'));
        }
    }
    /**
     * 添加公司
     */
    public function addCompany(){
        $this->display();
    }
    /*
     * 添加公司数据
     */
    public function addCompanyData(){
        $name = I("post.name");
        $phone = I("post.phone");
        $corporation = I("post.corporation");
        $email = I("post.email");
        $address = I("post.address");
        $status = 1;
        $certificate = $_POST['file'];
        $card = I("post.card");

    }

}