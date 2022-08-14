
<?php

$host = "localhost";
$user ="root";
$password ="";
$db ="logindb";

$connection= new mysqli($host,$user,$password,$db) ;

//mysqli_connect($host,$user,$password);
mysqli_select_db($connection, $db);

if ($connection -> connect_error){
    die("connection error ");
} else {
    //echo " connection ok";
} 

?>