<!DOCTYPE html>
<html lang="en">
<head>
	
<meta charset="UTF-8">

<title>信息页面</title>
<link rel="stylesheet" type="text/css" href="style/news.css"/>
<script language="javascript">
function check1()
{
       var oh3=document.getElementsByTagName("h3");
       oh3[0].className="up";
       oh3[1].className="";     
       var onewsClip1= document.getElementById("newsClip1");
       var onewsClip2= document.getElementById("newsClip2");
       onewsClip1.style.display="block";
       onewsClip2.style.display="none";
}
function check2()
{
       var oh3=document.getElementsByTagName("h3");
       oh3[0].className="";
       oh3[1].className="up";     
       var onewsClip1= document.getElementById("newsClip1");
       var onewsClip2= document.getElementById("newsClip2");
       onewsClip1.style.display="none";
       onewsClip2.style.display="block";
       onewsClip2.className="block";
}
</script>
</head>
<body>
<div id="header">
     <a  id="logo" href="index.php">
        <img src="images/logo.png" />
    </a>
    <ul id="nav">
        <li><a href="index.php" class="navActive">首 页</a></li>
        <li><a href="company.php">企业简介</a></li>
        <li><a href="culture.php">企业文化</a></li>
        <li><a href="honor.php">企业荣誉</a></li>
        <li><a href="product.php">产品展示</a></li>
        <li><a href="instruct.php">机构设置</a></li>
        <li><a href="guest.php">客户留言</a></li>
        <li><a href="contact.php">联系我们</a></li>
    </ul>
</div>
<a id="banner" href="board.php">
      <img src="images/banner.jpg" />
</a>
<div id="content">
        <div id="leftArticle2">
  <dl>
<?php
$nID = isset($_GET["id"]) ? $_GET["id"] : "";
$cName = isset($_GET["className"]) ? $_GET["className"] : "";
    echo "<h1><dt>".$cName."</dt></h1>";
    echo "<dd>所属栏目：".$cName."</dd>";
    echo "<dd><span style='color:red;'>将查询News数据表的第". $nID."信息</span></dd>";
?>
</dl>
        </div>
        <div id="rightInfo">
           <dl>
                <dt>开发经验</dt>
                <dd><a href="view.php?p=60">HTML5获取地理位置定位信息</a></dd>
                <dd><a href="view.php?p=51">HTML5 GPS定位&百度地图API </a></dd>
                <dd><a href="view.php?p=32">手机的计步器软件和重力感应器原理</a></dd>
                <dd><a href="view.php?p=22">传感器采集数据和二次波峰监测</a></dd>
                <dd><a href="view.php?p=15">波峰数步数和防抖动方法 </a></dd>
                <dd><a href="view.php?p=5">连续监测到3（或其它）个波峰计步</a></dd>
            </dl>
            <dl>
                <dt>职位推荐</dt>
                <dd><a href="job.php?tid=370">盛大网络--前端开发工程师</a></dd>
                <dd><a href="job.php?tid=62">京东商城 -- Web前端开发工程师</a></dd>
                <dd><a href="job.php?tid=419">阿里巴巴 - 技术部 - Web前端开发工程师</a></dd>
                <dd><a href="job.php?tid=417">人人网 - 技术部 - 3G前端工程师</a></dd>
                <dd><a href="job.php?tid=416">人人网 - 技术部 - Web前端开发工程师</a></dd>
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
</div>
<div id="footer">
        <a href="#">关于本企业</a> | <a href="#">广告服务</a> | <a href="#">提交问题</a> | <a href="#">联系我们</a> | <a href="#">版权声明</a> | <a href="#">关于隐私</a> | <a href="#">合作伙伴</a> 
        <br/>
        <a href="#">津ICP备0055601号</a> All rights&copy;Reserved
</div>
</body>
</html>
