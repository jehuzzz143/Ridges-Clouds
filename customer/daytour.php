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
         
        
        }elseif (!isset($_SESSION['daytouractive']) || $_SESSION['daytouractive'] !== true) {
           $_SESSION['daytourdate'] = "";
           $_SESSION['daytourtime'] = "";
           $_SESSION['daytourpax'] =0;
           $_SESSION['pax_count']=0;
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
	<link rel="stylesheet" href="css/daytour.css">

    <!-- DATE PICKER -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!--   <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script> -->

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
   <!-- <li><a href="category.php">Book Now</a></li>  -->
     
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
// 
</script>
<script type="text/javascript">

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
    <div class="progress-bar">80%</div>
  </div>

  <div class="container is-desktop white-background" >
  	<div class="columns is-multiline">

      <div class="column is-full" >
        <label class="label" >Time of arrival:</label>
       <select name="daytourtime" id="datetime1" class="datetime1" onchange="time()"required>
                <option value="" selected>Select time</option>
                <option value="07:00 am to 10:00 am" <?php if($_SESSION['daytourtime']=='07:00 am to 10:00 am') echo "SELECTED"; ?>>7 am to 10 am</option>
                <option value="10:00 am to 13:00 pm" <?php if($_SESSION['daytourtime']=='10:00 am to 13:00 pm') echo "SELECTED"; ?>>10 am to 1 pm</option>
                <option value="13:00 pm to 16:00 pm" <?php if($_SESSION['daytourtime']=='13:00 pm to 16:00 pm') echo "SELECTED"; ?>>1 pm to 4 pm</option>
                <option value="16:00 pm to 19:00 pm" <?php if($_SESSION['daytourtime']=='16:00 pm to 19:00 pm') echo "SELECTED"; ?>>4 pm to 7 pm</option>
       </select>
        
      </div>
      
      <div class="column is-full">
        <label class="label" >Pax (₱200 each):</label>
        <select name="daytourpax" id="day" required> <!--value="<?php //echo"".$_SESSION['day'] ?>"  -->

   
        <option value="1"  id="1"<?php  if($_SESSION['daytourpax']==1) echo "SELECTED"; ?>>1</option>
        <option value="2"  id="2"<?php  if($_SESSION['daytourpax']==2) echo "SELECTED"; ?>>2</option>
        <option value="3"  id="3"<?php  if($_SESSION['daytourpax']==3) echo "SELECTED"; ?>>3</option>
        <option value="4"  id="4"<?php  if($_SESSION['daytourpax']==4) echo "SELECTED"; ?>>4</option>
        <option value="5"  id="5"<?php  if($_SESSION['daytourpax']==5) echo "SELECTED"; ?>>5</option>
        <option value="6"  id="6"<?php  if($_SESSION['daytourpax']==6) echo "SELECTED"; ?>>6</option>
        <option value="7"  id="7"<?php  if($_SESSION['daytourpax']==7) echo "SELECTED"; ?>>7</option>
        <option value="8"  id="8"<?php  if($_SESSION['daytourpax']==8) echo "SELECTED"; ?>>8</option>
        <option value="9"  id="9"<?php  if($_SESSION['daytourpax']==9) echo "SELECTED"; ?>>9</option>
        <option value="10" id="10"<?php if($_SESSION['daytourpax']==10) echo "SELECTED"; ?>>10</option>
        <option value="11" id="11"<?php if($_SESSION['daytourpax']==12) echo "SELECTED"; ?>>11</option>
        <option value="12" id="12"<?php if($_SESSION['daytourpax']==12) echo "SELECTED"; ?>>12</option>
        <option value="13" id="13"<?php if($_SESSION['daytourpax']==13) echo "SELECTED"; ?>>13</option>
        <option value="14" id="14"<?php if($_SESSION['daytourpax']==14) echo "SELECTED"; ?>>14</option>
        <option value="15" id="15"<?php if($_SESSION['daytourpax']==15) echo "SELECTED"; ?>>15</option>
        <option value="16" id="16"<?php if($_SESSION['daytourpax']==16) echo "SELECTED"; ?>>16</option>
        <option value="17" id="17"<?php if($_SESSION['daytourpax']==17) echo "SELECTED"; ?>>17</option>
        <option value="18" id="18"<?php if($_SESSION['daytourpax']==18) echo "SELECTED"; ?>>18</option>
        <option value="19" id="19"<?php if($_SESSION['daytourpax']==19) echo "SELECTED"; ?>>19</option>
        <option value="20" id="20"<?php if($_SESSION['daytourpax']==20) echo "SELECTED"; ?>>20</option>
       
      
      </select>
        
      </div>

      

      <div class="column is-full">
        <label class="label" >Pick Date:</label>
        <input type="text" readonly id="datepicker" name="daytourdate" value="<?php echo"".$_SESSION['daytourdate'] ?>" required placeholder="mm/dd/yyyy">
        <center>
        <p><small style="font-size:13px;"><i>The disabled day is completely booked, This is dependent on the time frame chosen.</i></small></p>
        </center>
        <!-- <input type="date" id="txtDate" name="daytourdate" value="<?php echo"".$_SESSION['daytourdate'] ?>" required> -->
      </div>
    <!--   <div class="column is-full"> 
        <button class="no-button" name="check" type="submit"> Check Availability</button>
      </div> -->
      <div class="column is-full">
        <button class="button-to-anchor" type="submit" name="category">
         <a href="category.php" >
             <i class="fas fa-arrow-left"></i> Category
          </a>
        </button>

        <?php 
          if($_SESSION['pax_count']!= 0 ){
            ?>
            <button class="button-to-anchor1" name="next" type="submit" id="next" > Next <i class="fas fa-arrow-right"></i></button>

            <?php
          }else{
            ?>
            <button class="button-to-anchor1" name="next" type="submit" id="next" > Next <i class="fas fa-arrow-right"></i></button>

            <?php
          }
        ?>
         
      </div>

    </div>
  
  	<div id="result"></div>
  </div>
</div>
</form>

<!-- paralax end -->

<!-- PRACTICE -->
<script type="text/javascript">
  function time(){

    var time_value = document.getElementById("datetime1").value;
    console.log(time_value);

 

    if(time_value == '07:00 am to 10:00 am'){
      document.getElementById("6").style.display = "none";
      document.getElementById("7").style.display = "none";
      document.getElementById("8").style.display = "none";
      document.getElementById("9").style.display = "none";
      document.getElementById("10").style.display = "none";
      document.getElementById("11").style.display = "none";
      document.getElementById("12").style.display = "none";
      document.getElementById("13").style.display = "none";
      document.getElementById("14").style.display = "none";
      document.getElementById("15").style.display = "none";
      document.getElementById("16").style.display = "none";
      document.getElementById("17").style.display = "none";
      document.getElementById("18").style.display = "none";
      document.getElementById("19").style.display = "none";
      document.getElementById("20").style.display = "none";

    }else if(time_value ='10:00 am to 13:00 pm'){
      document.getElementById("6").style.display = "block";
      document.getElementById("7").style.display = "block";
      document.getElementById("8").style.display = "block";
      document.getElementById("9").style.display = "block";
      document.getElementById("10").style.display = "block";
      document.getElementById("11").style.display = "none";
      document.getElementById("11").style.display = "none";
      document.getElementById("12").style.display = "none";
      document.getElementById("13").style.display = "none";
      document.getElementById("14").style.display = "none";
      document.getElementById("15").style.display = "none";
      document.getElementById("16").style.display = "none";
      document.getElementById("17").style.display = "none";
      document.getElementById("18").style.display = "none";
      document.getElementById("19").style.display = "none";
      document.getElementById("20").style.display = "none";

    }else if(time_value ='13:00 pm to 16:00 pm'){

      document.getElementById("6").style.display = "block";
      document.getElementById("7").style.display = "block";
      document.getElementById("8").style.display = "block";
      document.getElementById("9").style.display = "block";
      document.getElementById("10").style.display = "block";
      document.getElementById("11").style.display = "block";
      document.getElementById("11").style.display = "block";
      document.getElementById("12").style.display = "block";
      document.getElementById("13").style.display = "block";
      document.getElementById("14").style.display = "block";
      document.getElementById("15").style.display = "block";
      document.getElementById("16").style.display = "none";
      document.getElementById("17").style.display = "none";
      document.getElementById("18").style.display = "none";
      document.getElementById("19").style.display = "none";
      document.getElementById("20").style.display = "none";

    }else{

      document.getElementById("6").style.display = "block";
      document.getElementById("7").style.display = "block";
      document.getElementById("8").style.display = "block";
      document.getElementById("9").style.display = "block";
      document.getElementById("10").style.display = "block";
      document.getElementById("11").style.display = "block";
      document.getElementById("12").style.display = "block";
      document.getElementById("13").style.display = "block";
      document.getElementById("14").style.display = "block";
      document.getElementById("15").style.display = "block";
      document.getElementById("16").style.display = "block";
      document.getElementById("17").style.display = "block";
      document.getElementById("18").style.display = "block";
      document.getElementById("19").style.display = "block";
      document.getElementById("20").style.display = "block";

    }
  
     $.post('readJson.php',{valuetime:time_value},
    function(data1){
      $('#result').html(data1)
    });
  }
</script>

<?php

    // $datesBooked = array();
    // $dates = "";

    // $sql = "SELECT `btype`,`bdate`,SUM(`bpax`) as 'TOTAL PAX' FROM `tbl_booking` WHERE `btype` = 'Daytour' GROUP BY `bdate`";
    // $result = $conn->query($sql);
    // if ($result->num_rows > 0) {

    //   while($row = $result->fetch_assoc()) {
    //      if($row['TOTAL PAX']==30){
    //       $dates = (string)$row['bdate'];

    //     array_push($datesBooked,$dates);
    //     }      
    //   }
    // }   



?>




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




<?php
  include  'scrollup.php';

?>

</body>
</html>
<?php 
if($_SESSION['time_value_compare']!= null OR $_SESSION['time_value_compare'] = ""){

        $datesBooked = array();
        $dates = "";
        $sql = "SELECT `btype`,`bdate`,SUM(`bpax`) as 'TOTAL PAX' FROM `tbl_booking` WHERE `btype` = 'Daytour' AND `bdaytourtime` = '{$_SESSION['time_value_compare']}' AND (`bstatus` = 'Pending' OR `bstatus` = 'Confirmed') GROUP BY `bdate`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
             if($row['TOTAL PAX']==30){
              $dates = (string)$row['bdate'];

            array_push($datesBooked,$dates);
            }      
          }
        } 

        ?>

<script type="text/javascript"> 
  <?php

    $js_array = json_encode($datesBooked);
    echo "var javascript_array = ". $js_array . ";\n";

  ?>
console.log(javascript_array);

var date = new Date();
var currentMonth = date.getMonth();
var currentDate = date.getDate();
var currentYear = date.getFullYear();



$("#datepicker").datepicker({

     minDate: 0,
     beforeShowDay: function(date){     
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [ javascript_array.indexOf(string) == -1 ]
        }
});



    $(function () {
        $("#datepicker").datepicker({

           
        beforeShowDay: function(date){     
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [ javascript_array.indexOf(string) == -1 ]
        }

        });
    });
</script>
<?php

    }


?>
<?php
if(isset($_POST['check'])){
  // $_SESSION['daytourpax'] =$_POST['daytourpax'];
  // $_SESSION['daytourprice'] = $_POST['daytourpax'] * 200;
  // $_SESSION['daytourdate'] = $_POST['daytourdate'];
  // $_SESSION['daytourtime'] = $_POST['daytourtime'];
  // $_SESSION['daytouractive'] = true;
  // $day_tour_date = $_POST['daytourdate'];
  // $day_tour_time = $_POST['daytourtime'];
  // $day_tour_pax = $_POST['daytourpax'];

  // // SELECT * FROM tbl_booking WHERE `bdate` = '2021-09-16' AND `bdaytourtime`  = '07:00 am to 10:00 am'  
  // $sql = "SELECT * FROM tbl_booking WHERE bdate = '$day_tour_date' AND bdaytourtime LIKE '%$day_tour_time%'";
  // $result = $conn->query($sql);

  // if ($result->num_rows > 0) {
  //   // output data of each row
  //   while($row = $result->fetch_assoc()) {
  //     $paxcount += $row['bpax']; 
      
  //   }
  // } else {
    
  // }
  //   $paxcount += $day_tour_pax;
  
  // if($paxcount <= 30){
  //   $_SESSION['pax_count'] = $paxcount;
  //   $available_slot =  30 - $paxcount ;

  
  //   ?>
     
  //   <?php
  // }else{
 
  
   
   
  //   $_SESSION['pax_count'] = 0;
  // }  
 
	echo("<meta http-equiv='refresh' content='2'>");

}else if(isset($_POST['next'])){
    $_SESSION['daytourpax'] =$_POST['daytourpax'];
  $_SESSION['daytourprice'] = $_POST['daytourpax'] * 200;
  $_SESSION['daytourdate'] = $_POST['daytourdate'];
  $_SESSION['daytourtime'] = $_POST['daytourtime'];
  $_SESSION['daytouractive'] = true;
  $day_tour_date = $_POST['daytourdate'];
  $day_tour_time = $_POST['daytourtime'];
  $day_tour_pax = $_POST['daytourpax'];




  // SELECT * FROM tbl_booking WHERE `bdate` = '2021-09-16' AND `bdaytourtime`  = '07:00 am to 10:00 am'  
  $sql = "SELECT * FROM tbl_booking WHERE bdate = '$day_tour_date' AND bdaytourtime LIKE '%$day_tour_time%'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $paxcount += $row['bpax']; 
      
    }
  } else {
    
  }
    $paxcount += $day_tour_pax;
  
  if($paxcount <= 30){
    $_SESSION['pax_count'] = $paxcount;
    $available_slot =  30 - $paxcount ;

  
    ?>
     
    <?php
  }else{
 
  
   
   
    $_SESSION['pax_count'] = 0;
  }  




   $_SESSION['daytourpax'] =$_POST['daytourpax'];
  $_SESSION['daytourprice'] = $_POST['daytourpax'] * 200;
  $_SESSION['daytourdate'] = $_POST['daytourdate'];
  $_SESSION['daytourtime'] = $_POST['daytourtime'];
  $_SESSION['daytouractive'] = true;




    ?>
    <script type="text/javascript">location.href = 'daytourbill.php';</script>
    <?php 

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
}else if(isset($_POST['category'])){
  ?>

 <script type="text/javascript">location.href = 'category.php';</script>
<?php
}
?>
