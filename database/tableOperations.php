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
    RENAME : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun adını güncellemek için kullanılır.
    Ayrıca istenirse herhangi bir tabloyu içinde bulunduğu database den başka bir database e taşımak için kullanılır
    DROP DATABASE : MySQL sunucusu içerisinde bulunan herhangi bir database i silmek için kullanılır.
    DROP TABLE : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloyu silmek için kullanılır.
    ALTER TABLE : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütun eklenebileceğini, 
    silinebileceğini, tablo adının veya yapısının değiştirileceğini belirtmek için kullanılır.
    
    ADD - ADD COLUMN : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni sütun eklemek için kullanılır.
        FIRST : Diğer tüm sunucuların en başına eklemek için kullanılır.
        AFTER : Belirtilecek olan sütundan bir sonra ekleneceğini belirtmek için kullanılır.
    CHANGE - CHANGE COLUMN : Herhangi bir sütunun adını veya yapısını değiştirmek için kullanılır.
    MODIFY - MODIFY COLUMN : Herhangi bir sütunun yapısını değiştirmek için kullanılır.
    DROP - DROP COLUMN : Herhangi bir sütunu silmek için kullanılır.
    
    TRUNCATE TABLE : Herhangi bir tablonun tüm içeriklerini boşaltmak / silmek için kullanılır.
    query() ile kullanılırsa id kaldığı yerden devam eder içerikleri silinir.
    exec() ile kullanılırsa id baştan başlar.

    SHOW TABLES : Tüm tabloların listesini bulmak için kullanılır.
    SHOW COLUMNS: Herhangi bir tablonun tüm sütunlarının listesini bulmak için kullanılır.
    
    CHECK : Herhangi bir tablonun kontrol edilmesi için kullanılır.
    ANALYZE : Herhangi bir tablonun çözümlenmesi / analizi için kullanılır.
    REPAIR : Herhangi bir tablonun onarılması için kullanılır.
    OPTIMIZE : Herhangi bir tablonun optimize edilmesi için kullanılır
    
    LIMIT : Herhangi bir tablonun işlem esnasında tüm verilerini işlemek yerine 
    sadece belirtilen adet veya aralıklar kadar işlemek istenildiğini belirtmek için kullanılır.

    ORDER BY : Herhangi bir tablonun verilerine işlem esnasında hangi sıra
    veya sıralar dahilinde erişileceğini belirtmek için kullanılır.
    
    WHERE : Herhangi bir tablonun işlem esnasında tüm verilerini işlemek
    yerine sadece koşula bağlı verilerin işlemek istenildiğini belirtir.

    INSERT INTO : Herhangi bir tabloya yeni bir kayıt satırı ile birlikte 
    verisi veya verilerini de eklemek için kullanılır.

    rowCount() : Herhangi bir tablonun toplam kayıt sayısını bulmak için veya
    işlem yapıldığında etkilenen kayıt sayısını bulmak için kullanılır.
    
    lastInsertId() Herhangi bir tabloya yeni kayıt eklendiğinde, 
    eklenen son kaydın id değerini veya verisini bulmak için kullanılır.
    */
    try{
        $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
        echo "veritabanı bağlantısı kuruldu<br>";
    }catch(PDOException $hata){
        echo "bağlantıda hata oluştu!<br/>";
        echo "hata açıklaması: ". $hata -> getMessage();
        die();
    }
    /*
    ORDER BY ASC A dan Z ye / küçükten büyüğe sıralar
    ORDER BY DESC Z den A ya / büyükten küçüğe sıralar
    id değerine göre küçükten büyüğe sırala aynı id olanları isme göre Z den A ya sırala
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests ORDER BY id ASC,isim DESC");

    en baştan başla ve 3 kayıt göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests LIMIT 3");

    1. kayıttan başla ve 2 kayıt göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests LIMIT 1,2");
    */
    //1. kayıttan başla ve 1 kayıt göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests LIMIT 3");
    if($sorgu){
        foreach($sorgu as $satirlar){
            echo "id: ". $satirlar["id"] . "<br>";
            echo "isim: " . $satirlar["firstname"] . "<br>";
            echo "soyisim: ". $satirlar["lastname"] . "<br>";
            echo "email: " . $satirlar["email"] . "<br>";
            echo "kayit tarihi: ". $satirlar["reg_date"] . "<br> <br>";
        }
    }else{
        echo "sorgu hatası";
    }
    $veritabaniBaglantisi = null;
    ?>
</body>
</html>