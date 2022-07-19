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
    setcookie() : Cookie (çerez) oluşturmak veya silmek için kullanılır.
    Parametreler : 1.Parametre=Çerez adı,  
                2.Parametre=Çerez değeri,
                3.Parametre= Çerez Yaşam süresi.
    setcookie() ile çerezler bir kere oluşturulduktan sonra yaşam süresi
    hakkında bilgi verilmezse tarayıcı kapatılana kadar depolanır
    tarayıcı kapatıldıktan sonra temizlenir.
    isset() : çerezin bulunma durumunu kontrol eder.
    (isset($_COOKIE["user"]) şeklinde kullanılır.
    */
    $ttl = time()+3600/*saniye cinsinden değer girilir*/;
    //çerez oluştur
    setcookie("user[name]","Mehmet",$ttl);
    setcookie("user[age]","30",$ttl);
    setcookie("user[password]","123456",$ttl);
    setcookie("shoppingCart[price]","250₺",$ttl);
    setcookie("shoppingCart[method]","credit cart",$ttl);
    //çerezleri ekrana yazdır
    print_r($_COOKIE["user"]);
    echo "<br>";
    print_r($_COOKIE["shoppingCart"]);
    echo "<br>";
    //çerezleri sil
    /*setcookie("username","",0);
    setcookie("password","",0);*/
    ?>   
</body>
</html>