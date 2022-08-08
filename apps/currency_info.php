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
    try{
        $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root", "");
    }catch(PDOException $hataMesaji){
        echo "bağlantı hatası!! <br>";
        echo "hata açıklaması: ".$hataMesaji->getMessage();
        die();
    }
    //veritabanında currency adında tablo yoksa yenisini oluştur
    $tablo = "CREATE TABLE IF NOT EXISTS currency(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        birim_tr VARCHAR(50) NOT NULL,
        birim_en VARCHAR(50) NOT NULL,
        alis FLOAT(10),
        satis FLOAT(10),
        efektif_alis FLOAT(10),
        efektif_satis FLOAT(10))";
    $veritabaniBaglantisi->exec($tablo);
    //verileri ekrana yazdır, veritabanına ekle
    foreach($link->Currency as $key=>$value){
        echo "<p><b>PARA BİRİMİ(TR) : </b>".$value->Isim."<br>";
        echo "<b>PARA BİRİMİ(EN) : </b>".$value->CurrencyName."<br>";
        echo "<b>ALIŞ : </b>".$value->ForexBuying."<br>";
        echo "<b>SATIŞ : </b>".$value->ForexSelling."<br>";
        echo "<b>EFEKTİF ALIŞ : </b>".$value->BanknoteBuying."<br>";
        echo "<b>EFEKTİF SATIŞ : </b>".$value->BanknoteSelling."<br><br></p>";
        //veritabanına ekle
        $sorgu= $veritabaniBaglantisi->query("SELECT * FROM currency WHERE birim_tr='$value->Isim'");
        $sayi = $sorgu->rowCount();
        if($sayi==0){
            $ekle = $veritabaniBaglantisi->exec("INSERT INTO currency(id, birim_tr, birim_en, alis, satis, efektif_alis, efektif_satis) 
            VALUES ('$value', '$value->Isim', '$value->CurrencyName', '$value->ForexBuying', '$value->ForexSelling', '$value->BanknoteBuying', '$value->BanknoteSelling')");
        }
    }
    $veritabaniBaglantisi = NULL;
    ?>
</body>
</html>