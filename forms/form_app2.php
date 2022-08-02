<?php
header("Content-Type:text/html; charset=UTF-8");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$gelenisimsoyisim = $_POST["adisoyadi"];
$gelentelefon = $_POST["telefon"];
$gelenemail = $_POST["email"];
$gelenmesaj = $_POST["mesaj"];
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail = new PHPMailer();
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'deneme987mail@outlook.com';                     //SMTP username
    $mail->Password   = 'gmail987deneme7891';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPOptions = array(
        'ssl' =>[
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        ],
    );
    $mail->setFrom($gelenemail,'Gonderici');
    //Recipients
    $mail->addAddress('deneme987mail@gmail.com', '');
    $mail->CharSet= 'UTF-8';
    $mail->addReplyTo('deneme987mail@gmail.com','BİLGİ');
    //Attachments
    //$mail->addAttachment('steam.png');
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'TITLE';
    $mail->msgHTML('$gelenmesaj');
    $mail->send();
    echo 'Mail gönderildi.';
} catch (Exception $e) {
    echo "Mail Gönderilemedi. Mailer Error: {$mail->ErrorInfo}";
}
?>