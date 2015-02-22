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
             <div><a id="backLink" href="main.php">Back</a><h1 id="head_text">AKGEC LATE ENTRY SYSTEM <span style="position:absolute;" id="logout_button"><a href="logout.php">Logout</a></span></h1></div>
                                   
            <h2 style="text-align:center; margin-top:25px; font:20px  calibri;"><a style="border:none;" href="generate_all_word.php">Generate document for students with 3 late entries</a></h2>
            <br>
            <h2 style="text-align:center; font: 20px black verdana;">OR</h2>
            <br>
            <div id="range_form">
                <p style="text-align:center;margin-right:470px; ">Generate document for students with late entries in range between</p> <br><br>
            <form method="post" action="process_report_new.php">
               Start:&nbsp;<input type="text" name="start"><br><br>
                Upto:&nbsp;<input type="text" name="end"><br><br>
                Branch:&nbsp;<select name="branch" style="margin:0;
    padding:10px;
    padding-left:35px;
    background-color:#222;
    border:none;
    width:260px;
    font-family: verdana;
    color:#cccccc;">
                    <option value="all">All</option>
                    <option value="CS">CS</option>
                    <option value="IT">IT</option>
                    <option value="EC">EC</option>
                    <option value="EN">EN</option>
                    <option value="EI">EI</option>
                    <option value="CE">CE</option>
                    <option value="ME">ME</option>
                    <option value="MCA">MCA</option>
                    <option value="MBA">MBA</option>
                </select>
                <br><br>
                 &nbsp;<input type="submit" value="Generate Report" id="der">
                
                
            </form>
            
            
            </div>  
          
        
            <div id="footer">
                <br><br>
                 <img src="images/si_logo.png" width="60px" height="60px" id="image_logo" style="margin-left:20px;" />
                <p id="footer_text" style="font-family:calibri; font-weight:600;">Powered by Software Incubator</p>
                </div>
        
       
    </body>

</html>