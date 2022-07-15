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
    COUNT : Herhangi bir tablonun belirtilecek olan sütununun
    toplam kayıt sayısını bulmak için kullanılır.
    MIN : Herhangi bir tablonun belirtilecek olan sütununun
    en küçük değerini bulmak için kullanılır.
    MAX : Herhangi bir tablonun belirtilecek olan sütununun
    en büyük değerini bulmak için kullanılır.
    SUM : Herhangi bir tablonun belirtilecek olan sütununun
    tüm kayıt değerlerinin toplamını bulmak için kullanılır.
    AVG :  Herhangi bir tablonun belirtilecek olan sütununun
    tüm kayıt değerlerinin ortalamasını bulmak için kullanılır.
    */
    try{
        $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
        echo "veritabanı bağlantısı kuruldu<br>";
    }catch(PDOException $hata){
        echo "bağlantıda hata oluştu!<br/>";
        echo "hata açıklaması: ". $hata -> getMessage();
        die();
    }
    //count örneği
    $sorgu = $veritabaniBaglantisi->query("SELECT COUNT(id) AS satirSayisi FROM musteri",PDO::FETCH_ASSOC);
    if($sorgu){
        $kayitSayisi = $sorgu->fetch();
        echo "kayıt sayısı : ".$kayitSayisi["satirSayisi"]."<br>";
    }else{
        echo "kayıt bulunamadı!<br>";
    }
    //min örneği
    $sorgu1 = $veritabaniBaglantisi->query("SELECT MIN(id) AS minimum FROM musteri",PDO::FETCH_ASSOC);
    if($sorgu1){
        $kayit = $sorgu1->fetch();
        echo "en küçük id değeri : ".$kayit["minimum"]."<br>";
    }else{
        echo "kayıt bulunamadı!<br>";
    }
    //max örneği
    $sorgu2 = $veritabaniBaglantisi->query("SELECT MAX(id) AS maximum FROM musteri",PDO::FETCH_ASSOC);
    if($sorgu2){
        $kayit = $sorgu2->fetch();
        echo "en büyük id değeri : ".$kayit["maximum"]."<br>";
    }else{
        echo "kayıt bulunamadı!<br>";
    }
    //sum örneği
    $sorgu3 = $veritabaniBaglantisi->query("SELECT SUM(id) AS summary FROM musteri",PDO::FETCH_ASSOC);
    if($sorgu3){
        $kayit = $sorgu3->fetch();
        echo "id değerlerinin toplamı : ".$kayit["summary"]."<br>";
    }else{
        echo "kayıt bulunamadı!<br>";
    }
    //avg örneği
    $sorgu4 = $veritabaniBaglantisi->query("SELECT AVG(id) AS average FROM musteri",PDO::FETCH_ASSOC);
    if($sorgu4){
        $kayit = $sorgu4->fetch();
        echo "id değerlerinin ortalaması : ".number_format($kayit["average"],2)."<br>";
    }else{
        echo "kayıt bulunamadı!<br>";
    }
    $veritabaniBaglantisi = null;
    ?>
</body>
</html>