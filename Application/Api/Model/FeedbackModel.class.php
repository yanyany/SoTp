<?php
// 本类由系统自动生成，仅供测试用途
namespace Api\Model;
use Think\Model;
class FeedbackModel extends Model {
   /*
    * 用户反馈
    */
   public function saveData($data){
       $data = M("opinion")->data($data)->save($data);
       return $data;
   }
}