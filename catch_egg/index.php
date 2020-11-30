
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Catch The Eggs</title>
  <?php include "..\Common\icon.php" ?>
  <?php include "..\Common\av_bar.php" ?>
  <link href="egg.css" rel="stylesheet" />
</head>

<body>
  <div id="container">

    <div id="score_help"> Score:
      <span id="score">0</span> | Life:
      <span id="life"></span> | Use mouse to control
    </div>

    <div id="branch"></div>

    <div id="hen1" class="hen"></div>
    <div id="hen2" class="hen"></div>
    <div id="hen3" class="hen"></div>

    <div id="egg1" class="egg" data-bullseye='1'></div>
    <div id="egg2" class="egg" data-bullseye='2'></div>
    <div id="egg3" class="egg" data-bullseye='3'></div>

    <div id="bullseye1" class="bullseye"></div>
    <div id="bullseye2" class="bullseye"></div>
    <div id="bullseye3" class="bullseye"></div>

    <div id="basket">
      <span id="score_1"></span>
    </div>

    <div id="floor"></div>

    <button id="restart">Restart</button>

  </div>
  <script src="jmin.js"></script>
  <!-- <script src="collision_detection.js"></script>
  <script src="variables.js"></script>
  <script src="functions.js"></script> -->
  <script src="script.js"></script>
</body>

</html>