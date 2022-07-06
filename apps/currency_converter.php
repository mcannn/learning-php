<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
</head>
<body>

<?php
//doviz adında class oluştur
class Doviz{
    public $deger;
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}
//nesneleri tanımla
$dolar=new Doviz;
$euro=new Doviz;
$pound=new Doviz;
$dolar->deger=17.13;
$euro->deger=17.58;
$pound->deger=20.46;

//değişken değerlerini ekrana yazdır
echo "Güncel Kur Değerleri: <br>";
echo "dolar/tl = ".$dolar->deger."<br>";
echo "euro/tl = ".$euro->deger."<br>";
echo "pound/tl = ".$pound->deger."<br><br>";
?>
<!--girilen değerleri oku ve 
butona tıklandığında result.php 
dosyasına yönlendir --> 
<form action="result.php" method="post">
Türk lirası değeri giriniz: <input type="text" name="lira"> ₺<br><br>
Dönüştürülecek birimi seçiniz: <br>
Dolar ($)<input type="radio" name="para" value="dolar"><br>
Euro (€)<input type="radio" name="para" value="euro"><br>
Pound (£)<input type="radio" name="para" value="pound"><br>
<button type="submit">Dönüştür</button>
</form>

</body>
</html>