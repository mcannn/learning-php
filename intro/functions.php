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
// a+b toplama fonksiyonu
function topla(int $a, int $b) {
    return $a + $b;
  }

echo topla(5, 15)."<br>";

//fonksiyona verilen sayıya +5 ekle
function ekle($x){
    $x+=5;
    return (int) ($x);
}
$y=30;
echo ekle($y);

?>
</body>
</html>