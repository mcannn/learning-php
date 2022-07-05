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

$x=50;
$y=40;
//global değişken tanımlama
function toplam(){
    $GLOBALS['z'] = $GLOBALS['x'] +$GLOBALS['y'];
}

toplam();
echo $z;

?>
</body>
</html>