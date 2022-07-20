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
    <form action="form_example.php" method="POST">    
    <!--html ad soyad adres girişi-->
    Ad : <input type="text" name="ad"><br><br>
    Soyad : <input type="text" name="soyad"><br><br>
    Adres : <textarea type="text" name="adres" rows="3" cols="25"></textarea><br><br>

    <!--html radiobuton sınıf seçimi-->
    Sınıf: <br>
    1.Sınıf<input type="radio" name="sınıf" value="1"><br>
    2.Sınıf<input type="radio" name="sınıf" value="2"><br>
    3.Sınıf<input type="radio" name="sınıf" value="3"><br>
    4.Sınıf<input type="radio" name="sınıf" value="4"><br><br>

    Cinsiyet:<br>
    Erkek
    <input type="radio" name="cinsiyet"
    <?php if(isset($cinsiyet) && $cinsiyet=="Erkek") echo "checked"; ?>
    value="Erkek"><br>
    Kadın
    <input type="radio" name="cinsiyet"
    <?php if(isset($cinsiyet) && $cinsiyet=="Kadın") echo "checked"; ?>
    value="Kadın"><br>
    Diğer
    <input type="radio" name="cinsiyet"
    <?php if(isset($cinsiyet) && $cinsiyet=="Diğer") echo "checked"; ?>
    value="Diğer"><br><br>
    <input type="submit" value= "GÖNDER">
    </form>
    <?php
    }else{
        //gelen verileri kaydet
        $GelenAd = $_POST["ad"];
        $GelenSoyad = $_POST["soyad"];
        $GelenAdres = $_POST["adres"];
        $GelenSınıf = $_POST["sınıf"];
        $GelenCinsiyet = $_POST["cinsiyet"];
        //verileri görüntüle
        echo "---ALINAN VERİLER---<br>";
        echo "Ad : " .$GelenAd. "<br>";
        echo "Soyad : " .$GelenSoyad. "<br>";
        echo "Adres : " .$GelenAdres. "<br>";
        echo "Sınıf : " .$GelenSınıf. "<br>";
        echo "Cinsiyet : " .$GelenCinsiyet. "<br>";
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