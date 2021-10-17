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
        if($_SESSION['dateactive'] !==true){

        	$start ="";
        	$end   ="";
        	$_SESSION['date']="";
        	$_SESSION['day']=1;
          $_SESSION['check']=0;

        }else{
        	$start =$_SESSION['start'];
        	$end   =$_SESSION['end'];
        			
	 

        }
     }



?>
<html>
<head>

	<title> booking</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">



	<!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="css/datepicker.css">

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

    var maxDate2="";
    var minus ="";
    var year1= year;
    
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();  
    var maxDate = year + '-' + month + '-' + day;
    $('#txtDate').attr('min', maxDate);
    var monthend = month+5;
    if(monthend > 12){
       year1 = year1 +1;
       var minus = monthend - 12;
       if(minus<10){
        var monthmonthend = '0'+minus    
       }
       maxDate2 = year1 + '-' + monthmonthend + '-' + day;
    }else{
       maxDate2 = year1 + '-' + monthend + '-' + day;
    }
   
 
    
   
    
    $('#txtDate').attr('max', maxDate2);
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
<div class="container is-fluid" id="parallax" style="height:100%;">
    <div class="container is-desktop bar">
    <div class="progress-bar">20%</div>
  </div>
  <div class="container is-desktop white-background">
  	<div class="columns is-desktop is-multiline" style="margin:0;padding:0;">
  		<div class="column is-full" >
  			<label class="label" >Pick Date:</label>
  			<input type="date" id="txtDate" name="date" value="<?php echo"".$_SESSION['date'] ?>" required>
  		</div>
  		<div class="column is-full">
  			<label  class="label">No. of Days:</label>
  			<select name="day" id="day" value="<?php echo"".$_SESSION['day'] ?>">

			  <option value="1" <?php if($_SESSION['day']==1) echo "SELECTED"; ?>>1</option>
			  <option value="2" <?php if($_SESSION['day']==2) echo "SELECTED"; ?>>2</option>
			  <option value="3" <?php if($_SESSION['day']==3) echo "SELECTED"; ?>>3</option>
			  <option value="4" <?php if($_SESSION['day']==4) echo "SELECTED"; ?>>4</option>
			  <option value="5" <?php if($_SESSION['day']==5) echo "SELECTED"; ?>>5</option>
			  <option value="6" <?php if($_SESSION['day']==6) echo "SELECTED"; ?>>6</option>
			  <option value="7" <?php if($_SESSION['day']==7) echo "SELECTED"; ?>>7</option>
			  <option value="8" <?php if($_SESSION['day']==8) echo "SELECTED"; ?>>8</option>
			  <option value="9" <?php if($_SESSION['day']==9) echo "SELECTED"; ?>>9</option>
			  <option value="10"<?php if($_SESSION['day']==10) echo "SELECTED"; ?>>10</option>
			  <option value="11"<?php if($_SESSION['day']==11) echo "SELECTED"; ?>>11</option>
			  <option value="12"<?php if($_SESSION['day']==12) echo "SELECTED"; ?>>12</option>
			  <option value="13"<?php if($_SESSION['day']==13) echo "SELECTED"; ?>>13</option>
			  <option value="14"<?php if($_SESSION['day']==14) echo "SELECTED"; ?>>14</option>
			  <option value="15"<?php if($_SESSION['day']==15) echo "SELECTED"; ?>>15</option>
			 
			</select>
  		</div>
  		<div class="column is-full">
  			<label class="label">Time in:</label>
  			<input type="datetime-local" readonly  name="start" value="<?php echo"".$start ?>">
  			
  		</div>
  		<div class="column is-full">
  			<label class="label">Time out:</label>
  			<input type="datetime-local" readonly  name="end" value="<?php echo"".$end ?>">
  			
  		</div>
      <div class="column is-full">
        <button class="no-button"type="submit"name="date-check" id="date-check" ><i class="fas fa-calendar-day"></i> Confirm Date </button>
      </div>

      <div class="column is-full">   
        <button class="button-to-anchor">
          <a href="category.php" >
            <i class="fas fa-arrow-left"></i> Category
          </a> 
        </button> 
         <?php 
          if($_SESSION['check']!= 0 ){
            ?>
              <button class="button-to-anchor1">  
                <a href="roompicker.php"> Rooms <i class="fas fa-arrow-right"></i></a>
              </button>
            <?php
          }else{
            ?>
              <button class="button-to-anchor1" style="background-color:grey;">  
                <a href="#" alt="Click Confirm Date First."> Rooms <i class="fas fa-arrow-right"></i></a>
              </button>

            <?php
          }
        ?>
       
      </div>
  		
  	</div>
  	
  	
  </div>
  
  
</div>
</form>

<!-- paralax end -->







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
  	<h1>Step by Step Booking <span class="close">&times;</span></h1>
    <hr>
    <p><b>Step 1: </b> Create an Account</p>
    <p><b>Step 2: </b> Login the Account</p>
    <p><b style=" text-decoration:underline; color:red;">Step 3:</b>  Choose Date</p>
    <p><b>Step 4: </b> Submit the Booking Request</p>
    <p><b>Step 5: </b> Pay 50% of Booking Cost</p>
    <p><b>Step 6: </b> Wait for the SMS Confirmation of Booking</p>
    <p><b>Step 7: </b> After Receving a text, Print the Booking Receipt Under Account Profile and present it to the camp</p>
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





</body>
</html>
<?php
if(isset($_POST['date-check'])){
	$date 	=$_POST['date'];
	$day 	=$_POST['day'];
	$start  =$_POST['date'];
  $date1   =$_POST['date'];

	
	$date = new DateTime($date);
	$date->modify('+'.$day.' day');
	$end = $date->format('Y-m-d');

	


	
	if($date == ""){
		
	}else{

    $sql = "SELECT * FROM tbl_price WHERE category = 'room' and imagename != '' ORDER BY imagename";
    $result = $conn->query($sql);
    $roomcount = mysqli_num_rows($result);
    // echo '<script type="text/javascript">alert("'.$roomcount.'")</script>';
    $count = 1;
    $compare_all_room="";
    for ($x = 1; $x <= $roomcount; $x++) {
      $compare_all_room .= " || C".$x." ";
    }

     // echo '<script type="text/javascript">alert("'.$compare_all_room.'")</script>';
     $sql1 = "SELECT * FROM tbl_booking where bdate = '$date1'";
     $result1 = $conn->query($sql1);


     if ($result1->num_rows > 0) {
      
       // output data of each row
       while($row1 = $result1->fetch_assoc()) {
        if(strstr($row1['broom'], $compare_all_room)){
           
         
           echo '<script type="text/javascript"> Swal.fire({
              icon: "error",
              title: "Oopss this date is fully Booked",
              text: "Try to select different date"
             
            })</script>';
          exit();
        }
        
       }
     } else {
         echo '<script type="text/javascript">Swal.fire({
              icon: "success",
              title: "Date Available",
             
             
            });</script>';
    
   
     }
     echo '<script type="text/javascript">Swal.fire({
              icon: "success",
              title: "Date Available",
             
             
            });</script>';
    
		 echo("<meta http-equiv='refresh' content='1'>");	
		$_SESSION['dateactive'] =   true;
		$_SESSION['start']		=	$start.'T14:00';
		$_SESSION['end']  		=   $end.'T12:00';
		$_SESSION['date'] 		=   $_POST['date'];
		$_SESSION['day'] 		=   $_POST['day'];
    $_SESSION['check']= 1; 
  //   // 


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
