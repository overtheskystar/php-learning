<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
//PHP随机生成验证码函数
function randCode($params = [])
{           $num = $params['num'] ?? 5; //验证码个数
            $codeArr = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i',
            'j','k','l','m','n','o','p','q','e','s','t','u','v','w','x','y','z',
            '1','2','3','4','5','6','7','8','9','0'];
            $codeKeys = array_rand($codeArr,$num);
            shuffle($codeKeys);
            foreach ($codeKeys as $codeValue){
                $codeStr .= $codeArr[$codeValue];
            }
            return $codeStr;
        }
//生成验证码
$re =randCode();
print_r($re);
?>
</body>
</html>