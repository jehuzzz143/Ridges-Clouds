<!doctype html>
<?php
	include "dbconnection/conn.php";
?>
<html lang="en">
<head>
		<title> Reset Password | Ridges and Clouds </title>
	
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
    <li><a href="login.php" style="color:black;">Login</a></li>
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




<form action="reset-password.php" METHOD=POST  >	
	<div class="background-login">
	<div class="container is-desktop loginform">
	 <h1>Password Recovery</h1>

    <div class="columns is-desktop is-multiline is-gapless">
			<div class="column is-full">
			<i class="fas fa-envelope-square fa-lg" style="width: 10%;" ></i><input type="email" name="email" placeholder="Type your e-mail here..." required > 
			</div>
					
			<div class="column is-full">
				<input type=submit class="no-button" id="login" value="Confirm" name="reset-request-submit">
			</div>
		</div>
	</div>

			<!-- LOOOOGINNN FOOORRRMMM-->
			</div>
			</form>

<!-- 	 -->






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
if(isset($_POST['reset-request-submit'])){
	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(32);

	$url = "http://localhost/Ridges&Clouds/create-new-password.php?selector=".$selector."&validator=".bin2hex($token);

	$expires = date("U") + 1800;

	$userEmail = $_POST['email'];

	$sql ="SELECT * FROM tbl_user WHERE Useremail='$userEmail'";
	$result = $conn->query($sql);
	if ( $result->num_rows == 0) {
		?>
    	<script>
 						alert("E-mail Doesn't exist");

 			</script>
 		<?php
    exit();
}

	$sql ="DELETE FROM pwdReset WHERE pwdResetEmail=?";
	$stmt =mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){

		echo '<script type="text/javascript">alert("E-mail doesn\'t" exist")</script>';
		header("Location: login.php");
		exit();
	}else{
		mysqli_stmt_bind_param($stmt,"s", $userEmail );
		mysqli_stmt_execute($stmt);
	}

	$sql = "INSERT into pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?)";

	$stmt =mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		echo "There was sql error 1";
		exit();
	}else{
		$hashedToken = password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt,"ssss", $userEmail ,$selector, $hashedToken, $expires);
		mysqli_stmt_execute($stmt);
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

	$to = $userEmail;

	$subject = 'Reset Your Password in Ridges & Clouds';

	$message = 'We recieved a password reset request. The link to reset your password is below. If you did not make this request, you can ignore this email';

	$message .= 'Here is your password reset link: ';

	$message .= '' .$url. '';

	$headers = "From: Ridges&Clouds <RidgesandClouds@gmail.com>\r\n";

	mail($to, $subject, $message, $headers);

			?>
    	<script>
 						alert("Check your e-mail");
 			</script>
 		<?php
}else{
}
?>