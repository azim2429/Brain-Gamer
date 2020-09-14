
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
<?php
include '..\Authentication\connect_db.php';
?>
<div class="content">
    
	<h1 id="h1" class="h1" style="text-align: center;position:relative;top:19vh;">Our Latest Games</h1>
	<div class="category">
	<form method="GET" action="index.php">
	
		<button href="something" id="button" type="submit" name="Speed" class="button">Speed</button>
		<button href="something"id="button" type="submit" name="Memory" id class="button">Memory</button>
		<button href="something" id="button" type="submit" name="Attention" class="button">Attention</button>
		<button href="something" id="button" type="submit" name="All" class="button">All Games</button>
		
	</form>
	<form method="GET" action="index.php">
		<div class="find" style="position: absolute;right:20%;top:25.5%">
	<input href="something" type="search" name="search"  id="button" placeholder="Seacrh Games..." class="search"><button  style="background: none;border:none;cursor:pointer" name="find"><i style="color:#3498db;font-size:4.5vh;" class="fa fa-search"></i></button></input>
		</div>
	</form>
</div>
	<div class="grid">
	<?php 
		if (isset($_GET['Speed'])) {
		$s_query = "select * from game_image where game_type='Speed'";
		$s_res = mysqli_query($conn,$s_query);
		while ($s_row = mysqli_fetch_array($s_res)) {
			$s_name =  $s_row['name'];
			$s_image =  base64_encode($s_row['image']);
			$s_game_desc =  $s_row['game_desc'];
			$s_link =  $s_row['link'];
			
		?>
		<figure class="effect-duke">
			<img src="data:image/jpg;charset=utf8;base64,<?php echo $s_image?>" class="mole" />
			<figcaption>
				<h2><span><?php echo $s_name; ?></span></h2>
				<p><?php echo $s_game_desc; ?></p>
				
				<label><a class="a" href="<?php echo $s_link; ?>?id=<?php echo $s_row['game_id'];?>&name=<?php echo $s_row['name'];?>&type=<?php echo $s_row['game_type'];?>">Play Now</a></label>
				
			</figcaption>
		</figure>
		<?php }}
		else if (isset($_GET['Memory'])) {
			$m_query = "select * from game_image where game_type='Memory'";
			$m_res = mysqli_query($conn,$m_query);
			while ($m_row = mysqli_fetch_array($m_res)) {
				$m_name =  $m_row['name'];
				$m_image =  base64_encode($m_row['image']);
				$m_game_desc =  $m_row['game_desc'];
			    $m_link =  $m_row['link'];
			?>
			<figure class="effect-duke">
				<img src="data:image/jpg;charset=utf8;base64,<?php echo $m_image?>" class="mole" />
				<figcaption>
					<h2><span><?php echo $m_name; ?></span></h2>
					<p><?php echo $m_game_desc; ?></p>
					
					<label><a class="a" href="<?php echo $m_link; ?>?id=<?php echo $m_row['game_id'];?>&name=<?php echo $m_row['name'];?>&type=<?php echo $m_row['game_type'];?>">Play Now</a></label>
					
				</figcaption>
			</figure>
			<?php }}else if (isset($_GET['Attention'])) {
		$a_query = "select * from game_image where game_type='Attention'";
		$a_res = mysqli_query($conn,$a_query);
		while ($a_row = mysqli_fetch_array($a_res)) {
			$a_name =  $a_row['name'];
			$a_image =  base64_encode($a_row['image']);
			$a_game_desc =  $a_row['game_desc'];
		    $a_link =  $a_row['link'];
		?>
		<figure class="effect-duke">
			<img src="data:image/jpg;charset=utf8;base64,<?php echo $a_image?>" class="mole" />
			<figcaption>
				<h2><span><?php echo $a_name; ?></span></h2>
				<p><?php echo $a_game_desc; ?></p>
				
				<label><a class="a" href="<?php echo $a_link; ?>?id=<?php echo $a_row['game_id'];?>&name=<?php echo $a_row['name'];?>&type=<?php echo $a_row['game_type'];?>">Play Now</a></label>
				
			</figcaption>
		</figure>
		<?php }}else if (isset($_GET['All'])){
			$al_query = "select * from game_image";
			$al_res = mysqli_query($conn,$al_query);
			while ($al_row = mysqli_fetch_array($al_res)) {
			$al_name =  $al_row['name'];
			$al_image =  base64_encode($al_row['image']);
			$al_game_desc =  $al_row['game_desc'];
			$al_link =  $al_row['link'];
			?>
		<figure class="effect-duke">
			<img src="data:image/jpg;charset=utf8;base64,<?php echo $al_image ?>" class="mole" />
			<figcaption>
				<h2><span><?php echo $al_name; ?></span></h2>
				<p><?php echo $al_game_desc; ?></p>
				
				<label><a class="a" href="<?php echo $al_link; ?>?id=<?php echo $al_row['game_id'];?>&name=<?php echo $al_row['name'];?>&type=<?php echo $al_row['game_type'];?>">Play Now</a></label>
				
			</figcaption>
		</figure>
		
		<?php }}
		
		else if (isset($_GET['find'])) {
		$search = $_GET['search'];
		$f_sql = "select * from game_image where name like '%".$search."%' ";
		$f_res = mysqli_query($conn, $f_sql);
		while ($f_row = mysqli_fetch_array($f_res)) {
			$f_name =  $f_row['name'];
			$f_image =  base64_encode($f_row['image']);
			$f_game_desc =  $f_row['game_desc'];
		    $f_link =  $f_row['link'];
		?>
		<figure class="effect-duke">
			<img src="data:image/jpg;charset=utf8;base64,<?php echo $f_image?>" class="mole" />
			<figcaption>
				<h2><span><?php echo $f_name; ?></span></h2>
				<p><?php echo $f_game_desc; ?></p>
				
				<label><a class="a" href="<?php echo $f_link; ?>?id=<?php echo $f_row['game_id'];?>&name=<?php echo $f_row['name'];?>&type=<?php echo $f_row['game_type'];?>">Play Now</a></label>
				
			</figcaption>
		</figure>
		<?php }}else{
			$query = "select * from game_image";
			$res = mysqli_query($conn,$query);
			while ($row = mysqli_fetch_array($res)) {
			$name =  $row['name'];
			$image =  base64_encode($row['image']);
			$game_desc =  $row['game_desc'];
			$link =  $row['link'];
			?>
			<figure class="effect-duke">
			<img src="data:image/jpg;charset=utf8;base64,<?php echo $image ?>" class="mole" />
			<figcaption>
				<h2><span><?php echo $name; ?></span></h2>
				<p><?php echo $game_desc; ?></p>
				
				<label><a class="a" href="<?php echo $link; ?>?id=<?php echo $row['game_id'];?>&name=<?php echo $row['name'];?>&type=<?php echo $row['game_type'];?>">Play Now</a></label>
				
			</figcaption>
		</figure>
		<?php }} ?>
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
		.find{
			position: relative;
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
		document.body.style.backgroundColor = "#191970";
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