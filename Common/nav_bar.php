<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="nav">
<img class="logo" src="..\Images\logo.png">
<nav>
    
	<a href="#">Home</a>
    <a href="#">Games</a>
    <a href="#">Your Stats</a>
    <a href="#">Insights</a>
    
    <a class="profile" href="#">Insights</a>
    
	<div class="animation start-home"></div>
</nav>
    </div>
</body>
</html>
<style>
nav {
    
	position: relative;
	width: 900px;
	height: 70px;
	background-color: black;
    left:300px;
	
	font-size: 0;
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
nav .start-home, a:nth-child(1):hover~.animation {
	width: 110px;
	left: 10px;
	background-color: #1abc9c;

}
nav .start-about, a:nth-child(2):hover~.animation {
	width: 110px;
	left: 120px;
	background-color: #e74c3c;
}
nav .start-blog, a:nth-child(3):hover~.animation {
	width: 120px;
	left: 240px;
	background-color: #3498db;
}
nav .start-portefolio, a:nth-child(4):hover~.animation {
	width: 120px;
	left: 370px;
	background-color: #9b59b6;
}
nav .start-contact, a:nth-child(5):hover~.animation {
	width: 120px;
	left: 780px;
	background-color: #e67e22;
}

body {
	font-size: 12px;
	font-family: sans-serif;
	background: white;
}
h1 {
	text-align: center;
	margin: 40px 0 40px;
	text-align: center;
	font-size: 30px;
	color: #ecf0f1;
	text-shadow: 2px 2px 4px #000000;
	font-family: 'Cherry Swash', cursive;
}

p {
    position: absolute;
    bottom: 20px;
    width: 100%;
    text-align: center;
    color: #ecf0f1;
    font-family: 'Cherry Swash',cursive;
    font-size: 16px;
}

span {
    color: #2BD6B4;
}
.profile{
    position: absolute;
    right:5px;
}
.logo{
    position: absolute;
    height: 70px;
    width: 80px;
    left: 230px;
}
@media only screen and (max-width: 700px) {
body {
    background-color: white;
  }
nav{
    position: relative;
	width: 250px;
	height: 70px;
	background-color: black;
    left:85px;
	
	font-size: 0;
} 
nav a,nav .animation{
    visibility: hidden;
} 
.logo{
    
    left: 14px;
}
}
</style>
