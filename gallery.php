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
	<title> Gallery </title>
  <link rel="icon" href="style/images/woodsign_bliog.png">
	
	 <!-- Required meta tags -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--CSS -->
  <link rel="stylesheet" type="text/css" href="style/gallery.css">

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
  <div class="logo"><img src="style/images/ridges_banner.png" style="width:100%; height:100%; object-fit: contain;"></img></div>
  <ul class="links">
    <li ><a  href="index.php" >Home</a></li>
    <li><a href="pricing.php" >Pricing</a></li>
    <li><a href="#top" style="color:black;">Gallery</a></li>
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
<!-- End of Navbar -->

<!--------------- SLIDER ----------------->
<div class="container is-widescreen slideshow" id="rettop">
<div class="img-slider" id="top">
      <?php 
      $sql = "SELECT * FROM tbl_photo Where category=2";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $count = 0;

        while($row = $result->fetch_assoc()) {
          $path = "style/images/".$row['photoname'];
          if($count==0){
            ?>
              <div class="slide active">
                <img src="<?php echo"".$path ?>" alt="">
                <div class="info">
                  
                  <p><?php echo"".$row['description'] ?></p>
                </div>
              </div>

            <?php

          }else{
            ?>
            <div class="slide ">
                <img src="<?php echo"".$path ?>" alt="">
                <div class="info">
                
                  <p><?php echo"".$row['description'] ?></p>
                </div>
              </div>

            <?php

          }
          ?>



          <?php
        $count += 1;
        }

      }else{
        echo "0 results";
      }

      ?>
      <!--
      <div class="slide active">
        <img src="style/images/2.jpg" alt="">
        <div class="info">
          <h2>Slide 02</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="slide active">
        <img src="style/images/3.jpg" alt="">
        <div class="info">
          <h2>Slide 03</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="slide">
        <img src="style/images/4.jpg" alt="">
        <div class="info">
          <h2>Slide 04</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="slide">
        <img src="style/images/5.jpg" alt="">
        <div class="info">
          <h2>Slide 05</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>-->
      <?php 
      $row = mysqli_num_rows($result);
    
      echo"<div class='navigation'>";
      for($i=1; $i<=$row; $i++){
        if($i==1){
          echo"<div class='btn active'></div>";
        }else{
          echo"<div class='btn'></div>";
        }

      }
      echo"</div>";
      ?>
      
        
        
        <!--<div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
       -->
    </div>
</div>

    <script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 5000);
      }
      repeater();
    }
    repeat();
    </script>
<!--------------- END SLIDER ----------------->

<!-- Gallery -->
<div class="container is-widescreen" style="margin-bottom:20px; ">
  <div class="columns is-mobile is-multiline">
     <?php
      $sql = "SELECT * FROM tbl_photo where category = 1 ORDER BY ID DESC";
      $result = $conn->query($sql);
    
     if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $path = "style/images/".$row['photoname'];
         
          ?>
      <div class="column is-3 padding-gall">
        <div class="container zoomInside">
          <img class="image-gall zoom" src="<?php echo"".$path; ?>" alt="Review Photos">
        </div>
      </div>
     <?php
          
        }
      }else{
        echo "No photo review available please upload first";
      }
      ?>
    

   
  </div>
</div>
<!-- End Gallery -->


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
<script src="medium-zoom.min.js"></script>
<script src="clickCounter.js"></script>
<script src="zoom-main.js"></script> <!-- not working--> 
<script>
  AOS.init({
    offset:150,
    duration:1000
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
