<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<form action="add.php" method="post" enctype="multipart/form-data">
    <label>Select Image File:</label>
    <input type="file" name="images">
    <input type="text" name="name">
    <input type="submit" name="submit" value="Upload">
</form>

<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// Get image data from database 

$query = "select *from images";
$res = mysqli_query($db, $query);
if($res){
?>



    <div class="container" style="margin-top: 10px;">
          <div class="row">
            <?php

            while ($row = mysqli_fetch_array($res)) {
              $name =  $row['name'];
              $id=  $row['id'];
              $image =  base64_encode($row['image']);
              if($image){
            ?>
              <div class="col-sm-3">
                <div class="card shadow-lg">
                  <div class="card-body">
                    
                      <h5 class="card-title" style="text-align: center;font-weight: bolder;"> <?php echo $name; ?></h5>
                    <br>
                    <div class="login100-pic js-tilt" data-tilt>
                    
                    <img style="height:200px; width: 160px;margin-left:30px;"  src="data:image/jpg;charset=utf8;base64,<?php echo $image ?>" src="SharedScreenshot.jpg"/>
                    
                    </div>
                    <br>
                    <div class="card-body" style="text-align: center;font-weight: bolder;"><span>ID of Animal: </span> <?php echo $id; ?></div>
                    <br>
                    
                  </div>
                </div>
                <br>
              </div>
              <br>
          <?php }else{
           ?>
             <div class="col-sm-3">
                <div class="card shadow-lg">
                  <div class="card-body">
                    
                      <h5 class="card-title" style="text-align: center;font-weight: bolder;"> <?php echo $name; ?></h5>
                    <br>
                    <div class="login100-pic js-tilt" data-tilt>
                    
                    <img style="height:200px; width: 160px;margin-left:30px;" src="SharedScreenshot.jpg"/>
                    
                    </div>
                    <br>
                    <div class="card-body" style="text-align: center;font-weight: bolder;"><span>ID of Animal: </span> <?php echo $id; ?></div>
                    <br>
                    
                  </div>
                </div>
                <br>
              </div>   
          <?php } } } ?>
          </div>
        </div>

