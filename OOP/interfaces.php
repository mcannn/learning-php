<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araç Bilgileri</title>
</head>
<body>

<?php
//interface tanımla
interface Vehicle{
    public function topSpeed();
    public function driverLicense();
}
//Vehicle interface üzerinden Automobile sınıfına implement tanımla 
class Automobile implements Vehicle{
    public function topSpeed(){
        echo "Arabanın en yüksek hızı: 260 km/s dir.<br>";
    }
    public function driverLicense(){
        echo "Araba sürebilmek için B sınıfı ehliyet gerekir.<br>";
    }
}
//Vehicle interface üzerinden Minibus sınıfına implement tanımla 
class Minibus implements Vehicle{
    public function topSpeed(){
        echo "Minibüs en yüksek hızı: 160 km/s dir.<br>";
    }
    public function driverLicense(){
        echo "Minibüs sürebilmek için D1 sınıfı ehliyet gerekir.<br>";
    }
}
//Vehicle interface üzerinden Bus sınıfına implement tanımla 
class Bus implements Vehicle{
    public function topSpeed(){
        echo "Otobüsün en yüksek hızı: 120 km/s dir.<br>";
    }
    public function driverLicense(){
        echo "Otobüs sürebilmek için D sınıfı ehliyet gerekir.<br>";
    }
}
//Vehicle interface üzerinden Truck sınıfına implement tanımla 
class Truck implements Vehicle{
    public function topSpeed(){
        echo "Kamyonun en yüksek hızı: 100 km/s dir.<br>";
    }
    public function driverLicense(){
        echo "Kamyon sürebilmek için C sınıfı ehliyet gerekir.<br>";
    }
}
//değişkenleri tanımla
$car = new Automobile();
$minibus = new Minibus();
$bus = new Bus();
$truck = new Truck();
//bilgileri ekrana yazdır
$car->topSpeed();
$car->driverLicense();
echo "<br>";
$minibus->topSpeed();
$minibus->driverLicense();
echo "<br>";
$bus->topSpeed();
$bus->driverLicense();
echo "<br>";
$truck->topSpeed();
$truck->driverLicense();
echo "<br>";
?>
    
</body>
</html>