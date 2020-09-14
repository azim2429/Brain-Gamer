<?php
include 'connect_db.php';
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$encryption_iv = '2345678910111211';
$encryption_key = "DE";

  if(isset($_POST["register"])){ 
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $bdate=$_POST['bdate'];
  $uname=$_POST['uname'];
  $country=$_POST['country'];
  $pass=$_POST['pass'];
  
  $image = $_FILES['uphoto']['tmp_name']; 
  $uphoto = addslashes(file_get_contents($image));
  $encryption = openssl_encrypt(
    $pass,
    $ciphering,
    $encryption_key,
    $options,
    $encryption_iv
);
  $query="insert into user_registration(fname,lname,email,bdate,uname,country,pass,uphoto) values('$fname','$lname','$email','$bdate','$uname','$country','$encryption','$uphoto')";
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
?>