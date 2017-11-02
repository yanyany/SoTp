<?php
namespace Web\Controller;
use Think\Controller;
class EmailController extends Controller {
    public function index(){
	  $this->display();
    }
    /*
     * 左侧
     */
   public function left(){
        $this->display();
    }
    /*
     * 主体
     */
    public function main(){
        $this->display();
    }
    /*
     * 发送邮件
     */
    public function sendEmail(){
        header("Content-type: text/html; charset=utf-8");
        /*require_once "Smtp.class.php";*/
        import('Org.Util.Smtp');
        //******************** 配置信息 ********************************
        $smtpserver = "smtp.163.com";//SMTP服务器
        $smtpserverport =25;//SMTP服务器端口
        $smtpusermail = "18311161659@163.com";//SMTP服务器的用户邮箱
        $smtpemailto = $_GET['toemail'];//发送给谁
        $smtpuser = "18311161659";//SMTP服务器的用户帐号(或填写new2008oh@126.com，这项有些邮箱需要完整的)
        $smtppass = "YANyang214804";//SMTP服务器的用户密码
        $mailtitle = $_GET['title'];//邮件主题
        $mailcontent = "<h1>".$_GET['content']."</h1>";//邮件内容
        $mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
        //************************ 配置信息 ****************************
        $smtp = new \Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
        $smtp->debug = false;//是否显示发送的调试信息
        $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

        echo "<div style='width:300px; margin:36px auto;'>";
        if($state==""){
            echo "对不起，邮件发送失败！请检查邮箱填写是否有误。";
            echo "<a href='index.html'>点此返回</a>";
            exit();
        }
        echo "恭喜！邮件发送成功！！";
        echo "<a href='index.html'>点此返回</a>";
        echo "</div>";
    }

}