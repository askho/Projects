<?php
    require('config.php');
    $con = mysqli_connect($host, $user, $password, $database);
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }

$request = "SELECT first,day FROM requests INNER JOIN profile ON requests.requesterid = profile.memberid";
//echo $request;
$result = mysqli_query("SELECT first,day FROM requests INNER JOIN profile ON requests.requesterid = profile.memberid", $con);
while ($row = mysqli_fetch_object($result)) {
	$obj[] = $row;
	}
	
echo json_encode($obj);
?>