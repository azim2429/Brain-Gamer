<!DOCTYPE html>
<html lang="en">
<?php include "..\Common\preloader.php" ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flappy Bird</title>
    <link href="https://fonts.googleapis.com/css?family=teko:700">
    <style>
        body{
            background: #58D68D;
        }
        canvas {
            border: 1px solid #000;
            display: block;
            margin: 0 auto
            
        }
    </style>
</head>

<body>
<?php include "..\Common\icon.php" ?>
    <?php include "..\Common\av_bar.php" ?>
    <a class="a_game" href="../Game/index.php">
        <i style="position:absolute;top:16%;left:10%;color:black" id="fa" class="fa fa-long-arrow-left">All Games</i></a>
    <br><br><br><br><br><br>
    <canvas id="bird" width="320" height="480"></canvas>
    <br><br><br>
    <p id="p" style="text-align: center;color:red;font-size:1.5rem">Note: The scores of this game won't be considered as it is a<b> Warm Up Game!</b></p>
    <script src="game.js"></script>

</body>

</html>
<style>
    a{
        font-size: 20px;
    }
</style>