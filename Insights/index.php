<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <?php include "../Common/icon.php" ?>
    <title>About Us</title>
    </head>

<body>
    <?php include "../Common/av_bar.php" ?>
    <?php include "..\Common\preloader.php"?>
    <?php
include '..\Authentication\connect_db.php';
    $gamer_id =  $_SESSION['gamer_id'] ;
    $max_query = "select max(points) as points,name,gamer_id from user_stats where gamer_id = $gamer_id group by name";
    $max_res = mysqli_query($conn,$max_query);
    while ($max_row = mysqli_fetch_array($max_res)) {
    $max_acc = $max_row['points'];
    $max_name = $max_row['name'];
    }
    $gamer_id =  $_SESSION['gamer_id'] ;
    $min_query = "select min(points) as points,name,gamer_id from user_stats where gamer_id = $gamer_id GROUP by name ";
    $min_res = mysqli_query($conn,$min_query);
    while ($min_row = mysqli_fetch_array($min_res)) {
    $min_acc = $min_row['points'];
    $min_name = $min_row['name'];
    }
    $gamer_id =  $_SESSION['gamer_id'] ;
    $min_query = "select game_type,sum(points) as points from user_stats where gamer_id = $gamer_id group by game_type order by points asc";
    $min_res = mysqli_query($conn,$min_query);
    while ($min_row = mysqli_fetch_array($min_res)) {
    $max_pts = $min_row['points'];
    $max_type = $min_row['game_type'];
    }
    $gamer_id =  $_SESSION['gamer_id'] ;
    $min_query = "select game_type,sum(points) as points from user_stats where gamer_id = $gamer_id group by game_type order by points desc";
    $min_res = mysqli_query($conn,$min_query);
    while ($min_row = mysqli_fetch_array($min_res)) {
    $min_pts = $min_row['points'];
    $min_type = $min_row['game_type'];
    }
    $gamer_id =  $_SESSION['gamer_id'] ;
    $min_query = " select name,COUNT(name) as id from user_stats where gamer_id = $gamer_id group by name order by id asc";
    $min_res = mysqli_query($conn,$min_query);
    while ($min_row = mysqli_fetch_array($min_res)) {
    $max_ply = $min_row['name'];
    }
    $gamer_id =  $_SESSION['gamer_id'] ;
    $min_query = " select name,COUNT(name) as id from user_stats where gamer_id = $gamer_id group by name order by id desc";
    $min_res = mysqli_query($conn,$min_query);
    while ($min_row = mysqli_fetch_array($min_res)) {
    $min_ply = $min_row['name'];
    }
   
?>
    <div class="main-container">
  <div class="heading-container">
    <h1 id="h1" class="heading">Insights About Yourself</h1>
  </div>
  <br>
  <div class="card-container">
    <div class="card card-1">
      <div class="card__icon"><i class="fa fa-bolt"></i></div>
      
      <h2 class="card__title">You Have the Highest score of <b><?php echo $max_acc?></b> <br>Game :<b> <?php echo $max_name?> </b> </h2>
      <p class="card__apply"><a href="../Game/index.php">Play Now <i class="fa fa-arrow-right"></i></a></p>
    </div>
    <div class="card card-2">
      <div class="card__icon"><i class="fa fa-bolt"></i></div>
      
      <h2 class="card__title">Your <b><?php echo $max_type?></b> Skills are better than others</h2>
      <p class="card__apply"><a href="../Game/index.php">Play Now <i class="fa fa-arrow-right"></i></a></p>
    </div>
    <div class="card card-3">
      <div class="card__icon"><i class="fa fa-bolt"></i></div>
      
      <h2 class="card__title">You Have played <b><?php echo $max_ply?></b> the most</h2>
      <p class="card__apply"><a href="../Game/index.php">Play Now <i class="fa fa-arrow-right"></i></a></p>
    </div>
    <div class="card card-4">
      <div class="card__icon"><i class="fa fa-bolt"></i></div>
      
      <h2 class="card__title">You Have the Lowest score of <b><?php echo $min_acc?></b> <br>Game :<b> <?php echo $min_name?> </b> </h2>
      <p class="card__apply"><a href="../Game/index.php">Play Now <i class="fa fa-arrow-right"></i></a></p>
    </div>
    <div class="card card-5">
      <div class="card__icon"><i class="fa fa-bolt"></i></div>
      
      <h2 class="card__title">Your <b><?php echo $min_type?></b> Skills are weaker than others</h2>
      <p class="card__apply"><a href="../Game/index.php">Play Now <i class="fa fa-arrow-right"></i></a></p>
    </div>
    <div class="card card-1">
      <div class="card__icon"><i class="fa fa-bolt"></i></div>
      
      <h2 class="card__title">You have played <b><?php echo $min_ply?></b> the least</h2>
      <p class="card__apply"><a href="../Game/index.php">Play Now <i class="fa fa-arrow-right"></i></a></p>
    </div>
  </div>
</div>
</body>
</html>
<style>
    .heading-container {
  text-align: center;
}

.heading {
  font-weight: 600;
}

.credit {
  margin: 10px 0px;
  color: #888888;
  font-size: 25px;
  transition: all 0.5s;
}

.credit a {
  color: inherit;
}

a,
.card__exit,
.card__icon {
  position: relative;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.9);
}

a::after {
  position: absolute;
  top: 25px;
  left: 0;
  content: "";
  width: 0%;
  height: 3px;
  background-color: rgba(255, 255, 255, 0.6);
  transition: all 0.5s;
}

a:hover::after {
  width: 100%;
}

.main-container {
  padding: 30px;
  position: relative;
  top:10vh;
}

.card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card {
  margin: 20px;
  padding: 20px;
  width: 400px;
  min-height: 200px;
  display: grid;
  grid-template-rows: 20px 50px 1fr 50px;
  border-radius: 10px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.5s;
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.01);
}

.card__exit {
  grid-row: 1/2;
  justify-self: end;
}

.card__icon {
  grid-row: 2/3;
  font-size: 30px;
}

.card__title {
  grid-row: 3/4;
  font-weight: 400;
  color: #ffffff;
}

.card__apply {
  grid-row: 4/5;
  align-self: center;
}

.card-1 {
  background: radial-gradient(#1fe4f5, #3fbafe);
}

.card-2 {
  background: radial-gradient(#fbc1cc, #fa99b2);
}

.card-3 {
  background: radial-gradient(#76b2fe, #b69efe);
}

.card-4 {
  background: radial-gradient(#60efbc, #58d5c9);
}

.card-5 {
  background: radial-gradient(#f588d8, #c0a3e5);
}

@media (max-width: 1600px) {
  .card-container {
    justify-content: center;
  }
}
</style>
<script>
        var mode = localStorage.getItem("mode");
        console.log(mode);
        var h1 = document.getElementById("h1");
        if(mode=="day"){
		localStorage.setItem("mode1", "day");
        var mode1 = localStorage.getItem("mode1");
        console.log(mode1);
	}
        if(mode=="night"){
        document.body.style.backgroundColor = "#191970";
		h1.style.color = "white";
        localStorage.setItem("mode1", "night");
        var mode1 = localStorage.getItem("mode1");
        console.log(mode1);
        }
    </script>