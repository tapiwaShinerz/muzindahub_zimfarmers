<?php
include"connector.php";
 $time=time();
 $current_date = date("F j,Y,g:i a",$time); 
// feedback registration code
$nameErr=$emailErr= $locationErr=$crop_typeErr= $messageErr=$companyErr=$phoneErr=$topicErr
=$hectaresErr=$success="";
if(isset($_POST['feedback']))  
   {
    $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $email= trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $location= trim(filter_input(INPUT_POST,"location",FILTER_SANITIZE_SPECIAL_CHARS));
    $crop_type= trim(filter_input(INPUT_POST,"crop_type",FILTER_SANITIZE_STRING));
    $message= trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));
    $company= trim(filter_input(INPUT_POST,"company",FILTER_SANITIZE_SPECIAL_CHARS));
    $phone= trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_SPECIAL_CHARS));
    $topic= trim(filter_input(INPUT_POST,"topic",FILTER_SANITIZE_SPECIAL_CHARS));
    $hectares= trim(filter_input(INPUT_POST,"hectares",FILTER_SANITIZE_SPECIAL_CHARS));
 
 if (empty($name)) {
   $nameErr="<strong>SORRY!!! you must enter your full name</strong>";
 } 
  else if (empty($email)) {
   $emailErr="<strong>SORRY!!! you must enter an email</strong>";
 }
  else if (empty($location)) {
    $locationErr="<strong>SORRY!!! you must select a location</strong>";
 }
  else if (empty($crop_type)) {
    $crop_typeErr="<strong>SORRY!!! you must enter crops you grow</strong>";
 }
  else if (empty($message)) {
    $messageErr="<strong>SORRY!!! you must enter a message</strong>";
 }
  else if (empty($company)) {
    $companyErr="<strong>SORRY!!! you must provide your company name</strong>";
 }
 else if (empty($phone)) {
    $phoneErr="<strong>SORRY!!! you must enter a phone number</strong>";
 }
  else if (empty($topic)) {
    $topicErr="<strong>SORRY!!! you must provide your company name</strong>";
 }
  else if (empty($hectares)) {
   $hectaresErr="<strong>SORRY!!! you must enter your farm hactares or acres</strong>";
 } 
else{
 $pdoQuery = "INSERT INTO `feedback`(`name`,`email`,`location`,`crop_type`,`message`,`company`
 ,`phone`,`topic`,`hectares`)
  VALUES (:name,:email,:location,:crop_type,:message,:company,:phone,:topic,:hectares)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
   $pdoExec = $pdoResult->execute
   (array(
   	":name"=>$name,
   	":email"=>$email,
   ":location"=>$location,
   ":crop_type"=>$crop_type,
   ":message"=>$message,
   ":company"=>$company,
   ":phone"=>$phone,
   ":topic"=>$topic,
   ":hectares"=>$hectares
  ))
   ;
    if ($pdoExec)
  { 
  $success='<p class="text-success" style="text-align:center"><strong>Thank you for your feedback..</p>';  
} else
   { echo '<script>alert("Sorry our network is down");</script>';  
   }
    
}
}
//code end here

//subscription1 code
if(isset($_POST['subscription1']))  
   {
 $email= trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL)); 

if (empty($email)) {
   echo '<script> alert("Please provide your email for farming tips");</script>';
 }
 else{
 $pdoQuery = "INSERT INTO `subscription`(`email`) VALUES (?)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
  $array=array($email);
   $pdoExec = $pdoResult->execute($array);
if ($pdoExec)
  { 
  echo '<script>alert("Thank you for your subscription you will start \n to receive farming tips in email phone very soon");</script>';  
  } else
   { echo '<script>alert("Sorry our network is down");</script>'; 
   }
    
}
}
//code end

//subscription2 code
if(isset($_POST['subscription2']))  
   {
 $phone= trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_SPECIAL_CHARS));   	
  if (empty($phone)) {
   echo '<script> alert("Please provide your phone number for farming tips");</script>';
 }else{
 $pdoQuery = "INSERT INTO `subscription`(`phone`) VALUES (?)"; 
 $pdoResult = $pdo->prepare($pdoQuery);
  $array=array($phone);
 $pdoExec = $pdoResult->execute($array);
  if ($pdoExec)
  { 
  echo '<script>alert("Thank you for your subscription you will start \n to receive farming tips in your phone very soon");</script>';  
} else
   { echo '<script>alert("Sorry our network is down");</script>'; 
   }
    
}
}







  //farmers forum
if(isset($_POST['farmers_forum']))  
   {
  $username=($_SESSION['username']);
 $message= trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));    
  if (empty($message)) {
   echo '<script> alert("Sorry you can not send an empty message");window.location=("../farmers_forum.php")</script>'; 
 }else{
 $pdoQuery = "INSERT INTO `farmers_forum`(`username`,`message`) VALUES (?,?)"; 
 $pdoResult = $pdo->prepare($pdoQuery);
  $array=array($username,$message);
 $pdoExec = $pdoResult->execute($array);
  if ($pdoExec)
  { 
  echo '<script>alert("Message posted successfully");window.location=("../farmers_forum.php")</script>';  
} else
   { echo '<script>alert("Sorry our network is down");</script>'; 
   }
    
}
}

  //

?>