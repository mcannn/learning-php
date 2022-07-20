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
    /*
    session_start() : session(oturum) başlatmak veya session(oturum) ları takip etmek için kullanılır.
    session_destroy() : Daha önceden oluşturulmuş session(oturum) ları silmek için kullanılır.
    */
    $_SESSION["user"] = array("name"=>"Mehmet","age"=>"30","password"=>"123456");
    $_SESSION["shoppingCart"] = array("price"=>"250₺","method"=>"credit cart");
    //session verilerini göster
    print_r($_SESSION["user"]);
    echo "<br>";
    print_r($_SESSION["shoppingCart"]);
    echo "<br>";
    /*
    //istenilen session verisini silmek için unset() kullanılır.
    unset($_SESSION["user"]["name"]);
    //tüm session ları silmek için session_destroy() kullanılır.
    */
    ?> 
</body>
</html>