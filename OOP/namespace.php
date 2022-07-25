<?php
    require_once("namespace_example.php")
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
    /*
    namespace : Sınıflar için özel isim alanları (küme) tanımlamak için kullanılır.
    spl_autoload_register() : Döküman içerisinde belirtilecek olan sınıfın 
    bulunmaması durumunda belirtilecek olan parametreye göre bir sınıf dökümanını
    otomatik olarak belgeye dahil etmek veya yüklemek için kullanılır. 
    */
    $bir = new ornek1\Deneme;
    echo $bir->harf."<br>";
    ?>
</body>
</html>