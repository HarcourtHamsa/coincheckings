<?php 
include 'connection.php';

 //$sqlusers = "SELECT * FROM withdrawal";
 
$sqlusers = "SELECT upgrade.userid as theid, upgrade.status, upgrade.id as thisid, users.firstname, users.lastname, users.type, users.username
FROM upgrade
INNER JOIN users
ON upgrade.userid=users.id WHERE upgrade.status != 1";
 
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
        <td>'.$row['lastname'].'</td>
        <td>'.$row['username'].'</td>
        <td>'.$row['type'].'</td>
        <td>'.$status.'</td>
        <td><a class="btn btn-info" href="tryconfirm.php?user='.$row['theid'].'">confirm</a></td>
 
      </tr> ';
      
      
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 <a href="user.php" class="btn btn-info">View All Users</a>

 <a href="request.php" class="btn btn-info">Verification Request</a>
 
 <a href="adminwithdrawalrequest.php" class="btn btn-info">Withdrawal Request</a>
 
 <a href="viewdrawal.php" class="btn btn-info">Confirmed Withdrawals</a>
  <table class="table">
    <thead>
      <tr>
          <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
         <th>Usename</th>
         <th>Current Plan</th>
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

