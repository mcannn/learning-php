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
    //myguests tablosundaki firstname değeri isim3 olan kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE firstname='isim3'",PDO::FETCH_ASSOC);
    /*
    //myguests tablosundaki id değeri 2 VEYA 3 olan kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE id=2 OR id=3",PDO::FETCH_ASSOC);

    //myguests tablosundaki id değeri 2 VEYA 3 olan VE id<3 kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE (id=2 OR id=3) AND id<3",PDO::FETCH_ASSOC);

    //myguests tablosundaki id değeri 2 VEYA 3 olan kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE id IN (2,3)",PDO::FETCH_ASSOC);

    //myguests tablosundaki isim değeri "isim1" veya "isim2" olan kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE id IN ('isim1','isim2')",PDO::FETCH_ASSOC);

    //myguests tablosundaki id değeri 1 ile 3 arasında olan kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE id BETWEEN 1 AND 3",PDO::FETCH_ASSOC);

    //myguests tablosundaki id değeri 1 ile 3 arasında OLMAYAN kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE id NOT BETWEEN 1 AND 3",PDO::FETCH_ASSOC);

    //myguests tablosundaki id değeri 1 den farklı olan kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE id!=1",PDO::FETCH_ASSOC);

    //myguests tablosundaki id değeri 3 den küçük olan kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE id<3",PDO::FETCH_ASSOC);

    //myguests tablosundaki id değeri 2 ye eşit veya daha büyük olan kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE id!>=2",PDO::FETCH_ASSOC);
     
    //myguests tablosundaki isim değişkeni "im" ifadesine eşit olan kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE FIND_IN_SET('%im%',firstname)",PDO::FETCH_ASSOC);

    //myguests tablosundaki isim değişkeni "im" ifadesine eşit OLMAYAN kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE NOT FIND_IN_SET('%im%',firstname)",PDO::FETCH_ASSOC);

    //myguests tablosundaki isim değişkeni içerisinde "im" ifadesi geçen kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE firstname LIKE '%im%'",PDO::FETCH_ASSOC);

    //myguests tablosundaki isim değişkeni içerisinde "im" ifadesi GEÇMEYEN kişilerin verilerini göster
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests WHERE firstname NOT LIKE '%im%'",PDO::FETCH_ASSOC);
    */
    if($sorgu){
        foreach($sorgu as $satirlar){
            echo $satirlar["id"]. "<br>";
            echo $satirlar["firstname"]. "<br>";
            echo $satirlar["lastname"]. "<br>";
            echo $satirlar["email"]. "<br>";
            echo $satirlar["reg_date"]. "<br>";
        }
    }else{
        echo "sorgu hatası!!";
    }
    $veritabaniBaglantisi = null;
    ?>
</body>
</html>