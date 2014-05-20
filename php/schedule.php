<?php
    require('config.php');
    $con = mysqli_connect($host, $user, $password, $database);
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }
$memberid = $_GET['uid'];
$currentdays = $_GET['curday'];
$currinfo = $_GET['dayinf'];
$address = $_GET['caddress'];
$location = $_GET['newlocation'];
$depart = $_GET['departinf'];
$role = $_GET['role'];
//$memid = mysqli_query($con,"SELECT memberid FROM $currentdays");
	
	//if ($memberid = $memid) {

	//} else {
   $run1 = mysqli_query($con,"INSERT INTO " . $currentdays . " (arrivaltime, address, location, departtime, role)
   	VALUES ('$currinfo', '$address', '$location', '$depart', '$role')");
//}
    ?>