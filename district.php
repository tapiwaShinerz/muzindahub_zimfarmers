<!DOCTYPE html>
<html>
<head>
<title>Zim Districts|Welcome</title>
</head>
<body>
<div class="container-fluid">
<button onclick="topFunction()" id="myBtn" title="Go to 
top">Top</button>
<div id="parax" class="row">
<div class="col-sm-12"><center><img src="images/map.gif" class="img-responsive"></center></div>
<div class="col-sm-12 bg-success">
<h3 class="text-center text-success"><strong>Provinces and their Districts in Zimbabwe</strong></h3>
<h4 class="text-center text-success">The Republic of Zimbabwe is broken down into 10 administrative Provinces, which are divided into 59 Districts and 1,200 Wards.</h4>
</div>
</div>
<div class="row">
<div class="col-sm-3"><ul class="item-list"><strong>Mashonaland West Province</strong>
<li class="item-list">Makonde</li>	
<li class="item-list">Chegutu</li>
<li class="item-list">Hurungwe</li>
<li class="item-list">Kadoma</li>
 <li class="item-list">Kariba</li>
 <li class="item-list">Zvimba</li>
	
</ul>
</div>

<div class="col-sm-3">
<ul class="item-list"><strong>Mashonaland East Province</strong>
 <li class="item-list">   Chikomba</li>
 <li class="item-list">   Goromonzi</li>
<li class="item-list">    Hwedza (Wedza)</li>
 <li class="item-list">   Marondera</li>
 <li class="item-list">   Mudzi</li>
 <li class="item-list">   Murehwa</li>
 <li class="item-list">   Mutoko</li>
 <li class="item-list">   Seke</li>
 <li class="item-list">   UMP (Uzumba-Maramba-Pfungwe)</li>

</ul>
</div>
<div class="col-sm-3">
<ul class="item-list"><strong>Mashonaland Central Province</strong>
 <li class="item-list">    Bindura</li>
  <li class="item-list">   Guruve</li>
  <li class="item-list">   Mazowe</li>
  <li class="item-list">   Mount Darwin</li>
  <li class="item-list">   Muzarabani</li>
  <li class="item-list">   Rushinga</li>
  <li class="item-list">   Shamva</li>
	
</ul>
</div>
<div class="col-sm-3">
<ul class="item-list"><strong>Midlands Province</strong>
   <li class="item-list">   Chirumhanzu</li>
   <li class="item-list">   Gokwe North</li>
    <li class="item-list">  Gokwe South</li>
     <li class="item-list"> Gweru</li>
    <li class="item-list">  Kwekwe</li>
    <li class="item-list">  Mberengwa</li>
    <li class="item-list">  Shurugwi</li>
     <li class="item-list"> Zvishavane</li>
	
</ul>
</div>
</div>
<hr style="border:1px solid #060">

<div class="row">
<div class="col-sm-3"><ul class="item-list"><strong>Harare Province</strong>
	
</ul>
</div>

<div class="col-sm-3">
<ul class="item-list"><strong>Bulawayo Province</strong>

</ul>
</div>
<div class="col-sm-3">
<ul class="item-list"><strong>Manicaland Province</strong>
 <li class="item-list">Buhera</li>
 <li class="item-list"> Chimanimani</li>
  <li class="item-list"> Chipinge</li>
  <li class="item-list"> Makoni</li>
    <li class="item-list"> Mutare</li>
    <li class="item-list"> Mutasa</li>
    <li class="item-list"> Nyanga</li>

	
</ul>
</div>
<div class="col-sm-3">
<ul class="item-list"><strong>Masvingo Province</strong>
   <li class="item-list">Bikita</li>
   <li class="item-list"> Chiredzi</li>
   <li class="item-list"> Chivi</li>
    <li class="item-list">Gutu</li>
   <li class="item-list"> Masvingo</li>
   <li class="item-list"> Mwenezi</li>
   <li class="item-list"> Zaka</li>

	
</ul>
</div>
</div>
<hr style="border:1px solid #060">

<div class="row">
<div class="col-sm-6"><ul class="item-list"><strong>Matabeleland North Province</strong>
   <li class="item-list"> Binga</li>
   <li class="item-list"> Bubi</li>
   <li class="item-list"> Hwange</li>
   <li class="item-list"> Lupane</li>
   <li class="item-list"> Nkayi</li>
    <li class="item-list">Tsholotsho</li>
   <li class="item-list"> Umguza</li>
	
</ul>
</div>

<div class="col-sm-6">
<ul class="item-list"><strong>Matabeleland South Province</strong>
    <li class="item-list">Beitbridge</li>
    <li class="item-list"> Bulilimamangwe - in process of splitting into Bulilima District and Mangwe District</li>
    <li class="item-list"> Gwanda</li>
     <li class="item-list">Insiza</li>
    <li class="item-list"> Matobo</li>
     <li class="item-list">Umzingwane</li>

</div>


<div class="col-sm-12"><?php require_once'footer.php';?></div>


</div>


<style>
#parax{
background-image: url(images/1.jpg); 
    background-size: cover;
}
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
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<link href="css/bootstrap.css" type="text/css"rel="stylesheet" />
<link href="css/bootstrap.min.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.css" type="text/css"rel="stylesheet" />
 <link href="css/bootstrap-theme.min.css" type="text/css"rel="stylesheet" />
 <script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>