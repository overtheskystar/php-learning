<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
//考场设置楼层floor+室room
for ($f = 4; $f >= 1; $f--) 
{
  for($r = 1; $r <= 6; $r++){
//考场编号
     $n = ($f-1)*6 + $r;
     $num = $n <10 ? "0".$n : $n;
     echo $f."0".$r."教室是".$num."考场&nbsp&nbsp";
     $n--;
}
        echo "<br>";
} 
?>
</body>
</html>

