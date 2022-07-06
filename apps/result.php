<?php
//sonuç ekranı
//tl değeri girilmediğinde ve para birimi seçilmediğinde hata gönder
if(empty($_POST["lira"]) & empty($_POST["para"])){
    echo "Hata! TL değeri girilmedi ve para birimi seçilmedi!!";
}
//sadece tl değeri girilmediyse hata gönder
else if (empty($_POST["lira"])) {
    echo "Hata! TL değeri girilmedi!!";
}
//sadece para birimi seçilmediyse hata gönder
else if (empty($_POST["para"])) {
    echo "Hata! Para birimi seçilmedi!!";
}
//değerler doğru girildiyse sonucu ekrana yazdır
else {
    $girilenTlDegeri = $_POST["lira"];
    $sonucpara  = $_POST["para"];
echo "--SONUC EKRANI-- <br><br>";
//dolar değeri için 17.13 ile çarp
if($sonucpara =="dolar"){
    $sondeger=$girilenTlDegeri/17.13;
    echo $girilenTlDegeri." TL = ".number_format($sondeger,2)."$";
}else if($sonucpara =="euro"){//euro değeri için 17.58 ile çarp
    $sondeger=$girilenTlDegeri/17.58;
    echo $girilenTlDegeri." TL = ".number_format($sondeger,2)."€";
}else if($sonucpara =="pound"){//pound değeri için 20.46 ile çarp
    $sondeger=$girilenTlDegeri/20.46;
    echo $girilenTlDegeri." TL = ".number_format($sondeger,2)."£";
}
}
?>