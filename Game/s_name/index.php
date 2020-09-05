<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Whack A Mole!</title>
  <?php include "..\..\Common\icon.php" ?>
  <?php include "..\..\Common\av_bar.php" ?>
  
  
</head>
<body>
<div class="main">
  <div id="display" class="display">
  <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;text-align:center">Whack-a-mole!</h1>
  <p>This game will help you to improve your speed</p><br>
  
  <button class="button">How To Play?</button>
  <button class="button" onClick="startGame()">Start!</button>
  </div>
  <div id="end" class="end" style="text-align: center;"><h2>Your Score:</h2><h4><span id="f_score">0</span></h4></div>
<div id="body" class="body">
<span class="score">0</span><label class="l_score">Score:</label>
<span id="time" class="time">0</span><label class="l_time">Time:</label >


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
</div>
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
    const time = randomTime(200, 1000);
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
    setTimeout(peep, 1000);
    var body = document.getElementById('body');
    var display = document.getElementById('display');
    var f_score = document.getElementById('f_score');
    var end = document.getElementById('end');
    var count = parseFloat("15")
    var timer = setInterval(function() {
    document.getElementById('time').innerHTML=count;
    
    body.style.display = "block";
    display.style.display = "none";
    count--;
    if(count === 0) {
    stopInterval();
  }
}, 1000);

function after(){
    var body = document.getElementById('body');
    var display = document.getElementById('display');
    var end = document.getElementById('end');
    body.style.display = "none";
    
    end.style.display = "block";
    display.style.display = "none";
}
var stopInterval = function() {
  setTimeout(after, 1000);
  console.log('time is up!');
  clearInterval(timer);
}
    setTimeout(() => timeUp = true, 15000)

  }
  

  function bonk(e) {
    if(!e.isTrusted) return; // cheater!
    score++;
    this.parentNode.classList.remove('up');
    scoreBoard.textContent = score;
    document.getElementById('f_score').innerHTML=score;
  }
  
  moles.forEach(mole => mole.addEventListener('click', bonk));

</script>
<script>
        var mode = localStorage.getItem("mode");
        console.log(mode);
        
        if(mode=="day"){
		    localStorage.setItem("mode1", "day");
        var mode1 = localStorage.getItem("mode1");
        console.log(mode1);
	}
        if(mode=="night"){
        document.body.style.backgroundColor = "#2d385e";
		    
        localStorage.setItem("mode1", "night");
        var mode1 = localStorage.getItem("mode1");
        console.log(mode1);
        }
    </script>
</body>
</html>
<style>
  body{
    background-color: white;
  }
  .main{
    
    position: absolute;
    top:20%;
    left:10%;
    width: 600px;
    height: 545px;
    border: solid black;
    background:url(../../Images/game.jpg);
  }
  .body{
    
  display: none;
    background:url(../../Images/game.jpg);
  }
  a{
    font-size: 22px;
  }
  .l_score,.l_time{
 
  line-height: 2;
  color:darkblue;
  float: right;
  margin-top:1rem;
}
.end{
  display: flex;
  justify-content: center;
  
  display: none;
}
.score {
  background: rgba(255,255,255,0.8);
  padding: 0 2rem;
  line-height: 2;
  color:darkblue;
  float: right;
  margin:1rem;
}
.time {
  background: rgba(255,255,255,0.8);
  padding: 0 2rem;
  line-height: 2;
  color:darkblue;
  float: right;
  margin:1rem;
}
.display{
  position: absolute;
  top:40%;
  left:24%;
}

.game {
  width: 600px;
  height: 400px;
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
  height:70px;
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
  transition:all 0.4s;
}

.hole.up .mole {
  top: 0;
}
.button{
        border: 2px solid;
        background: white;
        padding: 15px 15px 15px 15px;
        font-size: 1rem;
        cursor: pointer;
        border-color: linear-gradient(to right, #ed213a, #93291e);
        color: red;
        border-radius: 1vh;
        margin:2rem;
}
.button:hover{
        background: linear-gradient(to right, #ed213a, #93291e);
        color: white;
        border-color: linear-gradient(to right, #ed213a, #93291e);
        filter: drop-shadow(8px 8px 10px gray);
        transform: scale(1.08);
}
</style>