<?php
if(!isset($_SESSION['username'])){
session_start();
}
session_destroy();
header("location:../index.php?action=successfully loggedout");

?>