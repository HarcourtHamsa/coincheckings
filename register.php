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
} else{
    
     header("Location: https://coincheckings.com/Exfinance/User_area/html/user/dashboard.php");
}

?>
<?php $db_conx = mysqli_connect("localhost", "biztusct_onlinetrade", "onlinetrade", "biztusct_onlinetrade");?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Register - Coincheckings Bitcoin Crypto Currency Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/coin.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skins/orange.css">

	<!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>

</head>

<body class="auth-page">
    <!-- SVG Preloader Starts -->
    <div id="preloader">
        <div id="preloader-content">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">
                <filter id="dropshadow" height="130%">
                <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                <feOffset dx="0" dy="0" result="offsetblur"/>
                <feFlood flood-color="red"/>
                <feComposite in2="offsetblur" operator="in"/>
                <feMerge>
                <feMergeNode/>
                <feMergeNode in="SourceGraphic"/>
                </feMerge>
                </filter>
                <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z"/>
            </svg>
        </div>
    </div>
    <!-- SVG Preloader Ends -->
	<!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a id="orange-css" href="#" title="orange" class="color"><img src="images/styleswitcher/colors/orange.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a id="green-css" href="#" title="green" class="color"><img src="images/styleswitcher/colors/green.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a id="blue-css" href="#" title="blue" class="color"><img src="images/styleswitcher/colors/blue.png" alt="" width="30" height="30" /></a>
                </li>
            </ul>

            <p>BODY SKIN</p>

			<label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked" /> Dark</label>
            <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" /> Light</label>

            <hr />

            <p>LAYOUT STYLE</p>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>

            <hr />

            <a href="#" class="custom-button purchase">Purchase</a>
            <div id="hideSwitcher">&times;</div>

        </div>
    </div>
    <!--<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>-->
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <div class="container-fluid user-auth">
			<div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
				<!-- Logo Starts -->
				<a class="logo" href="index.php">
					<img id="logo-user" class="img-responsive" src="images/coin.png" alt="logo">
				</a>
				<!-- Logo Ends -->
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<!-- Logo Starts -->
				<a class="visible-xs" href="index.php">
					<img id="logo" class="img-responsive mobile-logo" src="images/coin.png" alt="logo">
				</a>
				<!-- Logo Ends -->
				<div class="form-container">
					<div>
						<!-- Section Title Starts -->
						<div class="row text-center">
							<h2 class="title-head hidden-xs">get <span>started</span></h2>
						</div>
						<!-- Section Title Ends -->
						<!-- Form Starts -->
						<form method="post" action="">
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="name" id="name" placeholder="NAME" type="text" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="phone" id="phone" placeholder="PHONE NUMBER" type="text" required>
							</div>
								<div class="form-group">
								<select id="accountType" name="accountType" class="form-control">
									<option value="">CHOOSE ACCOUNT TYPE</option>
                                <option value="classic">CLASSIC - $300</option>
								<option value="standard">STANDARD - $1000</option>
								<option value="premium">PREMIUM - $5000</option>
								<option value="vip">VIP - $10000</option>
								<option value="others">others</option>
								</select>
							</div>
							<!-- Input Field Ends -->
								<!-- Input Field Starts -->
							<div class="form-group">
								<select id="country" name="country" class="form-control">
									<option value="">CHOOSE YOUR COUNTRY</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<!-- <div class="form-group">
								<input class="form-control" name="email" id="gender" placeholder="GENDER" type="email" required>
							</div> -->
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
								<select id="currency" name="currency" class="form-control">
									<option value="">SELECT CURRENCY</option>
                                <option value="AFA">Afghan Afghani</option>
    <option value="ALL">Albanian Lek</option>
    <option value="DZD">Algerian Dinar</option>
    <option value="AOA">Angolan Kwanza</option>
    <option value="ARS">Argentine Peso</option>
    <option value="AMD">Armenian Dram</option>
    <option value="AWG">Aruban Florin</option>
    <option value="AUD">Australian Dollar</option>
    <option value="AZN">Azerbaijani Manat</option>
    <option value="BSD">Bahamian Dollar</option>
    <option value="BHD">Bahraini Dinar</option>
    <option value="BDT">Bangladeshi Taka</option>
    <option value="BBD">Barbadian Dollar</option>
    <option value="BYR">Belarusian Ruble</option>
    <option value="BEF">Belgian Franc</option>
    <option value="BZD">Belize Dollar</option>
    <option value="BMD">Bermudan Dollar</option>
    <option value="BTN">Bhutanese Ngultrum</option>
    <option value="BTC">Bitcoin</option>
    <option value="BOB">Bolivian Boliviano</option>
    <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
    <option value="BWP">Botswanan Pula</option>
    <option value="BRL">Brazilian Real</option>
    <option value="GBP">British Pound Sterling</option>
    <option value="BND">Brunei Dollar</option>
    <option value="BGN">Bulgarian Lev</option>
    <option value="BIF">Burundian Franc</option>
    <option value="KHR">Cambodian Riel</option>
    <option value="CAD">Canadian Dollar</option>
    <option value="CVE">Cape Verdean Escudo</option>
    <option value="KYD">Cayman Islands Dollar</option>
    <option value="XOF">CFA Franc BCEAO</option>
    <option value="XAF">CFA Franc BEAC</option>
    <option value="XPF">CFP Franc</option>
    <option value="CLP">Chilean Peso</option>
    <option value="CNY">Chinese Yuan</option>
    <option value="COP">Colombian Peso</option>
    <option value="KMF">Comorian Franc</option>
    <option value="CDF">Congolese Franc</option>
    <option value="CRC">Costa Rican ColÃ³n</option>
    <option value="HRK">Croatian Kuna</option>
    <option value="CUC">Cuban Convertible Peso</option>
    <option value="CZK">Czech Republic Koruna</option>
    <option value="DKK">Danish Krone</option>
    <option value="DJF">Djiboutian Franc</option>
    <option value="DOP">Dominican Peso</option>
    <option value="XCD">East Caribbean Dollar</option>
    <option value="EGP">Egyptian Pound</option>
    <option value="ERN">Eritrean Nakfa</option>
    <option value="EEK">Estonian Kroon</option>
    <option value="ETB">Ethiopian Birr</option>
    <option value="EUR">Euro</option>
    <option value="FKP">Falkland Islands Pound</option>
    <option value="FJD">Fijian Dollar</option>
    <option value="GMD">Gambian Dalasi</option>
    <option value="GEL">Georgian Lari</option>
    <option value="DEM">German Mark</option>
    <option value="GHS">Ghanaian Cedi</option>
    <option value="GIP">Gibraltar Pound</option>
    <option value="GRD">Greek Drachma</option>
    <option value="GTQ">Guatemalan Quetzal</option>
    <option value="GNF">Guinean Franc</option>
    <option value="GYD">Guyanaese Dollar</option>
    <option value="HTG">Haitian Gourde</option>
    <option value="HNL">Honduran Lempira</option>
    <option value="HKD">Hong Kong Dollar</option>
    <option value="HUF">Hungarian Forint</option>
    <option value="ISK">Icelandic KrÃ³na</option>
    <option value="INR">Indian Rupee</option>
    <option value="IDR">Indonesian Rupiah</option>
    <option value="IRR">Iranian Rial</option>
    <option value="IQD">Iraqi Dinar</option>
    <option value="ILS">Israeli New Sheqel</option>
    <option value="ITL">Italian Lira</option>
    <option value="JMD">Jamaican Dollar</option>
    <option value="JPY">Japanese Yen</option>
    <option value="JOD">Jordanian Dinar</option>
    <option value="KZT">Kazakhstani Tenge</option>
    <option value="KES">Kenyan Shilling</option>
    <option value="KWD">Kuwaiti Dinar</option>
    <option value="KGS">Kyrgystani Som</option>
    <option value="LAK">Laotian Kip</option>
    <option value="LVL">Latvian Lats</option>
    <option value="LBP">Lebanese Pound</option>
    <option value="LSL">Lesotho Loti</option>
    <option value="LRD">Liberian Dollar</option>
    <option value="LYD">Libyan Dinar</option>
    <option value="LTL">Lithuanian Litas</option>
    <option value="MOP">Macanese Pataca</option>
    <option value="MKD">Macedonian Denar</option>
    <option value="MGA">Malagasy Ariary</option>
    <option value="MWK">Malawian Kwacha</option>
    <option value="MYR">Malaysian Ringgit</option>
    <option value="MVR">Maldivian Rufiyaa</option>
    <option value="MRO">Mauritanian Ouguiya</option>
    <option value="MUR">Mauritian Rupee</option>
    <option value="MXN">Mexican Peso</option>
    <option value="MDL">Moldovan Leu</option>
    <option value="MNT">Mongolian Tugrik</option>
    <option value="MAD">Moroccan Dirham</option>
    <option value="MZM">Mozambican Metical</option>
    <option value="MMK">Myanmar Kyat</option>
    <option value="NAD">Namibian Dollar</option>
    <option value="NPR">Nepalese Rupee</option>
    <option value="ANG">Netherlands Antillean Guilder</option>
    <option value="TWD">New Taiwan Dollar</option>
    <option value="NZD">New Zealand Dollar</option>
    <option value="NIO">Nicaraguan CÃ³rdoba</option>
    <option value="NGN">Nigerian Naira</option>
    <option value="KPW">North Korean Won</option>
    <option value="NOK">Norwegian Krone</option>
    <option value="OMR">Omani Rial</option>
    <option value="PKR">Pakistani Rupee</option>
    <option value="PAB">Panamanian Balboa</option>
    <option value="PGK">Papua New Guinean Kina</option>
    <option value="PYG">Paraguayan Guarani</option>
    <option value="PEN">Peruvian Nuevo Sol</option>
    <option value="PHP">Philippine Peso</option>
    <option value="PLN">Polish Zloty</option>
    <option value="QAR">Qatari Rial</option>
    <option value="RON">Romanian Leu</option>
    <option value="RUB">Russian Ruble</option>
    <option value="RWF">Rwandan Franc</option>
    <option value="SVC">Salvadoran ColÃ³n</option>
    <option value="WST">Samoan Tala</option>
    <option value="SAR">Saudi Riyal</option>
    <option value="RSD">Serbian Dinar</option>
    <option value="SCR">Seychellois Rupee</option>
    <option value="SLL">Sierra Leonean Leone</option>
    <option value="SGD">Singapore Dollar</option>
    <option value="SKK">Slovak Koruna</option>
    <option value="SBD">Solomon Islands Dollar</option>
    <option value="SOS">Somali Shilling</option>
    <option value="ZAR">South African Rand</option>
    <option value="KRW">South Korean Won</option>
    <option value="XDR">Special Drawing Rights</option>
    <option value="LKR">Sri Lankan Rupee</option>
    <option value="SHP">St. Helena Pound</option>
    <option value="SDG">Sudanese Pound</option>
    <option value="SRD">Surinamese Dollar</option>
    <option value="SZL">Swazi Lilangeni</option>
    <option value="SEK">Swedish Krona</option>
    <option value="CHF">Swiss Franc</option>
    <option value="SYP">Syrian Pound</option>
    <option value="STD">São Tomé and Príncipe Dobra</option>
    <option value="TJS">Tajikistani Somoni</option>
    <option value="TZS">Tanzanian Shilling</option>
    <option value="THB">Thai Baht</option>
    <option value="TOP">Tongan pa'anga</option>
    <option value="TTD">Trinidad & Tobago Dollar</option>
    <option value="TND">Tunisian Dinar</option>
    <option value="TRY">Turkish Lira</option>
    <option value="TMT">Turkmenistani Manat</option>
    <option value="UGX">Ugandan Shilling</option>
    <option value="UAH">Ukrainian Hryvnia</option>
    <option value="UYU">Uruguayan Peso</option>
    <option value="USD">US Dollar</option>
    <option value="UZS">Uzbekistan Som</option>
    <option value="VUV">Vanuatu Vatu</option>
    <option value="VEF">Venezuelan BolÃvar</option>
    <option value="VND">Vietnamese Dong</option>
    <option value="YER">Yemeni Rial</option>
    <option value="ZMK">Zambian Kwacha</option>
								</select>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button class="btn btn-primary" type="submit" name="submit">create account</button>
								<p class="text-center">already have an account ? <a href="login.php"> Login</a>
									</p>
							</div>
							<!-- Submit Form Button Ends -->
						</form>
						<!-- Form Ends -->
					</div>
				</div>
				<!-- Copyright Text Starts -->
				<p class="text-center copyright-text">Copyright © <script type="text/javascript">
  document.write(new Date().getFullYear());
</script> Coincheckings All Rights Reserved</p>
				<!-- Copyright Text Ends -->
			</div>
		</div>
        <!-- Template JS Files -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/custom.js"></script>

		<!-- Live Style Switcher JS File - only demo -->
		<script src="js/styleswitcher.js"></script>

    </div>
    <!-- Wrapper Ends -->
</body>


<!-- Mirrored from slimhamdi.net/Coincheckings/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 10:13:23 GMT -->
</html>

<?php

if (isset($_POST['submit'])) {
    # code...
    $firstname = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $type = $_POST['accountType'];
    $currency = $_POST['currency'];

    $check_mail = "SELECT email FROM users WHERE email = '$email'";
    $query_mail = mysqli_query($db_conx, $check_mail);
    $count = mysqli_num_rows($query_mail);
    if ($count < 1) {
        # code...

        $sql_insert = "INSERT INTO users (firstname, username, email, password, phone, country, type, currency, regdate) VALUES ('$firstname','$username', '$email', '$password', '$phone', '$country', '$type', '$currency', NOW())";
        $query_insert = mysqli_query($db_conx, $sql_insert);

        if ($query_insert == true) {
            # code...

            $them = 'coincheckings@gmail.com';
            //$them = 'innocentdestiny228@gmail.com';
            $emails = 'coincheckings@coincheckings.com';
            $subject = 'New User Registration';

            $to = $them;
            $from = $emails;
            $subject = $subject;
            $message = 'The user with the below detials just signed up<br/>
               name: ' . $firstname . '<br/>
               email: ' . $email . '<br/>
               phone: ' . $phone . '<br/>
               username: ' . $username . '<br/>
               country: ' . $country . '<br/>
               account type: ' . $type . '<br/>
               account type: ' . $currency . '<br/>';

            $headers = "From: $from\n";
            $headers .= "MIME-Version: 1.0\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\n";
            mail($to, $subject, $message, $headers);
            
        ///////////////////    
             //$them = 'okexfx@gmail.com';
            $them = $email;
            $emails = 'coincheckings@coincheckings.com';
            $subject = 'Welcome';

            $to = $them;
            $from = $emails;
            $subject = $subject;
            $message = '
            
          <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>

<body style="padding: 0; width: 100% !important; -webkit-text-size-adjust: 100%; margin: 0; -ms-text-size-adjust: 100%;"
    marginheight="0" marginwidth="0">
    <center>
        <table cellpadding="8" cellspacing="0" style="padding: 0; width: 100% !important; margin: 0;" border="0">
            <tr>
                <td valign="top">

                    <!-- HEADER -->
                    <table cellpadding="0" cellspacing="0" align="center" border="0">
                        <tr>
                            <td height="50"></td>
                        </tr>
                      
                        <tr>
                            <td height="24"></td>
                        </tr>
                        <tr>
                            <td style="padding: 0; border-collapse: collapse;">
                                <table cellpadding="0" cellspacing="0" align="center" border="0">
                                    <tr
                                        style="color: #919BA1; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; -webkit-text-size-adjust: none; line-height: 24px;">
                                        <td width="448" align="center">
                                            <img width="448px" height="142px"
                                                src="https://s3.amazonaws.com/robinpowered/email/assets/welcome-banner.png"
                                                alt="Welcome to Totalprofit" title="Welcome to Totalprofit" />
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="24"></td>
                        </tr>
                    </table>

                    <!-- END HEADER -->

                    <!-- BODY -->
                    <table cellpadding="0" cellspacing="0" border="0" align="center">
                        <tr>
                            <td width="400" style="padding: 0; border-collapse: collapse;">
                                <table cellpadding="0" cellspacing="0" align="center" border="0"
                                    style="text-align: center;">
                                    <tr>
                                        <td
                                            style="color: #32383e; font-size: 20px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; -webkit-text-size-adjust: none; line-height: 24px; font-weight: 600; padding-bottom: 6px;">
                                            Welcome to <a style="color: #00AEF3; text-decoration: none;"
                                                href="https://coincheckings.com">Coincheckings</a>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color: #525C66; font-size: 14px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; -webkit-text-size-adjust: none; line-height: 23px; padding-bottom: 18px;">
                                            We"re glad to have you.
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="20" style="padding: 0; border-collapse: collapse;">
                                <table cellpadding="0" cellspacing="0" align="center" border="0">
                                    <tr>
                                        <td width="72" align="center"
                                            style="border-top: 2px solid #eee; padding: 0 0 30px;">
                                            &nbsp;
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="400" style="padding: 0; border-collapse: collapse;">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td
                                            style="color: #32383e; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; -webkit-text-size-adjust: none; line-height: 19px; font-weight: 600; padding-bottom: 15px;">
                                          Hello, '.$firstname.'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color: #525C66; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; -webkit-text-size-adjust: none; line-height: 24px; padding-bottom: 18px;">
                                            welcome to Coincheckings, a system structured to ensure every active investor earns accordingly.
We promise to ensure almost free glitch system.
                                            <br />
                                            <br />
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="400" style="padding: 0; border-collapse: collapse;">
                                <table cellpadding="0" cellspacing="0" align="center" border="0">
                                    <tr height="34"></tr>
                                    <tr height="54">
                                        <td
                                            style="color: #525C66; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; -webkit-text-size-adjust: none;">
                                            <table border="0" cellpadding="0" cellspacing="0"
                                                style="background-color: #00AEF3; -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; margin-top: 34px;"
                                                align="center" valign="middle">
                                                <tr>
                                                    <td align="center" valign="middle"
                                                        style="padding: 18px 50px; text-align: center;">
                                                        <a style="color: #fff; text-decoration: none; display: inline-block;"
                                                            href="https://coincheckings.com/login.php">Verify</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                    <!-- FOOTER -->
                    <table cellpadding="0" cellspacing="0" align="center" border="0">
                        <tr>
                            <td height="50"></td>
                        </tr>
                        <tr>
                            <td height="33" style="padding: 0; border-collapse: collapse;">
                                <table cellpadding="0" cellspacing="0" align="center" border="0">
                                    <tr>
                                        <td width="400" align="center"
                                            style="border-top: 2px solid #eee; padding: 0 0 15px;">
                                            &nbsp;
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0; border-collapse: collapse;">
                                <table cellpadding="0" cellspacing="0" align="center" border="0">
                                    <tbody>
                                        <tr
                                            style="color: #919BA1; font-size: 11px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; -webkit-text-size-adjust: none; line-height: 15px;">
                                            <td align="center" height="33">
                                                ✨
                                            </td>
                                        </tr>
                                        <tr
                                            style="color: #919BA1; font-size: 11px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; -webkit-text-size-adjust: none; line-height: 17px;">
                                            <td width="400" align="center">
                                                © 2020 coincheckings Powered, Inc. <br />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>

                    <!-- END FOOTER -->
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
            
            ';

            $headers = "From: $from\n";
            $headers .= "MIME-Version: 1.0\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\n";
            mail($to, $subject, $message, $headers);
            
            

            echo "<script>alert('Signup Successful, please verify your email')</script>";
            //echo "<script>window.open('login.php','_self')</script>";
        }
    } else {

        echo "<script>alert('Sorry, this email already exists.')</script>";
        echo "<script>window.open('register.php','_self')</script>";
    }

}

?>