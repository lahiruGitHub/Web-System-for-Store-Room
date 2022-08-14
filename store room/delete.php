
<!DOCTYPE html>
 <html>
 <head>

 <title> Retreve Data  </title>
 <style>tr:hover {background-color:black;}</style>
    
 <link  href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!--<link rel="stylesheet" a href="vewstyle.css"> -->
</head>
<body style="margin: 70px;	padding: 60px; background: url(img/de2.jpg); background-size: cover">
  
<h1 style="color:white; text-align:center; font-style:italic;margin-top: -10px;">Are you sure, </br> You want to delete this record?</h1>
</body>
 </html>


<?php

    include "connect.php";
  
  $erros = array( );
  $serial='';
  $mname='';
  $cond='';
  $sid='0';
    if (isset($_GET['serialno'])){
       // $Sno = $_GET['Serialno'];
    $sid=mysqli_real_escape_string($connection,$_GET['serialno']);

        $query = " select * from codata where Serialno= '{$sid}' LIMIT 1";

            $result_set = mysqli_query ($connection, $query);

                 if ($result_set){

                    if(mysqli_num_rows($result_set)==1){

                      $result = mysqli_fetch_assoc($result_set);

                      $serial=$result['Serialno'];
                      $mname=$result['modelname'];
                      $cond=$result['condi'];
                      $pno = $result['partno'];
                      $dtype=$result['devicetype'];
                      $lo=$result['loction'];
                      $reci=$result['rname'];
                    } else{
                      header('location:vewdata.php?err=user_not_found');

                    }
                  }else{
                    header('location:vewdata.php?err=query_failed');
                    }
    }else{
    //  echo "<script>alert('no id')</script>";
    }
   ?>
   
   <?php
    if (isset($_POST['submit_delete'])){
      $id = $_POST['id'];


      // UPDATE `codata` SET `Serialno` = 'ab123333' WHERE `codata`.`Serialno` = 'ab123';

       $query = "DELETE FROM `codata` WHERE `codata`.`Serialno` ='{$id}'  LIMIT 1";
     //  $query = "UPDATE codata SET Serialno='{$serialno}', modelname='{$modelname}', condi='{$condi}' where Serialno= '{$serialno}' LIMIT 1";
       $result_set = mysqli_query ($connection, $query);
       if ($result_set){
        echo "<script>alert('Successfully deleted')</script>";
        echo "<script>location.href='vewdata.php';</script>";
       }else{
        echo "<script>alert('Delete failed!')</script>";
       }
    }
   ?>
 <form style="padding: 20px 22px ;";  method="POST" action="delete.php">
 <input type="hidden" name ="id" placeholder="Serial Number" value="<?php echo $serial?>">
    <div id="name"> 
         <h2 style="color:white; font-weight: bold; font-size:25px"; class="name" >Serial Number</h2>
            <input style="color:blue ;  border-radius: 4px; font-size: 22px; font-weight: bold ;   position: relative;top: -37px; left: 250px; width: 220px; text-align:center;" ; readonly type="text"name ="serialno" placeholder="Serial Number" value="<?php echo $serial?>"> 

            <h2 style="color:white; font-weight: bold; font-size:25px"; class="name"> Part Number</h2>
          <input style="color:blue ; font-size: 22px; font-weight: bold ;position: relative;top: -37px; left: 250px; width: 220px; text-align:center;"; type="text"name ="partno" placeholder=" Part Number" value="<?php echo  $pno ?>"> 



        <h2 style="color:white; font-weight: bold; font-size:25px"; class="name"> Modle Number</h2>
            <input style="color:blue ; border-radius: 4px; font-size: 22px; font-weight: bold ;position: relative;top: -37px; left: 250px; width: 220px; text-align:center;"; readonly type="text"name ="modelname" placeholder=" Model Name" value="<?php echo $mname?>"> 

            <h2 style="color:white; font-weight: bold; font-size:25px"; class="name"> Location</h2>
          <input style="color:blue ; font-size: 22px; font-weight: bold ;position: relative;top: -37px; left: 250px; width: 220px; text-align:center;"; type="text"name ="loction" placeholder=" Loction" value="<?php echo   $lo ?>"> 



        <h2 style="color:white; font-weight: bold; font-size:25px"; class="name"> Recipient Name</h2>
            <input style="color:blue ; border-radius: 4px; font-size: 22px; font-weight: bold ;position: relative;top: -37px; left: 250px; width: 220px; text-align:center;"; readonly type="text"name ="rname" placeholder=" Recipient Name" value="<?php echo $reci?>"> 



     <h2 style="color:white; font-weight: bold; font-size:25px"; class="name"> Condition </h2>
            <select  style="color:blue ; border-radius: 4px; font-size: 22px; font-weight: bold ;width: 220px; position: relative;top: -37px; left: 250px; text-align:center;"; readonly name="condi"  class="form-control" >
                 <option value="" name="condi"> ---Choose Option</option>
                     <option value="not_use" <?php echo $cond=='not_use'?'selected':''?>> not_use </option>
                     <option value="used"  <?php echo $cond=='used'?'selected':''?>> used</option>
                     <option value="fault"  <?php echo $cond=='fault'?'selected':''?>> fault </option>
                     <option value="new"  <?php echo $cond=='new'?'selected':''?>> new</option>
                     <option value="repaire"  <?php echo $cond=='repaire'?'selected':''?>> repaire </option>
           
            </select>
            
            <h2 style="color:white; font-weight: bold; font-size:25px"; class="name"> Device Type </h2>
            <select style="color:blue ; font-size: 22px; font-weight: bold ;width: 220px; position: relative;top: -37px; left: 250px; text-align:center;"; name="devicetype"  class="form-control" >
                 <option style="color:black ";value="" name="devicetype"> ---Choose Option</option>
                     <option value="Switch" <?php echo  $dtype=='Switch'?'selected':''?>>Switch </option>
                     <option value="Transmision"  <?php echo $dtype=='Transmision'?'selected':''?>> Transmision</option>
                     </select><br><br>
            
    </div>
    <button type="submit"  name="submit_delete" class= "btn btn-primary">Yes, Delete</button>
    <button type="button" onclick="javascript:location.href='vewdata.php'"   class= "btn btn-secondary">No</button>
</form> 


