<script type="text/javascript">

</script>

<!-- refund modal-->
<div id="myModalrefund" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content" style="width: 450px;">
    <span  class="close123">&times;</span>
    <form method="POST" >
      <label class="label">Appoinment Referrence</label> <input type="text" name="rid" id="rid" readonly> </label>
      <hr>
  
      <p>Please confirm that you would like to <b>cancel</b> this reservation and receive a refund.</p>
      <br>
      <label>Gcash Number:</label>
      <input type="text" name="gcash" id="gcash"  onkeypress='validate(event)' placeholder="09584569854" maxlength=11  pattern="[0-9]{11}" required>
      <span id="phonetext"></span>
    <br>
      <p>YOUR DEPOSIT </p><input type="text" readonly name="" id="deposit">
      <p>YOUR EXPECTED REFUND  (50%)</p><input type="text" readonly name="" id="expected_refund">

      <small><i>If you do not receive a response within 1-3 days, please message us on Facebook: Clouds & Ridges</i></small>

        <hr>
      <button type="submit" name="refundsubmit" style="float:right">Submit</button>

      <button type="button" onclick="refundclose()" style="float:right;margin-right:5px;">    Cancel</button>
       <br>

    </form>
  </div>

</div>
<!-- end of cancel modal-->


<script>

function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}


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
   document.getElementById("deposit").value = data[12];
   var money12 = data[12].trim();
   var refund_money = money12 * .50;

  document.getElementById("expected_refund").value = refund_money;


  
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
include "dbconnection/conn.php";

if(isset($_POST['refundsubmit'])){
 $ID = $_POST['rid'];
 $gcash =$_POST['gcash'];
 if(substr($gcash, 0, 2)!='09'){
  echo '<script type="text/javascript">alert("'.substr($gcash, 0, 2).'")</script>';
  ?>
    <script type="text/javascript">

       Swal.fire('Please enter realistic phone number!');   
    </script>
    <?php
 }else{


  $sql = "UPDATE tbl_booking SET bstatus='Refund Requested', gcash='$gcash' WHERE id='$ID'";

  if ($conn->query($sql) === TRUE) {
    ?>
     <script type="text/javascript">
          Swal.fire({

                  icon: 'success', 
                  text: 'Refund Request Sent',
                  confirmButtonColor:'#3085d6',
                  confirmButtonText: 'OK'
                  
                }).then((result) => {
                if (result.isConfirmed) {


                  location.href = 'user.php';
                  
                }
              })
        </script>
    <?php
 
  } else {
    echo "Error updating record: " . $conn->error;
  }

}
}

?>