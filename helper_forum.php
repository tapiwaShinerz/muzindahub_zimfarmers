<?php 
include_once'inc/connector.php';
include_once'inc/session_handler.php';
session_check();
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="fav.png" type="image/x-icon"/>
<title>Forum</title>
</head>
<body style="background:url(images/1.jpg);background-size: cover;">
<div class="container-fluid">
<div class="row">
<div class="col-sm-12"><nav class="navbar" role="navigation" style="border-radius:0px;background-color: transparent;border-style: none;">
	 <h3 style="color: #060;text-shadow:2px 2px 3px #000"><img src="images/sun.jpg" width="55" height="55" style="border-radius: 60%"> Z.A.S</h3>		
		</nav></div></div>
<div class="row" style="background-color: #FFF;border-top:2px solid #060">
<div class="col-sm-4" style="background-color:#fff;border:2px solid #060">
<a href="helper.php"><button>BACK</button></a><br>
<strong>You are logged as<br> <span style="color:#060"><u><?php echo strtoupper($_SESSION['username']);?></u></span><br><a style="color: #F00" href="inc/logout.php"><strong>LOGOUT NOW</strong></a>
							
	<hr>
<?php
	echo'<div>';
		echo'<h4>Agricultural Officers Discussion Forum</h4>';
	echo'<form class="form-horizontal" action="" method="post">';
	
echo'<label for="reply"><p class="text-info">Enter your message below</p></label><br>';
echo'<textarea name="message" id="reply" class="form-control"  rows="10" >';
echo'</textarea>';
echo'<button type="submit" name="helper_forum"  style="margin-top:3px;margin-bottom:3px"  class="btn btn-success">Post Now</button>';
	echo'</form>';

	echo'</div>';
	
 ?>
<a style="color:#003" href="contact_us.php">Contact Admin Now</a>
</div>


<div class="col-sm-5" style="background-color: #CCC">
<h3 class="text-center">RECENT POSTS</h3>
<?php
$num=0;
    $result = $pdo->prepare("SELECT * FROM helpers_forum ORDER BY id DESC");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
      $num++;
      if ($num==6){
      break;  
      }
  ?>
<div class="alert alert-success" role="alert">
<p  style="color:#f00"><span style="color:#f00"
 class="glyphicon glyphicon-user"></span> <?php echo strtoupper($row['username']); ?></p>

<p><span style="color:#f00"
 class="glyphicon glyphicon-time"></span> <?php echo date("F j,Y - g:i a",strtotime($row['time'])); ?></p>
<hr>
<p style="font-weight:bold;color:#000"><?php echo strtolower($row['message']); ?> <span style="color:#000"
 class="glyphicon glyphicon-thumbs-up"></span> </p> 
 </div>
 <?php
    }
  ?> 
</div>

<div class="col-sm-3">
<h3>Forum Members</h3>
<?php 
$num=0;
    $result = $pdo->prepare("SELECT * FROM helpers ORDER BY id DESC");
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
</div>
<?php
    }
  ?>
</div>

</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12"><?php require_once'footer.php';?></div>
</div>
</div>


<link rel="shortcut icon" href="fav.png" type="image/x-icon"/>
<link href="styles/ind.css" type="text/css"rel="stylesheet" />
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
<link href="css/bootstrap.css" type="text/css"rel="stylesheet" />
<link href="css/bootstrap.min.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.min.css" type="text/css"rel="stylesheet" />
 <script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title>Officers Forum|Zimfarmers</title>

	<style type="text/css">
	*{

		margin:0px;
	}
		body{
			background-image: url("images/1.jpg");
			background-size: cover;
		}
		.cont{
			width: 60%;
			height: 200px;
			margin:auto;
			background-color: blue;
			border-radius: 3px;
			border:1px solid #fff;
		}
		#link:hover{
			background-color: transparent;
		}
	
	</style>
<?php
$time=time();
 $current_date = date("F j,Y,g:i a",$time);

//helpers forum
if(isset($_POST['helper_forum']))  
   {
 $username=($_SESSION['username']);
 $message= trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));    
  if (empty($message)) {
   echo '<script> alert("Sorry you can not send an empty message");window.location=("helper_forum.php")</script>'; 
 }else{
 $pdoQuery = "INSERT INTO `helpers_forum`(`username`,`message`) VALUES (?,?)"; 
 $pdoResult = $pdo->prepare($pdoQuery);
  $array=array($username,$message);
 $pdoExec = $pdoResult->execute($array);
  if ($pdoExec)
  { 
  echo '<script>alert("Message posted successfully");window.location=("helper_forum.php")</script>';  
} else
   { echo '<script>alert("Poor network please try again");</script>'; 
   }
    
}
}

  //


?>
</body>
</html>