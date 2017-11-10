<?php
session_start();
include_once"connector.php";
//farm login code
if(isset($_POST['farmer_login']))
{
 $username= trim(filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS));
 $password= trim(filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS));
 $pass=strrev($password);


  if (empty($username)) {
   echo "<script> alert ('Please enter your Username');window.location=('../index.php')</script>";
 } 
  else if (empty($password)) {
   echo "<script> alert ('Please enter your Password');window.location=('../index.php')</script>";
 }
 else 
{
 $select = $pdo->prepare("SELECT * FROM farmers WHERE username='$username' AND password='$pass'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
 if($data['username']!=$username AND $data['password']!=$pass)
 {
 	echo "<script> alert ('Incorrect Username or Password'); window.location=('../index.php')</script>";
	
 }
 elseif($data['username']==$username AND $data['password']==$pass)
 {
 $_SESSION['username']=$data['username'];
 echo "<script> alert ('Farmer welcome to Z.A.S'); window.location=('../farmer.php')</script>";
 
 }
 }
}
//end of code 

if(isset($_POST['helper_login']))
{
 $username= trim(filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS));
 $password= trim(filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS));
 $pass=strrev($password);


  if (empty($username)) {
   echo "<script> alert ('Please enter your Username');window.location=('../index.php')</script>";
 } 
  else if (empty($password)) {
   echo "<script> alert ('Please enter your Password');window.location=('../index.php')</script>";
 }
 else 
{
 $select = $pdo->prepare("SELECT * FROM helpers WHERE username='$username' AND password='$pass'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
 if($data['username']!=$username AND $data['password']!=$pass)
 {
 	echo "<script> alert ('Incorrect Username or Password'); window.location=('../index.php')</script>";
	
 }
 elseif($data['username']==$username AND $data['password']==$pass)
 {
 $_SESSION['username']=$data['username'];
 echo "<script> alert ('Agriculture Helper Welcome'); window.location=('../helper.php')</script>";
 
 }
 }
}
//end of code 

if(isset($_POST['dealer_login']))
{
 $username= trim(filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS));
 $password= trim(filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS));
 $pass=strrev($password);


  if (empty($username)) {
   echo "<script> alert ('Please enter your Username');window.location=('../index.php')</script>";
 } 
  else if (empty($password)) {
   echo "<script> alert ('Please enter your Password');window.location=('../index.php')</script>";
 }
 else 
{
 $select = $pdo->prepare("SELECT * FROM buyer WHERE username='$username' AND password='$pass'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
 if($data['username']!=$username AND $data['password']!=$pass)
 {
 	echo "<script> alert ('Incorrect Username or Password'); window.location=('../index.php')</script>";
	
 }
 elseif($data['username']==$username AND $data['password']==$pass)
 {
 $_SESSION['username']=$data['username'];
 echo "<script> alert ('Agriculture Buyer/Supplier Welcome'); window.location=('../dealer.php')</script>";
 
 }
 }
}
//end of code 

if(isset($_POST['admin_login']))
{
 $username= trim(filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS));
 $password= trim(filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS));
 
if (empty($username)) {
   echo "<script> alert ('Please enter your Username');window.location=('../index.php')</script>";
 } 
  else if (empty($password)) {
   echo "<script> alert ('Please enter your Password');window.location=('../index.php')</script>";
 }
 else 
{
 $select = $pdo->prepare("SELECT * FROM admin WHERE username='$username' AND password='$password'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
 if($data['username']!=$username AND $data['password']!=$password)
 {
 	echo "<script> alert ('Incorrect Username or Password'); window.location=('../index.php')</script>";
	
 }
 elseif($data['username']==$username AND $data['password']==$password)
 {
 $_SESSION['username']=$data['username'];
 echo "<script> alert ('Admin You Are Welcome'); window.location=('admin.php')</script>";
 
 }
 }
}
//end of code 

?>