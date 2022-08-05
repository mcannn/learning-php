<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Döviz Kurları</title>
</head>
<body>
    <?php
    $link = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");
    /*
    echo "<pre>";
    print_r($link);
    echo "</pre>";
    */
    foreach($link->Currency as $key=>$value){
        echo "<p><b>PARA BİRİMİ(TR) : </b>".$value->Isim."<br>";
        echo "<b>PARA BİRİMİ(EN) : </b>".$value->CurrencyName."<br>";
        echo "<b>ALIŞ : </b>".$value->ForexBuying."<br>";
        echo "<b>SATIŞ : </b>".$value->ForexSelling."<br>";
        echo "<b>EFEKTİF ALIŞ : </b>".$value->BanknoteBuying."<br>";
        echo "<b>EFEKTİF SATIŞ : </b>".$value->BanknoteSelling."<br><br></p>";
    }
    ?>
</body>
</html>