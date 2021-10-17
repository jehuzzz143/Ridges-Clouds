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
    <link rel="stylesheet" href="assets/admin_gallery.css">
    <!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Fontawesome  -->
    <script src="https://kit.fontawesome.com/70127cec04.js" crossorigin="anonymous"></script>

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


  <div class="column" style="background-color:; margin:0;padding:0;" >
      <div class="dropdown" style="float:right; height:100%; background-color:; margin:0; padding:0; ">
        <button type="button" class="dropbtn"  style="font-size:17px; background-color:#e09f5b; " >
            Welcome, FirstName <i class="fas fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
           <form method="POST">
             <button  type="button" class="buttonNav"><i class="fas fa-user"></i> Account</button>
             <button  type="submit" class="buttonNav"name="logout"><i class="fas fa-sign-out-alt"></i>  Logout</button>
           </form>
        </div>
      </div>
  </div>
</div><br>
<!-- End -->
<!-- Delete Modal-->
<div id="deletemyModal" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content" style="width: 400px;">
    <span  class="close">&times;</span>
    <form method="POST">
      <label>Display Photo</label>   <input type="hidden" name="delete-id" id="delete-id"  style="width:20%;height:30px;" />
      <hr>
      <p>You really want to delete this photo?</p>
      <hr>

      
      <button  class="buttonNav"type="submit" name="deletephoto" style="float:right">Yes</button>

      <button   class="buttonNav"type="button" onclick="appClose()" style="float:right;margin-right:5px;">    Cancel</button>  
    </form>
  </div>

</div>
<!-- end of cancel modal-->




<!-- add Modal-->
<div id="addmyModal" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content" style="width: 400px;">
    <span  class="close">&times;</span>
    <form method="POST" enctype="multipart/form-data">
      <label>Adding New Photo</label>   
      <hr>
        <label id="label">ID</label>
        <input type="text" id="gall_id" name="gall_id" disabled>
      <p><span style="color:red;">*</span>Category</p>
        
        <select name="category" id="category" onclick="description()">
          <option value="1" selected>Normal Display</option>
          <option value="2" >Carousel</option>
       
        </select>
        <p><span style="color:red;">*</span>Select Image</p>
       <input name="photo" id="photo" type="file" accept="image/*" > </input>
       <input type="hidden" id="photo_two" name="photo_two">
       <br>
       <p>Description</p>
      <textarea id="TA_description" name="description" rows="6" ></textarea>
       
      <hr>


      
      <button type="submit" class="buttonNav" id="addphoto" name="addphoto" style="float:right">Submit</button>
       <button type="submit" class="buttonNav" id="updatephoto" name="updatephoto" style="float:right">Update</button>
      <button  class="buttonNav" type="button"onclick="appClose()" style="float:right;margin-right:5px;">Cancel</button>  
     </form>
  </div>

</div>
<!-- add of cancel modal-->




<!-- CAROUSELL -->
  <div class="container is-mobile" style=" margin-bottom: 20px;">
    <h1 class='admin-slider'> IMAGE SLIDER</h1>

    <div class="columns is-multiline" style="margin-left: 10px;margin-top: 10px;">
      <!--- ROWS -->
      <div class="column is-full">

    <button class="btnadd addBtn" onclick="carousel()">Add Photo</button>
      </div>
  <?php
      $sql = "SELECT * FROM tbl_photo where category = 2 ORDER BY ID ASC";
      $result = $conn->query($sql);
      

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $path = "../style/images/".$row['photoname'];
         
          ?>
          <div class="column is-3 "> <!-- padding-gall -->
            <div class="container image-gall">
              <img src="<?php echo"".$path; ?>" alt="Review Photos">
                <button id="deleteBtn" class="deleteBtn" ><i class="far fa-trash-alt"></i></button>
                <button id="deleteBtn" class="deleteBtn gallerybox" style="left:55% !important"><i class="far fa-edit"></i></i></button>
              <p  style="display:none;"><?php echo"".$row['ID'] ?></p>
              
              <p hidden> <?php echo"".$row['photoname']; ?> </p>
              <p hidden> <?php echo"".$row['category']; ?> </p>
              <p hidden> <?php echo"".$row['description']; ?> </p>

            </div>
          </div>


          <?php
          
        }
      } else {
        echo "No photo review available please upload first";
      }
      ?>


      <!-- END ROWS --> 
    </div>
</div>
<!-- END Carousell -->




  <div class="container is-mobile" style="margin-bottom: 20px; ">
    <h1 class='admin-slider'> PHOTOS</h1>
    

    <div class="columns is-multiline" style="margin-left: 10px;margin-top: 10px;">
      <!--- ROWS -->
    
      <?php
      $sql = "SELECT * FROM tbl_photo where category = 1 ORDER BY ID DESC";
      $result = $conn->query($sql);
      

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $path = "../style/images/".$row['photoname'];
         
          ?>
          <div class="column is-3 "> <!-- padding-gall -->
            <p hidden> <?php echo"".$row['ID']; ?> </p>
            
            <div class="container image-gall">
              <img src="<?php echo"".$path; ?>" alt="Review Photos ">
                <button id="deleteBtn" class="deleteBtn" ><i class="far fa-trash-alt"></i></button>
                <button id="deleteBtn" class="deleteBtn gallerybox" style="left:55% !important"><i class="far fa-edit"></i></i></button>
              <p  style="display:none;"><?php echo"".$row['ID'] ?></p>
              <p hidden> <?php echo"".$row['photoname']; ?> </p>
              <p hidden> <?php echo"".$row['category']; ?> </p>
              <p hidden> <?php echo"".$row['description']; ?> </p>

            </div>
          </div>


          <?php
          
        }
      } else {
        echo "No photo review available please upload first";
      }
      ?>

      


      <!-- END ROWS --> 
    </div>
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
<script>
  function description(){
    console.log("pogi");
    document.getElementById("description").style.display = "none";
  }
// Get the modal
var gallerybox = document.querySelectorAll(".gallerybox");
var deletemodal = document.getElementById("deletemyModal");
var addmodal = document.getElementById("addmyModal");

// Get the button that opens the modal
var deleteBtn = document.querySelectorAll(".deleteBtn");
var addBtn = document.querySelectorAll(".addBtn");

// Get the <span> element that closes the modal
var deletespan = document.querySelectorAll(".close");

// When the user clicks the button, open the modal 
for (var i = 0; i < deleteBtn.length; i++) {
 deleteBtn[i].onclick = function(e) {
    e.preventDefault();
    deletemodal.style.display = "block";

   console.log("pogi");
   $tr = $(this).closest('div');
   var data = $tr.children("p").map(function(){
        return $(this).text();
      }).get();
  console.log(data);
  document.getElementById("delete-id").value = data[0];




  }
}

for (var i = 0; i < gallerybox.length; i++) {
 gallerybox[i].onclick = function(e) {
    e.preventDefault();
    addmodal.style.display = "block";

 
     console.log("pogi");
   $tr = $(this).closest('div');
   var data = $tr.children("p").map(function(){
        return $(this).text();
      }).get();
  console.log(data);
   document.getElementById("TA_description").value = data[3];
  document.getElementById("gall_id").value = data[0];
  document.getElementById("photo_two").value = data[1].trim();

  if(data[2].trim()=='1'){
    document.getElementById("category").selectedIndex = 0;
  }else{
    document.getElementById("category").selectedIndex = 1;
  }


  document.getElementById("photo").required = false;
  document.getElementById("gall_id").style.display = "block";
  document.getElementById("label").style.display = "block";

  document.getElementById("updatephoto").style.display ="block";
  document.getElementById("addphoto").style.display="block";

  }
}

for (var i = 0; i < addBtn.length; i++) {
 addBtn[i].onclick = function(e) {
    e.preventDefault();
    addmodal.style.display = "block";

    document.getElementById("updatephoto").style.display ="none";
    document.getElementById("addphoto").style.display="block";

    document.getElementById("TA_description").value = "";
    document.getElementById("gall_id").value = "";
    document.getElementById("photo_two").value = "";
    document.getElementById("category").selectedIndex = 0;
    document.getElementById("photo").required = true;
    document.getElementById("gall_id").style.display = "none";
    document.getElementById("label").style.display = "none";

   
  }
}
  function appClose(){
    deletemodal.style.display = "none";
    addmodal.style.display = "none";
  }


// When the user clicks on <span> (x), close the modal

for (var i = 0; i < deletespan.length; i++) {
 deletespan[i].onclick = function(e) {
    e.preventDefault();
    deletemodal.style.display = "none";
    addmodal.style.display = "none";
    }
  }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == deletemodal || event.target == addmodal ) {
    deletemodal.style.display = "none";
    addmodal.style.display = "none";
  }
}

</script>

  </body>
</html>
<?php

if(isset($_POST['addphoto'])){
 $photo= $_FILES['photo']['name'];
 $category = $_POST['category'];
 $description = $_POST['description'];
 if($description == ''){
  $description = "";
 }


 if($category == 1){
  $sql = "INSERT INTO tbl_photo (photoname, category, description)
VALUES ('$photo', $category, '$description')";
 }else{
  $sql = "INSERT INTO tbl_photo (photoname, category, description)
VALUES ('$photo', $category , '$description')";

 }


if ($conn->query($sql) === TRUE) {
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
        VALUES ('$customerID' ,'Added new photo in gallery', now(),'$fullname_admin', 'Information')";
        $conn->query($sql1);

    move_uploaded_file($_FILES["photo"]["tmp_name"],"../style/images/".$_FILES["photo"]["name"]);

    echo '<script type="text/javascript">alert("Photo Added")</script>';
   echo("<meta http-equiv='refresh' content='1'>");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}else if (isset($_POST['deletephoto'])){
  $id = $_POST['delete-id'];

  $sql = "DELETE FROM tbl_photo WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
        VALUES ('$customerID' ,'Delete photo id: $id', now(),'$fullname_admin', 'Information')";
        $conn->query($sql1);
  echo '<script type="text/javascript">alert("Photo Deleted")</script>';
    echo("<meta http-equiv='refresh' content='1'>");
} else {
  echo "Error deleting record: " . $conn->error;
}


}else if(isset($_POST['updatephoto'])){
  $gall_id        =$_POST['gall_id'];
  $gall_id        = str_replace(' ', '', $gall_id);
  $category       =$_POST['category'];
  $photo          =$_FILES['photo']['name'];
  $description    =$_POST['description'];
  $description        = trim($description," ");
  $description    = mysqli_real_escape_string($conn, $_POST["description"]);

  if($_FILES['photo']['name'] ==""){
    $photo        = $_POST['photo_two'];
    $photo        = trim($photo," ");
  }

$sql = "UPDATE tbl_photo SET photoname='$photo',description='$description',category='$category' WHERE ID='$gall_id'";

if ($conn->query($sql) === TRUE) {
  move_uploaded_file($_FILES["photo"]["tmp_name"],"../style/images/".$_FILES["photo"]["name"]);

    $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
        VALUES ('$customerID' ,'Update photo id: $id', now(),'$fullname_admin', 'Information')";
        $conn->query($sql1);



   echo '<script type="text/javascript">alert("Photo updated")</script>';
   echo("<meta http-equiv='refresh' content='1'>");
} else {
  echo "Error updating record: " . $conn->error;
}
}


?>
