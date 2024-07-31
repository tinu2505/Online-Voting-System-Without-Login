

<!DOCTYPE html>
<html>
    
<head>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    
    <link rel="stylesheet" href="css\register.css" type="text/css">
    <title>REGISTER PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!--<script defer src="js\register.js"></script>-->
    
    

<script language="javascript">

    function Demo()
    {
        var val= document.getElementById("user_name").text;

        if(val==null)
        {
        alert("Empty");
        }
        else
        {
            document.getElementById("sign_up").Submit();

        }

    }

 </script>



</head>

<body>

    
    <?php include 'include/header.php'; ?>    
    
    <div>
        <div></div>
        <div style="width:1550px ; " class="row2">
        <p style="text-align:center"> 
            Register For Student Council Election
        </p>
        </div>
        <div></div>
    </div>

   
    <div style="font-size: 20px;" class="card">
        <form  id="sign_up" method="post" action="register_code.php" style="align-content: center;">
            <label>Name :</label>
            <input style="margin-left: 157px;" type="text" id="user_name" name="user_name" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            <br>
            <label>Father's Name :</label>
            <input style="margin-left: 84px;" type="text" name="f_name" id="f_name" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            <br>
            <label>Mobile No. :</label>
            <input style=" margin-left: 112px;" type="tel" name="mobile" id="mobile" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            <br>
            <label>Academic Year(in words):</label>
            
            <input style="margin-left: 0px;" type="text" max="4" min="1" name="acad_year" id="acad_year" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            <br>
            <label>Date of Birth :</label>
            <input style="margin-left: 99px;" type="date" min="2000-01-01" max="2006-12-31" name="dob" id="dob" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            <br>
            <label>Roll No. :</label>
            <input style="margin-left: 142px;" type="text" name="rollno" id="rollno" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            <br>
            <label>E-mail :</label>
            <input style="margin-left: 156px;" type="text" name="email" id="email" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            <br>
            <label>Password :</label>
            <input style="margin-left: 129px;" type="password" name="password" id="password" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            <br>
            <label>Confirm Password :</label>
            <input style="margin-left: 53px;" type="password" name="confirm_password" id="confirm_password" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            <br>
            <input style="margin-left: 40%;" type="button" class="btn btn-primary btn-block btn-flat login-btn" onclick="Demo()" name="submit_button" value="SUBMIT" id="submit" onclick="submitForm(event)">
        

        
        </form>
    </div>
   
    
        


    
    <?php include 'include/footer.php'; ?>
</body>



</html>