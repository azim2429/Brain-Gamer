<?php 

session_start();
 $name =  $_SESSION['gamer_id'];
echo $name ?>
<form action="add.php" method="post" enctype="multipart/form-data">
    <label>Select Image File:</label>
    <input type="file" name="images">
    <input type="text" name="name">
    <input type="text" name="game_desc">
    <input type="text" name="game_type">
    
    <input type="submit" name="submit" value="Upload">
</form>