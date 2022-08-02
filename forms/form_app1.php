<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilgi Formu</title>
</head>
<body>
    <form action="form_app2.php" method="POST">
        <table width="500" border="0" align="center">
        <tr>
            <td width="150" height="25">İsim Soyisim</td>
            <td width="25" height="25">:</td>
            <td width="325" height="25"><input type="text" name="adisoyadi"></td>
        </tr>
        <tr>
            <td width="150" height="25">Telefon Numarası</td>
            <td width="25" height="25">:</td>
            <td width="325" height="25"><input type="text" name="telefon"></td>
        </tr>
        <tr>
            <td width="150" height="25">E-Mail Adresi</td>
            <td width="25" height="25">:</td>
            <td width="325" height="25"><input type="text" name="email"></td>
        </tr>
        <tr>
            <td width="150" height="25">Mesaj</td>
            <td width="25" height="25">:</td>
            <td width="325" height="25"><textarea type="text" name="mesaj"></textarea></td>
        </tr>
        <tr>
            <td width="150" height="25"></td>
            <td width="25" height="25"></td>
            <td width="325" height="25"><input type="submit" value="GÖNDER"></td>
        </tr>

        </table>
    <?php

    ?>
</body>
</html>