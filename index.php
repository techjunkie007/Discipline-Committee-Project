<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css_main_page/admin.css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        
        <link rel="stylesheet" href="stylesheets/style.css" type="text/css" />
        <title>Home</title>
        
        
    </head>
    <body>
        <div id="big_wrapper">
            <div id="header">
                <h1 id="head_text"><pre>AKGEC LATE ENTRY SYSTEM</pre></h1>
            
            </div>
            
            
            <div class="container">
                    <p>Administrator Login</p>
	           <form action="process_login.php" method="post" name="myform" onsubmit="return validateForm()">
	               <div class="fields"><i class="fa fa-user"></i><input type="text" id="username" name="username" placeholder="Username"></div>
	               <div class="fields"><i class="fa fa-lock"></i><input type="password" name="pword" id="password" placeholder="Password"></div>
	               <input type="submit" class="register_entry">
	           </form>
            </div>
        <div id="msg_login"><?php 
            session_start();
            if(@$_SESSION['login'] == 100)
            echo "Enter correct username and password"; 
            
            $_SESSION['login']="";
            ?></div>
        </div>
            <div id="footer">
                <br><br>
                 <img src="images/si_logo.png" width="60px" height="60px" id="image_logo" style="margin-left: 20px;" />
                <p id="footer_text" style="font-family:calibri; font-weight:600;">Powered by - Software Incubator</p>
                </div>
        
       
    </body>

</html>