<?php include 'icon.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="nav" id="nav">
        <img class="logo" src="..\Images\logo.png">
        <nav>

            <a href="#">Home</a>
            <a href="#">Games</a>
            <a href="#">Your Stats</a>
            <a href="#">Insights</a>

            <a class="profile" href="..\Authentication\login.php">Profile</a>

            <div class="animation start-home"></div>
            <!-- <input type="text"  placeholder="Search.." style="height: 25px;margin-left:20px;">
    <a href="javascript:void(0);" class="search" style="color:white;">
    <i class="fa fa-search"></i> -->
            </a>
            <a href="javascript:void(0);" style="color:white ;" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>


        </nav>
    </div>
    <div class="nav-2" id="nav-2">

        <a href="#">Home</a>
        <br><br>
        <a href="#">Games</a><br><br>
        <a href="#">Your Stats</a><br><br>
        <a href="#">Insights</a><br><br>

        <a  href="#">Profile</a>
    </div>

</body>

</html>
<style>
    html * {

        font-family: Arial, Helvetica, sans-serif;
    }

    nav {

        position: relative;
        width: 900px;
        height: 70px;
        background-color: black;
        left: 300px;

        font-size: 20px;
    }

    .icon {
        display: none;
    }

    nav a {
        margin-top: 10px;
        line-height: 50px;
        height: 100%;
        font-size: 15px;
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
        z-index: 0;
        transition: all .5s ease 0s;

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

    nav .start-about,
    a:nth-child(2):hover~.animation {
        width: 110px;
        left: 120px;
        background-color: #3498db;
    }

    nav .start-blog,
    a:nth-child(3):hover~.animation {
        width: 120px;
        left: 250px;
        background-color: #3498db;
    }

    nav .start-portefolio,
    a:nth-child(4):hover~.animation {
        width: 120px;
        left: 390px;
        background-color: #3498db;
    }

    nav .start-contact,
    a:nth-child(5):hover~.animation {
        width: 120px;
        left: 780px;
        background-color: #e67e22;
    }

    body {
        font-size: 16px;
        font-family: Arial, Helvetica, sans-serif;
        background: #243b55;
        margin: 0;
    }


    span {
        color: #2BD6B4;
    }

    .profile {
        position: absolute;
        right: 5px;
    }

    .logo {
        position: absolute;
        height: 70px;
        width: 100px;
        left: 200px;
    }

    .search {
        display: block;
    }

    .nav-2 {
        display: none;
    }

    @media only screen and (max-width: 700px) {


        nav {
            position: relative;
            width: 80.6%;
            height: 70px;
            background-color: black;
            left: 80px;

            font-size: 0;
        }

        nav a,
        nav .animation {
            display: none;
        }



        .logo {


            left: 0px;
        }

        .icon {
            display: block;
            position: absolute;
            left: 250px;
            top: 2px;
            font-size: 28px;
        }

        input {
            margin-top: 20px;

        }
    }

    .search {
        display: none;

    }

    .nav-2 {

        background-color: black;
        width: 100%;
          
        
        text-decoration: none;
        text-transform: uppercase;
        color: white;
        cursor: pointer;
        border-color: white;
        text-align: center;
        padding-bottom: 20px;;

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
        width: 100%;
        position: relative;
        margin-bottom: 50px;
    }

    @media only screen and (max-width: 400px) {

        .logo {
            padding: 0px;
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




    }

    @media (min-width: 1000px) and (max-width: 1400px) {

        .nav-2 {
            visibility: hidden;
        }

        .logo {
            left: 60px;
        }

        nav {
            left: 140px;
            width: 80%;
        }

        nav .start-contact,
        a:nth-child(5):hover~.animation {
            width: 120px;
            left: 85%;

        }
    }

    @media (min-width: 700px) and (max-width: 1000px) {

        .nav-2 {
            visibility: hidden;
        }

        .logo {
            left: 10px;
        }

        nav {
            left: 90px;
            width: 80%;
        }

        nav .start-contact,
        a:nth-child(5):hover~.animation {
            width: 120px;
            left: 82%;

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
</script>