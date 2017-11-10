<?php 
include_once'inc/connector.php';
include_once'inc/session_handler.php';
session_check();
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="fav.png">
<title>Farmers Forum|Zimfarmers</title>
</head>
<body style="background-color:#CCC;">
<div class="container-fluid">
<div class="row">
<div class="col-sm-12 bg-info"><nav class="navbar" role="navigation" style="border-radius:0px;border-style: none;">
			<div class="container">
		
				<div class="navbar">
             <ul class="nav navbar-nav navbar-right">
					
                       <li><a id="link" style="color: #000" href="inc/logout.php"><strong>LOGOUT NOW</strong></a></li>
							
					</ul>

				</div><!-- /.navbar-collapse -->

			</div>
		</nav></div></div>
<div class="row" style="background-color: #333;border-top:2px solid #060">
<div class="col-sm-4" style="background-color:#fff;border:2px solid #060">
<a href="farmer.php"><button>BACK</button></a><br>
<strong>You are logged as<br> <span style="color:#060"><u><?php echo strtoupper($_SESSION['username']);?></u></span><br><a style="color: #F00" href="inc/logout.php"><strong>LOGOUT NOW</strong></a>
<div>
<h4>Farmers Discussion Forum</h4>
<form class="form-horizontal"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<label for="reply"><p class="text-info">Enter your message below</p></label><br>
<textarea name="message" id="reply" class="form-control"  rows="10" >
</textarea>';
<button type="submit" name="farmers_forum"  style="margin-top:3px;margin-bottom:3px" class="btn btn-success">Post Now</button>
</form>
</div>



<a style="color:#003" href="contact_us.php">Contact Admin Now</a>
</div>


<div class="col-sm-4" style="background-color: #CCC;">
<h3 class="text-center">RECENT POSTS</h3> 
<?php
 //farmers forum
if(isset($_POST['farmers_forum']))  
   {
  $username=($_SESSION['username']);
 $message= trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));    
  if (empty($message)) {
   echo '<script> alert("Sorry you can not send an empty message");window.location=("farmers_forum.php")</script>'; 
 }else{
 $pdoQuery = "INSERT INTO `farmers_forum`(`username`,`message`) VALUES (?,?)"; 
 $pdoResult = $pdo->prepare($pdoQuery);
  $array=array($username,$message);
 $pdoExec = $pdoResult->execute($array);
  if ($pdoExec)
  { 
  echo '<script>alert("Message posted successfully");window.location=("farmers_forum.php")</script>';  
} else
   { echo '<script>alert("Sorry our network is down");</script>'; 
   }
    
}
}

  // 
$num=0;
    $result = $pdo->prepare("SELECT * FROM farmers_forum ORDER BY id DESC");
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

<div class="col-sm-4">
	<h3 style="color:#FFF">Forum Members</h3>
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
</div>
<?php
    }
  ?> 
  <hr>
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
 <p style="font-weight:bold;color:#000;text-align: center;"></span>  <?php echo strtolower($row['message']); ?></p>
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

<link rel="shortcut icon" href="fav.png">
<link href="styles/ind.css" type="text/css"rel="stylesheet" />
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
<link href="css/bootstrap.css" type="text/css"rel="stylesheet" />
<link href="css/bootstrap.min.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.min.css" type="text/css"rel="stylesheet" />
 <script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<style type="text/css">
	*{

		margin:0px;
	}
		body{
			background-color:#CCC;

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

</body>
</html>