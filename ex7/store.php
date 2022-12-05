<?php
//在当前目录下创建storeData目录，bool mkdir(string $pathname, [int $mode = 0777 [, bool $recursive = false ]] )
mkdir('storeData');

//根据当前时间生成子目录名
$subPath = date('Ymd');

//在当前目录下递归创建目录
mkdir("storeData/$subPath", 0777, true);

//创建文件fopen(string $filename, string $mode)
$path="storeData/".$subPath."/";
$myfile = fopen($path."fileName","w") or die('打开文件失败');
//注意：这里写需要写入的信息↓
$txt = "contents";

//写入文件int fwrite(resource $handle,string $string[,int $length])
fwrite($myfile, $txt);

//关闭文件
fclose($myfile);

echo "代码已执行";
?>