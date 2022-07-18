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
    REPLACE : Herhangi bir tablonun herhangi bir kaydını içeren satırındaki
    sütuna ait bir veriyi tam veya kısmı olarak değiştirilmesini sağlar.
    */
    try{
        $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
        echo "veritabanı bağlantısı kuruldu<br>";
    }catch(PDOException $hata){
        echo "bağlantıda hata oluştu!<br/>";
        echo "hata açıklaması: ". $hata -> getMessage();
        die();
    }
    $degistir = $veritabaniBaglantisi->query("UPDATE musteri SET isim=REPLACE(isim,'ahmet','emir')");
    if($degistir){
        echo "veriler değiştirildi";
    }else{
        echo "hata oluştu";
    }
    $veritabaniBaglantisi = null;
    ?>
    
</body>
</html>