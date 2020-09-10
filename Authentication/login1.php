<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="login">
  <div class="form">
    <h2>Login</h2>
    <form action="#"  onsubmit="return validation()">
    <input type="text" name="username" id="username" placeholder="Username">
    <span id="user" style="color:red; font-weight:bold;"></span>
    <input type="password" name="password" id="password" placeholder="Password">
    <span id="pass" style="color:red; font-weight:bold;"></span>
    <input type="submit" value="Log In" class="submit">
    
    </form>
    
  </div>
</div>
</body>

<script type="text/javascript">
  function validation(){
    var user = document.getElementById('username').value;
    var pass = document.getElementById('password').value;

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
  }
</script>
</html>


<style>
* {
  box-sizing: border-box;
  font-family: sans-serif;
}
.login {
  width: 300px;
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