<?php

session_start();
if(isset($_COOKIE['user'])) $user = $_COOKIE['user'];
if(isset($_SESSION['user'])) $user = $_SESSION['user'];
if(!isset($user)){
//echo "Unauthorized access. Please <a href='login.php'>Login</a>";
    header("Location: https://coincheckings.com/login.php");
die();
}

$db_conx = mysqli_connect("localhost","biztusct_onlinetrade","onlinetrade","biztusct_onlinetrade");

    # code...
 $$user = $_SESSION['user'];
 $sql_user = "SELECT * FROM users WHERE email = '$user'";
 $query_user = mysqli_query($db_conx, $sql_user);
 $count_user = mysqli_num_rows($query_user);

$theverification = '';
 if ($count_user == 1) {
     # code...
    while ($get_user = mysqli_fetch_array($query_user)) {
        # code...
        $id = $get_user['id'];
        $firstname = $get_user['firstname'];
        $email = $get_user['email'];
        $password = $get_user['password'];
        $phone = $get_user['phone'];
        $country = $get_user['country'];
        $type = $get_user['type'];
        $currency = $get_user['currency'];
        $verified = $get_user['verified'];
        $balance = $get_user['balance'];
        $invested = $get_user['invested'];
        $btc = $get_user['btc'];
        $compound = $get_user['compound'];

   if ($verified == 'YES') {
       # code...
    $theverification = '<span class="verified mt-2">verified</span>';
   } else{
     $theverification = '<span class="not-verified mt-2">Not verified</span>';
   }
   
   
    }
 } elseif($count_user != 1){

    header('location: http://localhost/Exfinance-master/Exfinance-master/Exfinance/index.php/Auth/signup');
 } else{

    header('location: http://localhost/Exfinance-master/Exfinance-master/Exfinance/index.php/Auth/signup');

}

    if($type == 'Starter'){
        $upgrade = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Compound Interest <span class="badge">$</span></button>';
    } else{
        
            if($compound == 0){
        $upgrade = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Compound Interest <span class="badge">$</span></button>';
            }else{
        $upgrade = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">No Compound<span class="badge">$</span></button>';
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
    <title>Coincheckings  - Dashboard</title>
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
                        
                        <?php// echo $upgrade; ?>
                        <li class="nav-item dropdown">
                            <!--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"-->
                            <!--    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                            <!--    <i class="flag-icon flag-icon-us"></i>-->
                            <!--</a>-->
                            
                            <!--<div class="dropdown-menu dropdown-menu-right  animated bounceInDown"-->
                            <!--    aria-labelledby="navbarDropdown2">-->
                            <!--    <a class="dropdown-item" href="#">-->
                            <!--        <i class="flag-icon flag-icon-us"></i>-->
                            <!--        English</a>-->
                            <!--    <a class="dropdown-item" href="#">-->
                            <!--        <i class="flag-icon flag-icon-fr"></i>-->
                            <!--        French</a>-->
                            <!--    <a class="dropdown-item" href="#">-->
                            <!--        <i class="flag-icon flag-icon-es"></i>-->
                            <!--        Spanish</a>-->
                            <!--    <a class="dropdown-item" href="#">-->
                            <!--        <i class="flag-icon flag-icon-de"></i>-->
                            <!--        German</a>-->
                            <!--</div>-->
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
                                    </div> <a
                                                class="dropdown-item" href="profile?user=<?php echo $user; ?>">
                                            <i class="ti-user mr-1 ml-1"></i>
                                            My Profile</a>
                                           
                                            <div class="dropdown-divider"></div>
                                           
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="https://coinchecking.com/Exfinance/index.php/logout.php">
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

<div id="myModal3" class="modal">

   <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hello</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you don't want to compond your interest?</p>
          <p>click the button below to confirm.</p>
          <a type="button" href="nocompond.php?user=<?php echo $id; ?>" class="btn btn-success" style="background-color: green; color: white;">Confirm</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>

</div>

        <!-- The Modal -->
<div id="myModal2" class="modal">

   <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hello</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to compond your interest?</p>
          <p>click the button below to confirm.</p>
          <a type="button" href="compond.php?user=<?php echo $id; ?>" class="btn btn-success" style="background-color: green; color: white;">Confirm</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>

</div>
        <div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sorry</h4>
        </div>
        <div class="modal-body">
          <p>You must upgrade to a higher plan before compounding :)</p>
          <p>click the button below to upgrade.</p>
          <a type="button" href="upgrade.php?user=<?php echo $id; ?>" class="btn btn-success" style="background-color: green; color: white;">Upgrade</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown mt-3">
                                <div class="user-pic"><img src="../../assets/images/users/1.jpg" alt="users"
                                        class="rounded-circle" width="40" />
                                </div>
                                <div class="user-content hide-menu ml-2">
                                    <h5 class="mb-0 user-name font-medium"><?php echo $firstname;?>  <?php echo $lastname;?></h5>
                                   <?php echo $theverification; ?>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>

                        <li class="side_item">
                            <a href="dashboard?user=<?php echo $user; ?>" class="text-white">Home</a>
                        </li>

                         <li class="side_item">
                             <a href="fund?user=<?php echo $user; ?>" class="text-white">Fund Account</a>
                         </li>

                          <li class="side_item">
                              <a href="withdraw?user=<?php echo $user; ?>" class="text-white">Withdraw Funds</a>
                          </li>

                        

                           <li class="side_item">
                               <a href="Profile?user=<?php echo $user; ?>" class="text-white">My Profile</a>
                           </li>

                            <!--<li class="side_item">-->
                            <!--    <a href="referral?user=<//?//php echo $user; ?>" class="text-white">My Referrals</a>-->
                            <!--</li>-->

                          <li class="side_item">
                              <a href="verify?user=<?php echo $user; ?>" class="text-white">Verify Account</a>
                          </li>
                          
                          <!--<li class="side_item">-->
                          <!--    <a href="upgrade?user=<?php echo $user; ?>" class="text-white">Upgrade Plan</a>-->
                          <!--</li>-->

                          <li class="side_item">
                              <a href="https://coincheckings.com/Exfinance/index.php/logout.php" class="text-white">Logout</a>
                          </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>