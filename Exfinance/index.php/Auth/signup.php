     <?php $db_conx = mysqli_connect("localhost","biztusct_forex","You Can't Hack My Password@4510","biztusct_forex"); ?>
    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from OkExfinance /index.php/Auth/signup by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jun 2020 13:23:17 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <title>OkExfinance - Bitcoin | Binary | CFD Trading - 100x Leverage</title>
        </title>
        <meta name="description"
            content="OkExfinance allows you to actively trade most popular cryptocurrencies such as Bitcoin, Ethereum, Ripple, Litecoin and more, profit from market rallies and declines, or hedge your existing cryptocurrency holdings.">
        <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="apple-touch-icon" sizes="57x57"
            href="../../assets/home/assets/favicon/apple-icon-57x5721f621f6.png?rev=018374558bc9312c8d9d9cf39a563b4b">
        <link rel="apple-touch-icon" sizes="60x60"
            href="../../assets/home/assets/favicon/apple-icon-60x60e0aae0aa.png?rev=2436b17913edd87b02e0ca4d6beadb5c">
        <link rel="apple-touch-icon" sizes="72x72"
            href="../../assets/home/assets/favicon/apple-icon-72x72468f468f.png?rev=a19f8dc08da7c9b19346f23b70e32fde">
        <link rel="apple-touch-icon" sizes="76x76"
            href="../../assets/home/assets/favicon/apple-icon-76x76cd9acd9a.png?rev=8f997250e222a053c6b056ae9cb7b3df">
        <link rel="apple-touch-icon" sizes="114x114"
            href="../../assets/home/assets/favicon/apple-icon-114x1148ab98ab9.png?rev=b5a4abf2d4bbeea8f316acc36892d7a7">
        <link rel="apple-touch-icon" sizes="120x120"
            href="../../assets/home/assets/favicon/apple-icon-120x120eeedeeed.png?rev=8bb4ed421c20243309447d0a28a21cf7">
        <link rel="apple-touch-icon" sizes="144x144"
            href="../../assets/home/assets/favicon/apple-icon-144x144f5fbf5fb.png?rev=2800934bd5bf8b773322744034635ed0">
        <link rel="apple-touch-icon" sizes="152x152"
            href="../../assets/home/assets/favicon/apple-icon-152x152d199d199.png?rev=570cbe5be44997d7212810c6435396f4">
        <link rel="apple-touch-icon" sizes="180x180"
            href="../../assets/home/assets/favicon/apple-icon-180x180ea50ea50.png?rev=7880c3c7b53ecdb76f9116688c6a9a3f">
        <link rel="icon" type="image/png" sizes="192x192"
            href="../../assets/home/assets/favicon/android-icon-192x192c90fc90f.png?rev=b230148cd138aa0db2da49ed4aca2424">
        <link rel="icon" type="image/png" sizes="32x32"
            href="../../assets/home/assets/favicon/favicon-32x32beb5beb5.png?rev=efedfc83c04eab08a2e27b4b0bdb7993">
        <link rel="icon" type="image/png" sizes="96x96"
            href="../../assets/home/assets/favicon/favicon-96x967b407b40.png?rev=0bc6ec2dbb5a6a346062d4bc3eec4922">
        <link rel="icon" type="image/png" sizes="16x16"
            href="../../assets/home/assets/favicon/favicon-16x16a6f9a6f9.png?rev=5375b9cdd48f85de1a43bf3e3ae2f81c">
        <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            body {
                color: #fff;
                background: #3b5175;
                font-family: 'Roboto', sans-serif;
            }

            .form-control,
            .form-control:focus,
            .input-group-addon {
                border-color: #e1e1e1;
            }

            .form-control,
            .btn {
                border-radius: 3px;
            }

            .signup-form {
                width: 390px;
                margin: 0 auto;
                padding: 30px 0;
            }

            .signup-form form {
                color: #999;
                border-radius: 3px;
                margin-top: 8px;
                margin-bottom: 0px;
                background: #fff;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }

            .signup-form h2 {
                color: #333;
                font-weight: bold;
                margin-top: 0;
            }

            .signup-form hr {
                margin: 0 -30px 20px;
            }

            .signup-form .form-group {
                margin-bottom: 20px;
            }

            .signup-form label {
                font-weight: normal;
                font-size: 13px;
            }

            .signup-form .form-control {
                min-height: 38px;
                box-shadow: none !important;
            }

            .signup-form .input-group-addon {
                max-width: 42px;
                text-align: center;
            }

            .signup-form input[type="checkbox"] {
                margin-top: 2px;
            }

            .signup-form .btn {
                font-size: 16px;
                font-weight: bold;
                background: #19aa8d;
                border: none;
                min-width: 140px;
            }

            .signup-form .btn:hover,
            .signup-form .btn:focus {
                background: #179b81;
                outline: none;
            }

            .signup-form a {
                color: #fff;
                text-decoration: underline;
            }

            .signup-form a:hover {
                text-decoration: none;
            }

            .signup-form form a {
                color: #19aa8d;
                text-decoration: none;
            }

            .signup-form form a:hover {
                text-decoration: underline;
            }

            .signup-form .fa {
                font-size: 21px;
            }

            .signup-form .fa-paper-plane {
                font-size: 18px;
            }

            .signup-form .fa-check {
                color: #fff;
                left: 17px;
                top: 18px;
                font-size: 7px;
                position: absolute;
            }
        </style>
    </head>

    <body>
        <div class="signup-form">
            <div class="header__logo">
                <a href="http://okexfinance.net/">
                    Go Back Home
                </a>
            </div>
            <form action="" method="post">
                <input type="hidden" name="ci_csrf_token" value="" />
                <h2 class="text-center">Sign Up</h2>
                <p>Please fill in this form to create an account!</p>
                <hr>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="firstname" placeholder="Firstname" value=""
                            required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="lastname" placeholder="Lastname" value=""
                            required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Username" value=""
                            required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" value=""
                            required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" value=""
                            required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password"
                            required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
                        <input type="text" class="form-control" name="zip" placeholder="Zip Code [Optional]" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map"></i></span>
                        <select name="country" required class="form-control input-border" />
                        <option value="">Select Country *</option>
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Afghanistan">Afghanistan</option>
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
                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The
                        </option>
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
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of
                        </option>
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
                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
                            Republic of</option>
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
                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South
                            Sandwich Islands</option>
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
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                        </option>
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
                </div>
                
                
                
                
                
                
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-compress"></i></span>
                        <select name="type" required class="form-control input-border"/>
                        <option value="" selected>Account Type *</option>
                        <option value="Starter">Starter : $1500 - $9,900 (10% Monthly ROI)</option>
                        <option value="Platinum">Platinum : $10,000 - $59,000 (10% Monthly ROI)</option>
                        <option value="Bronze">Bronze : $60,000 - $150,000 (10% Monthly ROI)</option>
                        <option value="Gold">Gold : $151,000 - $500,000 (8% Monthly ROI)</option>
                        <option value="Diamond">Diamond : $510,000 - $2,000,000 (8% Monthly ROI)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        <select name="currency" required class="form-control input-border" />
                        <option value="">Account Currency *</option>
                        <option value="BTC"> Bitcoin</option>
                        <option value="ETH"> Etheruem</option>
                        <option value="LTC"> Litecoin</option>
                        <option value="RPL"> Ripple</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="checkbox-inline"><input type="checkbox" name="tos" checked required="required"> I
                        accept the <a href="../home/terms.html">Terms of Use</a> &amp; <a
                            href="../home/terns21ce.html?privacy">Privacy Policy</a></label>
                </div>
                <div class="form-group">
                    <button type="submit" name='submit' class="btn btn-primary btn-lg">Sign Up</button>
                </div>
            </form>
            <div class="text-center">Already have an account? <a href="https://okexfinance.net/Exfinance/index.php/signin.php">Login here</a></div>
        </div>
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
    </body>

    <!-- Mirrored from OkExfinance /index.php/Auth/signup by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jun 2020 13:23:19 GMT -->

    </html>

    <!-- Mirrored from OkExfinance /index.php/Auth/signup by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jun 2020 13:23:19 GMT -->
  <?php 

if (isset($_POST['submit'])) {
    # code...
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $zipcode = $_POST['zip'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $type = $_POST['type'];
    $currency = $_POST['currency'];

    $check_mail = "SELECT email FROM users WHERE email = '$email'";
    $query_mail = mysqli_query($db_conx, $check_mail);
    $count = mysqli_num_rows($query_mail);
    if ($count < 1) {
        # code...

    $sql_insert = "INSERT INTO users (firstname, lastname, username, email, password, zipcode, phone, country, type, currency, compound, regdate) VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$zipcode', '$phone', '$country', '$type', '$currency', '', NOW())";
    $query_insert = mysqli_query($db_conx, $sql_insert);

    if ($query_insert == TRUE) {
        # code...

               
             $them = 'okexfx@gmail.com';
             //$them = 'innocentdestiny228@gmail.com';
             $emails = 'contact@okexfinance.net'; 
             $subject = 'New User Registration';

               $to = $them;  
               $from = $emails;
               $subject = $subject;
               $message = 'The user with the below detials just signed up<br/>
               name: '.$firstname.' '.$lastname.'<br/>
               email: '.$email.'<br/>
               phone: '.$phone.'<br/>
               username: '.$username.'<br/>
               zipcode: '.$zipcode.'<br/>
               country: '.$country.'<br/>
               account type: '.$type.'<br/>
               account type: '.$currency.'<br/>';

               $headers = "From: $from\n";
                       $headers .= "MIME-Version: 1.0\n";
                       $headers .= "Content-type: text/html; charset=iso-8859-1\n";
               mail($to, $subject, $message, $headers);


          echo "<script>alert('Signup Successful')</script>";
          // echo "<script>window.open('http://localhost/Exfinance-master/Exfinance-master/Exfinance/User_area/html/user/dashboard?user=".$email."','_self')</script>";
    }
    } else {

        echo "<script>alert('Sorry, this email already exists.')</script>";
        echo "<script>window.open('signup','_self')</script>";
    }

}



?>                       