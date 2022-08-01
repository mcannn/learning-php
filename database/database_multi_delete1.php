<?php
    try{
        $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root", "");
    }catch(PDOException $hataMesaji){
        echo "bağlantı hatası!! <br>";
        echo "hata açıklaması: ".$hataMesaji->getMessage();
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="database_multi_delete2.php" method="post">
    <table width='400' align='center' border='0'>
    <?php
    $sorgu = $veritabaniBaglantisi->query("SELECT * FROM myguests");
    $sorgu-> execute();
    $kayitsayisi = $sorgu->rowCount();
    $kayitlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);
    foreach($kayitlar as $satirlar){
        ?>
        <tr>
            <td width='25' height='30'><input type = "checkbox" name='secim[]' value="<?php echo $satirlar["id"];?>"></td>
            <td> <?php echo $satirlar["firstname"]." ".$satirlar["lastname"]; ?> </td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="2"><input type="submit" value="Seçili Olanları Sil"></td>
        </tr>
        </table>
    </form>
</body>
</html>