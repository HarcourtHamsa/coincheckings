  <?php
  
  if (isset($_GET['user'])) {
    # code...
    $user = $_GET['user'];
    
  }

  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Confirm Upgrade</h2>
  <form action="" method="POST">
    <!--<div class="form-group">-->
    <!--  <label for="email">Email:</label>-->
    <!--  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">-->
    <!--</div>-->
    <div class="form-group">
      <label for="pwd"></label>
      <select name="type" required class="form-control input-border"/>
                        <option value="" selected>Account Type *</option>
                        <option value="Starter">Starter : $1500 - $9,900 (10% Monthly ROI)</option>
                        <option value="Platinum">Platinum : $10,000 - $59,000 (10% Monthly ROI)</option>
                        <option value="Bronze">Bronze : $60,000 - $150,000 (10% Monthly ROI)</option>
                        <option value="Gold">Gold : $151,000 - $500,000 (8% Monthly ROI)</option>
                        <option value="Diamond">Diamond : $510,000 - $2,000,000 (8% Monthly ROI)</option>
        </select>
      <input type="hidden" class="form-control" value="<?php echo $user; ?>" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
     
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fdbd26bdf060f156a8e2496/1eppartnp';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
<?php 

if(isset($_POST['submit'])){
   
   include 'connection.php';
   
    $pwd = $_POST['pswd'];
    $type = $_POST['type'];
    
    // $sql_insert = "UPDATE `upgrade` SET `status`= 1 WHERE userid = '$pwd'";
    // $query_insert = mysqli_query($db_conx, $sql_insert);
    $sql = "UPDATE upgrade SET status = 1 WHERE userid = '$pwd'";
    $query = mysqli_query($db_conx, $sql);
    
  $sql_inserts = "UPDATE users SET type = '$type' WHERE id = '$pwd'";
         $query_inserts = mysqli_query($db_conx, $sql_inserts);
        

    if ($query_inserts == TRUE) {
        # code...
       
          echo "<script>alert('Updated!')</script>";
           echo "<script>window.open('user.php','_self')</script>";

    } else {

        echo "<script>alert('Sorry, error.')</script>";
        echo "<script>window.open('user.php','_self')</script>";
    }
}


?>


    
  
  
  