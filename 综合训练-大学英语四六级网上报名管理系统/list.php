<?php
//加载数据库连接文件
$link = require_once "conn.php";
$sql = "select * from 数据表名称 order by stuID asc";
$res = mysqli_query($link, $sql);
//定义数据数组
$dataArr = array();
$dataArr=mysqli_fetch_all($res,MYSQLI_ASSOC);
//加载视图模板
require_once "signup.html";
?>
