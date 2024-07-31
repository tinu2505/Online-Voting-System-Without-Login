<?php
    $host = "localhost";
    $dbname = "election";
    $username = "root";
    $password = "";

    $conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);

    if ( ! $conn)
    {
        die("Sorry, Failed to connect: " . mysqli_connect_error());
    }
    $sql_vp = "SELECT user_name, acad_year FROM candidates WHERE post = 'vp'";
    $result_vp = mysqli_query($conn, $sql_vp);

    //find no of records returned

    $num_vp = mysqli_num_rows($result_vp);

    if($num_vp > 0 )
    {
        //$row = mysqli_fetch_assoc($result);
        //echo var_dump($row);

        while($row_vp = mysqli_fetch_assoc($result_vp))
        {
            
        }
    }
?>