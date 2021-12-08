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
		<title> Pricing | Ridges and Clouds </title>
	
	 <!-- Required meta tags -->
	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
	



	<!-- Style Sheet-->
	<link rel="stylesheet" type="text/css" href="style/pricing.css">

	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- title image link-->
	<link rel="shortcut icon" type="image/x-icon" href="style/mini.png">

	<!-- AOS animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>

	




<!-- Navbar    -->
<form method="POST">
<nav>
  <input id="nav-toggle" type="checkbox">
  <div class="logo"><img src="style/images/ridges_banner.png" style="width:100%; height:100%; object-fit: contain;"></img></div>
  <ul class="links">
    <li ><a  href="index.php" >Home</a></li>
    <li><a href="#body" style="color:black;">Pricing</a></li>
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
<!-- End of Navbar -->
<!-- =====================================================================================================body -->
	<div id="body"> 
		<center> 
		
		<div class="banner1">
			<div class="container is-widescreen text-center"  style="margin-top:150px;">
		  	  <h2 class="text-about"> Rates & <span> Regulations</span></h2>
		  	 </div>
	        
		</div>


		<div class="container is-widescreen" style="margin-bottom:20px;">
			<h1>NATURE CAMP TIME</h1>
			<h2>Day Time      |      Night Time</h2>
			<br>


				<p id="title">ROOMS </p>
				<hr>
				<table class="table-app"> 
				<thead> 
					
						<th>CODE</th>
						<th>ACCOMODATION</th>
						<th>SIZE</th>
						<th>PAX</th>
						<th>RATES</th>
						<th>NOTES</th>
				</thead>
				<tbody> 
					<?php


			            $sql = "SELECT ID, accomodation, size, pax, rate, notes, imagename FROM tbl_price WHERE category ='room' ORDER BY accomodation = 'Standard Couple Cabana' DESC , accomodation = 'De Luxe Couple Cabana' DESC, size  DESC";
			            $result = $conn->query($sql);
			            $data="";
			            $sizing="Small";


			            if ($result->num_rows > 0) {
			              // output data of each row
			              while($row = $result->fetch_assoc()) {
			              
			                
			                if($sizing == $row['size']){
			                ?>
			                   <tr style="background-color: #F7F7F7 ;">
			                <?php
			            	}else{
			            	?>
			            	   <tr >
			            	<?php

			            	}
			            	?>
			           			<td data-label="Code"><b><?php echo"".strtoupper(substr($row['imagename'], 0, -4)); ?> </b></td>
			                  
			                  <?php 
			                  if( $data == $row['accomodation']){
			                  ?>
			                    <td data-label="Accomodation"><?php echo"".$row['accomodation'] ?> </td>
			                  <?php 
			                  }else{
			                  ?>

			                   <td data-label="Accomodation"><?php echo"".$row['accomodation']; ?> </td>
			                  <?php 
			                  }
			                  ?>
			                  <td data-label="Size"><?php echo"".$row['size']; ?></td>
			                  <td data-label="Pax"><?php echo"".$row['pax']; ?></td>
			                  <td data-label="Rates"><?php echo"".$row['rate']." <small>php </small>"; ?></td>
			                  
			                  <td data-label="Notes"><?php echo"".$row['notes']; ?></td>
			                   
			              </tr>
			              <?php
			              $data = $row['accomodation'];
			            
			              }

			            }else{
			              ?>
			                <td colspan=5> No Records</td>
			              <?php
			            }
			           

			            ?>

			       </tbody> 
				</table>
			
			</div>
		  <div class="container is-widescreen" style="margin-bottom: 70px;">
			  <div class="columns is-multiline" data-aos="fade-right">
			    <div class="column">
			      	<img class="img-fluid img-thumbnail" id="img"  src="style/room_.jpg" />
			    </div>
			    <div class="column">
			     	<img class="img-fluid img-thumbnail" id="img"  src="style/room1_.jpg" />
			    </div>
			    <div class="column">
			    	<img class="img-fluid img-thumbnail" id="img"  src="style/room3_.jpg" />
			    </div>

			  </div>
			 </div>
			
			<div class="container is-widescreen" style="margin-bottom: 20px;">
				<p id="title">ROMANTIC DATES </p>
				<hr>
				<table class="table-app"> 
					<thead>
					<th >ACCOMODATION</th>
						<th >TIME</th>
						<th >PAX</th>
						<th >VIEW DECK</th>
						<th >VERANDA</th>
						<th >NOTES</th>
					</thead>
					<tbody>
					<?php
			         $sql = "SELECT ID, accomodation, time, pax, viewrate, verandarate, notes FROM tbl_price WHERE category='date'";
			          $result = $conn->query($sql);

			          if ($result->num_rows > 0) {
			            // output data of each row
			            while($row = $result->fetch_assoc()) {
			            ?>
			              <tr >  <!-- class="dateeventModal" -->
			                
			                <td data-label="Accomodation"><?php echo "".$row['accomodation']?></td>
			                <td data-label="time"><?php echo "".$row['time']?></td>
			                <td data-label="Pax"><?php echo "".$row['pax']?></td>
			                <td data-label="View Deck"><?php echo "".$row['viewrate']." <small>php </small>";?></td>
			                <td data-label="Veranda"><?php echo "".$row['verandarate']." <small>php </small>";?></td>
			                <td data-label="Notes"><?php echo "".$row['notes']; ?></td>
			               


			              </tr>
			            <?php
			            }
			          } else {
			            ?>
			             <td colspan=6> No Records</td>
			            <?php
			          }

			          ?>
					

			     </tbody>
				</table>
			</div>

			<div class="container is-widescreen" style="margin-bottom:70px;"data-aos="fade-right">
			  <div class="columns is-multiline">
			    <div class="column">
			      	<img class="img-fluid img-thumbnail" style="height:500px;" id="img" src="style/sunrise_.jpg" />
			    </div>
			    <div class="column">
			     	<img class="img-fluid img-thumbnail" style="height:500px;" id="img"src="style/coffee_.jpg" />
			    </div>
			    <div class="column">
			    	<img class="img-fluid img-thumbnail" style="height:500px;" id="img" src="style/dinner_.jpg" />
			    </div>
			  </div>
			</div>
			<div class="container is-widescreen" style="margin-bottom:20px">

				<p id="title">OTHERS</p>
				<hr>
				<table class="table-app"> 
			
					<thead> 
						<th>AMENITIES</th>
						<th>PRICE</th>
						
					</thead>
					<tbody> 
					<?php
			          $sql = "SELECT ID, accomodation, notes FROM tbl_price WHERE category ='other'";
			          $result = $conn->query($sql);

			          if ($result->num_rows > 0) {
			          // output data of each row
			          while($row = $result->fetch_assoc()) {
			          ?>
			            <tr data-toggle="modal" data-target="#accomodationDetails" class="Amm"> <!-- class="othereventModal" -->
			              <td style="display:none;"><?php echo "".$row['ID']?></td>
			              <td data-label="Accomodation"><?php echo "".$row['accomodation']?></td>
			              <td data-label="Price"><?php echo "".$row['notes']?></td>
			              
			              
			              
			             </tr>
			          <?php
			          }
			          } else {
			          echo "0 results";
			          }


			          ?>
					

			       </tbody>
				</table>
		
			</div>
			<div class="container is-widescreen " style="margin-bottom:70px" data-aos="fade-right">
			  <div class="columns is-multiline">
			    <div class="column">
			      	<img class="img-fluid img-thumbnail" id="img"  src="style/tent_.jpg" />
			    </div>
			     <div class="column">
			    	<img class="img-fluid img-thumbnail" id="img"  src="style/kawa.jpg" />
			    </div>
			    <div class="column">
			     	<img class="img-fluid img-thumbnail" id="img"  src="style/pool_.jpg" />
			    </div>
			    <div class="column">
			    	<img class="img-fluid img-thumbnail" id="img"  src="style/bonfire_.jpg" />
			    </div>
			    
			  </div>
			</div>

		</div>
		<div class="container is-widescreen" style="margin-bottom: 50px;">
			<h1 id="main"style="font-size: 2em; text-align: center; margin-bottom:20px;">RULES & REGULATION</h1>
		  <div class="columns is-multiline">
		    <div class="column is-4" style="padding:10px">
		    	<h2  style="text-align:left;">Camp Rules</h2>
				<ul>
					<?php
		              $sql = "SELECT * FROM tbl_rules WHERE Category= 'Overnight'";
		              $result = $conn->query($sql);

		              if ($result->num_rows > 0) {
		                // output data of each row
		                while($row = $result->fetch_assoc()) {
		                  ?>
		                    <li  class="rules"> <!-- class="rulesAdd" -->
		                      <i class="fas fa-angle-right" style="float:left" id="i"></i>
		                        &nbsp; <?php echo "".$row['rules']?>
		                       
		                    </li>
		                   

		                  <?php 
		                  
		                }
		              }else{
		                ?>
		                <li  class="rules"> <!-- class="rulesAdd" -->
		                      <i class="fas fa-angle-right" style="float:left" id="i"></i>
		                       <p> <?php echo "No Rules Set"; ?></p>
		                      
		                    </li>
		                <?php
		              }
		            ?>

				</ul>
		    </div>
		    <div class="column is-4" style=" padding:10px">
		    	<h2 style="text-align:left;">Notes for Day Tour</h2>

				<ul>
					<?php
		              $sql = "SELECT * FROM tbl_rules WHERE Category= 'Day Tour'";
		              $result = $conn->query($sql);

		              if ($result->num_rows > 0) {
		                // output data of each row
		                while($row = $result->fetch_assoc()) {
		                  ?>
		                    <li  class="rules">
		                      <i class="fas fa-angle-right" style="float:left" id="i"></i>
		                       &nbsp;  <?php echo "".$row['rules']?>
		                       


		                    </li>
		                   

		                  <?php 
		                  
		                }
		              }else{
		                echo "0 results";
		              }
		            ?>
		
				</ul>
		    </div>
		    <div class="column is-4" style=" padding:10px" >
		    	<h2 style="text-align:left;">FAQ's</h2>

				<ul>	
					<?php
		              $sql = "SELECT * FROM tbl_rules WHERE Category= 'FAQs'";
		              $result = $conn->query($sql);

		              if ($result->num_rows > 0) {
		                // output data of each row
		                while($row = $result->fetch_assoc()) {
		                  ?>
		                    <li  class="rules">
		                      <i class="fas fa-angle-right" style="float:left" id="i"></i>
		                       &nbsp; <?php echo "".$row['rules']?>
		                      
		                    </li>
		                   

		                  <?php 
		                  
		                }
		              }else{
		                echo "0 results";
		              }
		            ?>
					
					
				</ul>
		    </div>

		  </div>
		</div>

		</center>
	</div>
<!--  END OF body--->

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


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="clickCounter.js"></script>
<script>
  AOS.init(
  	  {
   offset:200,
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


