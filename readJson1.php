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


 $time_value_compare = $_POST['valuetime'];
 $category = $_POST['category'];
 if($category == 'Overnight'){
    $room = $_POST['room'];
 }
// echo '<script type="text/javascript">alert("'.$category.'")</script>';
// echo '<script type="text/javascript">alert("'.$time_value_compare.'")</script>';
 // echo '<script type="text/javascript">alert("'.$room.'")</script>';

    $datesBooked = array();
    $dates = "";



    if($category == 'Daytour'){

    $sql = "SELECT `btype`,`bdate`,SUM(`bpax`) as 'TOTAL PAX' FROM `tbl_booking` WHERE `btype` = '$category' AND `bdaytourtime` = '$time_value_compare' AND (`bstatus` = 'Pending' OR `bstatus` = 'Confirmed') GROUP BY `bdate`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      while($row = $result->fetch_assoc()) {
         if($row['TOTAL PAX']==30){
          $dates = (string)$row['bdate'];

        array_push($datesBooked,$dates);
        }      
      }
    } 

    }else{

$sql = "SELECT `btype`,`bdate`,GROUP_CONCAT(`broom`) as 'room' FROM `tbl_booking` WHERE `btype` = 'Overnight' AND (`bstatus` = 'Pending' OR `bstatus` = 'Confirmed')  GROUP BY `bdate`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      while($row = $result->fetch_assoc()) {
         if(strstr($row['room'],$room)){
            
          $dates = (string)$row['bdate'];

        array_push($datesBooked,$dates);
        }else if(strstr($room,$row['room'])){
           $dates = (string)$row['bdate'];

        array_push($datesBooked,$dates); 
        }
      
      }
    } 

    }

   



?>

<script type="text/javascript"> 
  <?php

    $js_array = json_encode($datesBooked);
    echo "var javascript_array = ". $js_array . ";\n";

  ?>
console.log(javascript_array);

var date = new Date();
var currentMonth = date.getMonth();
var currentDate = date.getDate();
var currentYear = date.getFullYear();



$("#datepicker").datepicker({

     minDate: 3,
     beforeShowDay: function(date){     
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [ javascript_array.indexOf(string) == -1 ]
        }

    
});



    $(function () {
        $("#datepicker").datepicker({

           
        beforeShowDay: function(date){     
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [ javascript_array.indexOf(string) == -1 ]
        }

        });
    });
</script>