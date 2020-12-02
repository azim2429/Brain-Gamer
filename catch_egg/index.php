<html>
<?php include "..\Common\preloader.php" ?>
<head>
  <title>Catch The Eggs</title>
  <link href="egg.css" rel="stylesheet" />
</head>

<body>
<?php include "..\Common\icon.php" ?>
    <?php include "..\Common\av_bar.php" ?>
    <a class="a_game" href="../Game/index.php">
        <i style="position:absolute;top:16%;left:10%;color:black" id="fa" class="fa fa-long-arrow-left">All Games</i></a>
  <div id="container" style="position:absolute;top:10rem">

    <div id="score_help"> Score:
      <span id="score">0</span> | Life:
      <span id="life"></span> | Use mouse to control
    </div>

    <div id="branch"></div>

    <div id="hen1" class="hen"></div>
    <div id="hen2" class="hen"></div>
    <div id="hen3" class="hen"></div>

    <div id="egg1" class="egg" data-bullseye='1'></div>
    <div id="egg2" class="egg" data-bullseye='2'></div>
    <div id="egg3" class="egg" data-bullseye='3'></div>

    <div id="bullseye1" class="bullseye"></div>
    <div id="bullseye2" class="bullseye"></div>
    <div id="bullseye3" class="bullseye"></div>

    <div id="basket">
      <span id="score_1"></span>
    </div>


    <div id="floor"></div>
    <form action="index.php" method="POST">
      <input class="" name="points" id="points" style="display: none;">
      <input class="" name="accuracy" id="accuracy" style="display: none;">
      <button name="continue" type="submit" id="restart">Continue</button>
    </form>
    <?php 
      include '..\Authentication\connect_db.php';
      
      
      if(isset($_POST["continue"])){ 
        $gamer_id =  $_SESSION['gamer_id'];
        $uname = $_SESSION['uname'];
        $points=$_POST['points'];
        $accuracy=$_POST['accuracy'];
        $name = "Catch The Eggs!";
        $game_type  = "Attention";
        $game_id  = 6;
        $query="insert into user_stats(gamer_id,uname,game_id,name,game_type,points,accuracy) values('$gamer_id','$uname','$game_id','$name','$game_type','$points','$accuracy')";
        $res=mysqli_query($conn, $query);
      }
      ?>
    <div id="hide" style="display: block;">
      <button id="start_button" class="button" onclick="startGame()">Start</button>

    </div>
  </div>
  <script src="jmin.js"></script>
  <!-- <script src="collision_detection.js"></script>
  <script src="variables.js"></script>
  <script src="functions.js"></script> -->
  <script src="script.js"></script>
</body>

</html>
<script>
        var mode = localStorage.getItem("mode");
        console.log(mode);
        var h1 = document.getElementById("ab_header");
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
<style>
  #start_button {
    display: block;
    position: absolute;
    top: 35vh;
    right: 80vh;
    width: 200px;
    height: 50px;
    border: 2px solid;
    background: white;
    padding: 10px 10px;
    font-size: 20px;
    cursor: pointer;
    border-color: red;
    color: red;
    border-radius: 1rem;
    margin: 2rem;
  }

  #start_button:hover {
    background: red;
    color: white;
    border-color: red;
    transition: 0.2s ease-in;
  }
  #container{
    margin-bottom: 2.5rem;
  }
  a{
    font-size: 20px;
}
</style>