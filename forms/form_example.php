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
    if(!$_POST){
    ?>
    <form action="form_example.php" method="POST" enctype="multipart/form-data">    
    <!--html ad soyad adres girişi-->
    Ad : <input type="text" name="ad"><br><br>
    Soyad : <input type="text" name="soyad"><br><br>
    Adres : <textarea type="text" name="adres" rows="3" cols="25"></textarea><br><br>
    <!--html radiobuton sınıf seçimi-->
    Sınıf: <select name="sınıf">
    <option value=""></option>
    <option value="1.Sınıf">1.Sınıf</option>
    <option value="2.Sınıf">2.Sınıf</option>    
    <option value="3.Sınıf">3.Sınıf</option>    
    <option value="4.Sınıf">4.Sınıf</option>  
    </select><br>
    Hobiler: <br>
    <input type="checkbox" name="Hobiler[]" value="Sinema">Sinemaya Gitmek<br>
    <input type="checkbox" name="Hobiler[]" value="Alıveriş">Alışverişe Çıkmak<br>
    <input type="checkbox" name="Hobiler[]" value="Tiyatro">Tiyatroya Gitmek<br>
    <input type="checkbox" name="Hobiler[]" value="Spor">Spor Yapmak<br>
    <input type="checkbox" name="Hobiler[]" value="Video">Video Oyunları Oynamak<br>
    <input type="checkbox" name="Hobiler[]" checked = "checked" value="">Hiçbiri<br><br>
    Cinsiyet:<br>
    Erkek
    <input type="radio" name="cinsiyet"
    <?php if(isset($cinsiyet) && $cinsiyet=="Erkek") echo "checked"; ?>
    value="Erkek"><br>
    Kadın
    <input type="radio" name="cinsiyet"
    <?php if(isset($cinsiyet) && $cinsiyet=="Kadın") echo "checked"; ?>
    value="Kadın"><br>
    Belirtmek İstemiyorum
    <input type="radio" name="cinsiyet"
    <?php if(isset($cinsiyet) && $cinsiyet=="Belirtmek İstemiyorum") echo "checked"; ?>
    value="Belirtmek İstemiyorum"><br><br>
    Yüklenecek Dosya : <input type ="file" name="dosya"><br>
    <input type="submit" value= "GÖNDER">
    </form>
    <?php
    }
    else{
        if($_POST["ad"]!="" and $_POST["soyad"]!="" and $_POST["adres"]!="" and $_POST["sınıf"]!="" and $_POST["Hobiler"]!="" and $_POST["cinsiyet"]!=""){
            //gelen verileri kaydet
            $GelenAd = $_POST["ad"];
            $GelenSoyad = $_POST["soyad"];
            $GelenAdres = $_POST["adres"];
            $GelenSınıf = $_POST["sınıf"];
            $GelenHobi = $_POST["Hobiler"];
            $GelenCinsiyet = $_POST["cinsiyet"];
            //dosya bilgilerini kaydet
            $GelenDosya = $_FILES["dosya"];
            $DosyaAdi = $_FILES["dosya"]["name"];
            $DosyaTuru = $_FILES["dosya"]["type"];
            $DosyaTempAdi = $_FILES["dosya"]["tmp_name"];
            $DosyaHataDurumu = $_FILES["dosya"]["error"];
            $DosyaBoyutu = $_FILES["dosya"]["size"];
            $DosyaDizini = "Resimler/";
            $DosyaYoluVeAdi = $DosyaDizini.$DosyaAdi;
            //verileri görüntüle
            echo "<b>---ALINAN VERİLER---</b><br>";
            echo "<b>Ad : </b>" .$GelenAd. "<br>";
            echo "<b>Soyad : </b>" .$GelenSoyad. "<br>";
            echo "<b>Adres : </b>" .$GelenAdres. "<br>";
            echo "<b>Sınıf : </b>" .$GelenSınıf. "<br>";
            echo "<b>Hobiler : </b>";
            foreach($GelenHobi as $Bilgiler){
                echo $Bilgiler .", ";
            }
            echo "<br><b>Cinsiyet : </b>" .$GelenCinsiyet. "<br><br>";
            if(move_uploaded_file($DosyaTempAdi,$DosyaYoluVeAdi))
            {
                echo "<b>---Eklenen Dosya Bilgileri---</b><br>";
                echo "<b>Dosya Adı : </b>".$DosyaAdi."<br>";
                echo "<b>Dosya Türü : </b>".$DosyaTuru."<br>";
                echo "<b>Dosya Hata Durumu : </b>".$DosyaHataDurumu."<br>";
                echo "<b>Dosya Boyutu : </b>".$DosyaBoyutu." byte<br>";
                echo "<img src='{$DosyaYoluVeAdi}'>";
            }else{
                echo "Dosya Ekleme Sırasında Hata Oluştu!!";
            }
        }else{
            echo "<h3>Formda Boş Kısım Bırakmayınız!!</h3>";
        }
        /*
        //Dizi şeklinde görüntüle
        $GelenVeriler = $_POST;
        echo "<pre>";
        print_r($GelenVeriler);
        echo "</pre>";
        */
    }
    ?>
</body>
</html>