<?php 
include 'connection.php';

 $sqlusers = "SELECT * FROM users";
 $queryusers = mysqli_query($db_conx, $sqlusers);
 while ($row = mysqli_fetch_array($queryusers)) {
   # code...
   if($row['verified'] != 'YES'){

  $verification = '<td><a class="btn btn-danger" href="#">not verified</a></td>';
  } else{

    $verification = '<td><a class="btn btn-success" href="#">verified</a></td>';
  }
  $users .= '<tr>
        <td>'.$row['firstname'].'</td>
        <td>'.$row['email'].'</td>
        <td><a class="btn btn-info" href="update.php?user='.$row['id'].'">edit</a></td>
         <td><a class="btn btn-info" href="viewverify.php?user='.$row['id'].'">View</a></td>

         '.$verification.'
         
          <td><a class="btn btn-danger" href="delete.php?user='.$row['id'].'">Delete</a></td>
 
      </tr> ';
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coincheckings Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

 
 <table class="table">
    <thead>
      <tr>
          <th> <a href="user.php" class="btn btn-info">View All Users</a></th>
        <th><a href="request.php" class="btn btn-info">Verification Request</a></th>
        <th><a href="adminwithdrawalrequest.php" class="btn btn-info">Withdrawal Request</a></th>
         <th><a href="investments.php" class="btn btn-info">Investments</a></th>
         <th><a href="https://coincheckings.com/Exfinance/index.php/logout.php" class="btn btn-danger">Logout</a></th>
         

      </tr>
    </thead>
  </table>
  
  
  
  
 <br> <br>
  <table class="table">
    <thead>
      <tr>
        <th>Fullname</th>
        <th>Email</th>
         <th>Action</th>
         <th>View</th>
         <th>Status</th>

      </tr>
    </thead>
    <tbody>
      <?php echo $users; ?>      
    </tbody>
  </table>
</div>

<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>
</html>

