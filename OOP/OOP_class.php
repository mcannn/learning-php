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
    class Spor{
        public function Ozellik1($oyunturu){
            return "<b>oyun türü : </b>".$oyunturu."<br>";
        }
        public function Ozellik2($sure){
            return "<b>süre : </b>".$sure."<br>";
        }
        public function Ozellik3($kisisayisi){
            return "<b>kişi sayısı : </b>".$kisisayisi."<br>";
        }
    }
    $futbol = new Spor;
    $basketbol = new Spor;
    $voleybol = new Spor;
    
    echo "<br><b>-FUTBOL ÖZELLİKLERİ-</b><br>";
    echo $a =  $futbol->Ozellik1("ayak");
    echo $a =  $futbol->Ozellik2("90 dakika");
    echo $a =  $futbol->Ozellik3("11+11 kişi");
    echo "<b>-BASKETBOL ÖZELLİKLERİ-</b><br>";
    echo $a =  $basketbol->Ozellik1("el");
    echo $a =  $basketbol->Ozellik2("40 dakika");
    echo $a =  $basketbol->Ozellik3("5+5 kişi");
    echo "<b>-VOLEYBOL ÖZELLİKLERİ-</b><br>";
    echo $a =  $voleybol->Ozellik1("el");
    echo $a =  $voleybol->Ozellik2("5 Set");
    echo $a =  $voleybol->Ozellik3("6+6 kişi");
    ?>
</body>
</html>