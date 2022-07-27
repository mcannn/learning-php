<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
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
    echo "<form action='database_login1.php' method='post'>
    <h1>GİRİŞ YAP</h1>
    Kullanıcı Adı Giriniz: <input type='text' name='username'><br><br>
    Şifre Giriniz: <input type='password' name='passwrd'><br><br>
    <input type='submit' value='GİRİŞ YAP'>";
    }else{
        $GelenUsername = $_POST["username"];
        $GelenPassword= $_POST["passwrd"];
        if(!$GelenUsername || !$GelenPassword){
            echo "<h3>Formda Boş Kısım Bırakmayınız!!</h3>";
            echo "<a href='database_login1.php'><input type='submit' value='Giriş Ekranına Dön'></a><br>";
        }else{
            $sorgu = $veritabaniBaglantisi->query("SELECT * FROM uye_listesi WHERE username='$GelenUsername' && passwrd='$GelenPassword'",PDO::FETCH_ASSOC);
            if($sorgu->rowCount()){
                echo "<h3>Panele Hoşgeldiniz  " . $GelenUsername."<br>". "Sisteme başarıyla giriş yaptınız</h3>";
                echo "<a href='database_login2.php'><input type='submit' value='YENİ ÜYE EKLE'></a><br><br>";
                echo "<a href='database_login1.php'><input type='submit' value='ÇIKIŞ YAP'></a><br><br>";
            }else{
                echo "<h2>Hatalı Kullanıcı Adı veya Şifre girildi!!</h2><br>";
                echo "<a href='database_login1.php'><input type='submit' value='Giriş Ekranına Dön'></a><br>";
            }
        }
    }
    $veritabaniBaglantisi = null;
    ?>
</body>
</html>