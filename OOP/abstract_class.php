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
//ÖRNEK1
//animals adında bir abstract class oluştur
abstract class Animals{
    public $isim;
    public function __construct($isim){
        $this->isim=$isim;
    }
    abstract public function Animal():string;
}
//cat adında bir child class oluştur
class Cat extends Animals{
    public function Animal() :string{
        return "this is $this->isim - Kedi class!";
    }//ekran çıktısı: this is CAT - Kedi class!
}
//dog adında bir child class oluştur
class Dog extends Animals{
    public function Animal() :string{
        return "this is $this->isim - Köpek class!";
    }//ekran çıktısı: this is DOG - Köpek class!
}
//fish adında bir child class oluştur
class Fish extends Animals{
    public function Animal() :string{
        return "this is $this->isim - Balık class!";
    }//ekran çıktısı: this is FISH - Balık class!
}
//child class üzerinden nesne üret
$kedi =new Cat("CAT");
echo $kedi->Animal()."<br>";
$köpek = new Dog("DOG");
echo $köpek ->Animal()."<br>";
$balık =new Fish("FISH");
echo $balık->Animal()."<br>";
*/
//ÖRNEK2
abstract class Tema{
    abstract public function Header($arkaplan, $logo, $banner);
    abstract public function Body($icerik);
    abstract public function Footer($metin);
}
class UstAlan extends Tema{
    public function Header($a, $b, $c){

    }
    public function Body($x){

    }
    public function Footer($y){

    }
}
?> 
</body>
</html>