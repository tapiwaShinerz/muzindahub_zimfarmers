<?php 
session_start();
function session_check(){
if(!isset($_SESSION['username'])){
echo "<script> alert ('Login first to access this page'); window.location=('index.php')</script>";
}

}
$find=array
('fuck'
  );
$replace=array
(' *******'
  );
 ?>