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
class Gorevli{
    public $isim;
    private $yas;
    private $maas;
    //construct
    public function __construct($isim,$yas,$maas){
        $this->setİsim($isim);
        $this->setYas($yas);
        $this->setMaas($maas);
    }
    //destruct ile ekrana yazdır
    public function __destruct(){
        echo "isim : {$this->isim} <br>";
        echo "yas : {$this->yas} <br>";
        echo "maas : {$this->maas} <br><br>";
    }
    //bilgileri ekrana yazdır
    public function bilgiler(){
        echo "isim = ".$this->isim."<br>";
        echo "yas = ".$this->yas."<br>";
        echo "maas = ".$this->maas."<br><br>";
    }
    public function setİsim($isim){
        $this->isim=$isim;
    }
    private function setYas($yas){
        $this->yas=$yas;
    }
    private function setMaas($maas){
        $this->maas=$maas;
    }
}
//bilgileri ekle
$numara1 = new Gorevli("ahmet","35","5000");
$numara2 = new Gorevli("furkan","40","5500");
$numara3 = new Gorevli("yusuf","45","6000");
$numara4 = new Gorevli("yasin","50","6500");
$numara5 = new Gorevli("talha","55","7000");
//bilgileri görüntüle
$numara1->bilgiler();
$numara2->bilgiler();
$numara3->bilgiler();
$numara4->bilgiler();
$numara5->bilgiler();
/* destruct ile ve normal fonksiyon ile 
olmak üzere toplamda 2 kere yazdırma 
işlemi yaptırdık.
yani ekranda aynı veriler
ikişer kere görüntülenmiş olacak
*/
?>
</body>
</html>