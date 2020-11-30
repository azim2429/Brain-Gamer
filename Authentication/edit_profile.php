<?php
session_start();
include 'connect_db.php';
  if(isset($_POST["register"])){ 
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $bdate=$_POST['bdate'];
  $uname=$_POST['uname'];
  $country=$_POST['country'];
  $gamer_id =  $_SESSION['gamer_id'] ;
  $image = $_FILES['uphoto']['tmp_name']; 
  $uphoto = addslashes(file_get_contents($image));
//   $query="insert into user_registration(fname,lname,email,bdate,uname,country,pass,uphoto) values('$fname','$lname','$email','$bdate','$uname','$country','$encryption','$uphoto')";
  $query = "update user_registration SET fname='$fname',lname='$lname',email='$email',bdate='$bdate',uname='$uname',country='$country',uphoto='$uphoto' WHERE gamer_id='$gamer_id'";
  $res=mysqli_query($conn, $query);
  $message="";
    if($res){
        $message="User Registered Successfully";
        header("Location:login1.php?message=$message");
	}else{
        echo '<script>alert("Something went wrong")</script>';
        echo "<script> location.href='../Home/home_page.php'; </script>";
	}
}
