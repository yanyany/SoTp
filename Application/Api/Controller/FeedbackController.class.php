<?php
namespace Api\Controller;
use Think\Controller;
class FeedbackController extends Controller {

    /*
     * 意见反馈
     */
    public function opition(){
        $data = array(
            'userId' =>I("post.userid"),
            'content' =>I("post.content")
        );
        $result = D('Feedback')->saveData($data);
        if($result){
            $this->ajaxReturn(array('code'=>1,'msg'=>'反馈成功'));
        }else{
            $this->ajaxReturn(array('code'=>2,'msg'=>'反馈失败'));
        }
    }
}