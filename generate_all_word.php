<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");
?>

<html>
    <head>
        <style>
            #header {
                margin-top:25px;
                text-align:center;
                margin-bottom:20px;
                margin-left:auto;
                
            }
            td,th
            { 
                border-collapse: collapse;
                padding:5px;
                
            }
            #table {
                border-collapse: collapse;
                padding:10px;
                margin-top:50px;
                margin-left:70px;
            }
        
        
        </style>
    
    
    </head>
    <body>
        <div id="header">
        
           <h2 style="text-decoration:underline;">AJAY KUMAR GARG ENGINEERING COLLEGE GHAZIABAD</h2>
            <h3 style="text-decoration:underline;">DISCIPLINARY NOTICE</h3>
        
        </div>
        <div id="table" >
           <table border="1"  style="border-collapse:collapse;">
            <tr>
                 <th>SNO</th>
                <th>STUDENT NUMBER</th>
                <th>STUDENT NAME</th>
                <th>BRANCH & YEAR </th>
                </tr>
            
            
            
           


<?php
    include 'includes/connection.php';
    //$query= "SELECT count(DISTINCT(st_no)) from entry";
    
    

    $query= "SELECT st_no,name,branch,year,counter FROM data WHERE counter>=3";
    $query_select= mysqli_query($con,$query);
    $i=1;
    while($query_result= mysqli_fetch_array($query_select,MYSQLI_ASSOC))
          {
                switch($query_result['year'])
                {
                    case 1: { $query_result['year']='I'; break; }
                    case 2: { $query_result['year']='II'; break; }
                    case 3: { $query_result['year']='III'; break; }
                    case 4: { $query_result['year']='IV'; break; }
                }
        
                echo '<tr>';
                echo '<td>';
                echo $i; $i= $i+1;
                echo '</td>';
                echo '<td>';
                echo $query_result['st_no'];
                echo '</td>';
                echo '<td>';
                echo $query_result['name'];
                echo '</td>';
                echo '<td>';
                echo $query_result['branch'].' '.$query_result['year'].'  Year';
                echo '</td>';
                
                
                echo '</tr>';
                
                $query2= "UPDATE data
                            SET counter= counter - 3
                            WHERE st_no=".$query_result['st_no'].' AND counter>=3';
                            
                $query2_result= mysqli_query($con,$query2);
                if($query2_result)
                {
                    // echo "sucessful,, counter updated";
                }
            }
        
            

?>
 </table> 
        
        
        </div>
    
    
    
    </body>



</html>