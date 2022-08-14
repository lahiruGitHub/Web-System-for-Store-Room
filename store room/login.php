
<?php
if(isset($_GET['err'])){
	echo "<script>alert('".$_GET['err']."')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
	<!--<link rel="stylesheet" a href="css\font-awesome.min.css"> -->
</head>
<body>

<!----------------------------------------->

<!----------------------------------------------------------------------------->
	<div class="loginbox">
		
		<img src="img/images.png" class="user">
		<h1> Login here </h1>
		
		<form action="log.php" method="POST" >
				<div class="a">

					<p>user name</p>
						<input type="text" name="username" placeholder="Enter the User Name" required/>	
			
					<p>Enter the password </p>
						<input type="password" name="password" placeholder="password" required/>
				</div>

				<div class="sub">
					
<button  class="btn-login"> LOGIN</button> 


	<!--<input type="submit" type="submit" value="LOGIN" class="btn-login" /></a>
		-->	</div>
				
					<div class="b">
						<a href="#"> Forgot password </a> <br>
					</div>
		</form>  
	</div>
	
</body>
</html>