<?php

include 'connect.php';


// if (isset($_POST ['Serialno'])|| isset($_POST ['modelname'])|| isset($_POST ['notuse'])) {

$name=$_POST ['Serialno'];
$Sno=$_POST ['modelname'];
$condition=$_POST ['condi'];
$pno=$_POST['partno'];
$dtype=$_POST['devicetype'];
// }

$sql = " INSERT  INTO codata(Serialno,modelname,condi,partno,devicetype) values (?,?,?,?,?)";
$stetment= $connection -> prepare ($sql);
$stetment ->bind_param("sssss", $name , $Sno , $condition,$pno,$dtype);

if($stetment-> execute()){
	echo" insert data...";
}else{

echo" no insert data ";
}

 
?> 