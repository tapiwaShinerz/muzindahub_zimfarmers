<?php
     $dbHost = 'localhost';  //database host name
    $dbUser = 'root';       //database username
    $dbPass = '';           //database password
    $dbName = 'zimfarmers'; //database name
    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    if(!$conn){
        die("Database connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
            mysqli_query($conn,"DELETE FROM farmers WHERE id=".$id);
        }
        echo "<script>alert('Farmer removed successfully');</script>";
    }
     if(isset($_POST['bulk_delete_submit2'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
            mysqli_query($conn,"DELETE FROM helpers WHERE id=".$id);
        }
        echo "<script>alert('Agric.Helper removed successfully');</script>";
    }
   if(isset($_POST['bulk_delete_submit3'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
            mysqli_query($conn,"DELETE FROM buyer WHERE id=".$id);
        }
        echo "<script>alert('Supplier/Buyer removed successfully');</script>";
    }
    if(isset($_POST['bulk_delete_submit4'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
            mysqli_query($conn,"DELETE FROM feedback WHERE id=".$id);
        }
        echo "<script>alert('Feedback removed successfully');</script>";
    }
    if(isset($_POST['bulk_delete_submit5'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
            mysqli_query($conn,"DELETE FROM questions WHERE id=".$id);
        }
        echo "<script>alert('Question removed successfully');</script>";
    }
    if(isset($_POST['bulk_delete_submit6'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
            mysqli_query($conn,"DELETE FROM farmers_forum WHERE id=".$id);
        }
        echo "<script>alert('post removed successfully');</script>";
    }
     if(isset($_POST['bulk_delete_submit7'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
            mysqli_query($conn,"DELETE FROM helpers_forum WHERE id=".$id);
        }
        echo "<script>alert('post removed successfully');</script>";
    }
$query = mysqli_query($conn,"SELECT * FROM farmers");

?>
<style type="text/css">
    
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