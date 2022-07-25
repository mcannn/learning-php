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
    class Bicim{
        public $yazi;
        public $stil;
        public function Metin($metinDegeri){
            $this->yazi = $metinDegeri;
            return $this;
        }
        public function Renk($RenkDegeri){
            $this->stil = "color:".$RenkDegeri.";";
            return $this;
        }
        public function Boyut($BoyutDegeri){
            $this->stil .= "font-size:".$BoyutDegeri.";";
            return $this;
        }
        public function Olustur(){
            return "<div style='".$this->stil."'>".$this->yazi."</div>";
        }
    }
    $sonuc =new Bicim;
    for($i=0;$i<44;$i++){
        $boyut=$i;
        $boyut.="px";
        echo $sonuc->Metin("Mehmet")->Renk("blue")->Boyut($boyut)->Olustur()."<br>";
        $i=$i+3;
    }
    ?>
</body>
</html>