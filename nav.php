<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>navbar</title>
<link href="css/bootstrap.css" type="text/css"rel="stylesheet" />
<link href="css/bootstrap.min.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.min.css" type="text/css"rel="stylesheet" />
 <script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color:green;
  width:100%;
  position: fixed;
  z-index: 1000;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 14px;
  text-decoration: none;
  font-family:Verdana, Geneva, sans-serif;
  position:relative;
  font-size: 15px;
}
#line:after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0%;
  border-bottom: 2px dotted #f00;
  transition: 0.7s;
}
#line:hover:after {
  width: 100%;
}
.topnav a:hover {
  color: #090;
  text-decoration:none;
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
.moto{
float:right;
padding-right:7px;
font-family:Tahoma, Geneva, sans-serif;
color:#090;	
}
@keyframes name{
15% {color:#000;}
40% {color:#FFF;}
65% {color:#FF0;}
80% {color:#F00;} 
}
#name{
  animation-name:name;
    animation-duration: 15s;
   animation-iteration-count: infinite;
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="index.php"><div id="line"><strong>Home </strong></div></a>
  <a href="elearning.php"><div id="line"><strong>E-learning </strong></div></a>
  <a href="resources.php"><div id="line"><strong>Resources </strong></div></a>
  <a href="forum.php"><div id="line"><strong>Discussion Forum </strong></div></a>
    <a href="login.php"><div id="line"><strong>Chat Now </strong></div></a>
  <a href="about.php"><div id="line"><strong>About Us</strong></div></a>
  
  
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
<h1 class="animate-reveal animate-first pull-left" color:#FFF">Zimfarmers Assistant System</h1>
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











</body>
</html>
