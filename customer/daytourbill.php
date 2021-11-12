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
                $fullname = $rowedit['Userfname']. " ".$rowedit['Userlname'];

            }
       if(!isset($_SESSION['daytouractive']) || $_SESSION['daytouractive'] !== true){

          

             echo '<script type="text/javascript">alert("Please fill up the first form")</script>';
             header("refresh:0; daytour.php");
       
         

        }else if(!isset($_SESSION['couponactive']) || $_SESSION['couponactive'] !== true){
            $_SESSION['couponactive'] = false;
            $_SESSION['promo_id'] = NULL;

          
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
	<link rel="stylesheet" href="css/bill.css">

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
<div class="container is-fluid" id="parallax" style="height:100%;">
  <div class="container is-desktop bar">
    <div class="progress-bar">100%</div>
  </div>
  <div class="container is-desktop white-background" style="border-radius: 8px;">

  
        <table class="styled-table" id="bookingtable">
          <thead>
            <tr >
              <th colspan=3 style="text-align: center;font-size:1.3em;    border-radius: 8px 8px 0px 0px;">BOOKING INFORMATION</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Booking Category: </th>
              <td colspan=2><input type="text" readonly name="category" value="<?php echo"".$_SESSION['choice']; ?>"></td>
              
            </tr>
             <tr>
              <th> Date: </th>
              <!--  -->
              <td colspan=2><input type="text" readonly name="roomcode" value="<?php echo"".date('F jS, Y ', strtotime ($_SESSION['daytourdate'])); ?>"></td>
            
            </tr>
            <tr>
              <th>Visitor Time In & Out: </th>
              <td  colspan=2><input type="text" readonly name="roomname" value="<?php echo"".$_SESSION['daytourtime']; ?>"></td>
            
            </tr>
            <tr>
              <th>Visitor Pax: </th>
              <td  colspan=2><input type="text" readonly name="roomcode" value="<?php echo"".$_SESSION['daytourpax']; ?>"></td>
            
            </tr>
            <?php
            if($_SESSION['couponactive'] == true){
              ?>
              <thead>
                <tr>
                  <th colspan=3 style="text-align: center;font-size:1.3em;">COUPON APPLIED</th>
                </tr>
              </thead>
              <tr>
                 <th>Booking Price: </th>
                 <td></td>
                <td>
                  <input type="text" value="<?php echo "".$_SESSION['booking_price'];?>">
                  </td>
              </tr>
              <tr>
                <th>Discounted Fee: </th>
                 <td><?php echo"".$_SESSION['discount'];?></td>
                <td>
                  <input type="text" value="<?php echo "".$_SESSION['discounted_fee'];?>" >
                  </td>
              </tr>
              <tr>
                <th>Total Price: </th>
                 <td></td>
                <td style="font-size: 1.3em;font-weight: bold;"><input type="text" readonly name="roomprice"value="<?php echo"".$_SESSION['daytourprice'];?>"></td>
               
              </tr>
              <?php
            }else{
              ?>
              <tr>
                <th>Total Price: </th>
                 <td></td>
                <td style="background-color:#EEEEEE;font-size: 1.3em;ont-weight: bold;"><input type="text" readonly name="roomprice" value="<?php echo"".$_SESSION['daytourprice'];?>" ></td>
               
              </tr>

              <?php
            }
            ?>
                <!-- PROMO CODE -->
    <?php if($_SESSION['couponactive'] == false){
      ?>
      <tr id="promocontainer">
        <th>
            <p class="coupon-f">Coupon Code:</p>
        </th>
        <td>
            <input type="text" class="coupon" name="coupon" placeholder="...." style="background-color: white;"> </input>
        </td>
        <td>
            <button type="submit" name="coupon_apply" class="button-to-apply buttonNav">
                       Apply
            </button>
        </td>
    </tr>
      <?php
    }else{
      ?>
      <tr>
        <th></th>
        <td>
          <center>
          <button class="buttonRemove-cop" name="remove_coupon" type="submit">Remove Coupon</button> 
          </center> 
        </td>
      </tr>
     
      <?php
    }
    ?>
            
             
          
          </tbody>

        </table>
        <input type="hidden" name="promo_id" value="<?php echo"".$_SESSION['promo_id'];?>">
      <?php
   ?>
   




    <!-- tooltip -->
    <div class="column is-full" style="text-align: center; display: inline-block;">
    
     <input class="inp-cbx" id="cbx" type="checkbox"   name="terms" value="agree"
     style=" opacity: 0; position:absolute; margin-left:6px;margin-top:11px;"
     />
      <label class="cbx" for="cbx" >
        <span>
          <svg width="12px" height="9px" viewbox="0 0 12 9">
            <polyline points="1 5 4 8 11 1"></polyline>
          </svg>
        </span>
<span>
     <p data-tooltip="------------------------------- RESERVATION POLICIES ---------------------------------
     &#10148; First come first served on reservations on overnight accommodation.
     &#10148;  50% downpayment  on total accommodation rate upon reservation  
    thru GCASH.
------------------------ CANCELLATION/REBOOKING POLICIES -----------------------
     &#10148;50% refund of DP or free rebooking if cancelled/rebooked within 7 days 
     from the day of booking. In case of typhoon and other natural calamities on the
     date of visit.
     &#10148; Forfeiture of DP if cancelled/rebooked 1 day before and no show on the date
     of visit.
------------------------- OPEN DATE REBOOKING POLICIES ---------------------------
      &#10148; Guests may rebook to an open date and put their DP as Booking Fund.
      &#10148; Subject to respective fees above.
     "
     data-tooltip-location="center"
     style="display: inline-block;"
     >
          Booking Terms and Condition
    </p>
  
</span>
        
      </label>
 
    </div>



     <!--  -->
  	<div class="columns is-desktop" style="padding:10px;">

  		<div class="column ">
        <button type="submit" name="back" class="button-to-anchor1">
            <a href="daytour.php" >
              <i class="fas fa-arrow-left"></i> Back
            </a>
        </button>
      
      
          

  			

  	   	<button class="button-to-anchor" name="daytoursubmit" type="submit"> Finish <i class="fas fa-arrow-right"></i></button>
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


<?php
  include  'scrollup.php';



?>


</body>
</html>
<?php
if(isset($_POST['homelogout'])){

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
}else if(isset($_POST['daytoursubmit'])){
  $term = $_POST['terms'];
  $nopeople = $_SESSION['daytourpax'];
  $type = $_SESSION['choice'];
  $date = $_SESSION['daytourdate'];
  $date = date('Y-m-d', strtotime($date));
  $time = $_SESSION['daytourtime'];
  $price = $_SESSION['daytourprice'];
  $promo_id = $_POST['promo_id'];

  $timein = date("Y-m-d H:m:s", strtotime($date.substr($time,0,5)));
  $timeout = date("Y-m-d H:m:s", strtotime($date.substr($time,11,6)));
  
 if($term != 'agree'){
  ?>
  <script type="text/javascript">
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Agree with the term and condition first before proceed to payments',

  })
  </script>

  <?php

 }else{



  if($promo_id == ""){
     $sql = "INSERT INTO tbl_booking (customerID, bpax, bname, btype, bdate, bdaytourtime, bprice,balance, bstatus, btime_in, btime_out)
  VALUES ('$customerID', $nopeople, '$fullname', '$type', '$date', '$time' ,$price, $price, 'Pending', '$timein', '$timeout')";
  }else{
     $sql = "INSERT INTO tbl_booking (customerID, bpax, bname, btype, bdate, bdaytourtime, bprice,balance, bstatus, btime_in, btime_out,promo_id)
  VALUES ('$customerID', $nopeople, '$fullname', '$type', '$date', '$time' ,$price, $price, 'Pending', '$timein', '$timeout','$promo_id')";
  }
 
  if ($conn->query($sql) === TRUE) {
  $_SESSION['categoryactive']= false;
  //echo '<script type="text/javascript">alert("' . $timein . '")</script>';

    
      $_SESSION['categoryactive']= false;
      $_SESSION['daytouractive']= false;
      $_SESSION['couponactive']= false;
   
    ?>
      <script >
       
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Your Booking has been saved',
          showConfirmButton: false,
          timer: 1500
        })

       
      </script>
      <script type="text/javascript">
        setTimeout("location.href = '../user.php';",2000);
      </script>
      
    <?php

  }else{
    ?>
    <script >
        
        alert("Something went wrong!");
      </script>

    <?php


    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}else if(isset($_POST['coupon_apply'])){


$coupon = $_POST['coupon'];

$sql = "SELECT * FROM tbl_promo WHERE promo_status ='active' AND promo_code = '$coupon' AND (promo_bookingtype ='Daytour' OR promo_bookingtype ='Both')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      ?>
<script type="text/javascript">
  Swal.fire({

          icon: 'success', 
          text: 'Coupon Successfully applied',
          confirmButtonColor:'#3085d6',
          confirmButtonText: 'OK'
          
        }).then((result) => {
        if (result.isConfirmed) {


          location.href = 'daytourbill.php';
          
        }
      })
</script>
      <?php
      $_SESSION['promo_id'] = $row['promo_id'];
      $_SESSION['couponactive']= true;
      $_SESSION['booking_price'] = $_SESSION['daytourprice'];
      if($row['promo_value_type']== 'OFF'){
        $_SESSION['discount'] = $row['promo_value'].' '.$row['promo_value_type'];

        $_SESSION['daytourprice'] = $_SESSION['daytourprice'] - $row['promo_value'];
        $_SESSION['discounted_fee'] = $row['promo_value'];
      }else{
        $_SESSION['discount'] = $row['promo_value'].' '.$row['promo_value_type'];

        $discounted_value = $_SESSION['daytourprice'] * ($row['promo_value'] / 100);
        $_SESSION['discounted_fee'] = $discounted_value;
        $_SESSION['daytourprice'] = $_SESSION['daytourprice'] - $discounted_value;
      }
      

      $count = $row['promo_count'] -1;
      $sql = "UPDATE tbl_promo SET promo_count= $count";
      $conn->query($sql);



  }
} else {
  ?>
<script type="text/javascript">
  Swal.fire({

          icon: 'error', 
          text: 'Invalid Coupon Discount',
          confirmButtonColor:'#3085d6',
          confirmButtonText: 'OK'
          
        }).then((result) => {
        if (result.isConfirmed) {


          location.href = 'daytourbill.php';
          
        }
      })
</script>
  <?php
}



}else if(isset($_POST['remove_coupon'])){
  $coupon = $_SESSION['promo_id'];

  $sql = "SELECT * FROM tbl_promo WHERE promo_id = '$id'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     $count = $row['promo_count'] +1;
      $sql = "UPDATE tbl_promo SET promo_count= $count";
      $conn->query($sql);
    }
  }

  $_SESSION['couponactive']= false;
  $_SESSION['promo_id'] = "";
  $_SESSION['daytourprice'] = $_SESSION['booking_price'];
  ?>
<script type="text/javascript">
  Swal.fire({

          icon: 'success', 
          text: 'Coupon Removed',
          confirmButtonColor:'#3085d6',
          confirmButtonText: 'OK'
          
        }).then((result) => {
        if (result.isConfirmed) {


          location.href = 'daytourbill.php';
          
        }
      })
</script>
  <?php

 

}else if(isset($_POST['back'])){
   ?>
  <script type="text/javascript">location.href = 'daytour.php';</script>
  <?php
}


?>
