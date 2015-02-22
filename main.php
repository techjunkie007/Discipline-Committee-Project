<?php
    session_start();
    require 'includes/connection.php';
    if ( empty( $_SESSION['login'] )) {
    header("location:index.php");
    }  
    


   
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheets/style.css" type="text/css" />
        <title>Home</title>
        <script type="text/javascript">
            function validateForm()
            {
                var x = document.forms["myform"]["st_no"].value;
                if (x==null || x=="")
                {
                alert("Student Number can't be empty.");
                return false;
                }
            }
        </script>
        <script type="text/javascript">
            function timedMsg()
            {
                var t=setInterval("change_time();",1000);
            }
            function change_time()
            {
                var d = new Date();
                var curr_hour = d.getHours();
                var curr_min = d.getMinutes();
                var curr_sec = d.getSeconds();
            if(curr_hour > 12)
                curr_hour = curr_hour - 12;
                if(curr_hour < 10)
                { 
                    curr_hour= '0'+curr_hour;
                }
                if(curr_min <10)
                {
                    curr_min= '0'+curr_min;
                }
                if(curr_sec < 10)
                    curr_sec= '0'+curr_sec;
                
                
            document.getElementById('clock').innerHTML =curr_hour+':'+curr_min+':'+curr_sec;
            }
            timedMsg();   
        </script>
    </head>
    <body>
        <div id="big_wrapper">
            <div id="header">
                <div>
                <h1 id="head_text">AKGEC LATE ENTRY SYSTEM 
                <span style="position:absolute;" id="logout_button">
                <a href="logout.php">Logout
                </a></span></h1>

               
            </div>
                
        </div>

         <div id="small_wrapper" style="background:#606060;height:65px;">
         <br>
            <div id="form_wrapper" style="float:left;padding:10px;color:white;">        
              <form action="sample.php" method="post">
                    Enter date for Datewise Entry
                    
                    <input type="date" name="dates" style="margin-left:10px;" required>
                    <input type="submit" name="submit" value="Submit" style="padding:3px;">
              </form>
            </div>
            <?php
                date_default_timezone_set('Asia/Calcutta');
                echo '<div style="float:left;color:white;margin-left:130px;margin-top:10px;">'.
                'Today is '.date("d F,Y").
                '</div>';
            ?>
              <a href="report.php" style="border:none;">  <div style="float:right;padding:5px;color:white;margin-right:20px;border:1px solid;">Daily Records Report</div></a>
              <a href="report_new.php" style="border:none;">  <div style="float:right;padding:5px;color:white;margin-right:20px;border:1px solid;">Overall Late Entry Report</div></a>


        </div>
           
            <div id="clock_box">
                <p id="clock"></p>
            </div>
            <div id="message_id">
            <?php
               echo '<p id="message">'.@$_SESSION["st_no"].'</p>';
                $_SESSION['st_no']='';
            ?>
           
            </div>
            <form method="post" action="process_new.php" name="myform" id="form_id"  onsubmit="return validateForm()">
                <input type="text" placeholder="Enter Student No" name="st_no" id="box1">
                <input type="submit" value="Search" id="box2">
                
            </form>
            </div>
           
            <div id="footer">
                <br><br>
                 <img src="images/si_logo.png" width="60px" height="60px" id="image_logo" style="margin-left: 20px;" />
                <p id="footer_text" style="font-family:calibri; font-weight:600;">Powered by - Software Incubator</p>
                </div>
        
       
    </body>

</html>