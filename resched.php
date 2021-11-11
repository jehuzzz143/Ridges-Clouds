
   <!-- DATE PICKER -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- refund modal-->
<div id="myModalresched" class="modal fade-in">

  <!-- Modal content -->
  <div class="modal-content" style="width: 350px;">
    <span  class="close1234">&times;</span>
    <form method="POST" >
      <label class="label">Appoinment Referrence</label> <input type="text" name="resched_id" id="resched_id" readonly> </label>
      <hr>
  
      <label id="catagory_label">Category</label>
      <input type="text" name="resched_category" id="resched_category" readonly>

      <input type="hidden" name="resched_status" id="resched_status">
      <label class="label" id="timearrival_label" >Time of arrival:</label>
       <select name="resched_time_in" id="resched_time_in" onchange="time()"required>
                <option value="" selected>Select time</option>
                <option value="07:00 am to 10:00 am" >7 am to 10 am</option>
                <option value="10:00 am to 13:00 pm" >10 am to 1 pm</option>
                <option value="13:00 pm to 16:00 pm" >1 pm to 4 pm</option>
                <option value="16:00 pm to 19:00 pm" >4 pm to 7 pm</option>
       </select>

       <label id="resched_day">days</label>
       <input type="text" name="resched_day_count" id="resched_day_count" readonly>



      <label class="label" >Pick Date:</label>
      <input type="text" readonly id="datepicker" name="daytourdate"  required placeholder="mm/dd/yyyy">
      <div id="result"></div>

    
      
      <button type="submit" name="daytour_resched" id="daytour_resched" style="float:right">Submit</button>
      <button type="submit" name="overnight_resched" id="overnight_resched" style="float:right">Submit</button>
      <button type="button" onclick="reschedclose()" style="float:right;margin-right:5px;">    Cancel</button>  
    </form>
  </div>

</div>
<!-- end of cancel modal-->


<script>

// Get the modal
var modal_resched= document.getElementById("myModalresched");

// Get the button that opens the modal
var refund_resched = document.querySelectorAll(".reschedBtn");

// Get the <span> element that closes the modal
var span12 = document.getElementsByClassName("close1234")[0];

// When the user clicks the button, open the modal 
for (var i = 0; i < refund_resched.length; i++) {
 refund_resched[i].onclick = function(e) {
    e.preventDefault();
    modal_resched.style.display = "block";

    $tr = $(this).closest('tr');
   var data = $tr.children("td").find('p').map(function(){
        return $(this).text();
      }).get();


     
   console.log(data);
   document.getElementById("resched_id").value = data[0].replace("APP","");
   document.getElementById("resched_category").value = data[2];
   
    if(data[3]=='07:00 am to 10:00 am'){
      document.getElementById("resched_time_in").selectedIndex = "1";

   }else if(data[3]=='10:00 am to 13:00 pm'){
    document.getElementById("resched_time_in").selectedIndex = "2";

   }else if(data[3]=='13:00 pm to 16:00 pm'){
    document.getElementById("resched_time_in").selectedIndex = "3";

   }else{
    document.getElementById("resched_time_in").selectedIndex = "4";

   }
   document.getElementById("datepicker").value = data[4];

   document.getElementById("resched_status").value = data[5];

//HIDING ELEMENTS
   if(data[2]=='Daytour'){
    
    document.getElementById("timearrival_label").style.display="block";
    document.getElementById("resched_time_in").style.display="block";
    document.getElementById("resched_day_count").style.display="none";
    document.getElementById("daytour_resched").style.display="block"
    document.getElementById("overnight_resched").style.display="none";
    document.getElementById("resched_day").style.display="none";

   var category =  data[2];


    var time_value =  data[3];
    $.post('readJson1.php',{valuetime:time_value,category:category},
    function(data1){
      $('#result').html(data1)
    });

   }else{
    document.getElementById("resched_day").style.display="block";
    document.getElementById("timearrival_label").style.display="none";
    document.getElementById("resched_time_in").style.display="none";
    document.getElementById("resched_day_count").style.display="block";
    document.getElementById("daytour_resched").style.display="none"
    document.getElementById("overnight_resched").style.display="block"

    var time_in = data[6];
    var time_out = data[7]; 
    const date1 = new Date(time_in);
    const date2 = new Date(time_out);

     // One day in milliseconds
    const oneDay = 1000 * 60 * 60 * 24;

    // Calculating the time difference between two dates
    const diffInTime = date2.getTime() - date1.getTime();

    // Calculating the no. of days between two dates
    const diffInDays = Math.round(diffInTime / oneDay);

    document.getElementById("resched_day_count").value = diffInDays;


   var category =  data[2];
    var room =  data[8];

    var time_value =  data[3];
    $.post('readJson1.php',{valuetime:time_value,category:category,room:room},
    function(data1){
      $('#result').html(data1)
    });
   }

  







  
  }
}

function time(){
    var time_value =  document.getElementById("resched_time_in").value;
    var category = document.getElementById("resched_category").value;

    $.post('readJson1.php',{valuetime:time_value,category:category},
    function(data1){
      $('#result').html(data1)
    });

  }

span12.onclick = function () {
  modal_resched.style.display = "none";
}

function reschedclose(){
  modal_resched.style.display = "none";
}




</script>
<?php 
if(isset($_POST['daytour_resched'])){
  $resched_time_in  = $_POST['resched_time_in'];
  $resched_id       = $_POST['resched_id'];
  $resched_status   = $_POST['resched_status'];
  $daytourdate      = $_POST['daytourdate'];


  $daytourdate      = date("Y-m-d",strtotime($daytourdate));
  // $time_in = $daytourdate
// echo '<script type="text/javascript">alert("'.$daytourdate.'")</script>';
  if($resched_time_in == '07:00 am to 10:00 am'){
    $timein = $daytourdate .'T07:00';
    $timeout = $daytourdate .'T10:00';
  }else if($resched_time_in == '10:00 am to 13:00 pm'){
    $timein = $daytourdate .'T10:00';
    $timeout = $daytourdate .'T13:00';
  }else if($resched_time_in == '13:00 pm to 16:00 pm'){
    $timein = $daytourdate .'T13:00';
    $timeout = $daytourdate .'T16:00';
  }else{
    $timein = $daytourdate .'T16:00';
    $timeout = $daytourdate .'T19:00';
  }


  if($resched_status =='Pending'){

    $sql = "UPDATE tbl_booking SET bdate='$daytourdate', bdaytourtime='$resched_time_in', btime_in ='$timein', btime_out ='$timeout'  WHERE ID='$resched_id'";
    if ($conn->query($sql) === TRUE) {
      ?>
        <script type="text/javascript">
          Swal.fire({

                  icon: 'success', 
                  text: 'Self Rescheduled Success',
                  confirmButtonColor:'#3085d6',
                  confirmButtonText: 'OK'
                  
                }).then((result) => {
                if (result.isConfirmed) {


                  location.href = 'user.php';
                  
                }
              })
        </script>
      <?php
    }else{
      echo "Error updating record: " . $conn->error;
    }
  }else if($resched_status == 'Confirmed'){
    $sql = "UPDATE tbl_booking SET bdate='$daytourdate', bdaytourtime='$resched_time_in', btime_in ='$timein', btime_out ='$timeout'  WHERE ID='$resched_id'";
    if ($conn->query($sql) === TRUE) {
    $sql = "UPDATE events SET  start_event ='$timein', end_event ='$timeout'  WHERE appID='$resched_id'";
     $conn->query($sql) === TRUE;

      ?>
        <script type="text/javascript">
          Swal.fire({

                  icon: 'success', 
                  text: 'Self Rescheduled Success',
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





}else if(isset($_POST['overnight_resched'])){
$resched_id       = $_POST['resched_id'];
$day = $_POST['resched_day_count'];
$date = $_POST['daytourdate'];
$date      = date("Y-m-d",strtotime($date));
$resched_status   = $_POST['resched_status'];
$timein = $date."T14:00";
$tomoorow_time = date("Y-m-d",strtotime($date." + $day days"));
$timeout = $tomoorow_time."T12:00";

 // echo '<script type="text/javascript">alert("'.$timeout.'")</script>';
  if($resched_status == 'Pending'){

 
    $sql = "UPDATE tbl_booking SET bdate='$date',  btime_in ='$timein', btime_out ='$timeout'  WHERE ID='$resched_id'";
      if ($conn->query($sql) === TRUE) {
        ?>
          <script type="text/javascript">
          Swal.fire({

                  icon: 'success', 
                  text: 'Self Rescheduled Success',
                  confirmButtonColor:'#3085d6',
                  confirmButtonText: 'OK'
                  
                }).then((result) => {
                if (result.isConfirmed) {


                  location.href = 'user.php';
                  
                }
              })
        </script>
        <?php
      }else{
        echo "Error updating record: " . $conn->error;
      }

  }else if($resched_status == 'Confirmed'){
    $sql = "UPDATE tbl_booking SET bdate='$date',  btime_in ='$timein', btime_out ='$timeout'  WHERE ID='$resched_id'";
    if ($conn->query($sql) === TRUE) {
      $sql = "UPDATE events SET  start_event ='$timein', end_event ='$timeout'  WHERE appID='$resched_id'";
      $conn->query($sql) === TRUE;
        ?>
          <script type="text/javascript">
          Swal.fire({

                  icon: 'success', 
                  text: 'Self Rescheduled Success',
                  confirmButtonColor:'#3085d6',
                  confirmButtonText: 'OK'
                  
                }).then((result) => {
                if (result.isConfirmed) {


                  location.href = 'user.php';
                  
                }
              })
        </script>
        <?php
      }else{
        echo "Error updating record: " . $conn->error;
      }
  }




}


?>



 
    <!--     <script type="text/javascript">
          Swal.fire('Any fool can use a computer');
        </script>
       -->