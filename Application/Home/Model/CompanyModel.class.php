<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Model;
use Think\Model;
class CompanyModel extends Model {
    /**
        获取全部公司
     **/
    public function listData(){
        $data = M('company')->select();
        return $data;
    }
    /**
        审核公司状态 // 停用和启用公司
     **/
    public function companyVerfiy($where,$data){
        $data = M("company")->where($where)->save($data);
        return $data;
    }
    /*
     *删除公司
     */
    public function delCompany($where){
        $data =  M("Company")->where($where)->delete();
        return $data;
    }
    /*
     * 查询公司部门*/
    public function department($where){
        $data = M("Company")->where($where)->select();
        return $data;
    }
}