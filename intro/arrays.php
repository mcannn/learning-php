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
//tek boyutlu dizi örneği
$colors = array("red","green","blue");

//iki boyutlu dizi örneği
$colors2 = array(
    array("red",1,2),
    array("green",3,4),
    array("blue",5,6),
  );

//üç boyutlu dizi örneği
$colors3 = array(
    array("red",1,2,3),
    array("green",4,5,6),
    array("blue",7,8,9),
  );
  
//colors dizisini ekrana yazdır
echo $colors[0]."<br>";
echo $colors[1]."<br>";
echo $colors[2]."<br>";

//eleman sayısını bul
echo "eleman miktarı = ".count($colors)."<br>";

$colors1 = array("red"=>"5","green"=>"15","blue"=>"25");

foreach($colors1 as $x => $x_value) {
    echo "anahtar=" . $x . ", değeri=" . $x_value;
    echo "<br>";
  }
//key-value değerini ekrana yazdır
echo "green değeri = ".$colors1['green']."<br>";

$sayilar = array(25,5,10,20,15,30);
$arrlength = count($sayilar);
for($x = 0; $x < $arrlength; $x++) {
  echo $sayilar[$x].",";
}

echo "<br>";
//küçükten büyüğe sırala
sort($sayilar);
$arrlength = count($sayilar);
for($x = 0; $x < $arrlength; $x++) {
  echo $sayilar[$x].",";
}

echo "<br>";
//büyükten küçüğe sırala
rsort($sayilar);
$arrlength = count($sayilar);
for($x = 0; $x < $arrlength; $x++) {
  echo $sayilar[$x].",";
}

?>
</body>
</html>