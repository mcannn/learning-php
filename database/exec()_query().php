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
    exec() : MySQL sunucusuna PDO ile açılan bağlantı dahilinde 
    yeni bir sorgu yapmak için kullanılır.
    ayrıca istenirse sorgu işleminde etkilenen kayıt sayısını bulmak için kullanılır.
    query() : MySQL sunucusuna PDO ile açılan bağlantı dahilinde 
    yeni bir sorgu yapmak için kullanılır.
    ayrıca istenirse sorgu sonucunda dönen tüm veri değerlerini bulur
    ve bulduğu değerlerden yeni bir dizi oluşturarak bu oluşturduğu dizi değerini geriye döndürür.
    
    FETCH_ASSOC : Tablo verilerini okuma işlemi sırasında oluşturulacak olan dizide 
    ilgili tablonun sütun isimleri dizinin anahtarları olarak tanımlanır. 
    ve ilgili verilere sütun isimleriyle erişilir.
    
    FETCH_NUM : Tablo verilerini okuma işlemi sırasında oluşturulacak olan dizide
    dizinin anahtarları PHP tarafından otomatik olarak tanımlanır. (0,1,2,3,....)
    
    FETCH_BOTH : Tablo verilerini okuma işlemi sırasında oluşturulacak olan dizide
    dizinin anahtarları hem ilgili tablonun sütun isimleriyle 
    hemde PHP tarafından otomatik olarak tanımlanır (0,1,2,3,....)
    ve ister sütun isimleriyle ister sütun numaraları ile erişilir.

    FETCH_OBJ : Tablo verilerini okuma işlemi sırasında oluşturulacak olan nesnede 
    ilgili tablonun sütun isimleri nesnenin özellikleri olarak tanımlanır 
    ve ilgili verilere sütun isimleri olarak erişilir.
    */

    try{
        $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
        echo "veritabanı bağlantısı kuruldu<br>";
    }catch(PDOException $hata){
        echo "bağlantıda hata oluştu!<br/>";
        echo "hata açıklaması: ". $hata -> getMessage();
        die();
    }

    /*$sorgu = $veritabaniBaglantisi->query("SELECT * FROM table_name", PDO::FETCH_ASSOC);
    exec() metodu SELECT işlemlerinde tercih edilmez, genellikle güncelleme, silme, değiştirme işlemlerinde kullanılır.
    
    //exec ile veri ekleme işlemi
    $sorgu = $veritabaniBaglantisi->exec("INSERT INTO table_name (content) values ('Deneme İsim Soyisim')");// bu haldeyken PDO::FETCH_BOTH) şeklindedir
    echo "<pre>";
    print_r("işlemden etkilenen kayıt sayısı: ".$sorgu);
    echo "</pre>";
    */
    
    //query ile sorgulama işlemi
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM table_name");// bu haldeyken PDO::FETCH_BOTH) şeklindedir
    echo "<pre>";
    print_r($sorgu);
    echo "</pre>";
    $veritabaniBaglantisi = null;
    ?>
    
</body>
</html>