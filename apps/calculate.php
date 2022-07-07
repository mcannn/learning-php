<?php
//sonuç ekranı
//iki sayi da girilmediğinde hata gönder
if(empty($_POST["sayi1"]) & empty($_POST["sayi2"])){
    echo "Hata! 1.Sayı ve 2.Sayı girilmedi!!";
}
//1.sayi girilmediğinde hata gönder
else if (empty($_POST["sayi1"])) {
    echo "Hata! 1.Sayı girilmedi!!";
}
//2.sayi girilmediğinde hata gönder
else if (empty($_POST["sayi2"])) {
    echo "Hata! 2.Sayı girilmedi!!";
}
//işlem seçilmediğinde hata gönder
else if (empty($_POST["islem"])) {
    echo "Hata! İşlem seçilmedi!!";
}
//değerler doğru girildiyse sonucu ekrana yazdır
else {
    $sayi1 = $_POST["sayi1"];
    $sayi2 = $_POST["sayi2"];
    $islem = $_POST["islem"];
echo "--SONUC EKRANI-- <br><br>";
if($islem =="topla"){
    $sonuc=$sayi1+$sayi2;
    echo $sayi1." + ".$sayi2." = ".$sonuc;
}else if($islem =="cikar"){
    $sonuc=$sayi1-$sayi2;
    echo $sayi1." - ".$sayi2." = ".$sonuc;
}else if($islem =="carp"){
    $sonuc=$sayi1*$sayi2;
    echo $sayi1." x ".$sayi2." = ".$sonuc;
}else if($islem =="bol"){
    $sonuc=$sayi1/$sayi2;
    echo $sayi1." ÷ ".$sayi2." = ".number_format($sonuc,3);
}
}
?>    