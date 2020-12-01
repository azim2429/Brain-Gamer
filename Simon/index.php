<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Simon Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='https://fonts.googleapis.com/css?family=Original+Surfer&effect=emboss' rel='stylesheet' type='text/css'>


  <audio id="clip1">
  	<source src="https://s3.amazonaws.com/freecodecamp/simonSound1.mp3"></source>
  </audio>
  <audio id="clip2">
  	<source src="https://s3.amazonaws.com/freecodecamp/simonSound2.mp3"></source>
  </audio>
  <audio id="clip3">
  	<source src="https://s3.amazonaws.com/freecodecamp/simonSound3.mp3"></source>
  </audio>
  <audio id="clip4">
  	<source src="https://s3.amazonaws.com/freecodecamp/simonSound4.mp3"></source>
  </audio>
</head>

<body>
<?php include "..\Common\icon.php" ?>
    <?php include "..\Common\av_bar.php" ?>
  <div id="outer-circle">
    <div id="topleft"></div>
    <div id="topright"></div>
    <div id="bottomleft"></div>
    <div id="bottomright"></div>
    <div id="inner-circle">
      <div id="title" class="font-effect-emboss">SIMON!</div>
      <div id="switches">
      
        
        <button class="button"  id="start">Start</button>
        <div style="display: none;">
        <input type="checkbox" class="toggle" id="strict" disabled>
        </div> 
      </div>
      <div id="pow" class="text1">
        
      </div>
      <div id="turn"></div>
      <div class="text2">
        COUNT
      </div>
      <form action="index.php" method="POST">
      <input class="" name="points" id="points" style="display: none;">
      <input class="" name="accuracy" id="accuracy" style="display: none;">
      <button name="continue" type="submit" id="restart" style="display: none;">Continue</button>
    </form>
    </div>
  </div>
  <?php 
      include '..\Authentication\connect_db.php';
      
      
      if(isset($_POST["continue"])){ 
        $gamer_id =  $_SESSION['gamer_id'];
        $uname = $_SESSION['uname'];
        $points=$_POST['points'];
        $accuracy=$_POST['accuracy'];
        $name = "Simon!!";
        $game_type  = "Memory";
        $game_id  = 5;
        $query="insert into user_stats(gamer_id,uname,game_id,name,game_type,points,accuracy) values('$gamer_id','$uname','$game_id','$name','$game_type','$points','$accuracy')";
        $res=mysqli_query($conn, $query);
      }
      ?>

  <script  src="game.js"></script>

</body>
</html>

<style>
  #restart {
    display: block;
    
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
    margin: 6.5rem 1rem 1rem 1rem;
  }

  #restart:hover {
    background: red;
    color: white;
    border-color: red;
    transition: 0.2s ease-in;
  }
  .toggle {
  margin-left: 20px;
  margin-right: 20px;
}

.button {
  border-radius: 50% !important;
  font-size: 1.5em;
  padding: 0.5rem;
  background-color: lightgray;
  margin-left: 3rem;
}

#switches {
  position: absolute;
  font-family: 'Original Surfer', cursive;
  margin-left: 26px;
  margin-top: 110px;
}

.text2 {
  position: absolute;
  font-family: 'Original Surfer', cursive;
  margin-left: 83px;
  margin-top: 197px;
}

.text1 {
  position: absolute;
  font-family: 'Original Surfer', cursive;
  margin-left: 19px;
  margin-top: 142px;
}

.text1 span:last-child {
  padding-left: 70px;
}

#title {
  font-family: 'Original Surfer', cursive;
  position: absolute;
  font-size: 40px;
  margin-left: 35px;
  margin-top: 40px;
}

#turn {
  position: absolute;
  background: #330000;
  color: red;
  font-family: courier;
  font-size: 20px;
  height: 30px;
  width: 50px;
  margin-left: 90px;
  margin-top: 170px;
  text-align: center;
  vertical-align: middle;
  line-height: 30px;
}

#outer-circle {
  background: #385a94;
  border-radius: 50%;
  height: 500px;
  width: 500px;
  position: relative;
  border-style: solid;
  border-width: 10px;
  margin: auto;
  top: 10rem;
  box-shadow: 8px 8px 15px 5px #888888;
}

#topleft {
  position: absolute;
  height: 250px;
  width: 250px;
  border-radius: 250px 0 0 0;
  -moz-border-radius: 250px 0 0 0;
  -webkit-border-radius: 250px 0 0 0;
  background: darkgreen;
  top: 50%;
  left: 50%;
  margin: -250px 0px 0px -250px;
  border-style: solid;
  border-width: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}

#topright {
  position: absolute;
  height: 250px;
  width: 250px;
  border-radius: 0 250px 0 0;
  -moz-border-radius: 0 250px 0 0;
  -webkit-border-radius: 0 250px 0 0;
  background: darkred;
  top: 50%;
  left: 50%;
  margin: -250px 0px 0px 0px;
  border-style: solid;
  border-width: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}

#bottomleft {
  position: absolute;
  height: 250px;
  width: 250px;
  border-radius: 0 0 0 250px;
  -moz-border-radius: 0 0 0 250px;
  -webkit-border-radius: 0 0 0 250px;
  background: goldenrod;
  top: 50%;
  left: 50%;
  margin: 0px -250px 0px -250px;
  border-style: solid;
  border-width: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}

#bottomright {
  position: absolute;
  height: 250px;
  width: 250px;
  border-radius: 0 0 250px 0;
  -moz-border-radius: 0 0 250px 0;
  -webkit-border-radius: 0 0 250px 0;
  background: darkblue;
  top: 50%;
  left: 50%;
  margin: 0px 0px -250px 0px;
  border-style: solid;
  border-width: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}

#inner-circle {
  position: absolute;
  background: grey;
  border-radius: 50%;
  height: 250px;
  width: 250px;
  border-style: solid;
  border-width: 10px;
  top: 50%;
  left: 50%;
  margin: -125px 0px 0px -125px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
</style>
