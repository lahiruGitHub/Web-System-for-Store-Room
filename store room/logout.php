<?php
//Remove Values from $_SESSION
$_SESSION = array(); /// Reinitialize as a Empty array

//Remove cookie relevent to $_SESSION
if (isset($_COOKIE[session_name()])) {
    // setcookie(cookei name, value . expiration time, effect web page)
    setcookie(session_name(), '', time() - 8480, '/'); // '/' = root folder
}

session_destroy();
header("location:login.php");
?>