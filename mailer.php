<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require __DIR__ . "/vendor/autoload.php";

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = True;
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->Username = "t.t.tushar2505@gmail.com";
$mail->Password = "ennnjnxrptskduyq";
$mail->isHTML(true);
return $mail;