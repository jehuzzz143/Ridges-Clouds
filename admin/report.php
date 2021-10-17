
<?php
$servername="localhost";
$username="root";
$password="";
$dbase="db_ntrcamp";

$conn=new mysqli($servername, $username, $password, $dbase);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
     // Initialize the session
   session_start();
  
     //Check if the user is logged in, if not then redirect him to login page
     if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
         // When Not Login Return to this Page
           header("refresh:0; ../login.php");
         exit;


     }else if(isset($_SESSION['ID'])){
            $cID = $_SESSION['ID'];
            
         
        
            
            $getrecord = mysqli_query($conn,"SELECT * FROM tbl_user WHERE ID  ='$cID'");
            while($rowedit = mysqli_fetch_assoc($getrecord))
            {
                $usertype = $rowedit['Usertype'];
                $customerID = $rowedit['ID'];
                   $image =$rowedit['Userimage'];
                    $fname = $rowedit['Userfname']." ".$rowedit['Userlname'];
                  $path= "upload/profilepicture/".$image;
                  $fullname_admin = $rowedit['Userfname'].", ".$rowedit['Userlname'];

               

            }
     }

$start = $_GET['start'];
$end = $_GET['end'];



// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 



// Excel file name for download 
$fileName =  date("F  Y ", strtotime($start)) . "to " . date("F  Y ", strtotime($end)) ."Sales" . ".xls"; 
 

// Column names 
$fields = array('App No.', 'Customer', 'Date', 'Type', 'Price', 'Deposit'); 

// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
$totalMoney = 0;
// Fetch records from database 
$query = $conn->query("SELECT * FROM tbl_booking WHERE bstatus = 'Completed' AND btime_in BETWEEN '$start' AND '$end'"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
    	$totalMoney += $row['bdeposit'];
    	 $cstmrId = $row['customerID'];
        $cstmrId = str_replace(" ","",$cstmrId);
        $costumerDetails = mysqli_query($conn,"SELECT Userlname, Userfname FROM tbl_user WHERE ID='$cstmrId'");
        $costumerRow= mysqli_fetch_assoc($costumerDetails);

       
        $lineData = array($row['ID'], $costumerRow['Userfname']." ".$costumerRow['Userlname'], date("F jS, Y ", strtotime($row['btime_in'])), $row['btype'], $row['bprice'], $row['bdeposit'],); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
		$lineData = array('Total', "","", "", "", $totalMoney,); 
        array_walk($lineData, 'filterData');
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
        $sql1 = "INSERT INTO tbl_audit (UserID, Description, Date_edit, Name, type)
        VALUES ('$customerID' ,'Generate sales report from: $start to $end', now(),'$fullname_admin', 'System')";
        $conn->query($sql1);
// Render excel data 
echo $excelData; 
 
exit;
 




// $sql="SELECT * FROM tbl_booking WHERE bstatus = 'Completed' AND btime_in BETWEEN '$startDateReport' AND '$endDateReport'";
// $res=mysqli_query($conn,$sql);
// $html='<table><tr><td>Name</td><td>City</td><td>Email</td></tr>';
// while($row=mysqli_fetch_assoc($res)){
// 	$html.='<tr><td>'.$row['name'].'</td><td>'.$row['city'].'</td><td>'.$row['email'].'</td></tr>';
// }
// $html.='</table>';
// header('Content-Type:application/xls');
// header('Content-Disposition:attachment;filename=report.xls');
// echo $html;
?>