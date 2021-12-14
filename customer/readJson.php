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


 $_SESSION['time_value_compare'] = $_POST['valuetime'];

// echo '<script type="text/javascript">alert("'.$_POST['valuetime'].'")</script>';

    $datesBooked = array();
    $dates = "";

    $sql = "SELECT `btype`,`bdate`,SUM(`bpax`) as 'TOTAL PAX' FROM `tbl_booking` WHERE (`btype` = 'Daytour' OR `btype` = 'Both') AND `bdaytourtime` LIKE '%{$_SESSION['time_value_compare']}%' AND (`bstatus` = 'Pending' OR `bstatus` = 'Confirmed' OR `bstatus` = 'CLOSE') GROUP BY `bdate`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

      while($row = $result->fetch_assoc()) {
         if($row['TOTAL PAX']>=30){
          $dates = (string)$row['bdate'];

        array_push($datesBooked,$dates);
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

     minDate: 2,
     beforeShowDay: function(date){     
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [ javascript_array.indexOf(string) == -1 ]
        }
});


    
    $(function () {
        $("#datepicker").datepicker({

        minDate: 2,
        beforeShowDay: function(date){     
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [ javascript_array.indexOf(string) == -1 ]
        }

        });
    });
</script>