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
    //const değer tanımla ve ekrana yazdır
    class ornek{
        public $isim = "Mehmet";
        public $yas = 20;
    }
    $deger = new ornek();
    echo "isim = " . $deger->isim . "<br>" . "yas = " . $deger->yas . "<br>";
    class ornek{
        public const ISIM = "Mehmet";
        public const YAS = 20;
    }
    $deger = new ornek;
    echo "isim = " . ornek::ISIM . "<br>" . "yas = " . ornek::YAS . "<br>";
    */
    //Sınıf1 classından 3 tane türetilmiş class oluştur.
    class Sınıf1{
        public function yazi(){
            return "<h2>1</h2>";
        } 
    }
    class Sınıf2 extends Sınıf1{
        public function yazi(){
            return "<h2>2</h2>";
        }
    }
    class Sınıf3 extends Sınıf2{
        public function yazi(){
            return "<h2>3</h2>";
        }
    }
    class Sınıf4 extends Sınıf3{
        public function yazi(){
            return "<h2>4</h2>";
        }
        public function Dizi(){
            return ["birinci"=> Sınıf1::yazi(),
            "ikinci"=> Sınıf2::yazi(),
            "üçüncü"=> Sınıf3::yazi(),
            "dördüncü"=> $this->yazi()];
        }
    }
    $sonuc = new Sınıf4;
    print_r($sonuc -> Dizi());
    ?>
</body>
</html>