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
    <i style="position:absolute;top:16%;left:10%" id="fa" class="fa fa-long-arrow-left">All  Games</i></a>
  <div class="main">
    <!-- <div id="display" class="display">
      <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;text-align:center">Whack-a-mole!</h1> -->


      <button onclick="howPlay()" class="button">How To Play?</button>
      <button id="start_button" class="button" onclick="startGame()">Start !!</button>
    </div>



 <div id="help">
        <p>Controls: Right, Left, Up & Down arrow keys.</p>
    </div>
    <div id="score_div">
        Score: <span id="score">0</span>
        High Score: <span id="high_score">0</span>
    </div>
    <div id="container">
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
        <div id="restart_div">
            <button id="restart">
                Restart<br>
                <small class="small_text">(press Enter)</small>
            </button>
        </div>
  

    <script src="jmin.js"></script>
    <script src="traf.js"></script>
</body>

</html>
