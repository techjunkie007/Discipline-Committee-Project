<?php
 // header("Content-type: application/vnd.ms-word");
 // header("Content-Disposition: attachment;Filename=document_name.doc");
?>
<?php
    include 'includes/connection.php';
    

    if(isset($_GET['del_no']))
       {
    $st_no=$_GET['del_no'];
    $query= 'DELETE FROM datewise
            WHERE st_no='.$st_no;
    if(mysqli_query($con,$query))
    {
        echo "sucessful";
        
        
        $query2= "UPDATE data
                            SET counter= counter -1, late_count= late_count -1
                            WHERE st_no=".$st_no."";
                            
                $query2_result= mysqli_query($con,$query2);
                if($query2_result)
                {
                    // echo "sucessful,, counter updated";
                }
            header("location:process_report.php");
        
    }
       }
    
?>





<html>
    <head></head>
    <body>
         <h2 style="margin-left:100px; margin-top:25px;">Daily late entry report</h2>
        <div id="table" >
             <table border="1"  style="border-collapse:collapse; margin-left:100px; margin-top:70px; width:600px; text-align:center;">
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

    if(isset($_POST['dates']))
        $dates= $_POST['dates'];
    else $dates='';
    
    if(isset($_POST['branch']))
        $branch= $_POST['branch'];
    else $branch='all';

    
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
                echo '<td>';
                echo '<button><a href="process_report.php?del_no='.$query_result['st_no'].'">Delete</a></button>';
                echo '</td>';
                
                echo '</tr>';
                
            }
        
            

?>
 </table> 
</div>        