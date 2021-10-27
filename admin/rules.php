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

                   $fullname = $rowedit['Userfname'].", ".$rowedit['Userlname'];
                   $image =$rowedit['Userimage'];
                    $fname = $rowedit['Userfname']." ".$rowedit['Userlname'];
                  $path= "upload/profilepicture/".$image;
                    $usertype = $rowedit['Usertype'];

               

            }
     }



?>

<!DOCTYPE html>
<!-- OMBROG, Jehu march 22 2021 -->
<html lang="en" dir="ltr">
  <head>
    <!--Cover to use all symbol all over the world -->
    <meta charset="utf-8">
    <!-- responsive viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    -->

    <!-- CodingNepal -->
    <link rel="stylesheet" href="assets/rules.css">
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
            <li><a href="../calendar" rel="noopener noreferrer"  target="_blank" style=""> Schedule</a></li>
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
           <form method="POST">
             <button  type="button" class="buttonNav" onclick="location.href='account.php';"><i class="fas fa-edit"></i>  Account</button>
             <button  type="submit"class="buttonNav" name="logout"><i class="fas fa-sign-out-alt"></i>  Logout</button>
           </form>
        </div>

      </div>
  </div>

 
</div>
 <!-- header end -->



<!-- ############################################################################################################################## RULES MODAL -->
<div class="modal fade-in" id="myModal1" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
        <span class="close">&times;</span>
        <form action="rules.php" method="POST">
        <h5 class="modal-title" id="exampleModalLabel">Camp Regulations &nbsp;&nbsp;<input type="text"  id="rid" name="rid" readonly style="text-align:center;width:100px; "></h5>
       <Hr>
          
        
     
        
          <div class="modal-body">
            
              <div id="startdate-group" class="form-group" >
                  <label class="control-label" for="startDate">Category</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <select class="category"  name="category"id="category" aria-label="Default select example" required style="width:40% height:60px;">
                    <option value="" disabled selected >Rules Category</option>
                    <option value="Overnight" style="background-color: #b0c4de;">Overnight </option>
                    <option value="Day Tour" style="background-color:#ffb96b;">Day Tour</option>
                    <option value="FAQs" style="background-color: #abdd65;">FAQ's</option>
                  </select>
              
                  
              </div>
              <div id="startdate-group" class="form-group"><br> 
                  <label class="control-label" for="startDate">Regulations</label><br>
                  <textarea type="text" class="form-control" id="description" name="description" style="height: 80px; width:100%;" required></textarea>
                  
              </div>

            <div class="modal-footer">
                <button type="button"  onclick="rulesmodalclose()">Close</button>
                
                <input type="submit" name="save" value="Save" id="save"></input>
                <input type="submit" name="update" value="update"   id="update"></input>
                <input type="submit" name="delete" value="delete"   id="delete"></input>
            </div>
        </form>
    </div>
  </div>
</div>
</div>
<!-- ################################################################################################## END MODAL ################## -->

<!-- ##################################################################################################################### ACCOMODATION MODAL -->
<div class="modal fade-in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
         <span class="close1" >&times;</span>
         <form action="rules.php" method="POST" enctype="multipart/form-data">
          <h5 class="label" >Camp Accomodations <input type="text"  id="aid" name="aid" readonly style="text-align:center;width:100px; "></h5>
          <hr>
     
        
          <div class="modal-body">
              
                  <div class="columns is-mobile">
                    <div class="column is-one-fifth">
                      <label class="label" id="categoryLabel" for="startDate">Category</label>
                    </div>
                    <div class="column">
                      <select class="rcategory"  name="rcategory" id="rcategory" aria-label="Default select example" style="width:57%;"required readonly >
                        <option value="" disabled selected>Category</option>
                        <option value="room" style="background-color: #b0c4de;">room </option>
                        <option value="date" style="background-color:#ffb96b;">date</option>
                        <option value="other" style="background-color: #abdd65;">other</option>
                      </select><br>
                    </div>
                  </div>

                  <label class="label" for="startDate">Accomodation</label>
                  <input type="text"  id="accomodation" name="accomodation"> </input>

                  <label class="label" id="timeLabel" for="startDate"> Date time</label>
                  <textarea type="text"  id="dtime" name="dtime" style="width: 100%;"></textarea> 
                  <br><Br>
                   
 
               <div class="columns is-mobile">
                  <div class="column" style="background-color:;">
                    <label class="label" id="sizeLabel" for="startDate">Size</label>

                    <select class="category"  name="size"id="size" a style="width:100%; float:;">
                      <option value="" disabled selected>Size</option>
                      <option value="Small" style="background-color: #b0c4de;">Small </option>
                      <option value="Medium" style="background-color:#ffb96b;">Medium</option>
                      <option value="Large" style="background-color: #abdd65;">Large</option>
                    </select>
                  </div>
                  <div class="column">
                    <label class="label" for="quantity" id="paxLabel"> Pax:</label>
                    <input type="text" id="pax" name="pax" min="1" max="50" style="width:100%;" >
                  </div>
                  <div class="column">
                    <label  id="rateLabel" class="label"  >Rate:</label>
                    <input type="text" id="rate" name="rate" style="width:100%;" >
                  </div>
                </div>






              <div class="columns is-mobile">
                
                  <div class="column">
                    <label  id="viewdeckLabel" class="label" style="float:left;">View Deck:</label>
                    <input type="text" id="viewdate" name="viewdate" style="width:100%; " placeholder="price.." >
                  </div>

                  <div class="column">
                    <label  id="verandaLabel" class="label" >Veranda: </label>
                    <input type="text" id="verandaDate" name="verandaDate" style="width:100%;" placeholder="price.." >
                  </div>
               </div>   
           
            
                  <label class="label" for="startDate">Notes</label>
                  <textarea type="text" class="form-control" id="notes" name="notes" style="height: 60px; width:100%;" ></textarea>
                <div id="patient_image1">
                  <label class="label"> Picture</label>
                  <input  type="file" name="patient_image" id="patient_image" accept="image/*"></input>
                  <input type="hidden" name="photo" id="photo" readonly />
                </div>
            </div>

            <div class="modal-footer">
                <button type="button"  onclick="modalclose()">Close</button>
                
                <input type="submit" name="rsave" value="Save" id="rsave"></input>
                <input type="submit" name="rupdate" value="update"   id="rupdate"></input>
                <input type="submit" name="rdelete" value="delete"   id="rdelete"></input>
            </div>
        </form>
    </div>
  </div>
</div>
</div>
<!-- Modal End-->
<!-- ################################################################################################################## BODY CONTAINER -->
<br><h2 style="opacity: .6;margin-left: 4px; font-weight: bold;">  Rates & Regulations</h2><br>
<div class="container-lg mobile2" style="background-color:;">

  <button class="btnadd"style="float:right;" id="roomAdd" class="roomAdd">Add Rooms</button>
  <center>
  <h2 style="font-weight: bold; letter-spacing: 2px; font-size:1.5em;"> ROOM RATES</h2>
  </center>
  <div class="container-lg" style="overflow: scroll;max-height: 600px; padding:0; margin:0;margin-top:3px;">
    <table class="styled-table" id="roomtable">
      <thead>
          <tr >
              
              <th>Accomodation</th>
              <th>Size</th>
              <th>Pax</th>
              <th>Rate</th>
              <th>Notes</th>
              

          </tr>
      </thead>
      <tbody>
          
          
            <?php


            $sql = "SELECT ID, accomodation, size, pax, rate, notes, imagename FROM tbl_price WHERE category ='room' ORDER BY accomodation = 'Standard Couple Cabana' DESC , accomodation = 'De Luxe Couple Cabana' DESC, size  DESC";
            $result = $conn->query($sql);
            $data="";

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
              
                ?>
              <tr  class="room">
                  <td style="display:none;"><?php echo"".$row['ID']; ?></td>
                  <?php 
                  if( $row['pax'] == 'Each'){
                  ?>
                    <td style="opacity: 0; "><?php echo"".trim($row['accomodation']); ?> </td>
                  <?php 
                  }else{
                  ?>
                   <td><?php echo"".trim($row['accomodation']); ?> </td>
                  <?php 
                  }
                  ?>
                  <td><?php echo"".$row['size']; ?></td>
                  <td><?php echo"".$row['pax']; ?></td>
                  <td><?php echo"".$row['rate']; ?></td>
                  
                  <td style="width: 30%;"><?php echo"".$row['notes']; ?></td>
                  <td style="display:none;"><?php echo"".$row['imagename']; ?></td>
              </tr>
              <?php
              $data = $row['accomodation'];
              }

            }else{
              ?>
                <td colspan=5> No Records</td>
              <?php
            }
           

            ?>
              
              
              
         
          
          <!--  <tr class="active-row"> -->
            
      </tbody>
    </table>
  </div>
  <button class="btnadd"style="float:right;" id="addDate" class="addDate">Add Date </button> <!--  class="dateeventModal1" -->
  
  <center>
  <h2 style="font-weight: bold; letter-spacing: 2px; font-size:1.5em;"> ROMANTIC DATE RATES</h2>
  </center>
  <div class="container-lg" style="overflow: scroll;max-height: 600px; padding:0; margin:0;margin-top:3px;">
    <table class="styled-table" id="overnighttable">
      <thead>
          <tr >
              
              <th >Accomodation</th>
              <th>Time</th>
              <th>Pax</th>
              <th>View Deck Rate</th>
              <th>Veranda Rate</th>
              <th>Notes</th>
              

          </tr>
      </thead>
      <tbody>
          

          <?php
         $sql = "SELECT ID, accomodation, time, pax, viewrate, verandarate, notes FROM tbl_price WHERE category='date'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            ?>
              <tr class="datedate" >  <!-- class="dateeventModal" -->
                <td style="display:none;"><?php echo "".$row['ID']?></td>
                 <td ><?php echo "".$row['accomodation']?></td>
                <td><?php echo "".$row['time']?></td>
                <td ><?php echo "".$row['pax']?></td>
                <td><?php echo "".$row['viewrate']?></td>
                <td ><?php echo "".$row['verandarate']?></td>
                <td style="width: 30%;"><?php echo "".$row['notes']; ?></td>
               


              </tr>
            <?php
            }
          } else {
            ?>
             <td colspan=6> No Records</td>
            <?php
          }

          ?>
          
          
          <!--  <tr class="active-row"> -->
            
      </tbody>
    </table>
  </div>
   <button class="btnadd" style="float:right;" class="addAmm" id="addAmm" >Add Amenities </button> <!-- class="othereventModal1" -->
  
  <center>
  <h2 style="font-weight: bold; letter-spacing: 2px; font-size:1.5em;"> OTHER AMENITIES</h2>
  </center>
  <div class="container-lg" style="overflow: scroll;max-height: 600px; padding:0; margin:0;margin-top:3px;">
    <center>
    <table class="styled-table" id="overnighttable" style="width:50%;">
      <thead>
          <tr >
              
             <th>Amenities</th>
              <th>Notes</th>
              

          </tr>
      </thead>
      <tbody>
          <?php
          $sql = "SELECT ID, accomodation, notes FROM tbl_price WHERE category ='other'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          ?>
            <tr data-toggle="modal" data-target="#accomodationDetails" class="Amm"> <!-- class="othereventModal" -->
              <td style="display:none;"><?php echo "".$row['ID']?></td>
              <td><?php echo "".$row['accomodation']?></td>
              <td ><?php echo "".$row['notes']?></td>
              
              
              
             </tr>
          <?php
          }
          } else {
          echo "0 results";
          }


          ?>

          
          
          
          <!--  <tr class="active-row"> -->
            
      </tbody>
    </table>
  </center>
  </div>


  <!-- ADD ONS -->
<!-- add ons modal  -->

<div class="modal fade-in" id="add_ons_modal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:500px;">
      
        <span class="close add_ons_close">&times;</span>
        <form action="rules.php" method="POST"  enctype="multipart/form-data">
        <h5 class="modal-title" id="exampleModalLabel">ADD ONS INFORMATION&nbsp;&nbsp;<input type="text"  id="add_ons_id" name="add_ons_id" readonly style="text-align:center;width:100px; "></h5>
       <Hr>
          <div class="modal-body">
            
              <label> Picture </label>
              <input  type="file" name="add_ons_image" id="add_ons_image" onchange="readURL(this);" enctype="multipart/form-data" accept="image/*"></input>
              <div class="picture_container">
                <img id="blah" src=""  />
              </div>
              <input type="hidden" name="photo_noupdate" id="photo_noupdate" readonly />


            <label>Description</label>
            <input type="text" name="addon_ons_description" id="addon_ons_description" >

           <label >Price</label>
          <div>

            <input type="text" name="add_ons_price" id="add_ons_price" onkeypress='validate(event)' placeholder="₱..." style="width:200px;">
          </div>
            <div class="modal-footer">
                <button type="button"  onclick="add_ons_btn_close()">Close</button>
                <input type="submit" name="add_ons_btn_save"   value="Save"     id="add_ons_btn_save"></input>
                <input type="submit" name="add_ons_btn_delete" value="delete"   id="add_ons_btn_delete"></input>
                <input type="submit" name="add_ons_btn_disable" value="disable" id="add_ons_btn_disable"></input>
                <input type="submit" name="add_ons_btn_enable" value="enable" id="add_ons_btn_enable"></input>
                <input type="submit" name="add_ons_btn_update" value="update"   id="add_ons_btn_update"></input>
                
            </div>



        </form>
    </div>
  </div>
</div>
</div>
<!-- add ons modal end -->

<script type="text/javascript">
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(500)
                    .height(300);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>

  
<center>
  <button class="btnadd" id="add_ons_btn"  >ADD ONS </button> <!-- class="othereventModal1" -->
  <h2 style="font-weight: bold; letter-spacing: 2px; font-size:1.5em;"> BOOKING EXTRA ADD ONS</h2>
</center>

<div class="container-lg" style="overflow-y: scroll !!important;min-width: 1000px;max-height: 600px; padding:0; margin:0;margin-top:3px;">
  <div class="columns " style="padding:15px">
      
      <?php
        $sql = "SELECT * FROM tbl_price WHERE category = 'Add Ons'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
          while($row = $result->fetch_assoc()) {
            $add_ons_image_path = 'upload/'.$row['imagename'];
              if($row['quantity']==1){
                ?>
                  <div class="column is-3 addon_container" style="background-color: #FFE1E1 !important;" >
                <?php
              }else{
                ?>
                  <div class="column is-3 addon_container" >
                <?php
              }
            ?>

              
                <center>
                <div class="addons_img">
                  <img class="zoom" src="<?php echo''.$add_ons_image_path; ?>" style="width:100%; height:100%; object-fit: cover;"></img> 
                </div>
                <lable> <?php echo"".$row['accomodation']; ?></lable>
                <p> <?php echo"".$row['rate']; ?></p>
                </center>
             
                <p style="display:none"> <?php echo"".$row['accomodation']; ?></p>
                <p style="display:none"> <?php echo"".$row['imagename']; ?></p>
                <p style="display:none"> <?php echo"".$row['ID']; ?></p>
                <p style="display:none"><?php echo "".$row['quantity']?></p>
              </div>
            <?php
          }
        }else{
          ?>
             <div class="column is-3 addon_container" >
                <input type="checkbox" > </input>
                <lable> SAMPLE</lable>
                <p> ₱ 9999.99</p>
                <center>
                <div class="addons_img"><img class="zoom" src="../style/images/Gall (3).jpg" style="width:100%; height:100%; object-fit: cover;"></img> </div>
                </center>
              </div>
          <?php
        }
      ?>

     

    
  </div>
</div>


<script type="text/javascript">
  var btnadd_ons = document.getElementById("add_ons_btn");
  var add_ons_modal = document.getElementById("add_ons_modal");
  var add_ons_close = document.getElementsByClassName("add_ons_close")[0];
  var add_ons_container = document.querySelectorAll(".addon_container");

   for (var i = 0; i < add_ons_container.length; i++) {
   add_ons_container[i].onclick = function(e) {
      e.preventDefault();
      add_ons_modal.style.display = "block";
      document.getElementById("add_ons_btn_update").style.display = "block";

      document.getElementById("add_ons_id").style.display = "block";
      document.getElementById("add_ons_btn_save").style.display = "none";

   

      $tr = $(this).closest('div').find('p');
        var data = $tr.map(function(){
        return $(this).text();
    }).get();

      console.log(data);


      document.getElementById("add_ons_id").value=data[3].trim();   
      document.getElementById("photo_noupdate").value=data[2].trim();
      document.getElementById("addon_ons_description").value=data[1].trim();
      document.getElementById("add_ons_price").value=data[0].trim();

      if(data[4].trim()==1){
        document.getElementById("add_ons_btn_delete").style.display ="block";
        document.getElementById("add_ons_btn_enable").style.display ="block";
        document.getElementById("add_ons_btn_disable").style.display ="none";
      }else{
        document.getElementById("add_ons_btn_delete").style.display ="none";
        document.getElementById("add_ons_btn_enable").style.display ="none";
        document.getElementById("add_ons_btn_disable").style.display ="block";
      }

      //add_ons_id
      // photo_noupdate
      // addon_ons_description
      // add_ons_price


    }
  }


  btnadd_ons.onclick =function(){
    add_ons_modal.style.display = "block";
    document.getElementById("add_ons_btn_update").style.display = "none";
    document.getElementById("add_ons_btn_delete").style.display = "none";
    document.getElementById("add_ons_id").style.display = "none";
    document.getElementById("add_ons_btn_save").style.display = "block";
     document.getElementById("add_ons_btn_enable").style.display ="none";
        document.getElementById("add_ons_btn_disable").style.display ="none";

      document.getElementById("add_ons_id").value="";   
      document.getElementById("photo_noupdate").value="";
      document.getElementById("addon_ons_description").value="";
      document.getElementById("add_ons_price").value="";
  }
  add_ons_close.onclick = function(){
    add_ons_modal.style.display  = "none";
  }

  function add_ons_btn_close(){
    add_ons_modal.style.display = "none";
  }
  window.onclick = function(event) {
  if (event.target == add_ons_modal) {
    add_ons_modal.style.display = "none";
   
  }
}


</script>
<!-- end of add ons -->

  <button class="btnadd"style="float:right;" data-toggle="modal"  data-target="#announcementDetails"  id="rulesAdd1" class="rulesAdd1">Add Rules</button> <!-- onclick="addrules()" -->
  <center>

     <h2 style="font-weight: bold; letter-spacing: 2px; font-size:1.5em;"> RULES & REGULATION</h2>
    <br>
    <div class="container" style="padding-top:0%; padding-bottom:2%; background-color:;">
  
      <div class="columns is-mobile" style="padding:10px; margin:0;">
        <div class="column is-4" style="padding-top:1%; padding-bottom:1%;">
          <h2 data-aos="fade-down" style="text-align:left;">Camp Rules</h2>

        <ul >
          <small>
            <?php
              $sql = "SELECT * FROM tbl_rules WHERE Category= 'Overnight'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
                    <li  class="rules"> <!-- class="rulesAdd" -->
                      <i class="fas fa-angle-right" style="float:left" id="i"></i>
                       <p> <?php echo "".$row['rules']?></p>
                       <p style="display:none;"><?php echo "".$row['ID']?></p>
                       <p style="display:none;"><?php echo "".$row['Category']?></p>
                    </li>
                   

                  <?php 
                  
                }
              }else{
                ?>
                <li  class="rules"> <!-- class="rulesAdd" -->
                      <i class="fas fa-angle-right" style="float:left" id="i"></i>
                       <p> <?php echo "No Rules Set"; ?></p>
                      
                    </li>
                <?php
              }
            ?>
            
        
         
          
          </small>
        </ul>
        </div>


        <div class="column is-4" style=" padding-top:1%; padding-left:4%; padding-bottom:2%;" >
          <h2 data-aos="fade-down" style="text-align:left;">Note for Day Tour</h2>

        <ul><small>
          <?php
              $sql = "SELECT * FROM tbl_rules WHERE Category= 'Day Tour'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
                    <li  class="rules">
                      <i class="fas fa-angle-right" style="float:left" id="i"></i>
                       <p> <?php echo "".$row['rules']?></p>
                       <p style="display:none;"><?php echo "".$row['ID']?></p>
                        <p style="display:none;"><?php echo "".$row['Category']?></p>


                    </li>
                   

                  <?php 
                  
                }
              }else{
                echo "0 results";
              }
            ?>
          </small>
        </ul>
        </div>



        <div class="column is-4" style=" padding-top:1%; padding-left:4%; padding-bottom:2%;" >
          <h2 data-aos="fade-down" style="text-align:left;">FAQ's</h2>

        <ul><small>
          <?php
              $sql = "SELECT * FROM tbl_rules WHERE Category= 'FAQs'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
                    <li  class="rules">
                      <i class="fas fa-angle-right" style="float:left" id="i"></i>
                       <p> <?php echo "".$row['rules']?></p>
                       <p style="display:none;"><?php echo "".$row['ID']?></p>
                        <p style="display:none;"><?php echo "".$row['Category']?></p>
                    </li>
                   

                  <?php 
                  
                }
              }else{
                echo "0 results";
              }
            ?>
          
          </small>
        </ul>
        </div>

      </div>
    </div>
      <h1 class="content">########################</h1>
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

var btn = document.querySelectorAll(".room");
var btnAdd = document.getElementById("roomAdd");
var btnDate = document.querySelectorAll(".datedate");
var btnAddDate = document.getElementById("addDate");
var btnAmm = document.querySelectorAll(".Amm");
var btnAddAmm = document.getElementById("addAmm");

var span = document.getElementsByClassName("close1")[0];
var span1 = document.getElementsByClassName("close")[0];


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
 
}






for (var i = 0; i < btn.length; i++) {
 btn[i].onclick = function(e) {
    e.preventDefault();
    modal.style.display = "block";

    document.getElementById("patient_image1").style.display ="";


    document.getElementById("viewdeckLabel").style.display ="none";
 document.getElementById("rsave").style.display ="none";
       document.getElementById("rcategory").style.display ="none";
         document.getElementById("size").style.display ="";
       document.getElementById("sizeLabel").style.display ="";
        document.getElementById("rate").style.display ="";
      document.getElementById("rateLabel").style.display ="";
       document.getElementById("viewdate").style.display ="none";
     document.getElementById("verandaDate").style.display ="none";
     document.getElementById("verandaLabel").style.display ="none";
     document.getElementById("dtime").style.display ="none";
     document.getElementById("timeLabel").innerHTML ="";
     document.getElementById("paxLabel").style.display ="";
     document.getElementById("pax").style.display="";
     document.getElementById("rupdate").style.display="";
     document.getElementById("rdelete").style.display="";

     





      $tr = $(this).closest('tr');
      
      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      
      console.log(data);

      document.getElementById("aid").value = data[0];
      document.getElementById("accomodation").value =data[1];
      document.getElementById("categoryLabel").style.display="none";
        document.getElementById("size").style.display ="";
       document.getElementById("sizeLabel").style.display ="";
     
      
      if(data[2]=='Small'){
        document.getElementById("size").selectedIndex ="1";
      }else if(data[2]=='Large'){
        document.getElementById("size").selectedIndex ="3";
      }else if(data[2]=='medium'){
        document.getElementById("size").selectedIndex ="2";
      }else{
        document.getElementById("size").selectedIndex ="0";
      }
       document.getElementById("photo").value=data[6];
      document.getElementById("pax").value =data[3];
      document.getElementById("rate").value =data[4];
      document.getElementById("notes").value =data[5];
      

   

      
 }
}

btnAdd.onclick = function() {
modal.style.display = "block";
    document.getElementById("patient_image1").style.display ="";
 document.getElementById("rsave").style.display ="";
     document.getElementById("rupdate").style.display ="none";
     document.getElementById("rdelete").style.display ="none";
     document.getElementById("pax").style.display="";
     document.getElementById("sizeLabel").style.display ="";
     document.getElementById("size").style.display="";
     document.getElementById("rcategory").style.display ="";
     document.getElementById("rcategory").selectedIndex ="1";
     document.getElementById("paxLabel").style.display  ="";
     document.getElementById("categoryLabel").style.display="";
     document.getElementById("rate").style.display ="";
     document.getElementById("rateLabel").style.display ="";
     document.getElementById("rateLabel").innerHTML ="Rate:";
     document.getElementById("viewdate").style.display ="none";
     document.getElementById("verandaDate").style.display ="none";
     document.getElementById("verandaLabel").style.display ="none";
     document.getElementById("dtime").style.display ="none";
     document.getElementById("timeLabel").innerHTML ="";
   document.getElementById("viewdeckLabel").style.display="none";



 
     document.getElementById("aid").value = "";
     document.getElementById("accomodation").value = "";
     document.getElementById("size").selectedIndex ="0";
     document.getElementById("pax").value ="";
     document.getElementById("rate").value ="";
     document.getElementById("notes").value ="";

}

for (var i = 0; i < btnDate.length; i++) {
 btnDate[i].onclick = function(e) {
    e.preventDefault();
    modal.style.display = "block";
    document.getElementById("patient_image1").style.display ="none";
     document.getElementById("rsave").style.display ="none";
     document.getElementById("rcategory").style.display ="none";
    document.getElementById("rcategory").selectedIndex ="1";
    document.getElementById("categoryLabel").style.display="none";
       document.getElementById("viewdate").style.display ="";
     document.getElementById("verandaDate").style.display ="";
     document.getElementById("verandaLabel").style.display ="";
     document.getElementById("dtime").style.display ="";
     document.getElementById("timeLabel").innerHTML ="Date Time";
     document.getElementById("paxLabel").style.display ="";
document.getElementById("viewdeckLabel").style.display ="";
     
      document.getElementById("accomodation").value = "";
      document.getElementById("size").style.display ="none";
       document.getElementById("sizeLabel").style.display ="none";
       document.getElementById("pax").style.display ="";
      document.getElementById("rate").style.display ="none";
      document.getElementById("rateLabel").style.display ="none";


      document.getElementById("notes").value ="";
         document.getElementById("rupdate").style.display="";
     document.getElementById("rdelete").style.display="";
      
        $tr = $(this).closest('tr');
      
      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      
      console.log(data);

      document.getElementById("aid").value = data[0];
      document.getElementById("accomodation").value = data[1];
      document.getElementById("dtime").value = data[2];
      document.getElementById("pax").value = data[3];
      document.getElementById("viewdate").value = data[4];
      document.getElementById("verandaDate").value = data[5];
      document.getElementById("notes").value = data[6];

     
 }
}
btnAddDate.onclick = function() {
modal.style.display = "block";
    document.getElementById("patient_image1").style.display ="none";
  document.getElementById("rsave").style.display ="";
    document.getElementById("rdelete").style.display="none";
    document.getElementById("rupdate").style.display="none";
     document.getElementById("rcategory").style.display ="";
    document.getElementById("rcategory").selectedIndex ="2";
    document.getElementById("categoryLabel").style.display ="";
       document.getElementById("viewdate").style.display ="";
     document.getElementById("verandaDate").style.display ="";
     document.getElementById("verandaLabel").style.display ="";
     document.getElementById("dtime").style.display ="";
     document.getElementById("timeLabel").innerHTML ="Date Time";
     document.getElementById("paxLabel").style.display="";
     document.getElementById("pax").style.display="";

      document.getElementById("aid").value = "";
      document.getElementById("accomodation").value = "";
      document.getElementById("size").style.display ="none";
       document.getElementById("sizeLabel").style.display ="none";
       document.getElementById("pax").value ="";
      document.getElementById("rate").style.display ="none";
      document.getElementById("rateLabel").style.display="none";
document.getElementById("viewdeckLabel").style.display="";
      document.getElementById("notes").value ="";
      
  

      document.getElementById("aid").value = "";
    
      document.getElementById("accomodation").value = "";
      document.getElementById("dtime").value = "";
      document.getElementById("pax").value = "";
      document.getElementById("viewdate").value = "";
      document.getElementById("verandaDate").value = "";
      document.getElementById("notes").value = "";


}

for (var i = 0; i < btnAmm.length; i++) {
 btnAmm[i].onclick = function(e) {
    e.preventDefault();
    modal.style.display = "block";
    document.getElementById("patient_image1").style.display ="none";
document.getElementById("rsave").style.display ="none";
    document.getElementById("rupdate").style.display ="";
    document.getElementById("rdelete").style.display ="";
     document.getElementById("rcategory").style.display ="none";
    document.getElementById("rcategory").selectedIndex ="";
    document.getElementById("categoryLabel").style.display="none";
       document.getElementById("viewdate").style.display ="none";
     document.getElementById("verandaDate").style.display ="none";
     document.getElementById("verandaLabel").style.display ="none";
     document.getElementById("dtime").style.display ="none";
     document.getElementById("timeLabel").innerHTML ="";
     document.getElementById("paxLabel").style.display ="none";
      
      
      document.getElementById("size").style.display ="none";
       document.getElementById("sizeLabel").style.display ="none";
       document.getElementById("pax").style.display ="none";
      document.getElementById("rate").style.display ="none";
      document.getElementById("rateLabel").style.display ="none";
  
      
      document.getElementById("dtime").style.display = "none";
      document.getElementById("pax").style.display = "none";
      document.getElementById("viewdate").style.display = "none";
      document.getElementById("verandaDate").style.display = "none";
      document.getElementById("viewdeckLabel").style.display ="none";


 $tr = $(this).closest('tr');
      
      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      
      console.log(data);
      document.getElementById("aid").value = data[0];
      document.getElementById("accomodation").value = data[1];
      document.getElementById("notes").value = data[2];

     
 }
}
btnAddAmm.onclick = function() {
modal.style.display = "block";
    document.getElementById("patient_image1").style.display ="none";

 document.getElementById("rupdate").style.display="none"; 
    document.getElementById("rsave").style.display ="";
     document.getElementById("rdelete").style.display ="none";


     document.getElementById("rcategory").style.display ="";
    document.getElementById("rcategory").selectedIndex ="3";
    document.getElementById("categoryLabel").style.display="";
       document.getElementById("viewdate").style.display ="none";
     document.getElementById("verandaDate").style.display ="none";
     document.getElementById("verandaLabel").style.display ="none";
     document.getElementById("dtime").style.display ="none";
     document.getElementById("timeLabel").innerHTML ="";
     document.getElementById("paxLabel").style.display ="none";
      
      
      document.getElementById("size").style.display ="none";
       document.getElementById("sizeLabel").style.display ="none";
       document.getElementById("pax").style.display ="none";
      document.getElementById("rate").style.display ="none";
      document.getElementById("rateLabel").style.display ="none";
  
      
      document.getElementById("dtime").style.display = "none";
      document.getElementById("pax").style.display = "none";
      document.getElementById("viewdate").style.display = "none";
      document.getElementById("verandaDate").style.display = "none";

     document.getElementById("viewdeckLabel").style.display ="none";

       document.getElementById("aid").value = "";
      document.getElementById("accomodation").value = "";
      document.getElementById("notes").value = "";

}








function close1(){
   modal.style.display = "none";
}

function modalclose(){
  modal.style.display = "none";
}

span1.onclick = function() {
  modal1.style.display = "none";
 
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";

  }
}





var modal1 = document.getElementById("myModal1");

var btn12 = document.querySelectorAll(".rules");
var btnAddRules = document.getElementById("rulesAdd1");

for (var i = 0; i < btn12.length; i++) {

 btn12[i].onclick = function(e) {
    e.preventDefault();
    modal1.style.display = "block";


   






     document.getElementById('delete').style.display ="";
      document.getElementById('update').style.display ="";
      document.getElementById('save').style.display ="none";


      $id = $(this).closest('li').children('p');
   

      var id = $id.map(function(){
        return $(this).text();
      }).get();

      console.log(id);
      if(id[2]=="Overnight"){
          document.getElementById("category").selectedIndex = "1"; 
        }else if(id[2]=="Day Tour"){
          document.getElementById("category").selectedIndex = "2"; 
        }else{
          document.getElementById("category").selectedIndex = "3"; 
        }

      document.getElementById("description").value = id[0];
      document.getElementById("rid").value = id[1];


  }
}

btnAddRules.onclick = function(){
  modal1.style.display = "block";

    document.getElementById('delete').style.display ="none";
  document.getElementById('update').style.display ="none";
  document.getElementById('save').style.display ="";
     
  document.getElementById("rid").value = " ";
  document.getElementById('category').selectedIndex = "0";
  document.getElementById("description").value=" ";
}

window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}

function rulesmodalclose(){
  modal1.style.display = "none";
}


</script> 
<script language="javascript" type="text/javascript">
function removeSpaces(string) {
 return string.split(' ').join('');
}
</script>
<!-- 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
-->
  </body>
</html>

<?php
if(isset($_POST['save'])){
$category1 = $_POST['category'];
$desc = $_POST['description'];



$sql = "INSERT INTO tbl_rules (Category, rules)
VALUES ('$category1' ,'$desc')";


if ($conn->query($sql) === TRUE) {
  $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
  VALUES ('$customerID' ,'add new $desc  rules in category of $category1', now(),'$fullname', Information)";
  $conn->query($sql1);
  ?>
  <script>
    alert("Successfully Added")
  </script>
  <?php
   echo "<meta http-equiv='refresh' content='0'>";
  }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();

}else if(isset($_POST['update'])){
$rid = $_POST['rid'];
$category1 = $_POST['category'];
$desc = $_POST['description'];

$sql11 = "SELECT * FROM tbl_rules WHERE ID = '$rid'";
$result11 = $conn->query($sql11);
$row11 = mysqli_fetch_array($result11);

$firstdescription = $row11['rules'];

$sql = "UPDATE tbl_rules SET Category='$category1', rules = '$desc' WHERE ID = $rid";

if ($conn->query($sql) === TRUE) {
  $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
  VALUES ('$customerID' ,'Update $firstdescription  rules to $desc in category of $category1', now(),'$fullname', Information)";
  $conn->query($sql1);
  ?>
  <script>
    alert("Successfully Updated")
  </script>
  <?php
   echo "<meta http-equiv='refresh' content='0'>";
  }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


}else if(isset($_POST['delete'])){
$rid = $_POST['rid'];
$category1 = $_POST['category'];
$desc = $_POST['description'];



$sql = "DELETE FROM tbl_rules WHERE ID=$rid";

if ($conn->query($sql) === TRUE) {
   $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
  VALUES ('$customerID' ,'Delete rules $desc  in category of $category1', now(),'$fullname', 'Information')";
  $conn->query($sql1);
  ?>
  <script>
    alert("Successfully Deleted")
  </script>
  <?php
   echo "<meta http-equiv='refresh' content='0'>";
  }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


}else if(isset($_POST['rsave'])){
$category = $_POST['rcategory'];    //####################################################### accomodation buttons
$accomodation = $_POST['accomodation'];
$time = $_POST['dtime'];
$size = $_POST['size'];
$pax = $_POST['pax'];
$rate = $_POST['rate'];
$rate1 = $_POST['viewdate'];
$veranda = $_POST['verandaDate'];
$notes = $_POST['notes'];
$images= $_FILES['patient_image']['name'];
/*

*/


$sql ="";
if ($category == "room"){
  
 
    $sql = "INSERT INTO tbl_price (category, accomodation, size, pax, rate, notes, imagename)
          VALUES ('$category','$accomodation','$size' , '$pax', '$rate', '$notes', '$images')";
   
}else if ($category == "date"){
  $sql = "INSERT INTO tbl_price (category, accomodation, time, pax, viewrate, verandarate, notes)
          VALUES ('$category','$accomodation','$time' , '$pax', '$rate1', '$veranda','$notes')";
}else if ($category == "other"){
  $sql = "INSERT INTO tbl_price (category, accomodation, notes)
          VALUES ('$category','$accomodation','$notes')";
}else{
  ?>
    <script type="text/javascript">
      alert("Pleas choose propper Catagory!");
    </script>

  <?php

}


if ($conn->query($sql) === TRUE) {
  move_uploaded_file($_FILES["patient_image"]["tmp_name"],"upload/".$_FILES["patient_image"]["name"]);
  
  if ($category == "room"){
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
  VALUES ('$customerID' ,'add new room named as =$accomodation ', now(),'$fullname','Information')";
  

  }else if($category == "date"){
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name,type)
  VALUES ('$customerID' ,'add new date place named as =$accomodation ', now(),'$fullname','Information')";
  

  }else if($category == "other"){
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name,type)
  VALUES ('$customerID' ,'add new aminities named as =$accomodation ', now(),'$fullname','Information')";
  

  } 


    $conn->query($sql1);
  ?>
  <script>
    alert("Successfully Added")
  </script>
  <?php
   echo "<meta http-equiv='refresh' content='0'>";
  }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


}else if(isset($_POST['rdelete'])){
$aid = $_POST['aid'];
$accomodation = $_POST['accomodation'];




$sql = "DELETE FROM tbl_price WHERE ID=$aid";

if ($conn->query($sql) === TRUE) {
   $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
  VALUES ('$customerID' ,'Delete  $accomodation  accomodation', now(),'$fullname', 'Information')";

  $conn->query($sql1);
  ?>
  <script>
    alert("Successfully Deleted")
  </script>
  <?php
   echo "<meta http-equiv='refresh' content='0'>";
  }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


}else if(isset($_POST['rupdate'])){
$aid = $_POST['aid'];   
$accomodation = $_POST['accomodation'];
$time = $_POST['dtime'];
$size = $_POST['size'];
$pax = $_POST['pax'];
$rate = $_POST['rate'];
$veranda = $_POST['verandaDate'];
$notes = $_POST['notes'];
$images= $_FILES['patient_image']['name'];

if($_FILES['patient_image']['name']==''){
    $images= $_POST['photo'];
}

$sqlselect = "SELECT * FROM tbl_price WHERE ID=$aid";
$sresult = $conn->query($sqlselect);
$srow = mysqli_fetch_array($sresult);

if($srow['category'] == "room"){
   if(file_exists("upload/".$_FILES['patient_image']['name'])){
    $store = $_FILES["patient_image"]["name"];
    $_SESSION['status']="Image Already Exist name.'.'$store'";
  }
  $sql = "UPDATE tbl_price SET accomodation='$accomodation', size='$size',pax='$pax', rate='$rate', notes ='$notes' ,imagename = '$images' WHERE ID=$aid";
  

}else if($srow['category'] == "date"){
  $sql = "UPDATE tbl_price SET accomodation='$accomodation', time='$time',pax='$pax', viewrate='$rate', verandarate ='$veranda', notes='$notes'      WHERE ID=$aid";
}else if($srow['category'] == "other"){
  $sql = "UPDATE tbl_price SET accomodation='$accomodation', notes='$notes' WHERE ID=$aid";

}else{
  ?>
    <script type="text/javascript">
      alert("Choose propper category!");
    </script>
  <?php
}


if ($conn->query($sql) === TRUE) {
  move_uploaded_file($_FILES["patient_image"]["tmp_name"],"upload/".$_FILES["patient_image"]["name"]);
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
  VALUES ('$customerID' ,'Update  $accomodation accomodation Details', now(),'$fullname','Information')";

  $conn->query($sql1);
  ?>
    <script type="text/javascript">
      alert("Information Successfully Updated")
    </script>


  <?php
  echo "<meta http-equiv='refresh' content='0'>";
} else {
  echo "Error updating record: " . $conn->error;
}




}else if(isset($_POST['add_ons_btn_save'])){


//             add_ons_id
//             add_ons_image
//             addon_ons_description
//             add_ons_price

//             add_ons_btn_save
//             add_ons_btn_delete
//             add_ons_btn_update

$images        = $_FILES["add_ons_image"]["name"];
$description   = mysqli_real_escape_string($conn, $_POST["addon_ons_description"]);
$add_ons_price =$_POST['add_ons_price'];

$sql = "INSERT INTO tbl_price (category, accomodation, rate, imagename)
VALUES ('Add Ons', '$description', $add_ons_price,'$images')";

if ($conn->query($sql) === TRUE) {
    move_uploaded_file($_FILES["add_ons_image"]["tmp_name"],"upload/".$_FILES["add_ons_image"]["name"]);
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
    VALUES ('$customerID' ,'New Add Ons created titled: <u> $description </u>', now(),'$fullname', 'Information')";

   $conn->query($sql1);  
   ?>
    <script type="text/javascript">
      alert("Add Ons Successfully Inserted");
    </script>


  <?php
  echo "<meta http-equiv='refresh' content='0'>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}else if(isset($_POST['add_ons_btn_update'])){

// photo_noupdate
$ID            = $_POST['add_ons_id'];
$images        = $_FILES["add_ons_image"]["name"];
$description   = mysqli_real_escape_string($conn, $_POST["addon_ons_description"]);
$add_ons_price =$_POST['add_ons_price'];

if($_FILES['add_ons_image']['name']==''){
    $images= $_POST['photo_noupdate'];
}

  $sql = "UPDATE tbl_price SET accomodation='$description', rate=$add_ons_price, imagename ='$images' WHERE ID='$ID'";

if ($conn->query($sql) === TRUE) {
   move_uploaded_file($_FILES["add_ons_image"]["tmp_name"],"upload/".$_FILES["add_ons_image"]["name"]);
   $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
    VALUES ('$customerID' ,'Update Add Ons information of titled: <u> $description </u>', now(),'$fullname', 'Information')";
    $conn->query($sql1);  
   ?>
    <script type="text/javascript">
      alert("Successfully Updated");
    </script>
  <?php
  echo "<meta http-equiv='refresh' content='0'>";
} else {
  echo "Error updating record: " . $conn->error;
}





}else if(isset($_POST['add_ons_btn_delete'])){
  $ID            = $_POST['add_ons_id'];
  $description   = mysqli_real_escape_string($conn, $_POST["addon_ons_description"]);

$sql = "DELETE FROM tbl_price WHERE ID='$ID'";

if ($conn->query($sql) === TRUE) {
   $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
    VALUES ('$customerID' ,'Delete Add Ons titled: <u> $description </u>', now(),'$fullname', 'Information')";
    $conn->query($sql1);  
   ?>
    <script type="text/javascript">
      alert("Successfully Deleted");
    </script>
  <?php
  echo "<meta http-equiv='refresh' content='0'>";
} else {
  echo "Error deleting record: " . $conn->error;
}

}else if(isset($_POST['add_ons_btn_disable'])){
  $ID            = $_POST['add_ons_id'];
  $description   = mysqli_real_escape_string($conn, $_POST["addon_ons_description"]);
  $sql = "UPDATE tbl_price SET quantity=1 WHERE ID='$ID'";

  if ($conn->query($sql) === TRUE) {
     $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
    VALUES ('$customerID' ,'Disabled Add Ons  titled: <u> $description </u>', now(),'$fullname', 'Information')";
    $conn->query($sql1);  

    echo "<meta http-equiv='refresh' content='0'>";
  } else {
    echo "Error updating record: " . $conn->error;
  }

}else if(isset($_POST['add_ons_btn_enable'])){
   $ID            = $_POST['add_ons_id'];
  $description   = mysqli_real_escape_string($conn, $_POST["addon_ons_description"]);
  $sql = "UPDATE tbl_price SET quantity=0 WHERE ID='$ID'";

  if ($conn->query($sql) === TRUE) {
     $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
    VALUES ('$customerID' ,'Enabled Add Ons  titled: <u> $description </u>', now(),'$fullname', 'Information')";
    $conn->query($sql1);  

    echo "<meta http-equiv='refresh' content='0'>";
  } else {
    echo "Error updating record: " . $conn->error;
  }

}else if(isset($_POST['logout'])){

  session_unset();
  session_destroy();

  ?>
 <script type="text/javascript">location.href = '../login.php';</script>
<?php

}


  // add_ons_btn_disable
  //     add_ons_btn_enable

?>
