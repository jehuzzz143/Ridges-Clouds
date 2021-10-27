<!doctype html>
<?php
include "dbconnection/conn.php";


//adding new visitor
$visitor_ip=$_SERVER['REMOTE_ADDR'];
//below for testing
//$visitor_ip ="54:54:54:555";
$query="SELECT * FROM tbl_visitor WHERE ip_address='$visitor_ip'";
$result=mysqli_query($conn, $query);
if(!$result){
  die("Retriving Query Error <br>".$query);
}
$total_visitors=mysqli_num_rows($result);

if($total_visitors<1){
  $query="INSERT INTO tbl_visitor(ip_address) VALUES ('$visitor_ip')";
  $result=mysqli_query($conn, $query);
}

/* ############################################################################# ^Ip addresss insertion */
//retriving existing visitors
$query="SELECT * FROM tbl_visitor";
$result=mysqli_query($conn, $query);

if(!$result){
  die("Retriving Query Error <br>".$query);
}
$total_visitors=mysqli_num_rows($result);

if($total_visitors<1){
  $query="INSERT INTO tbl_visitor(ip_address) VALUES ('$visitor_ip')";
  $result=mysqli_query($conn, $query);
}
?>
<?php 
error_reporting(0);
     // Initialize the session
   session_start();
     //Check if the user is logged in, if not then redirect him to login page
     if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
         // When Not Login Return to this Page
         
         $active = "";


     }else if(isset($_SESSION['ID'])){
            $cID = $_SESSION['ID'];
            $active = $_SESSION['active']; 
         
            include "dbconnection/conn.php";
            
            $getrecord = mysqli_query($conn,"SELECT * FROM tbl_user WHERE ID  ='$cID'");
            while($rowedit = mysqli_fetch_assoc($getrecord))
            {
                $customerID = $rowedit['ID'];

               

            }
     }



?>
<html lang="en">
<head>
	<title> ABOUT </title>
  <link rel="icon" href="style/images/woodsign_bliog.png">
	 <!-- Required meta tags -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--CSS -->

	<link rel="stylesheet" type="text/css" href="style/style.css">

  <!-- AOS animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- fontawSome -->
  <script src="https://kit.fontawesome.com/70127cec04.js" crossorigin="anonymous"></script>
  
</head>
<body>
<!-- Navbar    -->
<form method="POST">
<nav>
  <input id="nav-toggle" type="checkbox">
  <div class="logo"><img src="style/images/ridges_banner.png" style="width: 100%; height: 100%; object-fit: contain;"></img></div>
  <ul class="links">
    <li><a href="index.php">Home</a></li>
    <li><a href="pricing.php">Pricing</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="#parallax-about" style="color:black;">About Us</a></li>
    <?php
    if ($active == ""){
    ?> 
      <li><a href="login.php">Book Now</a></li>
    <?php
    }else{
    ?>
   
     <li><a href="customer/category.php">Book Now</a></li> 
     
    <li>
      <a style="padding: 0px;"><button class="nav-button" type="submit" name="homeprofile">Account  <i class="fas fa-user-circle"></i></button></a>
    </li>
    <li >
      <a style="padding: 0px;"><button class="nav-button" type="submit" name="homelogout">Sign Out <i class="fas fa-sign-out-alt"></i></button></a>
    </li>
        </form>

    <?php

    }

    ?>
  </ul>
  <label for="nav-toggle" class="icon-burger">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </label>
</nav>


<!-- End of Navbar -->
<!-- dopdown script -->
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<div class="container is-fluid" id="parallax-about">
  <div class="container" data-aos="fade-down">
    <center>
       <h2 class="text-about"> About <span>Us</span></h2> 
    </center>
  </div>
</div>

<div class="container" id="text-w" style="padding:50px 0px;" data-aos="fade-up">
  <div style="padding:0px 50px 20px;">
    <h3>What is Ridges & and Clouds?</h3> 
    <p>If you're looking for the perfect getaway with your friends, your date or your family, the mountains is the place to be. Ridges and Clouds Nature Camp, located in Tanay, Rizal is filled with abundant views of the mountains above the clouds. The nature camp features the foothills of Sierra Madre in a sea of clouds as the sun rises.</p>
  </div>
  <img src="style/images/huts.jpg" class="fit-image2" alt="..." > 
</div>

<div class="container" id="text-w" style="padding:50px 0px;"  data-aos="fade-up">
  <div style="padding:0px 50px 20px;">
    <h3>What Matters to Us?</h3> 
    <p>We want to give our guests a good time by providing the finest amenities including a relaxing Stone Hot Bath, Massage Huts, a mini-pool, romantic dates at viewdeck or verandas, and you can even request a bonfire! The cottages don't have Airconditioners but the fresh air is enough to cool you down. And to encourage our guests to have a good time, by conversing with the other fellow guests, we also removed our Wi-Fi connection to motivate the people to converse with each other and to connect personally</p>
  </div>
  <img src="style/images/table.jpg" class="fit-image2" alt="..."> 
</div>

<div class="container" id="text-w" style="padding:50px 0px;"  data-aos="fade-up">
  <div style="padding:0px 50px 20px;">
    <h3>Where Ridges & Clouds Located?</h3> 
  </div>
  <div class="map-responsive ">
   <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d61778.38902017142!2d121.3267048623513!3d14.590566327632763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d14.636120499999999!2d121.15958359999999!4m5!1s0x339793442c3ae3fb%3A0xbc00420bc68415f1!2snature%20camp!3m2!1d14.6012063!2d121.35740159999999!5e0!3m2!1sen!2sph!4v1616159990258!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
</div>
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


<!-- AOS animation Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="clickCounter.js"></script>
<script>
  AOS.init({
    offset:200,
    duration:1500
  });
</script>
<?php 
    require 'cookies.html';
  ?>
</body>
</html>
<?php 
if(isset($_POST['homelogout'])){

  session_unset();
  session_destroy();
?>

 <script type="text/javascript">location.href = 'login.php';</script>
<?php
exit();
}else if(isset($_POST['homeprofile'])){
  ?>

 <script type="text/javascript">location.href = 'user.php';</script>
<?php
}

?>

