<?php 
// Include the database configuration file  
include '..\Authentication\connect_db.php';
 
// If file upload form is submitted 
$status = $statusMsg = ''; 

if(isset($_POST["submit"])){ 
    $name=$_POST['name'];
    $game_desc=$_POST['game_desc'];
    $game_type=$_POST['game_type'];
    $link=$_POST['link'];
    $game_id=$_POST['game_id'];
    
    $status = 'error'; 
    
            $image = $_FILES['images']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $conn->query("Insert into game_image (game_id,image,name,game_desc,game_type,link) VALUES ('$game_id','$imgContent','$name','$game_desc','$game_type','$link')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        
} 
 
// Display status message
header("Location: enter_game.php?message=$statusMsg"); 
?>