<?php
$email = $_POST['email'];
$password = $_POST['password'];

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
if (isset($_POST["submit_button"])) {

  $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';         //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 't.t.tushar2505@gmail.com';   //SMTP write your email
    $mail->Password   = 'ennnjnxrptskduyq';      //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
;            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('t.t.tushar2505@gmail.com'); // Sender Email 
    $mail->addAddress($email);     //Add a recipient email  
    $mail->addReplyTo('t.t.tushar2505@gmail.com'); // reply to sender email

    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = "Login ID & Password";   // email subject headings
    $mail->Body    = <<<EOT
            Email: {$email}
            Password: {$password}
            Click to<a href='127.0.0.1/MAJOR%20PROJECT/login.php'>LOGIN</a>
EOT; //email message

    // Success sent message alert
    $mail->send();
    
}



    if (empty($_POST["user_name"]))
    {
        die("Name is required");
    }
    
    if (empty($_POST["f_name"]))
    {
        die("Father's name is required");
    }
    
    if (empty($_POST["mobile"]))
    {
        die("Mobile number is required");
    }

    if (strlen($_POST["mobile"]) != 10)
    {
        die("Mobile number must be 10 digits");
    }

    if (  preg_match("/[a-z]/i", $_POST["mobile"]))
    {
        die("Mobile number must not contain any letter");
    }

    if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
    {
        die("Valid email is required");
    }

    if (strlen($_POST["password"]) < 8)
    {
        die("Password must be at least 8 characteres");
    }
    if ( ! preg_match("/[a-z]/i", $_POST["password"]))
    {
        die("Password must contain at least one letter");
    }    
    
    if ( ! preg_match("/[0-9]/", $_POST["password"]))
    {
        die("Password must contain at least one number");
    }   
    if ($_POST["password"] !== $_POST["confirm_password"])
    {
        die("Password does not match");
    }

    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $mysqli = require __DIR__ . "/database.php";

    $sql = "INSERT INTO registrations (user_name, f_name, mobile, acad_year, dob, rollno, email, password_hash) VALUES (?,?,?,?,?,?,?,?)";

    $stmt = $mysqli->stmt_init();

    if ( ! $stmt->prepare($sql))
    {
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("ssisssss", $_POST["user_name"], $_POST["f_name"], $_POST["mobile"], $_POST["acad_year"], $_POST["dob"], $_POST["rollno"], $_POST["email"], $password_hash);

    if ($stmt->execute())
    {
        header("Location: login.php");
        exit;
    }
    else
    {
        die($mysqli->error . " " . $mysqli->errno);
    }
