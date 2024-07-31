<?php   
    
    $token = $_GET["token"];

    $token_hash = hash("sha256", $token);

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM registrations WHERE reset_token_hash = ?";

    $stmt = $mysqli->prepare($sql);

    $stmt->bind_param("s", $token_hash);

    $stmt->execute();

    $result = $stmt->get_result();

    $user = $result->fetch_assoc();

    if ($user === null)
    {
        die("token not found");
    }

    if (strtotime($user["reset_token_expires_at"]) <= time())
    {
        die ("token has expired");
    }

    
?>

<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="css\bootstrap.min.css">
        <link rel="stylesheet" href="css\login.css" type="text/css">
        <title>RESET PASSWORD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
        <script type="text/javascript" src="js\reset-password_validation.js" defer></script>

    </head>

<body>
    <?php include 'include/header.php'; ?>

        <div style="text-align: center;">
            <h2>Reset Password</h2><br />
            <form id="reset-password" action="reset-password_code.php" method="post">
                <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
                <label for="newPassword">New password:</label><br />
                <input type="password" id="password" name="password" required><br />
                <label for="confirmPassword">Confirm new password:</label><br />
                <input type="password" id="confirm_password" name="confirm_password" required>
                <input type="submit" class="btn btn-primary btn-block btn-flat login-btn" name="submit_button" value="SUBMIT" id="submit_button" onclick="submitForm(event)">
        
            </form>
        </div>

    <?php include 'include/footer.php'; ?>
</body>

</html>