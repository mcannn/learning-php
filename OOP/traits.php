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
/*
trait : Sınıflar için özellik ve metod gruplarının oluşturulması için kullanılır.
use : Daha önceden tanımlanmış olan herhangi bir özellik veya metod grubunu, ilgili sınıfa tanımlamak / uygulamak için kullanılır.
insteadof : Sınıf için tanımlanmış olan özellik ve metod gruplarında tercih / seçim işlemleri için kullanılır.
as : Sınıf için tanımlanmış olan özellik ve metod gruplarında, metoda takma isim belirleme veya görünürlük atama işlemleri için kullanılır.
NOT: trait ler sınıf yapısının tüm özelliklerine sahiptir, sadece const tanımı kullanılmaz.*/
//mesaj1 adında trait tanımla
trait mesaj1{
    public $ozellikbir = "birinci trait";
    public function m1(){
        echo "1.trait 1.mesaj!!<br>";
    }
    public function m2(){
        echo "1.trait 2. mesaj!!<br>";
    }
}
//mesaj2 adında trait tanımla
trait mesaj2{
    public $ozellikiki = "ikinci trait";
    public function m1(){
        echo "2.trait 1.mesaj!!<br>";
    }
    public function m2(){
        echo "2.trait 2. mesaj!!<br>";
    }
}
//mesaj3 adında trait tanımla
trait mesaj3{
    public $ozellikuc = "üçüncü trait";
    public function m3(){
        echo "3.trait 1.mesaj!!<br>";
    }
    public function m4(){
        echo "3.trait 2. mesaj!!<br>";
    }
}
//trait mesaj1 çağıran class oluştur
class msj1{
    use mesaj1;
}
//trait mesaj2 çağıran class oluştur
class msj2{
    use mesaj2,mesaj3;
}
//msj1 class için değişken tanımla
$goruntule = new msj1();
//ekrana yazdır
echo $goruntule->ozellikbir."<br>";
$goruntule->m1();
$goruntule->m2();
//msj2 class için değişken tanımla
$goruntule = new msj2();
//ekrana yazdır
echo $goruntule->ozellikiki."<br>";
$goruntule->m1();
$goruntule->m2();
echo $goruntule->ozellikuc."<br>";
$goruntule->m3();
$goruntule->m4();
?>
</body>
</html>