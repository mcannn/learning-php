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
$x= 5;
function ornek(){
    echo "<br>";
    static $y= 0;
    // her adımda $y değerine 6 ekle
    $y=$y+6;
    //örnek global x değişkeni
    echo " ornek x degiskeni:   ".$GLOBALS['x']."<br>";
    //y değerini yazdır
    echo " ornek y degiskeni: ".$y;
}
//ornek fonksiyonunu 10 kere çalıştır
for($i=0;$i<10;$i++)
{
    ornek();
}
?>
</body>
</html>