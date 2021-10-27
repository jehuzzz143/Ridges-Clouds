<?php

include "dbconnection/conn.php";

$id2 = $_GET['ID'];
$id = str_replace("APP", "", $id2);
$id = str_replace("XXX000", "", $id);


$sql = "SELECT * FROM tbl_booking WHERE ID = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $name = $row['bname'];
    $total = $row['bprice'];
    $deposit = $row['bdeposit'];
    $balance = $row['balance'];
    $status = $row['bstatus'];
    $pax = $row['bpax'];
    $cstmrID = $row['customerID'];
    $room = $row['broom'];
    $room = str_replace('||',"",$room);
    $category =$row['btype'];
    $discount_id = $row['promo_id'];
    $add_ons = $row['add_ons'];

    if($row['btype'] == 'Daytour'){
    	 $description = $row['btype'].' / '.$row['bdaytourtime'];
    }else{
    	if($row['datecategory']==''){

    		$description = $row['btype'].' / '.$room.' / No Romantic Date ';
    	}else{
    		$description = $row['btype'].' / '.$room.', '.$row['datecategory'];
    	}
    }
   
    $validity = date("M-d-Y", strtotime($row['btime_out']));
 
  }
} else {
  echo "0 results";
}

?>

<!doctype html>
<html lang="en">
<head>
<title> Print</title>
  <link rel="icon" href="style/images/woodsign_bliog.png">
	 <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--CSS -->
	<link rel="stylesheet" type="text/css" href="style/print.css">

  <!-- AOS animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- fontawSome -->
  <script src="https://kit.fontawesome.com/70127cec04.js" crossorigin="anonymous"></script>
  <!-- CodingNepal jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

 <script type="text/javascript">
window.print();
</script> 
</head>
<body>

<div class="book">
    <div class="page">
        <div class="subpage">
        	<div class="columns">
        		<div class="column">
        			<div class="logo"><img src="style/images/ridges_banner.png" style="width: 100%;  object-fit: contain;"></img></div>
        		</div>
        	</div>
        	<div class="columns">
        		<div class="column">
        			<p class="header"> APPOINTMENT INFORMATION</p>
        		</div>
        		
        	</div>
        	<div class="columns">
        		<div class="column is-two-thirds">
        			<ul>
        				<li>Account #: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo"<b>".$cstmrID."</b>"; ?></li>
        				<li>Account Name: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo"<b>".$name."</b>"; ?></li>
        				<li>Appointment #:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo"<b>".$id2."</b>"; ?></li>
        				<li>Description: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo"<b>".$description."</b>"; ?></li>
                <?php
                if($add_ons!=""){
                  ?>
                     <li>With:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo"<b>".$add_ons."</b>"; ?></li>
                  <?php
                }
                ?>
               
                <?php 
                  if($discount_id !=""){
                    $sql = "SELECT * FROM tbl_promo WHERE promo_id = $discount_id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        $promo_value = $row['promo_value'];
                        $promo_type = $row['promo_value_type'];
                      }
                    } 
                    if($promo_type != "OFF"){
                      $discounted_fee = $promo_value.' '.$promo_type;
                      $totalprice =  $total / ($promo_value / 100);
                    }else{

                      $discounted_fee = $promo_value.' '.$promo_type;
                      $totalprice = $promo_value + $total;

                    }
                        

                    ?>
                     <li>Booking Price: &nbsp; &nbsp; &nbsp;   <?php echo"<small>".$totalprice."</small>"; ?></li>
                     <li>Discount Fee: &nbsp; &nbsp; &nbsp;   <?php echo"<small>".$discounted_fee."</small>"; ?></li>
                    <?php

                  }
                ?>
                
                


        				<li>Total Amount: &nbsp; &nbsp; &nbsp;   <?php echo"<b>".$total."</b>"; ?></li>
        				<li>Total Deposit: &nbsp; &nbsp; &nbsp; &nbsp;<?php echo"<b>".$deposit."</b>"; ?></li>
        				<li>
        					<?php
        						if($category=='Daytour'){
        							?>
        								Pax: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        							<?php
        						}else{
        							?>
        								Additional Pax: &nbsp;&nbsp;&nbsp;
        							<?php

        						}
        					?>
        					<?php echo"<b>".$pax."</b>"; ?>
        				</li>
        				<li>Deadline:  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <?php echo"<b>".$validity."</b>"; ?></li>
        			</ul>
        		</div>
        		<div class="column is-one-third">
        			<div class="appointment-status">
        				<small>Balance due</small>  
        				<p style="font-size: 25px;
    						font-weight: bold;">
    						<?php echo"PHP ".$balance; ?>
    					</p>

        				<p> Status: <?php
        							echo"".$status."<br>";
        							if($balance == 0){
        								echo"<p style='font-size:13px''>Full Paid </p>";
        							}else{
        								echo"<p style='font-size:13px''>Partially Paid </p>";
        							}
        							
        							?>			
        				</p>
        			</div>
        		</div>
        		
        	</div>
        <h1 class="header">INSTRUCTIONS</h1> <br>
        <h2>Step 1: Save a copy</h2><br>
        <small> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* This receipt, or a screenshot of it, will serve as proof of appointment.</small> <br><Br>
        <h2>Step 2: Present the receipt to nature camp reception</h2><br>
        <small> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Payment of the remaining balance of an appointment is usually made after a stay at or daytour in a camp.</small> <br>
         <h1 class="header" style="text-decoration:underline;">General Rules</h1> <br>
         <small> <i class="fas fa-angle-double-right"></i> Pay the exact amount (balance) indicated Above after the staycation.</small><br><br>
         <small> <i class="fas fa-angle-double-right"></i> If you made a short payment by mistake, do not try to correct it by making another appointment receipt.</small><br><br>
         <small> <i class="fas fa-angle-double-right"></i> For product-specific inquiries or question regarding the status of your appointment, Please contact us directly.</small><br>
         <br><br>

        <p style="text-decoration:underline; font-size:15px">Disclaimer:</p> <p style="font-size:10px">Complete payment and failed to show up within the choose date is not the nature camp responsibility, by using our service, you agree to its Terms and Condition. This receipt page is for instructional purpose only.</p>
         
        </div>    
    </div>
    
</div>
</body>
</html>