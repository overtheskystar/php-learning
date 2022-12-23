<?php
header("Content-type:text/html;charset=UTF-8");
if (!empty($_POST)) 
{
  //获取用户数据
  $data = $_POST;
  //注意set后面有一个空格
  $sql = "update 数据表名称 set ";
  //遍历$data，实现自动拼接
  foreach ($data as $k => $v) 
  {
    $sql .= "$k='$v',";
  }
 //去除最右侧多余的逗号
  $sql = rtrim($sql, ",");
  $id = $_GET["id"];
  $sql .= "where stuID='$id'";
  echo $sql;
  $link = require_once "conn.php";
  $res = mysqli_query($link, $sql);
  if ($res) 
  {
    echo "<script>alert('数据修改成功！');location.href='manage.php'</script>";
  } 
   else 
   {
     echo "<script>alert('数据修改失败！')</script>";
  }
} 
else
{
  //没有提交表单，加载表单页面并显示示例数据信息
  $id = $_GET["id"];
  $sql = "select * from 数据表名称 where stuID=$id";
  $link = require_once "conn.php";
  $res = mysqli_query($link, $sql);
  $data = mysqli_fetch_assoc($res);
  require_once 'modifyForm.html';
}
?>