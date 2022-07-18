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
    beginTransaction() : Herhangi bir tabloya işlem yapılacağı anda
    otomatik işleyen geçici işlem yapılarını açmak veya kapatmak için kullanılır.

    commit() : Herhangi bir tabloya işlem yapılacağı anda
    daha önceden beginTransaction() metodu kullanılarak açılmış olan
    otomatik işleyen geçici işlem yapıları dahilinde 
    işleme alınmış olan query nin geçicilikten çıkarak 
    kalıcı hale döndürülmesi için kullanılır.
    
    rollBack() : Herhangi bir tabloya işlem yapılacağı anda
    daha önceden beginTransaction() metodu kullanılarak açılmış olan
    otomatik işleyen geçici işlem yapıları dahilinde 
    işleme alınmış olan query nin geçicilikten çıkartılarak 
    işlemin geri alınması (iptal edilmesi) işlemi için kullanılır.
    */
    try{
        $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
        echo "veritabanı bağlantısı kuruldu<br>";
    }catch(PDOException $hata){
        echo "bağlantıda hata oluştu!<br/>";
        echo "hata açıklaması: ". $hata -> getMessage();
        die();
    }
    $veritabaniBaglantisi -> beginTransaction();
    $sorgubir = $veritabaniBaglantisi->prepare("SELECT * FROM hesaplar");
    $guncelle = $veritabaniBaglantisi->prepare("UPDATE hesaplar SET bakiye=bakiye+1000 WHERE id=2");
    $sorgubir->execute();
    $guncelle->execute();
    if($guncelle){
        echo "hesap bakiyesi güncellendi <br>";
    }else{
        echo "guncelleme esnasında hata oluştu <br>";
    }
    if($sorgubir){
        $kayitsayisi = $sorgubir->rowCount();
        if($kayitsayisi>0){
            foreach($sorgubir as $kayit){
                echo "id = ".$kayit["id"]."<br>".
                "isim = ".$kayit["isim"]."<br>".
                "bakiye = ".$kayit["bakiye"]."<br><br>";
            }
        }
    }
    $veritabaniBaglantisi ->rollBack();
    /*
    rollBack() : yapılan son işlemi geri alır(günelleme işlemi)
    bu işlem sonrasında tablodaki güncelleme işlemi geri alınacağı için
    tabloun verilerinde herhangi bir değişiklik olmaz.
    */
    $veritabaniBaglantisi = null;
    ?>   
</body>
</html>