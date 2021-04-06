<?php
session_start();
if(isset($_COOKIE['user'])) $user = $_COOKIE['user'];
if(isset($_SESSION['user'])) $user = $_SESSION['user'];
if(!isset($user)){
//echo "Unauthorized access. Please <a href='login.php'>Login</a>";
        $state = '<div class="col-md-3 col-lg-3">
              <ul class="unstyled user">
                <li class="sign-in">
                  <a
                    href="login.php"
                    class="btn btn-primary"
                    ><i class="fa fa-user"></i> sign in</a
                  >
                </li>
                <li class="sign-up">
                  <a
                    href="register.php"
                    class="btn btn-primary"
                    ><i class="fa fa-user-plus"></i>
                    register</a
                  >
                </li>
              </ul>
            </div>';
            
            $disabled = ' <a
                    class="btn btn-primary"
                    href="register.php"
                    >Register Now</a
                  >';
} else{
    
     $state = '<div class="col-md-3 col-lg-3">
              <ul class="unstyled user">
                
                <li class="sign-up">
                  <a
                    href="logout.php"
                    class="btn btn-primary"
                    ><i class="fa fa-user-plus"></i>
                    Logout</a
                  >
                </li>
              </ul>
            </div>';
            
            $disabled = '';
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>CoinCheckings - SECURED FOREX TRADING, BINARY TRADING BROKER</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <meta
      name="description"
      content="SECURED FOREX TRADING, BINARY TRADING BROKER"
    />

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/coin.png" />

    <!-- Template CSS Files -->
    <link
      rel="stylesheet"
      href="css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/skins/orange.css" />

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>
  </head>

  <body>
    <!-- SVG Preloader Starts -->
    <div id="preloader">
      <div id="preloader-content">
        <svg
          version="1.1"
          id="Layer_1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          width="150px"
          height="150px"
          viewBox="100 100 400 400"
          xml:space="preserve"
        >
          <filter id="dropshadow" height="130%">
            <feGaussianBlur
              in="SourceAlpha"
              stdDeviation="5"
            />
            <feOffset dx="0" dy="0" result="offsetblur" />
            <feFlood flood-color="red" />
            <feComposite in2="offsetblur" operator="in" />
            <feMerge>
              <feMergeNode />
              <feMergeNode in="SourceGraphic" />
            </feMerge>
          </filter>
          <path
            class="path"
            fill="#000000"
            d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z"
          />
        </svg>
      </div>
    </div>
    <!-- SVG Preloader Ends -->

    <!-- Wrapper Starts -->
    <div class="wrapper">
      <!-- Header Starts -->
      <header class="header">
        <div class="container">
          <div class="row">
            <!-- Logo Starts -->
            <div
              class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs"
            >
              <a href="index.php">
                <img
                  id="logo"
                  class="img-responsive"
                  src="images/coin.png"
                  alt="logo"
                />
              </a>
            </div>
            <!-- Logo Ends -->
            <!-- Statistics Starts -->
                  <!-- Statistics Starts -->
                    <div class="col-md-7 col-lg-7">
                        <ul class="unstyled bitcoin-stats text-center">
                            <li>
                                <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                                <span>Live Bitcoin price</span>
							</li>
                        </ul>
                    </div>
                    <!-- Statistics Ends -->
            <!-- Statistics Ends -->
            <!-- User Sign In/Sign Up Starts -->
            <?php echo $state; ?>
            <!-- User Sign In/Sign Up Ends -->
          </div>
        </div>
        <!-- Navigation Menu Starts -->
        <nav
          class="site-navigation navigation"
          id="site-navigation"
        >
          <div class="container">
            <div class="site-nav-inner">
              <!-- Logo For ONLY Mobile display Starts -->
              <a class="logo-mobile" href="index.php">
                <img
                  id="logo-mobile"
                  class="img-responsive"
                  src="images/coin.png"
                  alt=""
                />
              </a>
              <!-- Logo For ONLY Mobile display Ends -->
              <!-- Toggle Icon for Mobile Starts -->
              <button
                type="button"
                class="navbar-toggle"
                data-toggle="collapse"
                data-target=".navbar-collapse"
              >
                <span class="sr-only"
                  >Toggle navigation</span
                >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- Toggle Icon for Mobile Ends -->
              <div
                class="collapse navbar-collapse navbar-responsive-collapse"
              >
                <!-- Main Menu Starts -->
                <ul class="nav navbar-nav">
                  <li class="active">
                    <a href="index.php">Home</a>
                  </li>
                  <li><a href="about.php">About Us</a></li>
                  <li>
                    <a href="contact.php">Contact</a>
                  </li>

                </ul>
                <!-- Main Menu Ends -->
              </div>
            </div>
          </div>
        </nav>
        <!-- Navigation Menu Ends -->
      </header>
      <!-- Header Ends -->
<iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22title%22%3A%22S%26P%20500%22%2C%22proName%22%3A%22OANDA%3ASPX500USD%22%7D%2C%7B%22title%22%3A%22Nasdaq%20100%22%2C%22proName%22%3A%22OANDA%3ANAS100USD%22%7D%2C%7B%22title%22%3A%22EUR%2FUSD%22%2C%22proName%22%3A%22FX_IDC%3AEURUSD%22%7D%2C%7B%22title%22%3A%22BTC%2FUSD%22%2C%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%7D%2C%7B%22title%22%3A%22ETH%2FUSD%22%2C%22proName%22%3A%22BITSTAMP%3AETHUSD%22%7D%5D%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Atrue%2C%22displayMode%22%3A%22adaptive%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A44%2C%22utm_source%22%3A%22coinbitory.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%7D" style="box-sizing: border-box; height: 70px; width: 100%;"></iframe>

  <div class='text-center' id="google_translate_element"></div>

  <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
