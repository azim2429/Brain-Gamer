<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Memory</title>
    <style media="screen">
        

        #showWords {
            font-size: 28px;
            width: 200px;
            margin: 0 auto 20px auto;
            transform: translateX(-31px);
        }

        .numbering {
            width: 50px;
            text-align: right;
            display: inline-block;
            margin-right: 12px;
        }

        #start {
            width: 100px;
            transform: translateX(-20px);
            display: block;
            margin: 0 auto;
        }

        #restart {
            width: 100px;
            transform: translateX(-20px);
            display: none;
            margin: 0 auto;
        }

        #answer {
            font-size: 28px;
            border: 2px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 100%;
            display: none;
        }

        #answer:focus {
            outline: none;
            border: 2px solid #48f;
        }

        .progressbar {
            background: #48f;
            width: 0%;
            height: 10px;
            transition: all 0.4s ease-in-out;

        }

        .progressbarback {
            background: #ddd;
            width: 49.7%;
            height: 10px;
            position: fixed;
            z-index: -1;

        }

        .firework {
            position: fixed;
            top: 0;
            z-index: -1;
        }

        .body {
            height: 75vh;
            width: 50%;
            border: solid black;
            position: relative;
            top: 22vh;
            left: 21vh;
            background: url('../../Images/game_back2.jpg');
            box-shadow: 5px 5px 10px gray;
        }

        .container {
            position: relative;
            padding: 1rem;

        }

        #timer {
            text-align: center;
            font-size: 22px;
            font-weight: bolder;
        }

        .button {
            border: 2px solid;
            background: white;
            padding: 7px 7px;
            font-size: 20px;
            cursor: pointer;
            border-color: red;
            color: red;
            border-radius: 1rem;
            margin-left: 1.5rem;
        }

        .button:hover {
            background: red;
            color: white;
            border-color: red;
            transition: 0.2s ease-in;
        }

        #start_game {
            position: absolute;
            top: 30vh;
            left: 35vh;
            width: 80vh;


        }

        #h_play {
            display: none;
        }
        #h_play1{
            display: block;
        }
        #h_play2{
            display: none;
        }
        #h_play3{
            display: none;
        }
        .play {
    position: absolute;
    top: 19%;
    right: 1%;
    padding: 1rem;

  }
  @media screen and (max-width: 720px) {
      .body{
        width: 95%;
        left:1vh;
      }
      #start_game{
          left: 5vh;
          width: 95%;
      }
      .play {
      top:100%;
      padding: 2rem;
    }
  }
    </style>
</head>

<body>
<?php include "..\..\Common\av_bar.php" ?>
    <div class="body">
        <div class="h_play" id='h_play'>
            <div id="h_play1"  class="h_play1">
                <img style="width: 100%;height:74.5vh" src="../../Images/h_play1.jpg">
                <button onclick="next1()" style="position: absolute;bottom:85%;right:10%;font-size:2rem;background:none;border:none"><i style="color:red;cursor:pointer" class="fa fa-arrow-right"></i></button>
                
            </div>
            <div id="h_play2" class="h_play2">
            <img style="width: 100%;height:74.5vh" src="../../Images/h_play2.jpg">
            <button onclick="next2()" style="position: absolute;bottom:85%;right:10%;font-size:2rem;background:none;border:none"><i style="color:red;cursor:pointer" class="fa fa-arrow-right"></i></button>
    <button onclick="prev2()" style="position: absolute;bottom:85%;left:10%;font-size:2rem;background:none;border:none"><i style="color:red;cursor:pointer" class="fa fa-arrow-left"></i></button>
        </div>
        <div id="h_play3" class="h_play3">
            <img style="width: 100%;height:74.5vh" src="../../Images/h_play3.jpg">
            <button onclick="next3()" style="position: absolute;bottom:85%;right:10%;font-size:2rem;background:none;border:none"><i style="color:red;cursor:pointer" class="fa fa-arrow-right"></i></button>
    <button onclick="prev3()" style="position: absolute;bottom:85%;left:10%;font-size:2rem;background:none;border:none"><i style="color:red;cursor:pointer" class="fa fa-arrow-left"></i></button>
        </div>
        </div>
        <canvas class="firework"></canvas>
        <div id="progressbarback" class="progressbarback"></div>
        <div class="progressbar"></div>
        <div id="start_game">
            <h1 style="font-family: cursive;color:black">Word Memory</h1><br>
            <button id="start_button" class="button" onclick="howPlay()">How To Play</button>
            <button id="start_button" class="button" onclick="startGame()">Start!</button>
        </div>
        <header id="time" style="color: black;">

            <div id='timer' style="color: black;"></div>
        </header>
        <br>

        <div id='cont' class="container">

            <div id="showWords">

            </div>

            <input type="text" placeholder="answer" id="answer">
            <div id="feedback" style="font-size:22px"></div>
            <!-- <button class='button' id="restart">Continue</button> -->
        </div>

    </div>
    <div class="play">
    <h1 id="h1" style="font-family: cursive;color:black">Word Memory</h1>
    <hr>
    <p id="p" style="color: black;">This game will help you to improve your Memory.</p>
    <p id="p1" style="color: black;">Memory training will help you to maintain higher cognitive functioning<br> and everyday skills.</p>
    
  </div>
</body>
<script type="text/javascript">
    var maxWords = 10;
    var words = [
        'apple', 'axe', 'balloon', 'banana', 'bee', 'book',
        'box', 'brick', 'camera', 'car', 'cat', 'dog', 'elevator',
        'eyes', 'football', 'gate', 'glasses', 'hat', 'house',
        'ice cream', 'laptop', 'laser', 'light', 'mouse', 'orange',
        'paper', 'phone', 'piano', 'popcorn', 'rock', 'school',
        'spade', 'teapot', 'tiger', 'triangle', 'vase', 'watch'
    ];

    var used = [];
    var count = 0;
    var score = 0;
    var myTimer = document.getElementById('timer');
    var time = 20;
    var start = document.getElementById('start_game');

    function startGame() {
        start_game.style.display = 'none';
        var progressbarback = document.getElementById('progressbarback');
        progressbarback.style.display = 'block';
        myTimer.innerHTML = "TIME: " + time;
        var timer = setInterval(function() {
            time--;
            var myTimer = document.getElementById('timer');
            myTimer.innerHTML = "TIME: " + time;

            if (time === 0) {
                newQ();
                $('#start').css('display', 'none');
                $('#answer').css('display', 'block');
                myTimer.style.display = 'none';
                $('#answer').focus();
            }
        }, 1000);

        function randomWord() {
            var word;
            do {
                word = words[Math.floor((Math.random() * words.length))];
            } while (used.indexOf(word) !== -1);
            used.push(word);
            return word;
        }



        function genWords() {
            for (var i = 1; i <= maxWords; i++) {
                $('#showWords').append('<span class="numbering">' + i + '.</span>' + randomWord() + '<br>')
            }
        }



        $('#restart').click(function() {
            count = 0;
            score = 0;
            $('#feedback').text('');
            used = [];
            $('#showWords').text('');
            genWords();
            $('#restart').css('display', 'none');
            $('#start').css('display', 'block');
            $('.progressbar').css('width', '0%');
        })

        function newQ() {
            $('#showWords').text((count + 1) + '.')
        }

        // ENTER key press
        $('#answer').keyup(function(event) {
            if (event.keyCode == 13 && $('#answer').val() != '') {
                $('.progressbar').css('width', (count + 1) / maxWords * 100 + '%');
                var a = $('#answer').val();
                if (a == used[count]) {
                    score++;
                    $('#feedback').append($('#showWords').text() + ' ' + a + ' <span  style="color:#0a8">✓</span><br>')
                } else {
                    $('#feedback').append($('#showWords').text() + ' <strong>' + used[count] + '</strong> ≠ ' + a + ' <span style="color:#f65; font-weight: bold">✕</span><br>')
                }
                if (count + 1 < maxWords) {
                    count++;
                    newQ();
                } else {
                    if (score == maxWords) init();
                    $('#showWords').text('score: ' + score + '/' + maxWords);
                    $('#answer').css('display', 'none');
                    $('#restart').css('display', 'block');
                }
                $('#answer').val('');
            }
        })

        genWords();

        // launch animation for firework

    }

    function howPlay() {
        var start = document.getElementById('start_game');
        var h_play = document.getElementById('h_play');
        var h_play1 = document.getElementById('h_play1');
        var progressbarback = document.getElementById('progressbarback');
        start.style.display = 'none';
        h_play.style.display = 'block';
        h_play1.style.display = 'block';
        progressbarback.style.display = 'none';
    }

    function next1() {
        var h_play2 = document.getElementById("h_play2");
        var h_play1 = document.getElementById("h_play1");
        h_play1.style.display = "none";
        h_play2.style.display = "block";
    }

    function next2() {
        var h_play2 = document.getElementById("h_play2");
        var h_play3 = document.getElementById("h_play3");
        h_play2.style.display = "none";
        h_play3.style.display = "block";
    }

    function prev3() {
        var h_play2 = document.getElementById("h_play2");
        var h_play3 = document.getElementById("h_play3");
        h_play3.style.display = "none";
        h_play2.style.display = "block";
    }

    function prev2() {
        var h_play1 = document.getElementById("h_play1");
        var h_play2 = document.getElementById("h_play2");
        h_play1.style.display = "block";
        h_play2.style.display = "none";
    }

    function next3(){
        var h_play3 = document.getElementById("h_play3");
        var start_game = document.getElementById("start_game");
        start_game.style.display = "block";
        h_play3.style.display = "none";
    }
</script>

</html>