<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Memory2 </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Coda">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Permanent+Marker">
    <link rel="stylesheet" href="mem.css">


</head>

<body>
    <?php include "..\Common\icon.php" ?>
    <?php include "..\Common\av_bar.php" ?>
    <a class="a_game" href="../Game/index.php">
        <i style="position:absolute;top:16%;left:10%" id="fa" class="fa fa-long-arrow-left">All Games</i></a>
    <div class="container" style="position:relative;top:15vh;left:60vh;margin-right:55rem">

        <header>
            <h1 id="h1">Memory Game</h1>
        </header>


        <div class="main">

            <section class="score-panel">
                <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                </ul>

                <span id="h2" class="moves">0</span> <span id="h4">Move(s)<span>

                <div id="h3" class="timer">
                </div>
            </section>

            <ul class="deck" id="card-deck" style="width: 95%;">
                <li class="card" type="diamond">
                    <i class="fa fa-diamond"></i>
                </li>
                <li class="card" type="plane">
                    <i class="fa fa-paper-plane-o"></i>
                </li>
                <li class="card match" type="anchor">
                    <i class="fa fa-anchor"></i>
                </li>
                <li class="card" type="bolt">
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
                    <a class="close" href=#>×</a>
                    <div class="content-1">
                        Congratulations you're a winner 🎉🎉
                    </div>
                    <div class="content-2">
                        <p>You made <span id=finalMove> </span> moves </p>
                        <p>in <span id=totalTime> secs</span> </p>
                        <p>Rating: <span id=starRating></span></p>
                        <p>Accuracy: <span id=accurate></span></p>
                        <form action="index.php" method="POST">
                            <input class="" name="points" id="points" style="display: none;">
                            <input class="" name="accuracy" id="accuracy" style="display: none;">
                            <button name="continue" type="submit" id="play-again">
                                Continue 😄</a>
                            </button>
                        </form>
                    </div>

                    <?php
                    include '..\Authentication\connect_db.php';


                    if (isset($_POST["continue"])) {
                        $gamer_id =  $_SESSION['gamer_id'];
                        $uname = $_SESSION['uname'];
                        $points = $_POST['points'];
                        $accuracy = $_POST['accuracy'];
                        $name = "Memorize the Card";
                        $game_type  = "Memory";
                        $game_id  = 7;
                        $query = "insert into user_stats(gamer_id,uname,game_id,name,game_type,points,accuracy) values('$gamer_id','$uname','$game_id','$name','$game_type','$points','$accuracy')";
                        $res = mysqli_query($conn, $query);
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>

    <script>
        // cards array holds all cards
        let card = document.getElementsByClassName("card");
        let cards = [...card];

        // deck of all cards in game
        const deck = document.getElementById("card-deck");

        // declaring move variable
        let moves = 0;

        let counter = document.querySelector(".moves");

        // declare variables for star icons
        const stars = document.querySelectorAll(".fa-star");
        // declare variables for accuracy variables
        const accuracy = document.querySelectorAll(".acc");

        // declaring variable of matchedCards
        let matchedCard = document.getElementsByClassName("match");

        // stars list
        let starsList = document.querySelectorAll(".stars li");

        // close icon in modal
        let closeicon = document.querySelector(".close");

        // declare modal
        let modal = document.getElementById("popup1")

        // array for opened cards
        var openedCards = [];


        // @description shuffles cards
        // @param {array}
        // @returns shuffledarray
        function shuffle(array) {
            var currentIndex = array.length,
                temporaryValue, randomIndex;

            while (currentIndex !== 0) {
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex -= 1;
                temporaryValue = array[currentIndex];
                array[currentIndex] = array[randomIndex];
                array[randomIndex] = temporaryValue;
            }

            return array;
        };


        // @description shuffles cards when page is refreshed / loads
        document.body.onload = startGame();


        // @description function to start a new play 
        function startGame() {
            document.getElementById('accuracy').value = '0';
            console.log('start');
            // empty the openCards array
            openedCards = [];

            // shuffle deck
            cards = shuffle(cards);
            // remove all exisiting classes from each card
            for (var i = 0; i < cards.length; i++) {
                deck.innerHTML = "";
                [].forEach.call(cards, function(item) {
                    deck.appendChild(item);
                });
                cards[i].classList.remove("show", "open", "match", "disabled");
            }
            // reset moves
            moves = 0;
            counter.innerHTML = moves;

            // reset rating
            for (var i = 0; i < stars.length; i++) {
                stars[i].style.color = "#FFD700";
                stars[i].style.visibility = "visible";
            }
            //reset timer
            second = 0;
            minute = 0;
            hour = 0;
            var timer = document.querySelector(".timer");
            timer.innerHTML = "0 mins 0 secs";
            clearInterval(interval);
        }


        // @description toggles open and show class to display cards
        var displayCard = function() {
            this.classList.toggle("open");
            this.classList.toggle("show");
            this.classList.toggle("disabled");
        };


        // @description add opened cards to OpenedCards list and check if cards are match or not
        function cardOpen() {
            openedCards.push(this);
            var len = openedCards.length;
            if (len === 2) {
                moveCounter();
                if (openedCards[0].type === openedCards[1].type) {
                    matched();
                } else {
                    unmatched();
                }
            }
        };


        // @description when cards match
        function matched() {
            openedCards[0].classList.add("match", "disabled");
            openedCards[1].classList.add("match", "disabled");
            openedCards[0].classList.remove("show", "open", "no-event");
            openedCards[1].classList.remove("show", "open", "no-event");
            openedCards = [];
        }


        // description when cards don't match
        function unmatched() {
            openedCards[0].classList.add("unmatched");
            openedCards[1].classList.add("unmatched");
            disable();
            setTimeout(function() {
                openedCards[0].classList.remove("show", "open", "no-event", "unmatched");
                openedCards[1].classList.remove("show", "open", "no-event", "unmatched");
                enable();
                openedCards = [];
            }, 1100);
        }


        // @description disable cards temporarily
        function disable() {
            Array.prototype.filter.call(cards, function(card) {
                card.classList.add('disabled');
            });
        }


        // @description enable cards and disable matched cards
        function enable() {
            Array.prototype.filter.call(cards, function(card) {
                card.classList.remove('disabled');
                for (var i = 0; i < matchedCard.length; i++) {
                    matchedCard[i].classList.add("disabled");
                }
            });
        }


        // @description count player's moves
        function moveCounter() {
            moves++;
            counter.innerHTML = moves;
            //start timer on first click
            if (moves == 1) {
                second = 0;
                minute = 0;
                hour = 0;
                startTimer();
            }
            // setting rates based on moves and Accuracy
            if (moves > 8 && moves < 12) {
                for (i = 0; i < 3; i++) {
                    if (i > 1) {
                        stars[i].style.visibility = "collapse";

                    }
                }
            } else if (moves > 13) {
                for (i = 0; i < 3; i++) {
                    if (i > 0) {
                        stars[i].style.visibility = "collapse";
                    }
                }
            }
        }


        // @description game timer
        var second = 0,
            minute = 0;
        hour = 0;
        var timer = document.querySelector(".timer");
        var interval;

        function startTimer() {
            interval = setInterval(function() {
                timer.innerHTML = minute + "mins " + second + "secs";
                second++;
                if (second == 60) {
                    minute++;
                    second = 0;
                }
                if (minute == 60) {
                    hour++;
                    minute = 0;
                }
            }, 1000);
        }


        // @description congratulations when all cards match, show modal and moves, time and rating
        function congratulations() {
            if (matchedCard.length == 16) {
                clearInterval(interval);
                finalTime = timer.innerHTML;

                // show congratulations modal
                modal.classList.add("show");

                // declare star rating variable
                var starRating = document.querySelector(".stars").innerHTML;

                //showing move, rating, time on modal
                document.getElementById("finalMove").innerHTML = moves;
                document.getElementById("starRating").innerHTML = starRating;
                document.getElementById("totalTime").innerHTML = finalTime;
                document.getElementById('points').value = 100 - moves;
                avg = parseInt((8 / moves) * 100);
                // timer.innerHTML = minute+"% "+second+"secs";
                document.getElementById("accurate").innerHTML = avg + "%";
                document.getElementById('accuracy').value = avg;

                //closeicon on modal
                closeModal();
            };
        }


        // @description close icon on modal
        function closeModal() {
            closeicon.addEventListener("click", function(e) {
                modal.classList.remove("show");
                startGame();
            });
        }


        // @desciption for user to play Again 
        function playAgain() {
            modal.classList.remove("show");
            startGame();
        }


        // loop to add event listeners to each card
        for (var i = 0; i < cards.length; i++) {
            card = cards[i];
            card.addEventListener("click", displayCard);
            card.addEventListener("click", cardOpen);
            card.addEventListener("click", congratulations);
        };
    </script>
</body>

</html>

<script>
        var mode = localStorage.getItem("mode");
        console.log(mode);
        var h1 = document.getElementById("h1");
        var h2 = document.getElementById("h2");
        var h3 = document.getElementById("h3");
        var h4 = document.getElementById("h4");
        if(mode=="day"){
		localStorage.setItem("mode1", "day");
        var mode1 = localStorage.getItem("mode1");
        console.log(mode1);
	}
        if(mode=="night"){
        document.body.style.backgroundColor = "#191970";
        h1.style.color = "white";
        h2.style.color = "white";
        h3.style.color = "white";
        h4.style.color = "white";
        localStorage.setItem("mode1", "night");
        var mode1 = localStorage.getItem("mode1");
        console.log(mode1);
        }
    </script>