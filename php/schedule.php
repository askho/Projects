<?php
    require('config.php');
    $con = mysqli_connect($host, $user, $password, $database);
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }
//   $run = mysqli_query($con,"INSERT INTO " . $_GET['day'] . " (address)
 //  	VALUES ('homely')");
$currentdays = $_GET['curday'];
$currinfo = $_GET['dayinf'];
$address = $_GET['caddress'];
//echo $regSubCodeArray;

   $run1 = mysqli_query($con,"INSERT INTO " . $currentdays . " (arrivaltime, address)
   	VALUES ('$currinfo', '$address')");
#}
    ?>