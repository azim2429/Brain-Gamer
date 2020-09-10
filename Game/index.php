<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>All Games</title>
	<?php include "../Common/icon.php" ?>
</head>

<body>
	<?php include "..\Common\av_bar.php" ?>
	<?php include "..\Common\preloader.php" ?>
</body>

</html>
<div class="content">
    
	<h1 id="h1" class="h1" style="text-align: center;position:relative;top:19vh;">Our Latest Games</h1>
	<div class="category">
		<button href="something" id="button" class="button">Speed</button>
		<button href="something"id="button" id class="button">Memory</button>
		<button href="something" id="button" class="button">Attention</button>
		<button href="something" id="button" class="button">Others</button>
		<input href="something" type="search" id="button" placeholder="Seacrh Games..." class="search"><i style="color:#3498db;font-size:4.5vh" class="fa fa-search"></i></input>

	</div>
	<div class="grid">
		<figure class="effect-duke">
			<img src="../Images/mole.svg" class="mole" />
			<figcaption>
				<h2>Whack a <span> </span> <span>Mole!</span></h2>
				<p>Hit some bunnies popping out <br>from their holes</p>
				
				<label><a class="a" href="../Whack A Mole!/index.php">Play Now</a></label>
				
			</figcaption>
		</figure>
		<figure class="effect-duke">
			<img style="height: 100%;" src="../Images/flick_master_cover.png" alt="img27" />
			<figcaption>
				<h2>Flick <span>Master</span></h2>
				<p>Match the arrows as you see the color of the arrows</p>
				<label><a class="a" href="../Flick_Master/flick_master.php">Play Now</a></label>


			</figcaption>
		</figure>
		<figure class="effect-duke">
			<img src="../Images/hay-day.jfif" />
			<figcaption>
				<h2>Word  <span>Memory</span></h2>
				<p>Memorize the words and write them after 20s</p>
				<label><a class="a" href="../Word_Memory/word_memory.php">Play Now</a></label>
			</figcaption>
		</figure>
		<figure class="effect-duke">
			<img src="../Images/COC.jpg"/>
			<figcaption>
				<h2>Clash <span>CLans</span></h2>
				<p>Small Description About the game.</p>
				<label>Play Now</label>
			</figcaption>
		</figure>
		<figure class="effect-duke">
			<img src="../Images/cr.png" />
			<figcaption>
				<h2>Clash <span>Royale</span></h2>
				<p>Small Description About the game.</p>
				<label>Play Now</label>
			</figcaption>
		</figure>
		<figure class="effect-duke">
			<img src="../Images/hay-day.jfif"/>
			<figcaption>
				<h2>Hay <span>Day</span></h2>
				<p>Small Description About the game.</p>
				<label>Play Now</label>
			</figcaption>
		</figure>
	</div>
</div>
<style>
	*,
	*:after,
	*:before {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.clearfix:before,
	.clearfix:after {
		display: table;
		content: '';
	}
    .clearfix:after {
		clear: both;
	}
    body {
		/* background:#2f3238; */
		background: white;
		color: #fff;
		font-weight: 400;
		font-size: 1em;
		font-family: 'Raleway', Arial, sans-serif;
	}
    .h1 {
		color: black;
		font-family: Impact, Charcoal, sans-serif;
	}

	a{
		font-size: 20px;
		text-decoration: none;
		
	}
	.a{
		color:white;
	}
	.a:hover,lablel{
		color:red;
	}


	section {
		padding: 1em;
		text-align: center;
	}

	.content {
		margin: 0 auto;
		max-width: 100%;
	}

	.grid {

		margin: 0 auto;
		padding: 1em 0 1em;
		max-width: 100%;
		list-style: none;
		text-align: center;
		margin-left: 15vh;
	}
    .grid figure {
		position: relative;
		float: left;
		overflow: hidden;
		margin: 10px 1%;
		min-width: 320px;
		max-width: 400px;
		max-height: 400px;
		width: 80%;
        text-align: center;
    }
	

	.grid figure img {
		position: relative;
		display: block;
		min-height: 100%;
		
		max-width: 100%;
		opacity: 0.8;
	}
    .mole{
		width: 100%;
	}

	.grid figure figcaption {
		padding: 2em;
        color: #fff;
		text-transform: uppercase;
		font-size: 1.25em;
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;

	}

	.grid figure figcaption::before,
	.grid figure figcaption::after {
		pointer-events: none;
	}

	.grid figure figcaption,
	.grid figure figcaption>a {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}
    .grid figure figcaption>a {
		z-index: 1000;
		text-indent: 200%;
		white-space: nowrap;
		font-size: 0;
		opacity: 0;
	}

	.grid figure h2 {
		word-spacing: -0.15em;
		font-weight: 300;
	}

	.grid figure h2 span {
		font-weight: 800;
	}

	.grid figure h2,
	.grid figure p {
		margin: 0;
	}

	.grid figure p {
		letter-spacing: 1px;
		font-size: 68.5%;
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

	.search {
		margin: 25px;
		border: 2px solid;
		background: none;
		padding: 10px 10px;
		font-size: 20px;
        border-color: #3498db;
		color: #3498db;
	}
    .category {
		margin-left: 30vh;
		margin-top: 20vh;
	}
    figure.effect-duke {
		background: -webkit-linear-gradient(-45deg, #34495e 0%, #cc6055 100%);
		background: linear-gradient(-45deg, #34495e 0%, #cc6055 100%);
		border-radius: 2vh;
		margin-bottom: 30px;
	}

	figure.effect-duke img,
	figure.effect-duke p {
		-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
		transition: opacity 0.35s, transform 0.35s;
    }

	figure.effect-duke:hover img {
		opacity: 0.1;
		-webkit-transform: scale3d(2, 2, 1);
		transform: scale3d(2, 2, 1);
	}

	figure.effect-duke img {
		border-radius: 2vh;
		filter: brightness(50%);
    }
    figure.effect-duke h2 {
		-webkit-transition: -webkit-transform 0.35s;
		transition: transform 0.35s;
		-webkit-transform: scale3d(0.8, 0.8, 1);
		transform: scale3d(0.8, 0.8, 1);
		-webkit-transform-origin: 50% 100%;
		transform-origin: 50% 100%;
		margin-top: 70px;
		filter: brightness(150%);
    }

	figure.effect-duke p {
		position: absolute;
		bottom: 0;
		left: 0;
		margin: 30px;
		padding: 30px;
        text-transform: none;
		font-size: 90%;
		opacity: 0;
		-webkit-transform: scale3d(0.8, 0.8, 1);
		transform: scale3d(0.8, 0.8, 1);
		-webkit-transform-origin: 50% -100%;
		transform-origin: 50% -100%;
	}

	figure.effect-duke:hover h2,
	figure.effect-duke:hover p,
	figure.effect-duke:hover label {
		opacity: 1;
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	}

	figure.effect-duke label {
		position: absolute;
		bottom: 0;
		left: 0;
		margin-left: 150px;
		margin-bottom: 175px;
		padding: 10px;
		border: 2px solid #fff;
		text-transform: none;
		font-size: 90%;
		opacity: 0;
		-webkit-transform: scale3d(0.8, 0.8, 1);
		transform: scale3d(0.8, 0.8, 1);
		-webkit-transform-origin: 50% -100%;
		transform-origin: 50% -100%;
		border-color: white;
		color: white;
		font-weight: bolder;
	}
    figure.effect-duke label:hover {
		opacity: 1;
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
		cursor: pointer;
		background: white;
		color: red;
		border-color: white;
		transition: 0.5s ease-in;
	}
    @media screen and (max-width: 50em) {
		.content {
			padding: 0 0;
			text-align: center;
		}

		.grid figure {
			display: inline-block;
			float: none;
			
			width: 100%;
		}

		.grid {
			margin: 0 0 0 0;

		}

		.category {
			margin-left: 0;
			margin-right:5vh;
			margin-top: 19vh;
		}

	}
</style>
<script>
	var mode = localStorage.getItem("mode");
	var h1 = document.getElementById("h1");
	
	console.log(mode);
	if(mode=="day"){
		localStorage.setItem("mode1", "day");
        var mode1 = localStorage.getItem("mode1");
        console.log(mode1);
	}
	else if(mode=="night"){
		document.body.style.backgroundColor = "#2d385e";
		h1.style.color = "white";
		
		
		localStorage.setItem("mode1", "night");
        var mode1 = localStorage.getItem("mode1");
        console.log(mode1);
		var x = document.getElementsByClassName('button');
        for (var i = 0; i < x.length; i++) {
            x[i].style.color = "white";
			x[i].style.borderColor = "white";
        }
	} 
	
</script>