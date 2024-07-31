<?php
    if (empty($_POST["user_name"]))
    {
        die("Name is required");
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
/*

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
*/
    $mysqli = require __DIR__ . "/database.php";

    $sql = "INSERT INTO candidates (user_name, f_name, mobile, acad_year, dob, rollno) VALUES (?,?,?,?,?,?)";



    $stmt = $mysqli->stmt_init();

    if ( ! $stmt->prepare($sql))
    {
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("ssisss", $_POST["user_name"], $_POST["f_name"], $_POST["mobile"],$_POST["acad_year"], $_POST["dob"], $_POST["rollno"]);
    
    
    
    if ($stmt->execute())
    {
       
        /* $poll_id = $mysqli->insert_id; // Get the last insert ID */

        if ($_POST["acad_year"] == 'first') {
            $poll_id = 4; // Send poll_id 1 for first acad_year
        } elseif ($_POST["acad_year"] == 'second') {
            $poll_id = 3; // Send poll_id 2 for second acad_year 
        } elseif ($_POST["acad_year"] == 'third') {
            $poll_id = 2; // Send poll_id 3 for third acad_year
        } elseif ($_POST["acad_year"] == 'fourth') {
            $poll_id = 1; // Send poll_id 4 for fourth acad_years
        }

        $stmt1 = $mysqli->prepare('INSERT INTO poll_answers (poll_id, candidate) VALUES (?, ?)');
        $stmt1->bind_param('is', $poll_id, $_POST["user_name"]);
        $stmt1->execute();  

        header("Location: candidates.php");
        exit;
    }



