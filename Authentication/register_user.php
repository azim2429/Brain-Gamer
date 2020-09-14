<?php
include 'connect_db.php';
  if(isset($_POST["register"])){ 
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $bdate=$_POST['bdate'];
  $uname=$_POST['uname'];
  $country=$_POST['country'];
  $pass=$_POST['pass'];
  $cpass=$_POST['cpass'];
  $query="insert into user_registration(fname,lname,email,bdate,uname,country,pass,cpass) values('$fname','$lname','$email','$bdate','$uname','$country','$pass','$cpass')";
  $res=mysqli_query($conn, $query);
  $message="";
  if($res){
    
    header("Location:login1.php");
}else{
    echo '<script>alert("Book Id already Present")</script>';
    
}
}
?>