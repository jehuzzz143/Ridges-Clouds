<!-- refund modal-->
<div id="myModalrefund" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content" style="width: 300px;">
    <span  class="close123">&times;</span>
    <form method="POST">
      <label class="label">Appointment ID</label> <input type="text" name="" id="" readonly> </label>
      <hr>
      <p>You want to cancel this appointment?</p>
      <hr>

      
      <button type="submit" name="appCancel" style="float:right">Yes</button>

      <button type="button" onclick="appClose()" style="float:right;margin-right:5px;">    Cancel</button>  
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
var span1 = document.querySelectorAll(".close123");

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

   // document.getElementById("aid").value = data[0];
  }
}
</script>