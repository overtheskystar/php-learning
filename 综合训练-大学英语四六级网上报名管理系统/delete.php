<?php
header("Content-type:text/html;charset=UTF-8");
$id = $_GET["id"];
$sql = "delete from 数据表名称 where stuID=$id";
$link = require_once "conn.php";
$res = mysqli_query($link, $sql);
if ($res) {
  echo "<script>alert('数据删除成功！');location.href='manage.php'</script>";
} 
else {
  echo "<script>alert('数据删除失败！')</script>";
}
?> 
