<?php
    include 'includes/connection.php';
    $st_no= $_GET['del_no'];
    echo $st_no;
    $query= 'DELETE FROM datewise
            WHERE st_no='.$st_no;
    if(mysqli_query($con,$query))
    {
        echo "sucessful";
        header("location:process_report.php");
    }
    
?>