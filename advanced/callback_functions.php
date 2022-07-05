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
//"bir" adında fonksiyon oluştur
function bir($str){
    return $str ."1";
}
//"iki" adında fonksiyon oluştur
function iki($str){
    return $str ."2";
}
//"üç" adında fonksiyon oluştur
function üç($str){
    return $str ."3";
}
//"dört" adında fonksiyon oluştur
function dört($str){
    return $str ."4";
}
//değerleri ekrana yazan fonksiyon
function ekranayaz($str,$format){
    echo $format($str);
}
//fonksiyon değerlerini ekrana yazdır
ekranayaz("satır numarası: ","bir");
echo "<br>";
ekranayaz("satır numarası: ","iki");
echo "<br>";
ekranayaz("satır numarası: ","üç");
echo "<br>";
ekranayaz("satır numarası: ","dört");
echo "<br>";
?>
    
</body>
</html>