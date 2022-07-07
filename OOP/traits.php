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
//mesaj1 adında trait tanımla
trait mesaj1{
    public function m1(){
        echo "1.trait 1.mesaj!!<br>";
    }
    public function m2(){
        echo "1.trait 2. mesaj!!<br>";
    }
}
//mesaj2 adında trait tanımla
trait mesaj2{
    public function m1(){
        echo "2.trait 1.mesaj!!<br>";
    }
    public function m2(){
        echo "2.trait 2. mesaj!!<br>";
    }
}
//trait mesaj1 çağıran class oluştur
class msj1{
    use mesaj1;
}
//trait mesaj2 çağıran class oluştur
class msj2{
    use mesaj2;
}
//msj1 class için değişken tanımla
$goruntule = new msj1();
//ekrana yazdır
$goruntule->m1();
$goruntule->m2();
//msj2 class için değişken tanımla
$goruntule = new msj2();
//ekrana yazdır
$goruntule->m1();
$goruntule->m2();
?>
</body>
</html>