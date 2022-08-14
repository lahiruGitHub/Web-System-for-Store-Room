<!DOCTYPE html>
 <html>
 <head>

 <title> Retreve Data  </title>
 <style>tr:hover {background-color:black;}</style>
    
 <link  href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!--<link rel="stylesheet" a href="vewstyle.css"> -->
</head>
<body style="margin: 70px;	padding: 60px; background: url(img/56.jpg); background-size: cover">
  
<h1 style="color: white; text-align:center; font-style:italic;margin-top: -10px;"> filter your data</h1>

  <table  class="table" style="color: white;">

  <thead>
      <tr style="font-size: large; color:aqua">
          <th>SERIAL NUMBER</th>
          <th> MODLE NAME</th>
          <th> Part Number </th>
          <th> Location</th>
          <th>  Recipient Name </th>
          <th> CONDITION</th>
          <th> Device Type </th>
          
       
      </tr>

  </thead>

     <tbody>

     <?php

     include 'connect.php';

$key= $_POST['key'];

$sql="select * from codata where Serialno ='$key'";

    $result= $connection ->query($sql);
     
        if ($result ->num_rows >0){

            

            while($row= $result ->fetch_assoc()){

                echo '<tr style="font-weight: bold;   ">

               <td> '.$row['Serialno'].' </td>
               <td> '.$row['modelname'].'</td>
               <td> '.$row['partno'].'</td>
               <td> '.$row['loction'].'</td>
               <td> '.$row['rname'].'</td>
               <td>'.$row['condi'].' </td>
               <td>'.$row['devicetype'].'</td>

                </tr>';
            }
      echo "</table>";

        } else {

            echo "it is not in the  database ";
        }
 //echo $sql;


?>


     </tbody>
  </table>
</body>
 </html>
