<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Listesi</title>
</head>
<body>
    <?php
    try{
        $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
    }catch(PDOException $hata){
        echo "bağlantıda hata oluştu!<br/>";
        echo "hata açıklaması: ". $hata -> getMessage();
        die();
    }
    if(!$_POST){
        $uyeler = $veritabaniBaglantisi->query("SELECT * FROM uye_listesi",PDO::FETCH_ASSOC);
        if($uyeler){
            $uyesayi = 1;
            foreach($uyeler as $satirlar){
                $uye = $satirlar["username"];
                echo "<h3>- ÜYE ". $uyesayi. " BİLGİLERİ -</h3>";
                echo "<b>id: </b>". $satirlar["id"] . "<br>";
                echo "<b>username: </b>" . $satirlar["username"] . "<br>";
                echo "<b>password: </b>". $satirlar["passwrd"] . "<br><br>";
                $uyesayi=$uyesayi+1;
            }
            echo "<a href='database_login2.php'><input type='submit' value='YENİ ÜYE EKLE'></a><br><br>";
            echo "<form action='database_login3.php' method='post'>
            <b>Silmek İstediğiniz Üye Adını Giriniz: </b><br><br><input type='text' name='silusername'>
            <input type='submit' value='ÜYE SİL'>
            </form><br>";
            echo "<a href='database_login1.php'><input type='submit' value='ÇIKIŞ YAP'></a><br>";
        }else{
            echo "<h3>KAYITLI ÜYE BULUNAMADI!!<h3>";
            echo "<a href='database_login3.php'><input type='submit' value='TEKRAR DENE'></a><br><br>";
            echo "<a href='database_login2.php'><input type='submit' value='YENİ ÜYE EKLE'></a><br><br>";
        }
    }else{
        $GelenSilUsername = $_POST["silusername"];
        if(!$GelenSilUsername){
            echo "<h3>Formda Boş Kısım Bırakmayınız!!</h3>";
            echo "<a href='database_login3.php'><input type='submit' value='Önceki Ekrana Dön'></a><br>";
        }else{     
            $sil = $veritabaniBaglantisi->query("DELETE FROM uye_listesi WHERE username='$GelenSilUsername'");
            $sayi2 =$sil->rowCount();
            if($sayi2){
                echo "<b> ".$GelenSilUsername." Adlı Kişi Üye Listesinden Silindi.</b><br><br>";
                /*$uyeler = $veritabaniBaglantisi->query("SELECT * FROM uye_listesi",PDO::FETCH_ASSOC);
                if($uyeler){
                    foreach($uyeler as $satirlar){
                        $sayi = $satirlar['id']+1;
                        $idduzenle = $veritabaniBaglantisi->query("UPDATE 'uye_listesi' SET 'id'=$sayi");
                    }
                */
                echo "<a href='database_login3.php'><input type='submit' value='ÜYE LİSTESİNİ GÖRÜNTÜLE'></a><br><br>";
                echo "<a href='database_login1.php'><input type='submit' value='ÇIKIŞ YAP'></a><br>";
            }else{
                echo "<h3>Üye listesinde ".$GelenSilUsername." mevcut değil!!<br><br>Silme sırasında bir hata oluştu!!</h3>";
                echo "<a href='database_login3.php'><input type='submit' value='ÜYE LİSTESİNİ GÖRÜNTÜLE'></a><br><br>";
                echo "<a href='database_login1.php'><input type='submit' value='ÇIKIŞ YAP'></a><br>";
            }
        }      
    }
    $veritabaniBaglantisi = null;
    ?>    
</body>
</html>