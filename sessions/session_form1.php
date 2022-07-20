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
<form action="session_form2.php" method="post">
<h2>Session Anasayfa</h2>
Kullanıcı Adı : <input type="text" name="isim"><br><br>
Şifre : <input type="text" name="sifre"><br><br>
<input type="submit" value="GİRİŞ YAP">
<?php
?>
</body>
</html>