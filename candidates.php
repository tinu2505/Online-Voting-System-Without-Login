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
    $sql_vp = "SELECT user_name, acad_year FROM candidates WHERE acad_year = 'fourth'";
    $result_vp = mysqli_query($conn, $sql_vp);

    $sql_gs = "SELECT user_name, acad_year FROM candidates WHERE acad_year = 'third'";
    $result_gs = mysqli_query($conn, $sql_gs);

    $sql_js = "SELECT user_name, acad_year FROM candidates WHERE acad_year = 'second'";
    $result_js = mysqli_query($conn, $sql_js);

    $sql_jjs = "SELECT user_name, acad_year FROM candidates WHERE acad_year = 'first'";
    $result_jjs = mysqli_query($conn, $sql_jjs);

    //find no of records returned

    $num_vp = mysqli_num_rows($result_vp);
    
    $num_gs = mysqli_num_rows($result_gs);
    
    $num_js = mysqli_num_rows($result_js);
    
    $num_jjs = mysqli_num_rows($result_jjs);

    
?>
<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\candidates.css" type="text/css">
    <title>CANDIDATES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

</head>

<body>
    
    <?php include 'include/header.php'; ?>
    <div style="margin: 50px">

        <h2 style = "text-align:center">List Of Candidates Appearing In Election This Year</h2>
    
    </div>
        
    <div class="row">

        <div class="col">
            <p>Candidates For Post Of Vice President</p>
            <?php
            if($num_vp > 0 )
            {

                //$row = mysqli_fetch_assoc($result);
                //echo var_dump($row);
                echo "<table>";
                echo "<tr><th>Name</th><th>Academic Year</th></tr>";
                while($row_vp = mysqli_fetch_assoc($result_vp))
                {
                    echo "<tr>";
                    echo "<td>" . $row_vp["user_name"] . "</td>";
                    echo "<td>" . $row_vp["acad_year"] . "</td>";
                    echo "</tr>";
                    
                }
                echo "</table>";
            }
            ?>
        </div>

        <div class="col">
            <p>Candidates For Post Of General Seceretary</p>
            <?php
            if($num_gs > 0 )
            {

                //$row = mysqli_fetch_assoc($result);
                //echo var_dump($row);
                echo "<table>";
                echo "<tr><th>Name</th><th>Academic Year</th></tr>";
                while($row_gs = mysqli_fetch_assoc($result_gs))
                {
                    echo "<tr>";
                    echo "<td>" . $row_gs["user_name"] . "</td>";
                    echo "<td>" . $row_gs["acad_year"] . "</td>";
                    echo "</tr>";
                    
                }
                echo "</table>";
            }
            ?>
        </div>

        <div class="col">
            <p style="padding-left:10px">Candidates For Post Of Joint Seceretary</p>
            <?php
            if($num_js > 0 )
            {

                //$row = mysqli_fetch_assoc($result);
                //echo var_dump($row);
                echo "<table>";
                echo "<tr><th>Name</th><th>Academic Year</th></tr>";
                while($row_js = mysqli_fetch_assoc($result_js))
                {
                    echo "<tr>";
                    echo "<td>" . $row_js["user_name"] . "</td>";
                    echo "<td>" . $row_js["acad_year"] . "</td>";
                    echo "</tr>";
                    
                }
                echo "</table>";
            }
            ?>
        </div>

        <div class="col">
            <p>Candidates For Post Of Junior Joint Seceretary</p>
            <?php
            if($num_jjs > 0 )
            {

                //$row = mysqli_fetch_assoc($result);
                //echo var_dump($row);
                echo "<table>";
                echo "<tr><th>Name</th><th>Academic Year</th></tr>";
                while($row_jjs = mysqli_fetch_assoc($result_jjs))
                {
                    echo "<tr>";
                    echo "<td>" . $row_jjs["user_name"] . "</td>";
                    echo "<td>" . $row_jjs["acad_year"] . "</td>";
                    echo "</tr>";
                    
                }
                echo "</table>";
            }
            ?>
        </div>

        <p style="padding-left:30px; font-size:20px">Become A Candidate For Election Your-Self | <a href="candidate_form.php">Fill The Form!</a></p>
        
    </div>

    



    <?php include 'include/footer.php'; ?>
</body>