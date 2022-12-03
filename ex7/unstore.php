<?php
//删除刚创建的文件
$subPath = date('Ymd');
$file="storeData/$subPath/fileName";

//不存在或已删除提示
if(!unlink($file)) 
{
    
    echo "删除文件失败";

}

//删除刚创建的目录
rmdir("storeData/$subPath");
rmdir("storeData");

echo "over";
?>