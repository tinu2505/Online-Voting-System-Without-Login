<?php
    session_start();

    

    $mysqli = require __DIR__ . "/database.php";

    $vp = $_POST["vp"];
    $gs = $_POST["gs"];
    $js = $_POST["js"];
    $jjs = $_POST["jjs"];

    $sql_vp = "UPDATE poll_answers SET votes = votes + 1 WHERE candidate = '$vp'";
    $sql_gs = "UPDATE poll_answers SET votes = votes + 1 WHERE candidate = '$gs'";
    $sql_js = "UPDATE poll_answers SET votes = votes + 1 WHERE candidate = '$js'";
    $sql_jjs = "UPDATE poll_answers SET votes = votes + 1 WHERE candidate = '$jjs'";
/*
    $sql = "INSERT INTO votes (vp, gs, js, jjs) VALUES (?,?,?,?)";

    $stmt = $mysqli->stmt_init();

    if ( ! $stmt->prepare($sql))
    {
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("ssss", $_POST["vp"], $_POST["gs"], $_POST["js"], $_POST["jjs"]);

    if ($stmt->execute())
    {
        header("Location: after_vote.php");
        exit;
    }
    else
    {
        die($mysqli->error . " " . $mysqli->errno);
    }
*/

mysqli_query($mysqli, $sql_vp);
mysqli_query($mysqli, $sql_gs);
mysqli_query($mysqli, $sql_js);
mysqli_query($mysqli, $sql_jjs);
header("Location: after_vote.php");
exit;
?>