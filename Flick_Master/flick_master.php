<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flick Master</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="..\Images\circle-cropped.png" />
</head>

<body>
<?php include "..\Common\av_bar.php" ?>

<a class="a_game" href="../Game/index.php">
    <i style="position:absolute;top:16%;left:10%;color:black" id="fa" class="fa fa-long-arrow-left">All Games</i></a>
<img style="border: solid black" id="back_image" src="../Images/game_back1.jfif">
    <section id='game'>
    <div id="h_play" class="h_play">
    <button onclick="next()" style="position: absolute;bottom:105%;right:0%;left:100%;font-size:2rem;background:none;border:none"><i style="color:red;cursor:pointer" class="fa fa-arrow-right"></i></button>
    <button onclick="prev()" style="position: absolute;bottom:105%;left:0%;font-size:2rem;background:none;border:none"><i style="color:red;cursor:pointer" class="fa fa-arrow-left"></i></button>
        <h1 style="color: black;">Use the arrows in your keyboard</h1>
        <br>
        <img  src="../Images/keys.gif">
    </div>
    <div id="h_play1" class="h_play1">
    <button onclick="next1()" style="position: absolute;bottom:105%;right:10%;font-size:2rem;background:none;border:none"><i style="color:red;cursor:pointer" class="fa fa-arrow-right"></i></button>
    
        <h1 style="color: black;">If you see a blue arrow click the arrow <br>keys to matching the direction of card.</h1>
        
        <img width="70%" src="../Images/b.png">
    </div>
    <div id="h_play2" class="h_play2">
    <button onclick="next2()" style="position: absolute;bottom:105%;right:10%;font-size:2rem;background:none;border:none"><i style="color:red;cursor:pointer" class="fa fa-arrow-right"></i></button>
    <button onclick="prev2()" style="position: absolute;bottom:105%;left:0%;font-size:2rem;background:none;border:none"><i style="color:red;cursor:pointer" class="fa fa-arrow-left"></i></button>
        <h1 style="color: black;">If you see a red arrow click the arrow <br>keys to opposite to the direction of card.</h1>
        
        <img width="70%" src="../Images/r.png">
    </div>
        <div id='gameContainer'>
           
            <div  id="start" class="start">
                <h1 style="color:black;margin-left:4rem;font-size:30px">Flicker Master!</h1>
            <button id="start_button" class="button" onclick="howPlay()">How To Play</button>
            <button id="start_button" class="button" onclick="startGame()">Start!</button>
            </div>
            <header id="time"  style="color: black;">
                
                <div id='timer'  style="color: black;"></div>
            </header>
            <img class="img" src=""  id="arrow">

            <!-- for game over -->
            <div id='gameOver' style="display:none">
            <div style=" color: brown;">Game Over</div>
            <form action="flick_master.php" method="POST">
                <div style="color: black;font-weight:bold;font-size:24px">Points:<input id="points"  name="points" style="background: none;border:none;font-size:3vh;width:5%"></div>
                
                <div style="color: black;font-weight:bold;font-size:24px">Accuracy:<input id="accu" name="accuracy" style="background: none;border:none;font-size:3vh;width:6%">%</div>
                <div>Score:</div>
                
                <button name="continue" style="color: black;" id='backBtn'>Continue</button>
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
        $name = "Flicker Master!";
        $game_type  = "Attention";
        $game_id  = 2;
        $query="insert into user_stats(gamer_id,uname,game_id,name,game_type,points,accuracy) values('$gamer_id','$uname','$game_id','$name','$game_type','$points','$accuracy')";
        $res=mysqli_query($conn, $query);
      }
      ?>
       

    </section>
    <div class="play">
    <h1 id="h1" style="font-family: cursive;color:black">Flicker Master</h1>
    <hr><br>
    <p id="p" style="color: black;">This game will help you to improve your Attention Span.</p><br>
    <p id="p1" style="color: black;">Understanding attention helps us identify problems with multi-tasking,<br>  allows us the opportunity to set up an optimal learning environment.</p>
  </div>
   
</body>

</html>
<style>
    *{
    margin:0;
    padding:0;
}
a{
    font-size:20px;
}
.rotate0{
    transform: rotateZ(0deg);
}
.rotate90{
    transform: rotateZ(90deg);
}
.rotate180{
    transform: rotateZ(180deg);
}
.rotate270{
    transform: rotateZ(270deg);
}

#gameContainer {
    display: block;
    
}
#game{
    position: relative;
    top: 12px;
    /* left: auto; */
    width: 50%;
    height: 75vh;
    /* background-color: rgb(240, 240, 240); */
    top:22vh;
    left:21vh;
    box-shadow: 5px 5px 10px gray;
    
    
}

header{
   
    height: 80px;
   
    
    text-align: center;
    font-size: xx-large;
}


#gameOver{
    
    position: absolute;
    text-align: center;
    
    width:100%;
    height:80%;
    
}
#arrow{
    position: absolute;top: 100px;left: 29vh;width: 400px;
    
}
#back_image{
    position:absolute;width:106.05vh;left:21vh;top:22vh;height:74.5vh
}
#gameOver div{
    font-size: 22px;
    margin-top: 20px;
    
}
#gameOver :nth-child(1){
    color: brown;
    font-size: 36px;
    font-weight: bold;
}
#gameOver button{
    font-size: 30px;
    outline: none;
    width: 40%;
    height: 20%;
    position: absolute;
    top: 70%;
    left: 5%;
    border: none;
    background: none;
    border-radius: 50px;
    transition: 500ms;
}
#gameOver :last-child{
    left: 30%;
}
#gameOver button:hover{
    background-color: rgb(255, 190, 68);
}
#gameOver button:active{
    transform: scale(.95);
}
.start{
    position: absolute;
    bottom: 35%;
    left: 25vh;
    display: block;
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
    top: 19%;
    right: 1%;
    padding: 1rem;

  }
  #h_play{
       position: absolute;
       top:20vh;
       left:29vh;
      display: none;
    }
    #h_play1{
       position: absolute;
       top:20vh;
       left:25vh;
       display: none;
    }
    #h_play2{
       position: absolute;
       top:20vh;
       left:25vh;
       display: none;
    }
  @media screen and (max-width: 720px) {
      #game{
          width: 90%;
          left:1.3rem;
          
      }
      #arrow{
          
          left:2vh;
      }
      #gameOver{
          height: 83%;
      }
      #back_image{
          left:3vh;
          width: 89.5%;
      }
      .start{
         left:2rem;
      }
      .play {
      top:100%;
      padding: 2rem;
    }
    
    #h_play{
        left:5vh;
        width: 80%;
        
    }
    #h_play img{
      width: 100%;
    }
    #h_play1{
        left:4vh;
    }
    #h_play2{
        left:4vh;
    }
    
  }
 
</style>
<script>
    function startGame(){
        var start = document.getElementById("start");
        start.style.display = "none";
    FMgame('#timer',38,40,37,39,'#gameOver','#retryBtn','#backBtn','#arrow');


function FMgame(timer, up, down, left, right, gameOver, retryBtn, backBtn,arrow) {


    var myArrow = document.querySelector(arrow);
    var myTimer = document.querySelector(timer);
    var myTime = document.querySelector(timer);
    var gameTime = 30;
    var time = gameTime;
    myTimer.innerHTML = "TIME: " + time;
    
    

    var allImages = new Array();
    allImages.push(new Array(0, "../Images/b.png", left));    //left 37      a   65
    allImages.push(new Array(90, "../Images/b.png", up));     //up 38        w   87
    allImages.push(new Array(180, "../Images/b.png", right)); //right 39     d   68
    allImages.push(new Array(270, "../Images/b.png", down));  //down 40      s   83
    allImages.push(new Array(0, "../Images/r.png", right));   //right 39     d   68
    allImages.push(new Array(90, "../Images/r.png", down));   //down 40      s   83
    allImages.push(new Array(180, "../Images/r.png", left));  //left 37      a   65
    allImages.push(new Array(270, "../Images/r.png", up));    //up 38        w   87
    var rndm;
    
    getNewArrow();

    function getNewArrow() {
        rndm = Math.floor(Math.random() * 8);
        myArrow.style.display = 'none';
        myArrow.className = 'rotate' + allImages[rndm][0];
        myArrow.src = allImages[rndm][1];
        var h = setTimeout(function () { myArrow.style.display = 'block'; clearInterval(h); }, 50)
    }
    
    var correct = 0;
    var incorrect = 0;
    var score = 0;

    function checkAnswer(e) {
        if (e.keyCode == allImages[rndm][2]) {
            correct++;
            getNewArrow();
        }
        else if(e.keyCode == up ||e.keyCode == down ||e.keyCode == left ||e.keyCode == right) {
            // console.log('false');
            incorrect++;
        }
    }
    document.addEventListener('keydown', checkAnswer);
    
    var myGameOver = document.querySelector(gameOver);
    
    var myScore = document.querySelector(gameOver+' :nth-child(3)');
    
    
    var myBackBtn = document.querySelector(backBtn);
    
    
    var h = setInterval(function () {
       
        if (time) {
           
            time--;
            myTimer.innerHTML = "TIME: " + time;
            
            
        }
        else {
            document.removeEventListener('keydown', checkAnswer);
            clearInterval(h);

            // open score page
            myArrow.style.display = 'none'
            myGameOver.style.display = "block";
            points = parseInt(correct * 2.5);
            document.getElementById("points").value = points;
            myScore.innerHTML = "Scores:    " + correct;
            
            if (correct + incorrect == 0)
            document.getElementById("accu").value = '0';
            else
            acc =  (correct / (correct + incorrect) * 100).toPrecision(3);
            document.getElementById("accu").value = acc;
            
        }
    
    }, 1000)


    // for game over


}
    }


function howPlay(){
    var start = document.getElementById("start");
    var h_play1 = document.getElementById("h_play1");
    start.style.display = "none";
    h_play1.style.display = "block";

}
function next1(){
    var h_play2 = document.getElementById("h_play2");
    var h_play1 = document.getElementById("h_play1");
    h_play1.style.display = "none";
    h_play2.style.display = "block";
}
function next2(){
    var h_play2 = document.getElementById("h_play2");
    var h_play = document.getElementById("h_play");
    h_play2.style.display = "none";
    h_play.style.display = "block";
}
function prev2(){
    var h_play1 = document.getElementById("h_play1");
    var h_play2 = document.getElementById("h_play2");
    h_play2.style.display = "none";
    h_play1.style.display = "block";
}
function prev(){
    var h_play2 = document.getElementById("h_play2");
    var h_play = document.getElementById("h_play");
    h_play2.style.display = "block";
    h_play.style.display = "none";
}
function next(){
    var h_play = document.getElementById("h_play");
    var start = document.getElementById("start");
    start.style.display = "block";
    h_play.style.display = "none";
}

</script>
<script>
  var mode = localStorage.getItem("mode");
  console.log(mode);

  if (mode == "day") {
    localStorage.setItem("mode1", "day");
    var mode1 = localStorage.getItem("mode1");
    console.log(mode1);
  }
  if (mode == "night") {
    
    document.body.style.backgroundColor = "#191970";
    var h1 = document.getElementById('h1');
    var p1 = document.getElementById('p1');
    var p = document.getElementById('p');
    var fa = document.getElementById('fa');
    h1.style.color = "white";
    p1.style.color = "white";
    p.style.color = "white";
    fa.style.color = "white";
    localStorage.setItem("mode1", "night");
    var mode1 = localStorage.getItem("mode1");
    console.log(mode1);
  }
</script>