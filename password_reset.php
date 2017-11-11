<!DOCTYPE html>
<html>
<head><link rel="shortcut icon" href="fav.png" type="image/x-icon"/>
<title></title>
</head>
<body>
<?php
include_once'inc/connector.php';
$pass="";
if(isset($_POST['pass_retrive']))
{
 $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS));
 $surname= trim(filter_input(INPUT_POST,"surname",FILTER_SANITIZE_SPECIAL_CHARS));
 $question= trim(filter_input(INPUT_POST,"question",FILTER_SANITIZE_SPECIAL_CHARS));
  if (empty($name)) {
   echo "<script> alert ('Something is wrong try again later');window.location=('index.php')</script>";
 } 
  else if (empty($surname)) {
    echo "<script> alert ('Something is wrong try again later');window.location=('index.php')</script>";
 }
  else if (empty($question)) {
    echo "<script> alert ('Something is wrong try again later');window.location=('index.php')</script>";
 }
 else 
{
 $select = $pdo->prepare("SELECT * FROM farmers WHERE name='$name' AND question='$question'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
 if($data['name']!=$name AND $data['question']!=$question)
 {
 	echo "<script> alert ('Sorry no password found for this user'); window.location=('index.php')</script>";
	
 }
 elseif($data['name']==$name AND $data['question']==$question)
 {
 echo "<script> alert ('Password found');</script>";
 $pass=$data['password'];
 
 }
 }
}
?>

<div class="container">
<div class="row">
<div class="col-sm-12 " style="box-shadow: 0px 16px 16px 0px rgba(0,0,0,0.5);"><?php include_once'head.php';?></div>
</div>

<div class="row bg-info" style="height: 500px">
<div class="col-sm-12">
<center> <form action=""  method="post" style="width: 50%" autocomplete="off">
	<h3 class="text-center">Farmer password recovery</h3>
	<p style="font-weight:bold;color:#F00">Your password is <span style="color:#000"
 class="glyphicon glyphicon-lock"></span> <u><?php echo strrev($pass); ?></u> </p>
        <div class="form-group">
            <label>First Name</label>
            <input name="name" class="form-control validate" type="text" pattern="^[A-Za-z]+" title="Please enter your name" required>
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input name="surname" class="form-control" type="text" pattern="^[A-Za-z]+" required>
        </div>
   
        <div class="form-group">
        	<label>What was your favourite crop name when you registered</label>
            <input name="question" class="form-control validate" type="text" required>
        </div>
        <button type="submit" name="pass_retrive"  style="margin-top:3px;margin-bottom:3px" class="btn btn-lg btn-success">Retrieve</button>
</form></center>


</div>
</div>




<div class="row">
<div class="col-sm-12"><?php require_once'footer.php';?></div>
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

    © 2017 GitHub, Inc.
    Terms
    Privacy
    Security
    St
