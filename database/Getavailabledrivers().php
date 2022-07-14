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
    /*PDO::getAvailableDrivers(); 
    php yazılımı içerisinde sisteme tanımlı olan 
    ve kullanılabilir PDO sürücüleri
    listesini bulur ve bulduğu değerlerden 
    yeni bir dizi oluşturarak oluşturduğu değeri 
    geriye döndürür.
    */
    $degerler= PDO::getAvailableDrivers();
    echo "<pre>";
    print_r($degerler);
    echo "</pre>";
    /* ekran çıktısı
    Array
    (
        [0] => mysql
        [1] => sqlite
    )
    */

    ?>
</body>
</html>