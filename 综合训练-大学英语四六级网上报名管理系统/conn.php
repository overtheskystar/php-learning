<?php
header("content-type:text/html;charset=UTF-8");
$host = "127.0.0.1";
$user = "root";
$password = "123456";
$database = "数据库名称";
$charset = "utf8";
@$link = mysqli_connect($host, $user, $password, $database);
if (!$link) 
{
  die("数据库服务器连接失败! <br/>错误号：" . mysqli_connect_errno() . "<br/>错误信息：" . mysqli_connect_error());
}
mysqli_set_charset($link, $charset);
return $link;
?>