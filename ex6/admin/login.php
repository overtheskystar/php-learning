<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>登录界面</title>
<style>
.form-row{margin-top:15px}
.form-label
{
display:block;
margin-bottom:5px;
}
.button-primary
{
background-color:#009dd8;
color:#fff;
}
ul{list-style:none;}
#test-register{margin:0 auto;width:300px;height:200px;border-radius:30px;border:3px solid #f00;padding:50px;background:url(lock.png) no-repeat;background-position:right bottom;}
#test-error{color:#f00;}
</style>
<script>
'use strict';
//检查用户名密码长度
function checkRegisterForm() 
{
    var usernamevalue=document.getElementById("username").value;
    var passwordvalue=document.getElementById("password").value;
    if(usernamevalue.length<3||usernamevalue.length>6) 
    {
        document.getElementById("test-error").innerText="用户名长度有误";return false;
    }
    else if(passwordvalue.length<6||passwordvalue.length>20) 
    {
        document.getElementById("test-error").innerText="密码长度有误";return false;
    }
     return true;
}
</script>
</HEAD>
<body>
<div>
<!--提交检查账户用户名密码--!>
<form id="test-register" action="chkLogin.php" method="POST" name="login" onsubmit="return checkRegisterForm()">
         <div class="form-row">
                 <label id="test-error"></label>
           </div>
            <div class="form-row">
                <label class="form-label">用户:</label>
                <div class="form-controls">
                   <input type="text" id="username" name="username">
                </div>
            </div>
            <div class="form-row">
                <label class="form-label">密码:</label>
                <div class="form-controls">
                    <input type="password" id="password" name="password">
                </div>
            </div>
            <div class="form-row">
                <button type="submit" class="button-primary">提交</button>
            </div>
</form>
</div>

</body>
</html>