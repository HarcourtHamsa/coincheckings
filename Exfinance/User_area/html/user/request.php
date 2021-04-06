<?php 
include 'connection.php';
$users = '';
$verified = 'no';
$sqlusers = "SELECT * FROM users WHERE verified != 'yes' AND request = 1";
 $queryusers = mysqli_query($db_conx, $sqlusers);
 while ($row = mysqli_fetch_array($queryusers)) {
   # code...
  if($row['verified'] != 'YES'){

  $verification = '<td><a class="btn btn-danger" href="verification.php?user='.$row['id'].'"> verify</a></td>';
  } else{

    $verification = '<td><a class="btn btn-success" href="verification.php?user='.$row['id'].'"> verified</a></td>';
  }
  $users .= '<tr>
        <td>'.$row['firstname'].'</td>
        <td>'.$row['email'].'</td>
        <td><a class="btn btn-info" href="viewverify.php?user='.$row['id'].'">View</a></td>
       
        '.$verification.'
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
  <table class="table">
    <thead>
      <tr>
        <th>Fullname</th>
        <th>Email</th>
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

