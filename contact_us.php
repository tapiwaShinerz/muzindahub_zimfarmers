<?php include_once'inc/posts_handler.php';?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="fav.png" type="image/x-icon"/>
<title>Contact Page</title>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12 " style="box-shadow: 0px 16px 16px 0px rgba(0,0,0,0.5);"><?php include_once'head.php';?></div>
</div>
<div class="row">
<div class="col-sm-12">
<h2 class="text-center" style="text-transform: uppercase;">we love to hear from you again<br>
<span style="font-size: 20px">contact us today</span>
</h2>
<div class="col-sm-6 text-center">
<div class="thumbnail" style="border-style: none;">
      <img src="images/avatar.png" alt="chief system officer" width="75" height="75" style="border-radius: 60%">
      <span><strong>Noby</strong> :<span class="glyphicon glyphicon-phone"></span> 0716-605-802</span>
      <div class="caption">
        <h3>System Developer</h3>
       </div>
       </div>

</div>




<div class="col-sm-6 text-center">
	<div class="thumbnail" style="border-style: none;">
      <img src="images/avatar.png" alt="chief system officer" width="75" height="75" style="border-radius: 60%">
       <span><strong>Tapiwa</strong> :<span class="glyphicon glyphicon-phone"></span> 0776-222-978</span>
      <div class="caption">
        <h3>System Developer</h3>
       </div>
       </div>
</div>

</div>
</div>
<hr style="border:1px dotted #060;width: 50%">

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8" style="background-color: #ccc;box-shadow: 0px 16px 16px 0px rgba(0,0,0,0.2);">
	<h4 class="text-center text-success"><strong>Get in touch.Let's start talking!</strong></h4>
	<div class="text-success text-center"><strong><?php echo "$success";?></strong> </div>
<form action="" enctype="multipart/form-data" method="post">    <div class="row">
        <div class="col-md-6 form-group">
        	<div class="text-danger"> <?php echo "$nameErr";?></div>
            <label>Full Name</label>
            <input name="name" class="form-control validate" type="text" pattern="^[A-Za-z]+">
        </div>
        <div class="col-md-6 form-group">
        	<div class="text-danger"> <?php echo "$companyErr";?></div>
            <label>Company Name</label>
            <input name="company" class="form-control" type="text">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 form-group">
        	<div class="text-danger"> <?php echo "$emailErr";?></div>
            <label>Email</label>
            <input name="email" class="form-control validate" type="email">
        </div>
        <div class="col-md-6 form-group">
        	<div class="text-danger"> <?php echo "$phoneErr";?></div>
            <label>Phone</label>
            <input name="phone" class="form-control validate" type="text" pattern="[0]{1}[7]{1}[1-9]{1}[1-9]{1}[0-9]{3}[0-9]{3}">
        </div>
    </div>   
    <div class="row">
        <div class="col-md-6 form-group">
        	<div class="text-danger"> <?php echo "$locationErr";?></div>
            <label>Province</label>
            <select name="location" class="form-control" id="inputlocation">
              <option></option>
           <option class="form-control" name="location">Harare</option>
           <option class="form-control" name="location">Bulawayo</option>
           <option class="form-control" name="location">Midlands</option>
            <option class="form-control" name="location">Mashonaland West</option>
           <option class="form-control" name="location">Mashonaland East</option>
           <option class="form-control" name="location">Mashonaland Central</option>
            <option class="form-control" name="location">Manicaland</option>
           <option class="form-control" name="location">Matebeleland North</option>
            <option class="form-control" name="location">Matebeleland South</option>
            <option class="form-control" name="location">Masvingo</option>
       
            </select>
        </div>
        <div class="col-md-6 form-group">
        	<div class="text-danger"> <?php echo "$topicErr";?></div>
            <label>Topic</label>
            <select class="form-control validate" id="form_Topic" name="topic"><option value="Farm Management Software" selected="selected" name="topic">Farm Management</option>
<option value="Enterprise Farm Management" name="topic">Enterprise Farm Management</option>
<option value="Farmer Network Management - Cooperatives" name="topic">Cooperative Management</option>
<option value="Other" name="topic">Other</option>
</select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 form-group">
        		<div class="text-danger"> <?php echo "$crop_typeErr";?></div>
            <label>Crops you grow</label>
            <input name="crop_type" class="form-control" type="text" pattern="^[A-Za-z]+">
        </div>
        <div class="col-md-6 form-group">
        		<div class="text-danger"> <?php echo "$hectaresErr";?></div>
            <label>Total number of hectares under management</label>
            <input name="hectares" class="form-control" type="text">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
        		<div class="text-danger"> <?php echo "$messageErr";?></div>
            <label>Message</label>
            <textarea name="message" class="form-control validate" rows="5"></textarea>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-12">
           <button type="submit" name="feedback"  style="margin-top:3px;margin-bottom:3px" class="btn btn-lg btn-success">Submit Now</button>
       </form>
        </div>
    </div>
</div>

<div class="col-sm-2"></div>
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