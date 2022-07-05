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
//ornek.txt dosyasını aç
//eğer açılamadıysa ekrana hata çıktısı yazdır
$myfile = fopen("ornek.txt","r")
or die ("dosya açma hatası!!");

//ornek.txt dosyasındaki verileri ekrana yazdır
echo fread($myfile,filesize("ornek.txt"))."<br>";

//dosyayı kapat
fclose($myfile);

//dosyadaki bilgileri satır satır oku ve ekrana yazdır
//dosyayı okuma için aç
$myfile = fopen("ornek.txt","r")
or die ("dosya açma hatası!!");

//birinci satırı oku
echo fgets($myfile);

//ikinci satırı oku
echo fgets($myfile);

//üçüncü satırı oku
echo fgets($myfile);

//dosyayı kapat
fclose($myfile);
echo "<br>";
/*
r: okuma için dosyayı aç
w: yazma için dosyayı aç(eğer dosya yoksa yeni oluşturur)
a: yazma için dosyayı aç(dosya yoksa yenisini oluşturur ve imleç dosyanın sonundadır)
x: yazma için yeni dosya oluştur.(dosya zaten varsa hata verir)
*/
$myfile = fopen("ornek.txt","r")
or die ("dosya açma hatası!!");

//tek tek satır verileri oku ve ekrana yazdır
while(!feof($myfile)) {
    echo fgets($myfile)."<br>";
  }
  
//dosyayı kapat
fclose($myfile);

$myfile = fopen("ornek.txt","r")
or die ("dosya açma hatası!!");
//tek tek karakter oku ve ekrana yazdır 
while(!feof($myfile)) {
    echo fgetc($myfile);
  }
  fclose($myfile);

?>
</body>
</html>