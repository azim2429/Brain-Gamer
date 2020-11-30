<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Memory2 </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Coda">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Permanent+Marker" >
    <link rel="stylesheet" href="../memory2/mem.css">

    
</head>
<body>
<?php include "..\Common\icon.php" ?>
    <?php include "..\Common\av_bar.php" ?>
    <div class="container">
        <header>
            <h1>Memory Game</h1>
        </header>

        <a class="a_game" href="../Game/index.php">
    <i style="position:absolute;top:16%;left:10%" id="fa" class="fa fa-long-arrow-left">All  Games</i></a>
  <div class="main">

        <section class="score-panel">
        	<ul class="stars">
        		<li><i class="fa fa-star"></i></li>
        		<li><i class="fa fa-star"></i></li>
        		<li><i class="fa fa-star"></i></li>
        	</ul>

        	<span class="moves">0</span> Move(s)

            <div class="timer">
            </div>

            <div class="restart" onclick=startGame()>
        		<i class="fa fa-repeat"></i>
        	</div>
        </section>

        <ul class="deck" id="card-deck">
            <li class="card" type="diamond">
                <i class="fa fa-diamond"></i>
            </li>
            <li class="card" type="plane">
                <i class="fa fa-paper-plane-o"></i>
            </li>
            <li class="card match" type="anchor">
                <i class="fa fa-anchor"></i>
            </li>
            <li class="card" type="bolt" >
                <i class="fa fa-bolt"></i>
            </li>
            <li class="card" type="cube">
                <i class="fa fa-cube"></i>
            </li>
            <li class="card match" type="anchor">
                <i class="fa fa-anchor"></i>
            </li>
            <li class="card" type="leaf">
                <i class="fa fa-leaf"></i>
            </li>
            <li class="card" type="bicycle">
                <i class="fa fa-bicycle"></i>
            </li>
            <li class="card" type="diamond">
                <i class="fa fa-diamond"></i>
            </li>
            <li class="card" type="bomb">
                <i class="fa fa-bomb"></i>
            </li>
            <li class="card" type="leaf">
                <i class="fa fa-leaf"></i>
            </li>
            <li class="card" type="bomb">
                <i class="fa fa-bomb"></i>
            </li>
            <li class="card open show" type="bolt">
                <i class="fa fa-bolt"></i>
            </li>
            <li class="card" type="bicycle">
                <i class="fa fa-bicycle"></i>
            </li>
            <li class="card" type="plane">
                <i class="fa fa-paper-plane-o"></i>
            </li>
            <li class="card" type="cube">
                <i class="fa fa-cube"></i>
            </li>
        </ul>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Congratulations 🎉</h2>
                <a class="close" href=# >×</a>
                <div class="content-1">
                    Congratulations you're a winner 🎉🎉
                </div>
                <div class="content-2">
                    <p>You made <span id=finalMove> </span> moves </p>
                    <p>in <span id=totalTime> secs</span> </p>
                    <p>Rating:  <span id=starRating></span></p>
                    <p>Accuracy:  <span id=accuracy></span></p>
                </div>
                <button id="play-again"onclick="playAgain()">
                    Play again 😄</a>
                </button>
            </div>
        </div>

    </div>
    </div>
    
    <script src="../memory2/mem.js"></script>
</body>
</html>