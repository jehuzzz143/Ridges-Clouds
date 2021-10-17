<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../style/images/woodsign_bliog.png">
	
	 <!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!--CSS -->
    <link rel="stylesheet" type="text/css" href="css/homelogin.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css">

   <!-- AOS animation -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   <!-- fontawSome --> 
   <script src="https://kit.fontawesome.com/70127cec04.js" crossorigin="anonymous"></script>
</head>
<body>

<!--  Header -->
<nav>
  <input id="nav-toggle" type="checkbox">
  <div class="logo"><img src="../style/images/ridges_banner.png" style="width:100%; height:100%; object-fit: contain;"></img></div>
  <ul class="links">
    <li ><a  href="index.php" >Home</a></li>
    <li><a href="pricing.php">Pricing</a></li>
    <li><a href="gallery.phpk">Gallery</a></li>
    <li><a href="About_Us.php">About Us</a></li>
    <li><a href="login.php" style="color:black;">Book Now</a></li>
  </ul>
  <label for="nav-toggle" class="icon-burger">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </label>
</nav>

<!-- Header End -->

<div class="container is-fluid" id="parallax" style="height:300px;">
  <div class="container"data-aos="fade-up">
    <center>
      <p class="text-slogan">Take back memories with you </p> 
      <a class="btn-explore button" href="360/index.html" target="_blank" role="button">EXPLORE OUR CAMP</a>
    </center>
  </div>
</div>


<!-- body -->
<?php
	include "../booking1.php";
?>
<!-- body end -->



<Br><br><br><br><br><br>


<!-- FOOTER -->
<div class="container is-fluid" style="background-color: #292b2c">
  <div class="container">
    <div class="columns is-desktop">
        <div class="column is-3 footer-padding">
          <ul class="footer-style">
            <li class="text-footer">IMPORTANT</li>
            <li class="text-footer-sub">Prior Booking is <b>REQUIRED</b></li>
          </ul>
        </div>
         <div class="column is-3 footer-padding">
          <ul class="footer-style">
            <li class="text-footer">FOLLOW US</li>
            <li class="text-footer-sub"><a href="#"><i class="fab fa-facebook fa-2x"></i></a> <a href="#"><i class="fab fa-twitter fa-2x"></i></a> <a href="#"><i class="fab fa-instagram fa-2x"></i></a> </li>
            <li class="text-footer-sub"></li>
            <li class="text-footer-sub"></li>
          </ul>
        </div>
        <div class="column is-3 footer-padding">
          <ul class="footer-style">
            <li class="text-footer">VISIT</li>
            <li class="text-footer-sub"><b>ADDRESS: </b>Sitio Naysawa, Brgy Cuyambay Tanay, Rizal</li>
            <li class="text-footer-sub"><b>VIA COMMUTE: </b>Cogeo Gate2-Sampaloc Jeep (V/V) along Marilaque Highway. Alight at Magsawa Then Tricycle to Ridges</li>
          </ul>
        </div>
         <div class="column is-3 footer-padding">
          <ul class="footer-style">
            <li class="text-footer">CONTACT US </i></li>
            <li class="text-footer-sub"><b>(GLOBE): </b>0917322445599<br>/09550438152</li>
            <li class="text-footer-sub"><b>(SMART): </b>09214772797</li>
          </ul>
        </div>
    </div>
  </div>
</div>
<!-- END OF FOOTER -->


</body>
</html>