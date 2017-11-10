<!DOCTYPE html>
<html>
<head>
<title>Crops and Animals management</title>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12"><?php include_once'head.php';?></div>
</div>


<div class="row" style="height:500px">
<div class="col-sm-3" style="background-color:#ccc;border-right: 2px dotted #333">
<h3>Farming Help Record</h3>

<a href="soils.php" target="view">Plants for different soil types</a><hr>
<a href="plants.php" target="view">Plant diseases signs and symptoms</a><hr>
<a href="livestock.php" target="view">Livestock diseases and treatment</a><hr>
<h4 class="text-center"><a class="text-success" href="contact_us.php">Send Us Feedback</a></h4>
<?php include_once'bar1.php';?>



</div>




<div class="col-sm-9">
<iframe style="border-style: none;background-image: url(images/gmb.jpg);background-size: cover;"  width="100%" height="500" src="#" name="view">
 <h2>HELP</h2>
</iframe>
</div>

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