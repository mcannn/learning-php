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
        try{
            $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
        }catch(PDOException $hata){
            echo "bağlantıda hata oluştu!<br/>";
            echo "hata açıklaması: ". $hata -> getMessage();
            die();
        }
        $reklamSorgusu = $veritabaniBaglantisi->prepare("SELECT * FROM banner");
        $reklamSorgusu->execute();
        $reklamSayisi = $reklamSorgusu->rowCount();
        $reklamkaydi = $reklamSorgusu->fetch(PDO::FETCH_ASSOC);
    ?>
<table width="1000" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr height="200">
        <td align="center"><img src="../../Resimler/banner1.jpg" border="0"></td>
    </tr>
</table> 
    <?php
    //gosterim olduğunda sayıyı 1 arttır
        $reklamguncelle = $veritabaniBaglantisi->prepare("UPDATE banner SET gosterimsayisi=gosterimsayisi+1 WHERE id=?");
        $reklamguncelle->execute([$reklamkaydi["id"]]);
        $veritabaniBaglantisi = NULL;
    ?>
</body>
</html>