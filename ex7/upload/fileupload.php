<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>图片上传</title>
</head>
<body>
<?php
//允许上传的文件类型
$allowType = array('jpeg','bmp','gif', 'png', 'jpg');

//上传文件大小的上限
$size = 500*1000;

//上传文件路径
$path = 'uploadfiles/';

//上传文件
if(!empty($_FILES['pic']))
{
    //获取用户上传文件信息
    $picInfo = $_FILES['pic'];

    //判断文件上传到临时文件是否出错
    if($picInfo['error'] != 0)
   {
        die('上传过程发生错误');
    }

    //获取上传文件的类型
    $type = substr(strrchr($picInfo['name'],'.'),1);
    //explicitly解释
    //如$picInfo['name']="tute.gif"
    //strrchr($picInfo['name'],'.')为".gif"
    //substr(".gif",1)为"gif"
    //$type="gif"


    //判断上传文件类型
    if(!in_array($type, $allowType))
    {
         //implode返回由数组元素组合成的字符串
        die('图片类型不符合要求，允许的类型为:'.implode('、', $allowType));
    }
    //判断上传文件大小 
    if ($picInfo['size'] > $size) 
    {
        die('图片大小超过限制，允许大小：'.$size.'字节');
    }

    //确定新文件名,哈希随机字符串
    $filename = md5(uniqid(mt_rand(), true)).".$type";

    //上传文件保存子目录
    $subPath = date('Ymd');
    $uploadPath = $path.$subPath;
    //判断文件保存目录是否存在
    if (!is_dir($uploadPath)) 
    {
        mkdir($uploadPath, 0777, true);
    }
    $newFile = $uploadPath.'/'.$filename;
    //图片上传到临时目录成功，将其保存到指定目录中
    if(!move_uploaded_file($picInfo['tmp_name'], $newFile))
    {
        die('图片上传失败');
    }
//图片上传成功,跳转至show.php,并显示上传的图片
header("location:show.php");
}
?>
</body>
</html>