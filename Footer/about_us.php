<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "../Common/icon.php" ?>
    <title>About Us</title>
    </head>

<body>
    <?php include "../Common/av_bar.php" ?>
    <?php include "..\Common\preloader.php" ?>
    <div style="position: relative;top:20vh">
        <h1 id="ab_header" class="ab_header">Our Developers</h1>
        <div class="row" id="row">
            <div class="column">
                <div class="card">
                    <img src='..\Images\azim.jpg' alt="Jane" style="width:100%">
                    <div class="contain" id="contain">
                        <h1>Abdul Azim</h1>
                        <p class="title">3rd Year IT student</p><br>
                        <p style="color:black">Full Stack Developer</p>
                        <div style="margin: 24px 0;">
                            <a href="https://www.instagram.com/_azzim_/"><i class="fa fa-instagram" style="color:black"></i></a>
                            <a href="https://twitter.com/_azzzim_"><i class="fa fa-twitter" style="color:black"></i></a>
                            <a href="https://www.linkedin.com/in/abdul-azim-08087019b/"><i class="fa fa-linkedin" style="color:black"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100008503173596"><i class="fa fa-facebook" style="color:black"></i></a>
                            <a href="https://github.com/azim2429"><i class="fa fa-github" style="color:black"></i></a>
                        </div>
                        <p><button class="button">Contact</button></p><br>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src='..\Images\akhil.jpg' alt="Jane" style="width:100%;">
                    <div class="contain">
                        <h1 style="color:black">Akhil Wilson</h1>
                        <p class="title">3rd Year IT student</p><br>
                        <p style="color:black">Full Stack Developer</p>
                        <div style="margin: 24px 0;">
                            <a href="https://www.instagram.com/____akhil2000____/"><i class="fa fa-instagram" style="color:black"></i></a>
                            <a href="#"><i class="fa fa-twitter" style="color:black"></i></a>
                            <a href="https://www.linkedin.com/in/akhil-wilson-6151041ab/"><i class="fa fa-linkedin" style="color:black"></i></a>
                            <a href="https://www.facebook.com/akhil.wilson.5"><i class="fa fa-facebook" style="color:black"></i></a>
                            <a href="https://github.com/akhilwilson57"><i class="fa fa-github" style="color:black"></i></a>
                        </div>
                        <p><button class="button">Contact</button></p><br>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src='..\Images\bryan.jpg' alt="Jane" style="width:100%">
                    <div class="contain">
                        <h1 style="color:black">Bryan Philip</h1>
                        <p class="title">3rd Year IT student</p><br>
                        <p style="color:black">Full Stack Developer</p>
                        <div style="margin: 24px 0;">
                            <a href="https://www.instagram.com/its_bryan_31/"><i class="fa fa-instagram" style="color:black"></i></a>
                            <a href="#"><i class="fa fa-twitter" style="color:black"></i></a>
                            <a href="https://www.linkedin.com/in/bryan-philip-212b021a1/"><i class="fa fa-linkedin" style="color:black"></i></a>
                            <a href="#"><i class="fa fa-facebook" style="color:black"></i></a>
                            <a href="https://github.com/bryanphil"><i class="fa fa-github" style="color:black"></i></a>
                        </div>
                        <p><button class="button">Contact</button></p><br>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-section">
            <h1>OUR MISSION</h1><br>
            <i>"To make your free time more productive"</i>
            <p>Keeping the brain active is an important aspect of brain health. Challenging mental activities stimulate the formation of new nerve cells connections and may encourage new cell generation.Maintaining a healthy brain will help your mind stay clear and active, so that you can continue to work, rest and play</p>
        </div>
    </div>
</body>

</html>
<style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 50px;
        }

        .card {
            box-shadow: 0 4px 8px 4px rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: black;
            color: white;
            width: 95%;
            margin: 4.5vh;
        }
        .contain {
            padding: 0 16px;
        }

        .contain::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {

            outline: 0;
            display: inline-block;
            padding: 8px;
            background-color: white;
            text-align: center;
            cursor: pointer;
            width: 100%;
            border-color: black;
            color: black;
        }
        .button:hover {
            background: black;
            color: white;
            border-color: black;
            transition: 0.2s ease-in;
        }

        a {
            text-decoration: none;
            font-size: 20px;
        }

        .ab_header {
            text-align: center;
            font-weight: bolder;
            font-family: cursive;
            color: black;
        }

        .contain {
            background-color: white;

        }

        .contain h1 {
            color: black;
        }

        @media screen and (max-width: 720px) {
            .column {
                width: 100%;
                display: block;
            }
            .about-section{
                margin-left: 1vh;
            }
        }
    </style>
    <script>
        var mode = localStorage.getItem("mode");
        console.log(mode);
        var h1 = document.getElementById("ab_header");
        if(mode=="day"){
		localStorage.setItem("mode1", "day");
        var mode1 = localStorage.getItem("mode1");
        console.log(mode1);
	}
        if(mode=="night"){
        document.body.style.backgroundColor = "#2d385e";
		h1.style.color = "white";
        localStorage.setItem("mode1", "night");
        var mode1 = localStorage.getItem("mode1");
        console.log(mode1);
        }
    </script>