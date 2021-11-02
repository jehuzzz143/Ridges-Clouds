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
      
      <p>Gcash Number: <b id="gcashnumber"> </b></p>



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
   document.getElementById("gcashnumber").innerHTML = data[18];
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

if(isset($_POST['refundsubmit_admin'])){
 $ID = $_POST['rid'];
 $refund = $_POST['refund'];
$sql = "UPDATE tbl_booking SET bstatus='Refund Request Approved', refund=$refund, balance=0 WHERE id='$ID'";

if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">
     Swal.fire('Successfull');   
  </script>

  <?php
   $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
    VALUES ('$customerID' ,'Refund booking ID: $ID ', now(),'$fullname_admin', 'booking')";
    $conn->query($sql1);

  $sql11 = "DELETE FROM events WHERE appID='$ID'";
  $conn->query($sql11);


  echo("<meta http-equiv='refresh' content='1'>");
} else {
  echo "Error updating record: " . $conn->error;
}


}

?>