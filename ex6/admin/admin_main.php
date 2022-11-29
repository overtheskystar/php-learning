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
<title>登录检测</title>
<style>
body
{         
background-color:#f8ffd3;
text-align:center;
font-family:Arial, Helvetica, sans-serif;
}
body,td {margin:0;padding:0;color:#528311;font-size:12px;}
form,input {margin:0;padding:0;}
.txt {border:1px solid #CADCB2;height:22px;width:120px;}
</style>
</head>
<body>
<center>
<br>
<br>
<br>
<fieldset style="padding: 2; width:370px; height:250px"> <legend>登录成功</legend> 
<table width="98%" border="0" height="227">
  <tr>
    <td>
        <table align="center" border="0" width="301" cellspacing="0" cellpadding="3" height="154">
          <tr> 
            <td width="30%" height="30">*当前时间:<?php date_default_timezone_set('PRC');
echo date('Y-m-d H:i:s');
?></td>
        </tr>
        <tr> 
            <td width="30%" height="30">*您的IP:<?php echo $_SERVER['REMOTE_ADDR'];
 ?></td>
        </tr>
        <tr> 
            <td width="30%" height="30">*服务器名称:<?php echo $_SERVER['SERVER_NAME']; ?></td>
        </tr>
        <tr> 
            <td width="30%" height="30">现在您可以从左边列表中选择链接来管理网站了</td>
        </tr>
        <tr> 
            <td width="30%" height="30"><a href=#>退出</a></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</fieldset>
</center>
</body>
</html>
<?php 
    }
?>