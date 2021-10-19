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
    <link rel="stylesheet" href="assets/audit.css">
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
            <li><a href="../calendar" rel="noopener noreferrer" target="_blank" style=""> Schedule</a></li>
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
                <li><a href="audit.php">Audit Trail</a></li>
                <li><a href="system.php">Sales Report</a></li>
                <li><a href="system_database_backup.php">Database Backup</a></li>
              

              </ul>
            </li>
          <?php

        }else{



        }?>
        
        

      </ul>
    </nav>

<div class="container" style="background-color:white;
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
             <button  type="button"class="buttonNav"><i class="fas fa-edit"></i>  Edit Profile</button>
             <button  type="submit" name="logout"class="buttonNav"><i class="fas fa-sign-out-alt"></i>  Logout</button>
           </form>
        </div>

      </div>
  </div>

 
</div><br>
<!-- End -->

<div class="container-lg" style="background-color:;
                ">

 <?php //echo"<b>Time In: </b>".date("F jS, Y h:s a", strtotime($row['btime_in'])); ?>
<div class="sb-example-1">
    <div class="search">
        <input type="text" class="searchTerm" placeholder="Search for name ... " id="bookingsearch" onkeyup="search()">
        <button type="submit" class="searchButton" disabled>
          <i class="fa fa-search"></i>
       </button>
    </div>
  </div>

  <script type="text/javascript">
      function search() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("bookingsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("audittable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
  </script>
  <div class="container-chck">
  <input type="checkbox" name="" id="check_booking" onchange="booking()">&nbspBooking&nbsp&nbsp&nbsp</input>
  <input type="checkbox" name="" id="check_info" onchange="information()">&nbspInformation&nbsp&nbsp&nbsp</input>
  <input type="checkbox" name="" id="check_system" onchange="system()">&nbspSystem&nbsp&nbsp&nbsp</input>
</div>

<script type="text/javascript">
  function booking(){
   var input, filter, table, tr, td, i, txtValue;
  if(document.getElementById("check_booking").checked){
    input = "Booking";
    if(document.getElementById("check_info").checked){
      input = "Booking Information";
        if(document.getElementById("check_system").checked){
          input ="Booking Information System";
        }

    }
    if(document.getElementById("check_system").checked){
      input = "Booking System";
        if(document.getElementById("check_info").checked){
          input ="Booking System Information";
        }

    }
  }else{
    input = "";
  }
  table = document.getElementById("audittable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
 
      if ((input).includes(td.textContent)){
        tr[i].style.display = "";
      } else if(input == ""){
        tr[i].style.display = "";

      }else {
        tr[i].style.display = "none";
      }
    }       
  }
  }
  function information(){
   var input, filter, table, tr, td, i, txtValue;
  if(document.getElementById("check_info").checked){
    input = "Information";
    if(document.getElementById("check_booking").checked){
      input = " Information Booking ";
        if(document.getElementById("check_system").checked){
          input ="Information Booking System";
        }

    }
    if(document.getElementById("check_system").checked){
      input = "Information System";
        if(document.getElementById("check_info").checked){
          input ="Information System Booking";
        }

    }
  }else{
    input = "";
  }
  table = document.getElementById("audittable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
 
      if ((input).includes(td.textContent)){
        tr[i].style.display = "";
      } else if(input == ""){
        tr[i].style.display = "";

      }else {
        tr[i].style.display = "none";
      }
    }       
  } 


  }
  function system(){
  var input, filter, table, tr, td, i, txtValue;
  if(document.getElementById("check_system").checked){
    input = "System";
    if(document.getElementById("check_booking").checked){
      input = "System Booking";
      if(document.getElementById("check_info").checked){
        input = "System Booking Information";
      }
    }
    if(document.getElementById("check_info").checked){
      input = "System Information";
      if(document.getElementById("check_booking").checked){
        input = "System Information Booking";
      }
    }

  }else{
    input = "";
  }
  table = document.getElementById("audittable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
 
      if ((input).includes(td.textContent)){
        tr[i].style.display = "";
      } else if(input == ""){
        tr[i].style.display = "";

      }else {
        tr[i].style.display = "none";
      }
    }       
  }

  }
</script>
  <table class="styled-table" id="audittable">
            <thead style="z-index: 10;position:relative;">
                <tr >
                    <th >Photo</th>
                    <th >Name</th>
                    <th>Description</th>
                    <th>Date </th>
                    <th>type</th>
                   

                </tr>
            </thead>
            <tbody>
              <?php 
                $sql = "SELECT * FROM tbl_audit ORDER BY ID DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      $customer_id = $row['UserID'];
                      $sql1 = "SELECT * FROM tbl_user WHERE ID = '$customer_id'";
                      $result1 = $conn->query($sql1);
                      $fullname ="";
                      if ($result1->num_rows > 0) {
                        while($row1 = $result1->fetch_assoc()) {
                           $fullname = $row1['Userfname'].' '.$row1['Userlname'];
                           $user_photo = $row1['Userimage'];
                           $path = "../customer/profilepicture/".$user_photo;
                        }
                      }
                     


                    ?>
                    
                    <tr >
                      <td >
                              <figure class="image is-square" style="z-index:  !important;" >
                                <img class="is-rounded" src="<?php echo"".$path; ?>" style="overflow:hidden; ">
                               </figure>
                      </td>
                      <!-- <td><?php //echo"".$row['ID'];?></td> -->
                      <td><?php echo"".$fullname; ?></td>
                      <td><?php echo"".$row['Description']; ?></td>   
                      <td><?php echo"".date("F jS, Y ", strtotime($row['Date_edit'])); ?></td>     
                      <td><?php echo"".$row['type']; ?></td> 
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
}
?>

