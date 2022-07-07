<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap Makinesi</title>
</head>
<body>
<form action="calculate.php" method="post">
<h2>Hesap Makinesi</h2>
1.Sayıyı Giriniz: <input type="text" name="sayi1"><br><br>
2.Sayıyı Giriniz: <input type="text" name="sayi2"><br><br>
İşlem seçiniz: <br><br>
<input type="radio" name="islem" value="topla" style="height:15px; width:15px; vertical-align: middle;"> TOPLAMA İŞLEMİ (1.Sayı + 2.Sayı)<br>
<input type="radio" name="islem" value="cikar" style="height:15px; width:15px; vertical-align: middle;"> ÇIKARMA İŞLEMİ (1.Sayı - 2.Sayı)<br>
<input type="radio" name="islem" value="carp" style="height:15px; width:15px; vertical-align: middle;"> ÇARPMA İŞLEMİ (1.Sayı x 2.Sayı)<br>
<input type="radio" name="islem" value="bol" style="height:15px; width:15px; vertical-align: middle;"> BÖLME İŞLEMİ (1.Sayı ÷ 2.Sayı)<br><br>
<button type="submit">HESAPLA</button>
</form>
<?php
	if(isset($_POST["submit"])){ //isset() ile hesapla butonuna basılıp basılmadığını kontrol ediyoruz.
		$ad=$_POST["txtAd"];
		echo("Merhaba ".$ad);
	}
	?>
</body>
</html>