<?php
$sql = "select * from 数据表名称";
//判断是否通过表单提交搜索信息，如需搜索则拼接搜索条件
if (!empty($_GET["keyWord"])) 
{
  $keyWord = $_GET["keyWord"];
  //where子句前有一个空格分隔查询语句和筛选条件,注意使用拼接要删去第一行中排序参数，不然会报错
  $sql.=" where stuName like '%$keyWord%'";
}
//连接排序参数
$sql.=" order by stuID asc";
//加载数据库连接文件
$link = require_once "conn.php";
//转义字符串中的特殊字符
mysqli_real_escape_string($link, $sql);
$res = mysqli_query($link, $sql);
//定义数据数组
$dataArr=mysqli_fetch_all($res,MYSQLI_ASSOC);
//加载视图模板
require_once "manage.html";
?>