

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\candidate_form.css" type="text/css">
    <title>CANDIDATE PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <script language="javascript">
        
        
        function isValidMobileNumber(mobileNumber) {
        const regex = /^(\+)?[0-9]{10}$/; // matches 10 digit numbers
        return regex.test(mobileNumber);
        }

        function validateForm()
        {
            var userName = document.getElementById("user_name").value;
            var fatherName = document.getElementById("f_name").value;
            var mobile = document.getElementById("mobile").value;
            var acadYear = document.getElementById("year").value;
            var dob = document.getElementById("dob").value;
            var rollNo = document.getElementById("rollno").value;

            if (userName == "") {
            alert("Please enter your name");
            return false;
            }
            if (fatherName == "") {
            alert("Please enter your father's name");
            return false;
            }
            if (mobile == "") {
            alert("Please enter your mobile number");
            return false;
            }
            const mobileNumber = document.getElementById("mobile").value;
            if (!isValidMobileNumber(mobileNumber)) {
            alert("Invalid mobile number. Please enter a valid 10-digit mobile number.");
            return false;
            }

            if (acadYear == "") {
            alert("Please select your academic year");
            return false;
            }
            if (dob == "") {
            alert("Please enter your date of birth");
            return false;
            }
            if (rollNo == "") {
            alert("Please enter your roll number");
            return false;
            }

            // If all fields are filled, submit the form
            document.getElementById("sign_up").submit();
        }  

    </script>    

</head>

<body>
    <?php include 'include/header.php'; ?>

    <div>
        <div></div>
        <div style="width:1550px ; " class="row2">
        <p style=" padding-left: 30px;"> 
            Candidate Form 
        </p>
        </div>
        <div></div>
    </div>

    <div class="card">
    <form id="sign_up" method="post" action="candidate_form_code.php" style="align-content: center;">
            <label style="padding:35px; text-align: center;font-size: 20PX;">Name :</label>
            <input style="font-size: 20PX; margin-left: 163px;" id="user_name" type="text" name="user_name" required>
            <br>
            <label style="padding:35px; text-align: center;font-size: 20PX;">Father's Name :</label>
            <input style="font-size: 20PX; margin-left: 89.5px;" id="f_name" type="text" name="f_name" required>
            <br>
            <label style="padding:35px; text-align: center;font-size: 20PX;">Mobile No. :</label>
            <input style="font-size: 20PX; margin-left: 117.5px;" id="mobile" type="text" name="mobile" required>
            <br>
            <label style="padding:35px; text-align: center;font-size: 20PX;">Academic Year(in words) :</label>
            <select style="font-size: 20PX; margin-left: 0px;" itemid="year" name="acad_year" id="year" required>
                <option value="">-- Choose Year --</option>
                <option value="first">FIRST</option>1
                <option value="second">SECOND</option>
                <option value="third">THIRD</option>
                <option value="fourth">FOURTH</option>
            </select>
            <br>
            
            <label style="padding:35px; text-align: center;font-size: 20PX;">Date of Birth :</label>
            <input style="font-size: 20PX; margin-left: 103.5px;" id="dob" type="date" min="2000-01-01" max="2006-12-31" name="dob" required>
            <br>
            <label style="padding:35px; text-align: center;font-size: 20PX;">Roll No. :</label>
            <input style="font-size: 20PX; margin-left: 146px;" id="rollno" type="text" name="rollno" required>
            <br><!--
            <label style="padding:35px; text-align: center;font-size: 20PX;">E-mail :</label>
            <input style="font-size: 20PX; margin-left: 160px;" id="email" type="text" name="email" required>
            <br>
            <label style="padding:35px; text-align: center;font-size: 20PX;">Password :</label>
            <input style="font-size: 20PX; margin-left: 133px;" id="password" type="password" name="password" required>
            <br>
            <label style="padding:35px; text-align: center;font-size: 20PX;">Confirm Password :</label>
            <input style="font-size: 20PX; margin-left: 57px;" id="confirm_password" type="password" name="confirm_password" required>
            <br>-->
            <button type="button" class="btn btn-primary btn-block btn-flat login-btn" style="margin-left: 43%;font-size: 22PX; margin-bottom: 20px; " onclick="validateForm()">SUBMIT</button>
        

        
        </form>
    </div>










    </div>

        


    


    <?php include 'include/footer.php'; ?>
</body>





</html>