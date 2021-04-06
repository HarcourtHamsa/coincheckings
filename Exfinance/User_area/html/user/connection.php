<?php 
 
 session_start();
if(isset($_COOKIE['user'])) $user = $_COOKIE['user'];
if(isset($_SESSION['user'])) $user = $_SESSION['user'];
if(!isset($user)){
//echo "Unauthorized access. Please <a href='login.php'>Login</a>";
    header("Location: https://coincheckings.com/Exfinance/User_area/html/user/auth");
die();
}
 $db_conx = mysqli_connect("localhost","biztusct_onlinetrade","onlinetrade","biztusct_onlinetrade"); 
 
 
 
 ?>