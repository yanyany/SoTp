<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>学校注册</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/Public/Web/css/csh.css" />
    <link rel="stylesheet" href="/Public/Web/css/muban.css" />
    <link rel="stylesheet" href="/Public/Web/css/zhuce_xx.css" />
    <script type="text/javascript" src="/Public/Web/js/jsAddress.js"></script>
</head>
<body>
<div id="container">
    <div id="header">
        <div id="logo"><a href="#"><img src="/Public/Web/images/logo.png" height="70px" alt="logo" /></a></div><ul>
        <li><a href="#">我的账号</a></li>
        <li><a href="#">我的信箱</a></li>
        <li><a href="#">我的投递</a></li>
        <li><a href="#">我的作品</a></li>
        <li><a href="#">我的简历</a></li>
        <li><a href="#">我的公司</a></li>
        <li><a href="#">首页</a></li></ul>
    </div>
    <div class="nav"></div>
    <div id="font">
        <li>
            <span>已有账号</span>
            <span><a href="#">立即登录&gt&gt</a></span>
        </li>
    </div>
    <div id="main">
        <div id="biaodan">
            <div id="lside">
                <ul id="left">
                    <li class="saz">手机号： <input type="text" name="cell"/></li>
                    <li class="saz">验证码： <input type="text" name="verify"/></li>
                    <li class="lz">邮箱： <input type="text" name="mail"/></li>
                    <li class="lz">密码： <input type="password" name="password"/></li>
                    <li>确认密码： <input type="password" name="password"/></li>
                </ul>
            </div>
            <div id="rside">
                <ul id="right">
                    <li>学校性质： <input type="radio" name="property" value="民营" checked="checked"/>民营
                        <input type="radio" name="property" value="国营"/> 国营</li>
                    <li>学校名称： <input type="text" name="schoolname"/></li>
                    <li class="sz">联系人： <input type="text" name="contacts" size="8"/>
                        <input type="radio" name="gender" value="先生" checked="checked"/>先生
                        <input type="radio" name="gender" value="女士"/>女士</li>
                    <li>组织机构代码/工商证号： <input type="text" name="business"/></li>
                    <li>学校地址：  <select id="Select1"></select>
                        <select id="Select2"></select>
                        <select id="Select3"></select>
                    </li>
                </ul>
            </div>
                <input class="blue" type="submit" value="注&nbsp&nbsp册">
        </div>
    </div>
    <div id="footer"><ul>
        <li><a href="#">关于</a></li>
        <li><a href="#">反馈</a></li>
        <li><a href="#">投诉</a></li></ul>
    </div>
</div>
</body>
</html>

<script type="text/javascript">
    addressInit('Select1', 'Select2', 'Select3');
</script>