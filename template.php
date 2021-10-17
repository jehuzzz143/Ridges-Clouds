	<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BS CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	   <link rel="stylesheet" href="style/template.css">
	    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Responsive Template</title>
	
	
  </head>
  <body>
	<div id="header">
		<center> <h1>Responsive Starter Template </h1>Header</center>
	</div>
	<div id="menu">
		
		</Center>
	</div>
	<div id="body"> 
		<center> Content <br><br>
			<?php 
				$string = "C1 C2 C3";
				$compare = "C4";
				
				if(str_contains($string,$compare)){
					echo "Found";
				}else{
					echo "Not Found";
				}

			 ?>




		</center>
	</div>
	<div id="footer">
		<center>Footer <pre>a
		<div id="important">
			<h5>IMPORTANT</h5>
				<pre id="textimportant">Prior Booking is 
<b>REQUIRED</b></pre>
		</div>
		<div id="important">
			<h5>EXPLORE</h5>
				<a id="textimportant1" style="text-decoration:none;" href="#">Home</a><br>
				<a id="textimportant1" style="text-decoration:none;" href="#">Pricing</a><br>
				<a id="textimportant1" style="text-decoration:none;" href="#">Gallery</a><br>
				<a id="textimportant1" style="text-decoration:none;" href="#">About</a><br>
		</div>
		<div id="important">
			<h5>FOLLOW</h5>
			
				<a id="textimportant1" style="text-decoration:none;" href="#">
					<i class="fab fa-facebook" style="font-size:25px;color:	#87CEFA;"></i> Ridges and Clouds Nature Camp </a><br>
				<a id="textimportant1" style="text-decoration:none;" href="#">
					<i class="fab fa-twitter" style="font-size:25px;color:	#87CEFA;"></i> Ridges and Clouds </a><br>
				<a id="textimportant1" style="text-decoration:none;" href="#">
					<i class="fab fa-instagram" style="font-size:25px;color:	#87CEFA;"></i>  Ridges and Clouds Photos </a><br>


			
		</div>
		<div id="important">
			<h5>VISIT</h5>
				<pre id="textimportant"><b>Address:</b> <br>Sitio Maysawa, Brgy Cuyambay
Tanay, Rizal</pre>
				<pre id="textimportant"><b>VIA COMMUTE:</b> <br>Cogeo Gate2-Sampaloc Jeep
(V/V) along Marcos/Marilaque Highway.
Alight at Magsawa Then Tricycle to Ridges</pre>
		</div>
		<div id="important">
			<h5>CONTACT US</h5>
			<pre id="textimportant"><b>(Globe)</b> <br>0917322445599/
09550438152</pre>
			<pre id="textimportant"><b>(SMART)</b> <br>09214772797</pre>
		</div>
</center>
	</div>
	<?php

	
$date = '2021-03-20';
$day=date('D', strtotime($date));


switch ($day) {
	case "Mon":
    	$day= "Monday";
    	break;
    case "Tue":
    	$day = "Tuesday";
    break;
    case "Wed":
    	$day = "Wednesday";
    break;
    case "Thu":
   		$day = "Thursday";
    break;
    case "Fri":
    	$day = "Friday";
    	break;
    case "Sat":
   		$day = "Saturday";
    	break;
     case "Sun":
   		$day = "Sunday";
    	break;
	   
  default:
 
    
}

echo"".$day;
	?>
	
	
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>