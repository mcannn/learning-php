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
//araçlar isminde bir sınıf oluştur
class Araçlar{
    //değişkenleri tanımla
    public $motorHacmi;
    public $renk;
    public $agirlik;
    public function __construct($motorHacmi,$renk,$agirlik)
    {
        $this->motorHacmi=$motorHacmi;
        $this->renk=$renk;
        $this->agirlik=$agirlik;
    }
}
//araçlar sınıfından kalıtım alan motosiklet sınıfı oluştur
class Motorcycle extends Araçlar{
    public function __construct($motorHacmi,$renk,$agirlik)
    {
        $this->motorHacmi=$motorHacmi;
        $this->renk=$renk;
        $this->agirlik=$agirlik;
    }
    //bilgileri görüntüle
    public function ekranaYaz() {
        echo "Araç Türü = Motosiklet <br>
        Araç Motor Hacmi= {$this->motorHacmi} cc<br>
        Araç Rengi = {$this->renk}<br>
        Araç Ağırlığı = {$this->agirlik} kg<br><hr>";
    }
}
//araçlar sınıfından kalıtım alan otomobil sınıfı oluştur
class Car extends Araçlar{
    public function __construct($motorHacmi,$renk,$agirlik)
    {
        $this->motorHacmi=$motorHacmi;
        $this->renk=$renk;
        $this->agirlik=$agirlik;
    }
    //bilgileri görüntüle
    public function ekranaYaz() {
        echo "Araç Türü = Otomobil <br>
        Araç Motor Hacmi= {$this->motorHacmi} cc<br>
        Araç Rengi = {$this->renk}<br>
        Araç Ağırlığı = {$this->agirlik} kg<br><hr>";
    }
}
//yeni bilgiler ekle
$motor1 = new Motorcycle(250,"Yeşil",40);
$motor2 = new Motorcycle(750,"Kırmızı",120);
$araba1 = new Car(1600,"Beyaz",950);
$araba2 = new Car(2500,"Beyaz",1250);
$araba3 = new Car(1200,"Beyaz",850);
//bilgileri ekrana yazdır
$araba1 -> ekranaYaz();
$araba2 -> ekranaYaz();
$araba3 -> ekranaYaz();
$motor1 -> ekranaYaz();
$motor2 -> ekranaYaz();

?>
</body>
</html>