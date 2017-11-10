<?php 
ob_start();
include_once'main.php';
include_once'inc/connector.php';
include_once'inc/session_handler.php';
session_check();
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="fav.png" type="image/x-icon"/>
<title>Zimfarmer|Welcome</title>

</head>
<body>
<div class="container-fluid">
<div class="row"><div class="col-sm-12" style="background-image:url(images/1.jpg);background-size: cover;">
<?php include_once'head.php'; ?>

<nav class="navbar" role="navigation" style="border-radius:0px;background-color: transparent;border-style: none;">
			
		</nav>
</div></div></div>

<div class="container-fluid" style="margin-left:10px;margin-bottom: 5px;border-bottom: 2px solid #060">
<div class="row">
<div class="col-sm-4" style="margin-left: 0px">
	<div class="row" style="padding-left:2px">
  <span style="background-color:#000;color: #FFF"><strong>FARMER PROFILE</strong></span><br>
    <a href="#" class="thumbnail pull-left">
      <img src="images/nopicture.jpg" alt="my profile" height="55" width="55" style="border-radius:70%">
    </a>
 <strong>You are logged as<br> <span style="color:#060"><u><?php echo strtoupper($_SESSION['username']);?></u></span></strong><br>
 <?php if ($_SESSION['username']) {
    $username=($_SESSION['username']);
    $num=0;
    $result = $pdo->prepare("SELECT * FROM farmers WHERE username='$username'");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
      $num++;
      if ($num==2){
      break;  
      }?>
 <strong>Farmer from<br> <span style="color:#060"><u> <?php echo strtoupper($row['location']);?></u></span></strong>
 <?php
  }}
  ?> 
</div>
	<hr>
<?php include_once'bar1.php';?>
<hr>

<div class="row">
    <h4><strong>ACTIONS</strong></h4>
 
    <a href="#advertise">Advertise your products</a><br><hr>
      <a href="#ask"><button type="submit" name="room"  class="btn btn-primary">
      	<span class="glyphicon glyphicon-comment" style="color:#FFF">
      Ask Questions</span></button></a><br><hr>
        <a href="farmers_forum.php">Join Discussion Forum</a><br><hr>
    <a id="link" style="color:#000" href=""><span  style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> <strong>Messages</strong> </a><br><hr>
           <a id="link" style="color:#000"  href="#notifications"><span style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> <strong>Notifications</strong> </a></br><hr>
           <a id="link" style="color:#000"  href="district.php" target="_blank"><span style="font-size: 18px;color:#060" class="glyphicon glyphicon-map-marker"></span> <strong>Zim Districts</strong> </a><br><hr>
           <a id="link" style="color:#000"  href="records.php"><span style="font-size: 18px;color:#000" class="glyphicon glyphicon-home"></span> <strong>Farm Records</strong> </a></br><hr>
                      <a id="link" style="color: #000" href="inc/logout.php"><strong>LOGOUT NOW</strong></a>
            
      
    </div>
          
</div>
<div class="col-sm-8" style="border:2px solid #CCC;background-image:url(images/gmb.jpg);background-size: cover;background-attachment: fixed;background-position: center;">

<h4 class="text-center">Messages From Buyers/Suppliers</h4>
<?php 
$num=0;
    $result = $pdo->prepare("SELECT * FROM buyers_adverts ORDER BY id DESC");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
      $num++;
      if ($num==4){
      break;  
      }
  ?>

<div class="alert alert-success" role="alert">
<p  style="color:#f00"><span style="color:#f00"
 class="glyphicon glyphicon-user"></span> <?php echo strtoupper($row['username']); ?></p>

<p><span style="color:#f00"
 class="glyphicon glyphicon-time"></span><span style="color:#060">Posted on: <em><?php echo date("F j,Y - g:i a",strtotime($row['time'])); ?></em></span></p>
<hr>
<p><?php echo "<img  alt='choose picture now' height='100px' width='30%' src='statuses/".$row['image']."' >" ?></p>
<p style="font-weight:bold;color:#000"><?php echo str_replace($find, $replace, strtolower($row['message'])); ?> <span style="color:#000"
 class="glyphicon glyphicon-thumbs-up"></span> </p> 
 <p><span class="glyphicon glyphicon-time"></span>Posted on:<?php echo strtoupper($row['time']); ?></p>
 <p><span class="glyphicon glyphicon-map-marker"></span>From: <?php echo strtoupper($row['location']); ?></p>
 <p><span class="glyphicon glyphicon-phone"></span>Contact: <?php echo strtoupper($row['phone']); ?></p>
 </div>
 <?php
    }
  ?> 

</div>
</div>


</div>
</div>
<div class="container-fluid"
<div class="row">
<?php require_once'footer.php';
//farmer posts
if(isset($_POST['status_farmer'])){
$target="statuses/".basename($_FILES["image"]["name"]);
$username=($_SESSION['username']);
$message= trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));
$image=$_FILES["image"]["name"];

if(empty($message)) {
echo '<script> alert("Please enter a message to post");</script>';
 } else{
$pdoQuery = "INSERT INTO `farmers_status`(`username`,`message`,`image`)VALUES (?,?,?)"; 
$pdoResult = $pdo->prepare($pdoQuery);
$array=array($username,$message,$image);
$pdoExec = $pdoResult->execute($array);
   
   if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
        echo '<script>alert("Your message and image posted successfully");window.location=("farmer.php")</script>';
   }

   else if ($pdoExec)
    { 
     echo '<script>alert("Your message posted successfully");window.location=("farmer.php")</script>';  
    
   } else
     { echo '<p>Sorry there is a technical error</p>'; 
     }
      } 
  }

//

  //question posts

if(isset($_POST['ask_question']))  
   {
 $username=($_SESSION['username']);
 $title= trim(filter_input(INPUT_POST,"title",FILTER_SANITIZE_SPECIAL_CHARS)); 
 $message= trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS)); 

if (empty($title)) {
   echo '<script> alert("Please provide your title and question");window.location=("farmer.php#ask")</script>';
 }
 else if (empty($message)) {
   echo '<script> alert("Please provide your question");</script>;window.location=("farmer.php#ask")</script>';
 }
 else{
 $pdoQuery = "INSERT INTO `questions`(`username`,`title`,`message`) VALUES (?,?,?)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
  $array=array($username,$title,$message);
   $pdoExec = $pdoResult->execute($array);
if ($pdoExec)
  { 
  echo '<script>alert("Dear Farmer:Your question posted successfully");window.location=("farmer.php")</script>'; 
  } else
   { echo '<script>alert("Sorry our network is down");window.location=("farmer.php")</script>';
    
}
}
}
//code end
//farmer adverts
if(isset($_POST['farmer_advertise'])){
$target="statuses/".basename($_FILES["image"]["name"]);
$username=($_SESSION['username']);
$subject= trim(filter_input(INPUT_POST,"subject",FILTER_SANITIZE_SPECIAL_CHARS));
$image=$_FILES["image"]["name"];
$message= trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));
$phone= trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_SPECIAL_CHARS));
$location= trim(filter_input(INPUT_POST,"location",FILTER_SANITIZE_SPECIAL_CHARS));
if (empty($subject)) {
   echo '<script> alert("Please provide your advert subject");window.location=("farmer.php#advertise")</script>';
 }
 else if (empty($message)) {
   echo '<script> alert("Please provide your advert message");</script>;window.location=("farmer.php#advertise")</script>';
 }

 else{
$pdoQuery = "INSERT INTO `farmers_adverts`(`username`,`subject`,`image`,`message`,`phone`,`location`)VALUES (?,?,?,?,?,?)"; 
$pdoResult = $pdo->prepare($pdoQuery);
$array=array($username,$subject,$image,$message,$phone,$location);
$pdoExec = $pdoResult->execute($array);
   
   if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
        echo '<script>alert("Your advert posted successfully");window.location=("farmer.php")</script>';
   }

   else if ($pdoExec)
    { 
     echo '<script>alert("Your advert posted successfully");window.location=("farmer.php")</script>';  
    
   } else
     { echo '<script>alert("Sorry our network is down");window.location=("farmer.php")</script>'; 
     }
      } 
  }

//




?>
</div>
</div>

 
 <script>document.body.className += ' fade-out';

    $(function() {
        $('body').removeClass('fade-out');
    });
</script>

<style type="text/css">
    html {
        background-image:url(images/1.jpg);
        background-size: cover;
    }
    body {
        opacity: 1;
        transition: 1s opacity;
    }
    body.fade-out {
        opacity: 0;
        transition: none;
    } 

</style>
</body>
</html>
<?php ob_end_flush();?>