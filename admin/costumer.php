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
    <link rel="stylesheet" href="assets/costumer.css">
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
      <div class="dropdown" style="float:right; height:100%; background-color:w; margin:0; padding:0; ">
        <button type="button" class="dropbtn"  style="font-size:17px; background-color:#e09f5b; " >
            Welcome, FirstName <i class="fas fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
           <form method="POST">
             <button  type="button" class="buttonNav"  onclick="location.href='account.php';"><i class="fas fa-edit"></i>  Account</button>
             <button  type="submit"  class="buttonNav" name="logout"><i class="fas fa-sign-out-alt"></i>  Logout</button>
           </form>
        </div>

      </div>
  </div>

 
</div>
<br>
<!-- End -->


<!-- Modal -->
<div class="modal fade-in" id="myModal" tabindex="-1" >
    <div class="modal-dialog">
    <div class="modal-content" >
      <h5 class="label"> Customer Info <span class="close">&times;</span></h5>
      
      <hr>
      
      <!-- Modal Body-->
        <form  id="signupform" method=POST >
        <div class="modal-body">
        
          <div class="container is-mobile"> 
            
              
              <div class="columns is-multiline">
                <div class="column is-6">
                  <input  type="text" id="name" name="fname" placeholder="First Name" required>
                </div>
                <div class="column is-6">
                  <input type="text" id="lname" name="lname" placeholder="Last Name"  required>
                </div>
            
                      <div class="column is-6"> 
                        <input type="email" id="email1" onkeyup="emailvalidation()"name="email" placeholder="Email Address" title="Please input true email"  required><br>
                      <span id="textemail"></span>
                      </div>
                  
                
                      <div class="column is-6">
                        <input type="text" id="pnumber" name="pnumber" onkeyup="numbervalidation()"placeholder="Phone #: 639584569854" maxlength=12  pattern="[0-9]{12}" required><br>
                      <span id="phonetext"></span>
                      </div>
                
                   
                      <div class="column is-6">
                        <input type="password" id="pword" name="pword" onkeyup="pwordvalidation()" pattern="(?=.*[A-Z])(?=.)[A-Za-z\d]{5,}" title="Must contain  one uppercase and at least 5 characters" required  placeholder="Password"> 
                      <span id="passwordtext"></span>
                      </div>
                  
                  
                      <div class="column is-6">
                        <input type="password" id="cpword" name="cpword" placeholder="Confirm Password"  onkeyup="cpwordvalidation()" required><br><span id = "cpmessage" style="color:red"></span>
                      
                      </div>
                  </div>  
                  
                  
                
              <div class="list">
                <div class="columns is-multiline">
                  <div class="column is-full">
                    <p class="Bdate"><b>Birth Date</b></p>
                  </div>
                  <div class="column is-4">
                    
                    <select  id="month1" name="month" required style="width: 100%;"  >
                      <option value="">Month</option>
                      <option value="01">January</option>
                      <option value="02">February</option>
                      <option value="03">March</option>
                      <option value="04">April</option>
                      <option value="05">May</option>
                      <option value="06">June</option>
                      <option value="07">July</option>
                      <option value="08">August</option>
                      <option value="09">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">Dec</option>
                    </select>
                  </div>
                  <div class="column is-4">
                    <select  name="day" id="day" required style="width: 100%;">
                      <option value="">Day</option>
                      <option value="01">1</option>
                       <option value="02">2</option>
                      <option value="03">3</option>
                      <option value="04">4</option>
                      <option value="05">5</option>
                      <option value="06">6</option>
                      <option value="07">7</option>
                      <option value="08">8</option>
                      <option value="09">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                       <option value="13">13</option>
                       <option value="14">14</option>
                       <option value="15">15</option>
                       <option value="16">16</option>
                       <option value="17">17</option>
                       <option value="18">18</option>
                       <option value="19">19</option>
                       <option value="20">20</option>
                       <option value="21">21</option>
                       <option value="22">22</option>
                       <option value="23">23</option>
                       <option value="24">24</option>
                       <option value="25">25</option>
                       <option value="26">26</option>
                       <option value="27">27</option>
                      <option value="28">28</option>
                       <option value="29">29</option>
                       <option value="30">30</option>
                       <option value="31">31</option>
                    </select>
                  </div>
                  <div class="column is-4">

                    <select  name="year" id="year" required style="width: 100%;">
                      <option value="">Year</option>                                         
                      <option value="1981">1981</option>
                      <option value="1982">1982</option>
                      <option value="1983">1983</option>
                      <option value="1984">1984</option>
                      <option value="1985">1985</option>
                      <option value="1986">1986</option>
                      <option value="1987">1987</option>
                      <option value="1988">1988</option>
                      <option value="1989">1989</option>
                      <option value="1990">1990</option>
                      <option value="1991">1991</option>
                      <option value="1992">1992</option>
                      <option value="1993">1993</option>
                      <option value="1994">1994</option>
                      <option value="1995">1995</option>
                      <option value="1996">1996</option>
                      <option value="1997">1997</option>
                      <option value="1998">1998</option>
                      <option value="1999">1999</option>
                      <option value="2000">2000</option>
                      <option value="2001">2001</option>
                      <option value="2002">2002</option>
                      <option value="2003">2003</option>
                      <option value="2004">2004</option>
                      <option value="2005">2005</option>
                      <option value="2006">2006</option>
                      <option value="2007">2007</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2018">2018</option>
                                           
                    </select>
                  </div>
                </div>
              </div>
             
                  
        
                <br><p class="wrd1">By clicking <mark color=blue> Sign up </mark>, Your data will save into our system and will be protected by our website admin.</p>

            
            

           </div> 
        </div>
      
        <div class="modal-footer">
          <!-- <button type="button" class="button-modal" id="close" onclick="signupclose()">Close</button> -->
          <input type="submit" class="buttonNav" name="submitted" id="sign" class="button-modal" value="Sign-up"> </input>
        </div>
      </form>
    </div>
    </div>
  </div>

  <script type="text/javascript">
  function emailvalidation(){
    document.getElementById("phonetext").innerHTML="";
    document.getElementById("passwordtext").innerHTML ="";
    document.getElementById("phonetext").innerHTML="";
    document.getElementById("cpmessage").innerHTML="";
    var form = document.getElementById("signupform");
    var email1 = document.getElementById("email1").value;
    var text = document.getElementById("textemail");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if(email1.match(pattern)){
      form.classList.add("valid");
      form.classList.remove("invalid");
      text.innerHTML = "Your Email Address in valid.";
      text.style.color = "green";
    }else{
      form.classList.remove("valid");
      form.classList.add("invalid");
      text.innerHTML = "Please Enter valid Email Address";
      text.style.color="#ff0000";
    }
    if (email1 == ""){

      form.classList.remove("valid");
      form.classList.remove("Invalid");
      text.innerHTML = "";
      text.style.color = "#00ff00";
    }
  }
  function numbervalidation(){
    document.getElementById("textemail").innerHTML="";
    document.getElementById("passwordtext").innerHTML ="";
    document.getElementById("phonetext").innerHTML="";
    document.getElementById("cpmessage").innerHTML="";
    var form = document.getElementById("signupform");
    var pnumber = document.getElementById("pnumber").value;
    var text = document.getElementById("phonetext");
    var pattern = /^(639)\d{9}$/;

    if(pnumber.match(pattern)){
      form.classList.add("valid1");
      form.classList.remove("invalid1");
      text.innerHTML = "Your Phone number is valid";
      text.style.color = "green";
    }else{
      form.classList.remove("valid1");
      form.classList.add("invalid1");
      text.innerHTML= "Please Enter valid phone number";
      text.style.color ="#ff0000";
    }
    if (pnumber == ""){
      form.classList.remove("valid1");
      form.classList.remove("invalid1");
      text.innerHTML ="";
      text.style.color ="#00ff00";
    }



  }
  function cpwordvalidation(){
    document.getElementById("passwordtext").innerHTML ="";
    document.getElementById("textemail").innerHTML="";
    document.getElementById("phonetext").innerHTML="";


    var form = document.getElementById("signupform");
    var cpword = document.getElementById("cpword").value;
    var text = document.getElementById("cpmessage");
    var pattern = document.getElementById("pword").value;

    /*if(pattern != cpword){
      form.classList.remove("valid2");
      form.classList.add("Invalid2");
      text.innerHTML= "Password Does not match";
      text.style.color ="#ff0000";
    }else{
      
      form.classList.add("valid2");
      form.classList.remove("invalid2");
      text.innterHTML = "Password match"
      text.style.color = "green";
    }*/
    if (cpword == ""){
      form.classList.remove("valid2");
      form.classList.remove("invalid2");
      text.innerHTML ="";
      text.style.color ="#00ff00";
    }else if(cpword == pattern){
      form.classList.add("valid2");
      form.classList.remove("invalid2");
      text.innerHTML= "Password match";
      text.style.color = "green";
    }else{
      form.classList.remove("valid2");
      form.classList.add("invalid2");
      text.innerHTML= "Password Does not match";
      text.style.color ="#ff0000";
    }


  }
  function pwordvalidation(){

    document.getElementById("phonetext").innerHTML="";  
    document.getElementById("textemail").innerHTML="";
    document.getElementById("cpmessage").innerHTML="";
    var form = document.getElementById("signupform");
    var pword = document.getElementById("pword").value;
    var text = document.getElementById("passwordtext");
    var pattern = /^(?=.*[A-Z])(?=.)[A-Za-z\d]{5,}$/; 

    if(pword.match(pattern)){
      form.classList.add("valid3");
      form.classList.remove("invalid3");
      text.innerHTML = "This password is valid";
      text.style.color = "green";
    }else if(pword.length >=5){
      form.classList.remove("valid3");
      form.classList.add("Invalid3");
      text.innerHTML= "Atleast 1 uppercase";
      text.style.color ="#ff0000";


    }else{
      form.classList.remove("valid3");
      form.classList.add("invalid3");
      text.innerHTML= "Atleast 1 uppercase <br> Atleast 5 letters";
      text.style.color ="#ff0000";
    }
    /*if(pword.leth >= 5){
      form.classList.remove("valid3");
      form.classList.add("Invalid3");
      text.innerHTML= "Atleast 1 uppercase";
      text.style.color ="#ff0000";

    }*/
    if (pnumber == ""){
      form.classList.remove("valid3");
      form.classList.remove("invalid3");
      text.innerHTML ="";
      text.style.color ="#00ff00";
    }


  }
  document.getElementById("month").onclick =function(){
    document.getElementById("cpmessage").innerHTML="";
    document.getElementById("phonetext").innerHTML="";  
    document.getElementById("textemail").innerHTML="";
    document.getElementById("passwordtext").innerHTML="";
    var form = document.getElementById("signupform");
    form.classList.remove("valid");
    var form = document.getElementById("signupform");
    form.classList.remove("valid1");
    var form = document.getElementById("signupform");
    form.classList.remove("valid2");
      

  }
  document.getElementById("day").onclick =function(){
      document.getElementById("cpmessage").innerHTML="";
    document.getElementById("phonetext").innerHTML="";  
    document.getElementById("textemail").innerHTML="";
    document.getElementById("passwordtext").innerHTML="";
    var form = document.getElementById("signupform");
    form.classList.remove("valid");
    var form = document.getElementById("signupform");
    form.classList.remove("valid1");
    var form = document.getElementById("signupform");
    form.classList.remove("valid2");
  }
  document.getElementById("year").onclick =function(){
      document.getElementById("cpmessage").innerHTML="";
    document.getElementById("phonetext").innerHTML="";  
    document.getElementById("textemail").innerHTML="";
    document.getElementById("passwordtext").innerHTML="";
    var form = document.getElementById("signupform");
    form.classList.remove("valid");
    var form = document.getElementById("signupform");
    form.classList.remove("valid1");
    var form = document.getElementById("signupform");
    form.classList.remove("valid2");
  }





</script>



<center>
<h2 style="opacity: .6;margin-left: 4px; font-weight: bold;">  CUSTOMER LIST</h2><br>
<div class="container-lg" style="background-color:;">
    

  <button id="myBtn" class="btn"> New Customer</button>


</center>

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

  
<!-- delete modal-->

<div id="declinemyModal" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content" style="width: 400px;">
    <span  class="closeDecline close">&times;</span>
    <form method="POST">
      <label>Costumer ID</label>   <input type="text" name="cid" id="cid" style="width:30%;height:30px; text-align: center;"  />
      <hr>
      <p>Are you sure you want to delete this costumer? <mark>Booking Details of this costumer will also be deleted</mark> once deteled.</p>
      <hr>

      
      <button type="submit" class="buttonNav"name="costumerDecline" style="float:right">Yes</button>

      <button  type="button" class="buttonNav" onclick="declineClose()" style="float:right;margin-right:5px;">    Cancel</button>  
    </form>
  </div>

</div>
<!-- end of delete modal-->

<!-- update modal-->

<div id="updatemyModal" class="modal fade-in">

 
  <div class="modal-content" style="width: 500px;">
    <span  class="closeUpdate close">&times;</span>
    <form method="POST">
      <label>Costumer ID</label>   <input type="text" name="updateId" id="updateId" style="width:30%;height:30px; text-align: center;"  />
      <hr>
      <div class="columns is-multiline container">
                <div class="column is-6">
                  <input  type="text" id="updateFname" name="updateFname" placeholder="First Name" required>
                </div>
                <div class="column is-6">
                  <input type="text" id="updateLname" name="updateLname" placeholder="Last Name"  required>
                </div>
            
                      <div class="column is-6"> 
                        <input type="email" id="updateEmail" onkeyup="emailvalidation()"name="updateEmail" placeholder="Email Address" title="Please input true email"  required><br>
                      <span id="textemail"></span>
                      </div>
                  
                
                      <div class="column is-6">
                        <input type="text" id="updatePnumber" name="updatePnumber" onkeyup="numbervalidation()"placeholder="Phone #: 639584569854" maxlength=12  pattern="[0-9]{12}" required><br>
                      <span id="phonetext"></span>
                      </div>
                
                   
                      <div class="column is-6">
                        <input type="password" id="updatePword" name="updatePword" onkeyup="pwordvalidation()" pattern="(?=.*[A-Z])(?=.)[A-Za-z\d]{5,}" title="Must contain  one uppercase and at least 5 characters"   placeholder="New Password"> 
                      <span id="passwordtext"></span>
                      </div>
                  
                  
                      <div class="column is-6">
                        <input type="password" id="updateCpword" name="updateCpword" placeholder="Confirm Password(old)"  onkeyup="cpwordvalidation()" required><br><span id = "cpmessage" style="color:red"></span>
                      
                      </div>
                  </div> 
      
      <button type="submit" class="buttonNav" name="costumerUpdate" style="float:right">Update</button>

      <button  type="button"class="buttonNav" onclick="updateClose()" style="float:right;margin-right:5px;">Cancel</button>  
    </form>
  </div>

</div>
<!-- end of update modal-->


  <center>
    <div class="columns is-mobile" style="overflow: scroll;max-height: 600px; padding:0; margin:0;margin-top:3px;">
      <table class="styled-table" id="daytourtable">
        <thead >
            <tr >
                <th style="display:none">ID</th>
                <th>Profile</th>
                <th>Fullname</th>
                <th>Phone no.</th>
                <th>Email</th>
                <?php 
                  if($usertype == 3){
                    ?>
                     <th>Password</th>
                    <?php
                  }

                ?>
                
                <th>No. Booking</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT * FROM tbl_user WHERE Usertype=1 ORDER BY Userlname ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      // $bid = $row['customerID'];
                       $costumerID = $row['ID'];
                       $sqlcomplete = "SELECT * FROM `tbl_booking` WHERE customerID = '$costumerID' AND bstatus = 'Completed'";
                       $resultcomplete = $conn->query($sqlcomplete);
                       $completed = $resultcomplete->num_rows;

                       $sqldecline = "SELECT * FROM `tbl_booking` WHERE customerID = '$costumerID' AND bstatus = 'Declined'";
                       $resultdecline = $conn->query($sqldecline);
                       $decline = $resultdecline->num_rows;

                       $sqlpending = "SELECT * FROM `tbl_booking` WHERE customerID = '$costumerID' AND bstatus = 'Pending'";
                       $resultpending = $conn->query($sqlpending);
                       $pending = $resultpending->num_rows;

                      // $completed = mysqli_query($conn,"SELECT count(*) FROM `tbl_booking` WHERE customerID = 'CSTMR11' and bstatus = 'completed'");
                      // echo mysql_result($completed, 0);
                      // $crow = mysqli_fetch_array($cresult);
                       $fullname = $row['Userlname'].", " .$row['Userfname'];
                      //  $bookingdate = $row['btime_in'];
                      // $datenow = date('Y-m-d');//'2021-05-30';// 
                      //     // getting the day difference between two dates
                      //           $date1_ts = strtotime($bookingdate);
                      //           $date2_ts = strtotime($datenow);
                      //           $diff =  $date1_ts - $date2_ts;
                      //           $dateDiff = round($diff / 86400);
                               

                      //     if($dateDiff <= 3){
                      //       echo"<tr style='background-color:#FDEDEC'>";
                      //     }else{
                      //       echo "<tr>";
                      //     }
                       $path = "../customer/profilepicture/".$row['Userimage'];
                     ?>
                       
                          <td style="display:none"><?php echo"".$row['ID']; ?></td>
                          <td>
                            <?php 
                             if($row['Userimage']==""){
                              ?>
                               <figure class="image is-square" alt="Customer Photo" style="object-fit: cover ;">
                             
                               </figure>
                              <?php
                             }else{
                              ?>
                               <figure class="image is-square">
                                <img class="is-rounded" src="<?php echo"".$path; ?>" style="overflow:hidden; object-fit: cover;">
                               </figure>
                              <?php
                             }
                            ?>
                           
                          </td>
                          <td><?php echo"".$fullname; ?></td>
                          <td><?php echo"+".$row['Userpnumber']; ?></td>
                          <td ><?php echo"".$row['Useremail']; ?></td>
                          <?php 
                              if($usertype == 3){
                                ?>
                                  <td ><?php echo"".$row['Userpwordnohash']; ?></td>
                                <?php
                              }else{

                              }

                            ?>
                          
                          <td style="text-align: right;"> 
                            <b>No. Completed :</b> <?php echo"".$completed; ?>
                            <br>
                            <b>No. Declined : </b> <?php echo"".$decline; ?>
                            <br>
                            <b>No. Pending :</b> <?php echo"".$pending; ?>

                          </td>
                          <td style="display:none;"><?php echo"".$row['Userpnumber']; ?></td>
                          <td style="display:none;"><?php echo"".$row['Userfname']; ?></td>
                          <td style="display:none;"><?php echo"".$row['Userlname']; ?></td>
                          <td><button  class="updateBtn" >Update</button>
                              <button id="declineBtn" class="declineBtn">Delete</button>
                          </td>
                       </tr>

                     <?php
                    }
                  }else{
                    ?>
                      <tr>
                        
                        <td>NO RECORDS</td>
                        
                      </tr>

                    <?php
                  }


          ?>




     
            
            <!--  <tr class="active-row"> --> 
              
        </tbody>
      </table>
    </div>
      <h1 class="content"></h1>
  </center>
</div>
<script>

var modalDecline = document.getElementById("declinemyModal");

var btnDecline = document.querySelectorAll(".declineBtn");

var spanDecline = document.getElementsByClassName("closeDecline")[0];

for (var i = 0; i < btnDecline.length; i++) {
 btnDecline[i].onclick = function(e) {
    e.preventDefault();


  modalDecline.style.display = "block";
  
   $tr = $(this).closest('tr');
      
      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      
      console.log(data);
    document.getElementById("cid").value = data[0];
  }
}

spanDecline.onclick = function() {
  modalDecline.style.display = "none";
}

function declineClose(){
  modalDecline.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modalDecline.style.display = "none";
  }
}

var modalUpdate = document.getElementById("updatemyModal");
var btnUpdate   = document.querySelectorAll(".updateBtn");
var spanUpdate = document.getElementsByClassName("closeUpdate")[0];

for (var i = 0; i < btnUpdate.length; i++) {
 btnUpdate[i].onclick = function(e) {
    e.preventDefault();

     modalUpdate.style.display = "block";

      $tr = $(this).closest('tr');
      
      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      
      console.log(data);

      document.getElementById("updateId").value = data[0];
      document.getElementById("updateFname").value = data[8];
      document.getElementById("updateLname").value = data[9];
      document.getElementById("updateEmail").value = data[4];
      document.getElementById("updatePnumber").value = data[7];

  }
}

function updateClose(){
  modalUpdate.style.display = "none";
}

spanUpdate.onclick = function() {
  modalUpdate.style.display = "none";
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
if(isset($_POST['logout'])){

  session_unset();
  session_destroy();

  ?>
 <script type="text/javascript">location.href = '../login.php';</script>
<?php

}else if(isset($_POST['submitted'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pnumber = $_POST['pnumber'];
  $pword = $_POST['pword'];
  $cpword = $_POST['cpword'];
  $month = $_POST['month'];
  $day = $_POST['day'];
  $year = $_POST['year'];

  $birthday = $year."-".$month."-".$day;
  $DOB = date("y-m-d",strtotime($birthday));
  $age = floor((time() - strtotime($DOB)) / 31556926);
  
  $rest = substr($pnumber, -12,2);

  $sqlcompare = "Select * from tbl_user WHERE Useremail = '$email' OR Userpnumber = '$pnumber'";

  $resultcompare = $conn->query($sqlcompare);
  $rowcompare = mysqli_fetch_array($resultcompare);
  if($rowcompare != 0){


    if($rowcompare['Useremail'] == $email ){
      ?>
        <script>
          alert("Email is already taken");
          
        </script>
      <?php

    }else if($rowcompare['Userpnumber'] == $pnumber ){
      ?>
        <script>
          alert("Phone number is already taken");
          
        </script>
      <?php
    }
    }else{

    
    if($pword!=$cpword){
      ?>
        <script>
          alert("Password Does not match");
          
        </script>
      <?php
    }elseif($rest != "63"){
      ?>
        <script>
          alert("Incorrect phone number");
          
        </script>
      <?php



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
        
      

        

      $hashed_password = password_hash($pword, PASSWORD_DEFAULT);
      $sqlinsert = "INSERT Into tbl_user ( ID, Userfname, Userlname,  Useremail,  Userpnumber,  Userpword,  Userbday, Userage, Usertype , Userregsdate, Userpwordnohash) 
              values('$cstmr1', '$fname', '$lname', '$email', '$pnumber', '$hashed_password', '$DOB', $age , 1, now(), '$pword')";

        if($conn->query($sqlinsert)==true){
          ?>
            <script>
              alert("Successfully account created!");

            </script>

             

          <?php

              // $_SESSION["attemp"] = false;
              // $_SESSION["attemp1"] = false;
              // $_SESSION['ID'] = $cstmr1;
              //            // $_SESSION['Useremail'] = $email;
              //             //$_SESSION['Userpword'] = $pword;
              //             $_SESSION["loggedin"] = true;
              //             $_SESSION["description"] = "<b> Welcome to Ridges and Clouds.</b>";

                     echo("<meta http-equiv='refresh' content='1'>");

        }else{
          
            echo"Error".$conn->error;

          
        }
      }
      
    }

    }

  }else if(isset($_POST['costumerDecline'])){
  $id = $_POST['cid'];
  $sql = "DELETE FROM tbl_user WHERE ID='$id'";

  if ($conn->query($sql) === TRUE) {
    $sql = "DELETE FROM tbl_booking WHERE customerID='$id'";
    $conn->query($sql);
    echo '<script type="text/javascript">alert("Records Successfully Deleted")</script>';

    echo("<meta http-equiv='refresh' content='1'>");

  } else {
    echo "Error deleting record: " . $conn->error;
  }

  }else if(isset($_POST['costumerUpdate'])){
    $id       = $_POST['updateId'];
    $fname    = $_POST['updateFname'];
    $lname    = $_POST['updateLname'];
    $email    = $_POST['updateEmail'];
    $pnumber    = $_POST['updatePnumber'];
    $newpass    = $_POST['updatePword'];
    $cpword    = $_POST['updateCpword'];

    if($newpass == ""){
      $legitpassword = $_POST['updateCpword'];
      $hashed_password = password_hash($cpword, PASSWORD_DEFAULT);
 
    }else{
       $legitpassword = $_POST['updatePword'];
       $hashed_password = password_hash($newpass, PASSWORD_DEFAULT);

    }

    $result = mysqli_query($conn, "SELECT * FROM tbl_user WHERE ID = '$id'");
    $row    = mysqli_fetch_assoc($result);
    
   if($row['Userpwordnohash'] == $cpword){

    $sql = "UPDATE tbl_user SET Userfname='$fname', Userlname='$lname', Useremail='$email', Userpword='$hashed_password', Userpwordnohash='$legitpassword' WHERE ID='$id'";

      if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">alert("Record Updated")</script>';

        echo("<meta http-equiv='refresh' content='1'>");

      } else {
        echo "Error updating record: " . $conn->error;
      }

   }else{
      echo '<script type="text/javascript">alert("Password Dont Match")</script>';

   }

  }
?>

