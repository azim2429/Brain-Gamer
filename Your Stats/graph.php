<?php include "..\Common\av_bar.php" ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<title>Report</title>
</head>
<body>
<link rel="import" href="../">
<?php
include '..\Authentication\connect_db.php';
$gamer_id =  $_SESSION['gamer_id'] ;
$o_query = "select CAST(AVG(accuracy) as int)as acc from user_stats where gamer_id = $gamer_id";
$o_res = mysqli_query($conn,$o_query);
while ($o_row = mysqli_fetch_array($o_res)) {
  $o_acc = $o_row['acc'];
}
?>
<?php
$gamer_id =  $_SESSION['gamer_id'] ;
$s_query = "select CAST(AVG(accuracy) as int)as acc from user_stats where gamer_id = $gamer_id and game_type='Speed'";
$s_res = mysqli_query($conn,$s_query);
while ($s_row = mysqli_fetch_array($s_res)) {
  $s_acc = $s_row['acc'];
}
?>
<?php

$gamer_id =  $_SESSION['gamer_id'] ;
$m_query = "select CAST(AVG(accuracy) as int)as acc from user_stats where gamer_id = $gamer_id and game_type='Memory'";
$m_res = mysqli_query($conn,$m_query);
while ($m_row = mysqli_fetch_array($m_res)) {
  $m_acc = $m_row['acc'];
}
?>
<?php

$gamer_id =  $_SESSION['gamer_id'] ;
$a_query = "select CAST(AVG(accuracy) as int)as acc from user_stats where gamer_id = $gamer_id  and game_type='Attention'";
$a_res = mysqli_query($conn,$a_query);
while ($a_row = mysqli_fetch_array($a_res)) {
  $a_acc = $a_row['acc'];
}
?>
<div id="wrapper">
	<h1> PERFORMANCE REPORT </h1>
	<br><br><br>

	 <!-- SIDE NAV -->
    
	 <div class="sidenav">
        <a href="#">Attention</a>
        <a href="#">Speed</a>
        <a href="#">Memory</a>s
        <a href="#">Co-ordination</a>
        <a href="#">Overall</a>

      </div>
         l̥      <!-- END SIDE NAV -->
	<div id="content">
		
		<ul id="bar">
			<li id="Attention">
				<div class="top">
					<img src="images/Attention.png" alt="" />
				</div>
				<div class="bottom">
					<div class="infobox">
						<h3>Attention</h3>
						<p><?php echo $a_acc ?>%</p>
					</div>
				</div>
			</li>
			<li id="Speed">
				<div class="top">
					<img src="images/Speed.png" alt="" />
				</div>
				<div class="bottom">
					<div class="infobox">
						<h3>Speed</h3>
						<p><?php echo $s_acc ?>%</p>
					</div>
				</div>
			</li>
			<li id="Memory">
				<div class="top">
					<img src="images/Memory.png" alt="" />
				</div>
				<div class="bottom">
					<div class="infobox">
						<h3>Memory</h3>
						<p><?php echo $m_acc ?>%</p>
					</div>
				</div>
			</li>
			
			
			<li id="Overall">
				<div class="top">
					<img src="images/Overall.png" alt="" />
				</div>
				<div class="bottom">
					<div class="infobox">
						<h3>Overall</h3>
						<p><?php echo $o_acc ?>%</p>
					</div>
				</div>
			</li>
		</ul>
		
	</div>
</div>
</body>
</html>

<style>
	/* BASIC RESET */
ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,body,Speed,p,blockquote,fieldset,input{margin:0; padding:0;}

/* HTML ELEMENTS */
body
 { background: -moz-radial-gradient(#364D58,#000); background: -webkit-gradient(radial, center center,10,center center,1000, from(#364D58), to(#000)); color:#555; background-color:#151f23; }
h1 { font: bold 50px Helvetica, Arial, Sans-serif; text-align: center; color: #eee; text-shadow: 0px 2px 6px #333; }
h1 small{ font-size: 20px; text-transform:uppercase; letter-spacing: 14px; display: block; color: #ccc; margin-top:10px; }
h2 a { display: block; text-decoration: none; margin: 0 0 30px 0; font: italic 40px Georgia, Times, Serif;  text-align: center; color: #bfe1f1; text-shadow: 0px 2px 6px #333; }
h2 a:hover { color: #90bcd0; }
a{
	font-size: 20px;
}
/* COMMON CLASSES */
.break { clear:both;}

/* WRAPPER */
#wrapper { width:400px; margin:auto; }

/* CONTENT */
#content 
#content h2 { font: bold 30px Helvetica, Arial, Sans-serif; color:#eee; text-shadow: 0px 2px 6px #333; margin-left:400px; padding-top:20px;}

/* BAR CHART */
#bar { list-style:none;  }
#bar li 

/* Last bottom should have a shadow */
#bar li div.bottom { -moz-box-shadow: 0 10px 10px hsla(0,0%,0%,.2); -webkit-box-shadow: 0 10px 30px hsla(0,0%,0%,.2); box-shadow: 0 10px 30px hsla(0,0%,0%,.2); }

/* Ellipse top */
#bar li div.top { background-color:rgba(213,238,241,0.5); position:relative; float:left; margin-left:10px;
	width:40px; height:100px; -moz-border-radius: 40px/100px; -webkit-border-radius: 40px 100px; border-radius: 40px/100px;
	-webkit-transition-property: margin-left;
	-webkit-transition-duration: 500ms;
}
#bar li div.top img { margin-left:10px; margin-top:15px; }

/* Bar bottom */
#bar li div.bottom { position:relative; margin:5px 0; width:50px;
	height:100px; -moz-border-radius: 40px/100px; -webkit-border-radius: 40px 100px; border-radius: 40px/100px;
	background:-moz-linear-gradient(-90deg, #97a7a9, #b8cbcd); background:-webkit-gradient(linear, 0 top, 0 bottom) from(#97a7a9), to(#b8cbcd);
	-webkit-transition-property: width;
	-webkit-transition-duration: 500ms;
}
#bar li div.bottom div.infobox { padding:40px 0 0 600px;
	-webkit-transition-property: color;
	-webkit-transition-duration: 500ms;
}
#bar li div.bottom div.infobox h3 { font-family:Georgia,serif,Times; }
#bar li div.bottom div.infobox p { font-family:"Lucida Grande",Arial,Helvetica,Sans-Serif; opacity: 0;
	-webkit-transition-property: opacity;
	-webkit-transition-duration: 500ms;
}

/* General hover actions */
#bar li:hover div.bottom div.infobox { color:#eee; text-shadow: 0px 5px 5px #111; }
#bar li:hover div.bottom div.infobox p { opacity:1; }

/* Attention bar */
#Attention div.top { z-index:99; }
#Attention div.bottom { z-index:98; height:150px; }
#Attention:hover div.top { z-index:999; background-color:#1f81ac; margin-left:<?php echo $a_acc ?>%; }
#Attention:hover div.bottom { z-index:998; background-color:#1a6c90; width:<?php echo $a_acc+10 ?>%;
	background:-moz-linear-gradient(-90deg, #1a6c90, #14506b); background:-webkit-gradient(linear, 0 top, 0 bottom, from(#1a6c90), to(#14506b)); }

/* Speed bar */
#Speed div.top { z-index:97; }
#Speed div.bottom { z-index:96; height:200px; }
#Speed:hover div.top { z-index:997; background-color:#bc003c; margin-left:<?php echo $s_acc ?>%; }
#Speed:hover div.bottom { z-index:996; background-color:#9d0032; width:<?php echo $s_acc+10 ?>%;
	background:-moz-linear-gradient(-90deg, #9d0032, #7a0027); background:-webkit-gradient(linear, 0 top, 0 bottom, from(#9d0032), to(#7a0027)); }

/* Memory bar */
#Memory div.top { z-index:95; }
#Memory div.bottom { z-index:94; height:250px; }
#Memory:hover div.top { z-index:995; background-color:#d98f23; margin-left:<?php echo $m_acc ?>%; }
#Memory:hover div.bottom { z-index:994; background-color:#b6781e; width:<?php echo $m_acc+10 ?>%;
	background:-moz-linear-gradient(-90deg, #b6781e, #916018); background:-webkit-gradient(linear, 0 top, 0 bottom, from(#b6781e), to(#916018)); }

/* Overall bar */
#Overall div.top { z-index:91; }
#Overall div.bottom { z-index:90; height:120px; }
#Overall:hover div.top { z-index:991; background-color:#3f1150; margin-left:<?php echo $o_acc ?>%;}
#Overall:hover div.bottom { z-index:990; background-color:#340e43; width:<?php echo $o_acc+10 ?>%;
	background:-moz-linear-gradient(-90deg, #340e43, #1a0721); background:-webkit-gradient(linear, 0 top, 0 bottom, from(#340e43), to(#1a0721)); }

#apple { clear:both; margin-top:-70px; position:relative; z-index:-999; }
#apple p { float:right; padding-top:247px; }

.sidenav {
    height: 50%;
    width: 200px;
    position: absolute;
    z-index: 1;
    
    left: 0;
    background-color: #1a6c90;
    overflow-x: hidden;
    padding-top: 20px;
  }
  
  .sidenav a {
    padding: 6px 6px 6px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
  }
  
  .sidenav a:hover {
	color: #f1f1f1;
	font-size: solid;

  }
  
  
  
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  } 
</style>