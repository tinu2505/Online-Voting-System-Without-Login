<?php
$email = $_POST['email'];
$token = bin2hex(random_bytes(16));
$token_hash = hash("sha256", $token);
$expiry = date("Y-m-d H:i:s", time() + 60 * 30);
$mysqli = require __DIR__ . "/database.php";
$sql = "UPDATE registrations SET reset_token_hash = ?, reset_token_expires_at = ? WHERE email = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sss", $token_hash, $expiry, $email);
$stmt->execute();
if ($mysqli->affected_rows)
{
    $mail = require __DIR__ . "/mailer.php";

    $mail->setFrom("t.t.tushar2505@gmail.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END

    Click <a href="127.0.0.1/MAJOR%20PROJECT/reset-password.php?token=$token">here</a>to reset your password.

    END;
    try
    {
    $mail->send();
    }
    catch (Exception $e)
    {
        echo "Message coukd not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
header("Location: msg_sent.php");

/*
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
if (isset($_POST["send"])) {

  $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';         //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 't.t.tushar2505@gmail.com';   //SMTP write your email
    $mail->Password   = 'ennnjnxrptskduyq';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('t.t.tushar2505@gmail.com'); // Sender Email 
    $mail->addAddress($_POST["email"]);     //Add a recipient email  
    $mail->addReplyTo('t.t.tushar2505@gmail.com'); // reply to sender email

    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = "Reset Password";   // email subject headings
    $mail->Body    = "Click On Link To Reset Password <a href='127.0.0.1/MAJOR%20PROJECT/reset-password.php'>Reset Here</a>"; //email message

    // Success sent message alert
    $mail->send();
    header("Location: msg_sent.php");
}
*/