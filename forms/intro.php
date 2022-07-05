<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="uyelik.php" method="POST">    
<!--html ad soyad adres girişi-->
Ad:<input type="text" name="ad"><br><br>
Soyad:<input type="text" name="soyad"><br><br>
Adres:<textarea type="text" name="adres" rows="2" cols="25"></textarea><br><br>

<!--html radiobuton sınıf seçimi-->
Sınıf: <br>
1.Sınıf<input type="radio" name="sınıf" value="1"><br>
2.Sınıf<input type="radio" name="sınıf" value="2"><br>
3.Sınıf<input type="radio" name="sınıf" value="3"><br>
4.Sınıf<input type="radio" name="sınıf" value="4"><br><br>

Cinsiyet:<br>

<input type="submit"><br>

</form>
<?php



?>
    
</body>
</html>