<?php 
include 'connection.php';

 //$sqlusers = "SELECT * FROM users WHERE id = '$userid'";
 $sqlusers = " SELECT investments.amount, investments.userid, investments.id, users.firstname, users.email, investments.investdate, users.verified FROM investments INNER JOIN users ON investments.userid = users.id WHERE investments.status = 0";
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
        <td>'.$row['amount'].'</td>
        <td>'.$row['investdate'].'</td>
        <td><a class="btn btn-info" href="delete.php?user='.$row['userid'].'&id='.$row['userid'].'">Delete</a></td>
         <td><a class="btn btn-info" href="confirminvest.php?user='.$row['userid'].'&id='.$row['id'].'" style="background-color: green">Approve</a></td>

         '.$verification.'
         
        
 
      </tr> ';
 }
 
 
 //SELECT column_name(s) FROM table1 INNER JOIN table2 ON table1.column_name = table2.column_name;
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
        <th>Fullname</th>
        <th>Email</th>
         <th>Amount</th>
         <th>Date</th>
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


</body>
</html>

