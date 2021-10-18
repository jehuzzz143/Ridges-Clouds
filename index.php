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


$sql = "SELECT * FROM tbl_promo WHERE promo_expiration <= NOW()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $sql = "UPDATE tbl_promo SET promo_status='inactive' WHERE  promo_id=".$row['promo_id'];

    $conn->query($sql);


  }
} 

?>
<html lang="en">
<head>
	<title> Ridges & CLouds </title>
 <!--  <link rel="icon" href="style/images/woodsign.png" type = "image/x-icon"> -->
	<link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAO7uxACPQjgBbn+AAN9udAJvH8gAc16QAQ7WKAHWexwAkTngAMMWPAEqR1gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAzMwAAAAAAREd0dAAAAANEpyF0MAAAMzNickMzAAAzMzmTMzMAAzMzOZmTMzADMzO5mZMzMAM4mZmTMzMwAziJmZMzMzAAMzM5mZgzAAAzMzWZmTMAAAMzMzMzMAAAADMzMzMAAAAAADMzAAAAAAAAAAAAAAD//wAA/D8AAPAPAADgBwAAwAMAAMADAACAAQAAgAEAAIABAACAAQAAwAMAAMADAADgBwAA8A8AAPw/AAD//wAA" rel="icon" type="image/x-icon" />
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
  <form method="POST">
<nav>

  <input id="nav-toggle" type="checkbox">
  <div class="logo"><img src="style/images/ridges_banner.png" style="width:100%; height:100%; object-fit: contain;"></img></div>
  <ul class="links">
    <li ><a  href="#parallax" style="color:black;">Home</a></li>
    <li><a href="pricing.php">Pricing</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="About_Us.php">About Us</a></li>
  
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


<!-- -->

<div class="container is-fluid" id="parallax">
  <div class="container">
    <center>
      <p class="text-slogan">Take back memories with you </p> 
      <a class="btn-explore button" href="app-files/index.html" target="_blank" role="button">EXPLORE OUR CAMP</a>
    </center>
  </div>
</div>

<?php


  $sql = "SELECT * FROM tbl_announcement WHERE status='active'";
  $result = $conn->query($sql);
 
 
  while($row = $result->fetch_assoc()) {
  ?>
  <div class="container" style="margin-top: 20px; margin-bottom: 20px;" data-aos="fade-up">  
      <div class="columns is-desktop is-gapless" style="border: solid 1px;border-color: black;">
        <div class="column is-1" style="background-color:black; text-align: center;">
            <img src="style/images/info.png" id="info-logo"></img>
        </div>
        <div class="column is-11">
          <strong style="padding: 10px 10px; font-size: 1em;"><?php echo "".$row["header"];?> </strong>
          <p class="text-start" style="padding: 10px 10px">  <?php echo "".$row["Description"];?>  </p>  
        </div>
      </div>
  </div>



  <?php
  }
  ?>


<!--SLIDE ANIMATIONS-->
<div class="container" style="overflow: hidden;">
  <div class="container" style="margin-top: 20px; margin-bottom: 20px;" data-aos="fade-right">
    <div class="columns is-widescreen">
      <div class="column is-5">
        <img src="style/images/camp.jpg" class="fit-image" alt="..."> 
      </div>
      <div class="column is-7 feature">
         <p><b>EXPERIENCE THE COMFORT</b> <br><br> Safety and comfort are key factors in leisure stays these days. We assure you of medical-grade stringent sanitation procedures in preparing our rooms for guests so you can stay with us with peace of mind.</p>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: : 20px; margin-bottom: 20px" data-aos="fade-left">
  <div class="columns is-widescreen">
    <div class="column is-7 feature">
      <p ><b>EXPERIENCE THE EMOTIONS</b> <br><br>Intimate gatherings are the norm, and we can still help you plan. We have options for any type of exclusive gathering and the requirements you need that adhere to the health protocols. Call us and we can plan with you. Your story begins here.</p>
    </div>
    <div class="column is-5">
      <img src="style/images/camp1.jpg" class="fit-image" alt="..."> 
    </div>
  </div>
</div>

<div class="container" style="margin-top: : 20px; margin-bottom: 20px" data-aos="fade-right">
    <div class="columns is-widescreen">
      <div class="column is-5">
        <img src="style/images/camp2.jpg" class="fit-image" alt="..."> 
      </div>
      <div class="column is-7 feature">
         <p><b>EXPERIENCE THE FLAVORS</b> <br><br>Dining out options may have changed, but we still want you to enjoy your Café Ilang Ilang favorites, even in the comfort of your own home. We launched out Take Out Service with A La Carte and Home Buffet options, and so much more.</p> 
      </div>
    </div>
  </div>

   <div class="container" style="margin-top: : 20px; margin-bottom: 20px" data-aos="fade-left">
    <div class="columns is-widescreen">
      <div class="column is-7 feature">
         <p>Start aligned text on viewports sized MD (medium) or wider. Start aligned text on viewports sized MD (medium) or wider. Start aligned text on viewports sized MD (medium) or wider. Start aligned text on viewports sized MD (medium) or wider.  </p> 
      </div>
      <div class="column is-5">
        <img src="style/images/camp4.jpg" class="fit-image" alt="..."> 
      </div>
    </div>
  </div>
</div>
<!--SLIDE ANIMATIONS END-->


<!-- Reviews -->
<div class="container review-div">
  <?php 
    $sql = "SELECT * FROM tbl_review  WHERE status = 'enable' ORDER BY RAND() LIMIT 6 ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $reviewImagePath = "style/images/reviews/".$row['reviewPhoto'];
        $cstmrId = $row['costumerID'];
        $cstmrId = str_replace(" ","",$cstmrId);
        $costumerDetails = mysqli_query($conn,"SELECT * FROM tbl_user WHERE ID='$cstmrId'");
        $costumerRow= mysqli_fetch_assoc($costumerDetails);
        $costumerPhotoPath = "customer/profilepicture/".$costumerRow['Userimage'];

        ?>

          <div class="columns is-gapless is-desktop is-multiline review-row"data-aos="fade-up" >
            <div class="column is-2">
              <div class="container icon-container">
                <img src="<?php echo"".$costumerPhotoPath; ?>" alt="Customer Profile">
                 <h1><?php echo"".$costumerRow['Userfname']." ".$costumerRow['Userlname'];?></h1>
              </div>
            </div>

            <div class="column is-7 comment">
              <h1><?php echo"".$row['dateReview'];?></h1>
              <p><?php echo"".$row['description'];?>  </p>
            </div>
            <div class="column is-3">
              <div class="contiainer icon-container">
                <img class="zoom"src="<?php echo"".$reviewImagePath;?>" alt="...">
              </div>
              <center>
              <?php 
              for($i = 1; $i<=5;$i++){
                if($i<= $row['rate']){
                  ?>
                    <i class="fas fa-star" style="color:#FEB727; font-size: 20px;"></i>
                  <?php
                }else{
                  ?>
                    <i class="far fa-star" style="color:#FEB727; font-size: 20px;"></i>
                  <?php
                }
               
              }

              ?>
              </center>
            </div>
          </div>
        <?php

      }
    }else{
      ?>
        <div class="columns is-gapless is-desktop is-multiline review-row"data-aos="fade-up" >
          <div class="column is-2">
            <div class="container icon-container">
              <img src="style/images/4.jpg" alt="...">
               <h1>Cyril Samonte</h1>
            </div>
          </div>

          <div class="column is-7 comment">
            <h1>4/28/2021</h1>
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut le et dolore magna aliqua."  </p>
          </div>
          <div class="column is-3">
            <div class="contiainer icon-container">
              <img class="zoom" src="style/images/camp1.jpg" alt="...">
            </div>
            <div class="stars">
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
            </div>
          </div>
        </div>
      <?php
    }
  ?>

  

  

</div>
<!-- end reviews -->





<!-- PARALLAX 2 -->
  <div class="container is-fluid" id="parallax-2">
    <div class="container">
      <center>
        <p class="text-booknow" data-aos="fade-up">BOOK <span>NOW.</span></p>
    <!--     <a class="btn-explore button"  id="myBtn" role="button">HOW TO BOOK</a> -->
        <button type="button" class="btn-learn1 button" id="myBtn" onclick="Modal()" role="button">LEARN MORE</button>
      </center>
    </div>
  </div>
<!-- END PARALLAX 2 -->





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
            <li class="text-footer-sub">
                                        <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                                        <a href="#"><i class="fab fa-twitter fa-2x"></i></a> 
                                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a> 
            </li>
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

<!-- The Modal -->
<div id="myModal" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content">
    <h1>STEPS IN BOOKING: <span class="close">&times;</span></h1>
    <hr>
    <p><b>STEP 1: </b> Create an Account</p>
    <p><b>STEP 2: </b> Login the Account</p>
    <p><b>STEP 3: </b>  Choose Date</p>
    <p><b>STEP 4: </b> Submit the Booking Request</p>
    <p><b>STEP 5: </b> Pay 50% of Booking Cost Through GCASH with BOOKING ID</p>
    <p><b>STEP 6: </b> Wait for the SMS Confirmation of Booking</p>
    <p><b>STEP 7: </b> After Receving a text, Print the Booking Receipt Under Account Profile and present it to the camp</p>
  </div>

</div>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<!-- AOS animation Script -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="medium-zoom.min.js"></script> <!-- not working-->
<script src="clickCounter.js"></script>
<script src="zoom-main.js"></script>

<script>
  AOS.init({
    offset:200,
    duration:1000
  });

</script>
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