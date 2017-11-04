<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<!-- saved from url=(0060)http://hovertree.com/login.php?gotopage=index.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>登录</title>
    <link type="text/css" rel="stylesheet" href="/Public/Web/css/login.css">
    <link type="text/css" rel="stylesheet" href="/Public/Web/css/drag.css">
    <script type="text/javascript" src="/Public/Web/js//jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="/Public/Web/js/login.js"></script>
    <script type="text/javascript" src="/Public/Web/js/jquery.slideunlock.js"></script>
    <script type="text/javascript" src="/Public/Web/js/drag.js"></script>
    <script type="text/javascript" src="/Public/Web/js/layer/2.4/layer.js"></script>
</head>
<body>
<div id="head">
    <div style="background-color: #ffffff;float:left">
        <img src="/Public/Web/images/logo.png" style="width:300px;height:100px"/>
    </div>
    <div id="right">
       <ul>
           <li style="margin-right:10px">没有帐号</li>
           <li>立即<a href="/Web/Reg/reg" style="color:#0f9ae0">注册</a></li>
       </ul>
    </div>
</div>
<div class="pagewrap" style="clear:both">
    <div class="main">
     <!--   <div class="header">
           &lt;!&ndash; <div style="width:768px;margin:0px auto;">
                <a href="http://hovertree.com/hvtart/bjae/jftxwtko.htm">原文</a>
                <a href="http://hovertree.com">首页</a> <a href="http://hovertree.com/texiao/">特效</a> <a href="http://hovertree.com/menu/jquery/">jQuery</a> <a href="http://hovertree.com/hvtart/bjae/vgte3y3a.htm">Demo 2</a> <a href="http://hovertree.com/hvtart/bjae/dw0f8ytk.htm">Demo 3</a>
                <br />
            </div>&ndash;&gt;
        </div>-->
        <br><br><br>
        <div class="content">
            <div class="con_left">
                <p>登录之后您可以：</p><br>
                <h2><img src="/Public/Web/images/zhibiao.png" style="width:20px;height: 20px;"/>更便捷的生成简历或查阅简历；</h2><br>
                <h2><img src="/Public/Web/images/zhibiao.png" style="width:20px;height: 20px;"/>更便捷的寻求职位或招聘人才；</h2><br>
                <h2><img src="/Public/Web/images/zhibiao.png" style="width:20px;height: 20px;"/>更便捷的了解行业信息；</h2><br>
            </div>
            <div class="con_right">
                <div class="con_r_top"><a href="javascript:;" class="left" style="color: rgb(153, 153, 153); border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgb(222, 222, 222);">微信登录</a> <a href="javascript:;" class="right" style="color: rgb(51, 51, 51); border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgb(46, 85, 142);">登录管理</a></div>
                <ul>
                    <li class="con_r_left" style="display: none;">
                        <div class="erweima">
                            <div class="qrcode">
                                <div id="output" style="width: 100%; position: relative">
                                    <img src="/Public/Web/images/ewm.jpg" style="width: 170px; height: 170px">
                                </div>
                            </div>
                        </div>
                        <div style="height: 70px">
                            <p>微信扫一扫登录或注册</p>
                        </div>
                    </li>


                    <li class="con_r_right" style="display: block;">
                        <form name="form1" method="post" action="http://tool.hovertree.com/info/ip/" autocomplete="off">
                            <div class="user">
                                <div>
                                    <span class="user-icon"></span>
                                    <input type="text" id="userid" name="userid" placeholder="　输入账号" value="">
                                </div>

                                <div>
                                    <span class="mima-icon"></span>
                                    <input type="password" id="pwd" name="pwd" placeholder="　输入密码" value="">
                                </div>

                                <div id="drag" style="    margin-left: 9%;">
                                </div>
                                <script type="text/javascript">
                                    $('#drag').drag();
                                </script>

                            </div><br>
                           <!-- <button id="btn_Login" type="submit">登 录</button>-->
                        </form>
                    </li>
                </ul>

            </div>

        </div>
    </div>
</div>
<div id="footer">
    <div id="foot">
        <ul>
            <li>关于我们</li>
            <li>意见反馈</li>
            <li>加入我们</li>
            <li>商业合作</li>
        </ul>
    </div>
</div>
<div style="border-bottom: 5px solid black;    margin-top: 20px;"></div>
</body>
</html>
<script type="text/javascript">
        $(document).ready(function(){
           var hei =  document.body.scrollHeight-100;
           $(".pagewrap").css("height",hei+'px');
           //alert(hei);
        })
</script>
<script type="text/javascript">
    function login(){
        var phone = $("#userid").val();
        var password = $("#pwd").val();
        $.ajax({
            url:"/Api/Login/login",
            type:"post",
            data:{
                'phone':phone,
                'password':password
            },
            dataType:"json",
            success:function(json){
                layer.msg(json.msg);
            }
        })
    }
</script>