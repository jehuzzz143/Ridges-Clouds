<?php
include "dbconnection/conn.php";



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

     $sql = "SELECT * from tbl_user WHERE Usertype = 1 AND ID = '$cID' ";

$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
if($row['Userimage']==''){
  $path = 'customer/profilepicture/noprofile.jpg';
}else{
  $path = 'customer/profilepicture/'.$row['Userimage']; 
}

?>
<!doctype html>
<html lang="en">
<head>
	<title> Profile</title>
  <link rel="icon" href="style/images/woodsign_bliog.png">
	 <!-- Required meta tags -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--CSS -->
	<link rel="stylesheet" type="text/css" href="style/profile.css">

  <!-- AOS animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- fontawSome -->
  <script src="https://kit.fontawesome.com/70127cec04.js" crossorigin="anonymous"></script>
<!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  
</head>
<body>
<!-- Navbar    -->
<form method="POST">
<nav>
  <input id="nav-toggle" type="checkbox">
  <div class="logo"><img src="style/images/ridges_banner.png" style="width: 100%; height: 100%; object-fit: contain;"></img></div>
  <ul class="links">
    <li><a href="index.php">Home</a></li>
    <li><a href="Pricing.php">Pricing</a></li>
    <li><a href="Gallery.php">Gallery</a></li>
    <li><a href="About_Us.php">About Us</a></li>
    
    <?php
    if ($active == ""){
    ?> 
      <li><a href="login.php">Book Now</a></li>
    <?php
    }else{
    ?>
       <li ><a href="customer/category.php" >Book Now</a></li> 
     
    <li >
      <a style="padding: 0px;"><button class="nav-button" type="submit" name="homeprofile" style="color:black;">Account  <i class="fas fa-user-circle"></i></button></a>
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


<!-- -->


<!-- profile --> 
<div class="container is-widescreen user-container">
  <div class="columns is-widescreen is-gapless">
    <div class="column is-4">
      <div class="icon-container">
        <img src="<?php echo"".$path ?>" alt="Profile Picture">
      </div>
    </div>

    <div class="column"> 
      <div class=" columns is-gapless is-multiline info">
        <div class="column is-full" style="border-bottom: 1px solid;">
          <h1>INFORMATION</h1>
        </div>
        <div class="column">
          <h2>Name</h2>
          <h3><?php echo "".$row['Userfname']." ".$row['Userlname']?></h3>
          <h2>Email</h2>
          <h3><?php echo "".$row['Useremail']?></h3>
          <h2>Birthdate</h2>
          <h3><?php echo "".$row['Userbday']?></h3>
        </div>
        <div class="column">
          <h2>Phone Number</h2>
          <h3><?php echo "+".$row['Userpnumber']?></h3>
          <h2>Age</h2>
          <h3><?php echo "".$row['Userage']?></h3>
        </div>
        <div class="column is-full">
          <input type="button" value="Edit Info"  onclick="edit()"> </input>
        </div>
      </div>
    </div>

  </div> 
</div>
<!-- end profile --> 


<!-- form --> 
<form method="POST" id="signupform" enctype="multipart/form-data">
  <div class="container is-widescreen up-info up-close" id="updateinfo" >
    <div class="columns is-widescreen is-gaples is-multiline">
      <div class="column is-full" style="border-bottom: 1px solid;">
        <h1>Update Information <span class="close"style="float:right;"><i class="fas fa-window-close" ></i></span></h1>
       
      </div>
      <div class="column is-half">
        <h2>Firstname</h2>
        <input name="fname" type="text" value="<?php echo "".$row['Userfname']?>"> </input>
      </div>
      <div class="column is-half">
        <h2>Lastname</h2>
        <input name="lname" type="text" value="<?php echo "".$row['Userlname']?>"> </input>
      </div>
      <div class="column is-half">
        <div class="inputBox"> 
          <h2>Email</h2>
          <input name="email" id="email1" onkeyup="emailvalidation()"  type="text" value="<?php echo "".$row['Useremail']?>"> </input>
          <span id="textemail"></span>
        </div>
      </div>
      <div class="column is-half">
        <h2>Phone</h2>
        <div class="inputBox1">
        <input name="phone"type="text" id="pnumber" onkeyup="numbervalidation()"value="<?php echo "".$row['Userpnumber']?>"> </input>
        <span id="phonetext"></span>
        </div>
      </div>
      <div class="column is-half">
        <h2>Birthdate</h2>
        <input name="bdate" type="date" value="<?php echo "".$row['Userbday']?>"> </input>
      </div>
      <div class="column is-half">
        <h2>Update Photo</h2>
        <input name="photo" type="file" accept="image/*"> </input>
        <input name="oldphoto" value="<?php echo "".$row['Userimage'] ?>"type="hidden"> </input>
      </div>
      <div class="column is-half">
        <h2>Password</h2>
        <input name="pass"type="password" required> </input>
      </div>
      <div class="column is-half">
        <h2>New Password</h2>
        <input name="npass"type="password"> </input>
      </div>
      <div class="column is-full">  
        <input name="update" type="Submit" value="Confirm" style="width: 100px;"> </input>
      </div>
    </div>
  </div>
</form>
<!-- end form --> 

<!-- cancel modal-->

<div id="myModal" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content" style="width: 300px;">
    <span  class="close12">&times;</span>
    <form method="POST">
      <label>Appointment ID</label>   <input type="text" name="aid" id="aid" style="width:30%;height:30px;" />
      <hr>
      <p>You want to cancel this appointment?</p>
      <hr>

      
      <button type="submit" name="appCancel" style="float:right">Yes</button>

      <button type="button" onclick="appClose()" style="float:right;margin-right:5px;">    Cancel</button>  
    </form>
  </div>

</div>
<!-- end of cancel modal-->

<div class="container is-widescreen appointment-label">
  <h2>BOOKING LEGEND</h2> 
  <div class="columns">
    <div class="column">
      <h1>COLORS</h1>
      <ul>
        <li><div style="background-color:#D6EAF8;"> Appointment is done and Complete </div> </li>
        <li><div style="background-color:#EAFAF1;"> Appointment is Confirmed by admins </div> </li>
        <li><div style="background-color:#FDEDEC;"> Appointment is Decline or Abandoned</div> </li>
      </ul>
    </div>
    <div class="column">
      <h1>BUTTONS</h1>
      <ul>
        <li> 
          <div class="columns" style="background-color:#E9E9E9; margin:0;padding:0;">
            <div class="column is-one-fifth" style="margin:0;padding:0;">
              <div style="margin:0;padding:0;"> <button type='submit' class='action-btn refundBtn' style="margin:5%;" >   Rate </button> </div>
            </div>  
            <div class="column" style=" margin:0; padding-top:1.2%;">
              <small>Before the appointment is completed, you have 7 days to use it.</small>
            </div>  
          </div>
        </li>
        <li> 
          <div class="columns" style="background-color:#E9E9E9; margin:0;padding:0;">
            <div class="column is-one-fifth" style="margin:0;padding:0;">
              <div style="margin:0;padding:0;"> <button type='submit' class='action-btn refundBtn' style="margin:5%;;">   Resched </button> </div>
            </div>  
            <div class="column" style=" margin:0; padding-top:1.2%;">
              <small> After the appointment is made, You have 3 days to use it. </small>
            </div>  
          </div>
        </li>
        <li> 
          <div class="columns" style="background-color:#E9E9E9; margin:0;padding:0;">
            <div class="column is-one-fifth" style="margin:0;padding:0;">
              <div style="margin:0;padding:0;"> <button type='submit' class='action-btn refundBtn' style="margin:5%; ;">   Refund </button> </div>
            </div>  
            <div class="column"  style=" margin:0; padding-top:1.2%;">
              <small>After the appointment is made, You have 3 days to use it. </small>
            </div>  
          </div>
        </li>
        
             
        
      </ul>
    </div>

  </div>

 
   
  <br><br>

  <h1>MY APPOINTMENTS</h1> 
</div>

  <div class="column is-full" style="text-align:  center; z-index: 0;">

    <a href="" class="btn-explore button" data-tooltip="0917322445599">Gcash Number</a>

  </div>

<div class="" style="margin-bottom: 50px">
  <table class="table-app">
    <thead>
      <th>ID No.</th>
      <th>Type</th>
      <th>Date </th>
   
      <th>Room</th>
      <th>+Pax</th>
      <th>Romantic Date</th>

      <th>Price</th>
      
      <th>Status</th>
      <th>Action</th>
      <th>Payment Proof</th>
      <th>Receipt</th>
    </thead>
    <tbody>
      <?php 
        $sql2 = "SELECT * FROM tbl_booking WHERE customerID = '$customerID' ORDER BY ID DESC" ;
        $result2 = $conn->query($sql2);
         $datenow2 = date('Y-m-d');

        if ($result2->num_rows > 0) {
          // output data of each row
          while($row12 = $result2->fetch_assoc()) {
            $timestamp = $row12['btime_in'];
            $downpaymentPath = "style/images/downpayments/".$row12['paymentPhoto'];

            if($row12['bstatus']=='Confirmed' AND  $timestamp >= $datenow2 ){
              ?>
              <!-- CONFIRMED GREEN -->
              <!-- class="print appPrint" -->
              <tr  style="background-color:#EAFAF1; "   >
                <p style="display:none"><?php echo"APP".$row12['ID']; ?></p>
              <?php
              
            }else if($row12['bstatus']=="Declined" OR ($row12['bstatus']=="Confirmed" AND $timestamp <= $datenow2)){
             
               ?>
               <!-- DECLINE RED -->
              <tr style="background-color:#FDEDEC;" >
              <?php
              
            }else if($row12['bstatus']=="Completed"){
               ?>
              <tr style="background-color:#D6EAF8;" >
              <?php
              
            }else{
               ?>
              <tr style="background-color:;" >
              <?php
              
            }
            ?>
              
                <?php 
                if($row12['btype'] == 'Daytour'){
                  ?>
                  <td data-label="ID"><?php echo"APP".$row12['ID']; ?></td>
                  <td data-label="Type"><?php echo"".$row12['btype']; ?></td>
                  <td data-label="Date"><?php echo"<b>Time in: </b>".date("F jS, Y -- h:s a", strtotime($row12['btime_in']))."<br><b>Time Out: </b>".date("F jS, Y -- h:s a", strtotime($row12['btime_out'])); ?></td>
                 
                  <td data-label="Room"><?php echo"<i class='fas fa-times-circle'></i> NO ROOM RESERVATION"; ?></td>
                  <td data-label="+Pax"><?php echo"".$row12['bpax']; ?></td>
                  <?php 
                  if($row12['datecategory']==''){
                  ?>
                   <td data-label="Romantic Date" style="font-size: 1em;"><?php echo"<b> &nbsp; </b><i class='fas fa-times-circle'></i> &nbsp;"."NO DATE RESERVATION"; ?></td>
                  <?php


                  }else{
                  ?>
                   <td data-label="Romantic Date"><?php echo"<b>Date:</b>".$row12['datecategory']."<Br><b>Place:</b>".$row12['btable_date']; ?></td>
                  <?php

                  }
                  ?>
                 


                  
                  <?php
                  if($row12['balance']==0){
                    ?>
                      <td data-label="Price" style="background-color:#DAF7A6;"><?php echo"<b> Total:</b>".$row12['bprice']."<Br><b>Deposit:</b>".$row12['bdeposit']."<br><b>Balance:</b>".$row12['balance']; ?></td>
                    <?php
                  }else{
                    ?>
                      <td data-label="Pax"><?php echo"<b> Total:</b>".$row12['bprice']."<Br><b>Deposit:</b>".$row12['bdeposit']."<br><b>Balance:</b>".$row12['balance']; ?></td>
                    <?php
                  }
                  ?>
                 
                  <td data-label="Status">
                  
                    <?php 
                      if($row12['bstatus']=="Confirmed" AND $timestamp >= $datenow2){

                        echo"".$row12['bstatus']; 
                        
                      }else if($row12['bstatus']=="Confirmed" AND $timestamp <= $datenow2){
                        echo"Person failed <br>to show up "; 
                        
                      }else{
                        echo"".$row12['bstatus'];  
                      } 
                    ?>
                      

                  </td>
                  <!-- start -->
                  <td data-label="Action">
                  <?php
                  
                  if($row12['bstatus'] == 'Pending'){
                  $bookingdate = $row12['regsdate'];
                  $datenow = date('Y-m-d');//'2021-05-30';// 
                        // getting the day difference between two dates
                              $date1_ts = strtotime($bookingdate);
                              $date2_ts = strtotime($datenow);
                              $diff = $date2_ts - $date1_ts;
                              $dateDiff = round($diff / 86400);  

                    if($dateDiff <= 5){
                      echo "<button type='submit' class='action-btn noHover' style='background-color: ;' >  Cancel </button> <br>";
                    }else{
                      echo "<button type='submit' class='action-btn cancelBtn' >  Cancel </button> <br>";
                    }

                      echo "<button type='submit' class='action-btn'> Resched </button><Br>";

                  }else if($row12['bstatus'] == 'Confirmed' AND  $timestamp >= $datenow2 ){
                  $bookingdate = $row12['btime_in'];
                  $datenow = date('Y-m-d');//'2021-05-30';// 
                        // getting the day difference between two dates
                              $date1_ts = strtotime($bookingdate);
                              $date2_ts = strtotime($datenow);
                              $diff =  $date1_ts - $date2_ts;
                              $dateDiff = round($diff / 86400);

                         //   echo"".$bookingdate;
                         //   echo"<br>".$datenow;
                         //   echo"<br>".$dateDiff;
                    if($dateDiff <= 3){
                      echo "<button type='submit' class='action-btn noHover' style='background-color: ;' >  Refund </button> <br>";
                      echo "<button type='submit' class='action-btn noHover' > Resched </button><Br>";
                    }else{
                      echo "<button type='submit' class='action-btn refundBtn'  >   Refund </button> <br>";
                      echo "<button type='submit' class='action-btn reschedBtn' > Resched </button><Br>";
                    }  

                  }else if($row12['bstatus'] == 'Completed' AND $row12['review']==0){
                     $bookingdate = $row12['btime_out'];
                     $datenow = date('Y-m-d');//'2021-06-30';// 
                        // getting the day difference between two dates
                              $date1_ts = strtotime($bookingdate);
                              $date2_ts = strtotime($datenow);
                              $diff =  $date2_ts - $date1_ts ;
                              $dateDiff = round($diff / 86400);
                           // echo"".$bookingdate;
                           // echo"<br>".$datenow;
                           // echo"<br>".$dateDiff;
                      if($dateDiff >= 7){
                        echo "<button type='button' class='action-btn noHover ' >   Rate </button> <br>";
                      }else{
                        echo "<button type='button' class='action-btn reviewBtn ' >   Rate </button> <br>";
                      }
                        echo "<center>Thank You!</center>";
                      
                  }else if($row12['bstatus'] == 'Completed' AND $row12['review']==1){
                      echo "<button type='button' class='action-btn ' disabled>   Rated&nbsp;<i class='fas fa-check'></i></button> <br>";
                      echo "<center>Thank You!</center>";
                  }else{
                      // echo "<button type='submit' class='action-btn removesBtn' >  Remove </button> <br>";
                      echo "<center>Sorry try booking next time </center>";
                  }
                  ?>

                


                </td>
                <!-- end -->
                  <?php

                }else{
                  ?>
                  <td data-label="ID"><?php echo"APP".$row12['ID']; ?></td>
                  <td data-label="Type"><?php echo"".$row12['btype']; ?></td>
                  <td data-label="Date"><?php echo"<b>Time In: </b>".date("F jS, Y -- h:s a", strtotime($timestamp))."<br><b>Time Out: </b>".date("F jS, Y -- h:i a", strtotime($row12['btime_out'])); ?></td>
                 
                  <td data-label="Room"><?php  $room = str_replace("||","   ", $row12['broom']);   echo"".$room; ?></td>
                  <td data-label="+Pax"><?php echo"".$row12['bpax']; ?></td>
                  <?php 
                  if($row12['datecategory']==''){
                  ?>
                   <td data-label="Romantic Date" style="font-size: 1em;"><?php echo"<b> &nbsp; </b><i class='fas fa-times-circle'></i> &nbsp;"."NO DATE RESERVATION"; ?></td>
                  <?php


                  }else{
                  ?>
                   <td data-label="Romantic Date"><?php echo"<b>Date:</b>".$row12['datecategory']."<Br><b>Place:</b>".$row12['btable_date']; ?></td>
                  <?php

                  }
                  ?>
                 

                  <?php
                  if($row12['balance']==0){
                    ?>
                      <td data-label="Price" style="background-color:#DAF7A6;"><?php echo"<b> Total:</b>".$row12['bprice']."<Br><b>Deposit:</b>".$row12['bdeposit']."<br><b>Balance:</b>".$row12['balance']; ?></td>
                    <?php
                  }else{
                    ?>
                      <td data-label="Price"><?php echo"<b> Total:</b>".$row12['bprice']."<Br><b>Deposit:</b>".$row12['bdeposit']."<br><b>Balance:</b>".$row12['balance']; ?></td>
                    <?php
                  }
                  ?>
                  
                
                  <td data-label="Status">
                    <?php 
                      if($row12['bstatus']=="Confirmed" AND $timestamp >= $datenow2){

                        echo"".$row12['bstatus']; 
                        
                      }else if($row12['bstatus']=="Confirmed" AND $timestamp <= $datenow2){
                        
                        echo"Person failed <Br>to show up"; 
                      }else{
                        echo"".$row12['bstatus'];  
                      } 
                    ?>
                  </td>
                    <!-- TD for action for Overnight -->

                  <td data-label="Action">
                  <?php
                  
                  if($row12['bstatus'] == 'Pending'){
                  $bookingdate = $row12['regsdate'];
                  $datenow = date('Y-m-d');//'2021-05-30';// 
                        // getting the day difference between two dates
                              $date1_ts = strtotime($bookingdate);
                              $date2_ts = strtotime($datenow);
                              $diff = $date2_ts - $date1_ts;
                              $dateDiff = round($diff / 86400);  

                    if($dateDiff <= 5){
                      echo "<button type='submit' class='action-btn noHover' style='background-color: ;' >  Cancel </button> <br>";
                    }else{
                      echo "<button type='submit' class='action-btn cancelBtn' >  Cancel </button> <br>";
                    }

                      echo "<button type='submit' class='action-btn'> Resched </button><Br>";


                  }else if($row12['bstatus'] == 'Confirmed' AND  $timestamp >= $datenow2){
                  $bookingdate = $row12['btime_in'];
                  $datenow = date('Y-m-d');//'2021-05-30';// 
                        // getting the day difference between two dates
                              $date1_ts = strtotime($bookingdate);
                              $date2_ts = strtotime($datenow);
                              $diff =  $date1_ts - $date2_ts;
                              $dateDiff = round($diff / 86400);

                         //   echo"".$bookingdate;
                         //   echo"<br>".$datenow;
                         //   echo"<br>".$dateDiff;
                    if($dateDiff <= 3){
                      echo "<button type='submit' class='action-btn noHover' style='background-color: ;' >  Refund </button> <br>";
                      echo "<button type='submit' class='action-btn noHover'> Resched </button><Br>";
                    }else{
                      echo "<button type='submit' class='action-btn refundBtn' >   Refund </button> <br>";
                      echo "<button type='submit' class='action-btn reschedBtn'> Resched </button><Br>";
                    }  

                  }else if($row12['bstatus'] == 'Completed' AND $row12['review']==0){
                    $bookingdate = $row12['btime_out'];
                     $datenow = date('Y-m-d');//'2021-06-30';// 
                        // getting the day difference between two dates
                              $date1_ts = strtotime($bookingdate);
                              $date2_ts = strtotime($datenow);
                              $diff =  $date2_ts - $date1_ts ;
                              $dateDiff = round($diff / 86400);
                           // echo"".$bookingdate;
                           // echo"<br>".$datenow;
                           // echo"<br>".$dateDiff;
                      if($dateDiff >= 7){
                        echo "<button type='submit' class='action-btn noHover' >   Rate </button> <br>";
                      }else{
                        echo "<button type='submit' class='action-btn reviewBtn' >   Rate </button> <br>";
                      }
                        echo "<center>Thank You!</center>";
                      
                  }else if($row12['bstatus'] == 'Completed' AND $row12['review']==1){
                      echo "<button type='button' class='action-btn ' disabled>   Rated&nbsp;<i class='fas fa-check'></i></button> <br>";
                      echo "<center>Thank You!</center>";
                  }else{
                      // echo "<button type='submit' class='action-btn removesBtn' >  Remove </button> <br>";
                      echo "<center>Sorry try booking next time </center>";
                  }
                  ?>

                


                </td>

                <!-- end -->

                  <?php

                }


                ?>
                <td style="display:none;"> <?php echo"".$row12['customerID']?></td>
                <!-- TD for payment proof -->
                <td data-label="Payment Proof" style=""> 
                  <?php 
                    if($row12['bstatus'] == "Pending" AND $row12['paymentPhoto'] == ""){
                      ?>
                        <!-- <button class="payment-button proof"> <i class="fas fa-plus"></i></button>
 -->

        <div class="Neon Neon-theme-dragdropbox proof">
        <input style="opacity: 0; width: 100px; height: 180px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" >
        <div class="Neon-input-dragDrop">
          <div class="Neon-input-inner">
            <div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div>
            <div class="Neon-input-text"><h3>Payment Proof</h3> <span style="display:inline-block; margin: 10px 0"></span>
            </div><a class="Neon-input-choose-btn blue">Browse Files</a>
          </div>
        </div>
        </div>
                      <?php 

                    }else{
                      ?>
                        <div class="container icon-container1">
                          <img class="zoom" src="<?php echo"".$downpaymentPath; ?>" alt="...">
                        </div>
                      <?php
                    }
//    
// 
// 
//              
// 
// 
                   if($row12['bstatus']=='Confirmed' AND  $timestamp >= $datenow2 ){
                    ?>

                      <td  data-label="Receipt" class="print appPrint"> 
                        <button class="print-button">
                          <span class="print-icon print"></span>
                        </button>
                        <p style="display:none"><?php echo"APP".$row12['ID']; ?></p>
                      </td>
                    <?php
                   }else{
                    ?>
                      <td data-label="Receipt" class="noprint " >
                        <button class="print-button ">
                          <span class="print-icon noprint"></span>
                        </button> 
                      </td>
                    <?php
                      
                   }



                    
                  ?>
                  
                  
                </td>

              </tr>

            <?php  
          }
        }else {
          ?>
              <tr>
                <td data-label="Pax" colspan="4">NO RECORD</td>
                
              </tr>
          <?php
        }
      ?>
     
      
   
    </tbody>
  </table>
</div>
<!-- payment proof modal-->

<div id="paymentProofModal" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content" style="width: 350px;">
    <span  class="close12">&times;</span>
    <form method="POST" enctype="multipart/form-data">
      <input type="hidden" name="paymentAppId" id="paymentAppId" style="width:30%;height:30px;" />
      <br><Br>
      
      
      <h1 class="lineText label">Screenshot of Downpayment (Gcash)</h1> 
         <div class="container" style="text-align:center;">
          <span class="btn btn-primary btn-file" >
            <i class="far fa-images" style="width: 90%;">&nbsp; Select payment screenshot</i> <input type="file" name="paymentProofPhoto" onchange="readURL1(this);" required>
          </span>
        </div>
        <br>
        <div class="container">
          <img id="blah1" src="#" alt="your sample image" />
        </div>

      <!-- paymentProofPhoto,paymentAppId  -->
      <hr>
      <button type="submit" name="paymentProof" style="float:right">Submit</button>

      <button type="button" onclick="appClose()" style="float:right;margin-right:5px;">    Cancel</button>  
    </form>
  </div>

</div>
<!-- end of payment proof emodal-->

<script>
var paymentProofBtn = document.querySelectorAll(".proof");
var paymentProofModal = document.getElementById("paymentProofModal");

for (var r = 0;r < paymentProofBtn.length; r++) {
  paymentProofBtn[r].onclick = function(e) {
    $tr = $(this).closest('tr').children('td');
    var data = $tr.map(function(){
        return $(this).text();
    }).get();

     paymentProofModal.style.display = "block";

  console.log(data);
  document.getElementById("paymentAppId").value = data[0];
   

 }
}

function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader1 = new FileReader();

            reader1.onload = function (e) {
                $('#blah1').attr('src', e.target.result);
            }
// <-------------------------------------------------------------------------------------------------------------  checks for errors
            reader1.readAsDataURL(input.files[0]);
        }
    }
</script>

<!-- Review modal-->

<div id="reviewModal" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content" style="width: 500px;">
    <span  class="close12">&times;</span>
    <form method="POST" enctype="multipart/form-data">
      <input type="hidden" name="aid" id="aid" style="width:30%;height:30px;" />
      <br><Br>
      <input type="hidden" name="reviewAppId" id="reviewAppId">
      <input type="hidden" name="customerAppId" id="customerAppId">
     
      <h1 class="lineText label">CHOOSE PHOTO</h1>
      <div class="columns">
        <div class="column">
          <span class="btn btn-primary btn-file">
            <i class="far fa-images"></i> &nbsp;Browse<input type="file" name="photo" onchange="readURL(this);">
          </span>
        </div>
        <div class="column">
          <img id="blah" src="#" alt="your sample image" />
        </div>
      </div>
      <!--reviewAppId, customerAppId,photo,description,rating -->

       <h1 class="lineText label">DESCRIPTION</h1>
      <textarea placeholder="The Ridges and Clouds is beautiful" rows="20" name="description" id="comment_text" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea>

      <h1 class="lineText label">GIVE US A SCORE</h1>

        <fieldset>
          
            <span class="star-cb-group">
              <input type="radio" id="rating-5" name="rating" value="5" />
              <label for="rating-5">5</label>
              <input type="radio" id="rating-4" name="rating" value="4" checked="checked" />
              <label for="rating-4">4</label>
              <input type="radio" id="rating-3" name="rating" value="3" />
              <label for="rating-3">3</label>
              <input type="radio" id="rating-2" name="rating" value="2" />
              <label for="rating-2">2</label>
              <input type="radio" id="rating-1" name="rating" value="1" />
              <label for="rating-1">1</label>
              <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" />
              <label for="rating-0">0</label>
            </span>

        </fieldset>

      <hr>

      
      <button type="submit" name="placeReview" style="float:right">Place Review</button>

      <button type="button" onclick="appClose()" style="float:right;margin-right:5px;">    Cancel</button>  
    </form>
  </div>

</div>
<!-- end of Review emodal-->
<a href="#" class="scrollup" ><i class="fas fa-arrow-up" ></i></a>


<script>

  
    $(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});
var printBtn = document.querySelectorAll(".appPrint");

for (var i = 0;i < printBtn.length; i++) {
  printBtn[i].onclick = function(e) {
    $tr = $(this).find('p');
    var data = $tr.map(function(){
        return $(this).text();
    }).get();
    console.log(data)
  window.open('appPrint.php?ID='+data[0]+'XXX000', '_blank');

 }
}

var reviewBtn = document.querySelectorAll(".reviewBtn");
var reviewModal = document.getElementById("reviewModal");

for (var r = 0;r < reviewBtn.length; r++) {
  reviewBtn[r].onclick = function(e) {
    $tr = $(this).closest('tr').children('td');
    var data = $tr.map(function(){
        return $(this).text();
    }).get();

     reviewModal.style.display = "block";

  console.log(data);
    document.getElementById("reviewAppId").value = data[0];
    document.getElementById("customerAppId").value = data[9];

 }
}

function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

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

<!-- modal script -->

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var cancelBtn = document.querySelectorAll(".cancelBtn");

// Get the <span> element that closes the modal
var span = document.querySelectorAll(".close12");

// When the user clicks the button, open the modal 
for (var i = 0; i < cancelBtn.length; i++) {
 cancelBtn[i].onclick = function(e) {
    e.preventDefault();
    modal.style.display = "block";

    $tr = $(this).closest('tr');
   var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
     
   console.log(data);

   document.getElementById("aid").value = data[0];
  }
}
  function appClose(){
    modal.style.display = "none";
    reviewModal.style.display = "none";
     paymentProofModal.style.display = "none";
  }

// When the user clicks on <span> (x), close the modal
for (var s = 0; s < span.length; s++) {
 span[s].onclick = function(e) {
    e.preventDefault();
    modal.style.display = "none";
    reviewModal.style.display = "none";
    paymentProofModal.style.display = "none";


  }
}
// span.onclick = function() {
//   modal.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<!-- input validation script-->
<script type="text/javascript">
  function numbervalidation(){
   
    var form = document.getElementById("signupform");
    var pnumber = document.getElementById("pnumber").value;
    var text = document.getElementById("phonetext");
    var pattern = /^(639)\d{9}$/;

    if(pnumber.match(pattern)){
      form.classList.add("valid1");
      form.classList.remove("invalid1");
      text.innerHTML = "Your Phone number is valid";
      text.style.color = "green";
    }else{
      form.classList.remove("valid1");
      form.classList.add("invalid1");
      text.innerHTML= "Please Enter valid phone number";
      text.style.color ="#ff0000";
    }
    if (pnumber == ""){
      form.classList.remove("valid1");
      form.classList.remove("invalid1");
      text.innerHTML ="";
      text.style.color ="#00ff00";
    }



  }
  function emailvalidation(){

    var form = document.getElementById("signupform");
    var email1 = document.getElementById("email1").value;
    var text = document.getElementById("textemail");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if(email1.match(pattern)){
      form.classList.add("valid");
      form.classList.remove("invalid");
      text.innerHTML = "Your Email Address in valid.";
      text.style.color = "green";
    }else{
      form.classList.remove("valid");
      form.classList.add("invalid");
      text.innerHTML = "Please Enter valid Email Address";
      text.style.color="#ff0000";
    }
    if (email1 == ""){

      form.classList.remove("valid");
      form.classList.remove("Invalid");
      text.innerHTML = "";
      text.style.color = "#00ff00";
    }
  }
</script>

<script src="medium-zoom.min.js"></script> <!-- not working-->

<script src="zoom-main.js"></script>
<script>
  AOS.init({
    offset:200,
    duration:1500
  });
</script>


<script>
  var editcontainer=document.getElementById("updateinfo");

  function edit(){
  $(function () {
     $('#updateinfo').removeClass('up-close');
     jQuery("#updateinfo").addClass('fade-in');
   editcontainer.style.display = "";
});
}
  var span = document.getElementsByClassName("close")[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  editcontainer.style.display ="none";
}
</script>

</body>
</html>

<?php
 if(isset($_POST['update'])) 
 {

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $bdate=$_POST['bdate'];
  $pass=$_POST['pass'];
  $npass=$_POST['npass'];
  $photo= $_FILES['photo']['name'];

  if($npass == "")
  {
    $legitpassword = $_POST['pass'];
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

  }else{
   $legitpassword = $_POST['pass'];
   $hashed_password = password_hash($npass, PASSWORD_DEFAULT);

  }

  if($_FILES['photo']['name']==''){
    $photo= $_POST['oldphoto'];
  }
  if(strlen($phone) >12 OR strlen($phone) < 11){
    echo '<script type="text/javascript">alert("Invalid Phone number")</script>';
  }else{


  if(password_verify($pass,$row['Userpword'])){

    $insert="UPDATE tbl_user SET Userfname='$fname',Userlname='$lname',Useremail='$email',Userpnumber='$phone',Userbday='$bdate',Userpword='$hashed_password' ,Userimage='$photo',Userpwordnohash = '$legitpassword' WHERE ID='$customerID' ";
    if (mysqli_query($conn, $insert)) {

      move_uploaded_file($_FILES["photo"]["tmp_name"],"customer/profilepicture/".$_FILES["photo"]["name"]);

      //$sql = "UPDATE tbl_booking SET lastname='Doe' WHERE id=2";

      echo '<script type="text/javascript">alert("Succesfully Updated")</script>';
      echo("<meta http-equiv='refresh' content='1'>");
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
  }else{    
    echo '<script type="text/javascript">alert("Incorrect Password")</script>';
  }
}
 }else if(isset($_POST['appCancel'])){

$id = $_POST['aid'];
$id = str_replace("APP","",$id);

$sql = "DELETE FROM tbl_booking WHERE ID='$id'";
    if ($conn->query($sql) === TRUE) {
      echo '<script type="text/javascript">alert("Appointment Succesfully Canceled")</script>';
      echo("<meta http-equiv='refresh' content='1'>");
    } else {
      echo "Error deleting record: " . $conn->error;
    }

}else if(isset($_POST['placeReview'])){

// reviewAppId, customerAppId,photo,description,rating

$reviewAppId               = $_POST['reviewAppId'];
$reviewAppId   = str_replace("APP","",$reviewAppId);
$customerAppId             = $_POST['customerAppId'];
$photo                     = $_FILES['photo']['name'];
$rating                    = $_POST['rating'];
$description               = mysqli_real_escape_string($conn, $_POST["description"]);
  
$sql = "INSERT INTO tbl_review (bookingID, costumerID, dateReview ,   description, reviewPhoto,rate)
VALUES ('$reviewAppId ', '$customerAppId', now(),'$description','$photo',$rating)";

if ($conn->query($sql) === TRUE) {
    move_uploaded_file($_FILES["photo"]["tmp_name"],"style/images/reviews/".$_FILES["photo"]["name"]);
    echo '<script type="text/javascript">alert("Review Successfully Posted")</script>';
    echo("<meta http-equiv='refresh' content='1'>");
    
    $sql = "UPDATE tbl_booking SET review = 1 WHERE ID= $reviewAppId";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}else if(isset($_POST['paymentProof'])){

  // paymentProofPhoto,paymentAppId
$id                       = $_POST['paymentAppId'];
$id                       = str_replace("APP","",$id);                     
$paymentProofPhoto        = $_FILES['paymentProofPhoto']['name'];

  
$sql = "UPDATE tbl_booking SET paymentPhoto ='$paymentProofPhoto' WHERE ID='$id'";


  if ($conn->query($sql) === TRUE) {
    move_uploaded_file($_FILES["paymentProofPhoto"]["tmp_name"],"style/images/downpayments/".$_FILES["paymentProofPhoto"]["name"]);
    echo '<script type="text/javascript">alert("Payment Successfully Posted")</script>';
    echo("<meta http-equiv='refresh' content='1'>");

  }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


}else if(isset($_POST['homelogout'])){
  session_unset();
  session_destroy();

  ?>
 <script type="text/javascript">location.href = 'login.php';</script>
<?php

 }




?>