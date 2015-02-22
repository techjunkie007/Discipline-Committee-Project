<?php

    session_start();
    require('includes/connection.php');

    $st_no=$_SESSION['student_no'];
   
date_default_timezone_set('Asia/Calcutta');

$dates=$_SESSION['dates'];
$times=date('H:i:s');

$confirm= 'SELECT * FROM datewise WHERE st_no="'.$st_no.'" AND dates="'.$dates.'" LIMIT 100';
        var_dump($confirm);
    $confirm_execute= mysqli_query($con,$confirm);
var_dump($confirm_execute);
        $num=mysqli_num_rows($confirm_execute);
        var_dump($num);
        if($num ==0)
        {





   $query= 'UPDATE data
            SET counter= counter+1, late_count=late_count+1
            WHERE st_no="'.$st_no.'" LIMIT 1';
    if($query_select= mysqli_query($con,$query))
    {
        echo "sucessful";
       $search= 'SELECT * FROM data WHERE st_no="'.$st_no.'" LIMIT 1 ';
        // var_dump($st_no);

       
       $insert_datewise="INSERT INTO datewise (`st_no`,`dates`,`times`,`count`) VALUES ('$st_no','$dates','$times',1)";
       $insert_datewise_result=mysqli_query($con,$insert_datewise);

       

        $search_result= mysqli_query($con,$search);
        while($search_fetch= mysqli_fetch_array($search_result,MYSQLI_ASSOC))
              {
                  echo $search_fetch['late_count'];
                $_SESSION['st_no']= $search_fetch['late_count']." late entries registered for ".$search_fetch['name'];
                  
              }
        var_dump($search_result);
    }
        }
            else
            {
                echo "query already registered";
                $_SESSION['st_no']="Already registered for this user today";
                }
                
        
        
       header("location: datewise_entries.php");
    
?>