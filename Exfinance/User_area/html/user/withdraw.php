<?php include 'code.php'; 

$sql_user = "SELECT * FROM withdrawal WHERE userid = '$id'";
 $query_user = mysqli_query($db_conx, $sql_user);
 $count_user = mysqli_num_rows($query_user);
 
     # code...
    while ($get_user = mysqli_fetch_array($query_user)) {
        # code...
        
        $amount = $get_user['amount'];
        $status = $get_user['status'];
        $thedate = $get_user['thedate'];
        
        if($status == 0){
            
            $status = '<p style="color: orange;">Not Approved</p>';
        }else{
            $status = '<p style="color: green;">Approved</p>';
        }
        
        $table .= '<tbody> <tr>
        <td>$'.$amount.'</td>
        <td>'.$status.'</td>
        <td>'.$thedate.'</td>
      </tr><tbody>';
         
    }
       
    
?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Request Withdrawal</h4>
                    </div>
                  
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Fill the form below to process your withdrawal</h4>
                                <h6 class="card-subtitle"> All fields are important  </h6>
                                <form class="mt-4" method="post" action="">
                                   <!--  <div class="form-group">
                                        <label for="exampleInputEmail1">Account I.D</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account I.D">
                             
                                    </div> -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                     <input type="hidden" name="id" class="form-control" id="user" value="<?php echo $id; ?>">
                                    <div class="form-group">
                                         <label for="exampleInputPassword1">Amount</label>
                                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
                                    </div>

                                   
                                    <div class="custom-control custom-checkbox mr-sm-2 mt-3 mb-3">
                                        <input type="checkbox" class="custom-control-input" id="checkbox0" value="check">
                                        <label class="custom-control-label" for="checkbox0">Save my Information for next time</label>
                                    </div>
                                    <button id="mail-submit" type="submit" name="submit" class="btn btn-primary">Submit</button>


                                </form>
                            </div>
                            <div><p class="form-message2"></p></div>
                        </div>
                        <!-- Button trigger modal -->
                      

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                      Your Request hass been successfully submitted and will be processed shortly
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
   
      <div class="container">
  <h2>Transaction History</h2>
  <p>A collection of your Withdrawal history</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Amount</th>
        <th>Status</th>
        <th>Date</th>
      </tr>
    </thead>
    
     <?php echo $table; ?>
  </table>
</div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
       All Rights Reserved by Coincheckings.
</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
 
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.init.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
   <script src="../../dist/js/feather.min.js"></script>
    <script src="../../dist/js/custom.min.js"></script>
    

</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 17:43:48 GMT -->
</html>
<?php

if (isset($_POST['submit'])) {
    # code...
    $id = $_POST['id'];
    $amount = $_POST['amount'];
    $password = $_POST['password'];

    $password2 = md5($password);

    $sql = "SELECT password FROM users WHERE id = '$id'";
    $query = mysqli_query($db_conx, $sql);
    while ($row = mysqli_fetch_array($query)) {
        # code...
        $password3 = $row['password'];
    }
    $password3 = $password3;

     if (empty($password) || empty($amount) || empty($id)) {
        # code...
       // echo "<span><h4 style='color: red'>fill in all fields!</h4></span>";
        echo "<script>alert('fill in all fields!')</script>";
        echo "<script>window.open('withdraw?user=".$email."','_self')</script>";    
    }
 elseif ($password2 != $password3) {
        # code...
       // echo "<span><h4 style='color: red'>fill in all fields!</h4></span>";
    echo $password2.'<br/>'.$password3;
    exit();
        echo "<script>alert('your password is not correct!')</script>";
        echo "<script>window.open('withdraw?user=".$email."','_self')</script>";
} else{

    $sql = "INSERT INTO withdrawal (userid, amount, status, thedate) VALUES ('$id', '$amount', 0, NOW())";
    $query = mysqli_query($db_conx, $sql);

             $them = 'coincheckings@gmail.com';
             //$them = 'innocentdestiny228@gmail.com';
             $emails = 'coincheckings@coincheckings.com'; 
             $subject = 'New Withdrawal Request';

               $to = $them;  
               $from = $emails;
               $subject = $subject;
               $message = 'The user with the below detials just request a withdrawal<br/>
               name: '.$firstname.' '.$lastname.'<br/>
               email: '.$email.'<br/>
               phone: '.$phone.'<br/>
               username: '.$username.'<br/>
               zipcode: '.$zipcode.'<br/>
               country: '.$country.'<br/>
               account type: '.$type.'<br/>
               amount: '.$amount.'<br/>
               account type: '.$currency.'<br/>';

               $headers = "From: $from\n";
                       $headers .= "MIME-Version: 1.0\n";
                       $headers .= "Content-type: text/html; charset=iso-8859-1\n";
               mail($to, $subject, $message, $headers);


          echo "<script>alert('request sent!')</script>";
          // echo "<script>window.open('withdraw?user=".$email."','_self')</script>";
}

}

?>
