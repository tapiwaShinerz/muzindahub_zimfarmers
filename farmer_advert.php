<!DOCTYPE html>
<html>
<head>

</head>
<body style="background:url(images/1.jpg);background-size: cover;">
<div class="container-fluid">
<div class="row">
<div class="col-sm-12"><nav class="navbar" role="navigation" style="border-radius:0px;background-color: transparent;border-style: none;">
			<div class="container">
		<a href="farmer.php">BACK</a>
				<div class="navbar">
             <ul class="nav navbar-nav navbar-right">
						<li><a style="color:#000" href=""><span  style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> <strong>Messages</strong> </a></li>
						<li><a style="color:#000"  href=""><span style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> <strong>Notifications</strong> </a></li>
						<li><a style="color:#000"  href=""><span style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> <strong>Orders</strong> </a></li>
						<li> <a style="color:#000"  href=""><span style="font-size: 18px;color:#000" class="glyphicon glyphicon-home"></span> <strong>Farm Records</strong> </a></li>
                       <li><a style="color: #FFF" href=""><strong>LOGOUT NOW</strong></a></li>
						
				
						
					</ul>

				</div><!-- /.navbar-collapse -->

			</div>
		</nav></div>
<div class="col-sm-4" style="border-radius:3px;background-color:#fff;border:2px solid #060">

<?php

echo'<div id="openModal" class="modalDialog">';
	echo'<div>';
		echo'<h3>Message Center</h3>';
	echo'<form class="form-horizontal" action="" method="post">';
	?>
	<?php
echo'<label for="reply"><p class="text-info">Enter your message below</p></label><br>';
echo'<textarea name="message" id="reply" class="form-control"  rows="10" >';
echo'</textarea>';
echo'<button type="submit" name="chat"  style="margin-top:3px;margin-bottom:3px" onclick="post();" class="btn btn-success">Post Now</button>';
	echo'</form>';

	echo'</div>';
echo'</div>';

?>
<a style="color:#003" href="about.php">Contact Admin Now</a>
</div>


<div class="col-sm-4">
<h3>RECENT POSTS</h3> 
</div>

<div class="col-sm-4">
<h3>Forum Members</h3>
</div>

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
	<title>chat.php</title>

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
	
	</style>

</body>
</html>