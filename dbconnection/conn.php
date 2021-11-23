<!DOCTYPE html>
<html>
<style type="text/css">
  
  .sidebarr{
    overflow: scroll;
  }
</style>
<head>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> -->
     <link rel="apple-touch-icon" sizes="180x180" href="../title/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../title/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../title/favicon-16x16.png">
<link rel="manifest" href="../title/site.webmanifest">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>
<body>

</body>
</html>
<?php
date_default_timezone_set('Asia/Manila');

// $servername="sql205.unaux.com";
// $username="unaux_29489773";
// $password="4c75qbn4hjbc8";
// $dbase="unaux_29489773_db_ntrcamp";

$servername="localhost";
$username="root";
$password="";
$dbase="db_ntrcamp";

$conn=new mysqli($servername, $username, $password, $dbase);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>