<!doctype html>
<?php
include "dbconnection/conn.php";


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
<?php 
error_reporting(0);
     // Initialize the session
	 
	 session_start();
	

     //Check if the user is logged in, if not then redirect him to login page
     if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
         // When Not Login Return to this Page
        	$username12 = "";
            $password12 = "";
            $description ="";
            $wrongpassword = "";
            $wrongemail =  ""; 
        

// $_SESSION["signupActive"] = true;
	



        if($_SESSION['attemp1'] == true){
        	$wrongpassword = $_SESSION["WrongPass"];
        	$wrongemail =  "";
        }
        if($_SESSION['attemp'] == true){
        	$wrongemail =  $_SESSION["WrongEmail"];
        	$wrongpassword =  "";
        }


     }else if(isset($_SESSION['ID'])){
            $cID = $_SESSION['ID'];
            $description = $_SESSION['description'];
            $_SESSION['dateactive'] = false;
            $_SESSION['addactive']=false;
          
            include "dbconnection/conn.php";
            
            $getrecord = mysqli_query($conn,"SELECT * FROM tbl_user WHERE ID  ='$cID'");
            while($rowedit = mysqli_fetch_assoc($getrecord))
            {
                $customerID = $rowedit['ID'];
                $username12 = $rowedit['Useremail'];
                $password12 = $rowedit['Userpwordnohash'];


            }

            if (isset($_SESSION)) {

		     session_destroy();

		     header("location: login.php");

			}

			if(!isset($_SESSION["signupActive"]) || $_SESSION["signupActive"] !== true){
       		
       		
         	$_SESSION['fname'] 		="";
					$_SESSION['lname'] 		="";
					$_SESSION['email'] 		="";
					$_SESSION['pnumber'] 	="";
					$_SESSION['pword'] 		="";
					$_SESSION['cpword'] 	="";
					$_SESSION['month'] 		="";
					$_SESSION['day'] 			="";
					$_SESSION['year'] 		= "";

        }
     }
    



?>




<html lang="en">
<head>
		<title> login | Ridges and Clouds </title>
	
	 <!-- Required meta tags -->
	<meta charset="utf-8">
	<!-- responsive viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
     
    
	<!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<!-- -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style/login.css">
	<!-- Icon -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

  	<!-- AOS animation -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<!-- Title-->
	<link rel="shortcut icon" type="image/x-icon" href="style/mini.png">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<!-- Navbar    -->

<nav>
  <input id="nav-toggle" type="checkbox">
  <div class="logo"><img src="style/images/ridges_banner.png" style="width:100%; height:100%; object-fit: contain;"></img></div>
  <ul class="links">
    <li ><a  href="index.php" >Home</a></li>
    <li><a href="pricing.php">Pricing</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="About_Us.php">About Us</a></li>
    <li><a href="login.php" style="color:black;">Book Now</a></li>
  </ul>
  <label for="nav-toggle" class="icon-burger">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </label>
</nav>
<script type="text/javascript">
	var anchor12 = document.querySelectorAll("a");
		for (var i = 0; i < anchor12.length; i++) {
		anchor12[i].onclick = function(e) {
			
		fetch('linkResponse.php');
		}
	}
</script>
<!-- End of Navbar -->
<!-- ==========================================================================================================================================LOGIN -->
<form action="login.php" METHOD=POST  >	
	<div class="background-login">
	<div class="container is-desktop loginform">
	 <h1>Login </h1>

    <div class="columns is-desktop is-multiline is-gapless">
			<div class="column is-full">
			<i class="fas fa-user-circle fa-lg" style="width: 10%;" ></i><input type="email" id="email" name="loginname" placeholder="Email" name=username1 value="<?php echo"".$username12; ?>" required >
			</div>
			<div class="column is-full">
				<i class="fas fa-lock fa-lg" style="width: 10%;"></i><input type="password"  name="loginpassword" autocomplete="new-password" placeholder="Password" id="myInput" name=password1 value="<?php echo"".$password12; ?>" required>
			</div>
			<div class="column is-full showpass">
				<p>Show password <input type="checkbox"onclick="myFunction()"/>
							
										<script>
											function myFunction() {
											var x = document.getElementById("myInput");
											if (x.type === "password") {
												x.type = "text";
											} else {
												x.type = "password";
													}
											}
										</script>
										</p>
			</div>
			<div class="column is-full error-log" >
				<p style="color:red;  " id="errormessage">  </p>
				<p > <?php echo"".$description; ?> </p> 
						<p > <?php 
									if($wrongpassword !=""){
										echo"".$wrongpassword; 
										echo "<a href='reset-password.php'> Reset password 
							</a>";
									}
								 
									?> </p> 
						  <p > <?php echo"".$wrongemail; ?> </p> 
						  <p style="color:black;"> Don't have Account yet? <a id="myBtn" class="signup"   href="#"> Sign up here.</a></p>
			</div>
			<div class= "column is-full error-log">
			    <div class="g-recaptcha" data-sitekey="6LfakvEdAAAAAAkJDwRQkzoCT8WMh-W2OpMAhsM3" required > </div> 
			    
			</div>
			<div class="column is-full">
				<input type=submit class="no-button" id="login" value="Log In" name="loginsubmit" >
			</div>
		</div>
	</div>

			<!-- LOOOOGINNN FOOORRRMMM-->
			</div>
			</form>

</div>




	
<!--  END OF LOGIN--->
<!-- ====================================================================================================================================SIGN UP -->
<!-- Password Confirmation-->
<script>
var name = "";
var lname = "";
var email = "";
var pnumber ="";
var pword ="";
var cpword ="";
var month = "";
var day = "";
var year = "";


	function signupclose(){
		document.getElementById("myModal").style.display="none";
	

		name = document.getElementById("name").value;
		document.getElementById("name").innerHTML = name;
		lname = document.getElementById("lname").value;
		document.getElementById("lname").innerHTML = lname;
		email = document.getElementById("email").value;
		document.getElementById("lname").innerHTML = email;
		pnumber = document.getElementById("pnumber").value;
		document.getElementById("lname").innerHTML = pnumber;
		pword = document.getElementById("pword").value;
		document.getElementById("lname").innerHTML = pword;
		cpword = document.getElementById("cpword").value;
		document.getElementById("lname").innerHTML = cpword;
		month = document.getElementById("month").value;
		document.getElementById("lname").innerHTML = month;
		day = document.getElementById("day").value;
		document.getElementById("lname").innerHTML = day;
		year = document.getElementById("year").value;
		document.getElementById("lname").innerHTML = year;

	}

</script>

<!-- Modal -->
<div class="modal fade-in" id="myModal" tabindex="-1" >
	  <div class="modal-dialog">
		<div class="modal-content" >
		  <h5 class="label"> Customer Info <span class="close">&times;</span></h5>
			
			<hr>
		  
		  <!-- Modal Body-->
		    <form action="login.php" id="signupform" method=POST >
			  <div class="modal-body">
				
					<div class="container is-mobile"> 
						
							
							<div class="columns is-multiline">
								<div class="column is-6">
									<input  type="text" id="name" name="fname" placeholder="First Name" required value="<?php echo''.$_SESSION['fname']; ?>">
								</div>
								<div class="column is-6">
									<input type="text" id="lname" name="lname" placeholder="Last Name"  required value="<?php echo''.$_SESSION['lname']; ?>">
								</div>
						
											<div class="column is-6"> 
												<input type="email" id="email1" onkeyup="emailvalidation()"name="email" placeholder="Email Address" title="Please input true email"  required value="<?php echo''.$_SESSION['email']; ?>"> <br>
											<span id="textemail"></span>
											</div>
									
								
											<div class="column is-6">
												<input type="text" id="pnumber" name="pnumber" onkeyup="numbervalidation()"placeholder="Phone #: 639584569854" maxlength=12  pattern="[0-9]{12}" required value="<?php echo''.$_SESSION['pnumber']; ?>"><br>
											<span id="phonetext"></span>
											</div>
								
									 
											<div class="column is-6">
												<input type="password" id="pword" name="pword" onkeyup="pwordvalidation()" pattern="(?=.*[A-Z])(?=.)[A-Za-z\d]{5,}" title="Must contain  one uppercase and at least 5 characters" required  placeholder="Password" value="<?php echo''.$_SESSION['pword']; ?>"> 
											<span id="passwordtext"></span>
											</div>
									
									
											<div class="column is-6">
												<input type="password" id="cpword" name="cpword" placeholder="Confirm Password"  onkeyup="cpwordvalidation()" required><br><span id = "cpmessage" style="color:red" value="<?php echo''.$_SESSION['cpword']; ?>"></span>
											
											</div>
									</div>	
									
									
								
							<div class="list">
								<div class="columns is-multiline">
									<div class="column is-full">
										<p class="Bdate"><b>Birth Date</b></p>
									</div>
									<div class="column is-4">
										
										<select  id="month" name="month" required style="width: 100%;"  >
											<option value="">Month</option>
											<option value="01" <?php if($_SESSION['month']==01) echo "SELECTED"; ?>>January</option>
											<option value="02" <?php if($_SESSION['month']==02) echo "SELECTED"; ?>>February</option>
											<option value="03" <?php if($_SESSION['month']==03) echo "SELECTED"; ?>>March</option>
											<option value="04" <?php if($_SESSION['month']==04) echo "SELECTED"; ?>>April</option>
											<option value="05" <?php if($_SESSION['month']==05) echo "SELECTED"; ?>>May</option>
											<option value="06" <?php if($_SESSION['month']==06) echo "SELECTED"; ?>>June</option>
											<option value="07" <?php if($_SESSION['month']==07) echo "SELECTED"; ?>>July</option>
											<option value="08" <?php if($_SESSION['month']=='08') echo "SELECTED"; ?>>August</option>
											<option value="09" <?php if($_SESSION['month']=='09') echo "SELECTED"; ?>>September</option>
											<option value="10" <?php if($_SESSION['month']==10) echo "SELECTED"; ?>>October</option>
											<option value="11" <?php if($_SESSION['month']==11) echo "SELECTED"; ?>>November</option>
											<option value="12" <?php if($_SESSION['month']==12) echo "SELECTED"; ?>>Dec</option>
										</select>
									</div>
									<div class="column is-4">
										<select  name="day" id="day" required style="width: 100%;">
											<option value="">Day</option>
											<option value="01" <?php if($_SESSION['day']==01) echo "SELECTED"; ?>>1</option>
											<option value="02" <?php if($_SESSION['day']==02) echo "SELECTED"; ?>>2</option>
											<option value="03" <?php if($_SESSION['day']==03) echo "SELECTED"; ?>>3</option>
											<option value="04" <?php if($_SESSION['day']==04) echo "SELECTED"; ?>>4</option>
											<option value="05" <?php if($_SESSION['day']==05) echo "SELECTED"; ?>>5</option>
											<option value="06" <?php if($_SESSION['day']==06) echo "SELECTED"; ?>>6</option>
											<option value="07" <?php if($_SESSION['day']==07) echo "SELECTED"; ?>>7</option>
											<option value="08" <?php if($_SESSION['day']=='08') echo "SELECTED"; ?>>8</option>
											<option value="09" <?php if($_SESSION['day']=='09') echo "SELECTED"; ?>>8</option>
											<option value="10" <?php if($_SESSION['day']==10) echo "SELECTED"; ?>>9</option>
											<option value="11" <?php if($_SESSION['day']==11) echo "SELECTED"; ?>>10</option>
											<option value="12" <?php if($_SESSION['day']==12) echo "SELECTED"; ?>>12</option>
											<option value="13" <?php if($_SESSION['day']==13) echo "SELECTED"; ?>>13</option>
											<option value="14" <?php if($_SESSION['day']==14) echo "SELECTED"; ?>>14</option>
											<option value="15" <?php if($_SESSION['day']==15) echo "SELECTED"; ?>>15</option>
											<option value="16" <?php if($_SESSION['day']==16) echo "SELECTED"; ?>>16</option>
											<option value="17" <?php if($_SESSION['day']==17) echo "SELECTED"; ?>>17</option>
											<option value="18" <?php if($_SESSION['day']==18) echo "SELECTED"; ?>>18</option>
											<option value="19" <?php if($_SESSION['day']==19) echo "SELECTED"; ?>>19</option>
											<option value="20" <?php if($_SESSION['day']==20) echo "SELECTED"; ?>>20</option>
											<option value="21" <?php if($_SESSION['day']==21) echo "SELECTED"; ?>>21</option>
											<option value="22" <?php if($_SESSION['day']==22) echo "SELECTED"; ?>>22</option>
											<option value="23" <?php if($_SESSION['day']==23) echo "SELECTED"; ?>>23</option>
											<option value="24" <?php if($_SESSION['day']==24) echo "SELECTED"; ?>>24</option>
											<option value="25" <?php if($_SESSION['day']==25) echo "SELECTED"; ?>>25</option>
											<option value="26" <?php if($_SESSION['day']==26) echo "SELECTED"; ?>>26</option>
											<option value="27" <?php if($_SESSION['day']==27) echo "SELECTED"; ?>>27</option>
											<option value="28" <?php if($_SESSION['day']==28) echo "SELECTED"; ?>>28</option>
											 <option value="29" <?php if($_SESSION['day']==29) echo "SELECTED"; ?>>29</option>
											 <option value="30" <?php if($_SESSION['day']==30) echo "SELECTED"; ?>>30</option>
											 <option value="31" <?php if($_SESSION['day']==31) echo "SELECTED"; ?>>31</option>
										</select>
									</div>
									<div class="column is-4">

										<select  name="year" id="year" required style="width: 100%;">
											<option value="">Year</option>                                         
											<option value="1981" <?php if($_SESSION['year']==1981) echo "SELECTED"; ?>>1981</option>
											<option value="1982" <?php if($_SESSION['year']==1982) echo "SELECTED"; ?>>1982</option>
											<option value="1983" <?php if($_SESSION['year']==1983) echo "SELECTED"; ?>>1983</option>
											<option value="1984" <?php if($_SESSION['year']==1984) echo "SELECTED"; ?>>1984</option>
											<option value="1985" <?php if($_SESSION['year']==1985) echo "SELECTED"; ?>>1985</option>
											<option value="1986" <?php if($_SESSION['year']==1986) echo "SELECTED"; ?>>1986</option>
											<option value="1987" <?php if($_SESSION['year']==1987) echo "SELECTED"; ?>>1987</option>
											<option value="1988" <?php if($_SESSION['year']==1988) echo "SELECTED"; ?>>1988</option>
											<option value="1989" <?php if($_SESSION['year']==1989) echo "SELECTED"; ?>>1989</option>
											<option value="1990" <?php if($_SESSION['year']==1990) echo "SELECTED"; ?>>1990</option>
											<option value="1991" <?php if($_SESSION['year']==1991) echo "SELECTED"; ?>>1991</option>
											<option value="1992" <?php if($_SESSION['year']==1992) echo "SELECTED"; ?>>1992</option>
											<option value="1993" <?php if($_SESSION['year']==1993) echo "SELECTED"; ?>>1993</option>
											<option value="1994" <?php if($_SESSION['year']==1994) echo "SELECTED"; ?>>1994</option>
											<option value="1995" <?php if($_SESSION['year']==1995) echo "SELECTED"; ?>>1995</option>
											<option value="1996" <?php if($_SESSION['year']==1996) echo "SELECTED"; ?>>1996</option>
											<option value="1997" <?php if($_SESSION['year']==1997) echo "SELECTED"; ?>>1997</option>
											<option value="1998" <?php if($_SESSION['year']==1998) echo "SELECTED"; ?>>1998</option>
											<option value="1999" <?php if($_SESSION['year']==1999) echo "SELECTED"; ?>>1999</option>
											<option value="2000" <?php if($_SESSION['year']==2000) echo "SELECTED"; ?>>2000</option>
											<option value="2001" <?php if($_SESSION['year']==2001) echo "SELECTED"; ?>>2001</option>
											<option value="2002" <?php if($_SESSION['year']==2002) echo "SELECTED"; ?>>2002</option>
											<option value="2003" <?php if($_SESSION['year']==2003) echo "SELECTED"; ?>>2003</option>
											<option value="2004" <?php if($_SESSION['year']==2004) echo "SELECTED"; ?>>2004</option>
											<option value="2005" <?php if($_SESSION['year']==2005) echo "SELECTED"; ?>>2005</option>
											<option value="2006" <?php if($_SESSION['year']==2006) echo "SELECTED"; ?>>2006</option>
											<option value="2007" <?php if($_SESSION['year']==2007) echo "SELECTED"; ?>>2007</option>
											<option value="2008" <?php if($_SESSION['year']==2008) echo "SELECTED"; ?>>2008</option>
											<option value="2009" <?php if($_SESSION['year']==2009) echo "SELECTED"; ?>>2009</option>
											<option value="2010" <?php if($_SESSION['year']==2010) echo "SELECTED"; ?>>2010</option>
											<option value="2011" <?php if($_SESSION['year']==2011) echo "SELECTED"; ?>>2011</option>
											<option value="2012" <?php if($_SESSION['year']==2012) echo "SELECTED"; ?>>2012</option>
											<option value="2013" <?php if($_SESSION['year']==2013) echo "SELECTED"; ?>>2013</option>
											<option value="2014" <?php if($_SESSION['year']==2014) echo "SELECTED"; ?>>2014</option>
											<option value="2015" <?php if($_SESSION['year']==2015) echo "SELECTED"; ?>>2015</option>
											<option value="2016" <?php if($_SESSION['year']==2016) echo "SELECTED"; ?>>2016</option>
											<option value="2018" <?php if($_SESSION['year']==2018) echo "SELECTED"; ?>>2018</option>
																				   
										</select>
									</div>
								</div>
							</div>
					   
									
				
								<br><p class="wrd1">By clicking <mark color=blue> Sign up </mark>, Your data will save into our system and will be protected by our website admin.</p>

					  
						

					 </div> 
				</div>
			
			  <div class="modal-footer">
					<!-- <button type="button" class="button-modal" id="close" onclick="signupclose()">Close</button> -->
					<input type="submit" name="submitted" id="sign" class="button-modal" value="Sign-up"> </input>
			  </div>
			</form>
		</div>
	  </div>
	</div>
<!-- ########################################################################################################### calendar to if ever idisplay natin or not
	<div class="container-fluid" style="position:absolute; z-index: 9;
        justify-content:  center;
        background-color: ;
        width:100%">
        <center>
      <h2 style="margin-top:300px; color:red;"> LOGIN FIRST TO SEE AVAILABLE DATES </h2>
  </center>
   </div>
 <div class="container">	
<?php
	//include'homecalendar/index.php';
?>
</div> -->
<!--  END OF SIGN UP--->

<!-- The Modal -->
<div id="myModal1" class="modal1 fade-in" style="display:none;">

  <!-- Modal content -->
  <div class="modal-content1">
    <h1>STEPS IN BOOKING: <span class="close" id="close1">&times;</span></h1>
    <hr>
    <p><b>STEP 1: </b> Create an Account</p>
    <p><b>STEP 2: </b> Login the Account</p>
    <p><b>STEP 3: </b>  Choose Date</p>
    <p><b>STEP 4: </b> Submit the Booking Request</p>
    <p><b>STEP 5: </b> Pay 50% of Booking Cost Through GCASH with BOOKING ID</p>
    <p><b>STEP 6: </b> Wait for the SMS Confirmation of Booking</p>
    <p><b>STEP 7: </b> After Receving a text, Print the Booking Receipt Under Account Profile and present it to the camp</p>
  </div>

</div>
<?php
  include  'customer/scrollup.php';

?>
<!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 

<script>
  AOS.init();
</script>

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
			text.innerHTML = "Your Email Address is valid.";
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
			text.innerHTML= "Please Enter 6309.. format";
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

<!--0 MODAl --> 
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  fetch('linkResponse.php');
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}





</script>

<!-- MODAL end -->



<!-- FOOTER -->
<div class="container is-fluid" style="background-color: #292b2c">
  <div class="container">
    <div class="columns is-desktop">
        <div class="column is-3 footer-padding">
          <ul class="footer-style">
            <li class="text-footer">IMPORTANT</li>
            <li class="text-footer-sub">Prior Booking is <b>REQUIRED</b></li>
          </ul>
        </div>
         <div class="column is-3 footer-padding">
          <ul class="footer-style">
            <li class="text-footer">FOLLOW US</li>
            <li class="text-footer-sub"><a href="#"><i class="fab fa-facebook fa-2x"></i></a> <a href="#"><i class="fab fa-twitter fa-2x"></i></a> <a href="#"><i class="fab fa-instagram fa-2x"></i></a> </li>
            <li class="text-footer-sub"></li>
            <li class="text-footer-sub"></li>
          </ul>
        </div>
        <div class="column is-3 footer-padding">
          <ul class="footer-style">
            <li class="text-footer">VISIT</li>
            <li class="text-footer-sub"><b>ADDRESS: </b>Sitio Naysawa, Brgy Cuyambay Tanay, Rizal</li>
            <li class="text-footer-sub"><b>VIA COMMUTE: </b>Cogeo Gate2-Sampaloc Jeep (V/V) along Marilaque Highway. Alight at Magsawa Then Tricycle to Ridges</li>
          </ul>
        </div>
         <div class="column is-3 footer-padding">
          <ul class="footer-style">
            <li class="text-footer">CONTACT US </i></li>
            <li class="text-footer-sub"><b>(GLOBE): </b>0917322445599<br>/09550438152</li>
            <li class="text-footer-sub"><b>(SMART): </b>09214772797</li>
          </ul>
        </div>
    </div>
  </div>
</div>
<!-- END OF FOOTER -->
<script type="text/javascript">
	var anchor12 = document.querySelectorAll(".fab");
		for (var i = 0; i < anchor12.length; i++) {
		anchor12[i].onclick = function(e) {
			
		fetch('linkResponse.php');
		}
	}
</script>
<?php 
    require 'cookies.html';
  ?>
</body>
</html>


<?php

include "dbconnection/conn.php";

if(isset($_POST['loginsubmit']) && $_POST['g-recaptcha-response'] != ""){
      

	$user = $_POST['loginname'];
	$pass = $_POST['loginpassword'];
	$sql = "SELECT * from tbl_user Where Useremail = '$user'";
	$result = $conn->query($sql);
	$secret = '6LfakvEdAAAAAMstNS74GzsrkkcS5bhQItl_cWp8';
	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
	
    if($responseData->success){
    	if($result->num_rows>0){
    	$row = mysqli_fetch_array($result);	
    	$id =$row['ID'];
    	if($row['Usertype'] == 3 OR $row['Usertype'] == 2){
    		if(password_verify($pass, $row['Userpword'])){
    			
    			 $_SESSION['ID'] = $id;
    			 $_SESSION["loggedin"] = true;
    			 echo "<script> location.href='admin'; </script>";
            exit;
    		
    		}else{
    
    				$_SESSION["attemp1"] = true;
    				$_SESSION["attemp"] = false;
    				$_SESSION["WrongPass"] = "Incorrect Password.";
    				$_SESSION["WrongEmail"]= "";
    				
    				echo("<meta http-equiv='refresh' content='1'>");
    		}
    
    	}else if($row['Usertype'] == 1){
    
    		if(password_verify($pass, $row['Userpword'])){
    			 $_SESSION['ID'] = $id;
    			 $_SESSION['loggedin'] = true;
    			  $_SESSION['dateactive'] = false;
    			  $_SESSION['roomactive']=false;
    			  $_SESSION['categoryactive'] = false;
    
    			 echo "<script> location.href='customer/category.php'; </script>";
            exit;
    		
    		}else{
    				$_SESSION["attemp1"] = true;
    				$_SESSION["attemp"] = false;
    				$_SESSION["WrongPass"] ="Incorrect password";
    				$_SESSION["WrongEmail"]= "";
    				
    				echo("<meta http-equiv='refresh' content='1'>");
    
    				
    
    		}
    		
    
    	}
    	}else {
    		$_SESSION["attemp1"] = false;
    		$_SESSION["attemp"] = true;
    		
    		$_SESSION["WrongEmail"]= "Invalid Email Address";
    		$_SESSION["WrongPass"] = "";
    
    				echo("<meta http-equiv='refresh' content='1'>");
    	}
    }



}else if(isset($_POST['submitted'])){

	$_SESSION["signupActive"] = false;

	$fname 								= $_POST['fname'];
	$lname 								= $_POST['lname'];
	$email 								= $_POST['email'];
	$pnumber 							= $_POST['pnumber'];
	$pword 								= $_POST['pword'];
	$cpword 							= $_POST['cpword'];
	$month 								= $_POST['month'];
	$day 									= $_POST['day'];
	$year 								= $_POST['year'];
	$_SESSION['fname'] 		= $_POST['fname'];
	$_SESSION['lname'] 		= $_POST['lname'];
	$_SESSION['email'] 		= $_POST['email'];
	$_SESSION['pnumber'] 	= $_POST['pnumber'];
	$_SESSION['pword'] 		= $_POST['pword'];
	$_SESSION['cpword'] 	= $_POST['cpword'];
	$_SESSION['month'] 		= $_POST['month'];
	$_SESSION['day'] 			= $_POST['day'];
	$_SESSION['year'] 		= $_POST['year'];

	$birthday = $year."-".$month."-".$day;
	$DOB = date("y-m-d",strtotime($birthday));
	$age = floor((time() - strtotime($DOB)) / 31556926);
	
	$rest = substr($pnumber, -12,2);

	$sqlcompare = "Select * from tbl_user WHERE Useremail = '$email' OR Userpnumber = '$pnumber'";

	$resultcompare = $conn->query($sqlcompare);
	$rowcompare = mysqli_fetch_array($resultcompare);

	if($rowcompare['Useremail'] == $email){
		
		?>
			<script>
				Swal.fire({
								 
								  text: 'Email is already taken',
								  confirmButtonColor:'#3085d6',
								  confirmButtonText: 'OK'
								  
								}).then((result) => {
							  if (result.isConfirmed) {
							    location.href = 'login.php';
							  }
							})
			</script>
		<?php
		exit();
	}else if($rowcompare['Userpnumber'] == $pnumber){
		?>
			<script>

				Swal.fire({
								 
								  text: 'Phone number is already taken',
								  confirmButtonColor:'#3085d6',
								  confirmButtonText: 'OK'
								  
								}).then((result) => {
							  if (result.isConfirmed) {
							    location.href = 'login.php';
							  }
							})
				
			</script>
		<?php
		exit();
	}else{

	
	if($pword!=$cpword){
		?>
			<script>
				Swal.fire({
								 
								  text: 'Password Does not match',
								  confirmButtonColor:'#3085d6',
								  confirmButtonText: 'OK'
								  
								}).then((result) => {
							  if (result.isConfirmed) {
							    location.href = 'login.php';
							  }
							})
				
			</script>
		<?php
		exit();
	}elseif($rest != "63"){
		?>
			<script>

				Swal.fire({
								 
								  text: 'Incorrect phone number',
								  confirmButtonColor:'#3085d6',
								  confirmButtonText: 'OK'
								  
								}).then((result) => {
							  if (result.isConfirmed) {
							    location.href = 'login.php';
							  }
							})
				
				
			</script>
		<?php
		exit();
		

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
		$sqlinsert = "INSERT Into tbl_user ( ID, Userfname,	Userlname,	Useremail,	Userpnumber,	Userpword,	Userbday,	Userage, Usertype , Userregsdate, Userpwordnohash) 
 					  values('$cstmr1', '$fname', '$lname', '$email', '$pnumber', '$hashed_password', '$DOB', $age , 1, now(), '$pword')";

 			if($conn->query($sqlinsert)==true){
 				// 
 				 session_unset();
  			 session_destroy();
 				// 
 				?>
 					<script>
 							Swal.fire({

									icon: 'success', 
								  text: 'Account Created',
								  confirmButtonColor:'#3085d6',
								  confirmButtonText: 'OK'
								  
								}).then((result) => {
							  if (result.isConfirmed) {
							  	<?php 
							  		$_SESSION["attemp"] = false;
 						$_SESSION["attemp1"] = false;
 						$_SESSION['ID'] = $cstmr1;
                       // $_SESSION['Useremail'] = $email;
                        //$_SESSION['Userpword'] = $pword;
                        $_SESSION["loggedin"] = true;
                        $_SESSION["description"] = "<b> Welcome to Ridges and Clouds.</b>";

							  	?>

							  	location.href = 'login.php';
							    
							  }
							})

 					</script>

 					 

 				<?php



 			}else{
 				
 					echo"Error".$conn->error;

 				
 			}
		}
 		
	}

	}


}



?>