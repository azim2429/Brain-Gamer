<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="..\Images\circle-cropped.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Registration</title>
</head>

<body>
  <nav>
    <div class="logo"><a href="../Home/home_page.php">
        <img src="../Images/logo.png"></a>
    </div>
    </div>
    <div class="hamburger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
    <ul class="nav-links">
      <li><a href="../Home/home_page.php">Home</a></li>
      <li><a href="../Game/index.php">Our Games</a></li>
      <li><a href="../Your Stats/stats.php">Your Stats</a></li>
      <li><a href="..\Admin\enter_game.php">Insights</a></li>

      <form action="" method="POST">
        <a>
          <li><button name=logout class="login-button">Logout</button></li>
        </a>
      </form>
      <a href="..\Authentication\profile.php">
        <li><button class="join-button"><?php echo $_SESSION['uname'] ?></button></li>
      </a>
      <img class="uphoto" src="data:image/jpg;charset=utf8;base64,<?php echo $_SESSION['uphoto'] ?>" onerror="this.onerror=null;this.src='../Images/alt.png';" style="width: 5%;height:65%;border-radius:50%">

    </ul>
  </nav>
  <br><br><br><br><br><br>
  <?php
  include 'connect_db.php';
  $gamer_id =  $_SESSION['gamer_id'];
  $query = "select * from user_registration where gamer_id= $gamer_id";
  $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $row = mysqli_fetch_array($res);
  ?>
  <form id="formId" action="edit_profile.php" enctype="multipart/form-data" method="post">
    <div id="login" class="login">
      <div class="form">

        <div id="p_details">

          <h2>Personal Information</h2>

          <input type="text" value="<?php echo $row['fname'] ?>" name="fname" id="firstname">
          <span id="fname" style="color:red; font-weight:bold;"></span>
          <input type="text" name="lname" id="lastname" value="<?php echo $row['lname'] ?>">
          <span id="lname" style="color:red; font-weight:bold;"></span>
          <input type="text" name="email" id="email" value="<?php echo $row['email'] ?>">
          <span id="emailids" style="color:red; font-weight:bold;"></span>
          <input type="date" min="1979-12-31" max="2010-12-31" name="bdate" id="birth_date" value="<?php echo $row['bdate'] ?>">
          <span id="bdates" style="color:red; font-weight:bold;"></span>
          <div class="button">
            <a style="color: white;" onclick="return p_validation()">Next</a>
          </div>


        </div>

        <div id="a_details">

          <h2>Account Information</h2>
          <input type="text" name="uname" value="<?php echo $row['uname'] ?>" id="username">
          <a class="check" onclick="user()" style="background:none;border:none;margin:1vh;"><i class="fa fa-gamepad" style="cursor: pointer;"> Generate username</i></a>
          <span id="user" style="color:red; font-weight:bold;"></span><br><br>
          <label for="country">Choose Country</label>
          <select id="country" name="country" name="countrylist">
            <option data-countryCode="EC" value=""><?php echo $row['country'] ?></option>
            <option data-countryCode="DZ" value="Algeria">Algeria</option>
            <option data-countryCode="AD" value="Andorra">Andorra</option>
            <option data-countryCode="AO" value="244">Angola</option>
            <option data-countryCode="AI" value="1264">Anguilla</option>
            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda</option>
            <option data-countryCode="AR" value="54">Argentina</option>
            <option data-countryCode="AM" value="374">Armenia</option>
            <option data-countryCode="AW" value="297">Aruba</option>
            <option data-countryCode="AU" value="61">Australia</option>
            <option data-countryCode="AT" value="43">Austria</option>
            <option data-countryCode="AZ" value="994">Azerbaijan</option>
            <option data-countryCode="BS" value="1242">Bahamas</option>
            <option data-countryCode="BH" value="973">Bahrain </option>
            <option data-countryCode="BD" value="880">Bangladesh </option>
            <option data-countryCode="BB" value="1246">Barbados </option>
            <option data-countryCode="BY" value="375">Belarus</option>
            <option data-countryCode="BE" value="32">Belgium</option>
            <option data-countryCode="BZ" value="501">Belize </option>
            <option data-countryCode="BJ" value="229">Benin </option>
            <option data-countryCode="BM" value="1441">Bermuda </option>
            <option data-countryCode="BT" value="975">Bhutan </option>
            <option data-countryCode="BO" value="591">Bolivia </option>
            <option data-countryCode="BA" value="387">Bosnia Herzegovina </option>
            <option data-countryCode="BW" value="267">Botswana </option>
            <option data-countryCode="BR" value="55">Brazil </option>
            <option data-countryCode="BN" value="673">Brunei </option>
            <option data-countryCode="BG" value="359">Bulgaria </option>
            <option data-countryCode="BF" value="226">Burkina Faso </option>
            <option data-countryCode="BI" value="257">Burundi </option>
            <option data-countryCode="KH" value="855">Cambodia </option>
            <option data-countryCode="CM" value="237">Cameroon </option>
            <option data-countryCode="CA" value="1">Canada </option>
            <option data-countryCode="CV" value="238">Cape Verde Islands</option>
            <option data-countryCode="KY" value="1345">Cayman Islands </option>
            <option data-countryCode="CF" value="236">Central African Republic </option>
            <option data-countryCode="CL" value="56">Chile </option>
            <option data-countryCode="CN" value="86">China </option>
            <option data-countryCode="CO" value="57">Colombia </option>
            <option data-countryCode="KM" value="269">Comoros </option>
            <option data-countryCode="CG" value="242">Congo </option>
            <option data-countryCode="CK" value="682">Cook Islands </option>
            <option data-countryCode="CR" value="506">Costa Rica </option>
            <option data-countryCode="HR" value="385">Croatia </option>
            <option data-countryCode="CU" value="53">Cuba </option>
            <option data-countryCode="CY" value="90392">Cyprus North </option>
            <option data-countryCode="CY" value="357">Cyprus South </option>
            <option data-countryCode="CZ" value="42">Czech Republic (</option>
            <option data-countryCode="DK" value="45">Denmark </option>
            <option data-countryCode="DJ" value="253">Djibouti </option>
            <option data-countryCode="DM" value="1809">Dominica </option>
            <option data-countryCode="DO" value="1809">Dominican Republic </option>
            <option data-countryCode="EC" value="593">Ecuador </option>
            <option data-countryCode="EG" value="20">Egypt </option>
            <option data-countryCode="SV" value="503">El Salvador</option>
            <option data-countryCode="GQ" value="240">Equatorial Guinea </option>
            <option data-countryCode="ER" value="291">Eritrea </option>
            <option data-countryCode="EE" value="372">Estonia </option>
            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
            <option data-countryCode="FI" value="358">Finland (+358)</option>
            <option data-countryCode="FR" value="33">France (+33)</option>
            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
            <option data-countryCode="GA" value="241">Gabon (+241)</option>
            <option data-countryCode="GM" value="220">Gambia (+220)</option>
            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
            <option data-countryCode="DE" value="49">Germany (+49)</option>
            <option data-countryCode="GH" value="233">Ghana (+233)</option>
            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
            <option data-countryCode="GR" value="30">Greece (+30)</option>
            <option data-countryCode="GL" value="299">Greenland (+299)</option>
            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
            <option data-countryCode="GU" value="671">Guam (+671)</option>
            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
            <option data-countryCode="GN" value="224">Guinea (+224)</option>
            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
            <option data-countryCode="GY" value="592">Guyana (+592)</option>
            <option data-countryCode="HT" value="509">Haiti (+509)</option>
            <option data-countryCode="HN" value="504">Honduras (+504)</option>
            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
            <option data-countryCode="HU" value="36">Hungary (+36)</option>
            <option data-countryCode="IS" value="354">Iceland (+354)</option>
            <option data-countryCode="IN" value="91">India (+91)</option>
            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
            <option data-countryCode="IR" value="98">Iran (+98)</option>
            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
            <option data-countryCode="IE" value="353">Ireland (+353)</option>
            <option data-countryCode="IL" value="972">Israel (+972)</option>
            <option data-countryCode="IT" value="39">Italy (+39)</option>
            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
            <option data-countryCode="JP" value="81">Japan (+81)</option>
            <option data-countryCode="JO" value="962">Jordan (+962)</option>
            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
            <option data-countryCode="KE" value="254">Kenya (+254)</option>
            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
            <option data-countryCode="KP" value="850">Korea North (+850)</option>
            <option data-countryCode="KR" value="82">Korea South (+82)</option>
            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
            <option data-countryCode="LA" value="856">Laos (+856)</option>
            <option data-countryCode="LV" value="371">Latvia (+371)</option>
            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
            <option data-countryCode="LR" value="231">Liberia (+231)</option>
            <option data-countryCode="LY" value="218">Libya (+218)</option>
            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
            <option data-countryCode="MO" value="853">Macao (+853)</option>
            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
            <option data-countryCode="MW" value="265">Malawi (+265)</option>
            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
            <option data-countryCode="MV" value="960">Maldives (+960)</option>
            <option data-countryCode="ML" value="223">Mali (+223)</option>
            <option data-countryCode="MT" value="356">Malta (+356)</option>
            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
            <option data-countryCode="MX" value="52">Mexico (+52)</option>
            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
            <option data-countryCode="MD" value="373">Moldova (+373)</option>
            <option data-countryCode="MC" value="377">Monaco (+377)</option>
            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
            <option data-countryCode="MA" value="212">Morocco (+212)</option>
            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
            <option data-countryCode="NA" value="264">Namibia (+264)</option>
            <option data-countryCode="NR" value="674">Nauru (+674)</option>
            <option data-countryCode="NP" value="977">Nepal (+977)</option>
            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
            <option data-countryCode="NE" value="227">Niger (+227)</option>
            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
            <option data-countryCode="NU" value="683">Niue (+683)</option>
            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
            <option data-countryCode="NO" value="47">Norway (+47)</option>
            <option data-countryCode="OM" value="968">Oman (+968)</option>
            <option data-countryCode="PW" value="680">Palau (+680)</option>
            <option data-countryCode="PA" value="507">Panama (+507)</option>
            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
            <option data-countryCode="PE" value="51">Peru (+51)</option>
            <option data-countryCode="PH" value="63">Philippines (+63)</option>
            <option data-countryCode="PL" value="48">Poland (+48)</option>
            <option data-countryCode="PT" value="351">Portugal (+351)</option>
            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
            <option data-countryCode="QA" value="974">Qatar (+974)</option>
            <option data-countryCode="RE" value="262">Reunion (+262)</option>
            <option data-countryCode="RO" value="40">Romania (+40)</option>
            <option data-countryCode="RU" value="7">Russia (+7)</option>
            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
            <option data-countryCode="SM" value="378">San Marino (+378)</option>
            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
            <option data-countryCode="SN" value="221">Senegal (+221)</option>
            <option data-countryCode="CS" value="381">Serbia (+381)</option>
            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
            <option data-countryCode="SG" value="65">Singapore (+65)</option>
            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
            <option data-countryCode="SO" value="252">Somalia (+252)</option>
            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
            <option data-countryCode="ES" value="34">Spain (+34)</option>
            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
            <option data-countryCode="SD" value="249">Sudan (+249)</option>
            <option data-countryCode="SR" value="597">Suriname (+597)</option>
            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
            <option data-countryCode="SE" value="46">Sweden (+46)</option>
            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
            <option data-countryCode="SI" value="963">Syria (+963)</option>
            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
            <option data-countryCode="TH" value="66">Thailand (+66)</option>
            <option data-countryCode="TG" value="228">Togo (+228)</option>
            <option data-countryCode="TO" value="676">Tonga (+676)</option>
            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
            <option data-countryCode="TR" value="90">Turkey (+90)</option>
            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
            <option data-countryCode="UG" value="256">Uganda (+256)</option>
            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
          </select>
          <input type="password" name="pass" id="password" value="<?php echo $row['pass'] ?>" disabled>
          <span id="pass" style="color:red; font-weight:bold;"></span>


          <div class="button">
            <a style="color: white;" onclick="return a_validation()">Next</a>
          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>
    <!-- <form id="formId" action="" enctype="multipart/form-data" method="post"> -->
    <div id="photo" class="photo">
      <br>
      <h2>Profile Photo</h2>

      <img id="blah" style="border-radius: 50%;margin:6rem 6rem 0 6rem;width:28vh;height:25vh" src="data:image/jpg;charset=utf8;base64,<?php echo $_SESSION['uphoto'] ?>" onerror="this.onerror=null;this.src='../Images/alt.png';"><br>
      <i onclick="done()" id="check" style="margin:1rem 6rem 4rem 11.5rem;font-size:2rem;cursor:pointer;display:none" class="fa fa-check"></i>
      <br><br>
      <a class="button2" style="margin-right:2rem;margin-left:5rem;" onclick="done()"><span id="skip">Skip</span></a>


      <a id="upload_button" style="margin-left:4rem;" class="button2"><label for="fusk">Upload</label></a>
      <input onchange="readURL(this);" id="fusk" type="file" name="uphoto" style="visibility: hidden;" accept=".png, .jpg, .jpeg">


    </div>

    <div id="done" class="photo">
      <br>
      <h2>Successfully Edited created</h2>
      <img style="border-radius: 50%;margin:4.5rem;width:60%" src="../Images/done.jpg">
      <div>
        <button class="button2" name="register" id="insert" style="padding-right: 1vh;border:none">Done</button>
      </div>
    </div>
  </form>
</body>
<script type="text/javascript">
  // $('#myform').submit(function(){
  // 	return false;
  // });
  // $('#insert').click(function(){
  // 	$.post(		
  // 		$('#myform').attr('action'),
  // 		$('#myform :input').serializeArray()
  // 	);
  // });
  // $('#formId' ).submit(
  //     function( e ) {
  //         $.ajax( {
  //             url: 'registration1.php',
  //             type: 'POST',
  //             data: new FormData( this ),
  //             processData: false,
  //             contentType: false,
  //             success: function(result){
  //                 console.log(result);
  //                 //$("#div1").html(str);
  //             }
  //         } );
  //         e.preventDefault();
  //     } 
  // );
  function p_validation() {
    var fname = document.getElementById('firstname').value;
    var lname = document.getElementById('lastname').value;

    var email = document.getElementById('email').value;
    var bdate = document.getElementById('birth_date').value;



    if (fname == "") {
      document.getElementById('fname').innerHTML = "**Please fill the First Name";
      return false;
    } else if (!isNaN(fname)) {
      document.getElementById('fname').innerHTML = "**Only character are allowed";
      return false;
    } else if ((fname.length <= 2) || (fname.length > 10)) {
      document.getElementById('fname').innerHTML = "**First Name must be between 3 and 10 characters";
      return false;
    } else {
      document.getElementById('fname').innerHTML = "";
    }

    if (lname == "") {
      document.getElementById('lname').innerHTML = "**Please fill the Last Name";
      return false;
    } else if ((lname.length <= 2) || (lname.length > 10)) {
      document.getElementById('lname').innerHTML = "**Last Name must be between 3 and 10 characters";
      return false;
    } else if (!isNaN(lname)) {
      document.getElementById('lname').innerHTML = "**Only character are allowed";
      return false;
    } else {
      document.getElementById('lname').innerHTML = "";
    }

    if (email == "") {
      document.getElementById('emailids').innerHTML = "**Please fill the Email field";
      return false;
    } else if (email.indexOf('@') <= 0) {
      document.getElementById('emailids').innerHTML = "**Invalid @ position";
      return false;
    } else if ((email.charAt(email.length - 4) != '.') && (email.charAt(email.length - 3) != '.')) {
      document.getElementById('emailids').innerHTML = "**Invalid . position";
      return false;
    } else {
      document.getElementById('emailids').innerHTML = "";
    }
    if (bdate == "") {
      document.getElementById('bdates').innerHTML = "**Please fill Your Birthday";
      return false;
    } else {
      $(document).ready(function() {
        setTimeout(function() {
          $('#all_time').fadeIn(500);
        }, 200);
      });
      document.getElementById('a_details').style.display = "block";
      document.getElementById('p_details').style.display = "none";
    }
  }

  function a_validation() {

    document.getElementById('a_details').style.display = "none";
    document.getElementById('login').style.display = "none";
    document.getElementById('done').style.display = "block";



    //     if (pass == "") {
    //       document.getElementById('pass').innerHTML = "**Please fill the password";
    //       return false;
    //     } else if ((pass.length < 5) || (pass.length > 20)) {
    //       document.getElementById('pass').innerHTML = "**Password length ,must be between 5 and 20 characters";
    //       return false;
    //     } else if (!passw.test(pass)) {
    //       document.getElementById('pass').innerHTML = "**Password must contain at least one number ,one uppercase and lowercase letter";
    //       return false;
    //     } else {
    //       document.getElementById('pass').innerHTML = ""
    //     }


    //     if (pass != cpass) {
    //       document.getElementById('cpass').innerHTML = "**Password are not matching";
    //       return false;
    //     } else if (cpass == "") {
    //       document.getElementById('cpass').innerHTML = "**Please fill the Confirm Password ";
    //       return false;
    //     } else {
    //       document.getElementById('cpass').innerHTML = "";
    //       $(document).ready(function () {
    //     setTimeout(function(){
    //         $('#all_time').fadeIn(500);
    //     }, 200);
    // });

    //     }
  }
  const hamburger = document.querySelector(".hamburger");
  const navLinks = document.querySelector(".nav-links");
  const links = document.querySelectorAll(".nav-links li");

  hamburger.addEventListener('click', () => {
    //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
      link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
  });

  function done() {
    $(document).ready(function() {
      setTimeout(function() {
        $('#all_time').fadeIn(500);
      }, 200);
    });
    document.getElementById('photo').style.display = 'none';
    document.getElementById('done').style.display = 'block';
  }

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#blah')
          .attr('src', e.target.result);
      };

      reader.readAsDataURL(input.files[0]);
      document.getElementById('check').style.display = 'block';
      document.getElementById('skip').innerHTML = "Next";
    }
  }
  var nameList = [
    'Time', 'Past', 'Future', 'Dev',
    'Fly', 'Flying', 'Soar', 'Soaring', 'Power', 'Falling',
    'Fall', 'Jump', 'Cliff', 'Mountain', 'Rend', 'Red', 'Blue',
    'Green', 'Yellow', 'Gold', 'Demon', 'Demonic', 'Panda', 'Cat',
    'Kitty', 'Kitten', 'Zero', 'Memory', 'Trooper', 'XX', 'Bandit',
    'Fear', 'Light', 'Glow', 'Tread', 'Deep', 'Deeper', 'Deepest',
    'Mine', 'Your', 'Worst', 'Enemy', 'Hostile', 'Force', 'Video',
    'Game', 'Donkey', 'Mule', 'Colt', 'Cult', 'Cultist', 'Magnum',
    'Gun', 'Assault', 'Recon', 'Trap', 'Trapper', 'Redeem', 'Code',
    'Script', 'Writer', 'Near', 'Close', 'Open', 'Cube', 'Circle',
    'Geo', 'Genome', 'Germ', 'Spaz', 'Shot', 'Echo', 'Beta', 'Alpha',
    'Gamma', 'Omega', 'Seal', 'Squid', 'Money', 'Cash', 'Lord', 'King',
    'Duke', 'Rest', 'Fire', 'Flame', 'Morrow', 'Break', 'Breaker', 'Numb',
    'Ice', 'Cold', 'Rotten', 'Sick', 'Sickly', 'Janitor', 'Camel', 'Rooster',
    'Sand', 'Desert', 'Dessert', 'Hurdle', 'Racer', 'Eraser', 'Erase', 'Big',
    'Small', 'Short', 'Tall', 'Sith', 'Bounty', 'Hunter', 'Cracked', 'Broken',
    'Sad', 'Happy', 'Joy', 'Joyful', 'Crimson', 'Destiny', 'Deceit', 'Lies',
    'Lie', 'Honest', 'Destined', 'Bloxxer', 'Hawk', 'Eagle', 'Hawker', 'Walker',
    'Zombie', 'Sarge', 'Capt', 'Captain', 'Punch', 'One', 'Two', 'Uno', 'Slice',
    'Slash', 'Melt', 'Melted', 'Melting', 'Fell', 'Wolf', 'Hound',
    'Legacy', 'Sharp', 'Dead', 'Mew', 'Chuckle', 'Bubba', 'Bubble', 'Sandwich', 'Smasher', 'Extreme', 'Multi', 'Universe', 'Ultimate', 'Death', 'Ready', 'Monkey', 'Elevator', 'Wrench', 'Grease', 'Head', 'Theme', 'Grand', 'Cool', 'Kid', 'Boy', 'Girl', 'Vortex', 'Paradox'
  ];
  var finalName = "";

  function user() {
    document.getElementById("username").value = randName();
  }

  function randName() {
    finalName = nameList[Math.floor(Math.random() * nameList.length)];
    finalName += nameList[Math.floor(Math.random() * nameList.length)];
    if (Math.random() > 0.5) {
      finalName += nameList[Math.floor(Math.random() * nameList.length)];
    }
    return finalName;
  };
</script>

</html>


<style>
  * {
    box-sizing: border-box;
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    color: #f2f5f7;
    scroll-behavior: smooth;
    letter-spacing: 1px;
  }

  .button {
    display: block;
    margin-top: 2rem;
    margin-left: 8rem;
    cursor: pointer;
    width: 25%;
    height: 5vh;
    position: relative;
    z-index: 1;
    overflow: hidden;
    font-size: 20px;
    font-weight: 300;
    letter-spacing: 2px;
    color: #ffffff;
    border-radius: 7px;
    padding-left: 3vh;
    padding-top: 0.7vh;
    box-shadow:
      0 0px 10px rgba(221, 160, 221, 0.25),
      0 0px 15px rgba(39, 39, 175, 0.418),
      0 0px 35px rgba(25, 25, 112, 0.55);
  }

  .fa:hover {
    color: gold;
  }


  .button::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 200%;
    background: linear-gradient(to bottom right, #191970, #DDA0DD);
    transition: transform 0.4s;
    z-index: -1;
    box-shadow:
      0 0px 10px rgba(221, 160, 221, 0.25),
      0 0px 15px rgba(39, 39, 175, 0.418),
      0 0px 35px rgba(25, 25, 112, 0.55);
  }

  .button:hover::before {
    transform: translateY(-20%);
  }

  .button2 {
    position: relative;
    z-index: 1;
    overflow: hidden;
    background: linear-gradient(to bottom right, #191970, #DDA0DD);
    transition: transform 0.4s;
    box-shadow:
      0 0px 10px rgba(221, 160, 221, 0.25),
      0 0px 15px rgba(39, 39, 175, 0.418),
      0 0px 35px rgba(25, 25, 112, 0.55);
    padding: 7px 7px;
    font-size: 20px;
    cursor: pointer;
    border-radius: 7px;
    width: 10vh;
    margin-left: 9rem;
  }

  .button2:hover {
    background: linear-gradient(to bottom right, #191990, #DDA0DD);
  }

  input[type=date]:required:invalid::-webkit-datetime-edit {
    color: transparent;
  }

  input[type=date]:focus::-webkit-datetime-edit {
    color: black !important;
  }

  .login {
    width: 400px;
    height: 550px;
    border: 1px solid #CCC;
    background: url(http://68.media.tumblr.com/2b27908fac782ca54cc2b3aff6862423/tumblr_mra3owkIhC1ro855no1_500.gif) center center no-repeat;
    background-size: cover;
    margin: 0px auto;
    border-radius: 3px;

  }

  .login .form {
    width: 100%;
    height: 100%;
    padding: 15px 20px;
    ;
  }

  .login .form h2 {
    color: #FFF;
    text-align: center;
    font-weight: normal;
    font-size: 18px;
    margin-top: 80px;
    margin-bottom: 60px;
  }

  .login .form input,
  select {
    width: 100%;
    height: 40px;
    margin-top: 20px;
    background: rgba(255, 255, 255, .5);
    border: 1px solid rgba(255, 255, 255, .1);
    padding: 0 15px;
    color: #FFF;
    border-radius: 2px;
    font-size: 14px;
  }

  .login .form input:focus {
    border: 1px solid rgba(255, 255, 255, .8);
    outline: none;
  }

  .login .form select:focus {
    border: 1px solid rgba(255, 255, 255, .8);
    outline: none;
  }

  option {
    color: black;
  }

  ::-webkit-input-placeholder {
    color: #DDD;
  }

  .photo input.submit {
    background: rgba(255, 255, 255, .9);
    color: #444;
    font-size: 15px;

    margin-left: 8vh;
    font-weight: bold;
    padding: 1vh;
  }

  .photo {
    width: 400px;
    height: 550px;
    border: 1px solid #CCC;
    background: black;
    background-size: cover;
    margin: 0px auto;
    border-radius: 3px;

  }

  .photo h2 {
    color: #FFF;
    text-align: center;
    font-weight: normal;
    font-size: 18px;


  }

  @keyframes fadeOut {
    from {
      opacity: 0.8;
    }

    to {
      opacity: 1;
    }
  }

  #done,
  #photo {
    display: none;
    animation-name: fadeOut;
    animation-duration: 1s;
    animation-timing-function: linear;
  }

  #a_details {
    display: none;
    animation-name: fadeOut;
    animation-duration: 1s;
    animation-timing-function: linear;
  }

  #logo_dark {
    display: none;
  }

  #logo_light {
    display: block;
  }

  body {
    overflow-x: hidden;
  }

  nav {
    height: 6rem;
    width: 100vw;
    background-color: black;
    box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
    display: flex;
    position: fixed;
    z-index: 1;
    opacity: 1;
    font-family: Impact, Charcoal, sans-serif;

  }

  a {
    font-size: 20px;
    font-family: Impact, Charcoal, sans-serif;
  }

  .logo {
    padding: 1vh 1vw;
    text-align: center;
    opacity: 1;
  }

  .logo img {
    height: 4rem;
    width: 6rem;
  }


  .nav-links {
    display: flex;
    list-style: none;
    width: 88vw;
    padding: 0 0.7vw;
    justify-content: space-evenly;
    align-items: center;
    text-transform: uppercase;
  }

  .nav-links li a {
    text-decoration: none;
    margin: 0 0.7vw;
  }

  .nav-links li a:hover {
    color: #61DAFB;
  }

  .nav-links li {
    position: relative;
  }


  .login-button {
    background-color: transparent;
    border: 1.5px solid #f2f5f7;
    border-radius: 2em;
    padding: 0.6rem 0.8rem;
    margin-right: 4rem;
    font-size: 1rem;
    cursor: pointer;

  }

  .login-button:hover {
    color: #131418;
    background-color: #f2f5f7;
    border: 1.5px solid #f2f5f7;
    transition: all ease-in-out 350ms;
  }

  .join-button {
    color: #131418;
    background-color: #61DAFB;
    border: 1.5px solid #61DAFB;
    border-radius: 2em;
    padding: 0.6rem 0.8rem;
    font-size: 1rem;
    cursor: pointer;
  }

  .join-button:hover {
    color: #f2f5f7;
    background-color: transparent;
    border: 1.5px solid #f2f5f7;
    transition: all ease-in-out 350ms;
  }


  .hamburger div {
    width: 30px;
    height: 3px;
    background: #f2f5f7;
    margin: 5px;
    transition: all 0.3s ease;
  }

  .hamburger {
    display: none;
  }

  @media screen and (max-width: 720px) {
    nav {
      position: fixed;
      z-index: 3;
      opacity: 1;
    }

    .hamburger {
      display: block;
      position: absolute;
      cursor: pointer;
      right: 5%;
      top: 50%;
      transform: translate(-5%, -50%);
      z-index: 2;
      transition: all 0.7s ease;
    }

    .nav-links {
      position: fixed;
      background: #131418;
      height: 100vh;
      width: 100%;
      flex-direction: column;
      clip-path: circle(50px at 90% -20%);
      -webkit-clip-path: circle(50px at 90% -10%);
      transition: all 1s ease-out;
      pointer-events: none;
    }

    .nav-links.open {
      clip-path: circle(1000px at 90% -10%);
      -webkit-clip-path: circle(1000px at 90% -10%);
      pointer-events: all;
    }

    .nav-links li {
      opacity: 0;
    }

    .nav-links li:nth-child(1) {
      transition: all 0.5s ease 0.2s;
    }

    .login-button {
      margin-right: 0;

    }

    li.fade {
      opacity: 1;
    }
  }
</style>
<script>
  var mode = localStorage.getItem("mode");
  console.log(mode);

  if (mode == "day") {
    localStorage.setItem("mode1", "day");
    var mode1 = localStorage.getItem("mode1");
    console.log(mode1);
  }
  if (mode == "night") {

    document.body.style.backgroundColor = "#191970";

    localStorage.setItem("mode1", "night");
    var mode1 = localStorage.getItem("mode1");
    console.log(mode1);
  }
</script>