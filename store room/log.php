<?php

if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
include "connect.php";
 

if (isset( $_POST ['username'])){
$uname=$_POST['username'];
$pas = $_POST['password'];
$sql ="select * FROM loginform WHERE user ='".$uname."'ANd pass='".$pas."'limit 1";

	$result = mysqli_query( $connection,$sql);
	$assoc = mysqli_fetch_assoc($result);

	if (mysqli_num_rows($result)==1){
      $_SESSION['login_id'] = $assoc['id'];
	  $_SESSION['user_name'] = $assoc['user'];
 	header("location:index.php");
 		exit();

	}
			else {
				header("location:login.php?err=Invalid Credentials");
				echo" your password or user name are incorrect ";
				exit();
	}
 
}


?>