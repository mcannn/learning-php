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
    try{
        $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
        echo "veritabanı bağlantısı kuruldu<br>";
    }catch(PDOException $hata){
        echo "bağlantıda hata oluştu!<br/>";
        echo "hata açıklaması: ". $hata -> getMessage();
        die();
    }
    //myguests tablosuna benzer yapıda myguests23 adında bir tablo oluştur.
    $sorgu = $veritabaniBaglantisi->query("CREATE TABLE test.myguests23 LIKE test.myguests");
    if($sorgu){
        echo "database oluşturuldu";
    }else{
        echo "sorgu hatası";
    }
    $veritabaniBaglantisi = null;

    ?>
</body>
</html>