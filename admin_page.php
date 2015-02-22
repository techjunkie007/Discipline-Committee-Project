<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css_main_page/admin.css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        
        <link rel="stylesheet" href="stylesheets/style.css" type="text/css" />
        <title>Home</title>
        <script type="text/javascript">
            function validateForm()
            {
                var x = document.forms["myform"]["st_no"].value;
                if (x==null || x=="")
                {
                alert("First student no must be filled out");
                return false;
                }
            }
        </script>
        
    </head>
    <body>
        <div id="big_wrapper">
            <div id="header">
                <h1 id="head_text">AKGEC LATE ENTRY SYSTEM</h1>
            
            </div>
            
            
            <div class="container">
                    <p>Administrator Login</p>
	           <form action="process_login.php" method="post">
	               <div class="fields"><i class="fa fa-user"></i><input type="text" name="username" placeholder="Username"></div>
	               <div class="fields"><i class="fa fa-lock"></i><input type="password" name="pword" placeholder="Password"></div>
	               <input type="submit">
	           </form>
            </div>
        
        </div>
            <div id="footer">
                <br><br>
                 <img src="images/si_logo.png" width="60px" height="60px" id="image_logo" />
                <p id="footer_text" style="font-family:calibri; font-weight:600;">Powered by Software Incubator</p>
                </div>
        
       
    </body>

</html>