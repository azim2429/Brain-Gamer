<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<div class="login">
  <div class="form">
    <h2>Registration</h2>
    <form action="#"  onsubmit="return validation()">
    <input type="text" name="username" id="username" placeholder="Username">
    <span id="user" style="color:red; font-weight:bold;"></span>
    <!-- <input type="text" name="firstname" id="firstname" placeholder="First Name">
    <span id="fname" style="color:red; font-weight:bold;"></span>
    <input type="text" name="lastname" id="lastname" placeholder="Last Name">
    <span id="lname" style="color:red; font-weight:bold;"></span> -->
    <input type="text" name="email" id="email" placeholder="Email">
    <span id="emailids" style="color:red; font-weight:bold;"></span>
    <input type="date" name="birth date" id="birth date" placeholder="Birth Date" >
    <input type="password" name="password" id="password" placeholder="Password">
    <span id="pass" style="color:red; font-weight:bold;"></span>
    <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
    <span id="cpass" style="color:red; font-weight:bold;"></span>

    <input type="submit" value="Sign In" class="submit">
    
    </form>
    
  </div>
</div>
</body>

<script type="text/javascript">
  function validation(){
    // var fname = document.getElementById('firstname').value;
    // var lname = document.getElementById('lastname').value;
    var user = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var pass = document.getElementById('password').value;
    var cpass = document.getElementById('confirmpassword').value;



    if (user == "") {
      document.getElementById('user').innerHTML = "**Please fill the username";
      return false;
    }
    else if((user.length <= 2) || (user.length > 20)){
      document.getElementById('user').innerHTML = "**User length must be between 2 and 20 characters ";
      return false;
    }
    else if(!isNaN(user)){
      document.getElementById('user').innerHTML = "**Only characters are allowed";
      return false;
    }
    else{
      document.getElementById('user').innerHTML = "";
    }

     
    // if(fname == ""){
    //     document.getElementById('fname').innerHTML = "**Please fill the First Name";
    //     return false;
    // }
    // else if(!isNaN(fname)){
    //     document.getElementById('fname').innerHTML = "**Only character are allowed";
    //     return false;
    // }
    // else if((fname.length <= 2) || (fname.length > 10)){
    //     document.getElementById('fname').innerHTML = "**First Name must be between 2 and 10 characters";
    //     return false;
    // }
   
    // else{
    //     document.getElementById('fname').innerHTML = "";
    // }

    // if(lname == ""){
    //     document.getElementById('lname').innerHTML = "**Please fill the Last Name";
    //     return false;
    // }
    // else if((lname.length <= 2) || (lname.length > 10)){
    //     document.getElementById('lname').innerHTML = "**Last Name must be between 2 and 10 characters";
    //     return false;
    // }
    // else if(!isNaN(lname)){
    //     document.getElementById('lname').innerHTML = "**Only character are allowed";
    //     return false;
    // }
    // else{
    //     document.getElementById('lname').innerHTML = "";
    // }

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

   


    if (pass == ""){
      document.getElementById('pass').innerHTML = "**Please fill the password";
      return false;
    }
    else if((pass.length < 5) || (pass.length > 20)){
      document.getElementById('pass').innerHTML = "**Password length ,ust be between 5 and 20 characters";
      return false;
    }
    else{
      document.getElementById('pass').innerHTML = ""
    }

    if (pass!=cpass) {
        document.getElementById('cpass').innerHTML = "**Password are not matching";
		return false;
	}
    else if (cpass == "") {
        document.getElementById('cpass').innerHTML = "**Please fill the Confirm Password ";
		return false;
	}
	else{
		document.getElementById('cpass').innerHTML = "";
	}
  }
</script>
</html>


<style>
* {
  box-sizing: border-box;
  font-family: sans-serif;
}

input[type=date]:required:invalid::-webkit-datetime-edit {
    color: transparent;
  }

input[type=date]:focus::-webkit-datetime-edit {
    color: black !important;
  }

.login {
  width: 400px;
  height: 680px;
  border: 1px solid #CCC;
  background: url(http://68.media.tumblr.com/2b27908fac782ca54cc2b3aff6862423/tumblr_mra3owkIhC1ro855no1_500.gif) center center no-repeat;
  background-size: cover;
  margin: 0px auto;
  border-radius: 3px;
}
.login .form {
  width: 100%;
  height: 100%;
  padding: 15px 20px;;
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
  background: rgba(255,255,255,.5);
  border: 1px solid rgba(255,255,255,.1);
  padding: 0 15px;
  color: #FFF;
  border-radius: 2px;
  font-size: 14px;
}
.login .form input:focus {
  border: 1px solid rgba(255,255,255,.8);
  outline: none;
}
::-webkit-input-placeholder {
    color: #DDD;
}
.login .form input.submit {
  background: rgba(255,255,255,.9);
  color: #444;
  font-size: 15px;
  margin-top: 40px;
  font-weight: bold;
}
</style>