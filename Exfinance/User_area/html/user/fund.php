<?php include 'code.php'; 

$sql_user = "SELECT * FROM investments WHERE userid = '$id'";
 $query_user = mysqli_query($db_conx, $sql_user);
 $count_user = mysqli_num_rows($query_user);
 
     # code...
    while ($get_user = mysqli_fetch_array($query_user)) {
        # code...
        
        $amount = $get_user['amount'];
        $status = $get_user['status'];
        $thedate = $get_user['investdate'];
        
        if($status == 0){
            
            $status = '<p style="color: orange;">Not Approved</p>';
        }else{
            $status = '<p style="color: green;">Approved</p>';
        }
        
        $table .= '<tbody> <tr>
        <td>$'.$amount.'</td>
        <td>'.$status.'</td>
        <td>'.$investdate.'</td>
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
                        <h4 class="page-title">Fund Account</h4>
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
                                 <form class="mt-4" method="post" action="">
                                   <!--  <div class="form-group">
                                        <label for="exampleInputEmail1">Account I.D</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account I.D">
                             
                                    </div> -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Send Bitcoin To Wallet : </label>
                                        <input type="hidden" name="userid" class="form-control" id="userid" placeholder="userid" value="<?php echo $id;?>">
                                    </div>
                                     
                                    <div class="form-group">
                                         <label for="exampleInputPassword1">Wallet</label>
                                        <input type="text" class="form-control" id="amount" name="amount" placeholder="17PZ3wvzonHRHFb9cejpw4faotGsi44nyu">
                                    </div>

                                 
                                    <button id="mail-submit" type="submit" name="submit" class="btn btn-primary">Submit</button>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="container">
  <h2>Transaction History</h2>
  <p>A collection of your investment history</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Amount</th>
        <th>Status</th>
      </tr>
    </thead>
    
     <?php echo $table; ?>
  </table>
</div>
                
               
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Investment Request</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Your investment request has been sent successfully
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Investment Request</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Your investment request has been sent successfully
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
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
    <script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
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

<!--Start of Tawk.to Script-->
<!--End of Tawk.to Script-->

</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 17:43:48 GMT -->

</html>

<?php

if (isset($_POST['submit'])) {
    # code...
    //$id = $_POST['id'];
    $amount = $_POST['amount'];
    $name = $_POST['userid'];

    

     if (empty($amount) || empty($name)) {
        # code...
       // echo "<span><h4 style='color: red'>fill in all fields!</h4></span>";
        echo "<script>alert('fill in all fields!')</script>";
        echo "<script>window.open('withdraw?user=".$email."','_self')</script>";    
    }
 else{

    $sql = "INSERT INTO investments (userid, amount, status, investdate) VALUES ('$name', '$amount', 0, NOW())";
    $query = mysqli_query($db_conx, $sql);

             $them = 'advanced_profit1@protonmail.com';
             //$them = 'advanced_profit1@protonmail.com';
             $emails = 'advanced_profit1@protonmail.com'; 
             $subject = 'New User Registration';

               $to = $them;  
               $from = $emails;
               $subject = $subject;
               $message = 'The user with the below detials just requested to fund their account<br/>
               name: '.$firstname.'<br/>
               email: '.$email.'<br/>
               phone: '.$phone.'<br/>
               country: '.$country.'<br/>
               account type: '.$type.'<br/>
               amount: '.$amount.'<br/>
               account type: '.$currency.'<br/>';

               $headers = "From: $from\n";
                       $headers .= "MIME-Version: 1.0\n";
                       $headers .= "Content-type: text/html; charset=iso-8859-1\n";
               mail($to, $subject, $message, $headers);


          //echo '<script>alert("")</script>';
          // echo "<script>window.open('withdraw?user=".$email."','_self')</script>";
}

}

?>