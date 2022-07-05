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
echo " Yıl-Ay-Gün: ". date("Y-m-d")."<br>"; //tarihi - ile gösterir
echo " Yıl.Ay.Gün: ". date("Y.m.d")."<br>"; //tarihi . ile gösterir
echo " Yıl/Ay/Gün: ". date("Y/m/d")."<br>"; //tarihi / ile gösterir

//hangi gün olduğunu ekrana yazdır
echo "Bugün günlerden : " .date("l")."<br>"; 

//tarih formatı
date("d-m-Y H:i:s"); 
echo "<br>";

//saat dilimi
date_default_timezone_set("Europe/Istanbul"); //  date_default_timezone_set(kıta/şehir) 
echo "Şuan saat " . date("h:i:s a");
echo "<br>";
//gün ay yıl olarak yazdır
echo date("d/m/Y")."<br>";
//ay gün yıl olarak yazdır
echo date("m/d/Y");
?>

</body>
</html>