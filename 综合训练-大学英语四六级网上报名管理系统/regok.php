<?php
//设置文档的编码方式
header("Content-type:text/html;charset=UTF-8");
if (!empty($_POST)) 
{
  //获取用户数据
  $stuID = $_POST["stuID"];
  $stuName = $_POST["stuName"];
  $examType = $_POST["examType"];
  $stuClass = $_POST["stuClass"];
  
  //insert语句
  $sql = "insert into 数据表名称(stuID,stuName,examType,stuClass) VALUES ('$stuID','$stuName','$examType','$stuClass')";
  $link = require_once "conn.php";
  $res = mysqli_query($link, $sql);
  if ($res)
   {
    echo "<script>alert('数据添加成功！');//location.href='list.php'; </script>";
   }
   else
   {
     echo "<script>alert('数据添加失败！')</script>";
   }
} 
else 
{
     echo "<script>alert('非法操作！');location.href='signup.html'</script>";
}
?>






