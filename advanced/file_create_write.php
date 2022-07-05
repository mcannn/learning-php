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
/*create.txt adında dosya oluştur 
eğer dosya varsa içindekileri temizle
ve yeni verileri yaz*/
$myfile = fopen("create.txt", "w") 
or die("dosya açma hatası!!");

//$txt verisini dosyaya yaz
$txt = "satır1\n";
fwrite($myfile, $txt);
$txt = "satır2\n";
fwrite($myfile, $txt);
fclose($myfile);

?>
</body>
</html>