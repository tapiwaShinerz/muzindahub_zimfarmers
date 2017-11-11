<?php require_once'inc/reg_director.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Farmers Registration|Welcome</title>
</head>
<body>
	<div class="container-fluid">


	<div class="row" style="background-image: url(images/1.jpg);background-size: cover;">
	<div class="col-sm-12"><?php include_once'head.php';?></div>
	</div>
<div class="row" style="border-top: 3px solid #060;background-color: #ccc;">
  <h3 class="text-center" style="color:#000"> Z.A.S Farmer Account Registration</h3>
	<div class="col-sm-4 text-center"><a style="font-size:18px" href="index.php"><strong>RETURN</strong></a>

<img class="img-responsive" src="images/map.gif" title="map" alt="map" style="box-shadow: 0 8px 6px -6px #060;">
<h3 class="text-center"><a href="district.php">View All Zim Districts</a></h3>

  </div>




	<div class="col-sm-4" style="background-color: #ccc;box-shadow: 0px 16px 16px 0px rgba(0,0,0,0.2);">
<h3 class="text-center">Personal Details</h3>
<p class="text-center text-success"><strong><?php echo "$success";?></strong></p>
<p class="text-center text-danger"><strong><?php echo "$match";?></strong></p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="off">

  <div class="form-group">
      <div class="text-danger"> <?php echo "$nameErr";?></div>
        <span style="color: #060" class="glyphicon glyphicon-user"></span>    <label style="color: #060"  for="input">First Name</label></span>
            <input type="text" name="name" class="form-control" id="input" placeholder="name" 
            pattern="^[A-Za-z]+">
        </div>
        <div class="form-group">
            <div class="text-danger"> <?php echo "$surnameErr";?></div>
        <span style="color: #060" class="glyphicon glyphicon-user"></span>    <label style="color: #060"  for="input">Last Name</label></span>
            <input type="text" name="surname" class="form-control" id="input" placeholder="surname" 
            pattern="^[A-Za-z]+">
        </div>
	 <div class="form-group">
      <div class="text-danger"> <?php echo "$usernameErr";?></div>
        <span style="color: #060" class="glyphicon glyphicon-user"></span>    <label style="color: #060"  for="inputname">Username</label></span>
            <input type="text" name="username" class="form-control" id="inputname" placeholder="username">
        </div>
        <div class="form-group">
            <div class="text-danger"> <?php echo "$genderErr";?></div>
        <span style="color: #060" class="glyphicon glyphicon-user"></span></span>   <label style="color: #060" for="gender">Select Gender</label>
            <select name="gender" class="form-control" id="gender">
            	<option name="gender"></option>
           <option class="form-control" name="gender">Male</option>
           <option class="form-control" name="gender">Female</option>
          </select>
        </div>
		<div class="form-group">
        <div class="text-danger"> <?php echo "$pass1Err";?></div>
        <span style="color: #060" class="glyphicon glyphicon-lock"></span></span>    <label style="color: #060" for="inputsurname">Create Password</label>
            <input type="password" name="password1" class="form-control" id="inputsurname" placeholder="must be 8 characters long" minlength="8" title="Insert a strong password" >
        
        </div>
        <div class="form-group">
        	  <div class="text-danger"> <?php echo "$passErr";?></div>
        <span style="color: #060" class="glyphicon glyphicon-lock"></span></span>    <label style="color: #060" for="inputsurname">Confirm Password</label>
            <input type="password" name="password" class="form-control" id="inputsurname" placeholder="must be 8 characters long matching the above" minlength="8" title="Insert a strong password">
             
        </div>
      <div class="form-group">
            <div class="text-danger"> <?php echo "$addressErr";?></div>
        <span style="color: #060" class="glyphicon glyphicon-mao-marker"></span></span> <label style="color: #060" for="inputadd">Address</label>
            <textarea name="address" class="form-control" id="inputadd" rows="2">
             
             </textarea>
        </div> 
        <p>&nbsp</p>
        <p>&nbsp</p>
	</div>


<div class="col-sm-4" style="background-color: #ccc;box-shadow: 0px 16px 16px 0px rgba(0,0,0,0.2);">
<h3 class="text-center">Farm Details</h3>
<div class="form-group">
       <div class="text-danger"> <?php echo "$farming_typeErr";?></div>
       <label style="color: #060" for="farming_type">Type Of Farming</label>
            <select name="farming_type" class="form-control" id="farming_type">
              <option></option>
           <option class="form-control" name="farming_type">Mixed Farming</option>
           <option class="form-control" name="farming_type">Hotculture</option>
           <option class="form-control" name="farming_type">Animal Farming</option>
          </select>
        </div>
        <div class="form-group">
      <div class="text-danger"> <?php echo "$farming_levelErr";?></div>
       <label style="color: #060" for="farming_level">Level Of Farming Experience</label>
            <select name="farming_level" class="form-control" id="farming_level">
              <option></option>
           <option class="form-control" name="farming_level">Beginner</option>
           <option class="form-control" name="farming_level">Intermediate</option>
           <option class="form-control" name="farming_level">Professional</option>
          </select>
        </div>
        <div class="form-group">
    <div class="text-danger"> <?php echo "$hectaresErr";?></div>
        <label style="color: #060" for="hectares">Farm Hectares/Acres</label>
            <input type="text" name="hectares" class="form-control" id="hectares" placeholder="5 Hectares/Acres"> 
     </div>
       <div class="form-group">
          <div class="text-danger"> <?php echo "$locationErr";?></div>
        <label style="color: #060" for="inputlocation">Select Province</label>
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
    <div class="form-group">
        <div class="text-danger"> <?php echo "$phoneErr";?></div>
       <label style="color: #060" for="inputphone">Cell Number</label>
            <input type="tel" name="phone" minlength="10" maxlength="10" class="form-control" id="inputphone" placeholder="0716 605 802"  pattern="[0]{1}[7]{1}[1-9]{1}[1-9]{1}[0-9]{3}[0-9]{3}"> 
     </div>

     <div class="form-group">
        <div class="text-danger"> <?php echo "$emailErr";?></div>
       <label style="color: #060" for="inputemail">Email Address</label>
            <input type="email" name="email" class="form-control" id="inputemail" placeholder="someone@gmail.com"> 
     </div>

     <div class="form-group">
        <div class="text-danger"> <?php echo "$questionErr";?></div>
       <label style="color: #060" for="question">What is your favourite crop:<small>Please keep this safe for<br> password recovery</small></small></label>
            <input type="text" name="question" class="form-control" id="question" placeholder="soghum"> 
     </div>
    
        <span><button type="submit" name="farmer_registration"  class="btn btn-success"><span style="color:#FFF">Create Account Now</span></button></center>
        <hr>
    </form>
</div>

</div>

<div class="row">
<div class="col-sm-12"><?php include_once'footer.php';?></div>
</div>

</div>
<div id="farmer" class="modalDialog">
  <div class="col-sm-12">
    <a href="#close" title="Close" class="close">X</a>
<form  action="inc/login_processor.php" method="post" style="background-color: #CCC;padding: 5px;margin-top:3px;border-radius: 3px" autocomplete="off">
<img class="img-responsive" style="box-shadow: 0 12px 6px -6px #060;" src="images/slide2.jpg">
  <h5 class="text-center text-success"><strong>Farmer Login Now</strong></h5>
<label style="color: #000" for="inputsurname"> Username</label>
<input type="text" name="username" class="form-control" id="inputsurname" placeholder="Enter username please" required>

<label style="color: #000" for="inputsurname"> Password</label>
<input type="password" name="password" class="form-control" id="inputsurname" placeholder="Enter password please" required>
  
  
  <button type="submit" name="farmer_login"  class="btn btn-success"><span style="color:#FFF">Login</span></button> <hr>          
</form>
  </div>
</div>


<script>document.body.className += ' fade-out';

    $(function() {
        $('body').removeClass('fade-out');
    });
</script>

<style type="text/css">

.form-control{
  border:1px solid #000
}
#lgn:hover{
  text-decoration: none;
  color: #060;
}
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
