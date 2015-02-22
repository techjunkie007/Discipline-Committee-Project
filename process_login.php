<?php
    session_start();
    $username= $_POST['username'];
    $pword= $_POST['pword'];
    
        
    if($pword== 'akgec')
    {
        if($username== 'akgec')
        {
            echo "successful";
            $_SESSION['login']=$username;
        echo $_SESSION['login'];
         header("location:main.php");
        }
    }
    else
    {   $_SESSION['login']="100";
        
       header("location:index.php");
        
    }


?>