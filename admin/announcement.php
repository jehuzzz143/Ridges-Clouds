<!DOCTYPE html>
<!-- OMBROG, Jehu march 22 2021 -->
<html lang="en" dir="ltr">
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



  <head>
    <!--Cover to use all symbol all over the world -->
    <meta charset="utf-8">
     <!-- responsive viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    -->

    <!-- CSS -->
    <link rel="stylesheet" href="assets/announcement.css">
    <!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Fontawesome  -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

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
            <li><a href="../calendar"  target="_blank" rel="noopener noreferrer"style=""> Schedule</a></li>
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
                <!--digital clock start-->
    <div class="datetime">
      <div class="date">
        <span id="dayname">Day</span>,
        <span  id="tmonth">Month</span>
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
           <button  type="button" class="buttonNav" id="" onclick="location.href='account.php';"><i class="fas fa-edit"></i>  Account</button>
           <button  type="button"class="buttonNav" ><i class="fas fa-sign-out-alt"></i>  Logout</button>
        </div>

      </div>
  </div>

 
</div>

<!-- ######################################################################################################################################################################################################################################################################################################################### Modal announcement -->
<div class="modal fade-in" id="myModal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="announcement.php" method="POST">
          <span class="close">&times;</span>
            <h5 class="label" >Update Announcement: <input  type="text" id="aid" name="aid" readonly style="width:15%; height:25px;"></input></h5>
            <hr>
                  <label class="label" for="startDate">Header</label>
                  <input type="text" class="form-control" id="header" name="header"><br>
                  <!-- errors will go here -->
                  <label class="label" for="startDate">Description</label><br>
                  <textarea type="text" class="form-control" id="description" name="description" style="height: 200px; width:100%;"></textarea>
                  <!-- errors will go here -->

                  <label class="label" for="startDate">Start time</label>
                  <input type="datetime-local"  id="startDate" name="startDate">
                  <!-- errors will go here -->
                          
                  <label class="label" for="startDate">End time</label>
                  <input type="datetime-local"  id="endDate" name="endDate">
                  <!-- errors will go here -->
           

          <hr>
            <div class="modal-footer">
                <button type="button" class="btnModal"  data-dismiss="modal">Close</button>
                <input type="submit" class="btnModal" name="archive" value="archive" id="archive" ></button>
                <input type="submit"class="btnModal" name="save" class="btnModal"value="Save" id="save"></input>
                <input type="submit" class="btnModal" name="recover" value="recover" id="recover"></input>
                <input type="submit" class="btnModal" name="update" value="update"   id="update"></input>
                <input type="submit" class="btnModal" name="delete" value="delete"   id="delete"></input>
            </div>
        </form>
    </div>
  </div>

</div><br>

<div class="container-lg" style="background-color:;
     ">    

  <center>

      <button style="" class="btn" id="add" >New announcement</button> 

    
    <div class="container is-mobile bg-white ">
      <div class="container" id="text-announce">
       <h3 style="font-size:20px;color:black;"> ACTIVE ANNOUNCEMENTS </h3>
      </div>
    </div>
<div class="container"  >
<!--  ACTIVE ANNOUNCEMENT -->
  <?php


  $sql = "SELECT * FROM tbl_announcement WHERE status='active'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
  ?>
  <div class="columns is-mobile shadow modal-box" id="myBtn" style="width:800px; padding:3px; color:black; margin-top:10px;"  >  
       <!-- <div class="row border eventModal" style="width:100%; margin:0;padding:0;" data-toggle="modal"  data-target="#announcementDetails"> -->
          <div class="column is-1" style="color:white; background-color: #333948;">
              <img src="../style/images/info.png" class="mx-auto d-block" id="info-logo">
              
              <h2 id="announcementId" style="display:none;"><?php echo "".$row["ID"];?></h2> 
              
          </div>
          <div class="column is-9" >
            
            <span id="title1"><?php echo "".$row["header"];?> </span>  
            <p class="text-start" id="description1"><?php echo "".$row["Description"];?></p>  
          </div>
          <div class="column is-2" style="padding:10px; background-color:   #27ae60;color:black;">
            <b>Start Date</b>
            <p class="text-start" id="startDate1" style=""><?php echo "".$row["start"];?></p>  
            <b>End Date</b>
            <p class="text-start" id="endDate1" style=""><?php echo "".$row["endd"];?></p>  
          </div>
      
    </div>
  <?php
  }
  }else{
    ?>
      <div class="columns is-mobile " id="announcementContainer" style="width:80%; margin-top: 10px; color:red; text-align: center;justify-content: center;"  >       
          <p> No Announcement Posted</p>
      </div>

    <?php 
    

  }


  ?>



    






    



  </div>







<!-- ################################################################################################################### INACTIVE ANNOUNCEMENT -->
<bR><BR>
  <div class="container" >
      <div class="container" id="text-announce" >
          <h3 style="font-size:20px;color:black;">INACTIVE ANNOUNCEMENTS</h3>
      </div>
  </div>



   <?php


  $sql = "SELECT * FROM tbl_announcement WHERE status='inactive'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
  ?>
  <div class="columns is-mobile shadow modal-box1" id="" style="width:800px; padding:3px; color:black;  margin-top:10px;"  >  
       <!-- <div class="row border eventModal" style="width:100%; margin:0;padding:0;" data-toggle="modal"  data-target="#announcementDetails"> -->
          <div class="column is-1" style="color:white; background-color: #10101E;">
              <img src="../style/images/info.png" class="mx-auto d-block" id="info-logo">
              
              <h2 id="announcementId"><?php echo "".$row["ID"];?></h2> 
              
          </div>
          <div class="column is-9" >
            
            <span id="title1"><?php echo "".$row["header"];?> </span>  
            <p class="text-start" id="description1"><?php echo "".$row["Description"];?></p>  
          </div>
          <div class="column is-2" style="padding:10px; background-color:   #d9534f; color:black;">
            <b>Start Date</b>
            <p class="text-start" id="startDate1" style=""><?php echo "".$row["start"];?></p>  
            <b>End Date</b>
            <p class="text-start" id="endDate1" style=""><?php echo "".$row["endd"];?></p>  
          </div>
      
    </div>


  <?php


    
  }
  }else{
    ?>
      <div class="columns is-mobile " id="announcementContainer" style="width:80%; margin-top: 10px; color:red; text-align: center;justify-content: center;"  >       
          <p> No Announcement Posted</p>
      </div>

    <?php 
  }


  ?>


  <br>



 
  </center>
</div>

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

var btn = document.querySelectorAll(".modal-box");
var btn1 = document.querySelectorAll(".modal-box1");
var btn12 = document.getElementById("add");

var span = document.getElementsByClassName("close")[0];

console.log("asdas"+btn.length);
console.log("zzzz"+btn1.length);


btn12.onclick = function() {
  modal.style.display = "block";

  document.getElementById("delete").style.display = "none";
  document.getElementById("recover").style.display = "none";
  document.getElementById("archive").style.display = "none";
  document.getElementById("save").style.display = "";
  document.getElementById("update").style.display = "none";

  document.getElementById("aid").value = "";
  document.getElementById("header").value = "";
  document.getElementById("description").value = "";
  document.getElementById("startDate").value ="";
  document.getElementById("endDate").value = "";
}

for (var i = 0; i < btn.length; i++) {
 btn[i].onclick = function(e) {
    e.preventDefault();
    modal.style.display = "block";



       $id = $(this).closest('div').children('div').find('h2');
      $header = $(this).closest('div').children('div').find('span')
      $description = $(this).closest('div').children('div').find('p')
      $start = $(this).closest('div').children('div').find('#startDate1')    //selectors
      $end = $(this).closest('div').children('div').find('#endDate1')

      var id = $id.map(function(){
        return $(this).text();
      }).get();

      var header = $header.map(function(){
        return $(this).text();
      }).get();

      var description = $description.map(function(){              //convert
        return $(this).text();
      }).get();

      var start = $start.map(function(){
        return $(this).text();
      }).get();
      var end = $end.map(function(){
        return $(this).text();
      }).get();
    
    console.log(start)
     console.log(end)
      var sdate = start[0].substring(0,10)+"T"+start[0].substring(11,start[0].length);
      var edate = end[0].substring(0,10)+"T"+start[0].substring(11,start[0].length);
     

      document.getElementById("aid").value = id[0];
      document.getElementById("header").value = header[0];
      document.getElementById("description").value = description[0];        //posting value
      document.getElementById("startDate").value = sdate;
      document.getElementById("endDate").value = edate;

      document.getElementById("delete").style.display = "none";
      document.getElementById("recover").style.display = "none";
      document.getElementById("archive").style.display = "";
      document.getElementById("save").style.display = "none";
      document.getElementById("update").style.display = "";

 }
}

for (var i = 0; i < btn1.length; i++) {
 btn1[i].onclick = function(e) {
    e.preventDefault();
    modal.style.display = "block";



       $id = $(this).closest('div').children('div').find('h2');
      $header = $(this).closest('div').children('div').find('span')
      $description = $(this).closest('div').children('div').find('p')
      $start = $(this).closest('div').children('div').find('#startDate1')    //selectors
      $end = $(this).closest('div').children('div').find('#endDate1')

      var id = $id.map(function(){
        return $(this).text();
      }).get();

      var header = $header.map(function(){
        return $(this).text();
      }).get();

      var description = $description.map(function(){              //convert
        return $(this).text();
      }).get();

      var start = $start.map(function(){
        return $(this).text();
      }).get();
      var end = $end.map(function(){
        return $(this).text();
      }).get();

     console.log(id)
      var sdate = start[0].substring(0,10)+"T"+start[0].substring(11,start[0].length);
      var edate = end[0].substring(0,10)+"T"+start[0].substring(11,start[0].length);
     

      document.getElementById("aid").value = id[0];
      document.getElementById("header").value = header[0];
      document.getElementById("description").value = description[0];        //posting value
      document.getElementById("startDate").value = sdate;
      document.getElementById("endDate").value = edate;

      document.getElementById("delete").style.display = "";
      document.getElementById("recover").style.display = "";
      document.getElementById("archive").style.display = "none";
      document.getElementById("save").style.display = "none";
      document.getElementById("update").style.display = "none";

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
  <!-- 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
  </body>


<?php
include '../dbconnection/conn.php';
if(isset($_POST['save'])){
$header = $_POST['header'];
$desc    = mysqli_real_escape_string($conn, $_POST["description"]);
$start = $_POST['startDate'];
$end = $_POST['endDate'];


$sql = "INSERT INTO tbl_announcement (header, Description, start, endd, status)
VALUES ('$header' ,'$desc', '$start' ,'$end' , 'active')";

if ($conn->query($sql) === TRUE) {
  ?>
  <script>

    Swal.fire("Successfully Added")
  </script>
  <?php
  $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
  VALUES ('$customerID' ,'Add new Announcement ', now(),'$fullname_admin', 'announcement')";
  $conn->query($sql1);
   echo "<meta http-equiv='refresh' content='2'>";
  }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();

}else if(isset($_POST['archive'])){
$id = $_POST['aid'];
$header = $_POST['header'];
$desc    = mysqli_real_escape_string($conn, $_POST["description"]);
$start = $_POST['startDate'];
$end = $_POST['endDate'];



$sql = "UPDATE tbl_announcement SET status='inactive' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  ?>
    <script>
       Swal.fire("Successfully moved to archive");
    </script>

  <?php
  $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
  VALUES ('$customerID' ,'Archive Announcement ID: $id', now(),'$fullname_admin', 'Information')";
  $conn->query($sql1);
   echo "<meta http-equiv='refresh' content='2'>";
} else {
  echo "Error updating record: " . $conn->error;
  echo "<meta http-equiv='refresh' content='2'>";
}

$conn->close();

}else if(isset($_POST['recover'])){
$id = $_POST['aid'];
$header = $_POST['header'];
$desc    = mysqli_real_escape_string($conn, $_POST["description"]);
$start = $_POST['startDate'];
$end = $_POST['endDate'];



$sql = "UPDATE tbl_announcement SET status='active' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  ?>
    <script>
       Swal.fire("Successfully Recover Announcemnet");
    </script>
  <?php
  $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
  VALUES ('$customerID' ,'Recover Announcement ID: $id', now(),'$fullname_admin', 'Information')";
  $conn->query($sql1);
   echo "<meta http-equiv='refresh' content='2'>";
} else {
  echo "Error updating record: " . $conn->error;
  echo "<meta http-equiv='refresh' content='2'>";
}

$conn->close();

}else if(isset($_POST['delete'])){
$id = $_POST['aid'];
$header = $_POST['header'];
$desc = $_POST['description'];
$start = $_POST['startDate'];
$end = $_POST['endDate'];



$sql = "UPDATE tbl_announcement SET status='deleted' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  ?>
    <script>
       Swal.fire("Successfully Deleted");
    </script>
  <?php
  $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
  VALUES ('$customerID' ,'Delete Announcement ID: $id', now(),'$fullname_admin', 'Information')";
  $conn->query($sql1);
   echo "<meta http-equiv='refresh' content='2'>";
} else {
  echo "Error updating record: " . $conn->error;
  
}

$conn->close();

}else if(isset($_POST['update'])){
$id = $_POST['aid'];
$header = $_POST['header'];
$desc = $_POST['description'];
$start = $_POST['startDate'];
$end = $_POST['endDate'];



$sql = "UPDATE tbl_announcement SET header='$header', description='$desc', start='$start', endd='$end' WHERE ID=$id";

if ($conn->query($sql) === TRUE) {
  ?>
    <script>
       Swal.fire("Successfully Updated");
    </script>
  <?php
  $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
      VALUES ('$customerID' ,'Change Announcement ID: $id', now(),'$fullname_admin', 'Information')";
      $conn->query($sql1);
   echo "<meta http-equiv='refresh' content='2'>";
} else {
  echo "Error updating record: " . $conn->error;
  
}

$conn->close();

}else if(isset($_POST['logout'])){

  session_unset();
  session_destroy();

?>
 <script type="text/javascript">location.href = '../login.php';</script>
<?php

}



?>


</html>

