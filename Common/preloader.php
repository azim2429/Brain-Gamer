<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<div id="preloader">
        
        <div id="status"><h1 style="position:relative;color:white">Loading....</h1></div>
        
    </div>
</body>
</html>
<style>
    h1{
        font-family: fantasy;
        
    }
#preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #0c59b5;
        display: flex;
        justify-content: center;
        align-content: center;
        z-index: 99;
        
    }

    #status {
        width: 400px;
        height: 400px;
        position: absolute;
        top:35%;
        
        background-image: url(../Images/pre.gif);
        
        background-repeat: no-repeat;
        background-position: center;
        margin: -100px 0 0 -100px;
    }
</style>

<script>
    $(window).on('load', function() {
        $('#status').delay().fadeIn();
        $('#preloader').delay(1000).fadeOut();
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    });
</script>