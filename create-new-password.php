<?php
	include "dbconnection/conn.php";
?>

<html lang="en">
<head>
		<title> Password Reset </title>
	
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
    <li><a href="login.php" style="color:black;"> Log in</a></li>
  </ul>
  <label for="nav-toggle" class="icon-burger">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </label>
</nav>
<!-- End of Navbar -->
<!-- ==========================================================================================================================================LOGIN -->

<!-- 
 -->
<?php
	$selector = $_GET["selector"];
	$validator = $_GET["validator"];
	if(empty($selector) || empty($validator)){
		//echo "Could not validate your request!";

	} else {
		if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false ){
?>
<form action="create-new-password.php" METHOD=POST  >	
<input type="hidden" name="selector" value="<?php echo $selector?>";>
	<input type="hidden" name="validator" value="<?php echo $validator?>";>
	
	<div class="background-login">
	<div class="container is-desktop loginform">
	 <h1 style="padding:5px">Recover Password </h1>

    <div class="columns is-desktop is-multiline is-gapless">
    	<div class="column is-full">

    	</div>
			<div class="column is-full">
			<input type="password" placeholder="Enter a new password" name="pwd" id="myInput" required>
			<input type="checkbox"onclick="myFunction()"/>
			</div>

			<div class="column is-full">
			<input type="password"   placeholder="Repeat new password" id="myInput1" name=pwdrepeat required>
			<input type="checkbox"onclick="myFunction1()"/>
			</div>
						<script>
											function myFunction() {
											var x = document.getElementById("myInput");
											if (x.type === "password") {
												x.type = "text";
											} else {
												x.type = "password";
													}
											}
											function myFunction1() {
											var x = document.getElementById("myInput1");
											if (x.type === "password") {
												x.type = "text";
											} else {
												x.type = "password";
													}
											}
						</script>

			<div class="column is-full">
				<input type=submit class="no-button" value="Reset" name="reset-password-submit">
			</div>
		</div>
	</div>

			<!-- LOOOOGINNN FOOORRRMMM-->
			</div>
		</form>

<?php
		}
	}
?>
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
</body>
</html>

<?php
if(isset($_POST['reset-password-submit'])){
	$selector = $_POST["selector"];
	$validator = $_POST["validator"];
	$password = $_POST["pwd"];
	$passwordRepeat = $_POST["pwdrepeat"];

	if($password != $passwordRepeat){
?>
    	<script>
 						alert("Password don't match");
 			</script>
<?php
	echo '<script>location.href = "create-new-password.php?selector='.$selector.'&validator='.$validator.'";</script>';
		//header('location: create-new-password.php?selector='.$selector.'&validator='.$validator.'');
		exit();
		}
	$currentDate = date("U");


	$sql = "SELECT * FROM pwdreset WHERE pwdResetSelector='$selector' AND pwdResetExpires >= '$currentDate'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		    while($row = $result->fetch_assoc()) {				
        $tokenBin = hex2bin($validator);
				$tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);
				$tokenEmail =$row['pwdResetEmail'];
					

				if ($tokenCheck === false ){
				echo "Your token expires";
				exit();
			} elseif ($tokenCheck === true) {
				
				$sql1 ="SELECT * FROM tbl_user WHERE Useremail='$tokenEmail'";
				$result1 = $conn->query($sql1);
			
				
				if($result1->num_rows > 0 ){
	
					$newPwdHash = password_hash($password, PASSWORD_DEFAULT);
					$sql2 = "UPDATE tbl_user SET Userpword ='$newPwdHash' WHERE Useremail ='$tokenEmail'";
					$conn->query($sql2);

					$sql3 ="DELETE FROM pwdreset WHERE pwdResetEmail='$tokenEmail'";
					$conn->query($sql3);
											?>
        <script type="text/javascript">
          Swal.fire({

                  icon: 'success', 
                  text: 'Password Successfully Updated',
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

				} else {
						echo '<script type="text/javascript">alert("Invalid Email")</script>';

				}

			}
    }


	}else {
		echo '<script type="text/javascript">alert("Token Expired")</script>';
	}

	

}
else{
	
}
?>