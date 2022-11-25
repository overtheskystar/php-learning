<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
//将字符串转为数组
$strinfo="banner.jpg、top.png、apple.gif";
$arr1= explode("、", $strinfo);
//print_r($arr1); 输出Array

/**分别输出各元素后缀名
echo strrchr($arr[0], '.');
echo "<br>";
echo strrchr($arr[1], '.');
echo "<br>";
echo strrchr($arr[2], '.');
echo "<br>";
**/
//输出效果
echo "文件列表:";
echo implode("、", $arr1)."<br>";   //输出banner.jpg、top.png、apple.gif
echo "文件名:".$arr1[0]."<br>";
echo "扩展名:".strrchr($arr1[0], '.')."<br>";
echo "<br>";
echo "文件名:".$arr1[1]."<br>";
echo "扩展名:".strrchr($arr1[1], '.')."<br>";
echo "<br>";
echo "文件名:".$arr1[2]."<br>";
echo "扩展名:".strrchr($arr1[2], '.')."<br>";
?>
</body>
</html>
