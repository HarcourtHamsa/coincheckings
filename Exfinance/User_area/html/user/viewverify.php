<?php 
include 'connection.php';
if(isset($_GET['user'])){
    $user = $_GET['user'];
 $sql_user = "SELECT * FROM users WHERE id = '$user'";
 $query_user = mysqli_query($db_conx, $sql_user);
 $count_user = mysqli_num_rows($query_user);

$theverification = '';
 if ($count_user == 1) {
     # code...
    while ($get_user = mysqli_fetch_array($query_user)) {
        # code...
        $id = $get_user['id'];
        $firstname = $get_user['firstname'];
        $lastname = $get_user['lastname'];
        $username = $get_user['username'];
        $email = $get_user['email'];
        $password = $get_user['password'];
        $zipcode = $get_user['zipcode'];
        $phone = $get_user['phone'];
        $country = $get_user['country'];
        $type = $get_user['type'];
        $currency = $get_user['currency'];
        $verified = $get_user['verified'];
        $balance = $get_user['balance'];
        $invested = $get_user['invested'];
        $btc = $get_user['btc'];

   if ($verified == 'YES') {
       # code...
    $theverification = '<span class="verified mt-2">verified</span>';
   } else{
     $theverification = '<span class="not-verified mt-2">Not verified</span>';
   }

 $sql_users = "SELECT * FROM verification WHERE userid = '$user'";
 $query_users = mysqli_query($db_conx, $sql_users);
 while ($row = mysqli_fetch_array($query_users)) {
     # code...
    $document = $row['document'];
    $userid = $row['userid'];
    $file = $row['file'];
    $file2 = $row['file2'];
 }
}
}
}
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from www.wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/index3 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 17:38:21 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>OkExfinance  - Dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
    <!-- Custom CSS -->
    <link href="../../assets/libs/morris.js/morris.css" rel="stylesheet">
    <link href="../../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> <![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                 
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li>

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <i class="ti-search"></i>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-us"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right  animated bounceInDown"
                                aria-labelledby="navbarDropdown2">
                                <a class="dropdown-item" href="#">
                                    <i class="flag-icon flag-icon-us"></i>
                                    English</a>
                                <a class="dropdown-item" href="#">
                                    <i class="flag-icon flag-icon-fr"></i>
                                    French</a>
                                <a class="dropdown-item" href="#">
                                    <i class="flag-icon flag-icon-es"></i>
                                    Spanish</a>
                                <a class="dropdown-item" href="#">
                                    <i class="flag-icon flag-icon-de"></i>
                                    German</a>
                            </div>
                        </li>

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle"
                                    width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white mb-2">
                                        <div class="">
                                            <img src="../../assets/images/users/1.jpg" alt="user"
                                                class="img-circle" width="60">
                                            </div>
                                        <div class="ml-2">
                                            <h4 class="mb-0"><?php echo $firstname;?>  <?php echo $lastname;?></h4>
                                            <?php echo $theverification; ?> 
                                        </div>
                                    </div>
                                           
                                            <div class="dropdown-divider"></div>
                                           
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="../../../index.php/Auth">
                                                <i class="fa fa-power-off mr-1 ml-1"></i>
                                                Logout</a>
                                            <div class="dropdown-divider"></div>
                                            <div class="pl-4 p-10">
                                                <a href="Profile"
                                                    class="btn btn-sm btn-success btn-rounded">View Profile</a>
                                            </div>
                                       
                                    </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <a class="dropdown-item" href="user">
                                            <i class="ti-user mr-1 ml-1"></i>
                                            Back to Admin</a>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
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
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">First Name:</label>
                                        <div class="col-sm-9">
                                            <p class="mt-1"><?php echo $firstname;?></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-right control-label col-form-label">Email:</label>
                                        <div class="col-sm-9">
                                            <p class="mt-1"><?php echo $user; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-right control-label col-form-label">Country:</label>
                                        <div class="col-sm-9">
                                            <p class="mt-1"><?php echo $country; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-right control-label col-form-label">Contact No:</label>
                                        <div class="col-sm-9">
                                            <p class="mt-1"><?php echo $phone; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <h4 class="card-title">Account Information</h4>
                                     
                                    <div class="form-group row">
                                        <label for="com1"
                                            class="col-sm-3 text-right control-label col-form-label">Account
                                            type:</label>
                                        <div class="col-sm-9">
                                            <p class="mt-1"><?php echo $type; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="com1"
                                            class="col-sm-3 text-right control-label col-form-label">Account
                                            currency:</label>
                                        <div class="col-sm-9">
                                            <p class="mt-1"><?php echo $currency; ?></p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="com1"
                                            class="col-sm-3 text-right control-label col-form-label">Verification document</label>
                                        <div class="col-sm-9">
                                            <p class="mt-1"><?php echo $document; ?></p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="com1"
                                            class="col-sm-3 text-right control-label col-form-label">Verification Image (FRONT)</label>
                                        <div class="col-sm-9">
                                         <a href="verified/<?php echo $file; ?>" download><img src="verified/<?php echo $file; ?>" height="50px" width="50px"></a>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="com1"
                                            class="col-sm-3 text-right control-label col-form-label">Verification Image (BACK)</label>
                                        <div class="col-sm-9">
                                         <a href="verified/<?php echo $file2; ?>" download><img src="verified/<?php echo $file2; ?>" height="50px" width="50px"></a>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
         
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
                All Rights Reserved by OkExfinance.
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
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/form-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 17:43:48 GMT -->

</html>