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
    /*
    INNER JOIN   : Database içerisinde bulunan herhangi iki veya daha fazla tablonun 
    eşleşen değerlerinin birbiri ile ilişkilendirilmesi için kullanılır.
    LEFT JOIN    : Database içerisinde bulunan herhangi iki veya daha fazla tablonun 
    soldaki tabloya göre eşleşen değerlerinin birbiri ile ilişkilendirilmesi için kullanılır.
    RIGHT JOIN   : Database içerisinde bulunan herhangi iki veya daha fazla tablonun 
    sağdaki tabloya göre eşleşen değerlerinin birbiri ile ilişkilendirilmesi için kullanılır.
    NATURAL JOIN : Database içerisinde bulunan herhangi iki veya daha fazla tablonun 
    soldaki tabloya göre eşleşen değerlerinin birbiri ile OTOMATİK ilişkilendirilmesi için kullanılır.
    USING        : Database içerisinde bulunan herhangi iki veya daha fazla tablonun 
    birbirleriyle ilişkilendirilmesi sırasında ortak sütun koşulunu tanımlamak / belirtmek için kullanılır.
    ON           : Database içerisinde bulunan herhangi iki veya daha fazla tablonun 
    birbirleriyle ilişkilendirilmesi sırasında sütun koşulunu tanımlamak / belirtmek için kullanılır.
    
    //uzun hali
    $sorgu1 = $veritabaniBaglantisi->query("SELECT * FROM musteri",PDO::FETCH_ASSOC);
    if($sorgu1){
        $kayitSayisi1 = $sorgu1->rowCount();
        echo "1.bulunan kayıt sayısı : ".$kayitSayisi1 ."<br>";
        if($kayitSayisi1>0){
            foreach($sorgu1 as $satirlarA){
            $sorgu2 = $veritabaniBaglantisi->query("SELECT * FROM musteri WHERE guest_id= ". $satirlarA["guest_id"] ."",PDO::FETCH_ASSOC);
            if($sorgu2){
                $kayitSayisi2 = $sorgu2->rowCount();
                echo "2.bulunan kayıt sayısı : ".$kayitSayisi2 ."<br>"; 
                if($kayitSayisi2>0){
                    foreach($sorgu2 as $satirlarB){
                        echo "id: ". $satirlarB["id"] . "<br>";
                    }
                }       
            }
            else{
                echo "Sorgu hatası 2";
            }
            }   
        }
    }else{
        echo "sorgu hatası 1";
    }
    */
    //kısa hali
    $sorgu = $veritabaniBaglantisi->query("SELECT musteri.id AS kullanici_id FROM musteri INNER JOIN myguests ON musteri.guest_id = myguests.guest_id",PDO::FETCH_ASSOC);
    if($sorgu){
        $kayitSayisi = $sorgu->rowCount();
        echo "Bulunan kayıt sayısı : ".$kayitSayisi ."<br>"; 
        if($kayitSayisi>0){
            foreach($sorgu as $satirlar){
                echo "id: ". $satirlar["kullanici_id"] . "<br>";
            }
        }       
    }
    else{
        echo "Sorgu hatası 2";
    }
    
    $veritabaniBaglantisi = null;
    ?>
</body>
</html>