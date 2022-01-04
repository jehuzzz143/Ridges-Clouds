<style type="text/css">
  .text-unavailable {
  color: red;
}
</style>

<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbase="db_ntrcamp";

$conn=new mysqli($servername, $username, $password, $dbase);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


 $date_compare = $_POST['date'];

    $sql = "SELECT * FROM tbl_price WHERE category = 'room' and imagename != '' ORDER BY imagename";
    $result = $conn->query($sql);
    $roomcount = mysqli_num_rows($result);
  
    $count = 1;
    $compare_all_room="";
    for ($x = 1; $x <= $roomcount; $x++) {
      $compare_all_room .= " || C".$x." ";
    }
      // echo '<script type="text/javascript">alert("'.$compare_all_room.'")</script>';


    $datesBooked = array();
    $dates = "";

    $sql = "SELECT `btype`,`bdate` FROM `tbl_booking` WHERE (`btype` = 'Overnight' OR `btype` = 'Both') AND (`bstatus` = 'Pending' OR `bstatus` = 'Confirmed' OR `bstatus` = 'CLOSE') AND `broom` = '$compare_all_room' GROUP BY `bdate`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

      while($row = $result->fetch_assoc()) {
      
          $dates = (string)$row['bdate'];

        array_push($datesBooked,$dates);
        
      }
    } 

    $js_array = json_encode($datesBooked);
    echo "var javascript_array = ". $js_array . ";\n";
?>

<script type="text/javascript"> 
   <?php

    $js_array = json_encode($datesBooked);
    $js_date =json_encode($date_compare);
     echo "var date_compare = ". $js_date . ";\n";
    echo "var javascript_array = ". $js_array . ";\n";

  ?>

  console.log(javascript_array);


  var available = document.getElementById("Date_Available");
  var unavailable = document.getElementById("Date_Unavailable");
  

if( $.inArray(date_compare, javascript_array) != -1){
  //unavailable 
  if(unavailable.classList.contains('hide')){
    unavailable.classList.remove('hide');
    unavailable.classList.add('unhide');
    if(available.classList.contains('unhide')){
      available.classList.remove('unhide');
      available.classList.add('hide');
    }
  }else{
    // unavailable.classList.add('hide');
    // unavailable.classList.remove('unhide');
  }
  unavailable.style.color = "#E74C3C";
  Swal.fire({       

      text: "Date is Unavailable",

      confirmButtonColor:'#E74C3C',
      confirmButtonText: 'OK',

      
    }).then((result) => {
    if (result.isConfirmed) {

      // location.href = 'index.php';
    }
  });
}else{
  //available
  if(available.classList.contains('hide')){
    available.classList.remove('hide');
    available.classList.add('unhide');
    if(unavailable.classList.contains('unhide')){
      unavailable.classList.remove('unhide');
      unavailable.classList.add('hide');
    }
  }else{
    // available.classList.add('hide');
    // available.classList.remove('unhide');
  }
  //color 
  available.style.color = "#145A32";
  Swal.fire({
  
        text: 'This Date is Available',
        confirmButtonColor:'#145A32',
        confirmButtonText: 'OK'
        
      }).then((result) => {
      if (result.isConfirmed) {

        // location.href = 'index.php';
      }
    });

}
</script>