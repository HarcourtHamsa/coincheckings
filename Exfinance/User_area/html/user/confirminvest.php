<?php

include 'connection.php'; 

if(isset($_GET['user']) && isset($_GET['id'])){
    
    $id = $_GET['id'];
    $userid = $_GET['user'];
    
    $sql = "UPDATE investments SET status = 1 WHERE userid = '$userid' AND id = '$id' AND status = 0";
    $query = mysqli_query($db_conx, $sql);
    
    if($query == TRUE){
        echo "successful";
        echo "<script>window.open('user.php','_self')</script>";
    }else {
        
        echo "error";
    }
    
    
}



?>