<?php
//sonuclar.PHP
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
$anketbirOySayisi = $kayit["oysayisibir"];
$anketikiOySayisi = $kayit["oysayisiiki"];
$anketucOySayisi = $kayit["oysayisiuc"];
$ankettoplamOySayisi = $kayit["toplamoysayisi"];
$birinciYuzdehesapla = number_format(($anketbirOySayisi/$ankettoplamOySayisi)*100,2,",","");
$ikinciYuzdehesapla = number_format(($anketikiOySayisi/$ankettoplamOySayisi)*100,2,",","");
$ucuncuYuzdehesapla = number_format(($anketucOySayisi/$ankettoplamOySayisi)*100,2,",","");
if($kayitsayisi>0){
?>
    <table width="300" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr height="30">
            <td colspan="2"><?php echo  "<b>".$kayit["soru"]."</b>"; ?></td>
        </tr>
        <tr height="30">
            <td width="50">%<?php echo $birinciYuzdehesapla;?></td>
            <td width="275"><?php echo  "<b>".$kayit["cevapbir"]."</b>"; ?></td>
        </tr>
        <tr height="30">
            <td width="50">%<?php echo $ikinciYuzdehesapla;?></td>
            <td width="275"><?php echo  "<b>".$kayit["cevapiki"]."</b>"; ?></td>
        </tr>
        <tr height="30">
            <td width="50">%<?php echo $ucuncuYuzdehesapla;?></td>
            <td width="275"><?php echo  "<b>".$kayit["cevapuc"]."</b>"; ?></td>
        </tr>
        </form>
        <tr height="40">
            <td colspan="2" align="center"><a href="survey_app1.php">Ana sayfaya Dön</td>
        </tr>
    </table>
    <?php
}else{
    header("Location:survey_app1.php");
    exit();
}
$veritabaniBaglantisi = NULL;
?>