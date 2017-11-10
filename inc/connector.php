<?php
 try 
 { 
 $pdo= new PDO("mysql:host=localhost;dbname=zimfarmers","root",""); 
 } catch 
(PDOException $exc) 
{ echo $exc->getMessage(); exit(); }
?>
