<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Whack A Mole!</title>
  <?php include "..\Common\icon.php" ?>
  <?php include "..\Common\av_bar.php" ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php include "..\Common\preloader.php" ?>
<a class="a_game" href="../Game/index.php">
    <i style="position:absolute;top:16%;left:10%" id="fa" class="fa fa-long-arrow-left">All Games</i></a>
  <div class="main">
    <div id="display" class="display">
      <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;text-align:center">Whack-a-mole!</h1>


      <button onclick="howPlay()" class="button">How To Play?</button>
      <button id="start_button" class="button" onclick="startGame()">Start!</button>
    </div>
    <div id="end" class="end" style="text-align: center;">
      <h1>Your Points:</h1>
      <h2 style="font-family: arial;" id="f_score">0</h2><br>
      <h3 id="a1" style="font-family: arial">Too Bad!Please try again.</h3><br>
      <h3 id="a2" style="font-family:arial ">Total hits:0/50</h3>
      <h3 id="a3" style="font-family:arial ">Accuracy 0%</h3>
      <br>
      
      <button class="button">Continue</button>
    </div>
    <div id="body" class="body">
      <span class="score">0</span><label class="l_score">Score:</label>
      <span id="time" class="time">0</span><label class="l_time">Time:</label>


      <div class="game">
        <div class="hole hole1">
          <div class="mole"></div>
        </div>
        <div class="hole hole2">
          <div class="mole"></div>
        </div>
        <div class="hole hole3">
          <div class="mole"></div>
        </div>
        <div class="hole hole4">
          <div class="mole"></div>
        </div>
        <div class="hole hole5">
          <div class="mole"></div>
        </div>
        <div class="hole hole6">
          <div class="mole"></div>
        </div>
      </div>
    </div>
    <div id="h_play" class="h_play">
  <img id="gif" style="width: 100%;height: 75vh;" src="..\Images\ezgif.com-video-to-gif (1).gif">
  <h2 style="position: absolute;top:25%;left:35%;font-size:2rem;color:red">Click on the Moles</h2>
  <button onclick="next()" style="position: absolute;top:45%;left:92%;font-size:2rem;color:red;background:none;border:none"><i class="fa fa-arrow-right"></i></button>
</div>
<div  id="h_play1" class="h_play">
  <img id="gif" style="width: 100%;height: 75vh;" src="..\Images\ezgif.com-video-to-gif (2).gif">
  <h2 style="position: absolute;top:25%;left:20%;font-size:2rem;color:red">On each Click you will be get a point</h2>
  <button onclick="next1()" style="position: absolute;top:45%;left:92%;font-size:2rem;color:red;background:none;border:none"><i class="fa fa-arrow-right"></i></button>
  <button onclick="prev1()" style="position: absolute;top:45%;left:2%;font-size:2rem;color:red;background:none;border:none"><i class="fa fa-arrow-left"></i></button>
</div>
<div  id="h_play2" class="h_play">
  <img id="gif" style="width: 100%;height: 75vh;" src="..\Images\ezgif.com-video-to-gif (3).gif">
  <h2 style="position: absolute;top:25%;left:20%;font-size:2rem;color:red">Score maximum points in the given time</h2>
  <button onclick="next2()" style="position: absolute;top:45%;left:92%;font-size:2rem;color:red;background:none;border:none"><i class="fa fa-arrow-right"></i></button>
  <button onclick="prev2()" style="position: absolute;top:45%;left:2%;font-size:2rem;color:red;background:none;border:none"><i class="fa fa-arrow-left"></i></button>
</div>
  </div>
  
  <div class="play">
    <h1 id="h1" style="font-family: cursive;">Whack A Mole!</h1>
    <hr><br>
    <p id="p">This game will help you to improve your brain speed.</p>
    <p id="p1">When you train your brain to be able to take in information faster, <br>other areas of your brain will also improve such as your memory.</p>
  </div>
</body>
<script>
  const holes = document.querySelectorAll('.hole');
  const scoreBoard = document.querySelector('.score');
  const moles = document.querySelectorAll('.mole');

  let lastHole;
  let timeUp = false;
  let score = 0;

  function randomTime(min, max) {
    return Math.round(Math.random() * (max - min) + min);
  }

  function randomHole(holes) {
    const idx = Math.floor(Math.random() * holes.length);
    const hole = holes[idx];
    if (hole === lastHole) {
      console.log('Same Hole');
      return randomHole(holes);
    }
    lastHole = hole;
    return hole;
  }

  function peep() {
    const time = randomTime(300, 1000);
    const hole = randomHole(holes);
    hole.classList.add('up');
    setTimeout(() => {
      hole.classList.remove('up');
      if (!timeUp) peep();
    }, time);
  }

  function startGame() {
    scoreBoard.textContent = 0;
    timeUp = false;
    score = 0;
    setTimeout(peep, 1500);
    var body = document.getElementById('body');
    var display = document.getElementById('display');
    var f_score = document.getElementById('f_score');
    var end = document.getElementById('end');
    var start = document.getElementById('start_button');
    var count = parseFloat("30")
    var timer = setInterval(function() {
      document.getElementById('time').innerHTML = count;

      body.style.display = "block";
      display.style.display = "none";
      end.style.display = "none";
      count--;
      if (count === 0) {
        stopInterval();
      }
    },1000);
  
    
    var stopInterval = function() {
      setTimeout(after, 1000);
      console.log('time is up!');
      clearInterval(timer);
    }
    setTimeout(() => timeUp = true, 30000)

  }
  
  function after() {
      var body = document.getElementById('body');
      var display = document.getElementById('display');
      var end = document.getElementById('end');
      body.style.display = "none";

      end.style.display = "block";
      display.style.display = "none";
    }

  function bonk(e) {

    if (!e.isTrusted) return;
    score++;
    this.parentNode.classList.remove('up');
    scoreBoard.textContent = score;
    points = score*5;
    document.getElementById('f_score').innerHTML = points;
    if (score >= 0 && score <= 20) {
      document.getElementById('a1').innerHTML = "Not Bad ! Your score is more than 50% players ";
    }
    if (score > 20 && score <= 35) {
      document.getElementById('a1').innerHTML = "Great Job ! Your score is more than 75% players ";
    }
    if (score > 35) {
      document.getElementById('a1').innerHTML = "Excellent ! Your score is more than 95% players ";
    }
    document.getElementById('a2').innerHTML = " Total hits : " + score + "/45";
    avg = parseInt((score / 42) * 100);
    document.getElementById('a3').innerHTML = " Accuracy : " + avg + "%";
  }
  function howPlay(){
    display.style.display = "none";
    var h_play = document.getElementById('h_play');
    h_play.style.display = "block";
  }
  function next(){
    var h_play1 = document.getElementById('h_play1');
    h_play1.style.display = "block";
    h_play.style.display = "none";
  }
  function next1(){
    var h_play2 = document.getElementById('h_play2');
    h_play1.style.display = "none";
    h_play.style.display = "none";
    h_play2.style.display = "block";
  }
  
  function next2(){
    var h_play2 = document.getElementById('h_play2');
    h_play1.style.display = "none";
    h_play.style.display = "none";
    h_play2.style.display = "none";
    display.style.display = "block";
  }
  function prev1(){
    h_play.style.display = "block";
    h_play1.style.display = "none";
  }
  function prev2(){
    h_play1.style.display = "block";
    h_play.style.display = "none";
    h_play2.style.display = "none";
  }
    

  moles.forEach(mole => mole.addEventListener('click', bonk));
</script>
<script>
  var mode = localStorage.getItem("mode");
  console.log(mode);

  if (mode == "day") {
    localStorage.setItem("mode1", "day");
    var mode1 = localStorage.getItem("mode1");
    console.log(mode1);
    var h1 = document.getElementById('h1');
    var p = document.getElementById('p');
    h1.style.color = 'black';
    p1.style.color = 'black';
    p.style.color = 'black';
    var fa = document.getElementById("fa");
    fa.style.color = "black";

  }
  if (mode == "night") {
    var fa = document.getElementById("fa");
    document.body.style.backgroundColor = "#2d385e";
    fa.style.color = "white";
    localStorage.setItem("mode1", "night");
    var mode1 = localStorage.getItem("mode1");
    console.log(mode1);
  }
</script>
</body>

</html>
<style>
  body {
    background-color: white;
  }

  .a_game {
    font-size: 18px;
  }

  i{
    cursor: pointer;
    color: black;
  }
  h3{
    font-size: 20px;
  }
  .h_play{
    display: none;
  }
  .main {
    position: absolute;
    top: 21%;
    left: 10%;
    width: 50%;
    height: 75%;
    border: solid black;
    background: url(../Images/game.jpg);
    margin-bottom: 1rem;
    box-shadow: 5px 5px 10px gray;
    
  }
  video{
    position: absolute;
    top: 21%;
    left: 10%;
    width: 50%;
    height: 75%;
    margin-bottom: 1rem;
  }
  .body {
   
    display: none;
    background: url(../Images/game.jpg);
    cursor: url('data:image/x-icon;base64,AAACAAEAICAAAAMAAwCoEAAAFgAAACgAAAAgAAAAQAAAAAEAIAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAEAAAABAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAACAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wDQ//8A0P//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8A0P//AOH//wDQ//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AND//wDh//8A0P//AAAA/wAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/goKC7QAAAP8AAAAAAAAAAAAAAAAAAAAAAAAA/wDQ//8A4f//AND//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/4CAgOjo6Oj/g4OD7wAAAP8AAAAAAAAAAAAAAP8A0P//AOH//wDQ//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP9+fn7h6Ojo/+jo6P/o6Oj/g4OD7wAAAP8AAAD/AND//wDh//8A0P//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/+jo6P/o6Oj/6Ojo/+jo6P/o6Oj/g4OD7wDQ//8A4f//AND//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/fX193ejo6P/o6Oj/6Ojo/+jo6P/W1tb/AOH//wDQ//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/fX193ejo6P/o6Oj/6Ojo/9bW1v/W1tb/1tbW/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/fn5+4+jo6P/o6Oj/1tbW/9bW1v/W1tb/g4OD7wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8A0P//gICA5ujo6P/W1tb/1tbW/9bW1v/W1tb/g4OD7wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wDh//8A0P//f39/5NbW1v/W1tb/1tbW/9bW1v/W1tb/goKC7QAAAP8AAAAAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAD/fX1939bW1v/W1tb/1tbW/4GBgeoAAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgAAAAIAAAD/fX193aampv9+fn7jAAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA///////////////////////////////////////////////////////////////////////////////////////4////8P///+D//+/B///Hg///gwf//wAP//8AH///AD///4A////AH///wA///8AH///AD////B////4///8='), auto;
  }


  a {
    font-size: 22px;
  }

  .l_score,
  .l_time {

    line-height: 2;
    color: darkblue;
    float: right;
    margin-top: 1rem;
  }

  .end {
    display: flex;
    justify-content: center;
    top: 30%;
    left: 22%;
    position: absolute;
    display: none;
  }

  .score {
    background: rgba(255, 255, 255, 0.8);
    padding: 0 2rem;
    line-height: 2;
    color: darkblue;
    float: right;
    margin: 1rem;
  }

  .time {
    background: rgba(255, 255, 255, 0.8);
    padding: 0 2rem;
    line-height: 2;
    color: darkblue;
    float: right;
    margin: 1rem;
  }

  .display {
    position: absolute;
    top: 40%;
    left: 24%;
  }

  .game {
    width: 80%;
    height: 60vh;
    display: flex;
    flex-wrap: wrap;
    margin: 0 auto;

  }

  .hole {
    flex: 1 0 33.33%;
    overflow: hidden;
    position: relative;
  }

  .hole:after {
    display: block;
    background: url(dirt.svg) bottom center no-repeat;
    background-size: contain;
    content: '';
    width: 100%;
    height: 70px;
    position: absolute;
    z-index: 2;
    bottom: -30px;
  }

  .mole {
    background: url('mole.svg') bottom center no-repeat;
    background-size: 60%;
    position: absolute;
    top: 100%;
    width: 100%;
    height: 100%;
    transition: all 0.4s;
  }

  .hole.up .mole {
    top: 0;
  }

  .button {
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

  .button:hover {
    background: red;
        color: white;
        border-color: red;
        transition: 0.2s ease-in;
  }

  .play {
    position: absolute;
    top: 18%;
    right: 2%;
    padding: 2rem;

  }

  @media screen and (max-width: 720px) {
    .main {
      width: 95%;
      margin: 0;
      left: 2%;
    }

    .display {
      top: 25%;
      left: 15%;
    }

    .body {
      width: 100%;
    }

    .button {
      margin: 1vh;
    }

    .play {
      top: 100%;
    }

    .end {
      left: 10%;
    }

    .game {
      width: 90%;
    }
  }
</style>