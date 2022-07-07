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
trait mesaj1{
    public function m1(){
        echo "1.trait 1.mesaj!!<br>";
    }
    public function m2(){
        echo "1.trait 2. mesaj!!<br>";
    }
}
trait mesaj2{
    public function m1(){
        echo "2.trait 1.mesaj!!<br>";
    }
    public function m2(){
        echo "2.trait 2. mesaj!!<br>";
    }
}
class msj1{
    use mesaj1;
}
class msj2{
    use mesaj2;
}
$goruntule = new msj1();
$goruntule->m1();
$goruntule->m2();
$goruntule = new msj2();
$goruntule->m1();
$goruntule->m2();
?>
</body>
</html>