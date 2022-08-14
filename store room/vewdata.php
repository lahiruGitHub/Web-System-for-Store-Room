
 <!DOCTYPE html>
 <html>
 <head>

 <title> Retreve Data  </title>
 <style>tr:hover {background-color:purple;}

.header{
    height: 15%;
    display: flex;
    align-items: center;
    overflow: hidden;
    position: relative;
 }
 .logo{
    width: 100px;
    cursor: pointer;
   padding: 20px;
   margin-top: 20px;
 }
 .navbar a:link{
 text-decoration: none;
}

.navbar{

text-align: center;
flex: 1;

}
.navbar a{

     padding: 6px 20px;
     text-decoration: none ;
     color: white;
     margin-left: 20px;
     font-size: 20px;
     font-weight: bold;
     text-align: center;
}


.btn a{
 color: white;
 font-weight: bold;
 background-color:transparent;
 width: 100%;
}

.btn a:link{
 text-decoration: none;
}
.btn :hover{
 background-color:blue;
 color: white ;
 font-size:18px;
width: 100%;
}
.btn{

color: blue;
  border: 2px solid peachpuff;
    background: blue;

}  
.top{
  margin-left: 1120px;
  margin-top: 60px;
 
} 
.t-btn a{

  background-color: palegoldenrod;
  font-size: medium;
  font-weight: bold;
  color: black;
}
.t-btn a:link{
 text-decoration: none;
}
</style>
    
 <link  href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!---<link rel="stylesheet" a href="vewstyle.css"> -->
</head>
<body style="margin: 70px;	padding: 60px; background: url(img/tq1.jpg); background-size: cover">

<a id="top"></a>

<div class="conteiner">
<div class="header">
            <img src="img/3stl.png" class="logo">

            <div class="navbar">
            <a href="index.php"> HOME</a>
            <a href="form.php">ADD DATA</a>
            <a href="vewdata.php"> RETREW DATA </a>
            <a href="form.php"> FIND DATA</a>

            </div>
            

            <button class="btn"> <a href="logout.php" class="a"> Logout </a></button>
        </div>
</div>
<h1 style="color: white; text-align:center; font-style:italic; ">List of the Componets</h1>
</div>



<!--content here-->


  <table  class="table" style="color: white;">

  <thead>
      <tr style="font-size: large; color:aqua">
          <th>SERIAL NUMBER</th>
          <th> MODLE NAME</th>
          <th> Part Number </th>
          <th> Location </th>
          <th>Recipient Name</th>
          <th> CONDITION</th>
          <th> Device Type </th>
          <th> ACTION</th>
       
      </tr>

  </thead>

     <tbody>
<?php

include "connect.php";

  /*if(isset($_GET['Serialno'])){
    //echo $_GET['Serialno'];
    $serial =$_GET['Serialno'];
    $delete = mysqli_query($connection,"DELETE FROM `codata` WHERE `Serialno`='$serial'");
    header("location: delete.php");
}*/

$query = " select * from codata";
  $result_set = mysqli_query ($connection, $query);


  
  if ($result_set){

    $row= mysqli_num_rows($result_set);


          echo " <p style='color:white; font-weight:bold'> Total Recodes Of The Table :  $row  </p>"; 
             //  echo "<p style='color:white;'>$row </p>";
               //echo '<br> <br>';
    //echo"<b>
  }

    while($recode = mysqli_fetch_assoc($result_set)){

        //print_r($recode);
        // echo "<br>";

        echo '<tr style="font-weight: bold">
        
        <td> '.$recode['Serialno'].' </td>
        <td> '.$recode['modelname'].'</td>
        <td> '.$recode['partno'].'</td>
        <td> '.$recode['loction'].'</td>
        <td> '.$recode['rname'].'</td>
        <td>  '.$recode['condi'].'</td>
        <td>  '.$recode['devicetype'].'</td>

<td> <a  class= "btn btn-primary btn-sm" href="update.php?serialno=' .$recode['Serialno']. '"> update</a> 
     <a  class= "btn btn-danger btn-sm" href="delete.php?serialno=' .$recode['Serialno']. '"> delete</a>  </td>
               
      </td>
            </tr>';

                  }
             ?>
        </tbody>
  </table>
  <div class="top">
    <button class="t-btn">
  <a href="#top">Back to top</a>
    </button>
  </div>
</body>


 </html>