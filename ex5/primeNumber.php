<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
 <?php
for($i=2;$i<=100;$i++){
     for($j=2;$j<=$i-1;$j++){
           if($i%$j==0){
                                 break;
                                 }
}
     if($i==$j){
                      echo "$i"."<br/>";
                      }
}
echo "以上是2-100中所有的素数";
?>
</body>
</html>
