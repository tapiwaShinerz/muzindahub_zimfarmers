<?php 
include_once'main.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="fav.png" type="image/x-icon"/>
 <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-image: url(images/1.jpg);background-size:cover;">

<div id="para" class="container-fluid">
<div class="col-sm-12 navbar-fixed-top" style="background-color:#FFF;box-shadow: 0 9px 6px -6px #060;"><?php include_once'head.php'; ?></div>
<h1 class="animate-reveal animate-first pull-left" style="color:#FFF;padding-top:70px">
<span style="font-size:30px;padding-top:10px">Zimfarmers Assistant System</span> <br><hr style="width: 30%">
<span style="font-size:25px;">How it works?</span><br>
<span style="color: #060;font-size:17px;text-shadow: 2px 2px 4px #FFF;">Zimfarmers Assistant System lets you plan and manage your farming with a few clicks.It helps in planting, spraying, fertilization, irrigation, harvesting and all other farming activities.</span><br><span style="font-size:18px;text-shadow: 2px 2px 4px #060;">Connected today with a number of productive farmers,helpers and suppliers</span>	
<p>&nbsp</p>
<a class="btn btn-success btn-sm" href="#" role="button" style="border-radius: 0px;border:1px solid #FFF">GET STARTED NOW</a><br>
<a href="#down"><img src="images/down.gif" width="55" height="55" style="margin-top:5px"> </a><br>
</h1>
</div> 

<div class="container-fluid">
<div class="row bg-success">
<div class="col-sm-12">
<h1 class="animate-reveal animate-first pull-left"><span style="font-size:25px;">Who are you?</span><br>
<span style="font-size:18px;color: #666">Whether you are <strong>small</strong> or <strong>large farmer, agricultural cooperative</strong> or <strong>large enterprise company </strong> looking for a dynamic solution,we have a solution for you.</span></h1></div>
</div>
</div>


<div class="container-fluid" style="margin-top:5px">
<div class="sticky-container">
    <ul class="sticky">
      
        <li>
            <img src="images/twitter.png" width="32" height="32">
            <p><a href="http://www.twitter.com/zimfarmers_assistant" target="_blank">Follow Us on<br>Twitter</a></p>
        </li>
        <li>
            <img src="images/facebook.png" width="32" height="32">
            <p><a href="https://www.facebook.com/zimfarmers_assistant" target="_blank">Like Us on<br>Facebook</a></p>
        </li>
        <li>
            <img style="border-radius: 70%" src="images/app.png" width="30" height="30">
            <p>Whatsapp <br>0716 605 802</p>
        </li>
        <li>
            <img style="border-radius: 70%" src="images/mail.jpg" width="30" height="30">
            <p><a href="mailto:nobytechy@gmail.com" target="_blank">Email Us Now</a></p>
        </li>
    </ul>
</div>

<div class="col-sm-4"><div class="jumbotron bg-success" style="border:2px solid green;text-align: center;"><h3 class="animate-reveal animate-second text-center"><span style="font-size:15px">Farmer</span></h3>
<img class="img-responsive" style="box-shadow: 0 9px 6px -6px #060;" src="images/slide2.jpg">
 <p style="margin-top: 10px"><a class="btn btn-success btn-lg" href="#farmer" role="button">Login now</a></p>
 <p style="font-size: 12px">Not yet a member <a href="registration.php">REGISTER NOW</a></p>
</div> 
</div>

<div class="col-sm-4"><div class="jumbotron bg-success" style="border:2px solid green;text-align: center;"><h3 class="animate-reveal animate-second text-center"><span style="font-size:15px">Agric. Officer</span></h3>
<img class="img-responsive" style="box-shadow: 0 9px 6px -6px #060;" src="images/helper.jpg">
 <p style="margin-top: 10px"><a class="btn btn-success btn-lg" href="#officer" role="button">Login now</a></p>
 <p style="font-size: 12px">Not yet a member <a href="helper_registration.php">REGISTER NOW</a></p>
</div></div>

<div class="col-sm-4" id="down"><div class="jumbotron bg-success" style="border:2px solid green;text-align: center;"><h3 class="animate-reveal animate-second text-center"><span style="font-size:15px">Supplier or Buyer</span></h3>
	<p>&nbsp</p>
	<img class="img-responsive" height="165" style="box-shadow: 0 8px 6px -6px #060;" src="images/zfc.jpg">
 <p style="margin-top:10px"><a class="btn btn-success btn-lg" href="#dealer" role="button">Login now</a></p>
 <p style="font-size: 12px">Not yet a member <a href="dealer_registration.php">REGISTER NOW</a></p>
 <p>&nbsp</p>

</div></div>
</div>

<div class="container-fluid">
<div class="row" style="background-color: #FFF;">
<div class="col-sm-12">
<h2 class="text-center"><strong>System Core Features</strong><h2>
<p>&nbsp</p>

<div class="col-sm-3"><strong><span style="font-size:18px;text-transform: uppercase;">Farm management</span></strong></div><div class="col-sm-3"><strong><span style="font-size:18px;text-transform: uppercase;">Disease detection</span></strong></div>	
<div class="col-sm-3"><strong><span style="font-size:18px;text-transform: uppercase;">instant farm Help </span></strong></div><div class="col-sm-3"><strong><span style="font-size:18px;text-transform: uppercase;">Discussion forums</span></strong></div>
<p style="font-size:17px;color: #666" class="text-center"><strong>Complete support for all crops: fruit, vegetables, grains and other.</strong></p>	
<p>&nbsp</p>
  <center><a href="#admin">Admin Login Now</a></center></div>
</div>
</div>
</div>


<div class="container-fluid">
<div class="row">
<div class="col-sm-12"><?php require_once'footer.php';?></div>
</div>
</div>

</html>