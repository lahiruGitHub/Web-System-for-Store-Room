<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if(isset($_SESSION['login_id'])){
  $login_id =$_SESSION['login_id'];
}else{
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title> Home </title>
  <link rel="stylesheet" a href="home.css">

</head>
<body>
    
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
        
    
      <div class="content">
      
      <h1>  WELCOME TO SRT LANKA TELECOM KALANIYA </h1>
    
        <h1> Sri Lanka Telecom - Kelaniya Switch Office Store Room </h1>

      </div>
    </div>


</body>




</html>