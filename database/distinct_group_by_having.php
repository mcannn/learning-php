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
    DISTINCT : Herhangi bir tablonun verilerini okuma işlemi sırasında
    belirtilecek olan sütuna ait tekrar eden verilerin sadece ilkini
    işleme dahil eder diğerlerini işlem dışında bırakır.

    GROUP BY : Herhangi bir tablonun verilerini okuma işlemi sırasında
    belirtilecek olan sütuna ait tekrar eden verilerin gruplandırılmasını sağlar.
    
    HAVING : Herhangi bir tablonun verilerini okuma işlemi sırasında
    belirtilecek olan sütuna ait tekrar eden verilerin GROUP BY ifadesi ile 
    gruplandırılması sırasında koşul veya koşullar tanımlamak için kullanılır.
    */
    try{
        $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
        echo "veritabanı bağlantısı kuruldu<br>";
    }catch(PDOException $hata){
        echo "bağlantıda hata oluştu!<br/>";
        echo "hata açıklaması: ". $hata -> getMessage();
        die();
    }
    echo "<br>";
    //distinct örneği
    $sorgu = $veritabaniBaglantisi->query("SELECT DISTINCT isim FROM musteri",PDO::FETCH_ASSOC);
    if($sorgu){
        $kayit = $sorgu->rowCount();
        if($kayit>0){
            foreach($sorgu as $satirlar){
                echo $satirlar["isim"]."<br>";
            }
        }
        }else{
        echo "kayıt bulunamadı!<br>";
    }
    echo "<br>";
    //group by örneği
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM musteri GROUP BY isim",PDO::FETCH_ASSOC);
    if($sorgu){
        $kayit = $sorgu->rowCount();
        if($kayit>0){
            foreach($sorgu as $satirlar){
                echo $satirlar["isim"]."<br>";
            }
        }
        }else{
        echo "kayıt bulunamadı!<br>";
    }
    echo "<br>";
    //having örneği
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM musteri GROUP BY isim HAVING id<3",PDO::FETCH_ASSOC);
    if($sorgu){
        $kayit = $sorgu->rowCount();
        if($kayit>0){
            foreach($sorgu as $satirlar){
                echo $satirlar["isim"]."<br>";
            }
        }
        }else{
        echo "kayıt bulunamadı!<br>";
    }
    $veritabaniBaglantisi = null;
    ?>
</body>
</html>