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
    //sabit tanımla
    $birinci = "1";
    $ikinci = "2";
    $ucuncu = "3";
    $dorduncu = "4";
    const ORNEK1 = "AB";
    const ORNEK2 = "CD";
    //sabitleri topla ve yazdır
    define("ORNEK3",$birinci.$ikinci.$ucuncu.$dorduncu);
    echo ORNEK3;
    //sabitleri harf harf yazdır
    define("ORNEK4",ORNEK1.ORNEK2);
    echo ORNEK4[0].ORNEK4[1].ORNEK4[2].ORNEK4[3];
    ?>
</body>
</html>