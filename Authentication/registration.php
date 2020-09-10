<?php include '..\Common\icon.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Registration Page</title>
</head>

<body>
  <div class="login-box">
    <h2>Registration</h2>
    <form  onsubmit="return validation()">

      <div class="user-box">

        <input type="text" name="first name" id="first name" >
        <label>First Name</label>
      </div>
      <div class="user-box">
        <input type="text" name="last name" id="last name" >
        <label>Last Name</label>

      </div>

      <div class="user-box">
        <input type="email" name="email" id="email" >
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="date" name="birth date" id="birth date" >
        <label>Date of Birth</label>
      </div>
      <div class="user-box">
      <input type="text" name="username" id="username" >
      <label>Username</label>
     
    </div>
    <div class="user-box">
      <input type="password" name="password" id="password" >
      <label>Password</label>
    </div>
    <div class="user-box">
      <input type="text" name="cpassword" id="cpassword" >
      <label>Confirm Password</label>
    </div>
      <a >
      <input type="submit" name="submit" style="background:none;" value="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <!-- Submit -->
      </a>
    </form >
  </div>
  <!-- <div class="login-box">
    <h2>Registration</h2>
    <form onsubmit="return validation()">
      <div class="user-box">
        <input type="text" name="first name" id="first name" required="">
        <label>First Name</label>
      </div>

      <div class="user-box">
        <input type="text" name="last name" id="last name" required="">
        <label>Last Name</label>
      </div>

      <div class="user-box">
        <input type="email" name="email" id="email" required="">
        <label>Email</label>
      </div>

      <div class="user-box">
        <input type="date" name="birth date" id="birth date" required="">
        <label>Date of Birth</label>
      </div>

      <div class="user-box">
      <input type="text" name="username" id="username" >
      <label>Username</label>
      <p ></p>
     
        
    </div><br>
    <div class="user-box">
      <input type="password" name="password" id="password" required="">
      <label>Password</label>
    </div>
    <div class="user-box">
      <input type="text" name="cpassword" id="cpassword" required="">
      <label>Confirm Password</label>
    </div>

     

      <a>
      <input type="submit" name="submit" style="background:none;" value="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Submit
      </a>
    </form>
  </div> -->

  <script type="text/javascript">
    function validation(){
      var username = document.getElementById('username').value;
      var fname =  document.getElementById('name').value;
      var lname =  document.getElementById('company').value;
      var email = document.getElementById('email').value; 
      var pass = document.getElementById('pwd').value;
	    var confirmpass = document.getElementById('cpwd').value;




      if (fname == "") {
				document.getElementById('username').innerHTML = "**Please fill the First Name field";
				return false;
                }
			
		else if ((fname.length <= 2) || (fname.length > 10)) {
            document.getElementById('username').innerHTML = "**First Name  length must be between 2 and 10 characters";
			return false;
            }
		else if (!isNaN(fname)) {
			document.getElementById('username').innerHTML = "**Only characters are allowed";
			return false;
            }
		else{
            document.getElementById('username').innerHTML = "";
            }

        if (lname == "") {
            document.getElementById('username1').innerHTML = "**Please fill the Last Name field";
			return false;
            }
			
		else if ((lname.length <= 2) || (lname.length > 10)) {
            document.getElementById('username1').innerHTML = "**Last Name length must be between 2 and 10 characters";
			return false;
            }
		else if (!isNaN(lname)) {
            document.getElementById('username1').innerHTML = "**Only characters are allowed";
			return false;
            }
		else{
            document.getElementById('username1').innerHTML = "";
            }

            if (email == "") {
            document.getElementById('emailids').innerHTML = "**Please fill the Email field";
			return false;
            }
		else if (email.indexOf('@') <= 0) {
            document.getElementById('emailids').innerHTML = "**Invalid @ position";
			return false;
            }
		else if ((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')) {
            document.getElementById('emailids').innerHTML = "**Invalid . position";
			return false;
            }
      
		else{
            document.getElementById('emailids').innerHTML = "";
            }


      if (username == "") {
				document.getElementById('user').innerHTML = "**Please fill the username field";
				return false;
			}

      else if ((username.length <= 2) || (username.length > 20)) {
				document.getElementById('user').innerHTML = "**Username length must be between 2 and 20 characters";
				return false;
			}
			else if (!isNaN(username)) {
				document.getElementById('user').innerHTML = "**Only characters are allowed";
				return false;
			}
			else{
				document.getElementById('user').innerHTML = "";
			}

      if (pass == "") {
				document.getElementById('passwords').innerHTML = "**Please fill the Password field";
				return false;
			}
			else if ((pass.length < 5) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML = "**Password length must be between 5 and 20 characters";
				return false;
			}
			else{
				document.getElementById('passwords').innerHTML = "";
			}

			if (pass!=confirmpass) {
				document.getElementById('confirmpass').innerHTML = "**Password are not matching";
				return false;
			}




			else if (confirmpass == "") {
				document.getElementById('confirmpass').innerHTML = "**Please fill the Confirm Password field";
				return false;
			}
			else{
				document.getElementById('confirmpass').innerHTML = "";
                x.style.display = "block";
                console.log("Akhil");
                
                
			}

    }
  </script>

</body>

</html>
<style>
  html {
    height: 100%;
  }

  body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(#141e30, #243b55);
  }

  input[type=date]:required:invalid::-webkit-datetime-edit {
    color: transparent;
  }

  input[type=date]:focus::-webkit-datetime-edit {
    color: black !important;
  }

  .login-box {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, .5);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
    border-radius: 10px;
    display: block;
  }

  .login-box h2 {
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
  }

  .login-box .user-box {
    position: relative;
  }

  .login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
  }

  .login-box .user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
  }

  .login-box .user-box input:focus~label,
  .login-box .user-box input:valid~label {
    top: -20px;
    left: 0;
    color: #3498db;
    font-size: 12px;
  }

  .login-box form input[type=submit] {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #3498db;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px
  }

  .login-box input[type=submit]:hover {
    background: #3498db;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #3498db,
      0 0 25px #3498db,
      0 0 50px #3498db,
      0 0 100px #3498db;
  }

  .login-box input[type=submit] span {
    position: absolute;
    display: block;
  }

  .login-box input[type=submit] span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #3498db);
    animation: btn-anim1 1s linear infinite;
  }

  @keyframes btn-anim1 {
    0% {
      left: -100%;
    }

    50%,
    100% {
      left: 100%;
    }
  }

  .login-box input[type=submit] span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #3498db);
    animation: btn-anim2 1s linear infinite;
    animation-delay: .25s
  }

  @keyframes btn-anim2 {
    0% {
      top: -100%;
    }

    50%,
    100% {
      top: 100%;
    }
  }

  .login-box input[type=submit] span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #3498db);
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s
  }

  @keyframes btn-anim3 {
    0% {
      right: -100%;
    }

    50%,
    100% {
      right: 100%;
    }
  }

  .login-box input[type=submit] span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #3498db);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s
  }

  @keyframes btn-anim4 {
    0% {
      bottom: -100%;
    }

    50%,
    100% {
      bottom: 100%;
    }
  }

  @media only screen and (max-width: 600px) {
    body {

      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background: linear-gradient(#141e30, #243b55);


    }

    .login-box {
      width: 300px;
    }
  }

  @media (max-width: 1200px) and (min-width: 800px) {
    .login-box {
      width: 400px;
    }
  }
</style>