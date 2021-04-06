<?php 
include 'connection.php';
if(isset($_GET['user'])){
    $user = $_GET['user'];

 $sql_user = "DELETE FROM users WHERE id = '$user'";
 $query_user = mysqli_query($db_conx, $sql_user);
 $count_user = mysqli_num_rows($query_user);
  
  header("Location: user.php");
}
?>