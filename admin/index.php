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
                $customerID = $rowedit['ID'];
                $fname = $rowedit['Userfname']." ".$rowedit['Userlname'];
                $fullname = $rowedit['Userfname'].", ".$rowedit['Userlname'];
                $image =$rowedit['Userimage'];
                $usertype = $rowedit['Usertype'];
                $path= "upload/profilepicture/".$image;
            }

     }



?>
<?php
include "../dbconnection/conn.php";


//adding new visitor
$visitor_ip=$_SERVER['REMOTE_ADDR'];
//below for testing
//$visitor_ip ="54:54:54:555";
$query="SELECT * FROM tbl_visitor WHERE ip_address='$visitor_ip'";
$result=mysqli_query($conn, $query);
if(!$result){
  die("Retriving Query Error <br>".$query);
}
$total_visitors=mysqli_num_rows($result);

if($total_visitors<1){
  $query="INSERT INTO tbl_visitor(ip_address) VALUES ('$visitor_ip')";
  $result=mysqli_query($conn, $query);
}

/* ############################################################################# ^Ip addresss insertion */
//retriving existing visitors
$query="SELECT * FROM tbl_visitor";
$result=mysqli_query($conn, $query);

if(!$result){
  die("Retriving Query Error <br>".$query);
}
$total_visitors=mysqli_num_rows($result);

if($total_visitors<1){
  $query="INSERT INTO tbl_visitor(ip_address) VALUES ('$visitor_ip')";
  $result=mysqli_query($conn, $query);
}
?>
<html lang="en" dir="ltr">
  <head>
    <!--Cover to use all symbol all over the world -->
    <meta charset="utf-8">
    <!-- responsive viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
 

    <!-- CCS-->
    <link rel="stylesheet" href="assets/dashboard.css">

    

    
    <!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Fontawesome  -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Bookings','Sales'],

          <?php 

          $sql = "SELECT DATE_FORMAT(`btime_in` , '%m') AS MONTH, COUNT(*) as x, SUM(bdeposit) as sales
          FROM tbl_booking 
          WHERE bstatus = 'Completed'
          GROUP BY MONTH;";
          $result = mysqli_query($conn,$sql);
        

         

            while($row = mysqli_fetch_array($result)) {
              $month = (string)$row['MONTH'];
              $x = $row['x'];
              $sales = $row['sales'];
              if($sales > 1000){
                 $sales = $sales / 1000;
                 $sales = (string)$sales.'K';
              }else{
                $sales = (string)$sales.'H';
              }
             

             
              if($month == '01'){
                $month = 'January';
               
              }else if($month == '02'){
                $month = 'february';
              }else if($month == '03'){
                $month = 'March';
              }else if($month == '04'){
                $month = 'April';
              }else if($month == '05'){
                $month = 'May';
              }else if($month == '06'){
                $month = 'June';
              }else if($month == '07'){
                $month = 'Jule';
              }else if($month == '08'){
                $month = 'August';
              }else if($month == '09'){
                $month = 'September';
              }else if($month == '10'){
                $month = 'October';
              }else if($month == '11'){
                $month = 'November';
              }else if($month == '12'){
                $month = 'December';
              }else if($month == '0'){
                $month = 'tae*';
              }else{
                $month = 'idiot';
              }
             echo "['$month',$x,'$sales'],";
             ?>
           
             <?php
              
             
            }
        

          ?>
       
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Monthly booking performance',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

  </head>
  <!-- unloading the script-->
  <body  onload="renderDate(); initClock();" >
<!-- ############################################################################################## side menu -->
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
            <li><a href="../calendar"  target="_blank"  rel="noopener noreferrer" style=""> Schedule</a></li>
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

<div class="container mobile" style="background-color:;
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
<!-- ############################################################################################## digital clock -->
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
    
<!-- ############################################################################################## digital clock script-->
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
<!-- ############################################################################################## Calendar  -->
  <div class="wrapper">
    <div class="calendar">
      <div class="month">
        <div class="prev" onclick="moveDate('prev')">
          <span>&#10094;</span>
        </div>
        <div>
          <h2 class="monthcolor" id="month"></h2>
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
<!-- ############################################################################################## Calendar script -->
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
<div class="columns is-mobile mobile2" style="background-color:;
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


  <div class="column " style="background-color:; margin:0;padding:0;" >
      <div class="dropdown" style="float:right; height:100%; background-color:; margin:0; padding:0; ">
        <button type="button" class="dropbtn"  style="font-size:17px; background-color:#e09f5b; " >
            Welcome, FirstName <i class="fas fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
           <form method="POST">
             <button  type="button" class="buttonNav" onclick="location.href='account.php';"><i class="fas fa-edit"></i>Account</button>
             <button  type="submit" class="buttonNav" name="logout"><i class="fas fa-sign-out-alt fa-sm"></i>Logout</button>
           </form>
        </div>

      </div>
  </div>

 
</div>
<br>
<!-- ###################################################################################### BODY -->

<center><br></center>
<div class="container is-mobile " style="background-color:;

              
                padding-left:30px;
                padding-right:50px;
                padding-bottom:10px;
                margin:0;">
  <center><br>

    <div class="columns is-mobile" style="background-color:;">
      
        <div class="column" id="clicker" style="  border-left:10px solid #333948; margin-right:5%;">
          
               
            
              <h1 style="color:black;">  No. Visitors:</h1>
              <h2 > <?php echo"".$total_visitors; ?> <i id="rightside" class="fas fa-eye"></i></p></h2>
          
        </div>
        <div class="column" id="clicker" style="  border-left:10px solid #333948; margin-right:5%;">
          
              <h1 style="color:black;">  No. Clicks:</h1>
              <h2 > <?php echo file_get_contents('../count.txt'); ?> <i id="rightside" class="fas fa-mouse"></i></h2>
          
        </div>
        <div class="column" id="clicker" style="  border-left:10px solid #333948;">
              <?php
                $sql = "SELECT * FROM tbl_user WHERE Usertype=1";
                $result = $conn->query($sql);
              ?>
              <h1 style="color:black;">  No. Accounts:</h1>
              <h2 > <?php echo"".$result->num_rows;?> <i id="rightside" class="fas fa-signal"></i></h2>
        </div>
     
    </div>
<div class="column is-full">

   <a class="weatherwidget-io" href="https://forecast7.com/en/14d58121d33/tanay/" data-label_1="TANAY" data-label_2="WEATHER" data-theme="original" data-basecolor="#333948" >TANAY WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

</div>
<div class="column is-full">

   <a href="../calendar" class="btn-explore button" target="_blank" rel="noopener noreferrer"  style="">CALENDAR SCHEDULE</a>

</div>

<br><br>
<div id="columnchart_material" style="width: 100%; height: 500px;margin-bottom: 70px;"></div>
    <div class="columns is-desktop" style="background-color:;">

      <div class="column is-8" >

   
          <div class="container" id="firstcontainer"  >
            <div class="sticky">
              <h2>REVIEWS</h2>
              <hr>
            </div>
            <?php 
              $sql = "SELECT * FROM tbl_review ";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  $reviewImagePath = "../style/images/reviews/".$row['reviewPhoto'];
                  $cstmrId = $row['costumerID'];
                  $cstmrId = str_replace(" ","",$cstmrId);
                  $costumerDetails = mysqli_query($conn,"SELECT * FROM tbl_user WHERE ID='$cstmrId'");
                  $costumerRow= mysqli_fetch_assoc($costumerDetails);
                  $costumerPhotoPath = "../customer/profilepicture/".$costumerRow['Userimage'];

                  if($row['status'] == 'disabled'){
                    ?>
                    <div class="columns is-gapless is-3 is-desktop is-multiline review-row"data-aos="fade-up" style="background-color:#FFE9E9;">
                    <?php
                  }else{
                    ?>
                    <div class="columns is-gapless is-3 is-desktop is-multiline review-row"data-aos="fade-up" >
                
                    <?php
                  }

                  ?>
                  <!-- <div class="columns is-gapless is-desktop is-multiline review-row"data-aos="fade-up" > -->
                    <p style="display:none;"><?php echo "".$row['ID'] ?></p>
                    <p style="display:none;"><?php echo "".$row['status'] ?></p>
                    <div class="column is-3">
                      <div class="container icon-container">
                       <img src="<?php echo"".$costumerPhotoPath; ?>" alt="Customer Profile">
                        <h1><?php echo"".$costumerRow['Userfname']." ".$costumerRow['Userlname'];?></h1>
                      </div>
                    </div>

                    <div class="column is-6 comment">
                      <h1><?php echo"".$row['dateReview'];?></h1>

                      <p><?php echo"".$row['description'];?>  </p>
                      <div class="column" style="text-align: center;">
                        <form action="index.php" method="POST">

                          <button type="submit" name="SaveReview" class="reviewBtn reviewBtnSave" ><i class="fa fa-upload" aria-hidden="true"></i></button>
                          <input type="hidden" class="reviewID"  name="reviewID" id="reviewID" value="<?php echo"".$row['ID'];?>">
                          <button type="submit" name="disabledReview" class="reviewBtn reviewBtnDisabled" ><i class="fas fa-archive"></i></button>
                        </form>
                      </div>
                    </div>
                    <div class="column is-3">
                      <div class="contiainer icon-container">
                        <img class="zoom"src="<?php echo"".$reviewImagePath;?>" alt="...">
                      </div>
                      <center>
                      <?php 
                      for($i = 1; $i<=5;$i++){
                      if($i<= $row['rate']){
                        ?>
                          <i class="fas fa-star" style="color:#FEB727; font-size: 20px;"></i>
                        <?php
                      }else{
                        ?>
                          <i class="far fa-star" style="color:#FEB727; font-size: 20px;"></i>
                        <?php
                      }

                      }

                      ?>
                      </center>
                    </div>
                  </div>


                  
                  <?php

                }
              }else{
              ?>
              <div class="columns is-gapless is-desktop is-multiline review-row"data-aos="fade-up" >
              <div class="column is-2">
              <div class="container icon-container">
              <img src="style/images/4.jpg" alt="...">
              <h1>Cyril Samonte</h1>
              </div>
              </div>

              <div class="column is-7 comment">
              <h1>4/28/2021</h1>
              <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut le et dolore magna aliqua."  </p>
              </div>
              <div class="column is-3">
              <div class="contiainer icon-container">
              <img class="zoom" src="style/images/camp1.jpg" alt="...">
              </div>
              <div class="stars">
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              </div>
              </div>
              </div>
              <?php
              }
            ?>
          </div>
        </div>

  <div class="column is-4 " id="activitylog">
            <div class="container "  style="background-color:white; margin:0; padding: 0; position:sticky; top:0; z-index: 1;"><h2 style="color:black;">Activity Logs</h2></div>
            <?php

            $sql = "SELECT * FROM tbl_audit  ORDER BY ID DESC LIMIT 30";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
        

              while($row = $result->fetch_assoc()) {
                $id12= $row['UserID'];
                $sql12 = "SELECT * FROM tbl_user WHERE ID = '$id12'";
                $result12 = $conn->query($sql12);
                $row12 = mysqli_fetch_array($result12);
            
                $path2 = "upload/profilepicture/".$row12['Userimage'];
                
                ?>
                  <div class="columns  is-desktop"  style="background-color: white; border-top:1px solid black; padding:0; margin:0; ">
                    <div class="column is-one-fifth" >
                        <?php 

                        if($row12['Userimage'] ==null){
                          ?>
                             <img src="..style/images/admin/admin" id="auditdp">
                          <?php
                        }else{
                          ?>
                            <img src="<?php echo"".$path2 ?>" id="auditdp">
                          <?php
                        }


                        ?>
                        
                        
                    </div>
                    
                    <div class="column" style="text-align: left;font-style: italic; opacity:.8; padding:1px; ">
                    - <b><?php echo "".$row['Name'];?>:</b> <small> <?php echo "".$row['Description'];?></small>
                      <p style="color:green; text-align:right; font-weight: bold;"><?php echo "".$row['Date_edit'];?></p>
                    </div>
                  </div>




                <?php
              }
            }else{
            echo "0 results";
            }


            ?>
                  
        </div>

 
    </div>   

  </center>


<br>
  <?php
  $d = date("Y/m/d");
    $tomorrow = date('Y-m-d', strtotime( $d . " +1 days"));
   ?>

 <h2>Tomorrow Booking Summary - <?php echo"".$tomorrow;?></h2>
 <h1 class="bookingType">Overnight</h1> 

 
  <div class="columns">
    <?php
    $sql = "SELECT * FROM `tbl_booking` WHERE DATE(btime_in) = '$tomorrow' AND btype = 'Overnight' AND bstatus ='Confirmed'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
  
      while($row = $result->fetch_assoc()) {
        $costumer_id = $row['customerID'];
        $sql122 = "SELECT * FROM tbl_user WHERE ID = '$costumer_id'";
        $result122 = $conn->query($sql122);
        $row122 = mysqli_fetch_array($result122);
        ?>
          <div class="column" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <p>Booking ID: <?php echo"".$row['ID'] ?></p>
            <p>Name: <?php echo"".$row122['Userfname'].' '.$row122['Userlname'] ?></p>
            <p>Rooms: <?php echo"".str_replace("||","",$row['broom']); ?></p>
            <p>pax:  
              <?php 
              $numbers = substr_count($row['broom'],"C");
              // echo"".$numbers."-";
              $pax_number = $numbers * 2;
              if(strpos($row['broom'],'C9')){
                  echo"".$pax_number + 6 - 2 + $row['bpax'];
              }else{
                echo"".$pax_number + $row['bpax'];
              }
              ?>
              
            </p>

            <!-- romantic date -->
             
            <?php 
              if($row['btable_date']==""){
                echo"<p>Romantic Date: <mark style='background-color:#F4F4F4;'>None</mark></p>";
              }else{
                echo"<p>Romantic Date: ".str_replace("||","",$row['btable_date']."</p>");
              }
            
            ?>
            <!-- romantic date -->
            <?php 
                if($row['btable_time']==""){
                  echo"<p>Dating Time: <mark style='background-color:#F4F4F4;'>None</mark></p>";
                }else{
                  echo"<p>Dating Time: ".$row['btable_time']."</p>";
                }
              
              ?>
            <?php 
              if($row['add_ons']!=""){
                echo"<p>Add Ons: ".str_replace("|","",$row['add_ons']."</p>");
              }else{
                echo"<p>Add Ons: <mark style='background-color:#F4F4F4;'>None</mark></p>";

              }
            ?>
            <p>Total Price: <?php echo"".$row['bprice']; ?></p> 
            <p>Deposit: <?php echo"".$row['bdeposit']; ?></p> 
            <p>Balance: <?php echo"".$row['balance']; ?></p> 
            <p>Status: <?php echo"".$row['bstatus']; ?></p> 
          </div>

        <?php
       
      }
    }else{
      ?>
        <div class="columns is-mobile " id="announcementContainer" style="width:80%; margin-top: 10px; color:red; text-align: center;justify-content: center;"  >       
          <p> No Booking for Tomorrow</p>
        </div>
      <?php
    }
    ?>
    
     
    
  </div>
  
  <h1 class="bookingType">Daytour</h1> 
  <div class="columns">
    <?php
    $sql = "SELECT * FROM `tbl_booking` WHERE DATE(btime_in) = '$tomorrow' AND btype = 'Daytour' AND bstatus ='Confirmed'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
  
      while($row = $result->fetch_assoc()) {
        $costumer_id = $row['customerID'];
        $sql122 = "SELECT * FROM tbl_user WHERE ID = '$costumer_id'";
        $result122 = $conn->query($sql122);
        $row122 = mysqli_fetch_array($result122);
        ?>
          <div class="column" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <p>Booking ID: <?php echo"".$row['ID'] ?></p>
            <p>Name: <?php echo"".$row122['Userfname'].' '.$row122['Userlname'] ?></p>
            <p>In and Out:  <?php echo"".$row['bdaytourtime']?></p>
            <p>pax:  <?php echo"".$row['bpax']?></p>
            <p>Total Price: <?php echo"".$row['bprice']; ?></p> 
            <p>Deposit: <?php echo"".$row['bdeposit']; ?></p> 
            <p>Balance: <?php echo"".$row['balance']; ?></p> 
            <p>Status: <?php echo"".$row['bstatus']; ?></p> 
          </div>

        <?php
       
      }
    }else{
      ?>
        <div class="columns is-mobile " id="announcementContainer" style="width:80%; margin-top: 10px; color:red; text-align: center;justify-content: center;"  >       
          <p> No Daytour Booking for Tomorrow</p>
        </div>
      <?php
    }
    ?>
    
     
    
  </div>

<Br><br>
<?php 
  include ("reviewbuttonScript.php");


          
?>

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
}else if(isset($_POST['SaveReview'])){
  $id = $_POST['reviewID'];
  $sql = "UPDATE tbl_review SET status='enable' WHERE ID ='$id'";
 
  if ($conn->query($sql) === TRUE) {
    $sql122 = "SELECT * FROM tbl_review WHERE ID = '$id'";
    $result122 = $conn->query($sql122);
    $row122 = mysqli_fetch_array($result122);

    $cstmr_review_id = $row122['costumerID'];
    $cstmr_review_id = str_replace(' ', '', $cstmr_review_id);

   

    $sql = "SELECT * FROM tbl_user WHERE ID = '$cstmr_review_id'";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
     
      while($row = $result->fetch_assoc()) {
         $cstmr_review_name = $row['Userfname'].' '.$row['Userlname'];
      }
    }


     
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name)
    VALUES ('$customerID' ,'Posted review of costumer named $cstmr_review_name - status to enable', now(),'$fullname')";
    $conn->query($sql1);

  } else {
    echo "Error updating record: " . $conn->error;

  }

    echo("<meta http-equiv='refresh' content='1'>");
}else if(isset($_POST['disabledReview'])){
  $id = $_POST['reviewID'];
  $sql = "UPDATE tbl_review SET status='disabled' WHERE ID = '$id'";

  if ($conn->query($sql) === TRUE) {
    $sql122 = "SELECT * FROM tbl_review WHERE ID = '$id'";
    $result122 = $conn->query($sql122);
    $row122 = mysqli_fetch_array($result122);

    $cstmr_review_id = $row122['costumerID'];
    $cstmr_review_id = str_replace(' ', '', $cstmr_review_id);

   

    $sql = "SELECT * FROM tbl_user WHERE ID = '$cstmr_review_id'";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
     
      while($row = $result->fetch_assoc()) {
         $cstmr_review_name = $row['Userfname'].' '.$row['Userlname'];
      }
    }







    
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name)
    VALUES ('$customerID' ,'Remove costumer review of $cstmr_review_name - status to disabled', now(),'$fullname')";
    $conn->query($sql1);

  } else {
    echo "Error updating record: " . $conn->error;
  }

    echo("<meta http-equiv='refresh' content='1'>");
}



// 

?>
