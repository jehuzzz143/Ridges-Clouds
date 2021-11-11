<!-- refund modal-->

<style type="text/css">
  /* The Close Button */
.close123 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close123:hover,
.close123:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<div id="myModalrefund" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content" style="width: 300px;">
    <span  class="close123">&times;</span>
    <form method="POST">
      <label class="label">Appoinment Referrence</label> <input type="text" name="rid" id="rid" readonly> </label>
      <hr>
      
      <p>Gcash Number:</p> <input type="text" id="gcashnumber" name="gcashnumber">


      <p>CUSTOMER DEPOSIT: </p><input type="text" readonly id="deposit" name="deposit">
      <p>EXPECTED REFUND: </p><input type="text" readonly id="refund" name="refund">
      <br><br><br>

      <i><small>Send money first before continuing</small></i>
        <hr>
      <button type="submit" name="refundsubmit_admin" style="float:right">Submit</button>

      <button type="button" onclick="refundclose()" style="float:right;margin-right:5px;">    Cancel</button>  
    </form>
  </div>

</div>
<!-- end of cancel modal-->


<script>

// Get the modal
var modal_refund= document.getElementById("myModalrefund");

// Get the button that opens the modal
var refund_btn = document.querySelectorAll(".refundBtn");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close123")[0];

// When the user clicks the button, open the modal 
for (var i = 0; i < refund_btn.length; i++) {
 refund_btn[i].onclick = function(e) {
    e.preventDefault();
    modal_refund.style.display = "block";

    $tr = $(this).closest('tr');
   var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
     
   console.log(data);
   document.getElementById("rid").value = data[0].replace("APP","");
   document.getElementById("deposit").value = data[13];
   var deposit = data[13];
   var refund = deposit * .50;
   document.getElementById("refund").value = refund;
   document.getElementById("gcashnumber").value = data[18];
  }
}

span1.onclick = function () {
  modal_refund.style.display = "none";
}

function refundclose(){
  modal_refund.style.display = "none";
}
</script>



<?php 
include "../dbconnection/conn.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';


if(isset($_POST['refundsubmit_admin'])){
 $ID = $_POST['rid'];
 $refund = $_POST['refund'];
 $deposit = $_POST['deposit'];
 $gcash = $_POST['gcashnumber'];
$sql = "UPDATE tbl_booking SET bstatus='Refund Request Approved', refund=$refund, balance=0 WHERE id='$ID'";

if ($conn->query($sql) === TRUE) {

    $sql = "SELECT bdeposit,customerID FROM tbl_booking WHERE ID='$ID'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $customerID = $row['customerID'];

    $pull = "SELECT Useremail FROM tbl_user WHERE ID='$customerID'";
    $get = $conn->query($pull);
    $column = mysqli_fetch_array($get);
    $to = $column['Useremail'];

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
            $mail->Subject = 'Refund Success';
            $mail->Body    = 'Refund successfully sent to '.$gcash.' number, the total refund is: '.$refund.' Pesos';
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
              ?>
          <script>
                alert("Unexpected Error");
          </script>
        <?php
        
        }


   $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
    VALUES ('$customerID' ,'Refund booking ID: $ID ', now(),'$fullname_admin', 'booking')";
    $conn->query($sql1);

  $sql11 = "DELETE FROM events WHERE appID='$ID'";
  $conn->query($sql11);


   ?>
     <script type="text/javascript">
          Swal.fire({

                  text: 'Refund Sent',
                  confirmButtonColor:'#3085d6',
                  confirmButtonText: 'OK'
                  
                }).then((result) => {
                if (result.isConfirmed) {


                  location.href = 'allbooking.php';
                  
                }
              })
        </script>
    <?php
} else {
  echo "Error updating record: " . $conn->error;
}


}

?>