<!DOCTYPE html>
<html>  
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GETTING STARTED WITH BRACKETS</title>
        <style>
            img{vertical-align: bottom;}
        </style>
    </head>
    <body>
        <h2>PHP中的函数</h2>
        <?php
            function add($a,$b){
                $sum = 0;
                $sum = $a+$b;
                return $sum;
            }
            echo add(1,2);
        ?>
        <hr/>
        <?php
            $s = 'abc';
            echo $s[1];//b
        ?>
        <h2>使用PHP生成动态的验证码图片</h2>
        <?php
  
        ?>
        <hr/>
        <h2>用户登录</h2>
        用5-1.php语言脚本生成我需要的图片，是服务器端动图生成的图片
        验证码：<input/><img src="5-1.php"/>
    </body>
</html>