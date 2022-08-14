 
 
 <?php
include "connect.php";
 
 $query = " select * from codata";
  $result_set = mysqli_query ($connection, $query);


        if ($result_set){

            $row= mysqli_num_rows($result_set);
            echo"<br>";
          echo" Total Recodes Of The Table :"; 
            echo $row;
        echo '<br> <br>';
            //echo"<br>";

            echo "<table border =1>
             <tr> 
             <th> serial number  </th>
             <th> model  name </th>
             <th> condition </th>
            
    </tr>";

        
           while($recode = mysqli_fetch_assoc($result_set)){

        //print_r($recode);
        // echo "<br>";

        echo '<tr>
        
        <td>  '.$recode['Serialno'].' </td>
        <td> '.$recode['modelname'].'</td>
        <td>  '.$recode['condi'].'</td>
        
    
  </tr>';
         
        
           }

         
           echo "</table>";
        }

        


 ?>

