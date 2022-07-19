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
    */
    $ttl = time()+3600/*saniye cinsinden değer girilir*/;
    //çerez oluştur
    setcookie("username","Mehmet",$ttl);
    setcookie("password","123456",$ttl);
    //eğer çerez varsa ekrana yazdır
    if(isset($_COOKIE["username"])){
        echo "kullanici adi : ".$_COOKIE["username"]."<br>";
    }
    if(isset($_COOKIE["password"])){
        echo "şifre : ".$_COOKIE["password"]."<br>";
    }
    //çerezleri sil
    setcookie("username","",0);
    setcookie("password","",0);
    ?>   
</body>
</html>