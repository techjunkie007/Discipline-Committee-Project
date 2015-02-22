<?php
    session_start();
    if ( empty( $_SESSION['login'] )) {
                    header("location:index.php");
                    } 
?>

<?php
    include 'includes/connection.php';
    $name= $_POST['student_name'];
    $student_number =$_POST['student_number'];
    $branch = $_POST['branch'];
    $year= $_POST['year'];
    
    echo $name;
    echo $student_number;
    echo $branch;
    echo $year;
        
   $query= "INSERT INTO data (st_no,name,branch,year,late_count,counter)
            VALUES  ('{$student_number}','{$name}','{$branch}','{$year}','1','1')";
    if($query_select= mysqli_query($con,$query))
    {
        echo "successful";
        
        $_SESSION['st_no']= "Details registered for   ".$name." &nbsp. No of late entries 1";
        header("location:main.php");
    }
    else
    {
        echo "query execution unsuccessful";
    }


?>