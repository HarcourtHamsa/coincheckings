<?php 
$db_conx = mysqli_connect("localhost","biztusct_forex","You Can't Hack My Password@4510","biztusct_forex");
if (isset($_POST['submit'])) {
    # code...
    $users = $_post['pswd'];
    // $type = $_post['type'];
    
      echo $users;
      exit();
   
    $sql_insert = "UPDATE upgrade SET status = 1 WHERE userid = '$user'";
    $query_insert = mysqli_query($db_conx, $sql_insert);
    
   

    if ($query_insert == TRUE) {
        # code...
         $sql_inserts = "UPDATE users SET type = '$type' WHERE id = '$user'";
         $query_inserts = mysqli_query($db_conx, $sql_inserts);

          echo "<script>alert('Updated!')</script>";
           echo "<script>window.open('adminwithdrawalrequest.php','_self')</script>";

    } else {

        echo "<script>alert('Sorry, error.')</script>";
        echo "<script>window.open('adminwithdrawalrequest.php','_self')</script>";
    }

}



?> 