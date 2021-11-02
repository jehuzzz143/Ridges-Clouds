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
                  $fullname_admin = $rowedit['Userfname'].", ".$rowedit['Userlname'];
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

   
    <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     -->
 
   
    
     <!-- CSS -->
    <link rel="stylesheet" href="assets/allbooking.css">
    <!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Fontawesome  -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

 
     <!-- Title -->
     <title> All Bookings</title>
  </head>
  <!-- unloading the script-->
  <body  onload="renderDate(); initClock();" >
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
                <li><a href="announcement.php">Announcement</a></li>
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
      <div class="dropdown1" style="float:right; height:100%; background-color:; margin:0; padding:0; ">
        <button type="button" class="dropbtn1"  style="font-size:17px; background-color:#e09f5b; " >
            Welcome, FirstName <i class="fas fa-caret-down"></i>
        </button>
        <div class="dropdown-content1">
            <form method="POST">
               <button  type="button" class="buttonNav"onclick="location.href='account.php';"><i class="fas fa-edit"></i>  Account</button>
               <button  type="submit" class="buttonNav"name="logout"><i class="fas fa-sign-out-alt"></i>  Logout</button>
            </form>
        </div>

      </div>
  </div>

 
</div>
 <!-- ############################################################################################################################## Booking Details modal -->
<div class="modal fade-in" id="myModal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" >
    <div class="modal-content" style="width:700px;" >
        <span class="close">&times;</span>
        <form method="POST">
        <h5 class="label" >Booking Details: <input type="text" id="bid" name="bid" style="width: 100px; height: 40px;" ></input></h5>
        <hr>

                                
                 
                              <div class="columns">
                                <div class="column">
                                  <label class="label">Name:</label>
                                  <span id='name'></span>
                                </div>
                                <div class="column">
                                  <label class="label">Phone:</label>
                                  <span id='number'></span>
                                </div>
                                <div class="column">
                                  <label class="label">Email:</label>
                                  <span id='email'></span>
                                </div>
                              </div>


                   
                                <div class="columns">
                                  <div class="column">
                                    <label class="label" for="startDate">Time in</label>
                                    <input type="datetime-local" class="form-control datetimepicker" id="startDate" name="startDate">
                                  </div>
                                  <div class="column">
                                    <label class="label" for="endDate">Time out</label>
                                    <input type="datetime-local" class="form-control datetimepicker" id="endDate" name="endDate">
                                  </div>
                                </div>
                                
                        
                                <!-- errors will go here

                                <div class="columns">
                                  <div class="column">
                                    <label class="label" for="endDate">Romantic Date</label>
                                    <input type="text" class="form-control datetimepicker" id="romanticdate" name="romanticdate">
                                  </div>
                                  <div class="column">
                                    <label class="label" for="endDate">Date Time</label>
                                    <input type="text" class="form-control datetimepicker" id="datetime" name="datetime">
                                  </div>
                                </div>
 -->
                                <div class="columns">
                                <!-- 
                                  <div class="column is-3">
                                    <label class="label" for="startDate">Service</label>
                                    <select id="service" name="service">
                                      <option value="Daytour">DayTour</option>
                                      <option value="Overnight">Overnight</option>
                                    </select>
                                  </div>
                                  --> 
                                  
                                  <div class="column">
                                    <label class="label" for="endDate">Balance</label>
                                    <input type="text" class="form-control datetimepicker" id="balance" name="balance">
                                  </div>
                                  <div class="column">
                                    <label class="label" for="endDate"><span style="color:red;"></span>Payment</label>
                                    <input type="text" class="form-control datetimepicker" id="payment" name="payment" >
                                  </div>
                                </div>

                    <hr>

      <div class="modal-footer">
        <button type="button" class="buttonNav"  data-dismiss="modal">Close</button>
        <button type="button" class="buttonNav" >Refund</button>
        <button type="submit" class="buttonNav" name="submitBtn"> Submit </button>
      </div>
    </form>
  </div>
</div>




<!--###################################################################################################################  body-->
</div><br>

<h2 style="opacity: .6;margin-left: 4px;font-weight: bold;"> All Booking transaction</h2><br>
<div class="container-lg" style="background-color:;
   
                padding-top:20px;">
  


 <div class="columns is-mobile" style="background-color:; padding-left:50px; margin:0; background-color:;">
      
        <?php
          $sql = "SELECT * FROM tbl_booking WHERE bstatus='Pending'";
          $result = $conn->query($sql);
        ?>
        <div class="column" id="clicker" style="  border-left:10px solid #B9F0E0; ">
          
              <h1 style="color:#333948;">No. of Pending Booking:</h1>
              <h2 > <?php echo"".$result->num_rows;?>  <i id="rightside" class="fas fa-user-clock"></i></h2>
          
        </div>

        <?php
          $sql = "SELECT * FROM tbl_booking WHERE bstatus='Completed'";
          $result = $conn->query($sql);
        ?>
        <div class="column" id="clicker" style="  border-left:10px solid #B6D7F0;">
          
              <h1 style="color:#333948;">No. of Completed Booking:</h1>
              <h2 ><?php echo"".$result->num_rows;?>  <i id="rightside" class="fas fa-calendar-check"></i></h2>
          
        </div>
     
    </div>



<div class="sb-example-1">
    <div class="search">
        <input type="text" class="searchTerm" placeholder="Search for name ... " id="bookingsearch" onkeyup="search()">
        <button type="submit" class="searchButton" disabled>
          <i class="fa fa-search"></i>
       </button>
    </div>
    <div class="dropdown" style="float:right">
  <button class="dropbtn" ><text id="sortLabel">Sort</text> <i class="fas fa-sort"></i>  </button>
    <div class="dropdown-content">
      <a href="#" id="all">All</a>
      <a href="#" id="inc">Incomplete</a>
      <a href="#" id="cmp">Complete</a>
    </div>
</div>
</div>

  <div class="radiobtn">
  <input type="radio" id="servicetype1" name="servicetype" style="" value="Daytour" onclick="daytour()"  >DayTour  &nbsp &nbsp &nbsp &nbsp &nbsp</input>

  <input type="radio" id="servicetype2" name="servicetype" style="" onclick="daytour()" value="Overnight"> Overnight</input> 
  </div>
  


<div class="container-lg" style="overflow: scroll; padding:0; margin:0;margin-top:0px;">
  <table class="styled-table" id="bookingtable">
      <thead>
          <tr >
              <th>ID</th>
              <th >Name</th>
              <th>Type</th>
              <th>Date</th>
              
              <th>Room</th>
              <th>+Pax</th>
              <th>Romantic Date</th>
              <th>Price</th>
              <th>Status</th>
              <th>Transaction</th>
              

          </tr>
      </thead>
<?php
   include ( "../dbconnection/conn.php");
   
    // define how many results you want per page
    $results_per_page = 20;

    // find out the number of results stored in database
    $sql='SELECT * FROM tbl_booking';
    $result = mysqli_query($conn, $sql);
    $number_of_results = mysqli_num_rows($result);

    // determine number of total pages available
    $number_of_pages = ceil($number_of_results/$results_per_page);

    // determine which page number visitor is currently on
    if (!isset($_GET['page'])) {
      $page = 1;
    } else {
      $page = $_GET['page'];
    }

    // determine the sql LIMIT starting number for the results on the displaying page
    $this_page_first_result = ($page-1)*$results_per_page;

    // retrieve selected results from database and display them on page
    $sql='SELECT * FROM tbl_booking WHERE bdeposit > 0  LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)) {
      ?>

      
      <tbody>
          <?php
          if($row['bstatus']=='Completed'){
            ?>
              <tr >
            <?php
          }else{
            ?>
              <tr class="myBtn" class="eventModal">
            <?php

          }

          ?>
          
              <td><?php echo"".$row['ID']; ?></td>
              <td><?php echo"".$row['bname']; ?></td>
              <td ><?php echo"".$row['btype']; ?></td>
              <?php
                if($row['btype']=='Daytour'){
                   ?>
                    <td data-label="Date"><?php echo"<b>Time in: </b>".date("F jS, Y -- h:s a", strtotime($row['btime_in']))."<br><b>Time Out: </b>".date("F jS, Y -- h:s a", strtotime($row['btime_out'])); ?></td>
                    <td data-label="Pax"><?php echo"<i class='fas fa-times-circle'></i> NO ROOM"; ?></td>
                    <td data-label="Pax"><?php echo"".$row['bpax']; ?></td>
                    <td data-label="Pax"><?php echo"<i class='fas fa-times-circle'></i> NO ROMANTIC DATE"; ?></td>
                    <td data-label="Pax"><?php echo"<b> Total:</b>".$row['bprice']."<Br><b>Deposit:</b>".$row['bdeposit']; ?></td>
                    <td data-label="Pax"><?php echo"".$row['bstatus']; ?></td>
                   <?php
                }else{
                   ?>
                   <td data-label="Pax"><p><?php echo"<b>Time In: </b>".date("F jS, Y h:s a", strtotime($row['btime_in'])); ?></p>
                                        <p><?php echo"<b>Time Out: </b>".date("F jS, Y  h:s a", strtotime($row['btime_out'])); ?></p>
                   </td>
                   <td><?php echo"".$row['broom']; ?></td>
                  <td ><?php echo"".$row['bpax']; ?></td>

                  <!-- no booking condition -->
                  <?php 
                    if($row['datecategory']==''){
                      ?>
                        <td data-label="Pax"><?php echo"<i class='fas fa-times-circle'></i> NO ROMANTIC DATE"; ?></td>
                      <?php
                    }else{
                      ?>
                        <td data-label="Pax"><?php echo"<b>Date:</b>".$row['datecategory']."<Br><b>Place:</b>".$row['btable_date']; ?></td>
                      <?php
                    }          
                  ?>  
                  <td data-label="Pax"><?php echo"<b> Total:</b>".$row['bprice']."<Br><b>Deposit:</b>".$row['bdeposit']; ?></td>
                  <td data-label="Pax"><?php echo"".$row['bstatus']; ?></td>
                 
                   <?php
                }
                ?>
                  <td data-label="Pax" style="display:none"><?php echo"".$row['btime_in']; ?></td>
                  <td data-label="Pax" style="display:none"><?php echo"".$row['btime_out']; ?></td>
                  <td data-label="Pax" style="display:none"><?php echo"".date("Y-m-d h:m:s", strtotime($row['bdate'].substr($row['bdaytourtime'],0,8))); ?></td>
                  <td data-label="Pax" style="display:none"><?php echo"".date("Y-m-d h:m:s", strtotime($row['bdate'].substr($row['bdaytourtime'],12,20))); ?></td>
                  <td data-label="Pax" style="display:none"><?php echo"".$row['balance']; ?></td>
                  <td data-label="Pax" style="display:none"><?php echo"".$row['bdate']; ?></td>

                <?php
                if ($row['balance'] <= 0) {
                  ?>
                    <td style="background-color: #DAF7A6; ">Fully Paid <?php echo"<br><b>Balance:</b>".$row['balance']; ?></td>

                  <?php
                }else{
                  ?>
                    <td style="background-color:#FF5959;color:white;">Incomplete Payment <?php echo"<br><b>Balance:</b>".$row['balance']; ?></td>
                  <?php
                }
                $cstmrid = $row['customerID'];
                $sql1 = "SELECT Userfname, Userlname, Useremail, Userpnumber FROM tbl_user WHERE ID = '$cstmrid'";
                $result1 = $conn->query($sql1);
                 while($row1 = $result1->fetch_assoc()) {
                    
                 
                
                
              ?>
                
                <td style="display:none"> <?php echo "".$row1['Useremail'];?> </td>
                <td style="display:none"> <?php echo "".$row1['Userpnumber'];?> </td>
              <?php 
 }
              ?>
                
           
             
          </tr>

      </tbody>
   

    <?php
    }
    ?>
      </table>
          <?php
    
    // display the links to the pages
    for ($page=1;$page<=$number_of_pages;$page++) {

    ?>

    <div class="container">
      <ul class="nav12">
          <li class="pagenumber"><?php echo '<a  href="allbooking.php?page=' . $page . '">' . $page . '</a> '; ?></li>
      </ul>
    </div>
    <?php
      
    }    


?>
    </div>
<center>
  <h2 style="font-weight: bold; letter-spacing: 2px; font-size:1.5em;"> REFUND REQUEST</h2>
</center>
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
                $sql = "SELECT * FROM tbl_booking WHERE bstatus='Refund Requested' OR  bstatus='Refund Request Approved' " ;
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
                             

                          echo "<tr>";
                   
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
                        <td data-label="Pax"><?php echo"<b> Total:</b>".$row['bprice']."<Br><b>Deposit:</b>".$row['bdeposit']."<br><b>Refund:</b>".$row['refund']; ?></td>
                        <td style="display: none;" ><?php echo"".$row['bprice']; ?></td>
                        <td style="display: none;" ><?php echo"".$row['btime_in']; ?></td>
                        <td style="display: none;" ><?php echo"".$row['btime_out']; ?></td>
                        <td style="display: none;" ><?php echo"".$row['balance']; ?></td>
                        <td >
                            <?php 
                              if($row['bstatus']=='Refund Requested'){
                                ?>
                                  <button  id="confirmBtn" class="buttons refundBtn">Confirm</button>
                                <?php
                              }else{
                                ?>

                                <?php
                              }
                            ?>
                             
                              
                 
                        </td>
                        <td style="display:none;"><?php echo"".$guestNumber; ?></td>
                        <td style="display:none;"><?php echo"".$row['paymentPhoto']; ?></td>
                        <td style="display:none;"><?php echo"".$row['notes']; ?></td>
                        <td style="display:none;"><?php echo"".$row['gcash']; ?></td>
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


  
</div>
<?php 
  include 'confirmRefund.php';
?>
<script>
  // ################################################################################## Search
  function search() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("bookingsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("bookingtable");
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
function daytour(){
  var input, filter, table, tr, td, i, txtValue;
  if(document.getElementById("servicetype1").checked){
    input = document.getElementById("servicetype1").value;
  }else{
    input = document.getElementById("servicetype2").value;
  }
  

  table = document.getElementById("bookingtable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
 
      if (input == td.textContent) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>
<script>
   table = document.getElementById("bookingtable");
    tr = table.getElementsByTagName("tr");
    totaltr =tr.length;


  //########################################################################### pending sort 
  //ito palang may function kasi di pa maayos yung laman ng table, not sure kung yun talaga laman, kopyahin nalang
  function pending(){

    document.getElementById("sortLabel").innerHTML = "Pending";

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("pen").innerHTML;
  table = document.getElementById("bookingtable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[9];
  
   if (td) {
   
      if (input == td.textContent) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
    }
  }
  // ###################################################################### All booking sort
  document.getElementById("all").onclick = function(){

    document.getElementById("sortLabel").innerHTML = "Sort";
    
    var   i,td ;


     for (i = 0; i < totaltr; i++) {
        td = tr[i].getElementsByTagName("td")[15];
         
      if(td){
            
      if(td.textContent != ""){
       
        tr[i].style.display ="";

      }else{
        tr[i].style.display ="none";
      }
      
    }
    
    }
  }
  
  // ###################################################################### incomplete booking sort
  document.getElementById("inc").onclick = function(){
    document.getElementById("sortLabel").innerHTML = "Incomplete";

     var input, filter, table, tr, td, i, txtValue;
     input = document.getElementById("inc").innerHTML;
     table = document.getElementById("bookingtable");
     tr = table.getElementsByTagName("tr");

     for (i = 0; i < tr.length; i++) {
     td = tr[i].getElementsByTagName("td")[15];
    
    if (td) {
      console.log(td.textContent) 
      if (td.textContent.includes('Incomplete Payment')) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
    }
  }
//#################################################################### complete
  document.getElementById("cmp").onclick = function(){
    document.getElementById("sortLabel").innerHTML = "Complete";

     var input, filter, table, tr, td, i, txtValue;
     input = 'Fully Paid';
     table = document.getElementById("bookingtable");
     tr = table.getElementsByTagName("tr");
     for (i = 0; i < tr.length; i++) {
     td = tr[i].getElementsByTagName("td")[15];
    
    if (td) {
   
      if (td.textContent.includes("Fully Paid")) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
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
    <script type="text/javascript">
var modal = document.getElementById("myModal");

var btn = document.querySelectorAll(".myBtn");

var span = document.getElementsByClassName("close")[0];


for (var i = 0; i < btn.length; i++) {
 btn[i].onclick = function(e) {
    e.preventDefault();
    modal.style.display = "block";

     $tr = $(this).closest('tr');
      
      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      
      console.log(data);
    
    

      if(data[2]=='Daytour'){
      //var timecutin = data[11].substring(0, 5);
      //console.log(timecutin);
     // console.log(timecutin.format("H:MM"));
//
      var timein = data[11].replace(" ", "T");
      var timeout = data[12].replace(" ", "T");
        console.log(timein);
       document.getElementById('bid').value = data[0];
       document.getElementById('startDate').value = timein;
      document.getElementById('endDate').value = timeout;
      document.getElementById('balance').value = data[13];

      }else{
      var timein = data[9].replace(" ", "T");
      var timeout = data[10].replace(" ", "T");
      console.log(timein);
      document.getElementById('bid').value = data[0];
      document.getElementById('startDate').value = timein;
      document.getElementById('endDate').value = timeout;
      document.getElementById('balance').value = data[13];
      }

      document.getElementById('name').innerHTML = data[1];
      document.getElementById('number').innerHTML = "+"+data[17];
      document.getElementById('email').innerHTML = data[16];



  }
}



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
 
}


function close1(){
   modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


</script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
}else if(isset($_POST['submitBtn'])){
 

$timein        = $_POST['startDate'];
$timeout       = $_POST['endDate'];
$balance       = $_POST['balance'];
$payment       = $_POST['payment'];
$bid           = $_POST['bid'];

$change        = 0;

if ($payment == null) {
  $sql = "UPDATE tbl_booking SET btime_in='$timein', btime_out='$timeout' WHERE ID=$bid";
  if ($conn->query($sql) === TRUE) {
    $sql = "UPDATE events SET start_event='$timein', end_event='$timeout' WHERE appID='$appid'";
    $conn->query($sql);
    echo '<script type="text/javascript">alert("Appointment Succesfully rescheduled")</script>';
    echo("<meta http-equiv='refresh' content='1'>");
  }else{
    echo "Error updating record: " . $conn->error;
  }



  //echo '<script type="text/javascript">alert("asdadsadsa")</script>';
}else{
  if($payment<$balance){
    echo '<script type="text/javascript">alert("Insufficient Payment")</script>';
  }else{

     $sql = "SELECT * FROM tbl_booking WHERE ID=$bid";
     $result = $conn->query($sql);
     $row = mysqli_fetch_array($result);
     $appid = $row['ID'];
     $deposit = $row['bdeposit'];
     $totalprice = $row['bprice'];
     $totaldeposit = $payment+$deposit;
     $balance = $balance - $payment;
     if($balance <= 0){
      $balance =0;
     }
     if($totaldeposit > $totalprice){
      $change = $totaldeposit - $totalprice;
      $totaldeposit = $totaldeposit - $change;
     }else{
      $totaldeposit = $payment + $deposit;
     }
     

     $sql = "UPDATE tbl_booking SET bstatus='Completed', bdeposit = $totaldeposit, balance = $balance WHERE ID=$bid";
     if ($conn->query($sql) === TRUE) {
      
      $sql = "UPDATE events SET color='#000000', text_color = '#FFFFFF', title = REPLACE(title,'Confirmed','Completed') WHERE appID='$appid'";
      $conn->query($sql);

      $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
      VALUES ('$customerID' ,'Finish Booking ID: $id transaction', now(),'$fullname_admin', 'booking')";
      $conn->query($sql1);
      echo '<script type="text/javascript">alert("Thank you! your change is :' . $change . '")</script>';
      echo("<meta http-equiv='refresh' content='1'>");
    } else {
      echo "Error updating record: " . $conn->error;
    }
   }
}


}


?>

