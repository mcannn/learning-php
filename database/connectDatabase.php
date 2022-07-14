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
    PDO(): kendisine verilen parametreler doğrultusunda,
    MySQL sunucusuna yeni bir bağlantı açmak için kullanılır.
    PDOException: MySQL sunucusuna yeni bağlantı açma
    işlemi sırasında hata ile karşılaşılırsa bu hatayı yakalamak için kullanılır.
    getMessage(): MySQL sunucusuna yeni bağlantı açma
    işlemi sırasında hata ile karşılaşılırsa hata açıklama değerini bularak geriye döndürür.
    
    $veritabaniHostAdresi = "localhost";
    $veritabaniKullaniciAdi = "root";
    $veritabaniSifresi = "";
    $veritabaniAdi = "test";
    $veritabaniBaglantisi = new PDO("mysql::host=$veritabaniHostAdresi;dbname=$veritabaniAdi;charset=UTF8", $veritabaniKullaniciAdi, $veritabaniSifresi);
    */

    try{
        $veritabaniBaglantisiBir = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root", "");
        $veritabaniBaglantisiBir->exec("SET CHARACTER SET UTF8");
        $veritabaniBaglantisiİki = new PDO("mysql:host=localhost;dbname=ornekdb;charset=UTF8","root", "");
        $veritabaniBaglantisiİki->exec("SET CHARACTER SET UTF8");   
        echo "veritabanı bağlantıları kuruldu <br>";

    }catch(PDOException $hataMesaji){
        echo "bağlantı hatası!! <br>";
        echo "hata açıklaması: ".$hataMesaji->getMessage();
        die();
    }
    echo "<pre>";
    print_r($veritabaniBaglantisiBir);
    echo "</pre>";
    echo "<pre>";
    print_r($veritabaniBaglantisiİki);
    echo "</pre>";

    $sorguBir= $veritabaniBaglantisiBir->query("SELECT * FROM myguests");
    $sorguİki= $veritabaniBaglantisiİki->query("SELECT * FROM deneme");

    $veritabaniBaglantisiBir = null;
    $veritabaniBaglantisiİki = null;

    ?>
</body>
</html>