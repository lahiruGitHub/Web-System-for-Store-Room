<?php

include 'connect.php';


// if (isset($_POST ['Serialno'])|| isset($_POST ['modelname'])|| isset($_POST ['notuse'])) {

$Sno=$_POST ['Serialno'];
$Mno=$_POST ['modelname'];
$lo=$_POST['loction'];
$recep=$_POST['rname'];
$condition=$_POST ['condi'];
$pno=$_POST['partno'];
$dtype=$_POST['devicetype'];
// }

// duplicate serial_no..........
$sql = " SELECT Serialno FROM codata WHERE Serialno =  '{$Sno}'";
$result = mysqli_query($connection, $sql);
if($result){
    if(mysqli_num_rows($result)>0){
        $response['success'] = 0;
        $response['data'] = "A Item already exist with given Serail No";
        echo json_encode($response);
        die;
    }
}else{
    $response['success'] = 0;
    $response['data'] = "Error";
    echo json_encode($response);
    die;
}
//..............................

$sql = " INSERT  INTO codata(Serialno,modelname,condi,partno,devicetype, loction,rname) values (?,?,?,?,?,?,?)";
$stetment= $connection -> prepare ($sql);
$stetment ->bind_param("sssssss", $Sno , $Mno , $condition,$pno,$dtype,$lo,$recep);

if($stetment-> execute()){
    $response['success'] = 1;
    $response['data'] = "Insert data";
    echo json_encode($response);
	//echo" insert data...";
}else{
    $response['success'] = 0;
    $response['data'] = "Error";
    echo json_encode($response);
   // echo" no insert data ";
}

 
?> 