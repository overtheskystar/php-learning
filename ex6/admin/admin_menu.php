<?php
session_start();
if(!isset($_SESSION['admin']))

{
?>
    <script language=javascript>
         parent.location.href="login.php";
   </script>
<?php
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<style>
body,table
{         
background-color:#FCD8CF;
font-family:Arial, Helvetica, sans-serif;
margin-top:50px;
}
td{padding:10px;;color:#528311;font-size:18px;}
</style>
</head>
<body>
<table cellpadding="0" cellspacing="0" border="0" width="158" align="right">
<?php
echo "<td>欢迎你，".$_SESSION['admin']."</td>";
?>
<tr>
      <td height="20"><a href=quit.php>点击退出</a></td>
</tr>
<tr>
      <td height="10">★<a href="admin_main.php" target="right">基本信息</a></td>
</tr>
<tr>
     <td height="20">★<a href="admin_news.php" target="right">新闻管理</a></td>
</tr>
<tr>
     <td height="20">★<a href="admin_board.php" target="right">公告管理</a></td>
</tr>
<tr>
     <td height="20">★<a href="admin_member.php" target="right">注册用户</a></td>
</tr>
<tr>
       <td height="10"></td>
</tr>
</table>
</body>
</html>
<?php 
    }
?>