<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

* {
  box-sizing: border-box;
}
body {
    margin-left: 01%;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 160px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body>
  <div class="container">
  <!-- <div class="container">  -->
    <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
<div class="search-container" align="right">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


<div class="header">
  <h1> THE Chosen Mobile </h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
      <ul>
      <p>Battery:<span class="glyphicon glyphicon-scale"></span></span></p>
     
     <li> </li>
     <p>Brand: <span class="glyphicon glyphicon-apple"></span></span></p>
     
     <li></li>
     <p>BuiltInMemory: <span class="glyphicon glyphicon-download-alt"></span></p>
     <li></li>
     <p>CameraFeatures: <span class="glyphicon glyphicon-facetime-video"></span></p>
     <li></li>
     <p>ChipSet: <!-- <span class="glyphicon glyphicon-random"> --></span></p>
     <li></li>
     <p>Color: <!-- <span class="glyphicon glyphicon-random"> --></span></p>
     <li></li>
     <p>ConnectivityBluetooth: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>ConnectivityData:<!--  <span class="glyphicon glyphicon-signal"></span></span> --></p>
     <li></li>
     <p>ConnectivityGPS:  <span class="glyphicon glyphicon-globe"></p>
     <li></li>
     <p>ConnectivityInferred:<!--  <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>ConnectivityNFC:<!--  <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>ConnectivityRadio: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>ConnectivityUSB: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>ConnectivityWLAN:<!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>CPU: &#xf1a5;</p>
     <li></li>
     <p>Device: <span class="glyphicon glyphicon-phone-alt"></span></span></p>
     <li></li>
     <p>Dimensions:  <span class="glyphicon glyphicon-fullscreen"></span></p>
     <li></li>
     <p>DispalyExtraFeatures: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>DispalyProtection: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>DispalyTechnology: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>FeatureAudio: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>FeatureBrowser:<!--  <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>FeatureExtra: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>FeatureGame:<span class="glyphicon glyphicon-queen"></span></p>
     <li></li>
     <p>FeatureMessage: <span class="glyphicon glyphicon-send"></span></p>
     <li></li>
     <p>FeatureTorch:  <span class="glyphicon glyphicon-lamp"></span></p>
     <li></li>
     <p>Frequency: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>Main Camera: <span class="glyphicon glyphicon-facetime-video"></span></p>
     <li></li>
     <p>SecondaryCamera: <span class="glyphicon glyphicon-facetime-video"></span></p>
     <li></li>
     <p> MemoryCard: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
    <li></li>
     <p>OS: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>Rating:  <span class="glyphicon glyphicon-star"></span></span></p>
     <li></li>
     <p> ScreenResolution: <span class="glyphicon glyphicon-picture"></span></p>
    <li></li>
     <p>ScreenSize: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>Sim: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>UI: <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
     <p>weight <!-- <span class="glyphicon glyphicon-random"></span> --></p>
     <li></li>
    </ul>
  </div>

  <div class="col-6 col-s-9">
       <div class="row">
  <div class="col-md-2">
    <div class="thumbnail">
        <img src="i1.jpg" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Front View</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-2">
    <div class="thumbnail">
     
        <img src="i2.jpg" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Rare View</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-2">
    <div class="thumbnail">
      
        <img src="i3.jpg" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>All Colours</p>
        </div>
      </a>
    </div>
  </div>
</div>
  </div>

  <div class="col-1 col-s-12">
    <div class="aside">
       <h5 class="w3-bar-item">Menu</h5>
  <a href="#" class="w3-bar-item w3-button">Link 1</a> 
  <a href="#" class="w3-bar-item w3-button">Link 2</a> 
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div>
</div>
 
  <div class="form-group" style="padding:20px;">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="3" id="comment"></textarea>
</div>
</div>
<div class="footer">
  <p>THE ONE STOP Mobile Shop MOBILY :) </p>
</div>
</div>
</body>
</html>
