<?php
    $error = false;
    
    if ($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $mysqli = require __DIR__ . "/database.php";

        $sql = sprintf("SELECT * FROM registrations WHERE email = '%s'", $mysqli->real_escape_string($_POST["email"]));

        $result = $mysqli->query($sql);

        $user = $result->fetch_assoc();
        if ($user)
        {
            if (password_verify($_POST["password"], $user["password_hash"]))
            {
                session_start();

                session_regenerate_id();

                $_SESSION["user_id"] = $user["id"];

                header("Location: vote.php");
                exit;
            }
            else
            {   
                $error = true;
                //header("Location: wrong_login.php");
                header("Location: login.php");
                //echo '<script>alert("Wrong Password")</script>';
            }
        }
        
        
    }




