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
    //index.PHP
    try{
        $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
    }catch(PDOException $hata){
        echo "bağlantıda hata oluştu!<br/>";
        echo "hata açıklaması: ". $hata -> getMessage();
        die();
    }
    function Filtre($deger){
        $bir = trim($deger);
        $iki = strip_tags($bir);
        $uc = htmlspecialchars($iki,ENT_QUOTES);
        return $uc;
    }
    $anketsorgusu = $veritabaniBaglantisi->prepare("SELECT * FROM anket LIMIT 1");
    $anketsorgusu->execute();
    $kayitsayisi = $anketsorgusu->rowCount();
    $kayit = $anketsorgusu->fetch(PDO::FETCH_ASSOC);
    if($kayitsayisi>0){
        ?>
        <form action="survey_app2.php" method="POST">
            <table width="300" align="center" border="0" cellpadding="0" cellspacing="0">
                <tr height="30">
                    <td colspan="2"><?php echo  "<b>".$kayit["soru"]."</b>"; ?></td>
                </tr>
                <tr height="30">
                    <td width="25"><input type="radio" name="cevap" value="1"> </td>
                    <td width="275"><?php echo  "<b>".$kayit["cevapbir"]."</b>"; ?></td>
                </tr>
                <tr height="30">
                    <td width="25"><input type="radio" name="cevap" value="2"> </td>
                    <td width="275"><?php echo  "<b>".$kayit["cevapiki"]."</b>"; ?></td>
                </tr>
                <tr height="30">
                    <td width="25"><input type="radio" name="cevap" value="3"> </td>
                    <td width="275"><?php echo  "<b>".$kayit["cevapuc"]."</b>"; ?></td>
                </tr>
                <td colspan="2" align="center"><input type="submit" value="OY GÖNDER"><br><br></td>
                </form>
                <tr height="40">
                    <td colspan="2" align="center"><a href="survey_app3.php">SONUÇLARI GÖSTER</td>
                </tr>
            </table>
        <?php
        }else{
            echo "Anket bulunmuyor";
        }
?>
</body>
</html>
