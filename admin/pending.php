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
    <link rel="stylesheet" href="assets/pending.css">
    <!-- CodingNepal jquery -->

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Fontawesome  -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Title -->
    <title>Pending</title>
  </head>
  <!-- unloading the script-->
  <body class="is-fullhd" onload="renderDate(); initClock();" >
<!-- ################################################################################################# Side menu -->
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

<div class="container mobile" style="background-color:white;
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
 <!-- ######################################################################################### digital clock start-->
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
   <!-- ######################################################################################### Calendar -->
  <div class="wrapper">
    <div class="calendar">
      <div class="month">
        <div class="prev" onclick="moveDate('prev')">
          <span>&#10094;</span>
        </div>
        <div>
          <h2 id="month"class="monthcolor"></h2>
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
   <!-- ######################################################################################### calendar script-->
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
 <!-- ######################################################################################### header -->
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
             <button  type="button"class="buttonNav" onclick="location.href='account.php';"><i class="fas fa-edit"></i>  Account</button>
             <button  type="submit" class="buttonNav"name="logout"><i class="fas fa-sign-out-alt"></i>  Logout</button>
           </form>
        </div>

      </div>
  </div>

 
</div><br>


<script>
function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("overnightsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("overnighttable");
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

function daytour() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("daytoursearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("daytourtable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
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


<!-- cancel modal-->

<div id="declinemyModal" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content" style="width: 400px;">
    <span  class="close">&times;</span>
    <form method="POST">
      <label>Appointment ID</label>   <input type="text" name="aid" id="aid" style="width:20%;height:30px;" />
      <hr>
      <p>You want to decline this appointment?</p>
      <hr>
      <input type="hidden" name="declineService" id="declineService" readonly/>
      <input type="hidden" name="declineGNumber" id="declineGNumber" readonly/>
      <!-- style="display: none" -->
      <input style="display: none" type="datetime-local" name="timeInDecline" id="timeInDecline" readonly/>
      <input style="display: none" type="datetime-local" name="timeOutDecline" id="timeOutDecline" readonly/>
      
      <button type="submit" name="appDecline" class="buttonNav" style="float:right">Yes</button>

      <button  onclick="appClose()" class="buttonNav" style="float:right;margin-right:5px;">    Cancel</button>  
    </form>
  </div>

</div>
<!-- end of cancel modal-->
 <!-- ######################################################################################### body-->

 <!-- confirm modal-->
 <div class="modal fade-in" id="myModal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 600px;">
      <form  method="POST">
          <span class="closeconfirm close">&times;</span>
            <h5 class="label" >Appointment ID: <input  type="text" id="aid1" name="aid-overnight" readonly style="width:15%; height:25px;"></input></h5>
            <hr>

       
        
            
              
                  <label class="label" for="startDate">Title</label>
                  <input type="text" class="form-control" id="title" name="title-overnight"><br>
                  <!-- errors will go here -->

                  <div class="columns">
                    <div class="column">
                      <label class="label" for="startDate">Start time</label>
                      <input type="datetime-local"  id="startDate" name="startDate">
                    </div>
                    <div class="column">
                      <label class="label" for="startDate">End time</label>
                      <input type="datetime-local"  id="endDate" name="endDate">
                    </div>
                  </div>

                  
                  <!-- errors will go here -->
                          
                  
                  <!-- errors will go here -->

                  <div class="columns">
                    <div class="column">
                      <label class="label" for="startDate">Balance</label>
                      <input type="text"  id="price" readonly name="price-overnight">
                    </div>
                    <div class="column">
                      <label class="label" for="startDate"><span style="color:red;">*</span>Deposit</label>
                      <input type="text"  id="deposit"  name="deposit-overnight" required>
                    </div>
                  </div>

                  <input type="hidden" name="nightGNumber" id="nightGNumber" readonly/>
                  
                

          <hr>
            <div class="modal-footer">
                <button type="button" class="buttonNav" onclick="closeConfirmModal()" data-dismiss="modal">Close</button>
                
                <input type="submit"  class="button1 buttonNav" name="submit-overnight" value="submit" ></input>

            </div>
        </form>
    </div>
  </div>

</div>
<script type="text/javascript">
  function closeConfirmModal(){
    document.getElementById("myModal").style.display = "none";
     document.getElementById("myModal-daytour").style.display = "none";
  }
</script>
 <!-- modal end -->
 <!-- modal start daytour -->
  <div class="modal fade-in" id="myModal-daytour" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 600px;">
      <form  method="POST">
          <span class="close1">&times;</span>
            <h5 class="label" >Appointment ID: <input  type="text" id="aid-daytour" name="aid-daytour" readonly style="width:15%; height:25px;"></input></h5>
            <hr>

       
        
            
              
                  <label class="label" for="startDate">Title</label>
                  <input type="text" class="form-control" id="title-daytour" name="title-daytour"><br>
                  <!-- errors will go here

                  <label class="label" for="startDate">Date</label>
                  <input type="text" class="form-control" id="date-daytour" name="date-daytour"><br>
                   -->

                  <div class="columns">
                    <div class="column">
                      <label class="label" for="startDate">Start in:</label>
                      <input type="datetime-local" class="form-control" id="timein-daytour" name="timein-daytour"><br>
                    </div>
                    <div class="column">
                      <label class="label" for="startDate">End Out:</label>
                      <input type="datetime-local" class="form-control" id="timeout-daytour" name="timeout-daytour"><br>
                    </div>
                  </div>
                  <!-- errors will go here -->

                  <div class="columns">
                    <div class="column">
                      <label class="label" for="startDate">Price</label>
                      <input type="text"  id="price-daytour" readonly name="price-daytour">
                    </div>
                    <div class="column">
                      <label class="label" for="startDate"><span style="color:red;">*</span>Deposit</label>
                      <input type="text"  id="deposit-daytour"  name="deposit-daytour">
                    </div>
                  </div>

                  <input type="hidden" name="dayGNumber" id="dayGNumber" readonly/>
                 
                

          <hr>
            <div class="modal-footer">
                <button type="button" class="buttonNav" onclick="closeConfirmModal()" data-dismiss="modal">Close</button>
                
                <input type="submit" class="button1 buttonNav" name="submit-daytour" value="submit" ></input>

            </div>
        </form>
    </div>
  </div>

</div>
 <!-- modal end -->

<h2 style="opacity: .6;margin-left:10px;margin-bottom: 10px; font-weight: bold;font-size: 1.5rem;">  Pending Bookings</h2>


<div class="is-fluid" style="background-color:;
   
                
               padding:0;margin:0;">
  <center>
    <h2 style="font-weight: bold; letter-spacing: 2px; font-size:1.5em;"> OVERNIGHT BOOKINGS</h2>
 
    <div class="sb-example-1">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="Search for name?" id="overnightsearch" onkeyup="myFunction2()">
            <button type="submit" class="searchButton" disabled>
              <i class="fa fa-search"></i>
           </button>

        </div>
    </div>
<!-- START OF OVERNIGHT #################  --> 

         <div class="column is-full" style="background-color:;overflow: scroll;width:100%;max-height: 600px; padding:0; margin:0;margin-top:3px;">
          <table class="styled-table" id="overnighttable">
            <thead>
                <tr >
                    <th >Name</th>
                    <th>Service</th>
                    <th>Date Time</th>
                    <th>Room</th>
                    <th> +Pax</th>
                   
                    <th>Romantic Date</th>
                     
                    <th>Status</th>
                    <th>Price</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM tbl_booking WHERE btype='Overnight' AND bdeposit <= 0 AND bstatus='Pending'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $bid = $row['customerID'];
                    $csql = "SELECT * FROM tbl_user WHERE ID = '$bid'";
                    $cresult = $conn->query($csql);
                    $crow = mysqli_fetch_array($cresult);
                    $fullname = $crow['Userfname'].", " .$crow['Userlname'];
                    $guestNumber =$crow['Userpnumber'];
                    $bookingdate = $row['btime_in'];
                    $datenow = date('Y-m-d');//'2021-05-30';// 
                        // getting the day difference between two dates
                              $date1_ts = strtotime($bookingdate);
                              $date2_ts = strtotime($datenow);
                              $diff =  $date1_ts - $date2_ts;
                              $dateDiff = round($diff / 86400);
                             

                        if($dateDiff <= 3){
                          echo"<tr style='background-color:#FDEDEC'>";
                        }else{
                          echo "<tr>";
                        }
                   ?>
                    

                        <td style="display:none;"><?php echo"".$row['ID']; ?></td>
                        <td><?php echo"".$fullname; ?></td>
                        <td><?php echo"".$row['btype']; ?></td>
                        <td data-label="Pax"><p><?php echo"<b>Time In: </b>".date("F jS, Y h:s a", strtotime($row['btime_in'])); ?></p>
                                             <p><?php echo"<b>Time Out: </b>".date("F jS, Y  h:s a", strtotime($row['btime_out'])); ?></p>
                                             <input type="hidden" value="<?php echo"".$row['btime_in']; ?>"/>
                                             <input type="hidden" value="<?php echo"".$row['btime_out']; ?>" />
                        </td>
                        <td ><?php echo"".$row['broom']; ?></td>
                        <td ><?php echo"".$row['bpax']; ?></td>
                       
                        <?php 
                          if($row['datecategory']=='' OR $row['datecategory']==' '){
                            ?>
                             <td data-label="Pax" style="font-size: 1em;"><?php echo"<b> &nbsp; </b><i class='fas fa-times-circle'></i> &nbsp;"."NO ROMANTIC DATE RESERVATION"; ?></td>
                             <td data-label="Pax" style="display:none;"></td>
                            <?php


                          }else{
                            ?>
                             <td data-label="Pax"><p ><?php echo"<b>Date:</b>".$row['datecategory'];?></p>
                                                  <p ><?php echo"<b>Place:</b>".$row['btable_date'];?></p>
                            </td>
                            <td style="display:none;"><?php echo"".$row['datecategory'];?></td>
                            <td style="display:none;"><?php echo"".$row['btable_date'];?></td>
                            <?php

                          }
                        ?>
                        <td ><?php echo"".$row['bstatus']; ?></td>
                        <td data-label="Pax"><?php echo"<b> Total:</b>".$row['bprice']."<Br><b>Deposit:</b>".$row['bdeposit']."<br><b>Balance:</b>".$row['balance']; ?></td>
                        <td style="display: none;" ><?php echo"".$row['bprice']; ?></td>
                        <td style="display: none;" ><?php echo"".$row['btime_in']; ?></td>
                        <td style="display: none;" ><?php echo"".$row['btime_out']; ?></td>
                        <td style="display: none;" ><?php echo"".$row['balance']; ?></td>
                        <td >
                              <button  id="confirmBtn" class="buttons confirmBtn ">Confirm</button>
                              <button id="declineBtn" class="buttons declineBtn " >Decline</button>
                        <?php 
                        if($row['paymentPhoto']==""){
                          ?>
                            
                            
                          <?php

                        }else{
                          ?>
                           <!--  <td style="background-color:#B1E8C1 !important; ">
                              <button  id="confirmBtn" class="buttons confirmBtn " >Confirm</button>
                              <button id="declineBtn" class=" buttons declineBtn ">Decline</button> -->
                              <button class="screenshot paymentProoftrigger "> Screenshot</button>
                          <!--   </td> -->
                          <?php
                        }
                        ?>
                        </td>
                        <td style="display:none;"><?php echo"".$guestNumber; ?></td>
                        <td style="display:none;"><?php echo"".$row['paymentPhoto']; ?></td>
                        <td style="display:none;"><?php echo"".$row['notes']; ?></td>
                     </tr>

                   <?php
                  }
                }else{
                  ?>
                    <tr>
                      <td style="display:none;">88</td>
                      <td>NO RECORDS</td>
                      
                    </tr>

                  <?php
                }
                ?>
                
            </tbody>
          </table>
         </div>

<!-- END OF OVERNIGHT ##################  -->
     <h2 style="font-weight: bold; letter-spacing: 2px; font-size:1.5em;"> DAY TOUR BOOKINGS</h2>
     
<!-- START OF DAYTOUR ##################  -->
        <div class="sb-example-1">
             <div class="search">
                <input type="text" class="searchTerm" placeholder="Search for name?" id="daytoursearch" onkeyup="daytour()">
                <button type="submit" class="searchButton" disabled>
                  <i class="fa fa-search"></i>
               </button>
             </div>
        </div>
        <div class="columns is-mobile" style="overflow: scroll;max-height: 600px; padding:0; margin:0;margin-top:3px;">
    <table class="styled-table" id="daytourtable">
      <thead>
          <tr >
              <th >Name</th>
              <th>Service</th>
              <th>Pax</th>
              <th>Date</th>
             
              <th>Status</th>
              <th>Price</th>
              <th>Action</th>


          </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM tbl_booking WHERE btype='Daytour' AND bdeposit <= 0 AND bstatus='Pending'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $bid = $row['customerID'];
                    $csql = "SELECT * FROM tbl_user WHERE ID = '$bid' ";
                    $cresult = $conn->query($csql);
                    $crow = mysqli_fetch_array($cresult);
                    $fullname = $crow['Userfname'].", " .$crow['Userlname'];
                    $guestNumber = $crow['Userpnumber'];
                     $bookingdate = $row['btime_in'];
                    $datenow = date('Y-m-d');//'2021-05-30';// 
                        // getting the day difference between two dates
                              $date1_ts = strtotime($bookingdate);
                              $date2_ts = strtotime($datenow);
                              $diff =  $date1_ts - $date2_ts;
                              $dateDiff = round($diff / 86400);
                             

                        if($dateDiff <= 3){
                          echo"<tr style='background-color:#FDEDEC'>";
                        }else{
                          echo "<tr>";
                        }

                   ?>
                     
                        <td style="display:none;"><?php echo"".$row['ID']; ?></td>
                       
                        <td><?php echo"".$fullname; ?></td>

                        <td><?php echo"".$row['btype']; ?></td>
                        <td ><?php echo"".$row['bpax']; ?></td>
                        <td ><p><?php echo"<b>Time In: </b>".date("F jS, Y h:s a", strtotime($row['btime_in'])); ?></p>
                                        <p><?php echo"<b>Time Out: </b>".date("F jS, Y  h:s a", strtotime($row['btime_out'])); ?></p></td>
                        
                         <td ><?php echo"".$row['bstatus']; ?></td>
                        <td data-label="Pax"><?php echo"<b> Total:</b>".$row['bprice']."<Br><b>Deposit:</b>".$row['bdeposit']."<br><b>Balance:</b>".$row['balance']; ?></td>

                        <td style="display: none;" ><?php echo"".$row['bprice']; ?></td>
                        <td style="display: none;" ><?php echo"".$row['balance']; ?></td>
                       
                      
                        <td style="display:none;"><?php echo"".$guestNumber; ?></td>
                        <td style="display: none;" ><?php echo"".$row['btime_in']; ?></td>
                        <td style="display: none;" ><?php echo"".$row['btime_out']; ?></td>
                        <td style="width:110px">
                              <!-- <input type="text" name="declineBtnID" value="<?php echo"".$row['ID'];?>"> -->
                              <button  id="confirmBtn" class="buttons confirmBtn1 " >Confirm</button>
                              <button id="declineBtn" class="buttons declineBtn ">Decline</button>
                        <?php 
                        if($row['paymentPhoto']==""){
                          ?>
                            
                           
                          <?php

                        }else{
                          ?>
                           
                              
                              <button class="screenshot paymentProoftrigger "> Screenshot</button>
                            
                          <?php
                        }
                        ?>
                        </td>
                         <!--  <td><button  class="confirmBtn1" >Confirm</button>
                              <button id="declineBtn" class="declineBtn">Decline</button>
                          </td> -->
                        <td style="display:none;"><?php echo"".$guestNumber; ?></td>
                        <td style="display:none;"><?php echo"".$row['paymentPhoto']; ?></td>
                         <td style="display:none;"><?php echo"".$row['notes']; ?></td>
                     </tr>

                   <?php
                  }
                }else{
                  ?>
                    <tr>
                      <td style="display:none;">88</td>
                      <td>NO RECORDS</td>
                      
                    </tr>

                  <?php
                }


        ?>




   
          
          <!--  <tr class="active-row"> --> 
            
      </tbody>
    </table>
  </div>

<!-- START OF DAYTOUR ##################  -->
</center>

</div>




<!-- payment proof modal-->

<div id="paymentProofModal" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content" style="width: 450px;">
    <span  class="close12">&times;</span>
    <form method="POST" enctype="multipart/form-data">
      <br>
      <h1 class="lineText label">Screenshot of Downpayment (Gcash)</h1> 

        <div class="container" style="padding:0;margin:0; text-align: center;">
          <img id="blah" src="#" alt="your sample image" />
        </div>
        <p id="notes"></p>

     
    </form>
  </div>

</div>
<!-- end of payment proof emodal-->


<script>

var paymentProofBtn          = document.querySelectorAll(".paymentProoftrigger");
var paymentProofModal        = document.getElementById("paymentProofModal");
for (var i = 0; i < paymentProofBtn.length; i++) {
 paymentProofBtn[i].onclick = function(e) {
   paymentProofModal.style.display = "block";


   $tr = $(this).closest('tr');
   var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      var data1 = $tr.children("td").find("p").map(function(){
        return $(this).text();
      }).get();
   console.log(data);

   

  if(data[2]=="Overnight"){  
    console.log(data[7])
    if(data[7]!=""){
      document.getElementById("blah").src = "../style/images/downpayments/"+data[17];
      document.getElementById("notes").innerHTML = data[18];
    }else{
      document.getElementById("blah").src = "../style/images/downpayments/"+data[16];
      document.getElementById("notes").innerHTML = data[17];
    }
  }else{
    document.getElementById("blah").src = "../style/images/downpayments/"+data[14];
    document.getElementById("notes").innerHTML = data[15];
  }

  }
}

var span12 = document.getElementsByClassName("close12")[0];

span12.onclick = function() {
  paymentProofModal.style.display = "none";
}

// Get the modal
var modal = document.getElementById("myModal");
var modaldaytour = document.getElementById("myModal-daytour");

// Get the button that opens the modal
var btn = document.querySelectorAll(".confirmBtn");
var btn1 = document.querySelectorAll(".confirmBtn1");

// Get the <span> element that closes the modal
var spanconfirm = document.getElementsByClassName("closeconfirm")[0];
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close1")[0];
// When the user clicks the button, open the modal 
for (var i = 0; i < btn.length; i++) {
 btn[i].onclick = function(e) {
   modal.style.display = "block";

   $tr = $(this).closest('tr');
   var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      var data1 = $tr.children("td").find("p").map(function(){
        return $(this).text();
      }).get();
      console.log(data)
  

    if(data[2]=="Overnight"){  

        if((data[7]=="" ) || (data[7]==" ")){
         document.getElementById("title").value = data[1] +" | "+data[2] +" | "+data[4].replace("||","")+"| Confirmed" ;
         //+" | Price:"+data[10]; 
         var timein = data[11].replace(" ", "T");
         var timout =  data[12].replace(" ", "T");
         document.getElementById("aid1").value = data[0];
         document.getElementById("startDate").value = timein;
         document.getElementById("endDate").value = timout;
         document.getElementById("price").value = data[13];
          document.getElementById("nightGNumber").value = "+"+data[15];
        }else{
        document.getElementById("title").value = data[1] +" | "+data[2] +" |"+data[4].replace("||","")+"|"+data[7].replace("||","")+" |"+data[8].replace("||","")+"| Confirmed";
        //+" | Price:"+data[10]; 
        var timein = data[12].replace(" ", "T");
         var timout =  data[13].replace(" ", "T");
         document.getElementById("aid1").value = data[0];
         document.getElementById("startDate").value = timein;
         document.getElementById("endDate").value = timout;
         document.getElementById("price").value = data[14];
         document.getElementById("nightGNumber").value = "+"+data[16];


        }
          

      }

  

 }
}
for (var i = 0; i < btn1.length; i++) {
 btn1[i].onclick = function(e) {
   modaldaytour.style.display = "block";

   $tr = $(this).closest('tr');
   var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
     
   console.log(data);
  
    document.getElementById("aid-daytour").value = data[0];
    document.getElementById("title-daytour").value = data[1]+" | "+data[2]+" | "+data[3]+" | "+'Confirmed';
    document.getElementById("price-daytour").value = data[7];
    //document.getElementById("date-daytour").value = data[4];
    var timein = data[10].replace(" ", "T");
    var timeout = data[11].replace(" ", "T");
    document.getElementById("timein-daytour").value = timein;
    document.getElementById("timeout-daytour").value = timeout;
    document.getElementById("dayGNumber").value = "+"+data[data.length -2];


  

 }
}


// When the user clicks on <span> (x), close the modal
spanconfirm.onclick = function(){
  modal.style.display = "none";
}
span.onclick = function() {
  modal.style.display = "none";
}
span1.onclick = function() {
  modaldaytour.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
   
  }else if(event.target == paymentProofModal){
     paymentProofModal.style.display = "none";
  }
}
</script>

<script>
// Get the modal
var declinemodal = document.getElementById("declinemyModal");

// Get the button that opens the modal
var declineBtn = document.querySelectorAll(".declineBtn");

// Get the <span> element that closes the modal
var declinespan = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
for (var i = 0; i < declineBtn.length; i++) {
 declineBtn[i].onclick = function(e) {
    e.preventDefault();
    declinemodal.style.display = "block";

    $tr = $(this).closest('tr');
   var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
     
   console.log(data);
   //document.getElementById("date-daytour").value = data[4];
    
  if(data[2]=="Overnight"){  

        if(data[7]==""){
         
         var timein = data[11].replace(" ", "T");
         var timout =  data[12].replace(" ", "T");
         document.getElementById("aid").value = data[0];
         document.getElementById("declineService").value =data[2];
         document.getElementById("declineGNumber").value="+"+data[data.length -1];
         document.getElementById("timeInDecline").value = timein;
          document.getElementById("timeOutDecline").value = timout;
        
        }else{
        
        var timein = data[12].replace(" ", "T");
         var timout =  data[13].replace(" ", "T");
           document.getElementById("declineService").value =data[2];
          document.getElementById("aid").value = data[0];
         document.getElementById("declineGNumber").value="+"+data[data.length -1];
         document.getElementById("timeInDecline").value = timein;
          document.getElementById("timeOutDecline").value = timout;
        
         


        }
          

      }else{
      var timein = data[10].replace(" ", "T");
      var timout =  data[11].replace(" ", "T");
      document.getElementById("declineService").value =data[2];
      document.getElementById("aid").value = data[0];
      document.getElementById("declineGNumber").value="+"+data[data.length -1];
       document.getElementById("timeInDecline").value = timein;
          document.getElementById("timeOutDecline").value = timout;

      }
     
   
  }
}
  function appClose(){
    declinemodal.style.display = "none";
  }

// When the user clicks on <span> (x), close the modal
declinespan.onclick = function() {
  declinemodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    declinemodal.style.display = "none";
  }
}

function appClose(){
    modal.style.display = "none";
  }
</script>
<script>

</script>


<script>

  // ########################################################################################### BUTTON SIDE MENU BAR
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




  <div id="myModal-deposit" class="modal-deposit fade-in">

    <!-- Modal content -->
    <div class="modal-content-deposit">
      <span class="close-deposit">&times;</span>
      <p>Some text in the Modal..</p>
    </div>

  </div>


  </body>
</html>
<?php
if(isset($_POST['logout'])){

  session_unset();
  session_destroy();

  ?>
 <script type="text/javascript">location.href = '../login.php';</script>
<?php

}else if(isset($_POST['submit-overnight'])){

  $id         = $_POST['aid-overnight'];
  $title      = $_POST['title-overnight'];
  $startDate  = $_POST['startDate'];
  $endDate    = $_POST['endDate'];
  $price      = $_POST['price-overnight'];
  $deposit    = $_POST['deposit-overnight'];
  $nightGNumber = $_POST['nightGNumber'];
 
  if($deposit <= 0 ||  $deposit > $price){

    echo '<script type="text/javascript">alert("Please input realistic numbers")</script>';

  }else{
    
    $textcolor  ="#FDFEFE";
    $textbg     ="#3498DB";

    $sql = "SELECT bdeposit FROM tbl_booking WHERE ID=$id";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $deposit1 = $row['bdeposit'];
    $totaldeposit = $deposit+$deposit1;
    $balance    = $price - $deposit;
    
    $sql = "UPDATE tbl_booking SET bdeposit = $totaldeposit, balance = $balance, bstatus = 'Confirmed'  WHERE ID=$id ";  //bstatus = 'Confirmed'
    if ($conn->query($sql) === TRUE) {
      

      $sql = "INSERT INTO events (appID, title, start_event, end_event, color, text_color)
      VALUES ('$id', '$title', '$startDate', '$endDate','$textbg','$textcolor')";
      mysqli_query($conn, $sql);

      // SMS notification
    //include 'smsNotification/nightConfirm.php';
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
    VALUES ('$customerID' ,'Confirm Overnight Booking ID: $id ', now(),'$fullname_admin', 'booking')";
    $conn->query($sql1);

      echo '<script type="text/javascript">alert("Sucessfully Confirmed, SMS Notification Sent")</script>';

    }else{
      echo "Error updating record: " . $conn->error;
    }

  //#3498DB
  //#FDFEFE


    echo("<meta http-equiv='refresh' content='1'>");
  }

}else if(isset($_POST['submit-daytour'])){

  $id         = $_POST['aid-daytour'];
  $title      = $_POST['title-daytour'];
 // $startDate  = $_POST['date-daytour'];
// $endDate    = $_POST['date-daytour'];
  $price      = $_POST['price-daytour'];
  $deposit    = $_POST['deposit-daytour'];
  $startDate     = $_POST['timein-daytour'];
  $endDate    = $_POST['timeout-daytour'];
  $dayGNumber = $_POST['dayGNumber'];


  $textcolor  ="white";
  $textbg     ="#FF5733";

   if($deposit <= 0 ||  $deposit > $price){

    echo '<script type="text/javascript">alert("Please input realistic numbers")</script>';

  }else{
  $sql = "SELECT bdeposit FROM tbl_booking WHERE ID=$id";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result);
  $deposit1 = $row['bdeposit'];
  $totaldeposit = $deposit+$deposit1;
  $balance    = $price - $deposit;
  
 

  $sql = "UPDATE tbl_booking SET bdeposit = $totaldeposit, balance = $balance, bstatus = 'Confirmed'  WHERE ID=$id ";  //bstatus = 'Confirmed'
  if ($conn->query($sql) === TRUE) {
    

    $sql = "INSERT INTO events (appID, title, start_event, end_event, color, text_color)
    VALUES ('$id', '$title', '$startDate', '$endDate','$textbg','$textcolor')";
    mysqli_query($conn, $sql);
    // SMS notification
    //include 'smsNotification/daytourConfirm.php';
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
    VALUES ('$customerID' ,'Confirm Daytour Booking ID: $id ', now(),'$fullname_admin', 'booking')";
    $conn->query($sql1);
    echo '<script type="text/javascript">alert("Sucessfully Confirmed, SMS Notification Sent")</script>';

  }else{
    echo "Error updating record: " . $conn->error;
  }

//#3498DB
//#FDFEFE


  echo("<meta http-equiv='refresh' content='1'>"); //will delete
  }

}else if(isset($_POST['appDecline'])){ // #######################

$id             = $_POST['aid'];
$declineGNumber = $_POST['declineGNumber'];
$timeInDecline  =$_POST['timeInDecline'];
$timeOutDecline =$_POST['timeOutDecline'];
$declineService =$_POST['declineService'];

$sql = "UPDATE tbl_booking SET bstatus='Declined' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {



      //SMS NOTIFICATION
      //include 'smsNotification/bookingDeclineSMS.php';

    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
    VALUES ('$customerID' ,'Decline Booking ID: $id ', now(),'$fullname', 'booking')";
    $conn->query($sql1);
      echo '<script type="text/javascript">alert("Appointment Declined")</script>';
      echo("<meta http-equiv='refresh' content='1'>");
    } else {
      echo "Error deleting record: " . $conn->error;
    }

 }
?>

