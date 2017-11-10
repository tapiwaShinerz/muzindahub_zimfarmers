<?php 
include_once'inc/connector.php';
include_once'inc/session_handler.php';
session_check();
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="fav.png" type="image/x-icon"/>
<title>ZimFarmer Officer|Welcome</title>
<?php include_once'main.php';?>
</head>
<body>
<div class="container-fluid">
<div class="row"><div class="col-sm-12" style="background-image:url(images/1.jpg);background-size: cover;">
<?php include_once'head.php'; ?>

<nav class="navbar" role="navigation" style="border-radius:0px;background-color: transparent;border-style: none;">
			<div class="container">
		
				
</div>
		</nav>
</div></div></div>

<div class="container-fluid" style="margin-left:10px;margin-bottom: 5px;border-bottom: 2px solid #060">
<div class="row">
<div class="col-sm-3" style="margin-left: 0px">
	<div class="row" style="padding-left:2px">
 <span style="background-color:#000;color: #FFF"><strong>SUPPLIER/BUYER PROFILE</strong></span><br>
    <a href="#" class="thumbnail pull-left">
      <img src="images/nopicture.jpg" alt="my profile" height="55" width="55" style="border-radius:70%">
    </a>
 <strong>You are logged as<br> <span style="color:#060"><u><?php echo strtoupper($_SESSION['username']);?></u></span></strong><br>
 <?php if ($_SESSION['username']) {
    $username=($_SESSION['username']);
    $num=0;
    $result = $pdo->prepare("SELECT * FROM buyer WHERE username='$username'");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
      $num++;
      if ($num==2){
      break;  
      }?>
 <strong>From<br> <span style="color:#060"><u> <?php echo strtoupper($row['location']);?></u></span></strong>
 <?php
  }}
  ?> 
</div>
	<hr>
<?php include_once'bar1.php';?>
<hr>

<div class="row">
    <h4><strong>ACTIONS</strong></h4>
 
 <a id="link" style="color: #000" href="inc/logout.php"><strong>LOGOUT NOW</strong></a>
 <hr><h4  style="background-color: #CCC;padding:3px;color: #000"><strong>Active Farmers</strong></h4>
<?php 
$num=0;
    $result = $pdo->prepare("SELECT * FROM farmers ORDER BY id DESC");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
      $num++;
      if ($num==6){
      break;  
      }
  ?>
 <div class="alert alert-success" role="alert">
<p><span class="glyphicon glyphicon-user"></span> <?php echo strtoupper($row['name']); ?></p>
<p><span class="glyphicon glyphicon-map-marker"></span>From: <?php echo strtoupper($row['location']); ?></p>
<p><span class="glyphicon glyphicon-phone"></span> <?php echo strtoupper($row['phone']); ?></p>
<p><span style="color:#000"><?php echo strtoupper($row['hectares']); ?> Hectares Farming land</span></p>
</div>
<?php
    }
  ?>
    </div>
          
</div>
<div class="col-sm-5" style="border:2px solid #CCC;background-image:url(images/gmb.jpg);background-size: cover;background-attachment: fixed;background-position: center;">

<form name="bulk_action_form" action="" method="post" enctype="multipart/form-data"/ style="background-color: #CCC;padding: 5px;margin-top:3px;border-radius: 3px" autocomplete="off">
	<h3 class="text-center text-success"><strong>Post Goods In Stock for Supply</strong></h3>
	<div class="form-group">
<label style="color: #000" for="subject"> Subject</label>
            <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject of your advert">
        </div>
        <div class="form-group">
    <input type="hidden" name="size" value="1000000" >
<span style="color: #060" class="glyphicon glyphicon-picture"></span><strong>You can upload a picture of your packages</strong><input type="file" id="image" name="image" class="form-control"/>
<label style="color: #000" for="inputinfo">What are you offering today?</label> 

           <textarea name="message" class="form-control" placeholder="Say something today" id="inputinfo" rows="3">

       </textarea>
        
        </div>
<div class="form-group">
<label style="color: #000" for="phone"> Phone Contact</label>
             <input type="tel" name="phone" minlength="10" maxlength="10" class="form-control" id="inputphone" placeholder="+263 716 605 802"  pattern="[0]{1}[7]{1}[1-9]{1}[1-9]{1}[0-9]{3}[0-9]{3}">
        </div>
<div class="form-group">
<label style="color: #000" for="inputsurname"> Location of Product</label>
            <input type="text" name="location" class="form-control" id="inputsurname" placeholder="Location of the product advertised">
        </div>
  
  <button type="submit" name="dealer_publish"  class="btn btn-success"><span style="color:#FFF">Publish</span></button>  <hr>          
</form>
<div class="row">
<hr>
<div class="col-sm-12" style="background-color: #CCC;">
<h4 class="text-center">Recent Posts</h4>
<?php 
$num=0;
    $result = $pdo->prepare("SELECT * FROM buyers_adverts ORDER BY id DESC");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
      $num++;
      if ($num==3){
      break;  
      }
  ?>

<div class="alert alert-info" role="alert">
<p  style="color:#f00"><span style="color:#f00"
 class="glyphicon glyphicon-user"></span> <?php echo strtoupper($row['username']); ?></p>

<p><span style="color:#f00"
 class="glyphicon glyphicon-time"></span><span style="color:#060">Posted on: <em><?php echo date("F j,Y - g:i a",strtotime($row['time'])); ?></em></span></p>
<hr>
<p><?php echo "<img  alt='choose picture now' height='100px' width='30%' src='statuses/".$row['image']."' >" ?></p>
<p style="font-weight:bold;color:#000"><?php echo strtolower($row['message']); ?> <span style="color:#000"
 class="glyphicon glyphicon-thumbs-up"></span> </p> 
 <p style="font-weight:bold;color:#000"><span style="color:#000"
 class="glyphicon glyphicon-phone"></span> <?php echo strtolower($row['phone']); ?> </p> 
 <p style="font-weight:bold;color:#000"><span style="color:#000"
 class="glyphicon glyphicon-map-marker"></span>  <?php echo strtolower($row['location']); ?></p> 
 </div>
 <?php
    }
  ?> 
</div>
</div>

</div>


<div class="col-sm-4">
 <h4 class="text-success" id="advertbyfarmers" style="background-color: #CCC;padding:3px"><strong>Recent Adverts by Farmers</strong></h4>
<?php 
$num=0;
    $result = $pdo->prepare("SELECT * FROM farmers_adverts ORDER BY id DESC");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
      $num++;
      if ($num==3){
      break;  
      }
  ?>

<div class="alert alert-success" role="alert">
<p  style="color:#f00"><span style="color:#f00"
 class="glyphicon glyphicon-user"></span> <?php echo strtoupper($row['username']); ?></p>

<p><span style="color:#f00"
 class="glyphicon glyphicon-time"></span><span style="color:#060">Posted on: <?php echo date("F j,Y - g:i a",strtotime($row['time'])); ?></span></p>
<hr>
<p><?php echo "<img  alt='no picture uploaded for this advert' height='100px' width='30%' src='statuses/".$row['image']."' >" ?></p>
 <p style="font-weight:bold;color:#000;text-align: center;"><?php echo strtolower($row['message']); ?></p>
<p style="font-weight:bold;color:#000"><span style="color:#000"
 class="glyphicon glyphicon-phone"></span> <?php echo strtolower($row['phone']); ?> </p> 
 <p style="font-weight:bold;color:#000"><span style="color:#000"
 class="glyphicon glyphicon-map-marker"></span>  <?php echo strtolower($row['location']); ?></p> 
 </div>
 <?php
    }
  ?>
<hr>	
<h5 style="background-color: #CCC;padding:3px;color: #000"><strong>OTHER AGRICULTURAL BUYERS/SUPPLIERs</strong></h5>
<?php 
$num=0;
    $result = $pdo->prepare("SELECT * FROM buyer ORDER BY id DESC");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
      $num++;
      if ($num==6){
      break;  
      }
  ?>
 <div class="alert alert-info" role="alert">
<p><span class="glyphicon glyphicon-user"></span> <?php echo strtoupper($row['name']); ?></p>
<p><span class="glyphicon glyphicon-map-marker"></span>From: <?php echo strtoupper($row['location']); ?></p>
<p><span class="glyphicon glyphicon-phone"></span> <?php echo strtoupper($row['phone']); ?></p>
</div>
<?php
    }
  ?>
<hr style="border:1px dotted #060">
<?php
//farmer adverts
if(isset($_POST['dealer_publish'])){
$target="statuses/".basename($_FILES["image"]["name"]);
$username=($_SESSION['username']);
$subject= trim(filter_input(INPUT_POST,"subject",FILTER_SANITIZE_SPECIAL_CHARS));
$image=$_FILES["image"]["name"];
$message= trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));
$phone= trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_SPECIAL_CHARS));
$location= trim(filter_input(INPUT_POST,"location",FILTER_SANITIZE_SPECIAL_CHARS));
if (empty($subject)) {
   echo '<script> alert("Please provide your advert subject");window.location=("dealer.php")</script>';
 }
 else if (empty($message)) {
   echo '<script> alert("Please provide your advert message");</script>;window.location=("dealer.php")</script>';
 }

 else{
$pdoQuery = "INSERT INTO `buyers_adverts`(`username`,`subject`,`image`,`message`,`phone`,`location`)VALUES (?,?,?,?,?,?)"; 
$pdoResult = $pdo->prepare($pdoQuery);
$array=array($username,$subject,$image,$message,$phone,$location);
$pdoExec = $pdoResult->execute($array);
   
   if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
        echo '<script>alert("Your advert posted successfully");window.location=("dealer.php")</script>';
   }

   else if ($pdoExec)
    { 
     echo '<script>alert("Your advert posted successfully");window.location=("dealer.php")</script>';  
    
   } else
     { echo '<script>alert("Sorry our network is down");window.location=("dealer.php")</script>'; 
     }
      } 
  }

//
?>



</div>
</div>
</div>
<div class="container-fluid"
<div class="row">
<?php require_once'footer.php';?>
</div>
</div>

 
</body>
</html>