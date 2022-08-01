<?php
    try{
        $veritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root", "");
    }catch(PDOException $hataMesaji){
        echo "bağlantı hatası!! <br>";
        echo "hata açıklaması: ".$hataMesaji->getMessage();
        die();
    } 
    if(!$_POST["secim"]){
        echo "HATA!! Herhangi bir seçenek seçilmedi!!";
    }else{
        $gelenSecimDegeri = $_POST["secim"];
        $id = implode(", ",$gelenSecimDegeri);
        $sil = $veritabaniBaglantisi->prepare("DELETE FROM myguests WHERE id IN ($id)");
        $sil->execute();
        header("Location:database_multi_delete1.php");
        exit();
    }
?>