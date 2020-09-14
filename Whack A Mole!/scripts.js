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
    document.body.style.backgroundColor = "#191970";
    fa.style.color = "white";
    localStorage.setItem("mode1", "night");
    
    console.log(mode1);
  }