<?php
require'connector.php';
// farmer registration code
$nameErr=$surnameErr=$usernameErr= $genderErr=$pass1Err= $passErr=$addressErr=$farming_typeErr=$farming_levelErr
=$hectaresErr= $locationErr=$phoneErr=$emailErr=$questionErr=$match=$success="";
if(isset($_POST['farmer_registration']))  
   {
    $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $surname= trim(filter_input(INPUT_POST,"surname",FILTER_SANITIZE_STRING));
    $username= trim(filter_input(INPUT_POST,"username",FILTER_SANITIZE_STRING));
    $gender= trim(filter_input(INPUT_POST,"gender",FILTER_SANITIZE_STRING));
    $password1= trim(filter_input(INPUT_POST,"password1",FILTER_SANITIZE_SPECIAL_CHARS));
    $password= trim(filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS));
    $pass=strrev($password);
    $address= trim(filter_input(INPUT_POST,"address",FILTER_SANITIZE_SPECIAL_CHARS));
    $farming_type= trim(filter_input(INPUT_POST,"farming_type",FILTER_SANITIZE_STRING));
    $farming_level= trim(filter_input(INPUT_POST,"farming_level",FILTER_SANITIZE_STRING));
    $hectares= trim(filter_input(INPUT_POST,"hectares",FILTER_SANITIZE_SPECIAL_CHARS));
    $location= trim(filter_input(INPUT_POST,"location",FILTER_SANITIZE_STRING));
    $phone= trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_STRING));
    $email= trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $question= trim(filter_input(INPUT_POST,"question",FILTER_SANITIZE_STRING));
 $select = $pdo->prepare("SELECT * FROM farmers WHERE name='$name' AND surname='$surname'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
if($data['name']===$name AND $data['surname']===$surname)
 {
  echo "<script> alert ('Sorry:This farmer is registered already'); window.location=('index.php')</script>"; 

 }
 
else if (empty($name)) {
   $nameErr="<strong>SORRY </strong>"."you must enter a name";
 } 
else if (empty($surname)) {
   $surnameErr="<strong>SORRY </strong>"."you must enter a surname";
 } 
else if (empty($username)) {
   $usernameErr="<strong>SORRY </strong>"."you must enter your username";
 }
 else if (empty($password1) && strlen($password1<=8)) {
    $pass1Err="<strong>SORRY </strong>"."you must enter a strong password";
 }
 else if (empty($password) && strlen($password<=8)) {
   $passErr="<strong>SORRY </strong>"."you must enter a strong password";
 }
  else if (empty($address)) {
   $addressErr="<strong>SORRY </strong>"."you must enter your address";
 }
  else if (empty($farming_type)) {
   $farming_typeErr="<strong>SORRY </strong>"."you must select your farming_type";
 }
  else if (empty($farming_level)) {
   $farming_levelErr="<strong>SORRY </strong>"."you must select your farming_level";
 }
  else if (empty($hectares)) {
   $hectaresErr="<strong>SORRY </strong>"."you must enter your farm hactares or acres";
 }
 else if (empty($location)) {
    $locationErr1="<strong>SORRY </strong>"."you must select a location";
 }
 else if (empty($phone)) {
    $phoneErr1="<strong>SORRY </strong>"."you must enter a phone number";
 }
 else if (empty($email)) {
   $emailErr1="<strong>SORRY </strong>"."you must enter an email";
 }
  else if (empty($question)) {
   $questionErr="<strong>SORRY </strong>"."you must provide an answer for password recovery";
 }
 else if ($password1!==$password) {
    $match="<strong>SORRY </strong>"."passwords do not match";
 }

else{
 $pdoQuery = "INSERT INTO `farmers`(`name`,`surname`,`username`,`gender`,`password`,`address`
 ,`farming_type`,`farming_level`,`hectares`,`location`,`phone`,`email`,`question`)
  VALUES (:name,:surname,:username,:gender,:pass,:address,:farming_type,:farming_level,:hectares,:location,:phone,:email,:question)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
   $pdoExec = $pdoResult->execute
   (array(
   	":name"=>$name,
   	":surname"=>$surname,
   ":username"=>$username,
   ":gender"=>$gender,
   ":pass"=>$pass,
   ":address"=>$address,
   ":farming_type"=>$farming_type,
   ":farming_level"=>$farming_level,
   ":hectares"=>$hectares,
   ":location"=>$location,
    ":phone"=>$phone,
    ":email"=>$email,
    ":question"=>$question
  ))
   ;
    if ($pdoExec)
  { 
  $success='<p class="text-success" style="text-align:center"><strong>You have been registered successfully 
  <a  href="#farmer">Login Now</a></strong></p>';  
} else
   { echo '<script>alert("Sorry our network is down");</script>'; 
   }
    
}
}
//code end here

// helper registration code
$nameErr1=$surnameErr1=$usernameErr1= $genderErr1=$pass1Err1= $passErr1=$addressErr1=$farming_typeErr1=$farming_levelErr1
=$experienceErr1= $locationErr1=$phoneErr1=$emailErr1=$questionErr1=$match1=$success1="";
if(isset($_POST['helper_registration']))  
   {
    $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $surname= trim(filter_input(INPUT_POST,"surname",FILTER_SANITIZE_STRING));
    $username= trim(filter_input(INPUT_POST,"username",FILTER_SANITIZE_STRING));
    $gender= trim(filter_input(INPUT_POST,"gender",FILTER_SANITIZE_STRING));
    $password1= trim(filter_input(INPUT_POST,"password1",FILTER_SANITIZE_SPECIAL_CHARS));
   $password= trim(filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS));
    $pass=strrev($password);
    $address= trim(filter_input(INPUT_POST,"address",FILTER_SANITIZE_SPECIAL_CHARS));
    $farming_type= trim(filter_input(INPUT_POST,"farming_type",FILTER_SANITIZE_STRING));
    $farming_level= trim(filter_input(INPUT_POST,"farming_level",FILTER_SANITIZE_STRING));
    $experience= trim(filter_input(INPUT_POST,"experience",FILTER_SANITIZE_SPECIAL_CHARS));
    $location= trim(filter_input(INPUT_POST,"location",FILTER_SANITIZE_STRING));
    $phone= trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_STRING));
    $email= trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $question= trim(filter_input(INPUT_POST,"question",FILTER_SANITIZE_STRING));
 $select = $pdo->prepare("SELECT name,surname FROM helpers WHERE name='$name' AND surname='$surname'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
if($data['name']===$name AND $data['surname']===$surname)
 {
  echo "<script> alert ('Sorry:This member is registered'); window.location=('index.php')</script>"; 

 }

else if (empty($name)) {
   $nameErr1="<strong>SORRY </strong>"."you must enter a name";
 } 
else if (empty($surname)) {
   $surnameErr1="<strong>SORRY </strong>"."you must enter a surname";
 } 
else if (empty($username)) {
   $usernameErr1="<strong>SORRY </strong>"."you must enter your username";
 }
 else if (empty($password1)) {
    $pass1Err="<strong>SORRY </strong>"."you must enter a password";
 }
 else if (empty($password)) {
   $passErr1="<strong>SORRY </strong>"."you must enter a password";
 }
  else if (empty($address)) {
   $addressErr1="<strong>SORRY </strong>"."you must enter a password";
 }
  else if (empty($farming_type)) {
   $farming_typeErr1="<strong>SORRY </strong>"."you must select your farming_type";
 }
  else if (empty($farming_level)) {
   $farming_levelErr1="<strong>SORRY </strong>"."you must select your farming_level";
 }
  else if (empty($experience)) {
   $experienceErr1="<strong>SORRY </strong>"."you must enter your farm hactares or acres";
 }
 else if (empty($location)) {
    $locationErr1="<strong>SORRY </strong>"."you must select a location";
 }
 else if (empty($phone)) {
    $phoneErr1="<strong>SORRY </strong>"."you must enter a phone number";
 }
 else if (empty($email)) {
   $emailErr1="<strong>SORRY </strong>"."you must enter an email";
 }
  else if (empty($question)) {
   $questionErr1="<strong>SORRY </strong>"."you must provide an answer for password recovery";
 }
 else if ($password1!==$password) {
    $match1="<strong>SORRY passwords do not match!!!</strong>";
 }
 
else{
 $pdoQuery = "INSERT INTO `helpers`(`name`,`surname`,`username`,`gender`,`password`,`address`
 ,`farming_type`,`farming_level`,`experience`,`location`,`phone`,`email`,`question`)
  VALUES (:name,:surname,:username,:gender,:pass,:address,:farming_type,:farming_level,:experience,:location,:phone,:email,:question)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
   $pdoExec = $pdoResult->execute
   (array(
   	":name"=>$name,
   	":surname"=>$surname,
   ":username"=>$username,
   ":gender"=>$gender,
   ":pass"=>$pass,
   ":address"=>$address,
   ":farming_type"=>$farming_type,
   ":farming_level"=>$farming_level,
   ":experience"=>$experience,
   ":location"=>$location,
    ":phone"=>$phone,
    ":email"=>$email,
    ":question"=>$question
  ))
   ;
    if ($pdoExec)
  { 
 echo '<script> alert("Registered Successfully");window.location=("helper.php#officer")</script>';  
} else
   { echo '<script>alert("Sorry our network is down");</script>'; 
   }
    
}
}
//code end here


// dealer registration code
$nameErr2=$surnameErr2=$usernameErr2= $genderErr2=$pass1Err2= $passErr2=$addressErr2=$bioErr=$farming_levelErr2=$experienceErr2= $locationErr2=$phoneErr2=$emailErr2=$questionErr2=$match2=$success2="";
if(isset($_POST['buyer_registration']))  
   {
    $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $surname= trim(filter_input(INPUT_POST,"surname",FILTER_SANITIZE_STRING));
    $username= trim(filter_input(INPUT_POST,"username",FILTER_SANITIZE_STRING));
    $gender= trim(filter_input(INPUT_POST,"gender",FILTER_SANITIZE_STRING));
    $password1= trim(filter_input(INPUT_POST,"password1",FILTER_SANITIZE_SPECIAL_CHARS));
   $password= trim(filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS));
    $pass=strrev($password);
    $address= trim(filter_input(INPUT_POST,"address",FILTER_SANITIZE_SPECIAL_CHARS));
    $bio= trim(filter_input(INPUT_POST,"bio",FILTER_SANITIZE_STRING));
    $farming_level= trim(filter_input(INPUT_POST,"farming_level",FILTER_SANITIZE_STRING));
    $experience= trim(filter_input(INPUT_POST,"experience",FILTER_SANITIZE_SPECIAL_CHARS));
    $location= trim(filter_input(INPUT_POST,"location",FILTER_SANITIZE_STRING));
    $phone= trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_STRING));
    $email= trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $question= trim(filter_input(INPUT_POST,"question",FILTER_SANITIZE_STRING));
    
 $select = $pdo->prepare("SELECT name,surname FROM buyer WHERE name='$name' AND surname='$surname'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
if($data['name']===$name AND $data['surname']===$surname)
 {
  echo "<script> alert ('Sorry:This member is registered '); window.location=('index.php')</script>"; 
 } 
else if (empty($name)) {
   $nameErr2="<strong>SORRY </strong>"."you must enter a name";
 } 
else if (empty($surname)) {
   $surnameErr2="<strong>SORRY </strong>"."you must enter a surname";
 } 
else if (empty($username)) {
   $usernameErr2="<strong>SORRY </strong>"."you must enter your username";
 }
 else if (empty($password1)) {
    $pass1Err2="<strong>SORRY </strong>"."you must enter a password";
 }
 else if (empty($password)) {
   $passErr2="<strong>SORRY </strong>"."you must enter a password";
 }
  else if (empty($address)) {
   $addressErr2="<strong>SORRY </strong>"."you must enter a password";
 }
  else if (empty($bio)) {
   $bioErr="<strong>SORRY </strong>"."you must give your bio history";
 }
  else if (empty($farming_level)) {
   $farming_levelErr2="<strong>SORRY </strong>"."you must select your farming_level";
 }
  else if (empty($experience)) {
   $experienceErr2="<strong>SORRY </strong>"."you must enter your farm hactares or acres";
 }
 else if (empty($location)) {
    $locationErr2="<strong>SORRY </strong>"."you must select a location";
 }
 else if (empty($phone)) {
    $phoneErr2="<strong>SORRY </strong>"."you must enter a phone number";
 }
 else if (empty($email)) {
   $emailErr2="<strong>SORRY </strong>"."you must enter an email";
 }
  else if (empty($question)) {
   $questionErr2="<strong>SORRY </strong>"."you must provide an answer for password recovery";
 }
 else if ($password1!==$password) {
    $match2="<strong>SORRY passwords do not match!!!</strong>";
 }
 
else{
 $pdoQuery = "INSERT INTO `buyer`(`name`,`surname`,`username`,`gender`,`password`,`address`
 ,`bio`,`farming_level`,`experience`,`location`,`phone`,`email`,`question`)
  VALUES (:name,:surname,:username,:gender,:pass,:address,:bio,:farming_level,:experience,:location,:phone,:email,:question)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
   $pdoExec = $pdoResult->execute
   (array(
   	":name"=>$name,
   	":surname"=>$surname,
   ":username"=>$username,
   ":gender"=>$gender,
   ":pass"=>$pass,
   ":address"=>$address,
   ":bio"=>$bio,
   ":farming_level"=>$farming_level,
   ":experience"=>$experience,
   ":location"=>$location,
    ":phone"=>$phone,
    ":email"=>$email,
    ":question"=>$question
  ))
   ;
    if ($pdoExec)
  { 
  $success2='<p class="text-success" style="text-align:center"><strong>You have been registered successfully 
  <a  href="#dealer">Login Now</a></strong></p>';  
} else
   { echo '<script>alert("Sorry our network is down");</script>'; 
   }
    
}
}
//code end here
?>