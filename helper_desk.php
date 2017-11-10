<?php 
include_once'inc/connector.php';
include_once'inc/session_handler.php';
session_check();
 $time=time();
 $current_date = date("F j,Y,g:i a",$time);
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
 <span style="background-color:#000;color: #FFF"><strong>AGRICULTURAL HELPER PROFILE</strong></span><br>
    <a href="#" class="thumbnail pull-left">
      <img src="images/nopicture.jpg" alt="my profile" height="55" width="55" style="border-radius:70%">
    </a>
 <strong>You are logged as<br> <span style="color:#060"><u><?php echo strtoupper($_SESSION['username']);?></u></span></strong><br>
 <?php if ($_SESSION['username']) {
    $username=($_SESSION['username']);
    $num=0;
    $result = $pdo->prepare("SELECT * FROM helpers WHERE username='$username'");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
      $num++;
      if ($num==2){
      break;  
      }?>
 <strong>Agric Assistant from<br> <span style="color:#060"><u> <?php echo strtoupper($row['location']);?></u></span></strong>
 <?php
  }}
  ?> 
</div>
	<hr>
<?php include_once'bar1.php';?>
<hr>

<div class="row">
    <h4><strong>ACTIONS</strong></h4>
 <a id="link" style="color:#000" href="helper_forum.php" target="_blank"><span  style="font-size: 18px;color:#060" class="glyphicon glyphicon-comment"></span> <strong>Join Discussion Forum</strong> </a><hr>
   <a id="link" style="color:#000" href="#advertbyfarmers"><span  style="font-size: 18px;color:#060" class="glyphicon glyphicon-usd"></span> <strong>Farmers sales</strong> </a><hr>
	<a id="link" style="color:#000"  href="#questionsbyfarmers"><span style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> <strong>Messages</strong> </a><hr>
                      <a id="link" style="color: #000" href="inc/logout.php"><strong>LOGOUT NOW</strong></a>
 
    </div>
          
</div>
<div class="col-sm-5" style="border:2px solid #CCC;background-image:url(images/gmb.jpg);background-size: cover;background-attachment: fixed;background-position: center;">
<div class="row">
<div class="col-sm-12" style="background-color: #CCC;">
<h4 class="text-center" id="questionsbyfarmers">Recent Posted Questions by Farmers</h4>

<?php 
$num=0;
    $result = $pdo->prepare("SELECT * FROM questions ORDER BY id DESC");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
      $num++;
      if ($num==6){
      break;  
      }
  ?>

<div class="alert alert-success" role="alert">
<p  style="color:#f00"><span style="color:#f00"
 class="glyphicon glyphicon-user"></span><?php echo strtoupper($row['username']); ?></p>

<p><span style="color:#f00"
 class="glyphicon glyphicon-time"></span><?php echo date("F j,Y - g:i a",strtotime($row['time'])); ?></p>
<hr>
<p style="font-weight:bold;color:#000"><?php echo strtolower($row['message']); ?> ? </p> 
 </div>
 <?php
    }
  ?> 

</div>
</div>

</div>


<div class="col-sm-3">	
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
<div class="container-fluid"
<div class="row">
<?php require_once'footer.php';?>
</div>
</div>

<?php
//farmer adverts
if(isset($_POST['helpers_tip'])){
$target="statuses/".basename($_FILES["image"]["name"]);
$username=($_SESSION['username']);
$image=$_FILES["image"]["name"];
$message= trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));
 if (empty($message)) {
   echo '<script> alert("Please provide your farming tip");</script>;window.location=("helper.php")</script>';
 }

 else{
$pdoQuery = "INSERT INTO `tips`(`username`,`image`,`message`)VALUES (?,?,?)"; 
$pdoResult = $pdo->prepare($pdoQuery);
$array=array($username,$image,$message);
$pdoExec = $pdoResult->execute($array);
   
   if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
        echo '<script>alert("Your tip posted successfully");window.location=("helper.php")</script>';
   }

   else if ($pdoExec)
    { 
     echo '<script>alert("Your tip posted successfully");window.location=("helper.php")</script>';  
    
   } else
     { echo '<script>alert("Sorry our network is down");window.location=("helper.php")</script>'; 
     }
      } 
  }

//




?>

</body>
</html>