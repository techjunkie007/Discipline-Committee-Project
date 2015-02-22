<?php
    session_start();
    if ( empty( $_SESSION['login'] )) {
                    header("location:index.php");
                    } 
echo $_SESSION['st_no'];
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
            function validateForm()
            {
                var x = document.forms["myform"]["student_name"].value;
                var y = document.forms["myform"]["student_number"].value;
                var z = document.forms["myform"]["branch"].value;
                var w = document.forms["myform"]["year"].value;
                if (x==null || x=="")
                {
                alert("First student name must be filled out");
                return false;
                }
                if (y==null || y=="")
                {
                alert("First student number must be filled out");
                return false;
                }
                if (z==null || z=="")
                {
                alert("Student branch must be selected first");
                return false;
                }
                if (w==null || w=="")
                {
                alert("First select the student year ");
                return false;
                }
            }
        </script>    
    
    
<link rel="stylesheet" type="text/javascript" href="stylesheets/reg-style.css">
</head>
<body>
<div class="container">
<p>Registration</p>
<hr/>
<form action="process_new_register.php" method="post" name="myform" onsubmit="return validateForm()">
<label for="name">Name</label><br>
<input type="text" name="student_name" id="name"><br><br>
<label for="student-number">Student Number</label><br>
<input type="text" name="student_number" id="student-number" value="<?php echo $_SESSION['student_no']; ?>  "><br><br>
<label for="branch">Branch</label><br>
<select name="branch">
<option value=''></option>
<option value="CSE">Computer Science & Engineering</option>
<option value="IT">Information Technology</option>
<option value="ECE">Electronics & Communication Engineering</option>
<option value="EN">Electrical & Electronics Engineering</option>
<option value="CE">Civil Engineering</option>
<option value="ME">Mechanical Engineering</option>
<option value="EI">Electronics and Instrumental Engineering</option>
<option value="MCA">Master of Computer Application</option>
<option value="MTech">Master of Technical Education</option>
<option value="MBA">Master of Business Administration</option>
</select><br><br>
<label for="year">Year</label><br>
<select name="year">
	<option value=''></option>
	<option value='1'>First Year</option>
	<option value='2'>Second Year</option>
	<option value='3'>Third Year</option>
	<option value='4'>Fourth Year</option>
</select><br><br>
<div class="submit"><input type="submit"></div>
    <br>

    
    <a href="main.php">Back</a>
    &nbsp;
    <a href="logout.php">Logout</a>
    
</form>
    
</div>
</body>
</html>