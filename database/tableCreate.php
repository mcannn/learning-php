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
    CREATE DATABASE : MySQL sunucusuna yeni bir database ekleme / oluşturma için kullanılır.
    CREATE TABLE : MySQL sunucusuna yeni bir database içerisine yeni bir tablo ekleme / oluşturma için kullanılır.
    Ayrıca istenirse herhangi bir tablo içeriğini başka bir tabloya kopyalamak için de kullanılabilir.
    
    database oluşturma
    $sorgu = $veritabaniBaglantisi->query("CREATE DATABASE test1 ");

    if($sorgu){
        echo "database oluşturuldu";
    }else{
        echo "sorgu hatası";
    }
    */
    try{
        $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
        echo "veritabanı bağlantısı kuruldu<br>";
    }catch(PDOException $hata){
        echo "bağlantıda hata oluştu!<br/>";
        echo "hata açıklaması: ". $hata -> getMessage();
        die();
    }
    $sorgu = $veritabaniBaglantisi->exec("CREATE TABLE ornek(
        id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        isim varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
        email varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL UNIQUE KEY,
        durumu tinyint(1) UNSIGNED NOT NULL,
        kayittarihi timestamp NOT NULL DEFAULT current_timestamp,
        aciklama text CHARACTER SET utf8_general_ci NOT NULL
    )
    ENGINE = InnoDB DEFAULT CHARACTER SET utf8_general_ci");
    
         if($sorgu){
        echo "database oluşturuldu";
    }else{
        echo "sorgu hatası";
    }
    $veritabaniBaglantisi = null;
    ?>
</body>
</html>