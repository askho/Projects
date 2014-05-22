<?php
    require('config.php');
    $con = mysqli_connect($host, $user, $password, $database);
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }
<<<<<<< HEAD
//   $run = mysqli_query($con,"INSERT INTO " . $_GET['day'] . " (address)
 //  	VALUES ('homely')");
$currentdays = $_GET['curday'];
$currinfo = $_GET['dayinf'];
$address = $_GET['caddress'];
//echo $regSubCodeArray;

   $run1 = mysqli_query($con,"INSERT INTO " . $currentdays . " (arrivaltime, address)
   	VALUES ('$currinfo', '$address')");
#}
=======
$membersid = $_GET['uid'];
$currentdays = $_GET['curday'];
$currinfo = $_GET['dayinf'];
$address = $_GET['caddress'];
$location = $_GET['newlocation'];
$depart = $_GET['departinf'];
$role = $_GET['role'];
$memid = "SELECT memberid FROM $currentdays WHERE memberid = $membersid";
    $result = mysqli_query($con, $memid);
    $numRows = mysqli_num_rows($result);
if ($numRows != 0) {
mysqli_query($con, "UPDATE $currentdays
SET arrivaltime='$currinfo', address='$address', location='$location', departtime='$depart', role='$role'
WHERE memberid='$membersid'");

	} else {
   $run1 = mysqli_query($con,"INSERT INTO $currentdays (arrivaltime, address, location, departtime, role, memberid)
   	VALUES ('$currinfo', '$address', '$location', '$depart', '$role', '$membersid')");
}
>>>>>>> master
    ?>