<?php
session_start();
//删除当前用户对应的session文件，清空所有资源
session_destroy();
?>
<script language=javascript>
        parent.location.href="login.php";
</script>