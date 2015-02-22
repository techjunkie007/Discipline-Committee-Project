<?php
    session_start();
    require 'includes/connection.php';
    if ( empty( $_SESSION['login'] )) {
    header("location:index.php");
    }  

    $dates=$_POST['dates'];
    $_SESSION['dates']=$dates;
    header("location:datewise_entries.php");
   
?>