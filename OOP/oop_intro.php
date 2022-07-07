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
//meyveler adında class oluşturduk
class Meyveler{
    //isim ve renk değişkenleri tanımladık
    public $isim;
    public $renk;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}
//nesneleri ekledik
$muz = new Meyveler();
$kiraz = new Meyveler();
$armut = new Meyveler();
$muz->set_name('MUZ');
$kiraz->set_name('KİRAZ');
$armut->set_name('ARMUT');
//nesneleri geri çağırıp ekrana yazdırdık
echo $muz->get_name()."<br>";
echo $kiraz->get_name()."<br>";
echo $armut->get_name()."<br>";

?>

</body>
</html>