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

    $sql_vp = "SELECT user_name FROM candidates WHERE acad_year = 'fourth' ";
    $result_vp = mysqli_query($conn, $sql_vp);

    $sql_gs = "SELECT user_name FROM candidates WHERE acad_year = 'third'";
    $result_gs = mysqli_query($conn, $sql_gs);

    $sql_js = "SELECT user_name FROM candidates WHERE acad_year = 'second'";
    $result_js = mysqli_query($conn, $sql_js);

    $sql_jjs = "SELECT user_name FROM candidates WHERE acad_year = 'first'";
    $result_jjs = mysqli_query($conn, $sql_jjs);

    //find no of records returned
    $num_vp = mysqli_num_rows($result_vp);
    
    $num_gs = mysqli_num_rows($result_gs);
    
    $num_js = mysqli_num_rows($result_js);
    
    $num_jjs = mysqli_num_rows($result_jjs);
    

?>

   
<!DOCTYPE html>
<HTml>
    <HEAD>
        <TITle>VOTING PAGE</TITle>
        <link rel="stylesheet" href="css\bootstrap.min.css">
        <LINK rel="stylesheet" href="css\vote.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <style>
            input, radio{
                height: 20px;
                width: 20px;
                vertical-align: middle;
                
            }
        </style>
        <script type="text/javascript"> 

            function preventBack() 
            { 

                window.history.forward();  

            } 

            setTimeout("preventBack()", 0); 

            window.onunload = function () { null }; 

        </script> 

    </HEAD>
    <BOdy>
        <?php include 'include/header.php'; ?>
    <div>
        <div></div>
        <div style="width:1550px ; " class="row2">
        <p style="text-align: center"> 
            Voting Panel
        </p>
        </div>
        <div></div>
    </div>

        <?php if (isset($user)): ?>
            <h4 style="text-align: center;">Hello <?= htmlspecialchars($user["user_name"]) ?></h4>
        <?php endif; ?>

        <DIV class="card">
            
            <form style=" font-size:28PX;" method="post" action="vote_code.php" >
                <p>CHOOSE FOR VICE PRESIDENT</p>
                <?php
                error_reporting(E_ERROR | E_PARSE);
                while($row_vp = mysqli_fetch_assoc($result_vp))
                {
                    echo "<input type='radio' name='vp' value='". $row_vp["user_name"]. "' required>". $row_vp["user_name"]. "<br/>";
                }
                ?> 
                <br>
        
                <p>CHOOSE FOR GENERAL SECRETARY</p>
                
                <?php
                error_reporting(E_ERROR | E_PARSE);
                while($row_gs = mysqli_fetch_assoc($result_gs))
                {
                    echo "<input type='radio' name='gs' value='". $row_gs["user_name"]. "' required>". $row_gs["user_name"]. "<br/>";
                }
                ?> 
                <br>
                
                <p>CHOOSE FOR JOINT SECRETARY</p>
                
                <?php
                error_reporting(E_ERROR | E_PARSE);
                while($row_js = mysqli_fetch_assoc($result_js))
                {
                    echo "<input type='radio' name='js' value='". $row_js["user_name"]. "' required>". $row_js["user_name"]. "<br/>";
                }
                ?>
                <br>

                <p>CHOOSE FOR JUNIOR JOINT SECRETARY</p>
                
                <?php
                error_reporting(E_ERROR | E_PARSE);
                while($row_jjs = mysqli_fetch_assoc($result_jjs))
                {
                    echo "<input type='radio' name='jjs' value='". $row_jjs["user_name"]. "' required>". $row_jjs["user_name"]. "<br/>";
                }
                ?>  
                <br>

                <button style="margin-left:39%" type="submit" name="submit">SUBMIT</button>
                
            </form>
        </DIV>
        <br>
        <br>
        








        <?php include 'include/footer.php'; ?>
    </BOdy>


</HTml>