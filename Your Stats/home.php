<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../tester/style2.css">
    <title>Progress</title>
  <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> -->


<style>
  .sidenav {
    height: 50%;
    width: 200px;
    position: absolute;
    z-index: 1;
    
    left: 0;
    background-color: #111;
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
  }
  
  
  
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  } */
      </style>

  </head>
  <body>
          <!-- TEMP NAV -->
    <ul class="nav">
      <li><a class="active" href="#home">Home</a></li>
      <li><a class="active" href="#news">News</a></li>
      <li><a  class="active" href="#contact">Contact</a></li>
      <li><a class="active" href="#about">About</a></li>
    </ul>
         <!-- END OF NAV -->
          <!-- <progress></progress> -->
         <br><br>
           
           <!-- SIDE NAV -->
    
    <div class="sidenav">
        <a href="#">Attention</a>
        <a href="#">Speed</a>
        <a href="#">Memory</a>
        <a href="#">Co-ordination</a>
        <a href="#">Overall</a>

      </div> -->
               <!-- END SIDE NAV -->
         <div class="main">
          <h2>Exclusive features </h2>
             
          <i class="icon fa fa-trophy fa-2x"></i>
          <b> Leaderboard</b> <br> 
          Compete with player across the globe while improving your skills
            <br>
          <i class="fa fa-bullseye fa-2x" aria-hidden="true"></i>
          <b>Tailored Insights</b><br> 
          Track your progress and get to know strengths and weakness  <br>
           
           <i class="fa fa-bar-chart fa-2x" aria-hidden="true"></i>
             
           <b>Graph Evaluation</b><br> 
           For better understanding you can view your report in bar graph form 
         
         </div>
        
                                <!-- BUTTON  -->
                   
    <div class="center"><button class="button button1"><a href="../tester/index.html">Bar-graph</a> </button> </div>
         

         <br><br><br><br>



      <ul class="list-container">
          <li style="--color: #d2e603">
            <div class="card-content">
              <h2>Attention Analysis</h2>
              <span ><h3>Progress % :</h3></span>
              <div class="card-progress-container">
                <div class="card-progress-bar">
                  <div class="card-progress-current" style="--current: %;">
                    <div></div>
                  </div>
                </div>
                <span class="card-progress-count">43%</span>
              </div>
            </div>


            <div class="card-icon">
            </div>
          <br><br><br><br>

          
         
           


          </li>
          <li style="--color: #FFA500">
            <div class="card-content">
              <h2>Speed Analysis</h2>
              <span>progress % :</span>
              <div class="card-progress-container">
                <div class="card-progress-bar">
                  <div class="card-progress-current" style="--current: 67%;">
                    <div></div>
                  </div>
                </div>
                <span class="card-progress-count">67%</span>
              </div>
            </div>
            <div class="card-icon">
            </div>
          </li>
          <li style="--color: #4e89ae">
            <div class="card-content">
              <h2>Memory Analysis</h2>
              <span>progress % :</span>
              <div class="card-progress-container">
                <div class="card-progress-bar">
                  <div class="card-progress-current" style="--current: 85%;">
                    <div></div>
                  </div>
                </div>
                <span class="card-progress-count">85%</span>
              </div>
            </div>
            <div class="card-icon">
            </div>
          </li>
          <li style="--color: #d54062">
            <div class="card-content">
              <h2>Co-ordination</h2>
              <span>progress % :</span>
              <div class="card-progress-container">
                <div class="card-progress-bar">
                  <div class="card-progress-current" style="--current: 47%;">
                    <div></div>
                  </div>
                </div>
                <span class="card-progress-count">47%</span>
              </div>
            </div>
            <div class="card-icon">
            </div>
          </li>

          <li style="--color: #d54062">
            <div class="card-content">
              <h2>Overall</h2>
              <span>progress % :</span>
              <div class="card-progress-container">
                <div class="card-progress-bar">
                  <div class="card-progress-current" style="--current: 63%;">
                    <div></div>
                  </div>
                </div>
                <span class="card-progress-count">63%</span>
              </div>
            </div>
            <div class="card-icon">
            </div>
          </li>

      </ul>
  </body>
</html>
