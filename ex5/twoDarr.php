<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
/**<style>
table,td
{
   border: 1px solid #000000;
   border-collapse: collapse
}
td
{
   text-align:center;
}
</style>
**/
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

//表格形式输出
/**<!--    定义学生数组-->
    <?php
      $student=array(
array('id'=>'20081031','name'=>'杜云','sex'=>'女','class'=>'科学1班','time'=>'2018-05-25'),
array('id'=>'20081032','name'=>'王亮','sex'=>'男','class'=>'科学1班','time'=>'2019-05-15'),
array('id'=>'20081033','name'=>'张凤','sex'=>'女','class'=>'科学1班','time'=>'2018-05-26'),
array('id'=>'20081231','name'=>'王良','sex'=>'男','class'=>'科学2班','time'=>'2019-05-23'),
array('id'=>'20081232','name'=>'李军','sex'=>'男','class'=>'科学2班','time'=>'2019-05-16'),
);
foreach($student as $key=>$value)
{
     $key.":&nbsp&nbsp";
foreach($value as $k=>$v)
   {
     $k.'=>'.$v;
     '&nbsp';
    }
'</br>';
}
echo "<table width='600' height='100' align='center'>
    <th colspan='6'>党员信息表</th>
    <tr>
        <td>学号</td>
        <td>姓名</td>
        <td>性别</td>
        <td>班级</td>
        <td>入党时间</td>
    </tr>";

for($i=0;$i<5;$i++){
 echo  
        "<tr>
            <td>".$student[$i]['id']."</td>
            <td>".$student[$i]['name']."</td>
            <td>".$student[$i]['sex']."</td>
            <td>".$student[$i]['class']."</td>
            <td>".$student[$i]['time']."</td>
        </tr>";
}
echo    "<tr>
        <td  colspan='6'>合计:".count($student)."人</td></tr>";
echo "</table>";
?>
**/
</body>
</html>
