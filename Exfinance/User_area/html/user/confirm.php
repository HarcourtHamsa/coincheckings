  <?php 
$db_conx = mysqli_connect("localhost","biztusct_forex","You Can't Hack My Password@4510","biztusct_forex");
if (isset($_GET['user'])) {
    # code...
    $user = $_GET['user'];
    
    // echo $user;
    // exit();
   
    $sql_insert = "UPDATE withdrawal SET status = 1 WHERE userid = '$user'";
    $query_insert = mysqli_query($db_conx, $sql_insert);

    if ($query_insert == TRUE) {
        # code...

          echo "<script>alert('Updated!')</script>";
           echo "<script>window.open('adminwithdrawalrequest.php','_self')</script>";

    } else {

        echo "<script>alert('Sorry, error.')</script>";
        echo "<script>window.open('adminwithdrawalrequest.php','_self')</script>";
    }

}



?> 