<?php
 // header("Content-type: application/vnd.ms-word");
 // header("Content-Disposition: attachment;Filename=document_name.doc");
?>

<html>
    <head></head>
    <body>
        
        <div id="table" >
           <table border="1"  style="border-collapse:collapse;">
            <tr>
                <th>SNO</th>
		<th>Student Number</th>
                <th>Name of student</th>
                <th>Branch </th>
                <th>Year</th>
                <th>Date</th>
                <th>Delete</th>  
               
            </tr>
            
            
            
           

<?php
    include 'includes/connection.php';

    $dates= $_POST['dates'];
    $branch=$_POST['branch'];
    
     $query="SELECT * FROM datewise INNER JOIN data ON data.st_no=datewise.st_no";
     $sql="";
    if($branch=="all")
    {
        if($dates=='')
        {
            $sql=$query." GROUP BY data.st_no ORDER BY data.branch ASC ";     
        }
        else
        {
            $sql=$query." WHERE dates='".$dates."' GROUP BY data.st_no ORDER BY data.branch ASC  ";   
        }
    }
    else
    {
        if($dates=='')
        {
               $sql=$query." WHERE branch='".$branch."' ORDER BY data.branch ASC ";
        }
        else
        {
               $sql=$query." WHERE dates='".$dates."' AND branch='".$branch."' ORDER BY data.branch ASC ";
        }
        
    }
    // var_dump($start);
    $query_select=mysqli_query($con,$sql);
    // $query_result=mysqli_fetch_array($query_select,MYSQLI_ASSOC);
    // var_dump($query_result);
    // $query= 'SELECT st_no,name,branch,late_count,year FROM data WHERE late_count>='.$start.' AND late_count<='.$end;
    // $query_select= mysqli_query($con,$query);
	$i=1;
    while($query_result= mysqli_fetch_array($query_select,MYSQLI_ASSOC))
          {
            // var_dump($query_result);
               echo '<tr>';
		echo '<td>';
		echo $i; $i=$i+1;
		echo '</td>';
                echo '<td>';
                echo $query_result['st_no'];
                echo '</td>';
                echo '<td>';
                echo $query_result['name'];
                echo '</td>';
                echo '<td>';
                echo $query_result['branch'];
                echo '</td>';
                echo '<td>';
                echo $query_result['year'];
                echo '</td>';
                echo '<td>';
                echo $query_result['dates'];
                echo '</td>';
                
                
                
                echo '</tr>';
                
            }
        
            

?>
 </table> 
</div>        