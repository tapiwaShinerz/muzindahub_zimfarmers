<?php include_once'inc/connector.php';  ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="fav.png" type="image/x-icon"/>
<title>Zimfarmers Assistant System|Welcome</title>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to 
top">Top</button>


<!-- farmer login modal start here -->
<div id="farmer" class="modalDialog">
	<div class="col-sm-12">
		<a href="#close" title="Close" class="close">X</a>
<form name="bulk_action_form" action="inc/login_processor.php" method="post" onsubmit="return changeConfirm();" enctype="multipart/form-data"/ style="background-color: #CCC;padding: 5px;margin-top:3px;border-radius: 3px" autocomplete="off">
<img class="img-responsive" style="box-shadow: 0 12px 6px -6px #060;" src="images/slide2.jpg">
	<h5 class="text-center text-success"><strong>Farmer Login Now</strong></h5>
<label style="color: #000" for="inputsurname"> Username</label>
<input type="text" name="username" class="form-control" id="inputsurname" placeholder="Enter username please"
 autocomplete="off">

<label style="color: #000" for="inputsurname"> Password</label>
<input type="password" name="password" class="form-control" id="inputsurname" placeholder="Enter password please" autocomplete="off">
	
  
  <button type="submit" name="farmer_login"  class="btn btn-success"><span style="color:#FFF">Login</span></button>
  <a href="password_reset.php">Forgot password please Click Here</a>         
</form>
	</div>
</div>
<!-- farmer login modal end here -->

<!-- helping officers login modal start here -->
<div id="officer" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
<form name="bulk_action_form" action="inc/login_processor.php" method="post" onsubmit="return changeConfirm();" enctype="multipart/form-data"/ style="background-color: #CCC;padding: 5px;margin-top:3px;border-radius: 3px" autocomplete="off">
<img class="img-responsive" style="box-shadow: 0 12px 6px -6px #060;" src="images/helper.jpg">
	<h5 class="text-center text-success"><strong>Agri.Officer Login Now</strong></h5>
<label style="color: #000" for="inputsurname"> Username</label>
<input type="text" name="username" class="form-control" id="inputsurname" placeholder="Enter username please" required>

<label style="color: #000" for="inputsurname"> Password</label>
<input type="password" name="password" class="form-control" id="inputsurname" placeholder="Enter password please" required>
	
  
  <button type="submit" name="helper_login"  class="btn btn-success"><span style="color:#FFF">Login</span></button> <a href="password_reset1.php">Forgot password please Click Here</a>           
</form>
	</div>
</div>
<!-- modal end here -->

<!-- buyers or suppliers login modal start here -->
<div id="dealer" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
<form name="bulk_action_form" action="inc/login_processor.php" method="post" onsubmit="return changeConfirm();" enctype="multipart/form-data"/ style="background-color: #CCC;padding: 5px;margin-top:3px;border-radius: 3px" autocomplete="off">
	<img class="img-responsive" height="165" style="box-shadow: 0 12px 6px -6px #060;" src="images/zfc.jpg">
	<h5 class="text-center text-success"><strong>Supplier or Buyer</strong></h5>
<label style="color: #000" for="inputsurname"> Username</label>
<input type="text" name="username" class="form-control" id="inputsurname" placeholder="Enter username please" required>

<label style="color: #000" for="inputsurname"> Password</label>
<input type="password" name="password" class="form-control" id="inputsurname" placeholder="Enter password please" required>
	
  
  <button type="submit" name="dealer_login"  class="btn btn-success"><span style="color:#FFF">Login</span></button><a href="password_reset2.php">Forgot password please Click Here</a>           
</form>
	</div>
</div>
<!-- buyer or supplier login modal end here -->

<!-- farmer advert modal start here -->
<div id="advertise" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
<form name="bulk_action_form" action="farmer.php" method="post" onsubmit="return changeConfirm();" enctype="multipart/form-data"/ style="background-color: #CCC;padding: 5px;margin-top:3px;border-radius: 3px" autocomplete="off">
	<h3 class="text-center text-success"><strong><u>Advertise now</u></strong></h3>
	<div class="form-group">
<label style="color: #000" for="subject"> Subject</label>
            <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject of your advert">
        </div>
  <div class="form-group">
    <input type="hidden" name="size" value="1000000" >
<span style="color: #060" class="glyphicon glyphicon-picture"></span><strong>You can upload a picture of your advert</strong><input type="file" id="image" name="image" class="form-control"/>
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
	 
  
  <button type="submit" name="farmer_advertise"  class="btn btn-success"><span style="color:#FFF">Advertise</span></button>  <hr>          
</form>
	</div>
</div>
<!--  modal end here -->

<!-- farmer ask question modal start here -->
<div id="ask" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
<form  action="farmer.php" method="post" style="background-color: #CCC;padding: 5px;margin-top:3px;border-radius: 3px" autocomplete="off">
	<h3 class="text-center text-success"><strong>ASK QUESTION NOW</strong></h3>
<label style="color: #000" for="inputsurname"> Question Title</label>
            <input type="text" name="title" class="form-control" id="inputsurname" placeholder="Title of your message or question">

	 <div class="form-group">
<label style="color: #000" for="inputinfo">Describe your question further</label> 

           <textarea name="message" class="form-control" placeholder="Say something today" id="inputinfo" rows="3">

		   </textarea>
		   	
        </div>
  
  <button type="submit" name="ask_question"  class="btn btn-success"><span style="color:#FFF">Ask Now</span></button>  <hr>          
</form>
	</div>
</div>
<!--  end here -->



<!-- farmer ask question modal start here -->
<div id="notifications" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">X</a>
<h5 class="text-center"><strong><u>Agricultural Helpers Update  of the day</u></strong></h5>
  <?php 
$num=0;
    $result = $pdo->prepare("SELECT * FROM tips ORDER BY id DESC");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
      $num++;
      if ($num==2){
      break;  
      }
  ?>

<div class="alert alert-success alert-dismissible" role="alert">
<p  style="color:#f00"><span style="color:#f00"
 class="glyphicon glyphicon-user"></span> <?php echo strtoupper($row['username']); ?></p>
<hr>
<p style="font-weight:bold;color:#000"><?php echo strtolower($row['message']); ?>| <span style="color:#000"
 class="glyphicon glyphicon-thumbs-up"></span><br>
<span style="color:#060">Posted on: <em><?php echo date("F j,Y - g:i a",strtotime($row['time'])); ?></em></span>
  </p> 
 </div>
 <?php
    }
  ?> 
  </div>
</div>
<!--  end here -->
<div id="admin" class="modalDialog">
  <div class="col-sm-12">
    <a href="#close" title="Close" class="close">X</a>
<form name="bulk_action_form" action="inc/login_processor.php" method="post" style="background-color: #CCC;border-radius: 3px" autocomplete="off">
<center><img class="img-responsive" style="box-shadow: 0 12px 6px -6px #060;" width="55" height="55" src="images/avatar.png"></center>
  <h5 class="text-center text-success"><strong>System Adminstrator</strong></h5>
<label style="color: #000" for="inputsurname"> Username</label>
<input type="text" name="username" class="form-control" id="inputsurname" placeholder="Enter username please" required>

<label style="color: #000" for="inputsurname"> Password</label>
<input type="password" name="password" class="form-control" id="inputsurname" placeholder="Enter password please" required>
  
  
  <button type="submit" name="admin_login"  class="btn btn-success"><span style="color:#FFF">Login</span></button> <hr>          
</form>
  </div>
</div>





<style type="text/css">
.sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:230px;
    width:210px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
     border-radius: 8px;
    background-color:#060;
    color:#fff;
    height:43px;
    padding:0px;
    margin:0px 0px 1px 0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
}
.sticky li:hover{
    margin-left:-100px;
}
.sticky li img{
    float:left;
    margin:5px 4px;
    margin-right:5px;
}
.sticky li p{
    padding-top:5px;
    margin:0px;
    line-height:16px;
    font-size:11px;
}
.sticky li p a{
    text-decoration:none;
    color:#fff;
}
.sticky li p a:hover{
    text-decoration:underline;
}



.form-control{
  border:1px solid #000
}
#link:hover{
			background-color: transparent;
		}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index:9;
  border: none;
  outline: none;
  background-color:#060;
  color: #FFF;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #000;
}
.jumbotron:hover{
box-shadow: 0 12px 6px -6px #ccc;
margin-top:2px;
}
#parax{
background-image: url(images/3.jpg); 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
padding-top: 15px;
}
#para{
background-image: url(images/1.jpg);
   background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
color:#fff;
height:700px;"


}	


.animate-reveal {
text-align:center;
  font: bold 1.5em sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
  opacity: 0;
  -webkit-animation: reveal 1s cubic-bezier(0, 1, 0.5, 1) 1 normal forwards;
     -moz-animation: reveal 1s ease-in 1 normal forwards;
       -o-animation: reveal 1s cubic-bezier(0, 1, 0.5, 1) 1 normal forwards;
          animation: reveal 1s cubic-bezier(0, 1, 0.5, 1) 1 normal forwards;
}
.animate-first {
text-align:center;
margin-top:80px;
padding-bottom:30px;
  -webkit-animation-delay: 1s;
     -moz-animation-delay: 1s;
       -o-animation-delay: 500ms;
          animation-delay: 500ms;
}
.animate-second {
float:left;
padding-left:3px;
padding-bottom:10px;
  -webkit-animation-delay: 500ms;
     -moz-animation-delay: 500ms;
       -o-animation-delay: 500ms;
          animation-delay: 500ms;
}
.animate-third {
text-align:right;
margin-bottom:10px;
  -webkit-animation-delay: 200ms;
     -moz-animation-delay: 200ms;
       -o-animation-delay: 200ms;
          animation-delay: 200ms;

}
@-webkit-keyframes reveal {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100%);
       -moz-transform: translateY(100%);
         -o-transform: translateY(100%);
            transform: translateY(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
       -moz-transform: translateY(0);
         -o-transform: translateY(0);
            transform: translateY(0);
  }
}

@-moz-keyframes reveal {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100%);
       -moz-transform: translateY(100%);
         -o-transform: translateY(100%);
            transform: translateY(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
       -moz-transform: translateY(0);
         -o-transform: translateY(0);
            transform: translateY(0);
  }
}

@-o-keyframes reveal {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100%);
       -moz-transform: translateY(100%);
         -o-transform: translateY(100%);
            transform: translateY(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
       -moz-transform: translateY(0);
         -o-transform: translateY(0);
            transform: translateY(0);
  }
}

@keyframes reveal {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100%);
       -moz-transform: translateY(100%);
         -o-transform: translateY(100%);
            transform: translateY(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
       -moz-transform: translateY(0);
         -o-transform: translateY(0);
            transform: translateY(0);
  }
}
</style>
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

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || 
document.documentElement.scrollTop > 50) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<link href="css/bootstrap.css" type="text/css"rel="stylesheet" />
<link href="css/bootstrap.min.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.min.css" type="text/css"rel="stylesheet" />
 <script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
</body>
</body>
</html>
