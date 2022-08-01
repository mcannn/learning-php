<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
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
        echo "<form action='database_login2.php' method='post'>
        <h2>--YENİ ÜYE BİLGİLERİ--</h2>
        Kullanıcı Adı Giriniz: <input type='text' name='yeniusername'><br><br>
        Şifre Giriniz: <input type='password' name='yenipasswrd'><br><br>
        <input type='submit' value='YENİ ÜYE EKLE'>
        </form><br>
        <a href='database_login3.php'><input type='submit' value='ÜYE LİSTESİNİ GÖRÜNTÜLE'></a><br><br>
        <a href='database_login1.php'><input type='submit' value='ÇIKIŞ YAP'></a><br>";
    }else{
        $GelenYeniUsername = $_POST["yeniusername"];
        $GelenYeniPasswrd = $_POST["yenipasswrd"];
        if(!$GelenYeniUsername || !$GelenYeniPasswrd){
            echo "<h3>Formda Boş Kısım Bırakmayınız!!<h3>";
            echo "<a href='database_login2.php'><input type='submit' value='TEKRAR DENE'></a><br>";
        }else{
            $sorgu = $veritabaniBaglantisi->query("SELECT * FROM uye_listesi",PDO::FETCH_ASSOC);
            $sayi = $sorgu->rowCount();
            if(!$sorgu->rowCount()){
                $sayi = 0;
            }else{
                $sayi = $sayi + 1;
            }
            $sorgu1=$veritabaniBaglantisi->query("SELECT * FROM uye_listesi WHERE username='$GelenYeniUsername'",PDO::FETCH_ASSOC);
            $sayi1 =$sorgu1->rowCount();
            if($sayi1){
                echo "<h3>Aynı kullanıcı adında bir üye mevcut!!<br>Lütfen farklı bir kullanıcı adı giriniz!!</h3>";
                echo "<a href='database_login3.php'><input type='submit' value='ÜYE LİSTESİNİ GÖRÜNTÜLE'></a><br><br>";
                echo "<a href='database_login2.php'><input type='submit' value='TEKRAR DENE'></a><br><br>";
                echo "<a href='database_login1.php'><input type='submit' value='ÇIKIŞ YAP'></a><br>";
            }else{
                $ekle = $veritabaniBaglantisi->prepare("INSERT INTO uye_listesi(id, username, passwrd) 
                VALUES('$sayi', '$GelenYeniUsername', '$GelenYeniPasswrd')");
                $ekle->execute();
                if($ekle){
                    echo "<h3>Yeni üye başarıyla eklendi.</h3>";
                    echo "<a href='database_login3.php'><input type='submit' value='ÜYE LİSTESİNİ GÖRÜNTÜLE'></a><br><br>";
                    echo "<a href='database_login2.php'><input type='submit' value='YENİ ÜYE EKLE'></a><br><br>";
                    echo "<a href='database_login1.php'><input type='submit' value='ÇIKIŞ YAP'></a><br>";
                }else{
                    echo "<h3>Üye Ekleme Sırasında Bir Hata Oluştu</h3>";
                    echo "<a href='database_login3.php'><input type='submit' value='ÜYE LİSTESİNİ GÖRÜNTÜLE'></a><br><br>";
                    echo "<a href='database_login1.php'><input type='submit' value='ÇIKIŞ YAP'></a><br>";
                }   
            }
        }
    }
    $veritabaniBaglantisi=null;
    ?>
</body>
</html>