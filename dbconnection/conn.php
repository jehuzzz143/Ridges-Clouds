<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>
<body>

</body>
</html>
<?php
date_default_timezone_set('Asia/Manila');

$servername="localhost";
$username="root";
$password="";
$dbase="db_ntrcamp";

$conn=new mysqli($servername, $username, $password, $dbase);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>