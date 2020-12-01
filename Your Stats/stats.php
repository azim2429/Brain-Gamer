<?php include "..\Common\av_bar.php";?>

<?php if (isset($_SESSION['gamer_id'])) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <?php include "..\Common\icon.php" ?>
    <title>Your Stats</title>
</head>
<br><br><br><br>
<form method="GET" action="stats.php">
<div class="container1">
<div class="left-menu">
<ul class="list">
<button type="submit" name="overall" style="background: none;border:none;color:white;width:100%">
<li class="top"><h3>OVERALL</h3><i class="fa fa-arrow-right"></i></li>
</button>
</ul>
    
<ul class="list">
<button type="submit" name="memory" style="background: none;border:none;color:white;width:100%">
<li class="top"><h3>MEMORY</h3><i class="fa fa-arrow-right"></i></li>
</button>
</ul>
    
<ul class="list">
<button type="submit" name="speed" style="background: none;border:none;color:white;width:100%">
<li class="top"><h3>SPEED</h3><i class="fa fa-arrow-right"></i></li>
</button>
</ul>
    

<ul class="list">
<button type="submit" name="attention" style="background: none;border:none;color:white;width:100%">
<li class="top"><h3>ATTENTION</h3><i class="fa fa-arrow-right"></i></li>
</button>
</ul>

</div> 
    
</div>
</form>
<style>
/* .wrapper {
  display: block;
  top:10em;
  left: 30em;
  border: 1px solid #555;
  width: 700px;
  height: 350px;
  position: relative;
  margin: 0;
  overflow: hidden;
  background: #152B39;
  font-family: Courier, monospace;
  font-size: 14px;
  color:#ccc; 
}
.label {
  height: 1em;
  padding: .3em;
  background: rgba(255, 255, 255, .8);
  position: absolute;
  display: none;
  color:#333;
} */
::-webkit-scrollbar {
    width: 4px;
    height: 15px;
}

::-webkit-scrollbar-track-piece  {
    background-color:#bdc3c7;
}

::-webkit-scrollbar-thumb:vertical {
    height: 30px;
    background-color: #e74c3c;
}
    
    
    
   a{
     font-size: 20px;
     text-decoration: none;
   }
    
    .container1{
        display: flex;
        margin-top: 1.45rem;
    }
    
    .container{
      border: 2px black solid;
    }
    .left-menu{
        
        display: block;
        width: 300px;
        background: #34495e;
        margin: 0px;
        padding-top: 0px;
        position: fixed;
        height: 100%;
        overflow-y: auto;
    }
    
    .list{
        color: #fff;
        list-style-type: none;
        padding-top: 0px;
        padding-left: 0px;
        margin-top: 0px;
        margin-bottom: 0px;
        border-bottom:solid 3.5px #2c3e50;
    }
    
    li{
        display: flex;
        align-content: center;
        justify-content: flex-start;
        padding-left: 30px;
        cursor: pointer;
        margin-top: 0px;
    }
    
    li i{
        margin-left: auto;
        margin-right: 30px;
        margin-top: 20px;
    }
    
    .sub h3{
        font-weight: 300;
        padding: 0.5rem;
    }
    
    .sub{
        display: none;
        background: #2c3e50;
        transition: background 0.3s ease;
    }
    
    .sub:hover{
        background: #212F3D;
    }
    
    .main{
        width: 100%;
        margin-left: 300px;
        text-align: center;
    }
    
    .top{
        transition: all 0.3s ease;
        text-transform: uppercase;
        
    }
    
    .top h3{
        font-weight: 500;
        font-size:17px;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }
    
    .top:hover{
        background:#e74c3c; 
        
    }
    
    .rotatedown{
        
        margin-top: 0px;
        margin-right: 50px;
        transform: rotate(90deg);
    }
    .contain{
      width: 65%;
     margin-left: 15rem;
      position: absolute;
      bottom: 0;
      top:32rem;
      margin-top: 5rem;
    }
    /*Style 04*/

.bar {
  
	 background: #03855B;
	 width: 0;
	 margin:1vh;
	 color: #fff;
	 position: relative;
   top:40rem;
   left: 9rem;
	 transition: width 3s, background 2s;
	 clear: both;
}
 .bar:nth-of-type(2n) {
	 background: #034B85;
}
 .bar:nth-of-type(2n) .label {
	 background-color: #86E0FF;
}
 .bar .label {
	 text-align: right;
	 display: inline-block;
	 position: relative;
	 background: #86FFD8;
	 min-width: 100px;
	 max-width: 150px;
	 padding: 1rem;
	 font-size: 0.8rem;
	 color:black;
	 z-index: 2;
}
 .count {
	 position: absolute;
	 right: 0.25em;
	 top: 0.75em;
	 padding: 0.05em 0.5em;
	 font-size: 1em;
}
 
.content {
  width: 83%;
  position: absolute;
  top:52rem;
  margin-left: 25rem;
  margin-right: 4rem;
}

.report-statistic-box {
  float: left;
  width: 25%;
  height: 275px;
  background-color: #fafafa;
  border-right: 2px solid #ececec;
  text-align: center;
}

.report-statistic-box .box-header {
  background-color: #f2f2f2;
  font-weight: bolder;
  font-size: 25px;
  height: 60px;
  padding-top: 20px;
}

.report-statistic-box .box-header span {
  display: inline-block;
  width: 25px;
  height: 25px;
  vertical-align: middle;
}

.report-statistic-box .box-header .icon-sent {
  background: url(../images/icon_sent.svg);
}

.report-statistic-box .box-header .icon-delivery {
  background: url(../images/icon_delivery.svg);
}

.report-statistic-box .box-header .icon-openrate {
  background: url(../images/icon_openrate.svg);
}

.report-statistic-box .box-header .icon-ctor {
  background: url(../images/icon_ctor.svg);
}

.report-statistic-box .box-content {
  position: relative;
  margin: 20px auto 15px;
  width: 130px;
  height: 130px;
}

.report-statistic-box .box-content .sentTotal {
  font-size: 46px;
  font-weight: 400;
  color: #80cdbe;
  padding-top: 32px;
}

.report-statistic-box .box-content .percentage {
  position: absolute;
  font-size: 28px;
  top: 34%;
  left: 31%;
}

.report-statistic-box .box-content .conversionValue {
  font-size: 28px;
  font-weight: 300;
  color: #f5ab34;
  padding-top: 46px;
}

.conversionValue .conversionCurrency {
  font-size: 18px;
  font-weight: 400;
  color: #f5ab34;
  padding-top: 46px;
}

.report-statistic-box .delivery-rate {
  color: #f5ab34;
}

.report-statistic-box .open-rate {
  color: #30afe4;
}

.report-statistic-box .click-to-open {
  color: #80cdbe;
}

.report-statistic-box .box-foot {
  position: relative;
  font-size: 13px;
  font-weight: 400;
  padding: 0 20px;
}

.report-statistic-box .box-foot .box-foot-stats {
  font-size: 15px;
}

.report-statistic-box .box-foot .box-foot-left {
  float: left;
  text-align: left;
}

.report-statistic-box .box-foot .box-foot-right {
  float: right;
  text-align: right;
}

.report-statistic-box .box-foot .arrow {
  display: none;
  position: absolute;
  width: 15px;
  height: 15px;
}

@media (max-width: 1024px) {
  .report-statistic-box {
    width: 50%;
  }
}
</style>
<?php
if (isset($_GET['overall'])) {
include '..\Authentication\connect_db.php';
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
<?php

$gamer_id =  $_SESSION['gamer_id'] ;
$t_query = "select avg(points) as points,uname from user_stats where gamer_id= $gamer_id group by gamer_id";
$t_res = mysqli_query($conn,$t_query);
while ($t_row = mysqli_fetch_array($t_res)) {
  $t_acc = $t_row['points'];
}
?>

<?php

$gamer_id =  $_SESSION['gamer_id'] ;
$g1_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Whack A Mole!'";
$g1_res = mysqli_query($conn,$g1_query);
while ($g1_row = mysqli_fetch_array($g1_res)) {
  $g1_acc = $g1_row['points'];
}
?>

<?php

$gamer_id =  $_SESSION['gamer_id'] ;
$g2_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Flicker Master!'";
$g2_res = mysqli_query($conn,$g2_query);
while ($g2_row = mysqli_fetch_array($g2_res)) {
  $g2_acc = $g2_row['points'];
}
?>

<?php

$gamer_id =  $_SESSION['gamer_id'] ;
$g3_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Word Memory!'";
$g3_res = mysqli_query($conn,$g3_query);
while ($g3_row = mysqli_fetch_array($g3_res)) {
  $g3_acc = $g3_row['points'];
}
?>

<?php

$gamer_id =  $_SESSION['gamer_id'] ;
$g4_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Horizon Chase!'";
$g4_res = mysqli_query($conn,$g4_query);
while ($g4_row = mysqli_fetch_array($g4_res)) {
  $g4_acc = $g4_row['points'];
}
?>
<?php

$gamer_id =  $_SESSION['gamer_id'] ;
$g5_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Memorize the Card'";
$g5_res = mysqli_query($conn,$g5_query);
while ($g5_row = mysqli_fetch_array($g5_res)) {
  $g5_acc = $g5_row['points'];
}
?>

<?php

$gamer_id =  $_SESSION['gamer_id'] ;
$g6_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Catch The Eggs!'";
$g6_res = mysqli_query($conn,$g6_query);
while ($g6_row = mysqli_fetch_array($g6_res)) {
  $g6_acc = $g6_row['points'];
}
?>

<body>
<!-- <div class="wrapper">
  <canvas id='c'></canvas>
  <div class="label">text</div>
</div> -->

<div class="header">
  <br>
<h1 style="color:black;text-align:center;margin-left:17rem">Your Personalized Statistics</h1>
<br><br>
</div>
<div class="move">
  
<div id="container" style="height: 500px; width: 950px; margin-left:26rem;margin-top:1rem;margin-bottom:2.5rem;border:solid 2px black;"></div></div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://code.highcharts.com/highcharts.js'></script>
<div style="color: black;" class="content">
    <div  class="report-overview-module"></div>
</div>
<h1 style="color:black;text-align:center;margin-left:17rem">Overall Accuracy</h1>
<hr style="margin-bottom: 22rem;width:250vh;color:green">
<div  class="contain">
  
  <div  class="border">
  <?php

    $gamer_id =  $_SESSION['gamer_id'] ;
    $p_query = "select max(points) as points,name,gamer_id from user_stats where gamer_id = $gamer_id  group by name order by points DESC";
    $p_res = mysqli_query($conn,$p_query);
    while ($p_row = mysqli_fetch_array($p_res)) {
    $p_acc = $p_row['points'];
    $n_acc = $p_row['name'];

?>
    <div class="bar teal lighten-1" data-percent="<?php echo $p_acc?>%"><span class="label"><?php echo $n_acc ?></span></div>
    <?php }?>
  </div>
</div>
<hr>
<br>
<h1 style="color:black;text-align:center;margin-left:17rem">Highest Scores</h1>
<br><br>
<div style="margin-bottom: 20vh;"></div>
</body>
</html>
<script>
  $('.list').each(function(index){
        
        var topli = $(this).children(":first-child");
        topli.click(function(){
            var parent = $(this).parent();
            var sublis = parent.find(".sub");
            
            if(sublis.is(':visible')){
                
                sublis.slideUp();
                topli.find('i').removeClass('rotatedown');
                
            }else{
                sublis.slideDown();
                
                topli.find('i').addClass('rotatedown');
                
            }
        })
        
    });
// Animated Bars script found at: http://jsfiddle.net/i_heart_php/wwukzpc8/
setTimeout(function start() {

$('.bar').each(function (i) {
  var $bar = $(this);
  $(this).append('<span class="count"></span>')
  setTimeout(function () {
    $bar.css('width', $bar.attr('data-percent'));
  }, i * 100);
});

$('.count').each(function () {
  $(this).prop('Counter', 0).animate({
    Counter: $(this).parent('.bar').attr('data-percent')
  }, {
    duration: 2000,
    easing: 'swing',
    step: function (now) {
      $(this).text(Math.ceil(now) + 'Points');
    }
  });
});

}, 500)
$(function() {
  //Detailed explanation here http://stackoverflow.com/questions/27542928/extend-highcharts-renderer-symbols-to-have-plus-sign
  // Define a custom symbol path
  Highcharts.SVGRenderer.prototype.symbols.dashedLine =
    function(x, y, w, h) {
      var returnArray = [];
      var startPoint = x - 5 * w;
      var endPoint = x + 5 * w;
      var dashWidth = w;
      var gapWidth = 0.5 * w;

      var currentPoint = startPoint;
      for (
        var currentPoint = startPoint; currentPoint <= endPoint; currentPoint += dashWidth + gapWidth /*jump forward one location*/ ) {
        returnArray.push('M', currentPoint, y, 'L', currentPoint + dashWidth, y);
      }
      returnArray.push('z'); //end drawing
      return returnArray;
    };

  if (Highcharts.VMLRenderer) {
    Highcharts.VMLRenderer.prototype.symbols.dashedLine = Highcharts.SVGRenderer.prototype.symbols.dashedLine;
  }

  $('#container').highcharts({

    title: {
      text: 'Average Scores Per Game'
    },

    legend: {
      y: -40 // make room for subtitle
    },

    xAxis: {
      categories: ['Whack A Mole!', 'Flicker Master!', 'Word Memory!', 'Horizon Chase!', 'Memorize the Card', 'Catch The Eggs!'],
    },
    yAxis:{
      title: {
            enabled: true,
            text: 'Scores',
            style: {
                fontWeight: 'normal'
            }
        }
    },
    series: [{
      name: 'Average Score',
      data: [<?php echo $g1_acc?>,<?php echo $g2_acc?>,<?php echo $g3_acc?>,<?php echo $g4_acc?>,<?php echo $g5_acc?>,<?php echo $g6_acc?>,],
      
    }],

    credits: {
      enabled: false
    }
  });
});
(function umd(root, name, factory) {
  'use strict';
  if ('function' === typeof define && define.amd) {
    // AMD. Register as an anonymous module.
    define(name, ['jquery'], factory);
  } else {
    // Browser globals
    root[name] = factory();
  }
}(this, 'ReportOverviewModule', function UMDFactory() {
  'use strict';

  var ReportOverview = ReportOverviewConstructor;

  reportCircleGraph();

  return ReportOverview;

  function ReportOverviewConstructor(options) {

    var factory = {
        init: init
      },

      _elements = {
        $element: options.element
      };

    init();

    return factory;

    function init() {

      _elements.$element.append($(getTemplateString()));

      $('.delivery-rate').percentCircle({
        width: 130,
        trackColor: '#ececec',
        barColor: '#f5ab34',
        barWeight: 5,
        endPercent: 0.<?php echo $s_acc ?>,
        fps: 60
      });

      $('.open-rate').percentCircle({
        width: 130,
        trackColor: '#ececec',
        barColor: '#30afe4',
        barWeight: 5,
        endPercent: 0.<?php echo $a_acc ?>,
        fps: 60
      });

      $('.click-to-open').percentCircle({
        width: 130,
        trackColor: '#ececec',
        barColor: '#80cdbe',
        barWeight: 5,
        endPercent: 0.<?php echo $m_acc ?>,
        fps: 60
      });
    }

    function getTemplateString() {
      return [
        
        '<div style="color: black;border:#f5ab34 2px solid" class="report-statistic-box">',
        '<div style="color: black;" class="box-header">Speed</div>',
        '<div style="color: black;" class="box-content delivery-rate">',
        '<div style="color: black;" class="percentage"><?php echo $s_acc ?>%</div>',
        '</div>',
        '<div style="color: black;" class="box-foot">',
        // '<span style="color: black;" class="arrow arrow-up"></span>',
        // '<div style="color: black;" class="box-foot-left">Delivered<br><span class="box-foot-stats"><strong>{{delivered}}</strong> (90%)</span></div>'.replace(/{{delivered}}/, options.data.delivered),
        // '<span style="color: black;" class="arrow arrow-down"></span>',
        // '<div style="color: black;" class="box-foot-right">Bounced<br><span style="color: black;" class="box-foot-stats" title="% = unopened emails / delivered emails"><strong>120</strong> (10%)</span></div>',
        '</div>',
        '</div>',

        '<div style="border:#30afe4 2px solid;margin-left:3vh" class="report-statistic-box">',
        '<div style="color: black" class="box-header">Attention</div>',
        '<div style="color: black;" class="box-content open-rate">',
        '<div style="color: black;" class="percentage"><?php echo $a_acc ?>%</div>',
        '</div>',
        '<div style="color: black;" class="box-foot">',
        // '<span style="color: black;" class="arrow arrow-up"></span>',
        // '<div style="color: black;" class="box-foot-left">Memory<br><span class="box-foot-stats"><strong>{{opened}}</strong> (75%)</span></div>'.replace(/{{opened}}/, options.data.opened),
        // '<span style="color: black;" class="arrow arrow-down"></span>',
        // '<div style="color: black;" class="box-foot-right">Unopened<br><span class="box-foot-stats"><strong>120</strong> (25%)</span></div>',
        '</div>',
        '</div>',
         

        '<div style="border:#80cdbe 2px solid;margin-left:3vh" class="report-statistic-box">',
        '<div style="color: black;" class="box-header">Memory</div>',
        '<div style="color: black;" class="box-content click-to-open">',
        '<div style="color: black;" class="percentage"><?php echo $m_acc ?>%</div>',
        '</div>',
        // '<div style="color: black;" class="box-foot">',
        // '<span style="color: black;" class="arrow arrow-up"></span>',
        // '<div style="color: black;" class="box-foot-left">Clicked<br><span class="box-foot-stats"><strong>{{clicked}}</strong> (50%)</span></div>'.replace(/{{clicked}}/, options.data.clicked),
        // '<div style="color: black;" class="box-foot-right">Non-clicked<br><span class="box-foot-stats"><strong>120</strong> (50%)</span></div>',
        '</div>',
        '</div>'
      ].join('');
    }
  }

  function reportCircleGraph() {

    $.fn.percentCircle = function pie(options) {

      var settings = $.extend({
        width: 130,
        trackColor: '#fff',
        barColor: '#fff',
        barWeight: 5,
        startPercent: 0,
        endPercent: 1,
        fps: 60
      }, options);

      this.css({
        width: settings.width,
        height: settings.width
      });

      var _this = this,
        canvasWidth = settings.width,
        canvasHeight = canvasWidth,
        id = $('canvas').length,
        canvasElement = $('<canvas id="' + id + '" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
        canvas = canvasElement.get(0).getContext('2d'),
        centerX = canvasWidth / 2,
        centerY = canvasHeight / 2,
        radius = settings.width / 2 - settings.barWeight / 2,
        counterClockwise = false,
        fps = 1000 / settings.fps,
        update = 0.01;

      this.angle = settings.startPercent;

      this.drawInnerArc = function(startAngle, percentFilled, color) {
        var drawingArc = true;
        canvas.beginPath();
        canvas.arc(centerX, centerY, radius, (Math.PI / 180) * (startAngle * 360 - 90), (Math.PI / 180) * (percentFilled * 360 - 90), counterClockwise);
        canvas.strokeStyle = color;
        canvas.lineWidth = settings.barWeight - 2;
        canvas.stroke();
        drawingArc = false;
      };

      this.drawOuterArc = function(startAngle, percentFilled, color) {
        var drawingArc = true;
        canvas.beginPath();
        canvas.arc(centerX, centerY, radius, (Math.PI / 180) * (startAngle * 360 - 90), (Math.PI / 180) * (percentFilled * 360 - 90), counterClockwise);
        canvas.strokeStyle = color;
        canvas.lineWidth = settings.barWeight;
        canvas.lineCap = 'round';
        canvas.stroke();
        drawingArc = false;
      };

      this.fillChart = function(stop) {
        var loop = setInterval(function() {
          canvas.clearRect(0, 0, canvasWidth, canvasHeight);

          _this.drawInnerArc(0, 360, settings.trackColor);
          _this.drawOuterArc(settings.startPercent, _this.angle, settings.barColor);

          _this.angle += update;

          if (_this.angle > stop) {
            clearInterval(loop);
          }
        }, fps);
      };

      this.fillChart(settings.endPercent);
      this.append(canvasElement);
      return this;

    };

  }

  function getMockData() {
    return {

      date: '2014-12-01',
      sentTotal: 4120,
      delivered: 3708,
      opened: 3090,
      clicked: 2060,
      conversion: 35000,
      conversionEmails: 100

    };
  }

}));

(function activateReportOverviewModule($) {
  'use strict';

  var $el = $('.report-overview-module');

  return new ReportOverviewModule({
    element: $el,
    data: {
      date: '2014-12-01',
      sentTotal: 4120,
      delivered: 3708,
      opened: 3090,
      clicked: 2060
    }
  });
}(jQuery));
</script>
<?php }elseif(isset($_GET['speed'])){
  include '..\Authentication\connect_db.php';
  $gamer_id =  $_SESSION['gamer_id'] ;
  $s_query = "select CAST(AVG(accuracy) as int)as acc from user_stats where gamer_id = $gamer_id and name='Whack A Mole!'";
  $s_res = mysqli_query($conn,$s_query);
  while ($s_row = mysqli_fetch_array($s_res)) {
    $s_acc = $s_row['acc'];
  }
  ?>
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $m_query = "select CAST(AVG(accuracy) as int)as acc from user_stats where gamer_id = $gamer_id and name='Horizon Chase!'";
  $m_res = mysqli_query($conn,$m_query);
  while ($m_row = mysqli_fetch_array($m_res)) {
    $m_acc = $m_row['acc'];
  }
  ?>
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $a_query = "select CAST(AVG(accuracy) as int)as acc from user_stats where gamer_id = $gamer_id  and name='Horizon Chase!'";
  $a_res = mysqli_query($conn,$a_query);
  while ($a_row = mysqli_fetch_array($a_res)) {
    $a_acc = $a_row['acc'];
  }
  ?>
  
  
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $g1_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Whack A Mole!'";
  $g1_res = mysqli_query($conn,$g1_query);
  while ($g1_row = mysqli_fetch_array($g1_res)) {
    $g1_acc = $g1_row['points'];
  }
  ?>
  
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $g4_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Horizon Chase!'";
  $g4_res = mysqli_query($conn,$g4_query);
  while ($g4_row = mysqli_fetch_array($g4_res)) {
    $g4_acc = $g4_row['points'];
  }
  ?>
  
  
  <body>
  <!-- <div class="wrapper">
    <canvas id='c'></canvas>
    <div class="label">text</div>
  </div> -->
  
  <div class="header">
    <br>
  <h1 style="color:black;text-align:center;margin-left:17rem">Your Personalized Statistics</h1>
  <br><br>
  </div>
  <div class="move">
    
  <div id="container" style="height: 500px; width: 950px; margin-left:26rem;margin-top:1rem;margin-bottom:2.5rem;border:solid 2px black;"></div></div>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://code.highcharts.com/highcharts.js'></script>
  <div style="color: black;" class="content">
      <div  class="report-overview-module"></div>
  </div>
  <h1 style="color:black;text-align:center;margin-left:17rem">Overall Speed Game Accuracy</h1>
  <hr style="margin-bottom: 22rem;width:250vh;color:green">
  <div  class="contain">
    
    <div  class="border">
    <?php
  
      $gamer_id =  $_SESSION['gamer_id'] ;
      $p_query = "select max(points) as points,name,gamer_id from user_stats where gamer_id = $gamer_id and game_type = 'Speed' group by name order by points DESC";
      $p_res = mysqli_query($conn,$p_query);
      while ($p_row = mysqli_fetch_array($p_res)) {
      $p_acc = $p_row['points'];
      $n_acc = $p_row['name'];
  
  ?>
      <div class="bar teal lighten-1" data-percent="<?php echo $p_acc?>%"><span class="label"><?php echo $n_acc ?></span></div>
      <?php }?>
    </div>
  </div>
  <hr>
  <br>
  <h1 style="color:black;text-align:center;margin-left:17rem">Highest Scores</h1>
  <br><br>
  <div style="margin-bottom: 20vh;"></div>
  </body>
  </html>
  <script>
    $('.list').each(function(index){
          
          var topli = $(this).children(":first-child");
          topli.click(function(){
              var parent = $(this).parent();
              var sublis = parent.find(".sub");
              
              if(sublis.is(':visible')){
                  
                  sublis.slideUp();
                  topli.find('i').removeClass('rotatedown');
                  
              }else{
                  sublis.slideDown();
                  
                  topli.find('i').addClass('rotatedown');
                  
              }
          })
          
      });
  // Animated Bars script found at: http://jsfiddle.net/i_heart_php/wwukzpc8/
  setTimeout(function start() {
  
  $('.bar').each(function (i) {
    var $bar = $(this);
    $(this).append('<span class="count"></span>')
    setTimeout(function () {
      $bar.css('width', $bar.attr('data-percent'));
    }, i * 100);
  });
  
  $('.count').each(function () {
    $(this).prop('Counter', 0).animate({
      Counter: $(this).parent('.bar').attr('data-percent')
    }, {
      duration: 2000,
      easing: 'swing',
      step: function (now) {
        $(this).text(Math.ceil(now) + 'Points');
      }
    });
  });
  
  }, 500)
  $(function() {
    //Detailed explanation here http://stackoverflow.com/questions/27542928/extend-highcharts-renderer-symbols-to-have-plus-sign
    // Define a custom symbol path
    Highcharts.SVGRenderer.prototype.symbols.dashedLine =
      function(x, y, w, h) {
        var returnArray = [];
        var startPoint = x - 5 * w;
        var endPoint = x + 5 * w;
        var dashWidth = w;
        var gapWidth = 0.5 * w;
  
        var currentPoint = startPoint;
        for (
          var currentPoint = startPoint; currentPoint <= endPoint; currentPoint += dashWidth + gapWidth /*jump forward one location*/ ) {
          returnArray.push('M', currentPoint, y, 'L', currentPoint + dashWidth, y);
        }
        returnArray.push('z'); //end drawing
        return returnArray;
      };
  
    if (Highcharts.VMLRenderer) {
      Highcharts.VMLRenderer.prototype.symbols.dashedLine = Highcharts.SVGRenderer.prototype.symbols.dashedLine;
    }
  
    $('#container').highcharts({
  
      title: {
        text: 'Average Scores of Speed Category'
      },
  
      legend: {
        y: -40 // make room for subtitle
      },
  
      xAxis: {
        categories: ['Whack A Mole!', 'Horizon Chase!'],
      },
      yAxis:{
        title: {
              enabled: true,
              text: 'Scores',
              style: {
                  fontWeight: 'normal'
              }
          }
      },
      series: [{
        name: 'Average Score',
        data: [<?php echo $g1_acc?>,<?php echo $g4_acc?>],
        
      }],
  
      credits: {
        enabled: false
      }
    });
  });
  (function umd(root, name, factory) {
    'use strict';
    if ('function' === typeof define && define.amd) {
      // AMD. Register as an anonymous module.
      define(name, ['jquery'], factory);
    } else {
      // Browser globals
      root[name] = factory();
    }
  }(this, 'ReportOverviewModule', function UMDFactory() {
    'use strict';
  
    var ReportOverview = ReportOverviewConstructor;
  
    reportCircleGraph();
  
    return ReportOverview;
  
    function ReportOverviewConstructor(options) {
  
      var factory = {
          init: init
        },
  
        _elements = {
          $element: options.element
        };
  
      init();
  
      return factory;
  
      function init() {
  
        _elements.$element.append($(getTemplateString()));
  
        $('.delivery-rate').percentCircle({
          width: 130,
          trackColor: '#ececec',
          barColor: '#f5ab34',
          barWeight: 5,
          endPercent: 0.<?php echo $s_acc ?>,
          fps: 60
        });
  
        $('.open-rate').percentCircle({
          width: 130,
          trackColor: '#ececec',
          barColor: '#30afe4',
          barWeight: 5,
          endPercent: 0.<?php echo $a_acc ?>,
          fps: 60
        });
  
        $('.click-to-open').percentCircle({
          width: 130,
          trackColor: '#ececec',
          barColor: '#80cdbe',
          barWeight: 5,
          endPercent: 0.<?php echo $m_acc ?>,
          fps: 60
        });
      }
  
      function getTemplateString() {
        return [
          
          '<div style="color: black;border:#f5ab34 2px solid" class="report-statistic-box">',
          '<div style="color: black;" class="box-header">Whack A Mole!</div>',
          '<div style="color: black;" class="box-content delivery-rate">',
          '<div style="color: black;" class="percentage"><?php echo $s_acc ?>%</div>',
          '</div>',
          '<div style="color: black;" class="box-foot">',
          // '<span style="color: black;" class="arrow arrow-up"></span>',
          // '<div style="color: black;" class="box-foot-left">Delivered<br><span class="box-foot-stats"><strong>{{delivered}}</strong> (90%)</span></div>'.replace(/{{delivered}}/, options.data.delivered),
          // '<span style="color: black;" class="arrow arrow-down"></span>',
          // '<div style="color: black;" class="box-foot-right">Bounced<br><span style="color: black;" class="box-foot-stats" title="% = unopened emails / delivered emails"><strong>120</strong> (10%)</span></div>',
          '</div>',
          '</div>',
  
          // '<div style="border:#30afe4 2px solid;margin-left:3vh" class="report-statistic-box">',
          // '<div style="color: black" class="box-header">Attention</div>',
          // '<div style="color: black;" class="box-content open-rate">',
          // '<div style="color: black;" class="percentage"><?php echo $m_acc ?>%</div>',
          // '</div>',
          '<div style="color: black;" class="box-foot">',
          // '<span style="color: black;" class="arrow arrow-up"></span>',
          // '<div style="color: black;" class="box-foot-left">Memory<br><span class="box-foot-stats"><strong>{{opened}}</strong> (75%)</span></div>'.replace(/{{opened}}/, options.data.opened),
          // '<span style="color: black;" class="arrow arrow-down"></span>',
          // '<div style="color: black;" class="box-foot-right">Unopened<br><span class="box-foot-stats"><strong>120</strong> (25%)</span></div>',
          '</div>',
          '</div>',
           
  
          '<div style="border:#80cdbe 2px solid;margin-left:3vh" class="report-statistic-box">',
          '<div style="color: black;" class="box-header">Horizon Chase!</div>',
          '<div style="color: black;" class="box-content click-to-open">',
          '<div style="color: black;" class="percentage"><?php echo $m_acc ?>%</div>',
          '</div>',
          // '<div style="color: black;" class="box-foot">',
          // '<span style="color: black;" class="arrow arrow-up"></span>',
          // '<div style="color: black;" class="box-foot-left">Clicked<br><span class="box-foot-stats"><strong>{{clicked}}</strong> (50%)</span></div>'.replace(/{{clicked}}/, options.data.clicked),
          // '<div style="color: black;" class="box-foot-right">Non-clicked<br><span class="box-foot-stats"><strong>120</strong> (50%)</span></div>',
          '</div>',
          '</div>'
        ].join('');
      }
    }
  
    function reportCircleGraph() {
  
      $.fn.percentCircle = function pie(options) {
  
        var settings = $.extend({
          width: 130,
          trackColor: '#fff',
          barColor: '#fff',
          barWeight: 5,
          startPercent: 0,
          endPercent: 1,
          fps: 60
        }, options);
  
        this.css({
          width: settings.width,
          height: settings.width
        });
  
        var _this = this,
          canvasWidth = settings.width,
          canvasHeight = canvasWidth,
          id = $('canvas').length,
          canvasElement = $('<canvas id="' + id + '" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
          canvas = canvasElement.get(0).getContext('2d'),
          centerX = canvasWidth / 2,
          centerY = canvasHeight / 2,
          radius = settings.width / 2 - settings.barWeight / 2,
          counterClockwise = false,
          fps = 1000 / settings.fps,
          update = 0.01;
  
        this.angle = settings.startPercent;
  
        this.drawInnerArc = function(startAngle, percentFilled, color) {
          var drawingArc = true;
          canvas.beginPath();
          canvas.arc(centerX, centerY, radius, (Math.PI / 180) * (startAngle * 360 - 90), (Math.PI / 180) * (percentFilled * 360 - 90), counterClockwise);
          canvas.strokeStyle = color;
          canvas.lineWidth = settings.barWeight - 2;
          canvas.stroke();
          drawingArc = false;
        };
  
        this.drawOuterArc = function(startAngle, percentFilled, color) {
          var drawingArc = true;
          canvas.beginPath();
          canvas.arc(centerX, centerY, radius, (Math.PI / 180) * (startAngle * 360 - 90), (Math.PI / 180) * (percentFilled * 360 - 90), counterClockwise);
          canvas.strokeStyle = color;
          canvas.lineWidth = settings.barWeight;
          canvas.lineCap = 'round';
          canvas.stroke();
          drawingArc = false;
        };
  
        this.fillChart = function(stop) {
          var loop = setInterval(function() {
            canvas.clearRect(0, 0, canvasWidth, canvasHeight);
  
            _this.drawInnerArc(0, 360, settings.trackColor);
            _this.drawOuterArc(settings.startPercent, _this.angle, settings.barColor);
  
            _this.angle += update;
  
            if (_this.angle > stop) {
              clearInterval(loop);
            }
          }, fps);
        };
  
        this.fillChart(settings.endPercent);
        this.append(canvasElement);
        return this;
  
      };
  
    }
  
    function getMockData() {
      return {
  
        date: '2014-12-01',
        sentTotal: 4120,
        delivered: 3708,
        opened: 3090,
        clicked: 2060,
        conversion: 35000,
        conversionEmails: 100
  
      };
    }
  
  }));
  
  (function activateReportOverviewModule($) {
    'use strict';
  
    var $el = $('.report-overview-module');
  
    return new ReportOverviewModule({
      element: $el,
      data: {
        date: '2014-12-01',
        sentTotal: 4120,
        delivered: 3708,
        opened: 3090,
        clicked: 2060
      }
    });
  }(jQuery));
  </script>
  <?php
}elseif(isset($_GET['attention'])){
  include '..\Authentication\connect_db.php';
  $gamer_id =  $_SESSION['gamer_id'] ;
  $s_query = "select CAST(AVG(accuracy) as int)as acc from user_stats where gamer_id = $gamer_id and name='Flicker Master!'";
  $s_res = mysqli_query($conn,$s_query);
  while ($s_row = mysqli_fetch_array($s_res)) {
    $s_acc = $s_row['acc'];
  }
  ?>
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $m_query = "select CAST(AVG(accuracy) as int)as acc from user_stats where gamer_id = $gamer_id and name='Catch The Eggs!'";
  $m_res = mysqli_query($conn,$m_query);
  while ($m_row = mysqli_fetch_array($m_res)) {
    $m_acc = $m_row['acc'];
  }
  ?>
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $a_query = "select CAST(AVG(accuracy) as int)as acc from user_stats where gamer_id = $gamer_id  and name='Catch The Eggs!'";
  $a_res = mysqli_query($conn,$a_query);
  while ($a_row = mysqli_fetch_array($a_res)) {
    $a_acc = $a_row['acc'];
  }
  ?>
  
  
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $g1_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Flicker Master!'";
  $g1_res = mysqli_query($conn,$g1_query);
  while ($g1_row = mysqli_fetch_array($g1_res)) {
    $g1_acc = $g1_row['points'];
  }
  ?>
  
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $g4_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Catch The Eggs!'";
  $g4_res = mysqli_query($conn,$g4_query);
  while ($g4_row = mysqli_fetch_array($g4_res)) {
    $g4_acc = $g4_row['points'];
  }
  ?>
  
  
  <body>
  <!-- <div class="wrapper">
    <canvas id='c'></canvas>
    <div class="label">text</div>
  </div> -->
  
  <div class="header">
    <br>
  <h1 style="color:black;text-align:center;margin-left:17rem">Your Personalized Statistics</h1>
  <br><br>
  </div>
  <div class="move">
    
  <div id="container" style="height: 500px; width: 950px; margin-left:26rem;margin-top:1rem;margin-bottom:2.5rem;border:solid 2px black;"></div></div>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://code.highcharts.com/highcharts.js'></script>
  <div style="color: black;" class="content">
      <div  class="report-overview-module"></div>
  </div>
  <h1 style="color:black;text-align:center;margin-left:17rem">Overall Attention Game Accuracy</h1>
  <hr style="margin-bottom: 22rem;width:250vh;color:green">
  <div  class="contain">
    
    <div  class="border">
    <?php
  
      $gamer_id =  $_SESSION['gamer_id'] ;
      $p_query = "select max(points) as points,name,gamer_id from user_stats where gamer_id = $gamer_id and game_type = 'Attention' group by name order by points DESC";
      $p_res = mysqli_query($conn,$p_query);
      while ($p_row = mysqli_fetch_array($p_res)) {
      $p_acc = $p_row['points'];
      $n_acc = $p_row['name'];
  
  ?>
      <div class="bar teal lighten-1" data-percent="<?php echo $p_acc?>%"><span class="label"><?php echo $n_acc ?></span></div>
      <?php }?>
    </div>
  </div>
  <hr>
  <br>
  <h1 style="color:black;text-align:center;margin-left:17rem">Highest Scores</h1>
  <br><br>
  <div style="margin-bottom: 20vh;"></div>
  </body>
  </html>
  <script>
    $('.list').each(function(index){
          
          var topli = $(this).children(":first-child");
          topli.click(function(){
              var parent = $(this).parent();
              var sublis = parent.find(".sub");
              
              if(sublis.is(':visible')){
                  
                  sublis.slideUp();
                  topli.find('i').removeClass('rotatedown');
                  
              }else{
                  sublis.slideDown();
                  
                  topli.find('i').addClass('rotatedown');
                  
              }
          })
          
      });
  // Animated Bars script found at: http://jsfiddle.net/i_heart_php/wwukzpc8/
  setTimeout(function start() {
  
  $('.bar').each(function (i) {
    var $bar = $(this);
    $(this).append('<span class="count"></span>')
    setTimeout(function () {
      $bar.css('width', $bar.attr('data-percent'));
    }, i * 100);
  });
  
  $('.count').each(function () {
    $(this).prop('Counter', 0).animate({
      Counter: $(this).parent('.bar').attr('data-percent')
    }, {
      duration: 2000,
      easing: 'swing',
      step: function (now) {
        $(this).text(Math.ceil(now) + 'Points');
      }
    });
  });
  
  }, 500)
  $(function() {
    //Detailed explanation here http://stackoverflow.com/questions/27542928/extend-highcharts-renderer-symbols-to-have-plus-sign
    // Define a custom symbol path
    Highcharts.SVGRenderer.prototype.symbols.dashedLine =
      function(x, y, w, h) {
        var returnArray = [];
        var startPoint = x - 5 * w;
        var endPoint = x + 5 * w;
        var dashWidth = w;
        var gapWidth = 0.5 * w;
  
        var currentPoint = startPoint;
        for (
          var currentPoint = startPoint; currentPoint <= endPoint; currentPoint += dashWidth + gapWidth /*jump forward one location*/ ) {
          returnArray.push('M', currentPoint, y, 'L', currentPoint + dashWidth, y);
        }
        returnArray.push('z'); //end drawing
        return returnArray;
      };
  
    if (Highcharts.VMLRenderer) {
      Highcharts.VMLRenderer.prototype.symbols.dashedLine = Highcharts.SVGRenderer.prototype.symbols.dashedLine;
    }
  
    $('#container').highcharts({
  
      title: {
        text: 'Average Scores of Attention Category'
      },
  
      legend: {
        y: -40 // make room for subtitle
      },
  
      xAxis: {
        categories: ['Flicker Master!', 'Catch The Eggs!'],
      },
      yAxis:{
        title: {
              enabled: true,
              text: 'Scores',
              style: {
                  fontWeight: 'normal'
              }
          }
      },
      series: [{
        name: 'Average Score',
        data: [<?php echo $g1_acc?>,<?php echo $g4_acc?>],
        
      }],
  
      credits: {
        enabled: false
      }
    });
  });
  (function umd(root, name, factory) {
    'use strict';
    if ('function' === typeof define && define.amd) {
      // AMD. Register as an anonymous module.
      define(name, ['jquery'], factory);
    } else {
      // Browser globals
      root[name] = factory();
    }
  }(this, 'ReportOverviewModule', function UMDFactory() {
    'use strict';
  
    var ReportOverview = ReportOverviewConstructor;
  
    reportCircleGraph();
  
    return ReportOverview;
  
    function ReportOverviewConstructor(options) {
  
      var factory = {
          init: init
        },
  
        _elements = {
          $element: options.element
        };
  
      init();
  
      return factory;
  
      function init() {
  
        _elements.$element.append($(getTemplateString()));
  
        $('.delivery-rate').percentCircle({
          width: 130,
          trackColor: '#ececec',
          barColor: '#f5ab34',
          barWeight: 5,
          endPercent: 0.<?php echo $s_acc ?>,
          fps: 60
        });
  
        $('.open-rate').percentCircle({
          width: 130,
          trackColor: '#ececec',
          barColor: '#30afe4',
          barWeight: 5,
          endPercent: 0.<?php echo $a_acc ?>,
          fps: 60
        });
  
        $('.click-to-open').percentCircle({
          width: 130,
          trackColor: '#ececec',
          barColor: '#80cdbe',
          barWeight: 5,
          endPercent: 0.<?php echo $m_acc ?>,
          fps: 60
        });
      }
  
      function getTemplateString() {
        return [
          
          '<div style="color: black;border:#f5ab34 2px solid" class="report-statistic-box">',
          '<div style="color: black;" class="box-header">Flick Master!</div>',
          '<div style="color: black;" class="box-content delivery-rate">',
          '<div style="color: black;" class="percentage"><?php echo $s_acc ?>%</div>',
          '</div>',
          '<div style="color: black;" class="box-foot">',
          // '<span style="color: black;" class="arrow arrow-up"></span>',
          // '<div style="color: black;" class="box-foot-left">Delivered<br><span class="box-foot-stats"><strong>{{delivered}}</strong> (90%)</span></div>'.replace(/{{delivered}}/, options.data.delivered),
          // '<span style="color: black;" class="arrow arrow-down"></span>',
          // '<div style="color: black;" class="box-foot-right">Bounced<br><span style="color: black;" class="box-foot-stats" title="% = unopened emails / delivered emails"><strong>120</strong> (10%)</span></div>',
          '</div>',
          '</div>',
  
          // '<div style="border:#30afe4 2px solid;margin-left:3vh" class="report-statistic-box">',
          // '<div style="color: black" class="box-header">Attention</div>',
          // '<div style="color: black;" class="box-content open-rate">',
          // '<div style="color: black;" class="percentage"><?php echo $m_acc ?>%</div>',
          // '</div>',
          '<div style="color: black;" class="box-foot">',
          // '<span style="color: black;" class="arrow arrow-up"></span>',
          // '<div style="color: black;" class="box-foot-left">Memory<br><span class="box-foot-stats"><strong>{{opened}}</strong> (75%)</span></div>'.replace(/{{opened}}/, options.data.opened),
          // '<span style="color: black;" class="arrow arrow-down"></span>',
          // '<div style="color: black;" class="box-foot-right">Unopened<br><span class="box-foot-stats"><strong>120</strong> (25%)</span></div>',
          '</div>',
          '</div>',
           
  
          '<div style="border:#80cdbe 2px solid;margin-left:3vh" class="report-statistic-box">',
          '<div style="color: black;" class="box-header">Catch The Eggs!</div>',
          '<div style="color: black;" class="box-content click-to-open">',
          '<div style="color: black;" class="percentage"><?php echo $m_acc ?>%</div>',
          '</div>',
          // '<div style="color: black;" class="box-foot">',
          // '<span style="color: black;" class="arrow arrow-up"></span>',
          // '<div style="color: black;" class="box-foot-left">Clicked<br><span class="box-foot-stats"><strong>{{clicked}}</strong> (50%)</span></div>'.replace(/{{clicked}}/, options.data.clicked),
          // '<div style="color: black;" class="box-foot-right">Non-clicked<br><span class="box-foot-stats"><strong>120</strong> (50%)</span></div>',
          '</div>',
          '</div>'
        ].join('');
      }
    }
  
    function reportCircleGraph() {
  
      $.fn.percentCircle = function pie(options) {
  
        var settings = $.extend({
          width: 130,
          trackColor: '#fff',
          barColor: '#fff',
          barWeight: 5,
          startPercent: 0,
          endPercent: 1,
          fps: 60
        }, options);
  
        this.css({
          width: settings.width,
          height: settings.width
        });
  
        var _this = this,
          canvasWidth = settings.width,
          canvasHeight = canvasWidth,
          id = $('canvas').length,
          canvasElement = $('<canvas id="' + id + '" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
          canvas = canvasElement.get(0).getContext('2d'),
          centerX = canvasWidth / 2,
          centerY = canvasHeight / 2,
          radius = settings.width / 2 - settings.barWeight / 2,
          counterClockwise = false,
          fps = 1000 / settings.fps,
          update = 0.01;
  
        this.angle = settings.startPercent;
  
        this.drawInnerArc = function(startAngle, percentFilled, color) {
          var drawingArc = true;
          canvas.beginPath();
          canvas.arc(centerX, centerY, radius, (Math.PI / 180) * (startAngle * 360 - 90), (Math.PI / 180) * (percentFilled * 360 - 90), counterClockwise);
          canvas.strokeStyle = color;
          canvas.lineWidth = settings.barWeight - 2;
          canvas.stroke();
          drawingArc = false;
        };
  
        this.drawOuterArc = function(startAngle, percentFilled, color) {
          var drawingArc = true;
          canvas.beginPath();
          canvas.arc(centerX, centerY, radius, (Math.PI / 180) * (startAngle * 360 - 90), (Math.PI / 180) * (percentFilled * 360 - 90), counterClockwise);
          canvas.strokeStyle = color;
          canvas.lineWidth = settings.barWeight;
          canvas.lineCap = 'round';
          canvas.stroke();
          drawingArc = false;
        };
  
        this.fillChart = function(stop) {
          var loop = setInterval(function() {
            canvas.clearRect(0, 0, canvasWidth, canvasHeight);
  
            _this.drawInnerArc(0, 360, settings.trackColor);
            _this.drawOuterArc(settings.startPercent, _this.angle, settings.barColor);
  
            _this.angle += update;
  
            if (_this.angle > stop) {
              clearInterval(loop);
            }
          }, fps);
        };
  
        this.fillChart(settings.endPercent);
        this.append(canvasElement);
        return this;
  
      };
  
    }
  
    function getMockData() {
      return {
  
        date: '2014-12-01',
        sentTotal: 4120,
        delivered: 3708,
        opened: 3090,
        clicked: 2060,
        conversion: 35000,
        conversionEmails: 100
  
      };
    }
  
  }));
  
  (function activateReportOverviewModule($) {
    'use strict';
  
    var $el = $('.report-overview-module');
  
    return new ReportOverviewModule({
      element: $el,
      data: {
        date: '2014-12-01',
        sentTotal: 4120,
        delivered: 3708,
        opened: 3090,
        clicked: 2060
      }
    });
  }(jQuery));
  </script>
  <?php
}elseif(isset($_GET['memory'])){
  include '..\Authentication\connect_db.php';
  $gamer_id =  $_SESSION['gamer_id'] ;
  $s_query = "select CAST(AVG(accuracy) as int)as acc from user_stats where gamer_id = $gamer_id and name='Word Memory!'";
  $s_res = mysqli_query($conn,$s_query);
  while ($s_row = mysqli_fetch_array($s_res)) {
    $s_acc = $s_row['acc'];
  }
  ?>
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $m_query = "select CAST(AVG(accuracy) as int)as acc from user_stats where gamer_id = $gamer_id and name='Memorize the Card'";
  $m_res = mysqli_query($conn,$m_query);
  while ($m_row = mysqli_fetch_array($m_res)) {
    $m_acc = $m_row['acc'];
  }
  ?>
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $a_query = "select CAST(AVG(accuracy) as int)as acc from user_stats where gamer_id = $gamer_id  and name='Memorize the Card'";
  $a_res = mysqli_query($conn,$a_query);
  while ($a_row = mysqli_fetch_array($a_res)) {
    $a_acc = $a_row['acc'];
  }
  ?>
  
  
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $g1_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Word Memory!'";
  $g1_res = mysqli_query($conn,$g1_query);
  while ($g1_row = mysqli_fetch_array($g1_res)) {
    $g1_acc = $g1_row['points'];
  }
  ?>
  
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $g4_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Memorize the Card'";
  $g4_res = mysqli_query($conn,$g4_query);
  while ($g4_row = mysqli_fetch_array($g4_res)) {
    $g4_acc = $g4_row['points'];
  }
  ?>
  
  
  <body>
  <!-- <div class="wrapper">
    <canvas id='c'></canvas>
    <div class="label">text</div>
  </div> -->
  
  <div class="header">
    <br>
  <h1 style="color:black;text-align:center;margin-left:17rem">Your Personalized Statistics</h1>
  <br><br>
  </div>
  <div class="move">
    
  <div id="container" style="height: 500px; width: 950px; margin-left:26rem;margin-top:1rem;margin-bottom:2.5rem;border:solid 2px black;"></div></div>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://code.highcharts.com/highcharts.js'></script>
  <div style="color: black;" class="content">
      <div  class="report-overview-module"></div>
  </div>
  <h1 style="color:black;text-align:center;margin-left:17rem">Overall Memory Game Accuracy</h1>
  <hr style="margin-bottom: 22rem;width:250vh;color:green">
  <div  class="contain">
    
    <div  class="border">
    <?php
  
      $gamer_id =  $_SESSION['gamer_id'] ;
      $p_query = "select max(points) as points,name,gamer_id from user_stats where gamer_id = $gamer_id and game_type = 'Memory' group by name order by points DESC";
      $p_res = mysqli_query($conn,$p_query);
      while ($p_row = mysqli_fetch_array($p_res)) {
      $p_acc = $p_row['points'];
      $n_acc = $p_row['name'];
  
  ?>
      <div class="bar teal lighten-1" data-percent="<?php echo $p_acc?>%"><span class="label"><?php echo $n_acc ?></span></div>
      <?php }?>
    </div>
  </div>
  <hr>
  <br>
  <h1 style="color:black;text-align:center;margin-left:17rem">Highest Scores</h1>
  <br><br>
  <div style="margin-bottom: 20vh;"></div>
  </body>
  </html>
  <script>
    $('.list').each(function(index){
          
          var topli = $(this).children(":first-child");
          topli.click(function(){
              var parent = $(this).parent();
              var sublis = parent.find(".sub");
              
              if(sublis.is(':visible')){
                  
                  sublis.slideUp();
                  topli.find('i').removeClass('rotatedown');
                  
              }else{
                  sublis.slideDown();
                  
                  topli.find('i').addClass('rotatedown');
                  
              }
          })
          
      });
  // Animated Bars script found at: http://jsfiddle.net/i_heart_php/wwukzpc8/
  setTimeout(function start() {
  
  $('.bar').each(function (i) {
    var $bar = $(this);
    $(this).append('<span class="count"></span>')
    setTimeout(function () {
      $bar.css('width', $bar.attr('data-percent'));
    }, i * 100);
  });
  
  $('.count').each(function () {
    $(this).prop('Counter', 0).animate({
      Counter: $(this).parent('.bar').attr('data-percent')
    }, {
      duration: 2000,
      easing: 'swing',
      step: function (now) {
        $(this).text(Math.ceil(now) + 'Points');
      }
    });
  });
  
  }, 500)
  $(function() {
    //Detailed explanation here http://stackoverflow.com/questions/27542928/extend-highcharts-renderer-symbols-to-have-plus-sign
    // Define a custom symbol path
    Highcharts.SVGRenderer.prototype.symbols.dashedLine =
      function(x, y, w, h) {
        var returnArray = [];
        var startPoint = x - 5 * w;
        var endPoint = x + 5 * w;
        var dashWidth = w;
        var gapWidth = 0.5 * w;
  
        var currentPoint = startPoint;
        for (
          var currentPoint = startPoint; currentPoint <= endPoint; currentPoint += dashWidth + gapWidth /*jump forward one location*/ ) {
          returnArray.push('M', currentPoint, y, 'L', currentPoint + dashWidth, y);
        }
        returnArray.push('z'); //end drawing
        return returnArray;
      };
  
    if (Highcharts.VMLRenderer) {
      Highcharts.VMLRenderer.prototype.symbols.dashedLine = Highcharts.SVGRenderer.prototype.symbols.dashedLine;
    }
  
    $('#container').highcharts({
  
      title: {
        text: 'Average Scores of Memory Category'
      },
  
      legend: {
        y: -40 // make room for subtitle
      },
  
      xAxis: {
        categories: ['Word Memory!', 'Memorize the Card'],
      },
      yAxis:{
        title: {
              enabled: true,
              text: 'Scores',
              style: {
                  fontWeight: 'normal'
              }
          }
      },
      series: [{
        name: 'Average Score',
        data: [<?php echo $g1_acc?>,<?php echo $g4_acc?>],
        
      }],
  
      credits: {
        enabled: false
      }
    });
  });
  (function umd(root, name, factory) {
    'use strict';
    if ('function' === typeof define && define.amd) {
      // AMD. Register as an anonymous module.
      define(name, ['jquery'], factory);
    } else {
      // Browser globals
      root[name] = factory();
    }
  }(this, 'ReportOverviewModule', function UMDFactory() {
    'use strict';
  
    var ReportOverview = ReportOverviewConstructor;
  
    reportCircleGraph();
  
    return ReportOverview;
  
    function ReportOverviewConstructor(options) {
  
      var factory = {
          init: init
        },
  
        _elements = {
          $element: options.element
        };
  
      init();
  
      return factory;
  
      function init() {
  
        _elements.$element.append($(getTemplateString()));
  
        $('.delivery-rate').percentCircle({
          width: 130,
          trackColor: '#ececec',
          barColor: '#f5ab34',
          barWeight: 5,
          endPercent: 0.<?php echo $s_acc ?>,
          fps: 60
        });
  
        $('.open-rate').percentCircle({
          width: 130,
          trackColor: '#ececec',
          barColor: '#30afe4',
          barWeight: 5,
          endPercent: 0.<?php echo $a_acc ?>,
          fps: 60
        });
  
        $('.click-to-open').percentCircle({
          width: 130,
          trackColor: '#ececec',
          barColor: '#80cdbe',
          barWeight: 5,
          endPercent: 0.<?php echo $m_acc ?>,
          fps: 60
        });
      }
  
      function getTemplateString() {
        return [
          
          '<div style="color: black;border:#f5ab34 2px solid" class="report-statistic-box">',
          '<div style="color: black;" class="box-header">Word Memory!</div>',
          '<div style="color: black;" class="box-content delivery-rate">',
          '<div style="color: black;" class="percentage"><?php echo $s_acc ?>%</div>',
          '</div>',
          '<div style="color: black;" class="box-foot">',
          // '<span style="color: black;" class="arrow arrow-up"></span>',
          // '<div style="color: black;" class="box-foot-left">Delivered<br><span class="box-foot-stats"><strong>{{delivered}}</strong> (90%)</span></div>'.replace(/{{delivered}}/, options.data.delivered),
          // '<span style="color: black;" class="arrow arrow-down"></span>',
          // '<div style="color: black;" class="box-foot-right">Bounced<br><span style="color: black;" class="box-foot-stats" title="% = unopened emails / delivered emails"><strong>120</strong> (10%)</span></div>',
          '</div>',
          '</div>',
  
          // '<div style="border:#30afe4 2px solid;margin-left:3vh" class="report-statistic-box">',
          // '<div style="color: black" class="box-header">Attention</div>',
          // '<div style="color: black;" class="box-content open-rate">',
          // '<div style="color: black;" class="percentage"><?php echo $m_acc ?>%</div>',
          // '</div>',
          '<div style="color: black;" class="box-foot">',
          // '<span style="color: black;" class="arrow arrow-up"></span>',
          // '<div style="color: black;" class="box-foot-left">Memory<br><span class="box-foot-stats"><strong>{{opened}}</strong> (75%)</span></div>'.replace(/{{opened}}/, options.data.opened),
          // '<span style="color: black;" class="arrow arrow-down"></span>',
          // '<div style="color: black;" class="box-foot-right">Unopened<br><span class="box-foot-stats"><strong>120</strong> (25%)</span></div>',
          '</div>',
          '</div>',
           
  
          '<div style="border:#80cdbe 2px solid;margin-left:3vh" class="report-statistic-box">',
          '<div style="color: black;" class="box-header">Memorize the Card</div>',
          '<div style="color: black;" class="box-content click-to-open">',
          '<div style="color: black;" class="percentage"><?php echo $m_acc ?>%</div>',
          '</div>',
          // '<div style="color: black;" class="box-foot">',
          // '<span style="color: black;" class="arrow arrow-up"></span>',
          // '<div style="color: black;" class="box-foot-left">Clicked<br><span class="box-foot-stats"><strong>{{clicked}}</strong> (50%)</span></div>'.replace(/{{clicked}}/, options.data.clicked),
          // '<div style="color: black;" class="box-foot-right">Non-clicked<br><span class="box-foot-stats"><strong>120</strong> (50%)</span></div>',
          '</div>',
          '</div>'
        ].join('');
      }
    }
  
    function reportCircleGraph() {
  
      $.fn.percentCircle = function pie(options) {
  
        var settings = $.extend({
          width: 130,
          trackColor: '#fff',
          barColor: '#fff',
          barWeight: 5,
          startPercent: 0,
          endPercent: 1,
          fps: 60
        }, options);
  
        this.css({
          width: settings.width,
          height: settings.width
        });
  
        var _this = this,
          canvasWidth = settings.width,
          canvasHeight = canvasWidth,
          id = $('canvas').length,
          canvasElement = $('<canvas id="' + id + '" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
          canvas = canvasElement.get(0).getContext('2d'),
          centerX = canvasWidth / 2,
          centerY = canvasHeight / 2,
          radius = settings.width / 2 - settings.barWeight / 2,
          counterClockwise = false,
          fps = 1000 / settings.fps,
          update = 0.01;
  
        this.angle = settings.startPercent;
  
        this.drawInnerArc = function(startAngle, percentFilled, color) {
          var drawingArc = true;
          canvas.beginPath();
          canvas.arc(centerX, centerY, radius, (Math.PI / 180) * (startAngle * 360 - 90), (Math.PI / 180) * (percentFilled * 360 - 90), counterClockwise);
          canvas.strokeStyle = color;
          canvas.lineWidth = settings.barWeight - 2;
          canvas.stroke();
          drawingArc = false;
        };
  
        this.drawOuterArc = function(startAngle, percentFilled, color) {
          var drawingArc = true;
          canvas.beginPath();
          canvas.arc(centerX, centerY, radius, (Math.PI / 180) * (startAngle * 360 - 90), (Math.PI / 180) * (percentFilled * 360 - 90), counterClockwise);
          canvas.strokeStyle = color;
          canvas.lineWidth = settings.barWeight;
          canvas.lineCap = 'round';
          canvas.stroke();
          drawingArc = false;
        };
  
        this.fillChart = function(stop) {
          var loop = setInterval(function() {
            canvas.clearRect(0, 0, canvasWidth, canvasHeight);
  
            _this.drawInnerArc(0, 360, settings.trackColor);
            _this.drawOuterArc(settings.startPercent, _this.angle, settings.barColor);
  
            _this.angle += update;
  
            if (_this.angle > stop) {
              clearInterval(loop);
            }
          }, fps);
        };
  
        this.fillChart(settings.endPercent);
        this.append(canvasElement);
        return this;
  
      };
  
    }
  
    function getMockData() {
      return {
  
        date: '2014-12-01',
        sentTotal: 4120,
        delivered: 3708,
        opened: 3090,
        clicked: 2060,
        conversion: 35000,
        conversionEmails: 100
  
      };
    }
  
  }));
  
  (function activateReportOverviewModule($) {
    'use strict';
  
    var $el = $('.report-overview-module');
  
    return new ReportOverviewModule({
      element: $el,
      data: {
        date: '2014-12-01',
        sentTotal: 4120,
        delivered: 3708,
        opened: 3090,
        clicked: 2060
      }
    });
  }(jQuery));
  </script>
  <?php
}else {
  include '..\Authentication\connect_db.php';
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
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $t_query = "select avg(points) as points,uname from user_stats where gamer_id= $gamer_id group by gamer_id";
  $t_res = mysqli_query($conn,$t_query);
  while ($t_row = mysqli_fetch_array($t_res)) {
    $t_acc = $t_row['points'];
  }
  ?>
  
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $g1_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Whack A Mole!'";
  $g1_res = mysqli_query($conn,$g1_query);
  while ($g1_row = mysqli_fetch_array($g1_res)) {
    $g1_acc = $g1_row['points'];
  }
  ?>
  
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $g2_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Flicker Master!'";
  $g2_res = mysqli_query($conn,$g2_query);
  while ($g2_row = mysqli_fetch_array($g2_res)) {
    $g2_acc = $g2_row['points'];
  }
  ?>
  
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $g3_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Word Memory!'";
  $g3_res = mysqli_query($conn,$g3_query);
  while ($g3_row = mysqli_fetch_array($g3_res)) {
    $g3_acc = $g3_row['points'];
  }
  ?>
  
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $g4_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Horizon Chase!'";
  $g4_res = mysqli_query($conn,$g4_query);
  while ($g4_row = mysqli_fetch_array($g4_res)) {
    $g4_acc = $g4_row['points'];
  }
  ?>
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $g5_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Memorize the Card'";
  $g5_res = mysqli_query($conn,$g5_query);
  while ($g5_row = mysqli_fetch_array($g5_res)) {
    $g5_acc = $g5_row['points'];
  }
  ?>
  
  <?php
  
  $gamer_id =  $_SESSION['gamer_id'] ;
  $g6_query = "select avg(points) as points from user_stats where gamer_id= $gamer_id and name = 'Catch The Eggs!'";
  $g6_res = mysqli_query($conn,$g6_query);
  while ($g6_row = mysqli_fetch_array($g6_res)) {
    $g6_acc = $g6_row['points'];
  }
  ?>
  
  <body>
  <!-- <div class="wrapper">
    <canvas id='c'></canvas>
    <div class="label">text</div>
  </div> -->
  
  <div class="header">
    <br>
  <h1 style="color:black;text-align:center;margin-left:17rem">Your Personalized Statistics</h1>
  <br><br>
  </div>
  <div class="move">
    
  <div id="container" style="height: 500px; width: 950px; margin-left:26rem;margin-top:1rem;margin-bottom:2.5rem;border:solid 2px black;"></div></div>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://code.highcharts.com/highcharts.js'></script>
  <div style="color: black;" class="content">
      <div  class="report-overview-module"></div>
  </div>
  <h1 style="color:black;text-align:center;margin-left:17rem">Overall Accuracy</h1>
  <hr style="margin-bottom: 22rem;width:250vh;color:green">
  <div  class="contain">
    
    <div  class="border">
    <?php
  
      $gamer_id =  $_SESSION['gamer_id'] ;
      $p_query = "select max(points) as points,name,gamer_id from user_stats where gamer_id = $gamer_id  group by name order by points DESC";
      $p_res = mysqli_query($conn,$p_query);
      while ($p_row = mysqli_fetch_array($p_res)) {
      $p_acc = $p_row['points'];
      $n_acc = $p_row['name'];
  
  ?>
      <div class="bar teal lighten-1" data-percent="<?php echo $p_acc?>%"><span class="label"><?php echo $n_acc ?></span></div>
      <?php }?>
    </div>
  </div>
  <hr>
  <br>
  <h1 style="color:black;text-align:center;margin-left:17rem">Highest Scores</h1>
  <br><br>
  <div style="margin-bottom: 20vh;"></div>
  </body>
  </html>
  <script>
    $('.list').each(function(index){
          
          var topli = $(this).children(":first-child");
          topli.click(function(){
              var parent = $(this).parent();
              var sublis = parent.find(".sub");
              
              if(sublis.is(':visible')){
                  
                  sublis.slideUp();
                  topli.find('i').removeClass('rotatedown');
                  
              }else{
                  sublis.slideDown();
                  
                  topli.find('i').addClass('rotatedown');
                  
              }
          })
          
      });
  // Animated Bars script found at: http://jsfiddle.net/i_heart_php/wwukzpc8/
  setTimeout(function start() {
  
  $('.bar').each(function (i) {
    var $bar = $(this);
    $(this).append('<span class="count"></span>')
    setTimeout(function () {
      $bar.css('width', $bar.attr('data-percent'));
    }, i * 100);
  });
  
  $('.count').each(function () {
    $(this).prop('Counter', 0).animate({
      Counter: $(this).parent('.bar').attr('data-percent')
    }, {
      duration: 2000,
      easing: 'swing',
      step: function (now) {
        $(this).text(Math.ceil(now) + 'Points');
      }
    });
  });
  
  }, 500)
  $(function() {
    //Detailed explanation here http://stackoverflow.com/questions/27542928/extend-highcharts-renderer-symbols-to-have-plus-sign
    // Define a custom symbol path
    Highcharts.SVGRenderer.prototype.symbols.dashedLine =
      function(x, y, w, h) {
        var returnArray = [];
        var startPoint = x - 5 * w;
        var endPoint = x + 5 * w;
        var dashWidth = w;
        var gapWidth = 0.5 * w;
  
        var currentPoint = startPoint;
        for (
          var currentPoint = startPoint; currentPoint <= endPoint; currentPoint += dashWidth + gapWidth /*jump forward one location*/ ) {
          returnArray.push('M', currentPoint, y, 'L', currentPoint + dashWidth, y);
        }
        returnArray.push('z'); //end drawing
        return returnArray;
      };
  
    if (Highcharts.VMLRenderer) {
      Highcharts.VMLRenderer.prototype.symbols.dashedLine = Highcharts.SVGRenderer.prototype.symbols.dashedLine;
    }
  
    $('#container').highcharts({
  
      title: {
        text: 'Average Scores Per Game'
      },
  
      legend: {
        y: -40 // make room for subtitle
      },
  
      xAxis: {
        categories: ['Whack A Mole!', 'Flicker Master!', 'Word Memory!', 'Horizon Chase!', 'Memorize the Card', 'Catch The Eggs!'],
      },
      yAxis:{
        title: {
              enabled: true,
              text: 'Scores',
              style: {
                  fontWeight: 'normal'
              }
          }
      },
      series: [{
        name: 'Average Score',
        data: [<?php echo $g1_acc?>,<?php echo $g2_acc?>,<?php echo $g3_acc?>,<?php echo $g4_acc?>,<?php echo $g5_acc?>,<?php echo $g6_acc?>,],
        
      }],
  
      credits: {
        enabled: false
      }
    });
  });
  (function umd(root, name, factory) {
    'use strict';
    if ('function' === typeof define && define.amd) {
      // AMD. Register as an anonymous module.
      define(name, ['jquery'], factory);
    } else {
      // Browser globals
      root[name] = factory();
    }
  }(this, 'ReportOverviewModule', function UMDFactory() {
    'use strict';
  
    var ReportOverview = ReportOverviewConstructor;
  
    reportCircleGraph();
  
    return ReportOverview;
  
    function ReportOverviewConstructor(options) {
  
      var factory = {
          init: init
        },
  
        _elements = {
          $element: options.element
        };
  
      init();
  
      return factory;
  
      function init() {
  
        _elements.$element.append($(getTemplateString()));
  
        $('.delivery-rate').percentCircle({
          width: 130,
          trackColor: '#ececec',
          barColor: '#f5ab34',
          barWeight: 5,
          endPercent: 0.<?php echo $s_acc ?>,
          fps: 60
        });
  
        $('.open-rate').percentCircle({
          width: 130,
          trackColor: '#ececec',
          barColor: '#30afe4',
          barWeight: 5,
          endPercent: 0.<?php echo $a_acc ?>,
          fps: 60
        });
  
        $('.click-to-open').percentCircle({
          width: 130,
          trackColor: '#ececec',
          barColor: '#80cdbe',
          barWeight: 5,
          endPercent: 0.<?php echo $m_acc ?>,
          fps: 60
        });
      }
  
      function getTemplateString() {
        return [
          
          '<div style="color: black;border:#f5ab34 2px solid" class="report-statistic-box">',
          '<div style="color: black;" class="box-header">Speed</div>',
          '<div style="color: black;" class="box-content delivery-rate">',
          '<div style="color: black;" class="percentage"><?php echo $s_acc ?>%</div>',
          '</div>',
          '<div style="color: black;" class="box-foot">',
          // '<span style="color: black;" class="arrow arrow-up"></span>',
          // '<div style="color: black;" class="box-foot-left">Delivered<br><span class="box-foot-stats"><strong>{{delivered}}</strong> (90%)</span></div>'.replace(/{{delivered}}/, options.data.delivered),
          // '<span style="color: black;" class="arrow arrow-down"></span>',
          // '<div style="color: black;" class="box-foot-right">Bounced<br><span style="color: black;" class="box-foot-stats" title="% = unopened emails / delivered emails"><strong>120</strong> (10%)</span></div>',
          '</div>',
          '</div>',
  
          '<div style="border:#30afe4 2px solid;margin-left:3vh" class="report-statistic-box">',
          '<div style="color: black" class="box-header">Attention</div>',
          '<div style="color: black;" class="box-content open-rate">',
          '<div style="color: black;" class="percentage"><?php echo $a_acc ?>%</div>',
          '</div>',
          '<div style="color: black;" class="box-foot">',
          // '<span style="color: black;" class="arrow arrow-up"></span>',
          // '<div style="color: black;" class="box-foot-left">Memory<br><span class="box-foot-stats"><strong>{{opened}}</strong> (75%)</span></div>'.replace(/{{opened}}/, options.data.opened),
          // '<span style="color: black;" class="arrow arrow-down"></span>',
          // '<div style="color: black;" class="box-foot-right">Unopened<br><span class="box-foot-stats"><strong>120</strong> (25%)</span></div>',
          '</div>',
          '</div>',
           
  
          '<div style="border:#80cdbe 2px solid;margin-left:3vh" class="report-statistic-box">',
          '<div style="color: black;" class="box-header">Memory</div>',
          '<div style="color: black;" class="box-content click-to-open">',
          '<div style="color: black;" class="percentage"><?php echo $m_acc ?>%</div>',
          '</div>',
          // '<div style="color: black;" class="box-foot">',
          // '<span style="color: black;" class="arrow arrow-up"></span>',
          // '<div style="color: black;" class="box-foot-left">Clicked<br><span class="box-foot-stats"><strong>{{clicked}}</strong> (50%)</span></div>'.replace(/{{clicked}}/, options.data.clicked),
          // '<div style="color: black;" class="box-foot-right">Non-clicked<br><span class="box-foot-stats"><strong>120</strong> (50%)</span></div>',
          '</div>',
          '</div>'
        ].join('');
      }
    }
  
    function reportCircleGraph() {
  
      $.fn.percentCircle = function pie(options) {
  
        var settings = $.extend({
          width: 130,
          trackColor: '#fff',
          barColor: '#fff',
          barWeight: 5,
          startPercent: 0,
          endPercent: 1,
          fps: 60
        }, options);
  
        this.css({
          width: settings.width,
          height: settings.width
        });
  
        var _this = this,
          canvasWidth = settings.width,
          canvasHeight = canvasWidth,
          id = $('canvas').length,
          canvasElement = $('<canvas id="' + id + '" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
          canvas = canvasElement.get(0).getContext('2d'),
          centerX = canvasWidth / 2,
          centerY = canvasHeight / 2,
          radius = settings.width / 2 - settings.barWeight / 2,
          counterClockwise = false,
          fps = 1000 / settings.fps,
          update = 0.01;
  
        this.angle = settings.startPercent;
  
        this.drawInnerArc = function(startAngle, percentFilled, color) {
          var drawingArc = true;
          canvas.beginPath();
          canvas.arc(centerX, centerY, radius, (Math.PI / 180) * (startAngle * 360 - 90), (Math.PI / 180) * (percentFilled * 360 - 90), counterClockwise);
          canvas.strokeStyle = color;
          canvas.lineWidth = settings.barWeight - 2;
          canvas.stroke();
          drawingArc = false;
        };
  
        this.drawOuterArc = function(startAngle, percentFilled, color) {
          var drawingArc = true;
          canvas.beginPath();
          canvas.arc(centerX, centerY, radius, (Math.PI / 180) * (startAngle * 360 - 90), (Math.PI / 180) * (percentFilled * 360 - 90), counterClockwise);
          canvas.strokeStyle = color;
          canvas.lineWidth = settings.barWeight;
          canvas.lineCap = 'round';
          canvas.stroke();
          drawingArc = false;
        };
  
        this.fillChart = function(stop) {
          var loop = setInterval(function() {
            canvas.clearRect(0, 0, canvasWidth, canvasHeight);
  
            _this.drawInnerArc(0, 360, settings.trackColor);
            _this.drawOuterArc(settings.startPercent, _this.angle, settings.barColor);
  
            _this.angle += update;
  
            if (_this.angle > stop) {
              clearInterval(loop);
            }
          }, fps);
        };
  
        this.fillChart(settings.endPercent);
        this.append(canvasElement);
        return this;
  
      };
  
    }
  
    function getMockData() {
      return {
  
        date: '2014-12-01',
        sentTotal: 4120,
        delivered: 3708,
        opened: 3090,
        clicked: 2060,
        conversion: 35000,
        conversionEmails: 100
  
      };
    }
  
  }));
  
  (function activateReportOverviewModule($) {
    'use strict';
  
    var $el = $('.report-overview-module');
  
    return new ReportOverviewModule({
      element: $el,
      data: {
        date: '2014-12-01',
        sentTotal: 4120,
        delivered: 3708,
        opened: 3090,
        clicked: 2060
      }
    });
  }(jQuery));
  </script>
  <?php }

}else{
   
   include "..\Common\icon.php";
   } ?>