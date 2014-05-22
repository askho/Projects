<?php
    require('config.php');
    $con = mysqli_connect($host, $user, $password, $database);
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }

$user = $_GET['userId'];

$request = "SELECT first, day FROM requests INNER JOIN profile ON requests.requesterid = profile.memberid WHERE requests.requesteeid = $user";

$result = mysqli_query($con, $request);
while ($row = mysqli_fetch_object($result)) {
	$obj[] = $row;
	}
	
echo json_encode($obj);
?>