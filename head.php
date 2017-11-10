<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zimfarmers Assistant System</title>
  </head>
  <body>
  
    <nav class="navbar" role="navigation">
      <div id="tp">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <h3 style="color: #060;text-shadow:2px 2px 3px #000"><img src="images/sun.jpg" width="55" height="55" style="border-radius: 60%"> Z.A.S</h3>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li style="font-size: 16px;"><a id="name" href="index.php?action=Welcome to ZAS"><strong>HOME</span></strong></a></li>
                 <li style="font-size: 16px"><a id="name" href="contact_us.php?action=Contact Us Today"><strong>ABOUT US</strong></a></li> 
          </ul>
         
        </div>
      </div>
    </nav>



<style type="text/css">

.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}


.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.modalDialog > div {
	width: 500px;
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
}


  
@keyframes name{
15% {color:#FFF;}
40% {color:#060;}
65% {color:#FFF;}
80% {color:#060;} 
}
#name{
  animation-name:name;
    animation-duration: 15s;
   animation-iteration-count: infinite;
}

#name:hover{
	background-color: transparent;
	border-bottom:1px solid #FFF;
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
<link rel="stylesheet" href="css/normalize.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<link href="css/bootstrap.css" type="text/css"rel="stylesheet" />
<link href="css/bootstrap.min.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.min.css" type="text/css"rel="stylesheet" />
 <script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
  </body>
  </html>







  