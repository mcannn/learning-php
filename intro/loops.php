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

$x=2;
while($x<=20){
    echo "x = ".$x."<br>";
    $x+=4;
}//2 den başlayıp +4 ekle


$y=2;
do{
    echo "y = ".$y."<br>";
    $y+=4;
}while($y<=20);//2 den başlayıp +4 ekle


for($z=5;$z<=20;$z++){
    echo "z = $z"."<br>";
}//5 den başlayıp +1 ekle

$numbers = array("5","10","15","20");

foreach($numbers as $value){
    echo "$value <br>";
}//degerleri eleman sayısı kadar ekrana yazdır

for($x=0;$x<20;$x+=2){
    if($x==16){
        break;
    }
    echo "x degeri = ".$x."<br>";
}/*0 dan başlayıp +1 ekle 
16 olunca döngüden çık
*/

for ($x = 0; $x < 10; $x++) {
    if ($x == 6) {
      continue;
    }
    echo "The number is: $x <br>";
  }//x = 6 ise atla
  
?>
</body>
</html>