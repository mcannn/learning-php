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
    class Hesap{
        // özellikler, 
        public $id = 1;
        public $name = "MEHMET";
        public $balance = 250;
        //metotlar
        public function getName(){
            return $this->name;
        }
        public function getId(){
            return $this->id;
        }
        public function getBalance(){
            return $this->balance;
        }
    }
    $hesap1 = new Hesap;
    echo $hesap1->id."<br>";
    echo $hesap1->name."<br>";
    echo $hesap1->balance."<br>";
    $hesap2 = new Hesap;
    echo $hesap2->id."<br>";
    echo $hesap2->name."<br>";
    echo $hesap2->balance."<br>";
    //ÖRNEK2
    class Deneme{
        public $isim = "Mehmet";
        public $yas = 21; 
    }
    $ornek = new Deneme;
    $ornek->isim="Ahmet";
    $ornek->yas=22;
    echo $ornek->isim."".$ornek->yas;
    */
    //ÖRNEK3
    class Deneme{
        public function Test($isim="Mehmet",$yas=21){
            $metin="isim = ".$isim."<br>yas = ".$yas;
            echo $metin;
        }       
    }
        $islem = new Deneme;
        $islem->test("Ahmet",25);
    ?>
</body>
</html>