<?php 
session_start();
include_once'connector.php';
include_once'actions.php';
if(!isset($_SESSION['username'])){
echo "<script> alert ('Login first to access this page'); window.location=('../index.php')</script>";
}
 ?>
<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="../fav.png" type="image/x-icon"/>
<head>
	<title>Admin Panel</title>
</head>
<body style="background-color: #000">
    <button onclick="topFunction()" id="myBtn" title="Go to 
top">Top</button>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12" style="background-color:#060;border-bottom: 5px solid #FF0">
    <h3 class="text-center" style="color:#FFF">Zimfarmers Assistant System Admin Panel</h3>
<nav class="navbar navbar-default" role="navigation" style="border-radius: 0;">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h4 class="navbar-brand"> <strong>You are logged as<br> <span style="color:#060"><u>
                        <?php if(isset($_SESSION['username'])){ echo strtoupper($_SESSION['username']); }?></u></span></strong></h4><br><hr>
                    
                
<ol class="breadcrumb">
  <li><a style="color: #000" href="logout.php"><strong> LOGOUT NOW </strong></a></li>
  <li><a style="color: #06C" href="../farmer.php"><strong> Farmers Page</strong></a></li>
  <li><a style="color: #06C" href="../helper.php"><strong> Agric.Helpers Page </strong></a></li>
  <li><a style="color: #06C" href="../dealer.php"><strong> Supplier/Buyers Page </strong></a></li>
</ol>


				</div>
		
			
			</div>
		</nav>
</div>
</div>

<div class="row bg-info">
<div class="col-sm-12">
<div class="col-sm-4">
    <h4 class="text-center">Farmers</h4>
  <form name="bulk_action_form" action="" method="post" onsubmit="return deleteConfirm();"/>
    <table class="table" style="border:1px solid #000">
        <thead>
        <tr style="background-color: #FFF">
            <th>Select </th>        
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        </thead>
        <?php
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
            <td><?php echo strtolower($row['name']); ?></td>
            <td><?php echo strtolower($row['surname']); ?></td>
            
            
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No Farmers found.</td></tr> 
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Remove Farmer"/>
</form>  

</div>
<div class="col-sm-4">
    <h4 class="text-center">Agric.Helpers</h4>
    <form name="bulk_action_form" action="" method="post" onsubmit="return deleteConfirm();"/>
    <table class="table" style="border:1px solid #000">
        <thead>
        <tr style="background-color: #FFF">
            <th>Select </th>        
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        </thead>
        <?php
        $query = mysqli_query($conn,"SELECT * FROM helpers");
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
            <td><?php echo strtolower($row['name']); ?></td>
            <td><?php echo strtolower($row['surname']); ?></td>
            
            
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No Agric.Helpers found.</td></tr> 
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-danger" name="bulk_delete_submit2" value="Remove Agric.Helper"/>
</form>  

    

</div>
<div class="col-sm-4">
    <h4 class="text-center">Buyers/Suppliers</h4>
 <form name="bulk_action_form" action="" method="post" onsubmit="return deleteConfirm();"/>
    <table class="table" style="border:1px solid #000">
        <thead>
        <tr style="background-color: #FFF">
            <th>Select </th>        
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        </thead>
        <?php
        $query = mysqli_query($conn,"SELECT * FROM buyer");
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
            <td><?php echo strtolower( $row['name']); ?></td>
            <td><?php echo strtolower($row['surname']); ?></td>
            
            
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No Buyer/Suppliers found.</td></tr> 
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-danger" name="bulk_delete_submit3" value="Remove Buyers/Suppliers"/>
</form>  
   
<hr>
</div>
<div class="row">
    <div class="col-sm-12 bg-success">
       <h4 class="text-center"> Posted Feedback</h4>
       <form name="bulk_action_form" action="" method="post" onsubmit="return deleteConfirm();"/>
    <table class="table" style="border:1px solid #000">
        <thead>
        <tr style="background-color: #FFF">
            <th>Select </th>        
            <th>First Name</th>
            <th>Company Name</th>
            <th>Phone Contact</th>
            <th>Email Contact</th>
            <th>Location</th>
            <th>Message Posted</th>
        </tr>
        </thead>
        <?php
        $query = mysqli_query($conn,"SELECT * FROM feedback");
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
            <td><?php echo strtolower($row['name']); ?></td>
            <td><?php echo strtolower($row['company']); ?></td>
            <td><?php echo strtolower($row['phone']); ?></td>
            <td><?php echo strtolower($row['email']); ?></td>
            <td><?php echo strtolower($row['location']); ?></td>
            <td><?php echo strtolower($row['message']); ?></td>
            
            
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No feedbacks posted yet.</td></tr> 
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-danger" name="bulk_delete_submit4" value="Remove Feedback"/>
</form>  
    </div>
</div>
<div class="row">
    <div class="col-sm-12 bg-success">
       <h4 class="text-center"> Posted Questions By Farmers</h4>
       <form name="bulk_action_form" action="" method="post" onsubmit="return deleteConfirm();"/>
    <table class="table" style="border:1px solid #000">
        <thead>
        <tr style="background-color: #FFF">
            <th>Select </th>        
            <th>Username</th>
            <th>Question Title</th>
            <th>Message</th>
            <th>Time</th>
           
        </tr>
        </thead>
        <?php
        $query = mysqli_query($conn,"SELECT * FROM questions");
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
            <td><?php echo strtolower($row['username']); ?></td>
            <td><?php echo strtolower($row['title']); ?></td>
            <td><?php echo strtolower($row['message']); ?></td>
            <td><?php echo date("F j,Y - g:i a",strtotime($row['time'])); ?></td>
            
            
            
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No questions posted yet.</td></tr> 
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-danger" name="bulk_delete_submit5" value="Remove Question"/>
</form>  
    </div>
</div>
<div class="row">
    <div class="col-sm-12 bg-success">
       <h4 class="text-center"> Manage Farmers Forum</h4>
       <form name="bulk_action_form" action="" method="post" onsubmit="return deleteConfirm();"/>
    <table class="table" style="border:1px solid #000">
        <thead>
        <tr style="background-color: #FFF">
            <th>Select </th>        
            <th>Username</th>
            <th>Message</th>
            <th>Time</th>
           
        </tr>
        </thead>
        <?php
        $query = mysqli_query($conn,"SELECT * FROM farmers_forum");
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
            <td><?php echo strtolower($row['username']); ?></td>
            <td><?php echo strtolower($row['message']); ?></td>
            <td><?php echo date("F j,Y - g:i a",strtotime($row['time'])); ?></td>
            
            
            
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No message posted yet.</td></tr> 
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-danger" name="bulk_delete_submit6" value="Remove Posts"/>
</form>  
    </div>
</div>

<div class="row">
    <div class="col-sm-12 bg-success">
       <h4 class="text-center"> Manage Agric.Helpers Forum</h4>
       <form name="bulk_action_form" action="" method="post" onsubmit="return deleteConfirm();"/>
    <table class="table" style="border:1px solid #000">
        <thead>
        <tr style="background-color: #FFF">
            <th>Select </th>        
            <th>Username</th>
            <th>Message</th>
            <th>Time</th>
           
        </tr>
        </thead>
        <?php
        $query = mysqli_query($conn,"SELECT * FROM helpers_forum");
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
            <td><?php echo strtolower($row['username']); ?></td>
            <td><?php echo strtolower($row['message']); ?></td>
            <td><?php echo date("F j,Y - g:i a",strtotime($row['time'])); ?></td>
            
            
            
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No message posted yet.</td></tr> 
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-danger" name="bulk_delete_submit7" value="Remove Posts"/>
</form>  
    </div>
</div>
<hr>

	

</div>
</div>


 <link rel="stylesheet" href="../css/normalize.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<link href="../css/bootstrap.css" type="text/css"rel="stylesheet" />
<link href="../css/bootstrap.min.css" type="text/css"rel="stylesheet" />
 <link href="../css/bootstrap-theme.css" type="text/css"rel="stylesheet" />
 <link href="../css/bootstrap-theme.min.css" type="text/css"rel="stylesheet" />
 <script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
 <script type="text/javascript" src="../js/jquery.js"></script>
 <script type="text/javascript">
function deleteConfirm(){
    var result = confirm("Are you sure about this?");
    if(result){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>
</body>
</html>