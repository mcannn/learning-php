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
$txt="string example";
// txt değerini yazdır
echo "txt: ".$txt."<br>";
//ifade içindeki karakter sayısı
echo "length = ".strlen($txt)."<br>"; 
//ifade içindeki kelime sayısı
echo "word count = ".str_word_count($txt)."<br>";
//ifadeyi ters çevir
echo "reverse = ".strrev($txt)."<br>";
//istenen kelimeyi bul
echo "find word: ".strpos($txt,"example")."<br>";
//kelime bul ve değiştir
echo "replace: ".str_replace("example","example1",$txt);
//string ifade örnekleri
?>
</body>
</html>