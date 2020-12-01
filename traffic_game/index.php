<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Traffic Racer</title>
    <?php include "..\Common\icon.php" ?>
    <?php include "..\Common\av_bar.php" ?>
    <link rel="stylesheet" href="traffic.css">
</head>

<body>

    <a class="a_game" href="../Game/index.php">
        <i style="position:absolute;top:16%;left:10%" id="fa" class="fa fa-long-arrow-left">All Games</i></a>
    <div class="main">
        <!-- <div id="display" class="display">
      <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;text-align:center">Whack-a-mole!</h1> -->
      <div id="hide" style="display: block;">
        <button id="start_button" style="right:200vh;top:50vh;left:27vh" class="button" onclick="startGame()">Start</button>
        
        </div>
    </div>
    


    <div id="help">
        <p>Controls: Right, Left, Up & Down arrow keys.</p>
    </div>
    <div id="score_div" style="left: 8vh;">
        Score: <span id="score">0</span>
        Accuracy: <span id="high_score">0</span>
    </div>
    <div id="container" style="display: block;">
        <div id="line_1" class="line"></div>
        <div id="line_2" class="line"></div>
        <div id="line_3" class="line"></div>
        <div id="car" class="car">
            <div class="f_glass"></div>
            <div class="b_glass"></div>
            <div class="f_light_l"></div>
            <div class="f_light_r"></div>
            <div class="f_tyre_l"></div>
            <div class="f_tyre_r"></div>
            <div class="b_tyre_l"></div>
            <div class="b_tyre_r"></div>
        </div>
        <div id="car_1" class="car">
            <div class="f_glass"></div>
            <div class="b_glass"></div>
            <div class="f_light_l"></div>
            <div class="f_light_r"></div>
            <div class="f_tyre_l"></div>
            <div class="f_tyre_r"></div>
            <div class="b_tyre_l"></div>
            <div class="b_tyre_r"></div>
        </div>
        <div id="car_2" class="car">
            <div class="f_glass"></div>
            <div class="b_glass"></div>
            <div class="f_light_l"></div>
            <div class="f_light_r"></div>
            <div class="f_tyre_l"></div>
            <div class="f_tyre_r"></div>
            <div class="b_tyre_l"></div>
            <div class="b_tyre_r"></div>
        </div>
        <div id="car_3" class="car">
            <div class="f_glass"></div>
            <div class="b_glass"></div>
            <div class="f_light_l"></div>
            <div class="f_light_r"></div>
            <div class="f_tyre_l"></div>
            <div class="f_tyre_r"></div>
            <div class="b_tyre_l"></div>
            <div class="b_tyre_r"></div>
        </div>
        <form action="index.php" method="POST">
        <input class=""  name="points" id="points" style="display: none;">
        <input class="" name="accuracy" id="accuracy" style="display: none;">
        <div id="restart_div">
            <button type="submit" name="continue" id="restart">
                Continue
            </button>
        </div>
        </form>
        <script src="jmin.js"></script>
        <script src="traf.js"></script>
</body>
<?php 
      include '..\Authentication\connect_db.php';
      
      
      if(isset($_POST["continue"])){ 
        $gamer_id =  $_SESSION['gamer_id'];
        $uname = $_SESSION['uname'];
        $points=$_POST['points'];
        $accuracy=$_POST['accuracy'];
        $name = "Horizon Chase!";
        $game_type  = "Speed";
        $game_id  = 4;
        $query="insert into user_stats(gamer_id,uname,game_id,name,game_type,points,accuracy) values('$gamer_id','$uname','$game_id','$name','$game_type','$points','$accuracy')";
        $res=mysqli_query($conn, $query);
      }
      ?>
</html>
<script>
        var mode = localStorage.getItem("mode");
        console.log(mode);
        var h1 = document.getElementById("ab_header");
        if(mode=="day"){
            document.body.style.backgroundColor = "#58D68D";
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