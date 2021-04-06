<?php 
include 'connection.php';

 //$sqlusers = "SELECT * FROM withdrawal";
 
$sqlusers = "SELECT withdrawal.userid as theid, withdrawal.status, withdrawal.amount, withdrawal.thedate, users.firstname, users.lastname, users.username
FROM withdrawal
INNER JOIN users
ON withdrawal.userid=users.id WHERE withdrawal.status != 1";
 
 $queryusers = mysqli_query($db_conx, $sqlusers);
 while ($row = mysqli_fetch_array($queryusers)) {
   # code...
//   if($row['verified'] != 'YES'){

//   $verification = '<td><a class="btn btn-danger" href="#">not verified</a></td>';
//   } else{

//     $verification = '<td><a class="btn btn-success" href="#">verified</a></td>';
//   }

    if($row['status'] == 1){
          
          $status = '<span class="label label-success">Confirmed</span>';
      }else {
          
          $status = '<span class="label label-warning">Pending</span>';
      }
      
  $users .= '<tr>
        <td>'.$row['theid'].'</td>
        <td>'.$row['firstname'].'</td>
        <td>'.$row['amount'].'</td>
        <td>'.$status.'</td>
        <td>'.$row['thedate'].'</td>
        <td><a class="btn btn-info" href="confirm.php?user='.$row['theid'].'">confirm</a></td>
 
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
         <th><a href="viewdrawal.php" class="btn btn-info">Confirmed Withdrawals</a></th>
         

      </tr>
    </thead>
  </table>
  
  
  <table class="table">
    <thead>
      <tr>
          <th>ID</th>
        <th>Fullname</th>
         <th>Amount</th>
         <th>Status</th>
         <th>Date</th>
         <!--<th>Action</th>-->
         <!--<th>View</th>-->
         <!--<th>Status</th>-->

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

