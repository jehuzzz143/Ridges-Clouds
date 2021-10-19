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
                         $fullname = $rowedit['Userfname'].", ".$rowedit['Userlname'];
                $usertype = $rowedit['Usertype'];
                $customerID = $rowedit['ID'];
                $fname1 =$rowedit['Userfname'];
                $fname2 =$rowedit['Userlname'];
                $fname = $rowedit['Userfname']." ".$rowedit['Userlname'];
                $email =$rowedit['Useremail'];
                $phone =$rowedit['Userpnumber'];
                $bday= $rowedit['Userbday'];
                $age= $rowedit['Userage'];
                $twitter =$rowedit['Usertwitter'];
                $facebook =$rowedit['Userfbook'];
                $instagram =$rowedit['Userinstagram'];
                $regs =$rowedit['Userregsdate'];
                 $image =$rowedit['Userimage'];
                $pword =$rowedit['Userpword'];
                //echo '<script type="text/javascript">alert("'.$pword.'")</script>'; 
                if($rowedit['Usertype'] == 3){
                  $type = "Admin";
                  $desc ="Admin are users that have the overall use of the website. Admin use to create excel report from website datas :)";
                }else if($rowedit['Usertype'] == 2){
                  $type = "Admin";
                  $desc ="Employee is the second to the highest type of users. Employee are used to accept the booking and edit the website interface but cannot make anyother accounts for new employee and can't extract website data to exxel to make report. Those things are for admin only! :)";
                }
               

            }
            $path= "upload/profilepicture/".$image;
            //echo '<script type="text/javascript">alert("'.$path.'")</script>'; 
     }



?>
<html lang="en" dir="ltr">
  <head>
    <!--Cover to use all symbol all over the world -->
    <meta charset="utf-8">
    <!-- responsive viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- CSS -->
    <link rel="stylesheet" href="assets/account.css">
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
       
       <p style="text-align: center; font-size:26px"> <?php echo"".strtoupper($fname) ?></p>
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


  <div class="column" style="background-color:; margin:0;padding:0;" id="user-profile">
      <div class="dropdown" style="float:right; height:100%; background-color:; margin:0; padding:0; ">
        <button type="button" class="dropbtn"  style="font-size:17px; background-color:#e09f5b; " >
            Welcome, FirstName <i class="fas fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
           <form method="POST">
             <button  type="button"class="buttonNav"><i class="fas fa-edit"></i>  Account</button>
             <button  type="submit" class="buttonNav"name="logout"><i class="fas fa-sign-out-alt"></i>  Logout</button>
           </form>
        </div>

      </div>
  </div>

 
</div><br>
<!-- End -->

<center>
<div class="container-lg " style="background-color:;">
                <br><br>
 <form method="POST" enctype="multipart/form-data">

      <div class="columns is-mobile is-multiline is-centered" style="padding:10px;"> 
        <div class="column is-full" >
          <div class="wrapper-profile">
            <div class="left">
               <?php 
                if($image == ""){
                  ?>
                     <img src="../style/images/admin/admin.png" class="admin" alt="admin picture"/>
                  <?php
                }else{
                  ?>
                  
                    <img src="<?php echo"".$path  ?>" class="admin" alt="admin picture"/>

                  <?php
                }
              ?>
              <h4><?php echo"".strtoupper($fname); ?></h4>
              <p><?php echo"".$type; ?></p>
              <br>
              <div class="social_media">
                <ul>
                  <li><a href="<?php echo"".$facebook?>"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="<?php echo"".$twitter?>"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="<?php echo"".$instagram?>"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="right">
              <div class="info">
                <h3 class="label">Information</h3>
                <div class="info_data">
                  <div class="data">
                    <h4>Email</h4>
                    <p><?php echo"".$email; ?> </p>
                    <h4>Birthday</h4>
                    <p><?php echo"".$bday; ?> </p>
                    <h4>Date of Registration</h4>
                    <p><?php echo"".$regs; ?> </p>
                  </div>
                  <div class="data">
                    <h4>Phone</h4>
                    <p><?php echo"+".$phone; ?></p>
                    <h4>Age</h4>
                    <p><?php echo"".$age; ?></p>
                  </div>
                </div>
              </div>

              <div class="projects">
                <h3 class="label">Ridges and Clouds</h3>
                <div class="projects_data">
                  <div class="data">
                    <h4>Role</h4>
                    <p><?php echo"".$type; ?></p>
                  </div>
                  <div class="data">
                    <h4>Description</h4>
                    <p><?php echo"".$desc; ?></p>
                  </div>
                </div>
              </div>

               
              <a id="edit" onclick="edit()" style="float:right;" href="#info-update"> Wanna edit account information?</a>
            </div>

          </div>

        </div>
        



        <div class="column is-full" >
          <div id="updateinfo" class="updateinfo hide">
           
            <h1 class="update-title"> UPDATE INFORMATION <span class="close" onclick="close()" ><a href="#user-profile"><i class="fas fa-window-close" ></i></a></span></h1> 
            <hr>
            <div class="columns">
              <div class="column">
                <label class="label1"> Firstname</label>
                <input type="text" name="fname" value="<?php echo"".$fname1;?>">
            
              </div>
              <div class="column">
                <label class="label1"> Lastname</label>
                <input type="text" name="lname" value="<?php echo"".$fname2;?>">
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <label class="label1"> Email</label>
                <input type="text" name="email" value="<?php echo"".$email;?>">
                
              </div>
              <div class="column">
                <label class="label1"> Phone</label>
                <input type="text" name="phone" value="<?php echo"".$phone;?>">
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <label class="label1"> Birthday</label>
                <input type="date" name="bday" value="<?php echo"".$bday;?>">
                
              </div>
              <div class="column">
                <label class="label1" > Role</label>
                <select name="role" id="role">
                  <?php 
                    if($type== "Admin"){
                      ?>
                      <option value="Admin" selected>Admin</option>
                      <option value="Employee">Employee</option>
                      <?php
                    }else{
                      ?>
                      <option value="Admin">Admin</option>
                      <option value="Employee" selected>Employee</option>
                      <?php
                    }

                  ?>
                  
                 
                </select>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <label class="label1"> Facebook Link</label>
                <input type="text" name="facebook" value="<?php echo"".$facebook;?>">
                
              </div>
              <div class="column">
                <label class="label1"> Password</label>
                <input type="password" name="password" required>
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <label class="label1"> Twitter Link</label>
                <input type="text" name="twitter" value="<?php echo"".$twitter;?>">
                
              </div>
              <div class="column">
                <label class="label1"> New Password</label>
                <input type="password" name="newPassword">
              </div>
            </div>
             <div class="columns">
              
              <div class="column">
                <label class="label1"> Instagram Link</label>
                <input type="text" name="instagram" value="<?php echo"".$instagram;?>">
              </div>
              <div class="column">
                <label class="label1"> Profile Picture</label>
                <input type="file" name="patient_image" width="20">
                <input type="hidden" name="oldprofile" width="20" value="<?php echo"".$image;?>">
                 <button type="submit" class="buttonNav"name="update" style="float:right;">UPDATE</button>
              </div>
            </div>
          
           
           
       
          </div>
          
          
        </div>

        </div>

      </div>
   






     </form>
  
<center>  
<br><bR><br><br>
<script type="text/javascript">
  var edicontainer = document.getElementById("updateinfo");
function edit(){
  $(function () {
     $('#updateinfo').removeClass('hide');
     jQuery("#updateinfo").addClass('fade-in');
   edicontainer.style.display = "";



});
}

 var span = document.getElementsByClassName("close")[0];



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  edicontainer.style.display = "none";
 
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
    <br><br><br>
<div id="info-update"></div>
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
}else if(isset($_POST['update'])){
$fname        = $_POST['fname'];
$lname        = $_POST['lname'];
$email        = $_POST['email'];
$phone        = $_POST['phone'];
$bday         = $_POST['bday'];
$role         = $_POST['role'];
$facebook     = $_POST['facebook'];
$password     = $_POST['password'];
$twitter      = $_POST['twitter'];
$newPassword  = $_POST['newPassword'];
$instagram    = $_POST['instagram'];
$password     = $_POST['password'];

if($newPassword == ""){
  $legitpassword = $_POST['password'];
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

}else{
   $legitpassword = $_POST['newPassword'];
   $hashed_password = password_hash($newPassword, PASSWORD_DEFAULT);

}


$images       = $_FILES['patient_image']['name'];
if($role =='Admin'){
  $type =3;
}else{
  $type =2;
}

//echo '<script type="text/javascript">alert("'.$password.'")</script>';
if($_FILES['patient_image']['name']==''){
    $images= $_POST['oldprofile'];
}


    if(password_verify($password,$pword)){
      

      $sql = "UPDATE tbl_user SET Userlname='$lname', Userfname='$fname', Useremail='$email', Userpnumber='$phone', Userbday='$bday',Usertype=$type ,Userfbook='$facebook', Userpword='$hashed_password', Usertwitter='$twitter', Userinstagram='$instagram', Userimage='$images', Userpwordnohash='$legitpassword' WHERE ID= '$customerID'";
      if(mysqli_query($conn, $sql)) {
        move_uploaded_file($_FILES["patient_image"]["tmp_name"],"upload/profilepicture/".$_FILES["patient_image"]["name"]);
        $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name)
  VALUES ('$customerID' ,' Update Profile information', now(),'$fullname')";
   $conn->query($sql1);

        echo '<script type="text/javascript">alert("Successfully Updated")</script>';
        echo("<meta http-equiv='refresh' content='1'>");  
      }else{
        echo "Error updating record: " . mysqli_error($conn);
      }

    }else{
     echo '<script type="text/javascript">alert("Incorrect Password")</script>';
    ?>
      <script type="text/javascript">
        document.getElementById('updateinfo').style.display="";
      </script>

    <?php

          






    }

}



?>
