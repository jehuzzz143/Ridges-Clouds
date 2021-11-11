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
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


	if(isset($_POST['reset-request-submit'])){

		$selector = bin2hex(random_bytes(8));
		$token = random_bytes(32);

		$url = "https://localhost/Ridges&Clouds/create-new-password.php?selector=".$selector."&validator=".bin2hex($token);

		$expires = date("U") + 1800;

		$userEmail = $_POST['email'];
		
		$sql ="SELECT * FROM tbl_user WHERE Useremail='$userEmail'";
		$result = $conn->query($sql);
		if ($result->num_rows == 0) {
		    echo $conn->error;
			?>
	    	<script>
	 						alert("E-mail Doesn't exist");

	 			</script>
	 		<?php
	    exit();
		}
		$sql ="DELETE FROM pwdreset WHERE pwdResetEmail='$userEmail'";
		$result=mysqli_query($conn, $sql);
		if (!$result){
		    echo("Error description: " . $result -> error);
			//echo '<script type="text/javascript">alert("Unexpected error in database token")</script>';
			header("Location: login.php");
			exit();
		}else{
		   $hashedToken = password_hash($token, PASSWORD_DEFAULT);
			$sql = "INSERT into pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES ('$userEmail', '$selector','$hashedToken', '$expires')";
			$result=mysqli_query($conn, $sql);
			if ( !$result){
				echo "Error retrieving token";
				
			}else{
			$to = $userEmail;
		    //Create an instance; passing `true` enables exceptions
		    $mail = new PHPMailer(true);
		    
		    try {
		        //Server settings
		        $mail->SMTPDebug = 0;                      //Enable verbose debug output
		        $mail->isSMTP();                                            //Send using SMTP
		        $mail->Mailer = "smtp";
		        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		        $mail->Username   = 'ridgeclo2021@gmail.com';                     //SMTP username
		        $mail->Password   = 'ridgeclo';                               //SMTP password
		        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
		        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		    
		        //Recipients
		        $mail->setFrom('ridgeclo2021@gmail.com', 'Ridges & Clouds');
		       // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
		        $mail->addAddress($to);               //Name is optional
		        $mail->addReplyTo('ridgeclo2021@gmail.com');
		        //$mail->addCC('cc@example.com');
		        //$mail->addBCC('bcc@example.com');
		    
		        //Attachments
		        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
		    
		        //Content
		        $mail->isHTML(true);                                  //Set email format to HTML
		        $mail->Subject = 'Reset Password';
		        $mail->Body    = 'We recieved a password reset request. The link to reset your password is below. If you did not make this request, you can ignore this email <br> <b> Click this link to reset your password:</b>'.$url;
		        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		    
		        $mail->send();
		        	?>
		    	<script>
		 						Swal.fire({
								  title: 'Email Sent',
								  text: 'Check Email',
								  confirmButtonColor:'#3085d6',
								  confirmButtonText: 'OK'
								  
								}).then((result) => {
							  if (result.isConfirmed) {
							    location.href = 'login.php';
							  }
							})

		 						
		 			</script>
		 		<?php
		    } catch (Exception $e) {
		        echo "Mailer Error: " . $mail->ErrorInfo;
		        	?>
		    	<script>
		 						alert("Unexpected Error");
		 			</script>
		 		<?php
		    }
				
			}
		}

		

		mysqli_close($conn);

	}else{
	}
?>