<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "..\Common\icon.php" ?>
   
    <title>Leaderboard</title>
</head>
<body>
<?php include "..\Common\av_bar.php" ?>
<?php include "..\Common\preloader.php" ?>
<div id="leaderboard" class="leaderboard">
  <header>
    <h1>Leader Board</h1>
    <div class="nav">
      <a class='a' id="a_all_time" style="cursor: pointer;" onclick="all_time()" class="active">Overall</a>
      <a class='a' id="a_speed" style="cursor: pointer;" onclick="speed()">Speed</a>
      <a class='a' id="a_memory" style="cursor: pointer;" onclick="memory()">Memory</a>
      <a class='a' id="a_attention" style="cursor: pointer;" onclick="attention()">Attention</a>
      
</div>
  </header>
  <div id="all_time">
  <table>
    <thead>
      <tr>
        <th class="rank">Rank </th>
        <th class="name">Username</th>
        <th class="sp">Points</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php
    include '..\Authentication\connect_db.php';
    $sr = 0;
    $s_query = "select sum(points) as points,uname from user_stats group by gamer_id order by points DESC";
		$s_res = mysqli_query($conn,$s_query);
		while ($s_row = mysqli_fetch_array($s_res)) {
      $uname = $s_row['uname'];
      $points = $s_row['points'];
       $sr++;
      ?>
       <td class="rank"><?php echo $sr ?></td>
        <td class="name"><?php echo $uname?></td>
        
        <td class="sp"><?php echo $points?></td>
        
      </tr>
      <?php } ?>
    </tbody>
    
  </table>
  </div>
  <div  id="speed">
  <table>
    <thead>
      <tr>
    
        <th class="rank">Rank </th>
        <th class="name">Username</th>
        <th class="sp">Score</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php
      
    include '..\Authentication\connect_db.php';
    $s_query = "select sum(points) as points,uname from user_stats where game_type='Speed' group by gamer_id order by points DESC";
		$s_res = mysqli_query($conn,$s_query);
		while ($s_row = mysqli_fetch_array($s_res)) {
      $uname = $s_row['uname'];
      $points = $s_row['points'];
    
      ?>
       <td class="rank">1</td>
        <td class="name"><?php echo $uname?></td>
        
        <td class="sp"><?php echo $points?></td>
        
      </tr>
      <?php } ?>
      
    </tbody>
    
  </table>
  </div>
  <div id="memory">
  <table>
    <thead>
      <tr>
        <th class="rank">Rank </th>
        <th class="name">Username</th>
        <th class="sp">Score</th>
        <!-- <th class="kd"></th> -->
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php
      
      include '..\Authentication\connect_db.php';
      $s_query = "select sum(points) as points,uname from user_stats where game_type='Memory' group by gamer_id order by points DESC";
      $s_res = mysqli_query($conn,$s_query);
      while ($s_row = mysqli_fetch_array($s_res)) {
        $uname = $s_row['uname'];
        $points = $s_row['points'];
      
        ?>
         <td class="rank">1</td>
          <td class="name"><?php echo $uname?></td>
          
          <td class="sp"><?php echo $points?></td>
          
        </tr>
        <?php } ?>
      
    </tbody>
    
  </table>
  </div>
  <div  id="attention">
  <table >
    <thead >
      <tr>
        <th class="rank">Rank </th>
        <th class="name">Username</th>
        <th class="sp">Score</th>
        <!-- <th class="kd"></th> -->
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php
      
      include '..\Authentication\connect_db.php';
      $s_query = "select sum(points) as points,uname from user_stats where game_type='Attention' group by gamer_id order by points DESC";
      $s_res = mysqli_query($conn,$s_query);
      while ($s_row = mysqli_fetch_array($s_res)) {
        $uname = $s_row['uname'];
        $points = $s_row['points'];
      
        ?>
         <td class="rank">1</td>
          <td class="name"><?php echo $uname?></td>
          
          <td class="sp"><?php echo $points?></td>
          
        </tr>
        <?php } ?>
    </tbody>
    
  </table>
  </div>
</div>


</body>
</html>
<style>
  a{
    font-size: 20px;
  }
  .a{
    color:white
  }
  body{
    background: url('../Images/mario1.jpg');
    overflow: hidden;
  }
  .leaderboard {
    max-width: 40rem;
    position: relative;
    border-radius: 1rem;
    box-shadow: 2px 2px 16px 1px #aaa;
    font-family: sans-serif;
    top:15vh;
    left:60vh;
    margin-bottom: 2rem;
    overflow-y: auto;
height: 85vh;
  }
  header {
    background-color: #ff7500;
    color: white;
    text-transform: uppercase;
    border-top-left-radius: 1rem;
    border-top-right-radius: 1rem;
    height: 10rem;
    position: relative;
  }
  
  h1 {
    font-size: 3rem;
    line-height: 1rem;
    position: absolute;
    margin-left: 8rem;
    top: 3rem;
  }
  
  
  
  .nav {
    width: 100%;
    position: absolute;
    bottom: 0;
    font-size: 0.9rem;
    background: linear-gradient(
      to bottom,
      transparent,
      transparent 10%,
      rgba(22, 22, 22, 0.5)
    );
  }
  
  .nav a {
    padding-top: 1rem;
    padding-bottom: 0.75rem;
    display: inline-block;
    font-weight: bold;
  }
  
  .nav a.active {
    border-bottom: 4px solid #f0a900;
    transition: transform 0.8s;
  }
  
  .nav a:first-child {
    margin-left: 4rem;
  }
  
  .nav a + a {
    margin-left: 2rem;
  }
  
  table {
    background-color: #16181e;
    color: #999;
    width: 100%;
    border-collapse: collapse;
    border-bottom-left-radius: 1rem;
    border-bottom-right-radius: 1rem;
    overflow-y: auto;
  }
  
  thead {
    font-size: 1rem;
    color: #555;
    background-color: #1f232c;
    text-transform: uppercase;
  }
  tbody .name {
    color: white;
    font-weight: bold;
    
    font-size: 0.9rem;
    
  }
  
  
  tbody tr:nth-child(2n) {
    background-color: #1f232c;
  }
  tbody tr:nth-child(10) {
    background-color: #ff7500;
    
  }
  
  .name {
    text-align: left;
  }
  
  .rank,
  .sp
  /* .kd  */
  {
    text-align: center;
  }
  
  .rank {
    width: 4ch;
    padding-left: 1rem;
  }
  
  .sp
  /* .kd  */
  {
    width: 8ch;
  }
  
  th {
    padding: 1.5rem 1rem 0.5rem;
  }
  
  td {
    padding: 1rem 1rem;
  }
  #speed{
    
    display: none;
  }
  #all_time{
    display: block;
    
  }
  
    
  #memory{
    display: none;
  }
  #attention{
    display: none;
  }
  
  @media screen and (max-width: 720px){
    .leaderboard{
     left: 1vh;
      max-width: 29rem;
    }
    .nav a + a {
    margin-left: 1rem;
  }
  .nav a:first-child {
    margin-left: 0rem;
  }
  }
  
  
</style>
<script>
  
  function speed(){
    var all_time = document.getElementById('all_time');
    var speed = document.getElementById('speed');
    var a_speed = document.getElementById('a_speed');
    var a_all_time = document.getElementById('a_all_time');
    var a_memory = document.getElementById('a_memory');
    var memory = document.getElementById('memory');
    var a_attention = document.getElementById('a_attention');
    var attention = document.getElementById('attention');
    all_time.style.display = "none";
     $(document).ready(function () {
    setTimeout(function(){
        $('#speed').fadeIn(500);
    }, 100);
});
    memory.style.display = "none";
    $(a_speed).addClass("active");
    $(a_all_time).removeClass("active");
    $(a_memory).removeClass("active");
    attention.style.display = "none";
    $(a_attention).removeClass("active");
    }
    function all_time(){
      var a_speed = document.getElementById('a_speed');
    var a_all_time = document.getElementById('a_all_time');
    var all_time = document.getElementById('all_time');
    var speed = document.getElementById('speed');
    var a_memory = document.getElementById('a_memory');
    var memory = document.getElementById('memory');
    var a_attention = document.getElementById('a_attention');
    var attention = document.getElementById('attention');
    $(document).ready(function () {
    setTimeout(function(){
        $('#all_time').fadeIn(500);
    }, 200);
});
    speed.style.display = "none";
    memory.style.display = "none";
    $(a_all_time).addClass("active");
    $(a_speed).removeClass("active");
    $(a_memory).removeClass("active");
    attention.style.display = "none";
    $(a_attention).removeClass("active");
    }
    function memory(){
    var a_speed = document.getElementById('a_speed');
    var a_all_time = document.getElementById('a_all_time');
    var all_time = document.getElementById('all_time');
    var a_memory = document.getElementById('a_memory');
    var memory = document.getElementById('memory');
    var speed = document.getElementById('speed');
    var a_attention = document.getElementById('a_attention');
    var attention = document.getElementById('attention');
    all_time.style.display = "none";
    speed.style.display = "none";
    $(document).ready(function () {
    setTimeout(function(){
        $('#memory').fadeIn(500);
    }, 200);
});
    $(a_all_time).removeClass("active");
    $(a_speed).removeClass("active");
    $(a_memory).addClass("active");
    attention.style.display = "none";
    $(a_attention).removeClass("active");
    }
    function attention(){
    var a_speed = document.getElementById('a_speed');
    var a_all_time = document.getElementById('a_all_time');
    var all_time = document.getElementById('all_time');
    var a_memory = document.getElementById('a_memory');
    var memory = document.getElementById('memory');
    var speed = document.getElementById('speed');
    var a_attention = document.getElementById('a_attention');
    var attention = document.getElementById('attention');
    all_time.style.display = "none";
    speed.style.display = "none";
    memory.style.display = "none";
    $(a_all_time).removeClass("active");
    $(a_speed).removeClass("active");
    $(a_memory).removeClass("active");
    $(document).ready(function () {
    setTimeout(function(){
        $('#attention').fadeIn(500);
    }, 200);
});
    $(a_attention).addClass("active");
    }
   
</script>