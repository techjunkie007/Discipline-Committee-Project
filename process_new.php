<?php
                    session_start();
                    include 'includes/connection.php';
                    if ( empty( $_SESSION['login'] )) {
                    header("location:index.php");
                    }               
                     $st_no= $_POST['st_no'];
                     $_SESSION['student_no']=$st_no; 
                //    echo $st_no;

?>


<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheets/style.css" type="text/css" />
    </head>
    <body>
        <div id="big_wrapper">
             <div><h1 id="head_text">AKGEC LATE ENTRY SYSTEM <span style="position:absolute;" id="logout_button"><a href="logout.php">Logout</a></span></h1></div>
            <div id="inner_box">
                <div>
                    
                    <?php
                    echo '<img src="images_st/'.$st_no.'.jpg" width="170px" height="250px" id="image" id="img_p" alt="No Image Found"  />';
                    ?>
                </div>
                
                <div id="data1">
                    
                <?php
                    
                    $query= 'SELECT * FROM data WHERE st_no="'.$st_no.'" LIMIT 1 ';
                  //  var_dump($query);

                    $query_select= mysqli_query($con,$query);
                    $num= mysqli_num_rows($query_select);
                   
                   
                        if($query_select)
                            {
                                while($query_detail= mysqli_fetch_array($query_select,MYSQLI_ASSOC))
                                    {
                                    switch($query_detail['branch'])
                                    {
                                        case 'IT': { $query_detail['branch']= 'Information Technology'; break;}
                                        case 'CS': { $query_detail['branch']= 'Computer Science & Engineering'; break;}
                                        case 'EC': { $query_detail['branch']= 'Electronics & Communication Engineering'; break;}
                                        case 'EN': { $query_detail['branch']= 'Electrical AND Electronics Engineering'; break;}
                                        case 'CE': { $query_detail['branch']= 'Civil Engineering'; break;}
                                        case 'ME': { $query_detail['branch']= 'Mechanical Engineering'; break;}
                                        case 'MCA': { $query_detail['branch']= 'Master of Computer Application'; break;}
                                        case 'EI': { $query_detail['branch']= 'Electronics & Instrumentation Engineering'; break;}
                                        
                                    }
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    echo '<p id="info">';
                                    echo '<div id="name">'.$query_detail['name'].'</div>';
                                    echo '<hr><br>';
                                    echo '<div id="student_no">'.$query_detail['st_no'].'</div>';
                                    echo '<div id="branch">';
                                    echo $query_detail['branch'];
                                    echo '</div>';
                                    echo '<form action="process_register.php" method="post" id="form2">';
                                    echo '<br><br>';
                                    echo '<input type="submit" value="Register Late Entry" id="button1" />';
                                    echo '</form>';
                                    echo '<form action="main.php" method="post" id="form1">';
                                    echo '<br><br>';
                                    echo '<input type="submit" id="button2" value="Back" />';
                                    echo '</form>'; 
                                                             
                                    }
                            }
                    if($num==0)
                        {
                        
                            
                        echo '<div id="forms">';
                        echo '<p id="record">';
                        echo "No  record found";
                        echo '</p>';
                        echo '<div id="button_box">';
                        echo '<form action="new_register.php" method="post">';
                        echo '<br><br>';
                        echo '<input type="submit" value="Register New Entry" id="button1" />';
                        echo '</form>';   
                        echo '</div>';
                        echo '<form action="main.php" method="post" id="form1">';
                        echo '<br><br>';
                        echo '<input type="submit" id="button21" value="Back" />';
                        echo '</form>'; 
                        }
                    
                ?>    
                
                                    
                                              
                    </div>
                                  
                </div>
                
                
            </div>
            
            
            
            <div id="footer">
                <img src="images/si_logo.png" width="60px" height="60px" id="image_logo" style="margin-left: 20px;" />
               <p id="footer_text" style="font-family:calibri; font-weight:600;">Powered by - Software Incubator</p>
                
            </div>
        </div>
        
    </body>



</html>