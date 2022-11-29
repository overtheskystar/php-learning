<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>会员注册</title>
<link rel="stylesheet" type="text/css" href="style/regok.css"/>
</head>
<body>
<script language="javascript">
'use strict';
function checkRegisterForm () 
{
    var usernamevalue=document.getElementById("username").value;
    var passwordvalue=document.getElementById("password").value;
    var password2value=document.getElementById("password-2").value;
if(usernamevalue.length<5||usernamevalue.length>8) 
    {
        document.getElementById("unameSpan").innerHTML="用户名长度在5到8位之间";
        return false;
    }   
 if(passwordvalue.length<6||passwordvalue.length>12) 
    {
         document.getElementById("codeSpan").innerHTML="密码长度在6到12位之间";
        return false;
    }
    if(passwordvalue!==password2value) 
    {
 document.getElementById("rCodeSpan").innerHTML="两次密码不一致";
         return false;
     }
     return true;
}
</script>
<div id="header">
     <a  id="logo" href="index.php">
        <img src="images/logo.png" />
    </a>
    <ul id="nav">
        <li><a href="index.php">首 页</a></li>
        <li><a href="company.php">企业简介</a></li>
        <li><a href="culture.php">企业文化</a></li>
        <li><a href="honor.php">企业荣誉</a></li>
        <li><a href="product.php"    class="navActive">产品展示</a></li>
        <li><a href="instruct.php">企业信息</a></li>
        <li><a href="guest.php">会员注册</a></li>
        <li><a href="contact.php">联系我们</a></li>
    </ul>
</div>
<div id=banner>
     <a href="apply.php"></a>
</div>
<div id="content">
        <div id="rightInfo">
           <dl>
                <dt>职业生涯</dt>
                <dd><a href="view.php?p=60">Web前端开发工程师需要掌握哪些核心技能？</a></dd>
                <dd><a href="view.php?p=51">我是程序员，有必要进行web前端开发的学习吗?</a></dd>
                <dd><a href="view.php?p=32">我是网站美工，目前发展遇到瓶颈，该如何解决？</a></dd>
                <dd><a href="view.php?p=22">我适合从事web前端开发行业吗？</a></dd>
                <dd><a href="view.php?p=15">Web前端工程师如何给自己定位？</a></dd>
                <dd><a href="view.php?p=5">Web前端开发工程师好找工作吗？</a></dd>
            </dl>
            <dl>
                <dt>职位推荐</dt>
                <dd><a href="job.php?tid=397">阿里巴巴--前端开发工程师</a></dd>
                <dd><a href="job.php?tid=97">金山软件--KIS-WEB前端页面工程师</a></dd>
                <dd><a href="job.php?tid=62">京东商城 -- Web前端开发工程师</a></dd>
                <dd><a href="job.php?tid=415">搜狐 - 媒体技术产品中心 - JavaScript前端</a></dd>
                <dd><a href="job.php?tid=414">新浪 - 运营部 - Web前端开发工程师</a></dd>
                <dd><a href="job.php?tid=413">新浪 - 无线部 - Web前端开发工程师</a></dd>
                <dd><a href="job.php?tid=412">新浪 - 技术部 - Web前端开发工程师</a></dd>
                <dd><a href="job.php?tid=411">新浪 - 产品部 - JavaScript前端工程师</a></dd>
                <dd><a href="job.php?tid=410">百度 - Web前端研发工程师</a></dd>
                <dd><a href="job.php?tid=409">百度 - 商务搜索 - Web前端研发工程师</a></dd>
                <dd><a href="job.php?tid=408">百度 - 社会化网络事业部 - JavaScript前端</a></dd>
                <dd><a href="job.php?tid=407">百度 - 搜索研发部 - web前端研发工程师</a></dd>
                <dd><a href="job.php?tid=406">百度 - 系统部 - WEB前端开发工程师</a></dd>
            </dl>
        </div>
         <div id="leftArticle">
           <h1>会员注册</h1>
<?php
session_start();
$user=$_GET["username"];
$sex=$_GET["sex"];
$pWd=$_GET["password"];
$eMail=$_GET["email"];
if($user=="eshop"){
    echo "<img src='img2/err.gif'><p class='p1'>用户名<span>".$user."</span>已经被占用<br>请<a href='register.html'>返回</a>重新注册</p>";
}
else{
    echo "<img src='img2/succ.gif'><p class='p2'>用户名：<span>".$user."</span><br>&nbsp&nbsp&nbsp性别：<span>".$sex."</span><br>&nbsp&nbsp&nbsp密码：<span>".$pWd."</span><br>&nbsp&nbsp&nbsp邮箱：<span>".$eMail."</span></p>";
}
?>

</div>
</div>
<div id="footer">
        <a href="#">关于本企业</a> | <a href="#">广告服务</a> | <a href="#">提交问题</a> | <a href="#">联系我们</a> | <a href="#">版权声明</a> | <a href="#">关于隐私</a> | <a href="#">合作伙伴</a>
        <br/>
        <a href="#">津ICP备0055601号</a> All rights(C)2020-2025Reserved
</div>
</body>
</html>