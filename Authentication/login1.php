<?php
session_start();
if (isset($_SESSION['fname'])) {
  header("Location:../Home/home_page.php");
}
?>
<?php include "..\Common\preloader.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="..\Images\circle-cropped.png" />
  <title>Login</title>
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

      <li><a href="registration1.php"><button class="login-button">Create an Account?</button></a></li>

    </ul>

  </nav>
  <br><br>
  <div class="login">
    <div class="form">
      <h2>Login</h2>
      <form action="login1.php" method="POST">
        <input type="text" name="uname" id="username" placeholder="Username">
        <span id="user" style="color:red; font-weight:bold;"></span>
        <input type="password" name="pass" id="password" placeholder="Password">
        <span id="pass" style="color:red; font-weight:bold;"></span>
        <input type="submit" onclick="return validation()" name='submit' class="submit">

      </form>

    </div>
  </div>
</body>

<?php
include 'connect_db.php';
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$encryption_iv = '2345678910111211';
$encryption_key = "DE";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uname = mysqli_real_escape_string($conn, $_POST['uname']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);

  $encryption = openssl_encrypt(
    $pass,
    $ciphering,
    $encryption_key,
    $options,
    $encryption_iv
  );
  $sql = "select * from user_registration where uname = '$uname' and pass = '$encryption'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $_SESSION['fname'] = $row['fname'];
  $_SESSION['lname'] = $row['lname'];
  $_SESSION['uname'] = $row['uname'];
  $_SESSION['gamer_id'] = $row['gamer_id'];
  $_SESSION['uphoto'] = base64_encode($row['uphoto']);

  $count = mysqli_num_rows($result);
  if ($count == 1) {

    header("Location:../Home/home_page.php");
  } else {
    echo "<script> document.getElementById('pass').innerHTML = '**Please fill the correct password';</script>";
    echo "<script> document.getElementById('user').innerHTML = '**Please fill the correct username';</script>";
  }
}

?>
<script type="text/javascript">
  function validation() {
    var user = document.getElementById('username').value;
    var pass = document.getElementById('password').value;

    if (user == "") {
      document.getElementById('user').innerHTML = "**Please fill the username";
      return false;
    } else if ((user.length <= 2) || (user.length > 20)) {
      document.getElementById('user').innerHTML = "**User length must be between 2 and 20 characters ";
      return false;
    } else if (!isNaN(user)) {
      document.getElementById('user').innerHTML = "**Only characters are allowed";
      return false;
    } else {
      document.getElementById('user').innerHTML = "";
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

    if (pass == "") {
      document.getElementById('pass').innerHTML = "**Please fill the password";
      return false;
    } else if ((pass.length < 5) || (pass.length > 20)) {
      document.getElementById('pass').innerHTML = "**Password length ,ust be between 5 and 20 characters";
      return false;
    } else {
      document.getElementById('pass').innerHTML = ""
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

  .login {
    width: 400px;
    height: 450px;
    border: 1px solid #CCC;
    background: url(http://68.media.tumblr.com/2b27908fac782ca54cc2b3aff6862423/tumblr_mra3owkIhC1ro855no1_500.gif) center center no-repeat;
    background-size: cover;
    margin: 110px auto;
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

  .login .form input.submit {
    background: rgba(255, 255, 255, .9);
    color: #444;
    font-size: 15px;
    margin-top: 40px;
    font-weight: bold;
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

    li.fade {
      opacity: 1;
    }

    .login-button {
      margin-right: 0;

    }
  }
</style>
