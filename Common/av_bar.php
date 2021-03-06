<?php
session_start();
include '..\Authentication\connect_db.php';
?>
<?php
if (isset($_REQUEST['logout'])) {
    session_unset();
    session_destroy();
    header("Location:..\Authentication\login1.php");
}
?>
<?php
 
  if (!isset($_SESSION['gamer_id'])) {
    header("Location:../not_found/index.php");
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="..\Images\circle-cropped.png" />
    <title>Home Page</title>
</head>

<body>
    <nav>
        <div class="logo"><a href="../Home/home_page.php">
                <img src="../Images/logo.png"></a>
        </div>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="../Home/home_page.php">Home</a></li>
            <li><a href="../Game/index.php">Our Games</a></li>
            <li><a href="../Your Stats/stats.php">Your Stats</a></li>
            <li><a href="../Insights/index.php">Insights</a></li>
            <?php if (!isset($_SESSION['uphoto'])) {?>
                <a href="..\Authentication\login1.php">
                    <li><button class="login-button">Login</button></li>
                </a>
                <a href="..\Authentication\registration1.php">
                    <li><button class="join-button">Join</button></li>
                </a>
            <?php } else if (isset($_SESSION['uphoto'])) {
                $gamer_id =  $_SESSION['gamer_id'];
                $query = "select * from user_registration where gamer_id= $gamer_id";
                $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
                $row = mysqli_fetch_array($res); ?>
                <form action="" method="POST">
                    <a>
                        <li><button name=logout class="login-button" style="color:white;">Logout</button></li>
                    </a>
                </form>
                <a href="..\Authentication\profile.php">
                    <li><button  class="join-button"><?php echo $row['uname'] ?></button></li>
                </a>
                <img class="uphoto" src="data:image/jpg;charset=utf8;base64,<?php echo $row['uphoto'] ?>" onerror="this.onerror=null;this.src='../Images/alt.png';" style="width: 5%;height:65%;border-radius:50%">
            <?php } ?>
        </ul>
    </nav>
</body>

</html>
<script>
    const hamburger = document.querySelector(".hamburger");
    const navLinks = document.querySelector(".nav-links");
    const links = document.querySelectorAll(".nav-links li");

    hamburger.addEventListener('click', () => {
        //Animate Links
        navLinks.classList.toggle("open");
        links.forEach(link => {
            link.classList.toggle("fade");
        });

        //Hamburger Animation
        hamburger.classList.toggle("toggle");
    });
</script>
<style>
    ::-webkit-scrollbar {
        width: 4px;
        height: 15px;
    }

    ::-webkit-scrollbar-track-piece {
        background-color: black;
    }

    ::-webkit-scrollbar-thumb:vertical {
        height: 30px;
        background-color: #61DAFB;
    }
    * {
        margin: 0;
        padding: 0;
        
        scroll-behavior: smooth;
        letter-spacing: 1px;
    }

    #logo_dark {
        display: none;
    }

    #logo_light {
        display: block;
    }

    body {
        overflow-x: hidden;
    }

    nav {
        height: 6rem;
        width: 100vw;
        background-color: black;
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
        display: flex;
        position: fixed;
        z-index: 1;
        opacity: 1;

        font-family: Impact, Charcoal, sans-serif;
    }


    .logo {
        padding: 1vh 1vw;
        text-align: center;
        opacity: 1;
    }

    .logo img {
        height: 4rem;
        width: 6rem;
    }


    .nav-links {
        display: flex;
        list-style: none;
        width: 88vw;
        padding: 0 0.7vw;
        justify-content: space-evenly;
        align-items: center;
        text-transform: uppercase;
    }

    .nav-links li a {
        text-decoration: none;
        margin: 0 0.7vw;
    }

    .nav-links li a:hover {
        color: #61DAFB;
    }

    .nav-links li {
        position: relative;
    }


    .login-button {
        background-color: transparent;
        border: 1.5px solid #f2f5f7;
        border-radius: 2em;
        padding: 0.6rem 0.8rem;
        margin-left: 2vw;
        font-size: 1rem;
        cursor: pointer;

    }

    .login-button:hover {
        color: #131418;
        background-color: #f2f5f7;
        border: 1.5px solid #f2f5f7;
        transition: all ease-in-out 350ms;
    }

    .join-button {
        color: #131418;
        background-color: #61DAFB;
        border: 1.5px solid #61DAFB;
        border-radius: 2em;
        padding: 0.6rem 0.8rem;
        font-size: 1rem;
        cursor: pointer;
    }

    .join-button:hover {
        color: #f2f5f7;
        background-color: transparent;
        border: 1.5px solid #f2f5f7;
        transition: all ease-in-out 350ms;
    }


    .hamburger div {
        width: 30px;
        height: 3px;
        background: #f2f5f7;
        margin: 5px;
        transition: all 0.3s ease;
    }

    .hamburger {
        display: none;
    }

    @media screen and (max-width: 720px) {
        nav {
            position: fixed;
            z-index: 3;
            opacity: 1;
        }

        .uphoto {
            display: none;
        }

        .hamburger {
            display: block;
            position: absolute;
            cursor: pointer;
            right: 5%;
            top: 50%;
            transform: translate(-5%, -50%);
            z-index: 2;
            transition: all 0.7s ease;
        }

        .nav-links {
            position: fixed;
            background: #131418;
            height: 100vh;
            width: 100%;
            flex-direction: column;
            clip-path: circle(50px at 90% -20%);
            -webkit-clip-path: circle(50px at 90% -10%);
            transition: all 1s ease-out;
            pointer-events: none;
        }

        .nav-links.open {
            clip-path: circle(1000px at 90% -10%);
            -webkit-clip-path: circle(1000px at 90% -10%);
            pointer-events: all;
        }

        .nav-links li {
            opacity: 0;
        }

        .nav-links li:nth-child(1) {
            transition: all 0.5s ease 0.2s;
        }

        .nav-links li:nth-child(2) {
            transition: all 0.5s ease 0.4s;
        }

        .nav-links li:nth-child(3) {
            transition: all 0.5s ease 0.6s;
        }

        .nav-links li:nth-child(4) {
            transition: all 0.5s ease 0.7s;
        }

        .nav-links li:nth-child(5) {
            transition: all 0.5s ease 0.8s;
        }

        .nav-links li:nth-child(6) {
            transition: all 0.5s ease 0.9s;
            margin: 0;
        }

        .nav-links li:nth-child(7) {
            transition: all 0.5s ease 1s;
            margin: 0;
        }

        li.fade {
            opacity: 1;
        }
    }
</style>