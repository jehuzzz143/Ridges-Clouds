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

        }else if(!isset($_SESSION['roomactive']) || $_SESSION['roomactive'] !== true){
          echo '<script type="text/javascript">alert("Please select room first!")</script>';
           header("refresh:0; roompicker.php");

           $_SESSION['room']="";
           $_SESSION['roomtotal']="";

        }else if(!isset($_SESSION['addactive']) || $_SESSION['addactive'] !== true){
          $_SESSION['additional']=0;
          $_SESSION['romanticdate']=null;
           header("refresh:0; additional.php");

        }else if(!isset($_SESSION['romanticactive']) || $_SESSION['romanticactive'] !== true){
       

            $_SESSION['table']="";
            $_SESSION['romanticactive']=null;

            $date  =$_SESSION['date'];
            //echo '<script type="text/javascript">alert("' . $_SESSION['roomtotal'] .$_SESSION['date']. '")</script>';
          
          
        }else{

          $start =$_SESSION['start'];
          $end   =$_SESSION['end'];
          $date  =$_SESSION['date'];
          //rooms
          $room = $_SESSION['room'];
         // $_SESSION['roomactive']=true;
          //$_SESSION['dateactive']=true;
          $total =$_SESSION['roomtotal'];
          $tabldate =$_SESSION['table'];
          //echo '<script type="text/javascript">alert("' . $_SESSION['roomtotal'] .$_SESSION['date']. '")</script>';

           

         
              
   
 
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
	<link rel="stylesheet" href="css/romanticpicker.css">

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
    <div class="progress-bar">80%</div>
  </div>
  <div class="container white-background">
    <div class="columns is-mobile is-multiline post">
   
          <div class="column is-2" style="margin-bottom: 20px;" >
          </div>
          <div class="column is-5" style="text-align:center;margin-bottom: 20px;">
            <img class="imagedesign" src="../style/images/veranda.jpg"><br>
             <span>Veranda</span>
            
            
          </div>  
          <div class="column is-5" style="text-align:center;margin-bottom: 20px;">
            <img class="imagedesign" src="../style/images/viewdeck.jpg"><br>
           <span>View Deck</span>
          </div>  
                                

    
          <?php
            $sql = "SELECT * FROM tbl_price WHERE category = 'date'";
            $result = $conn->query($sql);
             $count = 1;

             $result1 = mysqli_query($conn,"SELECT * FROM tbl_booking WHERE bdate = '$date' AND btable_date LIKE '%View Deck%' AND datecategory LIKE '%Sunrise Breakfast%'");
             $rows1 = mysqli_num_rows($result1);

             $result2 = mysqli_query($conn,"SELECT * FROM tbl_booking WHERE bdate = '$date' AND btable_date LIKE '%Veranda%' AND datecategory LIKE '%Sunrise Breakfast%'");
             $rows2 = mysqli_num_rows($result2);

             $result3 = mysqli_query($conn,"SELECT * FROM tbl_booking WHERE bdate = '$date' AND btable_date LIKE '%View Deck%' AND datecategory LIKE '%Coffee Date%'");
             $rows3 = mysqli_num_rows($result3);

             $result4 = mysqli_query($conn,"SELECT * FROM tbl_booking WHERE bdate = '$date' AND btable_date LIKE '%Veranda%' AND datecategory LIKE '%Coffee Date%'");
             $rows4 = mysqli_num_rows($result4);

             $result5 = mysqli_query($conn,"SELECT * FROM tbl_booking WHERE bdate = '$date' AND btable_date LIKE '%View Deck%' AND datecategory LIKE '%Romantic Dinner%'");
             $rows5 = mysqli_num_rows($result5);

             $result6 = mysqli_query($conn,"SELECT * FROM tbl_booking WHERE bdate = '$date' AND btable_date LIKE '%Veranda%' AND datecategory LIKE '%Romantic Dinner%'");
             $rows6 = mysqli_num_rows($result6);
             
             $secondValue = "";


            if ($result->num_rows > 0) {
           
              while($row = $result->fetch_assoc()) {
                $firstValue = $row['accomodation'];
             
                $count1 = 0;
                
                ?>
                      <div class="column is-2">
                        <p class="label">
                          <?php echo"".$row['accomodation'] ?>    
                          <input type="hidden" 
                                     name="<?php echo "name".$count ?>" 
                                     class="room" 
                                     value="<?php echo "".$row['accomodation']; ?>"
                                     >
                        </p>
                        <?php
                        if($row['accomodation']=='Sunrise Breakfast'){
                          ?>
                            <p>6AM - 7AM</p>

                          <?php
                        }else if($row['accomodation']=='Sunrise Breakfast'){
                          ?>
                          <p>3PM - 4PM</p>
                          <p>4PM - 5PM</p>

                          <?php
                        }else{
                          ?>
                          <p>4PM - 5PM</p>
                          <p>5PM - 6PM</p>
                          <p>7PM - 8PM</p>
                          <?php
                        }
                        ?>
                      </div>
                      <?php
                        if($rows2  >= 3 AND $row['accomodation']=='Sunrise Breakfast'){
                          
                          ?>
                          <div class="column is-5" >  
                            <label class="checkbox-container">
                              <input type="checkbox" 
                                     name="<?php echo"romanticDate[]"?>" 
                                     class="room noclick" 
                                     readonly
                                     value="<?php echo"C".$count?>"
                                     >
                              <span class="checkmark"></span>
                            </label> 
                            <input type="text" 
                            name="<?php echo "price".$count ?>"
                            class="price"
                            readonly 
                            id="<?php echo"price".$count ?>" 
                            value="<?php echo"".$row['verandarate']; ?> "><p class="label">php full</p>
                            

                          </div>                            

                          <?php
                   
                          
                        }else if($rows4 >=6 AND $row['accomodation']=='Coffee Date'){
                          ?>
                          <div class="column is-5" >  
                            <label class="checkbox-container">
                              <input type="checkbox" 
                                     name="<?php echo"romanticDate[]"?>" 
                                     class="room" 
                                     value="<?php echo"C".$count?>"
                                     readonly
                                     >
                              <span class="checkmark"></span>
                            </label> 
                            <input type="text" 
                            name="<?php echo "price".$count ?>"
                            class="price"
                            readonly 
                            id="<?php echo"price".$count ?>" 
                            value="<?php echo"".$row['verandarate']; ?> "><p class="label">php full</p>
                            

                          </div>                            

                          <?php
                          
                          






                        }else if ($rows6 >=9 AND $row['accomodation']=='Romantic Dinner'){
                          ?>
                          <div class="column is-5">  
                            <label class="checkbox-container">
                              <input type="checkbox" 
                                     name="<?php echo"romanticDate[]"?>" 
                                     class="room" 
                                     readonly
                                     value="<?php echo"C".$count?>"
                                     >
                              <span class="checkmark"></span>
                            </label> 
                            <input type="text" 
                            name="<?php echo "price".$count ?>"
                            class="price"
                            readonly 
                            id="<?php echo"price".$count ?>" 
                            value="<?php echo"".$row['verandarate']; ?> "><p class="label">php full</p>
                            

                          </div>                            

                          <?php








                        }else{
                          ?>
                          <div class="column is-5" >  
                        <label class="checkbox-container">
                          <input type="checkbox" 
                                 name="<?php echo"romanticDate[]"?>" 
                                 class="room" 
                                 value="<?php echo"C".$count?>"
                                 <?php if(strstr($_SESSION['table'],"C".$count)) echo "checked"; ?>
                                 >
                          <span class="checkmark"></span>
                        </label> 
                        <input type="text" 
                        name="<?php echo "price".$count ?>"
                        class="price"
                        readonly 
                        id="<?php echo"price".$count ?>" 
                        value="<?php echo"".$row['verandarate']; ?> "><p class="label">php</p>
                        

                      </div> 
                          <?php
                        }
                      ?>
                      <?php
                          $count += 1;
                        ?>
                     
                    
                      <?php
                        if($rows1>= 1 AND $row['accomodation']=='Sunrise Breakfast'){

                          ?>
                          <div class="column is-5 noclick">
                            <label class="checkbox-container">
                              <input type="checkbox" 
                                     name="<?php echo"romanticDate[]"?>" 
                                     class="room noclick" 
                                     value="<?php echo"C".$count?>"
                                     disabled>
                              <span class="checkmark"></span>
                            </label> 
                            <input type="text" 
                            name="<?php echo "price".$count ?>"
                            class="price noclick"
                            readonly 
                            id="<?php echo"price".$count ?>" 
                            value="<?php echo"".$row['viewrate']; ?> "><p class="label">php Full</p>


                          </div>

                          <?php

                           $rows2=0;
                        }else if($rows3 >= 2 AND $row['accomodation']=='Coffee Date'){
                          ?>
                          <div class="column is-2 noclick" >
                            <label class="checkbox-container">
                              <input type="checkbox" 
                                     name="<?php echo"romanticDate[]"?>" 
                                     class="room noclick" 
                                     value="<?php echo"C".$count?>"
                                     readonly>
                              <span class="checkmark"></span>
                            </label> 
                            <input type="text" 
                            name="<?php echo "price".$count ?>"
                            class="price noclick"
                            readonly 
                            id="<?php echo"price".$count ?>" 
                            value="<?php echo"".$row['viewrate']; ?> "><p class="label">php Full</p>


                          </div>




                          <?php








                        }else if ($rows5 >= 3 AND $row['accomodation']=='Romantic Dinner'){
                          ?>
                          <div class="column is-5 noclick">
                            <label class="checkbox-container">
                              <input type="checkbox" 
                                     name="<?php echo"romanticDate[]"?>" 
                                     class="room noclick" 
                                     value="<?php echo"C".$count?>"
                                     readonly>
                              <span class="checkmark"></span>
                            </label> 
                            <input type="text" 
                            name="<?php echo "price".$count ?>"
                            class="price noclick"
                            readonly 
                            id="<?php echo"price".$count ?>" 
                            value="<?php echo"".$row['viewrate']; ?> "><p class="label">php Full</p>


                          </div>



                          <?php






                        }else{
                          ?>
                            <div class="column is-5">
                            <label class="checkbox-container">
                              <input type="checkbox" 
                                     name="<?php echo"romanticDate[]"?>" 
                                     class="room" 
                                     value="<?php echo"C".$count?>"
                                     <?php if(strstr($_SESSION['table'],"C".$count)) echo "checked"; ?>
                                     >
                              <span class="checkmark"></span>
                            </label> 
                            <input type="text" 
                            name="<?php echo "price".$count ?>"
                            class="price"
                            readonly 
                            id="<?php echo"price".$count ?>" 
                            value="<?php echo"".$row['viewrate']; ?> "
                            ><p class="label">php</p>


                          </div>

                          <?php


                        }
                      ?>
                     
                     
                        

                        
                   
               

                <?php
                $count += 1;
              }

            } else {
              echo "0 results";
            }


          ?>
         
         

      
     
    </div>



  		<div class="column is-full">
          <button class="button-to-anchor1" name="back" type="submit"> 
  			<a href="additional.php" >
          <i class="fas fa-arrow-left"></i> Back
        </a>

      </button>

  	   	<button class="button-to-anchor" name="next" type="submit"> Proceed <i class="fas fa-arrow-right"></i></button>
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
if(isset($_POST['homelogout'])){

  session_unset();
  session_destroy();
?>

 <script type="text/javascript">location.href = '../login.php';</script>
<?php
exit();
}else if(isset($_POST['next'])){
  $_SESSION['place'] = "";
  if(!empty($_POST['romanticDate'])){
  // getting the checkbox room array_values(input)  
    foreach($_POST['romanticDate'] as $selected){
      
    $table = $table." ".$selected;

    $name = $selected;

    //echo '<script type="text/javascript">alert("'.$name.'")</script>';


       $lastChar = substr(str_replace(' ', '', $name), -1);
     $int = (int)$lastChar;
     if($int % 2 == 0){
      $one = (int)$lastChar;
      $one = $one - 1;
      $foo = (string)$one;
      $lastChar = (int)$foo + 1;
      $post_var = 'price'.$lastChar;
      $price = $_POST['price'.$lastChar]; 
      if($lastChar == 2){
        $accomodationName1 = 'Sunrise Breakfast';
      }else if($lastChar == 4){
        $accomodationName1 = 'Coffee Date';
      }else{
        $accomodationName1 = 'Romantic Dinner';
      }
     $accomodationName .= " || ".$accomodationName1;
      //echo '<script type="text/javascript">alert("'.$accomodationName.$lastChar. '")</script>';
     $tabletotal += $price;
     $_SESSION['place'] .= " || View Deck ";
     
     }else{
       $price = $_POST['price'.$lastChar];
     $accomodationName .= " || ".$_POST['name'.$lastChar];
     //  echo '<script type="text/javascript">alert("'.$accomodationName.$lastChar. '")</script>';
     $tabletotal += $price;
     $_SESSION['place'] .= " ||  Veranda ";
     }

    

   
      }


    $_SESSION['table']=$table;
    $_SESSION['romanticactive']=true;
    $_SESSION['romantictotal']=$tabletotal;
    $_SESSION['romanticAccomodation'] = $accomodationName;


   
   // echo '<script type="text/javascript">alert("'.$tabletotal .$accomodationName .$_SESSION['place']. '")</script>';

    ?>
    <script type="text/javascript">location.href = 'bill.php';</script>
    <?php 
    echo("<meta http-equiv='refresh' content='1'>");

  }else{
    echo '<script type="text/javascript">alert(" PLease Select First.")</script>';
  }


}else if(isset($_POST['homeprofile'])){
  ?>

 <script type="text/javascript">location.href = '../user.php';</script>
<?php
}else if(isset($_POST['back'])){
   ?>
  <script type="text/javascript">location.href = 'additional.php';</script>
  <?php
}
?>
