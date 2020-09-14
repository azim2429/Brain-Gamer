<?php 
session_start();
?>
<?php 
include 'connect_db.php';
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$encryption_iv = '2345678910111211';
$encryption_key = "DE";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']); 
    
    $encryption = openssl_encrypt(
    $pass,
    $ciphering,
    $encryption_key,
    $options,
    $encryption_iv
);
    $sql = "select * from user_registration where uname = '$uname' and pass = '$encryption'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $_SESSION['fname'] = $row['fname'];
      $count = mysqli_num_rows($result);
      if($count == 1) {
        header("Location:../Home/home_page.php");
     }else {
        echo "<script> document.getElementById('pass').innerHTML = '**Please fill the password';</script>";
     }
  }

?>