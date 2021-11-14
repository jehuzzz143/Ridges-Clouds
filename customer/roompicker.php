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
        if(!isset($_SESSION['dateactive']) || $_SESSION['dateactive'] !== true){

          $start ="";
          $end   ="";
          $_SESSION['date']="";
          $_SESSION['day']=1;
          echo '<script type="text/javascript">alert("Please select date first!")</script>';
           header("refresh:0; datepicker.php");

        }else{

          $start =$_SESSION['start'];
          $end   =$_SESSION['end'];
          $date  =$_SESSION['date'];

          $start1 = str_replace("T14:00"," ",$start);
          $end1 = str_replace("T12:00"," ",$end);
          //echo '<script type="text/javascript">alert("'.$start.'-'.$end.'-'.$date.'")</script>';
   

        }if(!isset($_SESSION['roomactive']) || $_SESSION['roomactive'] !== true){

           $_SESSION['room']="";
           $_SESSION['roomtotal']="";
          //echo '<script type="text/javascript">alert("Please select date first!")</script>';
          // header("refresh:0; roompicker.php");

        }else{

         
              
         

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
  <link rel="stylesheet" href="css/roompicker.css">

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
<div class="container is-fluid" id="parallax" style="height:100%;">
    <div class="container is-desktop bar">

    <div class="progress-bar"> 40% </div>
  </div>
  <div class="container is-desktop white-background">
    <div class=" columns is-multiline">
        <?php
          $sql = "SELECT * FROM tbl_price WHERE category = 'room' ORDER BY CAST(SUBSTR(imagename FROM 2) AS UNSIGNED)";
          $result = $conn->query($sql);
          
          while($row = $result->fetch_assoc()) {
              $y= 0;
            //$sqlcompare = "SELECT * FROM tbl_booking WHERE bdate = '$date'";
              //
            // $sqlcompare = "SELECT * FROM tbl_booking WHERE btime_in BETWEEN '$start1' AND '$end1' OR btime_out BETWEEN '$start1' AND '$end1'";
            $sqlcompare = "SELECT * FROM tbl_booking WHERE '$start1' BETWEEN btime_in AND btime_out OR '$end1' BETWEEN btime_in AND btime_out";
            $resultcompare = $conn->query($sqlcompare);
            $roomcompare = "";
          //echo '<script type="text/javascript">alert("'.$resultcompare->num_rows.'")</script>';
           if ($resultcompare->num_rows > 0) {
            // output data of each row
            while($rowcompare = $resultcompare->fetch_assoc()) {
            $roomcompare .= $rowcompare['broom'];
            
            }
          }
            $path = "../admin/upload/".$row['imagename'];
            if($row['imagename']==""){
              $count =0;

            }else{
              
            ?>
              <?php 
               
                if(strstr($roomcompare,"C".$count)){
                  ?>
                  <div class="column is-4" style="text-align: center;" >
                <img class="thumbnail occupied" id="<?php echo"img".$count ?>" src="<?php echo"".$path; ?>">
                <p class="label" style="text-shadow: 1px 1px #e09f5b;"><?php echo"".$row['accomodation']." (C"."$count)" ?></p>
                <input type="hidden" name="<?php echo "cabana".$count ?>" value="<?php echo"".$row['accomodation']; ?> ">
                <label class="checkbox-container occupied" style="cursor: not-allowed;">
                <input  type="checkbox"  
                        name="<?php echo"room[]"?>" 
                        id="<?php echo"room".$count ?>"
                        class="occupied"  
                        value="<?php echo"C".$count; ?> " 
                        disabled 
                        class="room"> 
                        <span class="checkmark"></span>
                </label>

                        <small class="occupied"> <?php echo"".$row['size']; ?> </small>
                
                -<input type="text" 
                        name="<?php echo "price".$count ?>"
                        class="price"
                        disabled 
                        id="<?php echo"price".$count ?>" 
                        value="<?php echo"".$row['rate']; ?> ">  
                <Br>
                <span class="occupied-room"style="color:red">occupied</span>
             </div>


                  <?php

                }else{
              ?>
             <div class="column is-4" style="text-align: center;" >
                <img class="thumbnail" id="<?php echo"img".$count ?>" src="<?php echo"".$path; ?>">
                <p class="label"><?php echo"".$row['accomodation']." (C"."$count)" ?></p>
                 <input type="hidden" name="<?php echo "cabana".$count ?>" value="<?php echo"".$row['accomodation']."(".$row['size'].")"; ?> ">
                <label class="checkbox-container">
                <input type="checkbox" 
                       class="room" 
                       id="<?php echo"room".$count ?>" 
                       name="<?php echo"room[]"?>"  
                       value="<?php echo"C".$count ?> "
                       onclick="<?php echo"room".$count."()"?>"
                       <?php if(strstr($_SESSION['room'],"C".$count)) echo "checked"; ?>
                       > 
                       <span class="checkmark"></span>
                

                       <small > <?php echo"".$row['size']; ?> </small>
                  
                - <input type="text" 
                        name="<?php echo "price".$count ?>"
                        readonly 
                        id="<?php echo "price".$count ?>"
                        class="price" 
                        value="<?php echo"".$row['rate']; ?> "/>
                </label> 
             </div>
           <?php 
           }
           }
           $count += 1;
          }
         
        ?>
        
      
      
      
    </div>
    
    <div class="columns is-full" style="padding:10px;">
      <div class="column">

      <button class="button-to-anchor1" type="submit" name="change">
        <a href="datepicker.php" >
         <i class="fas fa-arrow-left"></i> Change Date 
      </a>
    </button>
  
        <button class="button-to-anchor" name="next" type="submit"> Next <i class="fas fa-arrow-right"></i></button>
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
}else if(isset($_POST['next'])){

    $sql = "SELECT * FROM tbl_price WHERE category = 'room' AND imagename != '' ORDER BY imagename";
    $result = $conn->query($sql);
    $rownumber =  $result->num_rows;
    $room ="";
    $price = 0;
    $total = 0;


  if(!empty($_POST['room'])){
  // getting the checkbox room values
    foreach($_POST['room'] as $selected){
    
     $room = $room." || ".$selected;
      // echo '<script type="text/javascript">alert("' . strlen($selected) . '")</script>';
     // echo '<script type="text/javascript">alert("' . $room . '")</script>';
     // echo '<script type="text/javascript">alert("' . strlen($room) . '")</script>';
     if (strlen($selected)==4) {
       $lastChar = substr(str_replace(' ', '', $room), -2);
     }else{
      $lastChar = substr(str_replace(' ', '', $room), -1);
     }
     
     
     // echo '<script type="text/javascript">alert("' . $lastChar . '")</script>';
     $price = $_POST['price'.$lastChar];
     $roomtotal += $price;
     $cabana .= " || ".$_POST['cabana'.$lastChar];

     // echo '<script type="text/javascript">alert("' . $price. '")</script>';
  
    }

    $_SESSION['room']=$room;
    $_SESSION['roomactive']=true;
    $_SESSION['roomtotal']=$roomtotal * $_SESSION['day'];
    $_SESSION['cabana']=$cabana;


    // echo '<script type="text/javascript">alert("' . $_SESSION['roomtotal'] . '")</script>';
    ?>
<script type="text/javascript">location.href = 'additional.php';</script>

    <?php 


  }else{
    echo '<script type="text/javascript">alert(" PLease Select Room First.")</script>';
  }







    
   

}else if(isset($_POST['homeprofile'])){
  ?>

 <script type="text/javascript">location.href = '../user.php';</script>
<?php
}else if(isset($_POST['change'])){
   ?>
  <script type="text/javascript">location.href = 'datepicker.php';</script>
  <?php
}


?>
