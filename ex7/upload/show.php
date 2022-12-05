<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>读取已上传图片</title>
</head>
<body>
<?php
$subPath = date('Ymd');
$dir = 'uploadfiles/'.$subPath;
$dirHandle = opendir($dir);
$info = [];
//遍历目录
while(($name = readdir($dirHandle)) !== false) 
{
     $file ="$dir/$name";
      //保存文件信息
     $info[]=['name' => $name, 'type' => filetype($file),
 'modTime' => date('Y/n/t', fileatime($file))];
}
//print_r($info);

//屏蔽./&../
unset($info[0]);
unset($info[1]);

//已上传文件数
$picNum=count($info);
//echo $picNum."<br>";

//不足之处：只能显示最新上传的图片
$picName=$info[$picNum]['name'];
//echo $picName;
echo "<img src='uploadfiles/".$subPath."/".$picName."'/>";

?>
</body>
</html>
