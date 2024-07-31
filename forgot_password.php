<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\login.css" type="text/css">
    <title>FORGOT PASSWORD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

</head>

<body>
    <?php include 'include/header.php'; ?>
    <div style="text-align:center; padding-top: 30px ">
        <h1>Forgot Password</h1>
        <form action="forgot_password_mailer.php" method="post" >
            <br>
            <input style="font-size: 20px;" id="email" type="text" name="email" placeholder="E-mail" required>
            <br>
            <br>
            <button style="font-size: 20px;" type="submit" class="btn btn-primary btn-block btn-flat login-btn" name="send">Send</button>
            <br><br>

        </form>

    </div>
    <?php include 'include/footer.php'; ?>
</body>
</html>