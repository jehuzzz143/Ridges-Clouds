<!DOCTYPE html>
<!-- OMBROG, Jehu march 22 2021 -->
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
            
         
            include "../dbconnection/conn.php";
            
            $getrecord = mysqli_query($conn,"SELECT * FROM tbl_user WHERE ID  ='$cID'");
            while($rowedit = mysqli_fetch_assoc($getrecord))
            {
                 $usertype = $rowedit['Usertype'];
                $customerID = $rowedit['ID'];
                 $image =$rowedit['Userimage'];
                $fname = $rowedit['Userfname']." ".$rowedit['Userlname'];
                $path= "upload/profilepicture/".$image;
                $fullname_admin = $rowedit['Userfname'].", ".$rowedit['Userlname'];

               

            }
     }



?>
<html lang="en" dir="ltr">
  <head>
    <!--Cover to use all symbol all over the world -->
    <meta charset="utf-8">
    <!-- responsive viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- CSS -->
    <link rel="stylesheet" href="assets/promo.css">
    <!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Fontawesome  -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  </head>
  <!-- unloading the script-->
  <body  onload="renderDate(); initClock();" >
<!-- ############################################################################################## side menu -->
  <?php

  $today = date("y-m-d");
  $date_today = strtotime($today);
  // UPDATE PROMOTE WHEN MEET EXPIRATION DATE
  $sql = "SELECT * FROM tbl_promo WHERE promo_status = 'active'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($row['promo_expiration'] < $date_today){
        $sql = "UPDATE tbl_promo SET promo_status='Inactive'";
        if ($conn->query($sql) === TRUE) { 
        } 
      }
    }
  }
  ?>


    <div class="btnn">
      <span class="fas fa-bars"></span>
    </div>
    <nav  style="padding:0; margin:0;" class="sidebarr">
      <div class="textt">Site Menu </div>
      <ul style="padding:0; margin:0;">
        <li class="activee"><a href="index.php"><i class="fas fa-tachometer-alt"></i>&nbsp; Dashboard</a></li>
        <li><a href="employee.php"><i class="fas fa-user"></i>&nbsp; Employee</a></li>
        <li><a href="costumer.php"><i class="fas fa-users"></i>&nbsp; Customer</a></li>
        <li>
            <a href="#" class="feat-btn"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;  Bookings
              <span class="fas fa-caret-down first"></span>
            </a>
          <ul class="feat-showw">
            <li><a href="pending.php">Pending Bookings</a></li>
            <li><a href="allbooking.php">All booking</a></li>
            <li><a href="../calendar"  target="_blank" style=""> Schedule</a></li>
          </ul>
        </li>
        <?php if($usertype ==3){
          ?>
            <li>
                <a href="#" class="serv-btn"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Information
                  <span class="fas fa-caret-down second"></span>
                </a>
              <ul class="serv-showw">
                <li><a href="audit.php">Announcement</a></li>
                <li><a href="rules.php">Rates & Rules</a></li>
                <li><a href="admin_gall.php">Gallery</a></li>
                <li><a href="promos.php">Promos</a></li>

              </ul>
            </li>
            <li>
                <a href="#" class="third-btn"><i class="fas fa-desktop"></i>&nbsp;&nbsp;System
                  <span class="fas fa-caret-down third"></span>
                </a>
              <ul class="third-showw">
                <li><a href="announcement.php">Audit Trail</a></li>
                <li><a href="system.php">Sales Report</a></li>
                <li><a href="system_database_backup.php">Database Backup</a></li>
              

              </ul>
            </li>
          <?php

        }else{



        }?>
        
        

      </ul>
    </nav>

<div class="container" style="background-color:;
    box-shadow: 0 1px 2px rgba(0,0,0,0.07), 
                0 2px 4px rgba(0,0,0,0.07), 
                0 4px 8px rgba(0,0,0,0.07), 
                0 8px 16px rgba(0,0,0,0.07),
                0 16px 32px rgba(0,0,0,0.07), 
                0 32px 64px rgba(0,0,0,0.07); 
                width:250px;height:100%; margin-left:-250px; 
                position:fixed; padding-top:60px; padding:10px; " >
    
    <div class="container" style="text-align: center; margin-top:60px;" >
      <?php 
        if($image == ""){
          ?>
             <img src="../style/images/admin/admin.png" class="admin" alt="admin picture"/>
          <?php
        }else{
          ?>
          <div class="circular--landscape">
            <img src="<?php echo"".$path  ?>" class="admin" alt="admin picture"/>
          </div>
          <?php
        }
      ?>
       <p style="text-align: center; font-size:20px"> <?php echo"".strtoupper($fname) ?></p>
    </div>
    <!-- <a class="navbar-brand" href="#">
               <img src="../style/images/banner.png" alt="" class="logo">
           </a> -->
                <!--digital clock start-->
    <div class="datetime">
      <div class="date">
        <span id="dayname">Day</span>,
        <span id="tmonth">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
      <div class="time">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
    </div>
    <!--digital clock end-->

    <script type="text/javascript">
    function updateClock(){
      var now = new Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear(),
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";

          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
          var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          var ids = ["dayname", "tmonth", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }
  </script>
  <br><br>
  <div class="wrapper">
    <div class="calendar">
      <div class="month">
        <div class="prev" onclick="moveDate('prev')">
          <span>&#10094;</span>
        </div>
        <div>
          <h2 id="month" style="color:white;"></h2>
          <p id="date_str"></p>
        </div>
        <div class="next" onclick="moveDate('next')">
          <span>&#10095;</span>
        </div>
      </div>
      <div class="weekdays">
        <div>Sun</div>
        <div>M</div>
        <div>T</div>
        <div>W</div>
        <div>Th</div>
        <div>F</div>
        <div>Sat</div>
      </div>
      <div class="days">

      </div>
    </div>
  </div>
    <script>
        var dt = new Date();
        function renderDate() {
              dt.setDate(1);
            var day = dt.getDay();
            var today = new Date();
            var endDate = new Date(
                dt.getFullYear(),
                dt.getMonth() + 1,
                0
            ).getDate();

            var prevDate = new Date(
                dt.getFullYear(),
                dt.getMonth(),
                0
            ).getDate();
            var months = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ]
            document.getElementById("month").innerHTML = months[dt.getMonth()];
           
            var cells = "";
            for (x = day; x > 0; x--) {
                cells += "<div class='prev_date'>" + (prevDate - x + 1) + "</div>";
            }
            console.log(day);
            for (i = 1; i <= endDate; i++) {
                if (i == today.getDate() && dt.getMonth() == today.getMonth()) cells += "<div class='today'>" + i + "</div>";
                else
                    cells += "<div>" + i + "</div>";
            }
            document.getElementsByClassName("days")[0].innerHTML = cells;

        }

        function moveDate(para) {
            if(para == "prev") {
                dt.setMonth(dt.getMonth() - 1);
            } else if(para == 'next') {
                dt.setMonth(dt.getMonth() + 1);
            }
            renderDate();
        }
    </script>

</div>
<!-- ######################################################################################### HEADER -->
<div class="columns is-mobile" style="background-color:;
    box-shadow: 0 1px 2px rgba(0,0,0,0.07), 
                0 2px 4px rgba(0,0,0,0.07), 
                0 4px 8px rgba(0,0,0,0.07), 
                0 8px 16px rgba(0,0,0,0.07),
                0 16px 32px rgba(0,0,0,0.07), 
                0 32px 64px rgba(0,0,0,0.07); 
                height:66px;background-image: url('../style/images/ridges_banner.png'); background-repeat: no-repeat; 
                background-size: auto 100% ;
                padding:0;
                margin:0;">


  <div class="column" style="background-color:; margin:0;padding:0;" >
      <div class="dropdown" style="float:right; height:100%; background-color:; margin:0; padding:0; ">
        <button type="button" class="dropbtn"  style="font-size:17px; background-color:#e09f5b; " >
            Welcome, FirstName <i class="fas fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
           <form method="POST">
             <button  type="button"class="buttonNav"><i class="fas fa-edit"></i>   Account</button>
             <button  type="submit" name="logout"class="buttonNav"><i class="fas fa-sign-out-alt"></i>  Logout</button>
           </form>
        </div>

      </div>
  </div>

 
</div><br>
<!-- End -->

<div class="container-lg" style="background-color:; margin-bottom: 50px;
                ">

<center>
<div class="container is-mobile" style="margin:50px;">
    <button class="btn"id="myBtn" >Add Promo Code</button>
</div>
</center>

<!-- OLD DATE RESTRICTION -->
<script type="text/javascript">
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
<!-- PROMO CREATION MODAL -->
<div class="modal fade-in" id="myModal" tabindex="-1" >
    <div class="modal-dialog">
    <div class="modal-content" >
      <h5 class="label"> Promo Creation <span class="close">&times;</span></h5>
      <hr>
      <!-- Modal Body-->
        <form action="promos.php"  method=POST >
        <div class="modal-body">
          <div class="container is-mobile"> 
              
              <div id="promo_id_container">
                 <label> Promo ID</label>
                 <input type="hidden" name="promo_id" id="promo_id" style="width:22.5%; text-align:center; font-weight:bold;">
              </div>
              <div class="columns">
                <div class="column is-5" >
                    <select class="promo_booking_type" name="promo_booking_type" id="promo_booking_type">
                      <option value="Overnight"  selected>Overnight</option>
                      <option value="Daytour"  >Daytour</option>
                      <option value="Both"  >Both</option>
                    </select>

                </div>
              </div>
              <div class="columns is-multiline">
                <div class="column is-5">
                  <input  type="text"  name="promo_code" id="promo_code" placeholder="PROMO CODE" required style="text-transform:uppercase">
                </div>
                <div class="column is-4">
                  <input type="text"  name="promo_value" id="promo_value" placeholder="₱500 or 50%"  required >
                </div>
                <div class="column is-2">
                  <select   name="promo_type" required id="promo_type" >
                      <option value="">Type</option>
                      <option value="OFF"  selected>OFF</option>
                      <option value="% OFF"  >% OFF</option>
                  </select>
                </div>
                <div class="column is-5">
                  Promo expiration date
                  <input type="date" id="txtDate" name="promo_expiration_date" >

                </div>
                <div class="column" > 
                  Description
                  <textarea name="promo_description" id="promo_description"></textarea> 
                </div> 
                <hr>
              </div> 
              <center>
              <div class="columns is-multiline">
                <div class="column ">
                  <label>Number of costumers who can avail</label>
                  <input type="range"
                         id="promo_range"
                         value="10" 
                         min="1" max="100"
                         name="promo_count"
                         
                         oninput="this.nextElementSibling.value = this.value"
                         style="width:80%">
                  <output id="promo_count_number">10</output>
                </div>
              </div> 
              </center>
           </div> 
        </div>
      
        <div class="modal-footer">
          <div class="columns">
            <div class="column" id="promo_create">
              <button type="submit" name="promo_create"  class="button-modal" > Create</button>
            </div>
            <div class="column" id="promo_update">
              <button type="submit" name="promo_update"  class="button-modal" > UPDATE</button>
            </div>
            <div class="column" id="promo_delete">
              <button type="submit" name="promo_delete"  class="button-modal" > DISABLE</button>
            </div>
            <div class="column" id="promo_recover">
              <button type="submit" name="promo_recover"  class="button-modal" > RECOVER</button>
            </div>
          </div>
          
        </div>
      </form>
    </div>
    </div>
  </div>
  <!-- END OF PROMO MODAL -->

<!-- DISPLAY ALL PROMO -->

  <center>
<div class="container is-mobile" style="padding:10px;"> 
   <div class="container"style="text-align: center;">
    <h3 style="font-size:30px;color:black;"> 
      ACTIVE PROMO CODE  
    </h3>
  </div>
  <?php 
    $sql = "SELECT * FROM tbl_promo WHERE promo_status = 'active'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        ?>
        <div class="columns is-mobile shadow promo_modal" style="width:800px; padding:3px; color:black; margin-top:10px;">
          <p style="display:none"><?php echo"".$row['promo_id']?></p>
          <p style="display:none"><?php echo"".$row['promo_code']?></p>
          <p style="display:none"><?php echo"".$row['promo_description']?></p>
          <p style="display:none"><?php echo"".$row['promo_value']?></p>
          <p style="display:none"><?php echo"".$row['promo_value_type']?></p>
          <p style="display:none"><?php echo"".$row['promo_expiration']?></p>
          <p style="display:none"><?php echo"".$row['promo_count']?></p>
          <p style="display:none"><?php echo"".$row['promo_bookingtype']?></p>
          <div class="column is-2" style="background-color:#333948; color: white;" >
            <div class="count ">
          
              <p>  <?php echo"".$row['promo_code']?></p>
             
            </div>
           
          </div>
          <div class="column is-6" >
           <p> <?php echo"".$row['promo_description']?></p>
          </div>
          <div class="column is-3" style="text-align:center; background-color:#27ae60;">
            <p> <?php echo"<b>Value:</b> <br>".$row['promo_value']." ".$row['promo_value_type']?> </p>             
            <p> <?php echo"<b>Expiration:</b> &nbsp;<br>".date("F jS, Y", strtotime($row['promo_expiration']))?> </p>
          </div>
          <div class="column is-1 " >
            <div class="count ">
              <center>
                <?php echo"".$row['promo_count']?>
              </center>
            </div>
          </div>
          
        </div>


        <?php
       
      }
    } else {
      ?>
        <div class="columns is-mobile " id="announcementContainer" style="width:80%; margin-top: 10px; color:red; text-align: center;justify-content: center;"  >       
          <p> No Promo Code Posted</p>
        </div>
      <?php
      
    }
  ?>



  <!-- inactive promo code -->
  <div style="text-align: center;">
    <h3 style="font-size:30px;color:black;"> 
      EXPIRED PROMO CODE  
    </h3>
  </div>
 
  <?php 
    $sql = "SELECT * FROM tbl_promo WHERE promo_status = 'inactive'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        ?>
      
        <div class="columns shadow" style="width:800px; padding:3px; color:black; margin-top:10px;">
          <div class="column is-2" style="display: table;color: white; overflow: hidden; background-color: #333948;" >
            <div class="count ">
              <center>
                <?php echo"".$row['promo_code']?>
              </center>
            </div>
           
          </div>
          <div class="column is-6">
            <?php echo"".$row['promo_description']?>
          </div>
          <div class="column is-3" style="text-align:center;  background-color:#d9534f;">
            <p> <?php echo"<b>Value:</b> <br>".$row['promo_value']." ".$row['promo_value_type']?> </p>             
            <p> <?php echo"<b>Expiration:</b> &nbsp;<br>".date("F jS, Y", strtotime($row['promo_expiration']))?> </p>
          </div>
          <div class="column is-1 " style="display: table; overflow: hidden; background-color: white;">
            <div class="count ">
              <center>
                <?php echo"".$row['promo_count']?>
              </center>
            </div>
          </div>
          
        </div>


        <?php
       
      }
    } else {
      ?>
        <div class="columns is-mobile " id="announcementContainer" style="width:80%; margin-top: 10px; color:red; text-align: center;justify-content: center;">       
          <p> No Inactive Promo Code </p>
        </div>
      <?php
      
    }
  ?>
  
</div>
</center>

<!-- END OF DISPLAYING PROMO -->

<!-- PROMO UPDATE DELETE MODAL -->
<script type="text/javascript">
  var promo_modal = document.querySelectorAll('.promo_modal');

  for (var i = 0; i < promo_modal.length; i++) {
  promo_modal[i].onclick = function(e) {
    e.preventDefault();
  myModal.style.display = "block";

  var data = $(this).find("p").map(function(){
      return $(this).text();
      }).get();
  console.log(data)

  document.getElementById("promo_id").type = "text";
  document.getElementById("promo_id").value = data[0];
  document.getElementById("promo_code").value = data[1];
  document.getElementById("promo_description").value = data[2];
  document.getElementById("promo_value").value = data[3];
  if(data[4]=='OFF'){
    document.getElementById("promo_type").selectedIndex  = 1;
  }else{
    document.getElementById("promo_type").selectedIndex  = 2;
  }
  document.getElementById("txtDate").value = data[5];
  document.getElementById("promo_count_number").innerHTML  = data[6];
  document.getElementById("promo_range").value = data[6];

  if(data[7]=='Daytour'){
    document.getElementById("promo_booking_type").selectedIndex = 1;
  }else if(data[7]=='Overnight'){
    document.getElementById("promo_booking_type").selectedIndex = 0;
  }else{
    document.getElementById("promo_booking_type").selectedIndex = 2;
  }
  
  
  document.getElementById("promo_create").style.display = "none";
  document.getElementById("promo_delete").style.display = "block";
  document.getElementById("promo_recover").style.display = "none";
  document.getElementById("promo_update").style.display = "block";
  document.getElementById("promo_id_container").style.display="block";
  
  // document.getElementById("promo_id").value = data[0];
  // document.getElementById("promo_id").value = data[0];


    }
  }
</script>
 
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
  document.getElementById('promo_id').type = "hidden";
  document.getElementById("promo_id").value = "";

  document.getElementById("promo_code").value = "";
  document.getElementById("promo_value").value = "";
  document.getElementById("promo_description").value = "";
  document.getElementById("promo_type").selectedIndex = 0;
  document.getElementById("txtDate").value = "";
  document.getElementById("promo_count_number").innerHTML  = 10;
  document.getElementById("promo_range").value = 10;
  document.getElementById("promo_booking_type").selectedIndex = 0;

  document.getElementById("promo_create").style.display = "block";
  document.getElementById("promo_delete").style.display = "none";
  document.getElementById("promo_recover").style.display = "none";
  document.getElementById("promo_update").style.display = "none";
  document.getElementById("promo_id_container").style.display="none";

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
<script>
    $('.btnn').click(function(){
      $(this).toggleClass("clickk");
      $('.sidebarr').toggleClass("showw");
    });
      $('.feat-btn').click(function(){
        $('nav ul .feat-showw').toggleClass("showw");
        $('nav ul .first').toggleClass("rotatee");
      });
      $('.serv-btn').click(function(){
        $('nav ul .serv-showw').toggleClass("show11");
        $('nav ul .second').toggleClass("rotatee");
      });
      $('.third-btn').click(function(){
        $('nav ul .third-showw').toggleClass("show111");
        $('nav ul .third').toggleClass("rotatee");
      });
      $('nav ul li').click(function(){
        $(this).addClass("activee").siblings().removeClass("activee");
      });
    </script>
<!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  </body>
</html>

<?php
if(isset($_POST['logout'])){

  session_unset();
  session_destroy();
?>
 <script type="text/javascript">location.href = '../login.php';</script>
<?php
exit();
} else if(isset($_POST['promo_create'])){
$promo_expiration_date    =$_POST['promo_expiration_date'];
$promo_code               =$_POST['promo_code'];
$promo_value              =$_POST['promo_value'];
$promo_type               =$_POST['promo_type'];
$promo_count              =$_POST['promo_count'];
$promo_booking_type       =$_POST['promo_booking_type'];
$promo_count              =$_POST['promo_count'];
$promo_expiration_date    =$_POST['promo_expiration_date'];


// accept all charset
$promo_description               = mysqli_real_escape_string($conn, $_POST["promo_description"]);



$promo_code = strtoupper($promo_code);
$sql = "INSERT INTO tbl_promo (promo_code, promo_description, promo_value, promo_value_type, promo_expiration, promo_count, promo_status, promo_bookingtype)
VALUES ('$promo_code', '$promo_description ', $promo_value, '$promo_type', '$promo_expiration_date', '$promo_count', 'active','$promo_booking_type')";

if($promo_type != 'OFF'){
  if($promo_value > 100){
    echo '<script type="text/javascript">alert("Invalid value promo value")</script>';

  }else{
    if ($conn->query($sql) === TRUE) {
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
        VALUES ('$customerID' ,'Create new promo code : $promo_code', now(),'$fullname_admin', 'system')";
        $conn->query($sql1);
  ?>

    <script type="text/javascript">
      Swal.fire('New record created successfully')
    </script>
  <?php

  echo("<meta http-equiv='refresh' content='2'>");
} else {


  echo "Error: " . $sql . "<br>" . $conn->error;
}
  }

}else{

if ($conn->query($sql) === TRUE) {
   $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
        VALUES ('$customerID' ,'Create new promo code : $promo_code', now(),'$fullname_admin', 'Information')";
        $conn->query($sql1);
  ?>
    <script type="text/javascript">
      Swal.fire('New record created successfully')
    </script>
  <?php

  echo("<meta http-equiv='refresh' content='2'>");
} else {


  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
}else if(isset($_POST['promo_delete'])){
  $promo_id = $_POST['promo_id'];
  $promo_code               =$_POST['promo_code'];

  $sql = "UPDATE tbl_promo SET promo_status='disable' WHERE promo_id = '$promo_id'";

  if ($conn->query($sql) === TRUE) {
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
    VALUES ('$customerID' ,'disable promo code : $promo_code', now(),'$fullname_admin', 'Information')";
    $conn->query($sql1);
    ?>
      <script type="text/javascript">
        Swal.fire('Record successfully disabled')
      </script>
    <?php
    echo("<meta http-equiv='refresh' content='2'>");
  }else{
    echo "Error deleting record: " . $conn->error;
  }

}else if(isset($_POST['promo_update'])){
  $promo_id                 = $_POST['promo_id'];
  $promo_expiration_date    =$_POST['promo_expiration_date'];
  $promo_code               =$_POST['promo_code'];
  $promo_value              =$_POST['promo_value'];
  $promo_type               =$_POST['promo_type'];
  $promo_count              =$_POST['promo_count'];
  $promo_count              =$_POST['promo_count'];
  $promo_expiration_date    =$_POST['promo_expiration_date'];
$promo_booking_type       =$_POST['promo_booking_type'];

  // accept all charset
  $promo_description               = mysqli_real_escape_string($conn, $_POST["promo_description"]);

  $sql = "UPDATE tbl_promo SET promo_code = '$promo_code', promo_description = '$promo_description', promo_value = '$promo_value', promo_value_type = '$promo_type', promo_expiration = '$promo_expiration_date', promo_count ='$promo_count', promo_bookingtype ='$promo_booking_type' WHERE promo_id = '$promo_id'";

  if ($conn->query($sql) === TRUE) {
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
        VALUES ('$customerID' ,'Update promo code : $promo_code', now(),'$fullname_admin', 'Information')";
        $conn->query($sql1);
    ?>
      <script type="text/javascript">
        Swal.fire('Record Successfully Updated')
      </script>
    <?php
    echo("<meta http-equiv='refresh' content='2'>");
  }else{
    echo "Error deleting record: " . $conn->error;
  }
}



?>

