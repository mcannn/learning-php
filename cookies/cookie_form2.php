<?php
if(empty($_POST["isim"])){
    echo "Hata! İsim girilmedi!!";
}else if(empty($_POST["numara"])){
    echo "Hata! Numara girilmedi!!";
}else{
    $Gelenİsim = $_POST["isim"];
    $GelenNo = $_POST["numara"];
    $ttl = time()+(60*60*24);
    setcookie("isim",$Gelenİsim,$ttl);
    setcookie("numara",$GelenNo,$ttl);
    echo "Gönderme işlemi başarılı.<br>";
}
?>
<br>
<a href="cookie_form.php"><input type="submit" value="Önceki Sayfaya Dön"></a><br><br>
<a href="cookie_form3.php"><input type="submit" value="Eklenen çerez verisini göster"></a><br>