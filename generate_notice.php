<?php
    session_start();
    if ( empty( $_SESSION['login'] )) {
                    header("location:index.php");
                    } 
?>

<?php
    $input= $_POST['number'];
    echo $input;
    


?>

<?php
include 'includes/connection.php';
// header("Content-type: application/vnd.ms-word");
// header("Content-Disposition: attachment;Filename=document_name.doc");
echo "<html>";
echo "<head>";
// echo '<link type="text/css" href="notice_gen.css" rel="stylesheet" />';
?>
<style>
    #header
    {
        text-align:center;
        font:24px;
        font-weight:600;
    
    }
    #address
    {
        text-align:center;
        font:20px;  
    }
    #date
    {
        text-align:right;
        font-weight:600;
        font:16px;
        text-decoration:underline;
        margin-right:50px;
        
    }
    #notice
    {
        text-align:center;
        font:20px;
        font-weight:600;
        text-decoration:underline;
    }
    #to
    {
        text-align:center;
        font:20px;
        font-weight:600;
        text-decoration:underline;
    }
    #content
    {
        height:50%;
        width:100%;
        font:16px;
    }
    #signature
    {
        font-weight:600;
        text-align:left;
        margin-bottom:25px;
    }
    #from
    {
        margin-bottom:25px;
    }


</style>
<?php
echo '<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">';
echo "</head>";
echo "<body>";
echo '<p id="header">AJAY KUMAR GARG ENGINEERING COLLEGE</p>';
echo '<p id="address">27th km stone, Delhi-Hapur  Bypass Road, Adhyatmik Nagar, Post Box No.- 116, Ghaziabad- 201009</p>';
echo '<br> <br>';
echo '<p id="date">Date:27 january 2015</p>';
echo '<p id="notice">NOTICE</p>';
//echo '<p id="to">ATTENTION:All students of    '.$concerning.'</p>';
echo '<br>';
// table of students entry
$q='SELECT * FROM entry';
$query= "SELECT st_no,(SELECT COUNT(st_no) as count FROM entry WHERE count>=5) as count FROM entry GROUP BY st_no ORDER BY count DESC";
var_dump($query);

    $query_select= mysqli_query($con,$query);

var_dump($query);
    while($query_result= mysqli_fetch_array($query_select,MYSQLI_ASSOC))
          {
               
                $query2 =" SELECT name FROM data WHERE st_no=".$query_result['st_no']." LIMIT 1";
                var_dump($query2);
                $query2_select= mysqli_query($con,$query2);
                while($query2_result= mysqli_fetch_array($query2_select,MYSQLI_ASSOC))
                 {
                     echo '<tr>';
                    echo '<td>';
                    echo   $query_result['st_no'];
                    echo '</td>'; 
                    echo '<td>';
                    
                    echo $query2_result['name'];
                    echo '</td>';
                 }
               
        
                
                 
        
        
                echo '<td>';
                echo    $query_result['count'];
                echo '</td>';
                echo '</tr>';
            
                
            
          }







echo '<p id="signature">Proctor</p>';

//echo '<p id="from">Copy to<br>'.$from.'</p>';
echo "</body>";
echo "</html>";
?>