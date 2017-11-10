<?php 
session_start();
function session_check(){
if(!isset($_SESSION['username'])){
echo "<script> alert ('Login first to access this page'); window.location=('index.php')</script>";
}

}
// checking bad words in all inputs and output
$find=array
('fuck'
  );
$replace=array
(' *******'
  );
 ?>
