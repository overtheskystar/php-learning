<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>登录检测</title>
</head>
<body>
<div align="center">
<?php
           $user=$_POST["username"];
           if(!isset($user))  $user="";

           $password=$_POST["password"];
           if(!isset($password))  $password="";

           if($user!=="admin")
            {
?>
<script language=javascript>
   window.alert("用户名错误!");
   history.back(-1);
</script>
<?php
            }
            else if($password!=="123456")
            {
//密码错误跳转error.php
echo "<script>location.href='error.php';</script>";
?>
<?php
           }
           else 
           {
               session_start();
               $_SESSION["admin"]=$user;
?>
<script language=javascript>
   location.href="admin_index.php";
</script>
<?php
          }

?>
</body>
</html>