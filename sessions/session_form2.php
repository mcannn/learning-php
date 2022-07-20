<?php
session_start();
?>
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
if(empty($_POST["isim"])){
    echo "Hata! İsim girilmedi!!<br><br>";
    echo "<a href='session_form1.php'><input type='submit' value='GERİYE DÖN'</a>";
}else if(empty($_POST["sifre"])){
    echo "Hata! Şifre girilmedi!!<br><br>";
    echo "<a href='session_form1.php'><input type='submit' value='GERİYE DÖN'></a>";
}else{
    $Gelenİsim = $_POST["isim"];
    $GelenSifre = $_POST["sifre"];
    $_SESSION["isim"] = $Gelenİsim;
    $_SESSION["numara"] = $GelenSifre;
    echo "Merhaba " . $Gelenİsim . ". Sisteme giriş yaptınız.<br><br>";
    echo "<a href='session_form3.php'><input type='submit' value='ÇIKIŞ YAP'></a><br><br>";
}
    ?>
</body>
</html>
