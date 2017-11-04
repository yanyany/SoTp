<?php
// 本类由系统自动生成，仅供测试用途
namespace Web\Model;
use Think\Model;
class RegModel extends Model {
  /*
   * 添加公司和学校
   */
    public function  addData($data){
        $data = M("Company")->add($data);
        if($data){return true;}else{return false;}
    }
}