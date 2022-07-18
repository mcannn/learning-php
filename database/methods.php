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
    prepare() : Herhangi bir tabloya yapılacak işleme göre query hazırlamak için kullanılır.
    
    bindParam() :Herhangi bir tabloya yapılacak işleme prepare() metodu kullanarak hazırlanmış
    olan query yi derlemek için kullanılır.
    
    bindValue() : Herhangi bir tabloya yapılacak işleme prepare() metodu kullanarak hazırlanmış
    olan query yi derlemek için kullanılır.
        PDO::PARAM_BOOL : Bool
        PDO::PARAM_NULL : Null
        PDO::PARAM_INT : Integer
        PDO::PARAM_STR : String
    
    execute() : Herhangi bir tabloya yapılacak işleme prepare() metodu kullanarak hazırlanmış
    olan query yi çalıştırmak için kullanılır.
    
    fetch() : Herhangi bir tablonun tekil veri okuma işlemi için 
    prepare() metodu kullanılarak hazırlanmış, execute() metodu kullanılarak çalıştırılmış
    ve sonuçları alınmış olan querylerin verilerini okumak için kullanılır.
    Ayrıca istenirse verilere erişim şekli de belrtilebilir.
    
    fetchAll() : Herhangi bir tablonun tekil veri okuma işlemi için 
    prepare() metodu kullanılarak hazırlanmış, execute() metodu kullanılarak çalıştırılmış
    ve sonuçları alınmış olan querylerin verilerini okumak için kullanılır.
    Ayrıca istenirse verilere erişim şekli de belrtilebilir.
    
    FETCH_ASSOC : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide
    ilgili tablonun sütun isimleri dizinin anahtarı olarak tanımlanır ve ilgili verilere
    sütun isimleri ile erişilir.

    FETCH_NUM : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide 
    dizinin anahtarları PHP tarafından otomatik olarak tanımlanır. (0,1,2,3....)
    ve ilgili verilere sütun sıra numaraları ile erişilir.

    FETCH_BOTH : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide
    dizinin anahtarları hem ilgili tablonun sütun isimleriyle hem de
    sütun sıra numaraları ile erişilir.

    FETCH_OBJ :Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede
    nesnenin özellikleri olarak tanımlanır ve ilgili verilere sütun isimleriyle erişilir.
    
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
    //FETCH ASSOC ÖRNEĞİ
    $sorgu = $veritabaniBaglantisi->prepare("SELECT * FROM musteri",array(PDO::FETCH_ASSOC));
    $sorgu -> execute();
    if($sorgu){
        $kayitSayisi = $sorgu -> rowCount();
        if($kayitSayisi>0){
            foreach($sorgu as $satirlar){
                echo "id = ".$satirlar[0]."<br>";
                echo "isim = ".$satirlar[1]."<br>";
                echo "soyisim = ".$satirlar[2]."<br>";
                echo "numara = ".$satirlar[3]."<br>";
                echo "guest_id = ".$satirlar[4]."<br><br>";
            }
        }
        else{
            echo "kayıt yok";
        }
    }
    else{
        echo "sorgu hatası";
    }
    //FETCH_NUM ÖRNEĞİ
    $sorgu = $veritabaniBaglantisi->prepare("SELECT * FROM musteri");
    $sorgu -> execute();
    if($sorgu){
        $kayitSayisi = $sorgu -> rowCount();
        if($kayitSayisi>0){
           $kayit = $sorgu->fetch(PDO::FETCH_NUM);
                echo "id = ".$kayit[0]."<br>".
                "isim = ".$kayit[1]."<br>".
                "soyisim = ".$kayit[2]."<br>".
                "numara = ".$kayit[3]."<br>".
                "guest_id = ".$kayit[4]."<br><br>";
        }
        else{
            echo "kayıt yok";
        }
    }else{
        echo "sorgu hatası";
    }
    //FETCH_OBJ ÖRNEĞİ
    $sorgu = $veritabaniBaglantisi->prepare("SELECT * FROM musteri");
    $sorgu -> execute();
    if($sorgu){
        $kayitSayisi = $sorgu -> rowCount();
        if($kayitSayisi>0){
           $kayit = $sorgu->fetch(PDO::FETCH_OBJ);
                echo "id = ".$kayit->id."<br>".
                "isim = ".$kayit->isim."<br>".
                "soyisim = ".$kayit->soyisim."<br>".
                "numara = ".$kayit->numara."<br>".
                "guest_id = ".$kayit->guest_id."<br><br>";
        }
        else{
            echo "kayıt yok";
        }
    }else{
        echo "sorgu hatası";
    }
    
    //fetchAll() kullanarak FETCH_OBJ Örneği
    $sorgu = $veritabaniBaglantisi->prepare("SELECT * FROM musteri");
    $sorgu -> execute();
    if($sorgu){
        $kayitSayisi = $sorgu -> rowCount();
        if($kayitSayisi>0){
           $kayit = $sorgu->fetchAll(PDO::FETCH_OBJ);
           foreach($kayit as $deger)
                echo "id = ".$deger->id."<br>".
                "isim = ".$deger->isim."<br>".
                "soyisim = ".$deger->soyisim."<br>".
                "numara = ".$deger->numara."<br>".
                "guest_id = ".$deger->guest_id."<br><br>";
        }
        else{
            echo "kayıt yok";
        }
    }else{
        echo "sorgu hatası";
    }
    */
    //bindParam() Örneği
    $ilkDeger=2;
    $sonDeger=5;
    $sorgu = $veritabaniBaglantisi->prepare("SELECT * FROM musteri WHERE id>:ilkDeger AND id<:sonDeger");
    $sorgu ->bindParam("ilkDeger",$ilkDeger,PDO::PARAM_INT);
    $sorgu ->bindParam("sonDeger",$sonDeger,PDO::PARAM_INT);
    $sorgu -> execute();
    if($sorgu){
        $kayitSayisi = $sorgu -> rowCount();
        if($kayitSayisi>0){
           $kayit = $sorgu->fetchAll(PDO::FETCH_OBJ);
           foreach($kayit as $deger)
                echo "id = ".$deger->id."<br>".
                "isim = ".$deger->isim."<br>".
                "soyisim = ".$deger->soyisim."<br>".
                "numara = ".$deger->numara."<br>".
                "guest_id = ".$deger->guest_id."<br><br>";
        }
        else{
            echo "kayıt yok";
        }
    }else{
        echo "sorgu hatası";
    }
    $veritabaniBaglantisi = null;
    ?>
</body>
</html>