<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
echo '党员信息表';
echo '<pre>';
$party=array(array('ID'=>'20081031','name'=>'杜云','sex'=>'女','class'=>'科学1班','time'=>'2018-05-25'),array('ID'=>'20081032','name'=>'王亮','sex'=>'男','class'=>'科学1班','time'=>'2019-05-15'),array('ID'=>'20081033','name'=>'张凤','sex'=>'女','class'=>'科学1班','time'=>'2018-05-26'),array('ID'=>'20081231','name'=>'王良','sex'=>'男','class'=>'科学2班','time'=>'2019-05-23'),array('ID'=>'20081232','name'=>'李军','sex'=>'男','class'=>'科学2班','time'=>'2019-05-16'));
foreach($party as $key=>$value)
{
    echo $key.":&nbsp&nbsp";
    foreach($value as $k=>$v)
   {
    echo $k.'=>'.$v;
    echo '&nbsp';
    }
echo '<br/>';
}
echo '</pre>';
echo "学生人数合计：".count($party)."人";
?>
</body>
</html>
