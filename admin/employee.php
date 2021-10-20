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
                $fname = $rowedit['Userfname']." ".$rowedit['Userlname'];

                $image =$rowedit['Userimage'];
                $mypassword = $rowedit['Userpwordnohash'];

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
    <link rel="stylesheet" href="assets/employee.css">
    <!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Fontawesome  -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

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
<div class="columns is-mobile" style="background-color:white;
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


  <div class="column" style="background-color:; margin:0;padding:0; min-width: 400px;" >
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
<!-- End -->

<!-- The Modal -->
<div id="myModal" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p class="label">EMPLOYEE INFORMATION</p>
    <hr>
      <form method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="columns">
              <div class="column">
                <label class="label1"> Firstname</label>
                <input type="text" name="fname" required>
            
              </div>
              <div class="column">
                <label class="label1"> Lastname</label>
                <input type="text" name="lname" required>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <label class="label1"> Email</label>
                <input type="text" name="email" autocomplete="off" required>
                
              </div>
              <div class="column">
                <label class="label1"> Phone</label>
                <input type="text" name="phone" required>
              </div>
            </div>
             <div class="columns">
              <div class="column">
                <label class="label1"> Birthday</label>
                <input type="date" name="bday" required>
                
              </div>
              <div class="column">
                <label class="label1" > Role</label>
                <select name="role" id="role" required>     
                      <option value="Admin" >Admin</option>
                      <option value="Employee" selected>Employee</option>

                </select>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <label class="label1"> Facebook Link</label>
                <input type="text" name="facebook" >
                
              </div>
              <div class="column">
                <label class="label1"> Password</label>
                <input type="password" name="password" required autocomplete="off">
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <label class="label1"> Twitter Link</label>
                <input type="text" name="twitter" >
                
              </div>
              <div class="column">
                <label class="label1"> Confirm Password</label>
                <input type="password" name="confirmPassword" required>
              </div>
            </div>
             <div class="columns">
              
              <div class="column">
                <label class="label1"> Instagram Link</label>
                <input type="text" name="instagram" >
              </div>
              <div class="column">
                <label class="label1"> Profile Picture</label>
                <input type="file" name="patient_image" width="20" required>
                <input type="hidden" name="oldprofile" width="20" >
                 
              </div>
            </div>
       

    <hr>
    <div class="modal-footer">
      <button class="buttonNav" type="button" onclick="newClose()"> Close</button>
      <button class="buttonNav" type="submit" name="newSave"> Save</button>
    </div>
     </form>
  </div>

</div>
<!--  Modal End -->

<!-- ##################################################### UPDATE Modal -->
<div id="myModal1" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close1">&times;</span>
    <p class="label">UPDATE INFORMATION</p>
    <hr>
      <form method="POST"  enctype="multipart/form-data">
            <input type="hidden" id="upid" name="upid" required>

            <div class="columns">
              <div class="column">
                <label class="label1"> Firstname</label>
                <input type="text" id="upfname" name="upfname" required>
            
              </div>
              <div class="column">
                <label class="label1"> Lastname</label>
                <input type="text" id="uplname" name="uplname" required>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <label class="label1"> Email</label>
                <input type="text" id="upemail" name="upemail" autocomplete="off" required>
                
              </div>
              <div class="column">
                <label class="label1"> Phone</label>
                <input type="text" id="upphone" name="upphone" required>
              </div>
            </div>
             <div class="columns">
              <div class="column">
                <label class="label1"> Birthday</label>
                <input type="date" id="upbday" name="upbday" required>
                
              </div>
              <div class="column">
                <label class="label1" > Role</label>
                <select name="uprole" id="uprole" id="role" required>     
                      <option value="Admin" >Admin</option>
                      <option value="Employee" selected>Employee</option>

                </select>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <label class="label1"> Facebook Link</label>
                <input type="text" id="upfacebook" name="upfacebook" >
                
              </div>
              <div class="column">
                <label class="label1"> Admn Password</label>
                <input type="password" id="uppassword" name="uppassword"  required >
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <label class="label1"> Twitter Link</label>
                <input type="text" id="uptwitter" name="uptwitter" >
                
              </div>
              <div class="column">
                <label class="label1"> New Password</label>
                <input type="password" id="upconfirmpassword" name="upconfirmPassword" >
                <input type="hidden" id="oldpass" name="oldpass" >
              </div>
            </div>
             <div class="columns">
              
              <div class="column">
                <label class="label1"> Instagram Link</label>
                <input type="text" id="upinstagram" name="upinstagram" >
              </div>
              <div class="column">
                <label class="label1"> Profile Picture</label>
                <input type="file"  name="uppatient_image" width="20" >
                <input type="hidden" id="uppatient_image" name="oldprofile" width="20" >
                 
              </div>
            </div>
       

    <hr>
    <div class="modal-footer">
      <button type="button" class="buttonNav"onclick="updateClose()"> Close</button>
      <button type="submit" class="buttonNav"name="updateSave"> Update</button>
      <button type="submit" class="buttonNav"name="updateDelete"> Delete</button>
    </div>
     </form>
  </div>

</div>
<!--  Modal End -->
<!--<h2 style="opacity: .6;margin-left: 4px; font-weight: bold;">  WORKERS LIST</h2><br>-->
<div class="container-lg" style="background-color:;
    ">

    <button id="myBtn"class="btn">New Employee</button>
  <script>

var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

function newClose(){
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

  <div class="columns is-mobile is-multiline" > 
    
        <?php 
          $sql = "SELECT * FROM tbl_user WHERE Usertype = 2 OR Usertype = 3 ORDER BY Usertype DESC";
          $result = $conn->query($sql);
          $count =0;

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $path = "upload/profilepicture/".$row['Userimage'];
              if($row['Usertype']==2){
                $role = "Employee";
                $desc =" Employee are used to accept or decline the booking.";
              }else{
                $role = "Admin";
                $desc =" Admin use to create sales report and update information from website datas.";
              }
              if($count >=2){
                ?>
                  <div class="columns is-mobile is-multiline" >

                <?php
                $count = 0;
              }else{

              }
              ?>

                <div class="column is-full"  >
                  <div class="wrapper-profile" >
                    <?php
                    if($role == "Admin"){
                      ?>
                      <div class="left" style="background: #333948" >
                      <?php
                    }else{
                      ?>
                      <div class="left" style="background: #333948" >
                      <?php
                    }
                    ?>

                    
                     <?php 
                        if($image == ""){
                          ?>
                             <img src="../style/images/admin/admin.png" class="admin" alt="Employee picture"/>
                          <?php
                       }else{
                          ?>
                          
                            <img src="<?php echo''.$path ?>" class="admin" alt="admin picture"/>

                          <?php
                        }
                      ?>
                      <h4><?php echo"".$row['Userfname']." ".$row['Userlname'];?></h4>
                    
                      <div class="social_media" >
                        <ul>
                          <li><a href="<?php echo"".$row['Userfbook'] ?>" <?php if($row['Userfbook']!=""){ ?> target="_blank" <?php }?>><i class="fab fa-facebook-f fa-lg"></i></a></li>
                          <li><a href="<?php echo"".$row['Usertwitter'] ?>" <?php if($row['Userfbook']!=""){ ?> target="_blank" <?php }?>><i class="fab fa-twitter fa-lg" ></i></a></li>
                          <li><a href="<?php echo"".$row['Userinstagram'] ?>" <?php if($row['Userfbook']!=""){ ?> target="_blank" <?php }?>><i class="fab fa-instagram fa-lg"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <?php
                    if($row['ID']==  $customerID){
                      ?>
                      <div class="right edit" style="background:#fff; color:black;">
                      <?php
                    }else{
                      ?>
                      <div class="right edit" >
                      <?php
                    }
                    ?>
                    
                      <div class="info" >
                        <h3 class="label">Information</h3>
                        <div class="info_data">
                          <div class="data">
                            <h4>Email</h4>
                            <p> <?php echo "".str_ireplace("@Gmail.com"," ",$row['Useremail'])?></p>
                            <h4>Birthday</h4>
                            <p> <?php echo "".$row['Userbday']?></p>
                            <h4>Date of Registration</h4>
                            <p> <?php echo "".$row['Userregsdate']?></p>
                          </div>
                          <div class="data">
                            <h4>Phone</h4>
                            <p><?php echo "".$row['Userpnumber']?></p>
                            <h4>Age</h4>
                            <p><?php echo "".$row['Userage']?></p>
                            
                            <?php 
                              if($usertype == 3){
                                ?>
                                <h4>Password</h4>
                                 <p><?php echo "".$row['Userpwordnohash']?>
                            </p>
                                <?php
                              }

                            ?>
                           
                          </div>
                        </div>
                      </div>

                      <div class="projects">
                        <h3 class="label">Ridges and Clouds</h3>
                        <div class="projects_data">
                          <div class="data">
                            <h4>Role</h4>
                            <p><?php echo"".$role; ?></p>
                          </div>
                          
                          <div class="data">
                            <h4>Description</h4>
                            <p><?php echo"".$desc; ?></p>
                          </div>
                        </div>

                      </div>
                      <h5 style="display:none;"><?php echo "".$row['ID'];?></h5>
                      <h5 style="display:none;"><?php echo "".$row['Userfname'];?></h5>
                      <h5 style="display:none;"><?php echo "".$row['Userlname'];?></h5>
                      <h5 style="display:none;"><?php echo "".$row['Useremail'];?></h5>
                      <h5 style="display:none;"><?php echo "".$row['Userpnumber'];?></h5>
                      <h5 style="display:none;"><?php echo "".$row['Userbday'];?></h5>
                      <h5 style="display:none;"><?php echo "".$row['Usertype'];?></h5>
                      <h5 style="display:none;"><?php echo "".$row['Userfbook'];?></h5>
                      <h5 style="display:none;"><?php echo "".$row['Userpwordnohash'];?></h5>
                      <h5 style="display:none;"><?php echo "".$row['Usertwitter'];?></h5>
                      <h5 style="display:none;"><?php echo "".$row['Userinstagram'];?></h5>
                      <h5 style="display:none;"><?php echo "".$row['Userimage'];?></h5>
                      <h5 style="display:none;"><?php echo "".$row['Userpwordnohash'];?></h5>
                      
                      
                 
                       
                      
                    </div>

                  </div>
                </div>
              <?php 
              $count++;
              if($count >=2){
                ?>
                  </div>
                <?php
              }else{

              }
            }
          } else {
            echo "0 results";
          }
        ?>
         




  </div>


</div>
<script type="text/javascript">
  var btn1 = document.querySelectorAll(".edit");
  var modal1 = document.getElementById("myModal1");

  for (var i = 0; i < btn1.length; i++) {
   btn1[i].onclick = function(e) {
      e.preventDefault();
      modal1.style.display = "block";

      $tr = $(this).find("h5");
       var data = $tr.map(function(){
        return $(this).text();
      }).get();
      
      console.log(data);

      document.getElementById('upid').value = data[0];
      document.getElementById('upfname').value = data[1];
      document.getElementById('uplname').value = data[2];
      document.getElementById('upemail').value = data[3];
      document.getElementById('upphone').value = data[4];
      document.getElementById('upbday').value = data[5];
      if(data[6] == 3){
        document.getElementById('uprole').selectedIndex = 0;
      }else{
        document.getElementById('uprole').selectedIndex = 1;
      }
      document.getElementById('upfacebook').value = data[7];
      document.getElementById('uptwitter').value = data[9];
      document.getElementById('upinstagram').value = data[10];
      document.getElementById('uppatient_image').value = data[11];
      document.getElementById('oldpass').value = data[12];


    }
  }

  var span1 = document.getElementsByClassName("close1")[0];

  span1.onclick = function() {
  modal1.style.display = "none";

 
}
function updateClose(){
  modal1.style.display = "none";
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

  </body>
</html>
<?php
if(isset($_POST['newSave'])){
$fname            = $_POST['fname'];
$lname            = $_POST['lname'];
$email            = $_POST['email'];
$phone            = $_POST['phone'];
$bday             = $_POST['bday'];
$role             = $_POST['role'];
$facebook         = $_POST['facebook'];
$password         = $_POST['password'];
$twitter          = $_POST['twitter'];
$confirmPassword  = $_POST['confirmPassword'];
$instagram        = $_POST['instagram'];
$password         = $_POST['password'];
$images           = $_FILES['patient_image']['name'];




if($password != $confirmPassword){
  echo '<script type="text/javascript">alert("Password Doesn`t match")</script>';
}else{
    $sqlselect = "Select * from tbl_user order by SUBSTRING(ID,-5,LENGTH(ID)) desc limit 1";



      $result = mysqli_query($conn,$sqlselect);
      $row = mysqli_fetch_array($result);
      
      $lastid = $row['ID'];
      
      if($lastid == " "){
        $cstmr1 = "CSTMR1";
      }else{
    
        $cstmr = substr($lastid,5);
        
        $cstmr = intval($cstmr);
        
        $cstmr += 1;
        $cstmr = strval($cstmr);
        
        $cstmr1 = "CSTMR".$cstmr;

        $DOB = date("y-m-d",strtotime($bday));
        $age = floor((time() - strtotime($DOB)) / 31556926);

        if($role == "Admin"){
          $type = 3;
        }else{
          $type = 2;
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO tbl_user (ID, Userfname,  Userlname,  Useremail,  Userpnumber,  Userpword,  Userbday, Userage, Usertype , Userregsdate, Userpwordnohash, Userimage, Userfbook,Usertwitter,Userinstagram)
                VALUES ('$cstmr1', '$fname', '$lname', '$email', '$phone', '$hashed_password', '$bday', '$age', '$type', now(), '$password', '$images','$facebook','$twitter','$instagram')";

          if ($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["patient_image"]["tmp_name"],"upload/profilepicture/".$_FILES["patient_image"]["name"]);
            echo '<script type="text/javascript">alert("New record created successfully")</script>';
            echo("<meta http-equiv='refresh' content='1'>");
          
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }

  }
}else if(isset($_POST['updateSave'])){
$upid             = $_POST['upid'];
$fname            = $_POST['upfname'];
$lname            = $_POST['uplname'];
$email            = $_POST['upemail'];
$phone            = $_POST['upphone'];
$bday             = $_POST['upbday'];
$role             = $_POST['uprole'];
$facebook         = $_POST['upfacebook'];
$password         = $_POST['uppassword'];
$twitter          = $_POST['uptwitter'];
$confirmPassword  = $_POST['upconfirmPassword'];
$instagram        = $_POST['upinstagram'];

$images           = $_FILES['uppatient_image']['name'];

if($_FILES['uppatient_image']['name']==''){
    $images= $_POST['oldprofile'];
}

if($role =='Admin'){
  $type =3;
}else{
  $type =2;
}

if($confirmPassword == ""){
  $legitpassword = $_POST['oldpass'];
  $hashed_password = password_hash($legitpassword, PASSWORD_DEFAULT);

}else{
  $legitpassword = $_POST['upconfirmPassword'];
  $hashed_password = password_hash($confirmPassword, PASSWORD_DEFAULT);
}

  if($mypassword != $password){

    echo'<script type="text/javascript">alert("Wrong Admin Password")</script>';

  }else{

     $sql = "UPDATE tbl_user SET Userlname='$lname', Userfname='$fname', Useremail='$email', Userpnumber='$phone', Userbday='$bday',Usertype=$type ,Userfbook='$facebook', Userpword='$hashed_password', Usertwitter='$twitter', Userinstagram='$instagram', Userimage='$images', Userpwordnohash='$legitpassword' WHERE ID= '$upid'";

     if ($conn->query($sql) === TRUE) {
      move_uploaded_file($_FILES["uppatient_image"]["tmp_name"],"upload/profilepicture/".$_FILES["uppatient_image "]["name"]);
       echo '<script type="text/javascript">alert("Record Successfully Updated")</script>';
       echo("<meta http-equiv='refresh' content='1'>");
      } else {
        echo "Error updating record: " . $conn->error;
      }

  }


}else if(isset($_POST['logout'])){

  session_unset();
  session_destroy();

  ?>
 <script type="text/javascript">location.href = '../login.php';</script>
<?php

}else if(isset($_POST['updateDelete'])){
  $upid             = $_POST['upid'];

  $sql = "DELETE FROM tbl_user WHERE ID= '$upid'";

  if ($conn->query($sql) === TRUE) {
   echo '<script type="text/javascript">alert("Record Successfully Deleted")</script>';
   echo("<meta http-equiv='refresh' content='1'>");
  } else {
    echo "Error deleting record: " . $conn->error;
  }

}
?>

