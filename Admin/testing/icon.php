<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="nav.css" />
    <title>Home Page</title>
</head>

<body>
    <?php include "av_bar.php"?>
    
    <div class="page-wrapper">
        <section class="headline">
        <h1 style="color: black;">HELLO</h1><br><br>
            <img class="mario" src="..\Images\mario.jpg">
             <img class="mario" src="..\Images\sonic.jpg">
        </section>
        <h1 id="header" style="color: black;margin:20px;">Our Featuered Games</h1>
        <section id="features" class="features">
            <div class="feature-container">
                <img style="position: relative;" src="..\Images\COC.jpg">
                <button href="something" class="play_button">Play Now!</button>
                

            </div>
            <div class="feature-container">
                <img src="..\Images\cr.png">
                <button href="something" class="play_button">Play Now!</button>
            </div>
            <div class="feature-container">
                <img src="..\Images\hay-day.jfif">
                <button href="something" class="play_button">Play Now!</button>
            </div>

        </section>
        <div class="all_game">
            <button href="something" class="button">All Games</button>
        </div>
        <hr class="hr" style="width: 90%;height:2px;background:#3498db;border:none;margin-right:5%;margin-left:5%">
        <div class="feature-container1">
            <img src="..\Images\leaderboards.png">
            <div class="leader">

                <h1 class="header_leader" style="color:#fa5655">LEADERBOARD</h1>
                <p id="content_leader" class="content_leader" >Join The Global Player and View Your Standings in the Leaderboard</p>
                <button  class="button_leader"><a style="color:#f8b500;text-decoration:none;" href="..\Footer\about_us.php">View Leaderboard</a></button>
            </div>
        </div>
        <hr class="hr" style="width: 90%;height:2.5px;background:#3498db;border:none;margin-right:5%;margin-left:5%;">
        <div style="padding:2%">
        <div id="about-section" class="about-section">
        <h1 style="font-family: arial;">About Us</h1><br>
        <p style="font-family: arial;" >We are a bunch of IT student who want to help the society in a fun way.</p>
        
        
        <button  class="button">Know More!</button>
        </div>
    </div>
    <hr class="hr" style="width: 90%;height:2.5px;background:#3498db;border:none;margin-right:5%;margin-left:5%;">
    </div>
    <div class="container">



<div class="wrapper">

    <!-- COMPANY INFORMATION -->
    <div class="company-info">
        <h3 style="font-family: arial;">Brain Gamer</h3>

        <ul>
            <li style="font-family: arial;"><i class="fa fa-map"></i> Mumbai , India</li>
            <!-- <li style="font-family: arial;"><i class="fa fa-phone"></i> (555) 555-5555</li> -->
            <li style="font-family: arial;"><i class="fa fa-envelope"></i> braingamer@gmail.com</li>
        </ul>
    </div>
    <!-- End .company-info -->

    <!-- CONTACT FORM -->
    <div class="contact">
        <h3 style="font-family: arial;">E-mail Us</h3>

        <form id="contact-form">

            <p>
            <label style="font-family: arial;">Company</label>
                <input style="font-family: arial;font-weight:bold" placeholder="First Name" type="text" name="name" id="name" required>
            </p>

            <p>
                <label style="font-family: arial;">Company</label>
                <input type="text" style="font-family: arial;font-weight:bold" name="company" placeholder="Last Name" id="company">
            </p>

            <p>
                <label style="font-family: arial;">E-mail Address</label>
                <input type="email" style="font-family: arial;font-weight:bold" placeholder="Email" name="email" id="email" required>
            </p>

            <p>
                <label style="font-family: arial;">Phone Number</label>
                <input type="text" style="font-family: arial;font-weight:bold" placeholder="Mobile Number" name="phone" id="phone">
            </p>

            <p class="full">
                <label style="font-family: arial;">Message</label>
                <textarea name="message" style="font-family: arial;font-weight:bold" placeholder="Your Message" rows="5" id="message"></textarea>
            </p>

            <p class="full">
                <button style="font-family: arial;" style="font-family: arial;font-weight:bold" type="submit">Submit</button>
            </p>

        </form>
        <!-- End #contact-form -->
    </div>
    <!-- End .contact -->

</div>
<!-- End .wrapper -->
</div>
<!-- End .container -->

</body>

</html>
<script>
    
    
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
        margin-top:5%;
        
        
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
    .play_button{
        border: 2px solid;
        background: #02AAB0;
        padding: 10px 10px 10px 10px;
        font-size: 20px;
        cursor: pointer;
        border-color: #02AAB0;
        color: white;
        border-radius: 3vh;
    }
    .play_button:hover{
        background: #02AAB0;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #00CDAC, #02AAB0);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #00CDAC, #02AAB0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        color: white;
        border-color:  #f1f1f1;
        transition: 0.5s ease;
    }
    /*Stying for small screens*/
    @media screen and (max-width: 800px) {
        .features {
            flex-direction: column;
            padding: 10px;
        }

        /* MOBILE HEADINGS */

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
            height: 0vh;
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
        .content_leader{
            display: none;
        }
        .header_leader{
            font-size: 1.6rem;
        }
        .button_leader{
            margin-left:8%;
        }
    }

    /*Animating Hamburger Icon on Click*/
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
    a{
        font-size: 1.3rem; 
    }
    /* BASIC SETUP */

    .page-wrapper {
        width: 100%;
        height: auto;
    }

    .headline,
    .headline img {
        width: 100%;
        height: 90vh;
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
        width: 100%;
        margin-bottom: 15px;
        transition: 1s ease;
    }
    .feature-container img:hover{
        
        opacity: 0.2;
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

.wrapper > * {
  padding: 1em;
}

/* ------------------- */
/* COMPANY INFORMATION */
/* ------------------- */

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

/* ------- */
/* CONTACT */
/* ------- */

.contact {
  background: #004e92;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  
}

/* ---- */
/* FORM */
/* ---- */

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
  color:black;
}

.contact form textarea {
  resize: none;
}
.contact form label{
    color:#004e92;
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

/* ------------- */
/* MEDIA QUERIES */
/* ------------- */

@media only screen and (min-width: 700px) {
  .wrapper {
    display: grid;
    grid-template-columns: 1fr 2fr;
  }

  .wrapper > * {
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
</style>