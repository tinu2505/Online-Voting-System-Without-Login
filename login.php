

<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\login.css" type="text/css">
    <title>LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

</head>

<body>
    <?php include 'include/header.php'; ?>
    

    <div class="login">

          

        <h2>Login To Vote</h2>
        <br>

       

        <form action="login_code.php" method="post" >
            <input style="font-size: 20px;" type="text" name="email" placeholder="E-mail" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" required>
            <br>
            <br>
            <input style="font-size: 20px;" type="password" name="password" placeholder="Password" required>
            <br>
            <p><a href="forgot_password.php">Forgot Password?</a></p>
            
            <button style="font-size: 20px;" type="submit" class="btn btn-primary btn-block btn-flat login-btn" name="login">Login</button>
            <br><br>
            Don't Have an Account!
            <a href="register.php">Register Here</a>
        


        </form>
        <?php include 'login_code.php'; ?>
        <?php if($error){

            echo "<script>alert('Wrong Password')
            window.location='login.php';</script>";

            } ?>
        

    </div>




    <?php include 'include/footer.php'; ?>
</body>



</html>