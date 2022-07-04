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

$a=10;
switch ($a) {
    case "5":
      echo "sayi degeri = 5";
      break;
    case "10":
      echo "sayi degeri = 10";
      break;
    case "15":
      echo "sayi degeri = 15";
      break;
    default:
      echo "girilen sayi 5, 10 , 15 değil";
  }
/* $a degeri 5 ise ekrana 5 yazdır
$a degeri 10 ise ekrana 10 yazdır
$a degeri 15 ise ekrana 15 yazdır
hiçbiri değilse default sekmesini çalıştır
*/

?>
</body>
</html>