<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <?php include "../Common/icon.php" ?>
</head>

<body>
    <?php include "..\Common\av_bar.php" ?>
    <?php include "..\Common\preloader.php" ?>
     
    <div class="page-wrapper">
        <div style="position:absolute;top:35%;left:20%;">
            <h1 style="font-size: 4rem;">BRAIN GAMES</h1>
            <h3 style="font-family: times;">We bring easy and better brain training to the world.</h3>
            <div class="mode-1">
                <img style="cursor:pointer;margin:20px;width:10vh" onclick="change_mode()" id="logo_light" src='..\Images\day_mode.png' alt="Logo Image">
                <img style="cursor:pointer;margin:20px;width:10vh" id="logo_dark" onclick="change_mode()" src='..\Images\ni8_mode.png' alt="Logo Image">
            </div>
        </div>
        <section class="headline">
            <h1 style="color: black;">HELLO</h1><br><br>
            <img class="mario" src="..\Images\mario1.jpg">
            <img class="mario" src="..\Images\sonic1.jpg">
        </section>
        <h1 id="header" style="color: black;margin:20px;">Our Featuered Games</h1>
        <section id="features" class="features">
            <div class="feature-container">
                <img style="position: relative;height:55vh" src="..\Images\speed.jpg">
                <h2 id="sub-head" style="font-family: cursive;">Speed</h2>
                <p id="sub-head1" style="font-family: arial;color:black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                <button href="something" class="play_button">Play Now!</button>
            </div>
            <div class="feature-container">
                <img style="height:55vh" src="..\Images\mem.png">
                <h2 id="sub-head2" style="font-family: cursive;">Memory</h2>
                <p id="sub-head3" style="font-family: arial;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                <button href="something" class="play_button">Play Now!</button>
            </div>
            <div class="feature-container">
                <img src="..\Images\atten.png">
                <h2 id="sub-head4" style="font-family: cursive;">Attention</h2>
                <p id="sub-head5" style="font-family: arial;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                <button href="something" class="play_button">Play Now!</button>
            </div>
        </section>
        <div class="all_game">
            <a href="../Game/index.php">
                <button class="button">All Games</button></a>
        </div>
        <hr class="hr" style="width: 90%;height:2px;background:#3498db;border:none;margin-right:5%;margin-left:5%">
        <div class="feature-container1">
            <img src="..\Images\leaderboards.png">
            <div class="leader">

                <h1 class="header_leader" style="color:#fa5655">LEADERBOARD</h1>
                <p id="content_leader" class="content_leader">Join The Global Player and View Your Standings in the Leaderboard</p>
                <a style="color:#f8b500;text-decoration:none;" href="../Leaderboard/index1.php">
                    <button class="button_leader">View Leaderboard</button></a>
            </div>
        </div>
        <hr class="hr" style="width: 90%;height:2.5px;background:#3498db;border:none;margin-right:5%;margin-left:5%;">
        <div style="padding:2%">
            <div id="about-section" class="about-section">
                <h1 style="font-family: arial;">About Us</h1><br>
                <p style="font-family: arial;">We are a bunch of IT student who want to help the society in a fun way.</p>

                <a style="color:#3498db;text-decoration:none;" href="..\Footer\about_us.php">
                    <button class="button">Know More!</button></a>
            </div>
        </div>
        <hr class="hr" style="width: 90%;height:2.5px;background:#3498db;border:none;margin-right:5%;margin-left:5%;">
    </div>
    <div class="container">
        <div class="wrapper">
            <div class="company-info">
                <h3 style="font-family: arial;">Brain Gamer</h3>
                <ul>
                    <li style="font-family: arial;"><i class="fa fa-map"></i> Mumbai , India</li>
                    <li style="font-family: arial;"><i class="fa fa-envelope"></i> braingamer@gmail.com</li>
                </ul>
            </div>

            <div class="contact">
                <h1 style="font-family: arial;">Contact Us</h1><br>

                <form id="contact-form"  onsubmit="return validation()">

                    <p>
                        <label style="font-family: arial;">Company</label>
                        <input style="font-family: arial;font-weight:bold" placeholder="First Name" type="text" name="name" id="name" >
                        <span id="username" style="color:white; font-weight:bold;"></span>
                    </p>

                    <p>
                        <label style="font-family: arial;">Company</label>
                        <input type="text" style="font-family: arial;font-weight:bold" name="company" placeholder="Last Name" id="company">
                        <span id="username1" style="color:white; font-weight:bold;"></span>
                    </p>

                    <p>
                        <label style="font-family: arial;">E-mail Address</label>
                        <input type="text" style="font-family: arial;font-weight:bold" placeholder="Email" name="email" id="email" >
                        <span id="emailids" style="color:white; font-weight:bold;"></span>
                    </p>

                    <p>
                        <label style="font-family: arial;">Phone Number</label>
                        <input type="text" style="font-family: arial;font-weight:bold" placeholder="Mobile Number" name="mobileNumber" id="mobileNumber">
                        <span id="mobileno" style="color:white; font-weight:bold;"></span>
                    </p>

                    <p class="full">
                        <label style="font-family: arial;">Message</label>
                        <textarea name="message" style="font-family: arial;font-weight:bold" placeholder="Your Message" rows="5" id="message"></textarea>
                        <span id="feedback" style="color:white; font-weight:bold;"></span>
                    </p>

                    <p class="full">
                        <button style="font-family: arial;" style="font-family: arial;font-weight:bold" type="submit" name="submit" value="submit">Submit</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    var index = 0;
    change();

    function change() {
        var x = document.getElementsByClassName('mario');
        for (var i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        index++;
        if (index > x.length) {
            index = 1;
        }
        x[index - 1].style.display = "block";
        setTimeout(change, 4000);
    }

    var mode1 = localStorage.getItem("mode1");
    console.log(mode1);
    if (mode1 == "night") {
        var y = document.getElementById("logo_light");
        var x = document.getElementById("logo_dark");
        var z = document.getElementById("header");
        var w = document.getElementById("features");
        var v = document.getElementById("content_leader");
        var u = document.getElementById("about-section");
        var a = document.getElementById("sub-head");
        var b = document.getElementById("sub-head1");
        var c = document.getElementById("sub-head2");
        var d = document.getElementById("sub-head3");
        var e = document.getElementById("sub-head4");
        var f = document.getElementById("sub-head5");
        x.style.display = "block";
        y.style.display = "none"
        document.body.style.backgroundColor = "#2d385e";
        a.style.color = "white";
        b.style.color = "white";
        c.style.color = "white";
        d.style.color = "white";
        e.style.color = "white";
        f.style.color = "white";
        document.body.style.color = "white";
        z.style.color = "white";
        w.style.backgroundColor = "#2d385e";
        v.style.color = "white";
        u.style.backgroundColor = "#2d385e";
    }

    function change_mode() {
        var y = document.getElementById("logo_light");
        var x = document.getElementById("logo_dark");
        var z = document.getElementById("header");
        var w = document.getElementById("features");
        var v = document.getElementById("content_leader");
        var u = document.getElementById("about-section");
        var a = document.getElementById("sub-head");
        var b = document.getElementById("sub-head1");
        var c = document.getElementById("sub-head2");
        var d = document.getElementById("sub-head3");
        var e = document.getElementById("sub-head4");
        var f = document.getElementById("sub-head5");
        if (x.style.display == "block") {
            x.style.display = "none";
            y.style.display = "block";
            a.style.color = "black";
            b.style.color = "black";
            c.style.color = "black";
            d.style.color = "black";
            e.style.color = "black";
            f.style.color = "black";
            document.body.style.backgroundColor = "white";
            document.body.style.color = "black";
            z.style.color = "black";
            w.style.backgroundColor = "#f1f1f1";
            v.style.color = "black";
            localStorage.setItem("mode", "day");
            var mode = localStorage.getItem("mode");
            console.log(mode);
        } else {
            x.style.display = "block";
            y.style.display = "none"
            document.body.style.backgroundColor = "#2d385e";
            a.style.color = "white";
            b.style.color = "white";
            c.style.color = "white";
            d.style.color = "white";
            e.style.color = "white";
            f.style.color = "white";
            document.body.style.color = "white";
            z.style.color = "white";
            w.style.backgroundColor = "#2d385e";
            v.style.color = "white";
            u.style.backgroundColor = "#2d385e";
            localStorage.setItem("mode", "night");
            var mode = localStorage.getItem("mode");
            console.log(mode);

        }
    }
    function validation(){
        var fname =  document.getElementById('name').value;
        var lname =  document.getElementById('company').value;
        var email = document.getElementById('email').value; 
        var mobileNumber = document.getElementById('mobileNumber').value;
        var message =  document.getElementById('message').value;



        if (fname == "") {
				document.getElementById('username').innerHTML = "**Please fill the First Name field";
				return false;
                }
			
		else if ((fname.length <= 2) || (fname.length > 10)) {
            document.getElementById('username').innerHTML = "**First Name  length must be between 2 and 10 characters";
			return false;
            }
		else if (!isNaN(fname)) {
			document.getElementById('username').innerHTML = "**Only characters are allowed";
			return false;
            }
		else{
            document.getElementById('username').innerHTML = "";
            }

        if (lname == "") {
            document.getElementById('username1').innerHTML = "**Please fill the Last Name field";
			return false;
            }
			
		else if ((lname.length <= 2) || (lname.length > 10)) {
            document.getElementById('username1').innerHTML = "**Last Name length must be between 2 and 10 characters";
			return false;
            }
		else if (!isNaN(lname)) {
            document.getElementById('username1').innerHTML = "**Only characters are allowed";
			return false;
            }
		else{
            document.getElementById('username1').innerHTML = "";
            }

        if (email == "") {
            document.getElementById('emailids').innerHTML = "**Please fill the Email field";
			return false;
            }
		else if (email.indexOf('@') <= 0) {
            document.getElementById('emailids').innerHTML = "**Invalid @ position";
			return false;
            }
		else if ((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')) {
            document.getElementById('emailids').innerHTML = "**Invalid . position";
			return false;
            }
      
		else{
            document.getElementById('emailids').innerHTML = "";
            }

        if (mobileNumber == "") {
            document.getElementById('mobileno').innerHTML = "**Please fill the Mobile Number field";
			return false;
            }
		else if (isNaN(mobileNumber)) {
            document.getElementById('mobileno').innerHTML = "**User must enter numbers only not characters";
			return false;
            }
		else if (mobileNumber.length!=10) {
            document.getElementById('mobileno').innerHTML = "**Mobile Number must be 10 digits only ";
			return false;
            }
		else{
            document.getElementById('mobileno').innerHTML = "";
            }

        if (message == "") {
            document.getElementById('feedback').innerHTML = "**Please fill the Message field";
			return false;
            }

    }

</script>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        color: #f2f5f7;
        scroll-behavior: smooth;
        letter-spacing: 1px;

    }

    .leader {
        float: right;
        width: 50%;
        font-family: Impact, Charcoal, sans-serif;
    }

    .header_leader {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20%;
        margin-bottom: 3%;

    }

    .content_leader {
        display: flex;
        align-items: center;
        justify-content: center;
        color: black;
    }

    .button_leader {

        margin-left: 38%;
        margin-top: 5%;
        border: 2px solid;
        background: none;
        padding: 10px 10px;
        font-size: 20px;
        cursor: pointer;
        border-color: #f8b500;
        color: #f8b500;
    }

    .button_leader:hover {
        background: #f8b500;
        color: white;
        border-color: #f8b500;
        transition: 0.5s ease-in;
    }

    .about-section {
        text-align: center;
        background-color: #162252;
        color: white;
        width: 100%;
        padding-top: 5%;

    }

    .play_button {
        border: 2px solid;
        background: linear-gradient(to right, #ed213a, #93291e);
        padding: 15px 15px 15px 15px;
        font-size: 20px;
        cursor: pointer;
        border-color: linear-gradient(to right, #ed213a, #93291e);
        color: white;
        border-radius: 3vh;
        margin-bottom: 4vh;
    }

    .play_button:hover {
        background: linear-gradient(to right, #ed213a, #93291e);
        color: white;
        border-color: linear-gradient(to right, #ed213a, #93291e);
        filter: drop-shadow(8px 8px 10px gray);
        transform: scale(1.08);
    }


    @media screen and (max-width: 720px) {
        .features {
            flex-direction: column;
            padding: 10px;
        }

        h1 {
            font-size: 1.9rem;
        }

        h2 {
            font-size: 1rem;
        }

        p {
            font-size: 0.8rem;
        }


        .headline,
        .headline img {
            height: 0;
        }

        .feature-container p {
            margin-bottom: 25px;
        }

        .feature-container {
            margin-top: 20px;
        }

        .feature-container:nth-child(2) {
            order: -1;
        }

        .content_leader {
            display: none;
        }

        .header_leader {
            font-size: 1.6rem;
        }

        .button_leader {
            margin-left: 8%;
        }



    }

    .toggle .line1 {
        transform: rotate(-45deg) translate(-5px, 6px);
    }

    .toggle .line2 {
        transition: all 0.7s ease;
        width: 0;
    }

    .toggle .line3 {
        transform: rotate(45deg) translate(-5px, -6px);
    }

    h1,
    p {
        color: #fff;
        text-align: center;
        font-family: Impact, Charcoal, sans-serif;
    }

    h1 {
        font-size: 2.8rem;
    }

    h2 {
        color: #000;
        font-size: 1.3rem;
        text-align: center;
        line-height: 1.4;
        margin-bottom: 10px;
    }

    a {
        font-size: 1.3rem;
    }

    .page-wrapper {
        width: 100%;
        height: auto;
    }

    .headline,
    .headline img {
        width: 100%;
        height: 100vh;
        min-height: 400px;
        background-size: cover;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .features {
        width: 100%;
        height: auto;
        background-color: #f1f1f1;
        display: flex;
        padding: 10px 10px 10px 10px;
        justify-content: space-around;
    }

    .feature-container {
        flex-basis: 30%;
        margin-top: 10px;
    }

    .feature-container p {
        color: #000;
        text-align: center;
        line-height: 1.4;
        margin-bottom: 15px;
    }

    .feature-container img {
        width: 90%;
        margin-bottom: 15px;
        transition: 1s ease;
        margin-left: 5vh;
    }

    .feature-container img:hover {
        filter: drop-shadow(8px 8px 10px gray);
        transform: scale(1.08);
    }

    .feature-container1 img {
        width: 35%;
        margin: 25px;
    }

    .all_game {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .button {
        margin: 25px;
        border: 2px solid;
        background: none;
        padding: 10px 10px;
        font-size: 20px;
        cursor: pointer;
        border-color: #3498db;
        color: #3498db;
    }

    .button:hover {
        background: #3498db;
        color: white;
        border-color: #3498db;
        transition: 0.5s ease-in;
    }

    * {
        box-sizing: border-box;

    }

    .container {
        max-width: 1170px;
        margin-left: auto;
        margin-right: auto;
        padding: 2em;
        font-family: arial;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    .brand {
        text-align: center;
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .brand span {
        color: black;
    }

    .wrapper {
        box-shadow: 0 0 20px 0 rgba(57, 82, 163, 0.7);
    }

    .wrapper>* {
        padding: 1em;
    }

    .company-info {
        background: #0575E6;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    .company-info h3,
    .company-info ul {
        text-align: center;
        margin: 0 0 1rem 0;
    }

    .contact {
        background: #004e92;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;

    }

    .contact form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
    }

    .contact form label {
        display: block;
    }

    .contact form p {
        margin: 0;
    }

    .contact form .full {
        grid-column: 1 / 3;
    }

    .contact form button,
    .contact form input,
    .contact form textarea {
        width: 100%;
        padding: 1em;
        border: solid 1px black;
        border-radius: 4px;
        color: black;
    }

    .contact form textarea {
        resize: none;
    }

    .contact form label {
        color: #004e92;
    }

    .contact form button {
        background: #0575E6;
        border: 0;
        color: #e4e4e4;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: bold;
    }

    .contact form button:hover,
    .contact form button:focus {
        background: #3952a3;
        color: #ffffff;
        outline: 0;
        transition: background-color 2s ease-out;
    }

    @media only screen and (min-width: 720px) {
        .wrapper {
            display: grid;
            grid-template-columns: 1fr 2fr;
        }

        .wrapper>* {
            padding: 2em;
        }

        .company-info {
            border-radius: 4px 0 0 4px;
        }

        .contact {
            border-radius: 0 4px 4px 0;
        }

        .company-info h3,
        .company-info ul,
        .brand {
            text-align: left;
        }

    }

    