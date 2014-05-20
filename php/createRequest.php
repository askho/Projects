<?php
	$requesteerole = $_GET['requesteerole'];
	$requesterid = $_GET['requesterid'];
	$requesteeid = $_GET['requesteeid'];
	$day = $_GET['day'];
	$direction = $_GET['direction'];
	$location = $_GET['location'];
	$address = $_GET['address'];
    require('config.php');
    $con = mysqli_connect($host, $user, $password, $database);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }
    $request = "INSERT INTO requests (requesteerole, requesterid, requesteeid,day,direction,location,address)"
     ." VALUES (\"$requesteerole\", \"$requesterid\", \"$requesteeid\", \"$day\", \"$direction\", \"$location\", \"$address\")";
    $result = mysqli_query($con,$request);
?>