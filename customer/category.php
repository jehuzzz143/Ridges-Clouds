<!DOCTYPE html>
<?php 

     // Initialize the session
	 session_start();
     //Check if the user is logged in, if not then redirect him to login page
     if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
         // When Not Login Return to this Page
        	  header("refresh:0; ../login.php");
         exit;


     }else if(isset($_SESSION['ID'])){
            $cID = $_SESSION['ID'];
            $_SESSION['active'] = "active";
            $active = $_SESSION['active'];
         
            include "../dbconnection/conn.php";
            
            $getrecord = mysqli_query($conn,"SELECT * FROM tbl_user WHERE ID  ='$cID'");
            while($rowedit = mysqli_fetch_assoc($getrecord))
            {
                $customerID = $rowedit['ID'];

            }
        if(!isset($_SESSION['categoryactive']) || $_SESSION['categoryactive'] !== true){
          $_SESSION['choice'] = "";
         
        
        }
     }



?>
<html>
<head>
	<title> booking</title>


	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" href="css/category.css">


	<!-- date formatting -->
	<script src="https://momentjs.com/downloads/moment.js"></script>
	 <!-- fontawSome -->
  <script src="https://kit.fontawesome.com/70127cec04.js" crossorigin="anonymous"></script>
	
</head>
<body >





<!-- modal end -->
	<!--  Header -->
<form method="POST">
<nav>
  <input id="nav-toggle" type="checkbox">
  <div class="logo"><img src="../style/images/ridges_banner.png" style="width:100%; height:100%; object-fit: contain;"></img></div>
  <ul class="links">
    <li ><a  href="../index.php" >Home</a></li>
    <li><a href="../pricing.php">Pricing</a></li>
    <li><a href="../gallery.php">Gallery</a></li>
    <li><a href="../About_Us.php">About Us</a></li>
    <li><a href="#parallax" style="color:black;" >Book Now</a></li> 

     
    <li>
      <a style="padding: 0px;"><button class="nav-button" type="submit" name="homeprofile">Account  <i class="fas fa-user-circle"></i></button></a>
    </li>
    <li >
      <a style="padding: 0px;"><button class="nav-button" type="submit" name="homelogout">Sign Out <i class="fas fa-sign-out-alt"></i></button></a>
    </li>
     
   </form>
   
  </ul>
  
  <label for="nav-toggle" class="icon-burger">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </label>
</nav>


<!-- Header End -->
<script>
	$(function(){
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();  
    var maxDate = year + '-' + month + '-' + day;
    $('#txtDate').attr('min', maxDate);
	});

</script>
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
<!-- Parallax -->

<form METHOD="POST">
<div class="container is-fluid" id="parallax" style="height:100%; ">

  <div class="container"data-aos="fade-up">
    <center>
      <a class="btn-explore button"  id="myBtn" role="button">HOW TO BOOK</a>
    </center>
  </div>

  <div class="container is-desktop bar">
    <div class="progress-bar"> 0%</div>
  </div>
  <div class="container is-desktop white-background">

  	  	<label class="label" >Select booking category:</label>
    <div class="columns is-desktop">
      <div class="column"  >
          <label class="radio radio-gradient">
            <span class="radio__input">
              <input type="radio" name="radio" value="Overnight" <?php if($_SESSION['choice']=='Overnight'){ echo "checked";} ?>>
              <span class="radio__control"></span>
              <span class="radio__label">Overnight</span>
            </span>
            </label>
      </div>
      <div class="column">
        <label class="radio radio-gradient">
          <span class="radio__input">
            <input type="radio" name="radio" value="Daytour" <?php if($_SESSION['choice']=='Daytour'){ echo "checked";} ?>>
            <span class="radio__control"></span>
        
          <span class="radio__label">Daytour</span>
            </span>
        </label>
      </div>
    </div>
    
  
   
  	<div class="columns" >
  		<div class="column is-full">
          <button class="no-button" name="next" type="submit"> Next <i class="fas fa-arrow-right"></i></button>	
  		</div>			
  	</div>
  </div>
</div>
  
  
</form>

<!-- paralax end -->









<!---
<div class="columns is-mobile" style="padding-left:20px;">
  <div class="column">

    <img src="images/booking.jpg" class="imagedesign">
  </div>
  <div class="column">
    <img src="images/rules.jpg" class="imagedesign">
    

  </div>
  <div class="column">
    <img src="images/daytour.jpg" class="imagedesign">
    

  </div>


</div>
--> 





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




	<!-- how to book MODAL -->
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


 

</body>
</html>
<?php
if(isset($_POST['next'])){
	
  $choice =  $_POST['radio'];
  $_SESSION['categoryactive'] = true;
  $_SESSION['choice'] = $choice;

  if($choice == 'Overnight'){
    ?>
    <script type="text/javascript">location.href = 'datepicker.php';</script>

    <?php 
  }else if($choice =="Daytour"){
    ?>
    <script type="text/javascript">location.href = 'daytour.php';</script>

    <?php 

  }else{
    echo '<script type="text/javascript">alert("Please Select Category First!")</script>';
  }
	

}else if(isset($_POST['homelogout'])){

  session_unset();
  session_destroy();
?>

 <script type="text/javascript">location.href = '../login.php';</script>
<?php
exit();
}else if(isset($_POST['homeprofile'])){
  ?>

 <script type="text/javascript">location.href = '../user.php';</script>
<?php
}
?>
