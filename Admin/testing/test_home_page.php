
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="..\Images\circle-cropped.png" />
</head>

<body>
    <div>
        <img class="mario" id="mario" src="..\Images\mario.jpg">
        <!-- <h1 style="position: absolute;top:20%;">BRAIN GAME-1</h1> -->
    </div>
    <div>
        <img class="mario" id="mario" src="..\Images\sonic.jpg">
        <!-- <h1 style="position: absolute;top:20%;">BRAIN GAME-1</h1> -->
    </div>
    <img class="logo" src='..\Images\logo.png'>
    <div class="t_game">
        <h2><span class="bg" style="color:white;font-family:arial;">BRAIN GAME</h2>
        
    </div>
    <button href="something" class="play danger">Play Game</button>
    <nav>
        <a href="#">Home</a>
        <a href="..\Game\s_name\index.php">Games</a>
        <a href="icon.php">Your Stats</a>
        <a href="#">Insights</a>
        <a class="profile" href="..\Authentication\login.php">Profile</a>

        <div class="animation start-home"></div>
        <a href="javascript:void(0);" style="color:white ;" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>

        <div class="nav" id="nav">
            <div class="mode">
                <img class="day" onclick="change_mode()" id="day" src="..\Images\day_mode.png">
                <img class="night" onclick="change_mode()" id="night" src="..\Images\ni8_mode.png">
            </div>
    </nav>
    </div>
    <div class="nav-2" id="nav-2">
        <a href="#">Home</a><br><br>
        <a href="#">Games</a><br><br>
        <a href="#">Your Stats</a><br><br>
        <a href="#">Insights</a><br><br>
        <a href="#">Profile</a>
    </div>
    <h1 style="text-align:center;">FEATURED GAMES</h1>
    <div class="games">
        <div class="COC">
            <img src="..\Images\COC.jpg">
            <div class="middle">
                <button href="something" class=" play1 CoC">Play Game</button><br>
                <div class="text">CLASH OF CLANS</div>


            </div>
        </div>
        <img src="..\Images\cr.png">
        <img src="..\Images\hay-day.jfif">



    </div>
    <br>
    <button href="something" class="all_game">All Games</button>
    <button href="something" class="all_game1">All Games</button>
    <br>
    <hr class="hr" style="width: 70%;height:2px;background:#3498db;border:none">
    <br>
    <hr class="hr1" style="width: 70%;height:2px;background:#3498db;border:none">
    <div class="leaderboard">
        <h1 class="r" style="position:absolute;right:450px;top:45px;color:#fa5655">LEADERBOARD</h1>
        <p class="r1" style="position:absolute;right:295px;top:105px;display:block">Join The Global Player and View Your Standings <br>in the Leaderboard</p>
        <button href="something" class="leader_board">View LeaderBoard</button>
        <button href="something" class="leader_board1">View LeaderBoard</button>
        <br>
        <img class="leader" src="..\Images\leaderboards.png">
    </div>
    <div>
        <h1 class="r_leader" style="color:#fa5655">LEADERBOARD</h1>
        <p class="r1_leader">Join The Global Player and View Your Standings <br>in the Leaderboard</p>
    </div>
    <hr class="hr2" style="width: 70%;height:2px;background:#3498db;border:none;position:absolute;top:255%;left:12%">
    <div class="about-section">
        <h1 style="font-family: arial;">About Us Page</h1>
        <p style="font-family: arial;" >We are a bunch of IT student who want to help the society in a fun way.</p>
        
        <button class="know">Know More!</button>

    </div>
    <hr class="hr3" style="width: 70%;height:3px;background:#3498db;border:none;position:absolute;top:304%;left:12%">
    <div class="contact_us">
        <div style="text-align:center">
            <h2>Contact Us</h2>
        </div>
        <div class="row">
            <div class="column">
                
            </div>
            <div class="column">
                <form action="/action_page.php">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    <label for="country">Country</label>
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<style>
    html * {

        font-family: Impact, Charcoal, sans-serif;
        scroll-behavior: smooth;
    }

    nav {

        position: absolute;
        width: 58.5%;
        height: 70px;
        background-color: black;
        left: 400px;
        top: 0;
        font-size: 15px;
    }

    .icon {
        display: none;
    }

    nav a {
        margin-top: 10px;
        line-height: 50px;
        height: 100%;
        font-size: 20px;
        display: inline-block;
        position: relative;
        z-index: 1;
        text-decoration: none;
        text-transform: uppercase;
        text-align: center;
        color: white;
        cursor: pointer;
        margin-left: 10px;
    }

    nav .animation {
        position: absolute;
        height: 100%;
        top: 0;
        width: 200px;
        transition: all .5s ease .1s;


    }

    a:nth-child(1) {
        width: 100px;
    }

    a:nth-child(2) {
        width: 110px;
    }

    a:nth-child(3) {
        width: 120px;
    }

    a:nth-child(4) {
        width: 120px;
    }

    a:nth-child(5) {
        width: 120px;
    }

    nav .start-home,
    a:nth-child(1):hover~.animation {
        width: 110px;
        left: 10px;
        background-color: #3498db;


    }

    nav .start-game,
    a:nth-child(2):hover~.animation {
        width: 110px;
        left: 120px;
        background-color: #3498db;

    }

    nav .start-stats,
    a:nth-child(3):hover~.animation {
        width: 120px;
        left: 250px;
        background-color: #3498db;
    }

    nav .start-insights,
    a:nth-child(4):hover~.animation {
        width: 120px;
        left: 390px;
        background-color: #3498db;
    }

    nav .start-profile,
    a:nth-child(5):hover~.animation {
        width: 120px;
        left: 780px;
        background-color: #e67e22;

    }

    body {
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
        background: white;
        margin: 0;
    }

    .r {
        display: block;
    }

    .mario {
        width: 100%;
        height: 700px;
        position: relative;
        filter: brightness(55%);
        animation-name: fadeOut;
        animation-duration: 1s;
        animation-timing-function: linear;
    }

    @keyframes fadeOut {
        from {
            opacity: 0.8;
        }

        to {
            opacity: 1;
        }
    }

    .leader {
        position: absolute;
        right: 63%;
        width: 30%;
        margin-bottom: 50px;
        top: 50%;
    }

    .profile {
        position: absolute;
        right: 5px;
    }

    .about-section {
        position: relative;
        top: 525px;
        padding: 50px;
        text-align: center;
        background-color: #162252;
        color: white;
        width: 80%;
        left: 5%;

    }

    .logo {
        position: absolute;
        height: 70px;
        width: 100px;
        left: 300px;
        top: 0;
    }

    .search {
        display: block;
    }

    .nav-2 {
        display: none;
    }

    .mode {
        position: absolute;
        bottom: 0;
    }

    .night {
        position: absolute;
        left: 2%;
        display: none;
        width: 100px;
    }

    .day {
        position: absolute;
        width: 100px;
        left: 2%;
    }

    .play {
        position: absolute;
        top: 50%;
        left: 32%;
        border: 2px solid black;
        background: none;
        color: black;
        padding: 14px 20px;
        font-size: 20px;
        cursor: pointer;
    }

    .hr {
        display: none;

    }

    .play1 {
        margin-bottom: 10px;
        border: 2px solid;
        background: none;
        top: 20%;
        color: black;
        padding: 10px 10px;
        font-size: 20px;
        cursor: pointer;
    }

    .leader_board {
        position: absolute;
        margin-bottom: 10px;
        border: 2px solid;
        background: none;
        top: 20%;
        color: black;
        padding: 10px 10px;
        font-size: 20px;
        cursor: pointer;
        left: 55.5%;
        display: none;
        border-color: #ffd54f;
        color: #ffd54f;

    }

    .leader_board1 {
        position: absolute;
        margin-bottom: 10px;
        border: 2px solid;
        background: none;
        top: 250%;
        color: black;
        padding: 10px 10px;
        font-size: 20px;
        cursor: pointer;
        left: 55.5%;
        top: 190px;
        border-color: #ffd54f;
        color: #ffd54f;
    }

    .all_game1 {
        position: relative;
        margin-bottom: 10px;
        border: 2px solid;
        background: none;
        top: 20%;
        color: black;
        padding: 10px 10px;
        font-size: 20px;
        cursor: pointer;
        left: 45.5%;
        top: 10px;
        border-color: #3498db;
        color: #3498db;
    }

    .leader_board:hover {
        background: #ffd54f;
        color: white;
        border-color: #ffd54f;
        transition: 0.5s ease-in;
    }

    .leader_board1:hover {
        background: #ffd54f;
        color: white;
        border-color: #ffd54f;
        transition: 0.5s ease-in;
    }

    .all_game {
        position: relative;
        margin-bottom: 10px;
        border: 2px solid;
        background: none;
        top: 20%;
        color: black;
        padding: 10px 10px;
        font-size: 20px;
        cursor: pointer;
        left: 45.5%;
        top: 10px;
        border-color: #3498db;
        color: #3498db;
        display: none;
    }

    .all_game:hover {
        background: #3498db;
        color: white;
        border-color: #3498db;
        transition: 0.5s ease-in;
    }

    .all_game1:hover {
        background: #3498db;
        color: white;
        border-color: #3498db;
        transition: 0.5s ease-in;
    }

    .danger {
        border-color: white;
        color: white;
    }

    .CoC {
        border-color: white;
        color: white;
    }

    .danger:hover {
        background: #ff7700;
        color: white;
        border-color: #ff7700;
        transition: 0.5s ease-in;
    }

    .CoC {
        background: #ff7700;
        color: white;
        border-color: #ff7700;
        transition: 0.5s ease-in;
    }

    .games {
        position: relative;
        margin-left: 100px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(100px, 400px));
        grid-column-gap: 40px;
        grid-row-gap: 60px;
        opacity: 1;


    }

    .games1 {
        position: relative;
        margin-left: 100px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(100px, 400px));
        grid-column-gap: 40px;
        grid-row-gap: 60px;
        opacity: 1;
        top: 525px;
    }

    .games img {
        width: 100%;
        transition: 1s ease;
        backface-visibility: hidden;

    }

    .games img:hover {
        filter: blur(5px);
        opacity: 0.5;
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 40%;
        left: 15%;

        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .COC:hover .middle {
        opacity: 1;
    }

    .t_game {
        position: absolute;
        top: 20%;
        left: 31%;
        color: whitesmoke;
        font-size: 60px;
        filter: brightness(100%);
    }

    .leaderboard {
        position: relative;
    }

    /* Style inputs */
    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #3498db;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        font-family: arial;
        
    }

    input[type=submit] {
        border: 2px solid #76b852;
        background:#76b852;
        color: white;
        padding: 12px 20px;
       
        cursor: pointer;
    }
    .know{
        border: 2px solid;
        background: none;
        color: white;
        padding: 12px 20px;
        cursor: pointer;
    }

    /* input[type=submit]:hover {
        background: #76b852;
        color: white;
        border-color: #3498db;
        transition: 0.5s ease-in;
    } */
    .know:hover{
        background: #3498db;
        color: white;
        border-color: #3498db;
        transition: 0.5s ease-in;
    }

    /* Style the container/contact section */
    .contact_us {
        box-sizing: border-box;
        border-radius: 5px;
        background: #667db6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        color:white;
        padding: 10px;
        position: relative;
        top:600px;
        left:9%;
        width: 80%;
        margin-bottom: 40px;
        
    }

    /* Create two columns that float next to eachother */
    .column {
        float: right;
        width: 30%;
        margin-top: 6px;
        padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

        .column,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }




    @media only screen and (max-width: 760px) {

        .mario {
            position: absolute;
            width: 100%;
            height: 400px;
            top: 8%;
        }

        .leader_board,
        .hr,
        .all_game {
            display: block;

        }

        .leader_board1,
        .all_game1,
        .hr1 {
            display: none;
        }

        .r1 {
            visibility: hidden;
        }

        .games {
            position: absolute;
            top: 75%;

        }

        .games img {
            position: relative;
            width: 85%;
            margin: 0;
            right: 12%;
        }

        .play {
            top: 45%;
        }

        .t_game {
            font-size: 30px;

        }

        nav {
            position: absolute;
            width: 80.6%;
            height: 70px;
            background-color: black;
            left: 80px;
            top: 0;
            font-size: 0;
        }

        nav a,
        nav .animation {
            display: none;
        }

        .leaderboard img,
        .leaderboard button {
            position: absolute;
            top: 1500px;
        }

        .leaderboard button {
            left: 160px;
        }


        .logo {


            left: 0px;
        }

        .icon {
            display: block;
            position: absolute;
            left: 80%;
            top: 2px;
            font-size: 28px;
        }

        input {
            margin-top: 20px;

        }
    }

    .f_games {
        position: absolute;
        top: 60%;
        left: 15%;
    }

    .mode {
        position: relative;
    }

    .nav-2 {
        position: absolute;
        background-color: black;
        width: 100%;
        text-decoration: none;
        text-transform: uppercase;
        color: white;
        cursor: pointer;
        border-color: white;
        text-align: center;
        padding-bottom: 20px;
        top: 69px;
    }


    .all_game {
        position: absolute;
        top: 205%;
        left: 35%;
    }

    .leader_board {
        position: absolute;
        top: 230%;

    }

    .leader {
        position: absolute;
        top: 220%;
    }

    .r_leader,
    .r1_leader,
    .r1 {
        display: none;
    }

    .hr {
        position: absolute;
        top: 215%;
        left: 12%;
    }

    @keyframes fadeInOut {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .nav-2 a {
        animation-timing-function: linear;
        text-decoration: none;
        color: #3498db;
        cursor: pointer;
        animation-name: fadeInOut;
        animation-duration: 1s;
        animation-timing-function: linear;
    }

    .nav-2 .profile {
        width: 100%;
        left: 0px;
        background-color: black;
        padding-bottom: 15px;

    }

    .nav-2 {
        /* width: 90%; */
        position: relative;
        margin-bottom: 50px;
    }

    @media only screen and (max-width: 400px) {

        .logo {
            padding: 0px;
        }

        .r1 {
            display: none;

        }

        nav {
            width: 78.7%;
        }

        .icon {
            display: block;
            position: absolute;
            left: 215px;
            top: 2px;
            font-size: 28px;
        }

        .search {
            display: none;
        }

        .nav-2 {
            width: 100%;
            position: relative;
            margin-bottom: 50px;
        }

        .mario {
            position: absolute;
            width: 100%;
            height: 500px;
            top: 8%;
        }

        .f_games {
            position: absolute;
            top: 80%;
            left: 15%;
        }

        .games img {
            top: 50%;

        }

        .all_game {
            position: absolute;
            top: 220%;
            left: 35%;
        }

        .leader_board {
            position: absolute;
            top: 240%;
            margin-right: 20px;
            ;

        }

        .leader {
            position: absolute;
            top: 235%;

        }

        .r_leader,
        .r1_leader,
        .r1 {
            display: none;
        }


        .hr {
            position: absolute;
            top: 230%;
            left: 12%;
        }

        .play {
            top: 50%;
        }

        .leader_board,
        .hr,
        .all_game {
            display: block;

        }

        .leader_board1,
        .all_game1,
        .hr1 {
            display: none;
        }



    }

    @media (min-width: 1000px) and (max-width: 1400px) {

        .nav-2 {
            visibility: hidden;
        }

        .logo {
            left: 60px;
        }

        .r1 {
            visibility: hidden;
        }

        nav {
            left: 140px;
            width: 80%;
        }

        .mode {
            position: absolute;
        }

        nav .start-contact,
        a:nth-child(5):hover~.animation {
            width: 120px;
            left: 85%;

        }

        .f_games {
            position: relative;
            top: 10%;
            left: 0%;
        }

        .games img {
            position: relative;
            top: 5%;

        }

        .r1_leader {
            display: block;
            position: absolute;
            left: 55%;
            top: 140%;
        }

        .r_leader {
            display: block;
            position: absolute;
            left: 55%;
            top: 136%;
        }

        .leader_board {
            position: relative;
            top: 200px;

        }

        .leader {
            position: relative;
            left: 10%;
        }

        .leaderboard h1,
        p {
            display: none;
        }

        .hr {
            position: relative;
            top: 220%;
            left: 0;
        }

        .middle {
            position: absolute;
            top: 21%;
            left: 200px;

        }

        .all_game {
            position: relative;
            margin-top: 25px;
            left: 44%;
        }

        .play {
            top: 38%;
        }

        .leader_board,
        .hr,
        .all_game {
            display: block;

        }

        .leader_board1,
        .all_game1,
        .hr1 {
            display: none;
        }
    }

    @media (min-width: 760px) and (max-width: 1000px) {

        .nav-2 {
            visibility: hidden;
        }

        .r1 {
            visibility: hidden;
        }

        .logo {
            left: 20px;
        }

        nav {
            left: 120px;
            width: 80%;
        }

        .mode {
            position: absolute;
        }

        nav .start-contact,
        a:nth-child(5):hover~.animation {
            width: 120px;
            left: 82%;

        }

        .play {
            top: 40%;
        }

        .t_game {
            position: absolute;
            top: 4%;
        }

        .f_games {
            position: relative;
            top: 20%;
            left: 0%;
        }

        .games img {
            position: relative;
            top: 5%;
            left: 17%;

        }

        .r1_leader {
            display: block;
            position: absolute;
            left: 55%;
            top: 228%;
        }

        .r_leader {
            display: block;
            position: absolute;
            left: 55%;
            top: 222%;
        }

        .leader_board {
            position: relative;
            top: 200px;

        }

        .leader {
            position: relative;
            left: 10%;
        }

        .leaderboard h1,
        p {
            display: none;
        }

        .hr {
            position: relative;
            top: 220%;
            left: 0;
        }

        .middle {
            position: absolute;
            top: 21%;
            left: 200px;

        }

        .all_game {
            position: relative;
            margin-top: 25px;
            left: 44%;
        }

        .leader_board,
        .hr,
        .all_game {
            display: block;

        }

        .leader_board1,
        .all_game1,
        .hr1 {
            display: none;
        }


    }
</style>
<script>
    function myFunction() {
        var x = document.getElementById("nav-2");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function change_mode() {
        var x = document.getElementById("night");
        var y = document.getElementById("day");
        if (x.style.display == "block") {
            x.style.display = "none";
            y.style.display = "block";
            document.body.style.backgroundColor = "white";
            document.body.style.color = "black";

        } else {
            x.style.display = "block";
            y.style.display = "none";
            document.body.style.backgroundColor = "#162252";
            document.body.style.color = "white";
        }
    }
</script>
<script type="text/javascript">
    var index = 0;
    change();

    function change() {

        //Collect all images with class 'slides'
        var x = document.getElementsByClassName('mario');

        //Set all the images display to 'none' (invisible)
        for (var i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }

        //Increment index variable
        index++;

        //Set index to 1 if it's greater than the amount of images
        if (index > x.length) {
            index = 1;
        }

        //set image display to 'block' (visible)
        x[index - 1].style.display = "block";


        //set loop to change image every 3000 milliseconds (3 seconds)
        setTimeout(change, 4000);
    }
</script>