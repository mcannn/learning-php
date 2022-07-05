<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    
<?php
$x = 12;
// $x değeri int ise true gönderir.
var_dump(is_int($x))."<br>";//bool(true) 

// $y değeri int ise true gönderir.
$y = 1.2;
var_dump(is_int($y))."<br>";// bool(false)

// $z değeri float ise true gönderir.
$z = 7.1;
var_dump(is_float($z))."<br>";// bool(true) 

//$a değeri sonlu bir sayı ise INF gönderir.
$a = 1.9e411;
var_dump($a);//float(INF)

// $b değeri ondalıklı sayı ise NAN gönderir.
$b = acos(8);
var_dump($b);//float(NAN)

//$x değeri sayısal değer ise true gönderir.
$x = "5985";
var_dump(is_numeric($x));//bool(true)

//$x değeri sayısal değer değilse false gönderir.
$x = "Hello";
var_dump(is_numeric($x));//bool(false)

//numbers syntax example
?>
</body>
</html>