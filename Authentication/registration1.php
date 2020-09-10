<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="..\Images\circle-cropped.png" />
  <title>Registration</title>
</head>

<body>
  <nav>
    <div class="logo"><a href="../Home/home_page.php">
      <img src="../Images/logo.png"></a>
    </div>
    <div class="hamburger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
    <ul class="nav-links">

      <li><a href="login1.php"><button class="login-button">Already Have an Account?</button></a></li>

    </ul>

  </nav>
  <br><br><br><br><br><br>
  <div id="login" class="login">
    <div class="form">
      <div id="p_details">
        <form action="#">
          <h2>Personal Information</h2>
          <input type="text" name="firstname" id="firstname" placeholder="First Name">
          <span id="fname" style="color:red; font-weight:bold;"></span>
          <input type="text" name="lastname" id="lastname" placeholder="Last Name">
          <span id="lname" style="color:red; font-weight:bold;"></span>
          <input type="text" name="email" id="email" placeholder="Email">
          <span id="emailids" style="color:red; font-weight:bold;"></span>
          <input type="date" name="birth date" id="birth_date" placeholder="Birth Date">
          <span id="bdates" style="color:red; font-weight:bold;"></span>
          <div class="button">
            <a onclick="return p_validation()" herf="#">Next</a>
          </div>

        </form>
      </div>

      <div id="a_details">

        <h2>Account Information</h2>
        <input type="text" name="username" id="username" placeholder="Username">
        <span id="user" style="color:red; font-weight:bold;"></span>
        <input type="text" name="country" id="country" placeholder="Country">
        <input type="password" name="password" id="password" placeholder="Password">
        <span id="pass" style="color:red; font-weight:bold;"></span>
        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
        <span id="cpass" style="color:red; font-weight:bold;"></span>

        <div class="button">
          <a onclick="return a_validation()" herf="#">Next</a>
        </div>
      </div>


    </div>
  </div>

  <div id="photo" class="photo">
    <br>
    <h2>Profile Photo</h2>
    <img style="border-radius: 50%;margin:4.5rem" src="../Images/akhil.jpg">
    <button id="start_button" class="button2" >Skip For Now</button>
    <button id="start_button" class="button2"><label for="fusk">Upload</label></button>
    <input id="fusk" type="file" name="photo" style="display: none;">

  </div>
  </form>
</body>

<script type="text/javascript">
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
      document.getElementById('fname').innerHTML = "**First Name must be between 2 and 10 characters";
      return false;
    } else {
      document.getElementById('fname').innerHTML = "";
    }

    if (lname == "") {
      document.getElementById('lname').innerHTML = "**Please fill the Last Name";
      return false;
    } else if ((lname.length <= 2) || (lname.length > 10)) {
      document.getElementById('lname').innerHTML = "**Last Name must be between 2 and 10 characters";
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
      document.getElementById('a_details').style.display = "block";
      document.getElementById('p_details').style.display = "none";
    }
  }

  function a_validation() {
    var user = document.getElementById('username').value;
    var pass = document.getElementById('password').value;
    var cpass = document.getElementById('confirmpassword').value;
    if (user == "") {
      document.getElementById('user').innerHTML = "**Please fill the username";
      return false;
    } else if ((user.length <= 2) || (user.length > 20)) {
      document.getElementById('user').innerHTML = "**User length must be between 2 and 20 characters ";
      return false;
    } else {
      document.getElementById('user').innerHTML = "";
    }


    if (pass == "") {
      document.getElementById('pass').innerHTML = "**Please fill the password";
      return false;
    } else if ((pass.length < 5) || (pass.length > 20)) {
      document.getElementById('pass').innerHTML = "**Password length ,ust be between 5 and 20 characters";
      return false;
    } else {
      document.getElementById('pass').innerHTML = ""
    }

    if (pass != cpass) {
      document.getElementById('cpass').innerHTML = "**Password are not matching";
      return false;
    } else if (cpass == "") {
      document.getElementById('cpass').innerHTML = "**Please fill the Confirm Password ";
      return false;
    } else {
      document.getElementById('cpass').innerHTML = "";

      document.getElementById('photo').style.display = "block";
      document.getElementById('login').style.display = "none";


    }
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
    padding: 7px 7px;
    font-size: 20px;
    cursor: pointer;
    border-radius: 7px;
    
    margin-left: 3rem;
  }

  .button2:hover {
    transform: translateY(-20%);
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
    margin-top: 60px;
    margin-bottom: 80px;
  }

  .login .form input {
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

  #photo {
    display: none;
  }

  #a_details {
    display: none;
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
    height: 5rem;
    width: 100vw;
    background-color: black;
    box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
    display: flex;
    position: fixed;
    z-index: 1;
    opacity: 1;
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