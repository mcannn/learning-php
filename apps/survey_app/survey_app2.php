<?php
//oyver.PHP
try{
    $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
}catch(PDOException $hata){
    echo "bağlantıda hata oluştu!<br/>";
    echo "hata açıklaması: ". $hata -> getMessage();
    die();
}
function Filtre($deger){
    $bir = trim($deger);
    $iki = strip_tags($bir);
    $uc = htmlspecialchars($iki,ENT_QUOTES);
    return $uc;
}
$ipAdresi = $_SERVER["REMOTE_ADDR"];
$zamanDamgasi = time();
$oyKullanmaSiniri = 5;
$zamaniGeriAl = $zamanDamgasi-$oyKullanmaSiniri;
$deger = Filtre($_POST["cevap"]);
if($deger){
    $kontrolSorgusu = $veritabaniBaglantisi->prepare("SELECT * FROM oykullananlar WHERE ip_adresi=? AND tarih>=?");
    $kontrolSorgusu->execute([$ipAdresi,$zamaniGeriAl]);
    $kontrolSayisi = $kontrolSorgusu->rowCount();
    if($kontrolSayisi>0){
        echo "Yeni oy kullanmak için 10 saniye bekleyiniz!!";
        echo "<a href='survey_app1.php'><input type='submit' value='Ana Sayfaya Dön'></a><br>";
    }else{
        if($deger==1){
            $guncelle = $veritabaniBaglantisi->prepare("UPDATE anket SET oysayisibir=oysayisibir+1, toplamoysayisi=toplamoysayisi+1");
            $guncelle->execute();
        }elseif($deger==2){
            $guncelle = $veritabaniBaglantisi->prepare("UPDATE anket SET oysayisiiki=oysayisiiki+1, toplamoysayisi=toplamoysayisi+1");
            $guncelle->execute();
        }elseif($deger==3){
            $guncelle = $veritabaniBaglantisi->prepare("UPDATE anket SET oysayisiuc=oysayisiuc+1, toplamoysayisi=toplamoysayisi+1");
            $guncelle->execute();
        }else{
            echo "cevap kaydı bulunamadı!<br>";
            echo "<a href='survey_app1.php'><input type='submit' value='Ana Sayfaya Dön'></a><br>";
        }
        $ekle = $veritabaniBaglantisi->prepare("INSERT INTO oykullananlar (ip_adresi,tarih) values (?,?)");
        $ekle->execute([$ipAdresi,$zamanDamgasi]);
        $eklekontrol = $ekle->rowCount();
        if($eklekontrol>0){
            echo "Verilen oy sisteme kaydedildi!<br><br>";
            echo "<a href='survey_app1.php'><input type='submit' value='Ana Sayfaya Dön'></a><br>";
        }else{
            echo "işlem sırasında hata oluştu!";
            echo "<a href='survey_app1.php'><input type='submit' value='Ana Sayfaya Dön'></a><br>";
        }
    }
}else{
    echo "lütfen bir değer seçiniz!";
}
?>