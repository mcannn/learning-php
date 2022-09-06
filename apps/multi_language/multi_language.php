<?php
session_start();
if (empty($_SESSION["SiteDili"])) {
    include("dilTR.php");
} else {
    if ($_SESSION["SiteDili"] == "Turkish") {
        include("dilTR.php");
    } else if ($_SESSION["SiteDili"] == "English") {
        include("dilEN.php");
    } else if ($_SESSION["SiteDili"] == "French") {
        include("dilFR.php");
    } else if ($_SESSION["SiteDili"] == "Italian") {
        include("dilIT.php");
    }
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
    <table width="1000" align="center" border="0">
        <tr height="50">
            <td width="150"><?php echo ANASAYFA; ?></td>
            <td width="100"><?php echo KAYITOL; ?></td>
            <td width="100"><?php echo GİRİŞYAP; ?></td>
            <td width="150"><?php echo TARİFEKLE; ?></td>
            <td width="200"><?php echo MAKALEEKLE; ?></td>
            <td width="300">
                <a href="secim.php?DilSecimi=Turkish" style="color:blue; text-decoration:none;">
                    <img width="50px" src="turkey.png">&nbsp;<b></b></a>
                <a href="secim.php?DilSecimi=English" style="color:blue; text-decoration:none;">
                    <img width="50px" src="usa.png">&nbsp;<b></b></a>
                <a href="secim.php?DilSecimi=French" style="color:blue; text-decoration:none;">
                    <img width="50px" src="france.png">&nbsp;<b></b></a>
                <a href="secim.php?DilSecimi=Italian" style="color:blue; text-decoration:none;">
                    <img width="50px" src="italy.png">&nbsp;<b></b></a>
            </td>
        </tr>
    </table>
</body>

</html>